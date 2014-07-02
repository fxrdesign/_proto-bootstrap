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
    <link href="../css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="hub-timeline" class="container">
        <?php include '../_PHP-Includes/navigation.php';?>
        
        <div class="page-header">
            <h1>Component Style Guide</h1>
        </div>
        
        <article class="row">
            <div class="col-sm-12">
                <h3><a data-toggle="collapse" href="#headings">Headings</a></h3>
                <p><span class="glyphicon glyphicon-tag"></span> h1, h2, h3, h4, h5, and h6</p>
                <div id="headings" class="prj-style-set collapse">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h1>Page Titles</h1>
                        </div>
                        <div class="panel-footer"><code>&lt;h1&gt;Page Titles&lt;/h1&gt;</code> : <em>[color], [weight], [size]</em></div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h2>Section Titles</h2>
                        </div>
                        <div class="panel-footer"><code>&lt;h2&gt;Section Titles&lt;/h2&gt;</code> : <em>[color], [weight], [size]</em></div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>Aside Titles</h3>
                        </div>
                        <div class="panel-footer"><code>&lt;h3&gt;Aside Titles&lt;/h3&gt;</code> : <em>[color], [weight], [size]</em></div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h4>Paragraph Headings</h4>
                        </div>
                        <div class="panel-footer"><code>&lt;h4&gt;Paragraph Headings&lt;/h4&gt;</code> : <em>[color], [weight], [size]</em></div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h5>Captions</h5>
                        </div>
                        <div class="panel-footer"><code>&lt;h5&gt;Captions&lt;/h5&gt;</code> : <em>[color], [weight], [size]</em></div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h6>Legal Headings</h6>
                        </div>
                        <div class="panel-footer"><code>&lt;h6&gt;Legal Headings&lt;/h6&gt;</code> : <em>[color], [weight], [size]</em></div>
                    </div>
                </div>
            </div>
        </article>
        <article class="row">
            <div class="col-sm-12">
                <h3><a data-toggle="collapse" href="#body-copy">Body Copy</a></h3>
                <p><span class="glyphicon glyphicon-tag"></span> p, strong, blockquote, ul, ol, and li</p>
                <div id="body-copy" class="prj-style-set collapse">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p>Dictumst vut pid turpis, auctor augue! Vel vut ut odio turpis, tempor lorem purus enim!</p>
                            <p>Quis, purus, amet in nisi magnis etiam hac vel, urna lundium platea porta nascetur et, lorem, tempor diam! Cum etiam lorem turpis aenean ac ac, ut phasellus? Ac turpis? Sed.</p>
                            <p>Scelerisque, tristique dictumst adipiscing nec nisi porta ac quis rhoncus placerat augue. Duis nunc pid.</p>
                        </div>
                        <div class="panel-footer"><code>&lt;p&gt;Paragraph copy&lt;/p&gt;</code> : <em>[color], [weight], [size]</em></div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <strong>Bolded copy</strong>
                        </div>
                        <div class="panel-footer"><code>&lt;strong&gt;Bolded copy&lt;/strong&gt;</code> : <em>[color], [weight], [size]</em></div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <blockquote>Dictumst vut pid turpis, auctor augue! Vel vut ut odio turpis, tempor lorem purus enim!</blockquote>
                        </div>
                        <div class="panel-footer"><code>&lt;blockquote&gt;Quote copy&lt;/blockquote&gt;</code> : <em>[color], [weight], [size]</em></div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <ul>
                                <li>Facilisis in pretium nisl aliquet</li>
                                <li>Nulla volutpat aliquam velit
                                    <ul>
                                        <li>Phasellus iaculis neque</li>
                                        <li>Ac tristique libero volutpat at</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="panel-footer"><code>&lt;ul&gt;<br/> &nbsp; &lt;li&gt;List items&lt;/li&gt;<br/>&lt;/ul&gt;</code> : <em>[color], [weight], [size]</em></div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <ol>
                                <li>Facilisis in pretium nisl aliquet</li>
                                <li>Nulla volutpat aliquam velit
                                    <ol>
                                        <li>Phasellus iaculis neque</li>
                                        <li>Ac tristique libero volutpat at</li>
                                    </ol>
                                </li>
                            </ol>
                        </div>
                        <div class="panel-footer"><code>&lt;ol&gt;<br/> &nbsp; &lt;li&gt;List items&lt;/li&gt;<br/>&lt;/ol&gt;</code> : <em>[color], [weight], [size]</em></div>
                    </div>
                </div>
            </div>
        </article>
        <article class="row">
            <div class="col-sm-12">
                <h3><a data-toggle="collapse" href="#images">Images</a></h3>
                <p><span class="glyphicon glyphicon-tag"></span> img</p>
                <div id="images" class="prj-style-set collapse">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img class="img-responsive" src="http://placehold.it/300x250"/>
                        </div>
                        <div class="panel-footer"><code>&lt;img/&gt;</code></div>
                    </div>
                </div>
            </div>
        </article>
    <!-- end container -->    
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/scripts.js"></script>
  </body>
</html>