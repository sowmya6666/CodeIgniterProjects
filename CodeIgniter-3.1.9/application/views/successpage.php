
<!DOCTYPE html>
<html lang="en">
 <head>
    <link href="<?= base_url();?>css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
    <div class="container">
            <div class="row">
               <div class="col-md-6">
                 <div class="row">
                  <div class="col-md-12">
                      <h3>Login Successful <?=$this->session->userdata('FIRST_NAME')?> <?=$this->session->userdata('LAST_NAME')?>
<!--<?=$this->session->userdata('PASSWORD')?>--></h3>
                      <!--<a href="<?= base_url();?>index.php/logout">Logout</a> -->
                                           
                     </div>
<?php
//$this->load->library('Curl');
$username= $this->session->userdata('LAST_NAME');

$password=$this->session->userdata('PASSWORD');
//echo $password;
	/**$someArray =[["name"=>"Jabc","gender"=>"male"],["name"=>"sowmya","gender"=>"female"],["name"=>"sample","gender"=>"female"]] ; //Sample PHP Array
  foreach ($someArray as $key => $value) {
    echo $value["name"] . ", " . $value["gender"] . "<br>";
  }**/
 
$data = array("username" => $username, "password" => $password);
$data_string = json_encode($data);
echo $data_string;
$url='http://localhost:8080/login/postuser';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json'));
   

//execute post
$result = curl_exec($ch);

//echo $result;
//close connection
//curl_close($ch);
 
    if(isset($result))
    {
       echo $result;

$url='http://localhost:8080/postdata/sample';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $result);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json'));
   

//execute post
$result1 = curl_exec($ch);
echo $result1;
curl_close($ch);
    }
     
    else
    {
        echo 'scksncjkdsnficds';
    }



 ?>                  </div>
                </div>               
            </div>
  </div> 
 <a href="<?= base_url();?>/user/logout">Logout</a>         
    </body>
</html>
