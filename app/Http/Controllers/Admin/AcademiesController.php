<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Academy;
use App\Models\TypeAcademy;
use Storage;
use Image;

class AcademiesController extends Controller
{

    public function index()
    {

      $academies = Academy::paginate(10);
      return view('admin.academies.index')->with('academies' , $academies);

    }

    public function create()
    {

        if (count(TypeAcademy::all())) {
            return view('admin.academies.create');
        }
        return view('admin.academies.createfail');

    }

    public function store(Request $request)
    {

      $this->validate($request, [
              'name' => 'required|max:255',
              'type_academy_id' => 'required|max:255|numeric',
              'phone' => 'numeric',
          ]);

      if ($request->file('avatar')) {
          $academy = Academy::create([
            'type_academy_id'  => $request['type_academy_id'],
            'name' => $request['name'],
            'avatar' => str_slug(strtolower($request['name']), '-') . '.png',
            'description' => $request['description'],
            'direction' => $request['direction'],
            'zip_code' => $request['zip_code'],
            'phone' => $request['phone'],
            'slug' => str_slug(strtolower($request['name']), '-'),
            ]);
      }else{
        $request['slug'] = str_slug(strtolower($request['name']), '-');
        $academy = Academy::create($request->all());
      }
        if ($request->file('avatar')) {
            $avatar = Image::make($request->file('avatar')->getRealPath())->encode('png', 75);
            if ($academy) {
                Storage::deleteDirectory('public/academy/' . $academy->id);
                $nombre = $academy->avatar;
                $avatarUpload = Storage::put( 'public/academy/'. $academy->id .'/original/'. $nombre, $avatar);
                $avatar->resize(300, 300);
                $avatar->save();
                $avatarUpload = Storage::put( 'public/academy/'. $academy->id .'/medium/'. $nombre, $avatar);
                $avatar->resize(100, 100);
                $avatar->save();

                $avatarUpload = Storage::put( 'public/academy/'. $academy->id .'/thumb/'. $nombre, $avatar);
            }
        }
        return redirect()->route('admin.academias.index')->with("message", "Se ha guardar con exito");

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
        $academy = Academy::findorfail($id);
        return view('admin.academies.edit')->with('academy', $academy);
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
        $academy = Academy::findorfail($id);

        $this->validate($request, [
                'name' => 'required|max:255',
                'type_academy_id' => 'required|max:255|numeric',
                'phone' => 'numeric',
            ]);


            $academy->update([
              'type_academy_id'  => $request['type_academy_id'],
              'name' => $request['name'],
              'avatar' => str_slug(strtolower($request['name']), '-') . '.png',
              'description' => $request['description'],
              'direction' => $request['direction'],
              'zip_code' => $request['zip_code'],
              'phone' => $request['phone'],
              'slug' => str_slug(strtolower($request['name']), '-'),
              ]);
          if ($request->file('avatar')) {
              Storage::deleteDirectory('public/academy/' . $academy->id);
              $avatar = Image::make($request->file('avatar')->getRealPath())->encode('png', 75);
                  $nombre = $academy->avatar;
                  $avatarUpload = Storage::put( 'public/academy/'. $academy->id .'/original/'. $nombre, $avatar);
                  $avatar->resize(300, 300);
                  $avatar->save();
                  $avatarUpload = Storage::put( 'public/academy/'. $academy->id .'/medium/'. $nombre, $avatar);
                  $avatar->resize(100, 100);
                  $avatar->save();

                  $avatarUpload = Storage::put( 'public/academy/'. $academy->id .'/thumb/'. $nombre, $avatar);

          }


        return redirect()->route('admin.academias.index')->with("message", "Se ha guardar con exito");
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

        return redirect()->route('admin.academias.index')->with("message", "Se Elimino con Exito.!");
    }

    private function _getCategoryOptions() {

        $options =  Collection::make(['' => 'please select'])->toArray() +  $this->categoryRepository->lists('name','id')->toArray();

        return $options;
    }

}