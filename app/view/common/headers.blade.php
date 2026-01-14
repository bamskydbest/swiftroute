<header>

    <nav class="nav-bar">
        <a  href="/"><img class="sr-logo" src="/Images/SwiftRoute-Logo-SVG.svg" alt="swiftRoute-logo"> </a>
        <ul class="nav-buttons">
            <li> <a href="/">Home</a></li>
            <li> <a href="/products">Product & Services</a></li>
            <li class="dropdown"> <a href="#">Resources<span class="dropdown-arrow">&#9662</span> </a>
                <ul class="dropdown-menu">
                    <li><a href="/faqs">FAQs</a></li>
                    <li><a href="/contact">Help Center</a></li>
                </ul>
            </li>
            <li> <a href="/developers">Developers</a></li>
            <li> <a href="/about">Company</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
        <div class="sign-btn">
            <ul class="sign-list">
                <li class="sign-up"><a href="/sign-up" class="btn-sign">Sign Up</a></li>
                <li class="sign-in"><a href="https://dashboard.swiftroutegh.com" class="btn-sign">Sign In</a></li>
            </ul>
        </div>


    </nav>

    <!-- html codes for dropdown &#11206 -->

    <div class="mobile-nav">
        <nav class="navbar">
            <div class="logo">
                <a href="/">
                    <img class="swiftroute-logo-mobile" src="/Images/SwiftRoute-Logo-SVG.svg" alt="swiftRoute-logo">
                </a>
            </div>

            <div class="hamburger" onclick="toggleMenu()">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>

            <ul class="nav-links" id="navLinks">
                <li><a href="/">Home</a></li>
                <li><a href="/products">Product & Services</a></li>

                <li class="nav-media" onclick="toggleDropdown(this)">
                    Resources <span class="dropdown-icon">&#9662;</span>
                    <ul class="media-dropdown">
                        <li><a href="/faqs">FAQs</a></li>
                        <li><a href="/contact">Help Center</a></li>
                    </ul>
                </li>

                <li><a href="/developers">Developers</a></li>
                <li><a href="/about">Company</a></li>
                <li><a href="/contact">Contact</a></li>

                <!-- Sign buttons at the bottom of the menu -->
                <li class="sign-up"><a href="/sign-up" class="btn-sign">Sign Up</a></li>
                <li class="sign-in"><a href="https://dashboard.swiftroutegh.com" class="btn-sign">Sign In</a></li>
            </ul>
        </nav>
    </div>


</header>