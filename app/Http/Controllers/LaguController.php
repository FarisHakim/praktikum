<?php

namespace App\Http\Controllers;
use App\Models\Lagu;
use Illuminate\Http\Request;

class LaguController extends Controller
{
     public function index()
    {
        $id = request()->query('id');
        
        if($id) {
            $lagu = Lagu::find($id);
            if($lagu) {
                return response()->json($lagu);
            } else {
                return response()->json(['message' => 'Lagu tidak ditemukan'], 404);
            }
        }
        
        $lagu = Lagu::all();
        return response()->json($lagu);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lagu = Lagu::create($request->all());
        return response()->json(['message' => 'Lagu berhasil ditambahkan', 'data' => $lagu], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lagu = Lagu::find($id);
        if($lagu){
            return response()->json($lagu);
        } else {
            return response()->json(['message' => 'Lagu tidak ditemukan'], 404);
        }
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
        $lagu = Lagu::find($id);
        if($lagu){
            $lagu->update($request->all());
            return response()->json(['message' => 'Lagu berhasil diupdate']);
        } else {
            return response()->json(['message' => 'Lagu tidak ditemukan'], 404);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id){
    //     $lagu = Lagu::find($id);
    //     if($lagu){
    //         $lagu->delete();
    //         return response()->json(['message' => 'Lagu berhasil dihapus']);
    //     } else {
    //         return response()->json(['message' => 'Lagu tidak ditemukan'], 404);
    //     }
    // }
}
