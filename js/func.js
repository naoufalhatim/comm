$(document).ready(function(){
								

						


	$('#search').keyup(function(){
		var search = $(this).val();
		search = $.trim(search);
		
		// Juste pour reafficher le texte saisie par l'utilisateur
		// $('#resultat').text(search);
		
		if (search !== "") {
				$('#loader').show();
					$.post('post.php', {search:search}, function(data){
					$('#resultat ul').html(data).show();	
				$('#loader').hide();				
			});

		}
		
	});


});
	/*
 $(document).ready(function(){

	$('#q').keyup(function(){
								//var q = $(this).val();
								var q = $('input[name=q]:checked').val()
									q = $.trim(q);
									//alert(q);
									var qq =$.post( "post.php", {q:q});
									
								});

 });
 */