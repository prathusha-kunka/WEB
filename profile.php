
<!DOCTYPE html>
<html>
<head>
  <style>
  .card
  {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 300px;
    margin: auto;
    text-align: center;
    font-family: arial;
  }

  .title
  {
    color: grey;
    font-size: 18px;
  }

  button
  {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
  }

  a
  {
    text-decoration: none;
    font-size: 22px;
    color: black;
  }

  button:hover, a:hover
  {
    opacity: 0.7;
  }
  </style>
  <?php
    include 'authentication.php';
    include 'parent.php';
    include 'marks.php';
    $errors = array();
    
    //header("front.php");
  ?>
</head>
<body>
  <form method="get" action="profile.php">
    <div class="card">
      <img src="profile.jpg" alt="John" style="width:100%">
      <label name="p">Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="n" value="<?php echo $name?>"/>
      <br>
      <label name="e">E-Mail-ID</label>&nbsp;&nbsp;<input type="email" name="e">
      <p><button>Contact</button></p>
    </div>
  </form>
</body>
</html>