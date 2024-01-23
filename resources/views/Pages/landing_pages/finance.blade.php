@extends('landing_fo')
@section('title', 'Microsoft Dynamics 365 Finance &amp; Operations | ERP Dubai')
@section('meta_description', 'Dynamics 365 Finance and Operations is a cloud-based modern ERP solution originally developed for large and diverse organizations.')
@section('meta_keywords', 'Dynamics Finance and Operations')
@section('contents')
<!-- Slide 1   -->
<section class="slide  kenBurns" id="sect1">
    <div class="content">
        <div class="container">
            <div class="wrapss">
                <ul class="grid grid-85 equal ae-2 fromCenter  u-l-m-landing-fo" data-equal-collapse-width="767">
                    <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                        <h2 class="heading-landing-fol"> Enhance your Business <br> Efficiency With Dynamics 365 <br>
                            Finance & Operations <br> ERP Solution</h2>
                        <p class="p-landing-first-sect-fol">Monitor your entire financial and inventory situation with
                            Finance & Operation ERP Solution</p>
                        <div class="new-btn-fol-di">
                            <a href="#popup1" class="btn-new-fol">Book Free Consultation</a>
                        </div>
                    </li>
                    <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3 mgn-lan-fir-new">
                        <div class="modal-land-fol mrt-t-new-fol">
                            <h2 class="modal__title-land-f-fol">Tell Us More About Your Project</h2>
                            <div class="modal__content">
                                <div class="formbold-main-wrapper-land">
                                    <div class="formbold-form-wrapper-land">
                                        @if(\Session::has('success'))
                                        <div class="alert alert-success ">{{ \Session::get('success') }}</div>
                                        {{ \Session::forget('success') }}
                                        @endif
                                        <form method="POST" class="lacontactFormf1" action="{{ route('finance-operations-landing-contact-form') }}">
                                            @csrf
                                            <div class="formbold-mb-5-up-land"><label
                                                    class="formbold-form-label-land-f-fol" for="name">Your Name:</label>
                                                <input id="name" name="name" type="text"
                                                    class="formbold-form-input-up-land-f" />
                                            </div>
                                            <div class="formbold-mb-5-up-land"><label
                                                    class="formbold-form-label-land-f-fol" for="name">Company:</label>
                                                <input id="cname" name="company" type="text"
                                                    class="formbold-form-input-up-land-f" />
                                            </div>
                                            <div class="formbold-mb-5-up-land"><label
                                                    class="formbold-form-label-land-f-fol lpho" for="email">Email:*</label>
                                                    <p class="dis-err">
                                                <input id="email" onkeyup="validateEmail()" name="email"
                                                    type="email" class="formbold-form-input-up-land-f pho" required />
                                                <span id="error-message" class="error-message"></span>
                                                </p>
                                            </div>
                                            <div class="formbold-mb-5-up-land"><label
                                                    class="formbold-form-label-land-f-fol for-width-only lpho"
                                                    for="phone">Phone#:*</label>
                                                <p class="dis-err">
                                                    <input name="phone" type="tel"
                                                        class="formbold-form-input-up-land-f for-inp-width-only phonez pho" />
                                                </p>
                                               
                                            </div>
                                            <div class="formbold-mb-5"><label class="formbold-form-label-land-f-fol"
                                                    for="phone">What
                                                    solution do you need? </label><select id="solution"
                                                    class="formbold-form-input-land-f" name="solutions" required="">
                                                    <option disabled="disabled" selected="selected" value="">Choose
                                                        a
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
                                            <div class="formbold-mb-5"><label class="formbold-form-label-land-f-fol"
                                                    for="phone">Which
                                                    service do you required?</label><select id="service"
                                                    class="formbold-form-input-land-f" name="services" required="">
                                                    <option disabled="disabled" selected="selected" value="">Choose
                                                        a
                                                        Service</option>
                                                    <option value="Implementation Services">Implementation</option>
                                                    <option value="Support Service">Support Service</option>
                                                    <option value="Upgrade Service">Upgrade Service</option>

                                                </select></div>
                                            <div class="formbold-mb-5"><label class="formbold-form-label-land-f-fol"
                                                    for="phone">Tell
                                                    us about your project</label> <textarea id="message"
                                                    class="formbold-form-input-land-f" cols="20" name="message"
                                                    rows="3"></textarea></div>
                                            <div><input value="Submit" type="submit" class="formbold-btn-land-fol" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="popup1" class="overlay">
                            <div class="popup">
                                <h2>Tell Us More About Your Project</h2>
                                <a class="close" href="#">&times;</a>
                                <div class="content">
                                    <div class="formbold-main-wrappers">
                                        <div class="formbold-form-wrappers">
                                            @if(\Session::has('success'))
                                            <div class="alert alert-success ">{{ \Session::get('success') }}</div>
                                            {{ \Session::forget('success') }}
                                            @endif
                                            <form method="POST" class="lacontactFormf1" action="{{ route('finance-operations-landing-contact-form') }}">
                                            @csrf
                                                <div class="formbold-mb-5-ups"> <input id="name" name="name" type="text"
                                                        class="formbold-form-input-ups" placeholder="Full Name" /></div>
                                                <div class="formbold-mb-5-ups"> <input id="cname" name="company"
                                                        type="text" class="formbold-form-input-ups"
                                                        placeholder="Company Name" /></div>
                                                <div class="formbold-mb-5-ups">
                                                     <p class="dis-err">
                                                    <input id="emailinuae"
                                                        onkeyup="validateEmailinuae()" name="email" type="email"
                                                        class="formbold-form-input-ups pho" placeholder="Email Address*"
                                                        required />
                                                    <span id="error-messageinuae" class="error-message"></span>
                                                    </P>
                                                </div>
                                                <div class="formbold-mb-5-ups"> 
                                                <input name="phone"
                                                        type="tel" class="formbold-form-input-ups phonez pho" placeholder="Phone Number*" required />
                                                </div>
                                                <div class="formbold-mb-5s"><label class="formbold-form-labels"
                                                        for="phone">What
                                                        solution do you need? </label><select id="solution"
                                                        class="formbold-form-inputs" name="solutions" required="">
                                                        <option disabled="disabled" selected="selected" value="">Choose
                                                            a
                                                            Solution</option>
                                                        <option class="optons" value="Dynamics 365 Business Central">
                                                            Dynamics 365 Business Central
                                                        </option>
                                                        <option value="Dynamics 365 Finance and Supply Chain">Dynamics
                                                            365 Finance and Supply Chain
                                                        </option>
                                                        <option value="Dynamics AX">Dynamics AX</option>
                                                        <option value="Dynamics Navision">Dynamics Navision</option>
                                                        <option value="Dynamics 365 Sales ">Dynamics 365 Sales </option>
                                                        <option value="Dynamics 365 Service">Dynamics 365 Service
                                                        </option>
                                                        <option value="Dynamics 365 Marketing">Dynamics 365 Marketing
                                                        </option>
                                                        <option value="Dynamics 365 Retail and Commerce">Dynamics 365
                                                            Retail and Commerce</option>
                                                        <option value="Dynamics 365 HR">Dynamics 365 HR</option>
                                                        <option value="Dynamics 365 Project Management">Dynamics 365
                                                            Project Management</option>
                                                        <option value="Microsoft Office 365">Microsoft Office 365</option>
                                                    </select></div>
                                                <div class="formbold-mb-5s"><label class="formbold-form-labels"
                                                        for="phone">Which
                                                        service do you required?</label><select id="service"
                                                        class="formbold-form-inputs" name="services" required="">
                                                        <option disabled="disabled" selected="selected" value="">Choose
                                                            a
                                                            Service</option>
                                                        <option value="Implementation Services">Implementation</option>
                                                        <option value="Support Service">Support Service</option>
                                                        <option value="Upgrade Service">Upgrade Service</option>

                                                    </select></div>
                                                <div class="formbold-mb-5s"><label class="formbold-form-labels"
                                                        for="phone">Tell
                                                        us about your project</label> <textarea id="message"
                                                        class="formbold-form-inputs" cols="20" name="message" rows="5"
                                                        placeholder="Message"></textarea></div>
                                                <div><input value="Submit" type="submit" class="formbold-btns" /></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="background"
        style="background-image:url(/assets/images/new-home-images/newSolutions/fo-landing/fo-landing-bg.webp);"></div>
