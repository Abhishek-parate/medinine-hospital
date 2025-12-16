<?php
// Get current page from URL for active navigation
$current_page = basename($_SERVER['REQUEST_URI'], '.php');
$current_page = str_replace(['/', '?'], '', $current_page);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Dynamic Title and Meta Tags will be set in individual pages -->
    <?php if(isset($page_title)): ?>
        <title><?php echo $page_title; ?></title>
    <?php endif; ?>
    
    <?php if(isset($page_description)): ?>
        <meta name="description" content="<?php echo $page_description; ?>">
    <?php endif; ?>
    
    <?php if(isset($page_keywords)): ?>
        <meta name="keywords" content="<?php echo $page_keywords; ?>">
    <?php endif; ?>
    
    <meta name="author" content="Medinine Hospital">
    <meta name="robots" content="index, follow">
    
    <?php if(isset($canonical_url)): ?>
        <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <?php endif; ?>
    
    <!-- Open Graph Tags -->
    <?php if(isset($og_title)): ?>
        <meta property="og:title" content="<?php echo $og_title; ?>">
    <?php endif; ?>
    
    <?php if(isset($og_description)): ?>
        <meta property="og:description" content="<?php echo $og_description; ?>">
    <?php endif; ?>
    
    <meta property="og:image" content="https://medininehospital.com/assets/medinine.png">
    <meta property="og:url" content="<?php echo $canonical_url ?? 'https://medininehospital.com/'; ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Medinine Hospital">
    
    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $og_title ?? $page_title ?? 'Medinine Hospital'; ?>">
    <meta name="twitter:description" content="<?php echo $og_description ?? $page_description ?? ''; ?>">
    <meta name="twitter:image" content="https://medininehospital.com/assets/medinine.png">
    
    <!-- Schema Markup -->
    <?php if(isset($schema_markup)): ?>
        <?php echo $schema_markup; ?>
    <?php endif; ?>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/assets/medinine.png">
    
    <!-- Stylesheets -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom Tailwind Config with Hospital Colors -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4c847b',      // Main teal
                        secondary: '#053147',    // Dark blue
                        accent: '#bd202e',       // Red
                        gold: '#d9c055',         // Gold
                        primaryLight: '#6aa399',
                        primaryDark: '#3a6b64'
                    }
                }
            }
        }
    </script>
    
    <!-- Custom Styles -->
    <style>
        .gradient-primary {
            background: linear-gradient(135deg, #4c847b 0%, #053147 100%);
        }
        .gradient-accent {
            background: linear-gradient(135deg, #bd202e 0%, #4c847b 100%);
        }
        .text-gradient {
            background: linear-gradient(135deg, #4c847b, #053147);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-lg sticky top-0 z-50">
        <!-- Top Bar -->
        <div class="bg-primary text-white py-2">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center text-sm">
                    <div class="flex items-center space-x-4">
                        <span><i class="fas fa-map-marker-alt mr-1"></i> 1A/1, Parivartan Square, Besa Road, Manewada, Nagpur</span>
                        <span class="hidden md:inline"><i class="fas fa-clock mr-1"></i> 24/7 Emergency Services</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="tel:8668289254" class="hover:text-gold transition duration-300">
                            <i class="fas fa-phone mr-1"></i> 8668289254
                        </a>
                        <a href="mailto:info@medininehospital.com" class="hover:text-gold transition duration-300 hidden md:inline">
                            <i class="fas fa-envelope mr-1"></i> Email Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Main Navigation -->
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <img src="/assets/medininehospital-logo.webp" alt="Medinine Hospital Logo" class="h-12 md:h-16">
                    <div class="hidden md:block">
                        <h1 class="text-2xl font-bold text-secondary">Medinine Hospital</h1>
                        <p class="text-sm text-primary">Best Super-Speciality Hospital in Nagpur</p>
                    </div>
                </div>
                
                <!-- Desktop Navigation -->
                <nav class="hidden lg:flex space-x-8">
                    <a href="/" class="<?php echo ($current_page == '' || $current_page == 'index') ? 'text-primary font-semibold' : 'text-gray-700 hover:text-primary'; ?> transition duration-300 flex items-center space-x-1">
                        <i class="fas fa-home"></i>
                        <span>Home</span>
                    </a>
                    <div class="relative group">
                        <a href="/about-best-hospital-nagpur" class="<?php echo (strpos($current_page, 'about') !== false) ? 'text-primary font-semibold' : 'text-gray-700 hover:text-primary'; ?> transition duration-300 flex items-center space-x-1">
                            <i class="fas fa-info-circle"></i>
                            <span>About</span>
                        </a>
                    </div>
                    <div class="relative group">
                        <a href="/healthcare-services-nagpur" class="<?php echo (strpos($current_page, 'service') !== false || strpos($current_page, 'medical') !== false) ? 'text-primary font-semibold' : 'text-gray-700 hover:text-primary'; ?> transition duration-300 flex items-center space-x-1">
                            <i class="fas fa-stethoscope"></i>
                            <span>Services</span>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </a>
                        <!-- Services Dropdown -->
                        <div class="absolute left-0 mt-2 w-80 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="p-4 grid grid-cols-2 gap-2">
                                <a href="/24-7-trauma-care-nagpur" class="block px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-md">
                                    <i class="fas fa-ambulance text-accent mr-2"></i>Emergency & Trauma
                                </a>
                                <a href="/laparoscopic-surgery-nagpur" class="block px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-md">
                                    <i class="fas fa-cut text-primary mr-2"></i>Surgery Services
                                </a>
                                <a href="/pregnancy-care-delivery-nagpur" class="block px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-md">
                                    <i class="fas fa-baby text-pink-500 mr-2"></i>Maternity Care
                                </a>
                                <a href="/intensive-care-unit-nagpur" class="block px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-md">
                                    <i class="fas fa-heartbeat text-gold mr-2"></i>ICU Services
                                </a>
                                <a href="/hemodialysis-center-nagpur" class="block px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-md">
                                    <i class="fas fa-kidneys text-green-500 mr-2"></i>Dialysis Center
                                </a>
                                <a href="/xray-ultrasound-tests-nagpur" class="block px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-md">
                                    <i class="fas fa-x-ray text-purple-500 mr-2"></i>Diagnostic Services
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="/expert-doctors-nagpur" class="<?php echo (strpos($current_page, 'doctor') !== false) ? 'text-primary font-semibold' : 'text-gray-700 hover:text-primary'; ?> transition duration-300 flex items-center space-x-1">
                        <i class="fas fa-user-md"></i>
                        <span>Doctors</span>
                    </a>
                    <a href="/contact-medinine-hospital" class="<?php echo (strpos($current_page, 'contact') !== false) ? 'text-primary font-semibold' : 'text-gray-700 hover:text-primary'; ?> transition duration-300 flex items-center space-x-1">
                        <i class="fas fa-phone"></i>
                        <span>Contact</span>
                    </a>
                </nav>
                
                <!-- CTA Buttons -->
                <div class="flex items-center space-x-2">
                    <a href="/book-doctor-appointment-nagpur" class="hidden md:flex bg-primary text-white px-4 py-2 rounded-lg font-semibold hover:bg-primaryDark transition duration-300 items-center space-x-2 text-sm">
                        <i class="fas fa-calendar-check"></i>
                        <span>Book Appointment</span>
                    </a>
                    <a href="tel:8668289254" class="bg-accent text-white px-4 py-2 rounded-lg font-semibold hover:bg-red-700 transition duration-300 flex items-center space-x-2 text-sm">
                        <i class="fas fa-ambulance"></i>
                        <span class="hidden sm:inline">Emergency:</span>
                        <span>8668289254</span>
                    </a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button class="lg:hidden text-gray-700 hover:text-primary transition duration-300" onclick="toggleMobileMenu()">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
        
        <!-- Mobile Navigation -->
        <div id="mobileMenu" class="lg:hidden bg-white border-t border-gray-200 hidden">
            <div class="container mx-auto px-4 py-4">
                <nav class="space-y-4">
                    <a href="/" class="block text-gray-700 hover:text-primary transition duration-300">
                        <i class="fas fa-home mr-2"></i> Home
                    </a>
                    <a href="/about-best-hospital-nagpur" class="block text-gray-700 hover:text-primary transition duration-300">
                        <i class="fas fa-info-circle mr-2"></i> About Us
                    </a>
                    <a href="/healthcare-services-nagpur" class="block text-gray-700 hover:text-primary transition duration-300">
                        <i class="fas fa-stethoscope mr-2"></i> Our Services
                    </a>
                    <a href="/expert-doctors-nagpur" class="block text-gray-700 hover:text-primary transition duration-300">
                        <i class="fas fa-user-md mr-2"></i> Our Doctors
                    </a>
                    <a href="/contact-medinine-hospital" class="block text-gray-700 hover:text-primary transition duration-300">
                        <i class="fas fa-phone mr-2"></i> Contact Us
                    </a>
                    <a href="/book-doctor-appointment-nagpur" class="block bg-primary text-white px-4 py-2 rounded-lg font-semibold text-center">
                        <i class="fas fa-calendar-check mr-2"></i> Book Appointment
                    </a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Mobile Menu Script -->
    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const menu = document.getElementById('mobileMenu');
            const button = event.target.closest('button');
            
            if (!menu.contains(event.target) && !button?.onclick) {
                menu.classList.add('hidden');
            }
        });
    </script>