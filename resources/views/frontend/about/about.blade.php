<div id="rs-about" class="rs-about style1 pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-last padding-0 md-pl-10 md-pr-15 md-mb-30">
                <div class="img-part">
                    <div class="about-img-wrap">
                        <img src="{{asset($about->image1??null)}}" alt="Image" class="about-img-one">
                        <img src="{{asset($about->image2??null)}}" alt="Image" class="about-img-two d-none d-md-block">
                        {{--                            <img src="{{asset($about->image3??null)}}" alt="Image" class="about-img-three">--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pr-70 md-pr-15">
                <div class="sec-title">
                    <div class="sub-title orange">About Us</div>
                    <h2 class="title mb-17">{{$about->title??null}}</h2>
                    {!! $about->details1??null !!}
                </div>
            </div>
        </div>
    </div>
</div>
