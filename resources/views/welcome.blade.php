@extends('layouts.main')
@section('title','Teste')
@section('content')

<h1>Teste de Layout e section</h1>
  <h1> Algum título</h1>
  @if(10 > 5)
      <p> A condição é verdadeira </p> 
  @endif
  <p>{{$nome}}</p>

  @if($nome == "Caroline")
      <p> O nome é Pedro</p>
  @elseif($nome == "Tatau")
      <p> O nome é {{$nome}} e ela tem {{$idade}} anos e trabalha como {{$job}}:)</p>
  @else
      <p> O nome não é Caroline</p>
  @endif

  @for($i = 0; $i < count($arr); $i++ )
      <p>{{$arr[$i]}} - {{$i}}</p>
      @if($i==2)
          <p>O $i é = 2</p>
      @endif
  @endfor

  @php
      $name = "tata";
      echo $name;
  @endphp

  {{--comentário no blade--}}

  @foreach($nomes as $nome)
  <p>{{$loop->index}}</p> {{--váriavel 'global' do Blade (nesse caso mostra o índice do array este loop)--}}
  <p>{{ $nome }}</p>        
  @endforeach
@endsection