<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UpdatePasswordRequest;

class ChangePasswordController extends Controller
{
    public function index()
    {
        return view('admin.setting');
    }

    public function update(UpdatePasswordRequest $request) 
    {
        $request->user()->update([
            'password' => Hash::make($request->get('password'))
        ]);

        toastr()->success('Password berhasil diubah');
        return redirect()->route('setting');
    }
}
