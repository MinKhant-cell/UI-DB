<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<?php
$conn= mysqli_connect('localhost','root','','trs');
$sql = "SELECT * FROM products";
$query = mysqli_query($conn,$sql);
?>

<div class="container">
    <div class="row">
        <div class="col-12 my-5">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>

                    <th>Title</th>
                    <th>Price</th>
                    <th>CreatedAt</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($query as $row){ ?>
                <tr>
                    <?php foreach ($row as $col){ ?>
                        <td><?php echo $col; ?> </td>
                    <?php } ?>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
