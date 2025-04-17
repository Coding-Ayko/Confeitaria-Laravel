@extends('layouts.main')
@section('title', 'recipes')
@section('content')

@if($id ?? null)
  <p>Exibindo receita id: {{$id}}</p>
@endif

@endsection