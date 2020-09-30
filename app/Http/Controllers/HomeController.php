<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Models\Data;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->admin == 0) {
            $data = User::find(Auth::user()->id)->data->count();
        } else {
            $data = Data::count();
        }

        $users = User::count();

        return view('home', compact('data', 'users'));
    }
}
