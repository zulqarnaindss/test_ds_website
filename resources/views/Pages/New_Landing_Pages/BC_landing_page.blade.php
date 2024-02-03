@extends('NewBCLandingMain')
@section('title', 'Business Central Landing Page')
@section('meta_description' , 'Business Central Landing Page')
@section('meta_keywords', 'Business Central Landing Page')
@section('contents')
<!--Header Starts-->
<header  class="header-bg-BC-sec">
    <div class="container-xl">
        <div class="px-xl-5">
            <div class="row">
                <div class="col-xl-5 col-lg-4 order-lg-2 ms-auto text-center mb-4">
                    <!-- <img src="{{asset('assets')}}/images/new-landing-pages/bc/bc-landing.webp" class="img-fluid rounded-4" width="600" alt="Header Image" /> -->
                    
                </div>
                <div class="col-xl-6 col-lg-8 order-lg-1 mb-4">
                    <div class="content-box mb-4 text-lg-start text-center">
                        <h1 class="cstm-n-bc-lnding-h">Dynamics 365 Business Central</h1>
                        <p>Microsoft Dynamics 365 Business Central is a cloud-based enterprise resource planning (ERP) solution that helps small & medium-sized businesses manage their finances, operations, sales, and customer service. It integrates with other Microsoft products such as Office 365, Power BI, and Teams, and offers a range of features such as accounting, inventory management, project management, and reporting. Business Central can be customized and extended with apps from Microsoft AppSource or developed by partners.
                        </p>

                        <div class="d-flex flex-wrap align-items-center justify-content-lg-start justify-content-center contact-div-new-BC">
                            <div class="text-start mb-2">
                                <a href="#popup1" class="btn btn-outline-theme">Request a Free Demo <i class="bi-chevron-right ms-3"></i></a>
                            </div>
                            <div class="text-md-start ms-md-3 mb-2">
                                <p class="mb-0 fw-semibold">Call 24/7 <a class="ms-3 fw-semibold text-decoration-none text-dark" href="tel:+971526510534">+971 52 651 0534</a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div id="popup1" class="overlay">
            <div class="popup">
                <div class="contact-card">
                    <div>
                        <h2>Start your ERP journey!</h2>
                        <a class="close" href="#">&times;</a>
                        <form class="contact-form" id="contactForm" action="/contact-form" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Full Name" required />
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="text" id="cname" name="company" class="form-control" placeholder="Company Name" />
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="number" id="phone" name="phone" class="form-control" placeholder="Phone Number +97152 768 4867*" required="" />
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="email" id="emailst" onkeyup="validateEmailst()" name="email" class="form-control" placeholder="Email*" required="" />
                                    <span id="error-messagest" class="error-message"></span>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <select id="solution" class="form-control" name="solutions" required="">
                                        <option disabled="disabled" selected="selected" value="">Choose a Solution</option>
                                        <option value="Dynamics 365 Business Central">Dynamics 365 Business Central</option>
                                        <option value="Dynamics 365 Finance and Supply Chain">Dynamics 365
                                            Finance and Supply Chain
                                        </option>
                                        <option value="Dynamics AX">Dynamics AX</option>
                                        <option value="Dynamics Navision">Dynamics Navision</option>
                                        <option value="Dynamics 365 Sales ">Dynamics 365 Sales </option>
                                        <option value="Dynamics 365 Service">Dynamics 365 Service</option>
                                        <option value="Dynamics 365 Marketing">Dynamics 365 Marketing
                                        </option>
                                        <option value="Dynamics 365 Retail and Commerce">Dynamics 365 Retail and Commerce</option>
                                        <option value="Dynamics 365 HR">Dynamics 365 HR</option>
                                        <option value="Dynamics 365 Project Management">Dynamics 365 Project Management</option>
                                        <option value="Microsoft Office 365">Microsoft Office 365</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-outline-theme px-5">Submit</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--Header Ends-->
