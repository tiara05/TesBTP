<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Metode;
use Illuminate\Http\Request;
use App\Helpers\ApiFormatter;  

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function read()
    {
        $data = Activity::all();
        $nama_metode = array();

        for ($i = 0;$i < count($data);$i++){
            $nama_metode = Metode::where('id', $data[$i]->id_metode)->value('nama_metode');
            $data[$i]->nama_metode=$nama_metode;
        };

        return view('read')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $metode = Metode::all();
        
        return view('create', compact('metode'));
    }

    public function createmetode()
    {   
        return view('createmetode');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $request->validate([
                'id_metode' => 'required',
                'nama_event' => 'required',
                'tanggal_pelaksanaan' => 'required',
                'batas_pelaksanaan' => 'required',
            ]);

            $activity = Activity::create([
                'id_metode' => $request->id_metode,
                'nama_event' => $request->nama_event,
                'tanggal_pelaksanaan' => $request->tanggal_pelaksanaan,
                'batas_pelaksanaan' => $request->batas_pelaksanaan,
            ]);

    }

    public function storemetode(Request $request)
    {
            $request->validate([
                'nama_metode' => 'required',
            ]);

            $metode = Metode::create([
                'nama_metode' => $request->nama_metode,
            ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Activity::findOrFail($id);

        return view('edit')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
            $request->validate([
                'nama_event' => 'required',
                'tanggal_pelaksanaan' => 'required',
                'batas_pelaksanaan' => 'required',
            ]);

            $activity = Activity::findOrFail($id);

            $activity->update([
                'nama_event' => $request->nama_event,
                'tanggal_pelaksanaan' => $request->tanggal_pelaksanaan,
                'batas_pelaksanaan' => $request->batas_pelaksanaan
            ]);
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $activity = Activity::findOrFail($id);

            $data = $activity->delete();
    }
}
