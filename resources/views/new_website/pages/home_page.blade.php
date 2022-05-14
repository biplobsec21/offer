@extends('new_index')
@section('header_css_js')

@endsection
@section('content')
<section class="section-with-carousel section-with-left-offset position-relative mt-5">

    <div class="carousel-wrapper">
        <div class="swiper">
            <div class="swiper-wrapper">
                @if ($banner)
                @foreach ($banner as $val)
                <div class="swiper-slide">
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
</section>


<section class="hotel-details-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 hotel-details-inner">
                <div class="banner-slider-header" style="padding-left:33px;">
                    <h2 style=" font-weight: bold;text-align: left;color:#d9b389;font-size:30px;">Stores our members
                        love</h2>
                </div>
                <div class="loop owl-carousel owl-theme select-hotel-carosel">
                    @if ($brand)
                    @foreach ($brand as $val)
                    @if ($val->status == 'ACTIVE')
                    <div class="item">
                        <div class="slider-box">
                            <div class="box-inner">
                                <a href="{{route('vendorprofile',['name'=>$val->name,'id'=>$val->id])}}">
                                    <img style="height:80px;" src="{{ asset('/images/'.$val->icon) }}"></a>
                            </div>
                        </div>
                        {{-- <h3 style="color:red;text-align:left">2% Cash Back</h3> --}}
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


<section class="hotel-details-section mt-2">
    <div class="container-fluid" style="padding-left:54px">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 hotel-details-inner">
                <div class="banner-slider-header">
                    <h2 style="  font-weight: bold;text-align: left;color:#d9b389;font-size:30px;">Deals of the week
                    </h2>
                </div>
                <div class="row">
                    @php
                    $allOffer=\App\Model\Offer::get()->take(30);
                    @endphp
                    @if ($allOffer)
                    @foreach ($allOffer as $dt )
                    <div class="card d-flex m-2 shadow-sm"
                        style="width: 18rem;background: #00000003;/* border-radius: 10px !important; */border: none;box-shadow: 0 0 4px rgb(0 0 0 / 23%);min-height:200px;">
                        @if ($dt->icon_image)
                        <img class="card-img-top shadow-lg" src="{{ asset('/images/'.$dt->icon_image) }}"
                            alt="Card image cap">
                        @endif

                        <div class="card-body">
                            <h3 style="color:red;text-align:left">{{$dt->title}}</h3>
                            <p class="card-text"
                                style="text-align: left;font-size: 16px;color: #264753;font-weight: bold;">Spring
                                red-tag savings are here.</p>
                            @php
                            $vendor=\App\Model\Vendor::find($dt->vendor_id);
                            @endphp
                            <a href='{{url("allproducts?vendor_id=".$vendor->id."&affiliation_id=".$vendor->affiliation_id."&category_id=".$dt->category_id."
                                &offer_code=".$dt->code." &offer_id=".$dt->id)}}'
                                class="btn btn-primary see_details">See detials</a>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
</section>

<!-- Banner Section End -->

{{--
<section class="section-with-carousel section-with-left-offset position-relative mt-5">
    <div class="col-lg-10 offset-lg-1 hotel-details-inner">
        <div class="banner-slider-header">
            <h2 style=" font-weight: bold;text-align: left;color: #d9b389;font-size: 24px;">More Ways to Earn Cash
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




<section class="banner">

    <div class="container">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src='{{asset("assets/img/backgrounds/1.jpg")}}' class="img-fluid mx-auto d-block" alt="img1" />
            </div>
            <div class="item">
                <img src='{{asset("assets/img/backgrounds/2.jpg")}}' class="img-fluid mx-auto d-block" alt="img2">
            </div>
            <div class="item">
                <img src='{{asset("assets/img/backgrounds/8.jpg")}}' class="img-fluid mx-auto d-block" alt="img8">
            </div>
            <div class="item">
                <img src='{{asset("assets/img/backgrounds/8.jpg")}}' class="img-fluid mx-auto d-block" alt="img8">
            </div>
        </div>
    </div>

</section> --}}

@endsection
@section('footer_css_js')
<style>
    .see_details {
        position: absolute;
        top: 125px;
        right: 10px;
        border-radius: 12px;
        background: white !important;
        color: #264653;
        font-weight: bold;
        padding: 6px;
        border: 1px solid #e1dede;
        -webkit-box-shadow: 1px 7px 4px 5px rgb(0 0 0 / 24%);
        box-shadow: 1px 1px 14px 1px rgb(0 0 0 / 6%);
    }
</style>
@endsection