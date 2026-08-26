<?php
/**
 * Krishna Electronics - About Us Page
 * Quality Products | Trusted Service | Reliable Solutions
 */
$currentPage = 'about';
$pageTitle = 'About Us | Krishna Electronics - Trusted Electrical & Electronics Partner';
$pageDescription = 'Learn about Krishna Electronics, our business philosophy, vision, mission, and commitment to providing quality electrical and electronic solutions.';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<!-- Page Header Hero -->
<section class="py-5 bg-surface-elevated border-bottom border-subtle position-relative overflow-hidden">
  <div class="hero-mesh-grid"></div>
  <div class="container-fluid px-lg-5 position-relative">
    <div class="row align-items-center g-4">
      <div class="col-lg-7">
        <span class="badge-pill-custom badge-pill-primary mb-3">
          <i class="bi bi-info-circle-fill"></i> About Our Firm
        </span>
        <h1 class="display-5 font-heading mb-3">About Krishna Electronics</h1>
        <p class="fs-5 text-muted mb-0">
          Your Trusted Electronics &amp; Electrical Partner — committed to quality, transparency, and dependable support.
        </p>
      </div>
      <div class="col-lg-5 text-lg-end">
        <div class="d-inline-flex flex-wrap gap-2">
          <a href="products.php" class="btn btn-premium-primary">
            <i class="bi bi-grid-3x3-gap"></i> Explore Products
          </a>
          <button type="button" class="btn btn-premium-outline" data-bs-toggle="modal" data-bs-target="#globalEnquiryModal">
            <i class="bi bi-chat-dots"></i> Get in Touch
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Company Overview & Philosophy Section (PDF Page 1) -->
<section class="py-5">
  <div class="container-fluid px-lg-5">
    <div class="row align-items-center g-5">
      
      <!-- Left Column: Story & Objective -->
      <div class="col-lg-6">
        <span class="badge-pill-custom badge-pill-accent mb-2">Our Profile</span>
        <h2 class="display-6 font-heading mb-4">Your Trusted Electronics &amp; Electrical Partner</h2>
        
        <p class="text-muted fs-6 mb-4 leading-relaxed">
          <strong>Krishna Electronics</strong> is a customer-focused <?php echo FIRM_TYPE; ?> engaged in the supply, trading and distribution of electronics, electrical products and related solutions.
        </p>
        
        <div class="p-4 rounded-4 bg-surface border border-subtle mb-4 shadow-sm">
          <h5 class="font-heading text-primary mb-2"><i class="bi bi-bullseye me-2"></i> Our Objective</h5>
          <p class="text-muted mb-0">
            Our objective is simple — to understand our customer's requirements and provide the right product, dependable service and professional support.
          </p>
        </div>

        <p class="text-muted mb-4">
          We serve individual customers, retailers, dealers, businesses and institutions with an unwavering commitment to quality, transparency and customer satisfaction.
        </p>

        <div class="d-flex flex-wrap gap-3">
          <div class="d-flex align-items-center gap-2 p-3 rounded-3 bg-surface border border-subtle flex-grow-1">
            <i class="bi bi-people-fill text-primary fs-4"></i>
            <div>
              <div class="fw-bold">Customer Focused</div>
              <small class="text-muted">Tailored recommendations</small>
            </div>
          </div>
          <div class="d-flex align-items-center gap-2 p-3 rounded-3 bg-surface border border-subtle flex-grow-1">
            <i class="bi bi-shield-lock-fill text-success fs-4"></i>
            <div>
              <div class="fw-bold">Transparent Dealing</div>
              <small class="text-muted">Honest &amp; fair pricing</small>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column: Business Philosophy Banner -->
      <div class="col-lg-6">
        <div class="philosophy-banner p-4 p-md-5">
          <div class="d-flex align-items-center gap-2 mb-3">
            <i class="bi bi-stars text-warning fs-3"></i>
            <span class="text-uppercase tracking-wider fw-bold text-white-50 small">Our Business Philosophy</span>
          </div>

          <h3 class="font-heading text-white mb-4">Building Enduring Value Through Integrity</h3>

          <div class="philosophy-equation mb-4">
            Quality + Trust + Service = Long-Term Relationships
          </div>

          <p class="fs-6 text-light mb-4">
            "We believe that customer satisfaction is not just about selling a product; it is about providing the right solution and supporting our customers throughout their journey."
          </p>

          <div class="row g-3 pt-3 border-top border-secondary">
            <div class="col-4 text-center">
              <div class="fs-4 fw-bold text-info">1. Quality</div>
              <small class="text-white-50">Proven Brands</small>
            </div>
            <div class="col-4 text-center">
              <div class="fs-4 fw-bold text-warning">2. Trust</div>
              <small class="text-white-50">Open &amp; Honest</small>
            </div>
            <div class="col-4 text-center">
              <div class="fs-4 fw-bold text-success">3. Service</div>
              <small class="text-white-50">Life-long Support</small>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Vision & Mission Section (PDF Page 1 & 2) -->
