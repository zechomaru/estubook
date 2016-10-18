<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Period;

class PeriodsController extends Controller
{

    public function index()
    {
      $periods = Period::paginate(10);
      return view('admin.periods.index')->with('periods' , $periods);
    }

    public function create()
    {
      return view('admin.periods.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
                'name' => 'required|max:255',
            ]);
          Period::create($request->all());
          return redirect()->route('admin.carreras.index');
    }

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
    public function edit(Request $request,$id)
    {
        $period = Period::findorfail($id);
        $period->update($request->all());
          return redirect()->route('admin.carreras.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CategoryRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         $period = Period::findorfail($request->id);
        $period->update($request->all());
          return redirect()->route('admin.carreras.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Modality::find($id)->delete();

        return redirect()->route('admin.modalidades.index')->with('status', 1)->with("message", "Se Elimino con Exito.!");
    }


}