<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Session;

class CustomerController extends Controller
{
    public function index(){
        return view('frontEnd.customer.register');
    }
    public function saveCustomer(Request $request){
        Customer::saveCustomer($request);
        return back();
    }
    public function customerLogout(){
        Session::forget('customerId');
        Session::forget('customerName');
        return back();
    }
    public function customerLogin(){
        return view('frontEnd.user.user-login');
    }
    public function customerLogInCheck(Request $request){
        $customerInfo = Customer::where('email',$request->user_name)
            ->orWhere('phone',$request->user_name)
            ->first();
        if ($customerInfo){
            $existingPassword = $customerInfo->password;
            if (password_verify($request->password,$existingPassword)){
                Session::put('customerId',$customerInfo->id);
                Session::put('customerName',$customerInfo->name);
                return redirect('/');
            }else{
                return back()->with('message','Please valid password');
            }
        }else{
            return back()->with('message','Please valid email or password');
        }
    }
}
