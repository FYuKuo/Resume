<?php
$Admin = new DB('resume_admin');
$rows = $Admin->all();
?>
<div class=" right_content">
    <!-- 麵包屑 -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="./back.php">後台管理</a>
            </li>
            <li class="breadcrumb-item active">
                帳號管理
            </li>
        </ol>
    </nav>

    <!-- 表單 -->
    <form action="" method="post">
        <div class="form_group">
            <div class="form_item form_item_Title">
                <div>
                    <div class="form_item_header">
                        帳號管理
                    </div>
                    <div class="form_item_text" style="margin: 0;">
                        請輸入要更新的文字內容
                    </div>
                </div>
                <div class="addBtn">

                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal">
                        新增
                    </button>

                </div>
            </div>
            <!-- modal -->
            <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- modal-header -->
                        <div class="modal-header">
                            <h5 class="modal-title" id="addModalLabel">新增帳號</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!-- modal-header end -->

                        <!-- modal-body -->
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="acc" class="col-form-label">帳號</label>
                                    <input type="text" class="form-control" id="acc" required>
                                </div>
                                <div class="form-group">
                                    <label for="pw" class="col-form-label">密碼</label>
                                    <input type="password" class="form-control" id="pw" required>
                                </div>
                                <div class="form-group">
                                    <label for="pwch" class="col-form-label">確認密碼</label>
                                    <input type="password" class="form-control" id="pwch" required>
                                </div>
                                <div class="form-group">
                                    <label for="text" class="col-form-label">信箱</label>
                                    <input type="email" class="form-control" id="email" required>

                                </div>
                            </form>
                        </div>
                        <!-- modal-body end -->

                        <!-- modal-footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                            <button type="button" class="btn btn-primary" id="addAdminBtn">確定新增</button>
                        </div>
                        <!-- modal-footer end -->

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

                            <div class="form_item_del" data-id="<?= $row['id'] ?>">
                                <i class="fa-solid fa-trash-can"></i>
                            </div>
                        </div>

                        <div class="form_item">
                            <div class="form_item_text">帳號</div>
                            <input type="text" name="acc[]" value="<?= $row['acc'] ?>" class="form-control">
                        </div>
                        <div class="form_item">
                            <div class="form_item_text">密碼</div>
                            <input type="password" name="pw[]" value="<?= $row['pw'] ?>" class="form-control">
                        </div>
                        <div class="form_item">
                            <div class="form_item_text">信箱</div>
                            <input type="email" name="email[]" value="<?= $row['email'] ?>" class="form-control">
                        </div>
                    </div>


                <?php
                }
                ?>
            </div>
            <!-- data end -->

            <!-- update btn -->
            <div class="form_item form_item_Btn">
                <input type="hidden" name="table" id="table" value="<?= $_GET['do'] ?>">
                <button type="submit" class="btn btn-primary">更新</button>
            </div>
            <!-- update btn end -->

        </div>


</div>
<footer>
    &copy; <?= date('Y') ?> FY
</footer>