<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Transaction</title>
</head>
<body>
    <?php include'navbar.php'?>
     <!-- transaction section   -->
     <section id="transactions">
        <h1 class="h-primary center">Transaction History</h1>
        <table class="t-table">
            <thead>
                <th>Sr.No.</th>
                <th>Sent By</th>
                <th>Recieved By</th>
                <th>Amount</th>
                <th>Date</th>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Saad</td>
                    <td>Ronny</td>
                    <td>15000</td>
                    <td>01-08-2021</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ross</td>
                    <td>Phebe</td>
                    <td>10000</td>
                    <td>03-08-2021</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Chandler</td>
                    <td>Joey</td>
                    <td>20000</td>
                    <td>03-08-2021</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Rachel</td>
                    <td>Monica</td>
                    <td>13000</td>
                    <td>05-08-2021</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Ronny</td>
                    <td>Saad</td>
                    <td>15000</td>
                    <td>20-08-2021</td>
                </tr>
            </tbody>
        </table>
    </section>
</body>
</html>