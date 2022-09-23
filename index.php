<?php
include('./api/base.php');
$Introduce = new DB('resume_introduce');
$Contact = new DB('resume_contact');
$Banner = new DB('resume_banner');
$Skill = new DB('resume_skill');

?>

<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FangYu's Resume</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/home.css">
</head>

<body>
    <!-- nav -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light py-2 fixed-top myNav">
        <div class="container-fluid">

            <a class="navbar-brand myLogo" href="./index.php">FangYu's Resume</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
                <ul class="navbar-nav mt-2 mt-lg-0 ">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#introduce">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skill">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Resume">Resume</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <?php
                    if (isset($_SESSION['user'])) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="./back.php">Back</a>
                    </li>
                    <?php
                    } else {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="./back/login.php">Login</a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- nav end -->

    <!-- banner -->
    <div class="banner" style="background-image: url('./img/<?= $Banner->find(1)['img'] ?>');">

        <div class="container bannerText">
            <h1 class="display-4"><?= $Banner->find(1)['title'] ?></h1>
            <p class="lead"><?= $Banner->find(1)['text'] ?></p>
        </div>

    </div>
    <!-- banner end -->

    <!-- introduce-->
    <div class="introduce box_item" id="introduce">
        <div class="container myTitle">
            <h2>
                About
            </h2>

        </div>

        <div class="container myIntroduce ">

            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-5 col-sm-10 mx-4 d-flex justify-content-center my-4">
                    <img src="./img/photo-1.jpg" alt="" class="myPhoto">
                </div>

                <div class="myText col-lg-5 col-sm-10 mx-4 my-4 ">
                    <pre><?= $Introduce->find(1)['text'] ?></pre>
                </div>

            </div>
        </div>

    </div>
    <!-- introduce end -->

    <!-- skill -->
    <div class="skill box_item" id="skill">
        <div class="container myTitle">
            <h2>
                Skills
            </h2>
        </div>
        <div class="container-fluid skill_card_group">
            <div class="skill_card_out">
                <div class="skill_card skill_card_frontend">
                    <div class="skill_card_front">
                        Front End
                    </div>
                    <div class="skill_card_back">
                        <?php
                        $datas1 = $Skill->all(['type'=>1,'sh'=>1],"ORDER BY `order_num` DESC");
                        foreach ($datas1 as $key => $data) {
                        ?>
                        <div class="skill_item">
                            <div class="skill_item_title">
                                •&nbsp;&nbsp;<?=$data['title']?>
                            </div>
                            <div class="skill_item_text">
                                <?=$data['text']?>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="skill_card_out">
                <div class="skill_card skill_card_backend">
                    <div class="skill_card_front">
                        Back End
                    </div>
                    <div class="skill_card_back">
                        <?php
                        $datas2 = $Skill->all(['type'=>2,'sh'=>1],"ORDER BY `order_num` DESC");
                        foreach ($datas2 as $key => $data) {
                        ?>
                        <div class="skill_item">
                            <div class="skill_item_title">
                                •&nbsp;&nbsp;<?=$data['title']?>
                            </div>
                            <div class="skill_item_text">
                                <?=$data['text']?>
                            </div>
                        </div>
                        <?php
                        }
                    ?>
                    </div>
                </div>
            </div>

            <div class="skill_card_out">
                <div class="skill_card skill_card_design">
                    <div class="skill_card_front">
                        Design
                    </div>
                    <div class="skill_card_back">
                        <?php
                        $datas3 = $Skill->all(['type'=>3,'sh'=>1],"ORDER BY `order_num` DESC");
                        foreach ($datas3 as $key => $data) {
                        ?>
                        <div class="skill_item">
                            <div class="skill_item_title">
                                •&nbsp;&nbsp;<?=$data['title']?>
                            </div>
                            <div class="skill_item_text">
                                <?=$data['text']?>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="skill_card_out">
                <div class="skill_card skill_card_framework">
                    <div class="skill_card_front">
                        Framework
                    </div>
                    <div class="skill_card_back">
                        <?php
                        $datas4 = $Skill->all(['type'=>4,'sh'=>1],"ORDER BY `order_num` DESC");
                        foreach ($datas4 as $key => $data) {
                        ?>
                        <div class="skill_item">
                            <div class="skill_item_title">
                                •&nbsp;&nbsp;<?=$data['title']?>
                            </div>
                            <div class="skill_item_text">
                                <?=$data['text']?>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- introduce end -->

    <!-- Resume -->
    <div class="Resume box_item justify-content-center" id="Resume">
        <div class="container myTitle">
            <h2>
                Resume
            </h2>
        </div>
        <div class="row d-flex justify-content-center container-fluid">


            <div class="resume_itme_group col-lg-4 col-md-5 col-sm-10 mx-4 my-4 text-left">
                <h4>學習歷程</h4>
                <?php
                $Edu = new DB('resume_education');
                $edus = $Edu->all(['sh' => 1], "ORDER BY `order_num` DESC");
                foreach ($edus as $key => $edu) {
                ?>
                <div class="resume_items">
                    <div class="resume_item_title  resume_item">
                        <?= $edu['title'] ?>
                    </div>
                    <div class="resume_item_during  resume_item">
                        <?= $edu['during'] ?>
                    </div>
                    <div class=" resume_itme_text resume_item">
                        <pre><?= $edu['text'] ?></pre>
                    </div>

                </div>
                <?php
                }
                ?>
            </div>

            <div class="resume_itme_group col-lg-4 col-md-5 col-sm-10 mx-4 my-4 text-left">
                <h4>工作經歷</h4>
                <?php
                $Resume = new DB('resume_resume');
                $resumes = $Resume->all(['sh' => 1], "ORDER BY `order_num` DESC");
                foreach ($resumes as $key => $resume) {
                ?>
                <div class="resume_items">

                    <div class="resume_item_title resume_item">
                        <?= $resume['title'] ?>
                    </div>
                    <div class="resume_item_during resume_item">
                        <?= $resume['during'] ?>
                    </div>
                    <div class=" resume_itme_text resume_item">
                        <pre><?= $resume['text'] ?></pre>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>

        </div>
    </div>
    <!-- Resume end -->

    <!-- Portfolio -->
    <div class="Portfolio box_item" id="Portfolio">
        <div class="container myTitle">
            <h2>
                Portfolio
            </h2>
            <div class="row Portfolio_Btns d-flex justify-content-center align-items-center my-4">
                <!-- <button type="button" class="btn btn-outline-primary mx-3 Portfolio_Btn_item"
                  onclick="Portfolio('0')">全部</button> -->
                <button type="button" class="btn btn-outline-primary mx-3 Portfolio_Btn_item"
                    onclick="Portfolio('1')">前端</button>
                <button type="button" class="btn btn-outline-primary mx-3 Portfolio_Btn_item active"
                    onclick="Portfolio('2')">後端</button>
                <button type="button" class="btn btn-outline-primary mx-3 Portfolio_Btn_item"
                    onclick="Portfolio('3')">設計</button>
            </div>
        </div>
        <div class="Portfolio_items container">

        </div>
    </div>
    <!-- Portfolio end -->

    <!-- contact -->
    <div class="contact box_item" id="contact">
        <div class="container myTitle">
            <h2>
                Contact
            </h2>
        </div>
        <div class="container contact_items my-4">

            <div class="row">

                <div class="contact_text col-lg-4 mb-3">

                    <div class="contact_text_item my-4 d-flex">
                        <div class="contact_text_icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="contact_text_group">
                            <div class="contact_text_title">
                                Location:
                            </div>
                            <div class="contact_text_p">

                                <?= $Contact->find(1)['address'] ?>
                            </div>

                        </div>
                    </div>

                    <div class="contact_text_item my-4 d-flex">
                        <div class="contact_text_icon">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                        </div>
                        <div class="contact_text_group">
                            <div class="contact_text_title">
                                Phone:
                            </div>
                            <div class="contact_text_p">

                                <?= $Contact->find(1)['tel'] ?>
                            </div>

                        </div>
                    </div>

                    <div class="contact_text_item my-4 d-flex">
                        <div class="contact_text_icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="contact_text_group">
                            <div class="contact_text_title">
                                Email:
                            </div>
                            <div class="contact_text_p">

                                <?= $Contact->find(1)['email'] ?>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="contact_form_group col-lg-8 my-3">

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                        </div>

                        <div class="form-group col-6">
                            <label for="tel">Tel</label>
                            <input type="text" class="form-control" id="tel" placeholder="Your Phone Number">
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="title">Subject</label>
                            <input type="text" class="form-control" id="title" placeholder="Subject">
                        </div>
                        <div class="form-group col-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                        </div>


                    </div>

                    <div class="form-group">
                        <label for="text">Message</label>
                        <textarea class="form-control" id="text" rows="3" placeholder="Message"></textarea>
                    </div>
                    <button type="button" class="btn btn-primary myContactBtn">Send Message</button>
                </div>
            </div>


        </div>

        <div class="container mb-4">
            <div class="contact_map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3616.2565399241107!2d121.42133430111345!3d24.99139739016994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34681d3e664884f7%3A0xb952545084f5b2d8!2z5qi55p6X6LuK56uZ!5e0!3m2!1szh-TW!2stw!4v1663908244445!5m2!1szh-TW!2stw" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>

    </div>
    <!-- contact end -->

    <footer>
        &copy; <?= date('Y') ?> FangYu Kuo
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</body>

<script>
$(document).ready(function() {

    // scroll nav change
    $(document).scroll(function() {

        if ($(document).scrollTop() > 150) {
            $('.myNav').addClass('myNavScroll');
            $('.myNav').addClass('shadow');
        } else {
            $('.myNav').removeClass('myNavScroll')
            $('.myNav').removeClass('shadow')
        }

    })

    if ($(document).scrollTop() > 150) {
        $('.myNav').addClass('myNavScroll');
        $('.myNav').addClass('shadow');
    }

    // Portfolio hover show btn
    $('.Portfolio_items').on('mouseenter', '.Portfolio_item_img>img', function() {

        $(this).next().addClass('Portfolio_item_fly_show');

    })

    $('.Portfolio_items').on('mouseleave', '.Portfolio_item_fly', function() {
        $(this).removeClass('Portfolio_item_fly_show');
    })

    Portfolio(2)

    // myContactBtn click add message
    $('.myContactBtn').on('click', function() {
        let email = $('#email').val();
        let name = $('#name').val();
        let title = $('#title').val();
        let text = $('#text').val();
        let tel = $('#tel').val();


        if (email == '' || name == '' || title == '' || text == '' || tel == '') {
            Swal.fire({
                icon: 'error',
                title: '新增失敗',
                text: '資料尚未填寫完畢!',
            })

        } else {


            $.post('./api/save_message.php', {
                email,
                name,
                title,
                text,
                tel
            }, (res) => {
                Swal.fire({
                    icon: 'success',
                    title: '送出成功',
                    text: '成功送出一筆資料!',
                }).then((result) => {
                    if (result.isConfirmed) {
                        let email = $('#email').val('');
                        let name = $('#name').val('');
                        let title = $('#title').val('');
                        let text = $('#text').val('');
                        let tel = $('#tel').val('');
                    }
                })

                // console.log(res);
            })
        }
    })
})



// Portfolio_Btn_item click show type
function Portfolio(type) {
    $('.Portfolio_items').children().remove();


    $.get('./api/portfolio_show.php', {
        type
    }, (res) => {

        res = JSON.parse(res);

        let addhtml = '';

        for (let i = 0; i < res.length; i++) {

            addhtml = addhtml + `
          <div class="Portfolio_item ">
            <div class="Portfolio_item_img">
              <img src="./img/${res[i].img}" alt="">

              <div class="Portfolio_item_fly">

                <div class=" Portfolio_itme_text">
                ${res[i].text}
                </div>
                <div class=" Portfolio_itme_Btn">
                  <a href="${res[i].href}" target="_blank">
                    <button class="btn btn-primary" type="button">查看</button>
                  </a>
                </div>
              </div>
            </div>

            <div class="Portfolio_item_title text-left">
            ${res[i].title}
            </div>
          </div>`

        }


        $('.Portfolio_items').append(addhtml);
    })
}

// Portfolio Btn active
$('.Portfolio_Btn_item').on('click', function() {
    $('.Portfolio_Btn_item').removeClass('active');
    $(this).addClass('active');
})


$('.nav-item').on('click',function(){
    $('.navbar-collapse').removeClass('show');
    $('.navbar-toggler').addClass('collapsed');
    $('.navbar-toggler').attr('aria-expanded',false);
})

</script>

</html>