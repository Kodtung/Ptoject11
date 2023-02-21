<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="withdraw.scss">
    <title>WebBanking</title>
</head>
<body>
    <div class="container">
        <div class="icon-info">
            <div class="user-icon">
                <img src="profile.png" alt="user">    
            </div>
            <div class="user-info">
                <div class="name" href="login.php">
                    <label for="username">Hi! </label><br>
                    <label for="money">Your Balance :</label>
                </div>
            </div>
        </div>

        <div class="head">
            <label for="text">Deposit</label>
        </div>
        <div class="content">
            <form action="finish.php" method="get">
                <div class="form">
                    <input type="text" placeholder="0.00" >
                </div>
                <div class="button">
                    <script>
                        function fc(){
                            confirm("ยืนยันที่จะฝากเงินหรือไม่?");
                        }
                    </script>
                    <div class="deposit" action="finish.php">
                        <button type="submit" onclick="fc()">
                            <img src="arrow.png" alt="dp">
                        </button>
                    </div>
                    <div class="back" action="home.php">
                        <button type="submit">
                            <img src="home.png" alt="home">
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>