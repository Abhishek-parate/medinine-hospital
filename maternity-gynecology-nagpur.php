<?php
// Page meta information
$page_title = "Best Maternity & Gynecology Hospital in Nagpur | Medinine Hospital";
$page_description = "Medinine Hospital offers comprehensive maternity and gynecology services in Nagpur including normal delivery, C-section, high-risk pregnancy care, gynecological surgery, and women's health checkups. Expert gynecologists and modern facilities for complete women's healthcare.";
$page_keywords = "maternity hospital Nagpur, gynecology hospital Nagpur, normal delivery Nagpur, C-section delivery, high-risk pregnancy care, gynecologist in Nagpur, pregnancy care, women's health, best maternity hospital Nagpur, gynecological surgery, prenatal care, postnatal care, Medinine Hospital";
$canonical_url = "https://medininehospital.com/maternity-gynecology-nagpur";
$og_title = "Compassionate Maternity & Gynecology Care at Medinine Hospital";
$og_description = "Experience world-class maternity and gynecology services at Medinine Hospital Nagpur. From prenatal care to delivery and beyond, our expert team provides personalized, compassionate care for every woman at every stage of life.";


// Schema markup
$schema_markup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalBusiness",
  "@id": "https://medininehospital.com/#hospital",
  "name": "Medinine Hospital",
  "url": "https://medininehospital.com",
  "logo": "https://medininehospital.com/assets/images/logo.png",
  "image": "https://medininehospital.com/assets/images/maternity-care.jpg",
  "description": "' . $page_description . '",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Your Street Address",
    "addressLocality": "Nagpur",
    "addressRegion": "Maharashtra",
    "postalCode": "440001",
    "addressCountry": "IN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "21.1458",
    "longitude": "79.0882"
  },
  "telephone": "+91-8668289254",
  "priceRange": "$$",
  "medicalSpecialty": [
    "Obstetrics",
    "Gynecology",
    "Maternal-Fetal Medicine",
    "Reproductive Health"
  ],
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Maternity & Gynecology Services",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "MedicalProcedure",
          "name": "Normal Delivery",
          "description": "Safe and natural childbirth with expert care"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "MedicalProcedure",
          "name": "Cesarean Section",
          "description": "Advanced C-section procedures with minimal recovery time"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "MedicalProcedure",
          "name": "High-Risk Pregnancy Care",
          "description": "Specialized care for complicated pregnancies"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "MedicalProcedure",
          "name": "Gynecological Surgery",
          "description": "Advanced surgical treatments for women\'s health issues"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "MedicalProcedure",
          "name": "Infertility Treatment",
          "description": "Comprehensive fertility evaluation and treatment"
        }
      }
    ]
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "reviewCount": "450"
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "https://medininehospital.com/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Medical Services",
      "item": "https://medininehospital.com/medical-services-nagpur.php"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Maternity & Gynecology",
      "item": "https://medininehospital.com/maternity-gynecology-nagpur"
    }
  ]
}
</script>
';

include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="relative overflow-hidden hero-pattern">
    <div class="gradient-primary py-20 lg:py-24">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        <div class="relative container mx-auto px-4 text-center text-white">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                Complete <span class="text-gold">Maternity & Gynecology Care</span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 max-w-4xl mx-auto leading-relaxed opacity-90">
                Nurturing mothers and celebrating new beginnings with compassionate, expert care at every stage of your journey.
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6 mb-8">
                <a href="/appointment-booking-online.php" class="bg-accent text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-red-700 transition-all duration-300 flex items-center justify-center space-x-2 shadow-lg hover:shadow-xl transform hover:scale-105">
                    <i class="fas fa-calendar-check"></i>
                    <span>Book Appointment</span>
                </a>
                <a href="tel:8668289254" class="bg-transparent border-2 border-white hover:bg-white hover:text-primary text-white px-8 py-4 rounded-lg text-lg font-semibold transition duration-300 flex items-center justify-center space-x-2">
                    <i class="fas fa-phone"></i>
                    <span>Call: 8668289254</span>
                </a>
            </div>
            <nav class="flex justify-center" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm">
                    <li><a href="/index.php" class="hover:text-gold transition duration-300">Home</a></li>
                    <li><i class="fas fa-chevron-right text-gold mx-2"></i></li>
                    <li><a href="/medical-services-nagpur.php" class="hover:text-gold transition duration-300">Services</a></li>
                    <li><i class="fas fa-chevron-right text-gold mx-2"></i></li>
                    <li class="text-gold">Maternity & Gynecology</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!-- Key Features Section -->
