<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use Illuminate\Support\Facades\File;

class UsersController extends Controller
{
    //
    public function index()
    {
        return Users::all();
    }

    public function adduser(Request $request)
    {
        $image = $request->file('profile');
        $folderdir = 'assets/profiles/';
        $news = time().'-news.'.$image->getClientOriginalExtension();
        $image->move($folderdir,$news);


        $data = new Users;
        $data->lastname = $request->lastname;
        $data->firstname = $request->firstname;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->country = $request->country;
        $data->dateofbirth = $request->dateofbirth;
        $data->username = $request->username;
        $data->password = $request->password;
        $data->profile = $folderdir.$news;
        $data->interests = $request->interests;
        if($data->save())
        {
            return response()->json([
                'message'   =>   'success',
                'result'    =>   true
            ]);
        }else{
            return response()->json([
                'message'   =>   'Adding user failed',
                'result'    =>   false
            ]);
        }
    }

    public function changePassword(Request $request)
    {
    }

}
