<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function store($id)
    {
        
        \Auth::microposts()->favorite($id);
        
        return back();
    }
    
    public function destroy($id)
    {
        
        \Auth::microposts()->unfavorite($id);
        
        return back();
    }
}
