$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

	  if (e.type === 'keyup') {
			if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
    	if( $this.val() === '' ) {
    		label.removeClass('active highlight'); 
			} else {
		    label.removeClass('highlight');   
			}   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
    		label.removeClass('highlight'); 
			} 
      else if( $this.val() !== '' ) {
		    label.addClass('highlight');
			}
    }

});

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});



function deactivateTooltips() {


    var tooltips = document.querySelectorAll('.tooltip'),

        tooltipsLength = tooltips.length;


    for (var i = 0; i < tooltipsLength; i++) {

        tooltips[i].style.display = 'none';

    }


}




function getTooltip(elements) {


    while (elements = elements.nextSibling) {

        if (elements.className === 'tooltip') {

            return elements;

        }

    }


    return false;


}
var check = {};
check['mdp'] = function() {


    var pwd1 = document.getElementById('mdp'),

        tooltipStyle = getTooltip(pwd1).style;


    if (pwd1.value.length >= 6) {

        pwd1.className = 'correct';

        tooltipStyle.display = 'none';

        return true;

    } else {

        pwd1.className = 'incorrect';

        tooltipStyle.display = 'inline-block';

        return false;

    }


};


check['mdp1'] = function() {


    var pwd1 = document.getElementById('mdp'),

        pwd2 = document.getElementById('mdp1'),

        tooltipStyle = getTooltip(pwd2).style;


    if (pwd1.value == pwd2.value && pwd2.value != '') {

        pwd2.className = 'correct';

        tooltipStyle.display = 'none';

        return true;

    } else {

        pwd2.className = 'incorrect';

        tooltipStyle.display = 'inline-block';

        return false;

    }


};


(function() { // Utilisation d'une IIFE pour éviter les variables globales.


    var myForm = document.getElementById('myForm'),

        inputs = document.querySelectorAll('input[type=text], input[type=password]'),

        inputsLength = inputs.length;


    for (var i = 0; i < inputsLength; i++) {

        inputs[i].addEventListener('keyup', function(e) {

            check[e.target.id](e.target.id); // "e.target" représente l'input actuellement modifié

        });

    }


    myForm.addEventListener('submit', function(e) {


        var result = true;


        for (var i in check) {

            result = check[i](i) && result;

        }


      

    });


    myForm.addEventListener('reset', function() {


        for (var i = 0; i < inputsLength; i++) {

            inputs[i].className = '';

        }


        deactivateTooltips();


    });


})();



// Maintenant que tout est initialisé, on peut désactiver les "tooltips"


deactivateTooltips();