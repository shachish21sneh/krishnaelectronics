<?php
/**
 * Krishna Electronics - Dealers & Business Partners Page
 * Quality Products | Trusted Service | Reliable Solutions
 */
$currentPage = 'dealers';
$pageTitle = 'Dealers & Business Partners | Krishna Electronics Partnership Program';
$pageDescription = 'Partner with Krishna Electronics. Enjoy competitive wholesale margins, guaranteed product availability, growing catalog, and dependable long-term relationships.';
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
          <i class="bi bi-people-fill"></i> B2B Collaboration
        </span>
        <h1 class="display-5 font-heading mb-3">For Dealers &amp; Business Partners</h1>
        <p class="fs-5 text-muted mb-0">
          Grow your retail or contracting business with dependable stock supply, competitive trade margins, and a partner committed to your success.
        </p>
      </div>
      <div class="col-lg-5 text-lg-end">
        <a href="#partnerFormSection" class="btn btn-premium-primary">
          <i class="bi bi-person-plus-fill me-1"></i> Apply for Dealership
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Become a Business Partner & Partnership Benefits (PDF Page 4) -->
<section class="py-5">
  <div class="container-fluid px-lg-5">
    <div class="row align-items-center g-5">
      
      <div class="col-lg-6">
        <span class="badge-pill-custom badge-pill-accent mb-2">Join Our Network</span>
        <h2 class="display-6 font-heading mb-4">Become a Business Partner</h2>
        
        <p class="text-muted fs-6 mb-4 leading-relaxed">
          <strong>Krishna Electronics</strong> welcomes retailers, dealers, distributors, electrical contractors, and other business partners interested in developing long-term business relationships.
        </p>

        <div class="p-4 rounded-4 bg-surface border border-subtle mb-4 shadow-sm">
          <p class="fs-6 text-muted mb-0">
            "We aim to create mutually beneficial partnerships based on trust, transparent communication and dependable product supply."
          </p>
        </div>

        <p class="text-muted mb-4">
          Whether you run an electrical retail counter, manage contracting projects, or distribute home appliances, we ensure you have priority access to verified stock and competitive margins.
        </p>

        <div class="d-flex flex-wrap gap-3">
          <a href="#partnerFormSection" class="btn btn-premium-primary">
            <i class="bi bi-pencil-square me-1"></i> Partner Onboarding Form
          </a>
          <a href="<?php echo getWhatsAppUrl('Hello Krishna Electronics, I want to discuss a dealership/retailer business partnership. Please connect me with the proprietor.'); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-premium-whatsapp">
            <i class="bi bi-whatsapp me-1"></i> WhatsApp Trade Desk
          </a>
        </div>
      </div>

      <!-- Partnership Benefits Card List (Directly from PDF Page 4) -->
      <div class="col-lg-6">
        <div class="p-4 p-md-5 rounded-4 bg-surface border border-subtle shadow-md">
          <span class="badge-pill-custom badge-pill-primary mb-3">Core Advantages</span>
          <h3 class="font-heading mb-4">Partnership Benefits</h3>

          <div class="d-flex flex-column gap-3">
            
            <div class="d-flex align-items-start gap-3 p-3 rounded-3 bg-surface-elevated border border-subtle">
              <div class="feature-icon-wrapper mb-0" style="width: 44px; height: 44px; font-size: 1.2rem;">
                <i class="bi bi-graph-up-arrow text-primary"></i>
              </div>
              <div>
                <h6 class="font-heading mb-1">Competitive Business Opportunities</h6>
                <p class="small text-muted mb-0">Attractive trade discounts and high-margin product structures to maximize your profitability.</p>
              </div>
            </div>

            <div class="d-flex align-items-start gap-3 p-3 rounded-3 bg-surface-elevated border border-subtle">
              <div class="feature-icon-wrapper mb-0 bg-warning-subtle text-warning" style="width: 44px; height: 44px; font-size: 1.2rem;">
                <i class="bi bi-boxes"></i>
              </div>
              <div>
                <h6 class="font-heading mb-1">Product Availability Support</h6>
                <p class="small text-muted mb-0">Direct priority allocation from warehouses ensuring zero stock-outs during peak seasons.</p>
              </div>
            </div>

            <div class="d-flex align-items-start gap-3 p-3 rounded-3 bg-surface-elevated border border-subtle">
              <div class="feature-icon-wrapper mb-0 bg-success-subtle text-success" style="width: 44px; height: 44px; font-size: 1.2rem;">
                <i class="bi bi-chat-dots-fill"></i>
              </div>
              <div>
                <h6 class="font-heading mb-1">Responsive Communication</h6>
                <p class="small text-muted mb-0">Dedicated account manager for instant price checks, billing assistance, and order status.</p>
              </div>
            </div>

            <div class="d-flex align-items-start gap-3 p-3 rounded-3 bg-surface-elevated border border-subtle">
              <div class="feature-icon-wrapper mb-0 bg-info-subtle text-info" style="width: 44px; height: 44px; font-size: 1.2rem;">
                <i class="bi bi-grid-3x3-gap-fill"></i>
              </div>
              <div>
                <h6 class="font-heading mb-1">Growing Product Portfolio</h6>
                <p class="small text-muted mb-0">Continuous onboarding of new smart tech, LED TVs, solar inverters, and lithium solutions.</p>
              </div>
            </div>

            <div class="d-flex align-items-start gap-3 p-3 rounded-3 bg-surface-elevated border border-subtle">
              <div class="feature-icon-wrapper mb-0 bg-danger-subtle text-danger" style="width: 44px; height: 44px; font-size: 1.2rem;">
                <i class="bi bi-handshake-fill"></i>
              </div>
              <div>
                <h6 class="font-heading mb-1">Long-Term Business Relationship</h6>
                <p class="small text-muted mb-0">We build enduring bonds based on mutual trust, steady growth, and collaborative respect.</p>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Dealer Application Form Section -->
