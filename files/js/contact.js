$(document).ready(function(){
$("#sendrequest").click(function(){
var name = $("input#name").val();
var email = $("input#email").val();
var subject = $("input#subject").val();
var message = $("textarea#message").val();
var dataString = 'name='+ name + '&email=' + email + '&subject=' + subject + '&message=' + message;
if (name == ""){
alert("name field is empty");
return false;
}
if (email == ""){
alert("email field is empty");
return false;
}
if (subject == ""){
alert("subject field is empty");
return false;
}
if (message == ""){
alert("message area is empty");
return false;
}
$.ajax({
type: "POST",
url: "newinsert.php",
data: dataString,
success: function() {
alert("success");
},
error: function(){
alert('There was a error');
}
});
return false;
}); 
}); 