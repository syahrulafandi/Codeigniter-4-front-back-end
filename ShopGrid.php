<?php namespace App\Controllers;

use App\Models\Kategori_M;
use App\Models\Menu_M;

class ShopGrid extends BaseController
{
	public function index()
	{
		$model = new Kategori_M;
		$model2 = new Menu_M;
		$kategori = $model->findAll();
		$menu = $model2->findAll();
		$data = [
			'kategori' => $kategori,
			'menu' => $menu
		];
		echo view('shop_grid/shop_grid',$data);
	}

	//--------------------------------------------------------------------

}
