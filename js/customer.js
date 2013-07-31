$(document).ready(function(){
	$("input.drink").click(function(){

		var id = this.id;

		$.post("cart.php",
		{
			drinkID: id
		},
		function(){
			$('#cart').load('customer.php #carts');
		});
	});
});

$(document).ready(function(){
	$("fieldset").delegate(".reset", "click", function(){

		var id = this.id;

		$.post("removeOneDrink.php",
		{
			drinkID: id
		},
		function(){
			$('#cart').load('customer.php #carts');
		});
	});
});

$(document).ready(function(){
	$("#resetAll").click(function(){
	$.post("resetCart.php",
		function(){
			$('#cart').load('customer.php #carts');
		});
	});
});

