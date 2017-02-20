@extends('layouts.master')

@section('content')
    <div class="preloader"></div>
    <div class="mg-page-title parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>{!! $room->roomType->name !!}</h2>
                    <p>Cogitavisse erant puerilis utrum efficiantur adhuc expeteretur.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="mg-single-room-price">
        <input type="hidden" id="room_id" value="{!! $room->_id !!}">
        <div class="mg-srp-inner">${!! $room->roomType->price !!}<span>/Night</span></div>
    </div>
    <div class="mg-single-room">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="mg-gallery-container">
                        <ul class="mg-gallery" id="mg-gallery">
                            <li><img src="{!! asset('images/gallery-01.png') !!}" alt="Partner Logo"></li>
                            <li><img src="{!! asset('images/gallery-02.png') !!}" alt="Partner Logo"></li>
                            <li><img src="{!! asset('images/gallery-05.png') !!}" alt="Partner Logo"></li>
                            <li><img src="{!! asset('images/gallery-06.png') !!}" alt="Partner Logo"></li>
                            <li><img src="{!! asset('images/gallery-07.png') !!}" alt="Partner Logo"></li>
                            <li><img src="{!! asset('images/gallery-08.png') !!}" alt="Partner Logo"></li>
                        </ul>
                        <ul class="mg-gallery-thumb" id="mg-gallery-thumb">
                            <li><img src="{!! asset('images/gallery-thumb-01.png') !!}" alt="Partner Logo"></li>
                            <li><img src="{!! asset('images/gallery-thumb-02.png') !!}" alt="Partner Logo"></li>
                            <li><img src="{!! asset('images/gallery-thumb-05.png') !!}" alt="Partner Logo"></li>
                            <li><img src="{!! asset('images/gallery-thumb-06.png') !!}" alt="Partner Logo"></li>
                            <li><img src="{!! asset('images/gallery-thumb-07.png') !!}" alt="Partner Logo"></li>
                            <li><img src="{!! asset('images/gallery-thumb-08.png') !!}" alt="Partner Logo"></li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-5 mg-room-fecilities">
                    <h2 class="mg-sec-left-title">Room Fecilities</h2>
                    <div class="row">
                        <div class="col-xs-6">
                            <ul>
                                @if($room->metas->breakfast == 1)
                                <li><i class="glyphicon glyphicon-cutlery"></i> Breakfast</li>
                                @endif
                                @if($room->metas->air_condition == 1)
                                <li><i class="fa fa-sun-o"></i> Air conditioning</li>
                                @endif
                                @if($room->metas->free_parking == 1)
                                <li><i class="fa fa-car"></i> Free Parking</li>
                                @endif
                                @if($room->metas->room_service == 1)
                                <li><i class="fa fa-bed"></i> Room service</li>
                                @endif
                            </ul>
                        </div>
                        <div class="col-xs-6">
                            <ul>
                                @if($room->metas->gym == 1)
                                <li><i class="fa fa-trophy"></i> GYM Facility</li>
                                @endif
                                @if($room->metas->tv == 1)
                                <li><i class="fa fa-tv"></i> TV LCD</li>
                                @endif
                                @if($room->metas->{$wiFi = 'wi-fi'} == 1)
                                <li><i class="fa fa-wifi"></i> Wi-fi service</li>
                                @endif
                                @if($room->metas->elevator == 1)
                                <li><i class="glyphicon glyphicon-arrow-up"></i> Elevator</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="mg-single-room-txt">
                        <h2 class="mg-sec-left-title">Room Description</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fecerint persecuti praeterea
                            mentitum minime mediocriterne intellegerem certa pariendarum frustra, quidque ipsis praeter
                            minima, iuste posse perspici dividendo videtisne, aperiri exercitus. Ille vivamus
                            philosophis approbantibus mundus suum probes vivatur. Existimo augeri omnium ego aiunt
                            remotis, dissentias graecam improbe diceretur, intus vitae saluti plerumque quot postulet
                            partiendo facimus desperantes. Albucius arbitrarer animadversionis flagitem explentur posse
                            consequi iactare legendus cogitemus, maximasque difficiles, utraque grate viris ipsi divelli
                            expedire meliore libenter dolendum, bonae maximis hinc.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impetus simulent rationem duo
                            operam alliciat. Praetor fabulis medeam careret laetetur petulantes, incursione potiora
                            nostram laborat nescius meminerit restincto adamare, misisti interesset inventore
                            complectitur consentaneum, aeterno, inpendente probatum levitatibus honesta, defatigatio
                            praeter ignorant, omnem medicorum, frui timidiores coerceri consilio labore certe. Prima
                            dicemus. Facillimis fatendum magna curis illi referenda late ordinem, adhibenda perfecto
                            cepisse dicturum dici migrare metu dirigentur parvos interpretaris. Putarent eoque morbis
                            abducat summis futuris vult, amatoriis contenta ludicra spe.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mg-single-room-review-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12 clearfix">

                    <div class="mg-sm-full-rating">
                        <h2 class="mg-sec-left-title">Room Reviews</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="mg-reviews">
                        @foreach($room->comments as $comment)
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="img-circle" src="{!! asset('images/review.png') !!}" alt="..."
                                             width="100px" height="100px" style="color: red">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">{!! $comment->first_name . ' ' . $comment->last_name !!}</h4>
                                    <div class="media-date">
                                        {!! $comment->created_at !!}
                                        @if(Auth::check() && Auth::user()->is_admin)
                                            <a class="deleteComment"
                                               data-href="{!! route('comments.destroy', ['id' => $comment->_id]) !!}">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        @endif
                                    </div>
                                    <div>
                                        {!! $comment->comment !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @if(\Illuminate\Support\Facades\Auth::check())
                    <div class="col-md-5">

                    {!! Form::open(['route' => ['comments.store'], "role" => "form", "id" => "comment-form"]) !!}

                    {!! Form::hidden('room_id', $room->id) !!}
                    <!-- Text Form Input -->
                        <div class="form-group has-feedback">
                            {!! Form::textarea('comment', null, ['class' => 'form-control', 'placeholder' => 'Your Comment', 'rows' => '5']) !!}
                            @if ($errors->has('comment'))
                                <div class="alert-danger">
                                    <strong>{{ $errors->first('comment') }}</strong>
                                </div>
                            @endif
                        </div>

                        <!-- Submit Form Button -->
                        {!! Form::submit("Submit Review", ['class' => 'btn btn-dark-main pull-right']) !!}

                        {!! Form::close() !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('extra-js')
    @parent
    <script>
        var room_id = $('#room_id').val();
        (function () {
            $(".deleteComment").click(function () {
                var self = $(this);
                var url = self.data("href");
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method: "DELETE",
                    data: {
                        'room_id': room_id
                    },
                    url: url,
                    success: function (data) {
                        self.parent().parent().parent().fadeOut();
                    },
                    error: function (err) {
                        console.log(err);
                    }
                })
            });
        })();
    </script>
@endsection