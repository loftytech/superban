<?php

namespace Loftytech\Superban;
 
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Symfony\Component\HttpFoundation\Response;
 
class Superban
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $attempts = 10, $duration, $ban_duration = 60, $ban_key = "ip"): Response
    {
        if ($ban_key == "ip") {
        } else if ($ban_key == "id") {
            $ban_value = auth()->user()->id;
        } else if ($ban_key == "email") {
            $ban_value = auth()->user()->email;
        } else {
            $ban_value = $request->ip();
        }

        

        $executed = RateLimiter::attempt(
            "$ban_key: ".$ban_value,
            $attempts,
            function() {
                // Send message...
            },
            $ban_duration,
        );

        if (!$executed) {
            $response = [
                'message' => 'Too many attempts',
                'status' => '1'
            ];
            return response($response, 429);
        }

 
        return $next($request);
    }
 
}