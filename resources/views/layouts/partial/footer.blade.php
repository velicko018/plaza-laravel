<footer class="mg-footer">
    <div class="mg-footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="widget">
                        <h2 class="mg-widget-title">Contact US</h2>
                        <address>
                            <strong>Park Plaza</strong><br>
                            768 Fifth Avenue, Manhattan<br>
                            New York City 10019
                        </address>
                        <p>
                            +000-123-456-789<br>
                            +000-123-456-789
                        </p>
                        <p>
                            <a href="mailto:#">park-plaza-ny@example.com</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="widget">
                        <h2 class="mg-widget-title">Newsletter</h2>
                        <p></p>
                        <form>
                            <p>
                                <input type="email" class="form-control" placeholder="Your Email">
                            </p>
                            <input type="submit" class="btn btn-main" value="Subscribe">
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="widget">
                        <h2 class="mg-widget-title">Social Media</h2>
                        <p>You can find us on social media.</p>
                        <ul class="mg-footer-social">
                            <li><a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="http://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="http://www.plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mg-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2017  All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="{!! asset('js/jquery.min.js') !!}"></script>
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('js/bootstrap-datepicker.min.js') !!}"></script>
<script src="{!! asset('js/modernizr.custom.min.js') !!}"></script>
<script src="{!! asset('js/classie.js') !!}"></script>
<script src="{!! asset('js/jquery.parallax-1.1.3.js') !!}"></script>
<script src="{!! asset('js/owl.carousel.min.js') !!}"></script>
<script src="{!! asset('js/nivo-lightbox.min.js') !!}"></script>
<script src="{!! asset('js/selectFx.js') !!}"></script>
<script src="{!! asset('js/jquery.shuffle.min.js') !!}"></script>
<script src="{!! asset('js/script.js') !!}"></script>
<script src="{!! asset('js/laravel.js') !!}"></script>

<!-- Extern Scripts -->
@yield('extra-js')