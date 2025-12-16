<?php
// Page meta information
$page_title = "About Medinine Hospital - Best Super-Speciality Hospital in Nagpur | Our Story";
$page_description = "Learn about Medinine Hospital Nagpur - Leading healthcare institution with expert doctors, advanced facilities, and commitment to quality medical care since establishment. Best hospital in Nagpur.";
$page_keywords = "about Medinine Hospital, hospital history Nagpur, healthcare facility, medical expertise, hospital infrastructure, quality healthcare Nagpur, super speciality hospital";
$canonical_url = "https://medininehospital.com/about-best-hospital-nagpur";
$og_title = "About Medinine Hospital - Best Super-Speciality Hospital in Nagpur";
$og_description = "Discover the story of Medinine Hospital - Leading healthcare institution in Nagpur committed to providing exceptional medical care with advanced facilities and expert doctors.";

// Schema markup
$schema_markup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalOrganization",
  "name": "Medinine Hospital",
  "alternateName": "Best Super-Speciality Hospital in Nagpur",
  "url": "https://medininehospital.com",
  "logo": "https://medininehospital.com/assets/medininehospital-logo.webp",
  "image": "https://medininehospital.com/assets/medinine.png",
  "description": "Leading healthcare provider in Nagpur offering comprehensive medical services including emergency care, surgery, maternity services, and specialized treatments.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "1A/1, Parivartan Square, Besa Road, Manewada",
    "addressLocality": "Nagpur",
    "addressRegion": "Maharashtra",
    "postalCode": "440037",
    "addressCountry": "IN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "21.1014517",
    "longitude": "79.1018804"
  },
  "telephone": "8668289254",
  "email": "info@medininehospital.com",
  "medicalSpecialty": ["Emergency Medicine", "General Surgery", "Gynecology", "Nephrology", "Critical Care", "Cardiology", "Orthopedics"],
  "hasMap": "https://maps.app.goo.gl/1yM8B1obgk8BwBzV9",
  "foundingDate": "2015",
  "numberOfEmployees": "200+",
  "areaServed": "Nagpur, Maharashtra, Central India"
}
</script>';

