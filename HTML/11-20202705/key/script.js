var Name = {
    Long:{ cannang:" 55kg",
    chieucao:"1m72",
    Diachi:"Danang",
    
},
    Hung:{ cannang: "60kg",
    chieucao:"1m70",
    Diachi:"Irac",
    },
    Thanh:{ cannang: "63kg",
    chieucao:"1m68", 
    Diachi:"Iran",
    }
};

var keys = Object.keys(Name);
console.log(keys);
function dienGiaTri(){
    
    document.getElementById('td 1-1').innerHTML = keys[0];
    document.getElementById('td 1-2').innerHTML = Name.Long.chieucao;
    document.getElementById('td 1-3').innerHTML = Name.Long.cannang;
    document.getElementById('td 1-4').innerHTML = Name.Long.Diachi;
    document.getElementById('td 2-1').innerHTML = keys[1];
    document.getElementById('td 2-2').innerHTML = Name.Hung.chieucao;
    document.getElementById('td 2-3').innerHTML = Name.Hung.cannang;
    document.getElementById('td 2-4').innerHTML = Name.Hung.Diachi;
    document.getElementById('td 3-1').innerHTML = keys[2];
    document.getElementById('td 3-2').innerHTML = Name.Thanh.chieucao;
    document.getElementById('td 3-3').innerHTML = Name.Thanh.cannang;
    document.getElementById('td 3-4').innerHTML = Name.Thanh.Diachi;
}