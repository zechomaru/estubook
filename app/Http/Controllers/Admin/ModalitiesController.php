<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Modality;

class ModalitiesController extends Controller
{

    public function index()
    {
      $modalities = Modality::paginate(10);
      return view('admin.modalities.index')->with('modalities' , $modalities);
    }

    public function create()
    {
      return view('admin.modalities.create');
    }

    public function store(Request $request)
    {
        $request['name'] = strtolower($request['name']);
      $this->validate($request, [
              'name' => 'required|max:255|unique:modalities',
          ]);
        Modality::create($request->all());
        return redirect()->route('admin.modalidades.index')->with('status', 1)->with("message", "Se ha guardar con exito");
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
    public function edit($id)
    {
        $modality = Modality::findorfail($id);
        return view('admin.modalities.edit')->with('modality', $modality);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CategoryRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $modality = Modality::findorfail($id);

        $this->validate($request, [
                'name' => 'required|max:255|unique:type_academies',
            ]);

        $modality->update($request->all());

        return redirect()->route('admin.modalidades.index')->with('status', 1)->with("message", "Se ha guardar con exito");
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