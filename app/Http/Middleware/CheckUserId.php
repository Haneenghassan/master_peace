<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class CheckUserId
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
        $userId = $request->route('id');
        $user = User::find($userId);
    
        if (!$user) {
            abort(404);
        }
    
        // Check if the authenticated user is authorized to access this user's profile
        if ($request->user()->cannot('view', $user)) {
            // Redirect to another user's profile
            $otherUser = User::where('id', '<>', $userId)->first();
            return redirect()->route('profileuser.show', $otherUser->id);
        }
        return $next($request);
    }
}
