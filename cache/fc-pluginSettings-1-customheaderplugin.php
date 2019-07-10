<?php return array (
  'content' => '<script>
$(function() {
  // esta parte es la que controla cuando se mueve el scroll y ejecuta una función
  $(document).scroll(function() {
    //  se pregunta si el scroll se movio 
    if ($(this).scrollTop() > 1) {
      // esta parte cambia el atributo "src" de la etiqueta "img" 
      $(\'#logo\').attr(\'src\', \'/ojs/public/journals/1/Figuras-Arq-60px.jpg\')
      $(\'#logo1\').attr(\'src\', \'/ojs/public/journals/1/escudo-FES-50px.jpg\')
      $(\'#logo2\').attr(\'src\', \'/ojs/public/journals/1/logoUNAM-negro-H-50px.jpg\')
    }
    if ($(this).scrollTop() < 1) {
      $(\'#logo\').attr(\'src\', \'/ojs/public/journals/1/pageHeaderLogoImage_es_ES.jpg\');
      $(\'#logo1\').attr(\'src\', \'/ojs/public/journals/1/escudo-FES-70px.jpg\');
      $(\'#logo2\').attr(\'src\', \'/ojs/public/journals/1/logoUNAM-negro-H.jpg\');
    }
  });
});

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