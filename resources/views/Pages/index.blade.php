@extends('newhomemain')
@section('title', 'Trusted Microsoft Dynamics 365 Solution and Implementation Partner UK')
@section('meta_description' , 'Dynamics Stream Software Solution and is the trusted Microsoft Dynamics 365 Gold Partner in the UK with a specialization in Dynamics 365 & ERP implementations.')
@section('meta_keywords', 'dynamics 365 business central implementation partners,supply chain management consulting services,dynamics 365 finance operations,human resource payroll software')
@section('contents')
<!--Header Starts-->
<header class="pdn-btm-header-home">
    <div class="container-xl">
        <div class="px-xl-5">
            <div class="row">
                <div class="col-xl-5 col-lg-4 order-lg-2 ms-auto text-center mb-4">
                    <img src="{{asset('newassets')}}/images/header-img.png" class="img-fluid rounded-4" width="600" alt="Header Image" />
                </div>
                <div class="col-xl-6 col-lg-8 order-lg-1 mb-4">
                    <div class="content-box mb-4 text-lg-start text-center">
                        <h1 class="main-first-h">3x Your Business Potential, Increase Productivity & Profits, Business Intelligence & Make Better Decisions!</h1>
                        <div class="d-flex align-items-start mb-2">
                            <i class="flex-shrink-0 bi-check2 mt-1"></i>
                            <p class="flex-grow-1 mb-0 ms-3">An ERP & CRM trusted by millions of SME’S, startup’ and enterprises globally.</p>
                        </div>
                        <div class="d-flex align-items-start mb-2">
                            <i class="flex-shrink-0 bi-check2 mt-1"></i>
                            <p class="flex-grow-1 mb-0 ms-3">A team of 300+ Functional & Technical Consultants.</p>
                        </div>
                        <div class="d-flex align-items-start mb-4">
                            <i class="flex-shrink-0 bi-check2 mt-1"></i>
                            <p class="flex-grow-1 mb-0 ms-3">Human-centric & data-driven approach to propose better solutions & implementation of Microsoft Dynamics 365 CRM & ERP.</p>
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-lg-start justify-content-center contact-div">
                            <div class="text-start mb-2">
                                <a href="/request-demo" class="btn btn-outline-theme">Request a Free Demo <i class="bi-chevron-right ms-3"></i></a>
                            </div>
                            <!-- <div class="text-md-start ms-md-3 mb-2">
                                <p class="mb-0 fw-semibold">Support 24/7 <a class="ms-3 fw-semibold text-decoration-none text-dark" href="tel:+971526510534">+971 52 651 0534</a></p>
                            </div> -->
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

<!--Section Starts-->
<section class="logo-sec">
    <div class="container-lg">
        <div class="px-5">
            <div class="row">
                <div class="col-xl-12 home-client-bg-2">
                    <p class="text-center mb-4  sec-he-sect">Companies Trusting Microsoft Dynamics 365</p>
                    <div class="d-flex-new-home flex-wrap mrg-in-home-2-sect justify-content-between align-items-center">
                        <img src="{{asset('newassets')}}/images/brand/ikea.webp" class="img-fluid client-mobile-mr" alt="Ikea Logo" width="80" />
                        <img src="{{asset('newassets')}}/images/brand/mercedeze.png" class="img-fluid client-mobile-mr" alt="Mercedes Logo" width="80" />
                        <img src="{{asset('newassets')}}/images/brand/loreal.png" class="img-fluid client-mobile-mr" alt="LoReal Logo" width="80" />
                        <img src="{{asset('newassets')}}/images/brand/spar.png" class="img-fluid client-mobile-mr" alt="Spar Logo" width="80" />
                        <img src="{{asset('newassets')}}/images/brand/kpmg.png" class="img-fluid client-mobile-mr" alt="KPMG Logo" width="80" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section Ends-->

