<?php 
	
	class CategoryeDB
	{
	    
	    public function __construct()
	    {
	        
	    }

	public static function getAllCategory()
	{
		$db    = Database::getDB();
        $query = 'SELECT * FROM category';
        try {
            $stm = $db->prepare($query);
            $stm->execute();
            $categorys = $stm->fetchAll();
            $stm->closeCursor();

            return $categorys;
        } catch (PDOException $ex) {
            die('Error: ' . $ex->getMessage());
        }
	}
}
 ?>