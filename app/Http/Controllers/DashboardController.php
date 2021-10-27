<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $this->authorize('admin');

        $jumlahSuara = DB::select('SELECT COUNT(nim) as jumlahSuara FROM users');
        $belumVoting = DB::select('SELECT COUNT(status) as jumlahbelumvoting FROM users WHERE status = 2 GROUP BY status');
        $suaraMasuk = DB::select('SELECT COUNT(nim) as suaramasuk FROM users WHERE status = 1');

        return view('test.dashboard.index',[
            'users' => User::all(),
            'jumlahSuara' => $jumlahSuara,
            'belumVoting' => $belumVoting,
            'suaraMasuk' => $suaraMasuk
        ]);
    }

    public function chartjs(){
        $calon = Kandidat::select(DB::raw('COUNT(jumlah_suara) as count'))
                ->where('id',1);
    }
}
