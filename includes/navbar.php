<?php
/**
 * Krishna Electronics - Navigation Bar Include
 */
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/config.php';
}
$currentPage = isset($currentPage) ? $currentPage : 'home';
?>
<!-- Main Sticky Navbar -->
<nav class="navbar navbar-expand-lg sticky-top site-navbar" id="mainSiteNavbar">
  <div class="container-fluid px-lg-5">
    
    <!-- Brand Logo -->
    <a class="navbar-brand d-flex align-items-center gap-2" href="index.php" title="<?php echo SITE_NAME; ?>">
      <img src="assets/images/logo.png" alt="<?php echo SITE_NAME; ?> Logo" class="navbar-brand-logo rounded-2" height="42">
      <div class="d-none d-sm-flex flex-column lh-sm">
        <span class="fw-bold font-heading text-main fs-5" style="letter-spacing: -0.3px;">Krishna Electronics</span>
        <span class="text-primary fw-semibold" style="font-size: 0.68rem; letter-spacing: 0.5px;">The Name Of Trust</span>
      </div>
    </a>

    <!-- Right Controls for Mobile (Theme Toggle + Hamburger) -->
    <div class="d-flex align-items-center gap-2 d-lg-none">
      <button class="btn btn-theme-toggle" type="button" aria-label="Toggle Dark/Light Theme">
        <i class="bi bi-moon-stars-fill"></i>
      </button>
      <button class="navbar-toggler border-0 p-1 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileOffcanvasNav" aria-controls="mobileOffcanvasNav" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    <!-- Desktop Navigation Links -->
    <div class="collapse navbar-collapse" id="desktopNavbarContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-1">
        <?php foreach ($navItems as $key => $item): ?>
          <li class="nav-item">
            <a class="nav-link <?php echo isNavActive($key, $currentPage); ?>" href="<?php echo $item['url']; ?>">
              <i class="bi <?php echo $item['icon']; ?> me-1 d-none d-xl-inline"></i>
              <?php echo $item['label']; ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>

      <!-- Desktop Right Actions -->
      <div class="d-flex align-items-center gap-3">
        <!-- Theme Toggle -->
        <button class="btn btn-theme-toggle d-none d-lg-inline-flex" type="button" aria-label="Toggle Dark/Light Theme" title="Toggle Theme">
          <i class="bi bi-moon-stars-fill"></i>
        </button>

        <!-- WhatsApp Quick Chat -->
        <a href="<?php echo getWhatsAppUrl(); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-premium-whatsapp d-none d-xl-inline-flex" title="Chat on WhatsApp">
          <i class="bi bi-whatsapp"></i>
          <span>WhatsApp Us</span>
        </a>

        <!-- Get a Quote Modal Trigger -->
        <button type="button" class="btn btn-premium-primary" data-bs-toggle="modal" data-bs-target="#globalEnquiryModal" data-product="General Quotation">
          <i class="bi bi-file-earmark-text"></i>
          <span>Get a Quote</span>
        </button>
      </div>
    </div>

  </div>
</nav>

<!-- Mobile Navigation Offcanvas Drawer -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="mobileOffcanvasNav" aria-labelledby="mobileOffcanvasNavLabel">
  <div class="offcanvas-header border-bottom">
    <div class="d-flex align-items-center gap-2">
      <img src="assets/images/logo.png" alt="<?php echo SITE_NAME; ?>" height="38" class="rounded-2">
      <span class="fw-bold font-heading text-main fs-5">Krishna Electronics</span>
    </div>
    <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body d-flex flex-column justify-content-between">
    <ul class="nav nav-pills flex-column gap-2 mb-4">
      <?php foreach ($navItems as $key => $item): ?>
        <li class="nav-item">
          <a class="nav-link py-3 px-3 d-flex align-items-center gap-3 rounded-3 <?php echo isNavActive($key, $currentPage); ?>" href="<?php echo $item['url']; ?>">
            <i class="bi <?php echo $item['icon']; ?> fs-5 text-primary"></i>
            <span class="fs-6 fw-semibold"><?php echo $item['label']; ?></span>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>

    <div class="border-top pt-4 mt-auto">
      <div class="d-grid gap-2">
        <button type="button" class="btn btn-premium-primary py-3" data-bs-toggle="modal" data-bs-target="#globalEnquiryModal" data-bs-dismiss="offcanvas">
          <i class="bi bi-file-earmark-text me-2"></i>Get a Quote
        </button>
        <a href="<?php echo getWhatsAppUrl(); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-premium-whatsapp py-3">
          <i class="bi bi-whatsapp me-2"></i>WhatsApp Us
        </a>
      </div>

      <div class="mt-4 text-center text-muted small">
        <p class="mb-1"><i class="bi bi-telephone-fill me-1 text-primary"></i> <?php echo PRIMARY_PHONE; ?></p>
        <p class="mb-0"><i class="bi bi-envelope-fill me-1 text-primary"></i> <?php echo PRIMARY_EMAIL; ?></p>
      </div>
    </div>
  </div>
</div>