<section class="py-12 bg-gradient-to-br from-pink-50 to-purple-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="w-16 h-16 bg-pink-500 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-user-md text-3xl text-white"></i>
                </div>
                <h3 class="text-lg font-bold text-secondary mb-2">Expert Gynecologists</h3>
                <p class="text-sm text-gray-600">Experienced female specialists with compassionate care</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="w-16 h-16 bg-purple-500 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-baby text-3xl text-white"></i>
                </div>
                <h3 class="text-lg font-bold text-secondary mb-2">24/7 Delivery Care</h3>
                <p class="text-sm text-gray-600">Round-the-clock obstetric and neonatal support</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-heartbeat text-3xl text-white"></i>
                </div>
                <h3 class="text-lg font-bold text-secondary mb-2">High-Risk Care</h3>
                <p class="text-sm text-gray-600">Specialized management of complicated pregnancies</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-hospital-user text-3xl text-white"></i>
                </div>
                <h3 class="text-lg font-bold text-secondary mb-2">Modern Facilities</h3>
                <p class="text-sm text-gray-600">Advanced NICU, labor rooms, and operation theaters</p>
            </div>
        </div>
    </div>
</section>

<!-- Main Content Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="prose max-w-none text-gray-600">
            <h2 class="text-3xl font-bold text-secondary mb-6">Your Trusted Partner in Women's Healthcare</h2>
            <p>
                At Medinine Hospital, we understand that women's health needs are unique and deserve specialized, compassionate care. Our Department of Maternity and Gynecology is dedicated to providing comprehensive healthcare services for women at every stage of life—from adolescence through pregnancy, childbirth, and menopause. As one of the **best maternity hospitals in Nagpur**, we combine medical excellence with a warm, supportive environment where every woman feels valued, respected, and empowered.
            </p>
            <p>
                Our team of highly qualified gynecologists and obstetricians brings decades of combined experience in managing routine and complex cases. Whether you're planning a pregnancy, expecting a baby, dealing with a gynecological condition, or seeking preventive care, we offer personalized treatment plans tailored to your specific needs. We believe in building long-term relationships with our patients based on trust, open communication, and evidence-based care. Our state-of-the-art facilities, including modern labor rooms, advanced operation theaters, and a dedicated NICU, ensure that you and your baby receive the highest standard of care in a safe and comfortable setting.
            </p>

            <h3 class="text-2xl font-bold text-primary mt-8 mb-4">Comprehensive Maternity Services</h3>
            
            <!-- Antenatal Care -->
            <div class="bg-gradient-to-r from-pink-50 to-rose-100 rounded-xl p-6 mb-6 border-l-4 border-pink-500">
                <h4 class="text-xl font-bold text-pink-600 mb-3 flex items-center">
                    <i class="fas fa-pregnant-woman mr-3 text-2xl"></i>
                    Antenatal (Prenatal) Care
                </h4>
                <p class="mb-4">
                    Your pregnancy journey begins with comprehensive prenatal care designed to monitor your health and your baby's development. Our antenatal services ensure a healthy pregnancy and prepare you for a safe delivery.
                </p>
                <ul class="list-disc list-inside space-y-2 ml-4">
                    <li><strong>First Trimester Care:</strong> Early pregnancy confirmation, dating scans, NT scan, and genetic counseling</li>
                    <li><strong>Second Trimester Monitoring:</strong> Anomaly scans, fetal growth assessment, and maternal health checkups</li>
                    <li><strong>Third Trimester Preparation:</strong> Growth scans, biophysical profile, and delivery planning</li>
                    <li><strong>Regular Health Monitoring:</strong> Blood pressure, weight, fetal heart rate, and fundal height tracking</li>
                    <li><strong>Laboratory Tests:</strong> Complete blood count, blood sugar, thyroid function, and infection screening</li>
                    <li><strong>Ultrasound Services:</strong> 3D/4D ultrasound for detailed fetal imaging</li>
                    <li><strong>Nutritional Counseling:</strong> Diet planning and supplement recommendations</li>
                    <li><strong>Prenatal Classes:</strong> Childbirth education, breathing exercises, and breastfeeding workshops</li>
                </ul>
                <div class="mt-4 p-4 bg-white rounded-lg border border-pink-200">
                    <p class="text-sm font-semibold text-pink-600 mb-2"><i class="fas fa-info-circle mr-2"></i>Recommended Antenatal Visit Schedule:</p>
                    <ul class="text-sm space-y-1 ml-6">
                        <li>• Weeks 4-28: Monthly visits</li>
                        <li>• Weeks 28-36: Bi-weekly visits</li>
                        <li>• Weeks 36-40: Weekly visits</li>
                    </ul>
                </div>
            </div>

            <!-- Normal Delivery -->
            <div class="bg-gradient-to-r from-green-50 to-emerald-100 rounded-xl p-6 mb-6 border-l-4 border-success">
                <h4 class="text-xl font-bold text-success mb-3 flex items-center">
                    <i class="fas fa-baby-carriage mr-3 text-2xl"></i>
                    Normal Delivery (Vaginal Birth)
                </h4>
                <p class="mb-4">
                    We strongly encourage and support natural childbirth whenever possible. Our experienced obstetricians and trained midwives provide continuous support throughout labor to ensure a safe and comfortable delivery experience.
                </p>
                <div class="grid md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <h5 class="font-bold text-secondary mb-2">Benefits of Normal Delivery:</h5>
                        <ul class="list-disc list-inside space-y-1 text-sm">
                            <li>Faster recovery and shorter hospital stay</li>
                            <li>Lower risk of complications</li>
                            <li>Immediate bonding with baby</li>
                            <li>Early initiation of breastfeeding</li>
                            <li>Natural immune system boost for baby</li>
                            <li>Lower risk of respiratory problems in baby</li>
                        </ul>
                    </div>
                    <div>
                        <h5 class="font-bold text-secondary mb-2">Our Labor & Delivery Facilities:</h5>
                        <ul class="list-disc list-inside space-y-1 text-sm">
                            <li>Private, comfortable labor rooms</li>
                            <li>Continuous fetal monitoring systems</li>
                            <li>Epidural anesthesia for pain relief</li>
                            <li>Birthing balls and mobility support</li>
                            <li>Partner/family presence during delivery</li>
                            <li>Immediate neonatal assessment</li>
                        </ul>
                    </div>
                </div>
                <p class="text-sm bg-white p-3 rounded-lg border border-green-200">
                    <strong>💡 Our Approach:</strong> We follow evidence-based protocols to minimize interventions and support natural birth processes while ensuring the safety of mother and baby at all times.
                </p>
            </div>

            <!-- Cesarean Section -->
            <div class="bg-gradient-to-r from-blue-50 to-cyan-100 rounded-xl p-6 mb-6 border-l-4 border-primary">
                <h4 class="text-xl font-bold text-primary mb-3 flex items-center">
                    <i class="fas fa-procedures mr-3 text-2xl"></i>
                    Cesarean Section (C-Section)
                </h4>
                <p class="mb-4">
                    When a C-section is medically necessary or planned, our skilled surgical team performs the procedure with precision and care. We use advanced surgical techniques to ensure minimal scarring and faster recovery.
                </p>
                <ul class="list-disc list-inside space-y-2 ml-4">
                    <li><strong>Emergency C-Section:</strong> Immediate surgical delivery when complications arise during labor</li>
                    <li><strong>Planned C-Section:</strong> Pre-scheduled surgery for medical indications or previous cesarean</li>
                    <li><strong>Modern Surgical Techniques:</strong> Low transverse incision for better cosmetic results</li>
                    <li><strong>Spinal Anesthesia:</strong> Allowing mother to be awake and alert during birth</li>
                    <li><strong>Skin-to-Skin Contact:</strong> Immediate bonding in the operating room when possible</li>
                    <li><strong>VBAC Support:</strong> Vaginal birth after cesarean for suitable candidates</li>
                </ul>
                <div class="mt-4 grid md:grid-cols-3 gap-3">
                    <div class="bg-white p-3 rounded-lg border border-blue-200 text-center">
                        <i class="fas fa-clock text-primary text-2xl mb-2"></i>
                        <p class="text-sm font-semibold">45-60 Minutes</p>
                        <p class="text-xs text-gray-600">Surgery Duration</p>
                    </div>
                    <div class="bg-white p-3 rounded-lg border border-blue-200 text-center">
                        <i class="fas fa-bed text-primary text-2xl mb-2"></i>
                        <p class="text-sm font-semibold">3-4 Days</p>
                        <p class="text-xs text-gray-600">Hospital Stay</p>
                    </div>
                    <div class="bg-white p-3 rounded-lg border border-blue-200 text-center">
                        <i class="fas fa-walking text-primary text-2xl mb-2"></i>
                        <p class="text-sm font-semibold">4-6 Weeks</p>
                        <p class="text-xs text-gray-600">Recovery Time</p>
                    </div>
                </div>
            </div>

            <!-- High-Risk Pregnancy -->
            <div class="bg-gradient-to-r from-orange-50 to-yellow-100 rounded-xl p-6 mb-6 border-l-4 border-warning">
                <h4 class="text-xl font-bold text-warning mb-3 flex items-center">
                    <i class="fas fa-exclamation-triangle mr-3 text-2xl"></i>
                    High-Risk Pregnancy Management
                </h4>
                <p class="mb-4">
                    Certain pregnancies require specialized care and closer monitoring. Our maternal-fetal medicine specialists provide expert management for high-risk conditions to ensure the best possible outcomes for mother and baby.
                </p>
                <div class="mb-4">
                    <h5 class="font-bold text-secondary mb-2">Conditions We Manage:</h5>
                    <div class="grid md:grid-cols-2 gap-3">
                        <ul class="list-disc list-inside space-y-1 text-sm">
                            <li>Gestational diabetes and pre-existing diabetes</li>
                            <li>Pregnancy-induced hypertension and preeclampsia</li>
                            <li>Multiple pregnancies (twins, triplets)</li>
                            <li>Advanced maternal age (35+ years)</li>
                            <li>Previous cesarean sections or uterine surgery</li>
                            <li>Placenta previa and placental abnormalities</li>
                        </ul>
                        <ul class="list-disc list-inside space-y-1 text-sm">
                            <li>Fetal growth restriction (IUGR)</li>
                            <li>Premature labor and preterm delivery risk</li>
                            <li>Thyroid disorders in pregnancy</li>
                            <li>Heart disease and other medical conditions</li>
                            <li>Recurrent pregnancy loss</li>
                            <li>Fetal abnormalities detected on ultrasound</li>
                        </ul>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg border border-orange-200">
                    <h5 class="font-bold text-secondary mb-2 flex items-center">
                        <i class="fas fa-shield-alt text-warning mr-2"></i>
                        Our High-Risk Pregnancy Protocols:
                    </h5>
                    <ul class="text-sm space-y-1 ml-6">
                        <li>• Frequent monitoring with advanced ultrasound and Doppler studies</li>
                        <li>• Specialized fetal echocardiography for cardiac assessment</li>
                        <li>• Coordination with other specialists (endocrinology, cardiology)</li>
                        <li>• NICU preparedness for premature or compromised babies</li>
                        <li>• 24/7 access to emergency cesarean section</li>
                    </ul>
                </div>
            </div>

            <!-- Postnatal Care -->
            <div class="bg-gradient-to-r from-purple-50 to-pink-100 rounded-xl p-6 mb-6 border-l-4 border-purple-600">
                <h4 class="text-xl font-bold text-purple-600 mb-3 flex items-center">
                    <i class="fas fa-heart mr-3 text-2xl"></i>
                    Postnatal (Postpartum) Care
                </h4>
                <p class="mb-4">
                    The postpartum period is crucial for recovery and adjustment. We provide comprehensive care and support to help new mothers heal physically and emotionally while learning to care for their newborns.
                </p>
                <ul class="list-disc list-inside space-y-2 ml-4">
                    <li><strong>Mother's Recovery Monitoring:</strong> Vital signs, uterine involution, and wound healing assessment</li>
                    <li><strong>Breastfeeding Support:</strong> Lactation consultants to help establish successful breastfeeding</li>
                    <li><strong>Newborn Care Education:</strong> Bathing, feeding, diaper changing, and sleep training guidance</li>
                    <li><strong>Immunization Schedule:</strong> BCG, Hepatitis B, and other essential newborn vaccines</li>
                    <li><strong>Postpartum Mental Health:</strong> Screening and support for postpartum depression and anxiety</li>
                    <li><strong>Family Planning Counseling:</strong> Contraception options and birth spacing advice</li>
                    <li><strong>Follow-up Appointments:</strong> 6-week postpartum checkup and ongoing support</li>
                </ul>
            </div>

            <h3 class="text-2xl font-bold text-primary mt-10 mb-4">Comprehensive Gynecology Services</h3>

            <!-- Routine Gynecology -->
            <div class="bg-gradient-to-r from-teal-50 to-cyan-100 rounded-xl p-6 mb-6 border-l-4 border-teal-600">
                <h4 class="text-xl font-bold text-teal-600 mb-3 flex items-center">
                    <i class="fas fa-female mr-3 text-2xl"></i>
                    Routine Gynecological Care
                </h4>
                <p class="mb-4">
                    Regular gynecological checkups are essential for maintaining women's health. Our comprehensive services focus on prevention, early detection, and treatment of gynecological conditions.
                </p>
                <ul class="list-disc list-inside space-y-2 ml-4">
                    <li><strong>Annual Well-Woman Exams:</strong> Complete physical examination and health assessment</li>
                    <li><strong>Pap Smear:</strong> Cervical cancer screening for early detection</li>
                    <li><strong>Breast Examination:</strong> Clinical breast exam and mammography referrals</li>
                    <li><strong>Menstrual Disorders:</strong> Management of irregular periods, heavy bleeding, and painful periods</li>
                    <li><strong>Contraception Counseling:</strong> Birth control pills, IUDs, implants, and other options</li>
                    <li><strong>STI Screening:</strong> Testing and treatment for sexually transmitted infections</li>
                    <li><strong>Menopause Management:</strong> Hormone therapy and symptom relief</li>
                    <li><strong>Adolescent Gynecology:</strong> Care for young women and teenagers</li>
                </ul>
            </div>

            <!-- Gynecological Surgery -->
            <div class="bg-gradient-to-r from-indigo-50 to-purple-100 rounded-xl p-6 mb-6 border-l-4 border-indigo-600">
                <h4 class="text-xl font-bold text-indigo-600 mb-3 flex items-center">
                    <i class="fas fa-cut mr-3 text-2xl"></i>
                    Gynecological Surgery
                </h4>
                <p class="mb-4">
                    Our experienced gynecological surgeons perform a wide range of procedures using both traditional and minimally invasive laparoscopic techniques for faster recovery and better outcomes.
                </p>
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <h5 class="font-bold text-secondary mb-2">Common Procedures:</h5>
                        <ul class="list-disc list-inside space-y-1 text-sm">
                            <li>Hysterectomy (removal of uterus)</li>
                            <li>Myomectomy (fibroid removal)</li>
                            <li>Ovarian cystectomy</li>
                            <li>Endometriosis excision</li>
                            <li>Tubal ligation (permanent contraception)</li>
                            <li>Hysteroscopy for uterine abnormalities</li>
                            <li>Colposcopy and cervical biopsies</li>
                            <li>D&C (dilation and curettage)</li>
                        </ul>
                    </div>
                    <div>
                        <h5 class="font-bold text-secondary mb-2">Laparoscopic Advantages:</h5>
                        <ul class="list-disc list-inside space-y-1 text-sm">
                            <li>Minimal scarring (keyhole surgery)</li>
                            <li>Reduced post-operative pain</li>
                            <li>Shorter hospital stay (1-2 days)</li>
                            <li>Faster return to normal activities</li>
                            <li>Lower infection risk</li>
                            <li>Better visualization for surgeon</li>
                            <li>Less blood loss during surgery</li>
                            <li>Improved cosmetic results</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Infertility Treatment -->
            <div class="bg-gradient-to-r from-rose-50 to-red-100 rounded-xl p-6 mb-6 border-l-4 border-rose-600">
                <h4 class="text-xl font-bold text-rose-600 mb-3 flex items-center">
                    <i class="fas fa-hand-holding-heart mr-3 text-2xl"></i>
                    Infertility Evaluation & Treatment
                </h4>
                <p class="mb-4">
                    Struggling with infertility can be emotionally challenging. Our compassionate fertility specialists provide comprehensive evaluation and treatment options to help couples achieve their dream of parenthood.
                </p>
                <ul class="list-disc list-inside space-y-2 ml-4">
                    <li><strong>Fertility Assessment:</strong> Hormone testing, ovulation tracking, and semen analysis</li>
                    <li><strong>Ultrasound Evaluation:</strong> Follicular study and uterine cavity assessment</li>
                    <li><strong>Hysterosalpingography (HSG):</strong> Tubal patency testing</li>
                    <li><strong>Ovulation Induction:</strong> Medications to stimulate egg production</li>
                    <li><strong>IUI (Intrauterine Insemination):</strong> Artificial insemination procedure</li>
                    <li><strong>Laparoscopic Surgery:</strong> Treatment of endometriosis, fibroids, and tubal blockage</li>
                    <li><strong>Fertility Counseling:</strong> Emotional support and lifestyle modifications</li>
                    <li><strong>IVF Referrals:</strong> Coordination with advanced fertility centers when needed</li>
                </ul>
            </div>

            <!-- Women's Health Checkup Package -->
            <div class="bg-gradient-to-r from-amber-50 to-orange-100 rounded-xl p-6 mb-6 border-l-4 border-amber-600">
                <h4 class="text-xl font-bold text-amber-600 mb-3 flex items-center">
                    <i class="fas fa-clipboard-check mr-3 text-2xl"></i>
                    Comprehensive Women's Health Checkup
                </h4>
                <p class="mb-4">
                    Prevention is better than cure. Our comprehensive health checkup packages are designed to detect potential health issues early and maintain optimal wellness.
                </p>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="bg-white p-4 rounded-lg border-2 border-amber-200">
                        <h5 class="font-bold text-center text-secondary mb-3">Basic Package</h5>
                        <ul class="text-sm space-y-1">
                            <li>✓ Complete physical examination</li>
                            <li>✓ Blood pressure & BMI</li>
                            <li>✓ Complete blood count</li>
                            <li>✓ Blood sugar (fasting)</li>
                            <li>✓ Thyroid function test</li>
                            <li>✓ Pap smear</li>
                            <li>✓ Breast examination</li>
                            <li>✓ Pelvic ultrasound</li>
                        </ul>
                    </div>
                    <div class="bg-white p-4 rounded-lg border-2 border-amber-400">
                        <h5 class="font-bold text-center text-secondary mb-3">Advanced Package</h5>
                        <ul class="text-sm space-y-1">
                            <li>✓ All Basic Package tests</li>
                            <li>✓ Lipid profile</li>
                            <li>✓ Liver function test</li>
                            <li>✓ Kidney function test</li>
                            <li>✓ Vitamin D & B12 levels</li>
                            <li>✓ Mammography</li>
                            <li>✓ Bone density scan</li>
                            <li>✓ CA-125 (cancer marker)</li>
                        </ul>
                    </div>
                    <div class="bg-white p-4 rounded-lg border-2 border-amber-200">
                        <h5 class="font-bold text-center text-secondary mb-3">Premium Package</h5>
                        <ul class="text-sm space-y-1">
                            <li>✓ All Advanced Package tests</li>
                            <li>✓ Cardiac risk assessment</li>
                            <li>✓ Hormone panel (complete)</li>
                            <li>✓ Stress test evaluation</li>
                            <li>✓ Nutritional assessment</li>
                            <li>✓ Genetic counseling</li>
                            <li>✓ Dermatology consultation</li>
                            <li>✓ Personalized health report</li>
                        </ul>
                    </div>
                </div>
            </div>

            <h3 class="text-2xl font-bold text-primary mt-10 mb-4">State-of-the-Art Facilities</h3>
            <div class="grid md:grid-cols-2 gap-6 mb-8">
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg p-5 border-l-4 border-primary">
                    <h5 class="font-bold text-secondary mb-3 flex items-center">
                        <i class="fas fa-hospital text-primary text-xl mr-2"></i>
                        Labor & Delivery Suites
                    </h5>
                    <ul class="text-sm space-y-2">
                        <li>• Private, spacious labor rooms with en-suite bathrooms</li>
                        <li>• Advanced fetal monitoring systems</li>
                        <li>• Comfortable birthing positions and mobility aids</li>
                        <li>• Partner/family accommodation facilities</li>
                        <li>• Immediate access to operation theater</li>
                        <li>• Ambient lighting and soothing environment</li>
                    </ul>
                </div>
                <div class="bg-gradient-to-br from-pink-50 to-pink-100 rounded-lg p-5 border-l-4 border-pink-500">
                    <h5 class="font-bold text-secondary mb-3 flex items-center">
                        <i class="fas fa-baby text-pink-500 text-xl mr-2"></i>
                        Neonatal Intensive Care Unit (NICU)
                    </h5>
                    <ul class="text-sm space-y-2">
                        <li>• Level II NICU for premature and sick newborns</li>
                        <li>• Advanced incubators and ventilators</li>
                        <li>• 24/7 neonatologist and pediatrician coverage</li>
                        <li>• Phototherapy for jaundice treatment</li>
                        <li>• Continuous vital signs monitoring</li>
                        <li>• Kangaroo mother care support</li>
                    </ul>
                </div>
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-lg p-5 border-l-4 border-purple-600">
                    <h5 class="font-bold text-secondary mb-3 flex items-center">
                        <i class="fas fa-microscope text-purple-600 text-xl mr-2"></i>
                        Diagnostic Services
                    </h5>
                    <ul class="text-sm space-y-2">
                        <li>• 3D/4D ultrasound imaging</li>
                        <li>• Color Doppler studies</li>
                        <li>• Fetal echocardiography</li>
                        <li>• In-house pathology laboratory</li>
                        <li>• Amniocentesis and CVS (when needed)</li>
                        <li>• Non-stress test (NST) monitoring</li>
                    </ul>
                </div>
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-lg p-5 border-l-4 border-success">
                    <h5 class="font-bold text-secondary mb-3 flex items-center">
                        <i class="fas fa-procedures text-success text-xl mr-2"></i>
                        Modern Operation Theaters
                    </h5>
                    <ul class="text-sm space-y-2">
                        <li>• Modular OTs with laminar airflow</li>
                        <li>• Advanced laparoscopic equipment</li>
                        <li>• State-of-the-art anesthesia workstations</li>
                        <li>• Emergency obstetric setup</li>
                        <li>• Surgical lighting and imaging systems</li>
                        <li>• Infection control protocols</li>
                    </ul>
                </div>
            </div>

            <h3 class="text-2xl font-bold text-primary mt-10 mb-4">Why Choose Medinine Hospital?</h3>
            <div class="grid md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white rounded-lg shadow-md p-5 text-center hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-pink-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-award text-3xl text-white"></i>
                    </div>
                    <h5 class="font-bold text-secondary mb-2">Experienced Team</h5>
                    <p class="text-sm text-gray-600">Senior gynecologists and obstetricians with 15+ years of expertise</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-5 text-center hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shield-alt text-3xl text-white"></i>
                    </div>
                    <h5 class="font-bold text-secondary mb-2">Safety First</h5>
                    <p class="text-sm text-gray-600">Strict infection control and international safety protocols</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-5 text-center hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-user-clock text-3xl text-white"></i>
                    </div>
                    <h5 class="font-bold text-secondary mb-2">24/7 Availability</h5>
                    <p class="text-sm text-gray-600">Round-the-clock obstetric and emergency gynecology services</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-5 text-center hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-hands-helping text-3xl text-white"></i>
                    </div>
                    <h5 class="font-bold text-secondary mb-2">Personalized Care</h5>
                    <p class="text-sm text-gray-600">Individual attention and customized treatment plans</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-5 text-center hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-file-invoice-dollar text-3xl text-white"></i>
                    </div>
                    <h5 class="font-bold text-secondary mb-2">Transparent Pricing</h5>
                    <p class="text-sm text-gray-600">Clear cost estimates and insurance support</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-5 text-center hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-heartbeat text-3xl text-white"></i>
                    </div>
                    <h5 class="font-bold text-secondary mb-2">Holistic Approach</h5>
                    <p class="text-sm text-gray-600">Physical, emotional, and mental wellness support</p>
                </div>
            </div>

            <div class="bg-gradient-to-r from-primary to-blue-600 text-white rounded-xl p-8 mt-10">
                <h3 class="text-2xl font-bold mb-4 text-center">Your Journey to Motherhood Starts Here</h3>
                <p class="text-center mb-6 text-lg">
                    Whether you're planning a pregnancy, expecting a baby, or seeking gynecological care, our expert team is here to support you every step of the way. Book your appointment today for compassionate, personalized care.
                </p>
                <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
                    <a href="/appointment-booking-online.php" class="bg-white text-primary px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300 flex items-center justify-center space-x-2">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Book Appointment</span>
                    </a>
                    <a href="tel:8668289254" class="bg-accent text-white px-8 py-3 rounded-lg font-semibold hover:bg-red-700 transition duration-300 flex items-center justify-center space-x-2">
                        <i class="fas fa-phone"></i>
                        <span>Call: 8668289254</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-secondary mb-10">Frequently Asked Questions</h2>
        <div class="max-w-4xl mx-auto space-y-4">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <button class="w-full text-left px-6 py-4 font-semibold text-secondary hover:bg-gray-50 transition duration-300 flex justify-between items-center" onclick="toggleFAQ(this)">
                    <span>When should I start prenatal care?</span>
                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-gray-600">You should schedule your first prenatal visit as soon as you suspect you're pregnant or get a positive pregnancy test. Ideally, this should be around 6-8 weeks after your last menstrual period. Early prenatal care is crucial for monitoring your health and your baby's development.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <button class="w-full text-left px-6 py-4 font-semibold text-secondary hover:bg-gray-50 transition duration-300 flex justify-between items-center" onclick="toggleFAQ(this)">
                    <span>What is the difference between a normal delivery and C-section?</span>
                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-gray-600">Normal delivery (vaginal birth) is when the baby is delivered naturally through the birth canal. C-section is a surgical procedure where the baby is delivered through an incision in the abdomen and uterus. Normal delivery typically has faster recovery, while C-section may be necessary for medical reasons such as breech position, fetal distress, or complications.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <button class="w-full text-left px-6 py-4 font-semibold text-secondary hover:bg-gray-50 transition duration-300 flex justify-between items-center" onclick="toggleFAQ(this)">
                    <span>Do you offer epidural for pain relief during labor?</span>
                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-gray-600">Yes, we offer epidural anesthesia for pain management during labor. Our experienced anesthesiologists can administer epidurals safely. However, the decision to use epidural is made based on your preference, labor progress, and medical suitability. We also offer other pain management options.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <button class="w-full text-left px-6 py-4 font-semibold text-secondary hover:bg-gray-50 transition duration-300 flex justify-between items-center" onclick="toggleFAQ(this)">
                    <span>Can my partner stay with me during delivery?</span>
                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-gray-600">Yes, we encourage and welcome birth partners to be present during labor and delivery (including normal delivery). For C-sections, partners can usually be present once the baby is delivered. Having a support person can make the experience more comfortable and memorable.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <button class="w-full text-left px-6 py-4 font-semibold text-secondary hover:bg-gray-50 transition duration-300 flex justify-between items-center" onclick="toggleFAQ(this)">
                    <span>What tests are included in prenatal care?</span>
                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-gray-600">Prenatal care includes blood tests (blood group, hemoglobin, blood sugar, thyroid), urine tests, ultrasound scans (dating scan, NT scan, anomaly scan, growth scans), blood pressure monitoring, weight tracking, and screening for infections. Additional tests may be recommended based on individual risk factors.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <button class="w-full text-left px-6 py-4 font-semibold text-secondary hover:bg-gray-50 transition duration-300 flex justify-between items-center" onclick="toggleFAQ(this)">
                    <span>When can I resume normal activities after delivery?</span>
                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-gray-600">After normal delivery, most women can resume light activities within a few days and return to normal activities within 2-3 weeks. After C-section, recovery takes 4-6 weeks. Avoid heavy lifting and strenuous exercise initially. Your doctor will provide specific guidelines based on your recovery progress.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <button class="w-full text-left px-6 py-4 font-semibold text-secondary hover:bg-gray-50 transition duration-300 flex justify-between items-center" onclick="toggleFAQ(this)">
                    <span>Do you provide breastfeeding support?</span>
                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-gray-600">Yes, we have dedicated lactation consultants who provide hands-on support with breastfeeding techniques, latch positioning, and addressing common challenges like low milk supply or sore nipples. We encourage early initiation of breastfeeding and provide guidance throughout your hospital stay and postpartum period.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <button class="w-full text-left px-6 py-4 font-semibold text-secondary hover:bg-gray-50 transition duration-300 flex justify-between items-center" onclick="toggleFAQ(this)">
                    <span>What should I do if I experience bleeding or complications after delivery?</span>
                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-gray-600">Contact us immediately if you experience heavy bleeding (soaking more than one pad per hour), severe abdominal pain, fever, foul-smelling discharge, chest pain, or difficulty breathing. Our emergency department is available 24/7 to address postpartum complications. We also provide a helpline number for post-discharge queries.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Patient Testimonials -->
