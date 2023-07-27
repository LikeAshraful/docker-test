<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\GmailService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    public function register(Request $request, GmailService $gmailService)
    {

        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:8|confirmed',
        // ]);

        // if ($validator->fails()) {
        //     return response()->json(['errors' => $validator->errors()], 422);
        // }

        try {
            // Create a new user
            // $user = User::create([
            //     'name' => $request->input('name'),
            //     'email' => $request->input('email'),
            //     'password' => bcrypt($request->input('password')),
            // ]);

            // Send confirmation email
            $to = $request->input('email');
            $subject = 'Registration Confirmation';
            $message = 'Thank';

            $gmailService->sendEmailUsingGmailAPI($to, $subject, $message);

            return response()->json(['message' => 'Registration successful'], 201);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
