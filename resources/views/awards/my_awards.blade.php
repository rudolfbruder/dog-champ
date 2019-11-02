@extends('layouts.app')
@section('title')
DogChamp - Vase ocenenia
@endsection
@section('content')
<div class="row">
    <div class="col-md-12 animated fadeInRight">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: white!important;">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Moje menu</a></li>
                <li class="breadcrumb-item"><a href="{{route('awards.index')}}">Ocenenia a
                        Tituly</a></li>
                <li class="breadcrumb-item" aria-current="page">Zoznam oceneni</li>
            </ol>
        </nav>
    </div>
</div>
<div class="card">
    <div class="card-header">
        Vase ziskane ocenenia
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <th>Nazov ocenenia</th>
                <th>Meno psa</th>
                <th>Pocet bodov</th>
                <th>Datum ziskania ocenenia</th>
                <th>Sprava</th>
            </thead>
            <tbody>
                @forelse ($awards as $award)
                <tr>
                    <td>{{$award->type->name}}</td>
                    <td>{{$award->dog->name}}</td>
                    <td>{{$award->type->points}}</td>
                    <td>{{$award->date}}</td>
                    <td>
                        <a href="{{route('awards.edit',$award->id)}}" class="btn btn-sm btn-success">Upravit</a>
                    </td>
                </tr>
                @empty
                Nemate ziadne ocenenia chcete pridat?
                @endforelse

            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{$awards->links()}}
        </div>
    </div>
</div>
@endsection