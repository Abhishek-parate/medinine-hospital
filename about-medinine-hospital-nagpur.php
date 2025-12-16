<?php
// Page meta information
$page_title = "About Medinine Hospital Nagpur - Best Super-Speciality Hospital ";
$page_description = "Learn about Medinine Hospital, the leading super-speciality hospital in Nagpur. Discover our mission, vision, expert medical team";
$page_keywords = "about Medinine Hospital, best hospital Nagpur history, super speciality hospital Nagpur, healthcare services Nagpur, medical facilities Nagpur, hospital mission vision, expert doctors Nagpur, advanced medical equipment, patient care Nagpur";
$canonical_url = "https://medininehospital.com/about-medinine-hospital-nagpur";
$og_title = "About Medinine Hospital - Best Super-Speciality Hospital in Nagpur";
$og_description = "Discover Medinine Hospital's commitment to excellence in healthcare. Learn about our expert medical team, advanced facilities, and patient-centered approach in Nagpur.";

// Schema markup
$schema_markup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "AboutPage",
  "name": "About Medinine Hospital",
  "description": "Learn about Medinine Hospital - Best Super-Speciality Hospital in Nagpur",
  "url": "https://medininehospital.com/about-medinine-hospital-nagpur.php",
  "mainEntity": {
    "@type": "Hospital",
    "name": "Medinine Hospital",
    "foundingDate": "2010",
    "description": "Leading super-speciality hospital in Nagpur providing comprehensive healthcare services",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "1A/1, Parivartan Square, Besa Road, Manewada",
      "addressLocality": "Nagpur",
      "addressRegion": "Maharashtra",
      "postalCode": "440037",
      "addressCountry": "IN"
    },
    "telephone": "+918668289254",
    "medicalSpecialty": ["Emergency Medicine", "General Surgery", "Maternity Care", "Critical Care", "Nephrology"]
  }
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
                About <span class="text-gold">Medinine Hospital</span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 max-w-4xl mx-auto leading-relaxed opacity-90">
                Your trusted healthcare partner in Nagpur, committed to excellence in medical care since our establishment
            </p>
            <nav class="flex justify-center" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm">
                    <li><a href="/index.php" class="hover:text-gold transition duration-300">Home</a></li>
                    <li><i class="fas fa-chevron-right text-gold mx-2"></i></li>
                    <li class="text-gold">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!-- Hospital Introduction -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-4xl md:text-5xl font-bold text-secondary mb-6">Leading Healthcare Excellence in Nagpur</h2>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    Medinine Hospital stands as a beacon of hope and healing in Nagpur, Maharashtra. Located at the prestigious Parivartan Square on Besa Road, Manewada, our hospital has been serving the community with unwavering dedication to providing world-class medical care.
                </p>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    Since our inception, we have built a reputation as the best super-speciality hospital in Nagpur by combining advanced medical technology with compassionate care. Our commitment to excellence has made us the preferred healthcare destination for thousands of families across Nagpur and surrounding regions.
                </p>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    With state-of-the-art facilities, a team of highly qualified medical professionals, and a patient-centric approach, Medinine Hospital continues to set new standards in healthcare delivery. We believe that every patient deserves the highest quality of medical care, regardless of their background or circumstances.
                </p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="/appointment-booking-online.php" class="bg-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-primaryDark transition duration-300 text-center">
                        Book Appointment
                    </a>
                    <a href="tel:8668289254" class="bg-accent text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-700 transition duration-300 text-center">
                        Emergency: 8668289254
                    </a>
                </div>
            </div>
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Medinine Hospital Building - Best Hospital in Nagpur" class="rounded-xl shadow-lg">
                <div class="absolute -bottom-6 -right-6 bg-primary text-white p-6 rounded-xl shadow-lg">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-gold">10+</div>
                        <div class="text-sm">Years of Service</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission, Vision, Values -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-secondary mb-4">Our Mission, Vision & Values</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">The guiding principles that drive our commitment to excellence in healthcare</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Mission -->
            <div class="bg-white p-8 rounded-xl shadow-lg text-center card">
                <div class="bg-primary text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-bullseye text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-secondary mb-4">Our Mission</h3>
                <p class="text-gray-600 leading-relaxed">
                    To provide accessible, affordable, and advanced healthcare services to the people of Nagpur and beyond. We are committed to delivering patient-centered care with dignity, respect, and clinical excellence while continuously improving our services to meet the evolving healthcare needs of our community.
                </p>
            </div>
            
            <!-- Vision -->
            <div class="bg-white p-8 rounded-xl shadow-lg text-center card">
                <div class="bg-accent text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-eye text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-secondary mb-4">Our Vision</h3>
                <p class="text-gray-600 leading-relaxed">
                    To be recognized as the premier super-speciality hospital in Maharashtra, known for our innovative medical practices, cutting-edge technology, and compassionate care. We aspire to be the healthcare institution that patients and families turn to with complete trust and confidence.
                </p>
            </div>
            
            <!-- Values -->
            <div class="bg-white p-8 rounded-xl shadow-lg text-center card">
                <div class="bg-gold text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-heart text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-secondary mb-4">Our Values</h3>
                <p class="text-gray-600 leading-relaxed">
                    Compassion, Integrity, Excellence, Innovation, and Respect form the foundation of our healthcare philosophy. We believe in treating every patient with empathy, maintaining the highest ethical standards, and continuously striving for medical excellence through innovation and research.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Hospital Achievements -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-secondary mb-4">Our Achievements & Recognition</h2>
            <p class="text-lg text-gray-600">Milestones that reflect our commitment to healthcare excellence</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center card">
                <div class="bg-gradient-to-br from-primary to-primaryDark text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-users text-2xl"></i>
                </div>
                <div class="text-3xl font-bold text-primary mb-2">10,000+</div>
                <h3 class="text-lg font-semibold text-secondary mb-2">Happy Patients</h3>
                <p class="text-gray-600 text-sm">Successfully treated patients with excellent outcomes</p>
            </div>
            
            <div class="text-center card">
                <div class="bg-gradient-to-br from-accent to-red-600 text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-procedures text-2xl"></i>
                </div>
                <div class="text-3xl font-bold text-accent mb-2">5,000+</div>
                <h3 class="text-lg font-semibold text-secondary mb-2">Successful Surgeries</h3>
                <p class="text-gray-600 text-sm">Complex surgical procedures with minimal complications</p>
            </div>
            
            <div class="text-center card">
                <div class="bg-gradient-to-br from-gold to-yellow-600 text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-baby text-2xl"></i>
                </div>
                <div class="text-3xl font-bold text-gold mb-2">2,500+</div>
                <h3 class="text-lg font-semibold text-secondary mb-2">Safe Deliveries</h3>
                <p class="text-gray-600 text-sm">Healthy babies delivered with expert maternity care</p>
            </div>
            
            <div class="text-center card">
                <div class="bg-gradient-to-br from-green-500 to-green-600 text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-award text-2xl"></i>
                </div>
                <div class="text-3xl font-bold text-green-500 mb-2">99%</div>
                <h3 class="text-lg font-semibold text-secondary mb-2">Patient Satisfaction</h3>
                <p class="text-gray-600 text-sm">High patient satisfaction rating and positive feedback</p>
            </div>
        </div>
    </div>
