<?php
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_DATABASE','project');

Class dbConnect
{
  public $db;
        public function __construct()
        {
          $this->db= new mysqli(DB_SERVER, DB_USERNAME,DB_PASSWORD,DB_DATABASE);

          if(mysqli_connect_errno())
          {
            echo "Error:Could not connect to database.";
            exit;
          }
        }

        /*
  public function dbConnection()
  {
    $this->con=new mysqli("localhost","root","","project");
    if(!$this->con)
    {
      echo "Opps!Error in database connection";
    }
    else
    {
      "Database successfully connected";
    }
  }*/
}



 ?>
