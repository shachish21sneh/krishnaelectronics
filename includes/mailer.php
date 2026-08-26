<?php
/**
 * Krishna Electronics - Pure PHP SMTP Mailer Service
 * Zero-dependency, secure SSL/TLS authenticated email dispatcher
 */

if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/config.php';
}

class KrishnaMailer
{
    /**
     * Send an enquiry / quote notification email
     *
     * @param array $data Form data array
     * @return array ['success' => bool, 'message' => string]
     */
    public static function sendEnquiryNotification(array $data): array
    {
        $subject = "New " . ($data['form_type'] ?? 'Lead') . " from " . ($data['name'] ?? 'Website Visitor') . " - " . SITE_NAME;
        $htmlBody = self::buildHtmlTemplate($data);
        $textBody = self::buildPlainTextTemplate($data);
        
        $to = defined('NOTIFICATION_RECIPIENT_EMAIL') ? NOTIFICATION_RECIPIENT_EMAIL : 'krishelegzp@gmail.com';
        $fromEmail = defined('SMTP_FROM_EMAIL') ? SMTP_FROM_EMAIL : 'info@krishnaelectronics.org';
        $fromName = defined('SMTP_FROM_NAME') ? SMTP_FROM_NAME : 'Krishna Electronics';
        $replyTo = (!empty($data['email']) && filter_var($data['email'], FILTER_VALIDATE_EMAIL)) ? $data['email'] : $fromEmail;

        return self::sendSmtpMail($to, $subject, $htmlBody, $textBody, $fromEmail, $fromName, $replyTo);
    }

    /**
     * Raw SMTP Mail Sender via SSL/TLS Socket
     */
    public static function sendSmtpMail(
        string $toEmail,
        string $subject,
        string $htmlContent,
        string $textContent,
        string $fromEmail,
        string $fromName,
        string $replyToEmail
    ): array {
        $host = defined('SMTP_HOST') ? SMTP_HOST : 'mail.krishnaelectronics.org';
        $port = defined('SMTP_PORT') ? SMTP_PORT : 465;
        $secure = defined('SMTP_SECURE') ? SMTP_SECURE : 'ssl';
        $user = defined('SMTP_USER') ? SMTP_USER : 'info@krishnaelectronics.org';
        $pass = defined('SMTP_PASS') ? SMTP_PASS : '';

        $socketHost = ($secure === 'ssl') ? ('ssl://' . $host) : $host;
        $timeout = 15;

        // Open socket connection
        $socket = @fsockopen($socketHost, $port, $errno, $errstr, $timeout);
        if (!$socket) {
            error_log("KrishnaMailer Socket Connect Error: {$errstr} ({$errno})");
            return [
                'success' => false,
                'message' => "Could not connect to SMTP server: {$errstr} ({$errno})"
            ];
        }

        stream_set_timeout($socket, $timeout);

        // 1. Read Greeting
        $res = self::readResponse($socket);
        if (substr($res, 0, 3) !== '220') {
            fclose($socket);
            return ['success' => false, 'message' => "SMTP Greeting Error: {$res}"];
        }

        // 2. Send EHLO
        self::sendCommand($socket, "EHLO " . ($_SERVER['SERVER_NAME'] ?? 'krishnaelectronics.org'));
        $res = self::readResponse($socket);
        if (substr($res, 0, 3) !== '250') {
            fclose($socket);
            return ['success' => false, 'message' => "SMTP EHLO Error: {$res}"];
        }

        // STARTTLS if configured on port 587
        if ($secure === 'tls' && $port == 587) {
            self::sendCommand($socket, "STARTTLS");
            $res = self::readResponse($socket);
            if (substr($res, 0, 3) === '220') {
                stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT);
                self::sendCommand($socket, "EHLO " . ($_SERVER['SERVER_NAME'] ?? 'krishnaelectronics.org'));
                self::readResponse($socket);
            }
        }

        // 3. AUTH LOGIN
        self::sendCommand($socket, "AUTH LOGIN");
        $res = self::readResponse($socket);
        if (substr($res, 0, 3) !== '334') {
            fclose($socket);
            return ['success' => false, 'message' => "SMTP AUTH Initialization Error: {$res}"];
        }

        // Send Username (base64)
        self::sendCommand($socket, base64_encode($user));
        $res = self::readResponse($socket);
        if (substr($res, 0, 3) !== '334') {
            fclose($socket);
            return ['success' => false, 'message' => "SMTP Username Error: {$res}"];
        }

