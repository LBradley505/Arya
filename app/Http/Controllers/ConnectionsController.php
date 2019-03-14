<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use DB;
use Response;
use \App\Host;

class ConnectionsController extends Controller
{

	/**
	 * Handle form data and insert new connection
	 *
	 * @return void
	 */
	public function create()
	{

		$_POST['display_name'] = isset($_POST['display_name'])? "" : '';
		$_POST['display_name'] = isset($_POST['display_name'])? "" : '';
		$_POST['display_name'] = isset($_POST['display_name'])? "" : '';
		$_POST['display_name'] = isset($_POST['display_name'])? "" : '';



	}

	/**
	 * Main connections page with form and listings
	 *
	 * @return view
	 */
	public function display()
	{
		$host = new Host;
		$hosts = $host->getActive();

		$connections = $host->withConnections();
		return view('connections', compact('hosts','connections'));

	
	}

	public function getConnectionList() 
	{

#		$cons = App\connection;
		$host = new Host;
		$hosts = $host->withconnections();

		return view('main', compact('hosts'));
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

#TO-DO  - update the db params in config and use the posted ones to run the query

				var_dump($request['database']);
$response = Response::json(DB::connection($request['database'])->statement($request['sql']));
				dd($response);

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
