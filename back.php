<?php
$do = $_GET['do'] ?? 'main';
include('./api/base.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>後台管理｜FY's Resume</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/back.css">
</head>

<body>

    <div class="content d-flex flex-wrap">

        <div class="nav_top d-flex ">

            <nav class="navbar shadow-sm  navbar-expand-lg navbar-light bg-light px-lg-5 py-2 justify-content-end right_nav">
                <button class="navbar-toggler left_toggler" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand phone_logo" href="./back.php">
                    FY's Resume 後台管理
                </a>

                <button class="navbar-toggler user_toggler" type="button">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </button>


                <div class="user_nav">
                    <ul class="navbar-nav mt-2 mt-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link" href="./index.html">
                                前台
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                登出
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>


            <nav class="navbar navbar-expand-lg navbar-light bg-light left_nav">
                <a class="navbar-brand" href="./back.php">
                    FY's Resume 後台管理
                </a>

            </nav>


        </div>

        <div class="left">
            <a href="?do=introduce" class=" left_item <?=($do == 'introduce')?'left_item_active':''?>">
                <span><i class="fa-solid fa-id-card"></i></span> 個人簡介管理
            </a>
            <a href="?do=education" class=" left_item <?=($do == 'education')?'left_item_active':''?>">
                <span><i class="fa-solid fa-graduation-cap"></i></span> 學習歷程管理
            </a>
            <a href="?do=resume" class=" left_item <?=($do == 'resume')?'left_item_active':''?>">
                <span><i class="fa-solid fa-briefcase"></i></span> 工作經驗管理
            </a>
            <a href="?do=portfolio" class=" left_item <?=($do == 'portfolio')?'left_item_active':''?>">
                <span><i class="fa-solid fa-palette"></i></span> 作品集管理
            </a>
            <a href="?do=contact" class=" left_item <?=($do == 'contact')?'left_item_active':''?>">
                <span><i class="fa-solid fa-phone"></i></span> 聯絡資訊管理
            </a>
            <a href="?do=banner" class=" left_item <?=($do == 'banner')?'left_item_active':''?>">
                <span><i class="fa-solid fa-image"></i></span> Banner管理
            </a>
            <a href="?do=logo" class=" left_item <?=($do == 'logo')?'left_item_active':''?>">
                <span><i class="fa-solid fa-palette"></i></span> Logo管理
            </a>
            <a href="?do=admin" class=" left_item <?=($do == 'admin')?'left_item_active':''?>">
                <span><i class="fa-solid fa-user"></i></span> 帳號管理
            </a>
        </div>

        <div class="right">
            <?php
            if (file_exists('./back/' . $do . '.php')) {
                include('./back/' . $do . '.php');
            } else {
                to('./back.php');
            }
            ?>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <!-- resume orderbtn -->
    <script src="./js/resume_orderbtn.js"></script>

    <!-- resume sh -->
    <script src="./js/resume_sh.js"></script>

    <!-- resume del -->
    <script src="./js/resume_del.js"></script>

    <!-- resume add -->
    <script src="./js/resume_add.js"></script>

    <script>
        // nav
        $('.left_toggler').click(function() {
            $('.left').fadeToggle();
        })

        $('.user_toggler').click(function() {
            $('.user_nav').fadeToggle();
        })


        $(document).ready(function() {
            //custom-file show name
            $(".custom-file-input").change(function() {
                $(this).next(".custom-file-label").html($(this).val().split("\\").pop());

            });

            // img edit hover
            $('.form_item_img>img').mouseover(function(){

                $(this).next().addClass('form_item_img_btn_show');

                $('.form_item_img_btn').mouseover(function(){

                    $(this).addClass('form_item_img_btn_show');

                })
            })

            $('.form_item_img_btn').mouseout(function(){
                $(this).removeClass('form_item_img_btn_show');
            })



            // img form submit
            $('.edit_img_file').change(function(){
                // console.log($(this).parent());
                $(this).parent().submit();
            })



        });


    </script>
</body>

</html>