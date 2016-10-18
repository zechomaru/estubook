<?php

/**
 * ApiSearchController is used for the "smart" search throughout the site.
 * it returns and array of items (with type and icon specified) so that the selectize.js plugin can render the search results properly
 **/
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Academy;

class SearchController extends Controller {

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

	public function index($query)
	{

		if(!$query && $query == '') return Response::json(array(), 400);

		$academies = Academy::where('name','like','%'.$query.'%')
			->orderBy('name','asc')
			->take(5)
			->get(array('name', 'slug'))->toArray();

		#$categories = Category::where('name','like','%'.$query.'%')
		#	->has('products')
		#	->take(5)
		#	->get(array('slug', 'name'))
		#	->toArray();

		// Data normalization
		#$categories = $this->appendValue($categories, url('img/icons/category-icon.png'),'icon');

		$academies 	= $this->appendURL($academies, 'academia');
		// #$categories  = $this->appendURL($categories, 'categories');

		// // Add type of data to each item of each set of results
		// $academies = $this->appendValue($academies, 'academy', 'class');
		#$categories = $this->appendValue($categories, 'category', 'class');

		// Merge all data into one array
		$data = $academies;


		return response()->json([
		    'data' => $data,
		]);

	}
}