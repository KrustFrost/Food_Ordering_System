require('./bootstrap');

$(document).ready(function(){
    
    $('form').on('submit',function(){
        $('button').attr('disabled',true);
    });
    $("input[type='submit'").click(function(){
        $("input[name='Total_Cost'").prop('disabled', function(i,v){ 
            return !v; 
        });
    });    
});