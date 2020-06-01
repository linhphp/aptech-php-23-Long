var data ={
    "users": [
        {
            "name":"Long",
            "email":"huynhphuoclong2@gmail.com",
        
            "password":"qwewqe",
            "created":"30-05-2020",
            "update":"31-05-2020",
        },
        {
            "name":"Hung",
            "email":"hungxl@gmail.com",
            
            "password":"ádsdsd",
            "created":"30-05-2020",
            "update":"31-05-2020",
        },
        {
            "name":"Thanh",
            "email":"thanhxl@gmail.com",
            
            "password":"zxczxc",
            "created":"30-05-2020",
            "update":"31-05-2020",
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

$(document).ready(function () {
    $('#an').click(function () {
   $("#P").hide();
   $("#C").hide();
   $("#U").hide();
   $("kick()").hide();
})
});
