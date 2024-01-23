@extends('main')
@foreach($careermain as $careermains)
@section('title', $careermains->meta_title)
@section('meta_description', $careermains->meta_description)
@section('meta_keywords', $careermains->meta_keywords)
@endforeach
@section('contents')
<section class="slide  kenBurns">
    <div class="content">
        <div class="container">
            <div class="wrapss">
                <div class="center-text">
                    <h3 class="hed-3-career">Careers</h3>
                    <h2 class="">Got it? Bring it</h2>
                    <div class="carer-explore-d"><a href="https://dynamicsstream.com/careers/featured-jobs">Explore
                            Opportunities</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="background"
        style="background-image: url('https://dynamicsstream.com/storage/careermains/careers-detail-bg.webp');">&nbsp;
    </div>
</section>
<section class="slide  kenBurns">
    <div class="content">
        <div class="container">
            <div class="wrap">
                <ul class="grid grid-85 equal ae-2 fromCenter secd-sect-cares-li" data-equal-collapse-width="767">
                    <li class="col-5-12 col-tablet-1-1 col-phablet-1-1 ae-3"><img class="imag-secnd-carre"
                            src="https://dynamicsstream.com/storage/careermains/careers-second-sect.webp" alt="" /></li>
                    <li class="col-7-12 col-tablet-1-1 col-phablet-1-1 ae-3">
                        <h3 class="secd-sect-carer-h3">We are on a journey of creating <br /><strong>Meaningful Human
                                Experiences</strong></h3>
                        <p class="secd-sect-para-carer">At Dynamics Stream, we create an agile environment of mutual
                            respect, inclusivity, collaboration and result-driven success to create an enabling
                            environment. For us, employee-centricity is not just about gaming rooms or beanbags.</p>
                        <p class="secd-sect-para-carer">We evolve, learn, un-learn and re-learn every day in pursuit of
                            excellence. We work with emerging and cutting-edge technologies and boast a vibrant culture
                            of learning via collaboration. Our team gets motivated by seeing the direct impact of their
                            contributions to the success of our customers and the company.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="background" style="background-color: white;">&nbsp;</div>
</section>
<section class="slide  kenBurns">
    <div class="content">
        <div class="container">
            <div class="wrap">
                <ul class="grid grid-85 equal ae-2 fromCenter secd-sect-cares-li" data-equal-collapse-width="767">
                    <li class="col-7-12 col-tablet-1-1 col-phablet-1-1 ae-3">
                        <h3 class="secd-sect-carer-h3">We&rsquo;re telling a story, story of <br /><strong>Success and
                                Growth</strong></h3>
                        <p class="secd-sect-para-carer">Dynamics stream is a rapidly growing organization with 500+
                            highly qualified team members working on solving complex business challenges through
                            innovative enterprise projects and products. With our global outreach, we have opportunities
                            across offices in UAE, Pakistan</p>
                        <p class="secd-sect-para-carer">Our customer base includes Fortune 100 retail and CPG companies,
                            leading store chains, fast growth fintech and multiple Silicon Valley startups. We not only
                            share the promise of a community that you will cherish and benefit from but also offer a
                            fulfilling career path with a complete rewards package.</p>
                    </li>
                    <li class="col-5-12 col-tablet-1-1 col-phablet-1-1 ae-3"><img class="imag-secnd-carre-2"
                            src="{{ asset('assets')}}/images/new-home-images/careers/careers-3rd-sec-img.webp" alt="" /></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="background" style="background-color: #F0F0F0;">&nbsp;</div>
</section>
<section class="slide  kenBurns">
    <div class="content">
        <div class="container">
            <div class="wrap">
                <ul class="grid grid-85 equal ae-2 fromCenter secd-sect-cares-li" data-equal-collapse-width="767">
                    <li class="col-5-12 col-tablet-1-1 col-phablet-1-1 ae-3"><img class=""
                            src="{{ asset('assets')}}/images/new-home-images/careers/careers-4th-img.webp" alt="" />
                    </li>
                    <li class="col-7-12 col-tablet-1-1 col-phablet-1-1 ae-3">
                        <h3 class="secd-sect-carer-h3"><strong>Pursuit of Excellence</strong> through <br />Identified
                            Attributes that Hold us Together</h3>
                        <p class="secd-sect-para-carer">We are champions in our respective fields and craft the future
                            collectively with a resilient attitude. We recruit talent from top-tiered universities and
                            people who have demonstrated exceptional strategic and operational skills. Culture at
                            Dynamics Stream and the attributes we look for in candidates rest at the heart of the
                            recruitment process.</p>
                    </li>
                </ul>
                <div class="last-hed-carrer"><strong>Be your best-self in a high growth, empowering culture.</strong>
                    <div class="last-carer-btn"><a href="https://dynamicsstream.com/careers/featured-jobs">Join Our
                            Team</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="background" style="background-color: white;">&nbsp;</div>
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