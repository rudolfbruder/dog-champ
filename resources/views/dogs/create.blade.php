@extends('layouts.app')
@section('title')
DogChamp - Dogs
@endsection
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 animated fadeInRight">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background-color: white!important;">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="mytoplink">Moje menu</a></li>
                    <li class="breadcrumb-item"><a href="{{route('dogs.index')}}" class="mytoplink">Menu psy</a></li>
                    <li class="breadcrumb-item" aria-current="page">
                        {{isset($dog) ? 'Aktualizovanie profilu psa' : 'Registracia noveho psa' }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-header">{{isset($dog) ? 'Aktualizovanie profilu psa' : 'Registracia noveho psa' }}</div>
        <div class="card-body">
            <form action="{{isset($dog) ? route('dogs.update',$dog->id) : route('dogs.store')}}" method="POST">
                @csrf
                @if (isset($dog))
                @method('PUT')
                @endif
                <div class="form-row">
                    <div class="col-lg-4">
                        <img src="{{url('/img/home/about-me.jpg')}}" alt="aboutUs" class="img-fluid p-3">
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="name">Cele meno</label>
                            <input type="text" class="form-control" name="name" id="name"
                                value="{{isset($dog) ? $dog->name : ''}}">
                        </div>
                        <div class="form-group">
                            <label for="gender">Pohlavie</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="0" @if (isset($dog)) @if ($dog->gender == "0")
                                    selected
                                    @endif
                                    @endif>Pes</option>
                                <option value="1" @if (isset($dog)) @if ($dog->gender == "1")
                                    selected
                                    @endif
                                    @endif>Suka</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="private">Typ profilu psa</label>
                            <select name="private" id="private" class="form-control">
                                <option value="0" @if (isset($dog)) @if ($dog->private === "0")
                                    selected
                                    @endif
                                    @endif>Verejny profil</option>
                                <option value="1" @if (isset($dog)) @if ($dog->private === "1")
                                    selected
                                    @endif
                                    @endif>Sukromny profil</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="nick_name">Prezyvka</label>
                            <input type="text" class="form-control" name="nick_name" id="nick_name"
                                value="{{isset($dog) ? $dog->nick_name : ''}}">
                        </div>
                        <div class="form-group">
                            <label for="date_of_birth">Datum narodenia</label>
                            <input type="text" class="form-control" id="date_of_birth" name="date_of_birth"
                                style="background-color:white" value=" {{isset($dog) ? $dog->date_of_birth : ''}}">
                        </div>
                        <div class="form-group">
                            <label for="race">Rasa</label>
                            <select name="race_id" id="race" class="form-control" value="">
                                @foreach ($races as $race)
                                <option value="{{$race->id}}" @if (isset($dog)) @if ($dog->race_id === $race->id)
                                    selected
                                    @endif
                                    @endif>
                                    {{$race->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="place_of_birht">Miesto narodenia</label>
                            <input type="text" class="form-control" name="place_of_birth" id="place_of_birth"
                                value=" {{isset($dog) ? $dog->place_of_birth : ''}}">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="about">Nieco o psovi</label>
                            <textarea name="about" id="about" cols="6" rows="5"
                                class="form-control">{{isset($dog) ? $dog->about : ''}}</textarea>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("#date_of_birth", {
       
    });
</script>
@endsection