</section>

<!-- Slide 2    -->
<section class="slide  kenBurns">
    <div class="content">
        <div class="containers">
            <div class="wrapss">
                <ul class="grid grid-85 equal ae-2 fromCenter" data-equal-collapse-width="767">
                    <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                        <h2 class="heading-th-lan-fol">Microsoft Dynamics 365 Finance & Operations The Best
                            Approach For Your Company</h2>
                        <p class="p-land-th-fol">Microsoft Dynamics 365 for Finance and Operations is Microsoft's ERP
                            solution for integrating financials & business operations across finance, production,
                            distribution network, warehouse, inventory, & transportation management with an intellectual
                            & interactive user interface for operating a game-changing, advanced enterprise on a global
                            scale.</p>
                        <div class="new-btn-fol-di-2">
                            <a href="#popup1" class="btn-new-fol-2">Talk to our Experts</a>
                        </div>
                    </li>
                    <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                        <div class="fol-img-land-thrd-di">
                            <img src="{{ asset('assets') }}/images/new-home-images/newSolutions/fo-landing/2nd-sec-fo-l.webp"
                                class="land-sec-imag-fol" alt="">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="background" style="background-color:white;">
    </div>
</section>
<!--  Slide 3 -->
<section class="slide  kenBurns">
    <div class="content">
        <div class="containers">
            <div class="wrapss">
                <ul class="grid grid-85 equal ae-2 fromCenter for-sect-3-un-mrgn-fol" data-equal-collapse-width="767">
                    <li class="col-5-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                        <div class="fol-img-land-thrd-di-for-left-sect-3">
                            <img src="{{ asset('assets') }}/images/new-home-images/newSolutions/fo-landing/fl-2nd-img.webp"
                                class="land-sec-imag-fol" alt="">
                        </div>
                    </li>
                    <li class="col-7-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                        <ul class="grid grid-85 equal ae-2 fromCenter" data-equal-collapse-width="767">
                            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                <div class="hovr-effct">
                                    <div class="fol-img-land-thrd-di-sect-3">
                                        <img src="{{ asset('assets') }}/images/new-home-images/newSolutions/fo-landing/cloud-ased-erp-icon.webp"
                                            class="icon-sect-3" alt="">
                                    </div>
                                    <h4 class="heading-th-lan-fol-for-sect-3">A Cloud-Based ERP</h4>
                                    <p class="p-land-th-fol-for-sect-3">Microsoft Dynamics 365 Finance & Operations is a
                                        software-as-a-service (SaaS) ERP solution organized in the cloud. This cloud
                                        focus
                                        provides you with reliable and productive remote work expertise. Semi-annual and
                                        quarterly updates are provided.</p>
                                </div>

                            </li>
                            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                <div class="hovr-effct">
                                    <div class="fol-img-land-thrd-di-sect-3">
                                        <img src="{{ asset('assets') }}/images/new-home-images/newSolutions/fo-landing/enhance-operational-process-icon.webp"
                                            class="icon-sect-3" alt="">
                                    </div>
                                    <h4 class="heading-th-lan-fol-for-sect-3">Enhance Your Operational Processes</h4>
                                    <p class="p-land-th-fol-for-sect-3">Dynamics 365 for Finance and Operations
                                        facilitates
                                        advanced
                                        businesses in improving operational processes & delivering excellence at scale,
                                        allowing them to increase growth while meeting changing customer demands.</p>
                                </div>

                            </li>
                        </ul>
                        <ul class="grid grid-85 equal ae-2 fromCenter" data-equal-collapse-width="767">
                            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                <div class="hovr-effct">
                                    <div class="fol-img-land-thrd-di-sect-3">
                                        <img src="{{ asset('assets') }}/images/new-home-images/newSolutions/fo-landing/transform-your-products.webp"
                                            class="icon-sect-3" alt="">
                                    </div>
                                    <h4 class="heading-th-lan-fol-for-sect-3">Transform Your Products</h4>
                                    <p class="p-land-th-fol-for-sect-3">Microsoft Dynamics 365 for Finance and
                                        Operations
                                        delivers industry awareness into how their products are being used, enabling
                                        them to
                                        maximize existing offerings and establish new ones to meet market demands.</p>
                                </div>

                            </li>
                            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                <div class="hovr-effct">
                                    <div class="fol-img-land-thrd-di-sect-3">
                                        <img src="{{ asset('assets') }}/images/new-home-images/newSolutions/fo-landing/make-accurate-dcisions-icon.webp"
                                            class="icon-sect-3" alt="">
                                    </div>
                                    <h4 class="heading-th-lan-fol-for-sect-3">Make accurate decisions</h4>
                                    <p class="p-land-th-fol-for-sect-3">Acquire actual financial statements, operational
                                        analytics, & collective insights from your entire organization and supply chain.
                                        Your employees can interact, drive results, & produce wider decisions quicker
                                        with
                                        Microsoft Dynamics 365 Finance and Supply Chain Management.</p>
                                </div>

                            </li>
                        </ul>
                        <ul class="grid grid-85 equal ae-2 fromCenter" data-equal-collapse-width="767">
                            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                <div class="hovr-effct">
                                    <div class="fol-img-land-thrd-di-sect-3">
                                        <img src="{{ asset('assets') }}/images/new-home-images/newSolutions/fo-landing/availability-at-any-time-icon.webp"
                                            class="icon-sect-3" alt="">
                                    </div>
                                    <h4 class="heading-th-lan-fol-for-sect-3">Availability at any time, anywhere.</h4>
                                    <p class="p-land-th-fol-for-sect-3">Dynamics 365 for Finance and Operations has a
                                        browser-based user interface that makes it easier to use on mobile devices. The
                                        system may be managed from any place and on any device.</p>
                                </div>

                            </li>
                            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                <div class="hovr-effct">
                                    <div class="fol-img-land-thrd-di-sect-3">
                                        <img src="{{ asset('assets') }}/images/new-home-images/newSolutions/fo-landing/reducing-finances-icon.webp"
                                            class="icon-sect-3" alt="">
                                    </div>
                                    <h4 class="heading-th-lan-fol-for-sect-3">Reducing finances</h4>
                                    <p class="p-land-th-fol-for-sect-3">D365 Finance and Operations allows a company to
                                        manage its budget through timesheets. These timesheets make it much easier and
                                        more convenient for the business to manage customer projects and task costing
                                        and reporting.</p>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="background" style="background-color:white">
    </div>
