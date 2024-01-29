@extends('layouts.main')
@section('title', 'Receitas')
@section('content')

@if($id ?? null)
  <p>Exibindo receita id: {{$id}}</p>
@endif

@endsection