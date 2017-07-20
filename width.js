//window size
function showViewPortSize(display) {
if(display) {
var width = jQuery(window).width();
$.post('/width.php',{'width':width},function(data){});
}
} 
showViewPortSize(true);