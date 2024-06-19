<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactClient;
use App\Models\Client;
use App\Mail\ContactNotification;

class MyController extends Controller
{
    public function My_data(){
        return view('form1');
    }
    
    public function showContactForm()
    {
        return view('contact');
    }
    

    
    // public function Submit(Request $request){
    //     echo "<pre>";
    //     print_r($request->all());
    // }
    public function Submit(Request $request){
        $firstName = $request->input('fname');
        $lastName = $request->input('lname');
    
        echo 'First Name: ' . $firstName . '<br>';
        echo 'Last Name: ' . $lastName . '<br>';
    }

    public function myVal(){
        // session()->put('test', 'My First Session');
        session()->flash('test1', 'My First Session');
        return 'session created';
    }

    public function restoreVal(){
        return 'My session value is: ' . session('test1');
    }
    public function sendClientMail(){
        $data = Client::findOrFail(1)->toArray();
        $data['theMessage'] = 'My First test mail';
        Mail::to( $data['email'])->send(
            new ContactClient($data)
        );
        return'mail sent!';
    }
    
    public function sendContactForm(Request $request)
    {
        try {
            // Validate the request data
    
            // Send the email
            Mail::to('testMail@gamil.com')->send(new ContactNotification(
                $request->name,
                $request->email,
                $request->title,
                $request->contactMessage
            ));
    
            // Redirect back with a success message
            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            return redirect()->back()->with('error', 'An error occurred while sending the email. Please try again later.');
        }
    }
    

}
