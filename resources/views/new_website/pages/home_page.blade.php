@extends('new_index')
@section('header_css_js')

@endsection
@section('content')
<section class="section-with-carousel section-with-left-offset position-relative mt-5 mb-1">
    <div class="col-lg-10 offset-lg-1 hotel-details-inner">
        <div class="carousel-wrapper">
            <div class="swiper">
                <div class="swiper-wrapper">
                    @if ($banner)
                    @foreach ($banner as $val)
                    <div class="swiper-slide" style="width:60% !important">
                        <figure>

                            <img width="540" height="380" src="{{ asset('/images/'.$val->image) }}" alt="">

                            {{-- <figcaption>
                                Small title for the slider

                            </figcaption> --}}
                        </figure>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="carousel-controls">
            <div class="carousel-control carousel-control-left" role="button"
                style="opacity:1 !important; height: 33px;width: 33px;border-radius: 50%;background: #195e7345;">
                <span class="carousel-control-prev-icon" style="margin-top: 6px;margin-left: 5px;"></span>
            </div>
            <div class="carousel-control carousel-control-right" role="button"
                style="opacity:1 !important; height: 33px;width: 33px;border-radius: 50%;background: #195e7345; ">
                <span class="carousel-control-next-icon" style="margin-top: 6px;margin-left: 5px;"></span>

            </div>
        </div>
    </div>
</section>


<section class="hotel-details-section mb-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 hotel-details-inner">
                <div class="banner-slider-header m-0">
                    <h2 class="site-secondary-title">[box -1 ] Trending 2X Cash Back stores</h2>
                </div>
                <div class="loop owl-carousel owl-theme select-hotel-carosel">
                    @if ($brand)
                    @foreach ($brand as $val)
                    @if ($val->status == 'ACTIVE')
                    <div class="item">
                        <div class="slider-box">
                            <div class="box-inner p-0">
                                <a href="{{route('vendorprofile',['name'=>$val->name,'id'=>$val->id])}}">
                                    <img style="height:88px;border-radius:5px;"
                                        src="{{ asset('/images/'.$val->icon) }}"></a>
                            </div>
                        </div>
                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span>
                                <i class="fa fa-solid fa-plus circle-red"></i>
                            </span>
                            <span class="text-red">
                                80% cash back
                            </span>
                            <span class="text-gray">Was 20%</span>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @endif



                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->
<section class="hotel-details-section mb-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 hotel-details-inner">
                <div class="banner-slider-header m-0">
                    <h2 class="site-secondary-title">[Box-2] Pack up and go! 2x Cash Back</h2>
                </div>
                <div class="loop owl-carousel owl-theme ">
                    @php
                    $allOffer=\App\Model\Offer::get()->take(30);
                    @endphp

                    @if ($allOffer)
                    @foreach ($allOffer as $val)
                    @if ($val->status == 'ACTIVE')
                    <div class="item">
                        <div class="slider-box mb-3">
                            <div class="box-inner p-0" style="position: relative">

                                <img style="height:115px;border-radius:5px;"
                                    src="{{ asset('/images/'.$val->icon_image) }}">

                                <a href='' class="btn btn-primary btn-sm see_details">See detials</a>
                            </div>
                        </div>

                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span>
                                <i class="fa fa-solid fa-plus circle-red"></i>
                            </span>
                            <span class="text-red">
                                80% cash back
                            </span>
                            <span class="text-gray">Was 20%</span>
                        </div>
                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span class="text-gray-bold">
                                {{$val->title}}
                            </span>

                        </div>
                    </div>
                    @endif
                    @endforeach
                    @endif


                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Banner Section End -->
<section class="hotel-details-section mb-4">
    <div class="container-fluid">
        <div class="row flex">
            <div class="col-lg-10 offset-lg-1  hotel-details-inner" style="display: inline-table;">
                <div class="banner-slider-header m-0">
                    <h2 class="site-secondary-title">[BOX-3]Stores our members
                        love</h2>
                </div>
                <div class="card mb-3 p-0 col-lg-6"
                    style="/* width: 50%; */height:97px;/* border-radius: 15px; */border: none;display: inline-block;">
                    <div class="row p-2 m-1"
                        style="box-shadow: 0px 4px 8px #0a164626;border-radius: 10px;/* height: 78px !important; */">
                        <div style="width: 15%;height:47px;/* vertical-align: middle; */">
                            <img src="https://via.placeholder.com/150" class="" alt="..." height="47px" width="96px"
                                style="margin-top: 14px;margin-left: 14px;">
                        </div>
                        <div style="width: 79%;">
                            <div class="card-body p-2 mb-2">
                                <h5 class="card-title" style="margin-top: 11px;">This is a wider card with supporting
                                    text belo</h5>
                                <div class=" p-0 text-left" style="vertical-align: middle;margin-top: -10px;">
                                    <span>
                                        <i class="fa fa-solid fa-plus circle-red"></i>
                                    </span>
                                    <span class="text-red">
                                        80% cash back
                                    </span>
                                    <span class="text-gray">Was 20%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 p-0 col-lg-6"
                    style="/* width: 50%; */height:97px;/* border-radius: 15px; */border: none;display: inline-block;">
                    <div class="row p-2 m-1"
                        style="box-shadow: 0px 4px 8px #0a164626;border-radius: 10px;/* height: 78px !important; */">
                        <div style="width: 15%;height:47px;/* vertical-align: middle; */">
                            <img src="https://via.placeholder.com/150" class="" alt="..." height="47px" width="96px"
                                style="margin-top: 14px;margin-left: 14px;">
                        </div>
                        <div style="width: 79%;">
                            <div class="card-body p-2 mb-2">
                                <h5 class="card-title" style="margin-top: 11px;">This is a wider card with supporting
                                    text belo</h5>
                                <div class=" p-0 text-left" style="vertical-align: middle;margin-top: -10px;">
                                    <span>
                                        <i class="fa fa-solid fa-plus circle-red"></i>
                                    </span>
                                    <span class="text-red">
                                        80% cash back
                                    </span>
                                    <span class="text-gray">Was 20%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Banner Section End -->


