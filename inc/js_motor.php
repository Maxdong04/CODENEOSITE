<script src="jquery.js"></script>
<script src="cycle.js"></script>
<script>
	$(function(){
		setTimeout($('.alert_box').load('call/alert.php'), 600);
	});
</script>
<script>
	
	$(function(){
		//$('.cycle').cycle();
		$('.cycle').cycle();
		
		$('.set_button').click(function(){
			$('.menu').slideToggle(200);
		});
		
		$('.close').click(function(){
           $('.pop').fadeOut(200);
           $('.pop2').fadeOut(200);
        });
		
		$('.comallop').click(function(){
		 	$('.pop2').fadeIn(200);
         });
		 
		$('.carte_in div').click(function(){
		 	$('.pop').fadeIn(270);
		 	$('.popac .pcc').html('<center> Chargement <br /> <br /> <img src="src/loading.svg" alt="" /> </center>'); 
            var getClassCode = $(this).attr('class');
            var getIdCode = $(this).attr('id');
			$.post('call/call_commande.php',{'getClassCode':getClassCode,'getIdCode':getIdCode}, function(back){
				$('.popac .pcc').html(back); 
			});
        });
		 
	});
	
</script>