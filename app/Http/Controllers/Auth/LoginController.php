<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        $usuario = User::where('email', $request->email)->first();
        if (isset($usuario)) {
            if (app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName() == 'servicios') {
//                if (!$usuario->isRol('socio')) {
//                    return redirect('/web/servicios')
//                        ->withInput()
//                        ->withErrors([
//                            'email' => 'El usuario no tiene acceso como Asociado',
//                        ]);
//
//                }
            } else {

                if (!$usuario->isRol('admin')) {
                    return redirect('/login')
                        ->withInput()
                        ->withErrors([
                            'email' => 'El usuario no tiene acceso como Administrador',
                        ]);

                }

            }


        }


        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }


    protected function authenticated(Request $request, $user)
    {

        if ($user->isRol('socio')) {
            return redirect()->route('servicios');
        } else {
            if (app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName() == 'servicios') {
                return redirect()->route('servicios');
            } else {
                return redirect('/home');
            }
        }
    }
}
