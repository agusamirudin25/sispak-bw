$('.logout').on('click',function(){

    Swal.fire({
        title: 'Apakah Anda Ingin Logout?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Tidak',
        confirmButtonText: 'Ya, Logout',
    }).then((result) =>{
        if (result.isConfirmed){
                        location.href='../class/class_logout.php';
                   
                }
            })
});