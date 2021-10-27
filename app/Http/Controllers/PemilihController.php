<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pemilih;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PemilihController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pemilih = DB::table('users')->paginate(10);

        return view('test.dashboard.admin.index', compact('pemilih'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('test.dashboard.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nim' => 'required',
            'name' => 'required',
            'password' => 'required',
            'email' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // return view('test.dashboard.admin.index');
        return redirect('/admin/voters');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pemilih  $pemilih
     * @return \Illuminate\Http\Response
     */
    public function show(Pemilih $pemilih)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemilih  $pemilih
     * @return \Illuminate\Http\Response
     */
    public function edit($user)
    {
        $User = User::where('nim', $user)->first();
        return view('test.dashboard.admin.edit', compact('User'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pemilih  $pemilih
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user)
    {
        $validatedData = $request->validate([
            'nim' => 'required',
            'name' => 'required',
            'password' => 'required',
            'email' => 'required'
        ]);

        // Pemilih::find($nim)->update($validatedData);
        Pemilih::where('nim', $user->nim)
        ->update($validatedData);

        return redirect('/admin/voters');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemilih  $pemilih
     * @return \Illuminate\Http\Response
     */
    public function destroy($nim)
    {
        $User = User::where('nim', $nim)->first();
        $User->delete();

        return redirect('/admin/voters');
    }

    public function search(Request $request){
        $keyword = $request->search;
        $pemilih = User::where('name','like','%'.$keyword.'%')->paginate(10);

        return view('test.dashboard.admin.index', compact('pemilih'));
    }


}
