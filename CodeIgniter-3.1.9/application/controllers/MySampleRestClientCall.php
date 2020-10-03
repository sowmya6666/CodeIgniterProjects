<?php
require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';
use Restserver\libraries\REST_Controller;
//use Restserver\libraries\CI_Controller;	
defined('BASEPATH') OR exit('No direct script access allowed');

//require(APPPATH . '/libraries/REST_Controller.php');
//require(APPPATH . '/libraries/Format.php');

//use Restserver\Libraries\REST_Controller;

/**
 * Description of MySampleRestClientCall
 *
 * @author sowmya
 */
class MySampleRestClientCall extends REST_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('UserModel', 'um');
    }

   function user_get() {
       $username = $this->get('username');

       $password = $this->get('password');

     $result = $this->um->processLogin($username,$password);
//var_dump($result11);


        if ($result === FALSE) {
            $this->response(array('status' => 'failed'));
        } else {
            $this->response(array('status' => 'Hi '.$username.' Welcome to login application'));
        }

	

    }

     
   function mapData_post(){
//echo 'welcome';
$smaple=$this->post('screen_name');
$template_type=$this->post('template_type');
$api_url=$this->post('api_url');
 //echo  $api_url;  
$data = array("username" => "sowmya", "password" => "mypassword");
$data_string = json_encode($data);
//echo $data_string;
$url=$api_url;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json'));
  

//execute post
$result = curl_exec($ch);
//echo $result;
$result1=json_decode($result, true);;
$mapData['map'] = $this->um->getMapData($smaple,$template_type);
//print_r($mapData['map']);
//$sample=$mapData['map'];
foreach ($mapData['map'] as $data)
{

//echo $data->map;
}

$someArray = json_decode($data->map, true);
$jsonKey;
$jsonValue;
$endArray=array();
$i=0;
$j=0;
 //$endArray=array_fill_keys($someArray, $result1);
//var_dump($endArray); 
//$someArray as $key=>$value;	
foreach($someArray as $key){
$keysArray[$j]=$key;
$j++;
}
foreach($result1 as $values){
	$valueArrray[$i]=$values;
$i++;
}
//var_dump($keysArray);
//var_dump($valueArrray);
for($p=0;$p<count($keysArray);$p++){
for($k=0;$k<count($valueArrray);$k++){
$endArray[$keysArray[$p]]=$valueArrray[$p];

}

}
//echo $keysArray[0].":".$valueArrray[0];

echo json_encode($endArray);





//echo $mapData['map'] ;
//curl_close($ch);


 
     
		 }

}
