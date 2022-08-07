<?php
$Education = new DB('resume_education');
$rows = $Education->all("ORDER BY `order_num` DESC");
?>
<div class="right_content">
    <!-- 麵包屑 -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="./back.php">後台管理</a>
            </li>
            <li class="breadcrumb-item active">
                學習歷程管理
            </li>
        </ol>
    </nav>

    <div class="form_group">
        
        <div class="form_item form_item_Title">
                <div>
                    <div class="form_item_header">
                        學習歷程管理
                    </div>
                    <div class="form_item_text">
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
                            <h5 class="modal-title" id="addModalLabel">新增學習歷程</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!-- modal-header end -->
                        
                        <!-- modal-body -->
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="title" class="col-form-label">學校名稱&科系</label>
                                    <input type="text" class="form-control" id="title" required>
                                </div>
                                <div class="form-group">
                                    <label for="during" class="col-form-label">就讀期間</label>
                                    <input type="text" class="form-control" id="during" required>
                                </div>
                                <div class="form-group">
                                    <label for="text" class="col-form-label">文字描述</label>
                                    <textarea class="form-control" id="text"></textarea>
                                </div>
                            </form>
                        </div>
                        <!-- modal-body end -->
                        
                        <!-- modal-footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                            <button type="button" class="btn btn-primary" id="addBtn">確定新增</button>
                        </div>
                        <!-- modal-footer end -->
                        
                    </div>
                </div>
            </div>
            <!-- modal end -->
            
            <!-- form -->
            <form action="./api/resume.php" method="post">
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
                        <div class="form_item">
                            <div class="form_item_text">學校名稱&科系</div>
                            <input type="text" name="title[]" value="<?= $row['title'] ?>" class="form-control">
                        </div>
                        <div class="form_item">
                            <div class="form_item_text">就讀期間</div>
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
            <!-- data end -->

            <!-- update btn -->
            <div class="form_item form_item_Btn">
                <input type="hidden" name="table" id="table" value="<?=$_GET['do']?>">
                <button type="submit" class="btn btn-primary">更新</button>
            </div>
            <!-- update btn end -->

        </div>
    </form>
    <!-- form end -->

    <footer>
        &copy; <?= date('Y') ?> FY
    </footer>
</div>