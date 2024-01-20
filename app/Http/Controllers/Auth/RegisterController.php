<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/profiles/create';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
        ]);
    }

    /**
     * 
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    
    
        // 1. ユーザーの仮登録処理
    public function register(Request $request)
    {
        // バリデーションなどの処理
        $temporaryUser =  TemporaryUsers::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'verification_token' => Str::uuid(), // ユニークなトークンを生成
        ]);
    
        // 仮登録メールを送信
        $user->notify(new UserRegisteredNotification($user));
        
        // ユーザーには仮登録中の状態を表示するページへリダイレクトなど
        // return redirect()->route('verification.pending');
        return view('registers.pending'); // 仮登録中の状態を表示するビューを返す
    }


    // 2. ユーザーの本登録処理
    public function verify($token)
    {
        $temporaryUser = TemporaryUsers::where('verification_token', $token)->firstOrFail();
        // $user = User::where('verification_token', $token)->firstOrFail();
    
        $user = User::create([
            'name' => $temporaryUser->name,
            'email' => $temporaryUser->email,
            'password' => $temporaryUser->password,
        ]);
    
        // $user->update([
        //     'verified' => true,
        //     'verification_token' => null, // トークンをクリア
        // ]);
    
        // 本登録が成功したらログイン
        Auth::login($user);
        
        // 本登録が成功したら、仮登録用のレコードを削除
        $temporaryUser->delete();
    
        return redirect()->route('home');
    }
    
}