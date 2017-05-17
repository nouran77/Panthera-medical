<?php
namespace App\Http\Controllers;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
//use Auth;
class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function register(RegisterRequest $request)
    {
        $user           = new User;
        $user->name     = $request['name'];
        $user->email    = $request['email'];
        $user->type     = $request['type'];
        $user->password = bcrypt($request['password']);
        if ($user->save()){
            Auth::guard()->login($user);
            return response()->json(['success' => true, 'url' => '/'], 200);
        }
    }
    public function login(LoginRequest $request)
    {
        if($request->remember) {
            $remember = true;
        }
        else {
            $remember = false;
        }
        $loginData = [
            'email'   =>$request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($loginData, $remember)){
            if (Auth::user()->type == 'user'){
                $url = 'user';
            }
            elseif(Auth::user()->type == 'admin'){
                $url = 'admin';
            }
            return response()->json(['success' => true, 'url' => $url], 200);
        }
        else {
            return response()->json(['error' => ['Invalid mobile number or password. Please try again.']], 402);
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function getLogin()
    {
        return view('login');
    }
}