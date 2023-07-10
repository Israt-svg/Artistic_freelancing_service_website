<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style type="text/css">
    *{
        margin:0;
        padding: 0;
    }

    h1{
    display: flex;
    position: fixed;
    
    transition: all .5s ease;
  }
  h1 a{
      text-decoration: none;
      
  }
    .reg{
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background: url(images/black.jpg) no-repeat ;

}
.container{
    width: 330px;
    background: #ffffff;
    border-radius: 5px;
    text-align: center;
    padding: 50px 35px 10px 35px;

}
.container header{
    font-size: 35px;
    font-weight: 600;
    margin: 0 0 30px 0;
}
.container .form-outer{
    width: 100%;
    overflow: hidden;
}
.form-outer form{
    display: flex;
    width: 400%;

}
.form-outer form .page{
    width: 25%;
    transition: margin-left 0.3s ease-in-out;
}
.form-outer form .page .title{
    text-align: left;
    font-size: 25px;
    font-weight: 500;
}
.form-outer form .page .field{
    height: 45px;
    width: 330px;
    margin: 45px 0;
    display: flex;
    position: relative;
}
.form-outer form .page .field .label{
    position: absolute;
    top: -30px;
    font-weight: 500px;

}
.form-outer form .page .field input{
    height: 100%;
    width: 100%;
    border: 1px solid lightgray;
    border-radius: 5px;
    font-size: 18px;
    padding-left: 15px;

}
form .page .field select{
    width: 100%;
    padding-left: 10px;
    font-size: 17px;
    font-weight: 500;
}
.form-outer form .page .field button{
   width: 100%;
   height: calc(100% + 5px);
   margin-top: -20px;
   border: none;
   background: rgb(235, 143, 109);
   border-radius: 5px;
   color: papayawhip;
   font-size: 18px;
   font-weight: 500;
   text-transform: uppercase;
   letter-spacing: 1px;
   cursor: pointer;
   transition: 0.3s ease;
}

.form-outer form .page .field button:hover{
    background: plum;

}
.form-outer form .page .btns button{
 margin-top: -20px !important;
}
form .page .btns submit.prev{
    margin-right: 3px;
    font-size: 17px;

}
form .page .btns button.next{
    margin-left: 3px;
}
.container .progress-bar{
    display: flex;
    margin: 40px 0;

}
.container .progress-bar .step{
    position: relative;
    text-align: center;
    width: 100%;
}
.progress-bar .step p{
    font-size: 18px;
    font-weight: 500;
    color: #000000;
    margin-bottom: 10px;
    transition: 0.2s;
}
.progress-bar .step p.active{
    color: #d43f8d;
}
.progress-bar .step .bullet{
    position: relative;
    height: 30px;
    width: 30px;
    border: 2px solid #000000;
    display: inline-block;
    border-radius: 50%;
    transition: 0.2s;
    
}
.progress-bar .step .bullet.active{
    border-color: #d43f8d;
    background:#d43f8d;
}
.progress-bar .step:last-child .bullet:before,
.progress-bar .step:last-child .bullet:after{
    display: none;
}
.progress-bar .step .bullet:before,
.progress-bar .step .bullet:after{
   position: absolute;
   content:'';
   bottom: 11px;
   right: -50px;
   height: 3px;
   width: 45px;
   background: #262626;
}
.progress-bar .step .bullet.active:after{
    background: #d43f8d;
    transform: scaleX(0);
    transform-origin: left;
    animation: animate 0.3s linear forwards;
}
@keyframes animate{
    100%{
        transform: scaleX(1);
    }
}
.progress-bar .step .bullet span{
    font-weight: 500;
    font-size: 17px;
    line-height: 25px;
    position: absolute;
    left: 50%;
    transform: translate(-50%);
}
.progress-bar .step .bullet.active span{
    display: none;
}
.progress-bar .step .check{
    position: absolute;
    left: 50%;
    top: 70%;
    font-size: 15px;
    transform: translate(-50% -50%);
    display: none;
}
.progress-bar .step .check.active{
    display: block;
    color: #ffffff;
}

    </style>
