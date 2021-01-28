<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $page_info = [
            "page_name" => "CONTACT",
            "active" => "active"
        ];

        return view('front.contact', compact('page_info'));
    }
}
