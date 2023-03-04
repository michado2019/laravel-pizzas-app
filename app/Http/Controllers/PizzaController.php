<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
class PizzaController extends Controller
{
    public function index(){
        $pizzas = Pizza::all();
        return view('pizzas.index', ['pizzas' => $pizzas, 'name' => request('name')]);
    }
    public function show($id){
        $pizza = Pizza::findorfail($id);
    return view('pizzas.show', ['pizza' => $pizza]);
    }
    public function create(){
    return view('pizzas.create');
    }
    public function store(){

        $pizzas = new Pizza();

           $pizzas->name = request('name');
           $pizzas->type = request('type');
            $pizzas->base = request('base');
            $pizzas->toppings = request('toppings');
            $pizzas->save();
     return redirect('/');
    }
    public function destroy($id){

       $pizza = Pizza::findorfail($id);
       $pizza->delete();
     return redirect('/pizzas');
    }
}
