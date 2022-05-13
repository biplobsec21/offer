@php
    $category = \App\Model\Category::where('status',1)->where('parent_id',0)->get();
    $settings = \App\Model\Settings::where('status',1)->first();

@endphp

   <!-- Header
        ============================================= -->
    <header id="header" class="full-header transparent-header" data-sticky-class="not-dark" style="z-index: 20000;">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">
                <!-- Logo
                ============================================= -->
                <div id="logo">
                <a href="{{ route('toppage')}}" class="standard-logo" data-dark-logo="{{ asset('assets/images/logo_small.png')}}"><img src="{{ asset('assets/images/logo_small.png')}}" alt="Vegan Logo"></a>
                
                @if($settings->image)
                <a href="{{ route('toppage')}}" class="retina-logo" data-dark-logo="{{ asset('/images/'.$settings->image) }}" style="height:80px;" ><img src="{{ asset('/images/'.$settings->image) }}" alt="Vegan Logo"></a>
                @else 
                    <a href="{{ route('toppage')}}" class="retina-logo" data-dark-logo="{{ asset('assets/images/logo_small.png')}}" style="height:80px;" ><img src="{{ asset('assets/images/logo_small.png')}}" alt="Vegan Logo"></a>
                @endif

                    <!-- <a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo_2x.png" alt="Canvas Logo"></a> -->
                </div><!-- #logo end -->
                <div class="header-misc">
                    <!-- Top Search
                    ============================================= -->
                    <div id="top-search" class="header-misc-icon">
                        <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
                    </div><!-- #top-search end -->
                    
                    
                </div>
                <div id="primary-menu-trigger">
                    <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                </div>
                <!-- Primary Navigation
                ============================================= -->
                <nav class="primary-menu">
                    <ul class="menu-container">
                        <li class="menu-item">
                            <a class="menu-link" href="{{ route('aboutus') }}"><div class="{{ Request::segment(1) == 'aboutus' ? 'active' : ''}}">About us</div></a>
                        </li>

                        <li class="menu-item mega-menu">
                                    <a class="menu-link" href="#"><div  class="{{ Request::segment(1) == 'products' ? 'active' : ''}}">Our Brands</div></a>
                                    <div class="mega-menu-content mega-menu-style-2">
                                        <div class="container">
                                            <div class="row">
                                                @if($category)
                                                @foreach($category as $val)
                                                    <ul class="sub-menu-container mega-menu-column col sub-menu-custom-style" style="background-image:url({{ asset('images/'.$val->image ?? 'placeholder.png')}});
                                                    ">
                                                    
                                                        <li class="menu-item mega-menu-title">
                                                        <a class="menu-link" href="{{ route('productList',$val->id)}}"><div> {{ $val->english_name}}</div></a>
                                                                @php
                                                                        $sub=getSubCategory($val->id);
                                                                @endphp

                                                            <ul class="sub-menu-container">
                                                                @if($sub)
                                                                @foreach($sub as $v)
                                                                    <li class="menu-item">
                                                                    <a class="menu-link" href="{{ route('subcategorylist',['cat_name'=>$val->english_name,'sub_cat_name'=>$v->english_name,'id'=>$v->id])}}"><div>{{$v->english_name }}</div></a>
                                                                    {{-- <a class="menu-link" href="{{ route('list',$v->id)}}"><div>{{$v->english_name }}</div></a> --}}

                                                                </li>
                                                                @endforeach
                                                                @endif
                                                                
                                                            </ul>
                                                        </li>
                                                    </ul>
                                            
                                                @endforeach
                                                @endif
                                                
                                            
                                            </div>
                                        </div>
                                    </div>
                                </li>
                        <li class="menu-item">
                        <a class="menu-link" href="{{ route('comming_soon')}}"><div class="{{ Request::segment(1) == 'export' ? 'active' : ''}}">Export & International Business</div></a>
                            {{-- <ul class="sub-menu-container">
                                <li class="menu-item">
                                    <a class="menu-link" href="intro.html#section-niche"><div>Niche Demos</div></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="intro.html#section-onepage"><div>One-Page Demos</div></a>
                                </li>
                            </ul> --}}
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="#"><div class="{{ Request::segment(1) == 'media' ? 'active' : ''}}">Media and Campaign</div></a>
                            <ul class="sub-menu-container">
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ route('campaign')}}"><div class="">Gallery</div></a>
                                </li>
                               
                            </ul>
                        </li>
                      
                        
                        <li class="menu-item">
                        <a class="menu-link" href="{{ route('career') }}"><div class="{{ Request::segment(1) == 'career' ? 'active' : ''}}">Career</div></a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="{{ route('contact') }}"><div class="{{ Request::segment(1) == 'contact' ? 'active' : ''}}">Contact</div></a>
                        </li>
                    </ul>
                </nav><!-- #primary-menu end -->
                <form class="top-search-form" action="#" method="get">
                    <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
                </form>
            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
    </header><!-- #header end -->