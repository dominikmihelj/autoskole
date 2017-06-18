@extends('layouts.master')

@section('content')
<div class="slider-area">
            <div class="slider">
                <div id="bg-slider" class="owl-carousel owl-theme">
                 
                  <div class="item"><img src="img/slider-image-3.jpg" alt="Mirror Edge"></div>
                  <div class="item"><img src="img/slider-image-2.jpg" alt="The Last of us"></div>
                  <div class="item"><img src="img/slider-image-1.jpg" alt="GTA V"></div>
                 
                </div>
            </div>
            <div class="container slider-content">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                        <h2>Job Searching Just Got So Easy</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi deserunt deleniti, ullam commodi sit ipsam laboriosam velit adipisci quibusdam aliquam teneturo!</p>
                        <div class="search-form wow pulse" data-wow-delay="0.8s">
                            <form action="" class="form-inline">
                                <div class="form-group">
                                    <select name="" id="" class="form-control col-lg-8">
                                        <option>Select Your Category</option>
                                        <option selected>Graphic Design</option>
                                        <option>Web Design</option>
                                        <option>App Design</option>
                                    </select>
                                </div>
                               		<input type="submit" class="btn btn-responsive" value="Search">
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
@endsection


