<?php

namespace App\Http\Livewire;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class SendMailArabic extends Component
{


    public $first_name;
    public $last_name;
    public $email;
    public $tel;
    public $subject;
    public $message;

    protected $rules = [
        'first_name' => 'required|string',
        'last_name' => 'required|string',
        'email' => 'required_without:tel|email',
        'tel' => 'required_without:email|numeric|min:10',
        'subject' => 'string|nullable',
        'message' => 'string|nullable'
    ];

    protected $messages = [
        'first_name.required' => 'الإسم الأول مطلوب.',
        'last_name.required' => 'الاسم مطلوب.',
        'email.required_without' =>'البريد الإلكتروني مطلوب عندما لا يتم توفير الهاتف.',
        'email.email' =>'أدخل عنوان بريد إلكتروني صالح',
        'tel.required_without' => 'الهاتف مطلوب عندما لا يتم توفير البريد الإلكتروني.'
    ];

    public function upadated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required_without:tel|email',
            'tel' => 'required_without:email|numeric|min:10',
            'subject' => 'string|nullable',
            'message' => 'string|nullable'
        ]);
    }


    public function sendMailArabic(Request $request)
    {
        $validatedData = $this->validate();


        $customer['first_name'] = $validatedData['first_name'];
        $customer['last_name'] = $validatedData['last_name'];
        $customer['email'] = $validatedData['email'];
        $customer['tel'] = $validatedData['tel'];
        $customer['showcase_site'] = $request->showcase_site;
        $customer['e-commerce'] = $request->ecommerce;
        $customer['web_app'] = $request->web_app;
        $customer['mobile_app'] = $request->mobile_app;
        $customer['graphic_design'] = $request->graphic_design;
        $customer['seo'] = $request->seo;
        $customer['advertisement'] = $request->advertisement;
        $customer['other'] = $request->other;
        $customer['subject'] = $validatedData['subject'];
        $customer['message'] = $validatedData['message'];

        Mail::to('contact@yassinelabhih.com')->send(new Contact($customer));

        Alert::success('Message Envoyé Avec Succès', 'Je vous recontacte sous 24 heures');

        return redirect()->route('arabic');
    }
    public function render()
    {
        return view('livewire.send-mail-arabic');
    }
}
