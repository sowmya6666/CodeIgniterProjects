<?php
class UserModel extends CI_Model {

 function __construct(){
  parent::__construct();
 }

 function processLogin($userName,$password){

	/** $this->db->select("USER_ID,USER_NAME,FIRST_NAME,LAST_NAME,PASSWORD");
  $whereCondition = $array = array('USER_NAME' =>$userName,'PASSWORD'=>$password);
  $this->db->where($whereCondition);
 $this->db->from('user');
  $query = $this->db->get();**/
echo $userName;
echo $password;
$query = 
$this->db->query('Select USER_ID,USER_NAME,FIRST_NAME,LAST_NAME,PASSWORD FROM user where USER_NAME="'.$userName.'" and PASSWORD ="'.$password.'"');
//echo $query;
if($query->num_rows()>0){
return $query;
}else{
echo'i got used to it';
return false;
}
  
 }


function getMapData($screenName,$templateType){
$query = 
$this->db->query('Select map  FROM culsterbub where screen_name ="'.$screenName.'" and tempate_type ='.$templateType);
if($query->num_rows()>0){

foreach ($query->result() as $row)
{
       // echo $row->map;
        //return $row-map;
$data[]=$row;
return $data;
}

}else{
return false;
}

}

}
?>
