$(document).ready(function(){
	$("#instansi").css("display","none");
            
    $(".pilih_kategori").click(function(){
    	if ($('input[name=formSts]:checked').val() == "Instansi" ) {
        	$("#instansi").slideDown("fast"); //Slide Down Effect 
        } else {
            $("#instansi").slideUp("fast");	//Slide Up Effect
        }
     });            
});

