<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectToComingSoon
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $rootDomain = 'interactivedigital.com.gh';

        // if ($request->getHost() == $rootDomain && $request->path() !== 'coming-soon')
        // {
        //     $newUrl = $request->getScheme() . '://' . $request->getHost().'/coming-soon';
        //     return redirect($newUrl);
        // }

        return $next($request);
    }
}
