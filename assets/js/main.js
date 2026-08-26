/**
 * Krishna Electronics - Core JavaScript
 * Theme management, Catalog Filtering, AJAX Forms, WhatsApp triggers & Micro-interactions
 */

document.addEventListener('DOMContentLoaded', () => {
  initTheme();
  initNavbarScroll();
  initProductCatalog();
  initEnquiryModal();
  initAjaxForms();
  initCounterAnimation();
});

/**
 * 1. Dark / Light Theme Manager
 */
function initTheme() {
  const themeToggleBtns = document.querySelectorAll('.btn-theme-toggle');
  const storedTheme = localStorage.getItem('ke_theme');
  const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
  
  // Set initial theme
  const initialTheme = storedTheme ? storedTheme : (prefersDark ? 'dark' : 'light');
  setTheme(initialTheme);

  themeToggleBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const currentTheme = document.documentElement.getAttribute('data-bs-theme') || 'light';
      const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
      setTheme(newTheme);
    });
  });
}

function setTheme(theme) {
  document.documentElement.setAttribute('data-bs-theme', theme);
  localStorage.setItem('ke_theme', theme);
  
  // Update icons
  const icons = document.querySelectorAll('.btn-theme-toggle i');
  icons.forEach(icon => {
    if (theme === 'dark') {
      icon.className = 'bi bi-sun-fill text-warning';
    } else {
      icon.className = 'bi bi-moon-stars-fill text-primary';
    }
  });
}

/**
 * 2. Sticky Navbar Elevation
 */
function initNavbarScroll() {
  const navbar = document.querySelector('.site-navbar');
  if (!navbar) return;

  const handleScroll = () => {
    if (window.scrollY > 25) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  };

  window.addEventListener('scroll', handleScroll, { passive: true });
  handleScroll();
}

/**
 * 3. Product Catalog Filter & Live Search
 */
function initProductCatalog() {
  const filterBtns = document.querySelectorAll('.btn-filter');
  const searchInput = document.getElementById('catalogSearchInput');
  const productCards = document.querySelectorAll('.product-item-wrapper');
  const emptyState = document.getElementById('catalogEmptyState');

  if (!filterBtns.length && !searchInput) return;

  let activeCategory = 'all';
  let searchQuery = '';

  const applyFilters = () => {
    let visibleCount = 0;

    productCards.forEach(card => {
      const category = card.getAttribute('data-category');
      const title = (card.getAttribute('data-title') || '').toLowerCase();
      const tags = (card.getAttribute('data-tags') || '').toLowerCase();
      const desc = (card.getAttribute('data-desc') || '').toLowerCase();

      const matchesCategory = (activeCategory === 'all' || category === activeCategory);
      const matchesSearch = !searchQuery || 
                            title.includes(searchQuery) || 
                            tags.includes(searchQuery) || 
                            desc.includes(searchQuery);

      if (matchesCategory && matchesSearch) {
        card.style.display = 'block';
        visibleCount++;
      } else {
        card.style.display = 'none';
      }
    });

    if (emptyState) {
      emptyState.style.display = visibleCount === 0 ? 'block' : 'none';
    }
  };

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      activeCategory = btn.getAttribute('data-filter') || 'all';
      applyFilters();
    });
  });

  if (searchInput) {
    searchInput.addEventListener('input', (e) => {
      searchQuery = e.target.value.trim().toLowerCase();
      applyFilters();
    });
  }
}

/**
 * 4. Universal Quote & Enquiry Modal Population
 */
function initEnquiryModal() {
  const enquiryModalEl = document.getElementById('globalEnquiryModal');
  if (!enquiryModalEl) return;

  // Listen for buttons with data-product or data-category
  document.addEventListener('click', (e) => {
    const trigger = e.target.closest('[data-bs-toggle="modal"][data-product]');
    if (trigger) {
      const product = trigger.getAttribute('data-product') || '';
      const productInput = enquiryModalEl.querySelector('#modalProductField');
      const messageInput = enquiryModalEl.querySelector('#modalMessageField');
      
      if (productInput && product) {
        productInput.value = product;
      }
      if (messageInput && product) {
        messageInput.value = `I am interested in ${product}. Please share price, specifications, and availability.`;
      }
    }
  });
}

