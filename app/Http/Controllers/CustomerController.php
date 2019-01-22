<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Yajra\Datatables\Datatables;

class CustomerController extends Controller
{
    public function index()
    {
        
        return view('customer');
    }


    public function data(){
        $customer = Customer::all();
        return Datatables::of($customer)->make(true);
    }

    public function edit($id){
        $customer=Customer::where('id',$id)->first();
        
        return view('customers/details',["customer"=>$customer]);
    }

    
   public function save(Request $request){

    $customer=new Customer;
    
    $customer->name=$request->name;
    $customer->age=$request->age;
    $customer->phone=$request->phone;
    $customer->address=$request->address;
    $customer->tier=$request->tier;
    $customer->save();
    return redirect('/customers');
}

}
