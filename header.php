<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        *{
            padding: 0;
            margin: 0;
        }

        body{
            background: #E1F7F5; 
        }

        nav{
            display: flex;
            height: 100px;
            width: 100%;
            align-items: center;
            justify-content: center;
            background-color: #40B3A2;
        }

        .container{
            display: flex;
            align-items: center;
            justify-content: center;

        }


        .btnn {
            outline: 0;
            display: inline-flex;
            align-items: center;
            justify-content: space-between;
            background: #40B3A2;
            min-width: 200px;
            border: 0;
            border-radius: 4px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, .1);
            box-sizing: border-box;
            padding: 16px 20px;
            color: #fff;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            overflow: hidden;
            cursor: pointer;
        }
        
        .btnn:hover {
            opacity: .95;
        }
        
        .btnn .animation {
            border-radius: 100%;
            animation: ripple 0.6s linear infinite;
        }
        
        @keyframes ripple {
            0% {
            box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.1), 0 0 0 20px rgba(255, 255, 255, 0.1), 0 0 0 40px rgba(255, 255, 255, 0.1), 0 0 0 60px rgba(255, 255, 255, 0.1);
            }
        
            100% {
            box-shadow: 0 0 0 20px rgba(255, 255, 255, 0.1), 0 0 0 40px rgba(255, 255, 255, 0.1), 0 0 0 60px rgba(255, 255, 255, 0.1), 0 0 0 80px rgba(255, 255, 255, 0);
            }
        }

        #add_stud{
            margin-top: 100px;
            width: 90%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        #add_stud button{
            margin-right: 120px;
            margin-bottom: 10px;
            padding: 10px 20px 10px 20px;
            border-radius: 5px;
            border: none;
            font-size: 12px;
            background-color: #40B3A2;
            
            font-weight: 600;
        }
        #add_stud button a{
            color: aliceblue;
            text-decoration: none;
        }
        
        #add_stud p{
            margin-bottom: -10px;
            margin-left: 320px;
            color: #40B3A2;
        }

        .stud_form{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 600px;
            height: 600px;
            background-color: #135D66;
            border-radius: 20px;
        }

        .stud_form .btn{
            margin-left: 120px;
            margin-top: 30px;
        }

        .form-group{
            padding: 20px;
        }
        .form-group label{
            float: left;
            color: aliceblue;
            font-weight: 300;
            font-size: 20px;            
        }
        .form-group input{
            float: right;
            margin-left: 50px;
            border-radius: 5px;
            border: none;
            padding: 5px;
        }
        .parent{
            height: 800px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        h6{
            text-align: center;
            color: red;
        }

    </style>

</head>
<body>
    <nav>
        <div>
            <button class="btnn" ><i class="animation"></i><a href="index.php" style="text-decoration:none; color:aliceblue;">CRUD APPLICATION</a><i class="animation"></i></button>
        </div>
    </nav>
    