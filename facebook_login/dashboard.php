<?php 
require "../config.php";

if (isset($_SESSION['access_token'])){
 echo '<h1>loged in</h1>';
}
else{
    echo '<h1>not loged in</h1>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>irembo.gov</title>
</head>
<body>
    <form action="" method="post">
    <header class="text-white p-1 text-center"style="background-color:blue;">
<h5>IREMBO|Practical CAT</h5>
</header>
  
<header class="text-center py-1 fw-bold shadow-sm text-white" style="background-color: blue;">
</header>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="shadow-sm border p-5 text-center rounded">
            <div class="py-5">
                <a href="../logout.php" class="btn w-100 text-white" style="background-color: blue;">
                <i class="fa fa-facebook" aria-hidden="true"></i>
                    <span class="ps-3">log out</span>
                </a>
            </div>
        </div>
    </div>
</body>