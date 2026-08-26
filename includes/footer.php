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
            <img src="assets/images/logo.svg" alt="<?php echo SITE_NAME; ?>" height="42">
          </div>
          <p class="text-white fw-bold fs-6 mb-2"><?php echo SITE_TAGLINE; ?></p>
          <p class="small footer-description mb-4">
            A customer-focused <?php echo FIRM_TYPE; ?> committed to delivering high-quality electronic products, electrical solutions, and reliable power backup equipment at competitive prices.
          </p>
          <div class="d-flex align-items-center gap-2 flex-wrap">
            <span class="badge bg-primary text-white border border-primary px-3 py-2 rounded-pill small fw-semibold">
              <i class="bi bi-patch-check-fill me-1"></i> Certified Proprietorship
            </span>
            <span class="badge bg-warning text-dark border border-warning px-3 py-2 rounded-pill small fw-bold">
              <i class="bi bi-shield-check me-1"></i> Trusted Partner
            </span>
          </div>
        </div>

        <!-- Column 2: Quick Links -->
        <div class="col-lg-2 col-md-3 col-6">
          <h5 class="text-white fw-bold">Quick Links</h5>
          <ul class="footer-link-list">
            <li><a href="index.php"><i class="bi bi-chevron-right small me-1 text-primary"></i> Home</a></li>
            <li><a href="about.php"><i class="bi bi-chevron-right small me-1 text-primary"></i> About Us</a></li>
            <li><a href="products.php"><i class="bi bi-chevron-right small me-1 text-primary"></i> Products</a></li>
            <li><a href="services.php"><i class="bi bi-chevron-right small me-1 text-primary"></i> Services</a></li>
            <li><a href="dealers.php"><i class="bi bi-chevron-right small me-1 text-primary"></i> Dealer/Partner</a></li>
            <li><a href="contact.php"><i class="bi bi-chevron-right small me-1 text-primary"></i> Contact Us</a></li>
          </ul>
        </div>

        <!-- Column 3: Product Range -->
        <div class="col-lg-3 col-md-3 col-6">
          <h5 class="text-white fw-bold">Product Divisions</h5>
          <ul class="footer-link-list">
            <li><a href="products.php?cat=electronics"><i class="bi bi-chevron-right small me-1 text-primary"></i> Electronics Products</a></li>
            <li><a href="products.php?cat=electrical"><i class="bi bi-chevron-right small me-1 text-primary"></i> Electrical Products</a></li>
            <li><a href="products.php?cat=powerbackup"><i class="bi bi-chevron-right small me-1 text-primary"></i> Power Backup Solutions</a></li>
            <li><a href="products.php"><i class="bi bi-chevron-right small me-1 text-primary"></i> Smart LED TVs & Audio</a></li>
            <li><a href="products.php"><i class="bi bi-chevron-right small me-1 text-primary"></i> Copper Wires & MCBs</a></li>
            <li><a href="products.php"><i class="bi bi-chevron-right small me-1 text-primary"></i> Inverters & Lithium Packs</a></li>
          </ul>
        </div>

        <!-- Column 4: Customer Support & Contact Details -->
        <div class="col-lg-3 col-md-6">
          <h5 class="text-white fw-bold">Customer Support</h5>
          <ul class="footer-link-list mb-4">
            <li class="d-flex align-items-start gap-2">
              <i class="bi bi-geo-alt-fill text-primary mt-1"></i>
              <span><?php echo COMPANY_ADDRESS; ?></span>
            </li>
            <li class="d-flex align-items-center gap-2">
              <i class="bi bi-telephone-fill text-primary"></i>
              <a href="tel:<?php echo PRIMARY_PHONE_RAW; ?>" class="fw-semibold text-white"><?php echo PRIMARY_PHONE; ?></a>
            </li>
            <li class="d-flex align-items-center gap-2">
              <i class="bi bi-whatsapp text-success"></i>
              <a href="<?php echo getWhatsAppUrl(); ?>" target="_blank" rel="noopener noreferrer" class="text-success fw-semibold">WhatsApp Chat Support</a>
            </li>
            <li class="d-flex align-items-center gap-2">
              <i class="bi bi-envelope-fill text-primary"></i>
              <a href="mailto:<?php echo PRIMARY_EMAIL; ?>"><?php echo PRIMARY_EMAIL; ?></a>
            </li>
            <li class="d-flex align-items-center gap-2">
              <i class="bi bi-clock-fill text-warning"></i>
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
        <p class="mb-0 text-center text-md-start text-white-50">
          &copy; <?php echo SITE_YEAR; ?> <strong class="text-white"><?php echo SITE_NAME; ?></strong>. All Rights Reserved.
        </p>
        <div class="d-flex align-items-center gap-3 text-center">
          <a href="privacy-policy.php" class="text-decoration-none small text-white-50">Privacy Policy</a>
          <span class="text-white-50">•</span>
          <a href="terms-conditions.php" class="text-decoration-none small text-white-50">Terms & Conditions</a>
          <span class="text-white-50">•</span>
          <a href="contact.php" class="text-decoration-none small text-white-50">Contact Support</a>
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
