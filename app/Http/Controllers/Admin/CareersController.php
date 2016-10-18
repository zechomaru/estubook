<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Career;

class CareersController extends Controller
{

    public function index()
    {
      $careers = Career::paginate(10);
      return view('admin.careers.index')->with('careers' , $careers);
    }

    public function create()
    {
      return view('admin.careers.create');
    }

    public function store(Request $request)
    {

        $request['name'] = strtolower($request['name']);

        $validate = Career::where('name', '=', $request['name'])->where('academy_id' , '=', $request['academy_id'])->count();
        if ($validate) {
            $this->validate($request, [
              'name' => 'required|max:255|unique:careers,name',
              'academy_id' => 'required|max:255|numeric',
              'modality_id' => 'required|max:255|numeric'
              ]);
        }else{
            $this->validate($request, [
              'name' => 'required|max:255|unique:careers,name',
              'academy_id' => 'required|max:255|numeric',
              'modality_id' => 'required|max:255|numeric'
              ]);
            Career::create($request->all());
            return redirect()->route('admin.carreras.index')->with('status', 1)->with("message", "Se ha guardar con exito");
        }

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
        $career = Career::findorfail($id);
        return view('admin.careers.edit')->with('career', $career);
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
        $career = Career::findorfail($id);

        $this->validate($request, [
                'name' => 'required|max:255|unique:type_academies',
            ]);

        $career->update($request->all());

        return redirect()->route('admin.carreras.index')->with('status', 1)->with("message", "Se ha guardar con exito");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        career::find($id)->delete();

        return redirect()->route('admin.carreras.index')->with('status', 1)->with("message", "Se Elimino con Exito.!");
    }


}