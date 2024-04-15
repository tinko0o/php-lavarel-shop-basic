<?php

namespace App\Http\Controllers\Admin\Users;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginConTroller extends Controller
{
    //
    public function index()
    {
        return view('admin.users.login',[
            'title' => 'Dang nhap he thong',
        ]);
    }
public function store(Request $request){
    // $haspassword = Hash::make('123456');
    //     User::create([
    //         'name' => 'admin',
    //         'email' => 'admin@gmail.com',
    //         'password' => $haspassword,
    //     ]);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            // $request->session()->regenerate();
 
            return redirect()->route('admin');
        }
         return back()->with('error', 'Sai tên đăng nhập hoặc mật khẩu');
    }
}
