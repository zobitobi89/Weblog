/**
 * @author Tobias Zogrotzky
 */


   
function getCurDate(){
	var date = new Date();
	var day = date.getDay();
	var daynum = date.getDate();
	var month = date.getMonth();
	var Wochentag = new Array("Sonntag", "Montag", "Dienstag", "Mittwoch",
	                          "Donnerstag", "Freitag", "Samstag");
	
	var fulldate = daynum +"." + " - " + Wochentag[day];
	
	alert(fulldate);
};

$(".header").click(function(){
	alert("test");
});


	$( "#tabs" ).tabs({
		ajaxOptions: {
			error: function( xhr, status, index, anchor ) {
				$( anchor.hash ).html(
					"Couldn't load this tab. We'll try to fix this as soon as possible. " +
					"If this wouldn't be a demo." );
			}
		}
	});