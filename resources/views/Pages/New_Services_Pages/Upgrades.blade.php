@extends('NewUpgrMain')
@section('title', 'Migrate to Dynamics 365  | Dynamics Stream UK')
@section('meta_description' , 'Effortlessly transition your business to the cloud with seamless Business Central and Dynamics 365 data migration services in the UK. Our experts ensure smooth migration from NAV to Business Central, handling all aspects of data migration, including Finance and Operations. Trust us for a hassle-free transition')
@section('meta_keywords', 'nav to business central migration, d365 data migration, nav to business central migration, dynamics data migration, kingswaysoft dynamics 365 data migration, microsoft crm data migration, migrate dynamics 365 on premise to online, migrate dynamics crm on premise to cloud')
@section('contents')
<!--Header Starts-->
<header class="header-bg-Upgr-sec">
    <div>
        <div class="container-xl">
            <div class="px-xl-5">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 order-lg-2 ms-auto text-center mb-4">
                        <img src="{{asset('assets')}}/images/new-services-pages/Upgradation/migration.webp" class="img-fluid rounded-4 mr-hdr-img" width="600" alt="Header Image" />
                    </div>
                    <div class="col-xl-7 col-lg-7 order-lg-1 mb-4">
                        <div class="content-box mb-4 text-lg-start text-center">
                            <h1 class="">Revolutionize Your Business with <br class="br-ds-none"> Seamless<span style="font-weight: 500;"> Microsoft Dynamics Migration Partners</span></h1>
                            <p>Your Microsoft Dynamics 365 Migration & Upgrades partners that help you to migrate<span style="font-weight: 500;"> from Microsoft on-premises to cloud, Microsoft GP to Dynamics 365, Microsoft NAV to Dynamics 365, Microsoft AX to Dynamics 365 end to end migration and upgrades</span>. As your business expands so do the business requirements and needs and timely updates give you an extra boost in productivity and seamless operations.</p>
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

                            </div>
                            <div class="d-flex flex-wrap align-items-center justify-content-lg-start justify-content-center mb-4">
                                <svg class="flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="16" height="34" viewBox="0 0 46 44" fill="none">
                                    <path d="M44.2935 22.5C44.2935 20.94 44.1497 19.44 43.8827 18H22.5986V26.52H34.7609C34.2268 29.26 32.6243 31.58 30.2206 33.14V38.68H37.555C41.8282 34.84 44.2935 29.2 44.2935 22.5Z" fill="#4285F4" />
                                    <path d="M22.5984 43.9999C28.7001 43.9999 33.8157 42.0399 37.5548 38.6799L30.2204 33.1399C28.2071 34.4599 25.639 35.2599 22.5984 35.2599C16.7227 35.2599 11.7305 31.3999 9.94309 26.2H2.42383V31.8799C6.14237 39.0599 13.7643 43.9999 22.5984 43.9999Z" fill="#34A853" />
                                    <path d="M9.9435 26.1799C9.49152 24.8599 9.22444 23.4599 9.22444 21.9999C9.22444 20.5399 9.49152 19.1399 9.9435 17.8199V12.1399H2.42424C0.88341 15.0999 0 18.4399 0 21.9999C0 25.5599 0.88341 28.8999 2.42424 31.8599L8.2794 27.4199L9.9435 26.1799Z" fill="#FBBC05" />
                                    <path d="M22.5984 8.75999C25.9266 8.75999 28.885 9.87998 31.2476 12.04L37.7191 5.73999C33.7952 2.18 28.7001 0 22.5984 0C13.7643 0 6.14237 4.93999 2.42383 12.14L9.94309 17.82C11.7305 12.62 16.7227 8.75999 22.5984 8.75999Z" fill="#EA4335" />
                                </svg>
                                <h6 class="mb-0 ms-2 text-warning google-rated-point fw-semibold">4.2</h6>
                                <div class="ms-2 stars-inner-st">
                                    <i class="bi-star-fill text-warning"></i>
                                    <i class="bi-star-fill text-warning"></i>
                                    <i class="bi-star-fill text-warning"></i>
                                    <i class="bi-star-fill text-warning"></i>
                                    <i class="bi-star-fill text-warning"></i>
                                </div>
                                <h6 class="mb-0 ms-2 text-info rated-care-txt">Top-rated care</h6>
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
            <h3 class="mt-impl-div font-s-h3-new mb-3">Unleash Business Potential <br> Transitioning from Microsoft to Dynamics 365</h3>
            <p class="p-m-s">Experience the transformative power of<span style="font-weight: 500;"> Microsoft Dynamics Migration Services</span> offered by Dynamics Stream. Elevate your business efficiency, streamline operations, and embrace a future-ready approach to growth and innovation as<span style="font-weight: 500;"> we migrate Dynamics CRM on premise to cloud</span>. As a trusted partner in your digital journey, we understand the evolving needs of businesses in the UK and provide tailored<span style="font-weight: 500;"> Business Central cloud migration services</span> that unlock unparalleled benefits.</p>
            <div class="mrgn-top-upgr-2-sect">
                <div class="row ">
                    <div class="col-xl-6 col-md-6 d-flex align-items-stretch">
                        <div class="upgr-color-bg-sect-card">
                            <div class="card-content">
                                <div>
                                    <i class="fa-solid fa-chart-line"></i>
                                    <h4>Cost-Efficiency and Increased ROI</h4>
                                </div>
                                <div>
                                    <p>Experience rapid Return on Investment as Dynamics 365 empowers your business to achieve more with less. When you<span style="font-weight: 500;"> migrate Dynamics 365 on premise to online</span>, you eliminate the need for costly infrastructure maintenance, upgrade expenses, and the burden of maintaining dedicated IT resources. </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 d-flex align-items-stretch">
                        <div class="upgr-color-bg-sect-card">
                            <div class="card-content">
                                <div>
                                    <i class="fa-solid fa-cloud-arrow-up"></i>
                                    <h4>Seamless Transition to the Cloud</h4>
                                </div>

                                <p><span style="font-weight: 500;">Dynamics CRM on premise to online migration</span> reduces the cost of ownership and eliminates the need for on-premises infrastructure. It offers unparalleled scalability and flexibility, allowing your business to adapt and grow seamlessly. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 d-flex align-items-stretch">
                        <div class="upgr-color-bg-sect-card">
                            <div class="card-content">
                                <div>
                                    <i class="fa-solid fa-arrow-up-right-dots"></i>
                                    <h4>Enhanced Productivity and Effeciency</h4>
                                </div>
                                <p>With Dynamics 365 Migration, your organization can streamline processes, automate tasks, and drive productivity across departments. Say goodbye to manual workflows and inefficiencies as<span style="font-weight: 500;"> Microsoft CRM data migration</span> empowers your team to accomplish more in less time, leading to enhanced operational efficiency and resource utilization.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 d-flex align-items-stretch">
                        <div class="upgr-color-bg-sect-card">
                            <div class="card-content">
                                <div>
                                    <i class="fa-regular fa-circle-check"></i>
                                    <h4>Effortless Integrations & Robust Features</h4>
                                </div>
                                <p>With Dynamics 365 migration, integration becomes seamless and effortless. Unlock the power of robust features and functionalities that <span style="font-weight: 500;">Dynamics CRM data migration</span> offers, allowing you to integrate with existing systems, leverage powerful analytics, and drive informed decision-making across your organization.</p>
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
            <h3 class="font-s-h3-new upgr-3rd-he-mgn">Effortless Upgrade, Endless Opportunities</h3>
            <div class="row  align-items-center">
                <div class="col-xl-6 col-lg-7 mb-3">
                    <div class="content-box">
                        <h4>From Microsoft On-Premises<br> to Cloud</h4>
                        <p class="mb-4">In today's dynamic business landscape, it is pivotal to<span style="font-weight: 500;"> migrate Dynamics CRM on premise to cloud</span> for unlocking your business's full potential. Embrace the future of business management with<span style="font-weight: 500;"> Dynamics 365 for business central implementation</span>, where intelligence meets adaptability. Experience a remarkable transformation as your finance and operations personnel witness a surge in productivity by up to 18%. With an impressive 172% ROI, Dynamics 365 Business Central sets the stage for unparalleled growth and efficiency.</p>
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
                            <p class="flex-grow-1 mb-0 ms-3">Starting at just $70 per user/month</p>
                        </div>
                        <div class="text-start reqst-bt-3rd-sect-mgn mb-2">
                            <a href="/request-demo" class="btn btn-outline-theme">Request a Free Demo <i class="bi-chevron-right ms-3"></i></a>
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
                        <h4>From Dynamics AX to <br> Dynamics 365 Finance & Operations</h4>
                        <p class="mb-4">In light of recent updates, Microsoft has ceased new client implementations of Dynamics AX. However, existing clients can still benefit from ongoing support. By<span style="font-weight: 500;"> Dynamics AX to Dynamics 365 Migration</span>, organisations gain access to enhanced, business-specific functionalities tailored to bolster operational efficiency and drive strategic growth. Get ready for success through seamless<span style="font-weight: 500;"> data migration D365 Finance and Operations.</span></p>
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
                            <p class="flex-grow-1 mb-0 ms-3">Starting at just $70 per user/month</p>
                        </div>
                        <div class="text-start reqst-bt-3rd-sect-mgn mb-2">
                            <a href="/request-demo" class="btn btn-outline-theme">Request a Free Demo <i class="bi-chevron-right ms-3"></i></a>
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
                        <h4>From Microsoft NAV to <br> Dynamics 365 Business Central</h4>
                        <p class="mb-4">Enhance your business capabilities and operational effectiveness through<span style="font-weight: 500;"> NAV to Business Central migration</span>. With Microsoft discontinuing support for earlier NAV versions, upgrading your current system features has become imperative. Dynamics Stream, as an industry-leading expert, offers seamless<span style="font-weight: 500;"> NAV to Business Central migration</span> services to increase your business capabilities and overall operational effectiveness while maintaining the flexible potential to enhance your production level and generate profitable business outcomes.</p>
                        <div class="d-flex align-items-start mb-2">
                            <i class="flex-shrink-0 bi-star-fill text-stars"></i>
                            <p class="flex-grow-1 mb-0 ms-3">FORBES ADVICE RECOGNISED TOP ERP system of 2023</p>
                        </div>
                        <div class="d-flex align-items-start mb-2">
                            <i class="flex-shrink-0 bi-star-fill text-stars"></i>
                            <p class="flex-grow-1 mb-0 ms-3">Startups, SMEs & Enterprises</p>
                        </div>
                        <div class="d-flex align-items-start mb-2">
                            <i class="flex-shrink-0 bi-star-fill text-stars"></i>
                            <p class="flex-grow-1 mb-0 ms-3">Starting at just $70 per user/month</p>
                        </div>
                        <div class="text-start reqst-bt-3rd-sect-mgn mb-2">
                            <a href="/request-demo" class="btn btn-outline-theme">Request a Free Demo <i class="bi-chevron-right ms-3"></i></a>
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
                        <h4>Upgrade to <br> Microsoft Dynamics 365</h4>
                        <p class="mb-4">Businesses relying on outdated systems hinder their potential for growth and efficiency. When operations face challenges due to obsolete technology, it's crucial to upgrade the system through<span style="font-weight: 500;"> Microsoft Dynamics migration</span>. Our expertise at Dynamics Stream ensures seamless integration of Dynamics 365 with your business-specific modules, enabling continuous enhancement of performance and scalability.</p>
                        <div class="d-flex align-items-start mb-2">
                            <i class="flex-shrink-0 bi-star-fill text-stars"></i>
                            <p class="flex-grow-1 mb-0 ms-3">FORBES ADVICE RECOGNISED TOP ERP system of 2023</p>
                        </div>
                        <div class="d-flex align-items-start mb-2">
                            <i class="flex-shrink-0 bi-star-fill text-stars"></i>
                            <p class="flex-grow-1 mb-0 ms-3">Startups, SMEs & Enterprises</p>
                        </div>
                        <div class="d-flex align-items-start mb-2">
                            <i class="flex-shrink-0 bi-star-fill text-stars"></i>
                            <p class="flex-grow-1 mb-0 ms-3">Starting at just $70 per user/month</p>
                        </div>
                        <div class="text-start reqst-bt-3rd-sect-mgn mb-2">
                            <a href="/request-demo" class="btn btn-outline-theme">Request a Free Demo <i class="bi-chevron-right ms-3"></i></a>
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
                        <h3 class="font-s-h3-new upgr-3rd-he-mgn">Selecting Dynamics Stream UK: Your Path to Dynamics Success</h3>
                        <ol class="ol-st-last-upgr">
                            <li>
                                <h5>Certified Microsoft Solutions Partner</h5>
                                <p>Dynamics Stream UK is an esteemed gold partner for Microsoft products and services. Our seasoned professionals handle your system requirements comprehensively, from Dynamics 365 implementation to ongoing upgrades and maintenance. With a proven track record as<span style="font-weight: 500;"> Microsoft Dynamics 365 customization solution & Implementation partners</span>, we craft robust, efficient, and profitable solutions tailored to your organisation's needs.</p>
                            </li>
                            <li>
                                <h5>Migration Security & Reliability</h5>
                                <p>At Dynamics Stream UK, we prioritise the security and reliability of your migration journey. Our consultants execute Microsoft Dynamics 365 upgrades and migrations with ease, employing proactive measures to ensure secure and seamless<span style="font-weight: 500;"> Business Central data migration</span>. Through meticulous planning and systematic execution, we guarantee you peace of mind at every step of the way.</p>
                            </li>
                            <li>
                                <h5>Experienced Consultants with 300+ Migrations & Upgrades</h5>
                                <p>With over 300 successful migrations and upgrades under our belt, Dynamics Stream UK boasts a team of experienced consultants dedicated to your success. By entrusting us with your<span style="font-weight: 500;"> Dynamics CRM data migration</span> needs, you not only streamline your operations but also reduce the overall cost of ownership.</p>
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