</section>
<!--  Slide 4 -->
<section class="slide  kenBurns">
    <div class="content">
        <div class="containers">
            <div class="wrapss">
                <h2 class="heading-th-lan-fol-for-sect-4">Our Finance & Operations Services</h2>
                <ul class="grid grid-85 equal ae-2 fromCenter for-sect-3-un-mrgn-fol-for-sect-4"
                    data-equal-collapse-width="767">
                    <li class="col-7-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                        <div class="containeer-for-fol mr-for-new-d365-land-1-fol">
                            <div class="for-land-fol-box">
                                <h4 class="">Consultation</h4>
                                <p>Our Microsoft 365 Finance & Operations experts
                                    evaluate your processes & develop an implementation strategy for adoption.</p>
                            </div>
                            <div class="for-land-fol-box">
                                <h4 class="">Implementation</h4>
                                <p>Our team of professionals takes care of the
                                    whole D365 Finance and Operations implementation process to guarantee a smooth
                                    transition.</p>
                            </div>
                        </div>
                        <div class="containeer-for-fol mr-for-new-d365-land-1-fol">
                            <div class="for-land-fol-box">
                                <h4 class="">Customization</h4>
                                <p>We consider your business's requirements and
                                    provide a tailored, customized plan for business central implementation.</p>
                            </div>
                            <div class="for-land-fol-box">
                                <h4 class="">Integration</h4>
                                <p>You will be on your path toward integrated
                                    operations with Business Central in no time with our team of Microsoft Certified
                                    partners.</p>
                            </div>
                        </div>
                        <div class="containeer-for-fol mr-for-new-d365-land-1-fol">
                            <div class="for-land-fol-box">
                                <h4 class="">Support & Maintenance</h4>
                                <p>We are available 24/7 after implementation to
                                    ensure that you get the most out of your D365 Finance and Operations
                                    configuration.</p>
                            </div>
                            <div class="for-land-fol-box">
                                <h4 class="">Migration & Upgradation</h4>
                                <p>Dynamics Stream is the finest in migration and upgrade services. Upgrade from
                                    Dynamics AX to the most recent version of Dynamics 365 Finance and Operations</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-5-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                        <div class="fol-img-land-thrd-di-for-left-sect-4-n">
                            <img src="{{ asset('assets') }}/images/new-home-images/newSolutions/fo-landing/our-services-img.webp"
                                class="land-sec-imag-fol" alt="">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="background" style="background-color:#ECEFF8">
    </div>
</section>
<section class="slide  kenBurns">
    <div class="content">
        <div class="container">
            <div class="wrapss">
                <h2 class="heading-th-lan-fol-testi">We Don't believe in Talk's!</h2>
                <p class="p-land-bc-testi finc-la">Our Real Results and Clients Feedback tell everything</p>
                <div class="sd_master_wrapper fin-for-ma-test">
                    <div class="slideshow bg-for-fol">
                        <div class="contentz">
                            <div class="thumbnail">
                                <img src="{{ asset('assets') }}/images/business-central/cortec-new.webp">
                            </div>
                            <div class="btnNtxt">
                                <div class="sdAllContent">
                                    <p class="SdClientName">Cortec Middle East</p>
                                    <div class="coma-img-di">
                                        <img src="{{ asset('assets') }}/images/new-home-images/newSolutions/fo-landing/start.webp"
                                            class="for-m-coma-testi" alt="">
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
                                        <img src="{{ asset('assets') }}/images/new-home-images/newSolutions/fo-landing/end.webp"
                                            class="for-m-coma-testi" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contentz">
                            <div class="thumbnail">
                                <img src="{{ asset('assets') }}/images/business-central/gulf-capital-new.webp">
                            </div>
                            <div class="btnNtxt">
                                <div class="sdAllContent">
                                    <p class="SdClientName">Gulf Capital Investments Limited</p>
                                    <div class="coma-img-di">
                                        <img src="{{ asset('assets') }}/images/new-home-images/newSolutions/fo-landing/start.webp"
                                            class="for-m-coma-testi" alt="">
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
                                        <img src="{{ asset('assets') }}/images/new-home-images/newSolutions/fo-landing/end.webp"
                                            class="for-m-coma-testi" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contentz">
                            <div class="thumbnail">
                                <img src="{{ asset('assets') }}/images/business-central/khiara-new.webp">
                            </div>
                            <div class="btnNtxt">
                                <div class="sdAllContent">
                                    <p class="SdClientName">Khiara Group</p>
                                    <div class="coma-img-di">
                                        <img src="{{ asset('assets') }}/images/new-home-images/newSolutions/fo-landing/start.webp"
                                            class="for-m-coma-testi" alt="">
                                    </div>
                                    <div class="sd_scroll">
                                        <p class="sdCustomSliderHeadig">Dynamics Stream successfully implemented D365
                                            Business Central as per my requirements, with excellent planning. Their
                                            support post-implementation is commendable. The team is hardworking, prompt,
                                            and dedicated to resolving any issues or queries. I highly recommend them
                                            for ERP solution implementations.</p>

                                    </div>
                                    <div class="coma-img-last-di">
                                        <img src="{{ asset('assets') }}/images/new-home-images/newSolutions/fo-landing/end.webp"
                                            class="for-m-coma-testi" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="background"
        style="background-image:url(assets/images/new-home-images/newSolutions/fo-landing/client-testimonial-bg.webp)">
    </div>
