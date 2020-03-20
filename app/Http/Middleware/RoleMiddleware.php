<?php

namespace App\Http\Middleware;
use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;
class Rolemiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // dd(Auth::user()->isAdmin());
        // return redirect('/login');
        if (Auth::check() && Auth::user()->isAdmin() ) {
            // dd("100");
            // echo  "This user is Admin";
            // $this->redirectTo = 'Admin\home';
            // return $this->redirectTo;
            // return redirect('admin/home');
            return $next($request);
        }elseif(Auth::check()){
            // dd("2");
            // // echo "This user is NOT Admin";
            // $this->redirectTo = 'profile';
            // return $this->redirectTo;
            return redirect('profile');
            // return $next($request);
            // dd("ok");
        }
        abort(403);
       


    }
}
