<!DOCTYPE html>
<html lang="en">

<head>
    <title>contatcc</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        form {
            color: white;
        }

        input[type=text],
        select,
        input[type=email],
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #52706b;
            padding: 20px;
        }
        table th{
            background-color: #364d49;
            color: white;
        }
        
    </style>
</head>

<body>

    <div class="jumbotron text-center" style="margin-bottom:0" src="banner.png">
        <h1>Hola!</h1>
        <p>Welcome to my page</p>
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
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
    </nav>
    <!-- contact form -->
    <div class="container">
        <form action="add_process.php" method="POST">
            <label for="">Name</label>
            <input type="text" name="name" placeholder="Name" required>
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Email" required>
            <label for="">Message</label>
            <textarea name="message" id="message" placeholder="say something..." cols="30" rows="10" required></textarea>
            <input type="submit" value="submit">
        </form>
    </div>
    <br>
    <br>

    <!-- display table -->
    <table class="container" border="0" width="50%" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "connect.php";
            $no = 0;
            $query = mysqli_query($con, "select * from contact");
            while ($data = mysqli_fetch_array($query)) {
                $no++;
                $name = $data['name'];
                $email = $data['email'];
                $message = $data['message'];
            ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $name ?></td>
                    <td><?= $email ?></td>
                    <td><?= $message ?></td>
                </tr>

            <?php
            }
            ?>
        </tbody>
    </table>
    <br>
    <br>

    <footer>
        <p>Copyright &copy;<?= date("Y") ?></p>
    </footer>

</html>