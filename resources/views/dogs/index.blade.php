@extends('layouts.app')
@section('title')
DogChamp - Dogs
@endsection
@section('content')
<div class="container" id="content">
  <div class="row">
    <div class="col-md-12 animated fadeInRight">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="background-color: white!important;">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="mytoplink">Moje menu</a></li>
          <li class="breadcrumb-item" aria-current="page">Moji psy</li>
        </ol>
      </nav>
    </div>
    <div class="col-md-12 text-center mt-5 animated fadeInLeft">
      <h2>Vaši psy</h2>
      <small>Menu pre prehľad a administráciu vašich psov!</small>
    </div>
    <div class="col-md-12 mt-5 animated fadeInRight">
      <div class="card-deck">
        <div class="card border-dark mb-3 text-center">
          <div class="card-body text-dark">
            <h5 class="card-title">Pridať nového psa</h5>
            <img src="{{url('/img/dogs/add128.png')}}" class="img-fluid mt-2 mb-2" alt="MyAwards">
            <p class="card-text">Vytvorte profil pre vášho psíka a hneď môžete zadávať aj získané ocenenia</p>
            <div class="text-center">
              <a href="{{route('dogs.create')}}" class="btn btn-success">Kliknite sem</a>
            </div>
          </div>
        </div>
        <div class="card border-dark mb-3 text-center">
          <div class="card-body text-dark">
            <h5 class="card-title">Zoznam vašich psov</h5>
            <img src="{{url('/img/dogs/dogs128.png')}}" class="img-fluid mt-2 mb-2" alt="MyDogs">
            <p class="card-text">Zoznam všetkých vašich psov v tabuľkovej forme.</p>
            <div class="text-center">
              <a class="btn btn-success" href="{{route('dogs.my_dogs')}}">Kliknite sem</a>
            </div>
          </div>
        </div>
        <div class="card border-dark mb-3 text-center">
          <div class="card-body text-dark">
            <h5 class="card-title">Profil vasich psov</h5>
            <img src="{{url('/img/dogs/profile128.png')}}" class="img-fluid mt-2 mb-2" alt="MyDashboard">
            <p class="card-text">Vyberte si psa a zobrazte si jeho vlastný profil, albumy a fotky.</p>
            <div class="text-center">
              <a class="btn btn-success" href="myreporting.php">Kliknite sem</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection