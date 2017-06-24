@extends('layouts.master')

@section('content')
<br>
<div class="container">
    <div class="row skole">
        <form class="form-horizontal" method="post" action="" >
        {{ csrf_field() }}
          <div class="form-group">
            <label class="control-label col-sm-2" for="name">Ime i prezime:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="name" name="name" placeholder="Unesite ime...">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="telephone">Telefon:</label>
            <div class="col-sm-6"> 
              <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Broj telefona.....">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="car">Automobil:</label>
            <div class="col-sm-6"> 
              <input type="text" class="form-control" id="car" name="car" placeholder="Automobil...">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="categories">Kategorije:</label>
            <div class="col-sm-6"> 
              <input type="text" class="form-control" id="categories" name="categories" placeholder="Unesite odvojene zarezom(ako ih je više)-> npr. A, B, C">
            </div>
          </div>
          
          <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Unesi</button>
            </div>
          </div>

        </form>
    </div>
</div>
@endsection
