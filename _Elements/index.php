<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test Hub</title>
    
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="hub-timeline" class="container">
        <?php include '_PHP-Includes/navigation.php';?>
        
        <div class="page-header">
            <h1>Timeline</h1>
        </div>
        
        <article class="row">
            <div class="col-sm-12">
                <h3><a data-toggle="collapse" href="#m5d18y2014">First Exploratory meeting with client</a></h3>
                <p>Odio quis scelerisque...</p>
                <p id="m5d18y2014" class="loading-ajax collapse"></p>
                <aside class="row">
                    <h6 class="col-sm-2"><span class="glyphicon glyphicon-calendar"></span> May 18, 2014</h6>
                    <h6 class="col-sm-2"><span class="glyphicon glyphicon-globe"></span> Phase 1: Discovery</h6>
                </aside>
            </div>
        </article>
        <article class="row">
            <div class="col-sm-12">
                <h3><a data-toggle="collapse" href="#m5d20y2014">Follow-up Questions Answered</a></h3>
                <p>Montes scelerisque dignissim...</p>
                <p id="m5d20y2014" class="loading-ajax collapse"></p>
                <aside class="row">
                    <h6 class="col-sm-2"><span class="glyphicon glyphicon-calendar"></span> May 20, 2014</h6>
                    <h6 class="col-sm-2"><span class="glyphicon glyphicon-globe"></span> Phase 1: Discovery</h6>
                </aside>
            </div>
        </article>
    <!-- end container -->    
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/scripts.js"></script>
  </body>
</html>