<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php include'navbar.php'?>
<section id="transfer">
        <h1>Money Transfer </h1>
        <div class="main">
            <div class="sr">
                <h2>Select Sender :&nbsp;</h2>
                <select name="choose" id="choose">
                    <option value="Choose">Saad</option>
                    <option value="Choose">Roshan</option>
                    <option value="Choose">Ronny</option>
                    <option value="Choose">Ross</option>
                    <option value="Choose">Rachel</option>
                    <option value="Choose">Joey</option>
                    <option value="Choose">Chnadler</option>
                    <option value="Choose">Phebe</option>
                    <option value="Choose">Monica</option>
                    <option value="Choose">Tom</option>
                </select>
                <h2>&nbsp&nbsp&nbsp&nbspSelect Reciever :&nbsp;</h2>
                <select name="choose" id="choose">
                    <option value="Choose">Saad</option>
                    <option value="Choose">Roshan</option>
                    <option value="Choose">Ronny</option>
                    <option value="Choose">Ross</option>
                    <option value="Choose">Rachel</option>
                    <option value="Choose">Joey</option>
                    <option value="Choose">Chnadler</option>
                    <option value="Choose">Phebe</option>
                    <option value="Choose">Monica</option>
                    <option value="Choose">Tom</option>
                </select>
            </div>
            <div class="amountdiv">
                <h2 class="amount">Amount :&nbsp;</h2>
                <input type="text">
            </div>

            <div class="btnt">
                <a href="success.php"><button>Transfer</button></a>
            </div>

        </div>
    </section>
</body>
</html>