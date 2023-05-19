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

        return view('en.home', compact('age'));
    }

    public function index_ar(Request $request)
    {
        $birth = new DateTime('30.10.1991'); // Your date of birth
        $today = new Datetime(date('m.d.y'));
        $age = $today->diff($birth)->y;

        return view('en.home', compact('age'));
    }

    public function contact_en(Request $request)
    {



        $validate = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required_without:tel|email',
            'tel' => 'required_without:email|numeric|min:10',
            'subject' => 'string|nullable',
            'message' => 'string|nullable'
        ]);


        $customer['first_name'] = $request->first_name;
        $customer['last_name'] = $request->last_name;
        $customer['email'] = $request->email;
        $customer['tel'] = $request->tel;
        $customer['showcase_site'] = $request->showcase_site;
        $customer['e-commerce'] = $request->ecommerce;
        $customer['web_app'] = $request->web_app;
        $customer['mobile_app'] = $request->mobile_app;
        $customer['graphic_design'] = $request->graphic_design;
        $customer['seo'] = $request->seo;
        $customer['advertisement'] = $request->advertisement;
        $customer['other'] = $request->other;
        $customer['subject'] = $request->subject;
        $customer['message'] = $request->message;

        Mail::to('contact@yassinelabhih.com')->send(new Contact($customer));


    }
}
