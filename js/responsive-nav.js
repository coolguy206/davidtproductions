$(document).ready(function(){
$('.responsive-icons').click(function(){
$('.responsive-icons i').toggleClass('fa-toggle-down fa-toggle-up');
$('nav').slideToggle();
});
$('.responsive-sidebar').click(function(){
$('.responsive-sidebar i').toggleClass('fa-plus-square-o fa-minus-square-o');
$('aside').slideToggle();
});

});