@extends('layouts.master')

@section('content')
<div class="content-area">
    <div class="container">
        <div class="row page-title text-center spacer">
        	<div class="col-md-6 col-height col-bottom">
        		<h2>{{ $school->name }}</h2>
	            <h5>{{ $school->address }}</h5>
	            <h5>{{ $school->telephone }}</h5>
	            <h5>{{ $school->fax }}</h5>
        	</div>
        	<div class="col-md-6 col-height col-bottom">
        		<h2>Prosječna ocjena: {{ number_format($school->averageRating(), 2) }}</h2>
        		<h6>Ocijenjeno {{ $school->countRating() }} puta</h6>
        		<h3>Instruktori:</h3>
	        	<ul class="lista">
	        		@foreach($school->instructors as $instructor)
	        			<li><b><a href="#" class="lista">{{ $instructor->name }}</a></b> : {{ $instructor->car }}</li>    			
	        		@endforeach
	        	</ul>
	        	<br>
        	</div>
        </div>
        <div class="row comments">
        <div class="col-xs-12">
        	<ul class="list-group">
			@foreach($school->ratings as $rating)
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
						<form method="POST" action="/schools/{{ $school->id }}">
							{{ csrf_field() }}
							<div class="row">
								<div class="form-group col-sm-8">
									<textarea name="body" placeholder="Unesite komentar ovdje..." class="form-control" required></textarea>
								</div>
								<div class="form-group col-sm-4">
									<select name="score" id="" class="form-control">
												<option value="" disabled selected>Unesite ocjenu</option>
	                                            <option value="1">1</option>
	                                            <option value="2">2</option>
	                                            <option value="3">3</option>
	                                            <option value="4">4</option>
	                                            <option value="5">5</option>
	                                    </select>
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
		@endif
		</div>
    </div>
</div>
@stop