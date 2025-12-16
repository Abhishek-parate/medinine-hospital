<?php
// Page meta information
$page_title = "24/7 Emergency & Trauma Care in Nagpur - Medinine Hospital | Emergency Services";
$page_description = "Get immediate 24/7 emergency and trauma care at Medinine Hospital Nagpur. Expert emergency doctors, advanced life support, ambulance services, fracture treatment, and critical care. Call 8668289254 for medical emergencies.";
$page_keywords = "emergency care Nagpur, trauma care Nagpur, 24/7 emergency services Nagpur, ambulance services Nagpur, emergency hospital Nagpur, fracture treatment Nagpur, critical emergency Nagpur, emergency doctors Nagpur, Medinine Hospital emergency";
$canonical_url = "https://medininehospital.com/emergency-trauma-care-nagpur.php";
$og_title = "24/7 Emergency & Trauma Care Services at Medinine Hospital Nagpur";
$og_description = "Immediate emergency and trauma care services available 24/7 at Medinine Hospital Nagpur. Expert emergency medicine specialists, advanced equipment, and ambulance services for critical situations.";

// Schema markup
$schema_markup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "EmergencyService",
  "name": "Medinine Hospital Emergency & Trauma Care",
  "description": "24/7 emergency and trauma care services in Nagpur",
  "url": "https://medininehospital.com/emergency-trauma-care-nagpur.php",
  "provider": {
    "@type": "Hospital",
    "name": "Medinine Hospital",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "1A/1, Parivartan Square, Besa Road, Manewada",
      "addressLocality": "Nagpur",
      "addressRegion": "Maharashtra",
      "postalCode": "440037",
      "addressCountry": "IN"
    },
    "telephone": "+918668289254"
  },
  "availableService": [
    {
      "@type": "MedicalProcedure",
      "name": "Emergency Medical Care",
      "description": "Immediate medical care for critical conditions"
    },
    {
      "@type": "MedicalProcedure",
      "name": "Trauma Treatment",
      "description": "Specialized care for accident victims and trauma patients"
    },
    {
      "@type": "MedicalProcedure",
      "name": "Ambulance Services",
      "description": "24/7 ambulance services for emergency transportation"
    }
  ],
  "openingHours": "Mo-Su 00:00-23:59",
  "priceRange": "$$"
}
</script>';

