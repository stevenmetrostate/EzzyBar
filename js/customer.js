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
		//$(".drinkPrice").each(function(){alert($(this).val());});
		
		$(".drinkPrice").each(
			function(i){
				drinkPrice[i] = $(this).val();
			});
			
		$(".drinkID").each(
			function(i){
				drinkID[i] = $(this).val();
			});
			
		$(".drinkName").each(
			function(i){
				drinkName[i] = $(this).val();
			});
		alert(drinkPrice[1]+" "+drinkID[1]+" "+drinkName[1]);
		
		$.post("cart.php",
		{
			drinkID: drinkID[1],
			drinkPrice: drinkPrice[1],
			drinkName: drinkName[1]
		},
		function(){
		location.reload();
		});
	});
});