<section class="py-16 bg-gradient-to-br from-pink-50 to-purple-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-secondary mb-10">What Our Patients Say</h2>
        <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">
            <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition-all duration-300">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-pink-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                        SP
                    </div>
                    <div>
                        <h5 class="font-bold text-secondary">Sneha Patil</h5>
                        <div class="flex text-yellow-500">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 text-sm italic">"The doctors and staff at Medinine Hospital made my delivery experience so comfortable and stress-free. I had a normal delivery and the support I received was exceptional. Highly recommended!"</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition-all duration-300">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                        PD
                    </div>
                    <div>
                        <h5 class="font-bold text-secondary">Priya Deshmukh</h5>
                        <div class="flex text-yellow-500">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 text-sm italic">"I had a high-risk pregnancy and Dr. Sharma managed everything perfectly. My baby was delivered safely via C-section. The NICU facilities are excellent. Thank you to the entire team!"</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition-all duration-300">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold mr-3">
                        AK
                    </div>
                    <div>
                        <h5 class="font-bold text-secondary">Anjali Khandekar</h5>
                        <div class="flex text-yellow-500">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 text-sm italic">"Best maternity hospital in Nagpur! The gynecology department is top-notch. I underwent laparoscopic surgery and the recovery was so quick. Very professional and caring staff."</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-12 gradient-primary text-white text-center">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-4">Your Health, Our Priority</h2>
        <p class="mb-6 max-w-3xl mx-auto text-lg">
            From routine checkups to complex surgeries, our expert team is dedicated to providing you with the highest quality maternity and gynecology care in Nagpur.
        </p>
        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
            <a href="/appointment-booking-online.php" class="bg-accent hover:bg-red-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 inline-flex items-center justify-center space-x-2 shadow-lg hover:shadow-xl transform hover:scale-105">
                <i class="fas fa-calendar-check"></i>
                <span>Book Your Appointment</span>
            </a>
            <a href="tel:8668289254" class="bg-white text-primary hover:bg-gray-100 px-8 py-4 rounded-lg text-lg font-semibold transition duration-300 inline-flex items-center justify-center space-x-2">
                <i class="fas fa-phone-volume"></i>
                <span>Call: 8668289254</span>
            </a>
        </div>
    </div>
