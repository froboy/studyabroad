//highlight
$(function(){
	$("input#edit-submitted-nominee-information-nominee-is-submitter-yes").click(function(){ 
       // When yes is clicked, copy values 
       $("input#edit-submitted-nominee-information-nominee-first-name").val($("input#edit-submitted-submitter-information-submitter-first-name").val()); 
       $("input#edit-submitted-nominee-information-nominee-last-name").val($("input#edit-submitted-submitter-information-submitter-last-name").val()); 
       $("input#edit-submitted-nominee-information-nominee-email-address").val($("input#edit-submitted-submitter-information-submitter-email-address").val()); 
       $("input#edit-submitted-nominee-information-nominee-phone-number").val($("input#edit-submitted-submitter-information-submitter-phone-number").val()); 
       // Then make fields readonly
       $("input#edit-submitted-nominee-information-nominee-first-name").attr("readonly", true); 
       $("input#edit-submitted-nominee-information-nominee-last-name").attr("readonly", true); 
       $("input#edit-submitted-nominee-information-nominee-email-address").attr("readonly", true); 
       $("input#edit-submitted-nominee-information-nominee-phone-number").attr("readonly", true); 
    });
	$("input#edit-submitted-nominee-information-nominee-is-submitter-no").click(function(){ 
       // If no, clear it out
       $("input#edit-submitted-nominee-information-nominee-first-name").val(""); 
       $("input#edit-submitted-nominee-information-nominee-last-name").val(""); 
       $("input#edit-submitted-nominee-information-nominee-email-address").val(""); 
       $("input#edit-submitted-nominee-information-nominee-phone-number").val("");
       // Remove readonly attr 
       $("input#edit-submitted-nominee-information-nominee-first-name").attr("readonly", false); 
       $("input#edit-submitted-nominee-information-nominee-last-name").attr("readonly", false); 
       $("input#edit-submitted-nominee-information-nominee-email-address").attr("readonly", false); 
       $("input#edit-submitted-nominee-information-nominee-phone-number").attr("readonly", false);
    });
});