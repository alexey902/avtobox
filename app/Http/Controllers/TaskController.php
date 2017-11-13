<?php

namespace Autobox\Http\Controllers;



use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailer;
use Autobox\Mail\CustomersRequest;

//use Request;
use Illuminate\Http\Request;
use Autobox\Http\Controllers\Controller;

class TaskController extends Controller
{
    public function construct()

            //вместо construct было __сonstruct()
    {
       $this->middleware('auth');
    }

    //
    public function index() {
        $message='Lets go, billionare!!! Lets go';
        return view('mainparts')->with('message',$message);
    }



    public function requestform () {
        return view ('request_form');
    }

    /**
     * @return mixed
     */

    public function validate_mail (Request $request) {

     $myrequest = $request->all();
     dump($myrequest);


        $das=['email'=>'alexeymi9@rambler.ru',
              'myname'=>'Alexey'];

        //Mail::to($das)->send(new CustomersRequest($myrequest));

        Mail::send('emails.newcustomerrequest', ['myrequest'=>$myrequest], function ($m) use ($das) {
            $m->from('hello@app.com', 'Your Application');

            $m->to($das['email'], $das['myname'])->subject('Новый запрос!');
        });

        return redirect('/');

    }
}
