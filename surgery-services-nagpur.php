<?php
// Page meta information
$page_title = "Advanced Surgery Services in Nagpur | Medinine Hospital";
$page_description = "Medinine Hospital offers comprehensive surgical services in Nagpur including general surgery, laparoscopic surgery, orthopedic surgery, and minimally invasive procedures. Our expert surgical team uses state-of-the-art technology for safe and effective treatments.";
$page_keywords = "surgery services Nagpur, general surgery hospital Nagpur, laparoscopic surgery, minimally invasive surgery, orthopedic surgery Nagpur, surgical procedures, best surgery hospital Nagpur, Medinine Hospital surgery, advanced surgical care, surgical specialists Nagpur";
$canonical_url = "https://medininehospital.com/surgery-services-nagpur";
$og_title = "Comprehensive Surgery Services at Medinine Hospital Nagpur";
$og_description = "Experience world-class surgical care at Medinine Hospital. Our expert surgeons perform a wide range of procedures using advanced technology and minimally invasive techniques for faster recovery and better outcomes.";

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
  "image": "https://medininehospital.com/assets/images/surgery-services.jpg",
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
    "General Surgery",
    "Laparoscopic Surgery",
    "Orthopedic Surgery",
    "Minimally Invasive Surgery"
  ],
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Surgical Services",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "MedicalProcedure",
          "name": "General Surgery",
          "description": "Comprehensive general surgical procedures"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "MedicalProcedure",
          "name": "Laparoscopic Surgery",
          "description": "Minimally invasive surgical techniques"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "MedicalProcedure",
          "name": "Orthopedic Surgery",
          "description": "Advanced bone and joint surgical procedures"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "MedicalProcedure",
          "name": "GI Surgery",
          "description": "Gastrointestinal surgical treatments"
        }
      }
    ]
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "reviewCount": "320"
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
      "name": "Surgery Services",
      "item": "https://medininehospital.com/surgery-services-nagpur"
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
                Advanced <span class="text-gold">Surgery Services</span> in Nagpur
            </h1>
            <p class="text-xl md:text-2xl mb-8 max-w-4xl mx-auto leading-relaxed opacity-90">
                Experience world-class surgical care with cutting-edge technology, expert surgeons, and compassionate support for optimal outcomes.
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6 mb-8">
                <a href="/appointment-booking-online.php" class="bg-accent text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-red-700 transition-all duration-300 flex items-center justify-center space-x-2 shadow-lg hover:shadow-xl transform hover:scale-105">
                    <i class="fas fa-calendar-check"></i>
                    <span>Book Surgery Consultation</span>
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
                    <li class="text-gold">Surgery Services</li>
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
                    <i class="fas fa-heart text-3xl text-white"></i>
                </div>
                <h3 class="text-lg font-bold text-secondary mb-2">24/7 Delivery Care</h3>
                <p class="text-sm text-gray-600">Round-the-clock obstetric and neonatal support</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-check-circle text-3xl text-white"></i>
                </div>
                <h3 class="text-lg font-bold text-secondary mb-2">High-Risk Care</h3>
                <p class="text-sm text-gray-600">Specialized management of complicated pregnancies</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-hospital text-3xl text-white"></i>
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
            <h2 class="text-3xl font-bold text-secondary mb-6">World-Class Surgical Excellence in Nagpur</h2>
            <p>
                At Medinine Hospital, our Department of Surgery stands as a beacon of excellence in Nagpur, offering comprehensive surgical solutions across multiple specialties. We understand that surgery is a significant decision, and our commitment is to provide you with the highest standard of care in a safe, comfortable, and technologically advanced environment. Our surgical team comprises highly qualified, board-certified surgeons with extensive experience in their respective fields, supported by skilled anesthesiologists, dedicated nurses, and trained paramedical staff who work in perfect harmony to ensure optimal outcomes.
            </p>
            <p>
                As one of the **best super-speciality hospitals in Nagpur**, we pride ourselves on our state-of-the-art operation theaters equipped with cutting-edge surgical technology, including high-definition laparoscopic systems, advanced imaging equipment, and modern monitoring systems. Our multidisciplinary approach ensures that every patient receives personalized care tailored to their specific medical needs, from initial consultation through surgery to complete recovery. We maintain strict adherence to international standards of hygiene and infection control, making patient safety our topmost priority.
            </p>

            <h3 class="text-2xl font-bold text-primary mt-8 mb-4">Our Comprehensive Surgical Specialties</h3>
            
            <!-- General Surgery -->
            <div class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl p-6 mb-6 border-l-4 border-primary">
                <h4 class="text-xl font-bold text-primary mb-3 flex items-center">
                    <i class="fas fa-stethoscope mr-3 text-2xl"></i>
                    General Surgery
                </h4>
                <p class="mb-4">
                    Our general surgery department handles a wide spectrum of surgical procedures with precision and care. From routine operations to complex surgical interventions, our experienced surgeons are equipped to manage all types of cases with expertise.
                </p>
                <ul class="list-disc list-inside space-y-2 ml-4">
                    <li><strong>Hernia Repairs:</strong> Advanced techniques for inguinal, umbilical, incisional, and hiatal hernias</li>
                    <li><strong>Appendectomy:</strong> Both open and laparoscopic appendix removal procedures</li>
                    <li><strong>Gallbladder Surgery:</strong> Cholecystectomy for gallstones and gallbladder diseases</li>
                    <li><strong>Thyroid Surgery:</strong> Partial or complete thyroidectomy for thyroid disorders</li>
                    <li><strong>Breast Surgery:</strong> Lumpectomy, mastectomy, and breast reconstruction</li>
                    <li><strong>Soft Tissue Tumor Removal:</strong> Excision of benign and malignant tumors</li>
                    <li><strong>Wound Management:</strong> Complex wound care and debridement</li>
                </ul>
            </div>

            <!-- Laparoscopic Surgery -->
            <div class="bg-gradient-to-r from-green-50 to-green-100 rounded-xl p-6 mb-6 border-l-4 border-success">
                <h4 class="text-xl font-bold text-success mb-3 flex items-center">
                    <i class="fas fa-microscope mr-3 text-2xl"></i>
                    Laparoscopic (Minimally Invasive) Surgery
                </h4>
                <p class="mb-4">
                    Laparoscopic surgery represents the future of surgical care, offering patients smaller incisions, reduced pain, shorter hospital stays, and faster recovery times. Our surgeons are extensively trained in advanced laparoscopic techniques and perform hundreds of minimally invasive procedures annually.
                </p>
                <div class="grid md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <h5 class="font-bold text-secondary mb-2">Benefits of Laparoscopic Surgery:</h5>
                        <ul class="list-disc list-inside space-y-1 text-sm">
                            <li>Minimal scarring and better cosmetic results</li>
                            <li>Less post-operative pain and discomfort</li>
                            <li>Reduced blood loss during surgery</li>
                            <li>Lower risk of infection</li>
                            <li>Shorter hospital stay (often same-day discharge)</li>
                            <li>Faster return to normal activities</li>
                        </ul>
                    </div>
                    <div>
                        <h5 class="font-bold text-secondary mb-2">Common Procedures:</h5>
                        <ul class="list-disc list-inside space-y-1 text-sm">
                            <li>Laparoscopic cholecystectomy (gallbladder removal)</li>
                            <li>Laparoscopic appendectomy</li>
                            <li>Laparoscopic hernia repair</li>
                            <li>Laparoscopic hysterectomy</li>
                            <li>Laparoscopic ovarian cyst removal</li>
                            <li>Diagnostic laparoscopy</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- GI Surgery -->
            <div class="bg-gradient-to-r from-purple-50 to-purple-100 rounded-xl p-6 mb-6 border-l-4 border-purple-600">
                <h4 class="text-xl font-bold text-purple-600 mb-3 flex items-center">
                    <i class="fas fa-stomach mr-3 text-2xl"></i>
                    Gastrointestinal (GI) Surgery
                </h4>
                <p class="mb-4">
                    Our specialized GI surgery department focuses on surgical treatment of diseases affecting the digestive system. We handle complex gastrointestinal conditions with advanced surgical techniques and comprehensive care protocols.
                </p>
                <ul class="list-disc list-inside space-y-2 ml-4">
                    <li><strong>Colorectal Surgery:</strong> Treatment for colon cancer, Crohn's disease, ulcerative colitis, and diverticulitis</li>
                    <li><strong>Bariatric Surgery:</strong> Weight loss procedures including gastric bypass and sleeve gastrectomy</li>
                    <li><strong>Esophageal Surgery:</strong> Treatment for GERD, Barrett's esophagus, and esophageal cancer</li>
                    <li><strong>Liver & Pancreas Surgery:</strong> Complex hepatobiliary and pancreatic procedures</li>
                    <li><strong>Intestinal Surgery:</strong> Small bowel resection and bowel obstruction management</li>
                    <li><strong>Fistula & Fissure Treatment:</strong> Advanced laser and surgical techniques</li>
                    <li><strong>Piles (Hemorrhoids) Treatment:</strong> Modern stappler and laser procedures</li>
                </ul>
            </div>

            <!-- Orthopedic Surgery -->
            <div class="bg-gradient-to-r from-orange-50 to-orange-100 rounded-xl p-6 mb-6 border-l-4 border-warning">
                <h4 class="text-xl font-bold text-warning mb-3 flex items-center">
                    <i class="fas fa-bone mr-3 text-2xl"></i>
                    Orthopedic Surgery
                </h4>
                <p class="mb-4">
                    Our orthopedic surgery department offers comprehensive surgical solutions for bone, joint, ligament, and musculoskeletal disorders. We combine surgical expertise with advanced rehabilitation programs for optimal functional recovery.
                </p>
                <ul class="list-disc list-inside space-y-2 ml-4">
                    <li><strong>Joint Replacement:</strong> Total knee, hip, and shoulder replacement surgeries</li>
                    <li><strong>Arthroscopy:</strong> Minimally invasive joint surgeries for knee, shoulder, and ankle</li>
                    <li><strong>Fracture Management:</strong> Advanced fixation techniques for all types of fractures</li>
                    <li><strong>Spine Surgery:</strong> Discectomy, spinal fusion, and decompression procedures</li>
                    <li><strong>Sports Injury Surgery:</strong> ACL reconstruction, meniscus repair, rotator cuff surgery</li>
                    <li><strong>Hand & Foot Surgery:</strong> Corrective procedures for deformities and injuries</li>
                    <li><strong>Pediatric Orthopedics:</strong> Treatment for congenital and developmental disorders</li>
                </ul>
            </div>

            <!-- Gynecological Surgery -->
            <div class="bg-gradient-to-r from-pink-50 to-pink-100 rounded-xl p-6 mb-6 border-l-4 border-pink-600">
                <h4 class="text-xl font-bold text-pink-600 mb-3 flex items-center">
                    <i class="fas fa-female mr-3 text-2xl"></i>
                    Gynecological Surgery
                </h4>
                <p class="mb-4">
                    Our gynecological surgery services provide comprehensive surgical care for women's health issues, utilizing both traditional and minimally invasive techniques for better outcomes and faster recovery.
                </p>
                <ul class="list-disc list-inside space-y-2 ml-4">
                    <li><strong>Hysterectomy:</strong> Abdominal, vaginal, and laparoscopic uterus removal</li>
                    <li><strong>Myomectomy:</strong> Fibroid removal while preserving the uterus</li>
                    <li><strong>Ovarian Cyst Removal:</strong> Laparoscopic cystectomy and oophorectomy</li>
                    <li><strong>Endometriosis Surgery:</strong> Excision and ablation procedures</li>
                    <li><strong>Tubal Ligation:</strong> Permanent contraception procedures</li>
                    <li><strong>Pelvic Floor Repair:</strong> Treatment for prolapse and incontinence</li>
                    <li><strong>C-Section:</strong> Safe cesarean delivery with experienced obstetricians</li>
                </ul>
            </div>

            <!-- Urological Surgery -->
            <div class="bg-gradient-to-r from-cyan-50 to-cyan-100 rounded-xl p-6 mb-6 border-l-4 border-cyan-600">
                <h4 class="text-xl font-bold text-cyan-600 mb-3 flex items-center">
                    <i class="fas fa-kidneys mr-3 text-2xl"></i>
                    Urological Surgery
                </h4>
                <p class="mb-4">
                    Our urology department offers advanced surgical treatments for conditions affecting the urinary tract and male reproductive system, with a focus on minimally invasive endoscopic procedures.
                </p>
                <ul class="list-disc list-inside space-y-2 ml-4">
                    <li><strong>Kidney Stone Surgery:</strong> PCNL, RIRS, and laser lithotripsy</li>
                    <li><strong>Prostate Surgery:</strong> TURP, laser prostatectomy, and prostate cancer surgery</li>
                    <li><strong>Bladder Surgery:</strong> TURBT for bladder tumors and cystectomy</li>
                    <li><strong>Urethral Surgery:</strong> Urethral stricture treatment and reconstruction</li>
                    <li><strong>Male Infertility Surgery:</strong> Varicocelectomy and vasectomy reversal</li>
                    <li><strong>Kidney Surgery:</strong> Nephrectomy and pyeloplasty</li>
                </ul>
            </div>

            <h3 class="text-2xl font-bold text-primary mt-10 mb-4">Our Surgical Excellence Framework</h3>
            
            <!-- Pre-Operative Care -->
            <div class="mb-8">
                <h4 class="text-xl font-semibold text-secondary mb-3 flex items-center">
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-primary text-white mr-3 font-bold">1</span>
                    Pre-Operative Assessment & Planning
                </h4>
                <p class="mb-3">
                    Every surgical journey at Medinine Hospital begins with comprehensive pre-operative evaluation. Our approach includes:
                </p>
                <ul class="list-disc list-inside space-y-2 ml-12">
                    <li>Detailed medical history review and physical examination</li>
                    <li>Complete diagnostic workup including blood tests, imaging, and specialist consultations</li>
                    <li>Anesthesia evaluation and risk assessment</li>
                    <li>Clear communication about the procedure, risks, benefits, and alternatives</li>
                    <li>Pre-operative instructions for medication, fasting, and preparation</li>
                    <li>Addressing patient concerns and answering all questions</li>
                </ul>
            </div>

            <!-- During Surgery -->
            <div class="mb-8">
                <h4 class="text-xl font-semibold text-secondary mb-3 flex items-center">
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-accent text-white mr-3 font-bold">2</span>
                    Advanced Surgical Techniques & Technology
                </h4>
                <p class="mb-3">
                    Our state-of-the-art operation theaters are equipped with:
                </p>
                <ul class="list-disc list-inside space-y-2 ml-12">
                    <li>High-definition laparoscopic and endoscopic systems</li>
                    <li>Advanced electrosurgical and hemostatic devices</li>
                    <li>Real-time imaging and navigation systems</li>
                    <li>Modern anesthesia workstations with continuous monitoring</li>
                    <li>HEPA filtration and laminar airflow for infection control</li>
                    <li>Emergency backup systems for uninterrupted care</li>
                </ul>
            </div>

            <!-- Post-Operative Care -->
            <div class="mb-8">
                <h4 class="text-xl font-semibold text-secondary mb-3 flex items-center">
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-success text-white mr-3 font-bold">3</span>
                    Post-Operative Recovery & Rehabilitation
                </h4>
                <p class="mb-3">
                    Recovery is a critical phase, and we provide comprehensive support:
                </p>
                <ul class="list-disc list-inside space-y-2 ml-12">
                    <li>Round-the-clock nursing care and monitoring</li>
                    <li>Advanced pain management protocols</li>
                    <li>ICU facilities for critical post-operative care</li>
                    <li>Physiotherapy and rehabilitation services</li>
                    <li>Nutritional counseling and dietary support</li>
                    <li>Regular follow-up consultations and wound care</li>
                    <li>24/7 helpline for post-discharge queries</li>
                </ul>
            </div>

            <h3 class="text-2xl font-bold text-primary mt-10 mb-4">Why Choose Medinine Hospital for Surgery?</h3>
            <div class="grid md:grid-cols-2 gap-6 mb-8">
                <div class="bg-blue-50 rounded-lg p-5 border-l-4 border-primary">
                    <h5 class="font-bold text-secondary mb-2 flex items-center">
                        <i class="fas fa-check-circle text-success mr-2"></i>
                        Experienced Surgical Team
                    </h5>
                    <p class="text-sm">Board-certified surgeons with 15+ years of experience and thousands of successful procedures</p>
                </div>
                <div class="bg-green-50 rounded-lg p-5 border-l-4 border-success">
                    <h5 class="font-bold text-secondary mb-2 flex items-center">
                        <i class="fas fa-check-circle text-success mr-2"></i>
                        Advanced Technology
                    </h5>
                    <p class="text-sm">Latest surgical equipment and minimally invasive techniques for optimal outcomes</p>
                </div>
                <div class="bg-purple-50 rounded-lg p-5 border-l-4 border-purple-600">
                    <h5 class="font-bold text-secondary mb-2 flex items-center">
                        <i class="fas fa-check-circle text-success mr-2"></i>
                        Safety First Approach
                    </h5>
                    <p class="text-sm">Strict infection control protocols and international safety standards compliance</p>
                </div>
                <div class="bg-orange-50 rounded-lg p-5 border-l-4 border-warning">
                    <h5 class="font-bold text-secondary mb-2 flex items-center">
                        <i class="fas fa-check-circle text-success mr-2"></i>
                        Affordable Care
                    </h5>
                    <p class="text-sm">Transparent pricing, insurance support, and flexible payment options</p>
                </div>
                <div class="bg-pink-50 rounded-lg p-5 border-l-4 border-pink-600">
                    <h5 class="font-bold text-secondary mb-2 flex items-center">
                        <i class="fas fa-check-circle text-success mr-2"></i>
                        Comprehensive Care
                    </h5>
                    <p class="text-sm">Integrated care from consultation to complete recovery with multidisciplinary support</p>
                </div>
                <div class="bg-cyan-50 rounded-lg p-5 border-l-4 border-cyan-600">
                    <h5 class="font-bold text-secondary mb-2 flex items-center">
                        <i class="fas fa-check-circle text-success mr-2"></i>
                        Patient-Centric Approach
                    </h5>
                    <p class="text-sm">Compassionate care with clear communication and emotional support throughout your journey</p>
                </div>
            </div>

            <div class="bg-gradient-to-r from-primary to-blue-600 text-white rounded-xl p-8 mt-10">
                <h3 class="text-2xl font-bold mb-4 text-center">Ready for Your Surgical Consultation?</h3>
                <p class="text-center mb-6 text-lg">
                    Our expert surgical team is here to help you make informed decisions about your health. Schedule a consultation today to discuss your surgical options and receive personalized care recommendations.
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
                    <span>How do I prepare for surgery at Medinine Hospital?</span>
                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-gray-600">You will receive detailed pre-operative instructions including fasting guidelines, medication adjustments, and what to bring on the day of surgery. Our team will conduct pre-anesthesia evaluation and answer all your questions during the pre-operative consultation.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <button class="w-full text-left px-6 py-4 font-semibold text-secondary hover:bg-gray-50 transition duration-300 flex justify-between items-center" onclick="toggleFAQ(this)">
                    <span>What is the recovery time for laparoscopic surgery?</span>
                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-gray-600">Recovery time varies by procedure, but laparoscopic surgery typically allows patients to return home within 24-48 hours and resume normal activities within 1-2 weeks. This is significantly faster than traditional open surgery. Your surgeon will provide specific recovery guidelines based on your procedure.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <button class="w-full text-left px-6 py-4 font-semibold text-secondary hover:bg-gray-50 transition duration-300 flex justify-between items-center" onclick="toggleFAQ(this)">
                    <span>Do you accept insurance for surgical procedures?</span>
                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-gray-600">Yes, we work with most major insurance providers. Our dedicated insurance desk will help you understand your coverage, process claims, and coordinate with your insurance company for cashless treatment whenever possible.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <button class="w-full text-left px-6 py-4 font-semibold text-secondary hover:bg-gray-50 transition duration-300 flex justify-between items-center" onclick="toggleFAQ(this)">
                    <span>What safety measures are in place during surgery?</span>
                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-gray-600">We follow strict international safety protocols including WHO surgical safety checklist, advanced sterilization procedures, continuous patient monitoring, emergency backup systems, and dedicated infection control measures. Our surgical team undergoes regular training in safety protocols.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <button class="w-full text-left px-6 py-4 font-semibold text-secondary hover:bg-gray-50 transition duration-300 flex justify-between items-center" onclick="toggleFAQ(this)">
                    <span>Can I get a second opinion before surgery?</span>
                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                </button>
                <div class="px-6 pb-4 hidden">
                    <p class="text-gray-600">Absolutely! We encourage patients to seek second opinions and will be happy to review your medical records and diagnostic reports. You can schedule a consultation with our surgical specialists to discuss your condition and treatment options.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-12 gradient-primary text-white text-center">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-4">Expert Surgical Care When You Need It Most</h2>
        <p class="mb-6 max-w-3xl mx-auto text-lg">
            Trust Medinine Hospital for safe, effective, and compassionate surgical care. Our experienced team is ready to guide you through every step of your surgical journey.
        </p>
        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
            <a href="/appointment-booking-online.php" class="bg-accent hover:bg-red-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 inline-flex items-center justify-center space-x-2 shadow-lg hover:shadow-xl transform hover:scale-105">
                <i class="fas fa-calendar-check"></i>
                <span>Schedule Consultation</span>
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
            gtag('event', 'surgery_consultation_call', {
                'event_category': 'Surgery Services',
                'event_label': 'Surgery Consultation Call'
            });
        }
    });
});

// Appointment tracking
document.querySelectorAll('a[href*="appointment"]').forEach(link => {
    link.addEventListener('click', function() {
        if (typeof gtag !== 'undefined') {
            gtag('event', 'surgery_appointment_click', {
                'event_category': 'Surgery Services',
                'event_label': 'Surgery Appointment Booking'
            });
        }
    });
});
</script>

<style>
/* Custom animations and styles */
.hero-pattern::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
        linear-gradient(135deg, rgba(0, 76, 153, 0.8) 0%, rgba(0, 51, 102, 0.9) 100%),
        url('/assets/images/surgery-hero-bg.jpg') center/cover no-repeat;
    z-index: -1;
}

.rotate-180 {
    transform: rotate(180deg);
}

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

.prose h3, .prose h4 {
    scroll-margin-top: 100px;
}
</style>

<?php include 'includes/footer.php'; ?>