</section>

<script>
// FAQ Toggle Function
function toggleFAQ(button) {
    const content = button.nextElementSibling;
    const icon = button.querySelector('i');
    
    // Close all other FAQs
    document.querySelectorAll('.fa-chevron-down').forEach(i => {
        if (i !== icon && i.classList.contains('rotate-180')) {
            i.classList.remove('rotate-180');
            i.parentElement.nextElementSibling.classList.add('hidden');
        }
    });
    
    // Toggle current FAQ
    content.classList.toggle('hidden');
    icon.classList.toggle('rotate-180');
}

// Call tracking
document.querySelectorAll('a[href^="tel:"]').forEach(link => {
    link.addEventListener('click', function() {
        if (typeof gtag !== 'undefined') {
            gtag('event', 'maternity_call', {
                'event_category': 'Maternity & Gynecology',
                'event_label': 'Consultation Call'
            });
        }
    });
});

// Appointment tracking
document.querySelectorAll('a[href*="appointment"]').forEach(link => {
    link.addEventListener('click', function() {
        if (typeof gtag !== 'undefined') {
            gtag('event', 'maternity_appointment_click', {
                'event_category': 'Maternity & Gynecology',
                'event_label': 'Appointment Booking'
            });
        }
    });
});

// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});
</script>

<style>
/* Hero Background */
.hero-pattern::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
        linear-gradient(135deg, rgba(219, 39, 119, 0.8) 0%, rgba(147, 51, 234, 0.8) 100%),
        url('/assets/images/maternity-hero-bg.jpg') center/cover no-repeat;
    z-index: -1;
}

.rotate-180 {
    transform: rotate(180deg);
}

/* Smooth animations */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Scroll margin for anchor links */
.prose h3, .prose h4 {
    scroll-margin-top: 100px;
}

/* Pulse animation for call button */
@keyframes pulse-border {
    0%, 100% {
        box-shadow: 0 0 0 0 rgba(220, 38, 38, 0.7);
    }
    50% {
        box-shadow: 0 0 0 10px rgba(220, 38, 38, 0);
    }
}

.animate-pulse-border {
    animation: pulse-border 2s infinite;
}

/* Hover effects for cards */
.hover-lift {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.hover-lift:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
}
</style>

<?php include 'includes/footer.php'; ?>
