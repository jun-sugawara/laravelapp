<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HelloMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {    
        $data = [
          ['name'=>"すがわらじゅん", "mail"=>"24karats@gmail.com"],
          ['name'=>"ソナムワンギャル", "mail"=>"sonum@gmail.com"],
          ['name'=>"なっちゃん", "mail"=>"natsumi@gmail.com"],
          ['name'=>"とおる", "mail"=>"toru@gmail.com"]
        ];
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}
