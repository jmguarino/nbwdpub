var namesArr;
$(function() {
    $.getJSON("../php/db_getNames.php", function(data) {
        namesArr = data;
        $( "#rsvpGuests" ).autocomplete({
            source: namesArr
        });
        console.log(data);
    });
});

$( "#rsvpForm" ).submit(function( event ) {
	var name = $("#rsvpGuests").val();

	name = $.trim(name);

	console.log(name);

	if($.inArray(name, namesArr) != -1){
		console.log("Conditional is true");

		$.post("php/db_getParty.php", {passedName: name}).done(function (data) {
			console.log(data);
			var party = $.parseJSON(data);
			console.log("Data length:"+data.length);
			console.log("Party length:"+party.length);
			console.log(party);
			for(i = 0; i<party.length; i++) {
				$(" #guestRows ").append("<tr>\
					<td>"+party[i]+"</td>\
					<td>\
					<div class='dropdown'>\
					<button class='dropdown-toggle' type='button' data-toggle='dropdown'>will be\
					<span class='caret'></span></button>\
					<ul class='dropdown-menu'>\
					<li><a href='#'>will be</a></li>\
					<li><a href='#'>will not be</a></li>\
					</ul>\
					</div>\
					</td>\
					<td>attending.</td>\
					</tr>");
			}
			$( "#nameDiv").addClass("hidden");
			$( "#partyRSVP").removeClass("hidden");
		});
	}
	else{
		alert("Name not found!\nPlease take a look at the options in the dropdown box below where you type your name.")
	}

	event.preventDefault();
});