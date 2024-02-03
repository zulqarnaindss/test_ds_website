@extends('NewSCLandingMain')
@section('title', 'Supply Chain Landing Page')
@section('meta_description' , '')
@section('meta_keywords', '')
@section('contents')
<!--Header Starts-->
<header class="header-bg-supply-chain-sec">
    <div>
        <div class="container-xl">
            <div class="px-xl-5">
                <div class="row">
                    <div class="col-xl-5 col-lg-4 order-lg-2 ms-auto text-center mb-4">
                        <img src="{{asset('assets')}}/images/new-landing-pages/supply-chain/sc1.webp" class="img-fluid rounded-4 mrgtop-hdr-img" width="600" alt="Header Image" />
                    </div>
                    <div class="col-xl-6 col-lg-8 order-lg-1 mb-4">
                        <div class="content-box mb-4 text-lg-start text-center">
                            <h1 class="cstm-n-bc-lnding-h">Microsoft Dynamics 365 Supply Chain Management</h1>
                            <p>D365 Supply Chain is a cloud-based solution that helps businesses optimize their supply chain operations with real-time visibility, AI-driven insights, and agile planning. </p>
                            <h1 class="cstm-n-bc-lnding-h">Optimize operations with D365</h1>
                            <p>Boost operational performance by maximizing asset performance, transforming manufacturing operations, meeting digital commerce needs, and reducing risk in your supply chain.</p>

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
<section class="">
    <div class="container-lg">
        <div class="px-xl-5">
            <div class="row">
                <div class="col-xl-12 col-lg-12 mb-3">
                    <div class="row align-items-center" id="counter">
                        <div class="col-xl-3 col-lg-3 col-md-3  text-center">
                            <h2 class="fw-bold mrgn-btm-SC-per"><span class="count percentplus numbr-color-SC" data-count="20">20</span></h2>
                            <p class="">Years in Business and
                                Growing Stronger</p>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3  text-center">
                            <h2 class="fw-bold mrgn-btm-SC-per"><span class="count percentplus numbr-color-SC" data-count="120">120</span></h2>
                            <p class="">Customers </p>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3  text-center">
                            <h2 class="fw-bold mrgn-btm-SC-per"><span class="count percentplus numbr-color-SC" data-count="150">150</span></h2>
                            <p class="">Implementation across various Countries</p>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3  text-center">
                            <h2 class="fw-bold mrgn-btm-SC-per"><span class="count percentplus numbr-color-SC" data-count="30">30</span></h2>
                            <p class="">High Qualified Consultants</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="">
    <div class="bg-color-fnance-landing">
        <div class="container-lg">
            <div class="px-xl-5">
                <div class="tab-nbcgtBC tab-nbcgt-new-mBC">
                    <h3 class="font-s-h3 mb-3">Why modernize your supply chain?</h3>
                    <div class="tab__content-nbcgtBC bg-color-for-thrd-sect-click">
                        <div class="tab__content-item-nbcgtBC">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                    <div class=""><img class="" src="{{asset('assets')}}/images/new-landing-pages/supply-chain/gain-better-visibility.webp" alt="" /></div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <h5 class="mb-3">Gain Better Visibility</h5>
                                    <p class="paragraph-for-mobile-res">Unify data across systems for real-time inventory views and integrate with IoT sensors for asset and production info.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab__content-item-nbcgtBC">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                    <div class=""><img class="" src="{{asset('assets')}}/images/new-landing-pages/supply-chain/create-smart-factory.webp" alt="" /></div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <h5 class="mb-3">Create a Smart, Connected Factory</h5>
                                    <p class="paragraph-for-mobile-res">Realize smart factory potential with sensor data intelligence and mixed reality.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab__content-item-nbcgtBC">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                    <div class=""><img class="" src="{{asset('assets')}}/images/new-landing-pages/supply-chain/automate-fulfillment.webp" alt="" /></div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <h5 class="mb-3">Maximize Asset Productivity</h5>
                                    <p class="paragraph-for-mobile-res">Use AI and real-time inventory to fulfill orders on time and reduce costs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab__list-nbcgtBC">
                        <div class="tab__item-nbcgtBC tab__itm-finance">
                            <p class="">Gain Better Visibility</p>
                        </div>
                        <div class="tab__item-nbcgtBC tab__itm-finance">
                            <p class="">Create a Smart, Connected Factory</p>
                        </div>
                        <div class="tab__item-nbcgtBC tab__itm-finance">
                            <p class="">Maximize Asset Productivity</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-lg mt-Imp-card-div">
        <div class="px-xl-5">
            <h3 class="mt-nbcgtBC font-s-h3 mb-4-mrgn-bottom">Boost productivity with AI</h3>
            <div class="row">
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="Impct-card mt-4">
                        <div class="d-flex-new align-items-start mb-2">
                            <i class="fa-solid fa-arrow-trend-up font-icon-for-impact-card" style="color: #095cec;"></i>
                            <div>
                                <h4 class="flex-grow-1 mb-4 ml-Imp-h4-p Impct-card-h4">Accelerate modernization with composability</h4>
                                <p class="ml-Imp-h4-p ml-Imp-h4-p-pdng">Modernize supply chain technology in phases without the need to rip and replace all systems, all at once.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 align-items-stretch top-Imp-cSC-div">
                    <div class="Impct-card mt-4 mt-Imp-card-div-rigt">
                        <div class="d-flex-new align-items-start mb-2">
                            <i class="fa-solid fa-hand-holding-dollar font-icon-for-impact-card" style="color: #095cec;"></i>
                            <div>
                                <h4 class="flex-grow-1 mb-4 ml-Imp-h4-p Impct-card-h4">Adapt to business needs with extensibility</h4>
                                <p class="ml-Imp-h4-p">Adopt and personalize standardized processes using 5,000+ developer extensibility points available through our open platform.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="Impct-card mt-4">
                        <div class="d-flex-new align-items-start mb-2">
                            <i class="fa-solid fa-gauge font-icon-for-impact-card" style="color: #005eff;"></i>
                            <div>
                                <h4 class="flex-grow-1 mb-4 ml-Imp-h4-p Impct-card-h4">Accelerate sustainability</h4>
                                <p class="ml-Imp-h4-p ml-Imp-h4-p-pdng">Work seamlessly with the Sustainability manager to reduce emissions across your operations, from designing to sourcing, to delivery and recycling.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="Impct-card mt-4 mt-Imp-card-div-rigt">
                        <div class="d-flex-new align-items-start mb-2">
                            <i class="fa-regular fa-clipboard font-icon-for-impact-card" style="color: #005eff;"></i>
                            <div>
                                <h4 class="flex-grow-1 mb-4 ml-Imp-h4-p Impct-card-h4">Enhance user experience with a modern UI</h4>
                                <p class="ml-Imp-h4-p">Get new front-line workers up and running quickly with intuitive and easy-to-use UI on handheld devices to perform manufacturing and warehousing tasks.</p>
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
                <h3 class="mt-nbcgtBC font-s-h3 mb-3">D365 Supply Chain Related Products</h3>
                <div class="tab__list-nbcgtBC mrtop-fifth-sect">
                    <div class="tab__item-nbcgtBC tab__item-nbcgt-2-modules-finance tab__item-nbcgtBC-2-modules">
                        <p class="">Finance</p>
                    </div>
                    <div class="tab__item-nbcgtBC tab__item-nbcgt-2-modules-finance tab__item-nbcgtBC-2-modules">
                        <p class="">Commerce</p>
                    </div>
                    <div class="tab__item-nbcgtBC tab__item-nbcgt-2-modules-finance tab__item-nbcgtBC-2-modules">
                        <p class="">Power Platform</p>
                    </div>
                    <div class="tab__item-nbcgtBC tab__item-nbcgt-2-modules-finance tab__item-nbcgtBC-2-modules">
                        <p class="">Project Operations</p>
                    </div>
                </div>
                <div class="tab__content-nbcgtBC bg-color-for-thrd-sect-click">
                    <div class="tab__content-item-nbcgtBC">
                        <div class="row align-items-center">
                            <div class="col-xl-12 col-lg-12 col-md-12 mb-3">
                                <p class="text-center px-3 m-font-p">Monitor Your Global Financial Operations in Real time, Predict Outcomes, and make data-driven decisions to drive business agility and growth.</p>
                                <div class="text-center"><img class="" src="{{asset('assets')}}/images/new-landing-pages/supply-chain/finance.webp" alt="" /></div>
                            </div>

                        </div>
                    </div>
                    <div class="tab__content-item-nbcgtBC">
                        <div class="row align-items-center">
                            <p class="text-center">Dynamics 365 Commerce delivers a comprehensive omnichannel solution that unifies back-office, call center, and digital experiences</p>
                            <div class="col-xl-12 col-lg-12 col-md-12 mb-3">
                                <div class="text-center"><img class="" src="{{asset('assets')}}/images/new-landing-pages/supply-chain/commerce.webp" alt="" /></div>
                            </div>

                        </div>
                    </div>
                    <div class="tab__content-item-nbcgtBC">
                        <div class="row align-items-center">
                            <div class="col-xl-12 col-lg-12 col-md-12 mb-3">
                                <p class="text-center">Build, automate workflows, analyze data, rapidly design, configure, and publish modern websites.</p>
                                <div class="text-center"><img class="" src="{{asset('assets')}}/images/new-landing-pages/supply-chain/power-platform.webp" alt="" /></div>
                            </div>

                        </div>
                    </div>
                    <div class="tab__content-item-nbcgtBC">
                        <div class="row align-items-center">
                            <div class="col-xl-12 col-lg-12 col-md-12 mb-3">
                                <p class="text-center">Project Operations connect sales, resourcing, project management. and finance teams in a single application to win more deals.</p>
                                <div class="text-center"><img class="" src="{{asset('assets')}}/images/new-landing-pages/supply-chain/project-operations.webp" alt="" /></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="SC-Blue-sec  ">
    <div class="top-left-SC-Blue">
        <div class="container-lg">
            <div class="px-xl-5">
                <div class="content-box">
                    <h2 class="my-4">Forrester The Total Economic Impact™ of Supply Chain Management</h2>
                    <p class="mb-4 px-3">Learn in this commissioned study, conducted by Forrester Consulting on behalf of Microsoft, how Dynamics 365 Supply Chain Management provided substantial ROI.</p>
                </div>
                <div class="row text-center">
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch">
                        <div class="blue-sect-SC-card">
                            <div class="card-content">
                                <h4>90%</h4>
                                <p>ROI with Dynamics 365 Supply Chain Management over three years</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch">
                        <div class="blue-sect-SC-card">
                            <div class="card-content">

                                <h4>03+</h4>
                                <p>years for a composite organization based on interviewed customers.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex-new align-items-stretch">
                        <div class="blue-sect-SC-card">
                            <div class="card-content">
                                <h4>50%</h4>
                                <p>Increased developer productivity</p>
                            </div>
                        </div>
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