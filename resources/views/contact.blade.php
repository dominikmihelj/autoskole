@extends('layouts.master')

@section('content')
<br>
<div class="container">
    <div class="row skole">
        <h2>Kontakt</h2>
        <br><br>
        <form class="form-horizontal" method="post" action="" >
        {{ csrf_field() }}
          <div class="form-group">
            <label class="control-label col-sm-2" for="name">Ime i prezime:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="name" name="name" placeholder="Unesite ime...">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="comment">Komentar:</label>
            <div class="col-sm-6">
                <textarea class="form-control" rows="10" id="comment"></textarea>
            </div>
        </div>

          <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Pošalji</button>
            </div>
          </div>

        </form>
    </div>
</div>
@stop