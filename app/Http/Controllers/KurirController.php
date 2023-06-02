<?php

namespace App\Http\Controllers;

use App\Models\Kurir;
use Illuminate\Http\Request;

class KurirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


    public function store(Request $request)
    {
        $Kurir = Kurir::create([
            'kode_lokasi' => $request->kode_lokasi,
            'nama_lokasi' => $request->nama_lokasi,
            'id' => $request->id,
        ]);
        return response()->json([
            'data' => $Kurir
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Kurir $kurir)
    {
        return response()->json([
            'data' => $kurir
        ]);
    }

    public function update(Request $request, Kurir $kurir)
    {
        $kurir->id = $request->id;
        $kurir->kode_lokasi = $request->kode_lokasi;
        $kurir->nama_lokasi = $request->nama_lokasi;
        $kurir->save();

        return response()->json([
            'data' => $kurir
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kurir $kurir)
    {
        $kurir->delete();
        return response()->json([
            'message' => 'Kurir Delete'
        ], 204);
    }
}
