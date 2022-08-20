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
    &copy; <?=date('Y')?> FY
</footer>