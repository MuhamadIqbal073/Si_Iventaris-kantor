<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kodepenanggungjawab;;

class KodepenanggungjawabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kodepenanggungjawab = Kodepenanggungjawab::all();
        return view('pages.datamaster.kodepenanggungjawab.kodepenanggungjawab',['kodepenanggungjawab'=> $kodepenanggungjawab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.datamaster.kodepenanggungjawab.tambahkodepenanggungjawab');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kodepenanggungjawab = new Kodepenanggungjawab;
        $kodepenanggungjawab->kode_penanggung_jawab = $request->input('kode_penanggung_jawab');
 
        $kodepenanggungjawab->save();

        return redirect('kodepenanggungjawab');
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
        $kodepenanggungjawab = kodepenanggungjawab::find($id);
        return view('pages.datamaster.kodepenanggungjawab.editkodepenanggungjawab')->with('kodepenanggungjawab',$kodepenanggungjawab);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kodepenanggungjawab)
    {
        $ubah = Kodepenanggungjawab::findorfail($id_kodepenanggungjawab);

        $data = [
            'kode_penanggung_jawab' => $request['kode_penanggung_jawab'],
        ];
        $ubah->update($data);
        return redirect ('kodepenanggungjawab');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Kodepenanggungjawab $kodepenanggungjawab)
    {
        $kodepenanggungjawab->delete();
        return redirect ('kodepenanggungjawab');

    }
}
