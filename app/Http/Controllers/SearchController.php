<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SearchController extends Controller
{
    public function filter(Request $request, User $user)
    {
        $user = $user->newQuery();

        if($request->has('name')){
            $user->where('name', $request->input('name'));
        }

        if($request->has('company')){
            $user->where('company', $request->input('company'));
        }

        if($request->has('city')){
            $user->where('city', $request->input('city'));
        }

        return $user->get();
    }
}
