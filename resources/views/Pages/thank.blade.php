@extends('thank_main')
@section('title', 'Form Submitted')
@section('meta_description' ,'')
@section('meta_keywords', '')
@section('contents')
<section class="slide  kenBurns">
    <div class="content">
        <div class="container con-he-thnk">
            <div class="wraps">
                <ul class="grid grid-85 equal ae-2 fromCenter thnk-inl" data-equal-collapse-width="767">
                    <li class="col-6-12 col-tablet-1-2 col-phablet-1-2 ae-3">
                        <div class="ds-logos-ic-di">
                             <a href="https://dynamicsstream.com/dynamics-365">
                            <img src="{{ asset('assets')}}/images/new-home-images/navbar/dsss-top-logo.webp"
                                class="ic-logo" alt="">
                                </a>
                        </div>
                    </li>
                    <li class="col-6-12 col-tablet-1-2 col-phablet-1-2 ae-3">
                        <div class="g-logos-ic-di">
                            <img src="{{ asset('assets')}}/images/new-home-images/navbar/gold-partner-logo.webp"
                                class="ic-logo-g" alt="">
                        </div>
                    </li>
                </ul>

                <h2 class="thnk-f-he">Thank You For Submitting the Request</h2>
                <h3 class="thnk-s-he">We Will Contact You Soon</h3>
            </div>
        </div>
    </div>
    <div class="background" style="background-image: url('assets/images/new-home-images/thank-you-page.webp')">
    </div>
</section>

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