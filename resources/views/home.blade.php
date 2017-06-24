@extends('layouts.master')

@section('content')
<div class="slider-area">
            <div class="slider">
                <div id="bg-slider" class="owl-carousel owl-theme">
                  <div class="item"><img src="img/slika1.png" alt=""></div>
                  <div class="item"><img src="img/slika2.png" alt=""></div>
                  <div class="item"><img src="img/slika3.png" alt=""></div>
                </div>
            </div>
            <div class="container slider-content">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 naslov">
                        <h2>Autoškole HR</h2>
                        <p>Vaše mjesto za autoškole.<br>
                        Saznajte informacije, izrazite svoje mišljenje, ocijenite škole i instruktore</p>
                        <div class="search-form wow pulse trazilica" data-wow-delay="0.8s">
                            <form name="place" action="{{ action('SchoolController@index') }}" method="post" class="form-inline">
                             {{ csrf_field() }}
                                <div class="form-group">
                                    <select name="cities" id="" class="form-control col-lg-8">
                                        @foreach($cities as $town)
                                            <option value="{{ $town->city }}">{{ $town->city }}</option>
                                        @endforeach
                                    </select>
                                </div>
                               		<input type="submit" class="btn btn-responsive" value="Traži">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-area">
            <div class="container">
                <div class="row page-title text-center wow zoomInDown" data-wow-delay="1s">
                    <h5>Our Process</h5>
                    <h2>How we work for you?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae illum dolorem, rem officia, id explicabo sapiente</p>
                </div>
                <div class="row how-it-work text-center">
                    <div class="col-md-4">
                        <div class="single-work wow fadeInUp" data-wow-delay="0.8s">
                            <img src="img/how-work1.png" alt="">
                            <h3>Searching for the best job</h3>
                            <p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-work  wow fadeInUp"  data-wow-delay="0.9s">
                            <img src="img/how-work2.png" alt="">
                            <h3>Searching for the best job</h3>
                            <p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-work wow fadeInUp"  data-wow-delay="1s">
                            <img src="img/how-work3.png" alt="">
                            <h3>Searching for the best job</h3>
                            <p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p>
                        </div>
                    </div>
                </div>
            </div>
@stop


