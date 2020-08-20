
// bila yg membuka kurang dari 768px
$(window).bind("load resize",function(){
	if ($(this).width()< 768)
	{
		$(".navbar-default").addClass("collapse");
	}
	else
	{
		$(".navbar-default").removeClass("collapse");	
		$(".navbar-default").removeAttr("style");	
	}
})