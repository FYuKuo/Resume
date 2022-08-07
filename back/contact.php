<?php
$Contact = new DB('resume_contact');
$data = $Contact->find(1);
?>
<div class=" right_content">
    <!-- 麵包屑 -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="./back.php">後台管理</a>
            </li>
            <li class="breadcrumb-item active">
                聯絡資訊管理
            </li>
        </ol>
    </nav>

    <!-- 表單 -->
    <form action="./api/contact.php" method="post">
        <div class="form_group">
            <div class="form_item form_item_Title">
                <div class="d-flex flex-column justify-content-center">
                    <div class="form_item_header">
                        聯絡資訊管理
                    </div>
                    <div class="form_item_text">
                        請輸入要更新的文字內容
                    </div>
                </div>
            </div>
            <div class="form_item">
                <input type="text" name="address" value="<?= $data['address'] ?>" class="form-control">
            </div>
            <div class="form_item">
                <input type="text" name="tel" value="<?= $data['tel'] ?>" class="form-control">
            </div>
            <div class="form_item">
                <input type="email" name="email" value="<?= $data['email'] ?>" class="form-control">
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