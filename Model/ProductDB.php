<?php 
	/**
	 * summary
	 */
	class ProductDB
	{
	    /**
	     * summary
	     */
	    public function __construct()
	    {
	        
	    }
	   public static function getDetailProductByID($categoryID)
    {
        $db    = Database::getDB();
        $query = 'SELECT productID, category.categoryID, categoryName, productName, price
					FROM products
					INNER JOIN category ON products.categoryID = category.categoryID
					WHERE category.categoryID = :categoryID';
        try {
            $stm = $db->prepare($query);
            $stm->execute(array(
                'categoryID' => $categoryID,
            ));
            $products = $stm->fetchAll();
            $stm->closeCursor();

            return $products;
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }
	}
 ?>