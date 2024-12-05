$(document).ready(function(){
$("#sendrequest").click(function(){
		var name = $("input#name").val();  
    var email = $("input#email").val();  
		var message = $("textarea#message").val();
		var dataString = 'name='+ name + '&email=' + email + 'message=' + message; 
		if (name == ""){
		alert("name field is empty");
		return false;
		}
		if (email == ""){
		alert("Email field is empty");
		return false;
		}
		if (message == ""){
		alert("Message field is empty");
		return false;
		}
    $.ajax({  
      type: "POST",  
      url: "insert.php",  
      data: dataString,  
      success: function() { 
		$('#homecon').addClass('fa fa-cog fa-spin fz-5x');
        $('#homecon').html("<div id='messages'></div>");  
        $('#messages').html("<h2>Contact Form Submitted!</h2>")  
        .append("<h3 style='display:block;'>Thank you for contacting us. We have received your request " +  name + ". We will review it and contact you as soon as possible.</h3>")  
        .hide()  
        .fadeIn(2000, function() {
			$('#homecon').removeClass('fa fa-cog fa-spin fz-5x');
        });  
      },
		error: function(){
		alert('There was a error');
		}
    });  
    return false;  
});
});