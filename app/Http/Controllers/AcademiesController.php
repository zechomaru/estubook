<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Academy;

class AcademiesController extends Controller
{

    public function search($slug)
    {
      $academy = Academy::where('slug', '=', $slug)->first();
      return view('estubook.academies', ['academy' => $academy]);
    }

    public function create()
    {
      return view('admin.academies.create');
    }

    public function store(Request $request)
    {
      $this->validate($request, [
              'name' => 'required|max:255',
          ]);
        Academy::create($request->all());
        return redirect()->route('admin.tiposdeacademia.index');
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
        $Academy = Academy::findorfail($id);
        return view('admin.academies.edit')->with('Academy', $Academy);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CategoryRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $category = $this->categoryRepository->findorfail($id);

        $category->update($request->all());

        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Academy::find($id)->delete();

        return redirect()->route('admin.academias.index');
    }

    private function _getCategoryOptions() {

        $options =  Collection::make(['' => 'please select'])->toArray() +  $this->categoryRepository->lists('name','id')->toArray();

        return $options;
    }

}