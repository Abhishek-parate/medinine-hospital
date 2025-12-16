<?php
// Page meta information
$page_title = "24/7 Emergency Trauma Care Services - Medinine Hospital Nagpur | Call 8668289254";
$page_description = "Expert emergency trauma care at Medinine Hospital Nagpur. 24/7 trauma treatment, fracture care, spine injuries, emergency surgery, ambulance services. Best emergency hospital in Nagpur.";
$page_keywords = "emergency trauma care Nagpur, 24/7 emergency services, trauma hospital, fracture treatment, spine injury, emergency surgery, ambulance services Nagpur, trauma specialists";
$canonical_url = "https://medininehospital.com/24-7-trauma-care-nagpur";
$og_title = "24/7 Emergency Trauma Care - Medinine Hospital Nagpur";
$og_description = "Expert emergency trauma care services including fracture treatment, spine injuries, and emergency surgery available 24/7 at Nagpur's leading trauma center.";

// Schema markup
$schema_markup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalProcedure",
  "name": "Emergency Trauma Care",
  "description": "24/7 emergency trauma care services including fracture treatment, spine injuries, and emergency surgical procedures",
  "provider": {
    "@type": "Hospital",
    "name": "Medinine Hospital",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "1A/1, Parivartan Square, Besa Road, Manewada",
      "addressLocality": "Nagpur",
      "addressRegion": "Maharashtra",
      "addressCountry": "IN"
    },
    "telephone": "8668289254"
  },
  "availableService": [
    "Emergency Trauma Care",
    "Fracture Treatment", 
    "Spine Injury Treatment",
    "Emergency Surgery",
    "Ambulance Services"
  ],
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "availabilityStarts": "00:00",
    "availabilityEnds": "23:59"
  }
}
</script>';

// Include header
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="relative overflow-hidden">
    <div class="gradient-accent py-20">
        <div class="absolute inset-0 bg-black bg-opacity-30"></div>
        <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80');"></div>
        <div class="relative container mx-auto px-4 text-center text-white">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">24/7 Emergency Trauma Care</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-4xl mx-auto leading-relaxed opacity-90">
                Expert emergency trauma treatment with experienced specialists, advanced equipment, and immediate response for critical injuries and medical emergencies.
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
                <a href="tel:8668289254" class="bg-white text-accent px-8 py-4 rounded-lg text-lg font-bold hover:bg-gray-100 transition duration-300 flex items-center justify-center space-x-2 shadow-lg">
                    <i class="fas fa-phone-alt"></i>
                    <span>EMERGENCY: 8668289254</span>
                </a>
                <a href="/contact-medinine-hospital" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-white hover:text-accent transition duration-300 flex items-center justify-center space-x-2">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Hospital Location</span>
                </a>
            </div>
            
            <!-- Emergency Stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-4xl mx-auto mt-12">
                <div class="text-center">
                    <div class="text-3xl font-bold text-gold mb-2">24/7</div>
                    <div class="text-sm opacity-90">Emergency Care</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-gold mb-2">&lt;10</div>
                    <div class="text-sm opacity-90">Minutes Response</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-gold mb-2">100%</div>
                    <div class="text-sm opacity-90">Success Rate</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-gold mb-2">5000+</div>
                    <div class="text-sm opacity-90">Lives Saved</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
            <div>
                <h2 class="text-4xl font-bold text-secondary mb-6">Expert Emergency Trauma Care</h2>
                <p class="text-lg text-gray-700 mb-6 leading-relaxed">At Medinine Hospital, our emergency trauma care department operates 24/7 with a dedicated team of experienced trauma specialists, emergency physicians, and support staff. We understand that every second counts in emergency situations, which is why our department is equipped with state-of-the-art medical equipment and follows rapid response protocols to provide immediate life-saving care.</p>
                
                <p class="text-lg text-gray-700 mb-6 leading-relaxed">Our trauma care services include treatment for multiple injuries, fractures, spine injuries, head trauma, chest injuries, abdominal trauma, and other critical conditions. We have advanced diagnostic facilities including CT scan, X-ray, and ultrasound available round-the-clock for immediate assessment and diagnosis of trauma patients.</p>
                
                <p class="text-lg text-gray-700 mb-6 leading-relaxed">The emergency department is staffed by board-certified emergency medicine physicians, trauma surgeons, orthopedic specialists, and critical care experts who work together as a coordinated team to provide comprehensive trauma care. Our nursing staff is specially trained in emergency protocols and trauma management to ensure optimal patient outcomes.</p>
                
                <div class="bg-accent bg-opacity-10 p-6 rounded-lg border-l-4 border-accent">
                    <div class="flex items-center mb-3">
                        <i class="fas fa-ambulance text-accent text-xl mr-3"></i>
                        <h3 class="text-lg font-semibold text-secondary">Emergency Helpline</h3>
                    </div>
                    <p class="text-gray-700 mb-2">For immediate emergency assistance:</p>
                    <a href="tel:8668289254" class="text-2xl font-bold text-accent hover:text-red-700">8668289254</a>
                    <p class="text-sm text-gray-600 mt-1">Available 24 hours, 7 days a week</p>
                </div>
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Emergency Trauma Care" class="rounded-xl shadow-lg w-full">
            </div>
        </div>
    </div>
