console.log("Hej");

$.getJSON(
        "json_test.json", 
        function(data){ 
            console.log(data.kollegor);
            $("#text").text(data.kollegor);
            
//            $.each(data.kollegor, function(data){
//                console.log(data.kollegor);
            });
//        }
//);


