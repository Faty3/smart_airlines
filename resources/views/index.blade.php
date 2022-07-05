@extends('layout')

@section('content')
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="{{asset('css/offcanvas.css')}}" rel="stylesheet">
<style>
  .uper {
    margin-top: 80px;
  }

  thead{
    font-weight: bold;
    text-align: center;
    background-color: #778899;
    cursor: pointer ;
  }

  thead:hover{
    color:white
  }

  h3{
    text-align: center;
    margin-top: -60px;
    text-transform: uppercase;
  }

  .uper{
    background-image: url("{{asset('images/k.jpg')}}");
  }
</style>

<div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br /><br><br>
  @endif
    <h3>Liste des Vols au programme</h3>
    <div class="d-flex justify-content-end"><a type="button" class="btn btn-primary" href="{{('/vols/create')}}">Programmer Vol</a></div>
  <table class="table table-bordered table-hover" style="margin-top: 30px; color:white">
    <thead>
        <tr>
          <td scope="col">ID</td>
          <td scope="col">Code_Vol</td>
          <td scope="col">Date_depart</td>
          <td scope="col">Heure_depart</td>
          <td scope="col">Nombre de Place Classe_A</td>
          <td scope="col">Nombre de Place Classe_B</td>
          <td scope="col">Prix_Classe_A</td>
          <td scope="col">Prix_Classe_B</td>
          <td scope="col" colspan="2">Action</td>
        </tr>
    </thead>

    <tbody>
        @foreach($vols as $vol)
        <tr>
            <td>{{$vol->id}}</td>
            <td>{{$vol->code_vol}}</td>
            <td>{{$vol->date_depart}}</td>
            <td>{{$vol->heure_depart}}</td>
            <td>{{$vol->np_classe_a}}</td>
            <td>{{$vol->np_classe_b}}</td>
            <td>{{$vol->prix_classe_a}}</td>
            <td>{{$vol->prix_classe_b}}</td>
            <td><a href="{{ route('vols.edit', $vol->id)}}" class="btn btn-primary">Modifier</a></td>
            <td>
                <form action="{{ route('vols.destroy', $vol->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
<script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="{{asset('js/offcanvas.js')}}"></script>
@endsection