</section>
<section class="slide  kenBurns">
    <div class="content">
        <div class="container">
            <div class="wrapss">
                <h2 class="heading-lan-bc-why">Why Choose Us?</h2>
                <ul class="grid grid-85 equal ae-2 fromCenter" data-equal-collapse-width="767">
                    <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                        <p class="p-land-why-fol">Dynamics Stream is a Microsoft Dynamics 365 Solutions Provider Partner
                            with
                            years of
                            expertise working with diverse clients and industries. We can assist you in locating
                            solutions that
                            satisfy your organization's requirements. </p>
                    </li>
                    <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                        <div class="">
                            <img src="{{ asset('assets') }}/images/new-home-images/newSolutions/fo-landing/fol-gold-partner-logo.webp" class="ms-gol-p-new-fol-logo"
                                alt="">
                        </div>
                    </li>
                </ul>
                <div class="land-bc-sect-why-di">
                    <ul class="grid grid-85 equal ae-2 fromCenter" data-equal-collapse-width="767">
                        <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                            <h3 class="heading-green-why">1. Certified Microsoft Gold Partner</h3>
                            <p class="new-p-for-new-fol">Dynamics Stream is the leading Microsoft Gold Partner in Dubai, UAE, and the Middle East.</p>
                            <h3 class="heading-green-why">3. Professional ERP Solution</h3>
                            <p class="new-p-for-new-fol">Dynamics Stream provides you with the best and most professional ERP solutions as per your needs and requirements.</p>
                           <h3 class="heading-green-why">5. 24x7 Support</h3>
                            <p class="new-p-for-new-fol">Dynamics Stream support team has successfully addressed hundreds of support requests, with an exceptional success rate and customer satisfaction.</p>
                        </li>
                        <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                             <h3 class="heading-green-why">2. On-Time Delivery</h3>
                            <p class="new-p-for-new-fol">Dynamics Stream always follows our deadlines and provides you the solutions on time.</p>
                            
                            <h3 class="heading-green-why">4. Experienced Team Model</h3>
                            <p class="new-p-for-new-fol">Dynamics Stream has a dedicated team of experts to provide you the result-oriented and target-achieving solutions.</p>
                            
                            <h3 class="heading-green-why">6. Cost-Effective</h3>
                            <p class="new-p-for-new-fol">Dynamics Stream can provide you with  best quotation for Dynamics 365 Finance and Operations ERP implementation, support & upgradation services with an experienced team model.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="background"
        style="background-image:url(/assets/images/new-home-images/newSolutions/fo-landing/why-choose-us-bg.webp)"></div>