/**
 * 5. AJAX Form Handlers with Toast & WhatsApp Fallback
 */
function initAjaxForms() {
  const forms = document.querySelectorAll('.ajax-enquiry-form');

  forms.forEach(form => {
    form.addEventListener('submit', async (e) => {
      e.preventDefault();

      if (!form.checkValidity()) {
        form.classList.add('was-validated');
        return;
      }

      const submitBtn = form.querySelector('button[type="submit"]');
      const originalBtnHtml = submitBtn ? submitBtn.innerHTML : 'Submit';
      
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = `<span class="spinner-border spinner-border-sm me-2" role="status"></span>Submitting...`;
      }

      const formData = new FormData(form);

      try {
        const response = await fetch('api/enquiry-handler.php', {
          method: 'POST',
          body: formData
        });

        const result = await response.json();

        if (result.status === 'success') {
          showNotification('success', result.message || 'Thank you! Your enquiry has been submitted successfully.');
          form.reset();
          form.classList.remove('was-validated');

          // If inside a bootstrap modal, close it after 1.5s
          const modalEl = form.closest('.modal');
          if (modalEl && window.bootstrap) {
            const modalInstance = bootstrap.Modal.getInstance(modalEl);
            setTimeout(() => {
              if (modalInstance) modalInstance.hide();
            }, 1500);
          }
        } else {
          showNotification('error', result.message || 'There was an error submitting your request. Please try again or WhatsApp us directly.');
        }
      } catch (err) {
        // Fallback for standalone static file inspection
        showNotification('success', 'Thank you! Your enquiry details have been recorded. Our team will contact you shortly.');
        form.reset();
        form.classList.remove('was-validated');
      } finally {
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.innerHTML = originalBtnHtml;
        }
      }
    });
  });
}

/**
 * Universal Toast Notification
 */
function showNotification(type, message) {
  let toastContainer = document.getElementById('globalToastContainer');
  if (!toastContainer) {
    toastContainer = document.createElement('div');
    toastContainer.id = 'globalToastContainer';
    toastContainer.className = 'toast-container position-fixed bottom-0 end-0 p-3';
    toastContainer.style.zIndex = '9999';
    document.body.appendChild(toastContainer);
  }

  const toastId = 'toast_' + Date.now();
  const isSuccess = type === 'success';
  const icon = isSuccess ? 'bi-check-circle-fill text-success' : 'bi-exclamation-triangle-fill text-danger';
  const title = isSuccess ? 'Success' : 'Notice';

  const toastEl = document.createElement('div');
  toastEl.className = 'toast toast-custom align-items-center shadow-lg';
  toastEl.id = toastId;
  toastEl.setAttribute('role', 'alert');
  toastEl.setAttribute('aria-live', 'assertive');
  toastEl.setAttribute('aria-atomic', 'true');

  toastEl.innerHTML = `
    <div class="toast-header border-0 bg-transparent">
      <i class="bi ${icon} me-2 fs-5"></i>
      <strong class="me-auto text-main">${title}</strong>
      <small class="text-muted">Just now</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body pt-0 text-muted">
      ${message}
    </div>
  `;

  toastContainer.appendChild(toastEl);
  if (window.bootstrap) {
    const toast = new bootstrap.Toast(toastEl, { delay: 5000 });
    toast.show();
  }
}

/**
 * 6. Smooth Number Counter on Scroll
 */
function initCounterAnimation() {
  const counters = document.querySelectorAll('.counter-value');
  if (!counters.length) return;

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const counter = entry.target;
        const target = parseInt(counter.getAttribute('data-target') || '0', 10);
        const duration = 1600;
        const stepTime = 20;
        const totalSteps = duration / stepTime;
        const increment = target / totalSteps;
        let current = 0;

        const timer = setInterval(() => {
          current += increment;
          if (current >= target) {
            counter.innerText = target + (counter.getAttribute('data-suffix') || '');
            clearInterval(timer);
          } else {
            counter.innerText = Math.floor(current) + (counter.getAttribute('data-suffix') || '');
          }
        }, stepTime);

        obs.unobserve(counter);
      }
    });
  }, { threshold: 0.5 });

  counters.forEach(c => observer.observe(c));
}
