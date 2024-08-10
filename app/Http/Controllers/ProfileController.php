<?php

namespace App\Http\Controllers;

use App\Models\Profile;

use Illuminate\View\View;

class ProfileController extends Controller
{
    public function index() : View
    {
        $profile = Profile::latest()->paginate(10);

        return view('index', compact('profile'));
    }
}
