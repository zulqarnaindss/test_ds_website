<!-- <div class="cookie-consent-modal">
    <div class="contentss">
        <p>This website uses cookies to improve user experience. By using our website you consent to all cookies in
            accordance with our Cookie Policy.
            <a href="/privacy-policy">Read More</a>
        </p>
        <div class="btns-123">
            <button class="btnhh cancel">cancel</button>
            <button class="btnhh accept" id="acceptCookie">accept</button>
        </div>
    </div>
</div> -->

<section class="slide  kenBurns" id="contact-us">
    <div class="content">
        <div class="containers">
            <div class="wraps">
                <footer class="footer">
                    <div class="containerfootr">
                        <ul class="grid grid-85 equal ae-2 fromCenter" data-equal-collapse-width="767">
                            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                <div class="footer-col">
                                    <ul>
                                        <li>
                                            <div class="dspl-f-for-new-footr">
                                                <a class="crsor">Address UAE </a> <a class="add-detail-new-footr">1803, Metropolis Tower, Marasi Drive, Business Bay, Dubai-UAE</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dspl-f-for-new-footr">
                                                <a class="crsor">Address USA </a> <a class="add-detail-new-footr mrgr-zero">Delaware ( We’re opening soon)</a>
                                            </div>
                                        </li>
                                        <li class="mrgn-botom-zero">
                                            <div class="dspl-f-for-new-footr">
                                                <a class="crsor">Phone UAE </a> <a href="tel:+971 44 373 103" target="_blank" class="custom-border-for-footr-new mgn-for-ftr-phone for-moble-respon-footr">+971 4 437 3103 </a><a href="https://wa.me/971526510534" target="_blank" class=" mgn-for-ftr-phone for-moble-respon-footr"> +971 52 651 0534</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="tel:+971 4 336 4140" class="mrgn-lft-129">+971 4 336 4140</a></li>
                                        <li>
                                            <div class="dspl-f-for-new-footr">
                                                <a class="crsor">Phone USA </a> <a href="tel:+1 415 800 4787" target="_blank"class=" mgn-for-ftr-phone for-moble-respon-footr">+1 415 800 4787</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dspl-f-for-new-footr">
                                                <a class="crsor">Email </a> <a href="mailto:info@dynamicsstream.com" target="_blank" class=" mgn-for-ftr-em for-moble-respon-footr">info@dynamicsstream.com</a>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            <li class="col-3-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                <div class="footer-col">
                                    <ul class="for-mob-respon-footr">
                                        <li><a href="https://dynamicsstream.com/about-us">About Us</a></li>
                                        <li><a href="https://dynamicsstream.com/dynamics-365-business-central-pricing-plan">Pricing</a></li>
                                        <li><a href="https://dynamicsstream.com/our-apps">Vertical Solutions</a></li>
                                        <li><a href="https://dynamicsstream.com/#blogs">Blogs</a></li>
                                        <li><a href="https://dynamicsstream.com/careers">Careers</a></li>
                                        <li><a href="https://dynamicsstream.com/#contact-us">Contact Us</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li class="col-3-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                <div class="footer-col">
                                    <ul class="for-mob-respon-footr">
                                        <li><a href="#modal-1" class="js-open-modal">Contact Form</a></li>
                                        <li><a href="https://dynamicsstream.com/sitemap.xml">Site Map</a></li>
                                        <li></li>
                                    </ul>
                                    <ul class="lsdt social-icn-margn">
                                         <div class="social">
                                            <a href="https://www.youtube.com/@dynamicsstream" target="_blank" class=""><img src="{{asset('assets')}}/images/footer-icon/youtube.webp" class="yutub" alt="Youtube"></a>
                                            <a href="https://www.linkedin.com/company/dynamicsstream.com" target="_blank" class="">
                                            <img src="{{asset('assets')}}/images/footer-icon/linkedin.webp" class="linkin" alt="Linkedin">
                                            </a>
                                            <a href="https://www.instagram.com/dynamics365specialists/" target="_blank" class="faceb"><img src="{{asset('assets')}}/images/footer-icon/insta.webp" class="linkin" alt="Instagram"></a>
                                        </div>
                                        <div class="qr-footer">
                                            @foreach($footersolution as $footersolutions)
                                            <img src="{{asset('assets')}}/dynamics-stream-qrcode.png" width="120" height="120" title="Whatsapp QR" loading="lazy" class="qrcode-image" alt="Whatsapp QR">
                                            @endforeach
                                        </div>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>

                </footer>
                <div class="lst-sec-nf last-copy-r-bordr">
                    <ul class="grid grid-85 equal ae-2 fromCenter" data-equal-collapse-width="767">
                        <li class="col-12-12 col-tablet-1-2 col-phablet-1-1 ae-3 " style="text-align: center;">
                            <h4 class="copyright-text"> &copy; <span id="date"></span> <a href="https://dynamicsstream.com/" class="name-ds">Dynamics Stream
                                    Software Solutions</a> </h4>
                        </li>
                    </ul>
                </div>
                <div class="modal-overlay">
                    <div id="modal-1" class="modal"><button class="modal__close" type="button">Закрыть</button>
                        <h2 class="modal__title">Start your ERP journey!</h2>
                        <div class="modal__content">
                            <div class="formbold-main-wrapper">
                                <div class="formbold-form-wrapper">
                                    <form id="contactForm" action="/contact-form" enctype="multipart/form-data" method="post">
                                        <input type="hidden" name="_token" value="biACLpAXgSzTn9OGZrFrdSKQyQZ8wv94mBYx6sUc">
                                        <div class="formbold-mb-5-up"><label class="formbold-form-label-up" for="name">Your Name:</label> <input id="name" name="name" type="text" class="formbold-form-input-up" placeholder="Full Name"></div>
                                        <div class="formbold-mb-5-up"><label class="formbold-form-label-up" for="name">Company:</label> <input id="cname" name="company" type="text" class="formbold-form-input-up" placeholder="Company Name"></div>
                                        <div class="formbold-mb-5-up"><label class="formbold-form-label-up" for="email">Email:</label> <input id="email" name="email" type="email" class="formbold-form-input-up" onkeyup="validateEmail()" placeholder="Email Address*" required="">
                                            <span id="error-message" class="error-message"></span>
                                        </div>
                                        <div class="formbold-mb-5-up"><label class="formbold-form-label-up" for="phone">Phone#:</label> <input name="phone" type="tel" class="formbold-form-input-up phonez" placeholder="phone number*" minlength="11" maxlength="18" required="">
                                        </div>
                                        <div class="formbold-mb-5"><label class="formbold-form-label" for="phone">What
                                                solution do you need? </label><select id="solution" class="formbold-form-input-contac" name="solutions" required="">
                                                <option disabled="disabled" selected="selected" value="">Choose a
                                                    Solution</option>
                                                <option class="optons" value="Dynamics 365 Business Central">
                                                    Dynamics 365 Business Central
                                                </option>
                                                <option value="Dynamics 365 Finance and Supply Chain">Dynamics 365
                                                    Finance and Supply Chain
                                                </option>
                                                <option value="Dynamics AX">Dynamics AX</option>
                                                <option value="Dynamics Navision">Dynamics Navision</option>
                                                <option value="Dynamics 365 Sales ">Dynamics 365 Sales </option>
                                                <option value="Dynamics 365 Service">Dynamics 365 Service</option>
                                                <option value="Dynamics 365 Marketing">Dynamics 365 Marketing
                                                </option>
                                                <option value="Dynamics 365 Retail and Commerce">Dynamics 365 Retail
                                                    and Commerce</option>
                                                <option value="Dynamics 365 HR">Dynamics 365 HR</option>
                                                <option value="Dynamics 365 Project Management">Dynamics 365 Project
                                                    Management</option>
                                                <option value="Microsoft Office 365">Microsoft Office 365</option>
                                            </select></div>
                                       
                                        <div class="algn-centr-btn"><input value="Submit" type="submit" class="formbold-btn"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="background" style="background-image:url(/assets/images/new-home-images/footer/footer-bg.webp)">
    </div>

</section>