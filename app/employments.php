<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employments extends Model
{
	protected $fillable =['name'];
    public function getData(){
    	return $this->get();
    }
    public function publish($request){
    	$data = array();
    	$data['name'] = $request->name;
    	return $this->fill($data)->save();
    }
}
