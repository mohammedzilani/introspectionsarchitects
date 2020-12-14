$(document).ready(function(){
   	$('.project_title').on('click',function(e){
   	 	modal_id = e.target.className.split(" ")[0] + "-popup"
	    modal = document.getElementById(modal_id);
	    modal.style.display = "block";
	    setStyling();
	    setSwiper();
   	});
    $('.tumbnail-img').on('click',function(e){
	   	modal_id = e.target.className.split(" ")[0] + "-popup"
	    modal = document.getElementById(modal_id);
	    modal.style.display = "block";
	    setStyling();
	    setSwiper();
   });
  
   	
    
});
function setSwiper(){
	var swiper = new Swiper('.swiper-container', {
	              nextButton: '.swiper-button-next',
	              prevButton: '.swiper-button-prev',
	              pagination: '.swiper-pagination',
	              paginationType: 'fraction'
	 });
}
function setStyling(){
	var height = $( window ).height();
	var width = $(window).width();
    $('.modal').css({'height':height,'width':width});
    $('.header-container').css({'display':'none'});
    $('.close').on('click',function(){
		$('.modal').each(function(m,ele){
		 	ele.style.display = "none";
		});
	$('.header-container').css({'display':'block'});
	});	
}
function removeStyling(){
	
}

