<?php

namespace App\Http\Controllers;

//Importamos el modelo
use App\Models\Item;

//Importamos Carbon para obtener la fecha
use Illuminate\Support\Carbon;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //regresaremos todos los items en todo list
        return Item::orderBy('created_at','DESC')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Guardar datos en item
        $newItem = new Item;
        $newItem->name = $request->item["name"]; //tomo la propiedad name de item
        $newItem->save();

        return $newItem;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Actualizaremos los datos
        $existingItem = Item::find($id);
        
        if($existingItem){
            $existingItem->completed = $request->item["completed"] ? true : false; //verificamos si la tarea esta completada o no
            $existingItem->completed_at = $request->item["completed"] ? Carbon::now() : null;  
            $existingItem->save();

            return $existingItem;
        }; 
        return "Item not found";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         //Eliminaremos un item
         $existingItem = Item::find($id);
        
         if($existingItem){
                $existingItem->delete();
 
             return "Item successfully deleted";
         }; 
         return "Item not found";
    }
}
