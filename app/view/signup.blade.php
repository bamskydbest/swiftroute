@include('common.signup_head')
<body>
  <div class="container">
    <div class="left-section">
     
      <img src="/images/young-african-american-woman-isolated-yellow-background-buying-with-mobile-holding-credit-card-with-surprised-expression.png" alt="signup-image" class="image" />

    </div>

    <div class="right-section">
      <div class="form-container">
        <h2>Sign Up</h2>

        <form action="/signup" method="post">
          <div class="input-field">
            <label for="company">Company Name or Business Name</label>
            <input type="text" id="company" name="company" placeholder="Enter your company name" required />
          </div>

          <div class="input-field">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required />
          </div>

          <div class="input-field">
            <label for="country">Country</label>
            <div class="custom-select" id="countrySelect">
              <div class="selected">
                <span id="selectedCountry">Select your country</span>
                <i class='bx bx-chevron-down dropdown-icon'></i>
              </div>
              <ul class="options" id="countryOptions"></ul>
            </div>
          </div>

         <div class="input-field">
  <label for="contact">Contact</label>
  <input
  type="tel"
  id="contact"
  name="contact"
  placeholder="+233 504567890"
  pattern="^\+\d[\d\s]{9,16}$"
  inputmode="tel"
  title="Include country code (e.g. +234 9043435678)"
/>
<!-- <span class="hint">Format: +CountryCode followed by 10-14 digits</span>

  <small class="hint">Only digits are allowed — 10 to 14 numbers (no + or spaces).</small> -->
  <small id="contact-validation" class="validation-message"></small>
</div>

          <button type="submit" class="submit-btn">Sign Up</button>

          <div class="social-media">
            <button type="button" class="google-signup" title="Sign up with Google">
              <i class='bx bxl-google'></i>
            </button>
          </div>

          <p>Already have an account? <a href="https://dashboard.swiftroutegh.com">Sign In</a></p>
        </form>
      </div>
    </div>
  </div>
  <script src="/js/signup.js"></script>
</body>
</html>
