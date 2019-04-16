<?php

namespace App\Http\Controllers;

use App\Connection;
use Illuminate\Http\Request;
use Illuminate\Config;
use Illuminate\Support\Facades\DB;
use Response;
use \App\Host;

class ConnectionsController extends Controller
{

	/**
	 * Handle form data and insert new connection
	 *
	 * @return void
	 */
	public function create(Request $request)
	{

//	    dd($request);

	    $connection = new Connection;

        $connection->host_id  = $request->get('host');
        $connection->user     = $request->get('mysql_user');
        $connection->password = $request->get('mysql_password');
        $connection->site_name   = $request->get('display_name');

        $connection->save();

        $request->session()->flash('success', $request->get('display_name') . ' added!');

//        $this->display();
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

//		$cons = App\connection;
		$host = new Host;
		$hosts = $host->withconnections();

		return view('main', compact('hosts'));
	}

//	public function connect() {
//
//	}

	public function query(Request $request) 
	{
		if($request->isMethod('post'))
		{

			//if we get a error catch it, format it and pass it back in the ajax / if not return true
			try 
			{ 

#TO-DO  - update the db params in config and use the posted ones to run the query

//				var_dump($request['database']);

                //select datapase options from database
                $site_to_query = Connection::with('host')->where('site_name', $request['database'])->first();


                //set database params in config
                Config([
                    'database.connections.site_database' => [
                        'driver' => 'mysql',
                        'host'  => $site_to_query->host->ip_address,
                        'port' => '3306',
                        'database' => $site_to_query->user,
                        'username' => $site_to_query->user,
                        'password' => $site_to_query->password,
                    ]
                ]);

//               DB::purge($site_to_query->site_database);

//               dump(DB::connection('site_database'));
                $response = Response::json(DB::connection('site_database')->statement($request['sql']));

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
