<?php
/**
 * Krishna Electronics - Privacy Policy Page
 */
$currentPage = 'legal';
$pageTitle = 'Privacy Policy | Krishna Electronics';
$pageDescription = 'Privacy policy and data protection commitments of Krishna Electronics.';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<!-- Page Header Hero -->
<section class="py-5 bg-surface-elevated border-bottom border-subtle">
  <div class="container-fluid px-lg-5">
    <span class="badge-pill-custom badge-pill-primary mb-2">Legal Information</span>
    <h1 class="display-6 font-heading mb-2">Privacy Policy</h1>
    <p class="text-muted">Last updated: January <?php echo SITE_YEAR; ?></p>
  </div>
</section>

<!-- Content Section -->
<section class="py-5">
  <div class="container-fluid px-lg-5">
    <div class="max-w-900 mx-auto p-4 p-md-5 rounded-4 bg-surface border border-subtle shadow-sm">
      
      <h4 class="font-heading mb-3">1. Information We Collect</h4>
      <p class="text-muted">
        At <strong><?php echo SITE_NAME; ?></strong>, we collect information you voluntarily provide through our website customer enquiry forms, quote requests, dealer applications, or direct WhatsApp messages. This includes your name, mobile number, email address, city, and product requirements.
      </p>

      <h4 class="font-heading mb-3 mt-4">2. How We Use Your Information</h4>
      <p class="text-muted">
        We use the submitted information exclusively to:
      </p>
      <ul class="text-muted">
        <li>Respond to your product enquiries and quotation requests.</li>
        <li>Coordinate orders, shipments, and warranty services.</li>
        <li>Provide technical product guidance and after-sales support.</li>
        <li>Evaluate dealer partnership applications.</li>
      </ul>

      <h4 class="font-heading mb-3 mt-4">3. Data Protection &amp; Confidentiality</h4>
      <p class="text-muted">
        We respect your privacy and never sell, rent, or lease customer contact information to third-party marketing companies. Information is shared only with authorized logistics partners and manufacturers strictly when necessary to fulfill deliveries or process official warranty claims.
      </p>

      <h4 class="font-heading mb-3 mt-4">4. Contact &amp; Grievance Redressal</h4>
      <p class="text-muted mb-0">
        If you have any questions regarding our privacy practices or wish to update your contact details, please contact us at <a href="mailto:<?php echo PRIMARY_EMAIL; ?>"><?php echo PRIMARY_EMAIL; ?></a> or call <a href="tel:<?php echo PRIMARY_PHONE_RAW; ?>"><?php echo PRIMARY_PHONE; ?></a>.
      </p>

    </div>
  </div>
</section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
