<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User_Detail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
{

    public function index(){

        $data=User::where('users.id','=',Auth::user()->id)->get();
        return view('profile', compact('data'));
    }

    
    public function show(User_Detail $account)
{
return view('profile',compact('account'));
}

    public function edit(User_Detail $account)
{
return view('profile.edit',compact('account'));
}


    public function update(Request $request, $id)
    {
        

        
        $account = User_Detail::find($id);
        $account->user_detail_id = Auth::user()->id;
        $account->user_name = $request->Auth::user()->name;
        $account->user_email = $request->Auth::user()->email;
        $account->password = $request->password;
        $account->user_image = $request->user_image;
        $account->user_address = $request->user_address;
        $account->user_mobile = $request->user_mobile;
        $account->admin_flag = 1;
        
        $account->save();

        return redirect('profile') 
        ->with('success','Movie Has Been updated successfully');
    }
}
