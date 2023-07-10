<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
      @import"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
      *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
      }
      body{
          background: url(images/black.jpg);
          font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu,
           Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
           color: white;
      }
      .wrapper{
          background-color: rgb(0, 0, 0,0.4);
          width: 750px;
          padding: 35px;
          margin: 40px auto 0;
          box-shadow: 0px 0px 20px rgb(145, 139, 139);
          border-radius: 4px;
      }
      .wrapper h2{
          font-size: 30px;
          background-color: rgb(0, 0, 0,0.6);
          text-align: center;
          margin-bottom: 25px;
          padding: 10px;
          box-shadow: 0px 0px 20px rgb(145, 139, 139);
      }
      .h3{
          padding-bottom: 8px;
      }
      .input-grp{
          margin-bottom: 15px;
          width: 100%;
          position: relative;
          display: flex;
          flex-direction: row;
          padding: 10px 0px;
      }
      .input-box{
          width: 100%;
          margin-right: 12px;
          position: relative;
      }
      .name{
          padding: 14px 10px 14px 50px;
          width: 80%;
          border: 1px solid black;
          outline: none;
          letter-spacing: 1px;
          transition: .3s;
          border-radius: 6px;
          color: black;
      }
      .email{
          width:48%;
      }
      .name1{
          padding: 14px 10px 14px 50px;
          width: 90%;
          border: 1px solid black;
          outline: none;
          letter-spacing: 1px;
          transition: .3s;
          border-radius: 6px;
          color: black;
      }
      .input-box .icon{
          width: 48px;
          display: flex;
          justify-content: center;
          align-items: center;
          position: absolute;
          top: 0px;
          left: 0px;
          bottom: 0px;
          color: black;
      }
      .name:focus+.icon{
          background-color: blueviolet;
          color: white;
          border-right: 1px solid blueviolet;
          border:none;
          transition: .2s;
      }
      .dob{
          font-size: 15px;
          border-radius: 4px;
          padding: 5px;
      }
     
      .radio:checked + label{
          background-color: blueviolet;
          color: white;
          transition: .2s;
      }
     button{
         width: 90%;
         background: transparent;
         border: none;
         background: blueviolet;
        color: wheat;
        padding: 15px;
        border-radius: 5px;
        font-size: 17px;
        font-weight: 600;
        transition: all 0.35s ease;
     }
     button:hover{
         cursor: pointer;
         background: rgb(160, 97, 219);
     }
    </style>
</head>
<body>
    <div>
        <h1><a>Artistic</a></h1>
    </div>
    <div class="wrapper">
        <h2>Payment Form</h2>
        <Form method="POST" onsubmit="paid()">
            <h3>Account</h3>
            <div class="input-grp">
                <div class="input-box">
                    <input type="text"
                    placeholder="First Name"required
                    class="name">
                    <i class="fa fa-user-circle icon"></i>
                </div>
                <div class="input-box">
                    <input type="text"
                    placeholder="Last Name"required
                    class="name">
                    <i class="fa fa-user-circle icon"></i>
                </div>
            </div>

            <div class="input-grp">
                <div class="input-box">
                    <div class="email">
                    <input type="email" required
                    placeholder="Email Address"
                    class="name">
                    <i class="fa fa-envelope icon" aria-hidden="true"></i>
                </div>
                </div>
            </div>

            <div class="input-grp">
                <div class="input-box">
                    <h3>Date of Birth</h3>
                    <input type="text"placeholder="DD"
                    class="dob"> &nbsp;
                    <input type="text"placeholder="MM"
                    class="dob"> &nbsp;
                    <input type="text"placeholder="YYYY"
                    class="dob"> &nbsp;
                </div>
            </div>

             <div class="input-grp">
                <div class="input-box">
                    <h3>Gender</h3>
                    <select name="gender">
                       <option>Female</option>
                       <option>Male</option>
                       <option>Others</option>
                    </select>
                </div>
            </div>
                  
            <div class="input-grp">
                <div class="input-box">
                    <h3>Payment Details</h3>

                    <input type="radio" name="pay" id="bc1" class="radio">
                    <label for "bc1">
                        <span>
                            <i class="fa fa-credit-card " aria-hidden="true"></i>
                        </span> Card Pay &nbsp; &nbsp;
                    </label>

                    <input type="radio" name="pay" id="bc2" class="radio">
                    <label for "bc2">
                        <span>
                            <i class="fa fa-cc-paypal" aria-hidden="true"></i>
                        </span>Paypal &nbsp; &nbsp;
                    </label>
                </div>
            </div>
        
            <div class="input-grp">
                <div class="input-box">
                    <h3>Card Pay Options</h3>

                    <input type="radio" name="pay1" id="bc3"class="radio">
                    <label for "bc3">
                        <span>
                            <i class="fa fa-cc-visa" aria-hidden="true"></i>
                        </span> Visa Card &nbsp; &nbsp;
                    </label>

                    <input type="radio" name="pay1" id="bc4"class="radio">
                    <label for "bc4">
                        <span>
                            <i class="fa fa-cc-mastercard" aria-hidden="true"></i>
                        </span>Master Card &nbsp; &nbsp;
                    </label>

                    <input type="radio" name="pay1" id="bc5"class="radio">
                    <label for "bc5">
                        <span>
                            <i class="fa fa-cc-discover" aria-hidden="true"></i>
                        </span>Discover Card &nbsp; &nbsp;
                    </label>

                    <input type="radio" name="pay1" id="bc6"class="radio">
                    <label for "bc6">
                        <span>
                            <i class="fa fa-cc-jcb" aria-hidden="true"></i>
                        </span>JCB Card &nbsp; &nbsp;
                    </label>
                </div>
            </div>
                
            <div class="input-grp">
                <div class="input-box">
                    <input type="tel" placeholder="Your Credit Card Number"
                    required class="name1">
                    <i class="fa fa-credit-card icon" 
                    arial-hidden="true"></i>
            </div>
            </div>
               
            <div class="input-grp">
                <div class="input-box">
                    <input type="tel" placeholder="Card CVC"
                    required class="name">
                    <i class="fa fa-user icon" 
                    arial-hidden="true"></i>
                </div>
                
                <div class="input-box">
                   <input type="date" required placeholder="DD-MM-YYYY" class="name">
                   <i class="fa fa-calander" arial-hidden="true"></i>
                </div>
            </div>
            
            <div class="input-grp">
                <div class="input-box">
                    <button type="submit" class="sub">Submit Payment</button>
                    <i class="fa fa-lock icon" arial-hidden="true"></i>
                </div>
            </div>
                  
        </Form>
    </div>
    <script src="script2.js">
        
    </script>
</body>
</html>