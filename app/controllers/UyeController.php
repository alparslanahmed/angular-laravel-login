<?php

class UyeController extends BaseController {

	public function profil()
	{
		if (Auth::check())
		{
   			$isim = Auth::user()->isim;
   			$yetki = Auth::user()->yetki;
   			return Response::json(array('isim'=>$isim, 'yetki'=>$yetki));
		}else{
			return 0;
		}
	}

}
