<?php
/**
 * Krishna Electronics - Modern Responsive Homepage
 * Quality Products | Trusted Service | Reliable Solutions
 */
$currentPage = 'home';
$pageTitle = 'Krishna Electronics | Quality Electronics & Electrical Products';
$pageDescription = 'Krishna Electronics is a professionally managed proprietorship firm committed to providing quality electronic products, electrical solutions and reliable services at competitive prices.';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<!-- Hero Section -->
<section class="hero-section">
  <div class="hero-mesh-grid"></div>
  <div class="container-fluid px-lg-5 position-relative">
    <div class="row align-items-center g-5">
      
      <!-- Left Hero Content -->
      <div class="col-lg-6">
        <span class="badge-pill-custom badge-pill-accent mb-3">
          <i class="bi bi-patch-check-fill"></i> Professionally Managed Proprietorship Firm
        </span>
        
        <h1 class="hero-title">
          Quality Products <br>
          <span class="text-gradient-primary">Trusted Service</span> & <br>
          <span class="text-gradient-accent">Reliable Solutions</span>
        </h1>
        
        <p class="hero-lead">
          <strong>Krishna Electronics</strong> is committed to providing quality electronic products, electrical solutions and dependable services to individuals, retailers, dealers, and commercial enterprises.
        </p>

        <p class="text-muted small mb-4">
          We focus on delivering the right products at competitive prices while maintaining transparency, customer satisfaction, and long-term business relationships.
        </p>
        
        <!-- CTA Action Buttons (Matching PDF) -->
        <div class="d-flex flex-wrap align-items-center gap-3">
          <a href="products.php" class="btn btn-premium-primary">
            <i class="bi bi-grid-3x3-gap"></i> Explore Products
          </a>
          <button type="button" class="btn btn-premium-accent" data-bs-toggle="modal" data-bs-target="#globalEnquiryModal" data-product="General Product Inquiry">
            <i class="bi bi-file-earmark-text"></i> Get a Quote
          </button>
          <a href="<?php echo getWhatsAppUrl(); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-premium-whatsapp">
            <i class="bi bi-whatsapp"></i> WhatsApp Us
          </a>
        </div>

        <!-- Trust Badges Under Hero -->
        <div class="row g-3 mt-4 pt-3 border-top border-subtle">
          <div class="col-sm-4 col-6">
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-shield-fill-check fs-4 text-primary"></i>
              <div>
                <h6 class="mb-0 fw-bold small">100% Genuine</h6>
                <span class="text-muted" style="font-size: 0.75rem;">Verified Quality</span>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-6">
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-tags-fill fs-4 text-warning"></i>
              <div>
                <h6 class="mb-0 fw-bold small">Direct Pricing</h6>
                <span class="text-muted" style="font-size: 0.75rem;">Competitive Value</span>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-12">
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-headset fs-4 text-success"></i>
              <div>
                <h6 class="mb-0 fw-bold small">Prompt Support</h6>
                <span class="text-muted" style="font-size: 0.75rem;">Before & After Sale</span>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Right Hero Showcase Visual -->
      <div class="col-lg-6">
        <div class="hero-image-wrapper">
          <img src="assets/images/hero_showcase.jpg" alt="Krishna Electronics Products Showcase" class="img-fluid">
          
          <!-- Floating Badge 1 -->
          <div class="hero-floating-card card-1 d-none d-sm-flex align-items-center gap-3">
            <div class="feature-icon-wrapper mb-0" style="width: 44px; height: 44px; font-size: 1.2rem;">
              <i class="bi bi-battery-charging text-warning"></i>
            </div>
            <div>
              <div class="fw-bold small font-heading">Power Backup & UPS</div>
              <div class="text-muted" style="font-size: 0.72rem;">Pure Sine Wave & Lithium</div>
            </div>
          </div>

          <!-- Floating Badge 2 -->
          <div class="hero-floating-card card-2 d-none d-sm-flex align-items-center gap-3">
            <div class="feature-icon-wrapper mb-0" style="width: 44px; height: 44px; font-size: 1.2rem;">
              <i class="bi bi-tv text-primary"></i>
            </div>
            <div>
              <div class="fw-bold small font-heading">Smart 4K Electronics</div>
              <div class="text-muted" style="font-size: 0.72rem;">Appliances & Audio Systems</div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- Quick Stats Counter Section -->
