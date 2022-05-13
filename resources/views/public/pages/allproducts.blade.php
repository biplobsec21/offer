@extends('public.index')
@section('header_css_js')
<style>
  /** page structure **/
#w {
  display: block;
  max-width: 1100px;
  min-width: 280px;
  padding-top: 20px;
  margin: 0 auto;
}


/** filters list **/
#filter-list {
	display: block;
	width: 100%;
	text-align: center;
	margin-bottom: 25px;
}

#filter-list li {
  display: inline-block;
  width: auto;
  padding: 6px 10px;
	margin-right: 15px;
	font-size: 1.2em;
	cursor: pointer;
	text-shadow: 1px 1px 0 #fff;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
#filter-list li:hover {
	background: #e7e2eb;
}
#filter-list li.active {
	font-weight: bold;
	background: #d8c5e7;
}


/** portfolio list **/
#portfolio {
	display: block;
  width: 100%;
  padding: 0 12px;
  margin-bottom: 35px;
	text-align: center;
}

#portfolio .item {
	display: none;
	opacity: 0;
/*	width: 30%;*/
	vertical-align: top;
	margin-bottom: 25px;
	margin-right: 20px;
	color: #fff;
	font-size: 30px;
	text-align: center;
	-moz-box-sizing: border-box;
}
#portfolio .item a {
  display: inline-block;
  max-width: 100%;
  text-decoration: none;
  background: #fff;

}
#portfolio .item img {
  padding: 3px;
  max-width: 100%;
  -webkit-box-shadow: 0 1px 4px rgba(0,0,0,0.55);
  -moz-box-shadow: 0 1px 4px rgba(0,0,0,0.55);
  box-shadow: 0 1px 4px rgba(0,0,0,0.55);
}

  </style>
@endsection
@section('content')

    <section id="page-title" class="page-title-parallax " style="padding: 121px 0px; background-image: url({{ asset('assets/images/about-us.jpg') }}); background-size: cover; background-position: 0px 180.756px; margin-top: -119px;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">

        <div class="container clearfix" style="">
            <h1 style="text-align:center;padding-top:50px">
                {{ $cat->english_name }}
            </h1>
        {{--     <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol> --}}
        </div>


    </section>
 <div class="section border-top-0 m-0">
    <div id="w">

        <ul id="filter-list" class="clearfix">
            <li class="filter" data-filter="all">All</li>
            @if($data)
                @foreach ($data as $val)
                         <li class="filter" data-filter="webdesign-{{ $val->id}}">{{ $val->english_name}}</li>
                @endforeach
            @endif

        </ul>

        <ul id="portfolio">
             @if($data)
                @foreach ($data as $val)
                    <li class="item webdesign-{{$val->id}}">
                        <a href="{{ route('subcategorylist',['cat_name'=>$cat->english_name,'sub_cat_name'=>$val->english_name,'id'=>$val->id])}}">
                            <img src="{{ asset('images/'.$val->image)}}" alt="{{ $val->english_name}}" style="height:250px;">
                        </a>
                    </li>
                @endforeach
            @endif
        </ul>
    </div>
</div>


@endsection
@section('footer_css_js')

    <script src="{{ asset('assets/js/jquery.mixitup.min.js')}}"></script>
    <script type="text/javascript">
        $(function(){
        $('#portfolio').mixitup({
            targetSelector: '.item',
            transitionSpeed: 450
        });
        });
</script>
@endsection
