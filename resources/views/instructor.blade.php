@extends('layouts.master')

@section('content')
<div class="content-area">
    <div class="container skole">
        <div class="row page-title text-center spacer">
        	<div class="col-md-6">
        		<h2>{{ $instructor->name }}</h2>
	            <h5>{{ $instructor->car }}</h5>
	            <h5>{{ $instructor->telephone }}</h5>
        	</div>
        	<div class="col-md-6 col-height col-bottom">
        		<h2>Prosječna ocjena: {{ number_format($instructor->averageRating(), 2) }}</h2>
        		<h6>Ocijenjeno {{ $instructor->countRating() }} puta</h6>
	        	<br>
        	</div>
        </div>
        <div class="row comments">
        <div class="col-xs-12">
        	<ul class="list-group">
			@foreach($instructor->ratings as $rating)
				<li class="list-group-item">
					<strong>{{ $rating->created_at->diffForHumans() }}</strong> by {{ $rating->author->name}}
					<br>
					{{ $rating->body }}
				</li>
			@endforeach
		</ul>
        </div>
	</div>
		@if(Auth::check())
			<br><hr><br>
			
			<div class="card">
				<div class="card-block">
						<form method="POST" action="" name="">
							{{ csrf_field() }}
							<div class="row">
								<div class="form-group col-sm-8">
									<textarea name="body" placeholder="Your name here..." class="form-control" required></textarea>
								</div>
								<div class="form-group col-sm-4">
									<fieldset class="score">
									    <input type="radio" id="star5" name="score" value="5" />
									    <label class = "full" for="star5" title="Ocjena: 5"></label>
									    <input type="radio" id="star4half" name="score" value="4.5" />
									    <label class="half" for="star4half" title="Ocjena: 4.5"></label>
									    <input type="radio" id="star4" name="score" value="4" />
									    <label class = "full" for="star4" title="Ocjena: 4"></label>
									    <input type="radio" id="star3half" name="score" value="3.5" />
									    <label class="half" for="star3half" title="Ocjena: 3.5"></label>
									    <input type="radio" id="star3" name="score" value="3" />
									    <label class = "full" for="star3" title="Ocjena: 3"></label>
									    <input type="radio" id="star2half" name="score" value="2.5" />
									    <label class="half" for="star2half" title="Ocjena: 2.5"></label>
									    <input type="radio" id="star2" name="score" value="2" />
									    <label class = "full" for="star2" title="Ocjena: 2"></label>
									    <input type="radio" id="star1half" name="score" value="1.5" />
									    <label class="half" for="star1half" title="Ocjena: 1.5"></label>
									    <input type="radio" id="star1" name="score" value="1" />
									    <label class = "full" for="star1" title="Ocjena: 1"></label>
									    <input type="radio" id="starhalf" name="score" value="0.5" />
									    <label class="half" for="starhalf" title="Ocjena: 0.5"></label>
									</fieldset>
								</div>
							</div>
							<div class="row">
								<div class="form-group text-center">
									<button type="submit" class="btn btn-primary">Add comment</button>
								</div>
							</div>
						</form>
				</div>
			</div>
		@else
			<div class="card">
				<div class="card-block">
					<p>Da biste ostavili recenziju potrebno se prijaviti.</p>
				</div>
			</div>
		@endif
		</div>
    </div>
</div>
@stop