// Include header
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="relative overflow-hidden">
    <div class="gradient-primary py-20">
        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
        <div class="absolute inset-0 bg-cover bg-center opacity-10" style="background-image: url('https://images.unsplash.com/photo-1559757148-5c350d0d3c56?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80');"></div>
        <div class="relative container mx-auto px-4 text-center text-white">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">About Medinine Hospital</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-4xl mx-auto leading-relaxed opacity-90">
                Discover our commitment to excellence in healthcare and our journey to becoming Nagpur's most trusted super-speciality medical institution.
            </p>
            <div class="flex justify-center space-x-8 text-center">
                <div>
                    <div class="text-3xl font-bold text-gold">10+</div>
                    <div class="text-sm opacity-75">Years of Excellence</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-gold">50+</div>
                    <div class="text-sm opacity-75">Expert Doctors</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-gold">10,000+</div>
                    <div class="text-sm opacity-75">Lives Saved</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Story -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
            <div>
                <h2 class="text-4xl font-bold text-secondary mb-8 flex items-center">
                    <i class="fas fa-heart text-accent mr-4"></i>
                    Our Story & Mission
                </h2>
                
                <div class="space-y-6">
                    <p class="text-lg text-gray-700 leading-relaxed">Medinine Hospital stands as a beacon of excellence in healthcare delivery in Nagpur, Maharashtra. Established with a vision to provide world-class medical services to the community, we have grown to become one of the most trusted super-speciality healthcare institutions in Central India. Our hospital is strategically located at 1A/1, Parivartan Square, Besa Road, Manewada, making us easily accessible to patients from all parts of Nagpur and surrounding regions.</p>
                    
                    <p class="text-lg text-gray-700 leading-relaxed">Since our inception, Medinine Hospital has been committed to delivering comprehensive healthcare services that combine cutting-edge medical technology with compassionate patient care. Our multidisciplinary approach ensures that every patient receives personalized treatment tailored to their specific medical needs. We believe that quality healthcare should be accessible to everyone, and this philosophy drives our commitment to affordable, excellent medical services.</p>
                    
                    <p class="text-lg text-gray-700 leading-relaxed">Our hospital specializes in a wide range of medical services including emergency and trauma care, general and laparoscopic surgery, intensive care unit services, comprehensive maternity and gynecology care, advanced diagnostic services, kidney disease treatment with dialysis facilities, and much more. Each department is equipped with state-of-the-art medical equipment and staffed by experienced healthcare professionals who are dedicated to providing the highest standard of care.</p>
                </div>
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Medinine Hospital Building" class="rounded-xl shadow-lg w-full">
            </div>
        </div>

        <!-- Vision & Mission Cards -->
        <div class="grid md:grid-cols-2 gap-8 mb-16">
            <div class="bg-gradient-to-br from-primary to-primaryDark text-white p-8 rounded-xl shadow-lg">
                <div class="flex items-center mb-6">
                    <i class="fas fa-eye text-gold text-3xl mr-4"></i>
                    <h3 class="text-2xl font-bold">Our Vision</h3>
                </div>
                <p class="text-lg leading-relaxed opacity-90">To be the leading healthcare provider in Central India, recognized for our commitment to clinical excellence, patient safety, and compassionate care. We envision a community where everyone has access to quality healthcare services delivered with dignity, respect, and innovation.</p>
            </div>
            
            <div class="bg-gradient-to-br from-accent to-red-600 text-white p-8 rounded-xl shadow-lg">
                <div class="flex items-center mb-6">
                    <i class="fas fa-bullseye text-gold text-3xl mr-4"></i>
                    <h3 class="text-2xl font-bold">Our Mission</h3>
                </div>
                <p class="text-lg leading-relaxed opacity-90">To provide comprehensive, compassionate, and cost-effective healthcare services to our community while maintaining the highest standards of medical excellence. We are committed to continuous improvement, innovation, and the professional development of our healthcare team.</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Values -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-secondary mb-4">Our Core Values</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">The principles that guide our commitment to exceptional healthcare delivery and patient satisfaction</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white p-8 rounded-xl shadow-lg text-center group hover:shadow-xl transition duration-300">
                <div class="bg-gradient-to-br from-primary to-primaryDark text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition duration-300">
                    <i class="fas fa-award text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-4 text-secondary">Excellence</h3>
                <p class="text-gray-600 leading-relaxed">We strive for excellence in every aspect of patient care, from diagnosis to treatment and recovery, ensuring the highest medical standards and continuous quality improvement in all our services.</p>
            </div>
            
            <div class="bg-white p-8 rounded-xl shadow-lg text-center group hover:shadow-xl transition duration-300">
                <div class="bg-gradient-to-br from-accent to-red-600 text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition duration-300">
                    <i class="fas fa-heart text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-4 text-secondary">Compassion</h3>
                <p class="text-gray-600 leading-relaxed">We treat every patient with empathy, respect, and understanding, providing not just medical care but emotional support during difficult times with genuine concern for their well-being and recovery.</p>
            </div>
            
            <div class="bg-white p-8 rounded-xl shadow-lg text-center group hover:shadow-xl transition duration-300">
                <div class="bg-gradient-to-br from-gold to-yellow-600 text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition duration-300">
                    <i class="fas fa-lightbulb text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-4 text-secondary">Innovation</h3>
                <p class="text-gray-600 leading-relaxed">We embrace the latest medical technologies and treatment methodologies to provide cutting-edge healthcare solutions that improve patient outcomes and enhance recovery experiences through advanced medical practices.</p>
            </div>
            
            <div class="bg-white p-8 rounded-xl shadow-lg text-center group hover:shadow-xl transition duration-300">
                <div class="bg-gradient-to-br from-green-500 to-green-600 text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition duration-300">
                    <i class="fas fa-shield-alt text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-4 text-secondary">Integrity</h3>
                <p class="text-gray-600 leading-relaxed">We maintain the highest ethical standards in all our practices, ensuring transparency and honesty in patient interactions while upholding professional medical ethics and maintaining trust in all relationships.</p>
            </div>
        </div>
    </div>
