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
            <h1 class="fade-scale">FAQs</h1>
            <p class="fade-scale"> <a class="sr-hme-a" href="https://swiftroutegh.com"><span
                        class="sr-home">Home</span> </a> / <span class="pns">FAQs</span> </p>
        </div>
  </div>







<section class="faq-section">
  <h2 class="fade-in-section">Frequently Asked Questions (FAQs)</h2>

  <!-- Getting Started -->
  <div class="faq-category fade-in-section">Getting Started</div>
  
  <div class="faq-item fade-in-section">
    <button class="faq-question fade-in-section">What is Swift Route?</button>
    <div class="faq-answer">
      <p>Swift Route is a Ghana-based fintech platform offering secure, fast, and affordable financial solutions — including payment gateway services,  IVR-enabled services, remittances, and merchant tools.</p>
    </div>
  </div>

  <div class="faq-item fade-in-section">
    <button class="faq-question fade-in-section">Who can use Swift Route?</button>
    <div class="faq-answer">
      <p>Both individuals and businesses can use Swift Route. We serve merchants, freelancers, NGOs, enterprises, and anyone who needs to send, receive, or manage funds.</p>
    </div>
  </div>

  <div class="faq-item fade-in-section">
    <button class="faq-question fade-in-section">How do I sign up?</button>
    <div class="faq-answer">
      <p>Click the "Get Started" button on our homepage. Choose a personal account or a business/merchant account, then complete KYC and verification to activate services.</p>
    </div>
  </div>

  <!-- Payments & Wallets -->
  <div class="faq-category fade-in-section">Payments & Wallets</div>

  <div class="faq-item fade-in-section">
    <button class="faq-question fade-in-section">What payment methods does Swift Route support?</button>
    <div class="faq-answer">
      <p>We support card payments (Visa, Mastercard), mobile money (MTN, Vodafone, AirtelTigo), bank transfers, and wallet-to-wallet transactions — all in one platform.</p>
    </div>
  </div>

  <div class="faq-item fade-in-section">
    <button class="faq-question fade-in-section">Can I receive international payments?</button>
    <div class="faq-answer">
      <p>Yes. You can receive payments from abroad directly into your  IVR-enabled services or local bank account, with real-time remittance tracking.</p>
    </div>
  </div>

  <div class="faq-item fade-in-section">
    <button class="faq-question fade-in-section">How does the wallet system work?</button>
    <div class="faq-answer">
      <p>Once verified, you can create a multi-currency wallet to send, receive, and store funds, make payments, and withdraw to your bank or mobile money account.</p>
    </div>
  </div>

  <!-- Merchant Services -->
  <div class="faq-category fade-in-section">Merchant Services</div>

  <div class="faq-item fade-in-section">
    <button class="faq-question">How can my business accept payments using Swift Route?</button>
    <div class="faq-answer">
      <p>After registering as a merchant, you’ll receive API access, checkout integration tools, and a dashboard to accept payments via card, wallet, and mobile money.</p>
    </div>
  </div>

  <div class="faq-item fade-in-section">
    <button class="faq-question fade-in-section">Can I track payments in real time?</button>
    <div class="faq-answer">
      <p>Yes. The merchant dashboard provides real-time transaction logs, analytics, settlement timelines, and payout summaries.</p>
    </div>
  </div>

  <div class="faq-item fade-in-section">
    <button class="faq-question fade-in-section">Does Swift Route support bulk payouts?</button>
    <div class="faq-answer">
      <p>Absolutely. Our bulk payment tools allow you to process thousands of disbursements with scheduling and approval workflows.</p>
    </div>
  </div>

  <!-- Security & Compliance -->
  <div class="faq-category fade-in-section">Security & Compliance</div>

  <div class="faq-item fade-in-section">
    <button class="faq-question fade-in-section">Is Swift Route secure and regulated?</button>
    <div class="faq-answer">
      <p>Yes. We are PCI-DSS certified and compliant with ISO 20022 and ISO 8583 standards. All data is encrypted and managed under strict regulatory oversight.</p>
    </div>
  </div>

  <div class="faq-item fade-in-section">
    <button class="faq-question fade-in-section">What KYC documents do I need?</button>
    <div class="faq-answer">
      <p>Individuals: Valid ID and proof of address.<br>Businesses: Business registration documents, TIN certificate, and a representative’s ID.</p>
    </div>
  </div>

  <div class="faq-item fade-in-section">
    <button class="faq-question fade-in-section">How do you handle fraud or disputes?</button>
    <div class="faq-answer">
      <p>Our dedicated compliance team instantly flags suspicious activity. Disputes can be raised via the dashboard or support center.</p>
    </div>
  </div>

  <!-- Technical & Integration -->
  <div class="faq-category fade-in-section">Technical & Integration</div>

  <div class="faq-item fade-in-section">
    <button class="faq-question fade-in-section">Do you offer APIs for developers?</button>
    <div class="faq-answer">
      <p>Yes. We provide secure REST APIs with sandbox access, detailed documentation, and technical support.</p>
    </div>
  </div>

  <div class="faq-item fade-in-section">
    <button class="faq-question fade-in-section">Can I customize my payment checkout?</button>
    <div class="faq-answer">
      <p>Yes. Merchants can fully customize the checkout interface — including logo, colors, and user flow.</p>
    </div>
  </div>

  <div class="faq-item fade-in-section">
    <button class="faq-question fade-in-section">How can I test your system before going live?</button>
    <div class="faq-answer">
      <p>Use our sandbox environment with test credentials, simulated data, and performance feedback tools in the developer portal.</p>
    </div>
  </div>
</section>

<script>
  document.querySelectorAll('.faq-question').forEach(button => {
    button.addEventListener('click', () => {
      button.classList.toggle('active');
      const answer = button.nextElementSibling;
      answer.style.maxHeight = answer.style.maxHeight ? null : answer.scrollHeight + "px";
    });
  });
</script>











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