// admin_add
$('.form_group').on('click', '#addAdminBtn', function() {
    let acc = $('#acc').val();
    let pw = $('#pw').val();
    let pwch = $('#pwch').val();
    let email = $('#email').val();

    if(acc == '' || pw == '' || pwch == '' || email == ''){

        Swal.fire({
            icon: 'error',
            title: '新增失敗',
            text: '資料尚未填寫完畢!',
        })

    }else{

        
        if(pw == pwch){
            $.post('./api/admin_ch_acc.php', {acc}, (res) => {
        
                if(parseInt(res) == 1){
                    Swal.fire({
                        icon: 'error',
                        title: '新增失敗',
                        text: '帳號已註冊過!',
                    })
                }else{
    
    
                    $.post('./api/admin_ch_email.php', {email}, (res) => {
        
                        if(parseInt(res) == 1){
                            Swal.fire({
                                icon: 'error',
                                title: '新增失敗',
                                text: '信箱已註冊過!',
                            })
                        }else{
            
                            $.post('./api/admin_add.php', {acc,pw,email}, () => {
                    
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
            
                        }
            
                    })
    
    
                }
    
            })
        }else{
            Swal.fire({
                icon: 'error',
                title: '新增失敗',
                text: '請重新確認密碼!',
            })
        }
    }

})