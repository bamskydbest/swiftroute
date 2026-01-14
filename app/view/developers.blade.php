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
            <h1 class="fade-scale">Developers</h1>
            <p class="fade-scale"> <a class="sr-hme-a" href="https://swiftroutegh.com"><span
                        class="sr-home">Home</span> </a> / <span class="pns">Developers</span> </p>
        </div>
  </div>






<section class="dev-portal">

  <!-- Header -->
  <div class="dev-header">
      <h1>Build With Swift Route</h1>
      <p>Our Developer Portal provides everything you need to integrate Swift Route’s robust payment solutions</p>
  </div>

  <!-- Features and Start Building -->
  <div class="dev-card-container">
      <div class="dev-card">
          <img src="/Images/code_18234695.svg" alt="developer tools">
          <h2>Key Developer Features</h2>
          <ul class="dev-list">
              <li>Secure REST APIs for payments, disbursements, and KYC</li>
              <li>Detailed API Documentation with code examples and use cases</li>
              <li>Sandbox Environment for end-to-end testing</li>
              <li>Webhook Support for event notifications</li>
              <li>OAuth 2.0 Authentication</li>
              <li>Real-Time Logs & Debugging Tools</li>
          </ul>
      </div>

      <div class="dev-card">
          <img src="/Images/computer_15125331.svg" alt="settings">
          <h2>Start Building in 3 Steps</h2>
          <ol class="dev-list">
              <li><strong>Create a Developer Account</strong> – <a href="#"><span>Sign up</span></a></li>
              <li><strong>Access Sandbox</strong> – Use test credentials and simulated endpoints</li>
              <li><strong>Move to Production</strong> – Switch live and accept payments securely</li>
          </ol>
      </div>
  </div>

  <!-- Resources and Use Cases -->
  <div class="dev-int-2">
      <div class="dev-card-3">
          <img src="/Images/process_6604083.svg" alt="developer tools">
          <h2>Developer Resources</h2>
          <h3>API Documentation</h3>
          <p>Full reference guide to all endpoints</p>
          <h3>SDKs & Libraries</h3>
          <p>Ready-to-use SDKs for JS, PHP, Python</p>
          <h3>Integration Guides</h3>
          <p>Step-by-step tutorials for payment flows</p>
          <h3>Webhook Setup</h3>
          <p>Receive event notifications and confirmations</p>
          <h3>Postman Collection</h3>
          <p>Quick testing and exploration</p>
      </div>

      <div class="dev-card-3">
          <img src="/Images/analysis_10226678.svg" alt="developer tools">
          <h2>Common Use Cases</h2>
          <ul class="dev-list">
              <li>Accepting payments on websites/apps</li>
              <li>Automating bulk disbursements</li>
              <li>Building custom checkout experiences</li>
              <li>Integrating with mobile money wallets</li>
              <!-- <li>Creating wallets programmatically</li> -->
          </ul>
      </div>
  </div>

  <!-- Support and Security -->
  <div class="dev-card-2-container">
      <div class="dev-card-2">
          <img src="/Images/technical-support_11133727.svg" alt="dev-tools">
          <h2>Technical Support for Developers</h2>
          <ul class="dev-list">
              <li>Email: <a href="mailto:devsupport@swiftroutegh.com">devsupport@swiftroutegh.com</a></li>
              <li>Live Developer Chat in Dashboard</li>
              <li>GitHub (Coming Soon): SDKs & samples</li>
          </ul>
      </div>

      <div class="dev-card-2">
          <img src="/Images/shield_16399379.svg" alt="security">
          <h2>Compliance & Security</h2>
          <ul class="dev-list">
              <li>TLS/SSL encryption</li>
              <li>Rate limiting & token security</li>
              <li>PCI-DSS aligned</li>
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