<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Society;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'id_card_number' => 'required',
            'password' => 'required'
        ]);

        $society = Society::where('id_card_number', $request->id_card_number)->first();
        
        if(!$society || !Hash::check($request->password, $society->password)){
            return response()->json(['message' => 'ID Card Number or Password Incorect'], 401);
        }

        $token = Str::random(25);
        $society->update([
            'token' => $token
        ]);

        $society->token = $token;

        return response()->json($society, 200);
    }
}
