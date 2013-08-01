//loads pages with out refreshing
$(document).ready(function(){
//initial page
$('#content').load('content/index.php');
//handle clicks
$('ul#nav li a').click(function(){
var page =$(this).attr('href');
$('#content').load('content/'+page+'.php');
retun false;
});
});