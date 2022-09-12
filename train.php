<!-- Chicago train Wellspring -->
<!--reads CSV train data,  output data to user -->
<!--upload button, grabe train data form csv file return data to screen/ terminal -->

<!--   
Expected Output:
Train Line, Route Name, Run Number, Operator ID 
    El,     Brown Line,     E102,      SJones 
    Metra,   UPN,            M405      AJohnson 
    Metra,   UPN,            M511,     YSmith 
    Amtrak,  Hiawatha,       A006      LBeck 
    El,      Red Line,       E432,     LHill 
    Amtrak,  Hiawatha,       A005,     LBeck 
-->

<!-- 
Requirements:
1 Allow users to upload the CSV file 
2 Display the data in the specified format as the content of a web page 
3 All entries displayed must be unique 
4 Output should be sorted in alphabetical order by Run Number
-->
<!--
Bonus: 
1 Add pagination controls which show 5 valid data items per page 
2 Add sorting by any column 
3 Set up CRUD (Create, Read, Update, Delete) functionality 
4 Set up hosting and provide a link along with your code  
-->

<!-- 
Notes:
*LAMP stack 
PHPUnit for unit test
github 
-->
<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device=width, initial-scale=1.0">
  <title>Chicago Train Data</title>
</head>  
<body>

</body>
</html>

<!-- Html uplaod form and submit button -->


<!-- Create, Read, Update, Delete -->


<!--  -->
<!-- Sessions save username from login -->
<?php 
session_start(); 

if(isset($_POST['submit'])){
  $username= filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
  $password = $_POST['password'];

  if($username == 'dave' && $password == 'password') {
    $_SESSION['username'] = $username;
    header('Location: /firstphp/extras/dashboard.php');
  } else{
    echo 'Login Incorrect';
  }
}

  
?>

<form action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
  <div>
    <label for="username">Username: </label>
    <input type="text" name="username">
  </div> 
  <div>
    <label for="password">Password: </label>
    <input type="text" name="password">
  </div>
  <input type="submit" value="Submit" name="submit">
</form>

<!-- Post php -->
<?php 
//POST can only be used for forms 
// only use GET in a form to seach  
if(isset($_POST['submit'])){
  $name= filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
  $age = htmlspecialchars( $_POST['age']);

  // $name= filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
  echo $name;
}
?>

<!-- html form -->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=John&age=29">Click</a>  

<form action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
  <div>
    <label for="name">Name: </label>
    <input type="text" name="name">
  </div> 
  <div>
    <label for="age">Age: </label>
    <input type="text" name="age">
  </div>
  <input type="submit" value="Submit" name="submit">
</form>

<!-- dashboard -->

<?php 
  session_start();

  if(isset($_SESSION['username'])) {
    echo '<h1> Welcome '. $_SESSION['username'] . '</h1>';
    echo '<a href="logout.php">Logout</a>';
  } else {
    echo '<h1> Welcome Guset</h1>';
    echo '<a href="/firstphp/13_sessions.php">Home</a>';
  }
?>

<!-- logout -->
<?php 

  session_start();

  session_destroy();
  header('Location: /firstphp/13_sessions.php');

?>