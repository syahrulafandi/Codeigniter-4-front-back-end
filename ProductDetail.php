<?php namespace App\Controllers;

use App\Models\Kategori_M;
use App\Models\Menu_M;

class ProductDetail extends BaseController
{
	public function index($id = null)
	{
		$cart = \Config\Services::cart();
		$model = new Menu_M();
		$menu = $model->find($id);

		$kategorimodel = new Kategori_M();
		$kategori = $kategorimodel->findAll();

		$db = \Config\Database::connect();
		$query = $db->query("SELECT * FROM tblidentitas");
		$row = $query->getRowArray();

		$data = [
			'cart' => $cart,
			'menu' => $menu,
			'kategori' => $kategori,
			'identitas' => $row

		];
		echo view('product_detail/product_detail',$data);
	}

	//--------------------------------------------------------------------

}