// Include header
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="relative overflow-hidden hero-pattern">
    <div class="gradient-accent py-20 lg:py-24">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        <div class="relative container mx-auto px-4 text-center text-white">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                24/7 <span class="text-gold">Emergency & Trauma Care</span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 max-w-4xl mx-auto leading-relaxed opacity-90">
                Immediate medical assistance and expert trauma care available round-the-clock in Nagpur
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6 mb-8">
                <a href="tel:8668289254" class="bg-white text-accent px-8 py-4 rounded-lg text-lg font-bold hover:bg-gray-100 transition duration-300 flex items-center justify-center space-x-2 shadow-lg">
                    <i class="fas fa-phone"></i>
                    <span>Emergency: 8668289254</span>
                </a>
                <a href="/ambulance-services-nagpur.php" class="bg-transparent border-2 border-white hover:bg-white hover:text-accent text-white px-8 py-4 rounded-lg text-lg font-semibold transition duration-300 flex items-center justify-center space-x-2">
                    <i class="fas fa-ambulance"></i>
                    <span>Ambulance Service</span>
                </a>
            </div>
            <nav class="flex justify-center" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm">
                    <li><a href="/index.php" class="hover:text-gold transition duration-300">Home</a></li>
                    <li><i class="fas fa-chevron-right text-gold mx-2"></i></li>
                    <li><a href="/medical-services-nagpur.php" class="hover:text-gold transition duration-300">Services</a></li>
                    <li><i class="fas fa-chevron-right text-gold mx-2"></i></li>
                    <li class="text-gold">Emergency Care</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!-- Emergency Services Overview -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-4xl md:text-5xl font-bold text-secondary mb-6">Immediate Medical Care When You Need It Most</h2>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    At Medinine Hospital, our Emergency & Trauma Care department operates 24/7 to provide immediate, life-saving medical care. Our team of experienced emergency medicine specialists is equipped with state-of-the-art medical equipment and advanced life support systems to handle any medical emergency.
                </p>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    From minor injuries to critical trauma cases, our emergency department is designed to provide rapid assessment, diagnosis, and treatment. We understand that every second counts in an emergency, which is why our streamlined processes ensure that patients receive immediate attention and appropriate care.
                </p>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    Our emergency services are available to all patients, regardless of their ability to pay. We believe that quality emergency care should be accessible to everyone in the Nagpur community and surrounding areas.
                </p>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-gray-50 p-4 rounded-lg text-center">
                        <div class="text-2xl font-bold text-accent mb-1">24/7</div>
                        <div class="text-sm text-gray-600">Emergency Services</div>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg text-center">
                        <div class="text-2xl font-bold text-accent mb-1">&lt;5 min</div>
                        <div class="text-sm text-gray-600">Response Time</div>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg text-center">
                        <div class="text-2xl font-bold text-accent mb-1">100%</div>
                        <div class="text-sm text-gray-600">Equipped ICU</div>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg text-center">
                        <div class="text-2xl font-bold text-accent mb-1">15+</div>
                        <div class="text-sm text-gray-600">Expert Doctors</div>
                    </div>
                </div>
            </div>
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1581594693702-fbdc51b2763b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Emergency Department at Medinine Hospital Nagpur" class="rounded-xl shadow-lg">
                <div class="absolute -bottom-6 -left-6 bg-accent text-white p-6 rounded-xl shadow-lg">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-gold">24/7</div>
                        <div class="text-sm">Emergency Care</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Services Offered -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-secondary mb-4">Emergency Services We Provide</h2>
            <p class="text-lg text-gray-600">Comprehensive emergency medical care covering all critical situations</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-xl shadow-lg card">
                <div class="flex items-center mb-4">
                    <div class="bg-accent text-white p-3 rounded-full mr-4">
                        <i class="fas fa-heartbeat text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary">Cardiac Emergencies</h3>
                </div>
                <p class="text-gray-600 mb-4">Immediate care for heart attacks, chest pain, cardiac arrhythmias, and other cardiovascular emergencies with advanced cardiac life support.</p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Heart attack treatment</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Cardiac monitoring</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Emergency ECG</li>
                </ul>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-lg card">
                <div class="flex items-center mb-4">
                    <div class="bg-primary text-white p-3 rounded-full mr-4">
                        <i class="fas fa-car-crash text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary">Trauma & Accident Care</h3>
                </div>
                <p class="text-gray-600 mb-4">Specialized treatment for accident victims, multiple injuries, fractures, and severe trauma cases with expert trauma surgeons.</p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Fracture treatment</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Head injury care</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Emergency surgery</li>
                </ul>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-lg card">
                <div class="flex items-center mb-4">
                    <div class="bg-gold text-white p-3 rounded-full mr-4">
                        <i class="fas fa-lungs text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary">Respiratory Emergencies</h3>
                </div>
                <p class="text-gray-600 mb-4">Critical care for breathing difficulties, asthma attacks, pneumonia, and other respiratory emergencies with ventilator support.</p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Oxygen therapy</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Ventilator support</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Nebulization</li>
                </ul>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-lg card">
                <div class="flex items-center mb-4">
                    <div class="bg-green-500 text-white p-3 rounded-full mr-4">
                        <i class="fas fa-brain text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary">Neurological Emergencies</h3>
                </div>
                <p class="text-gray-600 mb-4">Emergency care for stroke, seizures, head injuries, and other neurological conditions requiring immediate intervention.</p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Stroke management</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Seizure control</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Neurological assessment</li>
                </ul>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-lg card">
                <div class="flex items-center mb-4">
                    <div class="bg-purple-500 text-white p-3 rounded-full mr-4">
                        <i class="fas fa-cut text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary">Surgical Emergencies</h3>
                </div>
                <p class="text-gray-600 mb-4">Emergency surgical procedures including appendectomy, hernia repair, and other urgent surgical interventions.</p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Emergency surgery</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Wound care</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Bleeding control</li>
                </ul>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-lg card">
                <div class="flex items-center mb-4">
                    <div class="bg-pink-500 text-white p-3 rounded-full mr-4">
                        <i class="fas fa-female text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary">Obstetric Emergencies</h3>
                </div>
                <p class="text-gray-600 mb-4">Emergency maternity care including complications during pregnancy, labor, and delivery with 24/7 gynecologist availability.</p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Emergency delivery</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Pregnancy complications</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Cesarean section</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Department Features -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-secondary mb-4">State-of-the-Art Emergency Facilities</h2>
            <p class="text-lg text-gray-600">Advanced equipment and facilities for comprehensive emergency care</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center card">
                <div class="bg-accent text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-truck-medical text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-secondary mb-3">Advanced Ambulance</h3>
                <p class="text-gray-600 text-sm">Fully equipped ambulances with life support systems and trained paramedics for emergency transportation.</p>
            </div>
            
            <div class="text-center card">
                <div class="bg-primary text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-procedures text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-secondary mb-3">Emergency ICU</h3>
                <p class="text-gray-600 text-sm">Dedicated emergency ICU with advanced monitoring systems and ventilator support for critical patients.</p>
            </div>
            
            <div class="text-center card">
                <div class="bg-gold text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-x-ray text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-secondary mb-3">Diagnostic Services</h3>
                <p class="text-gray-600 text-sm">24/7 laboratory and radiology services including X-ray, CT scan, and emergency blood tests.</p>
            </div>
            
            <div class="text-center card">
                <div class="bg-green-500 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-cut text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-secondary mb-3">Emergency OT</h3>
                <p class="text-gray-600 text-sm">Fully equipped operation theaters ready for emergency surgeries with experienced surgical teams.</p>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Process -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-secondary mb-4">Emergency Care Process</h2>
            <p class="text-lg text-gray-600">Our streamlined process ensures rapid assessment and treatment</p>
        </div>
        
        <div class="grid md:grid-cols-4 gap-8">
            <div class="text-center card">
                <div class="bg-accent text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 relative">
                    <span class="text-2xl font-bold">1</span>
                    <div class="absolute -top-2 -right-2 bg-gold text-white text-xs w-6 h-6 rounded-full flex items-center justify-center">
                        <i class="fas fa-check"></i>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-secondary mb-3">Immediate Triage</h3>
                <p class="text-gray-600">Quick assessment to prioritize patients based on severity of condition and medical urgency.</p>
            </div>
            
            <div class="text-center card">
                <div class="bg-primary text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 relative">
                    <span class="text-2xl font-bold">2</span>
                    <div class="absolute -top-2 -right-2 bg-gold text-white text-xs w-6 h-6 rounded-full flex items-center justify-center">
                        <i class="fas fa-check"></i>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-secondary mb-3">Rapid Diagnosis</h3>
                <p class="text-gray-600">Fast diagnostic tests and examinations to determine the exact nature of the emergency condition.</p>
            </div>
            
            <div class="text-center card">
                <div class="bg-green-500 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 relative">
                    <span class="text-2xl font-bold">3</span>
                    <div class="absolute -top-2 -right-2 bg-gold text-white text-xs w-6 h-6 rounded-full flex items-center justify-center">
                        <i class="fas fa-check"></i>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-secondary mb-3">Emergency Treatment</h3>
                <p class="text-gray-600">Immediate medical intervention and treatment by emergency specialists and medical team.</p>
            </div>
            
            <div class="text-center card">
                <div class="bg-gold text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 relative">
                    <span class="text-2xl font-bold">4</span>
                    <div class="absolute -top-2 -right-2 bg-gold text-white text-xs w-6 h-6 rounded-full flex items-center justify-center">
                        <i class="fas fa-check"></i>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-secondary mb-3">Follow-up Care</h3>
                <p class="text-gray-600">Continued monitoring and follow-up care to ensure complete recovery and prevent complications.</p>
            </div>
        </div>
    </div>