</head>
<body class="reg">


    <div class="container">
    <h1><a href="index.html">Artistic</a></h1>
        <header>Sign Up</header>
        <div class="progress-bar">
            <div class="step">
              <p>Name</p>
            <div class="bullet">
                <span>1</span>
            </div>
            <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Contact</p>
                <div class="bullet">
                    <span>2</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Birth</p>
                <div class="bullet">
                    <span>3</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Submit</p>
                <div class="bullet">
                    <span>4</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
        </div>
        <div class="form-outer">
            <form action="insert.php" method="POST">
                <div class="page slidepage">
                    <div class="title">Basic Info:</div>
                    <div class="field">
                        <div class="label">First Name</div>
                        <input type="text" name="firstname"/>
                    </div>
                    <div class="field">
                        <div class="label">Last Name</div>
                        <input type="text" name="lastname"/>
                    </div>
                    <div class="field nextBtn">
                        <button type="button" >Next </button>
                    </div>
                </div>
                <div class="page">
                    <div class="title">Contact Info:</div>
                    <div class="field">
                        <div class="label">Email Address</div>
                        <input type="text" placeholder="valid email address" name="email"/>

                    </div>
                    <div class="field">
                        <div class="label">Phone Number</div>
                        <input type="text" name="phone" value=""/>
                    </div>
                    <div class="field btns">
                        <button type="button" class="prev-1 prev">Previous </button>
                        <button type="button" class="next-1 next" >Next</button>
                    </div>
                </div>

                <div class="page">
                    <div class="title">Date of Birth:</div>
                    <div class="field">
                        <div class="label">Date</div>
                        <input type="date" name="dob" value="">

                    </div>
                    <div class="field">
                        <div class="label">Gender</div>
                        <select name="gender">
						    <option selected hidden value="">Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="Others">Prefer not to Say</option>
                        </select>
                    </div>
                    <div class="field btns">
                        <button type="button" class="prev-2 prev">Previous</button>
                        <button type="button" class="next-2 next">Next</button>
                    </div>
                </div>
                <div class="page">
                    <div class="title">Login Info:</div>
                    <div class="field">
                        <div class="label">Username</div>
                        <input type="text" name="username" />

                    </div>
                    <div class="field">
                        <div class="label">Password</div>
                        <input type="password" name="password"/>
                    </div>
                    <div class="field btns">
                        <button type="button" class="prev-3 prev">Previous</button>
                        <button type="submit" class="next-3 next">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
const slidePage=document.querySelector(".slidepage");
const firstNextBtn=document.querySelector(".nextBtn");

const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");

const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");

const prevBtnFourth = document.querySelector(".prev-3");
const SubmitBtn = document.querySelector(".next-3");

const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");

let max = 4;
let current = 1;

firstNextBtn.addEventListener("click",function(){
   slidePage.style.marginLeft ="-25%";
   bullet[current - 1].classList.add("active");
   progressText[current - 1].classList.add("active");
   progressCheck[current - 1].classList.add("active");
   current += 1;
});

nextBtnSec.addEventListener("click",function(){
    slidePage.style.marginLeft="-50%";
    bullet[current-1].classList.add("active");
    progressText[current - 1].classList.add("active");
   progressCheck[current-1].classList.add("active");
   current += 1;
 });

 nextBtnThird.addEventListener("click",function(){
    slidePage.style.marginLeft="-75%";
    bullet[current-1].classList.add("active");
    progressText[current - 1].classList.add("active");
   progressCheck[current-1].classList.add("active");
   current += 1;
   
 });

 SubmitBtn.addEventListener("click",function(){
   bullet[current-1].classList.add("active");
   progressText[current - 1].classList.add("active");
   progressCheck[current-1].classList.add("active");
   current += 1;
  setTimeout(function(){
   alert("You've Successfully Signed Up");
   location.reload();
 }, 800);
});

/*------------------------*/

prevBtnSec.addEventListener("click",function(){
    slidePage.style.marginLeft="0%";
    bullet[current-2].classList.remove("active");
    progressText[current - 2].classList.remove("active");
   progressCheck[current-2].classList.remove("active");
   current -= 1;
 });
 
 prevBtnThird.addEventListener("click",function(){
    slidePage.style.marginLeft="-25%";
    bullet[current-2].classList.remove("active");
    progressText[current - 2].classList.remove("active");
   progressCheck[current-2].classList.remove("active");
   current -= 1;
 });
 
 prevBtnFourth.addEventListener("click",function(){
     slidePage.style.marginLeft="-50%";
     bullet[current-2].classList.remove("active");
     progressText[current - 2].classList.remove("active");
    progressCheck[current-2].classList.remove("active");
    current -= 1;
  });
	</script>
</body>
</html>