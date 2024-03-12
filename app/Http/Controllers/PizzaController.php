<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index(){
    //    $pizzas = Pizza::all();
    // $pizzas = Pizza::orderBy('price','asc')->get();
    // $pizzas = Pizza::where('name', 'Susan Akpogai')->get();
    $pizzas = Pizza::latest()->get();
        return view('pizza', ['pizzas' => $pizzas]); 
    }
    
    public function create(){
        return view('create');
    }

    public function show($id){

        $pizza = Pizza::findorFail($id);
        return view('show', ['pizza' => $pizza]);
    }
    public function showall(){
        $pizzas = Pizza::all();
        return view('showall', ['pizzas' => $pizzas]);
    }   
    public function store(){
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('toppings');
        $pizza->assortment = request('assortment');
        $pizza->save();
        return redirect('/')->with('msg', 'Thanks for yor order');
    }
    public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        return redirect('/pizzas');
    }
}