</section>
<section class="slide  kenBurns" id="contact-us">
    <div class="content">
        <div class="containers">
            <div class="wraps">
                @foreach($footersectionone as $footersectionones)
                <div class="main-footer-section">
                    <h3 class=" footer-hs-fol">
                        {{$footersectionones->field_1 ?? ''}}
                    </h3>
                    <ul class="grid grid-85 equal ae-2 fromCenter" data-equal-collapse-width="767">
                        <li class="col-5-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                            <div class="info-data-styl di-main-addres-fol">
                                <h3 class="Address-h-fol">UAE Address</h3>
                                <div class="anc-di">
                                    <a href="mailto:info@dynamicsstream.com" target="_blank">
                                        <p class="contact-mail-h-fol"><i class="fa fa-envelope icon-msg"></i>
                                            {{$footersectionones->field_4 ?? ''}}
                                        </p>
                                    </a>
                                </div>
                                <div class="anc-di">

                                    <a href="tel:+971 44 373 103" target="_blank">
                                        <p class="contact-para-footer-fol">
                                            <img src="{{asset('assets')}}/images/new-home-images/newSolutions/fo-landing/call.webp"
                                                class="footer-icon-logo" alt="">
                                            {{$footersectionones->field_5 ?? ''}}
                                        </p>
                                    </a>
                                </div>
                                <div class="anc-di">

                                    <a href="tel:+971 4 336 4140" target="_blank">
                                        <p class="contact-para-footer-fol">
                                            <img src="{{asset('assets')}}/images/new-home-images/newSolutions/fo-landing/call.webp"
                                                class="footer-icon-logo" alt="">
                                            +971 4 336 4140
                                        </p>
                                    </a>
                                </div>
                                <div class="anc-di">
                                    <a href="https://wa.me/971526510534" target="_blank">
                                        <p class=" contact-para-footer-fol">
                                            <img src="{{asset('assets')}}/images/new-home-images/newSolutions/fo-landing/watsapp.webp"
                                                class="footer-icon-logo" alt="">
                                            {{$footersectionones->field_6 ?? ''}}
                                        </p>
                                    </a>
                                </div>
                                <ul id="footer-address-fol">
                                <i class="fa fa-map-marker" style="font-size:30px;color:white"></i> <li id="map-icon">1803, Metropolis Tower, Business Bay, Dubai - UAE</li>
                                </ul>
                            </div>
                            <div class="footer-logo-div">
                                @foreach($footersolution as $footersolutions)
                                <a href="/">
                                    <img src="{{ asset('assets')}}/images/business-central/dsss-logo-footer.webp"
                                        class="logo-footre-image-land-f mobile-none" alt="">
                                    <img src="{{ asset('assets')}}/images/business-central/dsss-logo-footer.webp"
                                        class="logo-footre-image-land-f mobile-cntrs mobile-blocks" alt="">
                                </a>
                                @endforeach
                            </div>
                            <div class="qr-footer-f">
                                @foreach($footersolution as $footersolutions)
                                <img src="{{ asset('/storage/'.$footersolutions->image_1)}}" class="qrcode-image-fol"
                                    alt="">
                                @endforeach
                            </div>
                            <ul class="lsdt social-icn-margn">
                                <div class="social f-l-new-al mrtn-t-new-so">
                                    <a href="https://www.youtube.com/@dynamicsstream" target="_blank" class="youtb"><i
                                            class="fa fa-youtube-play"></i></a>
                                    <a href="https://www.linkedin.com/company/dynamicsstream.com" target="_blank"
                                        class="linkd"> <i class="fa fa-linkedin-square"></i>
                                    </a>
                                    <a href="https://www.facebook.com/dynamicsstream" target="_blank" class="faceb"><i
                                            class="fa fa-facebook"></i></a>
                                </div>
                            </ul>
                        <li class="col-7-12 col-tablet-1-2 col-phablet-1-1 ae-4">
                            <div class="modal-land-f-fol">
                                <h2 class="modal__title-land-f-fol" style="color: white;">Tell Us More About Your Project</h2>
                                <div class="modal__content">
                                    <div class="formbold-main-wrapper-land-f">
                                        <div class="formbold-form-wrapper-land-f-fol txt-lef-new-365">
                                            @if(\Session::has('success'))
                                            <div class="alert alert-success ">{{ \Session::get('success') }}</div>
                                            {{ \Session::forget('success') }}
                                            @endif
                                            <form method="POST" class="lacontactFormf1" action="{{ route('finance-operations-landing-contact-form') }}">
                                            @csrf
                                                <div class="formbold-mb-5-up-land-f-fol">
                                                    <input id="name" name="name" type="text" placeholder="Full Name"
                                                        class="formbold-form-input-up-land-f-fol" />
                                                </div>
                                                <div class="formbold-mb-5-up-land-f-fol">
                                                    <input id="cname" name="company" type="text"
                                                        class="formbold-form-input-up-land-f-fol" placeholder="Company" />
                                                </div>
                                                <div class="formbold-mb-5-up-land-f-fol">
                                                    <input id="emailf" onkeyup="validateEmailinuaef()" name="email"
                                                        type="email" placeholder="Email*" class="formbold-form-input-up-land-f-fol pho"
                                                        required="" />
                                                    <span id="error-messagef" class="error-message"></span>
                                                </div>
                                                <div class="formbold-mb-5-up-land-f-fol">
                                                    <input name="phone" type="tel"
                                                        class="formbold-form-input-up-land-f-fol for-inp-width-only phonez pho" placeholder="Phone Number*"  required />
                                                </div>
                                                <div class="formbold-mb-5-fol">
                                                        <select id="solution"
                                                        class="formbold-form-input-land-f-fol" name="solutions" required="">
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
                                                <div class="formbold-mb-5-fol">
                                                        <select id="service"
                                                        class="formbold-form-input-land-f-fol" name="services" required="">
                                                        <option disabled="disabled" selected="selected" value="">Choose
                                                            a
                                                            Service</option>
                                                        <option value="Implementation Services">Implementation</option>
                                                        <option value="Support Service">Support Service</option>
                                                        <option value="Upgrade Service">Upgrade Service</option>

                                                    </select></div>
                                                <div class="formbold-mb-5-fol">
                                                        <textarea id="message"
                                                        class="formbold-form-input-land-f-fol" placeholder="Tell us about your project" cols="20" name="message"
                                                        rows="3"></textarea></div>
                                                <div class="mr-btn-fo-fol"><input value="Submit" type="submit" class="formbold-btn-land-f-fol" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="grid grid-85 equal ae-2 fromCenter" data-equal-collapse-width="767">
                        <li class="col-12-12 col-tablet-1-2 col-phablet-1-1 ae-3 " style="text-align: center;">
                            <h4 class="copyright-text-fol"> &copy; <span id="date"></span> <a
                                    href="https://dynamicsstream.com/" class="name-ds">Dynamics Stream
                                    Software Solutions</a> </h4>
                        </li>
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="background" style="background-color:rgba(35, 24, 56, 1);">
    </div>
</section>
@endsection