@extends('public.index')
@section('content')

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div>
</div>
<div class="container pt-30">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('toppage')}}">
                      <span class="bang"> মূল পাতা</span>
                        <span class="eng"> Home</span>
                    </a></li>
                    <li class="breadcrumb-item"><a href="{{ route('allnews')}}">
                    <span class="bang">সাম্প্রতিক বার্তা</span>
                    <span class="eng">Recent news</span>
                    </a></li>
                    <li class="breadcrumb-item active">{{ $newsdetails->title }}</a></li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        
        <div class="col ">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        

                      <img class="card-img-top" src="{{ asset('/images/'.$newsdetails->image)}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><a href="product.html" title="View Product">{{ $newsdetails->title }}</a></h4>
                            <p class="card-text">{!! $newsdetails->text !!}</p>
                        </div>
                        
                    </div>

                </div>
            
           
               
              
              
            </div>
        </div>
        <div class="col-12 col-sm-3">
            <div class="card  mb-3">
                <div class="card-header  text-white text-uppercase" style="background:#255946!important;"><i class="fa fa-list"></i> পণ্যতালিকা</div>
                <ul class="list-group category_block">
                    @php
                        $category = \App\Model\Category::where('status',1)->get();
                    @endphp
                    @if ($category)
                    @foreach ($category as $val)
                        <li class="list-group-item"><a href="{{ route('allproducts')}}">{{ $val->bangla_name }}</a>
                                @php
                                    $sub=getSubCategory($val->id);
                                @endphp
                                <ul>
                                    
                                @if ($sub)
                                    @foreach ($sub as $vasl)
                                        
                                           <li class="list-item"> <a href="#" class="bn">{{ $vasl->bangla_name }}({{ totalProduct($vasl->id)}})</a></li>
                                    @endforeach
                                    
                                @endif
                                </ul>
                        </li>
                    @endforeach
                    
                @endif
                  
                   
                </ul>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase">Latest product</div>
                   @php
                        $product = \App\Model\Product::where('status',1)->get();
                    @endphp
                @if ($product)
                    @foreach ($product as $value)
                        <div class="card-body text-center">
                        <a href="{{ route('productdetails',['name'=>$value->title_bangla_name,'id'=>$value->id])}}">
                            <img src="{{ asset('/thumbnails/'.$value->thumb_image)}}" height="100" />
                            <h5 class="card-title">{{ $value->title_bangla_name}}</h5>
                            </a>
                        </div>
                    @endforeach
                @endif
                
            </div>
        </div>

    </div>
</div>


@endsection