<!--Section Starts-->
<section class="service-sec">
    <div class="service-background"></div>
    <div class="container-lg">
        <div class="mr-lft-3rem col-md-10 mrg-b-2rem">
            <h2 class="section-title mb-4">Our Services</h2>
            <p class="">Your go-to digital transformation partner offers expert ERP & CRM consulting, data warehousing, Power BI, end-to-end system implementation & data integration in the Microsoft ERP & CRM landscape.</p>
        </div>
        <div class="px-xl-5">
            <div class="row service-row">
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch">
                    <div class="service-card">
                        <div class="card-content">
                            <img src="{{asset('newassets')}}/images/icons/implementation.webp" class="img-fluid" alt="Implementation Icon" width="40" />
                            <h4>Implementation</h4>
                            <p> 20+ years of turning complexity into simplicity, transforming your business operations into a seamless and profitable machine.</p>
                        </div>
                        <div class="d-grid">
                            <a href="/microsoft-dynamics-365-implementation-Services">
                                <button type="button" class="btn btn-32-pdng-zero btn-theme-Service-btns">Seamless Implementation <i class="bi-chevron-right ms-2"></i></button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch">
                    <div class="service-card">
                        <div class="card-content">
                            <img src="{{asset('newassets')}}/images/icons/upgrade.webp" class="img-fluid" alt="Implementation Icon" width="40" />
                            <h4>Migration</h4>
                            <p>Enhance your app architecture, add new features, address security, ensure regulatory compliance, improve user experience, or revamp entire systems.</p>
                        </div>
                        <div class="d-grid">
                            <a href="/microsoft-dynamics-365-migration-services">
                                <button type="button" class="btn btn-32-pdng-zero btn-theme-Service-btns">Upgrade Performance <i class="bi-chevron-right ms-2"></i></button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch">
                    <div class="service-card">
                        <div class="card-content">
                            <img src="{{asset('newassets')}}/images/icons/customization.webp" class="img-fluid" alt="Implementation Icon" width="40" />
                            <h4>Customization</h4>
                            <p>Tailoring software to perfect for your business with a team of 300+ Consultants, App Architects, UI/UX, DevOps, and QA Professionals.</p>
                        </div>
                        <div class="d-grid">
                            <a href="/dynamics-365-customization">
                                <button type="button" class="btn btn-32-pdng-zero btn-theme-Service-btns">Custom As You Need <i class="bi-chevron-right ms-2"></i></button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch">
                    <div class="service-card">
                        <div class="card-content">
                            <img src="{{asset('newassets')}}/images/icons/support.webp" class="img-fluid" alt="Implementation Icon" width="40" />
                            <h4>Support</h4>
                            <p>Ensure uninterrupted success with our 100+ team members dedicated to keeping your business running seamlessly around the clock 24/7.</p>
                        </div>
                        <div class="d-grid">
                            <a href="/dynamics-365-support">
                                <button type="button" class="btn btn-32-pdng-zero btn-theme-Service-btns">Support That You Need <i class="bi-chevron-right ms-2"></i></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-card-resource mt-3 row-card-resource-implementation-bg" id="Resource-augmentation">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-8 order-lg-1 row-pdng-right-zero align-items-stretch">
                        <div class="">
                            <img src="{{asset('newassets')}}/images/contact-m.webp" class="img-fluid CTA-img-st mobile-blocks" alt="Support Image" width="400">
                        </div>
                        <div class="content-box">
                            <h3 class="res-augmnt-he mb-4">Seeking remote or in-person resources for Microsoft Dynamics 365 suite implementation? Let's connect!</h3>
                            <p>Discover how our round-the-clock, top-rated support team can provide the perfect resource from our in-house pool of 300+ well-trained professional, specialising in<span style="font-weight: 500;"> Dynamics 365 consulting services in the UK.</span></p>
                            <div class="mt-4">
                                <a href="/request-demo" class="btn btn-outline-theme mb-2">Request a Free Demo</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 row-pdng-left-zero txt-right align-items-stretch order-lg-2">
                        <img src="{{asset('newassets')}}/images/support-img.webp" class="img-fluid CTA-img-st mobile-none" alt="Support Image" width="400">
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</section>
<!--section Ends-->

