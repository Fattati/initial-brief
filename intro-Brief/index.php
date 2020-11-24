<?php
   $connect = mysqli_connect("localhost", "root", "","meal");
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="main.css">
<title>Add Records Form</title>
</head>
<body>

<div class="form-wrap">
<h1>Make Command</h1>
         
 <form action="insert.php" method="post">
	<p>
    	<label for="firstName">First Name:</label>
        <input type="text" name="first_name" id="fname">
    </p>
    <p>
    	<label for="lastName">Last Name:</label>
        <input type="text" name="last_name" id="lname">
    </p>
    <p>
    	<label for="number">Tele:</label>
        <input type="text" name="number" id="number">
    </p>
    <p>
    	<label for="zone">D Zone</label>
        <input type="text" name="zone" id="zone">
    </p>
    <input type="submit" value="add">
 </form>
        
</div>
<!-- Fetch from DB -->
<?php
$query = "SELECT *  FROM daily_meal";
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result)>0) {
    while($row = mysqli_fetch_array($result)){ ?>
    <h2> Today Meal:    </h2> 

    
<img src="<?php echo $row["dimg"]; ?>" class="img-fluid" alt="Responsive image"> 
<?php
}
    }?>

      
</body>
</html>