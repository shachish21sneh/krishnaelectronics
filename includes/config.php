<?php
/**
 * Krishna Electronics - Global Configuration & Business Profile
 * Quality Products | Trusted Service | Reliable Solutions
 */

// Site Configuration
define('SITE_NAME', 'Krishna Electronics');
define('SITE_TAGLINE', 'The Name Of Trust');
define('SITE_DESCRIPTION', 'Krishna Electronics – Quality electronics, electrical products, power backup solutions and reliable customer service at competitive prices. Contact us for product enquiries and business requirements.');
define('SITE_KEYWORDS', 'Krishna Electronics, electronics shop, electronic products, electrical products, electrical accessories, LED TV, home appliances, inverter, UPS, battery, lithium battery, electrical items, electronics dealer, electronics distributor, electrical supplier');
// Dynamic Protocol and Domain Detection
$siteProtocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";
$siteHost = $_SERVER['HTTP_HOST'] ?? 'krishnaelectronics.org';
define('SITE_URL', $siteProtocol . $siteHost);
define('SITE_YEAR', '2026');

// Business & Proprietorship Details
define('FIRM_TYPE', 'Proprietorship Firm');
define('PROPRIETOR_NAME', 'Sunil Kumar Gupta');
define('COMPANY_ADDRESS', 'Shop No 1, Lanka Maidan, Ghazipur, Uttar Pradesh, 233001, India');
define('PRIMARY_PHONE', '+91 94152 39944');
define('PRIMARY_PHONE_RAW', '+919415239944');
define('SECONDARY_PHONE', '+91 94152 39944');
define('WHATSAPP_NUMBER', '919415239944');
define('PRIMARY_EMAIL', 'info@krishnaelectronics.org');
define('SALES_EMAIL', 'info@krishnaelectronics.org');
define('BUSINESS_HOURS', 'Mon - Sat: 10:00 AM - 07:00 PM (Sunday: Prior Appointment / Urgent Support)');

// Load local environment overrides if available (contains uncommitted secrets)
if (file_exists(__DIR__ . '/config.local.php')) {
    require_once __DIR__ . '/config.local.php';
}

// SMTP Configuration
if (!defined('SMTP_HOST')) define('SMTP_HOST', getenv('SMTP_HOST') ?: 'mail.krishnaelectronics.org');
if (!defined('SMTP_PORT')) define('SMTP_PORT', getenv('SMTP_PORT') ? (int)getenv('SMTP_PORT') : 465);
if (!defined('SMTP_SECURE')) define('SMTP_SECURE', getenv('SMTP_SECURE') ?: 'ssl'); // 'ssl' for port 465, 'tls' for port 587
if (!defined('SMTP_USER')) define('SMTP_USER', getenv('SMTP_USER') ?: 'info@krishnaelectronics.org');
if (!defined('SMTP_PASS')) define('SMTP_PASS', getenv('SMTP_PASS') ?: '');
if (!defined('SMTP_FROM_EMAIL')) define('SMTP_FROM_EMAIL', getenv('SMTP_FROM_EMAIL') ?: 'info@krishnaelectronics.org');
if (!defined('SMTP_FROM_NAME')) define('SMTP_FROM_NAME', getenv('SMTP_FROM_NAME') ?: 'Krishna Electronics');
if (!defined('NOTIFICATION_RECIPIENT_EMAIL')) define('NOTIFICATION_RECIPIENT_EMAIL', getenv('NOTIFICATION_RECIPIENT_EMAIL') ?: 'krishelegzp@gmail.com');

// WhatsApp Pre-filled message (as mandated in PDF)
define('WHATSAPP_DEFAULT_MSG', 'Hello Krishna Electronics, I am interested in your products. Please share product details, price and availability.');

/**
 * Generate standard WhatsApp URL with encoded message
 */
function getWhatsAppUrl($customMsg = null) {
    $msg = $customMsg ? $customMsg : WHATSAPP_DEFAULT_MSG;
    return 'https://wa.me/' . WHATSAPP_NUMBER . '?text=' . urlencode($msg);
}

/**
 * Helper to determine active navigation item
 */
function isNavActive($pageName, $currentPage) {
    return ($pageName === $currentPage) ? 'active' : '';
}

// Navigation structure
$navItems = [
    'home' => ['label' => 'Home', 'url' => 'index.php', 'icon' => 'bi-house'],
    'about' => ['label' => 'About Us', 'url' => 'about.php', 'icon' => 'bi-info-circle'],
    'products' => ['label' => 'Products', 'url' => 'products.php', 'icon' => 'bi-grid-3x3-gap'],
    'services' => ['label' => 'Services', 'url' => 'services.php', 'icon' => 'bi-gear-wide-connected'],
    'dealers' => ['label' => 'Dealer/Partner', 'url' => 'dealers.php', 'icon' => 'bi-people'],
    'contact' => ['label' => 'Contact Us', 'url' => 'contact.php', 'icon' => 'bi-telephone']
];

