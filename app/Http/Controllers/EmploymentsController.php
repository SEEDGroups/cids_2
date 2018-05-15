<?php

namespace App\Http\Controllers;

use App\employments;
use Illuminate\Http\Request;

class EmploymentsController extends Controller
{
    private $employment = null;
    public function __construct(employments $employment){
    	$this->employment = $employment;
    }

    public function index(){
    	$datas = $this->employment->getData();
    	
    	return view('cms.pages.employments.index', compact('datas'));
    }
    public function store(Request $request){
    	$result = $this->employment->publish($request);
    	return redirect('/emp')->with('success', 'You have successfully added it.');
    }
    public function destroy($id){
    	$result = employments::destroy($id);
    	return redirect('/emp')->with('success', 'You have successfully deleted it.');
    }
}
