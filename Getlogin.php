<?php

include_once('dbconnect.php');

class Login extends Dbconnection
{
	public $manuname;
	public $name;
	public $desc;
	public $color;
	public $manu_year;
	public $manufacture;
	public $Path1;
	public $Path2;
//==================Login to dashboard==================================
	public function getuser($adminname,$adminpass)
	{
		$mypassword = md5($adminpass);
		$query = "SELECT * FROM `user` where username='$adminname' AND password ='$mypassword'";
		$this->sqlquery = $query;
		$this->result = mysqli_query($this->oCon,$this->sqlquery);
		if(mysqli_num_rows($this->result) > 0)
		{
			$rows = mysqli_fetch_array($this->result,MYSQLI_ASSOC);
			session_start();
			$_SESSION['adminname'] = $adminname;

			 header('location:Dashboard.php');
			
			
		}
		else
		{
			 session_start();
              $_SESSION['error']= '<div class="alert alert-danger text-center">Invalid username and password!</div>';
              
              header('location:admin_login.php');
		}
	}

	//==================Create Manufacture deatil==================================
	public function setmanufacturevalue($name)
	{
		$this->manuname = $name;
		
	}

	//==================Create new Manufacture==================================
	public function insertsetmanufacturevalue()
	{
		$query = "INSERT INTO `car_inventary`.`manufacturer`(`name`) VALUES ('$this->manuname')";
		$this->sqlquery = $query;
		$this->result = mysqli_query($this->oCon,$this->sqlquery) or die("Error in updating");
			if($this->result)
			{
				echo "<p class='alert alert-success'>Succesfully Saved</p>";

			}
			else
			{
				echo "Cannot saved data";
			}

			
	}

	
	//===========Get all manufacturer=================================
	public function getmanufacture()
	{
		$query = "SELECT * FROM `car_inventary`.`manufacturer`";
		$this->sqlquery = $query;
		$this->result = mysqli_query($this->oCon,$this->sqlquery);
		if(mysqli_num_rows($this->result) >0)
		{
			return $this->result;
		}
		else
		{
			return false;
		}
	}

	
	//==================Edit manufacturer==================================
	public function updatemanufacture($id,$name)
	{
		    
		$query = "UPDATE `manufacturer` SET `name`='$name' WHERE `id` = '$id'";
		$this->sqlquery = $query;
		$this->result = mysqli_query($this->oCon,$this->sqlquery) or die("Error in updating");
			if($this->result)
			{
				echo "<p class='alert alert-success'>Succesfully updated</p>";

			}
			else
			{
				echo "Error in updating";
			}
	}
//==================Delete manufacturer==================================
	public function deletemanufacture($id)
	{
		    
			$query = "DELETE  FROM `manufacturer` WHERE `id`='$id'";
			$this->sqlquery = $query;
			$this->result = mysqli_query($this->oCon,$this->sqlquery) or die("Error in updating");
			if($this->result)
			{
				echo "<p class='alert alert-danger'>RECORD DELETED</p>";

			}
			else
			{
				echo "Error in deleting";
			}
	}

//==================Set model value==================================
	public function setcardetails($model_name,$desc,$color,$manu_year,$manufacture,$targetPath1,$targetPath2)
	{
		$this->name = $model_name;
		$this->desc = $desc;
		$this->color = $color;
		$this->manu_year = $manu_year;
		$this->manufacture = $manufacture;
		$this->Path1 = $targetPath1;
		$this->Path2 = $targetPath2;
		
	}

	public function updatecardetails($model_name,$desc,$color,$manu_year,$manufacture)
	{
		$this->name = $model_name;
		$this->desc = $desc;
		$this->color = $color;
		$this->manu_year = $manu_year;
		$this->manufacture = $manufacture;
		
		
	}

//==================Create new model==================================
	public function insertcardata()
	{
	   $query = "INSERT INTO `model`(`model_name`,`color`,`brand_id`,`manufacture_year`,`description`,`image1`,`image2`) VALUES ('$this->name','$this->color','$this->manufacture','$this->manu_year','$this->desc','$this->Path1','$this->Path2')";
		$this->sqlquery = $query;
		$this->result = mysqli_query($this->oCon,$this->sqlquery) or die("Error in updating".mysqli_error($this->oCon));
			if($this->result)
			{
				echo "Succesfully Saved";

			}
			else
			{
				echo "Cannot saved data";
			}

			
	}

	//===========Get all models=================================
	public function getallmodels()
	{
		$query = "SELECT *,`model`.`id` as model_id FROM `model` LEFT JOIN `manufacturer` ON `model`.`brand_id`=`manufacturer`.`id`";
		$this->sqlquery = $query;
		$this->result = mysqli_query($this->oCon,$this->sqlquery);
		if(mysqli_num_rows($this->result) >0)
		{
			
			return $this->result;
		}
		else
		{
			return false;
		}
	}
//==================delete model==================================
	public function deletemodel($modelid)
	{
		    
			$query = "DELETE  FROM `model` WHERE `id`='$modelid'";
			$this->sqlquery = $query;
			$this->result = mysqli_query($this->oCon,$this->sqlquery) or die("Error in updating");
			if($this->result)
			{
				echo "RECORD DELETED";

			}
			else
			{
				echo "Error in deleted";
			}
	}

//==================View each model==================================
	public function geteachmodel($model_id)
	{
		    
			$query = "SELECT *,`model`.`id` as model_id FROM `model` LEFT JOIN `manufacturer` ON `model`.`brand_id`=`manufacturer`.`id` WHERE `model`.`id` = '$model_id'";
			$this->sqlquery = $query;
			$this->result = mysqli_query($this->oCon,$this->sqlquery) or die("Error in updating");
			if(mysqli_num_rows($this->result) >0)
			{
				$result = mysqli_fetch_array($this->result,MYSQLI_ASSOC);
				return $result;
			}
			else
			{
				return false;
			}
	}
//==================Update each model==================================
	public function updateeachmodel($model_id)
	{
			$query = "UPDATE `model` SET `model_name`='$this->name',`color`='$this->color',`brand_id`= '$this->manufacture',`manufacture_year`='$this->manu_year',`description`='$this->desc' WHERE `id` = '$model_id'";
			$this->sqlquery = $query;
			$this->result = mysqli_query($this->oCon,$this->sqlquery) or die("Error in updating".mysqli_error($this->oCon));
			if($this->result)
			{
				echo "Succesfully updated";

			}
			else
			{
				echo "Error in updating";
			}
	}



}


?>