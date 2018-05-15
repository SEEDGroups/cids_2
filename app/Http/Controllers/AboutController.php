<?php

namespace App\Http\Controllers;

use App\about;
use Illuminate\Http\Request;
use App\Http\Requests\aboutCids;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $aboutCid=null;

    public function __construct(about $aboutCid){
        $this->aboutCid = $aboutCid;
    }
    public function index()
    {
        $allData = $this->aboutCid->getData();
        return view('cms.about', compact('allData')); 
    }
    public function update(aboutCids $request, $id)
    {
        //data has been validated. Now update it
        $publish=$this->aboutCid->updatecids($request, $id);
        return redirect('/babout')->with('success', 'Data has been updated!!');
    }
}
