@extends('layouts.app')
@section('title')
DogChamp - Moji psy
@endsection
@section('content')
<div class="row">
    <div class="col-md-12 animated fadeInRight">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: white!important;">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="mytoplink">Moje menu</a></li>
                <li class="breadcrumb-item"><a href="{{route('dogs.index')}}" class="mytoplink">Menu psy</a></li>
                <li class="breadcrumb-item" aria-current="page">Zoznam psov</li>
            </ol>
        </nav>
    </div>
</div>
<div class="card">
    <div class="card-header">
        Vase psy
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <th>Cele meno</th>
                <th>Prezyvka</th>
                <th>Rasa</th>
                <th>Sprava</th>
            </thead>
            <tbody>
                @forelse ($myDogs as $dog)
                <tr>
                    <td>{{$dog->name}}</td>
                    <td>{{$dog->nick_name}}</td>
                    <td>{{$dog->race->name}}</td>
                    <td>
                        <a href="{{route('dogs.edit',$dog->slug)}}" class="btn btn-sm btn-success">Upravit</a>
                    </td>
                </tr>
                @empty
                Nemate ziadnych psov chcete pridat?
                @endforelse

            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{$myDogs->links()}}
        </div>
    </div>
</div>
@endsection