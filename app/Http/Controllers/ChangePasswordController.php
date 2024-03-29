<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Requests\ErrorFormRequest;

class ChangePasswordController extends Controller
{
    public function index()
    {
        return view('settings.changePassword');
    }

    public function store(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
          ], [ 'validation.same' => 'Kata Sandi Baru dan Konfirmasi Kata Sandi Baru Harus Sama!']
        );

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        return redirect()->route('settings.changepassword')->with('status', 'Berhasil Mengubah Kata Sandi!');
    }
}
