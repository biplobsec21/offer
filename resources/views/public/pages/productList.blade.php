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
                    <li class="breadcrumb-item"><a href="{{ route('allproducts')}}">
                        <span class="bang">পণ্যতালিকা</span>
                        <span class="eng">Products</span>
                    </a></li>

{{--                   
                <li class="breadcrumb-item active">
                    <span class="bang">{{ $catBcumb->bangla_name}}</span>
                    <span class="eng">{{ $catBcumb->english_name}}</span>
                </li> --}}

                 @if ($cat_id)
                            @php
                                $getCategory=getCategory($cat_id);
                            @endphp
                            @if($getCategory && $getCategory->parent_id !=0)
                                @php
                                    $parentCat = getCategory($getCategory->parent_id);
                                @endphp
                                
                                <li class="breadcrumb-item"><a href="{{ route('subcategorylist',['id'=>$parentCat->id])}}">
                                    <span class="bang">{{ $parentCat->bangla_name }}</span>
                                    <span class="eng">{{ $parentCat->english_name }}</span>
                                </a></li>
                                <li class="breadcrumb-item active" aria-current="page"> 
                                        <span class="bang">{{ $getCategory->bangla_name }}</span>
                                    <span class="eng">{{ $getCategory->english_name }}</span>
                                </li>
                            @else 
                                <li class="breadcrumb-item"><a href="{{ route('subcategorylist',['id'=>$getCategory->id])}}">
                                     <span class="bang">{{ $getCategory->bangla_name }}</span>
                                    <span class="eng">{{ $getCategory->english_name }}</span>
                                </a></li>
                            
                                @endif

                    @endif
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        
        <div class="col ">
            <div class="row">
                
                @if ($product)
                    @foreach ($product as $val)
                         <div class="col-12 col-md-6 col-lg-4">
                            <div class="card">
                            <img class="card-img-top" src="{{ asset('/thumbnails/'.$val->thumb_image)}}" >
                                <div class="card-body">
                                <h4 class="card-title"><a href="" >
                                    <span class="bang">{{$val->title_bangla_name}}</span>
                                    <span class="eng">{{$val->title_english_name}}</span>
                                </a></h4>
                                   
                                    <div class="row">
                                        <div class="col">
                                        <a href="{{ route('productdetails',['name'=>$val->title_bangla_name,'id'=>$val->id])}}" class="btn btn-success btn-block">
                                            <span class="eng">View Details</span>
                                            <span class="bang">বিস্তারিত দেখুন</span>
                                        </a>

                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
               
            
              
            </div>
        </div>
        <div class="col-12 col-sm-3">
            <div class="card  mb-3">
                <div class="card-header  text-white text-uppercase" style="background:#255946!important;"><i class="fa fa-list"></i> 
                    <span class="bang">পণ্যতালিকা</span>
                    <span class="eng">Product list</span>
                </div>
                <ul class="list-group category_block">
                    @php
                        $category = \App\Model\Category::where('status',1)->get();
                    @endphp
                    @if ($category)
                    @foreach ($category as $val)
                        <li class="list-group-item"><a href="{{ route('allproducts')}}">
                            <span class="bang">{{ $val->bangla_name }}</span>
                            <span class="eng">{{ $val->english_name }}</span>
                        </a>
                                @php
                                    $sub=getSubCategory($val->id);
                                @endphp
                                <ul>
                                    
                                @if ($sub)
                                    @foreach ($sub as $vasl)
                                        <li class="list-item"> 
                                            <a href="#" class="bn">
                                                <span class="bang">{{ $vasl->bangla_name }}</span>
                                                <span class="eng">{{ $vasl->english_name }}</span>
                                                ({{ totalProduct($vasl->id)}})
                                            </a>
                                        </li>
                                    @endforeach
                                    
                                @endif
                                </ul>
                        </li>
                    @endforeach
                    
                @endif
                  
                   
                </ul>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase">
                    <span class="eng">Latest product</span>
                    <span class="bang">নতুন পণ্য</span>
                </div>
                 @php
                        $product = \App\Model\Product::where('status',1)->get();
                    @endphp
                @if ($product)
                    @foreach ($product as $value)
                        <div class="card-body text-center">
                        <a href="{{ route('productdetails',['name'=>$value->title_bangla_name,'id'=>$value->id])}}">
                            <img src="{{ asset('/thumbnails/'.$value->thumb_image)}}" height="100" />
                            <h5 class="card-title">
                                <span class="bang">{{ $value->title_bangla_name}}</span>
                                <span class="eng">{{ $value->title_english_name}}</span>
                            </h5>
                            </a>
                        </div>
                    @endforeach
                @endif
                
            </div>
        </div>

    </div>
</div>


@endsection
