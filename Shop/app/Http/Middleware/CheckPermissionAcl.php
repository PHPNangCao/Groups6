<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\DB;
use App\Permission;
use App\User;
use Closure;

class CheckPermissionAcl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $permission = null)
    {
        //lấy tất cả các role của user

        // $listRoleOfUser = DB::table('users')
        //     ->join('role_user', 'users.id', '=', 'role_user.user_id')
        //     ->join('role', 'role_user.role_id', '=', 'role.id')
        //     ->where('users.id', auth()->id())
        //     ->select('role.*')
        //     ->get()->pluck('id')->toArray();

        //sử dụng model lấy role của user đăng nhập vào hệ thống
        $listRoleOfUser = User::find(auth()->id())->roles()->select('role.id')->pluck('id')->toArray();

        //lấy quyền user login vào hệ thống
        $listRoleOfUser = DB::table('role')
            ->join('permission_role', 'role.id', '=', 'permission_role.role_id')
            ->join('permission', 'permission_role.permission_id', '=', 'permission.id')
            ->whereIn('role.id', $listRoleOfUser)
            ->select('permission.*')
            ->get()->pluck('id')->unique();

        $checkPermission = Permission::where('name', $permission)->value('id');

        if($listRoleOfUser->contains($checkPermission)){
            return $next($request);
        }
        return abort(403);
    }
}
