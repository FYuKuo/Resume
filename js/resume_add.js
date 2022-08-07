// resume_add
$('.form_group').on('click', '#addBtn', function() {
    let text = $('#text').val();
    let title = $('#title').val();
    let during = $('#during').val();
    let table = $('#table').val();

    $.post('./api/resume_add.php', {
        text: text,
        title: title,
        during: during,
        table: table
    }, () => {

        Swal.fire({
            icon: 'success',
            title: '新增成功',
            text: '成功新增一筆資料!',
        }).then((result) => {
            if (result.isConfirmed) {
                location.reload();
            }
        })
    })
})