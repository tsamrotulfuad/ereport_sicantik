<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permohonan;

class PencarianController extends Controller
{
    public function cari(Request $request)
    {       
       if($request->ajax())
       {
           $output="";
           $hasildata = Permohonan::where('no_permohonan', 'like',  "$request->data")->get();
           
           if($hasildata !== 0){
                foreach ($hasildata as $key => $hasilcari) {
                    $output.='<div class="card p-2">'.
                                '<div class="card-body">'.
                                    '<p class="card-text">'.
                                    'Berkas permohonan izin ' . $hasilcari->jenis_izin . ' anda dengan no. permohonan ' . $hasilcari->no_permohonan . ' telah selesai diterbitkan dan silahkan mengunduhnya dengan menekan tombol unduh dibawah.'.
                                    '</p>'.
                                    '<a href="'. $hasilcari->link_izin .'" class="btn btn-primary">Unduh</a>'.
                                '</div>'.
                                '</div>';
                }

                return Response($output);
                }
        }
    }
}
