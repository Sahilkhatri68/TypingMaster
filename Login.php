 <!-- <?php
    $conn = mysqli_connect("localhost", "root", "", "harshaweb");
    //login
    session_start();
    if (isset($_POST['login'])) {




        $email = $_POST['email'];
        $password = $_POST['password'];

        $select = "SELECT * FROM testing WHERE email='$email' && password='$password'";
        $query = mysqli_query($conn, $select);
        $data = mysqli_fetch_assoc($query);

        if (isset($data)) {
            $_SESSION['email'] = $data['email'];


            header("location:http://projects.test/logincaptcha/index.php");
        } else {
            echo '<script>alert("Wrong Data")</script>';
        }
    }
    ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <style>
     .maindiv {
         padding: 60px;
         background-image: url("./image/candle.jpg");
     }

     .insidediv {
         width: 30%;
     }

     .btnone {
         border: none;
         background-color: #c08e4a;
         color: white;
         font-size: 50px;
         cursor: pointer;
         text-align: center;
         width: 100%;
     }

     .empty {
         height: 50px;
     }

     .contone {
         background-color: black;
         color: white;
         font-size: 30px;
         text-align: center;

     }

     .conttwo {
         background-color: #c08e4a;
         padding: 15px;
     }

     .inputt {
         width: 97%;
         height: 35px;
         padding: 4px;
     }

     .bottomdiv {
         width: 100%;
     }

     .sp {
         color: black;
     }

     .lastCont {
         width: 100%;
         margin: auto;
         text-align: center;
         margin-top: 10px;
         justify-content: center;
         display: flex;
         justify-content: center;
         padding-bottom: 10px;
     }

     .itemsdiv {
         display: flex;
         justify-content: space-between;
         margin-top: 10px;
         width: 80%;
         margin: auto;
     }

     @media(max-width:1056px) {
         .insidediv {
             width: 35%;
         }
     }

     @media(max-width:900px) {
         .insidediv {
             width: 40%;
         }
     }

     @media(max-width:750px) {
         .insidediv {
             width: 45%;
         }

     }

     @media(max-width:700px) {
         .itemsdiv {
             width: 100%;
         }

     }

     @media(max-width:650px) {
         .insidediv {
             width: 60%;
         }
     }

     @media(max-width:500px) {
         .insidediv {
             width: 70%;
         }

         .maindiv {
             padding: 50px;
             margin: auto;

         }
     }

     @media(max-width:450px) {
         .insidediv {
             width: 90%;
             margin: auto;

         }

         .maindiv {
             padding: 30px;
             margin: auto;

         }
     }

     @media(max-width:400px) {
         .insidediv {
             width: 100%;
         }

         .maindiv {
             padding: 20px;
             margin: auto;
         }
     }
     </style>
 </head>

 <body>
     <form class="maindiv" method="POST">
         <div class="insidediv">
             <button class="btnone" type="submit" name="login">
                 reC<span class="sp">r</span>ash
             </button>
             <div class="empty">
             </div>
             <div class="bottomcont">
                 <div class="contone">Welcome Back</div>
                 <div class="bottomdiv">
                     <div class="conttwo">
                         <input type="email" name="email" id="" placeholder="Email" class="inputt" required>
                     </div>
                     <div class="conttwo">
                         <input type="password" name="password" id="" placeholder="password" class="inputt" required>

                     </div>
                 </div>
             </div>
             <div class="lastCont">
                 <div class="g-recaptcha" data-sitekey="6Lclj4ghAAAAAIQS_ljov07K8li9cY_7xwQlmN2K"></div>
                 <br />

             </div>
             <div class="itemsdiv">
                 <div class="item"> <input type="checkbox" name="" id="" required>Remember </div>
                 <div class="item"><a href="http://projects.test/logincaptcha/Singup.php">New ?</a></div>
                 <div class="item"><a href="">Forgot ?</a></div>
             </div>
         </div>
     </form>
 </body>

 </html> -->