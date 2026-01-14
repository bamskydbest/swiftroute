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
            <h1 class="fade-scale">Terms Of Service</h1>
            <p class="fade-scale"> <a class="sr-hme-a" href="https://swiftroutegh.com"><span
                        class="sr-home">Home</span> </a> / <span class="pns">Terms Of Service</span> </p>
        </div>
    </div>










    <section class="legal-compliance">
        <div class="container">
            <!-- <h2 class="section-title fade-in-section">CUSTOMER / MERCHANT OBLIGATIONS</h2> -->
            <!-- <p class="intro-text fade-in-section">
      At Swift Route, the safety and integrity of your data and transactions are our top priority. 
      Our systems follow internationally recognized standards to ensure that every payment, transfer, 
      and wallet interaction is secure and legally protected.
    </p> -->


            <div class="info-card">
                <!--<h3 id="user-protection">User Protection Policies</h3>
      <h4 id="kyc">KYC/AML Policy</h4>
      <p>All users and merchants must complete KYC verification before gaining full platform access.</p>
      
      <h4 id="data-privacy">Data Privacy</h4>
      <p>We never sell or share your personal or transactional data. We follow Ghana’s Data Protection Act, 2012 (Act 843) and GDPR-aligned controls where applicable.</p> -->

                <h4 id="dispute-resolution">CUSTOMER / MERCHANT OBLIGATIONS</h4>
                <ul>
                    <li> Provide accurate, complete, and up-to-date information when creating account</li>
                    <li> Ensure confidentiality of login details, PINs, and passwords</li>
                    <li> Use the services only for lawful purposes and in compliance with Ghanaian laws</li>
                    <li> Promptly notify the Company of any unauthorized or suspicious activity</li>

                </ul>
            </div>


            <div class="info-card">
                <!--<h3>Information Security Management System (ISMS) Statement </h3>
      <p>Swift Route Ltd. regards information as a critical asset. Safeguarding its confidentiality, integrity, and availability is fundamental to the trust we share with our customers, employees, partners, and stakeholders.
