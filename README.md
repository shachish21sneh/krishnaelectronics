# Krishna Electronics - Modern Responsive PHP Website

> **The Name Of Trust**  
> A modern, professional, and fully responsive multi-page web application built with HTML5, CSS3, JavaScript (ES6+), Bootstrap 5.3, and modular PHP.

---

## 🌟 Key Features

1. **Brand & Design Identity**:
   - **Color Scheme**: Deep Electric Blue (`#0F172A`), Cyan & Indigo Accents (`#06B6D4`, `#4F46E5`), and Warm Electrical Amber (`#F59E0B`).
   - **Typography**: Google Fonts (*Outfit* for high-tech headings + *Plus Jakarta Sans* for clean legible body copy + *JetBrains Mono* for specs/stats).
   - **Modern Aesthetics**: Glassmorphism cards, glowing badges, subtle animated background meshes, smooth hover state animations, and dark/light theme switch with persistence.

2. **Full Page Suite (`.php`)**:
   - [`index.php`](file:///Users/diwakarjha/Desktop/krishnaelectronics/index.php) - Hero banner, key value propositions, Stat counters, 3 Product Divisions, Why Choose Us grid, 4-step execution workflow, Business Philosophy, and instant Lead Enquiry form.
   - [`about.php`](file:///Users/diwakarjha/Desktop/krishnaelectronics/about.php) - Firm profile, Business Philosophy (*Quality + Trust + Service = Long-Term Relationships*), Vision & Mission statements, and Core Commitments.
   - [`products.php`](file:///Users/diwakarjha/Desktop/krishnaelectronics/products.php) - Interactive catalog featuring:
     - **Electronics Products** (Smart LED TVs, Home Appliances, Electronic Accessories, Audio Systems, Consumer Electronics)
     - **Electrical Products** (Wires & Cables, Modular Switches & Sockets, Protection Devices/MCBs, Electrical Accessories & Components)
     - **Power Backup Solutions** (Pure Sine Wave Inverters, Home UPS, Tall Tubular Batteries, Lithium Energy Storage, Backup Accessories)
     - *Features*: Live category filter tabs, real-time search input, spec tags, "Request Quote" modal trigger, and one-click WhatsApp pre-filled inquiries.
   - [`services.php`](file:///Users/diwakarjha/Desktop/krishnaelectronics/services.php) - Product Supply, Product Consultation, Dealer & Retail Supply, and Customer Support.
   - [`dealers.php`](file:///Users/diwakarjha/Desktop/krishnaelectronics/dealers.php) - B2B partner perks, wholesale margin advantages, and dedicated Partner Onboarding Application form.
   - [`contact.php`](file:///Users/diwakarjha/Desktop/krishnaelectronics/contact.php) - Complete business details, proprietor info, business hours, interactive customer enquiry form, and interactive Google Map embed.
   - [`privacy-policy.php`](file:///Users/diwakarjha/Desktop/krishnaelectronics/privacy-policy.php) & [`terms-conditions.php`](file:///Users/diwakarjha/Desktop/krishnaelectronics/terms-conditions.php) - Standard compliance & legal pages.

3. **WhatsApp Pre-filled Query Integration**:
   - Embedded floating widget and product buttons automatically route users to WhatsApp with the exact requested text:
     > *"Hello Krishna Electronics, I am interested in your products. Please share product details, price and availability."*

4. **Interactive Lead Engine & Instant SMTP Notification**:
   - Backend API endpoint [`api/enquiry-handler.php`](file:///Users/diwakarjha/Desktop/krishnaelectronics/api/enquiry-handler.php) sanitizes form inputs, assigns a unique lead reference ID, logs enquiries into `data/enquiries.json`, and immediately dispatches an email notification via authenticated SMTP (`info@krishnaelectronics.org` @ `mail.krishnaelectronics.org:465`) to **`krishelegzp@gmail.com`**.
   - Zero-dependency pure PHP SMTP service in [`includes/mailer.php`](file:///Users/diwakarjha/Desktop/krishnaelectronics/includes/mailer.php).
   - Toast notification alerts for instant user feedback.

---

## 📁 Directory Structure

```plaintext
krishnaelectronics/
├── api/
│   └── enquiry-handler.php       # Form submission AJAX backend & SMTP dispatcher
├── assets/
│   ├── css/
│   │   └── style.css             # Custom design system & stylesheet
│   ├── js/
│   │   └── main.js               # Theme manager, catalog filtering, counter & AJAX
│   └── images/
│       ├── logo.png              # Official brand logo
│       ├── favicon.png           # Brand favicon (PNG)
│       ├── apple-touch-icon.png  # Apple Touch Icon
│       ├── hero_showcase.jpg     # Hero banner product visual
│       ├── cat_electronics.jpg   # Electronics category visual
│       ├── cat_electrical.jpg    # Electrical category visual
│       ├── cat_powerbackup.jpg   # Power backup category visual
│       ├── prod_led_tv.jpg       # LED TV showcase visual
│       └── prod_appliances.jpg   # Home appliances visual
├── data/
│   └── enquiries.json            # JSON store for submitted customer leads
├── includes/
│   ├── config.php                # Centralized business info, phone, SMTP settings, SEO defaults
│   ├── mailer.php                # Standalone SSL/TLS SMTP mailer service
│   ├── header.php                # HTML head, SEO tags, CSS imports, top announcement bar
│   ├── navbar.php                # Sticky navbar, offcanvas mobile menu, theme switch
│   ├── footer.php                # 4-column footer, legal links, script inclusions
│   ├── enquiry-modal.php         # Universal "Get a Quote" modal form
│   └── whatsapp-btn.php          # Floating WhatsApp widget & mobile bottom bar
├── index.php                     # Homepage
├── about.php                     # About Us page
├── products.php                  # Interactive Product Catalog page
├── services.php                  # Services page
├── dealers.php                   # Dealers & Business Partners page
├── contact.php                   # Contact Us page
├── privacy-policy.php            # Privacy Policy page
└── terms-conditions.php          # Terms & Conditions page
```

---

## 🚀 Running the Website Locally

You can run the site with PHP's built-in web server:

```bash
# From the project root
php -S localhost:8000
```

Open `http://localhost:8000` in your web browser.

---

## ⚙️ Business & SMTP Configuration

All business contact information, phone numbers, proprietor details, email addresses, and SMTP settings are centralized in:  
👉 [`includes/config.php`](file:///Users/diwakarjha/Desktop/krishnaelectronics/includes/config.php)

- **Mobile / WhatsApp**: `+91 94152 39944` (`+919415239944`)
- **Display Email**: `info@krishnaelectronics.org`
- **Lead Notifications Sent To**: `krishelegzp@gmail.com`
- **SMTP Server**: `mail.krishnaelectronics.org` (Port 465 SSL)