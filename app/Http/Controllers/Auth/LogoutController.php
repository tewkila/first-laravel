<?php


namespace App\Http\Controllers\Auth;
use Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;



class LogoutController
{
    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
