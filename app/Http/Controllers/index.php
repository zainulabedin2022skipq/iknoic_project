<?php
namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\user;
use App\Models\user_feedback;

class index extends Controller
{
    public function index(){
        $product = product::paginate(6);
        $feedback = user_feedback::all();

        return view('index',[
            'feedback' => $feedback,
            'product' => $product
        ]);
    }

// =============== Register and Login page ===================================
public function register(){
    return view('register');
}

public function login(){
    return view('login');
}

public function store_register(request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6'
        ]);
        $data = $request->all();
        $user = user::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        session(['user' => $data ]);
        return redirect('register')->with(['success' => 'Your account created Successfully']);

    }


public function store_login(Request $request)
    {

    $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);
    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        if ($user->status == 1) {
            return redirect()->intended('dashboard')->withSuccess('Signed in');
        } else {
            return redirect("index");
        }
    }
    return redirect("/")->with('message', 'Login details are not valid');
}

public function logout()
{
    Session::forget('user');

    Auth::logout();

    return redirect("/");
}

// =============== End Register and Login ====================================


}
