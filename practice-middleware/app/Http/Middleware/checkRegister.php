<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class checkRegister
{

    public function handle(Request $request, Closure $next)
    {
        $dob = $request->dob;
        $age = Carbon::parse($dob)->age;
        if ($age < 18){
            return redirect()->route('users.showFormRegister')->with('error', 'Khong du tuoi');
        }
        return $next($request);
    }
}
