@section('content')
<div class="content-area">
    <div class="container">
        <div class="row page-title text-center spacer">
        	<div class="col-md-6">
        		<h2><a href="/instructors/{{ $instructor->id }}" >{{ $instructor->name }}</a></h2>
	            <h5>{{ $instructor->car }}</h5>
	            <h5>{{ $instructor->telephone }}</h5>
	            <h5>{{ $instructor->fax }}</h5>
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
						<form method="POST" action="/instructors/{{ $instructor->id }}">
							{{ csrf_field() }}
							<div class="row">
								<div class="form-group col-sm-8">
									<textarea name="body" placeholder="Your name here..." class="form-control" required></textarea>
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
									<button type="submit" class="btn btn-primary">Add comment</button>
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