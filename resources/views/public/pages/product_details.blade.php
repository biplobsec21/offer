@extends('public.index')
@section('content')

    <section id="page-title" class="page-title-parallax " style="padding: 150px 0px; background-image: url({{ asset('assets/images/about-us.jpg') }}); background-size: cover; background-position: 0px 180.756px; margin-top: -102px;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">

        <div class="container clearfix" style="">
            <h1 style="text-align:center;padding-top:50px">
                {{ $productDetails->sub_title_english_name }}
            </h1>
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
                <div class="product">
                    <div class="row gutter-40">

                        <div class="col-md-6">

                          <div class="grid-inner">
								<div class="entry-image">
                                    <a href="{{ asset('images/'.$productDetails->main_image)}}" data-lightbox="image">
                                    <img class="mx-auto" style="width:300px;" src="{{ asset('images/'.$productDetails->main_image)}}" alt="Standard Post with Image">
                                    </a>
								</div>
							</div>
                        </div>

                        <div class="col-md-6 product-desc">

                            <div class="d-flex align-items-center justify-content-left">

                                <!-- Product Single - Price
                                ============================================= -->
                              <span class="btn  btn-rounded btn-danger m-2">
                                    {{ $productDetails->title_english_name}}
                              </span>
                                <span class="btn  btn-rounded btn-danger m-2">
                                    {{ $productDetails->sku}}
                              </span>
                                <span class="btn  btn-rounded btn-danger m-2">
                                    {{ $cat->english_name}}
                              </span>
                              
                              
                            </div>

                            <div class="line"></div>


                            <!-- Product Single - Short Description
                            ============================================= -->
                            <h1 style="text-align:left;">
                                {{ $productDetails->sub_title_english_name}}
                            </h1>
                            <p>
                                {!! $productDetails->description!!}
                            </p>
                         

                            <!-- Product Single - Meta
                            ============================================= -->
                            <div class="card product-meta">
                                <div class="card-body">
                                    <span itemprop="productID" class="sku_wrapper">SKU: <span class="sku">{{ $productDetails->sku}}</span></span>
                                    <span class="posted_in"> Name: <a href="#" rel="tag">{{ $cat->english_name}}</a>.</span>
                                    <span class="tagged_as">Category: <a href="#" rel="tag">{{ $productDetails->title_english_name}}</a> </span>
                                </div>
                            </div><!-- Product Single - Meta End -->

                            <!-- Product Single - Share
                            ============================================= -->
                            {{-- <div class="si-share border-0 d-flex justify-content-between align-items-center mt-4">
                                <span>Share:</span>
                                <div>
                                    <a href="#" class="social-icon si-borderless si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-pinterest">
                                        <i class="icon-pinterest"></i>
                                        <i class="icon-pinterest"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-gplus">
                                        <i class="icon-gplus"></i>
                                        <i class="icon-gplus"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-rss">
                                        <i class="icon-rss"></i>
                                        <i class="icon-rss"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-email3">
                                        <i class="icon-email3"></i>
                                        <i class="icon-email3"></i>
                                    </a>
                                </div>
                            </div><!-- Product Single - Share End --> --}}

                        </div>

                        <div class="w-100"></div>

                   

                    </div>
                </div>
            </div>

            {{-- <div class="line"></div>

            <div class="w-100">

                <h4>Related Products</h4>

                <div class="owl-carousel product-carousel carousel-widget owl-loaded owl-drag" data-margin="30" data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-md="2" data-items-lg="3" data-items-xl="4">


                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-286px, 0px, 0px); transition: all 0.25s ease 0s; width: 1433px;"><div class="owl-item" style="width: 256.5px; margin-right: 30px;"><div class="oc-item">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img src="images/shop/dress/1.jpg" alt="Checked Short Dress"></a>
                                <a href="#"><img src="images/shop/dress/1-1.jpg" alt="Checked Short Dress"></a>
                                <div class="badge bg-success p-2">50% Off*</div>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content align-items-end justify-content-between not-animated" data-hover-animate="fadeIn" data-hover-speed="400" style="animation-duration: 400ms;">
                                        <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
                                        <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg bg-transparent"></div>
                                </div>
                            </div>
                            <div class="product-desc center">
                                <div class="product-title"><h3><a href="#">Checked Short Dress</a></h3></div>
                                <div class="product-price"><del>$24.99</del> <ins>$12.49</ins></div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-half-full"></i>
                                </div>
                            </div>
                        </div>
                    </div></div><div class="owl-item active" style="width: 256.5px; margin-right: 30px;"><div class="oc-item">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img src="images/shop/pants/1-1.jpg" alt="Slim Fit Chinos"></a>
                                <a href="#"><img src="images/shop/pants/1.jpg" alt="Slim Fit Chinos"></a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content align-items-end justify-content-between not-animated" data-hover-animate="fadeIn" data-hover-speed="400" style="animation-duration: 400ms;">
                                        <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
                                        <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg bg-transparent"></div>
                                </div>
                            </div>
                            <div class="product-desc center">
                                <div class="product-title"><h3><a href="#">Slim Fit Chinos</a></h3></div>
                                <div class="product-price">$39.99</div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-half-full"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                        </div>
                    </div></div><div class="owl-item active" style="width: 256.5px; margin-right: 30px;"><div class="oc-item">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img src="images/shop/shoes/1-1.jpg" alt="Dark Brown Boots"></a>
                                <a href="#"><img src="images/shop/shoes/1.jpg" alt="Dark Brown Boots"></a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content align-items-end justify-content-between not-animated" data-hover-animate="fadeIn" data-hover-speed="400" style="animation-duration: 400ms;">
                                        <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
                                        <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg bg-transparent"></div>
                                </div>
                            </div>
                            <div class="product-desc center">
                                <div class="product-title"><h3><a href="#">Dark Brown Boots</a></h3></div>
                                <div class="product-price">$49</div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-empty"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                        </div>
                    </div></div><div class="owl-item active" style="width: 256.5px; margin-right: 30px;"><div class="oc-item">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img src="images/shop/dress/2.jpg" alt="Light Blue Denim Dress"></a>
                                <a href="#"><img src="images/shop/dress/2-2.jpg" alt="Light Blue Denim Dress"></a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content align-items-end justify-content-between not-animated" data-hover-animate="fadeIn" data-hover-speed="400" style="animation-duration: 400ms;">
                                        <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
                                        <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg bg-transparent"></div>
                                </div>
                            </div>
                            <div class="product-desc center">
                                <div class="product-title"><h3><a href="#">Light Blue Denim Dress</a></h3></div>
                                <div class="product-price">$19.95</div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                        </div>
                    </div></div><div class="owl-item active" style="width: 256.5px; margin-right: 30px;"><div class="oc-item">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img src="images/shop/sunglasses/1.jpg" alt="Unisex Sunglasses"></a>
                                <a href="#"><img src="images/shop/sunglasses/1-1.jpg" alt="Unisex Sunglasses"></a>
                                <div class="badge bg-success p-2">Sale!</div>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content align-items-end justify-content-between not-animated" data-hover-animate="fadeIn" data-hover-speed="400" style="animation-duration: 400ms;">
                                        <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
                                        <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg bg-transparent"></div>
                                </div>
                            </div>
                            <div class="product-desc center">
                                <div class="product-title"><h3><a href="#">Unisex Sunglasses</a></h3></div>
                                <div class="product-price"><del>$19.99</del> <ins>$11.99</ins></div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-empty"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                        </div>
                    </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="icon-angle-left"></i></button><button type="button" role="presentation" class="owl-next disabled"><i class="icon-angle-right"></i></button></div><div class="owl-dots disabled"></div></div>

            </div> --}}

        </div>
    </div>
</section>


@endsection
