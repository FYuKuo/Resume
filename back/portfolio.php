<?php
$Portfolio = new DB('resume_portfolio');
$rows = $Portfolio->all();
?>
<div class=" right_content">
    <!-- 麵包屑 -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="./back.php">後台管理</a>
            </li>
            <li class="breadcrumb-item active">
                作品集管理
            </li>
        </ol>
    </nav>

    <!-- 表單 -->
    <div class="form_group">
        <div class="form_item form_item_Title">
            <div>
                <div class="form_item_header">
                    作品集管理
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
                        <h5 class="modal-title" id="addAdminModalLabel">新增工作經驗</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- modal-header end -->

                    <!-- modal-body -->
                    <form method="post" action="./api/portfolio_add.php" id="portfolioForm" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title" class="col-form-label">標題</label>
                                <input type="text" class="form-control" id="title">
                            </div>
                            <div class="form-group">
                                <label for="href" class="col-form-label">連結網址</label>
                                <input type="text" class="form-control" id="href">
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
                                <textarea class="form-control" id="text"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="img" class="col-form-label">照片</label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="img" name="img">
                                        <label class="custom-file-label" for="img">選擇檔案</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal-body end -->

                        <!-- modal-footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                            <button type="submit" class="btn btn-primary" id="addAdminBtn">確定新增</button>
                        </div>
                        <!-- modal-footer end -->

                    </form>
                </div>
            </div>
        </div>
        <!-- modal end -->

        <form action="" method="post">

            <div class="form_item">

            </div>
            <div class="form_item">

            </div>
            <div class="form_item">

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