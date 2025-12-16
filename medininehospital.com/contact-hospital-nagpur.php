<?php
// Page meta information
$page_title = "Contact Medinine Hospital Nagpur | Appointments & Emergency - Call 8668289254";
$page_description = "Contact Medinine Hospital Nagpur for appointments, emergency services, and medical consultations. Located at Parivartan Square, Besa Road. 24/7 emergency care available.";
$page_keywords = "contact Medinine Hospital, hospital Nagpur contact, medical appointment, emergency contact, hospital address Nagpur, healthcare consultation";
$canonical_url = "https://medininehospital.com/contact-medinine-hospital";
$og_title = "Contact Medinine Hospital Nagpur - Appointments & Emergency";
$og_description = "Get in touch with Medinine Hospital for medical appointments, emergency services, and healthcare consultations. 24/7 emergency care available.";

// Schema markup
$schema_markup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "mainEntity": {
    "@type": "Hospital",
    "name": "Medinine Hospital",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "1A/1, Parivartan Square, Besa Road, Manewada",
      "addressLocality": "Nagpur",
      "addressRegion": "Maharashtra",
      "addressCountry": "IN"
    },
    "telephone": "8668289254",
    "email": "info@medininehospital.com",
    "openingHours": "Mo-Su 00:00-23:59",
    "hasMap": "https://maps.app.goo.gl/1yM8B1obgk8BwBzV9"
  }
}
</script>';

