<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnnouncementController extends Controller
{
    public function index(){
        // $kandidats = DB::table('kandidat')->max('jumlah_suara');
        // $kandidats = DB::table('kandidat')->select('name')->max('jumlah_suara');
        $kandidat_max = DB::table('kandidat')->max('jumlah_suara');
        $kandidats = DB::table('kandidat')->where('jumlah_suara', $kandidat_max)->first();
        $wakKandidats_max = DB::table('kandidat_wakil')->max('jumlah_suara');
        $wakKandidats = DB::table('kandidat_wakil')->where('jumlah_suara', $wakKandidats_max)->first();
        return view('pages.announcement',[
            'kandidats' => $kandidats,
            'wakKandidats' => $wakKandidats
        ]);
    }
}
