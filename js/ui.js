$( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
$( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
$( "#selectable" ).selectable();

function toggleVisibility(newSection){
		$(".section").not("#" + newSection).hide();
		$("#" + newSection).show();
}

	
	


