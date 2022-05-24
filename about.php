<!DOCTYPE html>
<html lang="en">

<head>
    <title>document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="jumbotron text-center" style="margin-bottom:0" src="banner.png">
        <h1>Hola!</h1>
        <p>Welcome to my page</p>
        <p><?= date("d-m-Y") ?></p>
    </div>

    <nav class="navbar navbar-expand-sm justify-content-center">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
        </ul>

    </nav>
    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-4">
                <h2>About Me</h2>
                <h5>Photo of me:</h5>
                <div><img src="../assets/mee.jpg" width="100px" height="auto" alt=""></div>
                <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
                <h3>Follow me on</h3>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="facebook.com"> <i class="fa fa-facebook"></i> Facebook</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="instagram.com"><i class="fa fa-instagram"></i> Instagram</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="github.com"><i class="fa fa-github"></i> Github</a>
                    </li>
                </ul>
                <hr class="d-sm-none">
            </div>
            <div class="col-sm-8">
                <h2>Game</h2>
                <h5>This is my first ace on baloran, Dec 7, 2020</h5>
                <div><img src="../assets/image1.png" width="300px" alt=""></div>
                <p>-Valorant gameplay</p>
                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                <br>
                <h2>Game</h2>
                <h5>Me when got a shiny shimery splendid skin, Sep 2, 2017</h5>
                <div><img src="../assets/image2.png" width="300px" alt=""></div>
                <p>-Valorant gameplay</p>
                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </div>
        </div>
    </div>
    <footer class="page-footer font-small blue">
        <div class="footer-copyright text-center py-3">©Copyright</div>
    </footer>
</body>

</html>