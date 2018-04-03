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
					$('#controls input').on('change', function() { 
							var q = $('input[name=q]:checked', '#controls').val();
							document.cookie="q="+q;
							}); 
 });
 
