<?php
// Set 404 header
http_response_code(404);

// Page meta information
$page_title = "Page Not Found - Medinine Hospital Nagpur | Error 404";
$page_description = "The page you're looking for doesn't exist. Visit Medinine Hospital homepage for medical services, emergency care, and healthcare information in Nagpur.";
$page_keywords = "404 error, page not found, Medinine Hospital, medical services Nagpur";
$canonical_url = "https://medininehospital.com/404";
$og_title = "Page Not Found - Medinine Hospital";
$og_description = "The page you're looking for doesn't exist. Visit our homepage for medical services and healthcare information.";

// Include header
include 'includes/header.php';
?>

<!-- 404 Error Page -->
<section class="py-20 bg-gray-50 min-h-screen flex items-center">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Error Illustration -->
            <div class="mb-12">
                <div class="relative">
                    <div class="text-9xl md:text-[12rem] font-bold text-primary opacity-20">404</div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <i class="fas fa-hospital text-6xl md:text-8xl text-accent"></i>
                    </div>
                </div>
            </div>
            
            <!-- Error Message -->
            <div class="mb-12">
                <h1 class="text-3xl md:text-5xl font-bold text-secondary mb-6">Page Not Found</h1>
                <p class="text-lg md:text-xl text-gray-600 mb-8 max-w-2xl mx-auto leading-relaxed">
                    Sorry, the page you're looking for doesn't exist. It might have been moved, deleted, or you entered the wrong URL.
                </p>
                
                <!-- Emergency Notice -->
                <div class="bg-accent bg-opacity-10 border border-accent rounded-lg p-6 mb-8 max-w-2xl mx-auto">
                    <div class="flex items-center justify-center mb-3">
                        <i class="fas fa-ambulance text-accent text-2xl mr-3"></i>
                        <h2 class="text-xl font-semibold text-secondary">Medical Emergency?</h2>
                    </div>
                    <p class="text-gray-700 mb-4">If you need immediate medical assistance, don't wait!</p>
                    <a href="tel:8668289254" class="bg-accent text-white px-6 py-3 rounded-lg font-bold hover:bg-red-700 transition duration-300 inline-flex items-center space-x-2">
                        <i class="fas fa-phone"></i>
                        <span>Call Emergency: 8668289254</span>
                    </a>
                </div>
            </div>
            
            <!-- Navigation Options -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                <a href="/" class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 group">
                    <div class="bg-primary bg-opacity-10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary group-hover:text-white transition duration-300">
                        <i class="fas fa-home text-primary text-2xl group-hover:text-white"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary mb-2">Homepage</h3>
                    <p class="text-gray-600 text-sm">Return to our main page</p>
                </a>
                
                <a href="/healthcare-services-nagpur" class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 group">
                    <div class="bg-primary bg-opacity-10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary group-hover:text-white transition duration-300">
                        <i class="fas fa-stethoscope text-primary text-2xl group-hover:text-white"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary mb-2">Our Services</h3>
                    <p class="text-gray-600 text-sm">Medical services we offer</p>
                </a>
                
                <a href="/expert-doctors-nagpur" class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 group">
                    <div class="bg-primary bg-opacity-10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary group-hover:text-white transition duration-300">
                        <i class="fas fa-user-md text-primary text-2xl group-hover:text-white"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary mb-2">Our Doctors</h3>
                    <p class="text-gray-600 text-sm">Meet our medical experts</p>
                </a>
                
                <a href="/contact-medinine-hospital" class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 group">
                    <div class="bg-primary bg-opacity-10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary group-hover:text-white transition duration-300">
                        <i class="fas fa-phone text-primary text-2xl group-hover:text-white"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary mb-2">Contact Us</h3>
                    <p class="text-gray-600 text-sm">Get in touch with us</p>
                </a>
            </div>
            
            <!-- Search Box -->
            <div class="bg-white p-8 rounded-xl shadow-lg max-w-2xl mx-auto mb-12">
                <h3 class="text-xl font-semibold text-secondary mb-4">Looking for something specific?</h3>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <input type="text" placeholder="Search for services, doctors, or information..." class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                    <button class="bg-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-primaryDark transition duration-300 flex items-center justify-center space-x-2">
                        <i class="fas fa-search"></i>
                        <span>Search</span>
                    </button>
                </div>
            </div>
            
            <!-- Popular Services -->
            <div class="text-left max-w-3xl mx-auto">
                <h3 class="text-2xl font-bold text-secondary mb-6 text-center">Popular Services</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-white p-4 rounded-lg shadow hover:shadow-md transition duration-300">
                        <a href="/24-7-trauma-care-nagpur" class="flex items-center space-x-3 text-gray-700 hover:text-accent">
                            <i class="fas fa-ambulance text-accent"></i>
                            <span>Emergency & Trauma Care</span>
                        </a>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow hover:shadow-md transition duration-300">
                        <a href="/laparoscopic-surgery-nagpur" class="flex items-center space-x-3 text-gray-700 hover:text-primary">
                            <i class="fas fa-cut text-primary"></i>
                            <span>Surgery Services</span>
                        </a>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow hover:shadow-md transition duration-300">
                        <a href="/pregnancy-care-delivery-nagpur" class="flex items-center space-x-3 text-gray-700 hover:text-pink-500">
                            <i class="fas fa-baby text-pink-500"></i>
                            <span>Maternity Care</span>
                        </a>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow hover:shadow-md transition duration-300">
                        <a href="/hemodialysis-center-nagpur" class="flex items-center space-x-3 text-gray-700 hover:text-green-500">
                            <i class="fas fa-kidneys text-green-500"></i>
                            <span>Dialysis Services</span>
                        </a>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow hover:shadow-md transition duration-300">
                        <a href="/intensive-care-unit-nagpur" class="flex items-center space-x-3 text-gray-700 hover:text-gold">
                            <i class="fas fa-heartbeat text-gold"></i>
                            <span>ICU & Critical Care</span>
                        </a>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow hover:shadow-md transition duration-300">
                        <a href="/xray-ultrasound-tests-nagpur" class="flex items-center space-x-3 text-gray-700 hover:text-purple-500">
                            <i class="fas fa-x-ray text-purple-500"></i>
                            <span>Diagnostic Services</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6 mt-12">
                <a href="/" class="bg-primary text-white px-8 py-4 rounded-lg font-semibold hover:bg-primaryDark transition duration-300 flex items-center justify-center space-x-2">
                    <i class="fas fa-home"></i>
                    <span>Go to Homepage</span>
                </a>
                <a href="/book-doctor-appointment-nagpur" class="bg-accent text-white px-8 py-4 rounded-lg font-semibold hover:bg-red-700 transition duration-300 flex items-center justify-center space-x-2">
                    <i class="fas fa-calendar-check"></i>
                    <span>Book Appointment</span>
                </a>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Simple search functionality
    const searchInput = document.querySelector('input[type="text"]');
    const searchButton = document.querySelector('button');
    
    function performSearch() {
        const query = searchInput.value.trim().toLowerCase();
        if (query) {
            // Redirect to homepage with search parameter
            window.location.href = '/?search=' + encodeURIComponent(query);
        }
    }
    
    searchButton.addEventListener('click', performSearch);
    searchInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            performSearch();
        }
    });
    
    // Log 404 error for analytics
    console.log('404 Error - Page not found:', window.location.href);
});
</script>

<?php include 'includes/footer.php'; ?>