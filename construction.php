<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeamLegacy Esports - Under Construction</title>
    <link href="assets/img/tl-logo-2.png" rel="icon">
</head>
<body>
    <!DOCTYPE html>
    <html>
    <style>
    body, html {
      height: 100%;
      margin: 0;
    }
    
    .bgimg {
      background-image: url('https://st4.depositphotos.com/19217272/27275/i/450/depositphotos_272758656-stock-photo-black-and-white-iamge-of.jpg');
      height: 100%;
      background-position: center;
      background-size: cover;
      position: relative;
      color: white;
      font-family: "Courier New", Courier, monospace;
      font-size: 25px;
    }
    p{
        font-family: 'Titillium Web';
        letter-spacing: 1px;
        margin-left : 20px;
    }
    .topleft {
      position: absolute;
      top: 0;
      left: 16px;
    }
    
    .bottomleft {
      position: absolute;
      bottom: 0;
      left: 16px;
    }
    
    .middle {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      font-family: 'Titillium Web';
        letter-spacing: 1px;
    }
    
    hr {
      margin: auto;
      width: 40%;
    }
    </style>
    <body>
    
    <div class="bgimg">
      <div class="topleft">
        <p>TEAMLEGACY ESPORTS</p>
      </div>
      <div class="middle">
        <h1>COMING SOON</h1>
        <hr>
        <p id="demo" style="font-size:30px"></p>
      </div>
      <div class="bottomleft">
        <p>Thanks !!</p>
      </div>
    </div>
    
    <script>
    // Set the date we're counting down to
    var countDownDate = new Date("Dec 15, 2021 15:37:25").getTime();
    
    // Update the count down every 1 second
    var countdownfunction = setInterval(function() {
    
      // Get todays date and time
      var now = new Date().getTime();
      
      // Find the distance between now an the count down date
      var distance = countDownDate - now;
      
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
      
      // Output the result in an element with id="demo"
      document.getElementById("demo").innerHTML = days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";
      
      // If the count down is over, write some text 
      if (distance < 0) {
        clearInterval(countdownfunction);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);
    </script>
    
    </body>
    </html>
    
</body>
</html>