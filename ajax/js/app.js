$(document).ready(function(){

	$("#tabel-data").load("table.php");

	$("#add-new").click(function(){
		nama = $("#data-nama").val();
		nim = $("#data-nim").val();

		$.ajax({
        type: "POST",
        url: "add.php",
        data: "nama="+nama+"&nim="+nim,
           success: function(html){    
        		if(html=='true'){
             		$("#notif").hide().html("Berhasil").fadeIn("slow");
             		$("#tabel-data").load("table.php");
             		$("#notif").fadeOut("slow");
               	}else{
            		$("#notif").hide().html("Gagal").fadeIn("slow");
            		$("#tabel-data").load("table.php");
            	}
           }
          });
	})


})