</section>

<!-- Emergency Services -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-secondary mb-4">Our Emergency Trauma Services</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">Comprehensive emergency trauma care covering all types of injuries and critical conditions with immediate response and expert treatment.</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Fracture Treatment -->
            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border-t-4 border-accent group">
                <div class="flex items-center mb-6">
                    <div class="bg-red-100 p-4 rounded-full mr-4 group-hover:bg-accent group-hover:text-white transition duration-300">
                        <i class="fas fa-bone text-accent text-2xl group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary">Fracture Treatment</h3>
                </div>
                <p class="text-gray-600 leading-relaxed mb-4">Expert treatment of all types of fractures including simple, compound, and complex fractures. Our orthopedic specialists provide immediate fracture reduction, casting, and surgical fixation when necessary.</p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• Simple & Complex Fractures</li>
                    <li>• Emergency Orthopedic Surgery</li>
                    <li>• Cast Application & Removal</li>
                    <li>• Post-Fracture Rehabilitation</li>
                </ul>
            </div>

            <!-- Spine Injury Care -->
            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border-t-4 border-accent group">
                <div class="flex items-center mb-6">
                    <div class="bg-red-100 p-4 rounded-full mr-4 group-hover:bg-accent group-hover:text-white transition duration-300">
                        <i class="fas fa-spine text-accent text-2xl group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary">Spine Injury Care</h3>
                </div>
                <p class="text-gray-600 leading-relaxed mb-4">Specialized treatment for spinal cord injuries, vertebral fractures, and disc injuries. Our spine specialists use advanced imaging and treatment protocols to stabilize spine injuries.</p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• Spinal Cord Injury Management</li>
                    <li>• Vertebral Fracture Treatment</li>
                    <li>• Emergency Spine Surgery</li>
                    <li>• Neurological Assessment</li>
                </ul>
            </div>

            <!-- Head Trauma -->
            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border-t-4 border-accent group">
                <div class="flex items-center mb-6">
                    <div class="bg-red-100 p-4 rounded-full mr-4 group-hover:bg-accent group-hover:text-white transition duration-300">
                        <i class="fas fa-brain text-accent text-2xl group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary">Head Trauma Care</h3>
                </div>
                <p class="text-gray-600 leading-relaxed mb-4">Comprehensive care for head injuries including concussions, skull fractures, and traumatic brain injuries with advanced neurological assessment and monitoring.</p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• Traumatic Brain Injury</li>
                    <li>• Skull Fracture Treatment</li>
                    <li>• Concussion Management</li>
                    <li>• Neurosurgical Intervention</li>
                </ul>
            </div>

            <!-- Chest Injuries -->
            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border-t-4 border-accent group">
                <div class="flex items-center mb-6">
                    <div class="bg-red-100 p-4 rounded-full mr-4 group-hover:bg-accent group-hover:text-white transition duration-300">
                        <i class="fas fa-lungs text-accent text-2xl group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary">Chest Trauma</h3>
                </div>
                <p class="text-gray-600 leading-relaxed mb-4">Treatment of chest trauma including rib fractures, pneumothorax, hemothorax, and lung injuries with emergency chest procedures when required.</p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• Rib Fracture Management</li>
                    <li>• Pneumothorax Treatment</li>
                    <li>• Chest Tube Insertion</li>
                    <li>• Emergency Thoracotomy</li>
                </ul>
            </div>

            <!-- Emergency Surgery -->
            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border-t-4 border-accent group">
                <div class="flex items-center mb-6">
                    <div class="bg-red-100 p-4 rounded-full mr-4 group-hover:bg-accent group-hover:text-white transition duration-300">
                        <i class="fas fa-cut text-accent text-2xl group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary">Emergency Surgery</h3>
                </div>
                <p class="text-gray-600 leading-relaxed mb-4">Immediate surgical intervention for life-threatening injuries including internal bleeding, organ damage, and severe trauma with 24/7 surgical team availability.</p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• Life-Saving Surgery</li>
                    <li>• Internal Bleeding Control</li>
                    <li>• Organ Repair Surgery</li>
                    <li>• Damage Control Surgery</li>
                </ul>
            </div>

            <!-- Ambulance Services -->
            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border-t-4 border-accent group">
                <div class="flex items-center mb-6">
                    <div class="bg-red-100 p-4 rounded-full mr-4 group-hover:bg-accent group-hover:text-white transition duration-300">
                        <i class="fas fa-ambulance text-accent text-2xl group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary">Ambulance Services</h3>
                </div>
                <p class="text-gray-600 leading-relaxed mb-4">24/7 ambulance services with trained paramedics and advanced life support equipment for emergency transport and pre-hospital care.</p>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• Advanced Life Support</li>
                    <li>• Trained Paramedics</li>
                    <li>• GPS-Enabled Fleet</li>
                    <li>• Rapid Response Time</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Response Process -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-secondary mb-4">Our Emergency Response Process</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">Streamlined emergency protocols ensure rapid assessment, treatment, and care coordination for optimal patient outcomes.</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center group">
                <div class="bg-accent text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 text-2xl font-bold group-hover:scale-110 transition duration-300 shadow-lg">1</div>
                <h3 class="text-xl font-semibold mb-3 text-secondary">Emergency Call</h3>
                <p class="text-gray-600">Immediate response to emergency calls with ambulance dispatch and pre-hospital care instructions.</p>
            </div>
            <div class="text-center group">
                <div class="bg-accent text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 text-2xl font-bold group-hover:scale-110 transition duration-300 shadow-lg">2</div>
                <h3 class="text-xl font-semibold mb-3 text-secondary">Rapid Triage</h3>
                <p class="text-gray-600">Quick assessment of patient condition to prioritize treatment based on severity of injuries and medical needs.</p>
            </div>
            <div class="text-center group">
                <div class="bg-accent text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 text-2xl font-bold group-hover:scale-110 transition duration-300 shadow-lg">3</div>
                <h3 class="text-xl font-semibold mb-3 text-secondary">Expert Treatment</h3>
                <p class="text-gray-600">Immediate treatment by specialized trauma team including emergency medicine physicians and trauma surgeons.</p>
            </div>
            <div class="text-center group">
                <div class="bg-accent text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 text-2xl font-bold group-hover:scale-110 transition duration-300 shadow-lg">4</div>
                <h3 class="text-xl font-semibold mb-3 text-secondary">Ongoing Care</h3>
                <p class="text-gray-600">Continuous monitoring and follow-up care in our ICU or appropriate department for complete recovery.</p>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Equipment -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-secondary mb-4">Advanced Emergency Equipment</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">State-of-the-art medical equipment and technology ensuring the highest quality emergency trauma care.</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                <div class="flex items-center mb-4">
                    <i class="fas fa-heartbeat text-accent text-2xl mr-3"></i>
                    <h3 class="text-lg font-semibold text-secondary">Cardiac Monitors</h3>
                </div>
                <p class="text-gray-600">Advanced cardiac monitoring systems for continuous heart rate and rhythm monitoring during emergency treatment.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                <div class="flex items-center mb-4">
                    <i class="fas fa-lungs text-accent text-2xl mr-3"></i>
                    <h3 class="text-lg font-semibold text-secondary">Ventilators</h3>
                </div>
                <p class="text-gray-600">Life support ventilators for patients requiring respiratory assistance during critical care treatment.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                <div class="flex items-center mb-4">
                    <i class="fas fa-x-ray text-accent text-2xl mr-3"></i>
                    <h3 class="text-lg font-semibold text-secondary">Digital X-Ray</h3>
                </div>
                <p class="text-gray-600">Immediate digital X-ray imaging for rapid diagnosis of fractures and internal injuries.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                <div class="flex items-center mb-4">
                    <i class="fas fa-bolt text-accent text-2xl mr-3"></i>
                    <h3 class="text-lg font-semibold text-secondary">Defibrillators</h3>
                </div>
                <p class="text-gray-600">Advanced defibrillation equipment for cardiac emergencies and life-threatening arrhythmias.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                <div class="flex items-center mb-4">
                    <i class="fas fa-eye text-accent text-2xl mr-3"></i>
                    <h3 class="text-lg font-semibold text-secondary">CT Scanner</h3>
                </div>
                <p class="text-gray-600">High-resolution CT scanning for detailed imaging of head, chest, and abdominal injuries.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                <div class="flex items-center mb-4">
                    <i class="fas fa-tint text-accent text-2xl mr-3"></i>
                    <h3 class="text-lg font-semibold text-secondary">Blood Bank</h3>
                </div>
                <p class="text-gray-600">24/7 blood bank services for immediate blood transfusion in trauma cases requiring blood replacement.</p>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Contact Section -->
