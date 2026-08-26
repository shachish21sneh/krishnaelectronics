<?php
/**
 * Krishna Electronics - Floating WhatsApp Button & Mobile Action Bar
 */
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/config.php';
}
$whatsappUrl = getWhatsAppUrl();
?>

<!-- Floating Animated WhatsApp Widget -->
<a href="<?php echo $whatsappUrl; ?>" target="_blank" rel="noopener noreferrer" class="floating-whatsapp" aria-label="Chat with Krishna Electronics on WhatsApp">
  <div class="whatsapp-pulse-ring"></div>
  <i class="bi bi-whatsapp fs-4"></i>
  <span>WhatsApp Us</span>
</a>

<!-- Mobile Bottom Sticky Navigation Bar -->
<div class="mobile-bottom-bar d-lg-none">
  <a href="tel:<?php echo PRIMARY_PHONE_RAW; ?>" class="mobile-bar-btn">
    <i class="bi bi-telephone-outbound-fill text-primary"></i>
    <span>Call Now</span>
  </a>
  <a href="<?php echo $whatsappUrl; ?>" target="_blank" rel="noopener noreferrer" class="mobile-bar-btn">
    <i class="bi bi-whatsapp text-success"></i>
    <span>WhatsApp</span>
  </a>
  <a href="products.php" class="mobile-bar-btn <?php echo (isset($currentPage) && $currentPage === 'products') ? 'active' : ''; ?>">
    <i class="bi bi-grid-fill"></i>
    <span>Products</span>
  </a>
  <a href="#" class="mobile-bar-btn text-warning" data-bs-toggle="modal" data-bs-target="#globalEnquiryModal">
    <i class="bi bi-file-earmark-text-fill"></i>
    <span>Get Quote</span>
  </a>
  <a href="#" class="mobile-bar-btn" data-bs-toggle="offcanvas" data-bs-target="#mobileOffcanvasNav">
    <i class="bi bi-list"></i>
    <span>Menu</span>
  </a>
</div>
