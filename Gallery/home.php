<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header("location:login.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viemport" contect="width=device-width, initial-scale=1.">
    <title>Halamana Home</title>
        <!-- Bootstrap core CSS-->
        <link href="assets/bootstarp/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="sytlesheet"type="text/css">
    <!-- Custom styles for this template-->
    <link href="assets/custom/custom.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        h1 {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
            overflow: hidden;
            color: white;
            background-color: grey;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: grey;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: grey;
            color: white;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        td a {
            text-decoration: none;
            padding: 5px 10px;
            margin: 2px;
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            border-radius: 3px;
        }
        
        #search-form {
            margin: 20px;
            text-align: center;
            float: right;
        }

        #search-input {
            padding: 10px;
            width: 200px;
        }

        #search-button {
            padding: 10px;
            background-color: #4CAF50;
        }

        footer {
            background-color: grey;
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 0 0 8px 8px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>selamat datang dihalaman home</h1>


    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="album.php">Album</a></li>
        <li><a href="foto.php">Foto</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    <footer>Copyright Nadia Nur Febrianti </footer>
</body>
</html>