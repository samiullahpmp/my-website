<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Box Model</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body{
            background-color: #e6cbf8;
        }

        .container{
            background-color: rgb(231, 230, 241);
            border: 3px solid rgb(64, 6, 119);

            /* We can set margin/padding for  top, bottom, left and right like this */
            /* padding-top: 79px;
            padding-bottom: 79px;
            padding-left: 34px; 
            padding-right: 79px;*/

            /* margin-top: 3px;
            margin-bottom: 5px;
            margin-left: 34px;
            margin-right:5px ; */

            /* margin = top right bottom left;  */
            /* padding = top right bottom left;  */

            /* padding: 23px 56px 6px 78px;   */
            /* margin: 23px 56px 6px 78px;   */
        
            /* padding: y(top/bottom) x(left/right); */
            /* margin: y(top/bottom) x(left/right); */
            padding: 34px 19px;
            margin: 14px 19px;
            border-radius: 23px;
            width: 533px;
            

            
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>This is my heading</h3>
        <p id="first"><?php echo($_POST["x"])?>
        <br/>my password is <?php echo($_POST["mypass"])?>
        </p>
    </div>

    <div class="container">
        <h3>This is my heading</h3>
        <p id="second">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt harum quis, quibusdam, minima molestiae tempore vel magni, repellendus doloribus debitis rerum tenetur eveniet.</p>
    </div>

    <div class="container">
        <h3>This is my heading</h3>
        <p id="third">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt harum quis, quibusdam, minima molestiae tempore vel magni, repellendus doloribus debitis rerum tenetur eveniet.</p>
    </div>
</body>
</html>
