@extends('main_3_landing')
@section('title', 'Microsoft Dynamics 365 Partner')
@section('meta_description', 'Start & Grow Your Business with Microsoft Dynamics 365 a powerful platform that offers a range of solutions for businesses of all sizes and industries.')
@section('meta_keywords', 'Microsoft Dynamics 365')
@section('contents')
<!-- Slide 1   -->
<section class="slide  kenBurns">
    <div class="content">
        <div class="container">
            <div class="wrapss">
                <ul class="grid grid-85 equal ae-2 fromCenter  u-l-m-landing" data-equal-collapse-width="767">
                    <li class="col-7-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                        <h2 class="heading-landing-fisrt-pt"> Dynamics Stream - Your <span class="for-m-non-colr" style="color:#18E4CB ;">Microsoft Gold Certified </span> Partner</h2>
                        <p class="p-landing-first-sect-bc">Enabling Seamless Microsoft Solution Implementation for Businesses. Manage your finances, sales, marketing, service, or human resources, and seamlessly streamline your business operations, improve customer experience, and drive growth.</p>
                        <div class="new-btn-bc-l-di">
                            <a href="#popup1" class="btn-new-bc-l">Talk to our experts</a>
                        </div>
                    </li>
                    <li class="col-5-12 col-tablet-1-2 col-phablet-1-1 ae-3 mrgn-la-form-li">
                        <div class="modal-land">
                            <h2 class="modal__title-land">Tell Us More About Your Project</h2>
                            <div class="modal__content">
                                <div class="formbold-main-wrapper-land">
                                    <div class="formbold-form-wrapper-land">
                                        <form method="POST" class="lacontactForm" action="{{ route('submit-form-partner') }}">
                                            @csrf
                                            <div class="formbold-mb-5-up-land"><label class="formbold-form-label-up-land" for="name"></label>
                                                <input id="name" name="name" placeholder="Full Name" type="text" class="formbold-form-input-up-land field2" />

                                            </div>
                                            <div class="formbold-mb-5-up-land"><label class="formbold-form-label-up-land" for="name"></label>
                                                <input id="cname" name="company" type="text" placeholder="Company" class="formbold-form-input-up-land field2" />
                                            </div>
                                            <div class="formbold-mb-5-up-land"> <label class="formbold-form-label-up-land lpho" for="email"></label>
                                                <p class="dis-err">
                                                    <input id="email" onkeyup="validateEmail()" placeholder="Email*" name="email" type="email" class="formbold-form-input-up-land pho field2" />
                                                    <span id="error-message" class="error-message"></span>
                                                </p>

                                            </div>
                                            <div class="formbold-mb-5-up-land"><label class="formbold-form-label-up-land for-width-only lpho" for="phone"></label>
                                                <p class="dis-err">
                                                    <input name="phone" type="tel" placeholder="Phone*" class="formbold-form-input-up-land field2 for-inp-width-only phonez pho" />
                                                </p>
                                            </div>
                                            <div class="formbold-mb-5-up-land"><label class="formbold-form-label-land" for="phone"></label><select id="solution" class="formbold-form-input-land" name="solutions">
                                                    <option disabled="disabled" selected="selected" value="">Choose
                                                        a
                                                        Solution</option>
                                                    <option class="optons" value="Dynamics 365 Business Central">Dynamics 365 Business Central
                                                    </option>
                                                    <option value="Dynamics 365 Finance and Supply Chain">Dynamics 365 Finance and Supply Chain
                                                    </option>
                                                    <option value="Dynamics AX">Dynamics AX</option>
                                                    <option value="Dynamics Navision">Dynamics Navision</option>
                                                    <option value="Dynamics 365 Sales ">Dynamics 365 Sales </option>
                                                    <option value="Dynamics 365 Service">Dynamics 365 Service</option>
                                                    <option value="Dynamics 365 Marketing">Dynamics 365 Marketing</option>
                                                    <option value="Dynamics 365 Retail and Commerce">Dynamics 365 Retail and Commerce</option>
                                                    <option value="Dynamics 365 HR">Dynamics 365 HR</option>
                                                    <option value="Dynamics 365 Project Management">Dynamics 365 Project Management</option>
                                                    <option value="Microsoft Office 365">Microsoft Office 365</option>
                                                </select></div>
                                            <div class="formbold-mb-5-up-land"><label class="formbold-form-label-land" for="phone"></label><select id="service" class="formbold-form-input-land" name="services">
                                                    <option disabled="disabled" selected="selected" value="">Choose
                                                        a
                                                        Service</option>
                                                    <option value="Implementation Services">Implementation</option>
                                                    <option value="Support Service">Support Service</option>
                                                    <option value="Upgrade Service">Upgrade Service</option>

                                                </select></div>
                                            <div class="formbold-mb-5-up-land"><label class="formbold-form-label-land" for="phone"></label> <textarea id="message" class="formbold-form-input-land field2" cols="20" placeholder="Tell us about your project" name="message" rows="3"></textarea></div>
                                            <div class="mrt-b-for-new-bc-l">
                                                <button class="formbold-btns">Submit</button>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="for-new-l-logo-s">
                    <ul class="grid grid-85 equal ae-2 fromCenter" data-equal-collapse-width="767">
                        <li class="col-3-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                            <img src="{{ asset('assets') }}/images/business-central/upd/iso-landing.webp" alt="" class="bottom-logos-new-l" srcset="">
                        </li>
                        <li class="col-3-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                            <img src="{{ asset('assets') }}/images/business-central/new/gold.webp" alt="" class="bottom-logos-new-l" srcset="">
                        </li>
                        <li class="col-3-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                            <img src="{{ asset('assets') }}/images/business-central/new/ERP-partner.webp" class="bottom-logos-new-l" alt="" srcset="">
                        </li>
                        <li class="col-3-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                            <img src="{{ asset('assets') }}/images/business-central/new/solution-partner.webp" class="bottom-logos-new-l last-logo" alt="" srcset="">
                        </li>
                    </ul>
                </div>
                <div id="popup1" class="overlay">
                    <div class="popup for-popup-new">
                        <ul class="grid grid-85 equal ae-2 fromCenter  u-l-m-landing-for-new-d365" data-equal-collapse-width="767">
                            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                <div class="for-new-di-popup-te">
                                    <h2>Adding Automation, Integration & Intelligence to your Business</h2>
                                    <p>If you want to streamline your workflows through an ERP system and don’t know where to start, contact us today. Our Professional team will guide you through a successful ERP Implementation to match your business needs.</p>
                                </div>
                            </li>
                            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                <h2>Tell Us More About Your Project</h2>
                                <a class="close" href="#">&times;</a>
                                <div class="content">
                                    <div class="formbold-main-wrappers for-new-la-d">
                                        <div class="formbold-form-wrappers">
                                            @if(\Session::has('success'))
                                            <div class="alert alert-success ">{{ \Session::get('success') }}</div>
                                            {{ \Session::forget('success') }}
                                            @endif
                                            <form method="POST" class="lacontactForm2" action="{{ route('submit-form-partner') }}">
                                                @csrf
                                                <div class="formbold-mb-5-ups"> <input id="name2" name="name" type="text" class="formbold-form-input-ups" placeholder="Full Name" />
                                                </div>
                                                <div class="formbold-mb-5-ups"> <input id="cname" name="company" type="text" class="formbold-form-input-ups" placeholder="Company Name" /></div>
                                                <div class="formbold-mb-5-ups">
                                                    <p class="dis-err">
                                                        <input id="emailinuae" onkeyup="validateEmailinuae()" name="email" type="email" class="formbold-form-input-ups pho" placeholder="Email Address*" />
                                                        <span id="error-messageinuae" class="error-message"></span>
                                                    </p>
                                                </div>
                                                <div class="formbold-mb-5-ups for-width-bc-l">
                                                    <p class="dis-err">
                                                        <input name="phone" type="tel" class="formbold-form-input-ups phonez pho" placeholder="Enter Phone Number" />
                                                    </p>
                                                </div>
                                                <div class="formbold-mb-5s"><label class="formbold-form-labels" for="solutions"></label><select id="solution" class="formbold-form-inputs for-new-chos" name="solutions">
                                                        <option disabled="disabled" selected="selected" value="">Choose a
                                                            Solution</option>
                                                        <option class="optons" value="Dynamics 365 Business Central">Dynamics
                                                            365 Business Central
                                                        </option>
                                                        <option value="Dynamics 365 Finance and Supply Chain">Dynamics 365
                                                            Finance and Supply Chain
                                                        </option>
                                                        <option value="Dynamics AX">Dynamics AX</option>
                                                        <option value="Dynamics Navision">Dynamics Navision</option>
                                                        <option value="Dynamics 365 Sales ">Dynamics 365 Sales </option>
                                                        <option value="Dynamics 365 Service">Dynamics 365 Service</option>
                                                        <option value="Dynamics 365 Marketing">Dynamics 365 Marketing</option>
                                                        <option value="Dynamics 365 Retail and Commerce">Dynamics 365 Retail and
                                                            Commerce</option>
                                                        <option value="Dynamics 365 HR">Dynamics 365 HR</option>
                                                        <option value="Dynamics 365 Project Management">Dynamics 365 Project
                                                            Management</option>
                                                        <option value="Microsoft Office 365">Microsoft Office 365</option>
                                                    </select></div>
                                                <div class="formbold-mb-5s"><label class="formbold-form-labels" for="phone"></label><select id="service" class="formbold-form-inputs for-new-chos" name="services">
                                                        <option disabled="disabled" selected="selected" value="">Choose a
                                                            Service</option>
                                                        <option value="Implementation Services">Implementation</option>
                                                        <option value="Support Service">Support Service</option>
                                                        <option value="Upgrade Service">Upgrade Service</option>

                                                    </select></div>
                                                <div class="formbold-mb-5s"><label class="formbold-form-labels" for="phone"></label> <textarea id="message" class="formbold-form-inputs for-new-chos" cols="20" name="message" rows="3" placeholder="Message"></textarea></div>
                                                <div>
                                                    <button class="formbold-btns">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="background" style="background-image:url(assets/images/business-central/upd/top-bg.webp);"></div>
</section>
<!-- Circle Section -->
<section class="slide  kenBurns">
    <div class="content">
        <div class="containers">
            <div class="wrapss">
                <img src="{{ asset('assets') }}/images/business-central/upd/landin-2nd-sec.webp" alt="" class="">
            </div>
        </div>
    </div>
    </div>
    <div class="background" style="background-color:whiteq">
    </div>
</section>
<!-- Circle Section End -->
<!-- Slide Capabilities  -->
<section class="slide  kenBurns">
    <div class="content">
        <div class="containers">
            <div class="wrapss">
                <h2 class="heading-th-lan-pt mrgn-t-l-new">Microsoft Dynamics 365 Business Central Partner – an all-in-one Business Management Solution Partner</h2>
                <p class="pt-new-landing-p">As a prominent Microsoft Dynamics 365 Business Central Partner, we stand as a beacon for enterprises seeking comprehensive business management solutions. Our dedicated team, recognized among leading Microsoft Dynamics Partners, is committed to empowering businesses for success.</p>
            <h2 class="heading-th-lan-pt mrgn-t-l-new">Discover the Dynamics 365 Advantages</h2>
                <p class="pt-new-landing-p">As your trusted Microsoft Dynamics Partner in UAE, we bring a suite of solutions designed to streamline and enhance your operations.</p>
            </div>
            <!-- Card -->
            <div class="card_outerbc">
                <div class="cardbc">
                    <div class="contentbc">
                        <img src="{{ asset('assets') }}/images/business-central/upd/finance.webp" alt="" class="titlebc ico-for-capa">
                        <h2 class="titlebc capa-box-for-bc">Finance</h2>
                        <p class="copybc capa-box-for-bc">With Microsoft Dynamics 365 Finance, you can access your financial data anytime, anywhere, from any device. You can also leverage the power of artificial intelligence and machine learning to automate tasks, optimize workflows, and generate insights.</p>
                    </div>
                </div>
                <div class="cardbc">
                    <div class="contentbc">
                        <img src="{{ asset('assets') }}/images/business-central/upd/supply-c.webp" alt="" class="titlebc ico-for-capa">
                        <h2 class="titlebc capa-box-for-bc">Supply Chain / Operations</h2>
                        <p class="copybc capa-box-for-bc">Efficiently Manage your inventory, procurement, production, warehousing, transportation, forecast demand, plan resources, and automate workflows in one place. Collaborate with your suppliers, partners, and customers in real-time.</p>
                    </div>
                </div>
                <div class="cardbc">
                    <div class="contentbc">
                        <img src="{{ asset('assets') }}/images/business-central/upd/d365-bc.webp" alt="" class="titlebc ico-for-capa">
                        <h2 class="titlebc">Dynamics 365 Business Central</h2>
                        <p class="copybc">Integrate and manage finances, sales, service, inventory, and projects seamlessly on a single platform. Our Microsoft Dynamics implementation partners ensure a cohesive experience that integrates with other Microsoft products and services.</p>
                    </div>
                </div>
                <div class="cardbc">
                    <div class="contentbc">
                        <img src="{{ asset('assets') }}/images/business-central/upd/sales-services.webp" alt="" class="titlebc ico-for-capa">
                        <h2 class="titlebc capa-box-for-bc">Sales & Service</h2>
                        <p class="copybc capa-box-for-bc">Manage, Track, and Automate your leads, opportunities, accounts, contacts, sales performance, and revenue with built-in AI, real-time dashboards, and reports. Empower your agents with a unified interface and Provide a personalized and consistent service across multiple channels.</p>
                    </div>
                </div>

            </div>
            <div class="card_outerbc">
                <div class="cardbc">
                    <div class="contentbc">
                        <img src="{{ asset('assets') }}/images/business-central/upd/marketing.webp" alt="" class="titlebc ico-for-capa">
                        <h2 class="titlebc capa-box-for-bc">Marketing</h2>
                        <p class="copybc capa-box-for-bc">Create personalized customer journeys, Leverage AI-powered insights to measure and optimize your campaigns, channels, and content.</p>
                    </div>
                </div>

                <div class="cardbc">
                    <div class="contentbc">
                        <img src="{{ asset('assets') }}/images/business-central/upd/retail-commerce.webp" alt="" class="titlebc ico-for-capa">
                        <h2 class="titlebc capa-box-for-bc">Retail & Commerce</h2>
                        <p class="copybc capa-box-for-bc">It enables retailers to provide personalized and seamless shopping experiences to their customers while optimizing their inventory, supply chain, and financial performance.</p>
                    </div>
                </div>

                <div class="cardbc">
                    <div class="contentbc">
                        <img src="{{ asset('assets') }}/images/business-central/upd/hr.webp" alt="" class="titlebc ico-for-capa">
                        <h2 class="titlebc capa-box-for-bc">Human Resources</h2>
                        <p class="copybc capa-box-for-bc">Whether you are a small business or an enterprise, with Microsoft Dynamics 365 HR you can streamline workflows, automate tasks, and improve employee engagement</p>
                    </div>
                </div>


                <div class="cardbc">
                    <div class="contentbc">
                        <img src="{{ asset('assets') }}/images/business-central/upd/project-management.webp" alt="" class="titlebc ico-for-capa">
                        <h2 class="titlebc capa-box-for-bc">Project Management</h2>
                        <p class="copybc capa-box-for-bc">Designed to work seamlessly with other Dynamics 365 applications, such as Sales, Marketing, Finance, and Operations. Also integrate it with other Microsoft products, such as Power BI, Power Automate, and Power Apps.</p>
                    </div>
                </div>

            </div>
            <!-- Card End -->
        </div>
        <p class="pt-dynamics-landing-pr">Partner with us, your dedicated Microsoft Dynamics Partner in UAE, and experience a transformative journey for your business.</p>
    </div>
    </div>
    <div class="background" style="background-color:white">
    </div>
