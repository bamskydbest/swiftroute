@include('.common.head')










<div id="preloader">
<img src="/Images/SwiftRoute-Logo-SVG.svg" alt="Logo" id="preloader-logo">
</div>

<body class="index-page">
    
@include('.common.headers')



<!---------------------------- HERO SECTION -------------------------->
<section class="hero">

  <!---------------------------- Text container -------------------------->
  <div class="hero-text">
    <h1>The Smarter Way <br> to Move Money</h1>
    <p>
      Empowering businesses and individuals in <br>
      Ghana and beyond with secure, real-time <br> payment solutions.
    </p>

    <!---------------------------- App icons -------------------------->
    <div class="play-icons">
      <!-- <a href="#"><img src="Images/play-icon-1.png" alt="Google Play"></a>
      <a href="#"><img src="Images/play-icon-2.png" alt="App Store"></a> -->
      <a href="/sign-up"><button class="play-icons-1"> Get Started </button></a>
      <a href="/products"><button class="play-icons-2"> Explore Our Solutions </button></a>
    </div>
  </div>

  <!---------------------------- Hero image -------------------------->
  <div class="hero-image">
    <img src="/Images/happy-african-man-holding-credit-card-cellphone-his-hands.png" alt="Hand holding phone">
    <!-- <img class="fade-scale" src="Images/close-up-handsome-young-black-man-isolated.png" alt="Hand holding phone"> -->
  </div>




  <!-- Fading Hero Images -->
  <!-- <div class="hero-image">
    <img src="Images/happy-african-man-holding-credit-card-cellphone-his-hands.png" alt="Hand holding phone">
    <img src="Images/close-up-handsome-young-black-man-isolated.png" alt="Lady with phone">
    <img src="Images/lady-with-phone-cmp.png" alt="Collect payments GIF">
    <img src="Images/hand_holding_phone.png" alt="Hand holding phone">
  </div> -->

</section>





<!---------------------------- Access & Intergration Section-------------------------->
 

<section class="access-integration">

  <div class="access-text fade-in-section">
    <h2>Easy to Access & Integrate</h2>
    <p>
      Our platform is designed for easy access, allowing you to manage your payments anytime, anywhere, with seamless integrations into your existing systems.
    </p>
  </div>

  <div class="columns">

    <!-- Left Column -->
    <div class="feature-column">
      <div class="feature-card fade-in-section">
        <img src="/Images/mobile_3262338.svg" alt="payment-icon">
        <span>Merchant Payments</span>
        <p>Accept card, mobile money & bank transfers via one unified API.</p>
      </div>
      <div class="feature-card fade-in-section">
        <img src="/Images/global-banking_8926365.svg" alt="payment-icon">
        <span>International Remittance</span>
        <p>Receive money from 
abroad directly into mobile 
money wallets or bank 
accounts.</p>
      </div>
      <div class="feature-card fade-in-section">
        <img src="/Images/dashboard_16597209.svg" alt="payment-icon">
        <span>Merchant Dashboard</span>
        <p>Track payments, analytics, and payouts in real time from one portal.</p>
      </div>
    </div>

    <!-- Middle Column -->
    <!-- <div class="phone fade-in-section">
      <img src="Images/happy-afro-woman-holding-smartphone-standing-studio-shot.png" alt="Phone">
    </div> -->

    <!-- Right Column -->
    <div class="feature-column">
      <div class="feature-card fade-in-section">
        <img src="/Images/online-payment_17627653.svg" alt="payment-icon">
        <span>Bulk Payouts</span>
        <p>Pay suppliers, employees or agents instantly — locally or cross-border.</p>
      </div>

      <!-- <div class="feature-card fade-in-section">
        <img src="/Images/wallet_9225542.svg" alt="payment-icon">
        <span>Mobile Wallets</span>
        <p>Send, receive and store funds with multi-currency wallet capabilities.</p>
      </div> -->

      <div class="feature-card fade-in-section">
        <img src="/Images/credit-card_726488.svg" alt="payment-icon">
        <span>Secure & Compliant</span>
        <p>ISO 27001:2022, PCI-DSS, Data Protection.</p>
      </div>
    </div>

  </div>

</section>





<section class="who-its-for">
  <h2>Built for Every Financial Journey</h2>
  <div class="who-its-for-container fade-in-section">

    <div class="Merchants card1">
      <div class="card-content">
        <span>For Merchants</span>
        <p>Get paid fast, reduce costs, and manage cash flow with ease.</p>
      </div>
      <img src="/Images/phone-call-baker-laughing-black-man-tablet-online-order-talking-cooking-communication-smile-chef-bakery-technology-food-production-bread-manufacturing-startup-sales.png" alt="Merchants" class="card-img">
    </div>

    <div class="Merchants card2">
      <div class="card-content">
        <span>For Freelancers</span>
        <p>Receive international payments into your wallet or bank.</p>
      </div>
      <img src="/Images/portrait-smiling-african-american-guy-using-laptop.png" alt="Freelancers" class="card-img">
    </div>

    <div class="Merchants card3">
      <div class="card-content">
        <span>For NGOs</span>
        <p>Disburse funds transparently across borders with full traceability.</p>
      </div>
      <img src="/Images/african-american-man-checking-his-smartphone.png" alt="NGOs" class="card-img">
    </div>

    <div class="Merchants card4">
      <div class="card-content">
        <span>For Individuals</span>
        <p>Send and receive remittances securely and affordably.</p>
      </div>
      <img src="/Images/young-african-american-woman-isolated-yellow-background-buying-with-mobile-with-credit-card.png" alt="Individuals" class="card-img">
    </div>

  </div>
</section>



<!------------- How-it-works ------------->

<!-- <section class="how-it-works ">
  <div class="how-card fade-in-section">
    <div class="how-text">
      <h2>Get Started in Minutes</h2>
      <p class="p1">Join hundreds of businesses simplifying payments in Ghana</p>
      <p class="step"> <strong>> Sign Up</strong>  – Create a merchant or personal account.</p> 
      <p class="step"> <strong>> Integrate</strong>  – Use our APIs or tools to connect your system.</p>
      <p class="step"> <strong>> Start Transacting</strong>  – Accept or send payments instantly.</p>

      <div class="how-buttons">
        <a href="/sign-up"><button class="btn">Sign Up</button></a>
        <a href="/developers"><button class="btn outline">Developers</button></a>
      </div>
    </div>

    <div class="how-image">
      <img src="/Images/close-up-handsome-young-black-man-isolated.png" alt="Business illustration">
    </div>
  </div>
</section> -->



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