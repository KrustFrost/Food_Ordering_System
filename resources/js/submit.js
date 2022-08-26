require('./bootstrap');
$(document).ready(function(){
    var htmlString = $( this ).html();
    $( this ).text( htmlString );
});
