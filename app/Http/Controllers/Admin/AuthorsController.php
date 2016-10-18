<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Author;

class AuthorsController extends Controller
{

    public function index()
    {
      $authors = Author::paginate(10);
      return view('admin.authors.index')->with('authors' , $authors);
    }

    public function create()
    {
      return view('admin.authors.create');
    }

    public function store(Request $request)
    {
        if ($request['birthdate']) {
            $arr = explode('/', $request['birthdate']);
            $date = [];
            $val = ['day', 'month', 'year'];

            for ($i=0; $i < count($arr) ; $i++) { 
                $date[$val[$i]] = $arr[$i];
            }
            $request['birthdate'] = $date['year'] . '-' . $date['month'] . '-' . $date['day'];
        }
      $this->validate($request, [
              'name' => 'required|max:255',
              'lastname' => 'required|max:255'
          ]);
        Author::create($request->all());
        return redirect()->route('admin.autores.index')->with('status', 1)->with("message", "Se ha guardar con exito");
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
        $author = Author::findorfail($id);
        return view('admin.authors.edit')->with('author', $author);
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
        $author = Author::findorfail($id);

          if ($request['birthdate']) {
              $arr = explode('/', $request['birthdate']);
              $date = [];
              $val = ['day', 'month', 'year'];

              for ($i=0; $i < count($arr) ; $i++) { 
                  $date[$val[$i]] = $arr[$i];
              }
              $request['birthdate'] = $date['year'] . '-' . $date['month'] . '-' . $date['day'];
          }
        $this->validate($request, [
                'name' => 'required|max:255',
                'lastname' => 'required|max:255'
            ]);

        $author->update($request->all());

        return redirect()->route('admin.autores.index');
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

        return redirect()->route('admin.autores.index');
    }


}