<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    @php $logo = \App\Models\Logo::latest()->first() @endphp
    <title>{{$logo->site_name}}</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    @include('frontend.includes.style')
</head>
<body class="defult-home">

<!--Preloader area start here-->
<div id="loader" class="loader orange-color">
    <div class="loader-container">
        <div class='loader-icon'>
{{--            <img src="{{asset('/')}}frontend/assets/images/pre-logo1.png" alt="">--}}
        </div>
    </div>
</div>
<!--Preloader area End here-->

<!-- Main content Start -->
<div class="main-content">
    <!--Full width header Start-->
    @include('frontend.includes.header')
    <!--Full width header End-->
    @yield('content')

</div>
<!-- Main content End -->

<!-- Footer Start -->
@include('frontend.includes.footer')
<!-- Footer End -->

<!-- start scrollUp  -->
<div id="scrollUp" class="orange-color">
    <i class="fa fa-angle-up"></i>
</div>
<!-- End scrollUp  -->

<!-- Search Modal Start -->
<div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="flaticon-cross"></span>
    </button>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="search-block clearfix">
                <form>
                    <div class="form-group">
                        <input class="form-control" placeholder="Search Here..." type="text">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Search Modal End -->

@include('frontend.includes.script')
@include('sweetalert::alert')
</body>

</html>
