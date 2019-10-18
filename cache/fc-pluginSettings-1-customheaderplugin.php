<?php return array (
  'content' => '<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("issn").style.fontSize = "10px";
  } else {
    document.getElementById("issn").style.fontSize = "12px";
  }
}

$(document).ready(function(){
$(\'.ir-arriba\').click(function(){
$(\'body, html\').animate({
scrollTop: \'0px\'
}, 300);
});

$(window).scroll(function(){
if( $(this).scrollTop() > 0){
$(\'.ir-arriba\').slideDown(300);
} else{
$(\'.ir-arriba\').slideUp(300);
}
});
});
</script>',
  'enabled' => true,
); ?>