</section>

<!-- Hospital Facilities -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-secondary mb-4">World-Class Healthcare Facilities</h2>
            <p class="text-lg text-gray-600">Advanced medical infrastructure designed for superior patient care</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-xl shadow-lg card">
                <div class="flex items-center mb-4">
                    <div class="bg-primary text-white p-3 rounded-full mr-4">
                        <i class="fas fa-bed text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary">Patient Rooms</h3>
                </div>
                <p class="text-gray-600 mb-4">Comfortable and well-equipped patient rooms with AC facilities, deluxe accommodations, and modern amenities for patient comfort and recovery.</p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>AC and Non-AC rooms</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Deluxe facilities</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>24/7 nursing care</li>
                </ul>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-lg card">
                <div class="flex items-center mb-4">
                    <div class="bg-accent text-white p-3 rounded-full mr-4">
                        <i class="fas fa-cut text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary">Operation Theaters</h3>
                </div>
                <p class="text-gray-600 mb-4">State-of-the-art operation theaters equipped with advanced surgical equipment for general surgery and laparoscopic procedures.</p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Laminar air flow</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Advanced surgical equipment</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Infection control protocols</li>
                </ul>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-lg card">
                <div class="flex items-center mb-4">
                    <div class="bg-gold text-white p-3 rounded-full mr-4">
                        <i class="fas fa-heartbeat text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary">ICU Services</h3>
                </div>
                <p class="text-gray-600 mb-4">Modern intensive care unit with advanced monitoring systems and life support equipment for critical patient care.</p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Advanced monitoring</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Ventilator support</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>24/7 intensive care</li>
                </ul>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-lg card">
                <div class="flex items-center mb-4">
                    <div class="bg-green-500 text-white p-3 rounded-full mr-4">
                        <i class="fas fa-flask text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary">Laboratory</h3>
                </div>
                <p class="text-gray-600 mb-4">Comprehensive pathology lab offering all types of blood tests and diagnostic services with quick and accurate results.</p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>All blood tests</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Quick results</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Quality assurance</li>
                </ul>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-lg card">
                <div class="flex items-center mb-4">
                    <div class="bg-purple-500 text-white p-3 rounded-full mr-4">
                        <i class="fas fa-x-ray text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary">Radiology</h3>
                </div>
                <p class="text-gray-600 mb-4">Advanced imaging services including digital X-ray, ultrasound, and sonography for accurate diagnosis and treatment planning.</p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Digital X-ray</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Ultrasound services</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Expert radiologists</li>
                </ul>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-lg card">
                <div class="flex items-center mb-4">
                    <div class="bg-blue-500 text-white p-3 rounded-full mr-4">
                        <i class="fas fa-pills text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary">Pharmacy</h3>
                </div>
                <p class="text-gray-600 mb-4">On-site pharmacy facilities providing prescription medications and healthcare products for patient convenience.</p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>24/7 availability</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Quality medications</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Expert pharmacists</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Quality & Accreditation -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-secondary mb-4">Quality & Safety Standards</h2>
            <p class="text-lg text-gray-600">Committed to maintaining the highest standards of healthcare quality and patient safety</p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h3 class="text-2xl font-bold text-secondary mb-6">Our Commitment to Excellence</h3>
                <div class="space-y-4">
                    <div class="flex items-start space-x-4">
                        <div class="bg-primary text-white p-2 rounded-full mt-1">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-1">Patient Safety Protocols</h4>
                            <p class="text-gray-600">Strict adherence to international patient safety standards and infection control measures.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="bg-accent text-white p-2 rounded-full mt-1">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-1">Quality Assurance</h4>
                            <p class="text-gray-600">Continuous quality improvement programs and regular audits to ensure best practices.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="bg-gold text-white p-2 rounded-full mt-1">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-1">Expert Medical Team</h4>
                            <p class="text-gray-600">Highly qualified doctors and healthcare professionals with extensive experience.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="bg-green-500 text-white p-2 rounded-full mt-1">
                            <i class="fas fa-microscope"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-1">Advanced Technology</h4>
                            <p class="text-gray-600">State-of-the-art medical equipment and technology for accurate diagnosis and treatment.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-50 p-8 rounded-xl">
                <h3 class="text-xl font-bold text-secondary mb-6 text-center">Our Quality Metrics</h3>
                <div class="grid grid-cols-2 gap-6">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary mb-2">99.2%</div>
                        <div class="text-sm text-gray-600">Patient Satisfaction Rate</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-accent mb-2">0.1%</div>
                        <div class="text-sm text-gray-600">Hospital Infection Rate</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-gold mb-2">98.5%</div>
                        <div class="text-sm text-gray-600">Treatment Success Rate</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-green-500 mb-2">24/7</div>
                        <div class="text-sm text-gray-600">Emergency Availability</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hospital Leadership -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-secondary mb-4">Our Leadership Team</h2>
            <p class="text-lg text-gray-600">Experienced healthcare leaders driving our mission of excellence</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-xl shadow-lg text-center card">
                <div class="w-24 h-24 bg-gradient-to-br from-primary to-primaryDark rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-user-tie text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-secondary mb-2">Dr. Rajesh Medinine</h3>
                <p class="text-primary font-semibold mb-3">Chief Medical Director</p>
                <p class="text-gray-600 text-sm leading-relaxed">Leading Medinine Hospital with over 20 years of experience in healthcare administration and clinical excellence. Committed to providing world-class medical care to the people of Nagpur.</p>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-lg text-center card">
                <div class="w-24 h-24 bg-gradient-to-br from-accent to-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-user-md text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-secondary mb-2">Dr. Priya Sharma</h3>
                <p class="text-accent font-semibold mb-3">Head of Medical Services</p>
                <p class="text-gray-600 text-sm leading-relaxed">Overseeing all clinical operations and ensuring the highest standards of patient care across all departments. Expert in emergency medicine and trauma care.</p>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-lg text-center card">
                <div class="w-24 h-24 bg-gradient-to-br from-gold to-yellow-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-hospital-user text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-secondary mb-2">Ms. Sunita Patel</h3>
                <p class="text-gold font-semibold mb-3">Hospital Administrator</p>
                <p class="text-gray-600 text-sm leading-relaxed">Managing hospital operations, patient services, and ensuring smooth functioning of all departments. Dedicated to enhancing patient experience and operational efficiency.</p>
            </div>
        </div>
    </div>
