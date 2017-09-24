<?php

namespace App\Http\Controllers;

use App\LoginUser;
use App\Resident;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Exceptions\SocialAuthException;

class LoginController extends Controller
{
    protected $loginUser;
    protected $profile;

    public function __construct(LoginUser $loginUser)
    {
        $this->loginUser = $loginUser;
    }

    public function showLoginPage()
    {
        return view('login');
    }

    public function showDashboard()
    {
        $profile = Resident::where('user_id', auth()->id())->firstOrFail();
        return view('dashboard', compact('profile'));
    }

    public function auth($provider)
    {
        return $this->loginUser->authenticate($provider);
    }

    public function login($provider)
    {
        try {
            $this->loginUser->login($provider);
            if (LoginController::checkUserId())
                return redirect()->action('LoginController@showDashBoard');
            else
                return redirect()->action('LoginController@showUserProfile');
        } catch (SocialAuthException $e) {
            return redirect()->action('LoginController@showLoginPage')
                ->with('flash-message', $e->getMessage());
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->to('/');
    }

    /**
     * Check user_id exist
     */
    public function checkUserId()
    {
        try {
            $user_id = Resident::where('user_id', auth()->id())->firstOrFail();
            return true;
        } catch (ModelNotFoundException $ex) {
            return false;
        }

    }

    /**
     * Show first time login form
     *
     */
    public function showUserProfile()
    {
        return view('residents.user');
    }
}