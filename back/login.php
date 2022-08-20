<?php
session_start();
if(isset($_SESSION['user'])){
    header('location:../back.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入後台｜FangYu's Resume</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">

</head>

<body class="d-flex align-items-center">
    <div class="container d-flex justify-content-center text-center">
        <div class="main">

            <h1 class="my-3">立即登入後台管理</h1>


            <div class="input-group my-4 error justify-content-center">
            </div>
            <div class="input-group my-4">

                <input type="text" name="acc" id="acc" placeholder="帳號" class="form-control">
            </div>

            <div class="input-group my-4">
                <input type="password" name="pw" id="pw" placeholder="密碼" class="form-control">

            </div>

            <button type="button" class="btn btn-primary w-100" onclick="login()">後台管理登入</button>

            <div class="input-group my-4 justify-content-center forgot">
                <a href="./forgot.php">忘記密碼</a>

            </div>
            <br>
            <br>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>


    <script>
        function login() {

            let acc = $('#acc').val();
            let pw = $('#pw').val();

            $.post('../api/ch_acc.php', {
                acc
            }, (res) => {

                // console.log(res);
                if (parseInt(res) == 1) {

                    $.post('../api/ch_pw.php', {
                        acc,pw
                    }, (pw_res) => {

                        // console.log(pw_res);
                        if (parseInt(pw_res) == 1) {

                            location.href = '../back.php';

                        } else {

                            $('.error').addClass('errorshow');
                            $('.error').text('密碼輸入錯誤');
                            $('#acc').val("");
                            $('#pw').val("");

                        }
                    })

                } else {
                    $('.error').addClass('errorshow');
                    $('.error').text('查無此帳號');
                    $('#acc').val("");
                    $('#pw').val("");
                }
            })
        }
    </script>
</body>

</html>