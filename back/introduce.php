<?php
$Introduce = new DB('resume_introduce');
$text = $Introduce->find(1)['text'];
?>
<div class=" right_content">

    <!-- 麵包屑 -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="./back.php">後台管理</a>
            </li>
            <li class="breadcrumb-item active">
                個人簡介管理
            </li>
        </ol>
    </nav>

    <!-- 表單 -->
    <form action="./api/introduce.php" method="post">
        <div class="form_group">
            <div class="form_item form_item_Title">
                <div class="d-flex flex-column justify-content-center">
                    <div class="form_item_header">
                        個人簡介管理
                    </div>
                    <div class="form_item_text">
                        請輸入要更新的文字內容
                    </div>
                </div>
            </div>
            <div class="form_item">
                <textarea name="text" cols="30" rows="10" class="form-control"><?= $text ?></textarea>
            </div>
            <div class="form_item form_item_Btn">
                <button type="submit" class="btn btn-primary">更新</button>
            </div>

        </div>
    </form>

</div>
<footer>
    &copy; <?= date('Y') ?> FY
</footer>