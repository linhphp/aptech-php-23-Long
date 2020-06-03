var data = {
    "users":[{
        "id":40,"name":"Colten Marquardt",
        "email":"beatty.kiarra@example.com",
        "password":"$2y$10$ML9m0ofsJ2getKQgsfMyG.qSoxbvJ.6irUV4RAPB7TS.aaxJTJC0m",
        "created_at":"2020-06-01 11:58:50",
        "updated_at":"2020-06-01 11:58:50"
    },{
        "id":39,
        "name":"Dr. Edgar Moore III",
        "email":"neoma01@example.net",
        "password":"$2y$10$cIkq5WRm\/7czbvHpyE0S9uWkbMX0U2s2U46gmscTiVlE6MctyM2Yu",
        "created_at":"2020-06-01 11:58:49",
        "updated_at":"2020-06-01 11:58:49"
    },{
        "id":38,"name":"Albina Hickle",
        "email":"erutherford@example.com",
        "password":"$2y$10$lWEE.uqp4x7c7swqnzwDi.402L8LRAPFRGSOCd37sOGhGtVczFMlO",
        "created_at":"2020-06-01 11:58:49",
        "updated_at":"2020-06-01 11:58:49"
    },{
        "id":37,"name":"Tyrese Ryan",
        "email":"abernathy.leonor@example.net",
        "password":"$2y$10$okt8VonkqWxps\/ypvl71hOQTLK2x.WES.nEp7G0T7M5DKnQogjj5a",
        "created_at":"2020-06-01 11:58:49",
        "updated_at":"2020-06-01 11:58:49"
    },{
        "id":36,
        "name":"Francisca Kihn PhD",
        "email":"daren73@example.com",
        "password":"$2y$10$.GJXxjuIcYAQXTidHVCV8ekIHUBjNHiwytQIdeCgU5y79vDWXITzO",
        "created_at":"2020-06-01 11:58:49",
        "updated_at":"2020-06-01 11:58:49"
    }
    ]
};
    
    function kick(){
        var taotb = document.getElementById("tbbody");
        for (var i=0; i < data.users.length; i++){
            var taorow = document.createElement("tr");
    
            var taotd = document.createElement("td");
            taotd.innerHTML = i+1;
            taorow.appendChild(taotd);
    
            var taotd = document.createElement("td");
            taotd.innerHTML = data.users[i].name;
            taorow.appendChild(taotd);
    
            var taotd = document.createElement("td");
            taotd.innerHTML = data.users[i].email;
            taorow.appendChild(taotd);
    
           
        
            var taotd2 = document.createElement("td");
            taotd2.innerHTML = data.users[i].password;
            taorow.appendChild(taotd2);
    
            var taotd2 = document.createElement("td");
            taotd2.innerHTML = data.users[i].created;
            taorow.appendChild(taotd2);
    
            var taotd2 = document.createElement("td");
            taotd2.innerHTML = data.users[i].update;
            taorow.appendChild(taotd2);
    
            taotb.appendChild(taorow);
            
        }
    };