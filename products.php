<?php
/**
 * Krishna Electronics - Interactive Product Catalog Page
 * Quality Products | Trusted Service | Reliable Solutions
 */
$currentPage = 'products';
$pageTitle = 'Product Catalog | Krishna Electronics';
$pageDescription = 'Browse quality electronics products, electrical items, wires, switches, MCBs, inverters, tall tubular batteries and lithium energy solutions.';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';

// Initial category filter from GET parameter
$activeCat = isset($_GET['cat']) && array_key_exists($_GET['cat'], $productCategories) ? $_GET['cat'] : 'all';
?>

<!-- Page Header Hero -->
<section class="py-5 bg-surface-elevated border-bottom border-subtle position-relative overflow-hidden">
  <div class="hero-mesh-grid"></div>
  <div class="container-fluid px-lg-5 position-relative">
    <div class="row align-items-center g-4">
      <div class="col-lg-7">
        <span class="badge-pill-custom badge-pill-primary mb-3">
          <i class="bi bi-grid-3x3-gap-fill"></i> Complete Catalog
        </span>
        <h1 class="display-5 font-heading mb-3">Our Product Range</h1>
        <p class="fs-5 text-muted mb-0">
          Explore certified electronics, premium electrical supplies, and dependable power backup solutions engineered for quality and longevity.
        </p>
      </div>
      <div class="col-lg-5 text-lg-end">
        <button type="button" class="btn btn-premium-accent" data-bs-toggle="modal" data-bs-target="#globalEnquiryModal" data-product="Bulk Product Enquiry">
          <i class="bi bi-file-earmark-text me-1"></i> Request Bulk / Custom Quote
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Filter & Search Controls Bar -->
<section class="py-4 bg-surface border-bottom border-subtle sticky-top" style="top: 65px; z-index: 990;">
  <div class="container-fluid px-lg-5">
    <div class="row g-3 align-items-center justify-content-between">
      
      <!-- Category Filter Pills -->
      <div class="col-lg-8">
        <div class="filter-btn-group justify-content-lg-start mb-0">
          <button type="button" class="btn btn-filter <?php echo ($activeCat === 'all') ? 'active' : ''; ?>" data-filter="all">
            <i class="bi bi-grid-fill me-1"></i> All Products
          </button>
          <button type="button" class="btn btn-filter <?php echo ($activeCat === 'electronics') ? 'active' : ''; ?>" data-filter="electronics">
            <i class="bi bi-tv me-1"></i> Electronics Products
          </button>
          <button type="button" class="btn btn-filter <?php echo ($activeCat === 'electrical') ? 'active' : ''; ?>" data-filter="electrical">
            <i class="bi bi-lightning-charge-fill me-1"></i> Electrical Products
          </button>
          <button type="button" class="btn btn-filter <?php echo ($activeCat === 'powerbackup') ? 'active' : ''; ?>" data-filter="powerbackup">
            <i class="bi bi-battery-charging me-1"></i> Power Backup Solutions
          </button>
        </div>
      </div>

      <!-- Live Search Input -->
      <div class="col-lg-4">
        <div class="input-group">
          <span class="input-group-text bg-surface border-end-0 border-subtle">
            <i class="bi bi-search text-muted"></i>
          </span>
          <input type="text" id="catalogSearchInput" class="form-control form-control-custom border-start-0 ps-0" placeholder="Search by name, category, or tag...">
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Product Catalog Grid -->
<section class="py-5">
  <div class="container-fluid px-lg-5">
    
    <!-- Empty State (Hidden by default) -->
    <div id="catalogEmptyState" class="text-center py-5" style="display: none;">
      <div class="feature-icon-wrapper mx-auto mb-3" style="width: 64px; height: 64px; font-size: 1.8rem;">
        <i class="bi bi-search"></i>
      </div>
      <h4 class="font-heading mb-2">No matching products found</h4>
      <p class="text-muted mb-4">Try searching with different keywords or switch categories above.</p>
      <button type="button" class="btn btn-premium-outline" onclick="document.getElementById('catalogSearchInput').value=''; document.querySelector('[data-filter=\'all\']').click();">
        Reset Filters
      </button>
    </div>

    <!-- Product Cards Grid -->
    <div class="row g-4" id="catalogProductsContainer">
      <?php foreach ($productCategories as $catKey => $category): ?>
        <?php foreach ($category['items'] as $item): ?>
          <?php 
            $tagString = implode(', ', $item['tags'] ?? []);
            $featureString = implode('; ', $item['features'] ?? []);
            $customWhatsAppMsg = "Hello Krishna Electronics, I am interested in " . $item['name'] . " (" . $category['title'] . "). Please share product details, price and availability.";
            $itemWhatsAppUrl = getWhatsAppUrl($customWhatsAppMsg);
          ?>
          <div class="col-lg-4 col-md-6 product-item-wrapper" 
               data-category="<?php echo $catKey; ?>" 
               data-title="<?php echo htmlspecialchars($item['name']); ?>" 
               data-tags="<?php echo htmlspecialchars($tagString); ?>"
               data-desc="<?php echo htmlspecialchars($item['desc'] . ' ' . $featureString); ?>"
               style="<?php echo ($activeCat !== 'all' && $activeCat !== $catKey) ? 'display: none;' : ''; ?>">
            
            <div class="product-card">
              
              <!-- Product Image Box -->
              <div class="product-img-box">
                <img src="<?php echo $item['image']; ?>" alt="<?php echo htmlspecialchars($item['name']); ?>" loading="lazy">
                <span class="category-badge-overlay badge bg-glass text-main border border-subtle px-3 py-2 rounded-pill font-heading small">
                  <i class="bi <?php echo $category['icon']; ?> me-1 text-primary"></i> <?php echo $category['title']; ?>
                </span>
              </div>

              <!-- Product Body -->
              <div class="product-body">
                <div class="d-flex flex-wrap gap-1 mb-2">
                  <?php foreach ($item['tags'] as $tag): ?>
                    <span class="product-tag-pill"><?php echo $tag; ?></span>
                  <?php endforeach; ?>
                </div>

                <h4 class="h5 font-heading mb-2"><?php echo htmlspecialchars($item['name']); ?></h4>
                <p class="text-muted small mb-3"><?php echo htmlspecialchars($item['desc']); ?></p>

                <!-- Key Highlights List -->
                <div class="mb-4 p-3 rounded-3 bg-surface-elevated border border-subtle">
                  <span class="fw-bold small d-block mb-2 text-primary">Key Highlights:</span>
                  <ul class="list-unstyled mb-0 d-flex flex-column gap-1 small text-muted">
                    <?php foreach ($item['features'] as $feature): ?>
                      <li class="d-flex align-items-center gap-2">
                        <i class="bi bi-check2 text-success"></i>
                        <span><?php echo $feature; ?></span>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </div>

                <!-- Product Action Buttons -->
                <div class="mt-auto pt-3 border-top border-subtle d-flex flex-wrap gap-2 justify-content-between align-items-center">
                  <button type="button" class="btn btn-premium-primary btn-sm flex-grow-1" data-bs-toggle="modal" data-bs-target="#globalEnquiryModal" data-product="<?php echo htmlspecialchars($item['name']); ?>">
                    <i class="bi bi-file-earmark-text me-1"></i> Get Quote
                  </button>
                  <a href="<?php echo $itemWhatsAppUrl; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-premium-whatsapp btn-sm" title="Inquire on WhatsApp">
                    <i class="bi bi-whatsapp"></i> Inquire
                  </a>
                </div>

              </div>

            </div>

          </div>
        <?php endforeach; ?>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- Custom Orders & Dealer Sourcing Callout -->
