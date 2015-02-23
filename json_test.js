console.log("Hej");

$.getJSON(
        "json_test.json", 
        function(data){ 
            console.log(data.name);
        }
);


