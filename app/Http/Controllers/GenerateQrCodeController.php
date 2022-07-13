<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

class GenerateQrCodeController extends Controller
{


    public function generate ()
    {
        // return $data;
    }

    public function generateId ($id)
    {
        $data = DB::table('qrs')->where('id', $id)->value('token');
        $qrcode = QrCode::size(400)->generate($data);
        return view('home',compact('qrcode'));
    }
}
