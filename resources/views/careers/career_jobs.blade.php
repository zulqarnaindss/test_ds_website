@extends('newhomemain')
@section('title', $featuredjob->meta_title)
@section('meta_description', $featuredjob->meta_description)
@section('meta_keywords', $featuredjob->meta_keyword)
@section('contents')
<section class="slide  kenBurns">
    <div class="content">
        <div class="container">
            <div class="wrapss">
                <h2 class="main-h-jobs">{{ $featuredjob->title }}</h2>
                <div class="main-tab">
                    @foreach($blogs as $blog)
                    <div class="career-tab">
                        <ul class="grid grid-85 equal ae-2 fromCenter  u-l-m-careers" data-equal-collapse-width="767">
                            <li class="col-10-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                <div class="">
                                    <h3 class="h-jobs">{{ $blog->title }}</h3>
                                    <div class="loctin-imag-d">
                                        <img src="{{asset('assets')}}/images/location.png" alt="" class="loction-img">
                                        <p class="label-text"> {{ $blog->location }}</p>
                                    </div>
                                </div>
                            </li>
                            <li class="col-2-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                <div class="aply-btn-d">
                                    <a href="{{ route('career_detail', ['slug' =>$blog->slug]) }}" class="apply-btn-career">Detail</a>
                                </div>

                            </li>

                        </ul>

                    </div>
                    @endforeach
                    <!-- <div class="career-tab">
                        <ul class="grid grid-85 equal ae-2 fromCenter  u-l-m" data-equal-collapse-width="767">
                            <li class="col-10-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                <h3 class="h-jobs">Dynamics 365 Business Central Functional
                                    Consultant</h3>
                                <div class="loctin-imag-d">
                                    <img src="{{asset('assets')}}/images/location.png" alt="" class="loction-img">
                                    <p class="label-text"> Pakistan</p>
                                </div>
                            </li>
                            <li class="col-2-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                <div class="aply-btn-d">
                                    <a href="/business-central-job-detail" class="apply-btn-career">Detail</a>
                                </div>

                            </li>
                        </ul>
                    </div> -->
                    <!-- <div class="career-tab">
                        <ul class="grid grid-85 equal ae-2 fromCenter  u-l-m" data-equal-collapse-width="767">
                            <li class="col-10-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                <h3 class="h-jobs">.NET/C# Developers</h3>
                                <div class="loctin-imag-d">
                                    <img src="{{asset('assets')}}/images/location.png" alt="" class="loction-img">
                                    <p class="label-text"> Pakistan</p>
                                </div>
                            </li>
                            <li class="col-2-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                                <div class="aply-btn-d">
                                    <a href="/c-job-detail" class="apply-btn-career">Detail</a>
                                </div>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
  
    <div class="background" style="background-image:url({{ asset('/storage/'.$featuredjob->banner)}})">
    </div>
</section>

@endsection