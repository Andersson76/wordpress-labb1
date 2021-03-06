<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
	<title><h1>Labb 1</h1></title>
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery.js"></script>
   <?php wp_head(); ?>
</head>

<body>
            <?php
            
            $menuArray = ['theme_location' => 'huvudmeny'];
            wp_nav_menu($menuArray);
            
            ?>
    

<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-sm-6">
                <a class="logo" href="index.php">Labb 1</a>
            </div>
            <div class="col-sm-6 hidden-xs">
                <form id="searchform" class="searchform">
                    <div>
                        <label class="screen-reader-text">Sök efter:</label>
                        <input type="text" />
                        <input type="submit" value="Sök" />
                    </div>
                </form>
            </div>
            <div class="col-xs-4 text-right visible-xs">
                <div class="mobile-menu-wrap">
                    <i class="fa fa-search"></i>
                    <i class="fa fa-bars menu-icon"></i>
                </div>
            </div>
        </div>
    </div>
    <nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<ul class="menu">
							<li class="current-menu-item">
								<a href="index.php">Hem</a>
							</li>
							<li>
								<a href="blogg.php">Blogg</a>
							</li>
							<li>
								<a href="undersida.php">Undersida</a>
							</li>
							<li>
								<a href="undersida2.php">Undersida 2</a>
							</li>
							<li>
								<a href="undersida3.php">Undersida 3</a>
							</li>
							<li>
								<a href="undersida4.php">Undersida 4</a>
							</li>
							<li>
								<a href="kontakt.php">Kontakt</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
</header>

