@extends('newhomemain')
@foreach($mainhome as $mainhomeindex)
@section('title', $mainhomeindex->meta_title)
@section('meta_description' , $mainhomeindex->meta_description)
@section('meta_keywords', $mainhomeindex->meta_keywords)
@endforeach
@section('contents')
<!--Header Starts-->
<header>
    <div class="container-xl">
        <div class="px-xl-5">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-4 order-lg-2 ms-auto text-center mb-4">
                    <img src="{{asset('newassets')}}/images/header-img.png" class="img-fluid rounded-4 mrtng-btm-top-im" width="600" alt="Header Image" />
                </div>
                <div class="col-xl-6 col-lg-8 order-lg-1 mb-4">
                    <div class="content-box mb-4 text-lg-start text-center">

                        <h1>3x Your Business Potential, Increase Productivity & Profits, Business Intelligence & Take Better Decisions!</h1>


                        <div class="d-md-flex m-fl-new-h">
                            <div class="flex-shrink-0">
                                <img src="{{asset('newassets')}}/images/home/tick.webp" class="tick-icon-n" alt="tick Icon" />
                            </div>
                            <div class="flex-grow-1">
                                <p class="p-m-z">Trusted by millions+ of Startup’s, SME’S and Enterprises.</p>
                            </div>
                        </div>
                        <div class="d-md-flex m-fl-new-h">
                            <div class="flex-shrink-0">
                                <img src="{{asset('newassets')}}/images/home/tick.webp" class="tick-icon-n" alt="tick Icon" />
                            </div>
                            <div class="flex-grow-1">
                                <p class="p-m-z">A team of 300+ Functional & Technical consultants.</p>
                            </div>
                        </div>
                        <div class="d-md-flex m-fl-new-h">
                            <div class="flex-shrink-0">
                                <img src="{{asset('newassets')}}/images/home/tick.webp" class="tick-icon-n" alt="tick Icon" />
                            </div>
                            <div class="flex-grow-1">
                                <p class="p-m-z">Human-centric & data-driven approach to propose better solution & implementation of <strong>Microsoft Dynamics 365</strong>  CRM & ERP.</p>
                            </div>
                        </div>
                       
                        <div class="d-flex flex-wrap align-items-center justify-content-lg-start justify-content-center contact-div">
                            <div class="text-start">
                                <a href="#popup1" class="btn btn-theme btn-dark py-3">Request a Free Demo <i class="bi-chevron-right ms-3"></i></a>
                            </div>
                            <div class="text-md-start ms-md-3">
                                <p class="mb-0 fw-semibold">Support 24/7 <a class="ms-3 fw-semibold text-decoration-none text-dark" href="tel:+971526510534">+971 52 651 0534</a></p>
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
                            <h6 class="mb-0 ms-3 text-info small">Top-rated care</h6>
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
<section class="service-sec">
    <div class="service-background"></div>
    <h2 class="section-title text-center">Services</h2>
    <h2 class="mb-4 sub-title text-center">Your Digital Transformation Partners</h2>
    <div class="container-lg">
        <div class="px-xl-5">
            <div class="row service-row">
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch">
                    <div class="service-card">
                        <div class="card-content">
                            <img src="{{asset('newassets')}}/images/icons/implement-icon.svg" class="img-fluid" alt="Implementation Icon" width="50" />
                            <h4>Implementation</h4>
                            <p>We turn Complexity into Simplicity. With 20+ years of experience we know exactly how & what really is required to put your complex business operations into seamless & profitable machine.</p>
                        </div>
                        <div class="d-grid mt-5">
                            <a href="/microsoft-dynamics-365-implementation-services"> <button type="button" class="btn btn-theme py-3"> Seamless Implementation <i class="bi-chevron-right ms-2"></i></button></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch">
                    <div class="service-card">
                        <div class="card-content">
                            <img src="{{asset('newassets')}}/images/icons/upgrade-icon.svg" class="img-fluid" alt="Implementation Icon" width="50" />
                            <h4>Upgrades</h4>
                            <p>Elevate your current systems with effortless excellence. Whether it’s just a system upgrade, revamping the architecture of the application, adding new features, security, regulatory compliance, user-experience or anything.</p>
                        </div>
                        <div class="d-grid mt-5">
                            <a href="/microsoft-dynamics-upgraded-services"><button type="button" class="btn btn-theme py-3">Enhanced Performance <i class="bi-chevron-right ms-2"></i></button></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch">
                    <div class="service-card">
                        <div class="card-content">
                            <img src="{{asset('newassets')}}/images/icons/expert-icon.svg" class="img-fluid" alt="Implementation Icon" width="50" />
                            <h4>Customization</h4>
                            <p>Your Business, Your Rules. Team of 300+ consultants, Application architect, UI/UX, DevOps & QA Professionals, We craft softwares to fit your business perfection! , Are you looking for a custom Web/Mobile App solution? Our experts with big scaled Apps dev, here to amaze you!</p>
                        </div>
                        <div class="d-grid mt-5">
                            <a href="/microsoft-dynamics-customization-service"><button type="button" class="btn btn-theme py-3">Custom As Per Your Need <i class="bi-chevron-right ms-2"></i></button></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch">
                    <div class="service-card">
                        <div class="card-content">
                            <img src="{{asset('newassets')}}/images/icons/support-icon.svg" class="img-fluid" alt="Implementation Icon" width="50" />
                            <h4>Support</h4>
                            <p>Your business operates around the clock, and so should your software support. Our 100+ dedicated 24/7 support team is more than just a service – it's a commitment to your uninterrupted success. Our technical & functional team to provide your with Instant assistance, global reach, rapid response.</p>
                        </div>
                        <div class="d-grid mt-5">
                            <a href="/microsoft-dynamics-support-services"><button type="button" class="btn btn-theme py-3">Connect with our support <i class="bi-chevron-right ms-2"></i></button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-card mt-4" id="Resource-augmentation">
                <div class="row align-items-end">
                    <div class="col-xl-7 col-lg-7 mb-3 order-lg-2">
                        <div class="content-box">
                            <h3 class="fs-4 fw-semibold helping-heading mb-4">Are You Looking For a remote or in-person resource for Microsoft Dynamics 365 suite implementation?</h3>
                            <p>If yes, our round-the-clock Top-rated support team is available to provide you with the right resource out of our in-house 300+ well-trained resources. They’re available on remote, full-time/ part-time, project basis, anytime, anywhere for any Microsoft Dynamics 365 Suite.</p>
                            <div class="d-flex flex-wrap align-items-center my-4">
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
                                <h6 class="mb-0 ms-3 text-info small">Top-rated care</h6>
                            </div>
                            <div class="my-5">
                                <a href="tel:+971(04)4373103" class="btn btn-outline-theme py-2 px-4 mb-2">+971 (04) 437 3103</a>
                                <a href="tel:+971526510534" class="btn btn-theme py-2 px-4 ms-md-3 mb-2">+971 52 651 0534</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 text-center order-lg-1">
                        <img src="{{asset('newassets')}}/images/support-img.png" class="img-fluid" alt="Support Image" width="400" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--section Ends-->
<!--Section Starts-->
<section class="product-sec">
    <h2 class="section-title text-center">Products & Solutions</h2>
    <h2 class="mb-5 sub-title text-center">Startups, SME’s to Enterprise, Befits all</h2>
    <div class="container-lg py-5">
        <div class="px-xl-5">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-7 mb-3">
                    <div class="content-box">
                        <a href="https://dynamicsstream.com/microsoft-dynamics-365-business-central" class="solutions-links">
                            <h3 class="text-theme">Business Central- Microsoft Dynamics 365</h3>
                        </a>
                        <h4><strong>Empower</strong> Your Business Growth Across All Departments</h4>
                        <p class="mb-4">Revolutionize your business management—operate more intelligently, adapt swiftly, and achieve superior performance, Business Central boasts a track record of boosting productivity for finance and operations personnel by up to 18%, delivering an impressive 172% ROI.</p>
                        <div class="d-md-flex">
                            <div class="flex-shrink-0">
                                <img src="{{asset('newassets')}}/images/home/star.webp" class="tick-icon-n" alt="star Icon" />
                            </div>
                            <div class="flex-grow-1">
                                <p class="p-m-z">FORBES ADVICE RECOGNISED TOP ERP system of 2023</p>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="flex-shrink-0">
                                <img src="{{asset('newassets')}}/images/home/star.webp" class="tick-icon-n" alt="star Icon" />
                            </div>
                            <div class="flex-grow-1">
                                <p class="p-m-z"> Startups, SME”s & Enterprises</p>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="flex-shrink-0">
                                <img src="{{asset('newassets')}}/images/home/star.webp" class="tick-icon-n" alt="star Icon" />
                            </div>
                            <div class="flex-grow-1">
                                <p class="p-m-z mb-4">Starting at just $70 per user/month</p>
                            </div>
                        </div>
                        <div class="d-md-flex mt-3">
                            <div class="flex-shrink-0">
                                <p>Tags:</p>
                            </div>
                            <div class="flex-grow-1">
                                <ul class="tags">
                                    <li>Boost sales & Service</li>
                                    <li>Facilitate project success</li>
                                    <li>Transform Business Operations</li>
                                    <li>Optimize Supply Chain Management</li>
                                    <li>Improve financial performance</li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-4">
                            <a href="https://dynamics.microsoft.com/en-us/guidedtour/dynamics/business-central/1/1/" target="_blank" class="btn btn-theme py-3 mb-2 px-4">Take A Guided Tour</a>
                            <a href="tel:+971044373103" class="btn btn-success ms-md-2 mb-2 py-3 px-4"> Experts Advice +971 (04) 437 3103</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 ms-auto mb-3">
                    <div class="business-img">
                        <img src="{{asset('newassets')}}/images/business-img.png" class="img-fluid" />
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-7 ms-auto order-lg-2 mb-3">
                    <div class="content-box">
                        <a href="https://dynamicsstream.com/microsoft-dynamics-365-finance" class="solutions-links">
                            <h3 class="text-theme">Finance - Microsoft Dynamics 365</h3>
                        </a>
                        <h4>Managing Finance Has Never Been This <strong>Easy</strong></h4>
                        <p class="mb-4">Reinvigorates your Finance & Boost agility through interconnected financial planning, budgeting & forecasting that spans your entire organization. Maximize revenue streams with AI-driven billing, accounts receivable (AR), collections, and more. Proactively oversee liquidity through predictive analytics and cash flow forecasting.</p>
                        <div class="d-md-flex">
                            <div class="flex-shrink-0">
                                <img src="{{asset('newassets')}}/images/home/star.webp" class="tick-icon-n" alt="star Icon" />
                            </div>
                            <div class="flex-grow-1">
                                <p class="p-m-z">Self-serve analytics & automation accelerates financial closure & reporting</p>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="flex-shrink-0">
                                <img src="{{asset('newassets')}}/images/home/star.webp" class="tick-icon-n" alt="star Icon" />
                            </div>
                            <div class="flex-grow-1">
                                <p class="p-m-z">Handle tax jurisdictions, rates, and deductibility using a unified tax data model</p>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="flex-shrink-0">
                                <img src="{{asset('newassets')}}/images/home/star.webp" class="tick-icon-n" alt="star Icon" />
                            </div>
                            <div class="flex-grow-1">
                                <p class="p-m-z mb-4">Starting at $180 per user/month (prices may vary).</p>
                            </div>
                        </div>
                        <div class="d-md-flex mt-3">
                            <div class="flex-shrink-0">
                                <p>Tags:</p>
                            </div>
                            <div class="flex-grow-1">
                                <ul class="tags">
                                    <li>Enhance decision making</li>
                                    <li>Forecasting of accounts</li>
                                    <li>Drive growth cut costs</li>
                                    <li>Scale globally</li>
                                    <li>Supply chain planing</li>
                                    <li>Accounts recievable</li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-4">
                            <a href="https://dynamics.microsoft.com/en-us/guidedtour/dynamics/manage-financial-risk/1/1/" target="_blank" class="btn btn-theme py-3 px-4 mb-2">Take A Guided Tour</a>
                            <a href="tel:+971044373103" class="btn btn-success ms-md-2 mb-2 py-3 px-4"> Experts Advice +971 (04) 437 3103</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 order-lg-1 mb-3">
                    <div class="text-center">
                        <img src="{{asset('newassets')}}/images/finance-img.png" class="img-fluid" />
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-7 mb-3">
                    <div class="content-box">
                        <a href="https://dynamicsstream.com/microsoft-dynamics-365-supply-chain-management" class="solutions-links">
                            <h3 class="text-theme">Supply Chain - Microsoft Dynamics 365</h3>
                        </a>
                        <h4>Your Supply Chain Is In Good <strong>Hands</strong></h4>
                        <p class="mb-4">Modernize your supply chain for heightened visibility, improved planning, efficient procurement, and optimized fulfilments. Benefit from multiple layers of cybersecurity, physical management, and endpoint security, ensuring a 99.9% uptime for your data accessibility.</p>
                        <div class="d-md-flex">
                            <div class="flex-shrink-0">
                                <img src="{{asset('newassets')}}/images/home/star.webp" class="tick-icon-n" alt="star Icon" />
                            </div>
                            <div class="flex-grow-1">
                                <p class="p-m-z">Upgrade complete system overhaul in one go. </p>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="flex-shrink-0">
                                <img src="{{asset('newassets')}}/images/home/star.webp" class="tick-icon-n" alt="star Icon" />
                            </div>
                            <div class="flex-grow-1">
                                <p class="p-m-z">Over 5,000 developer extensibility points offered by our open platform.</p>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="flex-shrink-0">
                                <img src="{{asset('newassets')}}/images/home/star.webp" class="tick-icon-n" alt="star Icon" />
                            </div>
                            <div class="flex-grow-1">
                                <p class="p-m-z mb-4">A seamless Optimization starting just at $180 per user/month.</p>
                            </div>
                        </div>
                        <div class="d-md-flex mt-3">
                            <div class="flex-shrink-0">
                                <p>Tags:</p>
                            </div>
                            <div class="flex-grow-1">
                                <ul class="tags">
                                    <li>Supply chain planning</li>
                                    <li>Procurement & sourcing</li>
                                    <li>Floor Management & Manufacturing</li>
                                    <li>Warehouse management & fulfilment</li>
                                    <li>Asset management & maintenance</li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-4">
                            <a href="https://guidedtour.microsoft.com/en-us/guidedtour/dynamics/supply-chain-modernization/1/1" target="_blank" class="btn btn-theme py-3 px-4 mb-2">Take A Guided Tour</a>
                            <a href="tel:+971044373103" class="btn btn-success ms-md-2 py-3 px-4 mb-2"> Experts Advice +971 (04) 437 3103</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 ms-auto mb-3">
                    <div class="text-center">
                        <img src="{{asset('newassets')}}/images/supply-img.png" class="img-fluid" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-7 order-lg-2 ms-auto mb-3">
                    <div class="content-box">
                        <a href="https://dynamicsstream.com/microsoft-dynamics-365-human-resources" class="solutions-links">
                            <h3 class="text-theme">Human resources- Microsoft Dynamics 365</h3>
                        </a>
                        <h4>Create Workplace Where People <strong>Thrive</strong></h4>
                        <p class="mb-4">Cultivate an environment where people & business flourish with MD365 HR & Our In-house advance system on top of Microsoft Apps. Manage payroll, leave tracking, employee profiles, self-service capabilities, attendance management, performance evaluation, recruitment/onboarding, and end-of-service/pensions.</p>
                        <div class="d-md-flex">
                            <div class="flex-shrink-0">
                                <img src="{{asset('newassets')}}/images/home/star.webp" class="tick-icon-n" alt="star Icon" />
                            </div>
                            <div class="flex-grow-1">
                                <p class="p-m-z">User-friendly self-service HR tools & Microsoft Teams.</p>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="flex-shrink-0">
                                <img src="{{asset('newassets')}}/images/home/star.webp" class="tick-icon-n" alt="star Icon" />
                            </div>
                            <div class="flex-grow-1">
                                <p class="p-m-z">Data-driven & people-centric HR approach that transcends conventional</p>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="flex-shrink-0">
                                <img src="{{asset('newassets')}}/images/home/star.webp" class="tick-icon-n" alt="star Icon" />
                            </div>
                            <div class="flex-grow-1">
                                <p class="p-m-z mb-4">Next-best-action guidance and ensure regulatory compliance. </p>
                            </div>
                        </div>
                        <div class="d-md-flex mt-3">
                            <div class="flex-shrink-0">
                                <p>Tags:</p>
                            </div>
                            <div class="flex-grow-1">
                                <ul class="tags">
                                    <li>Employee self-service</li>
                                    <li>Employee performance management</li>
                                    <li>Onboarding</li>
                                    <li>Pension management</li>
                                    <li>End-of-service </li>
                                    <li>Drive growth cut costs</li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-4">
                            <a href="https://dynamics.microsoft.com/en-us/guidedtour/dynamics/human-resources/1/1/" target="_blank" class="btn btn-theme py-3 px-4 mb-2">Take A Guided Tour</a>
                            <a href="tel:+971044373103" class="btn btn-success ms-md-2 py-3 px-4 mb-2"> Experts Advice +971 (04) 437 3103</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 order-lg-1 mb-3">
                    <div class="text-center">
                        <img src="{{asset('newassets')}}/images/hr-img.png" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                    <a href="/microsoft-dynamics-365-crm" class="service-link">Microsoft Sales <i class="bi-chevron-right"></i></a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                    <a href="/microsoft-dynamics-365-crm" class="service-link">Microsoft Customer Service <i class="bi-chevron-right"></i></a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                    <a href="/microsoft-dynamics-365-crm" class="service-link">Microsoft Marketing <i class="bi-chevron-right"></i></a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                    <a href="/microsoft-dynamics-365-human-resources" class="service-link">Microsoft Human Resources <i class="bi-chevron-right"></i></a>
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
            <div class="bg-black p-md-5 p-4 rounded-4 mt-4">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-md-7 mb-3">
                        <h4 class="text-white fw-bold mb-4">WEB & APP CUSTOMIZED SOLUTIONS</h4>
                        <p class="fs-6 text-white">Our 200+ talented geeks with cutting-edge technologies, AngularJS, Native, React, NodeJS, Laravel, Java & .Net design & develop complex Web/Mobile Apps powered by Microsoft or a stand-alone product, that gives your customers/ business an experiece it deserve.</p>
                        <p class="fs-6 text-white mb-5">Web Applications | Mobile Apps | Business Apps | eCommerce | Shopify powered by Microsoft | Custom Solutions</p>
                        <div class="d-flex flex-wrap align-items-center justify-content-lg-start justify-content-center">
                            <div class="text-start">
                                <a href="https://www.thefuturedynamics.com/" target="_blank" class="btn btn-success ms-md-2 py-3 visit-btn-st"> Visit Site <i class="bi-chevron-right"></i></a>
                            </div>
                            <div class="text-md-start ms-md-3">
                                <p class="mb-0 fw-semibold"><a class="ms-3 fw-semibold text-decoration-none text-white" href="tel:+971527684867">+971 52 768 4867</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-5 mb-3 text-center">
                        <img src="{{asset('newassets')}}/images/app-image.png" class="img-fluid" alt="App Image" width="550" />
                    </div>
                </div>

            </div>
        </div>
    </div>
    <h2 class="section-title text-center">Vertical Solutions</h2>
    <h2 class="mb-5 sub-title text-center">Forge the path of your company with our In-house built</h2>
    <div class="container-lg">
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
                    <a href="javascript:void(0)" class="service-link">DS365 Payroll for Business Central <i class="bi-chevron-right"></i></a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-3">
                    <a href="https://dynamicsstream.com/our-apps" class="service-link">DS365 H2H Bank Integration App <i class="bi-chevron-right"></i></a>
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

<!--Section Starts-->
<section class="contact-sec">
    <div class="container-fluid px-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="contact-card">
                    <div>
                        <img src="{{asset('newassets')}}/images/icons/phone-icon.svg" class="img-fluid mb-4" alt="Phone Icon" width="35" />
                        <h5 class="mb-5">Contact Us</h5>
                        <p>Call, chat, or connect with a sales specialist for personalized consultation.</p>
                    </div>
                    <div>
                        <a href="tel:+971526510534" class="btn btn-outline-theme">+971 52 651 0534</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="contact-card">
                    <div>
                        <img src="{{asset('newassets')}}/images/icons/whatsapp-icon.svg" class="img-fluid mb-4" alt="Chat Icon" width="35" />
                        <h5 class="mb-5">Quick WhatsApp</h5>
                        <p>Our consultant never leave no gap to serve you, please connect over WhatsApp for quick consultation.</p>
                    </div>
                    <div>
                        <a href="tel:+971526510534" class="btn btn-outline-theme">+971 52 651 0534</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="contact-card">
                    <div>
                        <img src="{{asset('newassets')}}/images/icons/envelop-icon.svg" class="img-fluid mb-4" alt="Envelope Icon" width="35" />
                        <form class="contact-form">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <input type="text" class="form-control" placeholder="Full Name" />
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="text" class="form-control" placeholder="Company Name" />
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="text" class="form-control" placeholder="Phone Number +97152 768 4867" />
                                </div>
                                <div class="col-md-6 mb-4">
                                    <select class="form-control">
                                        <option disabled="disabled" selected="selected">Choose a Solution</option>
                                        <option>Dynamics 365 Business Central</option>
                                        <option>Dynamics AX</option>
                                        <option>Dynamics Navision</option>
                                        <option>Dynamics 365 Sales </option>
                                        <option>Dynamics 365 Service</option>
                                        <option>Dynamics 365 Marketing</option>
                                        <option>Dynamics 365 Retail and Commerce</option>
                                        <option>Dynamics 365 HR</option>
                                        <option>Dynamics 365 Project Management</option>
                                        <option>Microsoft Office 365</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <textarea class="form-control" rows="2" placeholder="Please write specific comments/ requirements (if any)"></textarea>
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
</section>
<!--section Ends-->
<!--Section Starts-->
<section class="industry-sec">
    <div class="container-lg">
        <div class="px-xl-5">
            <h2 class="mb-5 section-title margin-st">Trusted Across Industries</h2>
            <div class="row industry-row">
                <div class="col-xl-4 col-lg-6 col-md-6 d-flex align-items-stretch mb-3">
                    <div class="industry-card">
                        <div class="mb-4">
                            <div class="text-center">
                                <img src="{{asset('newassets')}}/images/brand/cortec-img.png" class="img-fluid mb-5" width="200" />
                            </div>
                            <h6 class="fw-bolder">Manufacturing</h6>
                            <p>Middle East and North Africa, Cortec® Middle East, the leading manufacturer of environmentally-friendly corrosion inhibitors providing effective solutions for corrosion challenges across most industries. Operating throughout the</p>
                            <!-- <div class="my-4">
                                <h6 class="fs-bold">Implemented Solution</h6>
                                <h6 class="fw-normal">Microsoft Dynamics 365 - Business Central</h6>
                            </div> -->
                        </div>
                        <div>
                            <h6 class="small fw-bolder">Don’t take our words, see what our client says:</h6>
                            <p class="small">Dynamics Stream possesses extensive expertise in Microsoft ERP and CRM, delivering tailored solutions that cater to our specific business requirements. Their knowledge has significantly enhanced our operations and customer relationship management. I enthusiastically endorse Dynamics Stream as a Microsoft service provider for Business Central and CRM. Their holistic solutions, exemplary customer service, and technical proficiency position them as a trusted partner for success with Microsoft's business solutions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 d-flex align-items-stretch mb-3">
                    <div class="industry-card">
                        <div class="mb-4">
                            <div class="text-center">
                                <img src="{{asset('newassets')}}/images/brand/gulf-img.png" class="img-fluid mb-5" width="200" />
                            </div>
                            <h6 class="fw-bolder">Investments</h6>
                            <p>Gulf Capital is a leading thematically driven and socially conscious alternative investment firm with over sixteen years of investment experience in Growth Markets across Private Equity, Private Debt and Real Estate. </p>
                            <!-- <div class="my-4">
                                <h6 class="fs-bold">Implemented Solution</h6>
                                <h6 class="fw-normal">Microsoft Dynamics 365 - Business Central Sales Marketing </h6>
                            </div> -->
                        </div>
                        <div>
                            <h6 class="small fw-bolder">Don’t take our words, see what our client says:</h6>
                            <p class="small">Dynamics Stream serves as our reliable ally for ERP implementation and support. Their proficiency, professionalism, and unwavering dedication have optimized our processes, leading to improved operational efficiency. Their exceptional support consistently addresses our evolving requirements. Thanks to Dynamics Stream, we've embraced data-driven decision-making and witnessed enhanced business performance. We wholeheartedly endorse them as a trustworthy ERP implementation partner.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 d-flex align-items-stretch mb-3">
                    <div class="industry-card">
                        <div class="mb-4">
                            <div class="text-center">
                                <img src="{{asset('newassets')}}/images/brand/khiara-img.png" class="img-fluid mb-5" width="200" />
                            </div>
                            <h6 class="fw-bolder">eCommerce & Trading</h6>
                            <p>Khiara Stores has been a leading regional supplier of kitchenware, tableware, and other homeware products since 1955.</p>
                            <!-- <div class="my-4">
                                <h6 class="fs-bold">Implemented Solution</h6>
                                <h6 class="fw-normal">Microsoft Dynamics 365 - Business Central Commerce</h6>
                            </div> -->
                        </div>
                        <div>
                            <h6 class="small fw-bolder">Don’t take our words, see what our client says:</h6>
                            <p class="small">Dynamics Stream effectively executed the implementation of D365 Business Central in accordance with my specifications, demonstrating excellent planning. Their post-implementation support is noteworthy. The team is diligent, responsive, and committed to addressing any issues or inquiries promptly. I highly endorse them for ERP implementation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--section Ends-->
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
        <h4><span>4.2</span> Top-rated care</h4>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 46 44" fill="none">
            <path d="M44.2935 22.5C44.2935 20.94 44.1497 19.44 43.8827 18H22.5986V26.52H34.7609C34.2268 29.26 32.6243 31.58 30.2206 33.14V38.68H37.555C41.8282 34.84 44.2935 29.2 44.2935 22.5Z" fill="#4285F4" />
            <path d="M22.5989 44.0002C28.7006 44.0002 33.8162 42.0402 37.5553 38.6802L30.2209 33.1402C28.2076 34.4602 25.6395 35.2602 22.5989 35.2602C16.7232 35.2602 11.7309 31.4002 9.94357 26.2002H2.42432V31.8802C6.14286 39.0602 13.7648 44.0002 22.5989 44.0002Z" fill="#34A853" />
            <path d="M9.9435 26.1796C9.49152 24.8596 9.22444 23.4596 9.22444 21.9996C9.22444 20.5396 9.49152 19.1396 9.9435 17.8196V12.1396H2.42424C0.88341 15.0996 0 18.4396 0 21.9996C0 25.5596 0.88341 28.8996 2.42424 31.8596L8.2794 27.4196L9.9435 26.1796Z" fill="#FBBC05" />
            <path d="M22.5989 8.75999C25.9271 8.75999 28.8855 9.87998 31.2481 12.04L37.7196 5.73999C33.7956 2.18 28.7006 0 22.5989 0C13.7648 0 6.14286 4.93999 2.42432 12.14L9.94357 17.82C11.7309 12.62 16.7232 8.75999 22.5989 8.75999Z" fill="#EA4335" />
        </svg>
    </div>
    <div class="container-lg">
        <div class="px-xl-5">
            <div class="row">
                <div class="col-xl-6 col-lg-8 mb-3">
                    <div class="content-box">
                        <h4>We Embrace Intelligence, Do You? Your AI Journey Starts Here!</h4>
                        <h2 class="my-4">Copilot Across All Microsoft Suites</h2>
                        <p class="mb-4">Copilot an ultimate productivity improvement AI tool, crafted to bring value to every tier of an organization. At Dynamics Stream we not only embrace Copilot, in fact being leading Microsoft solution partners in Dubai, USA, United Kingdom we helping our partners to implement Copilot & make sure they take immediate benefits out of it. Whether you're a leader at the helm or an IT professional managing operations, Copilot presents features that simplify tasks, automate workflows, and foster collaboration. Its flexibility allows for tailoring to suit the distinct requirements of any organization. The capability to expand its functionalities through plugins ensures it remains an ever-evolving asset, ready to adjust to the dynamic landscape of evolving business needs. Functioning harmoniously with well-known Microsoft 365 Apps like Word, Excel, PowerPoint, Outlook, Teams, and beyond, Microsoft 365 Copilot stands as a beacon of real-time intelligent assistance. Users can elevate their creativity, boost productivity, and refine their skills, all with the dynamic support of Microsoft 365 Copilot.</p>
                        <div class="d-md-flex">
                            <div class="flex-shrink-0">
                                <img src="{{asset('newassets')}}/images/icons/bulb-icon.svg" class="img-fluid" alt="Bulb Icon" />
                            </div>
                            <div class="flex-grow-1 ms-md-3">
                                <h6 class="fw-normal mt-4">To improve your organization & team productivity with Copilot, talk to our AI consultants now!</h6>
                                <div class="my-5">
                                    <a href="tel:+971(04)4373103" class="btn btn-outline-theme py-3 mb-2">+971 (04) 437 3103</a>
                                    <a href="tel:+971526510534" class="btn btn-theme py-3 ms-md-3 mb-2">+971 52 651 0534</a>
                                </div>
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
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/62971968b0d10b6f3e751345/1g4f3mh4j';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
@endsection