<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<style type="text/css">
    *{
        margin:0;
        padding: 0;
        
    }
    .backimg{
        width:100%;
        height:100vh;
        background-color:Aqua;
    }
    .box{
        width:1000px;
        height: 450px;
        background:rgba(0,0,0,.8);
        border-radius: 15px;
        border:5px solid black;
        box-shadow: 0 15px 25px rgba(0,0,0,.5);
    }
    .col-6{
        float:left;
        width:50%;

    }
    h1{
        color:red;
        animation: ganpa 1s infinite;
        font-size: 45px;
                
}
@keyframes ganpa
{
                  0%{
                      color:red;
                  }
                   50%{
                       color:red;
                   }
                   100%{
                          color:Aqua;
                   }
}

    input{
        width:190px;
        height: 40px;
        
        color:black;
        border:none;
    }
   
    .sub{
        width:150px;
        height:40px;
        background-color: Aqua;
        font-size: 20px;
        cursor: pointer;
    }
    .sub:hover{
        color:#218c74;
    }
    .appc:focus {
        border-bottom-color: #ddd;
    }
    .showdata{
        font-size: 30px;
        float:center;
        text-align: center;
    }
    label{
      color:white;
    }
    .bk{
      font-size: 30px;
    }
    .sub{
      width:100px;
      height:30px;
      background-color: Aqua;
      font-size: 20px;
      cursor: pointer;
    }
    .sub:hover{
      color:#218c74;
    }
    


</style>
<body>
     <div class="backimg"><br><br><br><br><br><br><br><br><br><br><br>
        <center>
        <div class="box">
            <div class="col-6"><br><br><br><br><br>
                <h1>Generate a</h1>
                <h1>PDF File..</h1>
            </div>
            <div class="col-6"><br><br>
                <form method="post" action="pdf.php">
            <div class="bk">
            <label>Roll No :</label>
            <input type="text" name="rn"  placeholder="Enter The Roll No"><br><br>
            <label>Name :</label>
    <input type="text" name="name"  placeholder="Enter Your Name"><br><br>
     <label>Email :</label>
    <input type="email" name="email" placeholder="Enter Your E-mail" ><br><br>
    <label>Mobile No :</label>
    <input placeholder="Enter Mobile No" type="number" name="mobile" value="mobile"><br><br>
    <input type="submit" name="submit" value="submit" class="sub"><br>
        </div>
        </form>
        
            
     </center><br><br>
     <div class="showdata">
        <p>
            
        </p>
     </div>
     </div>
     </div>

  </div>
  </body>
</html>