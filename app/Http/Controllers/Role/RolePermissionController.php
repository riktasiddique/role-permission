<?php

namespace App\Http\Controllers\Role;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RolePermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        if(!(auth()->user()->role_id == 1)){
            return redirect()->route('dashboard');
        }
        return Inertia::render('RolePermission/Index');
        
        // return Inertia::render('RolePermission/Index');
        
    }
}
