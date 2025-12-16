<?php
// Page meta information
$page_title = "Medical Services in Nagpur - Medinine Hospital | Comprehensive Healthcare Solutions";
$page_description = "Explore comprehensive medical services at Medinine Hospital Nagpur including emergency care, surgery, maternity services, ICU care, dialysis, diagnostic services, and specialized treatments. Expert doctors and advanced facilities available 24/7.";
$page_keywords = "medical services Nagpur, healthcare services Nagpur, emergency care Nagpur, surgery services Nagpur, maternity care Nagpur, ICU services Nagpur, dialysis Nagpur, diagnostic services Nagpur, hospital services Nagpur, Medinine Hospital services";
$canonical_url = "https://medininehospital.com/medical-services-nagpur.php";
$og_title = "Medical Services at Medinine Hospital Nagpur - Comprehensive Healthcare";
$og_description = "Discover world-class medical services at Medinine Hospital including emergency care, advanced surgery, maternity services, critical care, and diagnostic facilities in Nagpur.";

// Schema markup
$schema_markup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalOrganization",
  "name": "Medinine Hospital Medical Services",
  "description": "Comprehensive medical services offered at Medinine Hospital Nagpur",
  "url": "https://medininehospital.com/medical-services-nagpur.php",
  "medicalSpecialty": [
    "Emergency Medicine",
    "General Surgery",
    "Laparoscopic Surgery", 
    "Maternity Care",
    "Gynecology",
    "Critical Care",
    "Nephrology",
    "Radiology",
    "Pathology",
    "Orthopedics"
  ],
  "availableService": [
    {
      "@type": "MedicalProcedure",
      "name": "24/7 Emergency Care",
      "description": "Round-the-clock emergency medical services"
    },
    {
      "@type": "MedicalProcedure", 
      "name": "Trauma Care",
      "description": "Specialized trauma treatment and fracture care"
    },
    {
      "@type": "MedicalProcedure",
      "name": "General Surgery",
      "description": "Comprehensive surgical services"
    },
    {
      "@type": "MedicalProcedure",
      "name": "Laparoscopic Surgery", 
      "description": "Minimally invasive surgical procedures"
    },
    {
      "@type": "MedicalProcedure",
      "name": "Maternity Services",
      "description": "Complete pregnancy and delivery care"
    },
    {
      "@type": "MedicalProcedure",
      "name": "ICU Care",
      "description": "Intensive care unit services"
    },
    {
      "@type": "MedicalProcedure",
      "name": "Dialysis",
      "description": "Kidney dialysis treatment"
    },
    {
      "@type": "MedicalProcedure",
      "name": "Diagnostic Services",
      "description": "X-ray, ultrasound and pathology services"
    }
  ]
}
</script>';