// Include header
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="relative overflow-hidden">
    <div class="gradient-primary py-20">
        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
        <div class="absolute inset-0 bg-cover bg-center opacity-10" style="background-image: url('https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80');"></div>
        <div class="relative container mx-auto px-4 text-center text-white">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Contact Us</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-4xl mx-auto leading-relaxed opacity-90">
                Get in touch with Medinine Hospital for appointments, consultations, or emergency medical care. We're here to help you 24/7.
            </p>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-secondary mb-4">Get In Touch With Us</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">We're committed to providing you with the best healthcare services. Reach out to us for any medical assistance, appointments, or emergency care.</p>
        </div>
        
        <div class="grid lg:grid-cols-3 gap-8 mb-12">
            <!-- Emergency Contact -->
            <div class="bg-gradient-to-br from-red-50 to-red-100 p-8 rounded-xl shadow-lg text-center border-2 border-red-200 group hover:shadow-xl transition duration-300">
                <div class="bg-accent text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition duration-300">
                    <i class="fas fa-ambulance text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-secondary mb-4">Emergency Services</h3>
                <p class="text-gray-700 mb-6">24/7 emergency medical care for critical situations. Our emergency team is always ready to provide immediate assistance.</p>
                <a href="tel:8668289254" class="bg-accent text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-700 transition duration-300 inline-flex items-center space-x-2">
                    <i class="fas fa-phone-alt"></i>
                    <span>Call: 8668289254</span>
                </a>
                <p class="text-sm text-gray-600 mt-3">Available 24 hours, 7 days a week</p>
            </div>

            <!-- Appointments -->
            <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-xl shadow-lg text-center border-2 border-blue-200 group hover:shadow-xl transition duration-300">
                <div class="bg-primary text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition duration-300">
                    <i class="fas fa-calendar-check text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-secondary mb-4">Book Appointment</h3>
                <p class="text-gray-700 mb-6">Schedule your consultation with our expert doctors. We offer convenient appointment slots to fit your schedule.</p>
                <a href="tel:8668289254" class="bg-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-primaryDark transition duration-300 inline-flex items-center space-x-2">
                    <i class="fas fa-phone-alt"></i>
                    <span>Call: 8668289254</span>
                </a>
                <p class="text-sm text-gray-600 mt-3">Mon-Sat: 9:00 AM - 8:00 PM</p>
            </div>

            <!-- General Inquiry -->
            <div class="bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-xl shadow-lg text-center border-2 border-green-200 group hover:shadow-xl transition duration-300">
                <div class="bg-green-600 text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition duration-300">
                    <i class="fas fa-info-circle text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-secondary mb-4">General Information</h3>
                <p class="text-gray-700 mb-6">Have questions about our services, facilities, or need general information? We're here to help with all your queries.</p>
                <a href="mailto:info@medininehospital.com" class="bg-green-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-700 transition duration-300 inline-flex items-center space-x-2">
                    <i class="fas fa-envelope"></i>
                    <span>Email Us</span>
                </a>
                <p class="text-sm text-gray-600 mt-3">We'll respond within 24 hours</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Details & Map -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Contact Details -->
            <div>
                <h2 class="text-4xl font-bold text-secondary mb-8">Visit Our Hospital</h2>
                <div class="space-y-6">
                    <div class="bg-white p-6 rounded-lg shadow-md flex items-start space-x-4 hover:shadow-lg transition duration-300">
                        <div class="bg-primary text-white p-3 rounded-lg">
                            <i class="fas fa-map-marker-alt text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg text-secondary mb-2">Hospital Address</h3>
                            <p class="text-gray-600 leading-relaxed">1A/1, Parivartan Square, Besa Road, Manewada, Nagpur, Maharashtra, India</p>
                            <a href="https://maps.app.goo.gl/1yM8B1obgk8BwBzV9" target="_blank" class="text-primary font-semibold hover:text-primaryDark mt-2 inline-flex items-center space-x-1">
                                <span>Get Directions</span>
                                <i class="fas fa-external-link-alt text-sm"></i>
                            </a>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md flex items-start space-x-4 hover:shadow-lg transition duration-300">
                        <div class="bg-accent text-white p-3 rounded-lg">
                            <i class="fas fa-phone text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg text-secondary mb-2">Phone Number</h3>
                            <p class="text-gray-600 mb-2">For appointments and emergency services:</p>
                            <a href="tel:8668289254" class="text-accent font-bold text-xl hover:text-red-700">8668289254</a>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md flex items-start space-x-4 hover:shadow-lg transition duration-300">
                        <div class="bg-gold text-white p-3 rounded-lg">
                            <i class="fas fa-clock text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg text-secondary mb-2">Working Hours</h3>
                            <div class="space-y-1 text-gray-600">
                                <p><span class="font-semibold">Emergency Services:</span> 24/7 Available</p>
                                <p><span class="font-semibold">OPD Timings:</span> Monday - Saturday</p>
                                <p><span class="font-semibold">Morning:</span> 9:00 AM - 1:00 PM</p>
                                <p><span class="font-semibold">Evening:</span> 4:00 PM - 8:00 PM</p>
                                <p><span class="font-semibold">Sunday:</span> Emergency Services Only</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md flex items-start space-x-4 hover:shadow-lg transition duration-300">
                        <div class="bg-green-500 text-white p-3 rounded-lg">
                            <i class="fas fa-envelope text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg text-secondary mb-2">Email Contact</h3>
                            <p class="text-gray-600 mb-2">For non-urgent inquiries and feedback:</p>
                            <a href="mailto:info@medininehospital.com" class="text-green-500 font-semibold hover:text-green-700">info@medininehospital.com</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div>
                <h2 class="text-4xl font-bold text-secondary mb-8">Send Us a Message</h2>
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <form class="space-y-6" id="contactForm">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="firstName" class="block text-sm font-medium text-gray-700 mb-2">First Name *</label>
                                <input type="text" id="firstName" name="firstName" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300">
                            </div>
                            <div>
                                <label for="lastName" class="block text-sm font-medium text-gray-700 mb-2">Last Name *</label>
                                <input type="text" id="lastName" name="lastName" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300">
                            </div>
                        </div>
                        
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300">
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300">
                        </div>
                        
                        <div>
                            <label for="service" class="block text-sm font-medium text-gray-700 mb-2">Service Required</label>
                            <select id="service" name="service" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300">
                                <option value="">Select a service</option>
                                <option value="emergency">Emergency Care</option>
                                <option value="appointment">General Appointment</option>
                                <option value="surgery">Surgery Consultation</option>
                                <option value="maternity">Maternity Services</option>
                                <option value="dialysis">Dialysis Services</option>
                                <option value="diagnostics">Diagnostic Services</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                            <textarea id="message" name="message" rows="4" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300" placeholder="Please describe your inquiry or appointment requirements..."></textarea>
                        </div>
                        
                        <div class="flex items-center">
                            <input type="checkbox" id="consent" name="consent" required class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                            <label for="consent" class="ml-2 block text-sm text-gray-700">I agree to the processing of my personal data for the purpose of responding to my inquiry *</label>
                        </div>
                        
                        <button type="submit" class="w-full bg-primary text-white py-3 px-6 rounded-lg font-semibold hover:bg-primaryDark transition duration-300 flex items-center justify-center space-x-2">
                            <i class="fas fa-paper-plane"></i>
                            <span>Send Message</span>
                        </button>
                    </form>
                    
                    <div class="mt-6 p-4 bg-yellow-50 border border-yellow-200 rounded-lg">
                        <div class="flex items-start space-x-2">
                            <i class="fas fa-exclamation-triangle text-yellow-600 mt-1"></i>
                            <div>
                                <p class="text-sm text-yellow-800"><strong>For Medical Emergencies:</strong> Please call our emergency number <a href="tel:8668289254" class="font-bold text-accent">8668289254</a> immediately instead of using this form.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-secondary mb-4">Find Us on Map</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Located in the heart of Nagpur for easy accessibility from all parts of the city</p>
        </div>
        
        <div class="bg-gray-200 h-96 rounded-xl overflow-hidden shadow-lg">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.736!2d79.1018804!3d21.1014517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4bf9fca0b0329%3A0x7b3fad7119a4dd5b!2sMedinine%20Hospital%20%7C%20Best%20super-speciality%20hospital%20in%20nagpur!5e0!3m2!1sen!2sin!4v1620000000000!5m2!1sen!2sin"
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                class="w-full h-full">
            </iframe>
        </div>
        
        <div class="mt-8 text-center">
            <a href="https://maps.app.goo.gl/1yM8B1obgk8BwBzV9" target="_blank" class="bg-primary text-white px-8 py-3 rounded-lg font-semibold hover:bg-primaryDark transition duration-300 inline-flex items-center space-x-2">
                <i class="fas fa-directions"></i>
                <span>Get Directions</span>
            </a>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-secondary mb-4">Frequently Asked Questions</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Common questions about contacting and visiting Medinine Hospital</p>
        </div>
        
        <div class="max-w-4xl mx-auto space-y-6">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-secondary mb-3 flex items-center">
                    <i class="fas fa-question-circle text-primary mr-3"></i>
                    How do I book an appointment?
                </h3>
                <p class="text-gray-600 leading-relaxed">You can book an appointment by calling our main number 8668289254 during our OPD hours (9:00 AM - 8:00 PM, Monday to Saturday). Our staff will help you schedule an appointment with the appropriate specialist based on your medical needs.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-secondary mb-3 flex items-center">
                    <i class="fas fa-question-circle text-primary mr-3"></i>
                    What should I do in case of a medical emergency?
                </h3>
                <p class="text-gray-600 leading-relaxed">For medical emergencies, immediately call our 24/7 emergency number 8668289254. Our emergency department is always staffed with experienced doctors and nurses. If you're unable to travel, we also provide ambulance services.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-secondary mb-3 flex items-center">
                    <i class="fas fa-question-circle text-primary mr-3"></i>
                    What documents should I bring for my visit?
                </h3>
                <p class="text-gray-600 leading-relaxed">Please bring a valid photo ID, any previous medical records, current medications list, and insurance documents if applicable. For follow-up visits, bring your previous prescription and test reports.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-secondary mb-3 flex items-center">
                    <i class="fas fa-question-circle text-primary mr-3"></i>
                    Do you accept insurance?
                </h3>
                <p class="text-gray-600 leading-relaxed">Yes, we accept most major health insurance plans and provide cashless treatment facilities for covered services. Please contact our billing department to verify your insurance coverage.</p>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Services Highlight -->
