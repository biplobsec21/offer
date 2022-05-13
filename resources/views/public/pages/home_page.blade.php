@extends('public.index')
@section('content')
@if($device == 'mobile')
<section id="slider" class="slider-element revslider-wrap include-header h-auto">
    <div class="slider-inner">
        <!--
        #################################
            - THEMEPUNCH BANNER -
        #################################
        -->
        <div id="rev_slider_679_1_wrapper" class="rev_slider_wrapper fullwidth-container"  style="padding:0px;">
            <!-- START REVOLUTION SLIDER 5.1.4 fullwidth mode -->
            <div id="rev_slider_679_1" class="rev_slider fullwidthbanner" style="display:none;" data-version="5.1.4">
                <ul>   
                    @if($banner)
                    @foreach($banner as $val)
                    
                    <!-- SLIDE  -->
                        <li data-transition="slideup" data-slotamount="1" data-masterspeed="800"  data-delay="6000"  data-saveperformance="off"  data-title="Unlimited Possibilities" data-hideslideonmobile="off" >
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('images/layers.jpg')}}"  alt="kenburns6" data-bgposition="center right" data-bgpositionend="center " data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                            
                            <div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text p-0 border-0"
                            data-x="center" data-hoffset="0"
                            data-y="top" data-voffset="150"
                            data-fontsize="['60','50','40','34']"
                            data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                            data-speed="800"
                            data-start="1200"
                            data-easing="easeOutQuad"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.1"
                            data-endspeed="1000"
                            data-endeasing="Power4.easeIn" style="z-index: 3; color: rgb(237 28 36); white-space: nowrap;">
                                {{ $val->name}}
                            </div>
                            <div class="tp-caption customin ltl tp-resizeme revo-slider-desc-text"
                            data-x="center" data-hoffset="0"
                            data-y="top" data-voffset="240"
                            data-width="['650','650','480','360']"
                            data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                            data-speed="800"
                            data-start="1400"
                            data-easing="easeOutQuad"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.1"
                            data-fontsize="['22','22','22','22']"
                            data-textAlign="left"
                            data-endspeed="1000"
                            data-endeasing="Power4.easeIn" style="z-index: 3; color: #333; max-width: 650px; white-space: normal;">
                            {{ $val->description}}
                                                       
                            </div>
                            <br>
                             
                            @if (isset($val->category))
                                @php
                                            if(isset($val->category)){
                                                $arr = json_decode($val->category);
                                            }else{
                                                $arr=array();
                                            }
                                    $x=0;
                                @endphp
                               
                                    <div class="tp-caption  ltl  img-circle"
                                        data-x="center" data-hoffset="{{$x}}"
                                    data-y="top" data-voffset="380"
                                    data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                                    data-speed="800"
                                    data-start="1550"
                                    data-easing="easeOutQuad"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-elementdelay="0.01"
                                    data-endelementdelay="0.1"
                                    data-endspeed="1000"
                                    data-endeasing="Power4.easeIn" style="z-index: 3;">
                                     @foreach ($arr as $nv)
                                    @php
                                    
                                        $cats=getCategory($nv);
                                        $parent_cat=getCategory($cats->parent_id);
                                    @endphp
                                        <a href="{{ route('subcategorylist',['cat_name'=>$parent_cat->english_name,'sub_cat_name'=>$cats->english_name,'id'=>$cats->id])}}" class="img-circle" style="border-color: #a6ce38;">
                                        
                                        <img src="{{ asset('thumbnails/'.$cats->circle_image)}}" class="img-responsive img-circle" alt="{{ $cats->english_name}} " >
                                    </a>
                                    @php
                                        $x=$x+82;
                                    @endphp
                                @endforeach
                                    </div>
                                    
                                
                            @endif
                            
                                      <div class="tp-caption customin ltl tp-resizeme"
                            data-x="center" data-hoffset="0"
                            data-y="top" data-voffset="480"
                            data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                            data-speed="800"
                            data-start="1650"
                            data-easing="easeOutQuad"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.1"
                            data-endspeed="1000"
                            data-endeasing="Power4.easeIn" style="z-index: 3;">
                            
                            <a href="{{ route('productList',$val->main_category)}}" class="button button-border button-large button-rounded text-end m-0 text-white " style="background-color: #ed1c24;border-color: #a6ce38;text-align:center">View Products
                                </a></div>
                             
                        </li>
                    @endforeach
                    @endif
                   
                </ul>
            </div>
        </div><!-- END REVOLUTION SLIDER -->
    </div>
