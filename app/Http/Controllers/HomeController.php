<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Models\DataTrafo;
use App\Models\DataPenghantar;

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
            $dataTrafo = User::find(Auth::user()->id)->dataTrafo->count();
        } else {
            $dataTrafo = DataTrafo::count();
        }

        if (Auth::user()->admin == 0) {
            $dataPenghantar = User::find(Auth::user()->id)->dataPenghantar->count();
        } else {
            $dataPenghantar = DataPenghantar::count();
        }

        $users = User::count();

        return view('home', compact('dataTrafo', 'dataPenghantar', 'users'));
    }
}
