<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;

class testAccess extends TestCase
{    
	/*Connect to DB*/
    private $connect = null;

    public function getConnection()
    {
	if($this->connecy ===null)
	{
		try{
        $sql = new PDO('mysqli:host=localhost;dbname=testOrder', 'root'); 
        this->conn = $this->createDefaultDBConnection($sql, 'testOrder');
        }
        catch(PDOException $i)
        	echo $e->getMessage();
    }
	return $this->connect;
}
?>
