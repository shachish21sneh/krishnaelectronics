<?php
/**
 * Krishna Electronics - Contact Us Page
 * Quality Products | Trusted Service | Reliable Solutions
 */
$currentPage = 'contact';
$pageTitle = 'Contact Us | Krishna Electronics - Reach Our Sales & Support Team';
$pageDescription = 'Get in touch with Krishna Electronics for product enquiries, quotations, dealer partnerships, or business requirements. Call or WhatsApp us today.';
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
          <i class="bi bi-headset"></i> Direct Communications
        </span>
        <h1 class="display-5 font-heading mb-3">Contact Us</h1>
        <p class="fs-5 text-muted mb-0">
          Get in Touch with <strong>Krishna Electronics</strong> — for product enquiries, quotations, dealer enquiries, or business requirements.
        </p>
      </div>
      <div class="col-lg-5 text-lg-end">
        <div class="d-inline-flex flex-wrap gap-2">
          <a href="tel:<?php echo PRIMARY_PHONE_RAW; ?>" class="btn btn-premium-primary">
            <i class="bi bi-telephone-fill me-1"></i> Call Now
          </a>
          <a href="<?php echo getWhatsAppUrl(); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-premium-whatsapp">
            <i class="bi bi-whatsapp me-1"></i> WhatsApp Us
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Information Cards (Directly matching PDF Page 6) -->
<section class="py-5">
  <div class="container-fluid px-lg-5">
    
    <div class="row g-4 mb-5">
      
      <!-- Card 1: Proprietorship & Office Address -->
      <div class="col-lg-3 col-md-6">
        <div class="contact-info-card">
          <div class="contact-icon">
            <i class="bi bi-building"></i>
          </div>
          <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill px-3 py-1 small mb-2">
            <?php echo FIRM_TYPE; ?>
          </span>
          <h5 class="font-heading mb-1"><?php echo SITE_NAME; ?></h5>
          <p class="small text-muted mb-3">Proprietor: <strong class="text-main"><?php echo PROPRIETOR_NAME; ?></strong></p>
          
          <div class="d-flex align-items-start gap-2 text-muted small">
            <i class="bi bi-geo-alt-fill text-primary mt-1"></i>
            <span><?php echo COMPANY_ADDRESS; ?></span>
          </div>
        </div>
      </div>

      <!-- Card 2: Phone Support -->
      <div class="col-lg-3 col-md-6">
        <div class="contact-info-card">
          <div class="contact-icon bg-info-subtle text-info">
            <i class="bi bi-telephone-fill"></i>
          </div>
          <span class="badge bg-info-subtle text-info border border-info-subtle rounded-pill px-3 py-1 small mb-2">
            Direct Calls
          </span>
          <h5 class="font-heading mb-1">Mobile &amp; Support</h5>
          <p class="small text-muted mb-3">Immediate assistance for pricing &amp; orders</p>
          
          <div class="d-flex flex-column gap-2 small">
            <a href="tel:<?php echo PRIMARY_PHONE_RAW; ?>" class="fw-bold text-main d-flex align-items-center gap-2">
              <i class="bi bi-telephone-outbound text-primary"></i> <?php echo PRIMARY_PHONE; ?>
            </a>
            <span class="text-muted d-flex align-items-center gap-2">
              <i class="bi bi-headset text-primary"></i> Mon - Sat: 10:00 AM - 07:00 PM
            </span>
          </div>
        </div>
      </div>

      <!-- Card 3: WhatsApp Channel -->
      <div class="col-lg-3 col-md-6">
        <div class="contact-info-card">
          <div class="contact-icon bg-success-subtle text-success">
            <i class="bi bi-whatsapp"></i>
          </div>
          <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-3 py-1 small mb-2">
            Instant Chat
          </span>
          <h5 class="font-heading mb-1">WhatsApp Chat</h5>
          <p class="small text-muted mb-3">Pre-filled query for instant quotes</p>
          
          <div class="d-flex flex-column gap-2 small">
            <a href="<?php echo getWhatsAppUrl(); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-premium-whatsapp btn-sm w-100">
              <i class="bi bi-whatsapp me-1"></i> Start WhatsApp Chat
            </a>
            <span class="text-muted" style="font-size: 0.75rem;">WhatsApp: +<?php echo WHATSAPP_NUMBER; ?></span>
          </div>
        </div>
      </div>

      <!-- Card 4: Email & Business Hours -->
      <div class="col-lg-3 col-md-6">
        <div class="contact-info-card">
          <div class="contact-icon bg-warning-subtle text-warning">
            <i class="bi bi-envelope-open-fill"></i>
          </div>
          <span class="badge bg-warning-subtle text-warning border border-warning-subtle rounded-pill px-3 py-1 small mb-2">
            Official Email
          </span>
          <h5 class="font-heading mb-1">Email Inquiries</h5>
          <p class="small text-muted mb-3">For formal POs and official letters</p>
          
          <div class="d-flex flex-column gap-1 small mb-3">
            <a href="mailto:<?php echo PRIMARY_EMAIL; ?>" class="text-main fw-semibold"><?php echo PRIMARY_EMAIL; ?></a>
          </div>

          <div class="pt-2 border-top border-subtle">
            <small class="d-block text-muted"><i class="bi bi-clock me-1 text-warning"></i> <?php echo BUSINESS_HOURS; ?></small>
          </div>
        </div>
      </div>

    </div>

    <!-- Main Contact Form & Map Row -->
    <div class="row g-5 align-items-stretch">
      
      <!-- Left Column: Customer Enquiry Form (PDF Page 5 & 6) -->
      <div class="col-lg-7">
        <div class="p-4 p-md-5 rounded-4 bg-surface border border-subtle shadow-md h-100">
          <span class="badge-pill-custom badge-pill-primary mb-2">Get in Touch</span>
          <h3 class="font-heading mb-2">Customer Enquiry Form</h3>
          <p class="text-muted small mb-4">
            Tell us what you need and our team will get back to you with prices and stock status.
          </p>

          <form class="ajax-enquiry-form needs-validation" novalidate>
            <input type="hidden" name="form_type" value="Contact Page Enquiry Form">

            <div class="row g-3">
              <div class="col-md-6">
                <label for="contactName" class="form-label form-label-custom">Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-custom" id="contactName" name="name" placeholder="Your full name" required>
                <div class="invalid-feedback">Please enter your name.</div>
              </div>

              <div class="col-md-6">
                <label for="contactMobile" class="form-label form-label-custom">Mobile Number <span class="text-danger">*</span></label>
                <input type="tel" class="form-control form-control-custom" id="contactMobile" name="mobile" placeholder="e.g. +91 94152 39944" required>
                <div class="invalid-feedback">Please enter a valid mobile number.</div>
              </div>

              <div class="col-md-6">
                <label for="contactEmail" class="form-label form-label-custom">Email Address</label>
                <input type="email" class="form-control form-control-custom" id="contactEmail" name="email" placeholder="name@example.com">
              </div>

              <div class="col-md-6">
                <label for="contactCity" class="form-label form-label-custom">City</label>
                <input type="text" class="form-control form-control-custom" id="contactCity" name="city" placeholder="Your City / Town">
              </div>

              <div class="col-md-8">
                <label for="contactProduct" class="form-label form-label-custom">Product Required <span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-custom" id="contactProduct" name="product" placeholder="e.g. 4K LED TV, Pure Sine Wave Inverter, FRLS Wires..." required>
                <div class="invalid-feedback">Please specify the product required.</div>
              </div>

              <div class="col-md-4">
                <label for="contactQuantity" class="form-label form-label-custom">Quantity</label>
                <input type="text" class="form-control form-control-custom" id="contactQuantity" name="quantity" placeholder="e.g. 1 Unit, 5 Rolls">
              </div>

              <div class="col-12">
                <label for="contactMessage" class="form-label form-label-custom">Message</label>
                <textarea class="form-control form-control-custom" id="contactMessage" name="message" rows="4" placeholder="Share any specific brand preference, load requirements, or questions..."></textarea>
              </div>

              <div class="col-12 mt-4 pt-2 d-flex flex-column flex-sm-row justify-content-between align-items-center gap-3">
                <button type="submit" class="btn btn-premium-primary w-100 w-sm-auto">
                  <i class="bi bi-send-fill me-1"></i> Submit Enquiry
                </button>
                <a href="<?php echo getWhatsAppUrl(); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-premium-whatsapp w-100 w-sm-auto">
                  <i class="bi bi-whatsapp me-1"></i> Instant WhatsApp Reply
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>

      <!-- Right Column: Interactive Map & WhatsApp Info Box (PDF Page 6) -->
      <div class="col-lg-5">
        <div class="d-flex flex-column gap-4 h-100">
          
          <!-- WhatsApp Pre-filled message callout (Mandated in PDF Page 6) -->
          <div class="p-4 rounded-4 bg-glass border border-success-subtle shadow-sm">
            <div class="d-flex align-items-center gap-2 mb-2">
              <i class="bi bi-whatsapp text-success fs-4"></i>
              <h5 class="font-heading mb-0 text-success">One-Click WhatsApp Query</h5>
            </div>
            <p class="small text-muted mb-3">
              Clicking below will automatically open WhatsApp with the official pre-filled inquiry text:
            </p>
            <div class="p-3 rounded-3 bg-surface border border-subtle font-mono small text-muted mb-3">
              "<?php echo WHATSAPP_DEFAULT_MSG; ?>"
            </div>
            <a href="<?php echo getWhatsAppUrl(); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-premium-whatsapp w-100">
              <i class="bi bi-whatsapp me-1"></i> Click to Send Pre-Filled Message
            </a>
          </div>

          <!-- Interactive Location / Map Card -->
          <div class="p-4 rounded-4 bg-surface border border-subtle shadow-sm flex-grow-1 d-flex flex-column">
            <h5 class="font-heading mb-3"><i class="bi bi-geo-alt-fill text-primary me-1"></i> Our Location</h5>
            <p class="small text-muted mb-3"><?php echo COMPANY_ADDRESS; ?></p>
            
            <div class="ratio ratio-16x9 rounded-3 overflow-hidden border border-subtle flex-grow-1 bg-surface-elevated">
              <iframe 
                src="https://maps.google.com/maps?q=Lanka+Maidan,+Ghazipur,+Uttar+Pradesh+233001,+India&t=&z=16&ie=UTF8&iwloc=&output=embed" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                title="Krishna Electronics Location Map">
              </iframe>
            </div>
          </div>

        </div>
      </div>

    </div>

  </div>
</section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
