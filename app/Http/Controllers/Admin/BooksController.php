<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Book;
use Storage;
use Image;

class BooksController extends Controller
{

    public function index()
    {
      $books = Book::paginate(10);
      return view('admin.books.index')->with('books' , $books);
    }

    public function create()
    {
            return view('admin.books.create');
    }

    public function store(Request $request)
    {
      $this->validate($request, [
              'title' => 'required|max:255',
              'price' => 'required|',
              'isbn' => 'required|numeric|unique:books,isbn',
          ]);
      if ($request->file('avatar')) {
          $book = Book::create([
            'title' => $request['title'],
            'price' => $request['price'],
            'number_page' => $request['number_page'],
            'year_publication' => $request['year_publication'],
            'isbn' => $request['isbn'],
            'edition' => $request['edition'],
            'observations' => $request['observations'],
            'avatar' => str_slug($request['title'], '-') . '.png',
            ]);
      }else{
        $book = Book::create($request->all());
      }

      if ($request->file('avatar')) {
          $avatar = Image::make($request->file('avatar')->getRealPath())->encode('png', 75);
          if ($book) {
              $nombre = $book->avatar;
              $avatarUpload = Storage::put( 'public/book/'. $book->id .'/original/'. $nombre, $avatar);
              $avatar->resize(300, 300);
              $avatar->save();
              $avatarUpload = Storage::put( 'public/book/'. $book->id .'/medium/'. $nombre, $avatar);
              $avatar->resize(100, 100);
              $avatar->save();

              $avatarUpload = Storage::put( 'public/book/'. $book->id .'/thumb/'. $nombre, $avatar);
              $authors = $request->get('authors');
              foreach ($authors as $key) {
                $book->authors()->attach($key);
            }
          }
      }


      return redirect()->route('admin.libros.index');
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
        $book = Book::findorfail($id);
        return view('admin.books.edit')->with('book', $book);
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
        $book = Book::findorfail($id);

        $this->validate($request, [
                'title' => 'required|max:255',
                'price' => 'required|',
                'isbn' => 'unique:books,isbn,'.$book->id,
            ]);

            $book->update([
              'title' => $request['title'],
              'price' => $request['price'],
              'number_page' => $request['number_page'],
              'year_publication' => $request['year_publication'],
              'isbn' => $request['isbn'],
              'edition' => $request['edition'],
              'observations' => $request['observations'],
              'avatar' => str_slug($request['title'], '-') . '.png',
              ]);


        if ($request->file('avatar')) {
            Storage::deleteDirectory('public/book/' . $book->id);
            $avatar = Image::make($request->file('avatar')->getRealPath())->encode('png', 75);
            $nombre = $book->avatar;
            $avatarUpload = Storage::put( 'public/book/'. $book->id .'/original/'. $nombre, $avatar);
            $avatar->resize(300, 300);
            $avatar->save();
            $avatarUpload = Storage::put( 'public/book/'. $book->id .'/medium/'. $nombre, $avatar);
            $avatar->resize(100, 100);
            $avatar->save();

                $avatarUpload = Storage::put( 'public/book/'. $book->id .'/thumb/'. $nombre, $avatar);
        }
        if ($book) {
          $authors = $request->get('authors');
          if ($request->get('authors')) {
           $book->authors()->detach();
            foreach ($authors as $key) {

              $book->authors()->attach($key);
            }
          }
        }

      return redirect()->route('admin.libros.index');

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