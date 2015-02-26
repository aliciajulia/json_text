console.log("Hej");

$.getJSON(
        "data.php", 
        function(data){ 
            console.log(data);
//            $("#text").text(data.kollegor);
            
            $.each(data, function(data){
                console.log(data);
            });
        }
);