</section>

<!-- Hospital Infrastructure -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <img src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Hospital Infrastructure" class="rounded-xl shadow-lg w-full">
            </div>
            <div>
                <h2 class="text-4xl font-bold text-secondary mb-8 flex items-center">
                    <i class="fas fa-building text-primary mr-4"></i>
                    State-of-the-Art Infrastructure
                </h2>
                <div class="space-y-6">
                    <p class="text-lg text-gray-700 leading-relaxed">Medinine Hospital boasts modern infrastructure designed to provide optimal comfort and care for patients and their families. Our facility features spacious, well-ventilated rooms equipped with air conditioning and modern amenities to ensure patient comfort during their stay. The hospital is designed with patient safety and accessibility in mind, with wide corridors, elevator access, and emergency evacuation systems.</p>
                    
                    <p class="text-lg text-gray-700 leading-relaxed">Our advanced intensive care unit is equipped with the latest monitoring systems and life-support equipment, staffed by experienced critical care specialists who provide round-the-clock patient monitoring. The ICU is designed to handle the most complex medical cases, ensuring that patients receive the highest level of care when they need it most.</p>
                    
                    <p class="text-lg text-gray-700 leading-relaxed">The hospital also features modern operation theaters equipped with advanced surgical equipment for both general and laparoscopic procedures. Our diagnostic department houses state-of-the-art imaging equipment including digital X-ray machines and advanced ultrasound systems, ensuring accurate and timely diagnosis for effective treatment planning.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hospital Features -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-secondary mb-4">Hospital Features & Facilities</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">Modern amenities and advanced medical facilities designed for optimal patient care and comfort</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-primary hover:shadow-xl transition duration-300">
                <div class="flex items-center mb-4">
                    <i class="fas fa-bed text-primary text-2xl mr-4"></i>
                    <h3 class="text-xl font-semibold text-secondary">AC & Deluxe Rooms</h3>
                </div>
                <p class="text-gray-600">Comfortable air-conditioned rooms with modern amenities, ensuring patient comfort during recovery with family accommodation facilities and 24/7 nursing care.</p>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-accent hover:shadow-xl transition duration-300">
                <div class="flex items-center mb-4">
                    <i class="fas fa-procedures text-accent text-2xl mr-4"></i>
                    <h3 class="text-xl font-semibold text-secondary">Advanced ICU</h3>
                </div>
                <p class="text-gray-600">State-of-the-art intensive care units with modern monitoring equipment and experienced critical care specialists available round-the-clock for critical patients.</p>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-gold hover:shadow-xl transition duration-300">
                <div class="flex items-center mb-4">
                    <i class="fas fa-cut text-gold text-2xl mr-4"></i>
                    <h3 class="text-xl font-semibold text-secondary">Modern Operation Theater</h3>
                </div>
                <p class="text-gray-600">Fully equipped operation theaters with advanced surgical equipment for general and laparoscopic procedures with laminar air flow and infection control systems.</p>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-green-500 hover:shadow-xl transition duration-300">
                <div class="flex items-center mb-4">
                    <i class="fas fa-x-ray text-green-500 text-2xl mr-4"></i>
                    <h3 class="text-xl font-semibold text-secondary">Digital Imaging</h3>
                </div>
                <p class="text-gray-600">Advanced diagnostic facilities including digital X-ray, ultrasound, and comprehensive imaging services for accurate diagnosis and treatment planning.</p>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-purple-500 hover:shadow-xl transition duration-300">
                <div class="flex items-center mb-4">
                    <i class="fas fa-vial text-purple-500 text-2xl mr-4"></i>
                    <h3 class="text-xl font-semibold text-secondary">Laboratory Services</h3>
                </div>
                <p class="text-gray-600">Comprehensive blood testing and pathology services with automated equipment for quick and accurate test results and specialized diagnostic procedures.</p>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-blue-500 hover:shadow-xl transition duration-300">
                <div class="flex items-center mb-4">
                    <i class="fas fa-pills text-blue-500 text-2xl mr-4"></i>
                    <h3 class="text-xl font-semibold text-secondary">24/7 Pharmacy</h3>
                </div>
                <p class="text-gray-600">Fully stocked pharmacy with all essential medications available round-the-clock for patient convenience and emergency medication needs.</p>
            </div>
        </div>
    </div>
