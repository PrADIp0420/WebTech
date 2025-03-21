<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emlpoyee Management System</title>
    <script>
        function validates(){
            if(document.f1.t1==""){
                alert("Enetr Name of Employee");
                document.f1.t1.focus;
            }
            if(document.f1.t2==""){
                alert("Enetr Emp No");
                document.f1.t2.focus;
            }
            if(document.f1.t3==""){
                alert("Enetr Email");
                document.f1.t3.focus;
            }
            if(document.f1.t4==""){
                alert("Enetr Mobile Number");
                document.f1.t4.focus;
            }
            if(document.f1.t5==""){
                alert("Enetr Address");
                document.f1.t5.focus;
            }
        }
    </script>
</head>
<body>
    <form name="f1" method="post">
        <table >
            <tr>
                <td>Employee Name:</td>
                <td><input type="text" name="t1"></td>
            </tr>
            <tr>
                <td>Emp NO:</td>
                <td><input type="number" name="t2"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="t3"></td>
            </tr>
            <tr>
                <td>Mobile Mo:</td>
                <td><input type="number" name="t4"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="t5"></td>
            </tr>
        </table>
        <input type="submit" name="b1" value="Add" onclick="validates()">
        <input type="submit" name="b2" value="Update" onclick="validates()">
        <input type="submit" name="b3" value="Delete" onclick="validates()">
        <input type="submit" name="b4" value="Display" onclick="validates()">

    </form>
    <?php 
  
    if(isset($_POST['b2']))
    {
        echo "Employee Detail Updated Successfully";
    }
    if(isset($_POST['b3']))

    {
        echo "Employee Detail Deleted Successfully";
    }
    if(isset($_POST['b4']))
    {
        echo "Employee Detail Display Successfully";
    }

    $conn = new mysqli("localhost","root", "", "employee");
    

    if(isset($_POST['b1']))
    {
        $name = $_POST['t1'];
        $EmpNo= $_POST['t2'];
        $email = $_POST['t3'];
        $mobile = $_POST['t4'];
        $address = $_POST['t5'];
   
        
        $sql = "insert into student values('$name', $EmpNo, '$email', $mobile, '$address')
        VALUES ('$name', $EmpNo, '$email', $mobile, '$address')";
        $result = $conn->query($sql);
        if($result)
        {
            echo "Employee Detail Added Successfully";
        }
      
        
    }
  ?>


</body>
</html>