<section class="py-16 bg-accent text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-6">Medical Emergency? Don't Wait!</h2>
        <p class="text-xl mb-8 max-w-3xl mx-auto">In case of medical emergency, every second counts. Our emergency trauma care team is available 24/7 to provide immediate life-saving treatment. Call our emergency number now!</p>
        
        <div class="grid md:grid-cols-3 gap-8 mb-8">
            <div class="text-center">
                <div class="bg-white bg-opacity-20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-clock text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">24/7 Availability</h3>
                <p class="text-red-100">Round-the-clock emergency services every day of the year</p>
            </div>
            <div class="text-center">
                <div class="bg-white bg-opacity-20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-rocket text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Rapid Response</h3>
                <p class="text-red-100">Immediate assessment and treatment within minutes of arrival</p>
            </div>
            <div class="text-center">
                <div class="bg-white bg-opacity-20 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-shield-alt text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Expert Care</h3>
                <p class="text-red-100">Experienced trauma specialists and emergency physicians</p>
            </div>
        </div>
        
        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
            <a href="tel:8668289254" class="bg-white text-accent px-10 py-5 rounded-lg text-2xl font-bold hover:bg-gray-100 transition duration-300 inline-flex items-center space-x-3 shadow-lg">
                <i class="fas fa-phone-alt"></i>
                <span>CALL: 8668289254</span>
            </a>
            <a href="https://maps.app.goo.gl/1yM8B1obgk8BwBzV9" target="_blank" class="bg-transparent border-2 border-white text-white px-8 py-5 rounded-lg text-lg font-semibold hover:bg-white hover:text-accent transition duration-300 inline-flex items-center space-x-2">
                <i class="fas fa-map-marker-alt"></i>
                <span>Get Directions</span>
            </a>
        </div>
        
        <div class="mt-8 p-6 bg-white bg-opacity-10 rounded-lg max-w-2xl mx-auto">
            <h3 class="text-xl font-semibold mb-3">Hospital Address</h3>
            <p class="text-red-100">1A/1, Parivartan Square, Besa Road, Manewada, Nagpur, Maharashtra</p>
            <p class="text-red-100 mt-2">GPS: Use "Medinine Hospital Nagpur" for navigation</p>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>