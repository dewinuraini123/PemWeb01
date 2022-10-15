<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        div {
          margin: 25px;
        }
        </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pemesanan Pizza</title>
</head>
<body>
    <table align="center" bgcolor="#fff3e0">
        <tr>
            <td>
                <form>
                   <h1 align="center"><b>Thank You</b></h1>
                    <hr color="#2196f3">
                    <p>Thank you for ordering from Black Goose Bistro. We have recieved the following
                    <br>about your order: 
                        <h4 style="color:red">Your Information</h4>
                       <div> <h4>Name: <?php echo $_POST['customname']?><br>
                        Address:  <?php echo $_POST['address']?><br>
                        Telephone Number:  <?php echo $_POST['telephone']?><br>
                        Email Address:  <?php echo $_POST['email']?></h4></div>
                        <h4 style="color:red">Your Pizza</h4>
                       <div><h4>Crust: <?php echo $_POST['crust']?><br>
                       Toppings: <?php echo $_POST['topping']?> <br>
                        Number: <?php echo $_POST['pizzas']?></h4></div>
                            <p><hr color="#9a0007"></p>
                           <p><small>This site is for educational purposes only. No pizzas will be delivered.</small></p>
                </form>
            </td>
        </tr>
    </table>
    
</body>
</html>