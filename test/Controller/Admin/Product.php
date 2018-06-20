<?php

namespace Controller\Admin;

use Controller\Controller;
use Model\DB;

class Product extends Controller
{
	public function product_brand()
	{
		$this->display('Product/product_brand');
	}

	public function product_category()
	{
		$this->display('Product/product_category');
	}

	public function product_category_add()
	{
		$this->display('Product/product_category_add');
	}

	public function product_list()
	{
		$this->display('Product/product_list');
	}
}