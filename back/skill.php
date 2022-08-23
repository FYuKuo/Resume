<?php
$Skill = new DB('resume_skill');
$rows = $Skill->all("ORDER BY `order_num` DESC");
?>
<div class=" right_content">
    <!-- 麵包屑 -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="./back.php">後台管理</a>
            </li>
            <li class="breadcrumb-item active">
                技能資訊管理
            </li>
        </ol>
    </nav>

    <!-- 表單 -->
    <div class="form_group">
        <div class="form_item form_item_Title">
            <div>
                <div class="form_item_header">
                    技能資訊管理
                </div>
                <div class="form_item_text" style="margin: 0;">
                    請輸入要更新的文字內容
                </div>
            </div>
            <div class="addBtn">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addAdminModal">
                    新增
                </button>
            </div>
        </div>

        <!-- modal -->
        <div class="modal fade" id="addAdminModal" tabindex="-1" aria-labelledby="addAdminModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- modal-header -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="addAdminModalLabel">新增技能資訊</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- modal-header end -->

                    <!-- modal-body -->
                    <form method="post" action="./api/skill_add.php" id="skillForm" >
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title" class="col-form-label">標題</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="form-group">
                                <label for="type" class="col-form-label">分類</label>
                                <select name="type" id="type" class="form-control">
                                    <option value="1">前端</option>
                                    <option value="2">後端</option>
                                    <option value="3">設計</option>
                                    <option value="4">其他</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="text" class="col-form-label">文字描述</label>
                                <textarea class="form-control" id="text" name="text"></textarea>
                            </div>
                        </div>
                        <!-- modal-body end -->

                        <!-- modal-footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                            <button type="submit" class="btn btn-primary">確定新增</button>
                        </div>
                        <!-- modal-footer end -->

                    </form>
                </div>
            </div>
        </div>
        <!-- modal end -->


        <!-- data -->
        <div>
            <?php
            foreach ($rows as $key => $row) {
            ?>
                <div class="form_item_group">

                    <div class="form_item form_item_control">
                        <span class="form_item_num">第<?= $key + 1 ?>筆資料</span>

                        <div class="form_item_btns">
                            <span class="form_item_smtitle">排序</span>
                            <div class="order_btn" data-order="<?= $row['order_num'] ?>" data-id="<?= $row['id'] ?>">
                                <button type="button" class="btn btn-outline-primary order_upbtn">上</button>
                                <button type="button" class="btn btn-outline-primary order_bnbtn">下</button>
                            </div>

                            <div class="form_item_sh">
                                <span class="form_item_smtitle">顯示</span>
                                <div class="sh_bg <?= ($row['sh'] == 1) ? 'sh_show' : '' ?>" data-id="<?= $row['id'] ?>">
                                    <div class="sh_btn <?= ($row['sh'] == 1) ? 'sh_btn_show' : '' ?>"></div>
                                </div>
                            </div>
                            <div class="form_item_del" data-id="<?= $row['id'] ?>">
                                <i class="fa-solid fa-trash-can"></i>
                            </div>
                        </div>

                    </div>

                    <!-- form -->
                    <form action="./api/skill.php" method="post">
                        <div class="form_item">
                            <div class="form_item_text">技能標題</div>
                            <input type="text" name="title" value="<?= $row['title'] ?>" class="form-control">
                        </div>
                        <div class="form_item">
                            <div class="form_item_text">技能分類</div>
                            <select name="type" class="form-control">
                                <option value="1" <?= ($row['type'] == 1) ? 'selected' : '' ?>>前端</option>
                                <option value="2" <?= ($row['type'] == 2) ? 'selected' : '' ?>>後端</option>
                                <option value="3" <?= ($row['type'] == 3) ? 'selected' : '' ?>>設計</option>
                                <option value="4" <?= ($row['type'] == 4) ? 'selected' : '' ?>>其他</option>
                            </select>
                        </div>
                        <div class="form_item">
                            <div class="form_item_text">文字描述</div>
                            <textarea name="text" class="form-control" cols="30" rows="10" style="height: 80px;"><?= $row['text'] ?></textarea>
                        </div>
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">

                        <!-- update btn -->
                        <div class="form_item form_item_portfolio_Btn">
                            <input type="hidden" name="table" id="table" value="<?= $_GET['do'] ?>">
                            <button type="submit" class="btn btn-primary">更新</button>
                        </div>
                        <!-- update btn end -->
                </div>

                </form>
            <?php
            }
            ?>
        </div>
        <!-- data end -->



    </div>

    <footer>
        &copy; <?= date('Y') ?> FY
    </footer>
</div>