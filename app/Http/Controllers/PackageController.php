<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;
use Auth;

class PackageController extends Controller
{

    
    public function index_package()
    {
    
        $all = Package::all();
        //dd($all);
        return view('package.index_package',['data'=>$all]);
    }

   
    public function create_package()
    {
        return view('package.new_package');
    }

    public function store_package(Request $request)
    {
        $this->validate($request, [
            'description'=>'required',
            'food'=>'required',
            'photographer'=>'required',
            'power'=>'required',
            'decoration'=> 'required',


        ]);
        //return 'dhaka';
       Package::create([
           'description'=>$request->description,
           'food'=>$request->food,
           'photographer'=>$request->photographer,
           'power'=>$request->power,
           'decoration'=>$request->decoration
       ]);

       return redirect(route('index_package'))->with('success','Package info has been added');
    }

    public function edit_package($package)
    {
        //dd($course);
        $package = Package::find($package);
        return view('package.edit_package',['id'=>$package]);
    }

    public function package()
    {
        //dd($course);
        //$package = Package::find($package);
        $all = Package::all();
        //dd($all);
        return view('user.package',['data'=>$all]);
    
    }


    public function update_package(Request $request, Package $package)
    {
        $package->description = $request->description;
        $package->food = $request->food;
        $package->photographer = $request->photographer;
        $package->power = $request->power;
        $package->decoration= $request->decoration;
        $package->save();
       return redirect(route('index_package'))->with('success','Package info has been updated');

    }

    public function destroy_package(package $package)
    {
        $package->delete();
        return redirect(route('index_package'))->with('success','Package info has been deleted');
    }
}
