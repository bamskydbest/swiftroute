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
            <h1 class="fade-scale">Product & Services</h1>
            <p class="fade-scale"> <a class="sr-hme-a" href="https://swiftroutegh.com"><span
                        class="sr-home">Home</span> </a> / <span class="pns">Product & Services</span> </p>
        </div>
  </div>






<!---------------- PAYMENT GATEWAY SECTION ---------------->




<section id="payment-gat" class="payment-gat fade-in-section">


    <div>

        <h2>Payment Gateway</h2>
        <p>Swift Route provides a robust, multi-channel payment gateway that supports card payments, bank transfers, mobile money, and wallets. Merchants can receive payments seamlessly from both local and international customers. Our system is built for reliability with real-time transaction processing and instant confirmation. Easily integrates with websites, apps, and POS systems via secure APIs. Optimized for high-volume businesses, e-commerce, and recurring payments.</p>

    </div>


    <div>
        <img class="fade-scale" src="/Images/bags-retail-black-woman-with-credit-card-smartphone-ecommerce-grey-studio-background-female-person-shopper-model-with-cellphone-boutique-items-purchase-with-shopping-smile.jpg" alt="image">

    </div>

</section>


<!---------------- MERCHANT SOLUTIONS SECTION ---------------->


<section id="merchant-sol" class="merchant-sol">


     
    <div>
        <img class="fade-scale" src="/Images/african-american-woman-with-card-payment.jpg" alt="image">
    </div>
    

    <div class="fade-in-section">
        <h2>Merchant Solutions</h2>
        <p>
            Businesses can be 
onboarded as Swift Route 
Merchants as PSPs are not 
permitted to operate account to manage transactions, monitor performance, and settle payments efficiently. Enjoy low transaction costs, fast payouts, and access to business-friendly financial tools. The dedicated merchant dashboard gives full visibility into transaction data and user activity. Supports bulk payouts, refunds, and settlement reports. Comes with customizable invoicing and customer payment links.
        </p>
    </div>

 

</section>






<!---------------- VIRTUAL WALLET SECTION ---------------->




<section id="virtual-wal" class="virtual-wal">


    <div class="fade-in-section">

        <h2> IVR-Enabled Services</h2>
        <p>Users can create personal or business wallets with multi-currency support for flexible money management. Supports wallet-to-wallet, wallet-to-bank, and wallet-to-mobile money transfers. Customers can store funds securely and transact globally with real-time conversion. Ideal for individuals, freelancers, and gig workers expecting international remittances. Wallets are protected with advanced security and biometric access.</p>

    </div>


    <div>
        <img class="fade-scale" src="/Images/woman-wearing-wireless-earbuds-using-mobile-phone.jpg" alt="man making-transaction-using-mobile-bank-application">

    </div>

</section>







<!---------------- REMITTANCE SECTION ---------------->


<section id="remittance" class="remittance">

     <div>
        <img class="fade-scale" src="/Images/businesswoman-using-smartphone-png-business-remix-transparent-background.png" alt="image">

    </div>

    <div class="fade-in-section">

        <h2>Remittance & Transfers</h2>
        <p>Swift Route makes it simple 
to receive international 
remittances directly to your 
bank account or mobile 
wallet. Track every transfer 
in real time and enjoy fast, 
low-cost processing. Our 
services are fully compliant 
with AML/KYC regulations
through our partnerships 
with licensed Money 
Transfer Operators 
(MTOs).</p>

    </div>


   

</section>








<!---------------- BULK PAYOUT SECTION ---------------->




<section id="bulk-payout" class="bulk-payout">


    <div class="fade-in-section">

        <h2>Bulk Payouts</h2>
        <p>Disburse payments to thousands of recipients in a single operation. Ideal for payroll, supplier payments, agent commissions, and NGO disbursements. Supports multiple payment methods: mobile money, and bank transfers. Includes built-in scheduling, automated reconciliation, and transaction reports. Highly secure with maker-checker workflows for enterprise-grade control.</p>

    </div>


    <div>
        <img class="fade-scale" src="/Images/overjoyed-african-american-businesswoman-making-success-gesture-holding-credit-card-sitting-table-with-laptop.jpg" alt="image">

    </div>

</section>







<!---------------- DIRECT BANK TRANSFER SECTION ---------------->


<section class="direct-bank">

     <div class="fade-scale">
        <img src="/Images/businessman-talking-phone.jpg" alt="image">

    </div>

    <div class="fade-in-section">

        <h2>Direct Bank Transfers</h2>
        <p>Swift Route 
enables seamless direct bank 
account payments for both 
merchants and individuals.Integrated with all major 
banks in Ghana and selected 
international corridors, our 
solution supports same-day 
settlements, automated 
reconciliations, and bulk 
operations. Accessible via 
API or dashboard, it offers 
secure, fully encrypted 
processing compliant with 
PCI-DSS standards, 
ensuring your transactions 
are fast, safe, and reliable</p>

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