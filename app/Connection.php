<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{
    //
    public function getActive()
    {
		

	}

    /**
     * Get the host associated with the connection
     */
    public function host()
    {
        return $this->belongsTo('App\host');
    }


}
