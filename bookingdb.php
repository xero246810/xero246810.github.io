<html>
<head>
<title>pheonix tours and travels</title>
<link rel="stylesheet" href="Tem Menu Style.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
 <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<style>
body {
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
.grow-wrap {
  display: grid;
}
.grow-wrap::after {
  content: attr(data-replicated-value) " ";
  visibility: hidden;
}
.grow-wrap > textarea {
  resize: none;
 overflow: hidden;
}
.grow-wrap > textarea,
.grow-wrap::after {
  border: 1px solid black;
  padding: 0.5rem;
  font: inherit;

  grid-area: 1 / 1 / 2 / 2;
}
label {
  display: block;
}
* {
  box-sizing: border-box;
}

.box {
  float: left;
  width: 33.33%;
  padding: 25px;
}
.pad{
  padding: 25px;
}
.form-submit-button {
	background: #182ed9;
	color: #fff;
	border: 1px solid #eee;
	border-radius: 20px;
	 font-size: 25px;
}

.form-submit-button:hover {
	background: #016ABC;
	color: #fff;
	border: 1px solid #eee;
	border-radius: 20px;
	}
</style>
</head>
<body background="https://www.elnidoparadise.com/wp-content/uploads/las-cabanas-beach-el-nido-palawan.jpg" style="border:5px double cyan;">

<div class="pad"><h1 style="background:rgba(0,0,0,0.4); border:5px double cyan;"><center style="color:white; size='200px';"><marqee>Pheonix T.N.T<br>(Pheonix Tours aNd Travels)</marqee></center></h1></div>
<div class="pad"><div style="padding-right:500; padding-left:500;"> 
<h1 style="color:white"><fieldset style="background:rgba(0,0,0,0); border:5px double cyan;">
<?php  

$link = mysqli_connect('localhost', 'sai', 'sai','tours');
if (!$link)	 {
    				echo "Could not connect:" ;
			 }     

else		{echo "Connected successfully";}


if(isset($_POST["submit"])){ // Fetching variables of the form which travels in URL
$dest = $_POST["dest"];
$strt = $_POST["strt"];
$cartype = $_POST["cartype"];
$date = $_POST["date"];
$amt = $_POST["amt"];
$email = $_POST["email"];
$db ="INSERT INTO tntdb(dest, strt, cartype,date,amt,email) 
	VALUES ('$dest','$strt','$cartype','$date','$amt','$email')";


if ($link->query($db) === TRUE) {
  $last_id = mysqli_insert_id($link);
  echo "New record created successfully. <center><h1>your booking ID no. is: " . $last_id."</h1></center>";
} else {
  echo "Error: " . $db. "<br>" . $link->error;
}

mysqli_close($link); // Closing Connection with Server
}

?>
</h1></div></div>
</body>
</html>