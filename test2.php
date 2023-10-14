title>pheonix tours and travels</title>
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
<body background="https://www.elnidoparadise.com/wp-content/uploads/las-cabanas-beach-el-nido-palawan.jpg" style="border:5px double cyan;">

<div class="pad"><div style="padding-right:500; padding-left:500;"> 
<h1 style="color:white"><fieldset style="background:rgba(0,0,0,0); border:5px double cyan;"><?php
$link = mysqli_connect('localhost', 'sai', 'sai','tours');
if (!$link)	 {
    				echo "Could not connect:" ;
			 }     

else		{echo "Server status:Connected successfully<br>";}
if(isset($_POST["submit"])){ // Fetching variables of the form which travels in URL
$id = $_POST["id"];
if( is_null($id)==false ){
        $db ="SELECT * FROM tntdb WHERE id='$id';";

        $result = mysqli_query($link, $db);
$row = mysqli_fetch_array($result);
$dest1= $row["dest"];
$strt1= $row["strt"];
$cartype1= $row["cartype"];
$date1= $row["date"];
$amt1= $row["amt"];
$email1= $row["email"];
echo"<p style='background:cyan; color:black;'>your booking record details:</p>";
echo $dest1."<br>";
echo $strt1."<br>";
echo $cartype1."<br>";
echo $date1."<br>";
echo $amt1."<br>";
echo $email1."<br>";
}
}
?>
</h1></div></div>
</body>
</html>
