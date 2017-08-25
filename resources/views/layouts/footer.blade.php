    <div class="footer-area">
            <div class="container">
                <div class="row footer text-center">
                    <div class="col-xs-12">
                        <div class="single-footer">
                            {{ Html::image('img/logo.png'), array('class' => 'wow pulse', 'data-wow-delay' => '1s') }}
                            <br><br>
                            <p>Autoškole.hr | 2017.<p>
                            <br>
                            <ul class="list-inline">
                                <li><a href="{{ url('/') }}">Početna</a></li>
                                <li><a href="{{ url('/about') }}">O nama</a></li>
                                <li><a href="{{ url('/contact') }}">Kontakt</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        {{ Html::script('js/bootstrap.min.js') }}
        {{ Html::script('js/owl.carousel.min.js') }}
        {{ Html::script('js/wow.js') }}
        {{ Html::script('js/main.js') }}