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

        if($request->has('managers')){
            $user->whereHas('managers', function ($query) use ($request) {
                $query->whereIn('managers.name', $request->input('managers'));
            });
        }

        if($request->has('event')){
            $user->whereHas('rsvp.event', function ($query) use ($request) {
                $query->where('event.slug', $request->input('event'));
            });

            if($request->has('response')){
                $user->whereHas('rsvp', function ($query) use ($request) {
                   $user->where('response', 'I will be attending');
                });
            }
        }
        return $user->get();
    }
}
