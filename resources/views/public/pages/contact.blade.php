@extends('public.index')
@php    
$settings = \App\Model\Settings::where('status',1)->first();
@endphp
@section('content')
  <section id="page-title" class="page-title-parallax " style="padding: 121px 0px; background-image: url({{ asset('assets/images/about-us.jpg') }}); background-size: cover; background-position: 0px 180.756px; margin-top: -119px;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">

    <div class="container clearfix" style="">
        <h1 style="text-align:center;padding-top:50px">Contact Us</h1>
        <span style="text-align:center">Vegan Food & Beverage Ltd</span>
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

					<div class="row align-items-stretch col-mb-50 mb-0">
						<!-- Contact Form
						============================================= -->
						<div class="col-lg-6">

							<div class="fancy-title title-border">
								<h3>Send us an Email</h3>
							</div>

							<div class="">
                                  @if(Session::has('message'))
                                    <p id="flashMessage" class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                                    @endif
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
								<form class="mb-0" action="{{route('messages')}}" method="post" >
                        {{ csrf_field() }}


									<div class="row">
										<div class="col-md-4 form-group">
											<label for="template-contactform-name">Name <small>*</small></label>
											<input type="text"  name="name" value="" class="sm-form-control required">
										</div>

										<div class="col-md-4 form-group">
											<label for="template-contactform-email">Email <small>*</small></label>
											<input type="email" name="email" value="" class="required email sm-form-control">
										</div>

										<div class="col-md-4 form-group">
											<label for="template-contactform-phone">Phone</label>
											<input type="text"name="phone" value="" class="sm-form-control">
										</div>

										<div class="w-100"></div>

										<div class="col-md-8 form-group">
											<label for="template-contactform-subject">Subject <small>*</small></label>
											<input type="text" name="subject" value="" class="required sm-form-control">
										</div>


										<div class="w-100"></div>

										<div class="col-12 form-group">
											<label for="template-contactform-message">Message <small>*</small></label>
											<textarea class="required sm-form-control"  name="message" rows="6" cols="30"></textarea>
										</div>

										

										<div class="col-12 form-group">
											<button  type="submit"  tabindex="5" class="button button-3d m-0">Submit Comment</button>
										</div>
									</div>


								</form>
							</div>

						</div><!-- Contact Form End -->

						<!-- Google Map
						============================================= -->
						<div class="col-lg-6 min-vh-50">
							 <iframe title="template google map" 
                    src="{{ $settings->google_map}}"
                class="min-vh-50" allowfullscreen></iframe>  
						</div><!-- Google Map End -->
					</div>

					<!-- Contact Info
					============================================= -->
					<div class="row col-mb-50">
						<div class="col-sm-6 col-lg-3">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-map-marker2"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Our Headquarters<span class="subtitle">{!! $settings->address !!}</span></h3>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-lg-3">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-phone3"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Speak to Us<span class="subtitle">{!! $settings->hot_line !!}</span></h3>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-lg-3">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-skype2"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Make a Video Call<span class="subtitle">Skypename</span></h3>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-lg-3">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-twitter2"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Follow on Facbook<span class="subtitle">2.3M Followers</span></h3>
								</div>
							</div>
						</div>
					</div><!-- Contact Info End -->

				</div>
			</div>
		</section>

    @endsection