</section>
<!--  Slide CTA -->
<section class="slide  kenBurns">
    <div class="content">
        <div class="container hiht">
            <div class="wrapss">
                <div class="cta-main-di">
                    <h4 class="cta-first-headng-land-bc">Are you interested in Microsoft Dynamics 365?
                    </h4>
                    <h3 class="cta-first-headng-land-bc-new-h3">Start your
                        journey with us!</h3>
                    <!-- <h2 class="cta-secd-heading">Start Your Journey!</h2> -->
                    <div class="cta-contact-btn-di">
                        <a href="#popup1" class="cta-btn-land-bc">Book a free consultation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="background" style="background-image:url(assets/images/business-central/upd/start-your-journey-with-us.webp)"></div>
</section>
<!-- Services -->
<section class="slide  kenBurns">
    <div class="content">
        <div class="containers">
            <div class="wrapss">
                <h2 class="heading-th-lan-bc-ser">Our Business Central Services</h2>
                <p class="pt-new-landing-p-services">As your dedicated Microsoft Dynamics 365 partner in UAE, we offer a range of solutions tailored to enhance and optimize your business processes.</p>
                <div class="land-bc-sect-6-di">
                    <div class="containeer-for-bc-land-sect-6">
                        <div class=" for-land-bc-box-sect-6 for-bc-land-third-sect-6">
                            <div class="tick-img-land-bc-di">
                                <img src="{{ asset('assets') }}/images/business-central/new/consultation.webp" class="for-m-servie-land" alt="">
                            </div>
                            <h3 class="hed-containeer-box-land-bc-6">Consultation</h3>
                            <p>Our Microsoft 365 business central consultants evaluate your processes and develop an implementation strategy for adoption.</p>
                        </div>
                        <div class="for-land-bc-box-sect-6 for-bc-land-third-sect-6">
                            <div class="tick-img-land-bc-di">
                                <img src="{{ asset('assets') }}/images/business-central/new/implementation.webp" class="for-m-servie-land" alt="">
                            </div>
                            <h3 class="hed-containeer-box-land-bc-6">Implementation</h3>
                            <p>Our team of professionals takes care of the whole D365 Business Central implementation process to guarantee a smooth transition.</p>
                        </div>
                        <div class=" for-land-bc-box-sect-6 for-bc-land-third-sect-6">
                            <div class="tick-img-land-bc-di">
                                <img src="{{ asset('assets') }}/images/business-central/new/customization.webp" class="for-m-servie-land" alt="">
                            </div>
                            <h3 class="hed-containeer-box-land-bc-6">Customization</h3>
                            <p>We consider your business's requirements and provide a tailored, customized plan for business central implementation.</p>
                        </div>
                    </div>
                    <div class="containeer-for-bc-land mrgn-for-land-bc-forth">
                        <div class="for-land-bc-box-sect-6 for-bc-land-third-sect-6">
                            <div class="tick-img-land-bc-di">
                                <img src="{{ asset('assets') }}/images/business-central/new/integration.webp" class="for-m-servie-land" alt="">
                            </div>
                            <h3 class="hed-containeer-box-land-bc-6">Integration</h3>
                            <p>Swiftly embark on the path to integrated operations with Business Central, guided by our team of Microsoft Dynamics Certified Partners.</p>
                        </div>
                        <div class="for-land-bc-box-sect-6 for-bc-land-third-sect-6">
                            <div class="tick-img-land-bc-di">
                                <img src="{{ asset('assets') }}/images/business-central/new/support-maintenance.webp" class="for-m-servie-land" alt="">
                            </div>
                            <h3 class="hed-containeer-box-land-bc-6">Support & Maintenance</h3>
                            <p>We are available 24/7 after implementation to ensure that you get the most out of your Business Central configuration.</p>
                        </div>
                        <div class="for-land-bc-box-sect-6 for-bc-land-third-sect-6">
                            <div class="tick-img-land-bc-di">
                                <img src="{{ asset('assets') }}/images/business-central/new/Migration-upgradation.webp" class="for-m-servie-land" alt="">
                            </div>
                            <h3 class="hed-containeer-box-land-bc-6">Migration & Upgradation</h3>
                            <p>Dynamics Stream is the finest in migration and upgradation services. Upgrade from Dynamics NAV or Dynamics GP to the most recent version of Dynamics 365 Business Central to improve your company capabilities and overall operations performance.</p>
                        </div>
                    </div>
                    <div class="contact-nw-di">
                        <a href="tel:+971 52 651 0534" class="land-bc-nav-cont-btn-for-conn">Connect Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="background" style="background-color:#E4E4E4"></div>