        // Send Password (base64)
        self::sendCommand($socket, base64_encode($pass));
        $res = self::readResponse($socket);
        if (substr($res, 0, 3) !== '235') {
            fclose($socket);
            return ['success' => false, 'message' => "SMTP Authentication Failed: {$res}"];
        }

        // 4. MAIL FROM
        self::sendCommand($socket, "MAIL FROM:<{$fromEmail}>");
        $res = self::readResponse($socket);
        if (substr($res, 0, 3) !== '250') {
            fclose($socket);
            return ['success' => false, 'message' => "SMTP MAIL FROM Error: {$res}"];
        }

        // 5. RCPT TO
        self::sendCommand($socket, "RCPT TO:<{$toEmail}>");
        $res = self::readResponse($socket);
        if (substr($res, 0, 3) !== '250' && substr($res, 0, 3) !== '251') {
            fclose($socket);
            return ['success' => false, 'message' => "SMTP RCPT TO Error: {$res}"];
        }

        // 6. DATA
        self::sendCommand($socket, "DATA");
        $res = self::readResponse($socket);
        if (substr($res, 0, 3) !== '354') {
            fclose($socket);
            return ['success' => false, 'message' => "SMTP DATA Start Error: {$res}"];
        }

        // 7. Compose MIME Message
        $boundary = '=_KE_' . md5(uniqid(time(), true));
        $encodedSubject = '=?UTF-8?B?' . base64_encode($subject) . '?=';
        $encodedFromName = '=?UTF-8?B?' . base64_encode($fromName) . '?=';

        $headers = [];
        $headers[] = "Date: " . date('r');
        $headers[] = "From: {$encodedFromName} <{$fromEmail}>";
        $headers[] = "To: <{$toEmail}>";
        $headers[] = "Reply-To: <{$replyToEmail}>";
        $headers[] = "Subject: {$encodedSubject}";
        $headers[] = "X-Mailer: KrishnaElectronics-Mailer/2.0";
        $headers[] = "MIME-Version: 1.0";
        $headers[] = "Content-Type: multipart/alternative; boundary=\"{$boundary}\"";

        $messageBody = implode("\r\n", $headers) . "\r\n\r\n";

        // Plain Text Part
        $messageBody .= "--{$boundary}\r\n";
        $messageBody .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $messageBody .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
        $messageBody .= $textContent . "\r\n\r\n";

        // HTML Part
        $messageBody .= "--{$boundary}\r\n";
        $messageBody .= "Content-Type: text/html; charset=UTF-8\r\n";
        $messageBody .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
        $messageBody .= $htmlContent . "\r\n\r\n";

        $messageBody .= "--{$boundary}--\r\n";
        $messageBody .= ".\r\n";

        // Send Message Body
        fputs($socket, $messageBody);
        $res = self::readResponse($socket);
        if (substr($res, 0, 3) !== '250') {
            fclose($socket);
            return ['success' => false, 'message' => "SMTP DATA Send Error: {$res}"];
        }

        // 8. QUIT
        self::sendCommand($socket, "QUIT");
        fclose($socket);

        return [
            'success' => true,
            'message' => 'Email sent successfully via SMTP.'
        ];
    }

    /**
     * Send SMTP command
     */
    private static function sendCommand($socket, string $command): void
    {
        fputs($socket, $command . "\r\n");
    }

    /**
     * Read multi-line SMTP server response
     */
    private static function readResponse($socket): string
    {
        $response = '';
        while ($line = fgets($socket, 512)) {
            $response .= $line;
            // In RFC 5321, last line has a space after status code (e.g. "250 OK" vs "250-SIZE")
            if (strlen($line) >= 4 && substr($line, 3, 1) === ' ') {
                break;
            }
        }
        return trim($response);
    }

    /**
     * Build Premium HTML Email Template
     */
    private static function buildHtmlTemplate(array $data): string
    {
        $refId = htmlspecialchars($data['id'] ?? 'KE-'.date('Ymd').'-'.rand(1000,9999));
        $timestamp = htmlspecialchars($data['timestamp'] ?? date('d M Y, h:i A'));
        $formType = htmlspecialchars($data['form_type'] ?? 'Customer Enquiry');
        $name = htmlspecialchars($data['name'] ?? 'N/A');
        $mobile = htmlspecialchars($data['mobile'] ?? 'N/A');
        $email = htmlspecialchars($data['email'] ?? 'N/A');
        $city = htmlspecialchars($data['city'] ?? 'N/A');
        $product = htmlspecialchars($data['product'] ?? 'General Inquiry');
        $quantity = htmlspecialchars($data['quantity'] ?? '1');
        $message = nl2br(htmlspecialchars($data['message'] ?? 'No additional notes provided.'));
        $firmName = !empty($data['firm_name']) ? htmlspecialchars($data['firm_name']) : '';
        $businessType = !empty($data['business_type']) ? htmlspecialchars($data['business_type']) : '';
        $ip = htmlspecialchars($data['ip'] ?? '127.0.0.1');

        $cleanMobile = preg_replace('/[^0-9]/', '', $mobile);
        if (strlen($cleanMobile) === 10) {
            $cleanMobile = '91' . $cleanMobile;
        }
        $whatsappLink = 'https://wa.me/' . $cleanMobile . '?text=' . urlencode("Hello {$name}, thank you for contacting Krishna Electronics regarding your enquiry ({$refId}).");

        ob_start();
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>New Enquiry Notification</title>
<style>
  body { margin: 0; padding: 0; background-color: #f1f5f9; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; color: #1e293b; line-height: 1.6; }
  .wrapper { width: 100%; max-width: 650px; margin: 20px auto; background: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.08); border: 1px solid #e2e8f0; }
  .header { background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%); padding: 30px; text-align: center; color: #ffffff; }
  .header h1 { margin: 0 0 6px 0; font-size: 24px; font-weight: 700; letter-spacing: -0.5px; color: #ffffff; }
  .header p { margin: 0; font-size: 13px; color: #93c5fd; font-weight: 500; }
  .badge { display: inline-block; padding: 6px 14px; background: #dbeafe; color: #1e40af; border-radius: 20px; font-size: 12px; font-weight: 700; text-transform: uppercase; margin-top: 15px; letter-spacing: 0.5px; }
  .content { padding: 30px; }
  .lead-summary { background: #f8fafc; border-left: 4px solid #2563eb; border-radius: 6px; padding: 15px 20px; margin-bottom: 25px; }
  .lead-summary p { margin: 4px 0; font-size: 14px; }
  .lead-summary strong { color: #0f172a; }
  .table-details { width: 100%; border-collapse: collapse; margin-bottom: 25px; }
  .table-details th { text-align: left; padding: 12px 14px; font-size: 13px; font-weight: 600; color: #475569; background: #f8fafc; border-bottom: 1px solid #e2e8f0; width: 35%; }
  .table-details td { padding: 12px 14px; font-size: 14px; color: #0f172a; border-bottom: 1px solid #e2e8f0; }
  .btn-group { text-align: center; margin: 30px 0 10px 0; }
  .btn { display: inline-block; padding: 12px 24px; text-decoration: none; font-size: 14px; font-weight: 600; border-radius: 8px; margin: 0 6px 10px 6px; }
  .btn-whatsapp { background-color: #25D366; color: #ffffff !important; }
  .btn-call { background-color: #2563eb; color: #ffffff !important; }
  .btn-email { background-color: #0f172a; color: #ffffff !important; }
  .footer { background: #f8fafc; padding: 20px; text-align: center; font-size: 12px; color: #64748b; border-top: 1px solid #e2e8f0; }
  .footer a { color: #2563eb; text-decoration: none; }
</style>
</head>
<body>
  <div class="wrapper">
    <div class="header">
      <h1>Krishna Electronics</h1>
      <p>Quality Products | Trusted Service | Reliable Solutions</p>
      <div class="badge"><?php echo $formType; ?></div>
    </div>

    <div class="content">
      <div class="lead-summary">
        <p><strong>Reference ID:</strong> <?php echo $refId; ?></p>
        <p><strong>Received At:</strong> <?php echo $timestamp; ?></p>
        <p><strong>Source:</strong> <?php echo $formType; ?> (krishnaelectronics.org)</p>
      </div>

      <h3 style="font-size: 16px; margin: 0 0 15px 0; color: #0f172a; border-bottom: 2px solid #e2e8f0; padding-bottom: 8px;">
        Customer Contact Details
      </h3>

      <table class="table-details">
        <tr>
          <th>Customer Name</th>
          <td><strong><?php echo $name; ?></strong></td>
        </tr>
        <tr>
          <th>Mobile Number</th>
          <td>
            <a href="tel:<?php echo $mobile; ?>" style="color: #2563eb; font-weight: 700; text-decoration: none;">
              <?php echo $mobile; ?>
            </a>
          </td>
        </tr>
        <tr>
          <th>Email Address</th>
          <td>
            <?php if ($email !== 'N/A'): ?>
              <a href="mailto:<?php echo $email; ?>" style="color: #2563eb; text-decoration: none;">
                <?php echo $email; ?>
              </a>
            <?php else: ?>
              <span style="color: #94a3b8;">Not Provided</span>
            <?php endif; ?>
          </td>
        </tr>
        <tr>
          <th>City / Location</th>
          <td><?php echo $city; ?></td>
        </tr>
        <?php if (!empty($firmName)): ?>
        <tr>
          <th>Firm / Shop Name</th>
          <td><strong><?php echo $firmName; ?></strong></td>
        </tr>
        <?php endif; ?>
        <?php if (!empty($businessType)): ?>
        <tr>
          <th>Business Profile</th>
          <td><?php echo $businessType; ?></td>
        </tr>
        <?php endif; ?>
        <tr>
          <th>Product Required</th>
          <td><strong style="color: #1e3a8a;"><?php echo $product; ?></strong></td>
        </tr>
        <tr>
          <th>Quantity / Volume</th>
          <td><?php echo $quantity; ?></td>
        </tr>
        <tr>
          <th>Requirement Notes</th>
          <td><?php echo $message; ?></td>
        </tr>
        <tr>
          <th>User IP Address</th>
          <td style="font-size: 12px; color: #64748b;"><?php echo $ip; ?></td>
        </tr>
      </table>

      <!-- Quick Action Buttons -->
      <div class="btn-group">
        <a href="<?php echo $whatsappLink; ?>" target="_blank" class="btn btn-whatsapp">
          💬 Reply via WhatsApp
        </a>
        <a href="tel:<?php echo $mobile; ?>" class="btn btn-call">
          📞 Call Customer
        </a>
        <?php if ($email !== 'N/A'): ?>
        <a href="mailto:<?php echo $email; ?>?subject=Re:%20Krishna%20Electronics%20Enquiry%20<?php echo $refId; ?>" class="btn btn-email">
          ✉️ Send Email
        </a>
        <?php endif; ?>
      </div>
    </div>

    <div class="footer">
      <p style="margin: 0 0 6px 0;">
        This is an automated enquiry notification from <a href="https://krishnaelectronics.org">Krishna Electronics</a>.
      </p>
      <p style="margin: 0;">
        Phone: +91 94152 39944 | Email: <a href="mailto:info@krishnaelectronics.org">info@krishnaelectronics.org</a>
      </p>
    </div>
  </div>
</body>
</html>
        <?php
        return ob_get_clean();
    }

    /**
     * Build Plain Text Fallback Template
     */
    private static function buildPlainTextTemplate(array $data): string
    {
        $refId = $data['id'] ?? 'KE-'.date('Ymd').'-'.rand(1000,9999);
        $timestamp = $data['timestamp'] ?? date('d M Y, h:i A');
        $formType = $data['form_type'] ?? 'Customer Enquiry';
        $name = $data['name'] ?? 'N/A';
        $mobile = $data['mobile'] ?? 'N/A';
        $email = $data['email'] ?? 'N/A';
        $city = $data['city'] ?? 'N/A';
        $product = $data['product'] ?? 'General Inquiry';
        $quantity = $data['quantity'] ?? '1';
        $message = $data['message'] ?? 'No notes provided.';
        $firmName = !empty($data['firm_name']) ? $data['firm_name'] : '';
        $businessType = !empty($data['business_type']) ? $data['business_type'] : '';

        $text = "====================================================\n";
        $text .= "KRISHNA ELECTRONICS - NEW LEAD NOTIFICATION\n";
        $text .= "====================================================\n\n";
        $text .= "Form Source: {$formType}\n";
        $text .= "Reference ID: {$refId}\n";
        $text .= "Received At: {$timestamp}\n\n";
        $text .= "CUSTOMER DETAILS:\n";
        $text .= "----------------------------------------------------\n";
        $text .= "Name: {$name}\n";
        $text .= "Mobile: {$mobile}\n";
        $text .= "Email: {$email}\n";
        $text .= "City / Location: {$city}\n";
        if (!empty($firmName)) {
            $text .= "Firm / Shop Name: {$firmName}\n";
        }
        if (!empty($businessType)) {
            $text .= "Business Type: {$businessType}\n";
        }
        $text .= "Product Required: {$product}\n";
        $text .= "Quantity: {$quantity}\n";
        $text .= "Message / Notes:\n{$message}\n\n";
        $text .= "====================================================\n";
        $text .= "Krishna Electronics | Phone: +91 94152 39944 | Email: info@krishnaelectronics.org\n";

        return $text;
    }
}
