$(document).ready(function() {
	// Iniciamos el botón del menú desplegable
  	$(".button-collapse").sideNav();

  	$('.scrollspy').scrollSpy();

  	$('.wpcf7-submit').addClass('btn orange darken-3');
  	$('.wpcf7-textarea').addClass('materialize-textarea');

    $('.modal-trigger').leanModal();

  	//$('#modal1').openModal();

  	//ACTIVAR MODAL DE SUBCRIPCION
  	/*var flag = false;
  	if (flag==false) {
  		$('#modal1').openModal({
  			complete: function() {
  				flag = true;
  				alert(flag);
  			} // Callback for Modal close
  		});
  	}*/
  	
  	
});