</section>
<!-- Testimonials -->
<section class="slide  kenBurns">
    <div class="content">
        <div class="container">
            <div class="wrapss">
                <h2 class="heading-th-lan-bc-testi">We Don't believe in Talk's!</h2>
                <p class="p-land-bc-testi">Our Real Results and Clients Feedback tell everything</p>
                <div class="sd_master_wrapper">
                    <!-- <div class="sdtestBg2"></div>
                    <div class="sdtestBg3"></div> -->
                    <div class="slideshow">
                        <div class="contentz">
                            <!-- slide 1 -->
                            <!-- <div class="thumbnail">
                                <img src="{{ asset('assets') }}/images/business-central/cortec-new.webp">
                            </div> -->
                            <div class="btnNtxt cort">
                                <div class="sdAllContent">
                                    <p class="SdClientName">Cortec Middle East</p>
                                    <div class="coma-img-di">
                                        <img src="{{ asset('assets') }}/images/business-central/new/c1.webp" class="for-m-coma-testi" alt="">
                                    </div>
                                    <div class="sd_scroll">
                                        <p class="sdCustomSliderHeadig">Dynamics Stream is highly knowledgeable in
                                            Microsoft ERP and CRM, providing customized solutions for our
                                            business needs. Their expertise has improved our operations and customer
                                            relationship management. I wholeheartedly recommend Dynamics Stream as a
                                            Microsoft service provider for Business Central and CRM. Their comprehensive
                                            solutions, excellent customer service, and technical expertise make them a
                                            trusted partner for success with Microsoft's business solutions.</p>

                                    </div>
                                    <div class="coma-img-last-di">
                                        <img src="{{ asset('assets') }}/images/business-central/new/c2.webp" class="for-m-coma-testi" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="contentz">
                            <!-- slide 2 -->
                            <!-- <div class="thumbnail">
                                <img src="{{ asset('assets') }}/images/business-central/gulf-capital-new.webp">
                            </div> -->
                            <div class="btnNtxt gulf">
                                <div class="sdAllContent">
                                    <p class="SdClientName">Gulf Capital Investments Limited</p>
                                    <div class="coma-img-di">
                                        <img src="{{ asset('assets') }}/images/business-central/new/c1.webp" class="for-m-coma-testi" alt="">
                                    </div>
                                    <div class="sd_scroll">
                                        <p class="sdCustomSliderHeadig">Dynamics Stream is our trusted partner for ERP
                                            implementation and support. Their expertise, professionalism, and dedication
                                            have streamlined our processes and improved operational efficiency. Their
                                            outstanding support promptly addresses our evolving needs. Thanks to
                                            Dynamics Stream, we've achieved data-driven decision-making & enhanced
                                            business performance. We wholeheartedly recommend them as a reliable ERP
                                            implementation partner.</p>

                                    </div>
                                    <div class="coma-img-last-di">
                                        <img src="{{ asset('assets') }}/images/business-central/new/c2.webp" class="for-m-coma-testi" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="contentz">
                            <!-- <div class="thumbnail">
                                <img src="{{ asset('assets') }}/images/business-central/khiara-new.webp">
                            </div> -->
                            <div class="btnNtxt khiara">
                                <div class="sdAllContent">
                                    <p class="SdClientName">Khiara Group</p>
                                    <div class="coma-img-di">
                                        <img src="{{ asset('assets') }}/images/business-central/new/c1.webp" class="for-m-coma-testi" alt="">
                                    </div>
                                    <div class="sd_scroll">
                                        <p class="sdCustomSliderHeadig">Dynamics Stream successfully implemented D365
                                            Business Central as per my requirements, with excellent planning. Their
                                            support post-implementation is commendable. The team is hardworking, prompt,
                                            and dedicated to resolving any issues or queries. I highly recommend them
                                            for ERP solution implementations.</p>
                                    </div>
                                    <div class="coma-img-last-di">
                                        <img src="{{ asset('assets') }}/images/business-central/new/c2.webp" class="for-m-coma-testi" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-heading-di">
                    <h2 class="heading-lan-bc-about">Trusted by more than 150+ businesses in the Middle East</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="background" style="background-image:url(assets/images/business-central/upd/testimonial-bg.webp)"></div>
