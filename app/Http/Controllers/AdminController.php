<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'title' => 'Dashboard'
        ]);
    }

    public function mails()
    {
        return view('admin.mails', [
            'title' => 'Mails',
            'mails' => Contact::all()
        ]);
    }

    public function mail(Contact $contact)
    {
        return view('admin.mail', [
            'title' => 'Detail Message',
            'mail' => $contact
        ]);
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Contact::create($validated);
        return redirect('/contact')->with('success', 'Terimakasih. pesan telah terkirim!');
    }

    public function delete(Request $request, Contact $contact)
    {
        Contact::destroy($contact->id);
        return redirect('/mails')->with('success', 'Data berhasil dihapus!');
    }
}
