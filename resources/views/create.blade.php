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
  }

  #contenu{
    background-image: url("{{asset('images/a.jpg')}}");
    color: white;
  }
  
</style>

<div class="card uper" style="margin-top: -50px" id="contenu">
  <div class="card-header" style="background-color: #778899 ; color:white">

    <h3>PROGRAMMER UN VOL</h3>

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

      <form method="post" action="{{ route('vols.store') }}">
         @csrf
          <div class="form-group">
              <label for="code" class="form-label">Code_vol:</label>
              <input type="text" class="form-control" name="code_vol" placeholder="Veuillez entrer le code du vol"/>
          </div>

          <div class="form-group">
              <label for="date" class="form-label">date_depart:</label>
              <input type="date" class="form-control" name="date_depart" placeholder="Veuillez entrer la date du depart"/>
          </div>

          <div class="form-group">
              <label for="heure" class="form-label">heure_depart:</label>
              <input type="time" class="form-control" name="heure_depart" placeholder="Veuillez entrer l'heure du depart"/>
          </div>

          <div class="form-group">
              <label for="classe_A" class="form-label">Nombre de Place Classe_A:</label>
              <input type="text" class="form-control" name="np_classe_a" placeholder="Veuillez entrer la classe"/>
          </div>

          <div class="form-group">
              <label for="classe_B" class="form-label">Nombre de place Classe_B:</label>
              <input type="text" class="form-control" name="np_classe_b" placeholder="Veuillez entrer la classe"/>
          </div>

          <div class="form-group">
              <label for="prix" class="form-label">Prix_Classe_A :</label>
              <input type="number" class="form-control" name="prix_classe_a" placeholder="Veuillez entrer Prix_classe_A"/>
          </div>

          <div class="form-group">
              <label for="prix" class="form-label">Prix_Classe_B :</label>
              <input type="number" class="form-control" name="prix_classe_b"  placeholder="Veuillez entrer Prix_classe_B"/>
          </div>
          <button type="submit" class="btn btn-primary mt-4" >AJOUTER</button>
      </form>
  </div>
</div>

<script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="{{asset('js/offcanvas.js')}}"></script>
@endsection