</section>

<!-- Community Involvement -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-secondary mb-4">Community Involvement</h2>
            <p class="text-lg text-gray-600">Giving back to the Nagpur community through healthcare initiatives and social responsibility</p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h3 class="text-2xl font-bold text-secondary mb-6">Our Social Responsibility</h3>
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="bg-primary text-white p-3 rounded-full">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-2">Free Health Camps</h4>
                            <p class="text-gray-600">Regular health checkup camps in rural areas and underprivileged communities around Nagpur, providing free medical consultations and basic healthcare services.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="bg-accent text-white p-3 rounded-full">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-2">Medical Education</h4>
                            <p class="text-gray-600">Training programs for nursing students, medical interns, and healthcare professionals to build a skilled healthcare workforce in the region.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="bg-green-500 text-white p-3 rounded-full">
                            <i class="fas fa-hand-holding-medical"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-2">Emergency Response</h4>
                            <p class="text-gray-600">Active participation in disaster relief efforts and emergency medical response during natural calamities and community emergencies.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="bg-gold text-white p-3 rounded-full">
                            <i class="fas fa-users"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-2">Health Awareness</h4>
                            <p class="text-gray-600">Educational programs on preventive healthcare, hygiene, and health awareness to promote community wellness and disease prevention.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Community Health Camp - Medinine Hospital Social Responsibility" class="rounded-xl shadow-lg">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent rounded-xl">
                    <div class="absolute bottom-4 left-4 text-white">
                        <h4 class="text-lg font-semibold">Community Health Initiative</h4>
                        <p class="text-sm opacity-90">Serving the community beyond hospital walls</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 bg-secondary text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Experience Excellence in Healthcare</h2>
        <p class="text-xl mb-8 max-w-3xl mx-auto">Join thousands of satisfied patients who have experienced our commitment to quality healthcare. Your health and well-being are our top priorities.</p>
        
        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
            <a href="tel:8668289254" class="bg-accent hover:bg-red-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition duration-300 flex items-center justify-center space-x-2">
                <i class="fas fa-ambulance"></i>
                <span>Emergency: 8668289254</span>
            </a>
            <a href="/appointment-booking-online.php" class="bg-primary hover:bg-primaryDark text-white px-8 py-4 rounded-lg text-lg font-semibold transition duration-300 flex items-center justify-center space-x-2">
                <i class="fas fa-calendar-check"></i>
                <span>Book Appointment</span>
            </a>
            <a href="/contact-hospital-nagpur.php" class="bg-transparent border-2 border-white hover:bg-white hover:text-secondary text-white px-8 py-4 rounded-lg text-lg font-semibold transition duration-300 flex items-center justify-center space-x-2">
                <i class="fas fa-envelope"></i>
                <span>Contact Us</span>
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>