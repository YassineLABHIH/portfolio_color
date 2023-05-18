<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index_en(Request $request)
    {
        $birth = new DateTime('30.10.1991'); // Your date of birth
        $today = new Datetime(date('m.d.y'));
        $age = $today->diff($birth)->y;

        return view('en.home', compact('age'));
    }
}
