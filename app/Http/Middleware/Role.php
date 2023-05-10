<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if(Auth::guard('admin')->check()) {
            if($this->getAdminRoles($role))
                return $next($request);
            else
                abort(403);
        } else {
            return redirect()->route('admin.login');
        }
    }

    protected function getAdminRoles($role)
    {
        $id = Auth::guard('admin')->id();
        $admin = Admin::find($id);
//        if($admin->super_admin)
//            return true;
        return $admin->hasAbility($role);
    }
}