<section class="section-with-carousel section-with-left-offset position-relative mt-5">
    <div class="col-lg-10 offset-lg-1 hotel-details-inner">
        <div class="banner-slider-header">
            <h2 style=" font-weight: bold;text-align: left;color: #d9b389;font-size: 24px;">More Ways to
                Earn Cash
                Back
            </h2>
        </div>
        <div class="carousel-wrapper">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <figure>
                            <img width="640" height="480"
                                src="https://static.rakuten.com/img/media/10658/220401-50802-apr-iscbed-crsl.gif"
                                alt="">
                            <figcaption>
                                Small title for the slider

                            </figcaption>
                        </figure>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img width="640" height="427"
                                src="https://static.rakuten.com/img/media/10609/211226-48726-giftcardshop-sectionhero-baked-1200x628-123.gif"
                                alt="">
                            <figcaption>
                                Small title for the slider

                            </figcaption>
                        </figure>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img width="640" height="427"
                                src="https://static.rakuten.com/img/media/10608/dining_small-1200x628.png" alt="">
                            <figcaption>
                                Small title for the slider

                            </figcaption>
                        </figure>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img width="640" height="427"
                                src="https://static.rakuten.com/img/media/10611/creditcard_crsl-small-1200x620-123.png"
                                alt="">
                            <figcaption>
                                Small title for the slider

                            </figcaption>
                        </figure>
                    </div>

                </div>
            </div>
        </div>
        <div class="carousel-controls">
            <button class="carousel-control carousel-control-left" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40">
                    <path fill-rule="evenodd"
                        d="M10.78 19.03a.75.75 0 01-1.06 0l-6.25-6.25a.75.75 0 010-1.06l6.25-6.25a.75.75 0 111.06 1.06L5.81 11.5h14.44a.75.75 0 010 1.5H5.81l4.97 4.97a.75.75 0 010 1.06z">
                    </path>
                </svg>
            </button>
            <button class="carousel-control carousel-control-right" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40">
                    <path fill-rule="evenodd"
                        d="M13.22 19.03a.75.75 0 001.06 0l6.25-6.25a.75.75 0 000-1.06l-6.25-6.25a.75.75 0 10-1.06 1.06l4.97 4.97H3.75a.75.75 0 000 1.5h14.44l-4.97 4.97a.75.75 0 000 1.06z">
                    </path>
                </svg>
            </button>
        </div>
    </div>

</section>


<section class="hotel-details-section mb-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 hotel-details-inner">
                <div class="banner-slider-header m-0">
                    <h2 class="site-secondary-title">[box -1 ] Top category</h2>
                </div>
                <div class="loop owl-carousel owl-theme select-hotel-carosel">
                    @if ($brand)
                    @foreach ($brand as $val)
                    @if ($val->status == 'ACTIVE')
                    <div class="item">
                        <div class="slider-box">
                            <div class="box-inner p-0">
                                <a href="{{route('vendorprofile',['name'=>$val->name,'id'=>$val->id])}}">
                                    <img style="height:88px;border-radius:5px;"
                                        src="{{ asset('/images/'.$val->icon) }}"></a>
                            </div>
                        </div>
                        <div class="m-0 p-0 text-left" style="vertical-align: middle">

                            <span class="text-gray-bold ">
                                Category name
                            </span>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @endif



                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

@endsection
@section('footer_css_js')
<style>
    .swiper-slide-active {
        width: 66% !important;
    }

    .see_details {
        position: absolute;
        width: 105px;
        bottom: -9px;
        text-transform: none !important;
        right: 10px;
        border-radius: 30px !important;
        background: white !important;
        color: #195e73;
        padding: 6px;
        border: 1px solid #e1dede;
        -webkit-box-shadow: 0px 4px 8px #0a164626;
        box-shadow: 0px 4px 8px #0a164626
    }

    .see_details a {
        font-size: 14px;
        padding-left: 11px;
        padding-right: 11px;
        font-weight: normal;
        border-radius: 27px;
    }

    .see_details a:hover {
        background-color: #195e73;
    }

    .btn-primary:hover {
        color: #195e73;
    }
</style>
@endsection