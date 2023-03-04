@extends('layouts.app')
@section('content')
        <div class="pizzasWrapper">
         <h1 class='text-3xl font-bold underline'>Welcome<h1>
            @foreach($pizzas as $pizza)
             <div class='pizzasFlex'>
             {{ $pizza->name}} - 
                {{ $pizza->type}} - 
                {{ $pizza->base}} 
             </div>
             @endforeach
        </div>
        @endsection
   
