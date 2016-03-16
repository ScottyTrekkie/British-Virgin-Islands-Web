/*
var overlayDiv = function(choice){ 
    var answer = 4;
    var correct;
        if (choice == answer) {
            correct = "#correct";
            update("chapter1", 1, true);
        } else correct = "#incorrect";
        $(correct).overlay({
           api: true,  
           top: 260,
           mask: {
               color: '#fff',
               loadSpeed: 200,
               opacity: 0.5
           },
           closeOnClick: false,
           load: false
       })
       $(correct).data("overlay").load();
   };
        
$(document).ready(function() {    
    $(".btn-quiz").click(function(event){
    var choice = event.target.id;
    if (choice == 'next') {
        window.location.href = "quiz2.html";
    } else if (choice == 'back') {
        window.location.href = "index.html";
    } else if (choice == 'again') {
       $("#incorrect").overlay().close();
    } else overlayDiv(choice);
    //$('#correct').overlay().load();
    });

});
*/