$(document).ready(function(){
    var myLightBox = LightBox.init();
    
    if(isAuthed) {
        $(".titleBlock #logoutButton").show();
        $(".titleBlock #loginButton").hide();
        
    }
    
    
    
    $(".titleBlock .loginBlock #loginButton").click(function(e) {
        e.preventDefault();     
        
        if(!isAuthed) { 
                $.get('/login', function(data) {
                    
                    myLightBox.width("300px").height("300px");
                    myLightBox.show(data);                
                });
        }
            
    });
    
    $(".titleBlock .loginBlock #registerButton").click(function(e) {
        e.preventDefault();
        $.get('/users/create', function(data) {
            myLightBox.width("400px").height("400px");
            myLightBox.show(data);                
        });
    });
    
    
    
    
});