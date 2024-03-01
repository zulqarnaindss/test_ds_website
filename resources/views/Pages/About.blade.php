@extends('newhomemain')
@foreach($babout as $MSDAbout)
@section('title', $MSDAbout->meta_title)
@section('meta_description', $MSDAbout->meta_description)
@section('meta_keywords', $MSDAbout->meta_keyword)
@endforeach
@section('contents')
<section>
    <div class="container-lg">
        <div class="px-xl-5">
            <div class="top-sect-about-mrgn">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6 mb-3">
                        <h3 class="mb-4">We are your Technology Partner</h3>
                        <p class="mrb-a-para">If you are looking for an Experienced leading Microsoft Dynamics 365 implementation partner, you have come to the right place. Dynamics Stream Software Solutions, We are a team of experts who can help you transform your business with the power of Microsoft Dynamics 365, a cloud-based platform that offers a range of solutions for Sales, Service, Marketing, Finance, Operations, Supply Chain, Manufacturing, HR, Project Operations, and more.
                        </p>
                        <p class="mrb-a-para">
                            Dynamics Stream has successfully implemented Dynamics 365 for hundreds of clients across various industries and regions. We have the experience, skills, and knowledge to deliver customized and scalable solutions that meet the organization's specific needs and goals.
                        </p>
                        <p class="mrb-a-para mb-4">
                            Dynamics Stream offers end-to-end services, from consulting and planning to development and deployment to training and support. Dynamics Stream follows Microsoft's best practices and methodologies to ensure quality and efficiency. We also leverage the latest technologies and tools, such as Microsoft Power Platform, Azure, and AI, to enhance the fullest Dynamics 365 capabilities and performance.
                        </p>
                        <a href="/contact-us" target="_blank" class="btn btn-success py-2 px-3"> Contact Us <i class="bi-chevron-right"></i></a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 mb-3 text-center">
                        <img src="{{asset('newassets')}}/images/about-us/about-us.webp" class="img-fluid" alt="about us Image" width="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-lg py-5">
        <div class="px-xl-5">
            <div class="">
                <div class="row align-items-center" id="counter">
                    <div class="col-xl-3 col-lg-3 col-md-3  text-center">
                        <h2 class="fw-bold mrgn-btm-about-per"><span class="count percentplus" data-count="200"> 200 </span></h2>
                        <p class="">Customers</p>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3  text-center">
                        <h2 class="fw-bold mrgn-btm-about-per"><span class="count percentplus" data-count="20"> 20 </span></h2>
                        <p class="">Years of Innovation</p>

                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3  text-center">
                        <h2 class="fw-bold mrgn-btm-about-per"><span class="count percentper" data-count="100"> 100 </span></h2>
                        <p class="">Unparalleled Expertise</p>

                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3  text-center">
                        <h2 class="fw-bold mrgn-btm-about-per"><span class="count percentper" data-count="100"> 100 </span></h2>
                        <p class="">Commitment</p>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-lg">
        <div class="px-xl-5">
            <div class="top-sect-about-mrgns">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 mb-3 bg-img-third-sect ">
                        <div class="pdng-left-rigt-4">
                            <h3 class="mb-4 text-white">Our Vission</h3>
                            <p class="mrb-a-para text-white">We aspire to be the business solution company of choice for our valued customers, & workplace of choice for dynamics professionals.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 mb-3 bg-img2-third-sect ">
                        <div class="pdng-left-rigt-4">
                            <h3 class="mb-4 text-white">Our Mission</h3>
                            <p class="mrb-a-para text-white">Our mission is to bring the right people together to challenge established thinking & drive the transformation & provide the best high-quality, cost-effective business solution to small and medium size enterprise to boost up their business matrix.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-lg">
        <div class="row">
            <div class="col-xl-12">
                <div class="text-center mrg-logos-sect">
                    <img src="{{asset('newassets')}}/images/about-us/logos/ms-solution.webp" class="img-fluid me-4" alt="Microsoft Logo" width="160">
                    <img src="{{asset('newassets')}}/images/about-us/logos/shopify.webp" class="img-fluid me-4" alt="Shopify" width="160">
                    <img src="{{asset('newassets')}}/images/about-us/logos/ms-gold.webp" class="img-fluid me-4" alt="Microsoft Gold Logo" width="160">
                    <img src="{{asset('newassets')}}/images/about-us/logos/iso.webp" class="img-fluid me-4" alt="iso logo" width="160">
                    <img src="{{asset('newassets')}}/images/about-us/logos/hub.webp" class="img-fluid me-4" alt="Hubspot Logo" width="160">
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-lg">
        <div class="px-xl-5">
            <div class="top-sect-about-mrgns">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6 mb-3">
                        <h3 class="mb-4">Why Choose Dynamics Stream Software Solutions Partner</h3>
                        <p class="mrb-a-para">As a Microsoft partner company, we are proud to offer our clients the best solutions for their business needs. Whether you are looking for an ERP, CRM, or BI system, we have the expertise and experience to help you achieve your goals and transform your business with the power of cloud computing. Being a leading Microsoft Dynamics 365 partner company, we have access to the latest tools and resources from Microsoft to help you implement, customize, and support your Dynamics 365 solutions. We also have the industry knowledge and best practices to help you leverage the full potential of Dynamics 365 for your specific business needs. We have helped hundreds of clients across various sectors and regions to successfully implement, migrate, and support Dynamics 365 and achieve their digital transformation goals. Here are some of the testimonials from our satisfied customers:</p>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 mb-3 text-center">
                        <img src="{{asset('newassets')}}/images/about-us/about-us-last3.webp" class="img-fluid" alt="about us Image" width="">
                    </div>
                </div>

            </div>
            <div class="row mrgn-top-botm-last">
                <div class="col-xl-4 col-md-6 d-flex align-items-stretch mb-4">
                    <div class="about-card-nmbr">
                        <h2 class="clr1 fw-bold">1.</h2>
                        <p>"We chose Dynamics Stream as our Microsoft Dynamics 365 partner company because they understood our vision and challenges. They delivered a solution that met our requirements and exceeded our expectations. Thanks to their expertise and support, we have improved our efficiency, profitability, and customer satisfaction."</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 d-flex align-items-stretch mb-4">
                    <div class="about-card-nmbr">
                        <h2 class="clr2 fw-bold">2.</h2>
                        <p>"Dynamics Stream is more than just a Microsoft Dynamics 365 partner company. They are a trusted advisor and a strategic partner. They helped us design and implement a Dynamics 365 solution that aligned with our business strategy and objectives. They also provided ongoing training and support to ensure our success."</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 d-flex align-items-stretch mb-4">
                    <div class="about-card-nmbr">
                        <h2 class="clr3 fw-bold">3.</h2>
                        <p>"Working with Dynamics Stream as our Microsoft Dynamics 365 partner company was a great decision. They were professional, responsive, and flexible throughout the project. They delivered a high-quality solution that fit our budget and timeline. We are very happy with the results and look forward to working with them again."</p>
                    </div>
                </div>
                <p class="pdng-para-last-a">
                    If you are interested in learning more about how we can help you as a Microsoft Dynamics 365 partner company, please contact us today. We would love to hear from you and discuss your business needs.


                </p>
            </div>
        </div>
    </div>
</section>
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

