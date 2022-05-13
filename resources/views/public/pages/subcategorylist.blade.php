@extends('public.index')
@section('content')

<section id="page-title" class="page-title-parallax " style="padding: 150px 0px; background-image: url({{ 'assets/images/about-us.jpg' }}); background-size: cover; background-position: 0px 180.756px; margin-top: -102px;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">

    <div class="container clearfix" style="">
        <h1 style="text-align:center;padding-top:50px">About Us</h1>
        <span style="text-align:center">Vegan Food Company</span>
    {{--     <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">About Us</li>
        </ol> --}}
    </div>


</section>
 <div class="section border-top-0 m-0">
                    <div class="container text-center">

                        <div class="heading-block center">
                            <span>Company Overview</span>
                            <h2>Vegan food ltd</h2>
                        </div>

                        <p>Millennium Development Goals, The Elders crisis situation cross-cultural time of extraordinary change minority. Long-term progress, humanitarian medicine capacity building free expression innovate. Natural resources criteria respect planned giving small-scale farmers.Millennium Development Goals, The Elders crisis situation cross-cultural time of extraordinary change minority. Long-term progress, humanitarian medicine capacity building free expression innovate. Natural resources criteria respect planned giving small-scale farmers.</p>

                    </div>
                </div>
                <div class="container clearfix bottommargin-lg">

                    <div class="row col-mb-50">
                        <div class="col-md-4">
                            <div class="feature-box media-box">
                                <div class="fbox-media">
                                    <img src=" {{ asset('assets/images/services/1.jpg')}}" alt="Why choose Us?">
                                </div>
                                <div class="fbox-content px-0">
                                    <h3>Why choose Us.<span class="subtitle">Because we are Reliable.</span></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="feature-box media-box flex-column">
                                <div class="fbox-media">
                                    <img src="{{ asset('assets/images/services/2.jpg')}}" alt="Why choose Us?">
                                </div>
                                <div class="fbox-content px-0">
                                    <h3>Our Mission.<span class="subtitle">To Redefine your Brand.</span></h3>
                                    <p>Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae, atque tempora ullam. Vitae delectus quia, consequuntur rerum molestias quo.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="feature-box media-box flex-column">
                                <div class="fbox-media">
                                    <img src="{{ asset('assets/images/services/3.jpg')}}" alt="Why choose Us?">
                                </div>
                                <div class="fbox-content px-0">
                                    <h3>What we Do.<span class="subtitle">Make our Customers Happy.</span></h3>
                                    <p>Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur, labore totam. Accusamus perspiciatis asperiores labore esse ab accusantium ea modi ut.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="container clearfix">

                    <div class="clear"></div>

                    <div class="heading-block center">
                        <h4>Our Clients</h4>
                    </div>

                    <ul class="clients-grid grid-2 grid-sm-3 grid-md-6 mb-0">
                        <li class="grid-item"><a href=""><img src="{{ asset('assets/images/clients/1.png')}}" alt="Clients"></a></li>
                        <li class="grid-item"><a href=""><img src="{{ asset('assets/images/clients/2.png')}}" alt="Clients"></a></li>
                        <li class="grid-item"><a href=""><img src="{{ asset('assets/images/clients/3.png')}}" alt="Clients"></a></li>
                        <li class="grid-item"><a href=""><img src="{{ asset('assets/images/clients/4.png')}}" alt="Clients"></a></li>
                        <li class="grid-item"><a href=""><img src="{{ asset('assets/images/clients/5.png')}}" alt="Clients"></a></li>
                        <li class="grid-item"><a href=""><img src="{{ asset('assets/images/clients/6.png')}}" alt="Clients"></a></li>
                        <li class="grid-item"><a href=""><img src="{{ asset('assets/images/clients/7.png')}}" alt="Clients"></a></li>
                        <li class="grid-item"><a href=""><img src="{{ asset('assets/images/clients/8.png')}}" alt="Clients"></a></li>
                        <li class="grid-item"><a href=""><img src="{{ asset('assets/images/clients/9.png')}}" alt="Clients"></a></li>
                        <li class="grid-item"><a href=""><img src="{{ asset('assets/images/clients/10.png')}}" alt="Clients"></a></li>
                        <li class="grid-item"><a href=""><img src="{{ asset('assets/images/clients/11.png')}}" alt="Clients"></a></li>
                        <li class="grid-item"><a href=""><img src="{{ asset('assets/images/clients/12.png')}}" alt="Clients"></a></li>
                    </ul>

                </div>
@endsection