<section class="py-5 bg-surface-elevated border-top border-subtle">
  <div class="container-fluid px-lg-5">
    <div class="p-4 p-md-5 rounded-4 bg-glass border border-primary-subtle text-center shadow-sm">
      <span class="badge-pill-custom badge-pill-accent mb-3">Custom & Bulk Orders</span>
      <h3 class="display-6 font-heading mb-3">Looking for Specific Brands or Commercial Quantities?</h3>
      <p class="fs-6 text-muted max-w-700 mx-auto mb-4">
        We specialize in direct procurement for contractors, institutions, residential developments, and retail shops. Share your bill of materials (BOM) or specifications with us.
      </p>
      <div class="d-flex justify-content-center gap-3 flex-wrap">
        <button type="button" class="btn btn-premium-primary" data-bs-toggle="modal" data-bs-target="#globalEnquiryModal" data-product="Custom Bill of Materials / Bulk Order">
          <i class="bi bi-upload me-1"></i> Submit BOM / Specs
        </button>
        <a href="<?php echo getWhatsAppUrl('Hello Krishna Electronics, I have a custom bulk order requirement. Please connect me with a sales representative.'); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-premium-whatsapp">
          <i class="bi bi-whatsapp me-1"></i> WhatsApp Sales Team
        </a>
      </div>
    </div>
  </div>
</section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
