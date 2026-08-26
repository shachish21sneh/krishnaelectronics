<?php
/**
 * Krishna Electronics - Global Footer Include
 */
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/config.php';
}
?>

  <!-- Global Footer -->
  <footer class="site-footer">
    <div class="container-fluid px-lg-5">
      <div class="row g-4 justify-content-between">
        
        <!-- Column 1: Brand & Philosophy -->
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
          <div class="d-flex align-items-center gap-2 mb-3">
            <img src="assets/images/logo.svg" alt="<?php echo SITE_NAME; ?>" height="36">
          </div>
          <p class="text-white-50 fw-semibold mb-2"><?php echo SITE_TAGLINE; ?></p>
          <p class="small text-muted mb-4">
            A customer-focused <?php echo FIRM_TYPE; ?> committed to delivering high-quality electronic products, electrical solutions, and reliable power backup equipment at competitive prices.
          </p>
          <div class="d-flex align-items-center gap-2">
            <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-2 rounded-pill small">
              <i class="bi bi-patch-check-fill me-1"></i> Certified Proprietorship
            </span>
            <span class="badge bg-warning-subtle text-warning border border-warning-subtle px-3 py-2 rounded-pill small">
              <i class="bi bi-shield-check me-1"></i> Trusted Partner
            </span>
          </div>
        </div>

        <!-- Column 2: Quick Links -->
        <div class="col-lg-2 col-md-3 col-6">
          <h5>Quick Links</h5>
          <ul class="footer-link-list">
            <li><a href="index.php"><i class="bi bi-chevron-right small me-1"></i> Home</a></li>
            <li><a href="about.php"><i class="bi bi-chevron-right small me-1"></i> About Us</a></li>
            <li><a href="products.php"><i class="bi bi-chevron-right small me-1"></i> Products</a></li>
            <li><a href="services.php"><i class="bi bi-chevron-right small me-1"></i> Services</a></li>
            <li><a href="dealers.php"><i class="bi bi-chevron-right small me-1"></i> Dealer/Partner</a></li>
            <li><a href="contact.php"><i class="bi bi-chevron-right small me-1"></i> Contact Us</a></li>
          </ul>
        </div>

        <!-- Column 3: Product Range -->
        <div class="col-lg-3 col-md-3 col-6">
          <h5>Product Divisions</h5>
          <ul class="footer-link-list">
            <li><a href="products.php?cat=electronics"><i class="bi bi-chevron-right small me-1"></i> Electronics Products</a></li>
            <li><a href="products.php?cat=electrical"><i class="bi bi-chevron-right small me-1"></i> Electrical Products</a></li>
            <li><a href="products.php?cat=powerbackup"><i class="bi bi-chevron-right small me-1"></i> Power Backup Solutions</a></li>
            <li><a href="products.php"><i class="bi bi-chevron-right small me-1"></i> Smart LED TVs & Audio</a></li>
            <li><a href="products.php"><i class="bi bi-chevron-right small me-1"></i> Copper Wires & MCBs</a></li>
            <li><a href="products.php"><i class="bi bi-chevron-right small me-1"></i> Inverters & Lithium Packs</a></li>
          </ul>
        </div>

        <!-- Column 4: Customer Support & Contact Details -->
        <div class="col-lg-3 col-md-6">
          <h5>Customer Support</h5>
          <ul class="footer-link-list mb-4">
            <li class="d-flex align-items-start gap-2">
              <i class="bi bi-geo-alt-fill text-primary mt-1"></i>
              <span><?php echo COMPANY_ADDRESS; ?></span>
            </li>
            <li class="d-flex align-items-center gap-2">
              <i class="bi bi-telephone-fill text-primary"></i>
              <a href="tel:<?php echo PRIMARY_PHONE_RAW; ?>"><?php echo PRIMARY_PHONE; ?></a>
            </li>
            <li class="d-flex align-items-center gap-2">
              <i class="bi bi-whatsapp text-success"></i>
              <a href="<?php echo getWhatsAppUrl(); ?>" target="_blank" rel="noopener noreferrer">WhatsApp Chat Support</a>
            </li>
            <li class="d-flex align-items-center gap-2">
              <i class="bi bi-envelope-fill text-primary"></i>
              <a href="mailto:<?php echo PRIMARY_EMAIL; ?>"><?php echo PRIMARY_EMAIL; ?></a>
            </li>
            <li class="d-flex align-items-center gap-2">
              <i class="bi bi-clock-fill text-primary"></i>
              <span><?php echo BUSINESS_HOURS; ?></span>
            </li>
          </ul>
          <div>
            <button type="button" class="btn btn-premium-accent w-100 py-2" data-bs-toggle="modal" data-bs-target="#globalEnquiryModal">
              <i class="bi bi-file-earmark-text me-1"></i> Get a Quote
            </button>
          </div>
        </div>

      </div>

      <!-- Footer Bottom -->
      <div class="footer-bottom d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
        <p class="mb-0 text-center text-md-start">
          &copy; <?php echo SITE_YEAR; ?> <?php echo SITE_NAME; ?>. All Rights Reserved.
        </p>
        <div class="d-flex align-items-center gap-3 text-center">
          <a href="privacy-policy.php" class="text-decoration-none small">Privacy Policy</a>
          <span class="text-muted">•</span>
          <a href="terms-conditions.php" class="text-decoration-none small">Terms & Conditions</a>
          <span class="text-muted">•</span>
          <a href="contact.php" class="text-decoration-none small">Contact Support</a>
        </div>
      </div>

    </div>
  </footer>

  <!-- Include Modals & WhatsApp Floating Widget -->
  <?php require_once __DIR__ . '/enquiry-modal.php'; ?>
  <?php require_once __DIR__ . '/whatsapp-btn.php'; ?>

  <!-- Bootstrap 5.3.3 Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- Custom Core JS -->
  <script src="assets/js/main.js"></script>

</body>
</html>