</section>
<section class="slide  kenBurns">
    <div class="content">
        <div class="containers">
            <div class="wrapss">
                <h2 class="heading-lan-bc-2-ind">Industries We Served</h2>
                <div class="cover-wrapper">
                    <div id="client-logos" class="owl-carousel text-center">
                        <div class="item">
                            <div class="client-inners">
                                <div class="div-for-slider-ind-boxs box-shadowzz">
                                    <img src="{{ asset('assets') }}/images/business-central/new/industries-icons/manufacturing.webp" alt="Kinderhotel Aschauerhof" height="150" style="margin: auto;" width="150">
                                    <p class="title-for-ind-box">Manufacturing</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-inners">
                                <div class="div-for-slider-ind-boxs box-shadowzz">
                                    <img src="{{ asset('assets') }}/images/business-central/new/industries-icons/retail.webp" alt="Kinderhotel Aschauerhof" height="150" style="margin: auto;" width="150">
                                    <p class="title-for-ind-box">Retail</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-inners">
                                <div class="div-for-slider-ind-boxs box-shadowzz">
                                    <img src="{{ asset('assets') }}/images/business-central/new/industries-icons/trading-distribution.webp" alt="Kinderhotel Aschauerhof" height="150" style="margin: auto;" width="150">
                                    <p class="title-for-ind-box">Trading & Distribution</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-inners">
                                <div class="div-for-slider-ind-boxs box-shadowzz">
                                    <img src="{{ asset('assets') }}/images/business-central/new/industries-icons/construction.webp" alt="Kinderhotel Aschauerhof" height="150" style="margin: auto;" width="150">
                                    <p class="title-for-ind-box">Construction</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-inners">
                                <div class="div-for-slider-ind-boxs box-shadowzz">
                                    <img src="{{ asset('assets') }}/images/business-central/new/industries-icons/banking-financial-service.webp" alt="Kinderhotel Aschauerhof" height="150" style="margin: auto;" width="150">
                                    <p class="title-for-ind-box">Banking & Financial Services</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-inners">
                                <div class="div-for-slider-ind-boxs box-shadowzz">
                                    <img src="{{ asset('assets') }}/images/business-central/new/industries-icons/public-sec.webp" alt="Kinderhotel Aschauerhof" height="150" style="margin: auto;" width="150">
                                    <p class="title-for-ind-box">Public Administration</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-inners">
                                <div class="div-for-slider-ind-boxs box-shadowzz">
                                    <img src="{{ asset('assets') }}/images/business-central/new/industries-icons/healthcare.webp" alt="Kinderhotel Aschauerhof" height="150" style="margin: auto;" width="150">
                                    <p class="title-for-ind-box">Healthcare & Pharma</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-inners">
                                <div class="div-for-slider-ind-boxs box-shadowzz">
                                    <img src="{{ asset('assets') }}/images/business-central/new/industries-icons/entertainment.webp" alt="Kinderhotel Aschauerhof" height="150" style="margin: auto;" width="150">
                                    <p class="title-for-ind-box">Entertainment</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-inners">
                                <div class="div-for-slider-ind-boxs box-shadowzz">
                                    <img src="{{ asset('assets') }}/images/business-central/new/industries-icons/transport.webp" alt="Kinderhotel Aschauerhof" height="150" style="margin: auto;" width="150">
                                    <p class="title-for-ind-box">Transport</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-inners">
                                <div class="div-for-slider-ind-boxs box-shadowzz">
                                    <img src="{{ asset('assets') }}/images/business-central/new/industries-icons/capital-investment.webp" alt="Kinderhotel Aschauerhof" height="150" style="margin: auto;" width="150">
                                    <p class="title-for-ind-box">Capital Investment</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-inners">
                                <div class="div-for-slider-ind-boxs box-shadowzz">
                                    <img src="{{ asset('assets') }}/images/business-central/new/industries-icons/law.webp" alt="Kinderhotel Aschauerhof" height="150" style="margin: auto;" width="150">
                                    <p class="title-for-ind-box">Law</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-inners">
                                <div class="div-for-slider-ind-boxs box-shadowzz">
                                    <img src="{{ asset('assets') }}/images/business-central/new/industries-icons/services.webp" alt="Kinderhotel Aschauerhof" height="150" style="margin: auto;" width="150">
                                    <p class="title-for-ind-box">Services</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-inners">
                                <div class="div-for-slider-ind-boxs box-shadowzz">
                                    <img src="{{ asset('assets') }}/images/business-central/new/industries-icons/education.webp" alt="Kinderhotel Aschauerhof" height="150" style="margin: auto;" width="150">
                                    <p class="title-for-ind-box">Education</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-inners">
                                <div class="div-for-slider-ind-boxs box-shadowzz">
                                    <img src="{{ asset('assets') }}/images/business-central/new/industries-icons/project-management.webp" alt="Kinderhotel Aschauerhof" height="150" style="margin: auto;" width="150">
                                    <p class="title-for-ind-box">Project Management</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-inners">
                                <div class="div-for-slider-ind-boxs">
                                    <img src="{{ asset('assets') }}/images/business-central/new/industries-icons/telecommunication.webp" alt="Kinderhotel Aschauerhof" height="150" style="margin: auto;" width="150">
                                    <p class="title-for-ind-box">Telecommunication</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-inners">
                                <div class="div-for-slider-ind-boxs">
                                    <img src="{{ asset('assets') }}/images/business-central/new/industries-icons/media.webp" alt="Kinderhotel Aschauerhof" height="150" style="margin: auto;" width="150">
                                    <p class="title-for-ind-box">Media</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-inners">
                                <div class="div-for-slider-ind-boxs">
                                    <img src="{{ asset('assets') }}/images/business-central/new/industries-icons/food-delivery.webp" alt="Kinderhotel Aschauerhof" height="150" style="margin: auto;" width="150">
                                    <p class="title-for-ind-box">Food & Delivery Services</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="background" style="background-color:#E6EDEC"></div>
</section>
<section class="slide  kenBurns">
    <div class="content">
        <div class="container">
            <div class="wrapss">
                <div class="why-c-se-new-for-bc-di">
                    <h2 class="heading-lan-bc-why">Why Choose Us?</h2>
                    <p class="p-land-why-bc">Dynamics Stream is a Microsoft Dynamics Implementation Partner with years of expertise working with diverse clients and industries. We can assist you in locating solutions that satisfy your organization's requirements.</p>
                </div>
                <div class="land-bc-sect-why-di">
                    <ul class="grid grid-85 equal ae-2 fromCenter text-cnts" data-equal-collapse-width="767">
                        <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                            <div class="bord-for-new-la-why">
                                <h3 class="heading-green-why"><img src="{{ asset('assets') }}/images/business-central/upd/w-c-u-tick.webp" alt="" style="width: 8%;vertical-align:middle" height="" width=""> Certified Microsoft Gold Partner</h3>
                                <h3 class="heading-green-why"><img src="{{ asset('assets') }}/images/business-central/upd/w-c-u-tick.webp" alt="" style="width: 8%;vertical-align:middle" height="" width=""> Best in Class Consultant</h3>
                                <h3 class="heading-green-why"><img src="{{ asset('assets') }}/images/business-central/upd/w-c-u-tick.webp" alt="" style="width: 8%;vertical-align:middle" height="" width=""> 20+ Years of Innovation</h3>
                                <h3 class="heading-green-why"><img src="{{ asset('assets') }}/images/business-central/upd/w-c-u-tick.webp" alt="" style="width: 8%;vertical-align:middle" height="" width=""> 24x7 Support</h3>
                            </div>
                        </li>
                        <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3 pdng-lef-for-new-la">
                            <h3 class="heading-green-why"><img src="{{ asset('assets') }}/images/business-central/upd/w-c-u-tick.webp" alt="" style="width: 8%;vertical-align:middle" height="" width=""> Mobile First Mindset</h3>
                            <h3 class="heading-green-why"><img src="{{ asset('assets') }}/images/business-central/upd/w-c-u-tick.webp" alt="" style="width: 8%;vertical-align:middle" height="" width=""> On Time Delivery with 100% Commitment</h3>
                            <h3 class="heading-green-why"><img src="{{ asset('assets') }}/images/business-central/upd/w-c-u-tick.webp" alt="" style="width: 8%;vertical-align:middle" height="" width=""> We are Affordable</h3>
                            <h3 class="heading-green-why"><img src="{{ asset('assets') }}/images/business-central/upd/w-c-u-tick.webp" alt="" style="width: 8%;vertical-align:middle" height="" width=""> 100% Unparalleled Expertise</h3>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="background" style="background-image:url(/assets/images/business-central/upd/why-choose-us-bg.webp)"></div>
