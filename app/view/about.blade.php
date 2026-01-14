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
            <h1 class="fade-scale">About Swift Route</h1>
            <p class="fade-scale"> <a class="sr-hme-a" href="https://swiftroutegh.com"><span
                        class="sr-home">Home</span> </a> / <span class="pns">About</span> </p>
        </div>
  </div>









<!---------------- WHO WE ARE SECTION ---------------->




<section class="who-we-are fade-in-section">


    <div>

        <h2>Who We Are</h2>
        <p>Swift Route is a next-generation fintech company based in Ghana, purpose-built to meet the payment and financial infrastructure needs of a digitally evolving economy.
We offer a full suite of payment solutions for both businesses and individuals, combining speed, flexibility, and security through a unified digital platform. Our technology powers seamless domestic and international transactions, supports merchant acquisition at scale, and enables inclusive access to modern financial tools. By integrating mobile money, bank transfers,  IVR-enabled services, and bulk disbursement systems, Swift Route serves as the financial backbone for merchants, NGOs, digital platforms, and freelancers across the continent. Whether you’re a small business owner or a global enterprise, we deliver tools that make money movement smarter, faster, and safer.
        </p>

    </div>


    <div class="fade-in-section">
        <!-- <img src="Images/payment.jpg" alt="image"> -->
         <img src="/Images/office-phone-african-businessman-studio-communication-contact-b2b-networking-professional-corporate-happy-person-smartphone-internet-website-chat-gray-background.png" alt="multiple-payment">
         

    </div>

</section>




<!---------------- OUR MISSION & VISION SECTION ---------------->


<section class="mission">

    <div class="mission-container fade-left">
        <img src="/Images/target_4147788.svg" alt="mission icon"> <br>
        <h2>Our Mission</h2>

        <p>
            To simplify and secure the movement of money for businesses and individuals in Africa through smart, compliant, and accessible technology.
        </p>

        

        <!-- <ul class="mission-list">
            <li><span>Affordable</span> — with low to zero transaction fees</li>
            <li><span>Efficient</span> — with instant settlements and transparent reporting</li>
            <li><span>Inclusive</span> — with tools for both urban and underserved users</li>
            <li><span>Scalable</span> — to support everyone from individuals to enterprises</li>
        </ul> -->
    </div>

    <div class="vision-container fade-right">
        <img src="/Images/idea-brain_17143983.svg" alt="vision icon"> <br>
        <h2>Our Vision</h2>
        <p>
            To be Africa’s most trusted financial infrastructure platform — powering payments, remittances, and digital wallets for the future of trade, finance, and inclusion.
            We envision a borderless African economy driven by fintech, where money moves freely and securely between people, businesses, and countries.
        </p>
    </div>

</section>





<!-- -------------- OUR CORE VALUES SECTION ---------------->


<section class="values">

     <div>

    <h2>Our Core Values</h2>

    <div class="values-container fade-in-section">
        
        <h3>Trust</h3>
        <p>Built on security, privacy, and regulatory integrity</p>

    </div>



     <div class="values-container fade-in-section">
        
        <h3>Innovation</h3>
        <p>Modern tools designed to solve real-world financial problems</p>

    </div>


     <div class="values-container fade-in-section">
        
        <h3>Merchant Empowerment</h3>
        <p>Helping businesses grow through smart dashboards and reliable payouts</p>

    </div>



     <div class="values-container fade-in-section">
        
        <h3>Customer-Centricity</h3>
        <p>We design with users, not just systems, in mind</p>

    </div>




        <div class="values-container fade-in-section">
        
        <h3>Global Perspective</h3>
        <p>We bring international-grade infrastructure to local markets</p>

    </div>


   </div>

     <div>
        <img class="fade-right" src="/Images/excited-lady-cell-phone-has-broad-smile.jpg" alt="image">

    </div>

  
</section>







<!---------------- WHAT MAKES US DIFFERENT SECTION ---------------->


<section class="what-makes-us">

<h2>What Makes Us Different</h2>

<div class="what-makes-us-main">
    <div class="what-makes-us-container fade-right">

        <img src="/Images/lock.png" alt="security icon"> <br>
        
        <h3>Compliance & Security</h3>
        <p>
           Data 
Protection, ISO 27001:2022, 
PCI-DSS
        </p>

    </div>



    <div class="what-makes-us-container">

        <img src="/Images/magnetic-card.png" alt="card icon"> <br>
        
        <h3>Multi-Rail Platform</h3>
        <p>
           Card, wallet, bank transfer, and mobile money integration in one interface
        </p>

    </div>


    <div class="what-makes-us-container fade-left">

        <img src="/Images/open-envelope.png" alt="notification icon"> <br>
        
        <h3>Real-Time Settlements</h3>
        <p>
           Instant transaction feedback, remittance tracking, and rapid reconciliation
        </p>

    </div>

</div>




<div class="what-makes-us-main">
    <div class="what-makes-us-container fade-right">

        <img src="/Images/dashboard.png" alt="dashboard icon"> <br>
        
        <h3>Business Intelligence</h3>
        <p>
           Comprehensive merchant dashboards with insights, audit logs, and exportable reports
        </p>

    </div>



    <div class="what-makes-us-container">

        <img src="/Images/cash-in-hand.png" alt="cash-in-hand icon"> <br>
        
        <h3>Cross-Border Functionality</h3>
        <p>
           Designed for 
international remittances 
and diaspora payments, 
ensuring fast, secure, and 
convenient transfers into 
your account.
        </p>

    </div>


    <!-- <div class="what-makes-us-container fade-left">

        <img src="/Images/wallet.png" alt="wallet icon"> <br>
        
        <h3>Custom Wallet Solutions</h3>
        <p>
           Dedicated wallets for users, NGOs, and payment agents with multi-currency support
        </p>

    </div> -->

</div>

</section>







<section class="who-we-serve">
    <h2 class="fade-in-section">Who We Serve</h2>
    <ul>
        <li class="fade-in-section"><strong>Merchants &amp; SMEs</strong> – Accept payments, automate payouts, and scale online or offline sales</li>
        <li class="fade-in-section"><strong>Remittance Operators</strong> – Move funds across borders with speed and full visibility</li>
        <li class="fade-in-section"><strong>NGOs &amp; Enterprises</strong> – Bulk pay suppliers, agents, or beneficiaries securely and efficiently</li>
        <li class="fade-in-section"><strong>Freelancers &amp; Individuals</strong> –“Receive funds 
or pay bill with mobile 
money wallets</li>
    </ul>
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