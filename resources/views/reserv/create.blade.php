@extends('layout')

@section('content')
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="{{asset('css/offcanvas.css')}}" rel="stylesheet">
<style>
  .uper {
    margin-top: 40px;
  }

  h3{
    /* margin-bottom: 50px; */
    text-align: center;
    font-weight: bold;
    font-size: 30px;
    text-transform: uppercase;
  }

  form{
    width: 50%;
    margin-left: 20%;
    height: 80%;
  }

  .btn{
    margin-left: 45%;
    margin-top: 20px;
  }

  #contenu{
    background-image: url("{{asset('images/c9.jpg')}}");
  }
</style>

<div class="card uper" style="margin-top: -20px ;" id="contenu">
  <div class="card-header" style="background-color: #778899 ; color:white">
    <h3>Faire une Reservation</h3>
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('reservations.store') }}">
        @csrf
<div class="form-group">
              <label for="nom_passager">Nom_passager:</label>
              <input type="text" class="form-control" name="nom_passager" placeholder="Veuillez entrer le nom du passager"/>
          </div>

          <div class="form-group">
              <label for="prenom_passager">Prenom_passager:</label>
              <input type="text" class="form-control" name="prenom_passager" placeholder="Veuillez entrer le prenom du passager"/>
          </div>

          <div class="form-group">
              <label for="sexe_passager form-label">Sexe_passager:</label>
              <select name="sexe_passager" id="sexe_passager" class="form-select">
                <option value="femme">Femme</option>
                <option value="homme">Homme</option>
              </select>
          </div>

          <div class="form-group">
              <label for="classe form-label">Classe:</label>
              <select name="classe" id="classe" class="form-select">
                <option value="A">A</option>
                <option value="B">B</option>
              </select>
          </div>

          <!-- <div class="form-group">
              <label for="ic_vol">id_vol:</label>
              <select name="code_vol">
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
              </select>
          </div> -->

          <div class="container">
            <label class="form-label text-white" style="font-weight: bold;" for="doa">code_vol</label>
            <select class="form-select" style="color: #41A7A5" aria-label="Default select example" name="id_vol">
            @foreach ($vols as $vol)
                <option value="{{$vol->id}}">{{$vol->code_vol}}</option>
            @endforeach
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Valider</button>
      </form>
  </div>
</div>
<script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="{{asset('js/offcanvas.js')}}"></script>
@endsection
