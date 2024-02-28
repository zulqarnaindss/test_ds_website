@extends('newhomemain')
@section('title', $blog->meta_title)
@section('meta_description', $blog->meta_description)
@section('meta_keywords', $blog->meta_keywords)
@section('contents')
<section class="slide  kenBurns">
    <div class="content">
        <div class="container">
            <div class="carer">
                <div class="appy-bt">
                    <a href="{{ route('career-apply', ['slug' =>$blog->slug]) }}" class="appy-ma-bt">Apply Now </a>
                </div>
                <h2 class="det-h-jobs">{{ $blog->title }}</h2>
                
                {!! $blog->body ?? '' !!}
            </div>
        </div>
    </div>
    <div class="background" style="background-color:white">
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