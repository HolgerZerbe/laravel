<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EasterEgg
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
        if ($request->easteregg) {
            $easter = Carbon::createFromDate(null, 03, 12);
            if ($easter->isToday()) {
                return redirect()->away('https://images.unsplash.com/photo-1522184462610-d9493b82cdf2?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=564&amp;q=80');
            } else {
                abort(403, 'It`s not easter yet');
            }
        }
        return $next($request);
    }
}
