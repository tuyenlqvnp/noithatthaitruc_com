$(function(){
    // activate correct menu item
    var url = new String(window.location);
    var i = url.lastIndexOf('/')+1;
    var page = url.substring(i, url.length);
    
    // console.log($('#menu ul li a'));
    $('#menu ul li a').removeClass('active');
});