<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,900" rel="stylesheet"> 
    <title>Create new acount</title>
</head>
<body>
    <div class="signup-container">
        <div class="account-left"></div>
        <div class="account-right">
            <div class="form-area">
            <form action="" method="POST">
                <div class="group">
                    <h2 class="form-heading">
                        Create a new account
                    </h2>
                </div>
                <div class="group">
                    <input type="text" name="full_name" class="control" placeholder="Enter FUll name..." >       
                </div>
                <div class="group">
                    <input type="email" name="email" class="control" placeholder="Enter Email..." >       
                </div>
                <div class="group">
                    <input type="password" name="password" class="control" placeholder="Create password..." >       
                </div>
                <div class="group">
                    <label for="file" id="file-label"><i class="fas fa-cloud-upload-alt"></i> Choose image</label>
                    <input type="file" name="img" class="file" id="file" >       
                </div>
                <div class="group">
                    <input type="submit" name="signup" class="btn signup-btn" value="Create account" >       
                </div>
                <div class="group">
                    <a href="login.php" class="link"> Already have an account?</a>
                </div>
            </form>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/file_label.js"></script>
</body>
</html>