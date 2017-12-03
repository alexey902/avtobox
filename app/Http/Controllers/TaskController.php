<?php

namespace Autobox\Http\Controllers;


use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
//use Illuminate\Mail\Mailer;
//use Autobox\Mail\CustomersRequest;
use Illuminate\Http\Request;
//use Autobox\Http\Controllers\Controller;

class TaskController extends Controller
{
    public function construct()

            //вместо construct было __сonstruct()
    {
       $this->middleware('auth');
    }

    public function succesindex () {
        return view('succes');
    }
    public function regulations () {
        return view('regulations');
    }
    public function agreement () {
        return view('agreement');
    }

    public function index() {
        $message="lets go";
        return view('mainparts')->with('message',$message);
    }



    public function requestform () {
        return view ('request_form');
    }

    static function validate_mail (Request $request) {

         $myrequest = $request->all();
         $das=['email'=>'alexeymi9@rambler.ru',
              'myname'=>'Alexey'];

          Mail::send('emails.newcustomerrequest', ['myrequest'=>$myrequest], function ($m) use ($das) {
            $m->from('avtobox@app.com', 'Avtobox');

            $m->to($das['email'], $das['myname'])->subject('Новый запрос!');
        });

        return true;
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phonenumber' => 'required|digits:10',
            'automaker' => 'required|min:2',
            'automodel' => 'required|min:1',
            'vin' => 'required|min:11|max:17',
            'description' => 'required|min:3',
            'engine' => 'required|max:5',
            'Year' => 'required|min:2',
            'Artikul' => 'max:50',
        ],
            [
                'phonenumber.required' => 'Нам нужен номер вашего телефона, чтобы оперативно ответить на запрос',
                'phonenumber.digits' => 'Пожалуйста введите номер телефона в 10-значном формате, пожалуйста',
                'automaker.required' => 'Введите название производтеля авто, пожалуйста',
                'automaker.min' => 'Введите корректно название автопризводителя, пожалуйста',
                'automodel.required' => 'Введите название модели авто, пожалуйста',
                'automodel.min' => 'Введите корректно название модели авто, пожалуйста',
                'vin.required' => 'Введите VIN автомобиля, пожалуйста',
                'vin.min' => 'Введите корректно VIN автомобиля, пожалуйста',
                'vin.max' => 'Введите корректно VIN автомобиля, пожалуйста',
                'description.required' => 'Введите описание автозапчасти, пожалуйста',
                'description.min' => 'Введите корректно описание автозапчасти, пожалуйста',
                'engine.required' => 'Введите объем двигателя вашего авто, пожалуйста',
                'engine.max' => 'Введите корректно объем двигателя вашего авто, пожалуйста',
                'Year.required' => 'Введите год выпуска вашего авто, пожалуйста',
                'Year.min' => 'Введите корретно год выпуска вашего авто, пожалуйста',
                'Artikul.max' => 'Введите корректно артикул автозапчасти, пожалуйста',
            ]);

        if ($validator->fails()) {
            return redirect('/request_form')
                ->withErrors($validator)
                ->withInput();
        }
        else {
            TaskController::validate_mail ($request);
            return view('/succes');
        }

        // The blog post is valid...
    }
}
