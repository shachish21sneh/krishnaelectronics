<?php
/**
 * Krishna Electronics - Services Page
 * Quality Products | Trusted Service | Reliable Solutions
 */
$currentPage = 'services';
$pageTitle = 'Our Services | Krishna Electronics - Supply, Consultation & Support';
$pageDescription = 'Discover comprehensive electronics supply, technical product consultation, retail & dealer distribution, and dedicated after-sales customer support.';
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
          <i class="bi bi-gear-wide-connected"></i> End-to-End Solutions
        </span>
        <h1 class="display-5 font-heading mb-3">Our Services</h1>
        <p class="fs-5 text-muted mb-0">
          Professional product supply, expert technical consultation, dealer distribution, and dependable customer assistance.
        </p>
      </div>
      <div class="col-lg-5 text-lg-end">
        <button type="button" class="btn btn-premium-primary" data-bs-toggle="modal" data-bs-target="#globalEnquiryModal" data-product="Service Consultation">
          <i class="bi bi-chat-quote-fill me-1"></i> Request Consultation
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Core Services Grid (Directly from PDF Page 4) -->
<section class="py-5">
  <div class="container-fluid px-lg-5">
    
    <div class="text-center max-w-700 mx-auto mb-5">
      <span class="badge-pill-custom badge-pill-accent mb-2">What We Deliver</span>
      <h2 class="display-6 font-heading mb-3">Comprehensive Electronics &amp; Electrical Services</h2>
      <p class="text-muted">
        Tailored support designed for homeowners, retail dealers, electrical contractors, and institutional buyers.
      </p>
    </div>

    <div class="row g-4">
      
      <!-- Service 1: Product Supply -->
      <div class="col-lg-6">
        <div class="p-4 p-md-5 rounded-4 bg-surface border border-subtle h-100 shadow-sm d-flex flex-column justify-content-between">
          <div>
            <div class="feature-icon-wrapper mb-3" style="width: 56px; height: 56px; font-size: 1.5rem;">
              <i class="bi bi-box-seam-fill"></i>
            </div>
            <h3 class="font-heading mb-3">Product Supply</h3>
            <p class="text-muted fs-6 mb-4">
              We provide reliable supply of electronics and electrical products for individual, retail, commercial and business requirements.
            </p>
            
            <h6 class="fw-bold font-heading mb-2">Supply Capabilities:</h6>
            <ul class="list-unstyled d-flex flex-column gap-2 mb-4 text-muted small">
              <li class="d-flex align-items-center gap-2">
                <i class="bi bi-check-circle-fill text-success"></i> Genuine, certified inventory from top industry brands
              </li>
              <li class="d-flex align-items-center gap-2">
                <i class="bi bi-check-circle-fill text-success"></i> Flexible batch sizing — from single units to large bulk orders
              </li>
              <li class="d-flex align-items-center gap-2">
                <i class="bi bi-check-circle-fill text-success"></i> Safe packaging and secure transit to safeguard delicate electronics
              </li>
              <li class="d-flex align-items-center gap-2">
                <i class="bi bi-check-circle-fill text-success"></i> Transparent invoicing and full warranty backing
              </li>
            </ul>
          </div>

          <div class="pt-3 border-top border-subtle">
            <button type="button" class="btn btn-premium-outline btn-sm" data-bs-toggle="modal" data-bs-target="#globalEnquiryModal" data-product="Product Supply Service">
              Inquire About Supply <i class="bi bi-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Service 2: Product Consultation -->
      <div class="col-lg-6">
        <div class="p-4 p-md-5 rounded-4 bg-surface border border-subtle h-100 shadow-sm d-flex flex-column justify-content-between">
          <div>
            <div class="feature-icon-wrapper mb-3 bg-warning-subtle text-warning" style="width: 56px; height: 56px; font-size: 1.5rem;">
              <i class="bi bi-lightbulb-fill"></i>
            </div>
            <h3 class="font-heading mb-3">Product Consultation</h3>
            <p class="text-muted fs-6 mb-4">
              Our team helps customers understand product specifications and select suitable products according to their needs.
            </p>
            
            <h6 class="fw-bold font-heading mb-2">Consultation Areas:</h6>
            <ul class="list-unstyled d-flex flex-column gap-2 mb-4 text-muted small">
              <li class="d-flex align-items-center gap-2">
                <i class="bi bi-check-circle-fill text-success"></i> Inverter &amp; Battery load calculation for home/office backup
              </li>
              <li class="d-flex align-items-center gap-2">
                <i class="bi bi-check-circle-fill text-success"></i> Wire gauge, breaker ratings &amp; safety device sizing
              </li>
              <li class="d-flex align-items-center gap-2">
                <i class="bi bi-check-circle-fill text-success"></i> Smart home compatibility and modular aesthetics guidance
              </li>
              <li class="d-flex align-items-center gap-2">
                <i class="bi bi-check-circle-fill text-success"></i> Cost-to-performance optimization to match specific budgets
              </li>
            </ul>
          </div>

          <div class="pt-3 border-top border-subtle">
            <button type="button" class="btn btn-premium-outline btn-sm" data-bs-toggle="modal" data-bs-target="#globalEnquiryModal" data-product="Product Consultation">
              Book Technical Consultation <i class="bi bi-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Service 3: Dealer & Retail Supply -->
      <div class="col-lg-6">
        <div class="p-4 p-md-5 rounded-4 bg-surface border border-subtle h-100 shadow-sm d-flex flex-column justify-content-between">
          <div>
            <div class="feature-icon-wrapper mb-3 bg-info-subtle text-info" style="width: 56px; height: 56px; font-size: 1.5rem;">
              <i class="bi bi-shop"></i>
            </div>
            <h3 class="font-heading mb-3">Dealer &amp; Retail Supply</h3>
            <p class="text-muted fs-6 mb-4">
              We support retailers, dealers and business customers with product sourcing and supply requirements.
            </p>
            
            <h6 class="fw-bold font-heading mb-2">Dealer Support Features:</h6>
            <ul class="list-unstyled d-flex flex-column gap-2 mb-4 text-muted small">
              <li class="d-flex align-items-center gap-2">
                <i class="bi bi-check-circle-fill text-success"></i> High margin wholesale distribution pricing
              </li>
              <li class="d-flex align-items-center gap-2">
                <i class="bi bi-check-circle-fill text-success"></i> Consistent stock availability and fast dispatch cycles
              </li>
              <li class="d-flex align-items-center gap-2">
                <i class="bi bi-check-circle-fill text-success"></i> Credit terms &amp; scheduled replenishment for verified partners
              </li>
              <li class="d-flex align-items-center gap-2">
                <i class="bi bi-check-circle-fill text-success"></i> Marketing collateral, product catalogs, and samples support
              </li>
            </ul>
          </div>

          <div class="pt-3 border-top border-subtle">
            <a href="dealers.php" class="btn btn-premium-primary btn-sm">
              Explore Partner Program <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Service 4: Customer Support -->
      <div class="col-lg-6">
        <div class="p-4 p-md-5 rounded-4 bg-surface border border-subtle h-100 shadow-sm d-flex flex-column justify-content-between">
          <div>
            <div class="feature-icon-wrapper mb-3 bg-success-subtle text-success" style="width: 56px; height: 56px; font-size: 1.5rem;">
              <i class="bi bi-headset"></i>
            </div>
            <h3 class="font-heading mb-3">Customer Support</h3>
            <p class="text-muted fs-6 mb-4">
              We believe in responsive communication and professional assistance before and after purchase.
            </p>
            
            <h6 class="fw-bold font-heading mb-2">Support Commitments:</h6>
            <ul class="list-unstyled d-flex flex-column gap-2 mb-4 text-muted small">
              <li class="d-flex align-items-center gap-2">
                <i class="bi bi-check-circle-fill text-success"></i> Fast-track WhatsApp &amp; Phone troubleshooting assistance
              </li>
              <li class="d-flex align-items-center gap-2">
                <i class="bi bi-check-circle-fill text-success"></i> Warranty registration and liaison with manufacturer service centers
              </li>
              <li class="d-flex align-items-center gap-2">
                <i class="bi bi-check-circle-fill text-success"></i> On-site delivery coordination and technician assistance referrals
              </li>
              <li class="d-flex align-items-center gap-2">
                <i class="bi bi-check-circle-fill text-success"></i> Proactive maintenance check reminders for battery and UPS health
              </li>
            </ul>
          </div>

          <div class="pt-3 border-top border-subtle">
            <a href="contact.php" class="btn btn-premium-outline btn-sm">
              Contact Support Desk <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- How We Work Process (PDF Page 5) -->
