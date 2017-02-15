@extends('layouts.master')

@section('content')
    <div class="mg-page-title parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Gallery - 4 Columns</h2>
                    <p>Cogitavisse erant puerilis utrum efficiantur adhuc expeteretur.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mg-gallery-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mg-filter">
                        <form id="mg-filter">
                            <fieldset>
                                <label class="btn btn-dark btn-main"><input type="radio" name="filter" value="all" checked="checked">All</label>
                                <label class="btn btn-dark"><input type="radio" name="filter" value="classic">Classic</label>
                                <label class="btn btn-dark"><input type="radio" name="filter" value="deluxe">Deluxe</label>
                                <label class="btn btn-dark"><input type="radio" name="filter" value="royal">Royal</label>
                            </fieldset>
                        </form>
                    </div>

                    <div class="row" id="mg-grid">
                        <figure class="col-md-3 mg-gallery-item" data-groups='["classic"]'>
                            <a href="{!! asset('images/room-1.png') !!}" data-lightbox-gallery="rooms"><img src="{!! asset('images/room-1.png') !!}" class="img-responsive" alt="" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
                        </figure>
                        <figure class="col-md-3 mg-gallery-item" data-groups='["deluxe"]'>
                            <a href="{!! asset('images/room-2.png') !!}" data-lightbox-gallery="rooms"><img src="{!! asset('images/room-2.png') !!}" class="img-responsive" alt="" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
                        </figure>
                        <figure class="col-md-3 mg-gallery-item" data-groups='["royal"]'>
                            <a href="{!! asset('images/room-3.png') !!}" data-lightbox-gallery="rooms"><img src="{!! asset('images/room-3.png') !!}" class="img-responsive" alt="" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
                        </figure>
                        <figure class="col-md-3 mg-gallery-item" data-groups='["classic"]'>
                            <a href="{!! asset('images/room-4.png') !!}" data-lightbox-gallery="rooms"><img src="{!! asset('images/room-4.png') !!}" class="img-responsive" alt="" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
                        </figure>
                        <figure class="col-md-3 mg-gallery-item" data-groups='["deluxe"]'>
                            <a href="{!! asset('images/room-1.png') !!}" data-lightbox-gallery="rooms"><img src="{!! asset('images/room-3.png') !!}" class="img-responsive" alt="" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
                        </figure>
                        <figure class="col-md-3 mg-gallery-item" data-groups='["classic"]'>
                            <a href="{!! asset('images/room-2.png') !!}" data-lightbox-gallery="rooms"><img src="{!! asset('images/room-2.png') !!}" class="img-responsive" alt="" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
                        </figure>
                        <figure class="col-md-3 mg-gallery-item" data-groups='["royal"]'>
                            <a href="{!! asset('images/room-3.png') !!}" data-lightbox-gallery="rooms"><img src="{!! asset('images/room-1.png') !!}" class="img-responsive" alt="" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
                        </figure>
                        <figure class="col-md-3 mg-gallery-item" data-groups='["royal"]'>
                            <a href="{!! asset('images/room-4.png') !!}" data-lightbox-gallery="rooms"><img src="{!! asset('images/room-4.png') !!}" class="img-responsive" alt="" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
                        </figure>
                        <figure class="col-md-3 mg-gallery-item" data-groups='["classic"]'>
                            <a href="{!! asset('images/room-2.png') !!}" data-lightbox-gallery="rooms"><img src="{!! asset('images/room-2.png') !!}" class="img-responsive" alt="" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
                        </figure>
                        <figure class="col-md-3 mg-gallery-item" data-groups='["royal"]'>
                            <a href="{!! asset('images/room-4.png') !!}" data-lightbox-gallery="rooms"><img src="{!! asset('images/room-4.png') !!}" class="img-responsive" alt="" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
                        </figure>
                        <figure class="col-md-3 mg-gallery-item" data-groups='["deluxe"]'>
                            <a href="{!! asset('images/room-1.png') !!}" data-lightbox-gallery="rooms"><img src="{!! asset('images/room-3.png') !!}" class="img-responsive" alt="" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
                        </figure>
                        <figure class="col-md-3 mg-gallery-item" data-groups='["classic"]'>
                            <a href="{!! asset('images/room-3.png') !!}" data-lightbox-gallery="rooms"><img src="{!! asset('images/room-1.png') !!}" class="img-responsive" alt="" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection