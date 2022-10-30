@extends('master')
@section('content')
    @livewire('q-r-code', ['params' => $params])
@endsection
