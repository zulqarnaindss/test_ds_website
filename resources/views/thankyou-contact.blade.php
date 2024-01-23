@extends('main')
@foreach($bacontact as $backcontact)
@section('title', $backcontact->meta_title)
@section('meta_description',  $backcontact->meta_description)
@section('meta_keywords',  $backcontact->meta_keywords)
@endforeach
@section('contents')
@foreach($bacontact as $backcontact)
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12">
            <div class="y">
                <img src="{{ asset('/storage/'.$backcontact->thankyou_banner)}}" class="thankback" alt="{{$backcontact->thankyou_banner_alt ?? ''}}">
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection