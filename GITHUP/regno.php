<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(7, 7, 49);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image:a;
        }
        .login-container {
            background-color:rgb(0, 255, 234);
            border-radius: 25px;
            box-shadow: 0 4px 8px rgba(165, 127, 127, 0.1);
            padding: 30px;
            width: 300px;
            text-align: center;
        }
        h2 {
            color:rgb(243, 4, 4); 
            font-weight: bold;
            text-decoration: rgb(7, 7, 49)underline;
        }
        input[type="text"] {
            width: 100%;
            color:rgb(17, 15, 15);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            background-color: rgb(255, 255, 255);
            
        }
        input[type="submit"] {




            border-radius: 5px;
            color:rgb(243, 4, 4);
            background-color:rgb(255, 255, 255);
            font-size:x-large;
            font-family:'Times New Roman', Times, serif;
        }
        input[type="submit"]:hover{
            color: rgb(243, 4, 4);
        }
        
        
    </style>
</head>-
<body>

    <div class="login-container">
        <h2>STUDENT ENTER REGNO</h2>
        <form action="regnocheck.php" method="POST">
           
            <input type="text" id="RegNo" name="RegNo" placeholder="Enter your RegNo"name="RegNo" name="RegNo"required>

            <input type="submit" value="Login"value="Login">
        </form>
    </div>

</body>
</html>
