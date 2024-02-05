@extends('NewSalesLandingMain')
@section('title', 'Sales Landing Page')
@section('meta_description' , '')
@section('meta_keywords', '')
@section('contents')
<!--Header Starts-->
<header class="header-bg-sales-sec">
    <div>
        <div class="container-xl">
            <div class="px-xl-5">
                <div class="row">
                    <div class="col-xl-5 col-lg-4 order-lg-2 ms-auto text-center mb-4">
                        <img src="{{asset('assets')}}/images/new-landing-pages/sales/sales-img.webp" class="img-fluid rounded-4 mrgtop-hdr-img" width="600" alt="Header Image" />
                    </div>
                    <div class="col-xl-6 col-lg-8 order-lg-1 mb-4">
                        <div class="content-box mb-4 text-lg-start text-center">
                            <h1 class="cstm-n-bc-lnding-h">Microsoft Dynamics 365 for Sales</h1>
                            <p>Dynamics 365 Human Resources is a cloud-based application that helps organizations manage their human capital and optimize their workforce. It provides features such as employee profiles, performance management, compensation management, benefits management, leave and absence management, employee development, and analytics. Dynamics 365 Human Resources also integrates with other Dynamics 365 applications and Microsoft products, such as Power Platform, Teams, and LinkedIn</p>
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
<section class="second-sect-sales-inc">
    <div class="container-lg">
        <div class="px-xl-5">
            <div class="row">
                <div class="col-xl-12 col-lg-12 mb-3">
                    <div class="row align-items-center top-Imp-cSales-sec-div" id="counter">
                        <div class="col-xl-3 col-lg-3 col-md-3  text-center">
                            <h2 class="fw-bold mrgn-btm-SC-per"><span class="count percentplus numbr-color-SC" data-count="20">20</span></h2>
                            <p class="m-para-second-sec">Years in Business and
                                Growing Stronger</p>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3  text-center">
                            <h2 class="fw-bold mrgn-btm-SC-per"><span class="count percentplus numbr-color-SC" data-count="120">120</span></h2>
                            <p class="m-para-second-sec">Customers </p>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3  text-center">
                            <h2 class="fw-bold mrgn-btm-SC-per"><span class="count percentplus numbr-color-SC" data-count="150">150</span></h2>
                            <p class="m-para-second-sec">Implementation across various Countries</p>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3  text-center">
                            <h2 class="fw-bold mrgn-btm-SC-per"><span class="count percentplus numbr-color-SC" data-count="30">30</span></h2>
                            <p class="m-para-second-sec">High Qualified Consultants</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="">
    <div class="bg-color-hr-landing top-Imp-cSales-2-sec-div">
        <div class="container-lg">
            <div class="px-xl-5">
                <div class="tab-nbcgtBC tab-nbcgt-new-mBC ">
                    <h3 class="font-s-h3 mb-3">Empower your Sellers and Accelerate Revenue</h3>
                    <p class="paragraph-for-mobile-res">Make selling easier with AI, automation, and real-time insights built into the seller’s flow of work.</p>
                    <div class="tab__content-nbcgtBC bg-color-for-thrd-sect-click ">
                        <div class="tab__content-item-nbcgtBC">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                    <div class=""><img class="" src="{{asset('assets')}}/images/new-landing-pages/sales/prioritize-your-pipeline.webp" alt="" /></div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <h5 class="mb-3">Prioritize Your Pipeline</h5>
                                    <p class="paragraph-for-mobile-res">Focus on the right customers with AI-based scoring models, opportunity summaries, and data visualizations.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab__content-item-nbcgtBC">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                    <div class=""><img class="" src="{{asset('assets')}}/images/new-landing-pages/sales/improve-interactions.webp" alt="" /></div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <h5 class="mb-3">Improve Interactions</h5>
                                    <p class="paragraph-for-mobile-res">Get call insights like sales tips, related information, and suggested answers, along with AI-generated call reports.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab__content-item-nbcgtBC">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                    <div class=""><img class="" src="{{asset('assets')}}/images/new-landing-pages/sales/scale-best-practices.webp" alt="" /></div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <h5 class="mb-3">Scale Best Practices</h5>
                                    <p class="paragraph-for-mobile-res">Provide automated sales guidance by creating sequences of sales actions for your team.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab__content-item-nbcgtBC">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-lg-8 col-md-6 mb-3">
                                    <div class=""><img class="" src="{{asset('assets')}}/images/new-landing-pages/sales/stay-in-flow-of-work.webp" alt="" /></div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                                    <h5 class="mb-3">Stay in Flow of Work</h5>
                                    <p class="paragraph-for-mobile-res">Minimize app-switching with automatic updates in Microsoft 365 apps.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab__list-nbcgtBC">
                        <div class="tab__item-nbcgtBC tab__itm-finance">
                            <p class="">Prioritize Your Pipeline</p>
                        </div>
                        <div class="tab__item-nbcgtBC tab__itm-finance">
                            <p class="">Improve Interactions</p>
                        </div>
                        <div class="tab__item-nbcgtBC tab__itm-finance">
                            <p class="">Scale Best Practices</p>
                        </div>
                        <div class="tab__item-nbcgtBC tab__itm-finance">
                            <p class="">Stay in the Flow of Work</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="">
    <div class="container-lg top-Imp-cSales-3-sec-div mt-Imp-card-div">
        <div class="px-xl-5">
            <h3 class="mt-nbcgtBC font-s-h3 mb-4-mrgn-bottom">Some of the Features of Dynamics 365 Sales</h3>
            <div class="row">
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="Impct-card mt-4">
                        <div class="align-items-start mb-2">
                            <img src="{{asset('assets')}}/images/new-landing-pages/sales/Ai-driven-f1.webp" class="img-fluid flex-shrink-0 ico-wid" alt="">
                            <p class="ml-Imp-h4-p sales-impct-sect-p-pdn ml-Imp-h4-p-pdng">AI-driven insights powered by conversation intelligence, relationship intelligence, opportunity scoring, and more. These features help you understand your business relationships, evaluate your activities in relation to previous successes, and choose the best path forward</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="Impct-card mt-4 mt-Imp-card-div-rigt">
                        <div class="align-items-start mb-2">
                            <img src="{{asset('assets')}}/images/new-landing-pages/sales/microsoft-sales-copilot.webp" class="img-fluid flex-shrink-0 ico-wid" alt="">
                            <p class="ml-Imp-h4-p sales-impct-sect-p-pdn">Microsoft Sales Copilot, a role-based copilot in Dynamics 365 Sales and Microsoft 365 designed to improve sales productivity. It automatically captures data, accesses, and registers data into any customer relationship management (CRM) system, eliminating manual data entry</p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="Impct-card mt-4">
                        <div class="align-items-start mb-2">
                            <img src="{{asset('assets')}}/images/new-landing-pages/sales/integration-linkedin.webp" class="img-fluid flex-shrink-0 ico-wid" alt="">

                            <p class="ml-Imp-h4-p sales-impct-sect-p-pdn ml-Imp-h4-p-pdng">Integration with LinkedIn, which enables you to connect sales records with LinkedIn data and enhance business processes with information about people, organizations, and relationships.</p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="Impct-card mt-4 mt-Imp-card-div-rigt">
                        <div class="align-items-start mb-2">
                            <img src="{{asset('assets')}}/images/new-landing-pages/sales/collaboration-tools.webp" class="img-fluid flex-shrink-0 ico-wid" alt="">
                            <p class="ml-Imp-h4-p sales-impct-sect-p-pdn">Collaboration tools, such as Microsoft Teams, Outlook, and Word, which help you communicate with your customers and colleagues, and create personalized documents and proposals.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="bg-color-5sect">
    <div class="container-lg top-Imp-cSales-5-sec-div">
        <div class="px-xl-5">
            <h3 class="font-s-h3 mb-4-mrgn-bottom">What’s New in Dynamics 365 Sales</h3>
            <div class="row row-mrgn-5-sect">
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="Impct-card sect-5-para-center">
                        <div class="align-items-start mb-2 mobile-blocks">
                            <img src="{{asset('assets')}}/images/new-landing-pages/sales/update1-new-copilot-enhancements.webp" class="img-fluid flex-shrink-0 " alt="">
                        </div>
                        <div class="align-items-start mb-2">
                            <p class="">New Copilot enhancements, which provide sellers with deeper insights and recommendations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="Impct-card">
                        <div class="align-items-start mobile-none mb-2">
                            <img src="{{asset('assets')}}/images/new-landing-pages/sales/update1-new-copilot-enhancements.webp" class="img-fluid flex-shrink-0 " alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-mrgn-5-sect">
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="Impct-card">
                        <div class="align-items-start mb-2">
                            <img src="{{asset('assets')}}/images/new-landing-pages/sales/update2-enhance-forcasting-capabilities.webp" class="img-fluid flex-shrink-0 " alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="Impct-card sect-5-para-center-R">
                        <div class="align-items-start mb-2">
                            <p class="">Enhanced forecasting capabilities, which enable you to create multiple forecasts, apply filters, and adjust values.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-mrgn-5-sect">
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="Impct-card sect-5-para-center">
                        <div class="align-items-start mobile-blocks mb-2">
                            <img src="{{asset('assets')}}/images/new-landing-pages/sales/improve-email-engagement.webp" class="img-fluid flex-shrink-0" alt="">
                        </div>
                        <div class="align-items-start mb-2">
                            <p class="">Improved email engagement, which allows you to track email opens, link clicks, and attachment views, and get real-time notifications.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="Impct-card">
                        <div class="align-items-start mobile-none mb-2">
                            <img src="{{asset('assets')}}/images/new-landing-pages/sales/improve-email-engagement.webp" class="img-fluid flex-shrink-0" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-mrgn-5-sect">
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="Impct-card">
                        <div class="align-items-start mb-2">
                            <img src="{{asset('assets')}}/images/new-landing-pages/sales/simplified-lead-management.webp" class="img-fluid flex-shrink-0" alt="">

                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 align-items-stretch">
                    <div class="Impct-card sect-5-para-center-R">
                        <div class="align-items-start mb-2">
                            <p class="">Simplified lead management, which helps you qualify and convert leads with fewer clicks and automate follow-up actions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sales-Blue-sec  ">
    <div class="top-left-sales-Blue">
        <div class="container-lg">
            <div class="px-xl-5">
                <div class="content-box">
                    <h2 class="my-4">Empowering sellers through Automation and Intelligence</h2>
                    <p class="mb-4">Microsoft Dynamics 365 Sales enables sellers to close more deals and meet customer needs with the help of next-generation AI and real-time insights. Sellers have everything they need in their app of choice to engage with customers, including historical data and access to subject matter experts. Using data, sellers can achieve more consistent sales interactions from creating a lead to closing a sale, predict how much revenue they will generate in a given timeframe, automate repeatable processes and define sales best practices, and promote products and services with targeted marketing campaigns.</p>
                    <p class="sec-para-blue-sect">With Microsoft Sales Copilot, which is included with Dynamics 365 Sales Enterprise and Premium licenses, we have established a vision of CRM platform by fusing collaboration experiences with CRM platform data and generative AI capabilities to help sellers reduce mundane tasks and personalize customer relationships even further. Powered by Azure OpenAI Service, Microsoft Sales Copilot features built-in responsible AI and enterprise-grade Azure security.</p>
                </div>
                <div class="last-blue-sect-mrg-cont">
                    <div class="d-flex align-items-start mb-2">
                        <i class="flex-shrink-0 bi-check2 last-blue-sect-tick"></i>
                        <h5 class="flex-grow-1 mb-0 ms-3 text-white">10th consecutive year recognized of Success</h5>
                    </div>
                    <div class="d-flex align-items-start mb-2">
                        <i class="flex-shrink-0 bi-check2 last-blue-sect-tick"></i>
                        <h5 class="flex-grow-1 mb-0 ms-3 text-white">Furthest in Completeness of Vision</h5>
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