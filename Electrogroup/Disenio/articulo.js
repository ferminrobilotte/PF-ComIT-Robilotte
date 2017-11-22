$(function(){
	$(document).on("click", ".comprar-custom", function(e){
		var id = $_GET('id');
		 $.ajax({
            type:  'post',
            data:  {id:id},
            url:   '../Logica/Compras/carrito-compras.php',
            success:  function (response) {
            		location.href=("carrito.php");
            }
        });
	});
})

function $_GET(param) {
	var vars = {};
	window.location.href.replace( location.hash, '' ).replace( 
		/[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
		function( m, key, value ) { // callback
			vars[key] = value !== undefined ? value : '';
		}
	);

	if ( param ) {
		return vars[param] ? vars[param] : null;	
	}
	return vars;
}