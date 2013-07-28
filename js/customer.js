$(document).ready(function(){
	$("input.drink").click(function(){
		//alert('working');
		//var drinkPrice = document.getElementById('drinkPrice').value;
		//var drinkID = document.getElementById('drinkID').value;
		//var drinkName = document.getElementById('drinkName').value;
		//var data = $("#myForm :input").serializeArray();
		//$.post($("myForm :input").attr("action"), data, function(){ $("#result").html(info)});
		var drinkPrice = [];
		var drinkID = [];
		var drinkName = [];
		$(".drinkPrice").each(function(){alert($(this).val());});
		//$(".drinkPrice").each(function(i){drinkPrice[i] = $(this).val();});
		//$(".drinkID").each(function(i){drinkPrice[i] = $(this).val();});
		//$(".drinkName").each(function(i){drinkPrice[i] = $(this).val();});
		//$(".drinkName").each("value");
		//alert(drinkPrice+" "+drinkID+" "+drinkName);
		
		$.post("cart.php",
		{
			drinkID: drinkID,
			drinkPrice: drinkPrice,
			drinkName: drinkName
		},
		function(){
		location.reload();
		});
	});
});

