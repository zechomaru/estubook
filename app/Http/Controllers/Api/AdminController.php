<?php

/**
 * ApiSearchController is used for the "smart" search throughout the site.
 * it returns and array of items (with type and icon specified) so that the selectize.js plugin can render the search results properly
 **/
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Period;
use App\Models\Book;

class AdminController extends Controller {




	public function books(Request $request)
	{


		$books = Book::all();

		if (count($books) > 0) {
			# code...
			return response()->json([
				'data' => $books
				]);
		}else{
			return response()->json([],403);
		}

	}

	public function addBooks( Request $request)
	{
		$period = Period::findorfail($request->id);
		$book= $period->books()->where('book_id', $request->data)->get();



		if (count($book) == 1) {
			return response()->json([$book, "noooooo"], 200);
		}else{
			$period->books()->attach($request->data);
			if ($period) {
				return response()->json([], 200);
			}else{
				return response()->json([], 403);
			}
		}


		// $period->books()->attach($request->data);
		// 	if ($period) {
		// 		return response()->json([], 200);
		// 	}else{
		// 		return response()->json([], 403);
		// 	}

	}

	public function list(Request $request)
	{
		$books = Period::find($request->id)->books()->orderBy('title')->get();
		if ($books) {
				return response()->json([
					'data' => $books,
					], 200);
			}else{
				return response()->json([], 403);
			}
	}
}