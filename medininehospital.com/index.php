<?php
// Page meta information
$page_title = "Best Super-Speciality Hospital in Nagpur - Medinine Hospital | 24/7 Emergency Care";
$page_description = "Medinine Hospital - Leading super-speciality hospital in Nagpur offering advanced medical care, 24/7 emergency services, expert doctors, and state-of-the-art facilities. Call 8668289254";
$page_keywords = "best hospital Nagpur, super speciality hospital, emergency services Nagpur, trauma care, surgery hospital, maternity services, dialysis center Nagpur, ICU facilities";
$canonical_url = "https://medininehospital.com/";
$og_title = "Best Super-Speciality Hospital in Nagpur - Medinine Hospital";
$og_description = "Leading healthcare provider in Nagpur offering comprehensive medical services including trauma care, surgery, maternity services, and 24/7 emergency care.";

// Schema markup
$schema_markup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Hospital",
  "name": "Medinine Hospital",
  "description": "Best Super-Speciality Hospital in Nagpur offering comprehensive medical services",
  "url": "https://medininehospital.com",
  "logo": "https://medininehospital.com/assets/medininehospital-logo.webp",
  "image": "https://medininehospital.com/assets/medinine.png",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "1A/1, Parivartan Square, Besa Road, Manewada",
    "addressLocality": "Nagpur",
    "addressRegion": "Maharashtra",
    "addressCountry": "IN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "21.1014517",
    "longitude": "79.1018804"
  },
  "telephone": "8668289254",
  "openingHours": "Mo-Su 00:00-23:59",
  "medicalSpecialty": ["Emergency Medicine", "Surgery", "Trauma Care", "Maternity", "Gynecology", "Nephrology", "Critical Care"],
  "hasMap": "https://maps.app.goo.gl/1yM8B1obgk8BwBzV9",
  "priceRange": "$",
  "currenciesAccepted": "INR",
  "paymentAccepted": ["Cash", "Credit Card", "Insurance"],
  "availableService": [
    "Emergency Care",
    "Trauma Treatment",
    "Surgery",
    "Maternity Services",
    "Dialysis",
    "ICU Care",
    "Diagnostic Services"
  ]
}
</script>';

