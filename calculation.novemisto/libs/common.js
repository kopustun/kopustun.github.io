jQuery(function($){
   $("input[type='tel']").mask("+38 (099) 999-99-99");
});

$(document).ready(function() {
$("form").on("submit",function(e){
var ref=$(this).find(".js-tel");

$(ref).each(function(){
var val=$(this).val();
var my=/^[\d\+\(\)-]{5,25}$/;
var val2=val.split(" ").join("")
if(my.test(val2)==false){
/*$(this).focus();
$(this).next().text("Введіть ВІРНО Ваш телефон!");*/
e.preventDefault();return false;}});

return true;});
});
