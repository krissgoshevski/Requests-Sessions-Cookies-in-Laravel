<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\CommentRequest;

class LoginController extends Controller
{
    //

    public function loginForm()
    {
        return view('second.form-login');
    }


    public function loginSubmit(Request $request)
    {
        $rules = [
            'username' => 'required|min:6|max:50|regex:/[0-9]/',
            'password' => 'required|min:8|max:50|regex:/[A-Z]/|regex:/[0-9]/',
        ];

        $validator = Validator::make($request->all(), $rules);


        // vo validator imame metoda fails() t.e. ako ne pomine validacijata 

        if($validator->fails()) {
            return view('second.error');
        }

        return view('second.success');
    
    }




    public function loginReq(LoginRequest $request)
    {
        if(session()->has('username')) {
            return redirect()->route('home');
        }


        // prakanje na sesija 
        session([
            'username' => $request->username,
            'email' => $request->email,
            'datum' => $request->date,
        ]);

        return redirect()->route('home');
    }


    public function home()
    {

        if(!session()->has('username')) {
            return view('second.form-login');
        }


        return view('third.home');
    }




    // public function commentForm()
    // {
    //         return view('third.comment');

    // }

    public function comment()
{
    // Your logic for the comment page
    return view('third.comment');
}






    public function logout()
    {
        session()->flush(); // so fluesh se brise se so imame veo sesija

        return redirect()->route('form-login');
    }




    public function storeComment(CommentRequest $request)
    {
            session([
                'title' => $request->title,
                'description' => $request->description,
                'url' => $request->url,
            ]);

            return redirect()->route('home');

    }

}
