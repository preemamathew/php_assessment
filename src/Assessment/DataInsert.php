<?php 

namespace Assessment;

class DataInsert
{

	private $_conn;

	public $limit;

	public function __construct($conn)
	{
		$this->_conn 	= $conn;	
	}

    public static function world()
    {
        return 'Hello World, Composer!';
    }
    
    public function insertData()
    {
		$insertSql		= "INSERT INTO tbl_sample_data (name, age) VALUES ";
    	for($i = 1; $i <= $this->limit; $i++)
    	{
    		$insertSql 	.= "('name_$i', $i),";
    	}
    	$insertSql		= trim($insertSql, ',');
    	$this->_conn->executeQuery($insertSql);
    	echo "\n $this->limit data are inserted.\n";
    }
}