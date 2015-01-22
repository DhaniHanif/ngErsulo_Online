$(document).ready(function(){
    $("#pilih_kategori").css("display","none");$(".nama_instansi").css("display","none");
        $(".pilih_profil").click(function(){
        if ($('input[name=profil]:checked').val() == "Instansi" ) {
            $("#pilih_kategori").slideDown("fast");
            $(".nama_instansi").slideDown("fast"); //Slide Down Effect
        } else {
            $("#pilih_kategori").slideUp("fast");
            $(".nama_instansi").slideUp("fast");  //Slide Up Effect
        }
     });
});