<section class="py-5 bg-surface border-bottom border-subtle">
  <div class="container-fluid px-lg-5">
    <div class="row g-4">
      <div class="col-6 col-md-3">
        <div class="stat-box">
          <div class="stat-number counter-value" data-target="1500" data-suffix="+">1500+</div>
          <h6 class="fw-bold mb-1">Satisfied Clients</h6>
          <p class="small text-muted mb-0">Retail, Business & Home</p>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="stat-box">
          <div class="stat-number counter-value" data-target="100" data-suffix="%">100%</div>
          <h6 class="fw-bold mb-1">Genuine Products</h6>
          <p class="small text-muted mb-0">Tested & Certified Stock</p>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="stat-box">
          <div class="stat-number counter-value" data-target="3" data-suffix=" Divisions">3</div>
          <h6 class="fw-bold mb-1">Specialized Categories</h6>
          <p class="small text-muted mb-0">Electronics, Electrical, Power</p>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="stat-box">
          <div class="stat-number counter-value" data-target="24" data-suffix="/7">24/7</div>
          <h6 class="fw-bold mb-1">Support Assistance</h6>
          <p class="small text-muted mb-0">Direct WhatsApp & Call</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About Section & Philosophy Highlight -->
<section class="py-5 my-3">
  <div class="container-fluid px-lg-5">
    
    <div class="row align-items-center g-5 mb-5">
      <div class="col-lg-6">
        <span class="badge-pill-custom badge-pill-primary mb-2">About Krishna Electronics</span>
        <h2 class="display-6 font-heading mb-4">Your Trusted Electronics & Electrical Partner</h2>
        
        <p class="text-muted mb-3">
          <strong>Krishna Electronics</strong> is a customer-focused proprietorship firm engaged in the supply, trading and distribution of electronics, electrical products and related solutions.
        </p>
        <p class="text-muted mb-4">
          Our objective is simple — to understand our customer's requirements and provide the right product, dependable service and professional support. We proudly serve individual customers, retailers, dealers, businesses and institutions with an uncompromised commitment to quality, transparency and customer satisfaction.
        </p>

        <div class="d-flex flex-wrap gap-3">
          <a href="about.php" class="btn btn-premium-outline">
            <i class="bi bi-arrow-right-circle"></i> Learn More About Us
          </a>
          <a href="dealers.php" class="btn btn-premium-primary">
            <i class="bi bi-handshake"></i> Become a Partner
          </a>
        </div>
      </div>

      <div class="col-lg-6">
        <!-- Business Philosophy Callout Banner (Matching PDF) -->
        <div class="philosophy-banner">
          <div class="d-flex align-items-center gap-2 mb-3">
            <i class="bi bi-stars text-warning fs-4"></i>
            <span class="text-uppercase tracking-wider fw-bold text-white-50 small">Our Business Philosophy</span>
          </div>
          
          <div class="philosophy-equation mb-4">
            Quality + Trust + Service = Long-Term Relationships
          </div>

          <p class="fs-6 text-light mb-0">
            "We believe that customer satisfaction is not just about selling a product; it is about providing the right solution and supporting our customers throughout their journey."
          </p>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Product Divisions Section (From PDF Page 3) -->