<section class="py-16 bg-accent text-white">
    <div class="container mx-auto px-4 text-center">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl font-bold mb-6">Medical Emergency?</h2>
            <p class="text-xl mb-8 leading-relaxed">Don't wait! Our emergency department is open 24/7 with experienced doctors and advanced life support systems. Every second counts in medical emergencies.</p>
            
            <div class="grid md:grid-cols-3 gap-8 mb-8">
                <div class="text-center">
                    <div class="bg-white bg-opacity-20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-ambulance text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Ambulance Service</h3>
                    <p class="text-red-100">24/7 emergency transport with trained paramedics</p>
                </div>
                <div class="text-center">
                    <div class="bg-white bg-opacity-20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-user-md text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Expert Doctors</h3>
                    <p class="text-red-100">Experienced emergency physicians available round-the-clock</p>
                </div>
                <div class="text-center">
                    <div class="bg-white bg-opacity-20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-heartbeat text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Advanced Equipment</h3>
                    <p class="text-red-100">State-of-the-art emergency medical equipment</p>
                </div>
            </div>
            
            <a href="tel:8668289254" class="bg-white text-accent px-8 py-4 rounded-lg text-xl font-bold hover:bg-gray-100 transition duration-300 inline-flex items-center space-x-3 shadow-lg">
                <i class="fas fa-phone-alt"></i>
                <span>CALL EMERGENCY: 8668289254</span>
            </a>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Form submission handling
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show success message
            const button = contactForm.querySelector('button[type="submit"]');
            const originalText = button.innerHTML;
            button.innerHTML = '<i class="fas fa-check"></i> <span>Message Sent!</span>';
            button.disabled = true;
            
            // Reset form after 3 seconds
            setTimeout(() => {
                contactForm.reset();
                button.innerHTML = originalText;
                button.disabled = false;
                alert('Thank you for your message! We will contact you soon. For urgent matters, please call 8668289254.');
            }, 2000);
        });
    }
});
</script>

<?php include 'includes/footer.php'; ?>