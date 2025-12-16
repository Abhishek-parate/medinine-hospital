<?php
// Page meta information
$page_title = "Book Doctor Appointment Online - Medinine Hospital Nagpur | Schedule Medical Consultation";
$page_description = "Book doctor appointment online at Medinine Hospital Nagpur. Schedule consultation with expert doctors, specialists, and medical professionals. Easy online booking system for emergency, general medicine, surgery, gynecology, and all medical services. Call 8668289254 for immediate booking.";
$page_keywords = "book appointment online Nagpur, doctor appointment booking Nagpur, medical consultation booking, schedule doctor visit Nagpur, online appointment Medinine Hospital, book specialist doctor Nagpur, medical appointment online, healthcare booking Nagpur";
$canonical_url = "https://medininehospital.com/appointment-booking-online.php";
$og_title = "Book Doctor Appointment Online - Medinine Hospital Nagpur | Easy Scheduling";
$og_description = "Schedule your medical consultation online with expert doctors at Medinine Hospital Nagpur. Quick and easy appointment booking system for all medical specialties and healthcare services.";

// Schema markup for appointment booking
$schema_markup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalOrganization",
  "name": "Medinine Hospital Appointment Booking",
  "description": "Online appointment booking system for medical consultations at Medinine Hospital Nagpur",
  "url": "https://medininehospital.com/appointment-booking-online.php",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "1A/1, Parivartan Square, Besa Road, Manewada",
    "addressLocality": "Nagpur",
    "addressRegion": "Maharashtra",
    "postalCode": "440037",
    "addressCountry": "IN"
  },
  "telephone": "+918668289254",
  "email": "appointments@medininehospital.com",
  "availableService": [
    {
      "@type": "MedicalProcedure",
      "name": "Online Appointment Booking",
      "description": "Schedule medical consultations with specialist doctors"
    }
  ],
  "potentialAction": {
    "@type": "ReserveAction",
    "target": {
      "@type": "EntryPoint",
      "urlTemplate": "https://medininehospital.com/appointment-booking-online.php"
    },
    "result": {
      "@type": "Reservation",
      "name": "Doctor Appointment"
    }
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
                Book Doctor <span class="text-gold">Appointment Online</span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 max-w-4xl mx-auto leading-relaxed opacity-90">
                Schedule your medical consultation with expert doctors and specialists at Medinine Hospital Nagpur
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6 mb-8">
                <a href="tel:8668289254" class="bg-accent hover:bg-red-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition duration-300 flex items-center justify-center space-x-2">
                    <i class="fas fa-phone"></i>
                    <span>Call: 8668289254</span>
                </a>
                <a href="#booking-form" class="bg-transparent border-2 border-white hover:bg-white hover:text-primary text-white px-8 py-4 rounded-lg text-lg font-semibold transition duration-300 flex items-center justify-center space-x-2">
                    <i class="fas fa-calendar-check"></i>
                    <span>Book Online</span>
                </a>
            </div>
            <nav class="flex justify-center" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm">
                    <li><a href="/index.php" class="hover:text-gold transition duration-300">Home</a></li>
                    <li><i class="fas fa-chevron-right text-gold mx-2"></i></li>
                    <li class="text-gold">Book Appointment</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!-- Quick Booking Options -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-secondary mb-4">Multiple Ways to Book Your Appointment</h2>
            <p class="text-lg text-gray-600">Choose the most convenient method to schedule your medical consultation</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8 mb-12">
            <div class="bg-primary bg-opacity-10 p-8 rounded-xl text-center card">
                <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-phone text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-secondary mb-4">Phone Booking</h3>
                <p class="text-gray-600 mb-6">Call our appointment desk directly for immediate booking assistance and consultation scheduling.</p>
                <a href="tel:8668289254" class="bg-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-primaryDark transition duration-300 inline-flex items-center space-x-2">
                    <i class="fas fa-phone"></i>
                    <span>Call: 8668289254</span>
                </a>
                <p class="text-sm text-gray-500 mt-3">Available: 8:00 AM - 8:00 PM</p>
            </div>
            
            <div class="bg-green-500 bg-opacity-10 p-8 rounded-xl text-center card">
                <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fab fa-whatsapp text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-secondary mb-4">WhatsApp Booking</h3>
                <p class="text-gray-600 mb-6">Send us a message on WhatsApp for quick appointment booking and medical assistance.</p>
                <a href="https://wa.me/918668289254?text=I%20would%20like%20to%20book%20an%20appointment" target="_blank" class="bg-green-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-600 transition duration-300 inline-flex items-center space-x-2">
                    <i class="fab fa-whatsapp"></i>
                    <span>WhatsApp Us</span>
                </a>
                <p class="text-sm text-gray-500 mt-3">Quick response guaranteed</p>
            </div>
            
            <div class="bg-accent bg-opacity-10 p-8 rounded-xl text-center card">
                <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-hospital text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-secondary mb-4">Walk-in Booking</h3>
                <p class="text-gray-600 mb-6">Visit our hospital reception desk for direct appointment booking and immediate consultation.</p>
                <a href="/contact-hospital-nagpur.php" class="bg-accent text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-700 transition duration-300 inline-flex items-center space-x-2">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Get Directions</span>
                </a>
                <p class="text-sm text-gray-500 mt-3">Parivartan Square, Besa Road</p>
            </div>
        </div>
    </div>
</section>

<!-- Online Booking Form -->
<section id="booking-form" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold text-secondary mb-4">Online Appointment Booking</h2>
                <p class="text-lg text-gray-600">Fill out the form below to schedule your medical consultation with our expert doctors</p>
            </div>
            
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <form class="space-y-6" action="#" method="POST">
                    <!-- Personal Information -->
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="fullName" class="block text-sm font-medium text-gray-700 mb-2">Full Name *</label>
                            <input type="text" id="fullName" name="fullName" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300">
                        </div>
                        <div>
                            <label for="age" class="block text-sm font-medium text-gray-700 mb-2">Age *</label>
                            <input type="number" id="age" name="age" min="1" max="120" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300">
                        </div>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="gender" class="block text-sm font-medium text-gray-700 mb-2">Gender *</label>
                            <select id="gender" name="gender" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300">
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300">
                        </div>
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300">
                    </div>
                    
           
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="appointmentDate" class="block text-sm font-medium text-gray-700 mb-2">Preferred Date *</label>
                            <input type="date" id="appointmentDate" name="appointmentDate" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300">
                        </div>
                        <div>
                            <label for="appointmentTime" class="block text-sm font-medium text-gray-700 mb-2">Preferred Time *</label>
                            <select id="appointmentTime" name="appointmentTime" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300">
                                <option value="">Select Time Slot</option>
                                <option value="09:00">9:00 AM</option>
                                <option value="10:00">10:00 AM</option>
                                <option value="11:00">11:00 AM</option>
                                <option value="12:00">12:00 PM</option>
                                <option value="14:00">2:00 PM</option>
                                <option value="15:00">3:00 PM</option>
                                <option value="16:00">4:00 PM</option>
                                <option value="17:00">5:00 PM</option>
                                <option value="18:00">6:00 PM</option>
                            </select>
                        </div>
                    </div>
                    
                    <div>
                        <label for="symptoms" class="block text-sm font-medium text-gray-700 mb-2">Symptoms/Reason for Visit *</label>
                        <textarea id="symptoms" name="symptoms" rows="4" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300" placeholder="Please describe your symptoms or reason for the medical consultation..."></textarea>
                    </div>
                    
                    <div>
                        <label for="medicalHistory" class="block text-sm font-medium text-gray-700 mb-2">Medical History (Optional)</label>
                        <textarea id="medicalHistory" name="medicalHistory" rows="3" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300" placeholder="Any previous medical conditions, surgeries, allergies, or current medications..."></textarea>
                    </div>
                    
                    <div>
                        <label for="appointmentType" class="block text-sm font-medium text-gray-700 mb-2">Appointment Type *</label>
                        <div class="grid grid-cols-2 gap-4">
                            <label class="flex items-center space-x-3 p-3 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50">
                                <input type="radio" name="appointmentType" value="new-patient" required class="text-primary focus:ring-primary">
                                <span class="text-gray-700">New Patient</span>
                            </label>
                            <label class="flex items-center space-x-3 p-3 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50">
                                <input type="radio" name="appointmentType" value="follow-up" required class="text-primary focus:ring-primary">
                                <span class="text-gray-700">Follow-up Visit</span>
                            </label>
                        </div>
                    </div>
                    
                    <div class="flex items-center">
                        <input type="checkbox" id="terms" name="terms" required class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="terms" class="ml-2 block text-sm text-gray-700">
                            I agree to the <a href="/terms-conditions.php" class="text-primary hover:text-primaryDark">Terms & Conditions</a> and <a href="/privacy-policy.php" class="text-primary hover:text-primaryDark">Privacy Policy</a> *
                        </label>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <button type="submit" class="flex-1 bg-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-primaryDark transition duration-300 flex items-center justify-center space-x-2">
                            <i class="fas fa-calendar-check"></i>
                            <span>Book Appointment</span>
                        </button>
                        <button type="reset" class="flex-1 bg-gray-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-gray-600 transition duration-300">
                            Clear Form
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Appointment Information -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-secondary mb-4">Appointment Information</h2>
            <p class="text-lg text-gray-600">Important details about booking and attending your medical consultation</p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-12">
            <div>
                <h3 class="text-2xl font-bold text-secondary mb-6">What to Expect</h3>
                <div class="space-y-4">
                    <div class="flex items-start space-x-4 p-4 bg-blue-50 rounded-lg">
                        <div class="bg-primary text-white p-2 rounded-full mt-1">
                            <i class="fas fa-clock text-sm"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-1">Confirmation Call</h4>
                            <p class="text-gray-600 text-sm">You'll receive a confirmation call within 2 hours of booking to verify your appointment details and timing.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4 p-4 bg-green-50 rounded-lg">
                        <div class="bg-green-500 text-white p-2 rounded-full mt-1">
                            <i class="fas fa-user-md text-sm"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-1">Doctor Consultation</h4>
                            <p class="text-gray-600 text-sm">Detailed medical consultation with our expert doctors lasting 15-20 minutes on average.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4 p-4 bg-yellow-50 rounded-lg">
                        <div class="bg-gold text-white p-2 rounded-full mt-1">
                            <i class="fas fa-file-medical text-sm"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-1">Medical Records</h4>
                            <p class="text-gray-600 text-sm">Bring previous medical reports, prescription history, and insurance documents for reference.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4 p-4 bg-purple-50 rounded-lg">
                        <div class="bg-purple-500 text-white p-2 rounded-full mt-1">
                            <i class="fas fa-credit-card text-sm"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-1">Payment Options</h4>
                            <p class="text-gray-600 text-sm">Cash, cards, UPI, and insurance accepted. Transparent pricing with detailed billing.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div>
                <h3 class="text-2xl font-bold text-secondary mb-6">OPD Timings</h3>
                <div class="bg-gray-50 p-6 rounded-xl">
                    <div class="space-y-4">
                        <div class="flex justify-between items-center border-b pb-2">
                            <span class="text-gray-700">General Medicine</span>
                            <span class="font-semibold text-primary">8:00 AM - 8:00 PM</span>
                        </div>
                        <div class="flex justify-between items-center border-b pb-2">
                            <span class="text-gray-700">Surgery</span>
                            <span class="font-semibold text-primary">9:00 AM - 7:00 PM</span>
                        </div>
                        <div class="flex justify-between items-center border-b pb-2">
                            <span class="text-gray-700">Gynecology</span>
                            <span class="font-semibold text-primary">8:00 AM - 8:00 PM</span>
                        </div>
                        <div class="flex justify-between items-center border-b pb-2">
                            <span class="text-gray-700">Cardiology</span>
                            <span class="font-semibold text-primary">2:00 PM - 6:00 PM</span>
                        </div>
                        <div class="flex justify-between items-center border-b pb-2">
                            <span class="text-gray-700">Orthopedics</span>
                            <span class="font-semibold text-primary">9:00 AM - 7:00 PM</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-700">Emergency</span>
                            <span class="font-semibold text-accent">24/7 Available</span>
                        </div>
                    </div>
                    
                    <div class="mt-6 p-4 bg-primary text-white rounded-lg">
                        <h4 class="font-semibold mb-2">📋 Note:</h4>
                        <p class="text-sm opacity-90">Appointment timings may vary based on doctor availability. Emergency cases are given priority. Please arrive 15 minutes before your scheduled time.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact for Booking -->
<section class="py-16 bg-secondary text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Need Help with Booking?</h2>
        <p class="text-xl mb-8 max-w-3xl mx-auto">Our appointment desk is ready to assist you with scheduling, rescheduling, or any questions about your medical consultation.</p>
        
        <div class="grid md:grid-cols-3 gap-8 mb-8">
            <div class="bg-white bg-opacity-10 p-6 rounded-xl backdrop-blur-sm">
                <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-phone text-white"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Call Appointment Desk</h3>
                <p class="text-2xl font-bold text-gold mb-1">8668289254</p>
                <p class="text-sm opacity-75">8:00 AM - 8:00 PM</p>
            </div>
            
            <div class="bg-white bg-opacity-10 p-6 rounded-xl backdrop-blur-sm">
                <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fab fa-whatsapp text-white"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">WhatsApp Booking</h3>
                <p class="text-lg font-semibold text-gold mb-1">Quick Response</p>
                <p class="text-sm opacity-75">Message us anytime</p>
            </div>
            
            <div class="bg-white bg-opacity-10 p-6 rounded-xl backdrop-blur-sm">
                <div class="w-12 h-12 bg-accent rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-envelope text-white"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Email Booking</h3>
                <p class="text-sm font-semibold text-gold mb-1">appointments@medininehospital.com</p>
                <p class="text-sm opacity-75">24 hour response</p>
            </div>
        </div>
        
        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
            <a href="tel:8668289254" class="bg-primary hover:bg-primaryDark text-white px-8 py-4 rounded-lg text-lg font-semibold transition duration-300 flex items-center justify-center space-x-2">
                <i class="fas fa-phone"></i>
                <span>Call: 8668289254</span>
            </a>
            <a href="/doctors-specialists-nagpur.php" class="bg-accent hover:bg-red-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition duration-300 flex items-center justify-center space-x-2">
                <i class="fas fa-user-md"></i>
                <span>View Doctors</span>
            </a>
            <a href="/contact-hospital-nagpur.php" class="bg-transparent border-2 border-white hover:bg-white hover:text-secondary text-white px-8 py-4 rounded-lg text-lg font-semibold transition duration-300 flex items-center justify-center space-x-2">
                <i class="fas fa-envelope"></i>
                <span>Contact Hospital</span>
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>