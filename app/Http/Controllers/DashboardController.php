<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if($user->name=="admin"){
            // return view('dashboardAdmin');
            return view('dashboardAdmin',[
                'users'=>User::all(),
            ]);
        }
        return view('dashboard', ['name' => $user->name]);
    }
    public function destroy($id)
    {
        //dd(User::where('id', 3));
        User::where('id', $id)->delete();
        return redirect(route('dashboard'));
    }
}
