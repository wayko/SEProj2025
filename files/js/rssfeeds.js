$(document).ready(function(){
$("#rss").html("<script type='text/javascript'>$(document).ready(function (){$('#ticker1').rssfeed('http://feeds.feedburner.com/Jquery4u',{},function(e) {$(e).find('div.rssBody').vTicker();});});</script><div id='ticker1'></div>");
$("#rss1").html("<script type='text/javascript'>$(document).ready(function (){$('#ticker2').rssfeed('http://dreamcpu.com/wordpress/feed/',{},function(e) {$(e).find('div.rssBody').vTicker();});});</script><div id='ticker2'></div>");
}); 