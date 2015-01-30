$(document).ready(function(){
    var myLightBox = LightBox.init();
    
    $(".defaultLayoutTitle .defaultLayoutMenu #loginButton").click(function(e) {
        e.preventDefault();     
        $.get('/login', function(data) {

            myLightBox.width("300px").height("300px");
            myLightBox.show(data);                
        });      
    });
    
    $(".defaultLayoutTitle .defaultLayoutMenu #registerButton").click(function(e) {
        e.preventDefault();
        $.get('/users/create', function(data) {
            myLightBox.width("400px").height("400px");
            myLightBox.show(data);                
        });
    });
    
    
    
    
});
