<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;
use Illuminate\Support\Facades\DB;

class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lista()
    {
        $producto =DB::table('producto')
        ->select('*')
        ->paginate(5);
        return view('lista', ['producto' => $producto]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
   {
        $productoNuevo = new producto();
        $productoNuevo->Id = $request->inputId3;
        $productoNuevo->Name = $request->inputName3;
        $productoNuevo->Price = $request->inputPrice3;
        $productoNuevo->State = 1;
        $productoNuevo->Created_at = $request->inputCreated_at3;
        $productoNuevo->Updated_at = $request->inputUpdated_at3;

        $productoNuevo->save();

        return redirect('lista');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productoNuevo = new producto();
        $productoNuevo->Id = $request->inputId3;
        $productoNuevo->Name = $request->inputName3;
        $productoNuevo->Price = $request->inputPrice3;
        $productoNuevo->State = 1;
        $productoNuevo->Created_at = $request->inputCreated_at3;
        $productoNuevo->Updated_at = $request->inputUpdated_at3;

        $productoNuevo->save();

        return redirect('lista');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
