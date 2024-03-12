<?php
if(isset($_POST['btnSubmit'])){
    $kdproduksi = $_POST['kdproduksi'];
    $tanggal = date_format($tl, "l, d F Y");
    $customer = $_POST['customer'];
    $telp = $_POST['no'];
    $jk = $_POST['gen'];
    $ps = $_POST['mjr'];

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Page</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="container">
    <h1>Your Bio</h1>
    <div class="row">
        <div class="col-6">
            <div class="row my-2">
                <p>Name: <?php echo $nama?></p>
            </div>
            <div class="row my-2">
                <p>E-Mail: <?php echo $email?></p>
            </div>
            <div class="row my-2">
                <p>Password: <?php echo $pass?></p>
            </div>
            <div class="row my-2">
                <p>Birthdate: <?php echo $tanggal?></p>
            </div>
            <div class="row my-2">
                <p>Address: <?php echo $alamat?></p>
            </div>
            <div class="row my-2">
                <p>Gender: <?php echo $jk?></p>
            </div>
            <div class="row my-2">
                <p>Major/Course: <?php echo $ps?></p>
            </div>
        </div>
        <div class="col-6 text-center">
        <p>You'll be directed to Login page...</p>
        </div>
    </div>
    <?php
    echo '<meta http-equiv="Refresh" content="5; URL=login.php">';
    ?>
    <script>swal("Nicely Done!", "Your account has been signed up!", "success");</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@523distjsbootstrapbundleminjs" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>