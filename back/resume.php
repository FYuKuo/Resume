<?php
$Resume = new DB('resume_resume');
$rows = $Resume->all("ORDER BY `order_num`");
?>
<div class="container right_content">
    <!-- 麵包屑 -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="./back.php">後台管理</a>
            </li>
            <li class="breadcrumb-item active">
                工作經驗管理
            </li>
        </ol>
    </nav>

    <!-- 表單 -->
    <form action="./api/resume.php" method="post">
        <div class="form_group">

            <div class="form_item form_item_Title">
                <div>
                    <div class="form_item_header">
                        工作經驗管理
                    </div>
                    <div class="form_item_text">
                        請輸入要更新的文字內容
                    </div>
                </div>
                <div class="addBtn">
                    <button type="button" class="btn btn-success">
                        新增
                    </button>
                </div>
            </div>

            <div>
                <?php
                foreach ($rows as $key => $row) {
                ?>
                    <div class="form_item_group">

                        <div class="form_item form_item_control">
                            <div class="form_item_num">
                                第<?= $key + 1 ?>筆資料
                            </div>

                            <div class="form_item_btns">
                                <div class="order_btn">
                                    <button type="button" class="btn btn-outline-secondary ">上</button>
                                    <button type="button" class="btn btn-outline-secondary ">下</button>
                                </div>

                                <div class="form_item_sh">
                                    顯示&nbsp;&nbsp;&nbsp;
                                    <div class="sh_bg <?= ($row['sh'] == 1) ? 'sh_show' : '' ?>" data-id="<?= $row['id'] ?>">
                                        <div class="sh_btn <?= ($row['sh'] == 1) ? 'sh_btn_show' : '' ?>"></div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="form_item">
                            <div class="form_item_text">公司名稱&職稱</div>
                            <input type="text" name="title[]" value="<?= $row['title'] ?>" class="form-control">
                        </div>
                        <div class="form_item">
                            <div class="form_item_text">任職期間</div>
                            <input type="text" name="during[]" value="<?= $row['during'] ?>" class="form-control">
                        </div>
                        <div class="form_item">
                            <div class="form_item_text">文字描述</div>
                            <textarea name="text[]" class="form-control" cols="30" rows="10" style="height: 160px;"><?= $row['text'] ?></textarea>
                        </div>
                        <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
                    </div>

                <?php
                }
                ?>
            </div>

            <div class="form_item form_item_Btn">
                <button type="submit" class="btn btn-primary">更新</button>
            </div>

        </div>
    </form>

    <footer>
        &copy; <?= date('Y') ?> FY
    </footer>
</div>