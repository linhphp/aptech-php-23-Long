<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<style>
    .container{
    width: 1000px;
}
.row{
    display: flex;
}
.sign{
    background-color: white;
    width: 150px;
    height: 50px;
    border-radius: 5px;
    border-color: red;
    float:left;
    color: red;
}
.sign2{
    background-color: white;
    width: 80px;
    height: 50px;
    border-radius: 5px;
    border-color: green;
    float: right;
    color: green;
}
.L{
    display: flex;
    float: right;
}
.col-6>h1{
    color: green;
}
ul>li{
    list-style: none;
    line-height: 10px;
    margin: 5px auto;
}
.container>ul>li>a{
    text-decoration: none;
    color: gray;
}
ul{
    display: flex;
}
.col-6{
    margin: auto;
}
.div1{
    background-image: url('anh.jpg');
    height: 300px;
    background-repeat: no-repeat;
    width: 100%;
    color: white;
    text-align:left;
    background-size: cover;
    background-position: center;  
}

.div1>p{
    margin: 150px 10px 10px 10px;
    font-size: small;
}
.div2{
    background-image: url('anh2.jpg');
    height: 300px;
    background-repeat: no-repeat;
    width: 100%;
    color: white;
    text-align: left;
    background-size: cover;
    background-position: center; 
}
.div2>p{
    margin: 150px 10px 10px 10px;
    font-size: small;
}
.div3{
    background-color: whitesmoke;
    height: 50px;
    text-align: left;
    border: gray 1px solid;
    border-radius: 5px 5px 0 0;
}
.div3>h5{
    margin: 10px 5px;
}
.div4{
    height: 50px;
    text-align: left;
    border: gray 1px solid;
}
.div4>p{
    margin: 10px 5px;
}
.col-4{
    margin: auto;
}
.div5>p{
    margin-left: 15px;
}
.div5{
    border-radius: 0 0 5px 5px;
    border: 1px solid wheat;
}
.div5>h5{
    margin: 10px 0 10px 15px;
}
.bt{
    width: 100%;
    height: 50px;
    background-color: whitesmoke;
    border-radius: 0 0 5px 5px;
    border: 1px solid wheat;
}
button{
    margin-left: 15px;
    color: grey;
    
}
button>p{
    margin-left: 8px;
    text-align: left;
}
.ft{
 background-color: green;
 color: white;
 border-radius: 5px;
 margin-right: 5px;
 float: left;   
}
.more{
    float: right;
    display: flex;
}
.hot{
    background-color: red;
    color: white;
    border-radius: 5px;
    float: left;
}
.col-3>p>a{
    color: gray;
    text-decoration:none;
}
</style>
<body>
    <div class="container text-center">
        <div class="row mt-5">
            <div class="col-3">
                <button class="sign">SIGN UP NOW</button>
            </div>
            <div class="col-6">
                <h1>NEWS</h1>
            </div>
            <div class="col-3">
                <div class="L">
                    <i class="fas fa-search" style="margin: 25px 15px" ></i>
                <button class="sign2">SIGN IN</button>
                </div>
                
            </div>
        </div>
        <br>

        <ul>
           <a href=""><i class="fas fa-chevron-left" style="color: grey;"></i></a> 
            <li> <a href="">Home</a> </li>
            <li><a href="">HTML</a> </li>
            <li><a href="">CSS</a> </li>
            <li><a href="">JavaScript</a> </li>
            <li><a href="">PHP</a> </li>
            <li><a href="">React JS</a> </li>
            <li><a href="">Laravel</a> </li>
            <a href=""><i class="fas fa-chevron-right" style="color: grey;"></i></a>
        </ul>
        <hr>
        <div class="row">
            <div class="col-4">
                <div class="div1">
                    <h5>Card title</h5>
                    <p>This is a wider card with
                        supporting text below <br> as a natural lead-in
                        to additional content.</p>
                </div>
            </div>

            <div class="col-4 text-left">
                <div class="div2">
                    <h5>Card title</h5>
                    <p>This is a wider card with
                        supporting text below as a natural lead-in
                        to additional content.</p>
                </div>
            </div>

            <div class="col-4">
                <div class="div3">
                    <h5>Hot News</h5>
                </div>
                <div class="div4">
                    <div class="p">
                    <p>Lorem ipsum dolor sit amet consectetur a..</p>
                    <i class='fab fa-node-js' style='font-size: 25px;color:green;margin-left: 0px;'></i>
                    </div>
                    
                    
                </div>
                <div class="div4">
                    <div class="p">
                    <P>A expedita, fuga! Ab qtque facilis, itaauqe !...</p>
                    <i class='fab fa-html5' style='font-size:25px;color:red;margin-left:auto'></i>
            
                    </div>
                    
                </div>
                <div class="div4">
                    <div class="p">
                    <p>Lorem ipsum dolor sit amet consectetur a...</P>
                    <i class='fab fa-js-square' style='font-size: 25px;margin-left: 4px;'></i>
                         
                    </div>
                    
                </div>
                <div class="div4">
                    <div class="p">
                    <p>Cupiditate fuga illum quaerat!</p>
                    <i class='fab fa-node-js' style='font-size: 25px;color:green;margin-left: 96px;'></i>
                      
                    </div>
                    
                </div>
                <div class="div4">
                    <div class="p">
                    <p>magnam magni minus nihil perferendis qu...</p> 
                    <i class='fab fa-html5' style='font-size:25px;color:red;margin-left:auto'></i>
                      
                    </div>
                    
                </div>

            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-6">
                <button class="ft">Feature</button>
            </div>
            <div class="col-6">
                <div class="more">
                    <h5>MORE</h5>
                    <i class="fas fa-chevron-right" style="color: grey;margin: 5px 15px;"></i>
                </div>
            </div>
            
        </div>

        <br>
        <div class="row text-left">
         
            <div class="col-4">
                <div class="div5">
                    <img src="anh3.jpg" width="100%" height="150" alt="">
                    <h5>Card title</h5>
                    <p>This is a wider card with
                        supporting text below</p>
                    <button class="bt"><p>Last updated 3 mins ago</p></button>
                </div>
                <br>
                <div class="div5">
                    <img src="anh4.jpg" width="100%" height="150" alt="">
                    <h5>Card title</h5>
                    <p>This is a wider card with
                        supporting text below</p>
                    <button class="bt"><p>Last updated 3 mins ago</p></button>
                </div>
            </div>
            <div class="col-4">
                <div class="div5">
                    <img src="anh5.jpg" width="100%" height="150" alt="">
                    <h5>Card title</h5>
                    <p>This is a wider card with
                        supporting text below</p>
                    <button class="bt"><p>Last updated 3 mins ago</p></button>
                </div>
                <br>
                <div class="div5">
                    <img src="anh6.jpg" width="100%" height="150" alt="">
                    <h5>Card title</h5>
                    <p>This is a wider card with
                        supporting text below</p>
                    <button class="bt"><p>Last updated 3 mins ago</p></button>
                </div>
            </div>
            <div class="col-4">
                <div class="div5">
                    <img src="anh2.jpg" width="100%" height="315" alt="">
                    <br><br>
                    <h5>Card title</h5>
                    <p>Lorem ipsum dolor sit amet consectertu
                        adipisicing elit. Commodi incidunt minus
                        dolorem totam? Explicabo commodi consectertu,
                        totam deleniti, rerum sunt obcaecati, provendent
                        quam aspernatur suscipit qui pariatur nisi nihil
                        sotula.</p>
                    <button class="bt"><p>Last updated 3 mins ago</p></button>
                </div>
            </div>
        </div><hr>
        <div class="row">
            <div class="col-6">
                <button class="hot">Hot</button>
            </div>
            <div class="col-6">
                <div class="more">
                    <h5>MORE</h5>
                   <i class="fas fa-chevron-right"></i>
                </div>
            </div>
            
        </div><br>
        <div class="row text-left">
            <div class="col-4">
                <div class="div5">
                    <img src="anh2.jpg" width="100%" height="315" alt="">
                    <br><br>
                    <h5>Card title</h5>
                    <p>Lorem ipsum dolor sit amet consectertu
                        adipisicing elit. Commodi incidunt minus
                        dolorem totam? Explicabo commodi consectertu,
                        totam deleniti, rerum sunt obcaecati, provendent
                        quam aspernatur suscipit qui pariatur nisi nihil
                        sotula.</p>
                    <button class="bt"><p>Last updated 3 mins ago</p></button>
                </div>
            </div>
            <div class="col-4">
                <div class="div5">
                    <img src="anh5.jpg" width="100%" height="150" alt="">
                    <h5>Card title</h5>
                    <p>This is a wider card with
                        supporting text below</p>
                    <button class="bt"><p>Last updated 3 mins ago</p></button>
                </div>
                <br>
                <div class="div5">
                    <img src="anh4.jpg" width="100%" height="150" alt="">
                    <h5>Card title</h5>
                    <p>This is a wider card with
                        supporting text below</p>
                    <button class="bt"><p>Last updated 3 mins ago</p></button>
                </div>
            </div>
            <div class="col-4">
                <div class="div5">
                    <img src="anh6.jpg" width="100%" height="150" alt="">
                    <h5>Card title</h5>
                    <p>This is a wider card with
                        supporting text below</p>
                    <button class="bt"><p>Last updated 3 mins ago</p></button>
                </div>
                <br>
                <div class="div5">
                    <img src="anh3.jpg" width="100%" height="150" alt="">
                    <h5>Card title</h5>
                    <p>This is a wider card with
                        supporting text below</p>
                    <button class="bt"><p>Last updated 3 mins ago</p></button>
                </div>
            </div>
        </div>

    </div><hr>
    <div class="container-fluid">
        <div class="row text-left">
            <div class="col-6 ">
                <h5>HỆ THỐNG ĐÀO TẠO CNTT QUỐC TẾ SOFTECH APTECH</h5>
                <p>Địa chỉ: Tòa nhà VNPT,38 Yên Bái, Q.Hải Châu, Tp.Đà Nẵng </p>
                <p>Điện thoại:0987.654.321</p>
                <p>Email: Longdeptrai@gamil.com</p>
                <img src="anh7.jpg" width="60%" height="100px" alt="">
                <p>&copy;Aptech PHP 23-2020</p>
            </div>
            <div class="col-3">
                <h5>Navigation</h5>
                <p> <a href="">Home</a></p>
                <p><a href="">HTML</a></p>
                <p><a href="">CSS</a></p>
                <p><a href="">JavaScript</a></p>
                <p><a href="">PHP</a></p>
                <p><a href="">Contact</a></p>
            </div>
            <div class="col-3">
                <h5>About</h5>
                <p><a href="">Team</a></p>
                <p><a href="">Location</a></p>
                <p><a href="">Privacy</a></p>
                <p><a href="">Terms</a></p>
            </div>
        </div>
    </div>



</body>

</html>