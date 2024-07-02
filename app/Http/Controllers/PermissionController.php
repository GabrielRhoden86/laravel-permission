<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class PermissionController extends Controller
{

    public function __invoke()
    {
        $user = Auth::user();

        $user->assignPermission('admin');
        Gate::authorize('admin');

        //  $user->assignPermission('default');
        //  Gate::authorize('default');
    }
}
