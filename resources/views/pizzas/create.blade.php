@extends('layouts.app')
@section('content')
        <div class="createWrapper">
            <div class="createForm-div">
                <form action='/pizzas' method='POST' class='createForm'>
                    @csrf
                <label>Your name:</label>
                <input type='text' id='name' name='name' class='createName'/>
                <label htmlfor='type'>Choose pizza type:</label>
                <select name='type' id='type'>
                  <option value='magherita'>Magherita</option>
                  <option value='veg supreme'>Veg supreme</option>
                  <option value='huwaiin'>Huwaiin</option>
                  <option value='volcano'>Vocano</option>
                </select>
                <label>Choose base type:</label>
                <select name='base' id='type'>
                  <option value='cheesy crust'>Cheesy crust</option>
                  <option value='garlic crust'>Garlic crust</option>
                  <option value='ginger crust'>Ginger crust</option>
                  <option value='milky crust'>milky crust</option>
                </select>
                <fieldset>
                   <label>Add toppings:</label>
                   <input type='checkbox' name='toppings[]' value='peppers' class='createCheck-boxes'>Peppers
                   <input type='checkbox' name='toppings[]' value='garlic' class='createCheck-boxes'>Garlic
                   <input type='checkbox' name='toppings[]' value='onions' class='createCheck-boxes'>onoins
                   <input type='checkbox' name='toppings[]' value='tomatoes' class='createCheck-boxes'>tomatoes
                </fieldset>
                <input type='submit' name='submit' value='Order' class='createBtn'/>
                </form>
            </div>
        </div>
  @endsection
   