</section>

<!-- Leadership Team -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-secondary mb-4">Our Leadership Team</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">Experienced medical professionals and administrators dedicated to providing exceptional patient care and hospital management</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center group">
                <div class="relative mb-6">
                    <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Chief Medical Officer" class="w-32 h-32 rounded-full mx-auto object-cover shadow-lg group-hover:shadow-xl transition duration-300">
                </div>
                <h3 class="text-xl font-semibold text-secondary mb-2">Dr. Rajesh Kumar</h3>
                <p class="text-primary font-semibold mb-2">Chief Medical Officer</p>
                <p class="text-gray-600 text-sm">MBBS, MD, 25+ years of experience in healthcare management and medical excellence.</p>
            </div>
            
            <div class="text-center group">
                <div class="relative mb-6">
                    <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Head of Emergency" class="w-32 h-32 rounded-full mx-auto object-cover shadow-lg group-hover:shadow-xl transition duration-300">
                </div>
                <h3 class="text-xl font-semibold text-secondary mb-2">Dr. Priya Sharma</h3>
                <p class="text-accent font-semibold mb-2">Head of Emergency</p>
                <p class="text-gray-600 text-sm">MBBS, MD Emergency Medicine, Expert in trauma care and emergency medical services.</p>
            </div>
            
            <div class="text-center group">
                <div class="relative mb-6">
                    <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Head of Surgery" class="w-32 h-32 rounded-full mx-auto object-cover shadow-lg group-hover:shadow-xl transition duration-300">
                </div>
                <h3 class="text-xl font-semibold text-secondary mb-2">Dr. Amit Patel</h3>
                <p class="text-gold font-semibold mb-2">Head of Surgery</p>
                <p class="text-gray-600 text-sm">MBBS, MS, MCh, Leading laparoscopic surgeon with expertise in minimally invasive procedures.</p>
            </div>
            
            <div class="text-center group">
                <div class="relative mb-6">
                    <img src="https://images.unsplash.com/photo-1666214280557-f1b5022eb634?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Hospital Administrator" class="w-32 h-32 rounded-full mx-auto object-cover shadow-lg group-hover:shadow-xl transition duration-300">
                </div>
                <h3 class="text-xl font-semibold text-secondary mb-2">Mrs. Sunita Agarwal</h3>
                <p class="text-green-500 font-semibold mb-2">Hospital Administrator</p>
                <p class="text-gray-600 text-sm">MBA Healthcare, 15+ years in hospital administration and operational excellence.</p>
            </div>
        </div>
    </div>
</section>

<!-- Awards & Recognition -->
<section class="py-16 bg-primary text-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4">Awards & Recognition</h2>
            <p class="text-xl opacity-90">Recognizing our commitment to excellence in healthcare</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="bg-gold text-secondary w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-trophy text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Best Hospital Award</h3>
                <p class="text-sm opacity-75">Maharashtra Health Excellence Awards 2023</p>
            </div>
            
            <div class="text-center">
                <div class="bg-gold text-secondary w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-medal text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Quality Certification</h3>
                <p class="text-sm opacity-75">ISO 9001:2015 Certified Healthcare Facility</p>
            </div>
            
            <div class="text-center">
                <div class="bg-gold text-secondary w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-star text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Patient Safety Award</h3>
                <p class="text-sm opacity-75">National Patient Safety Excellence 2022</p>
            </div>
            
            <div class="text-center">
                <div class="bg-gold text-secondary w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-heart text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Community Service</h3>
                <p class="text-sm opacity-75">Outstanding Community Healthcare Service 2023</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 bg-secondary text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-6">Experience Quality Healthcare</h2>
        <p class="text-xl mb-8 max-w-3xl mx-auto">Join thousands of satisfied patients who trust Medinine Hospital for their healthcare needs. Contact us today to schedule your appointment or learn more about our services.</p>
        
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