<!--Section Starts-->
<section class="product-sec">
    <div class="container-lg py-5">
        <div class="mr-lft-3rem col-md-10">
            <h2 class="section-title mb-4">Our Offerings</h2>
            <p class="">Empower businesses with cutting-edge ERP & CRM solutions—unleash excellence with centralized management of Finance, HR, Sales, Marketing, Supply Chain & more.</p>
        </div>
        <div class="px-xl-5 product-p-st-size">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-7 mb-3">
                    <div class="content-box">
                        <a href="/microsoft-dynamics-365-business-central" class="solutions-links">
                            <h3 class="">Business Central- Microsoft Dynamics 365</h3>
                        </a>
                        <h4><strong>Empower</strong> Your Business Growth Across All Departments</h4>
                        <p class="mb-4">Revolutionize your business management with Business Central—operate intelligently, adapt swiftly, and achieve superior performance. Boost productivity for finance and operations personnel by up to 18%, delivering an impressive 172% ROI.</p>
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

                        <div class="my-4 m-txt-cener">
                            <a href="/business-central-guided-tour" class="btn btn-outline-theme mb-2">Take A Tour</a>
                            <a href="/request-demo" class="btn btn-outline-theme ms-md-2 mb-2">Request a Free Demo <i class="bi-chevron-right ms-3"></i></a>
                            <!-- <a href="tel:+971 52 651 0534" class="btn btn-theme ms-md-2 mb-2"> Experts Advice +971 52 651 0534</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 ms-auto mb-3">
                    <div class="business-img products-imgs-st">
                        <img src="{{asset('newassets')}}/images/business-img.png" class="img-fluid" />
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-7 ms-auto order-lg-2 mb-3">
                    <div class="content-box">
                        <a href="/dynamics-365-finance-and-operations" class="solutions-links">
                            <h3 class="">Finance - Microsoft Dynamics 365</h3>
                        </a>
                        <h4>Managing Finance Has Never Been This <strong>Easy</strong></h4>
                        <p class="mb-4">Reinvigorate your Finances & Boost agility through interconnected financial planning, budgeting & forecasting that spans your entire organization. Maximize revenue streams with AI-driven billing, accounts receivable (AR), collections, and more. Proactively oversee liquidity through predictive analytics and cash flow forecasting.</p>
                        <div class="d-flex align-items-start mb-2">
                            <i class="flex-shrink-0 bi-star-fill text-stars"></i>
                            <p class="flex-grow-1 mb-0 ms-3">Accelerate financial closure and reporting with self-serve analytics and automation</p>
                        </div>
                        <div class="d-flex align-items-start mb-2">
                            <i class="flex-shrink-0 bi-star-fill text-stars"></i>
                            <p class="flex-grow-1 mb-0 ms-3">Manage tax jurisdictions, rates, and deductibility seamlessly with a unified tax data model.</p>
                        </div>
                        <div class="d-flex align-items-start mb-2">
                            <i class="flex-shrink-0 bi-star-fill text-stars"></i>
                            <p class="flex-grow-1 mb-0 ms-3">Starting at $180 per user/month (prices may vary)</p>
                        </div>

                        <div class="my-4 m-txt-cener">
                            <a href="/finance-and-operations-guided-tour" class="btn btn-outline-theme mb-2">Take A Tour</a>
                            <a href="/request-demo" class="btn btn-outline-theme ms-md-2 mb-2">Request a Free Demo <i class="bi-chevron-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 order-lg-1 mb-3">
                    <div class="text-center products-imgs-st">
                        <img src="{{asset('newassets')}}/images/finance-img.webp" class="img-fluid" />
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-7 mb-3">
                    <div class="content-box">
                        <a href="/microsoft-dynamics-365-supply-chain-management" class="solutions-links">
                            <h3 class="">Supply Chain - Microsoft Dynamics 365</h3>
                        </a>
                        <h4>Your Supply Chain Is In Good <strong>Hands</strong></h4>
                        <p class="mb-4">Modernize your supply chain for heightened visibility, improved planning, efficient procurement, and optimized fulfilments. Benefit from multiple layers of cybersecurity, physical management, and endpoint security, ensuring a 99.9% uptime for your data accessibility.</p>
                        <div class="d-flex align-items-start mb-2">
                            <i class="flex-shrink-0 bi-star-fill text-stars"></i>
                            <p class="flex-grow-1 mb-0 ms-3">Upgrade your entire system with a comprehensive upgrade.</p>
                        </div>
                        <div class="d-flex align-items-start mb-2">
                            <i class="flex-shrink-0 bi-star-fill text-stars"></i>
                            <p class="flex-grow-1 mb-0 ms-3">Over 5,000 developer extensibility points offered
                                by our open platform.</p>
                        </div>
                        <div class="d-flex align-items-start mb-2">
                            <i class="flex-shrink-0 bi-star-fill text-stars"></i>
                            <p class="flex-grow-1 mb-0 ms-3">A seamless Optimization starting just at $180 per
                                user/month.</p>
                        </div>

                        <div class="my-4 m-txt-cener">
                            <a href="/supply-chain-guided-tour" class="btn btn-outline-theme mb-2">Take A Tour</a>
                            <a href="/request-demo" class="btn btn-outline-theme ms-md-2 mb-2">Request a Free Demo <i class="bi-chevron-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 ms-auto mb-3">
                    <div class="text-center products-imgs-st">
                        <img src="{{asset('newassets')}}/images/supply-img.png" class="img-fluid products-home-img" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-7 order-lg-2 ms-auto mb-3">
                    <div class="content-box">
                        <a href="/dynamics-365-human-resources" class="solutions-links">
                            <h3 class="">Human resources- Microsoft Dynamics 365</h3>
                        </a>
                        <h4>Create Workplace Where People <strong>Thrive</strong></h4>
                        <p class="mb-4">Cultivate an environment where people & business flourish with MD365 HR & Our In-house advance system on top of Microsoft Apps. Manage payroll, leave tracking, employee profiles, self-service capabilities, attendance management, performance evaluation, recruitment/onboarding, and end-of-service/pensions.</p>
                        <div class="d-flex align-items-start mb-2">
                            <i class="flex-shrink-0 bi-star-fill text-stars"></i>
                            <p class="flex-grow-1 mb-0 ms-3">User-friendly self-service HR tools & Microsoft
                                Teams.</p>
                        </div>
                        <div class="d-flex align-items-start mb-2">
                            <i class="flex-shrink-0 bi-star-fill text-stars"></i>
                            <p class="flex-grow-1 mb-0 ms-3">Data-driven & people-centric HR approach that
                                transcends conventional</p>
                        </div>
                        <div class="d-flex align-items-start mb-2">
                            <i class="flex-shrink-0 bi-star-fill text-stars"></i>
                            <p class="flex-grow-1 mb-0 ms-3">Next-best-action guidance and ensure regulatory
                                compliance. </p>
                        </div>

                        <div class="my-4 m-txt-cener">
                            <a href="/human-resource-guided-tour" class="btn btn-outline-theme mb-2">Take A Tour</a>
                            <a href="/request-demo" class="btn btn-outline-theme ms-md-2 mb-2">Request a Free Demo <i class="bi-chevron-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 order-lg-1 mb-3">
                    <div class="text-center products-imgs-st">
                        <img src="{{asset('newassets')}}/images/hr-img.png" class="img-fluid products-home-img">
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                    <a href="/dynamics-365-sales" class="service-link">Microsoft Sales <i class="bi-chevron-right"></i></a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                    <a href="#" class="service-link">Microsoft Customer Service <i class="bi-chevron-right"></i></a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                    <a href="/dynamics-365-marketing" class="service-link">Microsoft Marketing <i class="bi-chevron-right"></i></a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                    <a href="/dynamics-365-human-resources" class="service-link">Microsoft Human Resources <i class="bi-chevron-right"></i></a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                    <a href="/microsoft-dynamics-365-commerce" class="service-link">Microsoft Retail & eCommerce <i class="bi-chevron-right"></i></a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                    <a href="/microsoft-dynamics-365-project-operations" class="service-link">Microsoft Project Operations <i class="bi-chevron-right"></i></a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                    <a href="/cloud-solutions-microsoft-azure" class="service-link">Microsoft Azure <i class="bi-chevron-right"></i></a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                    <a href="/microsoft-power-platform-power-automate" class="service-link">Power Platforms <i class="bi-chevron-right"></i></a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                    <a href="/modern-workplace-office-365" class="service-link">Microsoft 365 <i class="bi-chevron-right"></i></a>
                </div>
            </div>
            <a href="https://www.thefuturedynamics.com/">
                <div class="solution-card p-md-4-for-web-sect rounded-4 mt-4">
                    <h4 class="web-sect-he mb-2">Customized Web & Mob App Development </h4>
                    <p class="">Technologies We work on: React | AngularJS | Native | Flutter | Node | Laravel | Java | .Net | iOS | Android | Web & Mobile Apps | Business Apps | eCommerce & Shopify powered by Microsoft.</p>
                </div>
            </a>

        </div>
    </div>
    <div class="container-lg">
        <div class="mr-lft-3rem col-lg-12 col-md-12 mrg-b-2rem">
            <h2 class="section-title mt-3  mb-4">Vertical Solutions</h2>
            <p class="">Elevate Your Business to New Heights with Our Vertical Solutions
                – Tailored Excellence for Optimal Performance and Growth!</p>
        </div>
        <div class="px-xl-5">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                    <a href="https://appsource.microsoft.com/en-us/product/dynamics-365-business-central/TYPE.connect%7CPUBID.dsss%7CAID.ds365-purchase-requisition-app%7CPAPPID.52f69529-78d0-4709-b5ca-70c51fc0d67a?exp=ubp8&tab=Overview" class="service-link">DS365 Purchase Requisition App <i class="bi-chevron-right"></i></a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                    <a href="https://appsource.microsoft.com/en-us/product/dynamics-365-business-central/TYPE.connect%7CPUBID.dsss%7CAID.ds365-zatca-e-invoice-app%7CPAPPID.4bb2308f-3c17-4c2a-9889-c4790d882eeb?exp=ubp8&tab=Overview" class="service-link">DS365 ZATCA E-Invoicing App <i class="bi-chevron-right"></i></a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                    <a href="https://appsource.microsoft.com/en-us/product/dynamics-365-for-operations/dsss.ds365-vendor-reconciliation-app?exp=ubp8&tab=Overview" class="service-link">DS365 Vendor Reconciliation App <i class="bi-chevron-right"></i></a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                    <a href="https://appsource.microsoft.com/en-us/product/dynamics-365-business-central/TYPE.connect%7CPUBID.dsss%7CAID.ds365-excise-duty-app%7CPAPPID.42686037-9102-4d37-b7fd-6d57b6ea2cf4?exp=ubp8&tab=Overview" class="service-link">DS365 Excise Duty App <i class="bi-chevron-right"></i></a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                    <a href="https://appsource.microsoft.com/en-us/product/dynamics-365-for-operations/dsss.ds365-zatca-e-invoicing-f-o-app?exp=ubp8" class="service-link">DS365 Zatca E-Invoicing For F&O <i class="bi-chevron-right"></i></a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                    <a href="https://appsource.microsoft.com/en-us/product/dynamics-365-for-operations/dsss.ds365-payroll-fo?exp=ubp8" class="service-link">DS365 Payroll F&O <i class="bi-chevron-right"></i></a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                    <a href="https://appsource.microsoft.com/en-us/product/dynamics-365-business-central/TYPE.connect%7CPUBID.dsss%7CAID.ds365-lawyer-management%7CPAPPID.dc4cf926-3f14-4ec4-b250-1330446d815d?exp=ubp8&tab=Overview" class="service-link">DS365 Lawyer Management App <i class="bi-chevron-right"></i></a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                    <a href="https://appsource.microsoft.com/en-us/product/dynamics-365-business-central/TYPE.connect%7CPUBID.dsss%7CAID.ds365-post-dated-cheque-app%7CPAPPID.7c9fe0fd-e57a-4722-bb15-71e252315afb?exp=ubp8&tab=Overview" class="service-link">DS365 Post Dated Cheque App <i class="bi-chevron-right"></i></a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                    <a href="https://appsource.microsoft.com/en-us/product/dynamics-365-business-central/TYPE.connect%7CPUBID.dsss%7CAID.ds365-e-services%7CPAPPID.cfee88aa-dee4-4f41-b4b1-869c39a80e1f?exp=ubp8&tab=Overview" class="service-link">DS365 E-Service App <i class="bi-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--section Ends-->
