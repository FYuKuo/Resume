<?php
$Message = new DB('resume_message');
$rows = $Message->all();
?>
<div class=" right_content">
    <!-- 麵包屑 -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="./back.php">後台管理</a>
            </li>
            <li class="breadcrumb-item active">
                訊息管理
            </li>
        </ol>
    </nav>

    <!-- 表單 -->
    <form action="" method="post">
        <div class="form_group">
            <div class="form_item form_item_Title">
                <div>
                    <div class="form_item_header">
                        訊息管理
                    </div>
                    <div class="form_item_text" style="margin: 0;">
                        請選擇欲更新的項目
                    </div>
                </div>

            </div>

            <!-- data -->
            <div>
                <?php
                foreach ($rows as $key => $row) {
                ?>
                    <div class="form_item_group">

                        <div class="form_item form_item_control">
                            <span class="form_item_num">第<?= $key + 1 ?>筆資料</span>

                            <div class="form_item_del" data-id="<?= $row['id'] ?>">
                                <i class="fa-solid fa-trash-can"></i>
                            </div>
                        </div>

                        <div class="row form_item">

                            <div class=" col-6">
                                <div class="form_item_text">留言人姓名</div>
                                <div  class="form-control">
                                    <?= $row['name'] ?>
                                </div>
                            </div>
                            <div class=" col-6">
                                <div class="form_item_text">留言人電話</div>
                                <div  class="form-control">
                                <?= $row['tel'] ?>
                                </div>
                            </div>
                        </div>

                        <div class="row form_item">

                            <div class=" col-6">
                                <div class="form_item_text">留言主旨</div>
                                <div  class="form-control">
                                <?= $row['title'] ?>
                                </div>

                            </div>
                            <div class=" col-6">

                                <div class="form_item_text">留言人信箱</div>
                                <div  class="form-control">
                                <?= $row['email'] ?>
                                </div>

                            </div>
                        </div>

                        <div class="form_item">
                            <div class="form_item_text">留言訊息</div>
                            <textarea class="form-control" cols="30" rows="10" style="height: 100px;" disabled><?= $row['message'] ?></textarea>
                        </div>
                        <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
                    </div>

                <?php
                }
                ?>
            </div>
            <!-- data end -->
            <input type="hidden" name="table" id="table" value="<?= $_GET['do'] ?>">
        </div>

</div>
</form>

</div>
<footer>
    &copy; <?= date('Y') ?> FY
</footer>