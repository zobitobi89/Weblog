/**
  @author Tobias Zogrotzky
 */

$(document).ready( function () {


//Tabs
$(".tab_content").hide(); //Hide all content
$("ul.tabs li:first").addClass("active").show(); //Activate first tab
$(".tab_content:first").show(); //Show first tab content

//On Click Event
$("ul.tabs li").click(function() {

	$("ul.tabs li").removeClass("active"); //Remove any "active" class
	$(this).addClass("active"); //Add "active" class to selected tab
	$(".tab_content").hide(); //Hide all tab content

	var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
	$(activeTab).fadeIn(); //Fade in the active ID content
	return false;
});

//show/hide entrybox with click
$(".entrybox").hide();
var hide = true;
var check = false;
$(".say").click(function(){
	if(hide == true){
		$(".entrybox").show('slow');
		$(".say").prop('value','Hide...');
		hide = false;
		//check if content was deleted while clicking button
			if (check==true){
				$("#writecom").val("Say what bothers you...");
			}
	}
	else{
		$(".entrybox").hide('slow');
		$(".say").prop('value','Say something...');
		hide = true;
	}
	});

//set default value on textarea
$("#writecom").val("Say what bothers you...");
$("#writecom").click(function(){
	$("#writecom").val("");
	check = true;
});

$(".showdate").append(function(){
	var date = new Date();
	var day = date.getDay();
	var daynum = date.getDate();
	var month = date.getMonth();
	var year = date.getFullYear();
	var Monat = new Array("Januar", "Februar", "M&auml;rz", "April", "Mai", "Juni",
            "Juli", "August", "September", "Oktober", "November", "Dezember");
	var Wochentag = new Array("Sonntag", "Montag", "Dienstag", "Mittwoch",
	                          "Donnerstag", "Freitag", "Samstag");
	
	var fulldate = daynum +"." + Monat[month] + " " + year;
	
	return fulldate;
});

});

function checkform(){
	if(document.entrycommbox.title.value == "")
	 {alert("Bitte geben Sie einen Title ein...");
	 document.entrycommbox.title.focus();
	 return false;
	 }
	if(document.entrycommbox.autor.value == "")
	 {alert("Bitte geben Sie einen Name ein...");
	 document.entrycommbox.autor.focus();
	 return false;
	 }
	if(document.entrycommbox.content.value == "")
	 {alert("Bitte geben Sie einen Inhalt ein...");
	 document.entrycommbox.content.focus();
	 return false;
	 }
}

function checkmailform(){
	if(document.mailform.title.value == "")
	 {alert("Bitte geben Sie einen Title ein...");
	 document.mailform.title.focus();
	 return false;
	 }
	if(document.mailform.autor.value == "")
	 {alert("Bitte geben Sie einen Name ein...");
	 document.mailform.autor.focus();
	 return false;
	 }
	if(document.mailform.content.value == "")
	 {alert("Bitte geben Sie einen Inhalt ein...");
	 document.mailform.content.focus();
	 return false;
	 }
}