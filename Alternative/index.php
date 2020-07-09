<?php
    include_once "insert1.php";
?>

<!DOCTYPE html>
<html>

<form action="signup.php" method="POST">
  <table>
   <tr>
    <td>Name :</td>
    <td><input type="text" name="username" required></td>
   </tr>
   <tr>
    <td>Password :</td>
    <td><input type="pass_word" name="pass_word" required></td>
   </tr>
   <tr>
    <td>Email :</td>
    <td><input type="email" name="email" required></td>
   </tr> 
   <tr>
    <td><input type="submit" value="Submit"></td>
   </tr>
  </table>
 </form>

<body>
    <?php
        $sql = "INSERT INTO users (username, pass_word, email)" ;
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);

    ?>

</body>
</html>