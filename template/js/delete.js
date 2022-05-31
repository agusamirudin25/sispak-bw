$(document).on('click','.hapus_gejala',function(){
    var id = $(this).attr('id');
    console.log(id);
    Swal.fire({
        title: 'Apakah Anda Ingin Menghapus?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Tidak',
        confirmButtonText: 'Ya, Hapus Sekarang',
    }).then((result) =>{
        if (result.isConfirmed){
            $.ajax({
                method: "POST",
                url: "../class/class_gejala.php",
                data: {id_hapus:id},
                cache: false,
                success: function(data){
                    Swal.fire({

                        icon: 'success',
                        title: 'Data Berhasil Dihapus',
                        showConfirmButton: false,
                        timer: 1500
                    }).then((result)=>{
                        location.reload();
                    });
                }
            });
        }
    })
});