<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\EmployeesInfo;

class TravelRequest extends Model
{
	use SoftDeletes;
	protected $dates = ['deleted_at'];
	protected $fillables = ['travel_purpose','travel_date_time','travel_destination','travel_airline_carrier','travel_no','trave_remarks',];
    public function employees()
    {
    	return $this->belongsToMany('App\EmployeesInfo');
    }
}
