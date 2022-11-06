<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::find(Auth::id());
        $rol = $user->getRoleNames()[0];

        //redirigir al usuario administrador a la ruta admin/
        if($rol == 'administrador')
        {
            return redirect()->route('admin');
        }
        else
        {
            return view('home');
        }
        
    }
}
