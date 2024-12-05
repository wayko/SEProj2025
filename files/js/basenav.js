$(document).ready(function (){
$(".secondnav").click(function(){
var firnav = $(".firstnav").css("marginLeft").replace('px','');
var secnav = $(".secondnav").css("marginLeft").replace('px','');
var thirdnav = $(".thirdnav").css("marginLeft").replace('px','');
var fourthnav = $(".fourthnav").css("marginLeft").replace('px','');
if(secnav > -102 && firnav == 0){
$(".secondnav").animate({
marginLeft: '-102px'
}, 900);
$(".firstnav").animate({
marginLeft: '641px'
}, 900);
$(".content").animate({
marginLeft: '100px'
}, 900);
}
else {
$(".secondnav").animate({
marginLeft: '540px'
}, 900);
$(".firstnav").animate({
marginLeft: '0'
}, 900);
$(".content").animate({
marginLeft: '100px'
}, 900);
}

});

$(".thirdnav").click(function(){
var firnav = $(".firstnav").css("marginLeft").replace('px','');
var secnav = $(".secondnav").css("marginLeft").replace('px','');
var thirdnav = $(".thirdnav").css("marginLeft").replace('px','');
var fourthnav = $(".fourthnav").css("marginLeft").replace('px','');
if(thirdnav > -102){
$(".thirdnav").animate({
marginLeft: '-102px'
}, 900);
$(".firstnav").animate({
marginLeft: '742px'
}, 900);
$(".content").animate({
marginLeft: '100px'
}, 900);
}
else{
$(".thirdnav").animate({
marginLeft: '640px'
}, 900);
$(".firstnav").animate({
marginLeft: '0px'
}, 900);
$(".content").animate({
marginLeft: '100px'
}, 900);
}
});

$(".fourthnav").click(function(){
var firnav = $(".firstnav").css("marginLeft").replace('px','');
var secnav = $(".secondnav").css("marginLeft").replace('px','');
var thirdnav = $(".thirdnav").css("marginLeft").replace('px','');
var fornav = $(".fourthnav").css("marginLeft").replace('px','');
if(fornav > -102){
$(".fourthnav").animate({
marginLeft: '-102px'
}, 900);
$(".firstnav").animate({
marginLeft: '842px'
}, 900);
$(".content").animate({
marginLeft: '100px'
}, 900);
}
else
{
$(".fourthnav").animate({
marginLeft: '740px'
}, 900);
$(".firstnav").animate({
marginLeft: '0'
},900);
$(".content").animate({
marginLeft: '100px'
}, 900);
}
});

$(".firstnav").click(function(){
var firnav = $(".firstnav").css("marginLeft").replace('px','');
var secnav = $(".secondnav").css("marginLeft").replace('px','');
var thirdnav = $(".thirdnav").css("marginLeft").replace('px','');
var fourthnav = $(".fourthnav").css("marginLeft").replace('px','');
alert(firnav);
});
});