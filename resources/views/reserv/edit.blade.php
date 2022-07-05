@extends('layout')

@section('content')
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="{{asset('css/offcanvas.css')}}" rel="stylesheet">

<style>
  .uper {
    margin-top: 40px;
  }

  h3{
    text-align: center;
    font-weight: bold;
    font-size: 30px; 
    text-transform: uppercase;
  }

  form{
    width: 50%;
    margin-left: 20%;
  }

  .btn{
    margin-left: 45%;
    margin-top: 20px;
  }

  #contenu{
    background-image: url("{{asset('images/c7.jpeg')}}");
  }
</style>

<div class="card uper" style="margin-top: -10px;" id="contenu">
  <div class="card-header" style="background-color: #778899" >
    <h3>Modifier la reservation</h3>
  </div>

  <div class="card-body">

    @if ($errors->any())
      <div class="alert alert-danger" style=" background-color: #778899; color:white; margin-top:-80px">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('reservations.update', $reservation->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="nom_passager">Nom_passager :</label>
              <input type="text" class="form-control" name="nom_passager" value="{{ $reservation->nom_passager }}"/>
          </div>

          <div class="form-group">
              <label for="prenom_passager">Prenom_passager :</label>
              <input type="text" class="form-control" name="prenom_passager" value="{{ $reservation->prenom_passager }}"/>
          </div>

          <div class="form-group">
              <label for="sexe_passager">Sexe_passager :</label>
              <input type="text" class="form-control" name="sexe_passager" value="{{ $reservation->sexe_passager }}"/>
          </div>

          <div class="form-group">
              <label for="classe">Classe :</label>
              <input type="text" class="form-control" name="classe" value="{{ $reservation->classe }}"/>
          </div>

          <div class="form-group">
              <label for="id_vol">Id_Vol :</label>
              <input type="text" class="form-control" name="id_vol" value="{{ $reservation->id_vol }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>
<script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="{{asset('js/offcanvas.js')}}"></script>
@endsection