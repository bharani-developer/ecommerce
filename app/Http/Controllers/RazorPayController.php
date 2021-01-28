<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
   
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Payment;

class RazorPayController extends Controller
{
  public function process(Request $request)
  {
    $details = [
      'title' => 'Mail from BK ECommerce',
      'body' => 'Your order has been shipped!'
    ];
    $payInfo = [
      'user_id' => '1',
      'product_id' => $request->product_id,
      'r_payment_id' => $request->payment_id,
      'amount' => $request->amount,
    ];
    $page_info = [
      "page_name" => "CONTACT",
      "active" => "active"
  ];

    Mail::to('bharani.developer@gmail.com')->send(new \App\Mail\OrderShipped($details));

 
    Payment::insertGetId($payInfo);
    session()->forget('cart');
    return view('razorpay.thankyou',compact('page_info'));
  }

  public function success()
  {
    $page_info = [
      "page_name" => "CONTACT",
      "active" => "active"
  ];
    $details = [
      'title' => 'Mail from BK ECommerce',
      'body' => 'Your order has been shipped!'
    ];

    Mail::to('bharanikarthikeyan1995@gmail.com')->send(new \App\Mail\MyTestMail($details));
    session()->forget('cart');

    return view('razorpay.success',compact('page_info'));
  }
}