// Include header
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="relative overflow-hidden hero-pattern">
    <div class="gradient-primary py-20 lg:py-24">
        <div class="absolute inset-0 bg-black bg-opacity-30"></div>
        <div class="relative container mx-auto px-4 text-center text-white">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                Comprehensive <span class="text-gold">Medical Services</span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 max-w-4xl mx-auto leading-relaxed opacity-90">
                Advanced healthcare solutions with state-of-the-art facilities and expert medical professionals in Nagpur
            </p>
            <nav class="flex justify-center" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm">
                    <li><a href="/index.php" class="hover:text-gold transition duration-300">Home</a></li>
                    <li><i class="fas fa-chevron-right text-gold mx-2"></i></li>
                    <li class="text-gold">Medical Services</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-secondary mb-4">Our Medical Specialties</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">Medinine Hospital offers a comprehensive range of medical services delivered by experienced specialists using advanced technology and equipment.</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Emergency & Trauma Care -->
            <div class="group bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300 border-t-4 border-accent service-card">
                <div class="flex items-center mb-6">
                    <div class="bg-red-100 p-4 rounded-full mr-4 group-hover:bg-accent group-hover:text-white transition duration-300">
                        <i class="fas fa-ambulance text-accent text-2xl group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary">Emergency & Trauma Care</h3>
                </div>
                <p class="text-gray-600 mb-6 leading-relaxed">24/7 emergency medical services with specialized trauma care, fracture treatment, spine surgery, and critical emergency interventions. Our emergency department is equipped with modern life-saving equipment and staffed by experienced emergency medicine specialists.</p>
                <div class="space-y-2 mb-6">
                    <div class="flex items-center text-sm text-gray-600">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span>24/7 Emergency Services</span>
                    </div>
                    <div class="flex items-center text-sm text-gray-600">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span>Trauma and Fracture Care</span>
                    </div>
                    <div class="flex items-center text-sm text-gray-600">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span>Ambulance Services</span>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <a href="emergency-trauma-care-nagpur" class="text-accent font-semibold hover:text-red-700 transition duration-300 flex items-center">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    <span class="text-accent font-bold text-sm">24/7 Available</span>
                </div>
            </div>

            <!-- Surgery Services -->
            <div class="group bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300 border-t-4 border-primary service-card">
                <div class="flex items-center mb-6">
                    <div class="bg-blue-100 p-4 rounded-full mr-4 group-hover:bg-primary group-hover:text-white transition duration-300">
                        <i class="fas fa-cut text-primary text-2xl group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary">Surgery Services</h3>
                </div>
                <p class="text-gray-600 mb-6 leading-relaxed">Comprehensive surgical services including general surgery and advanced laparoscopic procedures. Our expert surgeons use minimally invasive techniques for faster recovery, reduced scarring, and better patient outcomes.</p>
                <div class="space-y-2 mb-6">
                    <div class="flex items-center text-sm text-gray-600">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span>General Surgery</span>
                    </div>
                    <div class="flex items-center text-sm text-gray-600">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span>Laparoscopic Surgery</span>
                    </div>
                    <div class="flex items-center text-sm text-gray-600">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span>Expert Surgeons</span>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <a href="/surgery-services-nagpur.php" class="text-primary font-semibold hover:text-primaryDark transition duration-300 flex items-center">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    <span class="text-primary font-bold text-sm">Advanced Techniques</span>
                </div>
            </div>

            <!-- Maternity & Gynecology -->
            <div class="group bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300 border-t-4 border-pink-500 service-card">
                <div class="flex items-center mb-6">
                    <div class="bg-pink-100 p-4 rounded-full mr-4 group-hover:bg-pink-500 group-hover:text-white transition duration-300">
                        <i class="fas fa-baby text-pink-500 text-2xl group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary">Maternity & Gynecology</h3>
                </div>
                <p class="text-gray-600 mb-6 leading-relaxed">Comprehensive women's healthcare including pregnancy care, safe delivery services, gynecological treatments, and infertility solutions. Our experienced specialists provide personalized care throughout your journey.</p>
                <div class="space-y-2 mb-6">
                    <div class="flex items-center text-sm text-gray-600">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span>Pregnancy Care</span>
                    </div>
                    <div class="flex items-center text-sm text-gray-600">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span>Safe Delivery</span>
                    </div>
                    <div class="flex items-center text-sm text-gray-600">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span>Gynecological Care</span>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <a href="/maternity-gynecology-nagpur.php" class="text-pink-500 font-semibold hover:text-pink-700 transition duration-300 flex items-center">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    <span class="text-pink-500 font-bold text-sm">Expert Care</span>
                </div>
            </div>

            <!-- ICU & Critical Care -->
            <div class="group bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300 border-t-4 border-gold service-card">
                <div class="flex items-center mb-6">
                    <div class="bg-yellow-100 p-4 rounded-full mr-4 group-hover:bg-gold group-hover:text-white transition duration-300">
                        <i class="fas fa-heartbeat text-gold text-2xl group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary">ICU & Critical Care</h3>
                </div>
                <p class="text-gray-600 mb-6 leading-relaxed">State-of-the-art intensive care unit with advanced monitoring systems, ventilator support, and experienced critical care specialists providing round-the-clock care for critically ill patients.</p>
                <div class="space-y-2 mb-6">
                    <div class="flex items-center text-sm text-gray-600">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span>Advanced ICU</span>
                    </div>
                    <div class="flex items-center text-sm text-gray-600">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span>24/7 Monitoring</span>
                    </div>
                    <div class="flex items-center text-sm text-gray-600">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span>Ventilator Support</span>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <a href="/icu-critical-care-nagpur.php" class="text-gold font-semibold hover:text-yellow-600 transition duration-300 flex items-center">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    <span class="text-gold font-bold text-sm">Critical Care</span>
                </div>
            </div>

            <!-- Kidney Care & Dialysis -->
            <div class="group bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300 border-t-4 border-green-500 service-card">
                <div class="flex items-center mb-6">
                    <div class="bg-green-100 p-4 rounded-full mr-4 group-hover:bg-green-500 group-hover:text-white transition duration-300">
                        <i class="fas fa-kidneys text-green-500 text-2xl group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary">Kidney Care & Dialysis</h3>
                </div>
                <p class="text-gray-600 mb-6 leading-relaxed">Complete kidney disease diagnosis and treatment with state-of-the-art dialysis facilities. Our nephrology team provides comprehensive care for patients with kidney disorders using advanced technology.</p>
                <div class="space-y-2 mb-6">
                    <div class="flex items-center text-sm text-gray-600">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span>Hemodialysis</span>
                    </div>
                    <div class="flex items-center text-sm text-gray-600">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span>Kidney Disease Care</span>
                    </div>
                    <div class="flex items-center text-sm text-gray-600">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span>Expert Nephrologists</span>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <a href="/kidney-dialysis-treatment-nagpur.php" class="text-green-500 font-semibold hover:text-green-700 transition duration-300 flex items-center">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    <span class="text-green-500 font-bold text-sm">Advanced Care</span>
                </div>
            </div>

            <!-- Diagnostic Services -->
            <div class="group bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300 border-t-4 border-purple-500 service-card">
                <div class="flex items-center mb-6">
                    <div class="bg-purple-100 p-4 rounded-full mr-4 group-hover:bg-purple-500 group-hover:text-white transition duration-300">
                        <i class="fas fa-x-ray text-purple-500 text-2xl group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary">Diagnostic Services</h3>
                </div>
                <p class="text-gray-600 mb-6 leading-relaxed">Advanced diagnostic facilities including digital X-ray, ultrasound, sonography, and comprehensive pathology lab services for accurate diagnosis and treatment planning.</p>
                <div class="space-y-2 mb-6">
                    <div class="flex items-center text-sm text-gray-600">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span>Digital X-ray</span>
                    </div>
                    <div class="flex items-center text-sm text-gray-600">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span>Ultrasound Services</span>
                    </div>
                    <div class="flex items-center text-sm text-gray-600">
                        <i class="fas fa-check text-green-500 mr-2"></i>
                        <span>Blood Tests</span>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <a href="/diagnostic-imaging-services-nagpur.php" class="text-purple-500 font-semibold hover:text-purple-700 transition duration-300 flex items-center">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    <span class="text-purple-500 font-bold text-sm">Fast Results</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional Services -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-secondary mb-4">Additional Medical Services</h2>
            <p class="text-lg text-gray-600">Comprehensive healthcare solutions for all your medical needs</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white p-6 rounded-xl shadow-lg text-center card hover:shadow-xl transition duration-300">
                <div class="bg-primary text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-stethoscope text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-secondary mb-3">General Medicine</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Comprehensive primary healthcare and treatment of common medical conditions by experienced physicians.</p>
                <a href="/general-medicine-nagpur.php" class="text-primary font-semibold text-sm hover:text-primaryDark transition duration-300 mt-3 inline-block">Learn More →</a>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-lg text-center card hover:shadow-xl transition duration-300">
                <div class="bg-accent text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-bone text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-secondary mb-3">Orthopedic Care</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Specialized treatment for bone, joint, and muscle disorders including fracture care and spine treatment.</p>
                <a href="/orthopedic-bone-care-nagpur.php" class="text-accent font-semibold text-sm hover:text-red-700 transition duration-300 mt-3 inline-block">Learn More →</a>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-lg text-center card hover:shadow-xl transition duration-300">
                <div class="bg-gold text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-child text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-secondary mb-3">Pediatric Care</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Specialized medical care for infants, children, and adolescents with child-friendly environment and expert pediatricians.</p>
                <a href="/pediatric-child-care-nagpur.php" class="text-gold font-semibold text-sm hover:text-yellow-600 transition duration-300 mt-3 inline-block">Learn More →</a>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-lg text-center card hover:shadow-xl transition duration-300">
                <div class="bg-green-500 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-heart text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-secondary mb-3">Cardiology</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Heart care services including cardiac consultations, ECG, and treatment of cardiovascular conditions.</p>
                <a href="/cardiology-heart-care-nagpur.php" class="text-green-500 font-semibold text-sm hover:text-green-700 transition duration-300 mt-3 inline-block">Learn More →</a>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-lg text-center card hover:shadow-xl transition duration-300">
                <div class="bg-blue-500 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-syringe text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-secondary mb-3">Diabetes Care</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Comprehensive diabetes management including blood sugar monitoring, treatment, and lifestyle counseling.</p>
                <a href="/diabetes-care-clinic-nagpur.php" class="text-blue-500 font-semibold text-sm hover:text-blue-700 transition duration-300 mt-3 inline-block">Learn More →</a>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-lg text-center card hover:shadow-xl transition duration-300">
                <div class="bg-purple-500 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-pills text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-secondary mb-3">Pharmacy</h3>
                <p class="text-gray-600 text-sm leading-relaxed">24/7 pharmacy services with quality medications and healthcare products for patient convenience.</p>
                <a href="/pharmacy-services-nagpur.php" class="text-purple-500 font-semibold text-sm hover:text-purple-700 transition duration-300 mt-3 inline-block">Learn More →</a>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-lg text-center card hover:shadow-xl transition duration-300">
                <div class="bg-teal-500 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-vial text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-secondary mb-3">Pathology Lab</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Advanced pathology laboratory providing accurate blood tests and diagnostic services with quick results.</p>
                <a href="/pathology-lab-nagpur.php" class="text-teal-500 font-semibold text-sm hover:text-teal-700 transition duration-300 mt-3 inline-block">Learn More →</a>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-lg text-center card hover:shadow-xl transition duration-300">
                <div class="bg-orange-500 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-clipboard-check text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-secondary mb-3">Health Checkups</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Comprehensive health checkup packages for preventive care and early detection of health issues.</p>
                <a href="/health-checkup-packages-nagpur.php" class="text-orange-500 font-semibold text-sm hover:text-orange-700 transition duration-300 mt-3 inline-block">Learn More →</a>
            </div>
        </div>
    </div>
