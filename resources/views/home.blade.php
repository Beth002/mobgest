@extends('welcome')
@section('Contenu')
<ul class="nav">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Order</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Ventes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" aria-disabled="true">Profil</a>
    </li>
  </ul>
  <div class="col align-">
    <button class="btn-primary" type="submit">Create</button>
  </div>
@endsection
