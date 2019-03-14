<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Host extends Model
{
    // This model will contain the diffrent server locations or 'groups'
    //connections will relate to a host and get the IP address from there rather than setting it specificlly, mainly for the purpose of front end structuring


    public function getActive()
    {
        //return all the hosts that are active
        return $this->where('is_active',1)->get();
    }

    public function withConnections()
    {
        //return all the hosts that are active with their connections
        return $this->where('is_active',1)->with('connections')->get();
    }


    public function connections()
    {
        return $this->hasMany('App\Connection');

    }

    //
}


