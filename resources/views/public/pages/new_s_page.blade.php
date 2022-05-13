@extends('public.index')
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
                     <div class="container clearfix bottommargin-lg">

   <div class="row col-mb-50">
        @if($product)
            @foreach ($product as $value)
            
                <div class="col-md-4 ">
		            <a href="{{ route('detials',['name'=>$value->sub_title_english_name,'id'=>$value->id])}}">
    
		<div class="feature-box media-box" style="border: 1px solid #eaeaea;background:white;padding:5px;">
                        <div class="fbox-media p-4">
                            <img src=" {{ asset('images/'.$value->main_image)}}" alt="Products image" style="height:200px;width:200px;"class="mx-auto">
                        </div>
                        <div class="fbox-content px-0 text-center">
                            <h3>{{$value->sub_title_english_name}}</h3>
                        <p>{{ $value->title_english_name}} &nbsp; {{ $value->sku}}</p>
                        </div>
                    </div>
		</a>	   
	</div>
           
            @endforeach
        @endif
      
    </div>

</div>
                </div>


@endsection
