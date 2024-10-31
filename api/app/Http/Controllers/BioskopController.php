<?php

namespace App\Http\Controllers;

use App\Models\bioskop;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use LDAP\Result;

class BioskopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
        {
            $bioskop = Bioskop::all();
            $data['success'] = true;
            $data['message'] = 'Data bioskop berhasil diambil';
            return response()->json($data, Response::HTTP_OK);
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
        $validate = $request->validate([
            'nama' =>'required',
            'lokasi' =>'required',
            'kapasitas' => 'required'
        ]);

        $result = Bioskop::create($request->all());
        if($result){
            $data['success'] = true;
            $data['message'] = 'Data bioskop berhasil disimpan';
            $data['result'] = $result;
            return response()->json($data, Response::HTTP_CREATED);

        }

    }

    /**
     * Display the specified resource.
     */

        public function show(bioskop $bioskop)
        {
            $data['success'] = true;
            $data['message'] = 'Data bioskop berhasil ditemukan';
            return response()->json($data, Response::HTTP_OK);
        }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bioskop $bioskop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, bioskop $bioskop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bioskop $bioskop)
    {
        //
    }


}
