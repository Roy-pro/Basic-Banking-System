<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">

    <title>Users</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity=""></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js" integrity=""></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity=""></script>
<style>
select:invalid{
    color: gray;
}
option{
    color: black;
}
table {
  width: 90%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}

.center {
  margin-left: auto;
  margin-right: auto;
}
</style>
</head>
<body class="center">
    <div class="header">
            <a href="indexx.php" class="logo">Banking System</a>
            <div class="header-right">
                <a class="nav-link" href="indexx.php">Home</a>
                <a class= "nav-link" href="transfermoney.php">Users</a>
                <a class= "active"href="transactionhistory.php">Transactions</a>
            </div>
        </div>


<div class="container">
    <br>
        <div class = "row">
            <div class = "col">
                <div class = "table-responsive-sm">
                    <table class="table table-striped table-dark table-md table-hover table-bordered w-auto sort" align="center" style="margin-top: 40px; margin-bottom: 90px; text-align: center;" id="userTable">
                        <thead style="color:white">
                            <tr>
                                <th scope="col" class = "text-center py-2">S No</th>
                                <th scope="col" class = "text-center py-2">Sender</th>
                                <th scope="col" class = "text-center py-2">Receiver</th>
                                <th scope="col" class = "text-center py-2">Transaction Amount</th>
                                <th scope="col" class = "text-center py-2">Date & Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include 'config.php';
                                $sql = "SELECT * FROM table2";
                                $query = mysqli_query($con, $sql);
                                while($rows = mysqli_fetch_assoc($query)){
                            ?>
                            <tr style="color:black;">
                                <td class = "py-2"><?php echo $rows['SNo']?></td>
                                <td class = "py-2"><?php echo $rows['Sender']?></td>
                                <td class = "py-2"><?php echo $rows['Receiver']?></td>
                                <td class = "py-2"><?php echo $rows['Amount']?></td>
                                <td class = "py-2"><?php echo $rows['DateTime']?></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
        
    </table>
                </div>
            </div>
        </div>
    
</div>
<footer class="footer mt-auto">
    <div class="footerText">
          <p> </span>  <a href="index.php" class="footerLink">Abritti Roy</a>
        </p>
    </div>
</footer>
    
</body>
</html>