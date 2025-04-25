<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|max:1000'
        ]);

        // Simpan ke database
        Contact::create($validatedData);

        // Redirect kembali dengan pesan sukses
        return redirect()->route('contact')
            ->with('success', 'Pesan Anda berhasil dikirim!');
    }
}