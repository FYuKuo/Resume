<?php
$Banner = new DB('resume_banner');
$data = $Banner->find(1);
?>
<div class=" right_content">
    <!-- 麵包屑 -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="./back.php">後台管理</a>
            </li>
            <li class="breadcrumb-item active">
                Banner管理
            </li>
        </ol>
    </nav>

    <!-- 表單 -->
    <form action="./api/banner_edit.php" method="post" enctype="multipart/form-data">
        <div class="form_group">
            <div class="form_item form_item_Title">
                <div>
                    <div class="form_item_header">
                        Banner管理
                    </div>
                    <div class="form_item_text" style="margin: 0;">
                        請輸入要更新的內容
                    </div>
                </div>
            </div>
            <div class="form_item">
                <div class="form_item_text">標題文字</div>
                <input type="text" name="title" value="<?= $data['title'] ?>" class="form-control">
            </div>

            <div class="form_item">
                <div class="form_item_text">文字描述</div>
                <textarea name="text" class="form-control" cols="30" rows="10" style="height: 80px;"><?= $data['text'] ?></textarea>
            </div>

            <div class="form_item">
                <div class="form_item_text">更新圖片</div>
                <div class="drop_item" ondragover="dragIn(this)" ondragleave="dragOut(this)" ondrop="drogOff(this)">
                    <label for="img" class="drop_item_label">拖曳或點選上傳照片</label>
                    <input type="file" name="img" id="img" class="drop_item_input" accept="image/gif, image/jpeg, image/png">
                    <div class="drop_item_Img" style="background-image: url('./img/<?=$data['img']?>');">
        
                    </div>
                </div>
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