<section class="service-sec">
    <div class="container-lg">
        <div class="px-xl-5">
            <h2 class="sect-he-sec mb-5">Why Dynamics Stream!</h2>
            <div class="row">
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="col-xl-12 col-md-12  align-items-stretch">
                        <div class="sect-sec-card">
                            <div class="sect-sec-cbc-div">
                                <h4 class="font-st-h4 mb-5">Your business on the go</h4>
                                <p>Work anywhere with full capabilities on desktop, tablet, or mobile across Windows, macOS, Android, and iOS devices.</p>
                                <div class="opcity-redu-circl" style="width: 100px;
    height: 100px;
    top: 261px;
    z-index: -1;
    left: 140px;
    border-radius: 50%;
    position: absolute;
    transform: rotate(269deg);
    transform-origin: 0 0;
    border: 2.92px #96D586 dotted;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-md-12 align-items-stretch">
                        <div class="sect-sec-card">
                            <div class="sect-sec-cbc-div-2">
                                <h4 class="font-st-h4 mb-5">Available worldwide</h4>
                                <p>Use Business Central in 47 languages and in over 160 countries and regions to expand your business globally.</p>
                                <div class="opcity-redu-circl" style="    width: 100px;
    height: 100px;
    top: 508px;
    z-index: -1;
    left: 140px;
    border-radius: 50%;
    position: absolute;
    transform: rotate(269deg);
    transform-origin: 0 0;
    border: 2.92px #96D586 dotted;"></div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-12 col-md-12 align-items-stretch">
                        <div class="sect-sec-card">
                            <div class="sect-sec-cbc-div-3">
                                <h4 class="font-st-h4 mb-5">Work smarter with Copilot</h4>
                                <p>Work anywhere with full capabilities on desktop, tablet, or mobile across Windows, macOS, Android, and iOS devices.</p>
                                <div class="opcity-redu-circl" style="width: 100px;
    height: 100px;
    top: 756px;
    z-index: -1;
    left: 140px;
    border-radius: 50%;
    position: absolute;
    transform: rotate(269deg);
    transform-origin: 0 0;
    border: 2.92px #96D586 dotted;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6  sect-sec-img-r-wi-di">
                    <img src="{{asset('assets')}}/images/new-landing-pages/bc/bc-landing-2.webp" class="img-fluid rounded-4 sect-sec-img-r-wi" width="600" alt="Why Dynamics Stream Image" />
                </div>
            </div>
        </div>
    </div>
    <div class="container-lg">
        <div class="px-xl-5">
            <div class="tab-nbcgtBC tab-nbcgt-new-mBC">
                <h3 class="mt-nbcgtBC font-s-h3 mb-3">Comprehensive business management</h3>
                <p class="paragraph-for-mobile-res">Connect sales, service, finance, and operations to work smarter, adapt faster, and perform better.</p>

                <div class="tab__content-nbcgtBC bg-color-for-thrd-sect-click">
                    <div class="tab__content-item-nbcgtBC">
                        <div class="row align-items-center">
                            <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                <div class=""><img class="" src="https://dynamicsstream.com/storage/new-home-images/newSolutions/bc/move-to-cloud-faster.webp" alt="" /></div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                <h5 class="mb-3">Move to the Cloud Faster</h5>
                                <p class="paragraph-for-mobile-res">Grow your business with flexible deployment, reliability, and security – now available in more than 130 countries and regions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab__content-item-nbcgtBC">
                        <div class="row align-items-center">
                            <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                <div class=""><img class="" src="https://dynamicsstream.com/storage/new-home-images/newSolutions/bc/boost-sales-services.webp" alt="" /></div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                <h5 class="mb-3">Boost sales and service</h5>
                                <p class="paragraph-for-mobile-res">Connect people, processes, and insights to make decisions faster with embedded guidance, dashboards, and interoperability with Microsoft 365 and Microsoft Teams.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab__content-item-nbcgtBC">
                        <div class="row align-items-center">
                            <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                <div class=""><img class="" src="https://dynamicsstream.com/storage/new-home-images/newSolutions/bc/increase-performance.webp" alt="" /></div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                <h5 class="mb-3">Increase performance</h5>
                                <p class="paragraph-for-mobile-res">Accelerate financial close, improve forecasting, and get real-time performance metrics and reporting while fostering compliance across subsidiaries.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab__content-item-nbcgtBC">
                        <div class="row align-items-center">
                            <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                <div class=""><img class="" src="https://dynamicsstream.com/storage/new-home-images/newSolutions/bc/accelerate-sales-processes.webp" alt="" /></div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                <h5 class="mb-3">Accelerate sales processes</h5>
                                <p class="paragraph-for-mobile-res">Take better care of customers by managing the entire sales process from within Outlook, and deliver better outcomes with connected service operations.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab__content-item-nbcgtBC">
                        <div class="row align-items-center">
                            <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                <div class=""><img class="" src="https://dynamicsstream.com/storage/new-home-images/newSolutions/bc/facilitate-project-success.webp" alt="" /></div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                <h5 class="mb-3">Facilitate project success</h5>
                                <p class="paragraph-for-mobile-res">Ensure successful project execution and profitability with planning, resourcing, tracking, costing, billing, accounting, and real-time intelligence.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab__content-item-nbcgtBC">
                        <div class="row align-items-center">
                            <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                <div class=""><img class="" src="https://dynamicsstream.com/storage/new-home-images/newSolutions/bc/optimize-supply-chain-management.webp" alt="" /></div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                <h5 class="mb-3">Optimize supply chain management</h5>
                                <p class="">Deliver products on time and adapt to changing business models with visibility across purchasing, manufacturing, inventory, and warehouses.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab__list-nbcgtBC">
                    <div class="tab__item-nbcgtBC">
                        <p class="">Move to the cloud faster</p>
                    </div>
                    <div class="tab__item-nbcgtBC">
                        <p class="">Boost sales and
                            service</p>
                    </div>
                    <div class="tab__item-nbcgtBC">
                        <p class="">Increase
                            performance</p>
                    </div>
                    <div class="tab__item-nbcgtBC">
                        <p class="">Accelerate sales
                            processes</p>
                    </div>
                    <div class="tab__item-nbcgtBC">
                        <p class="">Facilitate project
                            success</p>
                    </div>
                    <div class="tab__item-nbcgtBC">
                        <p class="">supply
                            chain management</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-lg mt-Imp-card-div">
        <div class="px-xl-5">
            <h3 class="mt-nbcgtBC font-s-h3 mb-4-mrgn-bottom">Impact of Dynamics 365 Business Central</h3>
            <div class="row">
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="Impct-card mt-4">
                        <div class="d-flex-new align-items-start mb-2">
                            <img src="{{asset('assets')}}/images/new-landing-pages/bc/reduce-cost-of-ownership.webp" class="img-fluid flex-shrink-0 ico-wid" alt="">
                            <div>
                                <h4 class="flex-grow-1 mb-4 ml-Imp-h4-p Impct-card-h4">Reduce the cost of Ownership</h4>
                                <p class="ml-Imp-h4-p ml-Imp-h4-p-pdng">It can help you reduce the cost of ownership by eliminating the need for infrastructure investment, upgrade and maintenance costs, and dedicated IT resources.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 align-items-stretch top-Imp-cbc-div">
                    <div class="Impct-card mt-4 mt-Imp-card-div-rigt">
                        <div class="d-flex-new align-items-start mb-2">
                            <img src="{{asset('assets')}}/images/new-landing-pages/bc/Improve-icon.webp" class="img-fluid flex-shrink-0 ico-wid" alt="">
                            <div>
                                <h4 class="flex-grow-1 mb-4 ml-Imp-h4-p Impct-card-h4">Improve Reporting & analysis</h4>
                                <p class="ml-Imp-h4-p">It can help you create a single source of truth for your company data across departments, which can improve decision making, reporting and analysis.</p>
                            </div>
                            <div class="ds-non-bc-circle" style="        width: 600px;
    height: 600px;
    top: 97rem;
    z-index: -1;
    right: 65px;
    border-radius: 50%;
    position: absolute;
    transform: rotate(268deg);
    /* background: linear-gradient(180deg, #EAFFED 0%, #B6F0BF 100%); */
    border: 2.92px #96D5864D dotted;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="Impct-card mt-4">
                        <div class="d-flex-new align-items-start mb-2">
                            <img src="{{asset('assets')}}/images/new-landing-pages/bc/integrating-with-other-applications.webp" class="img-fluid flex-shrink-0 ico-wid" alt="">
                            <div>
                                <h4 class="flex-grow-1 mb-4 ml-Imp-h4-p Impct-card-h4">Integrating with other D365 Applications</h4>
                                <p class="ml-Imp-h4-p ml-Imp-h4-p-pdng">It can help you streamline and grow your business by integrating with other dynamics 365 applications. Microsoft Teams and third party apps.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="Impct-card mt-4 mt-Imp-card-div-rigt">
                        <div class="d-flex-new align-items-start mb-2">
                            <img src="{{asset('assets')}}/images/new-landing-pages/bc/increase-revenue.webp" class="img-fluid flex-shrink-0 ico-wid" alt="">
                            <div>
                                <h4 class="flex-grow-1 mb-4 ml-Imp-h4-p Impct-card-h4">Increasing Revenue</h4>
                                <p class="ml-Imp-h4-p">It can help you achieve a higher return on investment (ROI) by increasing revenue, reducing operational costs, and improving customer satisfaction</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-lg">
        <div class="px-xl-5">
            <div class="tab-nbcgtBC tab-nbcgt-new-mBC">
                <h3 class="mt-nbcgtBC font-s-h3 mb-3">Dynamics 365 Business Central Modules</h3>
                <p class="paragraph-for-mobile-res">Dynamics 365 Business Central is a cloud-based ERP system that offers comprehensive business management capabilities for small and medium-sized businesses.</p>
                <div class="tab__list-nbcgtBC mrtop-fifth-sect">
                    <div class="tab__item-nbcgtBC tab__item-nbcgtBC-2-modules">
                        <p class="">Financial Management</p>
                    </div>
                    <div class="tab__item-nbcgtBC tab__item-nbcgtBC-2-modules">
                        <p class="">Sales & Marketing</p>
                    </div>
                    <div class="tab__item-nbcgtBC tab__item-nbcgtBC-2-modules">
                        <p class="">Supply Chain Management</p>
                    </div>
                    <div class="tab__item-nbcgtBC tab__item-nbcgtBC-2-modules">
                        <p class="">Project Management</p>
                    </div>
                    <div class="tab__item-nbcgtBC tab__item-nbcgtBC-2-modules">
                        <p class="">Customer Service</p>
                    </div>
                    <div class="tab__item-nbcgtBC tab__item-nbcgtBC-2-modules">
                        <p class="">HR Management</p>
                    </div>
                </div>
                <div class="tab__content-nbcgtBC bg-color-for-thrd-sect-click">
                    <div class="tab__content-item-nbcgtBC">
                        <div class="row align-items-center">
                            <div class="col-xl-12 col-lg-12 col-md-12 mb-3">
                                <div class=""><img class="" src="https://dynamicsstream.com/storage/new-home-images/newSolutions/bc/move-to-cloud-faster.webp" alt="" /></div>
                            </div>

                        </div>
                    </div>
                    <div class="tab__content-item-nbcgtBC">
                        <div class="row align-items-center">
                            <div class="col-xl-12 col-lg-12 col-md-12 mb-3">
                                <div class=""><img class="" src="https://dynamicsstream.com/storage/new-home-images/newSolutions/bc/boost-sales-services.webp" alt="" /></div>
                            </div>

                        </div>
                    </div>
                    <div class="tab__content-item-nbcgtBC">
                        <div class="row align-items-center">
                            <div class="col-xl-12 col-lg-12 col-md-12 mb-3">
                                <div class=""><img class="" src="https://dynamicsstream.com/storage/new-home-images/newSolutions/bc/increase-performance.webp" alt="" /></div>
                            </div>

                        </div>
                    </div>
                    <div class="tab__content-item-nbcgtBC">
                        <div class="row align-items-center">
                            <div class="col-xl-12 col-lg-12 col-md-12 mb-3">
                                <div class=""><img class="" src="https://dynamicsstream.com/storage/new-home-images/newSolutions/bc/accelerate-sales-processes.webp" alt="" /></div>
                            </div>

                        </div>
                    </div>
                    <div class="tab__content-item-nbcgtBC">
                        <div class="row align-items-center">
                            <div class="col-xl-12 col-lg-12 col-md-12 mb-3">
                                <div class=""><img class="" src="https://dynamicsstream.com/storage/new-home-images/newSolutions/bc/facilitate-project-success.webp" alt="" /></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab__content-item-nbcgtBC">
                        <div class="row align-items-center">
                            <div class="col-xl-12 col-lg-12 col-md-12 mb-3">
                                <div class=""><img class="" src="https://dynamicsstream.com/storage/new-home-images/newSolutions/bc/optimize-supply-chain-management.webp" alt="" /></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container-lg mt-5 industry-cbc-div ">
        <div class="industry-circl" style="       width: 170px;
    height: 170px;
    top: 198rem;
    z-index: -1;
    left: 37px;
    border-radius: 50%;
    position: absolute;
    transform: rotate(268deg);
    transform-origin: 0 0;
    /* background: linear-gradient(180deg, #EAFFED 0%, #B6F0BF 100%); */
    border: 2.92px #96D586 dotted;"></div>
        <div class="px-xl-5">
            <div class="row industry-bg-sec ">
                <div class="col-xl-12 col-lg-21 mb-3">
                    <div class="content-box">
                        <h3 class="my-4 text-center">Our Industries Experience</h3>
                    </div>
                </div>
            </div>
            <div class="owl-carousel owl-loaded owl-drag mrtop-new-crslidr" id="service_carouselss">
                <div class="owl-stage-outer pb-4">
                    <div class="owl-stage d-flex align-items-stretch" style="transform: translate3d(-417px, 0px, 0px); transition: all 0.25s ease 0s; width: 5012px;">
                        <div class="owl-item active" style="width: 208.8px;">
                            <div class="item text-center  ind-slider-itm-boxs">
                                <h6 class="mb-4">Manufacturing</h6>
                                <p class="txt-color-st">Optimizes production planning, streamline production orders, bills of materials & supply planning.</p>
                                <div class="mt-4">
                                    <a href="https://dynamicsstream.com/microsoft-dynamics-365-for-manufacturing" class="industry-link-learn">
                                        Learn More
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="owl-item " style="width: 208.8px;">
                            <div class="item text-center ind-slider-itm-boxs">

                                <h6 class="mb-4">Retail</h6>
                                <p class="txt-color-st">empowers organizations to streamline eCommerce across branding, stock, and distribution Platform.</p>
                                <div class="mt-4">
                                    <a href="https://dynamicsstream.com/microsoft-dynamics-365-for-retail" class="industry-link-learn">
                                        Learn More
                                    </a>
                                </div>




                            </div>
                        </div>
                        <div class="owl-item " style="width: 208.8px;">

                            <div class="item text-center ind-slider-itm-boxs">

                                <h6 class="mb-4">Public Sector</h6>
                                <p class="txt-color-st">Most public data consists of accounting, financing, regulatory requirements, and employee management.</p>
                                <div class="mt-4">
                                    <a href="https://dynamicsstream.com/microsoft-dynamics-365-for-public-sector" class="industry-link-learn">
                                        Learn More
                                    </a>
                                </div>



                            </div>
                        </div>
                        <div class="owl-item" style="width: 208.8px;">

                            <div class="item text-center ind-slider-itm-boxs">

                                <h6 class="mb-4">Financial Service</h6>
                                <p class="txt-color-st">Deliver more to your clientele, collaborate to be consistent with ever-changing rules, & create every possibility.</p>
                                <div class="mt-4">
                                    <a href="https://dynamicsstream.com/microsoft-dynamics-365-for-financial-services" class="industry-link-learn">
                                        Learn More
                                    </a>
                                </div>



                            </div>
                        </div>
                        <div class="owl-item" style="width: 208.8px;">
                            <div class="item text-center ind-slider-itm-boxs">
                                <h6 class="mb-4">Distribution</h6>
                                <p class="txt-color-st">The industry of bulk purchasing and distributing to stores, commercial, corporate, academic..</p>
                                <div class="mt-4">
                                    <a href="https://dynamicsstream.com/microsoft-dynamics-365-wholesale-and-distribution" class="industry-link-learn">
                                        Learn More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 208.8px;">
                            <div class="item text-center ind-slider-itm-boxs">
                                <div>
                                    <h6 class="mb-4">Transport</h6>
                                    <p class="txt-color-st">A solution that helps transportation and logistics organizations manage their fleet, routes, and deliveries.</p>
                                </div>
                                <div class="mt-4">
                                    <a href="javascript:void(0);" class="industry-link-learn">
                                        Coming up
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 208.8px;">
                            <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                                <div>
                                    <h6 class="mb-4">legals</h6>
                                    <p class="txt-color-st">Dynamics 365 Legals can helps legal professionals manage their contracts, matters, and engagements.</p>
                                </div>
                                <div class="mt-4">
                                    <a href="javascript:void(0);" class="industry-link-learn">
                                        Coming up
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 208.8px;">

                            <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                                <div>
                                    <h6 class="mb-4">Media</h6>
                                    <p class="txt-color-st">It helps media and entertainment organizations create and deliver engaging experiences..</p>
                                </div>
                                <div class="mt-4">
                                    <a href="javascript:void(0);" class="industry-link-learn">
                                        Coming up
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 208.8px;">
                            <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                                <div>
                                    <h6 class="mb-4">Professional Services</h6>
                                    <p class="txt-color-st">Dynamics 365 Professional service is a cloud-based platform for business management.</p>
                                </div>
                                <div class="mt-4">
                                    <a href="javascript:void(0);" class="industry-link-learn">
                                        Coming up
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 208.8px;">
                            <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                                <div>
                                    <h6 class="mb-4">Entertainment</h6>
                                    <p class="txt-color-st">It helps media and entertainment organizations create and deliver engaging experiences for their fans.</p>
                                </div>
                                <div class="mt-4">
                                    <a href="javascript:void(0);" class="industry-link-learn">
                                        Coming up
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 208.8px;">
                            <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                                <div>
                                    <h6 class="mb-4">Food & Delivery Apps</h6>
                                    <p class="txt-color-st">A solution that helps food and delivery businesses manage their orders, inventory, delivery, and customer service.</p>
                                </div>
                                <div class="mt-4">
                                    <a href="javascript:void(0);" class="industry-link-learn">
                                        Coming up
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 208.8px;">
                            <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                                <div>
                                    <h6 class="mb-4">Healthcare & pharma</h6>
                                    <p class="txt-color-st">It helps pharmaceutical organizations improve patient outcomes, optimize operations, and accelerate innovation.</p>
                                </div>
                                <div class="mt-4">
                                    <a href="javascript:void(0);" class="industry-link-learn">
                                        Coming up
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 208.8px;">
                            <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                                <div>
                                    <h6 class="mb-4">D365 ecommerce</h6>
                                    <p class="txt-color-st">It enables businesses to create and manage online stores, back-office operations, & physical retail channels.</p>
                                </div>
                                <div class="mt-4">
                                    <a href="javascript:void(0);" class="industry-link-learn">
                                        Coming up
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 208.8px;">
                            <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                                <div>
                                    <h6 class="mb-4">Education</h6>
                                    <p class="txt-color-st">It helps educational institutions manage their data, processes, & engagement across different levels & domains.</p>
                                </div>
                                <div class="mt-4">
                                    <a href="javascript:void(0);" class="industry-link-learn">
                                        Coming up
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 208.8px;">
                            <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                                <div>
                                    <h6 class="mb-4">Capital Investment</h6>
                                    <p class="txt-color-st">A solution that helps organizations plan, manage, and optimize their capital investments.</p>
                                </div>
                                <div class="mt-4">
                                    <a href="javascript:void(0);" class="industry-link-learn">
                                        Coming up
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 208.8px;">
                            <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                                <div>
                                    <h6 class="mb-4">Non Profit Organization</h6>
                                    <p class="txt-color-st">Provide the capabilities for constituent management, fundraising, awards, volunteer management, & impact tracking.</p>
                                </div>
                                <div class="mt-4">
                                    <a href="javascript:void(0);" class="industry-link-learn">
                                        Coming up
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 208.8px;">
                            <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                                <div>
                                    <h6 class="mb-4">Project Management</h6>
                                    <p class="txt-color-st">Provide capabilities for project planning, like work schedules, budgets, forecasts, invoices, and reports.</p>
                                </div>
                                <div class="mt-4">
                                    <a href="javascript:void(0);" class="industry-link-learn">
                                        Coming up
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 208.8px;">
                            <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                                <div>
                                    <h6 class="mb-4">Construction</h6>
                                    <p class="txt-color-st">It helps construction companies manage their projects, finances, resources, customers, and suppliers more efficiently.</p>
                                </div>
                                <div class="mt-4">
                                    <a href="javascript:void(0);" class="industry-link-learn">
                                        Coming up
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 208.8px;">
                            <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                                <div>
                                    <h6 class="mb-4">Oil & Gas</h6>
                                    <p class="txt-color-st">These solutions help oil and gas companies improve their operations, customer engagement, innovation, and compliance.</p>
                                </div>
                                <div class="mt-4">
                                    <a href="javascript:void(0);" class="industry-link-learn">
                                        Coming up
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 208.8px;">
                            <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                                <div>
                                    <h6 class="mb-4">Governments</h6>
                                    <p class="txt-color-st">Provide capabilities for government operations and infrastructure, like public finance, health and social services.</p>
                                </div>
                                <div class="mt-4">
                                    <a href="javascript:void(0);" class="industry-link-learn">
                                        Coming up
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 208.8px;">
                            <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                                <div>
                                    <h6 class="mb-4">Hospitality</h6>
                                    <p class="txt-color-st">Help businesses to manage their operations, customer engagement, marketing, inventory, and finance from a single platform.</p>
                                </div>
                                <div class="mt-4">
                                    <a href="javascript:void(0);" class="industry-link-learn">
                                        Coming up
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 208.8px;">
                            <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                                <div>
                                    <h6 class="mb-4">Real estate</h6>
                                    <p class="txt-color-st">It refers to the use of D365 solutions by the real estate industry, like property management, leasing, sales, and development.</p>
                                </div>
                                <div class="mt-4">
                                    <a href="javascript:void(0);" class="industry-link-learn">
                                        Coming up
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 208.8px;">
                            <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                                <div>
                                    <h6 class="mb-4">Logistics</h6>
                                    <p class="txt-color-st">It refers to the use of D365 Supply Chain Management to manage the transportation of goods & materials.</p>
                                </div>
                                <div class="mt-4">
                                    <a href="javascript:void(0);" class="industry-link-learn">
                                        Coming up
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 208.8px;">
                            <div class="item text-center align-items-stretch ind-slider-itm-boxs">
                                <div>
                                    <h6 class="mb-4">HR</h6>
                                    <p class="txt-color-st">It helps businesses to improve their productivity, add value, increase staff motivation, and aid employee retention.</p>
                                </div>
                                <div class="mt-4">
                                    <a href="javascript:void(0);" class="industry-link-learn">
                                        Coming up
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection