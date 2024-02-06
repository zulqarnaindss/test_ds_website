@extends('NewRemMain')
@section('title', 'Remote Resources Service')
@section('meta_description' , '')
@section('meta_keywords', '')
@section('contents')
<!--Header Starts-->
<header class="header-bg-Rem-sec">
    <div>
        <div class="container-xl">
            <div class="px-xl-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 order-lg-2 ms-auto text-center mb-4">
                    </div>
                    <div class="col-xl-8 col-lg-8 order-lg-1 mb-4">
                        <div class="content-box mb-4 text-lg-start text-center">
                            <h1 class="cstm-n-bc-lnding-h">Are you looking for Remote Resources for Dynamics 365?</h1>
                            <p>POV:BOOST YOUR BUSINESS WITH REMOTE RESOURCES BY DYNAMICS 365
                            </p>
                            <p>
                                Rapidly bridge the skills gap and grow your in-house Functional & Consultant and development team with Microsoft dynamics 365 Suite featuring D365 Finance. Dynamics 365 Business Central, Dynamics 365 Supply Chain, Dynamics 365 HR & Microsoft Dynamics CRM, .NET QA engineers, solution architects.</p>
                            <div class="last-blue-sect-mrg-Rem">
                                <div class="row">
                                    <div class="col-xl-6 col-md-6 align-items-stretch">
                                        <h5>Ready in Just 1 Day</h5>
                                        <h6 class="h-6-last-sect-Rem">Resource will be ready to join in a Day</h6>
                                    </div>
                                    <div class="col-xl-6 col-md-6 align-items-stretch">
                                        <h5>Well Managed Talent</h5>
                                        <h6 class="h-6-last-sect-Rem">In-house well trained resources</h6>
                                    </div>
                                </div>

                            </div>
                            <div class="d-flex flex-wrap align-items-center justify-content-lg-start justify-content-center contact-cfinance-div">
                                <div class="text-start mb-2">
                                    <a href="#popup1" class="btn btn-outline-theme">Request a Free Demo <i class="bi-chevron-right ms-3"></i></a>
                                    <a href="tel:+971526510534" class="btn m-mrgn-top-f btn-theme ms-sm-3 vert-align-sub">+971 52 651 0534</a>
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
    </div>

</header>
<!--Header Ends-->
<section class="bg-img-for-Rem-seco-sect">
    <div class="container-lg mt-Rem-div">
        <div class="px-xl-5">
            <h3 class="mt-Rem-div mrbtom-for-Rem-2 font-s-h3 ">Struggling with Resources & project completion? </h3>
            <div class="mrgn-top-Rem-2-sect">
                <div class="row ">
                    <div class="col-xl-6 col-md-6 d-flex align-items-stretch">
                        <div class="Rem-color-bg-sect-card">
                            <div class="card-content">
                                <div>
                                    <img src="{{asset('assets')}}/images/new-services-pages/remote-assist/bc.webp" class="img-fluid" alt="" />
                                    <h4>Dynamics 365 Business Central </h4>
                                </div>
                                <div>
                                    <p class="left-para-sect-seco-Rem-wd">D365 Business Central is a cloud-based solution that helps small and medium-sized businesses manage their finances, operations, sales, and customer service.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 d-flex align-items-stretch">
                        <div class="Rem-color-bg-sect-card right-div-sect-seco-Rem-mrgn">
                            <div class="card-content">
                                <div>
                                    <img src="{{asset('assets')}}/images/new-services-pages/remote-assist/finance.webp" class="img-fluid" alt="" />
                                    <h4>Dynamics 365 Finance</h4>
                                </div>
                                <p>D365 Finance integrates seamlessly with other Microsoft applications and services. Whether you need to manage your cash flow, budget, tax, or financial reporting, D365 Finance can help you achieve your goals and transform your business.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 d-flex align-items-stretch">
                        <div class="Rem-color-bg-sect-card">
                            <div class="card-content">
                                <div>
                                    <img src="{{asset('assets')}}/images/new-services-pages/remote-assist/sc.webp" class="img-fluid" alt="" />
                                    <h4>Dynamics 365 Supply chain</h4>
                                </div>
                                <p class="left-para-sect-seco-Rem-wd">D365 Supply Chain is a cloud-based solution that helps you optimize your supply chain operations with real-time visibility, agile planning, and advanced insights.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 d-flex align-items-stretch">
                        <div class="Rem-color-bg-sect-card right-div-sect-seco-Rem-mrgn">
                            <div class="card-content">
                                <div>
                                    <img src="{{asset('assets')}}/images/new-services-pages/remote-assist/hr.webp" class="img-fluid" alt="" />
                                    <h4>Dynamics 365 HR</h4>
                                </div>
                                <p>D365 Human Resource is part of the Microsoft Dynamics 365 suite of products, which connects your business processes and data across various applications and services.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 d-flex align-items-stretch">
                        <div class="Rem-color-bg-sect-card">
                            <div class="card-content">
                                <div>
                                    <img src="{{asset('assets')}}/images/new-services-pages/remote-assist/sales.webp" class="img-fluid" alt="" />
                                    <h4>Microsoft Dynamics SALES</h4>
                                </div>
                                <p class="left-para-sect-seco-Rem-wd">D365 Sales is part of the Microsoft Dynamics 365 suite of products, which connects your business processes and data across various applications and services.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 d-flex align-items-stretch">
                        <div class="Rem-color-bg-sect-card right-div-sect-seco-Rem-mrgn">
                            <div class="card-content">
                                <div>
                                    <img src="{{asset('assets')}}/images/new-services-pages/remote-assist/marketing.webp" class="img-fluid" alt="" />
                                    <h4>Microsoft Dynamics MARKETING</h4>
                                </div>
                                <p>D365 Marketing connects your business processes and data across various applications and services. Whether you need to generate leads, nurture prospects, increase loyalty, or measure impact.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="contact-sect-new-bg-Rem">
    <div class="container-lg">
        <div class="px-xl-5">
            <div class="contact-card-Rem">
                <div>
                    <div class="">
                        <h3 class="">Welcome Your NEW Team</h3>
                    </div>
                    <form class="contact-form" id="contactForm" action="/contact-form" enctype="multipart/form-data" method="post">
                        <input type="hidden" name="_token" value="iZ7AUeTd1zBGuKipoXQPlurY1Zhcv9EovLwAJpcf">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <input type="text" id="name" name="name" class="form-control form-control-Rem" placeholder="Full Name" required="">
                            </div>
                            <div class="col-md-4 mb-3">
                                <input type="text" class="form-control form-control-Rem" id="phone" name="phone" placeholder="Number Format +971 52 651 0534" required="">
                            </div>
                            <div class="col-md-4 mb-3">
                                <input type="text" id="cname" name="company" class="form-control form-control-Rem" placeholder="Organization Name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="email" id="email" name="email" class="form-control form-control-Rem" placeholder="Email" required="">
                            </div>
                            <div class="col-md-6 mb-3">
                                <select id="solution" class="form-control form-control-Rem" name="solutions" required="">
                                    <option disabled="disabled" selected="selected" value="">Select your Product/ Solution</option>
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
                            <div class="col-md-12 mb-3">
                                <textarea name="message" class="form-control form-control-Rem" rows="4" placeholder="Please explain your project/ requirement &amp; our consultant will connect with you with relevant solution."></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-32 btn-outline-theme px-5">Hire a Team NOW</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="Bld-sect-Rem">
    <div class="container-lg">
        <div class="px-xl-5">
            <h3 class="mrbtom-for-Rem-2 font-s-h3-B-sect-Rem text-center ">Build Amazing Teams on Demand</h3>
            <div class="last-blue-sect-mrg-Rem-aftr-cont">
                <div class="row">
                    <div class="col-xl-4 col-md-4 align-items-stretch">
                        <h6 class="h-6-last-sect-Rem-aftr-cont">Pre vetted & Well Trained Resources</h6>
                    </div>
                    <div class="col-xl-4 col-md-4 align-items-stretch">
                        <h6 class="h-6-last-sect-Rem-aftr-cont">Ready To Join FromToday</h6>
                    </div>
                    <div class="col-xl-4 col-md-4 align-items-stretch">
                        <h6 class="h-6-last-sect-Rem-aftr-cont">Save 50% Of Resource Logistics Cost</h6>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
<section class="Rem-lst-Blue-sec">
    <div class="">
        <div class="container-lg">
            <div class="px-xl-5">
                <h2 class="my-4">Why Choose Dynamics Stream UK ?</h2>
                <div class="row align-items-center">
                    <div class="col-xl-8 col-md-8 align-items-stretch">
                        <div class="content-box">

                            <h5>Migration Security & Reliability</h5>
                            <p class="">Our consultants can manage smooth Microsoft Dynamics 365 upgrades and migrations by using proactive methods to ensure safe and dependable data transfer. We move your data from your current state to the new system in an orderly and gradual way.</p>
                            <h5 class="">Certified Microsoft Solutions Partner</h5>
                            <p class="">We are an authorized gold partner for Microsoft products and services, with extensive expertise and years of experience. We manage your complete system requirements, from Dynamics 365 implementation through upgrades and maintenance. We can build a robust, efficient, and profitable solution for your organization since we have professionals, effective methodology, and a safe data migrating skill set.</p>
                            <h5>Experienced consultants with 300+ Migrations & Upgares</h5>
                            <p class="">It can help you reduce the cost of ownership by eliminating the need for infrastructure investment, upgrade and maintenance costs, and dedicated IT resources.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 align-items-stretch text-center">
                        <img src="{{asset('assets')}}/images/new-services-pages/remote-assist/why-choose-ds-remote.webp" class="img-fluid last-logo-img-Rem" alt="" />
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