</section>
@else 
    <section id="slider" class="slider-element revslider-wrap include-header h-auto">
    <div class="slider-inner">
        <!--
        #################################
            - THEMEPUNCH BANNER -
        #################################
        -->
        <div id="rev_slider_679_1_wrapper" class="rev_slider_wrapper fullwidth-container"  style="padding:0px;">
            <!-- START REVOLUTION SLIDER 5.1.4 fullwidth mode -->
            <div id="rev_slider_679_1" class="rev_slider fullwidthbanner" style="display:none;" data-version="5.1.4">
                <ul>   
                    @if($banner)
                    @foreach($banner as $val)
                    
                    <!-- SLIDE  -->
                        <li data-transition="slideup" data-slotamount="1" data-masterspeed="800"  data-delay="6000"  data-saveperformance="off"  data-title="Unlimited Possibilities" data-hideslideonmobile="off" >
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('images/'.$val->image)}}"  alt="kenburns6" data-bgposition="center right" data-bgpositionend="center " data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <!-- LAYER NR. 2 -->
                            <!-- <div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text text-uppercase"
                            data-x="middle" data-hoffset="0"
                            data-y="top" data-voffset="215"
                            data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                            data-speed="800"
                            data-start="1000"
                            data-easing="easeOutQuad"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.1"
                            data-endspeed="1000"
                            data-endeasing="Power4.easeIn" style="z-index: 3; color: #333; white-space: nowrap;">
                                Why Choose Canvas?
                            </div> -->
                            <div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text p-0 border-0"
                            data-x="left" data-hoffset="0"
                            data-y="top" data-voffset="150"
                            data-fontsize="['60','50','40','34']"
                            data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                            data-speed="800"
                            data-start="1200"
                            data-easing="easeOutQuad"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.1"
                            data-endspeed="1000"
                            data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap;color: rgb(237 28 36);">
                                {{ $val->name}}
                            </div>
                            <div class="tp-caption customin ltl tp-resizeme revo-slider-desc-text"
                            data-x="left" data-hoffset="0"
                            data-y="top" data-voffset="240"
                            data-width="['650','650','480','360']"
                            data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                            data-speed="800"
                            data-start="1400"
                            data-easing="easeOutQuad"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.1"
                            data-textAlign="left"
                            data-endspeed="1000"
                            data-endeasing="Power4.easeIn" style="z-index: 3; color: #333; max-width: 650px; white-space: normal;">
                            {{ $val->description}}
                            </div>
                            <br>
                            @if (isset($val->category))
                                @php
                                            if(isset($val->category)){
                                                $arr = json_decode($val->category);
                                            }else{
                                                $arr=array();
                                            }
                                    $x=0;
                                @endphp
                                @foreach ($arr as $nv)
                                    @php
                                    
                                        $cats=getCategory($nv);
                                        $parent_cat=getCategory($cats->parent_id);
                                    @endphp
                                    <div class="tp-caption  ltl  img-circle"
                                        data-x="left" data-hoffset="{{$x}}"
                                    data-y="top" data-voffset="380"
                                    data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                                    data-speed="800"
                                    data-start="1550"
                                    data-easing="easeOutQuad"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-elementdelay="0.01"
                                    data-endelementdelay="0.1"
                                    data-endspeed="1000"
                                    data-endeasing="Power4.easeIn" style="z-index: 3;">
                                    
                                        <a href="{{ route('subcategorylist',['cat_name'=>$parent_cat->english_name,'sub_cat_name'=>$cats->english_name,'id'=>$cats->id])}}" class="img-circle" style="border-color: #a6ce38;">
                                        
                                        <img src="{{ asset('thumbnails/'.$cats->circle_image)}}" class="img-circle" alt="Avatar" {{ $cats->english_name}} >
                                    </a>
                                    
                                    </div>
                                    @php
                                        $x=$x+82;
                                    @endphp
                                @endforeach
                                
                            @endif
                            

                                <div class="tp-caption customin ltl tp-resizeme"
                            data-x="left" data-hoffset="0"
                            data-y="top" data-voffset="480"
                            data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                            data-speed="800"
                            data-start="1650"
                            data-easing="easeOutQuad"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.1"
                            data-endspeed="1000"
                            data-endeasing="Power4.easeIn" style="z-index: 3;">
                            
                            <a href="{{ route('productList',$val->main_category)}}" class="button button-border button-large button-rounded text-end m-0 text-white " style="background-color: #ed1c24;border-color: #a6ce38;">Browse
                                <i class="icon-angle-right"></i></a></div>
                        </li>
                    @endforeach
                    @endif
                   
                </ul>
            </div>
        </div><!-- END REVOLUTION SLIDER -->
    </div>
