<?php

if (isset($_POST['formSubmit'])) {
    $stars = $_POST['stars'];
    $price = $_POST['price'];
    $transport = $_POST['transport'];
    $redir = "country.php";
    $country = $_POST['formCountry'];

    header("Location: $redir?country=$country&stars=$stars&price=$price&transport=$transport");
    exit();
}
