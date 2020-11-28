<?php namespace App\Controllers;

use App\Models\Kategori_M;
use App\Models\Menu_M;

class Homepage extends BaseController
{
	public function index()
	{
        $db = \Config\Database::connect();
        $cart = \Config\Services::cart();

        $model = new Kategori_M;
        $model2 = new Menu_M;
        
        $query = $db->query("SELECT * FROM tblidentitas");
        $row = $query->getRowArray();

        $kategori = $model->findAll();
        $menu = $model2->findAll();
		$data = [
            'cart' => $cart,
            'kategori' => $kategori,
            'menu' => $menu,
            'identitas' => $row
        ];
        echo view('home/homepage',$data);
    }

    public function option()
    {
        $model = new Kategori_M();
        $kategori = $model->findAll();
        $data = [
                'kategori' => $kategori,
            ];
        return view('template/option', $data);
    }

	//--------------------------------------------------------------------

}