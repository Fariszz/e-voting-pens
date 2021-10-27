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

        return view('test.index', compact('kandidats'));
    }

    public function addVote($id){

        $user_id = Auth::user()->nim;

        DB::table('users')
        ->where('nim', $user_id)
        ->update(array('status' => 2));

        DB::table('kandidat')
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

        return redirect('vote')
        ->with('delete', 'Berhasil Menghapus Vote');
    }
}