// Product Categories & Items (Directly mapped from PDF)
$productCategories = [
    'electronics' => [
        'id' => 'electronics',
        'title' => 'Electronics Products',
        'short_desc' => 'High performance Smart LED TVs, durable home appliances, audio systems and premium electronic accessories.',
        'badge' => 'Consumer & Commercial',
        'icon' => 'bi-tv',
        'image' => 'assets/images/cat_electronics.jpg',
        'items' => [
            [
                'name' => 'LED TVs',
                'desc' => 'Smart 4K UHD, Full HD and frameless LED TVs with vivid color tech and smart OS.',
                'image' => 'assets/images/prod_led_tv.jpg',
                'tags' => ['4K UHD', 'Smart OS', 'Frameless Design', 'HDR10+'],
                'features' => ['High Refresh Rate Display', 'Dolby Audio Support', 'Multiple HDMI & USB Ports', 'Energy Efficient A+ Rating']
            ],
            [
                'name' => 'Home Appliances',
                'desc' => 'Inverter refrigerators, smart washing machines, microwave ovens and cooling appliances.',
                'image' => 'assets/images/prod_appliances.jpg',
                'tags' => ['Inverter Tech', 'Low Energy', 'Long Warranty'],
                'features' => ['Smart Inverter Compressor', 'Frost-Free & Direct Cool', 'Quick Wash & Steam Cycle', 'Stabilizer Free Operation']
            ],
            [
                'name' => 'Electronic Accessories',
                'desc' => 'Heavy duty HDMI cables, smart plugs, universal wall mounts, stabilizers and remote controls.',
                'image' => 'assets/images/cat_electronics.jpg',
                'tags' => ['Gold Plated', 'Surge Safe', 'Universal Fit'],
                'features' => ['High-Speed 4K/8K Braided Cables', 'Digital Display Stabilizers', 'Heavy-Gauge Steel Mounts', 'Multi-Brand Universal Remotes']
            ],
            [
                'name' => 'Audio Products',
                'desc' => 'Immersive soundbars, home theater speakers, high-power party audio systems and amplifiers.',
                'image' => 'assets/images/cat_electronics.jpg',
                'tags' => ['Dolby Atmos', 'Deep Bass', 'Bluetooth 5.3'],
                'features' => ['Wireless Subwoofer Pairing', 'Optical & HDMI ARC Inputs', 'Multiple Equalizer Modes', 'Studio-Grade Acoustic Clarity']
            ],
            [
                'name' => 'Consumer Electronics',
                'desc' => 'Smart set-top boxes, security cameras, smart home controllers and multimedia streaming gadgets.',
                'image' => 'assets/images/cat_electronics.jpg',
                'tags' => ['Smart Home', 'HD Streaming', 'WiFi Enabled'],
                'features' => ['Night Vision HD Security', 'Voice Remote Assistance', 'Compact & Sleek Design', 'Cloud & Local Storage Support']
            ],
            [
                'name' => 'Other Electronic Products',
                'desc' => 'Custom institutional electronics, display panels, voltage protection accessories and customized orders.',
                'image' => 'assets/images/cat_electronics.jpg',
                'tags' => ['Commercial', 'OEM/Wholesale', 'Certified'],
                'features' => ['Bulk Packaging Available', 'Standard Warranty Backing', 'Technical Compliance Tested', 'Custom Sourcing on Demand']
            ]
        ]
    ],
    'electrical' => [
        'id' => 'electrical',
        'title' => 'Electrical Products',
        'short_desc' => 'Certified copper wires & cables, modular luxury switches, safety protection devices and electrical components.',
        'badge' => 'Residential & Industrial',
        'icon' => 'bi-lightning-charge',
        'image' => 'assets/images/cat_electrical.jpg',
        'items' => [
            [
                'name' => 'Electrical Accessories',
                'desc' => 'Modular gang boxes, extension boards, multi-plug adapters and durable distribution enclosures.',
                'image' => 'assets/images/cat_electrical.jpg',
                'tags' => ['Fire Retardant', 'Brass Terminals', 'Heavy Duty'],
                'features' => ['Flame-Retardant Polycarbonate Body', 'High Conductivity Brass Parts', 'Shock-Proof Construction', 'Child-Safe Shuttered Sockets']
            ],
            [
                'name' => 'Wires & Cables',
                'desc' => '100% pure electrolytic copper FRLS domestic wires, armoured industrial power cables, and submersible flexible cables.',
                'image' => 'assets/images/cat_electrical.jpg',
                'tags' => ['FRLS Copper', 'ISI Certified', 'Anti-Termite'],
                'features' => ['99.97% Pure Electrolytic Copper', 'Flame Retardant Low Smoke (FRLS)', 'High Temperature Insulation', 'Zero Halogen Safety Rating']
            ],
            [
                'name' => 'Switches & Sockets',
                'desc' => 'Modern modular switches, glass-finish touch panels, heavy-duty 16A/25A power sockets and fan regulators.',
                'image' => 'assets/images/cat_electrical.jpg',
                'tags' => ['Modular', 'Touch Glass', 'Silver Inlay Contacts'],
                'features' => ['Soft-Touch Silent Operation', 'Spark-Shielded Internal Design', 'Sleek Aesthetic Faceplates', 'Rated for 100,000+ Cycles']
            ],
            [
                'name' => 'Protection Devices',
                'desc' => 'Miniature Circuit Breakers (MCB), Residual Current Devices (RCCB), Isolators, Surge Protection (SPD) and Changeover switches.',
                'image' => 'assets/images/cat_electrical.jpg',
                'tags' => ['MCB / RCCB', 'Surge Safe', 'Trip Class C/D'],
                'features' => ['Rapid Overload & Short Circuit Trip', 'Earth Leakage Human Safety Protection', 'Bi-Metallic High Breaking Capacity', 'DIN Rail Quick Mounting']
            ],
            [
                'name' => 'Electrical Components',
                'desc' => 'Industrial relays, contactors, motor starters, heavy capacitors, LED drivers and busbar terminal blocks.',
                'image' => 'assets/images/cat_electrical.jpg',
                'tags' => ['Industrial Grade', 'High Endurance', 'OEM Supply'],
                'features' => ['Heavy Duty Copper Coils', 'High Inrush Current Tolerant', 'Precise Voltage Regulation', 'Thermal Overload Protection']
            ],
            [
                'name' => 'Other Electrical Products',
                'desc' => 'Conduit pipes, cable management trays, industrial plugs, industrial sockets and installation hardware.',
                'image' => 'assets/images/cat_electrical.jpg',
                'tags' => ['Heavy Conduit', 'IP65 Rated', 'Commercial'],
                'features' => ['Weatherproof Exterior Ratings', 'Impact Resistant PVC & Metallic', 'Easy Installation Fittings', 'Complete Contractor Range']
            ]
        ]
    ],
    'powerbackup' => [
        'id' => 'powerbackup',
        'title' => 'Power Backup Solutions',
        'short_desc' => 'Pure Sine Wave Inverters, High-Capacity Home UPS, Tall Tubular Batteries and Lithium Energy Storage Packs.',
        'badge' => 'Clean & Uninterrupted Power',
        'icon' => 'bi-battery-charging',
        'image' => 'assets/images/cat_powerbackup.jpg',
        'items' => [
            [
                'name' => 'Inverters',
                'desc' => 'Microcontroller-based Pure Sine Wave inverters, solar hybrid inverters and heavy commercial power units.',
                'image' => 'assets/images/cat_powerbackup.jpg',
                'tags' => ['Pure Sine Wave', 'Solar Ready', 'Smart Display'],
                'features' => ['Smart Battery Charging Algorithm', 'Appliance-Safe Clean Waveform', 'Wide Input Voltage Tolerance', 'Intelligent LCD Diagnostics']
            ],
            [
                'name' => 'Home UPS',
                'desc' => 'Seamless zero-transfer-delay Home UPS for delicate electronic appliances, computers, and medical equipment.',
                'image' => 'assets/images/cat_powerbackup.jpg',
                'tags' => ['Zero Delay', 'Silent Operation', 'Micro-controlled'],
                'features' => ['Sub-millisecond Switchover Time', 'Built-in Surge & Spike Filter', 'Compact Wall/Desk Form Factor', 'Overload Auto-Reset Feature']
            ],
            [
                'name' => 'Batteries',
                'desc' => 'High-performance Tall Tubular deep-cycle batteries, short tubular and heavy-duty flat plate inverter batteries.',
                'image' => 'assets/images/cat_powerbackup.jpg',
                'tags' => ['Tall Tubular', 'Long Life', 'Ultra Low Maintenance'],
                'features' => ['Thick Spine Pressure Casted Grids', 'Extended Backup Capacity', 'Ceramic Vent Plugs with Level Float', 'Up to 60+ Months Warranty']
            ],
            [
                'name' => 'Lithium Battery Solutions',
                'desc' => 'Next-generation LiFePO4 Lithium storage batteries with rapid 2-hour charging, wall mount compact designs, and 10+ year lifespan.',
                'image' => 'assets/images/cat_powerbackup.jpg',
                'tags' => ['LiFePO4', 'Fast 2hr Charge', '10+ Year Life'],
                'features' => ['Built-in Intelligent BMS Protection', 'Space Saving Lightweight Design', '3000+ Deep Charge Cycles', 'Zero Fumes & Maintenance Free']
            ],
            [
                'name' => 'Power Backup Accessories',
                'desc' => 'Durable non-corrosive battery trolleys, 100% copper interconnect cables, distilled water indicators and safety stands.',
                'image' => 'assets/images/cat_powerbackup.jpg',
                'tags' => ['Modular Trolley', 'Pure Copper Leads', 'Heavy Duty'],
                'features' => ['Easy Roll Caster Wheels', 'Heavy Gauge Lugged Copper Cables', 'Ventilated Acid-Resistant Structure', 'Clean Aesthetic Organization']
            ]
        ]
    ]
];
