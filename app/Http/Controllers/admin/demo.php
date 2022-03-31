<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class demo extends Controller
{
    public function index()
    {
        return view('demo');
    }
    public function doUpload(Request $request)
    {




           //Kiểm tra file
           if ($request->hasFile('filesTest'))
            {
                $file = $request->filesTest;
                $file_move= $file->move('upload', $file->getClientOriginalName());

                $file_local = "./upload/".$file->getClientOriginalName();
                $file_name = $file->getClientOriginalName();
                $file = file_get_contents($file_local);
                $url = 'https://techy.com.vn/wp-json/wp/v2/media/';
                $ch = curl_init();
                $username = 'admin';
                $password = 'Buildy@2021';
                curl_setopt( $ch, CURLOPT_URL, $url );
                curl_setopt( $ch, CURLOPT_POST, 1 );
                curl_setopt( $ch, CURLOPT_POSTFIELDS, $file );
                curl_setopt( $ch, CURLOPT_HTTPHEADER, [
                'Content-Disposition: form-data; filename='.$file_name,
                'Authorization: Basic ' . base64_encode( $username . ':' . $password ),
                ] );
                echo base64_encode( $username . ':' . $password );
                $result = curl_exec( $ch );
                curl_close( $ch );
                var_dump( json_decode( $result ) );

            }


    }


}