<section class="py-5 bg-surface-elevated border-top border-bottom border-subtle">
  <div class="container-fluid px-lg-5">
    
    <div class="text-center max-w-700 mx-auto mb-5">
      <span class="badge-pill-custom badge-pill-primary mb-2">Our Product Range</span>
      <h2 class="display-6 font-heading mb-3">Comprehensive Electronics & Electrical Solutions</h2>
      <p class="text-muted">
        Explore our specialized product categories curated to fulfill domestic, commercial, and industrial electrical needs.
      </p>
    </div>

    <div class="row g-4">
      
      <!-- Category 1: Electronics Products -->
      <div class="col-lg-4 col-md-6">
        <div class="category-card">
          <div class="category-img-box">
            <img src="assets/images/cat_electronics.jpg" alt="Electronics Products">
            <span class="category-badge-overlay badge bg-primary px-3 py-2 rounded-pill font-heading">
              <i class="bi bi-tv me-1"></i> Electronics
            </span>
          </div>
          <div class="category-body">
            <h4 class="category-title">Electronics Products</h4>
            <p class="text-muted small mb-3">
              Reliable consumer and commercial electronics built for entertainment, comfort, and performance.
            </p>
            <ul class="category-item-list">
              <li class="category-item-pill">LED TVs</li>
              <li class="category-item-pill">Home Appliances</li>
              <li class="category-item-pill">Electronic Accessories</li>
              <li class="category-item-pill">Audio Products</li>
              <li class="category-item-pill">Consumer Electronics</li>
              <li class="category-item-pill">Other Electronic Products</li>
            </ul>
            <div class="mt-auto pt-3 border-top border-subtle d-flex justify-content-between align-items-center">
              <a href="products.php?cat=electronics" class="btn btn-premium-primary btn-sm">
                View Electronics Products <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Category 2: Electrical Products -->
      <div class="col-lg-4 col-md-6">
        <div class="category-card">
          <div class="category-img-box">
            <img src="assets/images/cat_electrical.jpg" alt="Electrical Products">
            <span class="category-badge-overlay badge bg-warning text-dark px-3 py-2 rounded-pill font-heading">
              <i class="bi bi-lightning-charge-fill me-1"></i> Electrical
            </span>
          </div>
          <div class="category-body">
            <h4 class="category-title">Electrical Products</h4>
            <p class="text-muted small mb-3">
              Safe, high-grade certified wiring, modular switches, and heavy-duty protection gear.
            </p>
            <ul class="category-item-list">
              <li class="category-item-pill">Electrical Accessories</li>
              <li class="category-item-pill">Wires & Cables</li>
              <li class="category-item-pill">Switches & Sockets</li>
              <li class="category-item-pill">Protection Devices (MCBs)</li>
              <li class="category-item-pill">Electrical Components</li>
              <li class="category-item-pill">Other Electrical Products</li>
            </ul>
            <div class="mt-auto pt-3 border-top border-subtle d-flex justify-content-between align-items-center">
              <a href="products.php?cat=electrical" class="btn btn-premium-primary btn-sm">
                View Electrical Products <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Category 3: Power Backup Solutions -->
      <div class="col-lg-4 col-md-12">
        <div class="category-card">
          <div class="category-img-box">
            <img src="assets/images/cat_powerbackup.jpg" alt="Power Backup Solutions">
            <span class="category-badge-overlay badge bg-success px-3 py-2 rounded-pill font-heading">
              <i class="bi bi-battery-charging me-1"></i> Power Backup
            </span>
          </div>
          <div class="category-body">
            <h4 class="category-title">Power Backup Solutions</h4>
            <p class="text-muted small mb-3">
              Pure Sine Wave Inverters, tall tubular batteries, and high-efficiency lithium energy systems.
            </p>
            <ul class="category-item-list">
              <li class="category-item-pill">Inverters</li>
              <li class="category-item-pill">Home UPS</li>
              <li class="category-item-pill">Batteries (Tubular)</li>
              <li class="category-item-pill">Lithium Battery Solutions</li>
              <li class="category-item-pill">Power Backup Accessories</li>
            </ul>
            <div class="mt-auto pt-3 border-top border-subtle d-flex justify-content-between align-items-center">
              <a href="products.php?cat=powerbackup" class="btn btn-premium-primary btn-sm">
                View Power Backup Products <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- Why Choose Krishna Electronics? (From PDF Page 2) -->
