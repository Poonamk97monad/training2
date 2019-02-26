<?php session_start(); ?>
 


<html>
<head>    
    <title>CURD</title>
</head>
 
<body>
   
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>First Name</td>
                <td><input type="text" name="fname" value="<?php echo $fname;?>"></td>
            </tr>
            <tr> 
                <td>Last Name</td>
                <td><input type="text" name="lname" value="<?php echo $lname;?>"></td>
            </tr>
            <tr> 
                <td>Email-Id</td>
                <td><input type="email" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="text" name="" value="<?php echo $address;?>"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="text" name="" value="<?php echo $address;?>"></td>
            </tr>
            <tr> 
                <td>Address</td>
                <td><input type="text" name="address" value="<?php echo $address;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>