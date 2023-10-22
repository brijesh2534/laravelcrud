//controller

<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\customercontroller;

class customer extends Controller
{
    public function insert(){
        return view('insert');
    }
    public function inserthelp(Request $request){
        $customer = new customercontroller;
        $customer->name = $request['nm'];
        $customer->rollno = $request['rn'];
        $customer->save();
        return redirect('view');
    }
    public function view(){
        $customer = customercontroller::all();
        $data=compact('customer');
        return view('view')->with($data);
    }

    public function delete($id){
        $customer = customercontroller::find($id);
        $customer->delete();
        return redirect('view');
    }

    public function update($id){
        $customer= customercontroller::find($id);
        $data=compact('customer');
        return view('update')->with($data);
    }

    public function updatehelp(Request $request){
        $customer=customercontroller::find($request->id);
        $customer->name=$request['nm'];
        $customer->rollno=$request['rn'];
        $customer->save();
        return redirect('view');
    }
}
