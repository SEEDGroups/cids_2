<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class about extends Model
{
	protected $fillable=['email', 'oPhone', 'address', 'fax', 'pobox', 'postalCode', 'facebook', 'twitter', 'pinterest', 'linkedin', 'googleplus'];
    public function getData(){
    	$datas = about::get();
    	return $datas;
    }
    public function updatecids($request, $id){
    	$oldData = about::find($id);
    	return $oldData->publish($request);
    }
    public function publish($request){
        $data = array();
        $data['email'] = $request->email;
        $data['oPhone'] = $request->oPhone;
        $data['address'] = $request->address;
        $data['fax'] = $request->fax;
        $data['pobox'] = $request->pobox;
        $data['postalCode'] = $request->postalCode;
        $data['facebook'] = $request->facebook;
        $data['twitter'] = $request->twitter;
        $data['pinterest'] = $request->pinterest;
        $data['linkedin'] = $request->linkedin;
        $data['googleplus'] = $request->googleplus;
    	return $this->fill($data)->save();
    }
    
}
