<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use DB;
use Response;

class ConnectionsController extends Controller
{

	public function getConnections() 
	{

		$cons = Config::get('database.connections');
 		return view('main', compact('cons'));
	}

	// public function connect() {

	// }

	public function query(Request $request) 
	{
		if($request->isMethod('post'))
		{

			//if we get a error catch it, format it and pass it back in the ajax / if not return true
			try 
			{ 
				$response = Response::json(DB::connection($request['database'])->statement($request['sql']));
			} catch(\Illuminate\Database\QueryException $ex) 
			{ 
				$response = json_encode($ex->getMessage());
			}

			return $response;


		} else 
		{
			//do other stuff
		}
	}

	public function viewSchema() 
	{



	}

	// public function close() {
		
	// }


	// protected function buildQuery() {

	// }


}
