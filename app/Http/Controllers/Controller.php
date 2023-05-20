<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use DateTime;
use Error;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

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

    public function index_fr(Request $request)
    {
        $birth = new DateTime('30.10.1991'); // Your date of birth
        $today = new Datetime(date('m.d.y'));
        $age = $today->diff($birth)->y;

        return view('fr.home', compact('age'));
    }

    public function index_ar(Request $request)
    {
        $birth = new DateTime('30.10.1991'); // Your date of birth
        $today = new Datetime(date('m.d.y'));
        $age = $today->diff($birth)->y;

        return view('ar.home', compact('age'));
    }


}
