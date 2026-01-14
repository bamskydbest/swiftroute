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
            <h1 class="fade-scale">LEGAL</h1>
            <p class="fade-scale"> <a class="sr-hme-a" href="https://swiftroutegh.com"><span
                        class="sr-home">Home</span> </a> / <span class="pns">Legal</span> </p>
        </div>
  </div>










<section class="legal-compliance">
  <div class="container">
    <h2 class="section-title fade-in-section">Legal & Compliance</h2>
    <p class="intro-text fade-in-section">
      At Swift Route, the safety and integrity of your data and transactions are our top priority. 
      Our systems follow internationally recognized standards to ensure that every payment, transfer, 
      and wallet interaction is secure and legally protected.
    </p>


    <div class="info-card">
      <h3 id="user-protection">User Protection Policies</h3>
      <h4 id="kyc">KYC/AML Policy</h4>
      <p>All users and merchants must complete KYC verification before gaining full platform access.</p>
      
      <h4 id="data-privacy">Data Privacy</h4>
      <p>We never sell or share your personal or transactional data. We follow Ghana’s Data Protection Act, 2012 (Act 843) and GDPR-aligned controls where applicable.</p>

      <h4 id="dispute-resolution">Transaction Dispute Resolution</h4>
      <ul>
        <li>Users can open a dispute from their dashboard or contact support</li>
        <li>Investigations start within 24 hours</li>
        <li>Refunds/reversals (if applicable) processed within 5–7 business days</li>
      </ul>
    </div>


     <!-- ISIMS Statement -->
    <div class="info-card">
      <h3> Information Security Management System (ISMS) Statement </h3>
      <img src="/Images/iso27001-removebg-preview (1).png" alt="iso logo" style="float: right; margin-left: 15px; margin-bottom: 10px; height: auto; width: 10rem;">
      <p>Swift Route Ltd. regards information as a critical asset. Safeguarding its confidentiality, integrity, and availability is fundamental to the trust we share with our customers, employees, partners, and stakeholders.
To demonstrate this commitment, we have established and maintain an Information Security Management System (ISMS) in line with the ISO/IEC 27001:2022 international standard.
      </p>
      

      <h4 class="isms-h4">Our Commitments</h4>
      <ul>
        <li><strong>Confidentiality:</strong> Ensuring information is accessed only by authorized individuals.</li>
        <li><strong>Integrity:</strong> Safeguarding the accuracy, reliability, and completeness of data.</li>
        <li><strong>Availability:</strong> Guaranteeing that authorized users have timely and reliable access to information and systems when needed.</li>
      </ul> <br>
      <p>This statement reflects Swift Route Ltd.’s dedication to safeguarding the data entrusted to us. We are committed to continuous improvement and to maintaining the trust of all who interact with our services.</p>
    </div>

    <!-- Terms & Policies -->
    <div id="info-card" class="info-card">
      <h3>Terms & Policies</h3>
      <ul  class="policy-links">
        <li><a href="/legal">Terms of Service</a></li>
        <li><a href="/privacy-policy">Privacy Policy</a></li>
        <!-- <li><a href="#">Merchant Agreement</a></li> -->
        <!-- <li><a href="#">API & Integration Terms</a></li> -->
        <li><a href="legal.html#user-protection">Refund & Dispute Policy</a></li>
      </ul>
    </div>

    <!-- Staying Secure -->
    <div class="info-card">
      <h3>Staying Secure as a User</h3>
      <ul>
        <li>Use strong passwords and enable 2FA where available</li> 
        <li>Never share your login or wallet PIN</li> 
        <li>Log out after using shared devices</li> 
        <li>Report suspicious activity to: <a href="mailto:fraud@swiftroutegh.com">fraud@swiftroutegh.com</a></li>
      </ul>
    </div>
  </div>
</section>








<!------------- Back to Top Button ------------->
<button id="backToTop" onclick="scrollToTop()">&uarr;</button>

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