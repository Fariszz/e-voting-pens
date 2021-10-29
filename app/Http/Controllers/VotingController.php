<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class VotingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $kandidats = DB::table('kandidat')->get();

        $wakKandidats = DB::table('kandidat_wakil')->get();

        // return view('test.index', compact('kandidats'));
        return view('pages.vote',[
            'kandidats' => $kandidats,
            'wakKandidats' => $wakKandidats
        ]);
        // return view('test.newVote',[
        //     'kandidats' => $kandidats,
        //     'wakKandidats' => $wakKandidats
        // ]);
    }

    public function addVoteKetua($id){

        $user_id = Auth::user()->nim;

        DB::table('users')
        ->where('nim', $user_id)
        ->update(array('status_ketua' => 2));

        DB::table('kandidat')
        ->where('id', $id)
        ->increment('jumlah_suara');


        return redirect('vote')
        ->with('success', 'Berhasil Melakukan Vote');
    }

    public function addVoteWakil($id){

        $user_id = Auth::user()->nim;

        DB::table('users')
        ->where('nim', $user_id)
        ->update(array('status_wakil' => 2));

        DB::table('kandidat_wakil')
        ->where('id', $id)
        ->increment('jumlah_suara');

        return redirect('vote')
        ->with('success', 'Berhasil Melakukan Vote');
    }

    public function deleteVote($id){

        $user_id = Auth::user()->nim;

        DB::table('users')
        ->where('nim', $user_id)
        ->update(array('status' => 1));


        DB::table('kandidat')
        ->where('id', $id)
        ->decrement('jumlah_suara');

        DB::table('users')
        ->where('nim', $user_id)
        ->update(array('status_ketua' => 1));


        DB::table('kandidat_wakil')
        ->where('id', $id)
        ->decrement('jumlah_suara');

        return redirect('vote')
        ->with('delete', 'Berhasil Menghapus Vote');
    }
}
