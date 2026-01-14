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
            <h1 class="fade-scale">Contact</h1>
            <!-- <p class="fade-scale">We’re here to help. Whether you’re a business exploring partnership opportunities, a user needing support, or a developer looking to integrate, reach out and we’ll respond promptly.</p> -->
            <p class="fade-scale"> <a class="sr-hme-a" href="https://swiftroutegh.com"><span
                        class="sr-home">Home</span> </a> / <span class="pns">Contact</span> </p>
        </div>
  </div>

<div class="call-center-rep"><img class="fade-in-section" src="/Images/call-center-smile-portrait-black-woman.jpg" alt="call center image">

<h2 class="fade-in-section">We’d love to hear from you!</h2>
<p class="fade-in-section">We’re here to help. Whether you’re a business exploring partnership opportunities, a user needing support, or a developer looking to integrate, reach out and we’ll respond promptly.</p>

</div>





<section class="contact-section">
  <div class="contact-card fade-in-section">
    <!-- <h2>Get in Touch</h2> -->

    <div class="contact-details">
      <div class="contact-item fade-in-section">
        <h3>General Inquiries</h3>
        <p>For general questions, press, or business collaborations:</p>
        <ul>
          <li>Email: <a href="mailto:info@swiftroutegh.com">info@swiftroutegh.com</a></li>
          <li>Phone: +233 (0)30 000 0000</li>
          <li>Business Hours: Mon – Fri, 9 AM – 5 PM (GMT)</li>
        </ul>
      </div>

      <div class="contact-item fade-in-section">
        <h3>Customer Support</h3>
        <p>Need help with your wallet, transaction, or account?</p>
        <ul>
          <li>Email: <a href="mailto:support@swiftroutegh.com">support@swiftroutegh.com</a></li>
          <!-- <li>Live Chat: Available via our website</li> -->
          <li>WhatsApp: +233 (0)55 000 0000</li>
        </ul>
      </div>

      <div class="contact-item fade-in-section">
        <h3>Developer & Integration</h3>
        <p>API questions or integration issues:</p>
        <ul>
          <li>Email: <a href="mailto:devsupport@swiftroutegh.com">devsupport@swiftroutegh.com</a></li>
          <li>Docs: <a href="https://developer.swiftroutegh.com">developer.swiftroutegh.com</a></li>
          <li>Sandbox: Available upon registration</li>
        </ul>
      </div>

      <div class="contact-item fade-in-section">
        <h3>Office Location</h3>
        <p>Swift Route HQ – Accra, Ghana</p>
        <ul>
          <li>12 Roman Ridge Street, Swift Route Limited</li>
          <li>Accra, Ghana</li>
          <!-- <li>(By appointment only)</li> -->
        </ul>
      </div>
    </div>
  </div>
</section>




<!---------- FORM INPUT and MAP -->

<section class="form-section">
  <!-- Contact Form -->
  <div class="contact-form-section fade-left">
    <h2>Send Us a Message</h2>

    <form class="contact-form" action="https://swiftroutegh.com/submit.php" method="POST">
      <label for="first-name">Full Name *</label>
      <input type="text" id="full-name" name="full_name" required>

      <div id="email-error" class="error-message" style="display: none;"></div>
      <label for="email">Email *</label>
      <input type="email" id="email" name="email" required
             pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"
             title="Enter a valid email address (e.g. example@domain.com)">

      <div id="phone-error" class="error-message" style="display: none;"></div>
      <label for="phone">Phone Number *</label>
      <input type="tel" id="phone" name="phone" required
             pattern="^\+?[0-9]{7,15}$"
             title="Enter a valid phone number">

      <label for="message">Your Enquiry *</label>
      <textarea id="message" name="enquiry" rows="4" required></textarea>

      <p class="form-disclaimer">
        By submitting this form, you acknowledge and consent that the information provided will be collected and used solely for the purpose of responding to your enquiry and improving our services.
      </p>

      <div class="g-recaptcha"
           data-sitekey="site_key_value"
           data-callback="enableSubmit"
           data-expired-callback="disableSubmit"></div>

      <button type="submit">Submit</button>
      <p id="form-message"></p>
    </form>
  </div>

  <!-- Map -->
  <div class="map-container fade-right">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.7592201088646!2d-0.19401812432233365!3d5.602544333178475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9a535fdab519%3A0xacf60dc99faab6b4!2sKNET!5e0!3m2!1sen!2sgh!4v1755159692648!5m2!1sen!2sgh"
            allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</section>





 <!---------------------------- WhatsApp -------------------------->

<div class="WhatsApp"> 
    <img src="/Images/WhatsApp-icon.png" alt="WhatsApp icon">
    <a href="https://wa.me/23350000000000" target="_blank"> <p>Contact us on WhatsApp</p></a>
</div>






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








<!--------------- FORM Handler ------------->

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('.contact-form');
    const messageBox = document.getElementById('form-message');

    const emailInput = document.getElementById('email');
    const phoneInput = document.getElementById('phone');
    const emailError = document.getElementById('email-error');
    const phoneError = document.getElementById('phone-error');

    function clearErrors() {
      emailError.style.display = 'none';
      phoneError.style.display = 'none';
      messageBox.textContent = '';
    }

    function showFieldErrors() {
      let hasError = false;

      if (!emailInput.validity.valid) {
        emailError.textContent = "Enter a valid email (e.g. example@domain.com)";
        emailError.style.display = 'block';
        hasError = true;
      }

      if (!phoneInput.validity.valid) {
        phoneError.textContent = "Enter a valid phone number (7-15 digits, may start with +)";
        phoneError.style.display = 'block';
        hasError = true;
      }

      return hasError;
    }

    form.addEventListener('submit', async function (event) {
      event.preventDefault();
      clearErrors();

      if (!form.checkValidity()) {
        if (showFieldErrors()) return;
      }

      try {
        const response = await fetch(form.action, {
          method: 'POST',
          body: new FormData(form)
        });

        const data = await response.json();

        if (response.ok && data.success) {
          window.location.href = '/thank-you.blade.php';
        } else {
          const errorMsg = data.message || 'Something went wrong. Please try again.';

          // Show error inline above the correct field
          if (errorMsg.toLowerCase().includes('email')) {
            emailError.textContent = errorMsg;
            emailError.style.display = 'block';
            emailInput.focus();
          } else if (errorMsg.toLowerCase().includes('phone')) {
            phoneError.textContent = errorMsg;
            phoneError.style.display = 'block';
            phoneInput.focus();
          } else {
            messageBox.style.color = 'red';
            messageBox.textContent = errorMsg;
          }
        }
      } catch (error) {
        console.error("Error submitting form:", error);
        messageBox.style.color = 'red';
        messageBox.textContent = 'Something went wrong. Please try again.';
      }
    });
  });
</script>

</body>
</html>