<section class="py-5 bg-surface-elevated border-top border-subtle" id="partnerFormSection">
  <div class="container-fluid px-lg-5">
    <div class="max-w-900 mx-auto">
      
      <div class="text-center mb-5">
        <span class="badge-pill-custom badge-pill-accent mb-2">Dealership Application</span>
        <h2 class="display-6 font-heading mb-3">Partner With Krishna Electronics</h2>
        <p class="text-muted">Fill in your business details below. Our partnership team will review and contact you within 24 hours.</p>
      </div>

      <div class="p-4 p-md-5 rounded-4 bg-surface border border-subtle shadow-md">
        <form class="ajax-enquiry-form needs-validation" novalidate>
          <input type="hidden" name="form_type" value="Dealer / Partner Onboarding Application">

          <div class="row g-3">
            
            <!-- Contact Name -->
            <div class="col-md-6">
              <label for="dealerName" class="form-label form-label-custom">Contact Person Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control form-control-custom" id="dealerName" name="name" placeholder="Full name" required>
              <div class="invalid-feedback">Please enter your name.</div>
            </div>

            <!-- Firm / Shop Name -->
            <div class="col-md-6">
              <label for="dealerFirm" class="form-label form-label-custom">Business / Firm / Shop Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control form-control-custom" id="dealerFirm" name="firm_name" placeholder="e.g. Om Electricals & Hardware" required>
              <div class="invalid-feedback">Please enter your firm name.</div>
            </div>

            <!-- Mobile -->
            <div class="col-md-6">
              <label for="dealerMobile" class="form-label form-label-custom">Mobile Number <span class="text-danger">*</span></label>
              <input type="tel" class="form-control form-control-custom" id="dealerMobile" name="mobile" placeholder="e.g. +91 98765 43210" required>
              <div class="invalid-feedback">Please enter a valid mobile number.</div>
            </div>

            <!-- Email -->
            <div class="col-md-6">
              <label for="dealerEmail" class="form-label form-label-custom">Email Address</label>
              <input type="email" class="form-control form-control-custom" id="dealerEmail" name="email" placeholder="shop@example.com">
            </div>

            <!-- City & State -->
            <div class="col-md-6">
              <label for="dealerCity" class="form-label form-label-custom">City &amp; State <span class="text-danger">*</span></label>
              <input type="text" class="form-control form-control-custom" id="dealerCity" name="city" placeholder="e.g. New Delhi, Delhi" required>
              <div class="invalid-feedback">Please provide your city and state.</div>
            </div>

            <!-- Business Type -->
            <div class="col-md-6">
              <label for="dealerType" class="form-label form-label-custom">Business Profile</label>
              <select class="form-select form-control-custom" id="dealerType" name="business_type">
                <option value="Retailer / Shop Owner">Retailer / Counter Shop Owner</option>
                <option value="Dealer / Distributor">Sub-Dealer / Regional Distributor</option>
                <option value="Electrical Contractor">Electrical Contractor / Builder</option>
                <option value="Institutional Buyer">Institutional / Corporate Buyer</option>
                <option value="Other">Other Business Entity</option>
              </select>
            </div>

            <!-- Categories of Interest -->
            <div class="col-md-8">
              <label for="dealerProduct" class="form-label form-label-custom">Primary Products of Interest <span class="text-danger">*</span></label>
              <input type="text" class="form-control form-control-custom" id="dealerProduct" name="product" placeholder="e.g. Inverters & Batteries, LED TVs, Wires & MCBs" required>
              <div class="invalid-feedback">Please mention the product categories you trade in.</div>
            </div>

            <!-- Estimated Monthly Volume -->
            <div class="col-md-4">
              <label for="dealerQuantity" class="form-label form-label-custom">Estimated Monthly Volume</label>
              <input type="text" class="form-control form-control-custom" id="dealerQuantity" name="quantity" placeholder="e.g. ₹50k - ₹2 Lakhs">
            </div>

            <!-- Message / Additional Requirements -->
            <div class="col-12">
              <label for="dealerMessage" class="form-label form-label-custom">Message &amp; Dealership Inquiry Details</label>
              <textarea class="form-control form-control-custom" id="dealerMessage" name="message" rows="3" placeholder="Tell us about your existing counter setup, brands handled, or territory requirements..."></textarea>
            </div>

            <!-- Submit Button & WhatsApp CTA -->
            <div class="col-12 mt-4 pt-2 d-flex flex-column flex-sm-row justify-content-between align-items-center gap-3">
              <button type="submit" class="btn btn-premium-primary w-100 w-sm-auto">
                <i class="bi bi-check2-circle me-1"></i> Submit Partner Application
              </button>
              <a href="<?php echo getWhatsAppUrl('Hello Krishna Electronics, I want to apply for dealer/partner pricing.'); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-premium-whatsapp w-100 w-sm-auto">
                <i class="bi bi-whatsapp me-1"></i> Fast-Track via WhatsApp
              </a>
            </div>

          </div>
        </form>
      </div>

    </div>
  </div>
</section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
