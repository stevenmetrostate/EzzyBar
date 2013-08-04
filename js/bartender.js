$(document).ready(function(){
	$("fieldset").delegate("#finishOrder", "click", function(){

		var id = this.id;

		$.post("removeOneDrink.php",
		function(){
			$('#cart').load('customer.php #carts');
			
		});
	});
});

//when ready to serve is checked, do this...
$(document).ready(function(){
	$("input:radio[name=state]").click(function(){
		var a = this.id;
		alert(a);
		if (a == "ready"){
			$.post("sendtocurrent.php", 
			function(){
				$('#cServing').load('bartender.php #cServing');
				$('#orderqueue').load('bartender.php #orderqueue');
			});
		}
	});
});

//refresh order queue every 3 seconds
$(document).ready(function(){
  setInterval(function(){
    $("#orderqueue").load("bartender.php #orderqueue");
  },3000);
});

//when finish order button is clicked, do this..
$(document).ready(function(){
	$("#finishOrder").click(function(){
		$.post("removecurrent.php",
		function(){
			$('#cServing').load('bartender.php #cServing');
			if ($('#ready').is(':checked')){
				$.post("sendtocurrent.php", 
				function(){
					$('#cServing').load('bartender.php #cServing');
					$('#orderqueue').load('bartender.php #orderqueue');
				});
			}
		});
	});
});