<section class="py-5">
  <div class="container-fluid px-lg-5">
    
    <div class="text-center max-w-700 mx-auto mb-5">
      <span class="badge-pill-custom badge-pill-accent mb-2">Our Value Proposition</span>
      <h2 class="display-6 font-heading mb-3">Why Choose Krishna Electronics?</h2>
      <p class="text-muted">
        We combine reliable product quality, transparent business practices, and responsive guidance to ensure maximum value for your investment.
      </p>
    </div>

    <div class="row g-4">
      
      <!-- 1. Quality Products -->
      <div class="col-lg-4 col-md-6">
        <div class="feature-card">
          <div class="feature-icon-wrapper">
            <i class="bi bi-award-fill"></i>
          </div>
          <h4 class="h5 font-heading mb-2">Quality Products</h4>
          <p class="text-muted small mb-0">
            We focus on providing products that meet customer requirements and deliver dependable performance.
          </p>
        </div>
      </div>

      <!-- 2. Trusted Service -->
      <div class="col-lg-4 col-md-6">
        <div class="feature-card">
          <div class="feature-icon-wrapper">
            <i class="bi bi-shield-check"></i>
          </div>
          <h4 class="h5 font-heading mb-2">Trusted Service</h4>
          <p class="text-muted small mb-0">
            We believe in transparent communication and professional customer service before and after every order.
          </p>
        </div>
      </div>

      <!-- 3. Competitive Pricing -->
      <div class="col-lg-4 col-md-6">
        <div class="feature-card">
          <div class="feature-icon-wrapper">
            <i class="bi bi-tag-fill"></i>
          </div>
          <h4 class="h5 font-heading mb-2">Competitive Pricing</h4>
          <p class="text-muted small mb-0">
            Our aim is to provide customers with the best possible value for their investment with honest, fair pricing.
          </p>
        </div>
      </div>

      <!-- 4. Right Product Guidance -->
      <div class="col-lg-4 col-md-6">
        <div class="feature-card">
          <div class="feature-icon-wrapper">
            <i class="bi bi-compass-fill"></i>
          </div>
          <h4 class="h5 font-heading mb-2">Right Product Guidance</h4>
          <p class="text-muted small mb-0">
            We help customers understand product features and choose products according to their exact technical requirements.
          </p>
        </div>
      </div>

      <!-- 5. Customer Satisfaction -->
      <div class="col-lg-4 col-md-6">
        <div class="feature-card">
          <div class="feature-icon-wrapper">
            <i class="bi bi-emoji-smile-fill"></i>
          </div>
          <h4 class="h5 font-heading mb-2">Customer Satisfaction</h4>
          <p class="text-muted small mb-0">
            Customer satisfaction is at the heart of our business, driving our service standards and warranty support.
          </p>
        </div>
      </div>

      <!-- 6. Long-Term Relationship -->
      <div class="col-lg-4 col-md-6">
        <div class="feature-card">
          <div class="feature-icon-wrapper">
            <i class="bi bi-heart-pulse-fill"></i>
          </div>
          <h4 class="h5 font-heading mb-2">Long-Term Relationship</h4>
          <p class="text-muted small mb-0">
            We believe in building relationships that continue beyond a single purchase, supporting you for years to come.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- How We Work - 4 Step Process (From PDF Page 5) -->
<section class="py-5 bg-surface border-top border-bottom border-subtle">
  <div class="container-fluid px-lg-5">
    
    <div class="text-center max-w-700 mx-auto mb-5">
      <span class="badge-pill-custom badge-pill-primary mb-2">Our Process</span>
      <h2 class="display-6 font-heading mb-3">How We Work</h2>
      <p class="text-muted">A structured, customer-first approach to delivering the ideal electrical & electronic solutions.</p>
    </div>

    <div class="row g-4">
      
      <!-- Step 01 -->
      <div class="col-lg-3 col-md-6">
        <div class="step-card">
          <div class="step-number">01</div>
          <h4 class="h5 font-heading mb-2">Understand</h4>
          <p class="text-muted small mb-0">
            We understand your product requirement, application scale, technical needs and budget parameters.
          </p>
        </div>
      </div>

      <!-- Step 02 -->
      <div class="col-lg-3 col-md-6">
        <div class="step-card">
          <div class="step-number">02</div>
          <h4 class="h5 font-heading mb-2">Recommend</h4>
          <p class="text-muted small mb-0">
            We help you select the right product and configuration according to your exact requirement.
          </p>
        </div>
      </div>

      <!-- Step 03 -->
      <div class="col-lg-3 col-md-6">
        <div class="step-card">
          <div class="step-number">03</div>
          <h4 class="h5 font-heading mb-2">Supply</h4>
          <p class="text-muted small mb-0">
            We ensure reliable, timely product supply, genuine packaging and professional service.
          </p>
        </div>
      </div>

      <!-- Step 04 -->
      <div class="col-lg-3 col-md-6">
        <div class="step-card">
          <div class="step-number">04</div>
          <h4 class="h5 font-heading mb-2">Support</h4>
          <p class="text-muted small mb-0">
            We remain actively available for post-delivery assistance, warranty guidance, and ongoing customer support.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- Customer Commitment & Partner Strip -->
