<?php
include 'config.php';
if (isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];
    
    $sql = "SELECT * from table1 where id = $from";
    $query = mysqli_query($con, $sql);
    $sql1 = mysqli_fetch_array($query);
    
    $sql = "SELECT * from table1 where id = $to";
    $query = mysqli_query($con, $sql);
    $sql2 = mysqli_fetch_array($query);
    
    
    if (($amount)<0)
    {
        echo '<script type="text/javascript">';
        echo 'alert("Negative values cannot be transferred!")';
        echo '</script>';
    }
    else if ($amount > $sql1['Balance'])
    {
        echo '<script type="text/javascript">';
        echo 'alert("Insufficient Balance!")';
        echo '</script>';
    }
    else if ($amount == 0)
    {
        echo '<script type="text/javascript">';
        echo 'alert("Zero value cannot be transferred!")';
        echo '</script>';
    }
    else
    {
        $newbalance = $sql1['Balance'] - $amount;
        $sql = "UPDATE table1 set Balance = $newbalance where id = $from";
        mysqli_query($con, $sql);
        
        $newbalance = $sql2['Balance'] + $amount;
        $sql = "UPDATE table1 set Balance = $newbalance where id = $to";
        mysqli_query($con, $sql);
        
        $sender = $sql1['Name'];
        $receiver = $sql2['Name'];
        $sql3 = "INSERT INTO table2(`Sender`, `Receiver`, `Amount`) VALUES ('$sender','$receiver','$amount')";
        $query3 = mysqli_query($con, $sql3);
        
        if($query3)
        {
            echo "<script> alert ('Transaction Successful!');
                window.location = 'transactionhistory.php';
                </script>";
        }
        
        $newbalance = 0;
        $amount = 0;
    }
}
?>
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
                <a class= "nav-link"href="transactionhistory.php">Transactions</a>
            </div>
        </div>

<div class = "container">
    <h2 class = "text-center pt-4" style = "color:black;">Transaction</h2>
    <?php
        include 'config.php';
        $sid = $_GET['id'];
        $sql = "SELECT * FROM table1 where id = $sid";
        $result = mysqli_query($con, $sql);
        if(!$result)
        {
            echo "Error : ".$sql."<br>".mysqli_error($con);
        }
        $rows = mysqli_fetch_assoc($result);
    ?>
    <form method = "post" name = "tcredit" class = "tabletext"><br>
        <div>
            <table class="table table-striped table-dark table-md table-hover table-bordered w-auto sort" align="center" style="margin-top: 40px; margin-bottom: 90px; text-align: center;" id="userTable">
                <tr style = "color : white;">
                    <th class = "text-center">SNo</th>
                    <th class = "text-center">Name</th>
                    <th class = "text-center">Email ID</th>
                    <th class = "text-center">Current Balance</th>
                </tr>
                <tr style = "color : black;">
                    <th class = "py-2"><?php echo $rows['id']?></th>
                    <th class = "py-2"><?php echo $rows['Name']?></th>
                    <th class = "py-2"><?php echo $rows['Email']?></th>
                    <th class = "py-2"><?php echo $rows['Balance']?></th>
                </tr>
            </table>
        </div>
        <label style = "color : black;"><b>Transfer To:</b></label>
        <select name = "to" class = "form-control" required>
            <option value = " disabled selected">Choose Recipient</option>
            <?php
                include 'config.php';
                $sid = $_GET['id'];
                $sql = "SELECT * FROM table1";
                $result = mysqli_query($con, $sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($con);
                }
                while($rows = mysqli_fetch_assoc($result))
                {
            ?>
            <option class = "table" value = "<?php echo $rows['id'];?>">
                <?php echo $rows['Name'];?>
                (Balance: <?php echo $rows['Balance'];?>)
            </option>
            <?php
                }
            ?>
        </select>
        <br>
            <label style = "color : white;"><b>Amount:</b></label>
            <input type = "number" class = "form-control" name = "amount" required>
            <br><br>
                <div class = "text-center">
                <button name = "submit" type="submit" id = "myBtn" class="btn btn-secondary" style="font-weight: 700;"><span class="fa fa-exchange fa-sm"></span> Transfer Credits</button>
                </div>
    </form>
</div>

<footer class="footer mt-auto">
    <div class="footerText">
          <p> </span>  <a href="index.php" class="footerLink">Abritti Roy</a>
        </p>
    </div>
</footer>
    
</body>
</html>