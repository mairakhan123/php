<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
        
        <form method="post"action="">
        <div class="form-group">
            <label for="">please select the day</label>
            <select name="day" id="">
                <option>monday</option>
                <option>tuesday</option>
                <option>wednesday</option>
                <option>thursday</option>
                <option>friday</option>
                <option>saturday</option>
                <option>sunday</option>
            </select>
        </div>
        <input type="submit" value="form go" class="btn btn-info">
        </form>

        <?php
        if(isset($_POST['day'])){
            $day = $_POST['day'];
  
    if ($day=='monday'){
        $meal= "dal chawal";
    }
    elseif ($day=='tuesday'){
        $meal= 'qeema';
    }
    elseif ($day=='wednesday'){
        $meal= 'sabzi';
    }
    elseif ($day=='thursday'){
        $meal= 'kabab paratha';
    }
    elseif ($day=='friday'){
        $meal= 'fish';
    }
    elseif ($day=='saturday'){
        $meal= 'zinger';
    }
    else{
        $meal= 'palao';
    }
   echo " Today Meal Is $meal" ;
}
    ?>
    
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>