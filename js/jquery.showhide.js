//showhide
$(function(){
	//hide all p's
	$(".toggle_container").addClass("hidden");
	$(".expand_heading").addClass("off");
	//add clickable function to expand_heading
	$(".expand_heading").click(function(){
		$(this).next(".toggle_container").slideToggle("slow,");
		$(this).next(".toggle_container").removeClass("hidden");
		$(this).toggleClass("off");
		return false;
	});
	//expand, collapse all
	$(".expand_all").click(function(){
		if($(".toggle_container").is(":hidden")) {
			$(".toggle_container").slideDown("slow");
			$(".expand_heading").removeClass("off");
		} else {
			$(".toggle_container").slideUp("slow");
			$(".expand_heading").addClass("off");
		}
		return false;
		//$(".toggle_container").slideToggle("slow,");
	});
});