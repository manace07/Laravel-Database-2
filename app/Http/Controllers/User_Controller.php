<?php

namespace App\Http\Controllers;


use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth\SignIn\FailedToSignIn;
use Kreait\Firebase\Auth;
use Kreait\Firebase\Exception\FirebaseException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class User_Controller extends Controller
{
    private $firebaseAuth;

    public function __construct()
    {
        // Initialize Firebase authentication
        $serviceAccountPath = base_path('crisgem-firebase-adminsdk-bwi3j-96a6231a9c.json');
        $factory = (new Factory)->withServiceAccount($serviceAccountPath);
        $this->firebaseAuth = $factory->createAuth();
    }

    public function register()
    {
        return view('registration');
    }

    public function showLoginForm()
    {
        return view('login');
    }




    public function validateRegistration(Request $request)
    {
        // Validate user input
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Retrieve user input
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');

        try {
            // Create the user in Firebase authentication
            $userProperties = [
                'email' => $email,
                'password' => $password,
            ];
            $createdUser = $this->firebaseAuth->createUser($userProperties);

            // Set additional user properties
            $user = $this->firebaseAuth->getUser($createdUser->uid);
            $userProperties = [
                'displayName' => $username,
            ];
            $this->firebaseAuth->updateUser($user->uid, $userProperties);

            return redirect('/')->with('success', 'Registration Successful!');
        } catch (FirebaseException $e) {
            // Handle any errors that occur during the registration process
            return redirect()->back()->withInput()->withErrors([$e->getMessage()]);
        }
    }

    public function validateLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $email = $credentials['email'];
        $password = $credentials['password'];

        try {
            // Sign in the user with email and password
            $signInResult = $this->firebaseAuth->signInWithEmailAndPassword($email, $password);

            // Get the user from the sign-in result
            $user = $signInResult->data();

            // Perform login actions, e.g., store user ID in session or redirect to dashboard
            return redirect()->route('dashboard');
        } catch (FailedToSignIn $e) {
            // Handle failed sign-in attempts, e.g., invalid credentials
            return redirect()->back()->withErrors(['credentials' => 'Invalid credentials']);
        } catch (FirebaseException $e) {
            // Handle any other errors that occur during the login process
            return redirect()->back()->withErrors([$e->getMessage()]);
        }
    }
}
