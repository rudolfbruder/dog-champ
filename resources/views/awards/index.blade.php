@extends('layouts.app')
@section('title')
DogChamp - Ocenenia
@endsection
@section('content')
<div class="row">
    <div class="col-md-12 animated fadeInRight">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: white!important;">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="mytoplink">Moje menu</a></li>
                <li class="breadcrumb-item" aria-current="page">Ocenenia a Tituly</li>
            </ol>
        </nav>
    </div>
    <div class="col-md-12 text-center mt-5 animated fadeInLeft">
        <h2>Vase ocenenia a tituly</h2>
        <small>Menu pre vsetky ocenenia, hodnotenia a tituly!</small>
    </div>
    <div class="col-md-12 mt-5 animated fadeInRight">
        <div class="card-deck">
            <div class="card border-dark mb-3 text-center">
                <div class="card-body text-dark">
                    <h5 class="card-title">Vložit nové ocenenie</h5>
                    <img src="{{url('/img/awards/winner-128.png')}}" class="img-fluid mt-2 mb-2" alt="MyAwards">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>

                    <a href="{{route('awards.create')}}" class="btn btn-success">Kliknite sem</a>

                </div>
            </div>
            <div class="card border-dark mb-3 text-center">
                <div class="card-body text-dark">
                    <h5 class="card-title">Prehlad vasich oceneni</h5>
                    <img src="{{url('/img/awards/award-list-128.png')}}" class="img-fluid mt-2 mb-2" alt="MyDogs">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>

                    <a class="btn btn-success" href="{{route('awards.my_awards')}}">Kliknite sem</a>

                </div>
            </div>
            <div class="card border-dark mb-3 text-center">
                <div class="card-body text-dark">
                    <h5 class="card-title">DogChamp rebricek</h5>
                    <img src="{{url('/img/awards/score-board-128.png')}}" class="img-fluid mt-2 mb-2" alt="MyDashboard">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>

                    <a class="btn btn-success" href="awards/leaderboard">Kliknite sem</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection