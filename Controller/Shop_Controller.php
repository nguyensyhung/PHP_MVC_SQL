<?php 
	require_once('../Model/Database.php');
	require_once('../Model/CategoryeDB.php');
	require_once('../Model/ProductDB.php');

	$action = filter_input(INPUT_POST,'action') ?? filter_input(INPUT_GET,'action') ?? 'list_all_category';

	switch ($action) {
		case 'list_all_category':
			$categorys = CategoryeDB::getAllCategory();
			include('../View/List_AllCategory_View.php');
			break;
			
		case 'view_detail':
        $categoryID = filter_input(INPUT_GET, 'categoryID', FILTER_VALIDATE_INT);
        if ($categoryID === false) {
            header("Location: Shop_Controller.php");
        } else {
            $products = ProductDB::getDetailProductByID($categoryID);

            include '../View/Detail_View.php';
        }

        break;
		default:
			// code...
			break;
	}
 ?>