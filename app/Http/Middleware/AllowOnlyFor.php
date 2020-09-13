<?php

namespace App\Http\Middleware;

use Closure;

class AllowOnlyFor
{
    public function handle($request, Closure $next, $type)
    {
        $allowedTypes = explode("|", $type);

        if (auth()->check() && in_array(auth()->user()->type, $allowedTypes) )
            return $next($request);

        session()->flash("flashMessage", "You have no rights for that action");
        session()->flash("flashType", "error");
        return redirect()->back();
    }
}
