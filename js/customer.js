<<<<<<< HEAD
$('#tabs').tabs();

$(function(){
	$('#Dom').click(
		function(){
			$.ajax({
				//var name = $(this).attr('value');
				type : "GET",
				url: "cart.php",
				data : "call = addDomItem";
				success: function() {
					alert('hi');
				}
			});
		});
});


/*function addToCart(item){
	var x = item;
	var a = document.getElementsByClassName('add');
	alert(a);
	/*if(a.id == "Dom"){
		alert('dom');
	}
	else if (a.id == "Imp"){
		alert('imp');
	}
	else {alert('null');}*/
=======
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

>>>>>>> origin/Customer-Branch
