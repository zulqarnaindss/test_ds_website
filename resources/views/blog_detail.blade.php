@extends('newhomemain')
@section('title', $blog->seo_title)
@section('meta_description', $blog->meta_description)
@section('meta_keywords', $blog->meta_keywords)
@section('contents')
<div class="blogs-detail-mrng">
<h2 class="blog-single-top-h">{{ $blog->title }}</h2>
{!! $blog->body ?? '' !!}
</div>

<!-- <section class="slide  kenBurns">
    <div class="content">
        <div class="container">
            <div class="wrapss">
                <ul class="grid grid-85 equal ae-2 fromCenter blgs-box-m" data-equal-collapse-width="767">
                    <li class="col-12-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                        <h2 class="blog-single-top-h">{{ $blog->title }}</h2>
                  
                        <div class="detil-blog-marn">
                            {!! $blog->body ?? '' !!}
                        </div>
                       
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="background" style="background-color:white">
    </div>
</section> -->
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
@stop