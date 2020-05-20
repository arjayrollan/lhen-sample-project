
<!DOCTYPE html>
<html>
    <head>
        
        
        <!--css-->
         <link rel="stylesheet" type="text/css" href="styles/styles.css">
        
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    </head>
<body>
<!---navbarbootrap4--->
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     <li class="nav-item">
        <a class="nav-link" href="index.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create.php">Regester</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="view.php">Student Record</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Developer</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
    
    <center>
    <!--cardbootsrap4-->
    <div class="card" style="width: 20rem; ">
  <img src="img/background1.png" class="card-img-top" alt="...">
  <div class="card-body">
    <!--registration-->
<h2>Register Now </h2>

<form action="" method="POST">
  <fieldset>
    <legend></legend>
    Full name:<br>
    <input type="text" name="fullname">
    <br>
    address:<br>
    <input type="text" name="address">
    <br>
    <br>
    Course:<br>
    <input type="text" name="course">
    <br>
    Email:<br>
    <input type="email" name="email">
    <br>
    Password:<br>
    <input type="password" name="password">
    <br>
    Gender:<br>
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female
    <br><br>
      <!--button-->
    <input type="submit" class="btn btn-primary" name="submit" value="submit">
      <button type="button" class="btn btn-primary" onclick="window.location.href = 'view.php';">View Records</button>
  </fieldset>
    </form>
        </div>
    </div>
    </center>
    
 <!--this is for css-->
  <style>
  body, html {
  background-color:	#FFB6C1;
}  
</style>    
    
    
    
   <!--this for  php---> 
    <?php 
include "config.php";

// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit'])) {
		// get variables from the form
		$full_name = $_POST['fullname'];
		$address = $_POST['address'];
        $course = $_POST['course'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$gender = $_POST['gender'];

		//write sql query

		$sql = "INSERT INTO `users`(`fullname`, `address`, `course` ,`email`, `password`, `gender`) VALUES ('$full_name','$address','$course','$email','$password','$gender')";

		// execute the query

		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "New record created successfully.";
		}else{
			echo "Error:". $sql . "<br>". $conn->error;
		}

		$conn->close();

	}
?>
    
   



        </body>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>    

    
</html>