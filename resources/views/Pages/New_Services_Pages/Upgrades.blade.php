@extends('NewUpgrMain')
@section('title', 'Upgradation Service')
@section('meta_description' , '')
@section('meta_keywords', '')
@section('contents')
<!--Header Starts-->
<header class="header-bg-Upgr-sec">
    <div>
        <div class="container-xl">
            <div class="px-xl-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 order-lg-2 ms-auto text-center mb-4">
                        <!-- <img src="{{asset('assets')}}/images/new-services-pages/Upgradation/separate-image.webp" class="img-fluid rounded-4 mrgtop-hdr-img" width="600" alt="Header Image" /> -->
                    </div>
                    <div class="col-xl-8 col-lg-8 order-lg-1 mb-4">
                        <div class="content-box mb-4 text-lg-start text-center">
                            <h1 class="">Dynamics 365 ERP & CRM Migration & <br class="br-ds-none"> Upgrades Partners</h1>
                            <p>Your Microsoft Dynamics 365 Migration & Upgrades partners that help you to migrate from Microsoft on-premises to cloud, Microsoft GP to Dynamics 365, Microsoft NAV to Dynamics 365, Microsoft AX to Dynamics 365 end to end migration and upgrades. As your business expands so does the business requirements and needs and with timely updates gives you an extra boost in productivity and seamless operations.</p>
                            <!-- <div class="d-flex flex-wrap align-items-center justify-content-lg-start justify-content-center contact-cfinance-div">
                                <div class="text-start mb-2">
                                    <a href="#popup1" class="btn btn-outline-theme">Request a Free Demo <i class="bi-chevron-right ms-3"></i></a>
                                    <a href="tel:+971526510534" class="btn m-mrgn-top-f btn-theme ms-sm-3 vert-align-sub">+971 52 651 0534</a>
                                </div>
                            </div> -->
                            <div class="d-flex flex-wrap align-items-center justify-content-lg-start justify-content-center contact-cfinance-div">
                                <div class="text-start mb-2">
                                    <a href="/request-demo" class="btn btn-outline-theme">Request a Free Demo <i class="bi-chevron-right ms-3"></i></a>
                                </div>
                                <div class="text-md-start ms-md-3 mb-2">
                                    <p class="mb-0 fw-semibold">Support 24/7 <a class="ms-3 fw-semibold text-decoration-none text-white" href="tel:+971526510534">+971 52 651 0534</a></p>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap align-items-center justify-content-lg-start justify-content-center mb-4">
                                <svg class="flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="36" height="34" viewBox="0 0 46 44" fill="none">
                                    <path d="M44.2935 22.5C44.2935 20.94 44.1497 19.44 43.8827 18H22.5986V26.52H34.7609C34.2268 29.26 32.6243 31.58 30.2206 33.14V38.68H37.555C41.8282 34.84 44.2935 29.2 44.2935 22.5Z" fill="#4285F4" />
                                    <path d="M22.5984 43.9999C28.7001 43.9999 33.8157 42.0399 37.5548 38.6799L30.2204 33.1399C28.2071 34.4599 25.639 35.2599 22.5984 35.2599C16.7227 35.2599 11.7305 31.3999 9.94309 26.2H2.42383V31.8799C6.14237 39.0599 13.7643 43.9999 22.5984 43.9999Z" fill="#34A853" />
                                    <path d="M9.9435 26.1799C9.49152 24.8599 9.22444 23.4599 9.22444 21.9999C9.22444 20.5399 9.49152 19.1399 9.9435 17.8199V12.1399H2.42424C0.88341 15.0999 0 18.4399 0 21.9999C0 25.5599 0.88341 28.8999 2.42424 31.8599L8.2794 27.4199L9.9435 26.1799Z" fill="#FBBC05" />
                                    <path d="M22.5984 8.75999C25.9266 8.75999 28.885 9.87998 31.2476 12.04L37.7191 5.73999C33.7952 2.18 28.7001 0 22.5984 0C13.7643 0 6.14237 4.93999 2.42383 12.14L9.94309 17.82C11.7305 12.62 16.7227 8.75999 22.5984 8.75999Z" fill="#EA4335" />
                                </svg>
                                <h6 class="mb-0 ms-3 text-warning fw-semibold">4.2</h6>
                                <div class="ms-3">
                                    <i class="bi-star-fill text-warning"></i>
                                    <i class="bi-star-fill text-warning"></i>
                                    <i class="bi-star-fill text-warning"></i>
                                    <i class="bi-star-fill text-warning"></i>
                                    <i class="bi-star-fill text-warning"></i>
                                </div>
                                <h6 class="mb-0 ms-3 text-info small text-white">Top-rated care</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div id="popup1" class="overlay">
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
            </div> -->
        </div>
    </div>

