<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\City;
use App\Models\Card;
use SimpleSoftwareIO\QrCode\Facades\QrCode;



class UserController extends Controller
{
    public function profile (){
        $cards = auth()->user()->cards;
        return view('profile', compact('cards'));
    }

    public function newCard () {
       
        $cities = City::all();
        $categories = Category::all();

        return view('newCard', compact('cities', 'categories'));
    }

    public function saveCard ( Request $request ){

        $card = Card::create([
            'name' => $request->name,
            'nit' => $request->nit,
            'address' => $request->direccion,
            'phone' => $request->telefono,
            'movil' => $request->celular,
            'city_id' => $request->ciudad,
            'category_id' => $request->categoria,
            'start' => $request->apertura,
            'end' => $request->cierre,
            'description' => $request->descripcion,
            'user_id' => auth()->user()->id,
            'path' => 'images/'.$request->name.'.png',
        ]);

        \QrCode::format('png')->size(500)
            ->color(255,55,0)
            ->generate('http://127.0.0.1:8000/card/'.$card->id, public_path('images/'.$request->name.'.png'));
         

        return redirect()->route('viewCard', $card->id);
    }

    public function viewCard ( $id ){
        $card = Card::find($id);
        return view('card', compact('card'));
    }

    public function deleteCard ($id){
        Card::find($id)->delete();
        return redirect()->route('profile');
    }

    public function editCard ($id){
        $cities = City::all();
        $categories = Category::all();
        $card = Card::find($id);
        return view('editCard', compact('card', 'cities', 'categories'));
    }

    public function saveEditCard ( Request $request, $id){
        $card = Card::find($id);
        $card->update([
            'name' => $request->name,
            'nit' => $request->nit,
            'address' => $request->direccion,
            'phone' => $request->telefono,
            'movil' => $request->celular,
            'city_id' => $request->ciudad,
            'category_id' => $request->categoria,
            'start' => $request->apertura,
            'end' => $request->cierre,
            'description' => $request->descripcion,
        ]);
         

        return redirect()->route('viewCard', $card->id);
    }

    public function directory (){
        $cards = Card::where('id', '>', 0)->get();
        return view('directory', compact('cards'));
    }
}
