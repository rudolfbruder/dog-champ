@extends('layouts.app')
@section('title')
DogChamp - Dogs
@endsection
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{isset($dog) ? 'Aktualizovanie profilu psa' : 'Registracia noveho psa' }}</div>
        <div class="card-body">
            <form action="{{isset($dog) ? route('dogs.update') : route('dogs.store')}}" method="POST">
                @csrf
                @if (isset($dog))
                @method('PUT')
                @endif
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="name">Cele meno</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="nick_name">Prezyvka</label>
                            <input type="text" class="form-control" name="nick_name" id="nick_name">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="formgroup">
                            <label for="gender">Pohlavie</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="0">Pes</option>
                                <option value="1">Suka</option>
                            </select>
                        </div>

                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="date_of_birth">Datum narodenia</label>
                            <input type="text" class="form-control" id="date_of_birth" name="date_of_birth"
                                style="background-color:white">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="race">Rasa</label>
                            <select name="race_id" id="race" class="form-control" value="">
                                @foreach ($races as $race)
                                <option value="{{$race->id}}">{{$race->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label for="private">Typ profilu psa</label>
                        <select name="private" id="private" class="form-control">
                            <option value="0">Verejny profil</option>
                            <option value="1">Sukromny profil</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="place_of_birht">Miesto narodenia</label>
                            <input type="text" class="form-control" name="place_of_birth" id="place_of_birth">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="about">Nieco o psovi</label>
                            <textarea name="about" id="about" cols="6" rows="5" class="form-control"></textarea>
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