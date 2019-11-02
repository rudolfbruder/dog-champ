@extends('layouts.app')
@section('title')
DogChamp - Nove ocenenie
@endsection
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.css" rel="stylesheet" />
@endsection
@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb pl-0" style="background-color: white!important;">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="mytoplink">Moje menu</a></li>
        <li class="breadcrumb-item"><a href="{{route('awards.index')}}" class="mytoplink">Menu ocenenia</a></li>
        <li class="breadcrumb-item" aria-current="page">
            {{isset($award) ? 'Aktualizovanie ocenenie' : 'Registracia noveho ocenenia' }}</li>
    </ol>
</nav>

<div class="card animated fadeIn">
    <div class="card-header">
        {{isset($award) ? 'Aktualizatia ocenenia' : 'Registracia noveho ocenenia'}}
    </div>
    <div class="card-body">
        <form action="{{isset($award) ? route('awards.edit') : route('awards.store')}}" method="POST">
            @csrf
            @if (isset($award))
            @method('PUT')
            @endif
            <div class="form-row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="dog">Zvolte psa</label>
                        <select name="dog_id" id="dog" class="form-control">
                            <option></option>
                            @foreach ($dogs as $dog)
                            <option value="{{$dog->id}}" @if (isset($award)) @if ($dog->id == $award->dog_id)
                                selected
                                @endif
                                @endif
                                >{{$dog->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="award_type_id">Zvolte typ ocenenia</label>
                        <select name="award_type_id" id="award_type_id" class="form-control">
                            <option></option>
                            @foreach ($awardsTypes as $awardType)
                            <option value="{{$awardType->id}}" @if (isset($award)) @if ($award->type->id ==
                                $awardType->id)
                                selected
                                @endif
                                @endif
                                >{{$awardType->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="competition">Zvolte sutaz</label>
                        <select name="competition_id" id="competition" class="competition-selector form-control"
                            onchange="setDate()">
                            <option></option>
                            @foreach ($competitions as $competition)
                            <option value="{{$competition->id}}" @if (isset($award)) @if ($award->competition_id ==
                                $competition->id)
                                selected
                                @endif
                                @endif
                                >{{$competition->city . ' ' . $competition->date}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="date">Datum ziskania</label>
                        <input type="text" class="form-control" id="date" name="date" style="background-color:white"
                            value=" {{isset($award) ? $award->date : ''}}">
                        <small id="datehelp" class="form-text text-muted">Zmente ak by nebol doplneny spravny
                            datum</small>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="comment">Koment</label>
                        <textarea name="comment" id="comment" cols="30" rows="4"
                            class="form-control">{{isset($award) ? $award->comment : ''}}</textarea>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Potvrdit</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("#date", {
        dateFormat: "d/m/Y",
    });
    $(document).ready(function() {
        $('.competition-selector').select2({
            theme: 'bootstrap4',
            placeholder: "Zvolte sutaz",
        });
        $('#dog').select2({
            theme: 'bootstrap4',
            placeholder: "Zvolte psa",
        });
        $('#award_type_id').select2({
            theme: 'bootstrap4',
            placeholder: "Zvolte ocenenie",
        });
    });

    function setDate() {
        var input = document.getElementById("competition").options[document.getElementById("competition").selectedIndex].text;
      document.getElementById("date").value = input.substr(input.length-10);
    }
</script>
@endsection