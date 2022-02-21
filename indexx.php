<html>
    <head> 
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">

    <title>Basic Banking System</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity=""></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js" integrity=""></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity=""></script>
        <style>
            h1 {text-align: center;}
            p {text-align: center;}
            div {text-align: center;}
.container {
  height: 200px;
  position: relative;
  border: 3px solid green;
}

.vertical-center {
  margin: 0;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
.button-panel
{    
    padding-top: 170px;
    display: table;
    margin: 0 auto;
    padding-bottom: 50px;
}
.button {
  display: block;
  border-radius: 15px;
  background-color: #f4511e;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: .5em 1em;
  width: 250px;
  transition: all 0.5s;
  cursor: pointer;
  margin: auto;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

body {
  text-align: center;
}
text-align:inherit;
        </style>
    </head>
    <body>
        <div class="header">
            <a href="indexx.php" class="logo">Banking System</a>
            <div class="header-right">
                <a class="active" href="indexx.php">Home</a>
                <a class= "nav-link" href="transfermoney.php">Users</a>
                <a class= "nav-link"href="transactionhistory.php">Transactions</a>
            </div>
        </div>
        <div class="center">
                <div class = "main">
        <div class="button-panel" style = "display: table;    margin: 0 auto;">
        <button class="button" onclick = "document.location='transfermoney.php'"><span>User </span></button>
        <button class="button" style="margin-top: 80px;" onclick = "document.location='transactionhistory.php'"><span>Transactions </span></button></div></div>
            </div>
        <footer class="footer mt-auto">
    <div class="footerText">
          <p> </span>  <a href="index.php" class="footerLink">Abritti Roy</a>
        </p>
    </div>
</footer>
    </body>
</html>