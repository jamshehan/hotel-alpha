<!DOCTYPE html>
<?php
	$allWidgets = array("usFrom73", "usThisYear", "worldThisYear");
	$widget = $_GET["widget"];
	$theme = empty($_GET["theme"])
		? "slate"
		: $_GET["theme"];
	
	if (!in_array($widget, $allWidgets)) {
		$widget = "";
	}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>hotelalpha.org - Abortion Numbers</title>
    <meta name="description" content="A new way of showing abortion statistics. Real-time counts of the number of abortions in the USA and worldwide.">

    <!-- Bootstrap -->
    <link rel="stylesheet" id="bootswatch" href="css/bootswatch/<?php echo $theme; ?>/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/hotelalpha.css" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/dashboard.js"></script>
</head>
<body> 
<?php
	if (empty($widget)) {
?>   
    <div class="jumbotron">
        <div class="container">
            <h1>Abortion Tally</h1>
            <p>For most people, it's tough to get a grip on huge numbers. For example, roughly 42 million abortions were performed
            throughout the world in 2003. That's a big number, and it's hard for most people to put in context. Knowing that 
            <span class="hotelalpha-worldThisYear" data-toggle="tooltip">0</span> abortions have occurred so far this year has a lot more meaning. 
            Each of the counters below shows a different statistic, but every single tick represents an aborted child.</p><br />
            <div>
                <a class="btn btn-primary btn-lg" href="http://www.abort73.com" role="button">Learn more &raquo;</a>
                <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#help">
                    <span class="glyphicon glyphicon-question-sign"></span>&nbsp;Help
                </button>
            </div>
        </div>
    </div>
<?php } else { ?>
	<script type="text/javascript">
		$(function() {
			showWidget();
		});
	</script>
<?php } ?>

    <div class="container">
        <div class="row">
<?php
	if(empty($widget) || $widget == "usFrom73") {
?>
            <div class="col-md-4 stat-block">
                <h3 class="stat-title">US Abortions Since 1973</h3>
                <p><div class="stat-number well well-sm text-center"><span id="usFrom73" class="hotelalpha-usFrom73" data-toggle="tooltip">0</span></div></p>
<?php if(empty($widget)) { ?>				
                <div>
                    <a class="btn btn-primary" href="http://www.abort73.com/abortion_facts/us_abortion_statistics/" role="button">View details &raquo;</a>
                    &nbsp;
                    <button type="button" class="btn btn-default pull-right" data-toggle="popover" title="HTML Snippet" data-link="http://www.hotelalpha.org?widget=usFrom73" data-placement="top">
                        <span class="glyphicon glyphicon-link"></span>&nbsp;Embed
                    </button>
                </div>
<?php } ?>				
            </div>
<?php 
	}  if (empty($widget) || $widget == "usThisYear") {
?>
            <div class="col-md-4 stat-block">
                <h3 class="stat-title">US Abortions Year-to-date</h3>
                <p><div class="stat-number well well-sm text-center"><span id="usThisYear" class="hotelalpha-usThisYear" data-toggle="tooltip">0</span></div></p>
<?php if(empty($widget)) { ?>
                <div>
                    <a class="btn btn-primary" href="http://www.abort73.com/abortion_facts/us_abortion_statistics/" role="button">View details &raquo;</a>
                    &nbsp;
                    <button type="button" class="btn btn-default pull-right" data-toggle="popover" title="HTML Snippet" data-link="http://www.hotelalpha.org?widget=usThisYear" data-placement="top">
                        <span class="glyphicon glyphicon-link"></span>&nbsp;Embed
                    </button>
                </div>
<?php } ?>				
            </div>
<?php 
	}  if (empty($widget) || $widget == "worldThisYear") {
?>			
            <div class="col-md-4 stat-block">
                <h3 class="stat-title">Worldwide Abortions YTD</h3>
                <p><div class="stat-number well well-sm text-center"><span id="worldThisYear" class="hotelalpha-worldThisYear" data-toggle="tooltip">0</span></div></p>
<?php if(empty($widget)) { ?>
                <div>
                    <a class="btn btn-primary" href="http://www.abort73.com/abortion_facts/worldwide_abortion_statistics/" role="button">View details &raquo;</a>
                    &nbsp;
                    <button type="button" class="btn btn-default pull-right" data-toggle="popover" title="HTML Snippet" data-link="http://www.hotelalpha.org?widget=worldThisYear" data-placement="top">
                        <span class="glyphicon glyphicon-link"></span>&nbsp;Embed
                    </button>
                </div>
<?php } ?>				
            </div>
<?php } ?>			
        </div>
    </div>

<?php if(empty($widget)) { ?>
    <div class="modal fade" id="help">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title"><span class="glyphicon glyphicon-question-sign"></span> Help</h4>
                </div>
                <div class="modal-body">

                    <div role="tabpanel">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist" id="helpNav">
                            <li role="presentation" class="active">
                                <a href="#embed" role="tab" data-toggle="tab">Embedding</a>
                            </li>
                            <li role="presentation">
                                <a href="#javascript" role="tab" data-toggle="tab">Linking/JavaScript</a>
                            </li>
                            <li role="presentation">
                                <a href="#calculations" role="tab" data-toggle="tab">Calculations</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="embed">
                                <p>
                                    You are free to embed any of the counters on this page on your own site. Simply click the "Embed" button under the desired counter,
                                    and use the provided HTML snippet anywhere you want that counter to show up. The widgets can also be styled with any of the
                                    <a href="http://bootswatch.com/" target="_blank">Bootswatch</a> themes. See the <a href="EmbedDemo.html">Embed Demo</a>
                                    page for a few examples.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="javascript">
                                <p>
                                    If you've got a little bit of web development experience, you might want to link directly to the hotelalpha JavaScript
                                    and CSS files rather than use the iframe embed option. Instructions are below; see a stripped-down example on the 
                                    <a href="LinkDemo.html">Link Demo</a> page.
                                    <ol>
                                        <li>
                                            Add the hotelalpha.js file to your site, like:
                                            <div class="code"><code>&lt;script src="http://www.hotelalpha.org/js/hotelalpha.js"&gt;&lt;/script&gt;</code></div>
                                        </li>
                                        <li>
                                            Add the hotelalpha.css file to your site; this adds the rolling animation as the numbers change:
                                            <div class="code">
                                                <code>
                                                    &lt;link rel="stylesheet" href="http://www.hotelalpha.org/css/hotelalpha.css" /&gt;
                                                </code>
                                            </div>
                                        </li>
                                        <li>
                                            Add one of the hotelalpha classes to any element, and it becomes a real-time counter: <br />
                                            <div class="code"><code>&lt;span class="hotelalpha-worldThisYear"&gt;0&lt;/span&gt;</code></div>
                                            The recognized classes are:
                                            <ul>
                                                <li>hotelalpha-usFrom73 - US abortions since 1973</li>
                                                <li>hotelalpha-usThisYear - US abortions year-to-date</li>
                                                <li>hotelalpha-worldThisYear - Worldwide abortions year-to-date</li>
                                            </ul>
                                        </li>
                                    </ol>
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="calculations">
                                <p>
                                    Since the most-recent statistics on the number of abortions performed are a few years old, there are some
                                    assumptions built in to the calculations used by hotelalpha. Therefore, the numbers displayed on this site
                                    are estimates and are for illustrative purposes only.

                                    <ul>
                                        <li>
                                            Based on the most-recent year for which there are numbers available (2011) and extrapolating based on the
                                            trend for the previous 5 years, the estimated number of annual abortions in the US is <span id="usRate">1,020,000</span>.
                                        </li>
                                        <li>
                                            Based on the available statistics and the extrapolated current annual rate of US abortions, the total number of
                                            abortions performed in the US from 1973 up to <span id="73end">2014</span> is <span id="73total">54,820,000</span>.
                                        </li>
                                        <li>
                                            Based on the most-recent year for which there are numbers available (2003) and extrapolating based on the 
                                            trend for the previous 5 years, the estimated number of annual abortions worldwide is <span id="worldRate">37,000,000</span>.
                                        </li>
                                    </ul>
                                </p>
                                <p>
                                    Sources:
                                    <ul>
                                        <li><a href="http://www.abort73.com/abortion_facts/" target="_blank">Abort73.com</a></li>
                                        <li><a href="http://www.guttmacher.org/pubs/fb_induced_abortion.html" target="_blank">Guttmacher Institute (AGI)</a></li>
                                        <li><a href="http://www.cdc.gov/mmwr/preview/mmwrhtml/ss6208a1.htm?s_cid=ss6208a1_w" target="_blank">Centers for Disease Control (CDC)</a></li>
                                        <li><a href="http://www.guttmacher.org/pubs/fb_IAW.html" target="_blank">The Alan Guttmacher Institute (AGI) along with the World Health Organization (WHO)</a></li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
<?php } ?>
    <script src="js/hotelalpha.js"></script>
</body>
</html>
