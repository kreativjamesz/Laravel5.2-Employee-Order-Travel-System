<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\TravelRequest;

class Employee extends Model
{
    use SoftDeletes;
    protected $table = 'employees';
	protected $dates = ['deleted_at'];
	protected $fillables = ['last_name','first_name','title_name','position_name','mobile_num','email_add','password','status',];
    public function travels()
    {
    	return $this->belongsToMany('App\TravelRequest');
    }
}
