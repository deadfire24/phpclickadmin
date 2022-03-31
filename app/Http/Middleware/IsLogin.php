<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use App\Models\Objects\ClickhouseDB;

class IsLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $request->session()->reflash();
        if (!$request->session()->has('credentials')) {
            return redirect()->route('auth.login');
        } else {
            $credentials = $request->session()->get('credentials');
            $DB = new ClickhouseDB($credentials);
            if (!$DB->isConnected()) {
                $request->session()->forget('credentials');
                return redirect()->route('auth.login');
            }
        }

        return $next($request);
    }
}
