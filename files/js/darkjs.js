$(document).ready(function(){
$(".tab").click(function(){
$(".contentheader").html("<h2>Home</h2>");
$(".contentsec").html("Welcome to DreamCPU<br />Welcome to our site");
});
$(".tab1").click(function(){
$(".contentheader").html("<h2>Services</h2>");
$(".contentsec").html("Welcome to DreamCPU<br />Welcome to our site");
});
$(".tab3").click(function(){
$(".contentheader").html("<h2>Contact Us</h2>");
$(".contentsec").html("<p><form action=''>Name: &nbsp;&nbsp;<Input Type='textbox' name='name' id='name'> <br><br> Email:&nbsp;&nbsp;&nbsp; <input type='textbox' name='email' id='email'> <br><br>Phone Number: &nbsp;&nbsp;<Input Type='textbox' name='phone_number' id='phone_number'> <br><br>Job Requested: &nbsp;&nbsp;<Input Type='textbox' name='job_requested' id='job_requested'> <br><br> <button type='submit' value='Send Request' class='btn success' id='sendrequest'>Submit</button></form></p>");
});
$(".tab2").click(function(){
$(".contentheader").html("<h2>RSSFeed</h2>");
$(".contentsec").html("<script type='text/javascript'>$(document).ready(function () {$('#ticker1').rssfeed('http://feeds.feedburner.com/Jquery4u',{}, function(e) {$(e).find('div.rssBody').vTicker();});});</script><div id='ticker1'></div>");
});
$(document).on("click","#sendrequest",function(){
 var name = $("input#name").val();  
        var email = $("input#email").val();  
        var phone_number = $("input#phone_number").val(); 
		var job_requested = $("input#job_requested").val();
    var dataString = 'name='+ name + '&email=' + email + '&phone_number=' + phone_number + '&job_requested=' + job_requested; 
if (name == ""){
		alert("name field is empty");
		return false;
		}
		if (email == ""){
		alert("email field is empty");
		return false;
		}
		if (phone_number == ""){
		alert("phone number field is empty");
		return false;
		}
		if (job_requested == ""){
		alert("job reqested field is empty");
		return false;
		}
    $.ajax({  
      type: "POST",  
      url: "insert.php",  
      data: dataString,  
      success: function() {  
        $('.contentsec').html("<div id='message'></div>");  
        $('#message').html("<h2>Contact Form Submitted!</h2>")  
        .append("<h3 style='display:block;'>Thank you for contacting DreamCPU. We have received your request " +  name + ". We will review it and contact you as soon as possible.</h3>")  
        .hide()  
        .fadeIn(1500, function() {   
        });  
      },
		error: function(){
		alert('There was a error');
		}
    });  
    return false;  
});
});