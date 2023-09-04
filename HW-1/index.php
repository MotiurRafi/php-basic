<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework</title>
    <link href="https://db.onlinewebfonts.com/c/bb4ea659b510dd85e56d51a2b2a1b3bd?family=ArcticPatrol+W00+Thin+Italic" rel="stylesheet" type="text/css">
    <link href="https://db.onlinewebfonts.com/c/016f50054d487d421dc18257a191a3ad?family=Noteworthy+Light" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <!-- Modal --> <!-- Modal --> <!-- Modal --><!-- Modal -->
    <!-- Modal --> <!-- Modal --> <!-- Modal --><!-- Modal -->
    <div class="modal fade signupmodal" id="signupmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h2>Sign Up</h2>
                    <form action="signup_process.php" method="POST">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                        
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                        
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                        
                        <label for="confirm_password">Confirm Password:</label>
                        <input type="password" id="confirm_password" name="confirm_password" required>
                        
                        <label for="birthdate">Birthdate:</label>
                        <input type="date" id="birthdate" name="birthdate">
                        
                        <label for="gender">Gender:</label>
                        <select id="gender" name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                        
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address">
                        
                        <label for="city">City:</label>
                        <input type="text" id="city" name="city">
                        
                        <label for="country">Country:</label>
                        <input type="text" id="country" name="country">
                        
                        <label for="phone">Phone Number:</label>
                        <input type="tel" id="phone" name="phone">
                        
                        <input type="submit" value="Sign Up">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal --> <!-- Modal --> <!-- Modal --><!-- Modal -->
    <!-- Modal --> <!-- Modal --> <!-- Modal --><!-- Modal -->
    <div class="modal fade loginmodal" id="loginmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h2>Sign In</h2>
                    <form action="signin_process.php" method="POST">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>

                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                        <input type="submit" value="Sign Up">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal --> <!-- Modal --> <!-- Modal --><!-- Modal -->
    <!-- Modal --> <!-- Modal --> <!-- Modal --><!-- Modal -->
    <div class="containerr">
        <div class="buttons">

            <button type="button" data-bs-toggle="modal" data-bs-target="#signupmodal" class="signup-btn">Sign Up</button>
            <button type="button" data-bs-toggle="modal" data-bs-target="#loginmodal" class="signin-btn">Sign In</button>
        </div>
    </div>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Clicker+Script&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --text-color: rgb(1, 19, 25);
            --text-color-opacity: rgba(1, 19, 25, .8);
            --background-color: rgb(250, 254, 255);
            --background-color-opacity: rgba(250, 254, 255, .8);
            --primary-color: rgb(252, 178, 156);
            --secondary-color: rgb(206, 241, 253);
            --secondary-color-opacity: rgb(206, 241, 253, .8);
            --accent-color: rgb(249, 102, 57);
            --accent-color-opacity: rgb(249, 102, 57, .6);

            --logo-font: 'ArcticPatrol W00 Thin Italic';
            --first-font: 'Noteworthy Light';
            --second-font: 'Clicker Script', cursive;
            --regular-font: 'Inconsolata', monospace;
        }

        .navbar {
            padding: .5rem 5%;
        }

        .modal-body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 1rem;
        }

        .modal-body h2 {
            font-size: 2.7rem;
            font-family: var(--first-font);
        }
        .modal-body form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            gap: .5rem;
        }

        .modal-body form label {
            display: block;
            font-family: var(--first-font);
            font-size: 1rem;

        }

        .modal-body form input {}

        .containerr {
            min-height: 100vh;
            background-image: url(bgimg.png);
            background-repeat: repeat;
            margin: 0;
            padding: 0 10%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .buttons {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1.5rem;
        }

        .buttons button {
            padding: .5rem 1rem;
            background-color: var(--accent-color);
            border: 3px solid var(--primary-color);
            border-radius: 1rem;
            font-family: var(--second-font);
            color: white;
            font-size: 2rem;
            box-shadow: 0 0 .8rem 0 var(--accent-color);
            transition: .2s ease;
        }

        .buttons button:hover {
            background-color: var(--primary-color);
            border-color: var(--accent-color);
            box-shadow: inset 0 0 .5rem 0 var(--text-color);
            color: var(--text-color);
        }

        .buttons {}
    </style>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>