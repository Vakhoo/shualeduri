<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryAdminController extends Controller
{
    public function index()
    {	
    	return view("admin.index", ["coocks"=>Category::get()]);
    }
    public function create()
    {
    	return view("admin.categorycreate");
    }

    public function store(Request $request)
    {
    	Category::create([
    		"category_name"=>$request->input("category")
    	]);
    	return redirect()->back();
    }
    public function show(Request $req)
    {
    	$categoryinfo=Category::where("id", $req["id"])->firstOrFail();
    	return view("admin.edit", ["data"=>$categoryinfo]);

    }
    public function update(Request $req)
    {
    	Category::where("id", $req->input("id"))->update([
    		"category_name"=>$req->input("category")
    	]);
    	return redirect()->route("categoryadminindex");

    }
    public function destroy(Request $request)
    {
    	Category::where("id", $request->input("id"))->delete();
        return redirect()->back();
    }
}
