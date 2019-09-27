<!-- Morris -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div id="morris-line"></div>
<?php echo Morris::bar( 'morris-line' )
           ->xkey( [ 'id' ] )
           ->ykeys( [ 'x' ] )
           ->labels( [ 'Inon Skill Level' ] )
           ->data( $subset );
  ?>

  </body>
</html>
