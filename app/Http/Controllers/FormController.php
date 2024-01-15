<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        // Lakukan validasi dan simpan data formulir
        // ...

        // Redirect atau kembalikan respons yang sesuai
        return redirect('/')->with('success', 'Formulir berhasil disubmit!');
    }
}
