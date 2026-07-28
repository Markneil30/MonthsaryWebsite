<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Happy Monthsary 💜</title>

<link rel="stylesheet" href="style.css">

</head>


<body class="passPage">


<div class="phone">


<h2>Enter Passcode 💜</h2>



<div class="dots">

    <span></span>
    <span></span>
    <span></span>
    <span></span>

</div>



<p id="message"></p>



<div class="numbers">


<button onclick="press(1)">1</button>
<button onclick="press(2)">2</button>
<button onclick="press(3)">3</button>


<button onclick="press(4)">4</button>
<button onclick="press(5)">5</button>
<button onclick="press(6)">6</button>


<button onclick="press(7)">7</button>
<button onclick="press(8)">8</button>
<button onclick="press(9)">9</button>


<button onclick="clearPass()">⌫</button>
<button onclick="press(0)">0</button>
<button onclick="checkPass()">✓</button>


</div>


</div>



<script>

let password = "";

let correctPassword = "2004";



function press(num){


    if(password.length < 4){

        password += num;

        updateDots();

    }


}




function clearPass(){


    password = "";

    updateDots();


}




function updateDots(){


    let dots = document.querySelectorAll(".dots span");


    dots.forEach((dot,index)=>{


        if(index < password.length){

            dot.style.background="white";

        }else{

            dot.style.background="transparent";

        }


    });


}




function checkPass(){


    let message = document.getElementById("message");



    if(password === correctPassword){


        message.innerHTML="Correct love 💜";


        setTimeout(()=>{


            window.location="gallery.php";


        },1000);



    }else{


        message.innerHTML="Sorry love, mali ka 💜";


        password="";


        updateDots();


    }


}



</script>



</body>

</html>