@extends('layouts.app')
@section('title')
DogChamp - Moji psy
@endsection
@section('content')
{{$awards}}

<hr>

@foreach ($awards as $award)
{{$award->type->name}}
@endforeach
@endsection