// resume orderbtn
$('.order_upbtn').click(function() {

    if ($(this).parents('.form_item_group').prev().find('.order_btn').data('order') != undefined) {
        // console.log('yes');
        // console.log($(this).parents('.form_item_group').prev().find('.order_btn').data('order'));
        // console.log($(this).parents('.form_item_group').prev().find('.order_btn').data('id'));
        let table = $('#table').val();

        let pre_order = $(this).parents('.form_item_group').prev().find('.order_btn').data('order');
        let pre_id = $(this).parents('.form_item_group').prev().find('.order_btn').data('id');

        let order = $(this).parent().data('order');
        let id = $(this).parent().data('id');

        $.post('./api/resume_order.php', {
            id: id,
            order: order,
            pre_id: pre_id,
            pre_order: pre_order,
            table: table
        }, () => {
            location.reload();
        })
    }
})

$('.order_bnbtn').click(function() {

    if ($(this).parents('.form_item_group').next().find('.order_btn').data('order') != undefined) {
        let table = $('#table').val();

        let pre_order = $(this).parents('.form_item_group').next().find('.order_btn').data('order');
        let pre_id = $(this).parents('.form_item_group').next().find('.order_btn').data('id');

        let order = $(this).parent().data('order');
        let id = $(this).parent().data('id');

        $.post('./api/resume_order.php', {
            id: id,
            order: order,
            pre_id: pre_id,
            pre_order: pre_order,
            table: table
        }, () => {
            location.reload();
        })
    }

})

