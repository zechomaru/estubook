<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\TypeAcademy;

class TypeAcademiesController extends Controller
{

    public function index()
    {
      $typeAcademies = TypeAcademy::paginate(10);
      return view('admin.typeAcademies.index')->with('typeAcademies' , $typeAcademies);
    }

    public function create()
    {
      return view('admin.typeAcademies.create');
    }

    public function store(Request $request)
    {
      $this->validate($request, [
              'name' => 'required|max:255|unique:type_academies',
          ]);
        TypeAcademy::create($request->all());
        return redirect()->route('admin.tiposdeacademia.index')->with('status', 1)->with("message", "Se ha guardar con exito");
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
        $typeAcademy = TypeAcademy::findorfail($id);
        return view('admin.typeAcademies.edit')->with('typeAcademy', $typeAcademy);
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
        $typeAcademy = TypeAcademy::findorfail($id);

        $this->validate($request, [
                'name' => 'required|max:255|unique:type_academies',
            ]);

        $typeAcademy->update($request->all());

        return redirect()->route('admin.tiposdeacademia.index')->with('status', 1)->with("message", "Se ha guardar con exito");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TypeAcademy::find($id)->delete();

        return redirect()->route('admin.tiposdeacademia.index');
    }


}