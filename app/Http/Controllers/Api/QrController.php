<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Qr;
use App\Http\Resources\QrResource;

use Illuminate\Support\Facades\DB;

class QrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qr_token = DB::table('qrs')->pluck('token');
        return $qr_token;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('token');
        $qr_token = DB::table('qrs')->where('token', $name)->where('confirmed', 0)->count();

        if ($qr_token == 1) {
            DB::table('qrs')->where('token', $name)->update(['confirmed' => 1]);
            return response('Правильный QR код', 200)
            ->header('Content-Type', 'text/plain');;
        } else {
            return response('Неправильный QR код', 200)
            ->header('Content-Type', 'text/plain');;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        
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