<section class="py-5">
  <div class="container-fluid px-lg-5">
    <div class="row g-4 align-items-stretch">
      
      <!-- Left: Our Commitment Checklist (From PDF Page 5) -->
      <div class="col-lg-6">
        <div class="p-4 p-md-5 rounded-4 bg-surface border border-subtle h-100 shadow-sm">
          <span class="badge-pill-custom badge-pill-accent mb-3">Our Core Promise</span>
          <h3 class="font-heading mb-4">Our Commitment to You</h3>
          <p class="text-muted mb-4">At Krishna Electronics, we are committed to providing:</p>
          
          <div class="row g-3">
            <div class="col-sm-6">
              <div class="d-flex align-items-center gap-2 p-2 rounded-3 bg-surface-elevated">
                <i class="bi bi-check-circle-fill text-success fs-5"></i>
                <span class="fw-semibold">Quality Products</span>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="d-flex align-items-center gap-2 p-2 rounded-3 bg-surface-elevated">
                <i class="bi bi-check-circle-fill text-success fs-5"></i>
                <span class="fw-semibold">Competitive Prices</span>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="d-flex align-items-center gap-2 p-2 rounded-3 bg-surface-elevated">
                <i class="bi bi-check-circle-fill text-success fs-5"></i>
                <span class="fw-semibold">Transparent Business</span>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="d-flex align-items-center gap-2 p-2 rounded-3 bg-surface-elevated">
                <i class="bi bi-check-circle-fill text-success fs-5"></i>
                <span class="fw-semibold">Professional Service</span>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="d-flex align-items-center gap-2 p-2 rounded-3 bg-surface-elevated">
                <i class="bi bi-check-circle-fill text-success fs-5"></i>
                <span class="fw-semibold">Quick Response</span>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="d-flex align-items-center gap-2 p-2 rounded-3 bg-surface-elevated">
                <i class="bi bi-check-circle-fill text-success fs-5"></i>
                <span class="fw-semibold">Customer Support</span>
              </div>
            </div>
            <div class="col-12">
              <div class="d-flex align-items-center gap-2 p-2 rounded-3 bg-primary-light text-primary">
                <i class="bi bi-star-fill text-warning fs-5"></i>
                <span class="fw-bold">Long-Term Relationship</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right: For Dealers & Business Partners (From PDF Page 4) -->
      <div class="col-lg-6">
        <div class="p-4 p-md-5 rounded-4 bg-glass border border-primary-subtle h-100 shadow-sm d-flex flex-column justify-content-between">
          <div>
            <span class="badge-pill-custom badge-pill-primary mb-3">For Dealers & Business Partners</span>
            <h3 class="font-heading mb-3">Become a Business Partner</h3>
            <p class="text-muted mb-4">
              Krishna Electronics welcomes retailers, dealers, distributors and other business partners interested in developing long-term business relationships. We aim to create mutually beneficial partnerships based on trust, transparent communication and dependable product supply.
            </p>
            
            <h6 class="fw-bold font-heading mb-3">Partnership Benefits:</h6>
            <ul class="list-unstyled d-flex flex-column gap-2 mb-4">
              <li class="d-flex align-items-center gap-2 text-muted">
                <i class="bi bi-check2-circle text-primary fs-5"></i> Competitive business opportunities & wholesale margins
              </li>
              <li class="d-flex align-items-center gap-2 text-muted">
                <i class="bi bi-check2-circle text-primary fs-5"></i> Guaranteed product availability support
              </li>
              <li class="d-flex align-items-center gap-2 text-muted">
                <i class="bi bi-check2-circle text-primary fs-5"></i> Responsive and prioritized communication
              </li>
              <li class="d-flex align-items-center gap-2 text-muted">
                <i class="bi bi-check2-circle text-primary fs-5"></i> Rapidly growing multi-category product portfolio
              </li>
              <li class="d-flex align-items-center gap-2 text-muted">
                <i class="bi bi-check2-circle text-primary fs-5"></i> Enduring, trusted long-term business relationship
              </li>
            </ul>
          </div>

          <div>
            <a href="dealers.php" class="btn btn-premium-primary">
              <i class="bi bi-person-plus-fill me-1"></i> Become a Partner
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Customer Enquiry Section (From PDF Page 5 & 6) -->
<section class="py-5 bg-surface-elevated border-top border-subtle" id="homeEnquirySection">
  <div class="container-fluid px-lg-5">
    <div class="row align-items-center g-5">
      
      <div class="col-lg-5">
        <span class="badge-pill-custom badge-pill-accent mb-2">Customer Enquiry</span>
        <h2 class="display-6 font-heading mb-3">Looking for the Right Product?</h2>
        <p class="text-muted mb-4">
          Tell us what you need and our dedicated technical sales team will get back to you with competitive quotes and availability details.
        </p>

        <div class="d-flex flex-column gap-3 mb-4">
          <div class="d-flex align-items-center gap-3">
            <div class="feature-icon-wrapper mb-0" style="width: 48px; height: 48px; font-size: 1.2rem;">
              <i class="bi bi-telephone-inbound-fill"></i>
            </div>
            <div>
              <span class="text-muted small">Direct Call</span>
              <h6 class="mb-0 fw-bold"><a href="tel:<?php echo PRIMARY_PHONE_RAW; ?>"><?php echo PRIMARY_PHONE; ?></a></h6>
            </div>
          </div>
          
          <div class="d-flex align-items-center gap-3">
            <div class="feature-icon-wrapper mb-0 bg-success-subtle text-success" style="width: 48px; height: 48px; font-size: 1.2rem;">
              <i class="bi bi-whatsapp"></i>
            </div>
            <div>
              <span class="text-muted small">WhatsApp Instant Support</span>
              <h6 class="mb-0 fw-bold"><a href="<?php echo getWhatsAppUrl(); ?>" target="_blank" rel="noopener noreferrer" class="text-success">Chat with us now</a></h6>
            </div>
          </div>
        </div>

        <div class="p-3 rounded-3 bg-surface border border-subtle">
          <div class="d-flex align-items-center gap-2 text-warning mb-1">
            <i class="bi bi-clock-history"></i>
            <span class="fw-bold small">Business Hours</span>
          </div>
          <p class="small text-muted mb-0"><?php echo BUSINESS_HOURS; ?></p>
        </div>
      </div>

      <!-- Enquiry Form Card -->
      <div class="col-lg-7">
        <div class="p-4 p-md-5 rounded-4 bg-surface border border-subtle shadow-md">
          <h4 class="font-heading mb-4">Send a Product Enquiry</h4>
          
          <form class="ajax-enquiry-form needs-validation" novalidate>
            <input type="hidden" name="form_type" value="Homepage Enquiry Form">

            <div class="row g-3">
              <div class="col-md-6">
                <label for="homeName" class="form-label form-label-custom">Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-custom" id="homeName" name="name" placeholder="Your full name" required>
                <div class="invalid-feedback">Please enter your name.</div>
              </div>

              <div class="col-md-6">
                <label for="homeMobile" class="form-label form-label-custom">Mobile Number <span class="text-danger">*</span></label>
                <input type="tel" class="form-control form-control-custom" id="homeMobile" name="mobile" placeholder="e.g. +91 94152 39944" required>
                <div class="invalid-feedback">Please enter a valid mobile number.</div>
              </div>

              <div class="col-md-6">
                <label for="homeEmail" class="form-label form-label-custom">Email Address</label>
                <input type="email" class="form-control form-control-custom" id="homeEmail" name="email" placeholder="name@example.com">
              </div>

              <div class="col-md-6">
                <label for="homeCity" class="form-label form-label-custom">City</label>
                <input type="text" class="form-control form-control-custom" id="homeCity" name="city" placeholder="Your City">
              </div>

              <div class="col-md-8">
                <label for="homeProduct" class="form-label form-label-custom">Product Required <span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-custom" id="homeProduct" name="product" placeholder="e.g. LED TVs, Inverter, Switches, Wires..." required>
                <div class="invalid-feedback">Please specify the product required.</div>
              </div>

              <div class="col-md-4">
                <label for="homeQuantity" class="form-label form-label-custom">Quantity</label>
                <input type="text" class="form-control form-control-custom" id="homeQuantity" name="quantity" placeholder="e.g. 2 Units">
              </div>

              <div class="col-12">
                <label for="homeMessage" class="form-label form-label-custom">Message</label>
                <textarea class="form-control form-control-custom" id="homeMessage" name="message" rows="3" placeholder="Tell us more about your requirements or questions..."></textarea>
              </div>

              <div class="col-12 mt-4 d-flex flex-column flex-sm-row justify-content-between align-items-center gap-3">
                <button type="submit" class="btn btn-premium-primary w-100 w-sm-auto">
                  <i class="bi bi-send-fill me-1"></i> Submit Enquiry
                </button>
                <a href="<?php echo getWhatsAppUrl(); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-premium-whatsapp w-100 w-sm-auto">
                  <i class="bi bi-whatsapp"></i> Quick Quote via WhatsApp
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
