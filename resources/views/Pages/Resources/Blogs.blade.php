@extends('newhomemain')
@foreach($mainblog as $mainmsdblog)
@section('title', $mainmsdblog->seo_title)
@section('meta_description', $mainmsdblog->meta_description)
@section('meta_keywords', $mainmsdblog->meta_keywords)
@endforeach
@section('contents')
<section class="slide  kenBurns">
    <div class="content">
        <div class="container">
            <div class="wrapss">
                <div class="">
                    <h2 class="heading-first-top-blogs">BLOGS</h2>
                </div>
                <ul class="grid grid-85 equal ae-2 fromCenter new-mb-blogs" data-equal-collapse-width="767">
                    @foreach($blogs as $blog)
                    <li class="col-4-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                        <div class="box-main-di-for-blogs-mb">
                            <div class="box-main-di-for-blogs-inn-mb">
                                <img src="{{asset( '/storage/' .$blog->images)}}"
                                    class="img-new-blog-ico-mb" alt="">
                                <h3 class="blogs-di-he-new-mb">{{$blog->title}}</h3>
                            </div>
                            <div class="btn-di-read-main-mb">
                                <a href="{{ route('blogs_detail', ['slug' =>$blog->slug]) }}" class="btn-di-read-mb">Read
                                    More <img src="{{asset('assets')}}/images/new-home-images/r.png"
                                        class="img-new-blog-ero-mb" alt=""></a>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <div class="blogs-navi">
                    {!! $blogs->links() !!}
                </div>
            </div>
        </div>
    </div>
    <div class="background" style="background-image:url('assets/images/m-blogs-data/blogs-bg.webp');">
    </div>
</section>
@endsection