<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        //dd($request->all());

        $message = '<p>Имя: <b>' . $request->request->get('contactName') . '</b></p>';
        $message.= '<p>Электронная почта: <b>' . $request->request->get('contactEmail') . '</b></p>';
        $message.= '<p>Сообщение: <b>' . $request->request->get('contactMessage') . '</b></p>';

        mail("t-tanja@bk.ru", $request->request->get('contactSubject'), $message);
        echo 'Your message send successfully!';
    }
}
