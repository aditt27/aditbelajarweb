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
    <script src="<?php echo base_url('assets/js/jquery.table2excel.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
</head>
<body>
<div class="jumbotron padding-20">
    <h2>aditbelajarweb.tk admin panel</h2>
    <a name="logout" href="login/logout" ">Logout</a>
    </div>
</div>
<div class="container">
    <canvas id="myChart" width="400" height="100"></canvas>
    <script>
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Profil Lulusan", "Peluang Kerja"],
                datasets: [{
                    data: [<?php echo count($profil)?>, <?php echo count($peluang)?>],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                legend: { display: false },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                },
                title: {
                    display: true,
                    text: 'Jumlah Data'
                }
            }
        });
    </script>
    <div id="profillulusanadmin">
        <h2 class="col-md-6">Profil Lulusan</h2>
        <table class="table" id="profillulusan">
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
        <button class="btn btn-default" id="plbutton">Download to Excel</button>
        <br>
        <br>
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

    <br id="peluangkerjaadmin">
        <h2>Peluang Kerja</h2>
        <table class="table" id="peluangkerja">
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
        <button class="btn btn-default" id="pkbutton">Download to Excel</button>
        <button data-toggle="collapse" data-target="#editpeluangkerja" class="btn btn-default pull-right">Edit</button>
        <br>
        <br>
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
<script>
    $("#plbutton").click(function(){
        $("#profillulusan").table2excel({
            name: "Profil Lulusan",
            filename: "profillulusan" //do not include extension
        });
    });

    $("#pkbutton").click(function(){
        $("#peluangkerja").table2excel({
            name: "Peluang Kerja",
            filename: "peluangkerja" //do not include extension
        });
    });
</script>
</body>
</html>


