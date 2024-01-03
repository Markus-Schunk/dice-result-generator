<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form method="post" action="random-number.php">
            Which type of Dice do You want? 
            <select name="dice-type" id="dice-type">
  <option value="d4">d4</option>
  <option value="d6">d6</option>
  <option value="d8">d8</option>
  <option value="d10">d10</option>
  <option value="d12">d12</option>
</select>
<br>
           <p>How many times do you want to roll?</p> 
            <input type="number" min="1" name="iterations">
            <input type="submit" value="Get your Result">

        </form>

    </body>
</html>