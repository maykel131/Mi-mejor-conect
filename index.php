<?php 

class conectar
{  private $servidor="localhost";
   private $usuario="root";
   private $senha="";
   private $bd="cadastrar";

   public $cone;

	
	function __construct()
	{
	  try {        
        $this->cone=mysqli_connect($this->servidor,
        	         		 $this->usuario,
        	         		 $this->senha,
        	         		 $this->bd);
	  		if($this->cone){echo "conecto";}
	  	} catch (Exception $e) {
	  		echo "Error al conectar".$e;
	  	}	
	}


    //esta function sentencia sirve para todo,update, insert, select y delete.
	public function sentencia($sql){
		
	  return	$resul=mysqli_query($cone,$sql);

	}

	public function desconectar(){
		mysql_close($cone);
	} 
}

$obj=new conectar();

?>