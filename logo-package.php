<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
    *{
        margin:0;
        padding: 0;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell,
         'Open Sans', 'Helvetica Neue', sans-serif;
         box-sizing: border-box;
         
    }
    body{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell,
         'Open Sans', 'Helvetica Neue', sans-serif;
         box-sizing: border-box;
         background: url(images/black.jpg);
         color: white;
    }
    .package-info {
        background: rgb(0,0,0,0.6);
        display: block;
        justify-content: center;
        text-align: center;
    }
    .pack{
        display: flex;
        flex-wrap:wrap ;
        justify-content: center;
        background: rgb(0,0,0,0.4);
        min-height: 100vh;
    }
    .packages{
        position: relative;
        width: 220px;
        height: 350px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 30px 20px 30px 30px;
        box-sizing: border-box;
        box-shadow: 1px 2px 4px white;
       
    }
    .glass{
        position: absolute;
        top:0;
        left: 0;
        display: block;
    }
    .content h3{
        text-align: center;
    }
   .content{
       padding: 20px;
   } 
   input {
       background: rgb(85, 96, 117);
       display: block;
       align-items: center;
       text-align: center;
       padding: 10px 20px 10px 20px;
       cursor: pointer;
       outline: none;
       transition: 0.25s;
       margin-left: 30px;
   }
   input{
       font-weight: 700;
       font-size: 15px;
   }
  
   button:hover{
       background: rgb(49, 56, 70) ;
   }
   
   .pot{
       background: rgb(0,0,0,0.4);
       padding: 5px;
   }
   .bt{
       margin-left: 20px;
       padding: 10px;
   }
  
   .but{
       padding-left: 500px;
   }
   .con{
       font-size: 20px;
       font-weight: 600;
   }
   h4{
       font-size: 20px;
   }
   .con:hover{
       background: rgb(49, 56, 70) ;
   }
   .but a {
       text-decoration: none;
       color: black;
   }
  
    </style>
</head>
<body>
    <div>
        <h1><a>Artistic</a></h1>
    </div>
<br>
    <div class="package-info">
        <h2>Which Logo Package Do You Prefer</h2>
        <p>Choose a Package that will get the result you desire</p>
    </div> <br> <br>
    <div class="pack">
    <div class="packages">
        <div class="glass">
            <div class="content">
                <h3>1-3 Designs</h3><br><hr><br>
                <p>
                    <ul>
                        <li>1 Designer</li>
                        <li>Minimum 3 Designs</li>
                        <li>Unlimited Revisions</li>
                        <li>Money Back Gurantee</li>
                        <li>Copyright ownership of 1 Design</li>
                        <li>Industry Standard Files</li>
                    </ul>
                </p>
                <br><br>
                  <div class="Price">BDT 600</div>
                  <br>
                  <input type="button" name="" onclick="change()" value="Select" class="add-cart cart1">
            </div>
        </div>
    </div>

    <div class="packages">
        <div class="glass">
            <div class="content">
                <h3>6+ Designs</h3><br><hr><br>
                <p>
                    <ul>
                        <li>3 Designers</li>
                        <li>6+ Designs</li>
                        <li>Unlimited Revisions</li>
                        <li>Money Back Gurantee</li>
                        <li>Copyright ownership of 1 Design</li>
                        <li>Industry Standard Files</li>
                    </ul>
                </p>
                <br><br>
                  <div class="Price">BDT 800</div>
                  <br>
                  <input type="button" name="" onclick="change()" value="Select" class="add-cart cart2">
            </div>
        </div>
    </div>

    <div class="packages">
        <div class="glass">
            <div class="content">
                <h3>50+ Designs</h3><br><hr><br>
                <p>
                    <ul>
                        <li>Unlimited Designer</li>
                        <li>50+ Designs</li>
                        <li>Unlimited Revisions</li>
                        <li>Money Back Gurantee</li>
                        <li>Copyright ownership of 1 Design</li>
                        <li>Industry Standard Files</li>
                    </ul>
                </p>
                <br><br>
                  <div class="Price">BDT 1000</div>
                  <br>
                  <input type="button" name="" onclick="change()" value="Select" class="add-cart cart3">
            </div>
        </div>
    </div>

    <div class="packages">
        <div class="glass">
            <div class="content">
                <h3>100+ Designs</h3><br><hr><br>
                <p>
                    <ul>
                        <li>Unlimited Designer</li>
                        <li>100+ Designs</li>
                        <li>Unlimited Revisions</li>
                        <li>Money Back Gurantee</li>
                        <li>Copyright ownership of 1 Design</li>
                        <li>Industry Standard Files</li>
                    </ul>
                </p>
                <br><br>
                  <div class="Price">BDT 1500</div>
                  <br>
                  <input type="button" name="" onclick="change()" value="Select" class="add-cart cart4">
            </div>
        </div>
    </div>
    <div>
    <h4>Money back guarantee</h4><br>
    <p>Get the design you want or your money back.<br> Conditions apply -<a href="#"> See our refund policy</a></p>
       <p> Have a Coupon?Add your coupon <a href="#"> Code Here</a></p>
    </div>
</div><br><br>
<div class="pot">

<div class="but">
    <a href="payment.html"><input class="con" type="button" name=""value="Contnue"></a> <br> <br>
</div>
</div>
<script src="script2.js"></script>
<script src="script4.js"></script>
</body>
</html>