<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Labrada&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.scss">
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
                </div>
                <div class="info">
                    <label for="">Welcome to my WebBanking!</label>
                </div>
            </div>
        </div>
        <div class="form">
            <form action="withdraw.php">
                <div class="withdraw">
                    <button type="submit">
                        <img src="cash-withdrawal.png" alt="WD">
                    </button>
                    <label for="">Withdraw</label>
                </div>
            </form>
            <form action="deposit.php">
                <div class="deposit">
                    <button type="submit">
                        <img src="deposit.png" alt="DS">
                    </button>
                    <label for="">Deposit</label>
                </div>
            </form>
            <form action="finish.php">
                <div class="statement">                    
                    <button type="submit">
                        <img src="income.png" alt="CS">
                    </button>
                    <label for="">Check Statement</label>
                </div>
            </form>
        </div>
        
    </div>
    
</body>
</html>