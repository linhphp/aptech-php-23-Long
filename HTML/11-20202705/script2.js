var data = {
    "users": [
        {
            "ten":"Long",
            "diachi":"danang",
            "cannang":"55kg",
            "chieucao":"1m72",
        },
        {
            "ten":"Hung",
            "diachi":"IRac",
            "cannang":"65kg",
            "chieucao":"1m70",
        },
        {
            "ten":"Thanh",
            "diachi":"IRan",
            "cannang":"68kg",
            "chieucao":"1m68",
        }
            
    ]

};
function long(){
    var taotable = document.getElementById("tableBody");
    for (var i = 0; i < data.users.length; i++) {
        var taorow = document.createElement("tr");

        var taodt = document.createElement("td");
        taodt.innerHTML = i + 1;
        taorow.appendChild(taodt);

        var taodt = document.createElement("td");
        taodt.innerHTML = data.users[i]["ten"];
        taorow.appendChild(taodt);

        var taodt = document.createElement("td");
        taodt.innerHTML = data.users[i]["diachi"];
        taorow.appendChild(taodt);

        var taodt = document.createElement("td");
        taodt.innerHTML = data.users[i]["cannang"];
        taorow.appendChild(taodt);

        var taodt = document.createElement("td");
        taodt.innerHTML = data.users[i]["chieucao"];
        taorow.appendChild(taodt);

        taotable.appendChild(taorow);
    
    }

}
