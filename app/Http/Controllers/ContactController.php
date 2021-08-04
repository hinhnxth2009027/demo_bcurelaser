<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(ContactRequest $request)
    {
        $request->validated();
        $contact = new Contact();
        $contact->fill($request->all());
        $contact->save();
        return response()->json([
            'code' => 200,
            'message' => 'Tin nhắn của bạn đã được gửi, chúng tôi sẽ liên hệ trong thời gian sớm nhất!'
        ]);
    }
}
