<?php
/**
 * Krishna Electronics - Universal Enquiry & Quotation Modal
 */
?>
<!-- Global Enquiry & Quick Quote Modal -->
<div class="modal fade" id="globalEnquiryModal" tabindex="-1" aria-labelledby="globalEnquiryModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content modal-content-custom border-0">
      
      <!-- Modal Header -->
      <div class="modal-header modal-header-custom d-flex justify-content-between align-items-center">
        <div>
          <span class="badge-pill-custom badge-pill-primary mb-1">
            <i class="bi bi-chat-quote-fill"></i> Instant Quotation
          </span>
          <h4 class="modal-title font-heading mb-0" id="globalEnquiryModalLabel">Customer Enquiry & Quote</h4>
        </div>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body modal-body-custom">
        <p class="text-muted small mb-4">
          Tell us what you need and our team at Krishna Electronics will get back to you with competitive pricing and availability.
        </p>

        <form class="ajax-enquiry-form needs-validation" novalidate>
          <input type="hidden" name="form_type" value="Modal Quotation Request">

          <div class="row g-3">
            <!-- Full Name -->
            <div class="col-md-6">
              <label for="modalNameField" class="form-label form-label-custom">Full Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control form-control-custom" id="modalNameField" name="name" placeholder="Enter your full name" required>
              <div class="invalid-feedback">Please enter your name.</div>
            </div>

            <!-- Mobile Number -->
            <div class="col-md-6">
              <label for="modalMobileField" class="form-label form-label-custom">Mobile Number <span class="text-danger">*</span></label>
              <input type="tel" class="form-control form-control-custom" id="modalMobileField" name="mobile" placeholder="e.g. +91 98765 43210" required>
              <div class="invalid-feedback">Please enter a valid contact number.</div>
            </div>

            <!-- Email Address -->
            <div class="col-md-6">
              <label for="modalEmailField" class="form-label form-label-custom">Email Address</label>
              <input type="email" class="form-control form-control-custom" id="modalEmailField" name="email" placeholder="name@example.com">
            </div>

            <!-- City -->
            <div class="col-md-6">
              <label for="modalCityField" class="form-label form-label-custom">City / Location</label>
              <input type="text" class="form-control form-control-custom" id="modalCityField" name="city" placeholder="Your city name">
            </div>

            <!-- Product Required -->
            <div class="col-md-8">
              <label for="modalProductField" class="form-label form-label-custom">Product Required <span class="text-danger">*</span></label>
              <input type="text" class="form-control form-control-custom" id="modalProductField" name="product" placeholder="e.g. 55-inch 4K LED TV, Inverter 1500VA, Pure Copper Wires..." required>
              <div class="invalid-feedback">Please specify the product required.</div>
            </div>

            <!-- Quantity -->
            <div class="col-md-4">
              <label for="modalQuantityField" class="form-label form-label-custom">Quantity</label>
              <input type="text" class="form-control form-control-custom" id="modalQuantityField" name="quantity" placeholder="e.g. 1 Unit, 10 Rolls, Bulk">
            </div>

            <!-- Message -->
            <div class="col-12">
              <label for="modalMessageField" class="form-label form-label-custom">Message / Additional Specifications</label>
              <textarea class="form-control form-control-custom" id="modalMessageField" name="message" rows="3" placeholder="Tell us your specific requirement, brand preferences, or delivery timeline..."></textarea>
            </div>

            <!-- Submit Button & Direct WhatsApp Action -->
            <div class="col-12 mt-4 pt-2 d-flex flex-column flex-sm-row justify-content-between align-items-center gap-3">
              <a href="<?php echo getWhatsAppUrl(); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-premium-whatsapp w-100 w-sm-auto order-2 order-sm-1">
                <i class="bi bi-whatsapp"></i> Quick Quote via WhatsApp
              </a>
              <button type="submit" class="btn btn-premium-primary w-100 w-sm-auto order-1 order-sm-2">
                <i class="bi bi-send-fill me-1"></i> Submit Enquiry
              </button>
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
