@extends('layouts.master')

@section('content')
<br>
<div class="container">
    <div class="row skole">
        <h2>Kontakt</h2>
        <br><br>
        <form id="kontakt" class="form-horizontal" method="post" action="{{ action('ContactController@store') }}">
        {{ csrf_field() }}
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email adresa:</label>
            <div class="col-sm-6">
              <input type="email" class="form-control" id="email" name="email" placeholder="Unesite email..." required minlength="6">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="name">Ime i prezime:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="name" name="name" placeholder="Unesite ime..." required minlength="6">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="subject">Naslov:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Unesite naslov..." required minlength="3">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="comment">Komentar:</label>
            <div class="col-sm-6">
                <textarea class="form-control" rows="10" name="comment" id="comment" required minlength="10"></textarea>
            </div>
        </div>

          <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Pošalji</button>
            </div>
          </div>
        </form>
        @include('layouts.errors')
    </div>
</div>

<script>
  $('#kontakt').parsley();
</script>
@stop