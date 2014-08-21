<?php

class LoginController extends BaseController {

	public function login()
	{
		$post = Input::all();

		if (Auth::attempt(array('kullanici' => $post['kullanici'], 'password' => $post['password']),true))
		{

    		$isim = Auth::user()->isim;
    		return Response::json(array('isim'=>$isim));

		}else{

			return 0;

		}
	}

	public function logout(){

		Auth::logout();
		return Redirect::to('/');
	}

}
