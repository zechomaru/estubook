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

class BooksController extends Controller {

	public function appendValue($data, $type, $element)
	{
		// operate on the item passed by reference, adding the element and type
		foreach ($data as $key => & $item) {
			$item[$element] = $type;
		}
		return $data;		
	}
		
	public function appendURL($data, $prefix)
	{
		// operate on the item passed by reference, adding the url based on slug
		foreach ($data as $key => & $item) {
			$item['url'] = url($prefix.'/'.$item['slug']);
		}
		return $data;		
	}

	public function index(Request $request)
	{
		$query = $request->input('id');


		if(!$query && $query == '') return Response::json(array(), 400);

		$books = Period::find($query)->books()->getRelatedIds();

		if (count($books) > 0) {
			# code...
			return response()->json([
				'data' => $books
				]);
		}else{
			return response()->json([],403);
		}



	}

	public function indexBooks(Request $request)
	{
		$query = $request->input('id');


		if(!$query && $query == '') return Response::json(array(), 400);

		$books = Period::find($query)->books()->get();

		if (count($books) > 0) {
			# code...
			return response()->json([
				'data' => $books
				]);
		}else{
			return response()->json([],403);
		}



	}
}