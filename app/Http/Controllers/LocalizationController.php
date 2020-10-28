<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class LocalizationController extends Controller {
    
    public function index($locale)
    {
        session(['locale' => $locale ]);
        App::setLocale($locale);
        return redirect()->back();
    }

}
