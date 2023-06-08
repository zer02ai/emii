<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        $url = URL::current();
        $arr_url = explode('/',$url);
        $admin_url = 0;
        foreach($arr_url as $url)
        {
            if($url === 'admin'){
                $admin_url = 1;
            }
        }
        if($admin_url){
            $redirect_url = route('admin.login_page2');
        }else{
            $redirect_url = route('home');
        }
        return $request->expectsJson() ? null : $redirect_url;
    }
}
