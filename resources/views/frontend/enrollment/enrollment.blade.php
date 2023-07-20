@extends('frontend.master')
@section('title')
   Enrollment
@endsection
@section('content')
<!-- Main content Start -->
<div class="main-content">
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">

            <img src="{{asset($service->banner_image)}}" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">Course Enrollment</h1>
            <ul>
                <li>
                    <a class="active" href="{{route('front.page')}}">Home</a>
                </li>
                <li>Course Enrollment</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Shop Single Start -->
    <div id="rs-single-shop" class="rs-single-shop shop-rp orange-color pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 sm-mb-30">
                    <div class="single-product-image">
                        <div class="images-single">
                            <img src="{{asset($service->main_image)}}" alt="Single Product">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="single-price-info pl-30">
                        <h4 class="product-title">{{$service->service_title}}</h4>
                        <span class="single-price">${{$service->price}}</span>
                        <p class="some-text">{!! $service->service_details_small !!}</p>
                        <h4>Payment Numbers</h4>
                        <div class="row mb-4">

                            <div class="col-12 col-md-6 col-lg-4">
                                <div style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; padding: 10px; border-radius: 5px">
                                <h5 class="mb-2">Bkash</h5>
                                <span>{{$numbers->bkash??null}}</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; padding: 10px; border-radius: 5px">
                                <h5 class="mb-2">Nagad</h5>
                                <span>{{$numbers->nagad??null}}</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; padding: 10px; border-radius: 5px">
                                <h5 class="mb-2">Rocket</h5>
                                <span>{{$numbers->rocket??null}}</span>
                                </div>
                            </div>
                        </div>
                        <form action="{{route('enroll')}}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <input type="hidden" name="service_id" value="{{$service->id}}">

                            <div class="my-3">
                                <lable>Payment Type</lable>
                                <br>
                                <select name="payment_type" class="form-control" id="">
                                    <option selected disabled>Select payment type</option>
                                    <option value="bkash">Bkash</option>
                                    <option value="nagad">Nagad</option>
                                    <option value="rocket">Rocket</option>
                                </select>
                            </div>
                            <div class="my-3">
                                <lable>Phone Number</lable>
                                <input type="text" name="number" class="form-control w-100">
                            </div>
                            <div class="my-3">
                                <lable>Transaction ID</lable>
                                <input type="text" name="transaction_id" class="form-control w-100">
                            </div>
                            <button class="btn-shop orange-color my-4" type="submit">Enroll</button>
                        </form>

                    </div>
                </div>
            </div>


        </div>
    </div>


</div>
<!-- Main content End -->
@endsection