To demonstrate this commitment, we have established and maintain an Information Security Management System (ISMS) in line with the ISO/IEC 27001:2022 international standard.
      </p> -->


                <h4 class="isms-h4"> COMPANY OBLIGATIONS</h4>
                <ul>
                    <li> Deliver payment services with reasonable care, efficiency, and security</li>
                    <li> Maintain compliance with Bank of Ghana regulations and all applicable laws</li>
                    <li> Safeguard customer funds in line with consumer protection guidelines</li>
                    <li> Keep customer information confidential except where disclosure is required by law</li>

                </ul> <br>
                <!-- <p>This statement reflects Swift Route Ltd.’s dedication to safeguarding the data entrusted to us. We are committed to continuous improvement and to maintaining the trust of all who interact with our services.</p> -->
            </div>
            <div class="info-card">
                <h4 id="dispute-resolution"> TRANSACTION PROCESSING AND SETTLEMENT</h4>
                <ul>
                    <li> All transactions shall be settled on a T+1 basis, meaning settlement will occur on the business
                        day following the transaction date</li>
                    <li> Transactions may be subject to delays due to system outages, compliance checks, or third-party network issues</li>
                    <li> The Company reserves the right to suspend or decline a transaction if it breaches legal,
                        regulatory, or risk requirements</li>

                </ul>
            </div>
            <div class="info-card">
                <h4 id="dispute-resolution">FEES AND CHARGES</h4>
                <ul>
                    <li> Customers /Merchant shall pay all applicable fees</li>
                    <li> Fees may be deducted at source during the transaction</li>
                    <li> Any changes to fees will be communicated to customers in line with regulatory requirements</li>
                </ul>
            </div>
            <div class="info-card">
                <h4 id="dispute-resolution"> INVALID PAYMENTS</h4>
                <p>Merchant acknowledges that it will be liable for all claims, expenses, fines and liabilities arising
                    out of Chargebacks, refunds issued to End Users, payment errors or other invalid payments. Any
                    such payments or liabilities may be deducted by SR Ltd from payments to be made by it to
                    Merchant</p>
            </div>
            <div class="info-card">
                <h4 id="dispute-resolution">CONFIDENTIALITY</h4>
                <ul>
                    <li> The Company shall treat all information relating to the Customer, their transactions, and accounts
                        as strictly confidential</li>
                    <li> Such information shall not be disclosed to any third party without the prior consent of the
                        Customer, except:
                        <ul>
                            <li>Where required by law or regulation</li>
                            <li> Where disclosure is made to the Bank of Ghana, the Financial Intelligence Centre, or
                                other lawful authorities</li>
                            <li> Where disclosure is necessary to execute a transaction or deliver the service</li>
                        </ul>
                    </li>
                    <li> The Company shall ensure that employees, agents, and service providers maintain the same
                        duty of confidentiality</li>
                    <li> Customers also agree to keep any non-public information relating to the Company’s operations,
                        systems, and procedures confidential</li>

                </ul>
            </div>
            <div class="info-card">
                <h4 id="dispute-resolution">ANTI-MONEY LAUNDERING (AML) & COUNTER-TERRORIST FINANCING (CFT)</h4>
                <ul>
                    <li> The Company complies with the Anti-Money Laundering Act, 2020 (Act 1044) and related
                        directives</li>
                    <li> Customers must undergo Know Your Customer (KYC) verification</li>
                    <li> The Company may request additional documents for Enhanced Due Diligence (EDD) where
                        necessary</li>

                </ul>
            </div>
            <div class="info-card">
                <h4 id="dispute-resolution">DATA PROTECTION AND RETENTION</h4>
                <ul>
                    <li> The Parties shall comply with Data Protection Act, 2012 (Act 843) of Ghana and other applicable
                        international best practices including the International Organisation for Standardization’s
                        standards: ISO/IEC 27001:2022, ISO/IEC 27002:2013</li>
                    <li> The parties shall maintain all personal and transactional data, supporting documents, and all other
                        records under this Agreement for a minimum period of six (6) years and subject to the
                        requirements of the Payment Systems and Services Act, 2019 (Act 987)</li>
                    <li> Customers have the right to raise complaints through the Company’s Customer Care Centre</li>

                </ul>
            </div>
            <div class="info-card">
                <h4 id="dispute-resolution"> INTELLECTUAL PROPERTY & SYSTEM USE</h4>
                <ul>
                    <li>All rights, title, and interest in the Company’s platforms, mobile applications, websites, logos,
                        trademarks, and related systems remain the exclusive property of the Company</li>
                    <li> Customers are granted a limited, non-exclusive, non-transferable license to use the
                        Company’s services strictly for business payment purposes</li>
                    <li> Customers shall not:
                        <ul>
                            <li>Copy, modify, reverse-engineer, or create derivative works from the Company’s
                                systems.</li>
                            <li> Use the services for fraudulent, abusive, or unauthorized purposes</li>
                            <li> Infringe on the Company’s intellectual property rights</li>
                        </ul>
                    </li>
                    <li> Any unauthorized use may result in termination of services, legal action, and claims for
                        damages</li>

                </ul>
            </div>
            <div class="info-card">
                <h4 id="dispute-resolution">LIABILITY</h4>
                <ul>
                    <li> The Company shall not be liable for losses arising from:
                        <ul>
                            <li>Customer negligence or failure to protect credentials</li>
                            <li> Force majeure events (e.g., system failures, natural disasters, network disruptions)</li>
                            <li>Unauthorized transactions resulting from customer disclosure of login details</li>
                        </ul>
                    </li>
                    <li> Liability is limited to the amount of the disputed transaction</li>

                </ul>
            </div>
            <div class="info-card">
                <h4 id="dispute-resolution">TERMINATION OF SERVICES</h4>
                <ul>
                    <li> The Company may suspend or terminate services if:
                        <ul>
                            <li>A customer engages in fraudulent, illegal, or abusive activities</li>
                            <li> The account remains inactive for a period specified in Company policy.</li>
                        </ul>
                    </li>
                    <li> Customers may terminate services by providing written notice and settling outstanding
                        obligations.
                    </li>


                </ul>
            </div>

            <div class="info-card">
                <h4 id="dispute-resolution"> GOVERNING LAW AND JURISDICTION</h4>
                <p>These Terms are governed by the laws of the Republic of Ghana. Any disputes shall be resolved
                    in accordance with Ghanaian law and subject to the jurisdiction of the courts of Ghana</p>
            </div>

            <div class="info-card">
                <h4 id="dispute-resolution"> AMENDMENTS</h4>
                <p>The Company reserves the right to amend these Terms. Customers will be notified of material
                    changes at least 30 days in advance, unless regulatory changes require immediate effect</p>
            </div>


            <!-- Terms & Policies -->
            <div id="info-card" class="info-card">
                <h3>Terms & Policies</h3>
                <ul class="policy-links">
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
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>










<!---------------------------- FOOTER -------------------------->
 @include('.common.footer')

</body>

</html>