</section>
<section class="slide  kenBurns">
    <div class="content">
        <div class="container">
            <div class="wrapss">
                <h2 class="heading-lan-bc-pric-new">A customized Pricing plan from Dynamics Stream for all your business needs</h2>
                <div class="online-pricg-m">
                    <ul class="grid grid-85 equal ae-2 fromCenter u-l-m" data-equal-collapse-width="767">
                        <li class="col-12-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                            <div class="s-new-for-la-dynm">
                                <ul class="grid grid-85 equal ae-2 fromCenter" data-equal-collapse-width="767">
                                    <li class="col-3-12 col-tablet-1-2 col-phablet-1-1 ae-3 pad-lef-for-new-la">
                                        <h2 class="b-he-for-new-la">Basic Plan</h2>
                                    </li>
                                    <li class="col-5-12 col-tablet-1-2 col-phablet-1-1 ae-3 pad-lef-for-new-la">
                                        <h2 class="price-h-new-for-la">USD $99.00
                                        </h2>
                                        <p class="sb-price-new-for-la">user/month</p>
                                    </li>
                                    <li class="col-4-12 col-tablet-1-2 col-phablet-1-1 ae-3 pad-lef-for-new-la">
                                        <p class="annual-h-new-for-la">(Annual subscription&ndash;auto renews )<br />Price does not
                                            include tax.</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-for-pricing-new-for online-box-new-for-la">
                                <div>
                                    <div class="for-border-prici">
                                        <ul class="grid grid-85 equal ae-2 fromCenter" data-equal-collapse-width="767">
                                            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3 ">
                                                <p class="list-p-online list-p-mar"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" /> Free
                                                    MailBox - 50 GB</p>
                                                <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" /> No
                                                    Minimum Users </p>
                                                <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" /> 40
                                                    Hours
                                                    Onboarding &
                                                    training </p>
                                                <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" />
                                                    Managing
                                                    Receivables
                                                </p>
                                                <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" />
                                                    Managing
                                                    Payables </p>
                                                <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" />
                                                    Invoicing Prepayments
                                                </p>
                                                <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" />
                                                    Reconciling Bank
                                                    Accounts </p>
                                                <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" />
                                                    Managing
                                                    Intercompany
                                                    Transactions </p>
                                                <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" />
                                                    Accounting for Costs
                                                </p>
                                                <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" />
                                                    Managing
                                                    Inventory Costs
                                                </p>
                                                <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" />
                                                    Understanding the
                                                    General Ledger COA </p>
                                                <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" />
                                                    Consolidating Financial
                                                    Data from Multiple Companies </p>
                                                <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" /> Work
                                                    with Dimensions
                                                </p>
                                                <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" />
                                                    Create
                                                    G/L Budgets </p>

                                                <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" /> Post
                                                    Transactions
                                                    Directly to General Ledger </p>
                                                <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" />
                                                    Reverse
                                                    Journal Postings
                                                    and Undo Receipts/Shipments </p>
                                            </li>
                                            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3 ">

                                                <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" />
                                                    Allocate
                                                    Costs and
                                                    Income </p>
                                                <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" /> Use
                                                    Item
                                                    Charges to
                                                    Account for Additional Trade Costs </p>
                                                <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" />
                                                    Record
                                                    and Reimburse
                                                    Employees' Expenses </p>
                                                <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" />
                                                    Defer
                                                    Revenues &
                                                    Expenses </p>
                                                <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" /> Work
                                                    with Recurring
                                                    Revenue </p>
                                                <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" />
                                                    Update
                                                    Currency Exchange
                                                    Rates </p>
                                                <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" />
                                                    Import
                                                    Payroll
                                                    Transactions </p>
                                                <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" /> Work
                                                    with VAT on Sales &
                                                    Purchases </p>
                                                <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" />
                                                    Report
                                                    VAT to Tax
                                                    Authorities </p>
                                                <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" />
                                                    Convert
                                                    Service
                                                    Contracts that Include VAT Amounts </p>
                                                <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" />
                                                    Analyzing Cash Flows in
                                                    Your Company </p>
                                                <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" />
                                                    Walkthrough: Making Cash
                                                    Flow Forecasts by Using Financial Reports </p>
                                                <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" />
                                                    Analyzing Financial
                                                    Statements in Excel </p>
                                                <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" />
                                                    Accountant Experiences
                                                    in Business Central </p>
                                            </li>
                                        </ul>


                                        <div class="btn-marg-pricng-new-for-la"><a class="btn-buy-new-for-la" href="/basic-plan">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-12-12 col-tablet-1-2 col-phablet-1-1 ae-4">
                            <div class="s-new-for-la-dynm">
                                <ul class="grid grid-85 equal ae-2 fromCenter" data-equal-collapse-width="767">
                                    <li class="col-3-12 col-tablet-1-2 col-phablet-1-1 ae-3 pad-lef-for-new-la">
                                        <h2 class="b-he-for-new-la">Essential Plan</h2>
                                    </li>
                                    <li class="col-5-12 col-tablet-1-2 col-phablet-1-1 ae-3 pad-lef-for-new-la">
                                        <h2 class="price-h-new-for-la">USD $149.00
                                        </h2>
                                        <p class="sb-price-new-for-la">user/month</p>
                                    </li>
                                    <li class="col-4-12 col-tablet-1-2 col-phablet-1-1 ae-3 pad-lef-for-new-la">
                                        <p class="annual-h-new-for-la">(Annual subscription&ndash;auto renews )<br />Price does not
                                            include tax.</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-for-pricing-new-for online-box-new">
                                <div class="for-border-prici">
                                    <p class="list-p-online list-para-mar">Everything in Basic Plan, plus:
                                    </p>
                                    <ul class="grid grid-85 equal ae-2 fromCenter" data-equal-collapse-width="767">
                                        <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                            <p class="list-p-online "><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" />
                                                No Minimum Users
                                            </p>
                                            <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" />
                                                60 Hours
                                                Onboarding & training</p>
                                            <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" />
                                                Sales </p>
                                            <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" />
                                                Inventory</p>
                                        </li>
                                        <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                            <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" />
                                                Fixed Assets
                                                Overview </p>
                                            <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" />
                                                Warehouse
                                                Management</p>
                                            <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" />
                                                Relationship
                                                Management </p>
                                            <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" />
                                                Purchasing</p>

                                        </li>
                                    </ul>
                                    <div class="btn-marg-pricng-new-for-la"><a class="btn-buy-new-for-la" href="/essential-plan">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-12-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                            <div class="s-new-for-la-dynm">
                                <ul class="grid grid-85 equal ae-2 fromCenter" data-equal-collapse-width="767">
                                    <li class="col-3-12 col-tablet-1-2 col-phablet-1-1 ae-3 pad-lef-for-new-la">
                                        <h2 class="b-he-for-new-la">Premium Plan</h2>
                                    </li>
                                    <li class="col-5-12 col-tablet-1-2 col-phablet-1-1 ae-3 pad-lef-for-new-la">
                                        <h2 class="price-h-new-for-la">USD $199.00
                                        </h2>
                                        <p class="sb-price-new-for-la">user/month</p>
                                    </li>
                                    <li class="col-4-12 col-tablet-1-2 col-phablet-1-1 ae-3 pad-lef-for-new-la">
                                        <p class="annual-h-new-for-la">(Annual subscription&ndash;auto renews )<br />Price does not
                                            include tax.</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-for-pricing-new-for online-box-new">
                                <div class="for-border-prici">
                                    <ul class="grid grid-85 equal ae-2 fromCenter u-l-m mrg-prici" data-equal-collapse-width="767">
                                        <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                            <p class="list-p-online list-para-mar">Everything in Essential Plan,
                                                plus:</p>
                                            <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" /> Minimum 5
                                                users </p>
                                            <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" /> 100 Hours
                                                Onboarding & training</p>
                                            <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" /> Assembly
                                                Management</p>
                                            <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" /> Service
                                                Management</p>
                                            <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" /> General
                                                Business Planning</p>
                                            <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" /> Project
                                                Management</p>
                                            <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" /> Production
                                                Planning</p>
                                            <p class="list-p-online"><img class="done-image" src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" />
                                                Manufacturing </p>
                                        </li>
                                        <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                            <h4 class="last-box-h-onl">Apps &amp; Services included</h4>
                                            <ul class="grid grid-85 equal ae-2 fromCenter u-l-m" data-equal-collapse-width="767">
                                                <li class="col-4-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                                    <div class="lst-box-im"><img class="apps-logo-onl" src="https://dynamicsstream.com/storage/pricing/Microsoft_Office_Word.webp" alt="" />
                                                        <p>Word</p>
                                                    </div>
                                                </li>
                                                <li class="col-4-12 col-tablet-1-2 col-phablet-1-1 ae-4">
                                                    <div class="lst-box-im"><img class="apps-logo-onl" src="https://dynamicsstream.com/storage/pricing/Microsoft_Office_Excel.webp" alt="" />
                                                        <p>Excel</p>
                                                    </div>
                                                </li>
                                                <li class="col-4-12 col-tablet-1-2 col-phablet-1-1 ae-4">
                                                    <div class="lst-box-im"><img class="shrponit-logo-onl" src="https://dynamicsstream.com/storage/pricing/Microsoft-PowerPoint.webp" alt="" />
                                                        <p>PowerPoint</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="grid grid-85 equal ae-2 fromCenter u-l-m" data-equal-collapse-width="767">
                                                <li class="col-4-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                                    <div class="lst-box-im"><img class="onedriv-logo-onl" src="https://dynamicsstream.com/storage/pricing/Microsoft_Office_OneDrive.webp" alt="" />
                                                        <p>OneDrive</p>
                                                    </div>
                                                </li>
                                                <li class="col-4-12 col-tablet-1-2 col-phablet-1-1 ae-4">
                                                    <div class="lst-box-im"><img class="apps-logo-onl" src="https://dynamicsstream.com/storage/pricing/Microsoft_Office_Outlook.webp" alt="" />
                                                        <p>Outlook</p>
                                                    </div>
                                                </li>
                                                <li class="col-4-12 col-tablet-1-2 col-phablet-1-1 ae-4">
                                                    <div class="lst-box-im"><img class="exchange-logo-onl" src="https://dynamicsstream.com/storage/pricing/Microsoft_Exchange.webp" alt="" />
                                                        <p>Exchange</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="grid grid-85 equal ae-2 fromCenter u-l-m" data-equal-collapse-width="767">
                                                <li class="col-4-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                                    <div class="lst-box-im"><img class="shrapot-logo-onl" src="https://dynamicsstream.com/storage/pricing/SharePoint.webp" alt="" />
                                                        <p>SharePoint</p>
                                                    </div>
                                                </li>
                                                <li class="col-4-12 col-tablet-1-2 col-phablet-1-1 ae-4">
                                                    <div class="lst-box-im"><img class="apps-logo-onl" src="https://dynamicsstream.com/storage/pricing/Microsoft_Office_Publisher.webp" alt="" />
                                                        <p>Publisher</p>
                                                    </div>
                                                </li>
                                                <li class="col-4-12 col-tablet-1-2 col-phablet-1-1 ae-4">
                                                    <div class="lst-box-im"><img class="shrponit-logo-onl" src="https://dynamicsstream.com/storage/pricing/Microsoft-Access-Logo.webp" alt="" />
                                                        <p>Access</p>
                                                    </div>
                                                </li>
                                            </ul>

                                            <div class="btn-marg-pricng-new-for-la pri-last-btn"><a class="btn-buy-new-for-la" href="/premium-plan">Buy Now</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="term-sec-liv mobile-blocks displ-pri">
                    <img src="https://dynamicsstream.com/storage/new-home-images/pricing/tick.webp" alt="" class="term-icon-cl-live">
                    <p class="term-pop-para-live-2">Prices shown are for informational purposes only and may not be reflective of actual list price due to currency, country, and regional variant factors. Your actual price will be reflected at checkout.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="background" style="background-color:white"></div>
