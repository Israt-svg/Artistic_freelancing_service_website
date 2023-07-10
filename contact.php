

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style type="text/css">
      *{
          margin: 0;
          padding: 0;
      }
      body{
          background-color: cornsilk;
          font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu,
           Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      }
      .heading{
          text-align: center;
          justify-content: center;
          padding: 10px;
      }
      .container{
          display:flex;
          flex-wrap: wrap;
          justify-content: center;
          text-align: center;
          min-height: 60vh;
          margin: 20px;
      }
     .address{
         position:relative;
         display: block;
         width: 300px;
         height: 450px;
         margin: 20px;
         padding: 20px;
     } 
     .message{
        width: 700px;
         height: 450px;
         margin: 20px;
         padding: 10px;
     }
     .customer-info{
        margin-bottom: 10px;
          width: 100%;
          position: relative;
          display: flex;
          flex-direction: row;
          padding: 10px 0px;
     }
     .msg{
        margin-bottom: 15px;
          width: 100%;
          position: relative;
          display: flex;
          flex-direction: row;
          padding: 10px 0px;
     }
     .topic{
        margin-bottom: 15px;
          width: 100%;
          position: relative;
          display: flex;
          flex-direction: row;
          padding: 10px 0px;
     }
     input{
         width: 430px;
         height: 30px;
     }
     .input-box{
        width: 100%;
        display: flex;
        margin-right: 12px;
        position: relative;
     }
     .adj{
         width: 100%;
         padding: 10px;
     }
     .adj1{
         width: 100%;
         height: 200px;
         padding: 10px;
     }
     form{
         position: relative;
     }
     .location{
         display: flex;
         width: 220px;
         height: 90px;
         
     }
     .mail{
        display: flex;
         width: 200px;
         height: 50px; 
     }
     .phone{
        display: flex;
         width: 200px;
         height: 90px;
     }
    button{
        background: cornflowerblue;
        font-size: 15px;
        font-weight: 700;
        color: white;
        border-radius: 12px;
        width: 140px;
        height: 25px;
    }

    </style>
</head>
<body>
    <div class="heading">
       <h1>Contact Us</h1>
    </div>
    <div class="container">
       
            
        <div class="address">
            <div class="location">
               <i class="fa fa-map-marker-alt" aria-hidden="true"></i>
                <p>House No -#166, Fourth Floor(B),
                    Hill View-10, Block-A, Rahman Nagar,
                    2-No Gate Area, Chattogram,
                    Chattogram 4217, Bangladesh</p>
               
            </div><br><br><br><br>

            <div class="mail">
                <i class="fa fa-envelope-square" aria-hidden="true"></i>
                <p> &nbsp; &nbsp; artistic@gmail.com &nbsp; </p>
            </div><br><br>

            <div class="phone">
                <i class="fas fa-phone"aria-hidden="true"></i>
                 <p>+88 01736806224 &nbsp; &nbsp; &nbsp; +8801537447517</p>
            </div>

        </div>

        <form action="contact.php" method="POST">

        <div class="message">
            <div class="customer-info">
                <div class="input-box">
                    <input type="text" placeholder="Your Name" class="adj" name="name" required>
                </div>
              <div class="input-box">
                <input type="email" placeholder="Your Email"class="adj" name="email"required >
              </div>  
                
            </div>
            <div class="topic">
                <div class="input-box">
                    <input type="text" placeholder="Subject" class="adj" name="sub"required>
                </div>

            </div>
            <div class="msg">
                <div class="input-box">
                    <textarea aria-placeholder="Message"  class="adj1" name="message" required> </textarea>
                </div>
                
            </div>
            <br>
            <button type="Submit">Send Message</button>

        </div>
    </div>
    </form>
   
</body>
</html>