</header>
<!--Header Ends-->
<section class="">
    <div class="container-lg mt-impl-div">
        <div class="px-xl-5">
            <h3 class="mt-impl-div font-s-h3-new mb-3">Benefits to Shift your Business <br> from Microsoft to Dynamics 365</h3>
            <p class="p-m-s">No matter what platform you are using at the moment but you’re missing the Real Seamless Solution by Microsoft Dynamics 365 Business Central & ERP CRM implementation partners with more than 10+ Years of experience in Startup’s | SME’s & enterprises</p>
            <div class="mrgn-top-upgr-2-sect">
                <div class="row ">
                    <div class="col-xl-6 col-md-6 d-flex align-items-stretch">
                        <div class="upgr-color-bg-sect-card">
                            <div class="card-content">
                                <div>
                                    <i class="fa-solid fa-chart-line"></i>
                                    <h4>Increased ROI</h4>
                                </div>
                                <div>
                                    <p>It can help you reduce the cost of ownership by eliminating the need for infrastructure investment, upgrade and maintenance costs, and dedicated IT resources.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 d-flex align-items-stretch">
                        <div class="upgr-color-bg-sect-card">
                            <div class="card-content">
                                <div>
                                    <i class="fa-solid fa-cloud-arrow-up"></i>
                                    <h4>Move to Cloud</h4>
                                </div>

                                <p>It can help you reduce the cost of ownership by eliminating the need for infrastructure investment, upgrade and maintenance costs, and dedicated IT resources.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 d-flex align-items-stretch">
                        <div class="upgr-color-bg-sect-card">
                            <div class="card-content">
                                <div>
                                    <i class="fa-solid fa-arrow-up-right-dots"></i>
                                    <h4>Improved Productivity & Automate Redundant Processes</h4>
                                </div>
                                <p>It can help you reduce the cost of ownership by eliminating the need for infrastructure investment, upgrade and maintenance costs, and dedicated IT resources.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 d-flex align-items-stretch">
                        <div class="upgr-color-bg-sect-card">
                            <div class="card-content">
                                <div>
                                    <i class="fa-regular fa-circle-check"></i>
                                    <h4>Effortless Integrations & Powerful Features</h4>
                                </div>
                                <p>It can help you reduce the cost of ownership by eliminating the need for infrastructure investment, upgrade and maintenance costs, and dedicated IT resources.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="bg-color-third-upgr">
    <div class="container-lg">
        <div class="px-xl-5">
            <h3 class="font-s-h3-new upgr-3rd-he-mgn">Migrate to Transform Organization</h3>
            <div class="row  align-items-center">
                <div class="col-xl-6 col-lg-7 mb-3">
                    <div class="content-box">
                        <h4>From Microsoft On-Premises <br> To Cloud</h4>
                        <p class="mb-4">Revolutionize your business management—operate more intelligently, adapt swiftly, and achieve superior performance, business Central boasts a track record of boosting productivity for finance and operations personnel by up to 18%, delivering an impressive 172% ROI.</p>
                        <div class="d-flex align-items-start mb-2">
                            <i class="flex-shrink-0 bi-star-fill text-stars"></i>
                            <p class="flex-grow-1 mb-0 ms-3">FORBES ADVICE RECOGNISED TOP ERP system of 2023</p>
                        </div>
                        <div class="d-flex align-items-start mb-2">
                            <i class="flex-shrink-0 bi-star-fill text-stars"></i>
                            <p class="flex-grow-1 mb-0 ms-3">Startups, SME”s & Enterprises</p>
                        </div>
                        <div class="d-flex align-items-start mb-2">
                            <i class="flex-shrink-0 bi-star-fill text-stars"></i>
                            <p class="flex-grow-1 mb-0 ms-3"> Starting at just $70 per user/month</p>
                        </div>
                        <div class="text-start reqst-bt-3rd-sect-mgn mb-2">
                            <a href="#popup1" class="btn btn-outline-theme">Request a Free Consultation <i class="bi-chevron-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 ms-auto mb-3 upgr-3rd-sect-top-div">
                    <div class="business-img">
                        <img src="{{asset('assets')}}/images/new-services-pages/Upgradation/updated/microsoft-cloud.webp" class="img-fluid" />
                    </div>
                </div>
            </div>
            <div class="row mt-row-lr-upgr align-items-center">
                <div class="col-xl-6 col-lg-7 ms-auto order-lg-2 mb-3">
                    <div class="content-box">
                        <h4>From Dynamics AX to <br> D365 Finance & Operations</h4>
                        <p class="mb-4">Recently Microsoft has prohibited implementing Dynamics AX for new clients. Existing clients, meanwhile, may continue to rely on Microsoft's AX support. Furthermore, by upgrading the Dynamics AX account with Dynamics 365 Finance & Operations, organizations may immediately utilize the updated & business-specific functionality to enhance their business operations and growth strategy.</p>
                        <div class="d-flex align-items-start mb-2">
                            <i class="flex-shrink-0 bi-star-fill text-stars"></i>
                            <p class="flex-grow-1 mb-0 ms-3">FORBES ADVICE RECOGNISED TOP ERP system of 2023</p>
                        </div>
                        <div class="d-flex align-items-start mb-2">
                            <i class="flex-shrink-0 bi-star-fill text-stars"></i>
                            <p class="flex-grow-1 mb-0 ms-3">Startups, SME”s & Enterprises</p>
                        </div>
                        <div class="d-flex align-items-start mb-2">
                            <i class="flex-shrink-0 bi-star-fill text-stars"></i>
                            <p class="flex-grow-1 mb-0 ms-3"> Starting at just $70 per user/month</p>
                        </div>
                        <div class="text-start reqst-bt-3rd-sect-mgn mb-2">
                            <a href="#popup1" class="btn btn-outline-theme">Request a Free Consultation <i class="bi-chevron-right ms-3"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 order-lg-1 mb-3">
                    <div class="text-center">
                        <img src="{{asset('assets')}}/images/new-services-pages/Upgradation/updated/ax-d365-finance.webp" class="img-fluid" />
                    </div>
                </div>
            </div>
            <div class="row mt-row-lr-upgr align-items-center">
                <div class="col-xl-6 col-lg-7 mb-3">
                    <div class="content-box">
                        <a href="" class="solutions-links">
                            <h3 class="text-theme-upgr"></h3>
                        </a>
                        <h4>From Microsoft NAV to <br> D365 Business Central</h4>
                        <p class="mb-4">Upgrade your NAV system to Business Central to increase your business capabilities and overall operations effectiveness while maintaining flexible potential to enhance your production level & generate profitable business outcomes. Ever since Microsoft has stated that it will no longer support earlier NAV versions. As a result, upgrading your current system features becomes necessary.</p>
                        <div class="d-flex align-items-start mb-2">
                            <i class="flex-shrink-0 bi-star-fill text-stars"></i>
                            <p class="flex-grow-1 mb-0 ms-3">FORBES ADVICE RECOGNISED TOP ERP system of 2023</p>
                        </div>
                        <div class="d-flex align-items-start mb-2">
                            <i class="flex-shrink-0 bi-star-fill text-stars"></i>
                            <p class="flex-grow-1 mb-0 ms-3">Startups, SME”s & Enterprises</p>
                        </div>
                        <div class="d-flex align-items-start mb-2">
                            <i class="flex-shrink-0 bi-star-fill text-stars"></i>
                            <p class="flex-grow-1 mb-0 ms-3"> Starting at just $70 per user/month</p>
                        </div>
                        <div class="text-start reqst-bt-3rd-sect-mgn mb-2">
                            <a href="#popup1" class="btn btn-outline-theme">Request a Free Consultation <i class="bi-chevron-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 ms-auto mb-3">
                    <div class="text-center">
                        <img src="{{asset('assets')}}/images/new-services-pages/Upgradation/updated/nav-bc.webp" class="img-fluid" />
                    </div>
                </div>
            </div>
            <div class="row mt-row-lr-upgr align-items-center">
                <div class="col-xl-6 col-lg-7 order-lg-2 ms-auto mb-3">
                    <div class="content-box">
                        <a href="" class="solutions-links">
                            <h3 class="text-theme-upgr"></h3>
                        </a>
                        <h4>From Upgrade to <br> Microsoft Dynamics 365</h4>
                        <p class="mb-4">Organizations that rely on outdated systems will not be able to achieve their full potential if their operations keep growing. Whenever you realize that your operations are being challenged, it's time to upgrade your system using Microsoft Dynamics 365. It may be used in collaboration with your business-specific modules to continue enhancing your performance.</p>
                        <div class="d-flex align-items-start mb-2">
                            <i class="flex-shrink-0 bi-star-fill text-stars"></i>
                            <p class="flex-grow-1 mb-0 ms-3">FORBES ADVICE RECOGNISED TOP ERP system of 2023</p>
                        </div>
                        <div class="d-flex align-items-start mb-2">
                            <i class="flex-shrink-0 bi-star-fill text-stars"></i>
                            <p class="flex-grow-1 mb-0 ms-3">Startups, SME”s & Enterprises</p>
                        </div>
                        <div class="d-flex align-items-start mb-2">
                            <i class="flex-shrink-0 bi-star-fill text-stars"></i>
                            <p class="flex-grow-1 mb-0 ms-3"> Starting at just $70 per user/month</p>
                        </div>
                        <div class="text-start reqst-bt-3rd-sect-mgn mb-2">
                            <a href="#popup1" class="btn btn-outline-theme">Request a Free Consultation <i class="bi-chevron-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 order-lg-1  mb-3">
                    <div class="upgr-3rd-sect-lst-div">
                        <img src="{{asset('assets')}}/images/new-services-pages/Upgradation/updated/upgrade-d365.webp" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="upgrade-last-sec">
    <div class="container-fluid px-0">
        <div class="row g-0 align-items-center">
            <div class="col-lg-4 col-md-4 " style="background: #7EBA00;">
                <div class="upgrade-last-sec-card1">
                    <div class="img-di-last-upgr-sect">
                        <img src="{{asset('assets')}}/images/new-services-pages/Upgradation/updated/why-choose-dsss.webp" class="img-fluid img-last-upgr-sect" />
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8" style="background: #E5F3D3;">
                <div class="upgrade-last-sec-card2">
                    <div>
                        <h3 class="font-s-h3-new upgr-3rd-he-mgn">Why Dynamics Stream UK ?</h3>
                        <ol class="ol-st-last-upgr">
                            <li>
                                <h5>Certified Microsoft Solutions Partner</h5>
                                <p>We are an authorized gold partner for Microsoft products and services, with extensive expertise and years of experience. We manage your complete system requirements, from Dynamics 365 implementation through upgrades and maintenance. We can build a robust, efficient, and profitable solution for your organization since we have professionals, effective methodology, and a safe data migrating skill set.</p>
                            </li>
                            <li>
                                <h5>Migration Security & Reliability</h5>
                                <p>Our consultants can handle effortless Microsoft Dynamics 365 upgrades and migrations while using proactive procedures to support secure and reliable data movement. We migrate your data from your existing situation to the newly configured system in a systematic and step-by-step manner.</p>
                            </li>
                            <li>
                                <h5>Experienced consultants with 300+ Migrations & Upgrades</h5>
                                <p>It can help you reduce the cost of ownership by eliminating the need for infrastructure investment, upgrade and maintenance costs, and dedicated IT resources.</p>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container-lg mt-5">
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

@endsection