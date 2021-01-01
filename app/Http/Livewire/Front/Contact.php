<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class Contact extends Component
{
    public $name;
    public $email;
    public $message;
    protected $rules = [
        'name' => 'required|string|min:6',
        'email' => 'required|email:rfc,dns',
        'message' => 'required|string|max:500',
    ];
    public function render()
    {
        return view('livewire.front.contact');
    }
    public function submit(){
        $this->validate();
        $contactDetail = ['name'=>$this->name,'email'=>$this->email,'message'=>$this->message];
        Mail::to('jdistrollc@gmail.com')->send(new ContactMail($contactDetail));
        session()->flash('message', 'Contact Request Sent Successfully.');
        $this->resetField();
        //jdistrollc@gmail.com
    }
    private function resetField()
    {
        $this->name = '';
        $this->email = '';
        $this->message = '';
    }
    // private function sendContactDetail($to,$details)
    // {
    //     $subject = 'Contact Us Email From AlphaaSigma | User Name: '.$details['username'];
    //     // Always set content-type when sending HTML email
    //     $headers = "MIME-Version: 1.0" . "\r\n";
    //     $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    //     $headers .= "From: info@logon.com.pk";
    //     $message = view('email.contact_us',['item'=>$details])->render();
    //     mail($to,$subject,$message,$headers);
    // }
}
