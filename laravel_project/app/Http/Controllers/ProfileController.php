<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User_Detail;
use App\Models\User;
use Dflydev\DotAccessData\Data;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public function index(){

        $data=User::leftJoin('user__details','user__details.user_detail_id','=','users.id')->where('users.id','=',Auth::user()->id)->get(['*']);


        return view('profile', compact('data'));
    }

    


    // public function create()
    // {
    // return view('profile');
    // }
    
    
    
    public function store(Request $request)
    {

    }









    public function show(User_Detail $account)
{
    $data = array();
    $orders = Order::all();
    foreach($orders as $order){
        if($order["user_order_id"] == Auth::user()->id){
            $order["product_name"] = Product::Find($order["user_order_id"])["item_name"];
            array_push($data , $order);
        }
    }
    return view('requests', compact('data'));
}

    public function edit(User_Detail $account)
{

//     $account=User::where('users.id','=',Auth::user()->id);
//     dd($account);
// return view('profile',compact('account'));
}


    public function update(Request $request, $id)
    {
        
        // $this->validate($request,[
        //     'user_detail_id' => 'required',
        //     'user_name' => 'required',
        //     'user_email' =>'required',
        //     'password' => 'required',
        //     'user_image' => 'required',
        //     'user_address' => 'required',
        //     'user_mobile' => 'required',
        //     'admin_flag' => 'required',
        //   ]);

        $account=User::findOrFail(Auth::user()->id);
        $account->name=$request->input('user_name');
        $account->email=$request->input('user_email');

        $account->password=Hash::make($request->input('password'));

        $account->phone=$request->input('user_mobile');

        $account->update();

        $dataUserDetails=User_Detail::where('user_detail_id','=',Auth::user()->id)->get();
    
        $updateUserDetailes=User_Detail::findOrFail($dataUserDetails[0]->id);
        $updateUserDetailes->user_detail_id=Auth::user()->id;
        $updateUserDetailes->user_image=$request->input('user_image');
        $updateUserDetailes->admin_flag=1;
        $updateUserDetailes->user_address=$request->input('user_address');
        $updateUserDetailes->update();

        return redirect('profile') 
        ->with('success','Movie Has Been updated successfully');
    }
}
