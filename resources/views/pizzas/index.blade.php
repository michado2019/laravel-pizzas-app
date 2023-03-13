@extends('layouts.app')
@section('content')
        <div class="pizzasWrapper">
         <h1>Welcome<h1>
            @foreach($pizzas as $pizza)
             <div class='pizzasFlex'>
             {{ $pizza->name}} - 
                {{ $pizza->type}} - 
                {{ $pizza->base}} 
             </div>
             @endforeach
        </div>
        @endsection
   
