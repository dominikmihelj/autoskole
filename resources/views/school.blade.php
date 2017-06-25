@extends('layouts.master')

@section('content')
<div class="content-area">
    <div class="container skole">
        <div class="row page-title spacer">
        	<div class="col-md-6 col-height col-bottom">
        		<h3>{{ $school->name }}</h3>
        		<ul class="lista">
					<li><b>Kategorije : {{ $school->categories }}</b></li>
					<li>{{ $school->address }}</li>
					<li>{{ $school->city }}</li>
					<li>Tel. : {{ $school->telephone }}</li>
					<li>Fax : {{ $school->fax }}</li>
					<li>E-mail : {{ $school->email }}</li>
        		</ul>
        	</div>
        	<div class="col-md-6 col-height col-bottom">
        		<h2>Prosječna ocjena: {{ number_format($school->averageRating(), 2) }}</h2>
        		<h6>Ocijenjeno {{ $school->countRating() }} puta</h6>
        		<h3>Instruktori:</h3>
	        	<ul class="lista">
	        		@foreach($school->instructors as $instructor)
	        			<li><b><a href="/schools/{{ $school->id }}/instructors/{{ $instructor->id }}" class="lista">{{ $instructor->name }}</a></b> : {{ $instructor->car }}</li>    			
	        		@endforeach
	        		@if(Auth::check())
	        			<li><em><a href="/schools/{{ $school->id }}/create" class="lista">Dodaj novog instruktora u autoškolu</a></em>
	        		@endif
	        	</ul>
        	</div>
        </div>
        <br><br>
        <div class="row comments">
        <div class="col-xs-12">
        	<ul class="list-group">
			@foreach($school->ratings as $rating)
				<li class="list-group-item">
					<strong><em>{{ $rating->created_at->diffForHumans() }}</em></strong> recenzirano od korisnika: <strong>{{ $rating->author->name}}</strong> | OCJENA: <strong>{{$rating->score}}</strong>
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
						<form method="POST" action="{{ action('SchoolController@store', [$school->id]) }}">
							{{ csrf_field() }}
							<div class="row">
								<div class="form-group col-sm-9">
									<textarea name="body" placeholder="Unesite komentar ovdje..." class="form-control" required></textarea>
								</div>
								<div class="form-group col-sm-3">
									<fieldset class="score" required>
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
									<button type="submit" class="btn btn-primary">Dodaj recenziju</button>
								</div>
							</div>
						</form>
				</div>
			</div>
		@else
			<div class="card">
				<div class="card-block">
					<p><b>Da biste ostavili recenziju ili dodali novog instruktora morate se prijaviti.</b></p>
				</div>
			</div>
		@endif
		@include('layouts.errors')
		</div>
    </div>
</div>
@stop