// Include header
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="relative overflow-hidden">
    <div class="gradient-primary py-20 lg:py-28">
        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
        <div class="absolute inset-0 bg-cover bg-center opacity-10" style="background-image: url('https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80');"></div>
        <div class="relative container mx-auto px-4 text-center text-white">
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                Best Super-Speciality<br>
                <span class="text-gold">Hospital in Nagpur</span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 max-w-4xl mx-auto leading-relaxed opacity-90">
                Advanced medical care with state-of-the-art facilities, expert doctors, and 24/7 emergency services. 
                Your health is our priority at Medinine Hospital.
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6 mb-12">
                <a href="tel:8668289254" class="bg-accent hover:bg-red-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition duration-300 flex items-center justify-center space-x-2 shadow-lg">
                    <i class="fas fa-ambulance"></i>
                    <span>Emergency: 8668289254</span>
                </a>
                <a href="/book-doctor-appointment-nagpur" class="bg-white text-primary hover:bg-gray-100 px-8 py-4 rounded-lg text-lg font-semibold transition duration-300 flex items-center justify-center space-x-2 shadow-lg">
                    <i class="fas fa-calendar-check"></i>
                    <span>Book Appointment</span>
                </a>
            </div>
            
            <!-- Trust Indicators -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-4xl mx-auto">
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-gold mb-2">24/7</div>
                    <div class="text-sm md:text-base opacity-90">Emergency Care</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-gold mb-2">50+</div>
                    <div class="text-sm md:text-base opacity-90">Expert Doctors</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-gold mb-2">100+</div>
                    <div class="text-sm md:text-base opacity-90">Beds Available</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-gold mb-2">10K+</div>
                    <div class="text-sm md:text-base opacity-90">Happy Patients</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-secondary mb-4">Our Medical Services</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">Comprehensive healthcare services with advanced medical technology and compassionate care for all your health needs.</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Emergency Care -->
            <div class="group bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300 border-t-4 border-accent">
                <div class="flex items-center mb-6">
                    <div class="bg-red-100 p-4 rounded-full mr-4 group-hover:bg-accent group-hover:text-white transition duration-300">
                        <i class="fas fa-ambulance text-accent text-2xl group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary">Emergency & Trauma Care</h3>
                </div>
                <p class="text-gray-600 mb-6 leading-relaxed">24/7 emergency services with specialized trauma care, fracture treatment, and spine surgery. Our emergency department is equipped with modern life-saving equipment.</p>
                <div class="flex items-center justify-between">
                    <a href="/24-7-trauma-care-nagpur" class="text-accent font-semibold hover:text-red-700 transition duration-300 flex items-center">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    <span class="text-accent font-bold text-sm">24/7 Available</span>
                </div>
            </div>

            <!-- Surgery -->
            <div class="group bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300 border-t-4 border-primary">
                <div class="flex items-center mb-6">
                    <div class="bg-blue-100 p-4 rounded-full mr-4 group-hover:bg-primary group-hover:text-white transition duration-300">
                        <i class="fas fa-cut text-primary text-2xl group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary">Advanced Surgery</h3>
                </div>
                <p class="text-gray-600 mb-6 leading-relaxed">General surgery and minimally invasive laparoscopic procedures performed by expert surgeons using cutting-edge technology for faster recovery.</p>
                <div class="flex items-center justify-between">
                    <a href="/laparoscopic-surgery-nagpur" class="text-primary font-semibold hover:text-primaryDark transition duration-300 flex items-center">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    <span class="text-primary font-bold text-sm">Expert Surgeons</span>
                </div>
            </div>

            <!-- Maternity -->
            <div class="group bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300 border-t-4 border-pink-500">
                <div class="flex items-center mb-6">
                    <div class="bg-pink-100 p-4 rounded-full mr-4 group-hover:bg-pink-500 group-hover:text-white transition duration-300">
                        <i class="fas fa-baby text-pink-500 text-2xl group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary">Maternity & Gynecology</h3>
                </div>
                <p class="text-gray-600 mb-6 leading-relaxed">Comprehensive women's healthcare including maternity services, gynecological treatments, and infertility solutions with experienced specialists.</p>
                <div class="flex items-center justify-between">
                    <a href="/pregnancy-care-delivery-nagpur" class="text-pink-500 font-semibold hover:text-pink-700 transition duration-300 flex items-center">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    <span class="text-pink-500 font-bold text-sm">Safe Delivery</span>
                </div>
            </div>

            <!-- ICU -->
            <div class="group bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300 border-t-4 border-gold">
                <div class="flex items-center mb-6">
                    <div class="bg-yellow-100 p-4 rounded-full mr-4 group-hover:bg-gold group-hover:text-white transition duration-300">
                        <i class="fas fa-heartbeat text-gold text-2xl group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary">ICU & Critical Care</h3>
                </div>
                <p class="text-gray-600 mb-6 leading-relaxed">State-of-the-art intensive care unit with advanced monitoring systems and experienced critical care specialists providing round-the-clock care.</p>
                <div class="flex items-center justify-between">
                    <a href="/intensive-care-unit-nagpur" class="text-gold font-semibold hover:text-yellow-600 transition duration-300 flex items-center">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    <span class="text-gold font-bold text-sm">Advanced ICU</span>
                </div>
            </div>

            <!-- Dialysis -->
            <div class="group bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300 border-t-4 border-green-500">
                <div class="flex items-center mb-6">
                    <div class="bg-green-100 p-4 rounded-full mr-4 group-hover:bg-green-500 group-hover:text-white transition duration-300">
                        <i class="fas fa-kidneys text-green-500 text-2xl group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary">Kidney Care & Dialysis</h3>
                </div>
                <p class="text-gray-600 mb-6 leading-relaxed">Complete kidney disease diagnosis and treatment with state-of-the-art dialysis facilities managed by experienced nephrologists.</p>
                <div class="flex items-center justify-between">
                    <a href="/hemodialysis-center-nagpur" class="text-green-500 font-semibold hover:text-green-700 transition duration-300 flex items-center">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    <span class="text-green-500 font-bold text-sm">Expert Care</span>
                </div>
            </div>

            <!-- Diagnostics -->
            <div class="group bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300 border-t-4 border-purple-500">
                <div class="flex items-center mb-6">
                    <div class="bg-purple-100 p-4 rounded-full mr-4 group-hover:bg-purple-500 group-hover:text-white transition duration-300">
                        <i class="fas fa-x-ray text-purple-500 text-2xl group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary">Diagnostic Services</h3>
                </div>
                <p class="text-gray-600 mb-6 leading-relaxed">Advanced diagnostic facilities including digital X-ray, ultrasound, and comprehensive blood testing services for accurate diagnosis.</p>
                <div class="flex items-center justify-between">
                    <a href="/xray-ultrasound-tests-nagpur" class="text-purple-500 font-semibold hover:text-purple-700 transition duration-300 flex items-center">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    <span class="text-purple-500 font-bold text-sm">Fast Results</span>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <a href="/healthcare-services-nagpur" class="bg-primary text-white px-8 py-4 rounded-lg font-semibold hover:bg-primaryDark transition duration-300 inline-flex items-center space-x-2">
                <span>View All Services</span>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-secondary mb-4">Why Choose Medinine Hospital?</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">Your trusted healthcare partner in Nagpur with excellence in medical care and patient satisfaction</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center group">
                <div class="bg-gradient-to-br from-accent to-red-600 text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition duration-300 shadow-lg">
                    <i class="fas fa-clock text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-secondary">24/7 Emergency Services</h3>
                <p class="text-gray-600">Round-the-clock emergency care with ambulance services available for immediate medical assistance and critical care.</p>
            </div>
            
            <div class="text-center group">
                <div class="bg-gradient-to-br from-primary to-primaryDark text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition duration-300 shadow-lg">
                    <i class="fas fa-user-md text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-secondary">Expert Medical Team</h3>
                <p class="text-gray-600">Highly qualified and experienced doctors across all specialties providing world-class medical care and treatment.</p>
            </div>
            
            <div class="text-center group">
                <div class="bg-gradient-to-br from-gold to-yellow-600 text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition duration-300 shadow-lg">
                    <i class="fas fa-hospital text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-secondary">Advanced Facilities</h3>
                <p class="text-gray-600">State-of-the-art medical equipment, modern operation theaters, and comfortable patient rooms with latest amenities.</p>
            </div>
            
            <div class="text-center group">
                <div class="bg-gradient-to-br from-green-500 to-green-600 text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition duration-300 shadow-lg">
                    <i class="fas fa-heart text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-secondary">Compassionate Care</h3>
                <p class="text-gray-600">Patient-centered approach with personalized treatment plans and emotional support throughout the healing journey.</p>
            </div>
        </div>
    </div>
</section>

<!-- Hospital Gallery -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-secondary mb-4">Hospital Facilities</h2>
            <p class="text-lg text-gray-600">Take a look at our modern facilities and advanced medical equipment</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="relative overflow-hidden rounded-xl shadow-lg group">
                <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Hospital Exterior" class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                    <div class="absolute bottom-4 left-4 text-white">
                        <h4 class="text-lg font-semibold">Hospital Exterior</h4>
                        <p class="text-sm opacity-90">Modern Healthcare Facility</p>
                    </div>
                </div>
            </div>
            
            <div class="relative overflow-hidden rounded-xl shadow-lg group">
                <img src="https://images.unsplash.com/photo-1563213126-a4273aed2016?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="ICU Ward" class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                    <div class="absolute bottom-4 left-4 text-white">
                        <h4 class="text-lg font-semibold">ICU Ward</h4>
                        <p class="text-sm opacity-90">Critical Care Unit</p>
                    </div>
                </div>
            </div>
            
            <div class="relative overflow-hidden rounded-xl shadow-lg group">
                <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Operation Theater" class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                    <div class="absolute bottom-4 left-4 text-white">
                        <h4 class="text-lg font-semibold">Operation Theater</h4>
                        <p class="text-sm opacity-90">Advanced Surgery Suite</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-16 bg-primary text-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">What Our Patients Say</h2>
            <p class="text-xl opacity-90">Real experiences from our satisfied patients</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white bg-opacity-10 p-8 rounded-xl backdrop-blur-sm">
                <div class="flex items-center mb-4">
                    <div class="flex text-gold">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-lg mb-6 leading-relaxed">"Excellent medical care and very professional staff. The emergency team saved my life during a critical situation. Highly recommended!"</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gold rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-user text-white"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold">Rajesh Sharma</h4>
                        <p class="text-sm opacity-75">Emergency Patient</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white bg-opacity-10 p-8 rounded-xl backdrop-blur-sm">
                <div class="flex items-center mb-4">
                    <div class="flex text-gold">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-lg mb-6 leading-relaxed">"Safe delivery of my baby with excellent maternity care. The doctors and nurses were very caring and supportive throughout."</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gold rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-user text-white"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold">Priya Patel</h4>
                        <p class="text-sm opacity-75">Maternity Patient</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white bg-opacity-10 p-8 rounded-xl backdrop-blur-sm">
                <div class="flex items-center mb-4">
                    <div class="flex text-gold">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-lg mb-6 leading-relaxed">"Successful surgery with minimal recovery time. The surgical team was highly skilled and the post-operative care was exceptional."</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gold rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-user text-white"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold">Amit Kumar</h4>
                        <p class="text-sm opacity-75">Surgery Patient</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-secondary text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Need Medical Assistance?</h2>
        <p class="text-xl mb-8 max-w-3xl mx-auto">Our medical team is ready to provide you with the best possible care. Contact us for appointments or emergency services.</p>
        
        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
            <a href="tel:8668289254" class="bg-accent hover:bg-red-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition duration-300 flex items-center justify-center space-x-2">
                <i class="fas fa-ambulance"></i>
                <span>Emergency: 8668289254</span>
            </a>
            <a href="/book-doctor-appointment-nagpur" class="bg-primary hover:bg-primaryDark text-white px-8 py-4 rounded-lg text-lg font-semibold transition duration-300 flex items-center justify-center space-x-2">
                <i class="fas fa-calendar-check"></i>
                <span>Book Appointment</span>
            </a>
            <a href="/contact-medinine-hospital" class="bg-transparent border-2 border-white hover:bg-white hover:text-secondary text-white px-8 py-4 rounded-lg text-lg font-semibold transition duration-300 flex items-center justify-center space-x-2">
                <i class="fas fa-envelope"></i>
                <span>Contact Us</span>
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>