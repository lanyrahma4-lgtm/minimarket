<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function submitForm(UserRequest $request)
    {
        return "Data berhasil divalidasi!";
    }
}