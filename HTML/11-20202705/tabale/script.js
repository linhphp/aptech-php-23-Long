function long(){
    var taobang = document.getElementById('table-body');
        
    for (var i=1 ;i<3; i++) {
        var taorow = document.createElement('tr');
        taobang.appendChild(taorow);

        var taodt1 = document.createElement('td');
        taodt1.innerHTML = 1;

        var taodt2 = document.createElement('td');
        taodt2.innerHTML = "Long";
        
        var taodt3 = document.createElement('td');
        taodt3.innerHTML = "1m72";
         
        var taodt4 = document.createElement('td');
        taodt4.innerHTML = "55kg";
        var taodt5 = document.createElement('td');
        taodt5.innerHTML = "Danang";

        taorow.appendChild(taodt1);
        taorow.appendChild(taodt2);
        taorow.appendChild(taodt3); 
        taorow.appendChild(taodt4);
        taorow.appendChild(taodt5);
        
            for (var i=1 ;i<3; i++) {
                var taorow2 = document.createElement('tr');
                taobang.appendChild(taorow2);
        
                var taodt6 = document.createElement('td');
                taodt6.innerHTML = 2;
        
                var taodt7 = document.createElement('td');
                taodt7.innerHTML = "Hung";
                
                var taodt8 = document.createElement('td');
                taodt8.innerHTML = "1m70";
                 
                var taodt9 = document.createElement('td');
                taodt9.innerHTML = "65kg";
                var taodt10 = document.createElement('td');
                taodt10.innerHTML = "Irac";
        
                taorow2.appendChild(taodt6);
                taorow2.appendChild(taodt7);
                taorow2.appendChild(taodt8); 
                taorow2.appendChild(taodt9);
                taorow2.appendChild(taodt10);

                for (var i=2 ;i<3; i++) {
                    var taorow3 = document.createElement('tr');
                    taobang.appendChild(taorow3);
            
                    var taodt11 = document.createElement('td');
                    taodt11.innerHTML = 3;
            
                    var taodt12 = document.createElement('td');
                    taodt12.innerHTML = "Thanh";
                    
                    var taodt13 = document.createElement('td');
                    taodt13.innerHTML = "1m68";
                     
                    var taodt14 = document.createElement('td');
                    taodt14.innerHTML = "60kg";
                    var taodt15 = document.createElement('td');
                    taodt15.innerHTML = "Iran";
            
                    taorow3.appendChild(taodt11);
                    taorow3.appendChild(taodt12);
                    taorow3.appendChild(taodt13); 
                    taorow3.appendChild(taodt14);
                    taorow3.appendChild(taodt15);
                }    
            }    
            
    }



} 

var Name = {
    "users":[
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
    ]
  };