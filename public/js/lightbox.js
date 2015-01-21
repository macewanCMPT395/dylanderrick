var LightBox = {
    _lightBox: null,
    
    //initialize light box and hide it in page
    init: function() {
            
        if( this._lightBox == null) {
            this._lightBox = document.createElement('div');
            $(this._lightBox).attr('id', 'lightBox').hide();
         
            var that = this;
            //add check for click outside box to close it
            $(this._lightBox).mouseup(function(e) {
                that.close(e);
            });


                        
            $('body').append(this._lightBox);

            return this;
        }
    },
        
    close: function(e) {
        var box = $(this._lightBox).find('.content');
        if(!box.is(e.target) && box.has(e.target).length==0) {
            $(box).empty();
            $(this._lightBox).hide();
        }     
    },
    
    show: function(data) {
        var content = document.createElement('div');
        $(content).attr('class', 'content').html(data);     
        $(content).appendTo(this._lightBox);
        
        $(this._lightBox).show();
    }   
};