</section>

<!-- When to Visit Emergency -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-secondary mb-4">When to Visit Our Emergency Department</h2>
            <p class="text-lg text-gray-600">Recognize emergency situations that require immediate medical attention</p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-12">
            <div>
                <h3 class="text-2xl font-bold text-accent mb-6">Immediate Emergency Situations</h3>
                <div class="space-y-4">
                    <div class="flex items-start space-x-3 bg-red-50 p-4 rounded-lg">
                        <div class="bg-accent text-white p-2 rounded-full mt-1">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-1">Chest Pain or Heart Attack Symptoms</h4>
                            <p class="text-gray-600 text-sm">Severe chest pain, shortness of breath, sweating, nausea, or arm pain</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3 bg-red-50 p-4 rounded-lg">
                        <div class="bg-accent text-white p-2 rounded-full mt-1">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-1">Severe Injuries or Trauma</h4>
                            <p class="text-gray-600 text-sm">Major accidents, fractures, severe bleeding, or head injuries</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3 bg-red-50 p-4 rounded-lg">
                        <div class="bg-accent text-white p-2 rounded-full mt-1">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-1">Difficulty Breathing</h4>
                            <p class="text-gray-600 text-sm">Severe breathing problems, choking, or respiratory distress</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3 bg-red-50 p-4 rounded-lg">
                        <div class="bg-accent text-white p-2 rounded-full mt-1">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-1">Neurological Symptoms</h4>
                            <p class="text-gray-600 text-sm">Stroke symptoms, sudden confusion, severe headache, or loss of consciousness</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div>
                <h3 class="text-2xl font-bold text-primary mb-6">Other Emergency Conditions</h3>
                <div class="space-y-4">
                    <div class="flex items-start space-x-3 bg-blue-50 p-4 rounded-lg">
                        <div class="bg-primary text-white p-2 rounded-full mt-1">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-1">High Fever with Complications</h4>
                            <p class="text-gray-600 text-sm">High fever with difficulty breathing, dehydration, or severe symptoms</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3 bg-blue-50 p-4 rounded-lg">
                        <div class="bg-primary text-white p-2 rounded-full mt-1">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-1">Severe Abdominal Pain</h4>
                            <p class="text-gray-600 text-sm">Sudden, severe abdominal pain that may indicate appendicitis or other conditions</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3 bg-blue-50 p-4 rounded-lg">
                        <div class="bg-primary text-white p-2 rounded-full mt-1">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-1">Pregnancy Complications</h4>
                            <p class="text-gray-600 text-sm">Severe bleeding, contractions, or other pregnancy-related emergencies</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3 bg-blue-50 p-4 rounded-lg">
                        <div class="bg-primary text-white p-2 rounded-full mt-1">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-1">Severe Allergic Reactions</h4>
                            <p class="text-gray-600 text-sm">Difficulty breathing, swelling, or severe allergic reactions requiring immediate care</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="bg-gold bg-opacity-10 p-6 rounded-xl mt-8">
            <div class="text-center">
                <h4 class="text-xl font-semibold text-secondary mb-3">Remember: When in Doubt, Don't Wait</h4>
                <p class="text-gray-700 mb-4">If you're unsure whether your condition requires emergency care, it's always better to err on the side of caution. Our emergency team is here to help assess your situation and provide appropriate care.</p>
                <a href="tel:8668289254" class="bg-accent text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-700 transition duration-300 inline-flex items-center space-x-2">
                    <i class="fas fa-phone"></i>
                    <span>Call Emergency: 8668289254</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Emergency Services -->
