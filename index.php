<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Roxan 16 kana!</title> <!-- Can edit birthday title and it will become the domain for the url link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>

  <body>
    <div id="wrapper">
      <div id="page-wrap">
     <form class='post-form' action='' method='post'> 
      <div class="form-group">
        <label class="col-md-3 control label">Insert your full name: </label> <!-- Can edit the insert bla bla name -->
        <input type="text" name="teka" placeholder="e.g: Brian Billy S. Austria" class="form-control" value=""></input>   <!-- Can edit the rokiah binti ali -->     
      |</div>

      <div>
        <input class="submit" type="submit" name="submit" value="Submit"></input>
        <br><br>
        <a href="display.php" class="btn btn-success" type="submit">Wag mo munang pipindotin to pag hindi mopa nalalagay name mo Roxan ahh!</a> <!-- Can edit bila saya suruh bla bla ni! -->
      </div>

    </form>

    <?php
    if (isset($_POST['submit'])) {
    $teka = $_POST['teka'];

    if ($teka == "Roxan Dela Cruz"){ //Insert your birthda girl/boy name here to give access to them only
    echo "<script>alert ('Ganda namn ng pangalan mo!🤩')</script>"; //Can edit this one
    echo "<script>alert ('I Wish Stay kind,Stay Beautiful,stay cute And sana wag mag bago.🥰')</script>"; //Can edit this one      
    echo "<script>alert ('Mag thankyou ka lagi Kay Lord Sa mga blessing na natatanggap mo Rox Wag mong kakalimutan si lord Roxan!')</script>"; //Can edit this one
    echo "<script>alert ('Pag butihan mopa pag aaral mo Roxan🥰')</script>"; //Can edit this one
    echo "<script>alert ('If you need someone to believe in you,I got you -Billy💜💜💜')</script>"; //Can edit this one
    echo "<script>alert ('Happy 20th! ay mali')</script>"; //Can edit this one
    echo "<script>alert ('Happy 16th birthday! -Billy And Pinsan 🥳🥳')</script>"; //Can edit this one
    echo "<script>alert ('May your birthday be filled with happiness Again HAPPY HAPPY BIRTHDAY Roxan enjoy your day -Billy 🥳🥳Pwede mona pindutin yung button sa baba')</script>";  //Can edit this one
    }

    else {
    echo "You're Not Roxan!! 😡"; //Can edit this one to appear the statement that if they key in wrong name
    }
    }
    ?>

    <p style="text-align:center;  margin-top: 100px; color: black;">Roxan Dela Cruz <a href="https://senkuzon.github.io/Roseanneee/?fbclid=IwAR0xjDTHnXePSR7Yyl09DI5xD_YFmJe467RvVLnx7d0tjF2WAOUUHTJsZE0 style="color:blue; text-decoration:none;">Flower</a></p> <!-- Dont delete this part to credit me -->  

      </div>
    </div>
  </body>
</html>