</section>
<!--  Slide 11 Footer Section -->
<section class="slide  kenBurns" id="contact-us">
    <div class="content">
        <div class="containers">
            <div class="wraps">
                @foreach($footersectionone as $footersectionones)
                <div class="main-footer-section">
                    <ul class="grid grid-85 equal ae-2 fromCenter" data-equal-collapse-width="767">
                        <li class="col-3-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                            <h2 class="footer-hs mrn-for-firt-h">Tell Us More About Your Project</h2>
                        </li>
                        <li class="col-9-12 col-tablet-1-2 col-phablet-1-1 ae-4">
                            <div class="modal-land-f">
                                <div class="modal__content">
                                    <div class="formbold-main-wrapper-land-f">
                                        <div class="formbold-form-wrapper-land-f txt-lef-new-365">
                                            @if(\Session::has('success'))
                                            <div class="alert alert-success ">{{ \Session::get('success') }}</div>
                                            {{ \Session::forget('success') }}
                                            @endif
                                            <form method="POST" class="lacontactForm3" action="{{ route('submit-form-partner') }}">
                                                @csrf
                                                <ul class="grid grid-85 equal ae-2 fromCenter" data-equal-collapse-width="767">
                                                    <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                                        <div class="formbold-mb-5-up-land-f d-for-new-footr-form"><label class="formbold-form-label-up-land-f" for="name">Your
                                                                Name:</label>
                                                            <input id="name3" name="name" type="text" class="formbold-form-input-up-land" />
                                                        </div>
                                                    </li>
                                                    <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                                        <div class="formbold-mb-5-up-land-f d-for-new-footr-form"><label class="formbold-form-label-up-land-f" for="name">Company:</label>
                                                            <input id="cname" name="company" type="text" class="formbold-form-input-up-land" />
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="grid mrgn-fot-new-footr-form grid-85 equal ae-2 fromCenter" data-equal-collapse-width="767">
                                                    <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                                        <div class="formbold-mb-5-up-land-f d-for-new-footr-form"><label class="formbold-form-label-up-land-f lpho" for="email">Email:*</label>
                                                            <input id="emailinuaef" onkeyup="validateEmailinuaef()" name="email" type="email" class="formbold-form-input-up-land pho" />
                                                            <span id="error-messageinuaef" class="error-message"></span>
                                                        </div>
                                                    </li>
                                                    <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                                        <div class="formbold-mb-5-up-land-f d-for-new-footr-form"><label class="formbold-form-label-up-land-f for-width-only lpho" for="phone">Phone#:*</label>
                                                            <input id="laphone" name="phone" type="tel" class="formbold-form-input-up-land phonez for-inp-width-only pho" />
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="grid mrgn-fot-new-footr-form grid-85 equal ae-2 fromCenter" data-equal-collapse-width="767">
                                                    <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                                        <div class="formbold-mb-5"><label class="formbold-form-label-land-f" for="phone">What
                                                                solution do you need? </label><select id="solution" class="formbold-form-input-land-f" name="solutions">
                                                                <option disabled="disabled" selected="selected" value="">Choose
                                                                    a
                                                                    Solution</option>
                                                                <option class="optons" value="Dynamics 365 Business Central">
                                                                    Dynamics 365 Business Central
                                                                </option>
                                                                <option value="Dynamics 365 Finance and Supply Chain">Dynamics
                                                                    365
                                                                    Finance and Supply Chain
                                                                </option>
                                                                <option value="Dynamics AX">Dynamics AX</option>
                                                                <option value="Dynamics Navision">Dynamics Navision</option>
                                                                <option value="Dynamics 365 Sales ">Dynamics 365 Sales </option>
                                                                <option value="Dynamics 365 Service">Dynamics 365 Service
                                                                </option>
                                                                <option value="Dynamics 365 Marketing">Dynamics 365 Marketing
                                                                </option>
                                                                <option value="Dynamics 365 Retail and Commerce">Dynamics 365
                                                                    Retail
                                                                    and Commerce</option>
                                                                <option value="Dynamics 365 HR">Dynamics 365 HR</option>
                                                                <option value="Dynamics 365 Project Management">Dynamics 365
                                                                    Project
                                                                    Management</option>
                                                                <option value="Microsoft Office 365">Microsoft Office 365</option>
                                                            </select></div>
                                                    </li>
                                                    <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                                        <div class="formbold-mb-5"><label class="formbold-form-label-land-f" for="phone">Which
                                                                service do you required?</label><select id="service" class="formbold-form-input-land-f" name="services">
                                                                <option disabled="disabled" selected="selected" value="">Choose
                                                                    a
                                                                    Service</option>
                                                                <option value="Implementation Services">Implementation</option>
                                                                <option value="Support Service">Support Service</option>
                                                                <option value="Upgrade Service">Upgrade Service</option>

                                                            </select></div>
                                                    </li>
                                                </ul>
                                                <div class="formbold-mb-5"><label class="formbold-form-label-land-f" for="phone">Tell
                                                        us about your project</label> <textarea id="message" class="formbold-form-input-land-f" cols="20" name="message" rows="2"></textarea></div>
                                                <div class="btn-for-footr-cont-di"><input value="Submit" type="submit" class="formbold-btn-land-f" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <h2 class="footer-hs mo-res-ch">Get In Touch</h2>
                    <ul class="grid grid-85 equal ae-2 fromCenter" data-equal-collapse-width="767">
                        <li class="col-8-12 col-tablet-1-2 col-phablet-1-1 ae-3">

                            <div class="mrg-left-for" style="display: flex;">
                                <div class="anc-di-for-new-bc">
                                    <a href="tel:+971 44 373 103" target="_blank">
                                        <p class="contact-para-footer">
                                            <i class="fa fa-phone mo-fon-new" aria-hidden="true" style="font-size: 24px;"></i>
                                            {{$footersectionones->field_5 ?? ''}}
                                        </p>
                                    </a>
                                </div>
                                <div class="anc-di-for-new-bc">
                                    <a href="tel:+971 4 336 4140" target="_blank">
                                        <p class="contact-para-footer">
                                            <i class="fa fa-phone mo-fon-new" aria-hidden="true" style="font-size: 24px;"></i>
                                            +971 4 336 4140
                                        </p>
                                    </a>
                                </div>
                                <div class="anc-di-for-new-bc">
                                    <a href="https://wa.me/971526510534" target="_blank">
                                        <p class=" contact-para-footer">
                                            <i class="fa fa-whatsapp mo-fon-new" aria-hidden="true" style="font-size: 24px;color: white;border-radius: 4px;padding: 2px;background: #25d366;"></i>
                                            {{$footersectionones->field_6 ?? ''}}
                                        </p>
                                    </a>
                                </div>
                            </div>


                        </li>
                        <li class="col-4-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                            <div class="dsp-for-flx">
                                <ul class="lsdt new-mrt-lan  social-icn-margn">
                                    <div class="social h-p-for-new-bc ">
                                        <a href="https://www.youtube.com/@dynamicsstream" target="_blank" class="youtb socil-icon-bordr"><i class="fa fa-youtube-play"></i></a>
                                        <a href="https://www.linkedin.com/company/dynamicsstream.com" target="_blank" class="linkd socil-icon-bordr"> <i class="fa fa-linkedin-square"></i>
                                        </a>
                                        <a href="https://www.facebook.com/dynamicsstream" target="_blank" class="faceb socil-icon-bordr"><i class="fa fa-facebook"></i></a>
                                    </div>
                                </ul>
                                <div class="qr-footer-f-lan">
                                    @foreach($footersolution as $footersolutions)
                                    <img src="{{ asset('/storage/'.$footersolutions->image_1)}}" class="qrcode-image" alt="">
                                    @endforeach
                                </div>
                            </div>

                        </li>
                    </ul>
                    <div class="addrs-for-new-bc-di">
                        <div class="anc-di">
                            <a href="mailto:info@dynamicsstream.com" target="_blank">
                                <p class="contact-mail-h for-mo-res-new"><i class="fa fa-envelope icon-msg"></i>
                                    {{$footersectionones->field_4 ?? ''}}
                                </p>
                            </a>
                        </div>
                        <ul id="footer-address" class="mrgnz-for-new" style="margin-top: 0px;">
                            <i class="fa fa-map-marker" style="font-size:30px;color:black"></i>
                            <li id="map-icon"> 1803, Metropolis Tower, Business Bay, Dubai - UAE</li>
                        </ul>

                    </div>


                </div>
                <ul class="grid grid-85 equal ae-2 fromCenter cop-r-bg" data-equal-collapse-width="767">
                    <li class="col-12-12 col-tablet-1-2 col-phablet-1-1 ae-3 " style="text-align: center;">
                        <h4 class="copyright-text-lan">&copy;<span id="date"></span> <a href="https://dynamicsstream.com/" class="name-ds-lan">Dynamics Stream
                                Software Solutions</a> </h4>
                    </li>
                </ul>
                @endforeach
            </div>
        </div>
    </div>
    <div class="background" style="background-image:url({{ asset('assets')}}/images/business-central/upd/landing-footer-bg.webp)">
    </div>
</section>

@endsection