<section class="py-5 bg-surface-elevated border-top border-subtle">
  <div class="container-fluid px-lg-5">
    
    <div class="text-center max-w-700 mx-auto mb-5">
      <span class="badge-pill-custom badge-pill-primary mb-2">Our Execution Roadmap</span>
      <h2 class="display-6 font-heading mb-3">How We Work</h2>
      <p class="text-muted">A clear, transparent 4-stage operational blueprint for every customer.</p>
    </div>

    <div class="row g-4">
      
      <!-- 01 Understand -->
      <div class="col-lg-3 col-md-6">
        <div class="step-card">
          <div class="step-number">01</div>
          <h4 class="h5 font-heading mb-2">Understand</h4>
          <p class="text-muted small mb-0">
            We understand your product requirement, technical constraints, installation scope and budget.
          </p>
        </div>
      </div>

      <!-- 02 Recommend -->
      <div class="col-lg-3 col-md-6">
        <div class="step-card">
          <div class="step-number">02</div>
          <h4 class="h5 font-heading mb-2">Recommend</h4>
          <p class="text-muted small mb-0">
            We help you select the right product according to your requirement with side-by-side spec comparison.
          </p>
        </div>
      </div>

      <!-- 03 Supply -->
      <div class="col-lg-3 col-md-6">
        <div class="step-card">
          <div class="step-number">03</div>
          <h4 class="h5 font-heading mb-2">Supply</h4>
          <p class="text-muted small mb-0">
            We ensure reliable product supply, verified batch testing, authentic packaging, and professional service.
          </p>
        </div>
      </div>

      <!-- 04 Support -->
      <div class="col-lg-3 col-md-6">
        <div class="step-card">
          <div class="step-number">04</div>
          <h4 class="h5 font-heading mb-2">Support</h4>
          <p class="text-muted small mb-0">
            We remain available for assistance, replacement coordination, warranty guidance, and ongoing customer support.
          </p>
        </div>
      </div>

    </div>

    <!-- Direct WhatsApp Service CTA -->
    <div class="mt-5 p-4 rounded-4 bg-surface border border-subtle text-center">
      <h4 class="font-heading mb-2">Need Rapid Product Guidance or Quotation?</h4>
      <p class="text-muted small mb-3">Speak directly with our technical coordinator on WhatsApp for immediate answers.</p>
      <a href="<?php echo getWhatsAppUrl('Hello Krishna Electronics, I need help selecting the right electrical/electronic products. Please assist me.'); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-premium-whatsapp">
        <i class="bi bi-whatsapp me-1"></i> Chat with a Technical Specialist
      </a>
    </div>

  </div>
</section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
