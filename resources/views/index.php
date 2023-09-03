<?php
 

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend Web Examen</title>

    <style>

        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 18px;
            margin: 0px;
            padding-bottom: 5000px;
        }

        button {
            font-size: 18px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 12px 0px;
            font-size: 18px;
        }

        .header-left {
            margin-left: 20px;
        }

        .SPL {
            background-color: #4a8032;
            color: white;
            font-weight: Bold;
            padding: 8px 12px;
            border-radius: 36px;
            border: none;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
        }

        .SPL:hover {
            background-color: orange;
            cursor: pointer;
        }

        .header-right {
            display: flex;
            justify-content: space-between;
        }

        .Login {
            background-color: #ffe615;
            margin-right: 20px;
            font-weight: Bold;
            padding: 8px 12px;
            border-radius: 36px;
            border: none;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
        }

        .Login:hover {
            background-color: orange;
            cursor: pointer;
        }

        .Signup {
            background-color: #ffe615;
            margin-right: 20px;
            font-weight: bold;
            padding: 8px 12px;
            border-radius: 36px;
            border: none;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
        }

        .Signup:hover {
            background-color: orange;
            cursor: pointer;
        }

        .Footer {
            display: flex;
            align-items: center;
            justify-content: center;
            position: fixed;
            bottom: 0px;
            left: 0px;
            right: 0px;
        }

        .Footer-div {
            align-items: center;
            justify-content: center;
        }

        .FAQ-button {
            font-size: 16px;
            background-color: white;
            border: none;
            margin-right: 20px;
        }

        .Contact-button {
            font-size: 16px;
            background-color: white;
            border: none;
            margin-left: 10px;
        }

        .About-button {
            font-size: 16px;
            background-color: white;
            border: none;
            margin-left: 10px;
        }
        
        .news-container {
            display: flex;
        }
        .news {
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
            height: 450px;
            width: 250px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.7);
            margin-left: 30px;
            margin-right: 30px;
        }
    </style>
</head>




<body>
    <header class="header">
        <div class="header-left">
            <button class="SPL">Sint-Pieters-Leeuw Forum</button>
        </div>

        <div class="header-right">
            <button class="Login">Login</button>
            <button class="Signup">Sign up</button>
        </div>
    </header>

    <main>
        <div class="news-container">
            <div class="news"></div>
            <div class="news"></div>
            <div class="news"></div>
            <div class="news"></div>
            <div class="news"></div>
        </div>

    </main>

    <footer class="Footer">
        <div class="Footer-div">
            <a class="FAQ-button" href="faq.htm">
                FAQ
            </a>

            <a class="Contact-button" href="contact.html">
                Contact
            </a>

            <a class="About-button" href="https://github.com/MalikBogos/BackendWebproject.git">
                About
            </a>
        </div>
    </footer>
</body>
</html>