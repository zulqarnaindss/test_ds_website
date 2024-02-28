@extends('newhomemain')
@section('title', $blog->meta_title)
@section('meta_description', $blog->meta_description)
@section('meta_keywords', $blog->meta_keyword)
@section('contents')
<section class="slide  kenBurns">
    <div class="content">
        <div class="container">

            <div class="carer">

                <h2 class="det-h-jobs-form">{{ $blog->title }}</h2>
                @if(\Session::has('success'))
                <div class="alert alert-success ">{{ \Session::get('success') }}</div>
                {{ \Session::forget('success') }}
                @endif
                <div class="det-margn-job">
                    <ul class="grid grid-85 equal ae-2 fromCenter  u-l-margig" data-equal-collapse-width="767">
                        <li class="col-3-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                            .
                        </li>
                        <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                            <div class="job-form col-md-4">
                                <div class="form-details">
                                    <h4>Apply to this job</h4>
                                    <p class="paragraph">Incomplete profiles, without the complete job application form
                                        submitted, will
                                        not be
                                        considered.
                                    </p>
                                    
                                    <form method="POST" name=form1 action="{{ route('career-form') }}"
                                        enctype="multipart/form-data" id="contactForm">
                                        @csrf
                                        <fieldset> <label class="lable-form">Full Name <span>*</span></label> <input
                                                type="text" class="form-input" name="name" id="fullname" required>
                                        </fieldset>
                                        <fieldset> <label class="lable-form">Email <span>*</span></label> <input
                                                type="email" class="form-input" name="email" id="email" required>
                                        </fieldset>
                                        <fieldset> <label class="lable-form">mobile Number <span>*</span></label> <input
                                                type="number" class="form-input" name="phone" id="phone" required>
                                        </fieldset>
                                        <fieldset> <label class="lable-form">LinkedIn Profile URL</label> <input
                                                type="text" class="form-input" name="linkedinurl" id="linkedinurl">
                                        </fieldset>
                                        <fieldset> <label class="lable-form">Upload Resume <span>*</span></label> <input
                                                type="file" name="resume" id="file" required>
                                        </fieldset> <input type="hidden" name="title" id="title"
                                            value="Associate Business Analyst">
                                        <input type="checkbox" id="checkbox" name="checkbox">
                                        <label for="check">I Agree</label>

                                        <div class="buttonWrap">
                                            <div id="blocker"></div>
                                            <fieldset style="text-align: center;"> <input type="submit" name="job-submit"
                                                id="job-submit" class="submi-btn submitButton" value="Apply Now!">
                                        </fieldset>
                                        </div>
                                        
                                    </form>

                                </div>
                                <div class="status">
                                    <p class="failed"></p>
                                </div>
                            </div>
                        </li>
                        <li class="col-3-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                            .
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="background" style="background-color:white">
    </div>
</section>
@endsection