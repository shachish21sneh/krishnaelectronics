<?php
/**
 * Krishna Electronics - Terms & Conditions Page
 */
$currentPage = 'legal';
$pageTitle = 'Terms & Conditions | Krishna Electronics';
$pageDescription = 'Terms and conditions governing product supply, warranties, and business dealings with Krishna Electronics.';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<!-- Page Header Hero -->
<section class="py-5 bg-surface-elevated border-bottom border-subtle">
  <div class="container-fluid px-lg-5">
    <span class="badge-pill-custom badge-pill-primary mb-2">Legal Information</span>
    <h1 class="display-6 font-heading mb-2">Terms &amp; Conditions</h1>
    <p class="text-muted">Last updated: January <?php echo SITE_YEAR; ?></p>
  </div>
</section>

<!-- Content Section -->
<section class="py-5">
  <div class="container-fluid px-lg-5">
    <div class="max-w-900 mx-auto p-4 p-md-5 rounded-4 bg-surface border border-subtle shadow-sm">
      
      <h4 class="font-heading mb-3">1. Business Terms &amp; Scope</h4>
      <p class="text-muted">
        These terms govern transactions, quotations, and product supply provided by <strong><?php echo SITE_NAME; ?></strong> (<?php echo FIRM_TYPE; ?>). By placing an order, requesting a quotation, or entering a dealer arrangement, you agree to these standard business terms.
      </p>

      <h4 class="font-heading mb-3 mt-4">2. Product Specifications &amp; Pricing</h4>
      <p class="text-muted">
        All product specifications, images, and technical parameters are sourced from original manufacturers and are subject to continuous manufacturer upgrades. Quotations provided are valid for the period mentioned on the formal quotation sheet and are subject to market commodity fluctuations for copper wires and lead-acid batteries.
      </p>

      <h4 class="font-heading mb-3 mt-4">3. Warranties &amp; After-Sales Service</h4>
      <p class="text-muted">
        All electronic products, appliances, inverters, and tubular batteries carry standard original manufacturer warranty cards. Krishna Electronics assists customers and dealer partners in facilitating claims and coordinating with authorized company service centers.
      </p>

      <h4 class="font-heading mb-3 mt-4">4. Payment &amp; Delivery Terms</h4>
      <p class="text-muted">
        Payments for retail orders and wholesale dealer dispatches are processed through authorized commercial banking channels. Goods are dispatched following verified order confirmation and invoice generation.
      </p>

      <h4 class="font-heading mb-3 mt-4">5. Jurisdiction</h4>
      <p class="text-muted mb-0">
        All commercial agreements, dealer contracts, and transactions shall be subject to the exclusive jurisdiction of local courts in India.
      </p>

    </div>
  </div>
</section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
