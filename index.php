<!DOCstype>
<html>
<head>
 <!--css link-->
         <link rel="stylesheet" type="text/css" href="styles/styles.css">
        
        <!--this is for bootstrap link--->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
    <title>hompage</title>
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
    
    
    
  <section>
      <h1>WELCOME TO STUDENT REGESTRATION SYSTEM.</h1>
    </section>
    <br>
<blockquote class="blockquote text-center">
  <p class="mb-0">Student information systems provide capabilities for registering students in courses and managing many other student-related data needs in a school.</p>
  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
    

  <div class="text-center">
            <button type="button" class="fbtn btn-primary btn-lg" onclick="window.location.href = 'create.php';">click here to regester</button>
  </div>
    <!--this for css-->
   <style>
      section {
        display: flex;
        width: 50%;
        height: 200px;
        margin: auto;
      }
      h1 {
        margin: auto; /* Important */
        text-align: center;
        color: white;
        text-shadow: 2px 2px 4px #000000;
        
      }
       
       body{
           background-color: #FFB6C1;
;
       }
    
    </style>
    
    </body>
    
    <!--this is for java script link-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>