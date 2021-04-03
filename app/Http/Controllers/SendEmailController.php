<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Employee;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    //
    public function index()
    {
        return view('send_email');
    }

    public function send(Request $request)
    {

        $employee = new Employee();
        $employee->name = $request->input('name');
        $employee->surname = $request->input('surname');
        $employee->email = $request->input('email');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads', $filename);
            $employee->image = $filename;
        } else {
            return $request;
            $employee->image = '';
        }
        $employee->save();

        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email'
        ]);

        $data = array(
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email
        );
        Mail::to('tinchobayka@gmail.com')->send(new SendMail($data));

        return back();
    }
}