<!--Section Testimonials Starts-->
<section class="industry-sec pdng-top-1rem pdng-btm-3rem">
    <div class="container-lg">
        <div class="px-xl-5">
            <h2 class="mrgb-testi-h-new section-title">Trusted Across Industries</h2>
            <div class="row industry-row">
                <div class="col-xl-4 col-lg-6 col-md-6 d-flex align-items-stretch mb-3">
                    <div class="industry-card testimonials-prgph-new">
                        <div class="mb-2">
                            <div class="text-center">
                                <img src="{{asset('newassets')}}/images/brand/cortec-img.png" class="img-fluid mb-4 cortc-img-st" width="200" />
                            </div>
                            <h6 class="fw-600">Manufacturing</h6>
                            <p>Middle East and North Africa, Cortec® Middle East, the leading manufacturer of
                                environmentally-friendly corrosion inhibitors providing effective solutions for
                                corrosion challenges across most industries.</p>
                        </div>
                        <div>
                            <h6 class="fw-600">Don’t take our words</h6>
                            <p>Their knowledge has significantly enhanced our operations and customer
                                relationship management. I enthusiastically endorse Dynamics Stream as a
                                Microsoft service provider & Mr. Bilal for Business Central and CRM. </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 d-flex align-items-stretch mb-3">
                    <div class="industry-card testimonials-prgph-new">
                        <div class="mb-2">
                            <div class="text-center">
                                <img src="{{asset('newassets')}}/images/brand/gulf-img.png" class="img-fluid mb-4" width="200" />
                            </div>
                            <h6 class="fw-600">Investments</h6>
                            <p>Gulf Capital is a leading thematically driven and socially conscious alternative
                                investment firm with over sixteen years of investment experience in Growth
                                Markets across Private Equity, Private Debt and Real Estate. </p>
                        </div>
                        <div>
                            <h6 class="fw-600">Client Reviews</h6>
                            <p>Their support consistently addresses our evolving requirements. Thanks to
                                Dynamics Stream & Mr. Nasir, we've embraced data-driven decision-making and
                                witnessed enhanced business performance. We wholeheartedly endorse them as a
                                trustworthy ERP implementation partner.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 d-flex align-items-stretch mb-3">
                    <div class="industry-card testimonials-prgph-new">
                        <div class="mb-2">
                            <div class="text-center">
                                <img src="{{asset('newassets')}}/images/brand/khiara-img.png" class="img-fluid mb-4 cortc-img-st" width="200" />
                            </div>
                            <h6 class="fw-600">eCommerce & Trading</h6>
                            <p>Khiara Stores has been a leading regional supplier of kitchenware, tableware, and
                                other homeware products since 1955.<br /><br /><br /></p>
                        </div>
                        <div>
                            <h6 class="fw-600">Client Testimonilas</h6>
                            <p>Their implementation & post-implementation support is noteworthy. The team is
                                diligent, responsive, and committed to addressing any issues or inquiries
                                promptly. I highly endorse them for ERP implementation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--section Testimonials Ends-->

