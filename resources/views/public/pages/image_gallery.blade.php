@extends('public.index')
@section('content')

    <section id="page-title" class="page-title-parallax " style="padding: 150px 0px; background-image: url({{ asset('assets/images/about-us.jpg') }}); background-size: cover; background-position: 0px 180.756px; margin-top: -102px;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">

        <div class="container clearfix" style="">
            <h1 style="text-align:center;padding-top:50px">Gallery</h1>
        <span style="text-align:center">Vegan Food Company</span>
        {{--     <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol> --}}
        </div>


    </section>
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="single-product">
                <section id="slider" class="slider-element">

                    <div class="masonry-thumbs grid-container grid-6 " data-big="3" data-lightbox="gallery" >
                        @if($images)
                        @foreach ($images as $val)
                    <a class="grid-item " href="{{ asset('images/'.$val->main_image)}}" data-lightbox="gallery-item" style="position: absolute; left: 0%; top: 0px;">
                            <div class="grid-inner">
                                <img class="img-fluid img-thumbnail" src="{{ asset('images/'.$val->thumb_image)}}" alt="Gallery Thumb 1" >
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark">
                                        <span class="overlay-trigger-icon bg-light text-dark animated zoomOut" data-hover-animate="zoomIn" data-hover-animate-out="zoomOut" data-hover-speed="400" style="animation-duration: 400ms;"><i class="icon-line-play"></i></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                        @endif
                      
                    
                    </div>

		        </section>
            </div>

        </div>
    </div>
</section>


@endsection
