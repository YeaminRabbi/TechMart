<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class SocialPagesController extends Controller
{
    //
    function loginWithGithub(){
        return Socialite::driver('github')->redirect();
    }
    function GithubCallBack(){
        $user = Socialite::driver('github')
        ->setHttpClient(new \GuzzleHttp\Client(['verify' => false]))
        ->user();

        if(User::where('email',$user->getEmail())->exists()){
            $get_user= User::where('email',$user->getEmail())->first();
            Auth::guard()->login($get_user,true); // Ami j authenticate hoye ashtesi oita O validate kortese
            return redirect()->to('/');
        }
        else{
            $create_user = User::create([
                'name'  =>  $user->getName(),
                'email' => $user->getEmail(),
                'provider' => 'github',
                'provider_id' => $user->getId()

            ]);
            Auth::guard()->login($create_user,true);
            return redirect()->to('/');
        }
        
        // return $user->getId();
        
    }



    function loginWithGoogle(){
        return Socialite::driver('google')->redirect();
    }
    function GoogleCallBack(){
        $user = Socialite::driver('google')
        ->setHttpClient(new \GuzzleHttp\Client(['verify' => false]))
        ->user();

        if(User::where('email',$user->getEmail())->exists()){
            $get_user= User::where('email',$user->getEmail())->first();
            Auth::guard()->login($get_user,true); // Ami j authenticate hoye ashtesi oita O validate kortese
            return redirect()->to('/');
        }
        else{
            $create_user = User::create([
                'name'  =>  $user->getName(),
                'email' => $user->getEmail(),
                'provider' => 'google',
                'provider_id' => $user->getId()

            ]);
            Auth::guard()->login($create_user,true);
            return redirect()->to('/');
        }

        // return $user->getId();
    }


    function loginWithFacebook(){
        return Socialite::driver('facebook')->redirect();
    }
    function FacebookCallBack(){
        $user = Socialite::driver('facebook')
        ->setHttpClient(new \GuzzleHttp\Client(['verify' => false]))
        ->user();

        if(User::where('email',$user->getEmail())->exists()){
            $get_user= User::where('email',$user->getEmail())->first();
            Auth::guard()->login($get_user,true); // Ami j authenticate hoye ashtesi oita O validate kortese
            return redirect()->to('/');
        }
        else{
            $create_user = User::create([
                'name'  =>  $user->getName(),
                'email' => $user->getEmail(),
                'provider' => 'facebook',
                'provider_id' => $user->getId()

            ]);
            Auth::guard()->login($create_user,true);
            return redirect()->to('/');
        }

        // return $user->getId();
    }













}