</section>
@endif


        <!-- Content
        ============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="promo promo-full promo-border p-5 header-stick bottommargin-lg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg">
                        <h3 class="text-center"></h3>
                        <div class="heading-block center">
                            <span>Welcome to</span>
                            <h2>Vegan Food & Beverage Ltd</h2>
                        </div>
<span>
    {!! $about->text !!}
</span>
                    </div>
                
                </div>
            </div>
        </div>

    </div>
</section><!-- #content end -->
@endsection
@section('footer_css_js')
<script src="{{ asset('assets/js/functions.js')}}"></script>
<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
    <script src="{{ asset('assets/include/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{ asset('assets/include/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{ asset('assets/include/rs-plugin/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script src="{{ asset('assets/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{ asset('assets/include/rs-plugin/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{ asset('assets/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{ asset('assets/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{ asset('assets/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{ asset('assets/include/rs-plugin/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{ asset('assets/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js')}}"></script>


  @if($device == 'mobile')
    <script>
        var tpj=jQuery;
        var revapi31;
        var $ = jQuery.noConflict();
        tpj(document).ready(function() {
            if(tpj("#rev_slider_679_1").revolution == undefined){
                revslider_showDoubleJqueryError("#rev_slider_679_1");
            }else{
                revapi31 = tpj("#rev_slider_679_1").show().revolution({
                    sliderType:"standard",
                    jsFileLocation:"include/rs-plugin/js/",
                    sliderLayout:"fullscreen",
                    // sliderLayout:"auto",
                    // dottedOverlay:"none",
                    delay:16000,
                    hideThumbs:200,
                    // thumbWidth:100,
                    // thumbHeight:50,
                    // thumbAmount:5,
                    navigation: {
                        keyboardNavigation: "on",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                      bullets: {
                        enable:true,
                        hide_onmobile:false,
                        style:"hephaistos",
                        hide_onleave:false,
                        direction:"horizontal",
                        h_align:"center",
                        v_align:"bottom",
                        h_offset:0,
                        v_offset:100,
                        space:10,
                        tmp:''
                        },
                    arrows: {
                            style:"uranus",
                            enable:false,
                            hide_onmobile:false,
                            hide_onleave:false,
                            tmp:'',
                            left: {
                                h_align:"left",
                                v_align:"center",
                                h_offset:20,
                                v_offset:0
                            },
                            right: {
                                h_align:"right",
                                v_align:"center",
                                h_offset:20,
                                v_offset:0
                            }
                        }
                    },
                    // responsiveLevels:[1140,1024,778,480],
                    // visibilityLevels:[1140,1024,778,480],
                    // gridwidth:[1140,1024,778,480],
                    // gridheight:[700,768,778,778],
                    visibilityLevels:[1240,1024,778,480],
                    gridwidth:1000,
                    gridheight:800,
                    lazyType:"none",
                    shadow:0,
                    spinner:"off",
                    stopLoop:"off",
                    stopAfterLoops:-1,
                    stopAtSlide:-1,
                    shuffle:"off",
                    autoHeight:"off",
                    fullScreenAutoWidth:"off",
                    fullScreenAlignForce:"off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "0px",
                    hideThumbsOnMobile:"off",
                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    debugMode:false,
                    fallbacks: {
                        simplifyAll:"off",
                        nextSlideOnWindowFocus:"off",
                        disableFocusListener:false,
                    }
                });
            }
            revapi31.on("revolution.slide.onloaded",function (e) {
                setTimeout( function(){ SEMICOLON.slider.sliderDimensions(); }, 200 );
            });
            revapi31.on("revolution.slide.onchange",function (e,data) {
                SEMICOLON.slider.revolutionSliderMenu();
            });
        }); /*ready*/
    </script>
    <style>
    .hephaistos{
        top:100% !important;
    }
    </style>
    @else 
        <script>

    var tpj=jQuery;
        var revapi31;
        var $ = jQuery.noConflict();
        tpj(document).ready(function() {
            if(tpj("#rev_slider_679_1").revolution == undefined){
                revslider_showDoubleJqueryError("#rev_slider_679_1");
            }else{
                revapi31 = tpj("#rev_slider_679_1").show().revolution({
                    sliderType:"standard",
                    jsFileLocation:"include/rs-plugin/js/",
                    sliderLayout:"fullscreen",
                    // sliderLayout:"auto",
                    // dottedOverlay:"none",
                    delay:16000,
                    hideThumbs:200,
                    // thumbWidth:100,
                    // thumbHeight:50,
                    // thumbAmount:5,
                    navigation: {
                        keyboardNavigation: "on",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                      bullets: {
                        enable:true,
                        hide_onmobile:false,
                        style:"hephaistos",
                        hide_onleave:false,
                        direction:"horizontal",
                        h_align:"center",
                        v_align:"bottom",
                        h_offset:0,
                        v_offset:100,
                        space:10,
                        tmp:''
                        },
                    arrows: {
                            style:"uranus",
                            enable:true,
                            hide_onmobile:false,
                            hide_onleave:false,
                            tmp:'',
                            left: {
                                h_align:"left",
                                v_align:"center",
                                h_offset:20,
                                v_offset:0
                            },
                            right: {
                                h_align:"right",
                                v_align:"center",
                                h_offset:20,
                                v_offset:0
                            }
                        }
                    },
                    responsiveLevels:[1140,1024,778,480],
                    // visibilityLevels:[1140,1024,778,480],
                    // gridwidth:[1140,1024,778,480],
                    // gridheight:[700,768,778,778],
                    // visibilityLevels:[1240,1024,778,480],
                    // gridwidth:1000,
                    gridheight:800,
                    lazyType:"none",
                    shadow:0,
                    spinner:"off",
                    stopLoop:"off",
                    stopAfterLoops:-1,
                    stopAtSlide:-1,
                    shuffle:"off",
                    autoHeight:"off",
                    fullScreenAutoWidth:"off",
                    fullScreenAlignForce:"off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "0px",
                    hideThumbsOnMobile:"off",
                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    debugMode:false,
                    fallbacks: {
                        simplifyAll:"off",
                        nextSlideOnWindowFocus:"off",
                        disableFocusListener:false,
                    }
                });
            }
            revapi31.on("revolution.slide.onloaded",function (e) {
                setTimeout( function(){ SEMICOLON.slider.sliderDimensions(); }, 200 );
            });
            revapi31.on("revolution.slide.onchange",function (e,data) {
                SEMICOLON.slider.revolutionSliderMenu();
            });
        }); /*ready*/
            </script>

@endif
<style>
.hephaistos .tp-bullet:hover, .hephaistos .tp-bullet.selected{
    background: #ed1c24;
    border-color: #ed1c24;
}
.hephaistos .tp-bullet{
    width:12px;
    height:12px;
    position:absolute;
    background: #99999961;
    border:3px solid #f5f5f5;
    border-radius:50%;
    cursor: pointer;
    box-sizing:content-box;
    box-shadow: 0px 0px 2px 1px rgba(130,130,130, 0.3);
}
</style>
@endsection