<section class="py-5 bg-surface-elevated border-top border-bottom border-subtle">
  <div class="container-fluid px-lg-5">
    <div class="row g-4 align-items-stretch">
      
      <!-- Vision Card -->
      <div class="col-lg-6">
        <div class="p-4 p-md-5 rounded-4 bg-surface border border-subtle h-100 shadow-sm d-flex flex-column justify-content-between">
          <div>
            <div class="feature-icon-wrapper mb-3" style="width: 54px; height: 54px; font-size: 1.4rem;">
              <i class="bi bi-eye-fill"></i>
            </div>
            <span class="badge-pill-custom badge-pill-primary mb-2">Our Vision</span>
            <h3 class="font-heading mb-3">Building a Trusted Name in Electronics &amp; Electrical Solutions</h3>
            <p class="text-muted fs-6 mb-4">
              Our vision is to establish <strong>Krishna Electronics</strong> as a trusted and reliable business name by offering quality products, competitive pricing and professional customer service across residential, commercial, and industrial markets.
            </p>
          </div>
          
          <div class="p-3 rounded-3 bg-primary-light text-primary border border-primary-subtle">
            <i class="bi bi-quote fs-4 me-1"></i>
            <span class="fw-semibold">To be recognized as the first-choice destination for reliable electronics, genuine electrical equipment, and advanced power backup systems.</span>
          </div>
        </div>
      </div>

      <!-- Mission Card -->
      <div class="col-lg-6">
        <div class="p-4 p-md-5 rounded-4 bg-surface border border-subtle h-100 shadow-sm">
          <div class="feature-icon-wrapper mb-3 bg-warning-subtle text-warning" style="width: 54px; height: 54px; font-size: 1.4rem;">
            <i class="bi bi-compass-fill"></i>
          </div>
          <span class="badge-pill-custom badge-pill-accent mb-2">Our Mission</span>
          <h3 class="font-heading mb-3">Our Mission is to:</h3>
          
          <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
            <li class="d-flex align-items-start gap-3">
              <i class="bi bi-check-circle-fill text-success fs-5 mt-1"></i>
              <div>
                <strong class="text-main">Provide quality and reliable products</strong>
                <p class="text-muted small mb-0">Delivering verified stock from reputable manufacturers with assured performance.</p>
              </div>
            </li>
            <li class="d-flex align-items-start gap-3">
              <i class="bi bi-check-circle-fill text-success fs-5 mt-1"></i>
              <div>
                <strong class="text-main">Offer competitive and transparent pricing</strong>
                <p class="text-muted small mb-0">Ensuring genuine market rates without hidden costs or compromises.</p>
              </div>
            </li>
            <li class="d-flex align-items-start gap-3">
              <i class="bi bi-check-circle-fill text-success fs-5 mt-1"></i>
              <div>
                <strong class="text-main">Understand customer requirements</strong>
                <p class="text-muted small mb-0">Taking time to listen and diagnose exact specifications before recommending solutions.</p>
              </div>
            </li>
            <li class="d-flex align-items-start gap-3">
              <i class="bi bi-check-circle-fill text-success fs-5 mt-1"></i>
              <div>
                <strong class="text-main">Provide professional product guidance</strong>
                <p class="text-muted small mb-0">Offering expert technical consultation to ensure optimal safety and efficiency.</p>
              </div>
            </li>
            <li class="d-flex align-items-start gap-3">
              <i class="bi bi-check-circle-fill text-success fs-5 mt-1"></i>
              <div>
                <strong class="text-main">Maintain timely and responsive communication</strong>
                <p class="text-muted small mb-0">Prompt assistance via phone, WhatsApp, and email at all stages.</p>
              </div>
            </li>
            <li class="d-flex align-items-start gap-3">
              <i class="bi bi-check-circle-fill text-success fs-5 mt-1"></i>
              <div>
                <strong class="text-main">Build long-term relationships with customers and business partners</strong>
                <p class="text-muted small mb-0">Cultivating trust and mutual prosperity with dealers, clients, and partners.</p>
              </div>
            </li>
            <li class="d-flex align-items-start gap-3">
              <i class="bi bi-check-circle-fill text-success fs-5 mt-1"></i>
              <div>
                <strong class="text-main">Continuously expand our product range</strong>
                <p class="text-muted small mb-0">Adopting latest smart technologies, energy-efficient gear, and lithium storage solutions.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Core Commitment Section (PDF Page 5) -->
