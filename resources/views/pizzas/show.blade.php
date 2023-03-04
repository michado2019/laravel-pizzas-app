@extends('layouts.app')

@section('content')
        <div class="detailssWrapper">
        <p>Order for: {{ $pizza->name }}</p>
        <p>Type: {{ $pizza->type }}</p>
        <p>Base: {{ $pizza->base }}</p>
        <label>Extra toppings</label>
        <ul>
           @foreach($pizza->toppings as $topping)
           <li>{{$topping}}<li>
        @endforeach
        </ul>
        <form action='/pizzas/{{$pizza->id}}' method='POST'>
           @csrf
           @method('DELETE')
        <button>Complete order<?button>
        </form>
        <a href="/pizzas"><---Back to all pizzas</a>
        </div>
        @endsection
   
