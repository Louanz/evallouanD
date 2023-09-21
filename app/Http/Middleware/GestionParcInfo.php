<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GestionParcInfo
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        {
            if (auth()->check() && auth()->user()->hasPermission('gestion_parc')) {
                return $next($request);
            }
                    return redirect('/')->with('error', 'Accès non autorisé !');

        }
        return $next($request);
    }
}
