<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function category_name(Request $request){

		$term = $request['term'];
		
		$results = array();
		
		$queries = \App\Models\CategoryDetail::where('category_name', 'LIKE', '%'.$term.'%')->with('units.measures')->with('units.uom')->take(5)->get();

		foreach ($queries as $key => $value)
		{
			$queries[$key]['value'] = $value->category_name;
		}
		
		return \Response::json($queries);
	}

	public function purchase_category_name(Request $request){

		$term = $request['term'];
		
		$results = array();
		
		$queries = \App\Models\CategoryDetail::where('category_name', 'LIKE', '%'.$term.'%')->take(5)->get();

		// dd($queries->toarray());

		$data = array();

		foreach ($queries as $key => $value)
		{
			$data[$key]['id'] = $value->id;
			$data[$key]['value'] = $value->category_name;

			foreach ($value->stocks as $key1 => $val1) {

				// $data[$key]['stocks'][$val1->stock_id]['dimention'] = null;

				foreach ($val1->stock_unit as $key2 => $val2) {

					$data[$key]['stocks'][$val1->stock_id]['purchase_cost'] = $val1->purchase_cost;
					$data[$key]['stocks'][$val1->stock_id]['selling_cost'] = $val1->selling_cost;
					$data[$key]['stocks'][$val1->stock_id]['opening_stock'] = $val1->stock_quantity;
					$data[$key]['stocks'][$val1->stock_id]['title'] = $val1->stock_name;	

					
				}
				
			}
		}
// dd($data);

		return \Response::json($data);
	}

	public function supplier_name(Request $request){

		$term = $request['term'];
		
		$results = array();
		
		$queries = \App\Models\SupplierDetail::where('supplier_name', 'LIKE', '%'.$term.'%')->take(5)->get();

		foreach ($queries as $key => $value)
		{
			$queries[$key]['value'] = $value->supplier_name;
		}
		
		return \Response::json($queries);
	}

	public function stock_name(Request $request){

		$term = $request['term'];
		
		$results = array();
		
		$queries = \App\Models\StockDetail::where('stock_name',$term)->take(5)->get();

		foreach ($queries as $key => $value)
		{
			$queries[$key]['value'] = $value->stock_name;
		}
		
		return \Response::json($queries);
	}

	public function customer_name(Request $request){

		$term = $request['term'];
		
		$results = array();
		
		$queries = \App\Models\CustomerDetail::where('customer_name', 'LIKE', '%'.$term.'%')->take(5)->get();

		foreach ($queries as $key => $value)
		{
			$queries[$key]['value'] = $value->customer_name;
		}
		
		return \Response::json($queries);
	}

	public function search_shop_name(Request $request)
	{
		$term = $request['term'];
		
		$results = array();
		
		$queries = \App\Models\ShopsAndBranches::where('customer_name', 'LIKE', '%'.$term.'%')->take(5)->get();

		foreach ($queries as $key => $value)
		{
			$queries[$key]['value'] = $value->customer_name;
		}
		
		return \Response::json($queries);
	}

	public function check_stock_name(Request $request)
	{
		$term = $request['term'];

	}
}
