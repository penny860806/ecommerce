<?php
    include('./load_data.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Movie Time!</title>
  </head>
  <body>
    <div class="container">
    	<div class="row">
    		<div class="col-12">
    			<h1>Movie Time!</h1>
    			<p>Welcome to Movie Time! Look for the movies we currently have and their ratings.</p>
    		</div>
    		<div class="col-12">
    			<h5>Movies</h5>
    			<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">Name</th>
				      <th scope="col">Year</th>
				      <th scope="col">Genre</th>
				      <th scope="col">Rating</th>
				    </tr>
				  </thead>
				  <tbody>
                    <?php
                    foreach($movies as $movie):                            
                    ?>
                        <tr>
                            <th scope="row"><?=$movie->name?></th>
                            <td><?=$movie->year?></td>
                            <td><?=$movie->genre->name?></td>
                            <td><?=$movie->rating?></td>
				        </tr>
                    <?php
                    endforeach;
                    ?>
				  </tbody>
				</table>
    		</div>
    	</div>
    	<div class="row">
    		<?php include('./form_movie.php');?>
    	</div>
    	
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./../resources/actions.js"></script>
  </body>
</html>