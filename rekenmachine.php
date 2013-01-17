<?php
	// variabelen declareren	
	$getal1 	= 0;
	$getal2 	= 0;
	$uitkomst   = 0;
	$operator   = "";
	
	// werd er op de knop gedrukt?
	if($_SERVER['REQUEST_METHOD'] === 'POST'){

		$getal1 	= (float)str_replace(',','.',$_POST['getal1']);
		$operator 	= $_POST['operator'];
		$getal2 	= (float)str_replace(',','.',$_POST['getal2']);
		
		
		switch ($operator){
			case '+':
				$uitkomst = $getal1 + $getal2;
				break;
			case '-':
				$uitkomst = $getal1 - $getal2;
				break;
			case '/':
				if ($getal2 == 0){
					$uitkomst = 'Delen door nul mag niet!';
				}else {
					$uitkomst = $getal1 / $getal2;
				}
				break;
			case '*':
				$uitkomst = $getal1 * $getal2;
				break;
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Nabaztag - homepage</title>
<link href="css/style.css" rel="stylesheet">
<meta name="keywords" content="Wifi, internet, konijn" />
<meta name="description" content="Nabaztag, het slimme WIFI konijn!" />
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
</head>

<body>
<div id="container">
	<header>
    	<h1 class="hidden">Dit is de header</h1>
			<figure id="logo">
        		<img src="images/nabaztag.jpg" alt="Nabaztag logo" />
            	<figcaption>Dit is het logo</figcaption>
            </figure>
        	<figure id="slogan">
        		<img src="images/titel.jpg" alt="Nabaztag titel" />
            	<figcaption>Dit is de titel</figcaption>
            </figure>
    </header>
    <nav>
    	<ul>
        	<li><a href="#">link</a></li>
            <li><a href="#">link</a></li>
            <li><a href="#">link</a></li>
        </ul>
    </nav>
	<section id="teaser">
    	<h1>Wat is Nabaztag?</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam placerat tortor non ipsum venenatis scelerisque. Donec sollicitudin lobortis sem, at varius quam fermentum at. Vivamus blandit rutrum diam sed hendrerit. Proin mollis dui vel nibh auctor aliquam in nec sapien. Nunc neque ante, fermentum non gravida at, aliquet vitae metus. </p>
    </section>
    <section id="content">
    	<h2>Bereken uw prijs</h2>
        <form action="#" method="post">
        	<table>
            	<tr>
                	<td>Getal1:</td>
                    <td><input type="text" name="getal1" value="<?php echo $getal1?>"></td>
                </tr>
                <tr>
                	<td>Operator:</td>
                    <td>
                    	<select name="operator">
                        	<option value="+" <?php echo ($operator == '+') ? 'selected': '' ;?>>Plus</option>
                            <option value="-" <?php echo ($operator == '-') ? 'selected': '' ;?>>Min</option>
                            <option value="/" <?php echo ($operator == '/') ? 'selected': '' ;?>>Delen</option>
                            <option value="*" <?php echo ($operator == '*') ? 'selected': '' ;?>>Vermenigvuldigen</option>
                        </select>
                    </td>
                </tr>
                <tr>
                	<td>Getal2:</td>
                    <td><input type="text" name="getal2" value="<?php echo $getal2?>"></td>
                </tr>
            	<tr>
                	<td colspan="2"><input type="submit" value="Bereken" /></td>
                </tr>
                <tr>
                	<td colspan="2"><?php echo $uitkomst; ?></td>
                </tr>
            </table>
        </form>
	</section>
    <footer>
    	<p>Meer weten over Nabaztag? Stuur een <a href="contact.html">bericht</a>, of <a href="rekenmachine.php">bereken uw prijs</a>.</p>
    </footer>
</div>
</body>
</html>
