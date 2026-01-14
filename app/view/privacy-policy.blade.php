
@include('common.head')


  <!-- Preloader full screen -->
  <script>
  window.addEventListener("load", function() {
    const preloader = document.getElementById("preloader");

    // Delay hiding 
    setTimeout(() => {
      preloader.classList.add("hidden");
    }, 500); // 
  });
</script>




<div id="preloader">
<img src="/Images/SwiftRoute-Logo-SVG.svg" alt="Logo" id="preloader-logo">
</div>


<body>
    
@include('common.headers')


<!---------------- HERO SECTION ---------------->

  <div class="page-hero-image">
        <div class="page-hero-overlay">
            <h1 class="fade-scale">Privacy Policy</h1>
            <p class="fade-scale"> <a class="sr-hme-a" href="https://swiftroutegh.com"><span
                        class="sr-home">Home</span> </a> / <span class="pns">Privacy Policy</span> </p>
        </div>
  </div>















<section id="privacy" class="pp-wrapper">
  

  <div class="pp-content">
    <div class="pp-hero">
    <h1>Privacy Statement</h1>
    <p>Swift Route Ltd. is committed to protecting your personal data in accordance with the Data 
Protection Act, 2012 (Act 843) of Ghana. We value your trust and are dedicated to handling 
your information lawfully, fairly, and securely</p>
  </div>
    <article class="pp-card">
      <h2>Our Commitment to You</h2>
      <ul class="pp-bullets">
        <li><strong>Lawful Processing:</strong> : We collect and process personal data only for legitimate 
business purposes and in line with the principles of the Data Protection Act.</li>
        <li><strong>Transparency:</strong>  We ensure you are informed about the type of personal data we 
collect, the purpose of processing, and your rights.</li>
        <li><strong>Confidentiality &amp; Security:</strong> We apply appropriate technical and organizational 
measures to protect your personal data against unauthorized access, loss, or 
misuse</li>
        <li><strong>Data Minimization:</strong>  We collect only the personal data that is relevant and necessary 
for the services we provide</li>
        <li><strong>Retention:</strong> We keep your data only as long as necessary to fulfil the purposes for 
which it was collected, or as required by law</li>
      </ul>
    </article>

    <article class="pp-card">
      <h2>Collection of Personal Data</h2>
      <p>In the course of your engagement with us or with third parties through our Platforms, we may 
collect your Personal Data in the following ways:
</p>
      <ol class="pp-list">
        <li><strong>Automatic Information Collection:</strong> We may automatically collect Information upon your 
engagement with us or our Platforms through your computer, mobile phones, forms, 
documents made available to us, other access devices like a web service call. We also 
collect information through our use of cookies to customize your experience of our Platform 
and to improve account security. You may decline our use of cookies, unless same is 
mandatory for the use of our Platform. Please note however that refusal to permit the use of 
cookies may affect your use of our Platform</li>
        <li><strong>Information from Downloads:</strong>  When you download or use our digital Platforms, or 
access any of our sites, we may receive information about your location and your mobile 
device, including a unique identifier for your device. We may use this information to provide 
you with location-based services, such as advertisements, search results, and other 
personalized content. You may disable your location in the settings menu of the device</li>
        <li><strong>Physically or Digitally Provided Information:</strong>: We may collect and process your 
information when you create and/or update your account on our Platform; complete forms, 
questionnaires, surveys etc. We may also collect Information from the data you provide to 
us through documents, letters, e-mail, agreements, correspondence, ID cards, passports, 
or through any other means by which you willfully provide information to us</li>
        <li><strong>Third Parties:</strong>: We may also receive your information from third parties such as relatives, 
guardians, financial institutions, vendors, and service providers etc</li>
        <li><strong>Social Media:</strong> : We also receive Information through your engagements with us on social 
media sites (e.g., Facebook, Instagram, LinkedIn, Twitter, and WhatsApp). This includes but 
is not limited to your replies to our posts, your comments, enquiries, messages to us, etc</li>
      </ol>
    </article>

    <article class="pp-card">
      <h2>How We Use Your Data</h2>
      <ul class="pp-bullets">
        <li>To provide and improve our services</li>
        <li>To comply with legal and regulatory requirements</li>
        <li>To communicate with you regarding services, updates, or support</li>
        <li>To protect the security of our systems and users</li>
      </ul>
    </article>

    <article class="pp-card">
      <h2>Your Rights Under the Act</h2>
      <p>As a data subject, you have the right to:</p>
      <ul class="pp-bullets">
        <li>Request access to the personal data we hold about you</li>
        <li>Request corrections or updates of inaccurate information</li>
        <li>Request deletion of your personal data, subject to legal and contractual requirements</li>
        <li>Object to or restrict the processing of your data in certain circumstances</li>
        <li>Withdraw consent, where processing is based on consent</li>
      </ul>
    </article>

    <article class="pp-card">
      <h2>Cookies</h2>
      <p>Cookies are small pieces of data, stored in text files, that are stored on your computer or 
other device when websites are loaded in a browser, and which collect information about 
user actions on a site. These technologies are used to recognize users as customers; 
customize services, content, and advertising; measure promotional effectiveness; help 
ensure that account security is not compromised; mitigate risk and prevent fraud; and to 
promote trust and safety on our Platform. We also use cookies to collect and use data as 
part of our services, recognize your browser or device, learn more about your interests, and 
provide you with essential features and services. This applies to our websites and Platforms 
alone</p>
    </article>

    <article class="pp-card">
      <h2>Contact Us</h2>
      <p>If you have questions about how we handle your personal data or wish to exercise your rights under the Data Protection Act, please contact us:</p>
      <p class="pp-contact"><a href="mailto:dpo@swiftroutegh.com">dpo@swiftroutegh.com</a></p>
    </article>
  </div>
</section>




<!------------- Back to Top Button ------------->
<button id="backToTop" onclick="scrollToTop()">&uarr; </button>

<script>
    // Show button when user scrolls down 200px
    window.onscroll = function() {
        let button = document.getElementById("backToTop");
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            button.style.display = "block";
        } else {
            button.style.display = "none";
        }
    };

    // Scroll to top function
    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
</script>










<!---------------------------- FOOTER -------------------------->
 @include('.common.footer')

</body>
</html>