</section>

<!-- Service Features -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-secondary mb-4">Why Choose Our Services?</h2>
            <p class="text-lg text-gray-600">Excellence in healthcare delivery with patient-centered approach</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center card">
                <div class="bg-primary text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-user-md text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-secondary mb-3">Expert Doctors</h3>
                <p class="text-gray-600">Highly qualified and experienced medical professionals across all specialties providing world-class care.</p>
            </div>
            
            <div class="text-center card">
                <div class="bg-accent text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-hospital text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-secondary mb-3">Advanced Technology</h3>
                <p class="text-gray-600">State-of-the-art medical equipment and technology for accurate diagnosis and effective treatment.</p>
            </div>
            
            <div class="text-center card">
                <div class="bg-gold text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-clock text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-secondary mb-3">24/7 Availability</h3>
                <p class="text-gray-600">Round-the-clock emergency services and medical care available whenever you need it most.</p>
            </div>
            
            <div class="text-center card">
                <div class="bg-green-500 text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-heart text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-secondary mb-3">Compassionate Care</h3>
                <p class="text-gray-600">Patient-centered approach with personalized treatment plans and emotional support throughout healing.</p>
            </div>
        </div>
    </div>
</section>

<!-- Insurance & Payment -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-secondary mb-4">Insurance & Payment Options</h2>
            <p class="text-lg text-gray-600">Flexible payment solutions to make healthcare affordable and accessible</p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h3 class="text-2xl font-bold text-secondary mb-6">We Accept</h3>
                <div class="space-y-4">
                    <div class="flex items-center space-x-4 bg-white p-4 rounded-lg shadow">
                        <div class="bg-primary text-white p-3 rounded-full">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Health Insurance</h4>
                            <p class="text-gray-600 text-sm">Major health insurance plans and cashless treatment facilities</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-4 bg-white p-4 rounded-lg shadow">
                        <div class="bg-green-500 text-white p-3 rounded-full">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Credit/Debit Cards</h4>
                            <p class="text-gray-600 text-sm">All major credit and debit cards accepted for convenient payments</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-4 bg-white p-4 rounded-lg shadow">
                        <div class="bg-gold text-white p-3 rounded-full">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Cash Payments</h4>
                            <p class="text-gray-600 text-sm">Cash payments accepted with transparent pricing and detailed billing</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-4 bg-white p-4 rounded-lg shadow">
                        <div class="bg-blue-500 text-white p-3 rounded-full">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Digital Payments</h4>
                            <p class="text-gray-600 text-sm">UPI, digital wallets, and online payment options available</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <h3 class="text-xl font-bold text-secondary mb-6 text-center">Affordable Healthcare</h3>
                <div class="space-y-4">
                    <div class="flex justify-between items-center border-b pb-2">
                        <span class="text-gray-600">Emergency Consultation</span>
                        <span class="font-semibold text-primary">Affordable Rates</span>
                    </div>
                    <div class="flex justify-between items-center border-b pb-2">
                        <span class="text-gray-600">Diagnostic Services</span>
                        <span class="font-semibold text-primary">Competitive Pricing</span>
                    </div>
                    <div class="flex justify-between items-center border-b pb-2">
                        <span class="text-gray-600">Surgery Packages</span>
                        <span class="font-semibold text-primary">Transparent Costs</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Follow-up Consultations</span>
                        <span class="font-semibold text-primary">Reduced Rates</span>
                    </div>
                </div>
                <div class="mt-6 text-center">
                    <p class="text-gray-600 text-sm mb-4">Contact us for detailed pricing information and insurance verification</p>
                    <a href="/contact-hospital-nagpur.php" class="bg-primary text-white px-6 py-2 rounded-lg font-semibold hover:bg-primaryDark transition duration-300">Get Quote</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 bg-secondary text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Need Medical Care?</h2>
        <p class="text-xl mb-8 max-w-3xl mx-auto">Our comprehensive medical services are designed to meet all your healthcare needs. Contact us today to schedule an appointment or for emergency medical assistance.</p>
        
        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
            <a href="tel:8668289254" class="bg-accent hover:bg-red-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition duration-300 flex items-center justify-center space-x-2">
                <i class="fas fa-ambulance"></i>
                <span>Emergency: 8668289254</span>
            </a>
            <a href="/appointment-booking-online.php" class="bg-primary hover:bg-primaryDark text-white px-8 py-4 rounded-lg text-lg font-semibold transition duration-300 flex items-center justify-center space-x-2">
                <i class="fas fa-calendar-check"></i>
                <span>Book Appointment</span>
            </a>
            <a href="/doctors-specialists-nagpur.php" class="bg-transparent border-2 border-white hover:bg-white hover:text-secondary text-white px-8 py-4 rounded-lg text-lg font-semibold transition duration-300 flex items-center justify-center space-x-2">
                <i class="fas fa-user-md"></i>
                <span>Our Doctors</span>
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>