<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</head>
<body>
<div class="jumbotron padding-20">
    <h2>aditbelajarweb.tk admin panel</h2>
    <a name="logout" href="login/logout" ">Logout</a>
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
            foreach ($profil as $new_item) {
                echo "<tr><td>".$new_item["id"]."</td><td>".$new_item["lulusan"]."</td></tr>";
            }
            ?>
            </tbody>
        </table>
        <button data-toggle="collapse" data-target="#editprofillulusan" class="btn btn-default pull-right">Edit</button>
        </br>
        <div id="editprofillulusan" class="collapse">
            <form action="admin/addlulusanitem" method="post">
                <div class="form-group">
                    <label for="newlulusanitem">New Item:</label>
                    <input type="text" class="form-control" placeholder="Enter text" size="60" id="newlulusanitem" name="newlulusanitem">
                </div>
                <button type="submit" name="addlulusanitem" class="btn btn-success">Add Item</button>
            </form>
            <form action="admin/updatelulusanitem" method="post" style="padding-top: 15px;">
                <div class="form-group">
                    <label for="updatelulusanitemId">Update Item:</label>
                    <input type="number" class="form-control" placeholder="Enter Id" size="2" id="updatelulusanitemId" name="updatelulusanitemId">
                    </br>
                    <input type="text" class="form-control" placeholder="Enter text" size="60" id="updatelulusanitems" name="updatelulusanitems">
                </div>
                <button type="submit" name="updatelulusanitem" class="btn btn-default">Update Item</button>
            </form>
            <form action="admin/removelulusanitem" method="post" style="padding-top: 15px;">
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
            foreach ($peluang as $new_item) {
                echo "<tr><td>".$new_item["id"]."</td><td>".$new_item["peluangkerja"]."</td></tr>";
            }
            ?>
            </tbody>
        </table>
        <button data-toggle="collapse" data-target="#editpeluangkerja" class="btn btn-default pull-right">Edit</button>
        </br>
        <div id="editpeluangkerja" class="collapse">
            <form action="admin/addpeluangitem" method="post">
                <div class="form-group">
                    <label for="newpeluangitem">New Item:</label>
                    <input type="text" class="form-control" placeholder="Enter text" size="60" id="newpeluangitem" name="newpeluangitem">
                </div>
                <button type="submit" name="addpeluangitem" class="btn btn-success">Add Item</button>
            </form>
            <form action="admin/updatepeluangitem" method="post" style="padding-top: 15px;">
                <div class="form-group">
                    <label for="updatepeluangitemId">Update Item:</label>
                    <input type="number" class="form-control" placeholder="Enter Id" size="2" id="updatepeluangitemId" name="updatepeluangitemId">
                    </br>
                    <input type="text" class="form-control" placeholder="Enter text" size="60" id="updatepeluangitems" name="updatepeluangitems">
                </div>
                <button type="submit" name="updatepeluangitem" class="btn btn-default">Update Item</button>
            </form>
            <form action="admin/removepeluangitem" method="post" style="padding-top: 15px;">
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


