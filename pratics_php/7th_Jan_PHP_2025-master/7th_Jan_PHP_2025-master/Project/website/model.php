

<?php

class model {
	
	public $conn="";
	function __construct(){
		$this->conn=new Mysqli('localhost','root','','jan7th');// hostname , username,pass ,db name
	}
		
	function select($tbl){
		
		$sel="select * from $tbl";    // query
		$run=$this->conn->query($sel); // query run of database
		while($fetch=$run->fetch_object())   // fetch all result data from $run 
		{
			$arr[]=$fetch; // all data store in arr
		}
		return $arr;
	}
	
	function insert($tbl,$arr){ //$arr=array("name"=>$name,"email"=>$email,"comment"=>$comment);
		
		
		$key_arr=array_keys($arr); // array("0"=>"name","1"=>"email","2"=>"comment")
		$col=implode(",",$key_arr); // conver arr to string // name,email,comment
		
		$values_arr=array_values($arr);
		$value=implode("','",$values_arr); // 'raj','raj@gmail.com','hello'
		
		$ins="insert into $tbl($col) values('$value')";    // query
		$run=$this->conn->query($ins); // query run of database
		return $run;
	}
	
	// select * from $tbl where email="" and pass="" 
	
	// data fetch 
	// login 
	
	function select_where($tbl,$arr)
	{	
		$col_arr=array_keys($arr);
		$values_arr=array_values($arr);
		
		$sel="select * from $tbl where 1=1";    // 1=1 means query continue
		$i=0;
		foreach($arr as $d)
		{
			$sel.=" and $col_arr[$i]='$values_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($sel); // query run of database
		return $run;
	}
	
	function delete($tbl,$where){
		
		$col_arr=array_keys($where);
		$values_arr=array_values($where);
		
		$del="delete from $tbl where 1=1";    // 1=1 means query continue
		$i=0;
		foreach($where as $d)
		{
			$del.=" and $col_arr[$i]='$values_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($del); // query run of database
		return $run;
	}
	
	// update table set key=value,key=value where id=1
	function update($tbl,$arr,$where){
		
		$col_arr=array_keys($arr);
		$values_arr=array_values($arr);
		
		$upd="update $tbl set ";
		$j=0;
		$count=count($arr);
		foreach($arr as $d)
		{
			if($count==$j+1)
			{
				$upd.=" $col_arr[$j]='$values_arr[$j]'";
			}
			else
			{
				$upd.=" $col_arr[$j]='$values_arr[$j]',";
				$j++;
			}
		}
		$wcol_arr=array_keys($where);
		$wvalues_arr=array_values($where);
		
		$upd.=" where 1=1";    // 1=1 means query continue
		$i=0;
		foreach($where as $d)
		{
			echo $upd.=" and $wcol_arr[$i]='$wvalues_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($upd); // query run of database
		return $run;	
	}
	
	
}

$obj=new model;

?>