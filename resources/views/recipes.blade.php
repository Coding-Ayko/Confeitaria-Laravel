@extends('layouts.main')
@section('title', 'recipes')
@section('content')


 @foreach($recipes as $recipe)
                <div class="card-col-md-3">
                    <div class="card">
                        <img src="{{ asset('./img/novidades-semana/' . $recipe->id . '.png') }}" alt="">
                        <h4 class="card-title">{{ $recipe->title }}</h4>
                        <p class="card-text">{{ $recipe->description }}</p>
                    </div>
                    <div class="rating-img">
                        <img src="{{ asset('./img/rating.png') }}" alt="Rating" class="estrelas">
                    </div>
                </div>
            @endforeach

@endsection