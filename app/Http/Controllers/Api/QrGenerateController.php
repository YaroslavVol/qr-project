<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Qr;
use App\Http\Resources\QrResource;

use Illuminate\Support\Facades\DB;

class QrGenerateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     // Save QR
    public function store(Request $request)
    {
        $name1 = $request->input('token1');
        $name2 = $request->input('token2');
        $name3 = $request->input('token3');
        $name4 = $request->input('token4');
        $name5 = $request->input('token5');
        $name6 = $request->input('token6');
        $name7 = $request->input('token7');
        $name8 = $request->input('token8');
        $name9 = $request->input('token9');
        $name10 = $request->input('token10');
        DB::table('qrs')->insert([
            ['token' => $name1],
            ['token' => $name2],
            ['token' => $name3],
            ['token' => $name4],
            ['token' => $name5],
            ['token' => $name6],
            ['token' => $name7],
            ['token' => $name8],
            ['token' => $name9],
            ['token' => $name10],
        ]);
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
