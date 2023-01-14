<?php
    if(isset($_POST['submit'])){
        // img upload
        $img_name = $_FILES['img']['name'];
        $tmp_name = $_FILES['img']['tmp_name'];
        move_uploaded_file($tmp_name, 'upload/'.$img_name);
        // others details
        $name = $_POST['name'];
        $job = $_POST['job'];
        $email = $_POST['email'];
        $idno = $_POST['idno'];

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        body{
            /* background: blue; */
            display: flex;
            align-items: center;
        }
        .card {
            color: antiquewhite;
        width: 350px;
        height: 450px;
        background-color: #000;
        border: 1px solid #000;
        padding: 20px;
        box-shadow: 0px 2px 5px #ccc;
        }

        .card-header {
            text-align: center;
        }

        .card-header img {
            width: 150px;
            margin-top: 20px;
        }

        .card-body {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }

        .card-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 20px;
        }

        .card-image img {
            width: 100%;
        }

        .card-info {
            flex: 1;
        }

        .card-info .name {
            font-size: 22px;
            font-weight: bold;
            margin-top: 0px;
        }

        .card-info .job-title {
            font-size: 18px;
            font-style: italic;
            margin-top: 5px;
        }

        .card-info .info {
            font-size: 14px;
            margin-top: 5px;
        }

        .card-footer {
            text-align: center;
            margin-top: 20px;
        }

        .card-footer .footer-text {
            font-size: 12px;
            color: #aaa;
        }


    </style>

<body>
   

    <div class="card">
    <div class="card-header">
        <img src="upload/<?php if(isset($img_name)){ echo $img_name;} ?>"
         alt="your image">
    </div>
    <div class="card-body">
        <div class="card-image">
            <!-- <img src="profile.jpg" alt="Profile Picture"> -->
        </div>
        <div class="card-info">
            <h1 class="name"><?php if(isset($name)){ echo $name;} ?></h1>
            <p class="job-title"><?php if(isset($job)){ echo $job;} ?></p>
            <p class="info"><?php if(isset($idno)){ echo $idno;} ?></p>
            <p class="info"><?php if(isset($email)){ echo $email;} ?></p>
            <p class="info">Expiration Date: 01/01/2025</p>
        </div>
    </div>
    <div class="card-footer">
        <p class="footer-text">Issued by: Example Company</p>
    </div>
</div>



</body>
</html>