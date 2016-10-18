<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Period;

class PeriodsController extends Controller {

	public function index(Request $request)
	{
		$query = $request->input('id');


		if(!$query && $query == '') return Response::json(array(), 400);

		$periods = Period::where('career_id', '=', $query)
			->orderBy('name','asc')
			->get();

		if (count($periods) > 0) {
			# code...
			return response()->json([
				'data' => $periods
				]);
		}else{
			return response()->json([],403);
		}


	}
}