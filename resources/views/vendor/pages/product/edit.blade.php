@extends('admin/index')
@section('title','Edit Product ')
@section('pageName','Edit Product')
@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">Edit Product Input</h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{route('product.list')}}" class="text-right"><i class="fa fas fa-list"></i>
                                list</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form role="form" method="post" action="{{route('product.edit.submit')}}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $data->id}}" id="product_id" />
                        <input type="hidden" value="{{ $data->category_id}}" id="cat_data" />

                        <div class="row">
                            <div class="col-sm">
                                <div class="card card-primary">

                                    <!-- form start -->
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Category Name</label>
                                            <select class="form-control category" name="category_id"
                                                required="required">
                                                <option value="">Seelct Category</option>
                                                @if ($cat)
                                                @foreach ($cat as $val )
                                                <option value="{{ $val->id}}" {{$data->category_id == $val->id ?
                                                    'selected' : ''}}>{{$val->english_name}}</option>
                                                @endforeach
                                                @endif
                                            </select>

                                        </div>
                                        <div class="form-group" id="sub_cat" style="display:none">
                                            <label for="exampleInputEmail1">Sub Category Name</label>
                                            <select class="form-control" name="sub_category_name"
                                                id="sub_category_name">
                                                <option value="">--select--</option>
                                            </select>

                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Brand Name </label>
                                            <select class="form-control" name="brand" required>
                                                <option value="">--select--</option>
                                                @if ($brand)
                                                @foreach ($brand as $val)
                                                <option value="{{$val->id}}" {{$data->brand == $val->id ? 'selected' :
                                                    ''}}>{{$val->name}}</option>
                                                @endforeach

                                                @endif
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Offer </label>
                                            <select class="form-control select2" name="offer">
                                                @if ($offer)
                                                @foreach ($offer as $val)
                                                <option value="{{$val->id}}" {{$data->offer == $val->id ? 'selected' :
                                                    ''}}>{{$val->title}}</option>
                                                @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="form-group ">
                                            <label for="exampleInputEmail1">Product Title </label>
                                            <input type="text" class="form-control" name="title_english_name" required
                                                placeholder="please enter.." value="{{$data->title_english_name}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Product Sub Title </label>
                                            <input type="text" class="form-control" name="sub_title_english_name"
                                                placeholder="please enter.." value="{{$data->sub_title_english_name}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Price (TK)</label>
                                            <input type="number" class="form-control" name="price"
                                                placeholder="please enter.." required value="{{$data->price}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Main Product Image </label>
                                            <input id="jpg_name" class="form-control " required="required"
                                                name="jpg_name" required type="file" value="">
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Description </label>
                                            <textarea name="description"
                                                class="summernote">{{$data->description}}</textarea>
                                        </div>
                                        @if($data->main_image !== '')
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <br>
                                            <img src="{{ asset('/images/'.$data->main_image) }}" style="height:300px" />
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Status</label><br>
                                            <input type="checkbox" {{( $data->status =="ACTIVE")? 'checked' :''}}
                                            name="status" class="form-control" data-toggle="toggle" data-on="Active"
                                            data-off="Inactive">

                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
    <!-- /.row -->

</div><!-- /.container-fluid -->
@endsection
@section('footer_css_js')
<script>
    $(document).ready(function() {
  $('.summernote').summernote();

  var cat_id = $(this).find('option:selected').val();
  var productId = $("#product_id").val();
    

    
  $.ajax
      ({
        type: "POST",
        url: '{{ route('getCategory')}}',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: { 'cat_id': cat_id , "_token": "{{ csrf_token() }}"},
        cache: false,
        success: function (data) {
            if(data.length > 0){
                $("#sub_cat").show();
            }else{
                $("#sub_cat").hide();

            }
            $('#sub_category_name').html('');
            $.each(data, function (i, item) {
            // console.log(item.upazila_name);
            $('#sub_category_name').append($('<option>', { value: item.id, text: item.english_name }));
          });

        },
        dataType: "json"
      });
});
$(document).on('change', '.category', function() {
    // console.log($("#course option:selected").value());

    var cat_id = $(this).find('option:selected').val();
    

    $.ajax
      ({
        type: "POST",
        url: '{{ route('getCategory')}}',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: { 'cat_id': cat_id , "_token": "{{ csrf_token() }}"},
        cache: false,
        success: function (data) {
            if(data.length > 0){
                $("#sub_cat").show();
            }else{
                $("#sub_cat").hide();

            }
            $('#sub_category_name').html('');
            $.each(data, function (i, item) {
            // console.log(item.upazila_name);
            $('#sub_category_name').append($('<option>', { value: item.id, text: item.english_name }));
          });

        },
        dataType: "json"
      });
  });
  
</script>

@endsection