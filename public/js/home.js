$(document).ready(function(){
    var myLightBox = LightBox.init();
    
    
    $(".titleBlock .loginBlock #loginButton").click(function(e) {
        e.preventDefault();     
        $.get('/login', function(data) {
            myLightBox.show(data);                
        });
    });
    
    $(".titleBlock .loginBlock #registerButton").click(function(e) {
        e.preventDefault();
        $.get('/users/create', function(data) {
            myLightBox.show(data);                
        });
    });
    
    
    
    
});