<!--Section Starts-->
<section class="pilot-sec">
    <div class="google-rating">
        <div class="rating-starts">
            <i class="bi-star-fill"></i>
            <i class="bi-star-fill"></i>
            <i class="bi-star-fill"></i>
            <i class="bi-star-fill"></i>
            <i class="bi-star-fill"></i>
        </div>
        <h4> <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" viewBox="0 0 46 44" fill="none">
                <path d="M44.2935 22.5C44.2935 20.94 44.1497 19.44 43.8827 18H22.5986V26.52H34.7609C34.2268 29.26 32.6243 31.58 30.2206 33.14V38.68H37.555C41.8282 34.84 44.2935 29.2 44.2935 22.5Z" fill="#4285F4" />
                <path d="M22.5989 44.0002C28.7006 44.0002 33.8162 42.0402 37.5553 38.6802L30.2209 33.1402C28.2076 34.4602 25.6395 35.2602 22.5989 35.2602C16.7232 35.2602 11.7309 31.4002 9.94357 26.2002H2.42432V31.8802C6.14286 39.0602 13.7648 44.0002 22.5989 44.0002Z" fill="#34A853" />
                <path d="M9.9435 26.1796C9.49152 24.8596 9.22444 23.4596 9.22444 21.9996C9.22444 20.5396 9.49152 19.1396 9.9435 17.8196V12.1396H2.42424C0.88341 15.0996 0 18.4396 0 21.9996C0 25.5596 0.88341 28.8996 2.42424 31.8596L8.2794 27.4196L9.9435 26.1796Z" fill="#FBBC05" />
                <path d="M22.5989 8.75999C25.9271 8.75999 28.8855 9.87998 31.2481 12.04L37.7196 5.73999C33.7956 2.18 28.7006 0 22.5989 0C13.7648 0 6.14286 4.93999 2.42432 12.14L9.94357 17.82C11.7309 12.62 16.7232 8.75999 22.5989 8.75999Z" fill="#EA4335" />
            </svg><span>4.2</span> Top-rated care</h4>
    </div>
    <div class="container-lg">
        <div class="px-xl-5">
            <div class="row">
                <div class="col-xl-8 col-lg-8 mb-3">
                    <div class="content-box">
                        <h4>We Embrace Intelligence, Do You? Your AI Journey Starts Here!</h4>
                        <h2 class="my-3">Copilot Across All Microsoft Suites</h2>
                        <p class="mb-3">The finest Artificial Intelligence (AI) Assistant crafted to bring value to every tier of an organization. Dynamics Stream A Microsoft solution partners in Dubai UAE, USA and the UK embracing & implementing Copilot to share huge benefits of it. Experience streamlined tasks, enhanced collaboration, and tailor it to meet your organization's unique needs.</p>
                        <div class="row mt-2 mb-2 copilot-icns-p">
                            <div class="col-sm-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 20 15" fill="none">
                                            <path d="M19 0.891602L6.14593 14.4959L1 8.97302" stroke="#00FFE0" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="flex-grow-1 mr-lft-icns-p-di">
                                        <p class="text-light">Work With Microsoft Family</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 20 15" fill="none">
                                            <path d="M19 0.891602L6.14593 14.4959L1 8.97302" stroke="#00FFE0" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="flex-grow-1 mr-lft-icns-p-di">
                                        <p class="text-light">AI Assistant</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 20 15" fill="none">
                                            <path d="M19 0.891602L6.14593 14.4959L1 8.97302" stroke="#00FFE0" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="flex-grow-1 mr-lft-icns-p-di">
                                        <p class="text-light">Automate workflows</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-sm-flex align-items-end">
                            <div class="flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 82 82" fill="none">
                                    <path d="M39.2563 32.293L49.9085 42.9452M39.2563 32.293L12.3272 59.2221C9.38571 62.1636 9.38572 66.9328 12.3272 69.8743C15.2687 72.8158 20.0379 72.8158 22.9794 69.8743L49.9085 42.9452M39.2563 32.293L44.9422 26.6071C46.2699 25.2794 48.4226 25.2794 49.7503 26.6071L55.5944 32.4512C56.9221 33.7789 56.9221 35.9316 55.5944 37.2593L49.9085 42.9452" stroke="white" stroke-width="5.09973" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M63.6643 49.1976C62.7112 47.0643 59.683 47.0643 58.7298 49.1976L56.836 53.436L52.5975 55.3298C50.4643 56.283 50.4643 59.3112 52.5975 60.2643L56.836 62.1581L58.7298 66.3966C59.683 68.5298 62.7112 68.5298 63.6643 66.3966L65.5581 62.1581L69.7966 60.2643C71.9298 59.3112 71.9298 56.283 69.7966 55.3298L65.5581 53.436L63.6643 49.1976Z" fill="#00F0FF" />
                                    <path d="M67.0641 8.39974C66.111 6.26649 63.0828 6.26649 62.1296 8.39974L60.2358 12.6382L55.9974 14.532C53.8641 15.4852 53.8641 18.5133 55.9974 19.4665L60.2358 21.3603L62.1296 25.5988C63.0828 27.732 66.111 27.732 67.0641 25.5988L68.9579 21.3603L73.1964 19.4665C75.3297 18.5133 75.3297 15.4852 73.1964 14.532L68.9579 12.6382L67.0641 8.39974Z" fill="#00F0FF" />
                                    <path d="M26.2663 8.39974C25.3132 6.26649 22.285 6.26649 21.3318 8.39974L19.438 12.6382L15.1995 14.532C13.0663 15.4852 13.0663 18.5133 15.1995 19.4665L19.438 21.3603L21.3318 25.5988C22.285 27.732 25.3132 27.732 26.2663 25.5988L28.1601 21.3603L32.3986 19.4665C34.5318 18.5133 34.5318 15.4852 32.3986 14.532L28.1601 12.6382L26.2663 8.39974Z" fill="#00F0FF" />
                                </svg>
                            </div>
                            <div class="flex-grow-1 ms-md-3">
                                <p class="text-light">Talk to our AI consultants for demo</p>
                                <a href="/request-demo" class="btn btn-outline-theme">Request a Free Demo <i class="bi-chevron-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--section Ends-->


