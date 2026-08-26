<?php
/**
 * Krishna Electronics - Global Header Include
 */
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/config.php';
}

// Dynamic Page Meta Defaults
$pageTitle = isset($pageTitle) ? $pageTitle . ' | ' . SITE_NAME : SITE_NAME . ' | Electronics & Electrical Products';
$pageDescription = isset($pageDescription) ? $pageDescription : SITE_DESCRIPTION;
$pageKeywords = isset($pageKeywords) ? $pageKeywords : SITE_KEYWORDS;
$currentPage = isset($currentPage) ? $currentPage : 'home';
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  
  <!-- SEO & Social Meta Tags -->
  <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <meta name="keywords" content="<?php echo htmlspecialchars($pageKeywords); ?>">
  <meta name="author" content="<?php echo SITE_NAME; ?>">
  <meta name="robots" content="index, follow">
  
  <!-- OpenGraph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <meta property="og:site_name" content="<?php echo SITE_NAME; ?>">
  
  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription); ?>">

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="assets/images/favicon.svg">
  
  <!-- Google Fonts Preconnect -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  
  <!-- Bootstrap 5.3.3 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  
  <!-- Bootstrap Icons & FontAwesome 6 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  
  <!-- Custom Design System Stylesheet -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <!-- Top Announcement & Quick Contact Bar -->
  <div class="top-bar d-none d-md-block">
    <div class="container-fluid px-lg-5">
      <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center gap-4">
          <span class="d-inline-flex align-items-center gap-2">
            <i class="bi bi-geo-alt-fill text-primary"></i>
            <span><?php echo COMPANY_ADDRESS; ?></span>
          </span>
          <span class="d-inline-flex align-items-center gap-2">
            <i class="bi bi-clock-fill text-primary"></i>
            <span><?php echo BUSINESS_HOURS; ?></span>
          </span>
        </div>
        <div class="d-flex align-items-center gap-3">
          <a href="tel:<?php echo PRIMARY_PHONE_RAW; ?>" class="d-inline-flex align-items-center gap-2 text-decoration-none">
            <i class="bi bi-telephone-fill text-primary"></i>
            <span class="fw-semibold"><?php echo PRIMARY_PHONE; ?></span>
          </a>
          <span class="text-muted">|</span>
          <a href="<?php echo getWhatsAppUrl(); ?>" target="_blank" rel="noopener noreferrer" class="d-inline-flex align-items-center gap-2 text-success text-decoration-none">
            <i class="bi bi-whatsapp"></i>
            <span class="fw-semibold">WhatsApp Chat</span>
          </a>
        </div>
      </div>
    </div>
  </div>