<section class="py-5">
  <div class="container-fluid px-lg-5">
    
    <div class="text-center max-w-700 mx-auto mb-5">
      <span class="badge-pill-custom badge-pill-primary mb-2">Our Promise</span>
      <h2 class="display-6 font-heading mb-3">Our Core Commitment</h2>
      <p class="text-muted">At Krishna Electronics, we operate with strict standards across every touchpoint.</p>
    </div>

    <div class="row g-4 justify-content-center">
      
      <div class="col-md-4 col-sm-6">
        <div class="p-4 rounded-4 bg-surface border border-subtle text-center h-100 shadow-sm">
          <i class="bi bi-check-circle-fill text-success fs-1 mb-3 d-inline-block"></i>
          <h5 class="font-heading mb-2">Quality Products</h5>
          <p class="small text-muted mb-0">Tested, verified, and high-performance electronics and electrical parts.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="p-4 rounded-4 bg-surface border border-subtle text-center h-100 shadow-sm">
          <i class="bi bi-check-circle-fill text-success fs-1 mb-3 d-inline-block"></i>
          <h5 class="font-heading mb-2">Competitive Prices</h5>
          <p class="small text-muted mb-0">Best possible value for individual buyers and wholesale dealer partners.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="p-4 rounded-4 bg-surface border border-subtle text-center h-100 shadow-sm">
          <i class="bi bi-check-circle-fill text-success fs-1 mb-3 d-inline-block"></i>
          <h5 class="font-heading mb-2">Transparent Business</h5>
          <p class="small text-muted mb-0">Clear documentation, genuine invoices, and honest product specifications.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="p-4 rounded-4 bg-surface border border-subtle text-center h-100 shadow-sm">
          <i class="bi bi-check-circle-fill text-success fs-1 mb-3 d-inline-block"></i>
          <h5 class="font-heading mb-2">Professional Service</h5>
          <p class="small text-muted mb-0">Knowledgeable support staff ready to assist with sizing and product matching.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="p-4 rounded-4 bg-surface border border-subtle text-center h-100 shadow-sm">
          <i class="bi bi-check-circle-fill text-success fs-1 mb-3 d-inline-block"></i>
          <h5 class="font-heading mb-2">Quick Response</h5>
          <p class="small text-muted mb-0">Immediate replies on WhatsApp and calls for fast order fulfillment.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="p-4 rounded-4 bg-surface border border-subtle text-center h-100 shadow-sm">
          <i class="bi bi-check-circle-fill text-success fs-1 mb-3 d-inline-block"></i>
          <h5 class="font-heading mb-2">Customer Support</h5>
          <p class="small text-muted mb-0">Continuous after-sales guidance, warranty facilitation, and maintenance advice.</p>
        </div>
      </div>

    </div>

    <!-- Long Term Relationships Hero Banner -->
    <div class="mt-5 p-4 p-md-5 rounded-4 bg-primary-light text-primary border border-primary-subtle text-center">
      <h3 class="font-heading mb-2">✔ Long-Term Relationship</h3>
      <p class="fs-6 mb-4 max-w-700 mx-auto text-muted">
        We prioritize relationships that stand the test of time. Reach out today and discover a dependable partner for all your electronics and electrical supply requirements.
      </p>
      <div class="d-flex justify-content-center gap-3 flex-wrap">
        <a href="contact.php" class="btn btn-premium-primary">
          <i class="bi bi-telephone-fill me-1"></i> Contact Us Today
        </a>
        <a href="<?php echo getWhatsAppUrl(); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-premium-whatsapp">
          <i class="bi bi-whatsapp me-1"></i> Chat on WhatsApp
        </a>
      </div>
    </div>

  </div>
</section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