<!--Section Starts-->

<!--section Ends-->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Dynamics Stream Softare Solutions",
        "image": "https://dynamicsstream.com/storage/home/dynamics-stream-software-solutions.png",
        "@id": "",
        "url": "https://dynamicsstream.com",
        "telephone": "+971 44 373 103",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "1803, Metropolis Tower, Marasi Drive, Business Bay, Dubai - UAE",
            "addressLocality": "Dubai - United Arab Emirates",
            "postalCode": "",
            "addressCountry": ""
        },
        "sameAs": "https://www.linkedin.com/company/dynamicsstream.com"
    }
</script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "BreadcrumbList",
        "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "Microsoft Dynamics 365 ERP",
            "item": "https://dynamicsstream.com/microsoft-dynamics-365"
        }, {
            "@type": "ListItem",
            "position": 2,
            "name": "Microsoft Power Platform",
            "item": "https://dynamicsstream.com/microsoft-power-plateform"
        }, {
            "@type": "ListItem",
            "position": 3,
            "name": "Microsoft Dynamics 365 Industries",
            "item": "https://dynamicsstream.com/industries"
        }, {
            "@type": "ListItem",
            "position": 4,
            "name": "Microsoft Dynamics 365 Services",
            "item": "https://dynamicsstream.com/services"
        }, {
            "@type": "ListItem",
            "position": 5,
            "name": "Contact US",
            "item": "https://dynamicsstream.com/contact-us"
        }]
    }
</script>
@endsection