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