<section class="py-16 bg-secondary text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Emergency Contact Information</h2>
        <p class="text-xl mb-8 max-w-3xl mx-auto">Available 24/7 for all medical emergencies. Don't hesitate to contact us immediately for any emergency situation.</p>
        
        <div class="grid md:grid-cols-3 gap-8 mb-8">
            <div class="bg-white bg-opacity-10 p-6 rounded-xl backdrop-blur-sm">
                <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-phone text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Emergency Helpline</h3>
                <p class="text-2xl font-bold text-gold mb-2">8668289254</p>
                <p class="text-sm opacity-75">Available 24/7</p>
            </div>
            
            <div class="bg-white bg-opacity-10 p-6 rounded-xl backdrop-blur-sm">
                <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-ambulance text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Ambulance Service</h3>
                <p class="text-2xl font-bold text-gold mb-2">8668289254</p>
                <p class="text-sm opacity-75">Quick Response Team</p>
            </div>
            
            <div class="bg-white bg-opacity-10 p-6 rounded-xl backdrop-blur-sm">
                <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-map-marker-alt text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Hospital Location</h3>
                <p class="text-lg font-semibold text-gold mb-2">Parivartan Square</p>
                <p class="text-sm opacity-75">Besa Road, Manewada, Nagpur</p>
            </div>
        </div>
        
        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
            <a href="tel:8668289254" class="bg-accent hover:bg-red-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition duration-300 flex items-center justify-center space-x-2">
                <i class="fas fa-phone"></i>
                <span>Call Emergency: 8668289254</span>
            </a>
            <a href="/contact-hospital-nagpur.php" class="bg-primary hover:bg-primaryDark text-white px-8 py-4 rounded-lg text-lg font-semibold transition duration-300 flex items-center justify-center space-x-2">
                <i class="fas fa-envelope"></i>
                <span>Contact Hospital</span>
            </a>
            <a href="https://maps.app.goo.gl/1yM8B1obgk8BwBzV9" target="_blank" class="bg-transparent border-2 border-white hover:bg-white hover:text-secondary text-white px-8 py-4 rounded-lg text-lg font-semibold transition duration-300 flex items-center justify-center space-x-2">
                <i class="fas fa-directions"></i>
                <span>Get Directions</span>
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>