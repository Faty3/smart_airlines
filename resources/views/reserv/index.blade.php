@extends('layout')

@section('content')
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="{{asset('css/offcanvas.css')}}" rel="stylesheet">
<style>
  .uper {
    margin-top: 40px;
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
    margin-bottom: 20px;
  }

  .uper{
    background-image: url("{{asset('images/c3.jpg')}}");
  }
</style>

<div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <h3>Liste des reservations de vol</h3>
  <div class="d-flex justify-content-end mb-3"><a type="button" class="btn btn-primary" href="{{('/reservations/create')}}">Faire une Reservation</a></div>
  <table class="table table-bordered table-hover" style="color: white;">

    <thead>
        <tr>
          <td>Id</td>
          <td>Nom_passager</td>
          <td>Prenom_passager</td>
          <td>Sexe_passager</td>
          <td>Classe</td>
          <td>Id_Vol</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>

    <tbody>
        @foreach($reservations as $reservation)
        <tr>
            <td>{{$reservation->id}}</td>
            <td>{{$reservation->nom_passager}}</td>
            <td>{{$reservation->prenom_passager}}</td>
            <td>{{$reservation->sexe_passager}}</td>
            <td>{{$reservation->classe}}</td>
            <td>{{$reservation->id_vol}}</td>
            <td><a href="{{ route('reservations.edit', $reservation->id)}}" class="btn btn-primary">Modifier</a></td>
            <td>
                <form action="{{ route('reservations.destroy', $reservation->id)}}" method="post">
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

