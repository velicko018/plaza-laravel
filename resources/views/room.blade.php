@extends('layouts.master')

@section('content')
    <div class="preloader"></div>
    <div class="mg-page-title parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Super Deluxe Room</h2>
                    <p>Cogitavisse erant puerilis utrum efficiantur adhuc expeteretur.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="mg-single-room-price">
        <div class="mg-srp-inner">$249<sup>.99</sup><span>/Night</span></div>
    </div>
    <div class="mg-single-room">
        <div class="container">
            <div class="row">
                <div class="col-md-7">

                </div>
                <div class="col-md-5 mg-room-fecilities">
                    <h2 class="mg-sec-left-title">Room Fecilities</h2>
                    <div class="row">
                        <div class="col-xs-6">
                            <ul>
                                <li><i class="glyphicon glyphicon-cutlery"></i> Breakfast</li>
                                <li><i class="fa fa-sun-o"></i> Air conditioning</li>
                                <li><i class="fa fa-car"></i> Free Parking</li>
                                <li><i class="fa fa-bed"></i> Room service</li>
                            </ul>
                        </div>
                        <div class="col-xs-6">
                            <ul>
                                <li><i class="fa fa-trophy"></i> GYM Facility</li>
                                <li><i class="fa fa-tv"></i> TV LCD</li>
                                <li><i class="fa fa-wifi"></i> Wi-fi service</li>
                                <li><i class="glyphicon glyphicon-arrow-up"></i> Elevator</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="mg-single-room-txt">
                        <h2 class="mg-sec-left-title">Room Description</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fecerint persecuti praeterea mentitum minime mediocriterne intellegerem certa pariendarum frustra, quidque ipsis praeter minima, iuste posse perspici dividendo videtisne, aperiri exercitus. Ille vivamus philosophis approbantibus mundus suum probes vivatur. Existimo augeri omnium ego aiunt remotis, dissentias graecam improbe diceretur, intus vitae saluti plerumque quot postulet partiendo facimus desperantes. Albucius arbitrarer animadversionis flagitem explentur posse consequi iactare legendus cogitemus, maximasque difficiles, utraque grate viris ipsi divelli expedire meliore libenter dolendum, bonae maximis hinc.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impetus simulent rationem duo operam alliciat. Praetor fabulis medeam careret laetetur petulantes, incursione potiora nostram laborat nescius meminerit restincto adamare, misisti interesset inventore complectitur consentaneum, aeterno, inpendente probatum levitatibus honesta, defatigatio praeter ignorant, omnem medicorum, frui timidiores coerceri consilio labore certe. Prima dicemus. Facillimis fatendum magna curis illi referenda late ordinem, adhibenda perfecto cepisse dicturum dici migrare metu dirigentur parvos interpretaris. Putarent eoque morbis abducat summis futuris vult, amatoriis contenta ludicra spe.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--<div class="mg-single-room-review-sec">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12 clearfix">--}}

                    {{--<div class="mg-sm-full-rating">--}}
                        {{--<h2 class="mg-sec-left-title">Room Reviews</h2>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-7">--}}
                    {{--<div class="mg-reviews">--}}
                        {{--<div class="media">--}}
                            {{--<div class="media-left">--}}
                                {{--<a href="#">--}}
                                    {{--<img class="media-object" src="images/review.png" alt="...">--}}
                                {{--</a>--}}
                            {{--</div>--}}
                            {{--<div class="media-body">--}}
                                {{--<h4 class="media-heading">Dylan Taylor</h4>--}}
                                {{--<div class="mg-media-user-rating">--}}
                                {{--<span class="mg-rs-icon">--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star-o"></i>--}}
                                {{--</span>--}}
                                {{--</div>--}}
                                {{--<div class="media-date">25 Jan, 2015</div>--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perfunctio dicturum cupiditatibusque refugiendi facillimis genuit fecerit amoris atomos. Praeclarorum, superstitio quem nostra turpius</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="media">--}}
                            {{--<div class="media-left">--}}
                                {{--<a href="#">--}}
                                    {{--<img class="media-object" src="images/review.png" alt="...">--}}
                                {{--</a>--}}
                            {{--</div>--}}
                            {{--<div class="media-body">--}}
                                {{--<h4 class="media-heading">Vincent Watson</h4>--}}
                                {{--<div class="mg-media-user-rating">--}}
                                {{--<span class="mg-rs-icon">--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star-o"></i>--}}
                                {{--</span>--}}
                                {{--</div>--}}
                                {{--<div class="media-date">25 Jan, 2015</div>--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perfunctio dicturum cupiditatibusque refugiendi facillimis genuit fecerit amoris atomos. Praeclarorum, superstitio quem nostra turpius</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-5">--}}
                    {{--<form>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-xs-6 mg-star-rating">--}}
                                {{--<div class="mg-star-rating-title">Position:</div> <div id="mg-star-position" class="starrr"></div>--}}
                                {{--<input type="hidden" id="mg-star-position-input">--}}
                            {{--</div>--}}
                            {{--<div class="col-xs-6 mg-star-rating">--}}
                                {{--<div class="mg-star-rating-title">Comfort:</div> <div id="mg-star-comfort" class="starrr"></div>--}}
                                {{--<input type="hidden" id="mg-star-comfort-input">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-xs-6 mg-star-rating">--}}
                                {{--<div class="mg-star-rating-title">Price:</div> <div id="mg-star-price" class="starrr"></div>--}}
                                {{--<input type="hidden" id="mg-star-price-input">--}}
                            {{--</div>--}}
                            {{--<div class="col-xs-6 mg-star-rating">--}}
                                {{--<div class="mg-star-rating-title">Quality:</div> <div id="mg-star-quality" class="starrr"></div>--}}
                                {{--<input type="hidden" id="mg-star-quality-input">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-6">--}}
                                {{--<input type="text" class="form-control" placeholder="Your Name">--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                                {{--<input type="text" class="form-control" placeholder="Your Email">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<textarea class="form-control" placeholder="Your Comment" rows="5"></textarea>--}}
                        {{--<input type="submit" value="Submit Review" class="btn btn-dark pull-right">--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection