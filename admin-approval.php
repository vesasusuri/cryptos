<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="center">
        <h1>User Register</h1>
        <table id="useres">
            <tr>
                <th>id</th>
                <th>Usernam</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </table>

        <?php 
         $query = "SELECT * FROM withdraw WHERE status = 'pending' ORDER BY id ASC";
         $result = mysqli_query($conn, $query);
         while ($row = mysqli_fetch_array($result)){
        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['username']?></td>
            <td><?php echo $row['email_address']?></td>
            <td>
                <form action = "admin-approval.php" method = "POST">
                <input type="hidden" name="id" value="<?php echo $row['id']?>"></input>
                <input type="submit" name="approve" value="Approve"/>
                <input type="submit" name="deny" value="Deny"/>
</form>
</td>
        </tr>
</table>
<?php } ?>
    </div>
</body>
</html>

<?php 
 $conn=mysqli_connect("localhost", "root" , "" , "crypto" );
 mysqli_select_db($conn, 'crypto');

if(isset($_POST['approve'])){
    $id = $_POST ['id'];

    $select = "UPDATE withdraw SET status='approved' WHERE id= '$id'"
    $result = mysqli_query($conn, $select);

    echo '<script type = "text/javascript">';
    echo 'alert("Withdraw is Approved")'
    echo 'window.open.href = "admin-approval.php"';
    echo "</script>"; 
}
?>