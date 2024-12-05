$(document).ready(function(){
$(".tab1").click(function(){
$(".contentheader").html("<h2>Home</h2>");
$(".contentsec").html("Welcome to Sinacomp<br />Welcome to our site");
});
$(".tab2").click(function(){
$(".contentheader").html("<h2>Computers</h2>");
$(".contentsec").html("<ul><li>Software & Hardware Services</li><li>Teaching & Tutoring</li><li>Planning & Proects</li></ul>");
});
$(".tab7").click(function(){
$(".contentheader").html("<h2>Contact Us</h2>");
$(".contentsec").html("<p><form action=''>Name: &nbsp;&nbsp;<Input Type='textbox' name='name' id='name'> <br><br> Email:&nbsp;&nbsp;&nbsp; <input type='textbox' name='email' id='email'> <br><br>Phone Number: &nbsp;&nbsp;<Input Type='textbox' name='phone_number' id='phone_number'> <br><br>Job Requested: &nbsp;&nbsp;<Input Type='textbox' name='job_requested' id='job_requested'> <br><br> <button type='submit' value='Send Request' class='btn success' id='sendrequest'>Submit</button></form></p>");
});
$(".tab3").click(function(){
$(".contentheader").html("<h2>Autocad</h2>");
$(".contentsec").html("<ul><li>Teaching & Tutoring<li class='subli'>Group or Private</li></li><li>Design & Drawing Preperation</li><li>For Archetech, Facility and Interior Design Engineer</li></ul>");
});
$(".tab4").click(function(){
$(".contentheader").html("<h2>Technical Course</h2>");
$(".contentsec").html("");
});
$(".tab5").click(function(){
$(".contentheader").html("<h2>Licencing</h2>");
$(".contentsec").html("");
});
$(".tab6").click(function(){
$(".contentheader").html("<h2>Consulting</h2>");
$(".contentsec").html("");
});
$(document).on("click","#sendrequest",function(){
var name = $("input#name").val();
});
});