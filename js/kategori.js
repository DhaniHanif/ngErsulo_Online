$(document).ready(function(){
	$("#kategori").css("display","none");
            
    $(".pilih_kategori").click(function(){
    	if ($('input[name=radio]:checked').val() == "instansi" ) {
        	$("#kategori").slideDown("fast"); //Slide Down Effect   
        } else {
            $("#kategori").slideUp("fast");	//Slide Up Effect
        }
     });            
});