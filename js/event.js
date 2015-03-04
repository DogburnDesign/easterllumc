
$(window).load(function(){
 var eventinfo = "js/eventinfo.json";

     $.getJSON(eventinfo, function(data){
   
        
        for(var key in data){
            $(".llumc-easter-event-list").append(
        "<div class='row llumc-easter-event'>\
                <div class='col-md-4 llumc-event-img'><img src='"+data[key].pic+"' class='img-responsive'></div>\
                <div class='col-md-8'>\
                    <h3>"+data[key].name+" | <span>"+data[key].date+"</span></h3><hr>\
                    <p>"+data[key].desc+"</p>\
                    <p><a href='"+data[key].url+"' class='llumc-event-btn btn' target='_blank'>"+data[key].btntxt+"</a></p> \
                </div>\
            </div>"
            );
        }
    
    
});          
               
               
               
});