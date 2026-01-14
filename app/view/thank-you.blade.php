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






<section class="thank-you">
  <div class="thank-you-box">
    <h1> Thank You!</h1>
    <p>Your message has been successfully submitted.</p>
    <p>Our Swift Route team will get back to you shortly.</p>
    <a href="/https://swiftroutegh.com" class="back-home">Return to Home</a>
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