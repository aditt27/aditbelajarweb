<?php
session_start();
if($_SESSION['valid']!="admin"){
    header("Location:admin.php");
}
$servername = "localhost";
$username = "id4891206_aditt27";
$password = "asdf1234";
$dbname = "id4891206_aditbelajarweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//insert item
if(isset($_POST['addlulusanitem'])) {
    $newitem = $_POST['newlulusanitem'];
    $sql = "INSERT INTO profillulusan (lulusan) VALUES ('$newitem')";
    $conn->query($sql);
}
//update item
if(isset($_POST['updatelulusanitem'])) {
    $updateitemid = $_POST['updatelulusanitemId'];
    $updateitem = $_POST['updatelulusanitem'];
    $sql = "UPDATE profillulusan SET lulusan = '$updateitem' WHERE id = $updateitemid;";
    $conn->query($sql);
}
//delete item
if(isset($_POST['removelulusanitem'])) {
    $removeitemid = $_POST['removelulusanitemId'];
    $sql = "DELETE FROM profillulusan WHERE id = $removeitemid;";
    $conn->query($sql);
}

if(isset($_POST['addpeluangitem'])) {
    $newitem = $_POST['newpeluangitem'];
    $sql = "INSERT INTO peluangkerja (peluangkerja) VALUES ('$newitem')";
    $conn->query($sql);
}
if(isset($_POST['updatepeluangitem'])) {
    $updateitemid = $_POST['updatepeluangitemId'];
    $updateitem = $_POST['updatepeluangitems'];
    $sql = "UPDATE peluangkerja SET peluangkerja = '$updateitem' WHERE id = $updateitemid;";
    $conn->query($sql);
}
if(isset($_POST['removepeluangitem'])) {
    $removeitemid = $_POST['removepeluangitemId'];
    $sql = "DELETE FROM peluangkerja WHERE id = $removeitemid;";
    $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron padding-20">
    <h2>aditbelajarweb.tk admin panel</h2>
    <a name="logout" href="logout.php" ">Logout</a>
    </div>
</div>
<div class="container">
    <div id="profillulusanadmin">
        <h2>Profil Lulusan</h2>
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>profilLulusan</th>
            </tr>
            </thead>
            <tbody id="profillulusantable">
            <?php
            $sql = "SELECT id, lulusan FROM profillulusan";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["id"]."</td><td>".$row["lulusan"]."</td></tr>";
                }
            }
            ?>
            </tbody>
        </table>
        <button data-toggle="collapse" data-target="#editprofillulusan" class="btn btn-default pull-right">Edit</button>
        </br>
        <div id="editprofillulusan" class="collapse">
            <form action="" method="post">
                <div class="form-group">
                    <label for="newlulusanitem">New Item:</label>
                    <input type="text" class="form-control" placeholder="Enter text" size="60" id="newlulusanitem" name="newlulusanitem">
                </div>
                <button type="submit" name="addlulusanitem" class="btn btn-success">Add Item</button>
            </form>
            <form action="" method="post" style="padding-top: 15px;">
                <div class="form-group">
                    <label for="updatelulusanitemId">Update Item:</label>
                    <input type="number" class="form-control" placeholder="Enter Id" size="2" id="updatelulusanitemId" name="updatelulusanitemId">
                    </br>
                    <input type="text" class="form-control" placeholder="Enter text" size="60" id="updatelulusanitem" name="updatelulusanitem">
                </div>
                <button type="submit" name="updatelulusanitem" class="btn btn-default">Update Item</button>
            </form>
            <form action="" method="post" style="padding-top: 15px;">
                <div class="form-group">
                    <label for="removelulusanitem">Remove Item:</label>
                    <input type="number" class="form-control" placeholder="Enter Id" size="2" id="removelulusanitemId" name="removelulusanitemId">
                </div>
                <button type="submit" name="removelulusanitem" class="btn btn-danger">Remove Item</button>
            </form>
        </div>
    </div>

    <div id="peluangkerjaadmin">
        <h2>Peluang Kerja</h2>
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>peluangkerja</th>
            </tr>
            </thead>
            <tbody id="peluangkerjatable">
            <?php
            $sql = "SELECT id, peluangkerja FROM peluangkerja";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["id"]."</td><td>".$row["peluangkerja"]."</td></tr>";
                }
            }
            $conn->close();
            ?>
            </tbody>
        </table>
        <button data-toggle="collapse" data-target="#editpeluangkerja" class="btn btn-default pull-right">Edit</button>
        </br>
        <div id="editpeluangkerja" class="collapse">
            <form action="" method="post">
                <div class="form-group">
                    <label for="newpeluangitem">New Item:</label>
                    <input type="text" class="form-control" placeholder="Enter text" size="60" id="newpeluangitem" name="newpeluangitem">
                </div>
                <button type="submit" name="addpeluangitem" class="btn btn-success">Add Item</button>
            </form>
            <form action="" method="post" style="padding-top: 15px;">
                <div class="form-group">
                    <label for="updatepeluangitemId">Update Item:</label>
                    <input type="number" class="form-control" placeholder="Enter Id" size="2" id="updatepeluangitemId" name="updatepeluangitemId">
                    </br>
                    <input type="text" class="form-control" placeholder="Enter text" size="60" id="updatepeluangitems" name="updatepeluangitems">
                </div>
                <button type="submit" name="updatepeluangitem" class="btn btn-default">Update Item</button>
            </form>
            <form action="" method="post" style="padding-top: 15px;">
                <div class="form-group">
                    <label for="removepeluangitem">Remove Item:</label>
                    <input type="number" class="form-control" placeholder="Enter Id" size="2" id="removepeluangitemId" name="removepeluangitemId">
                </div>
                <button type="submit" name="removepeluangitem" class="btn btn-danger">Remove Item</button>
            </form>
        </div>
    </div>
    </br>
    </br>

</div>
</body>
</html>


