<?php
/*
 * light weight php mvc-framework
 *
 * https://github.com/ReWrite94/lightweight-php-mvc-framework
*/

?>

<!--

/*
 * light weight php mvc-framework
 *
 * https://github.com/ReWrite94/lightweight-php-mvc-framework
*/

-->

<html>
    <head>
        <title>Example</title>
    </head>
    <body>
		<h2>.: <?php echo $this->params['title']; ?></h2>
		<br>
		
		<p><?php
			//let's load the content.(View, selected by controller)
			require_once($this->content); 
			?></p>
        
		<?php
			//require another view-file (menu.php)
			require_once("view/menu.php"); 
		?>
		
		<?php
			//if errormessage is set, alert it!
			if (isset($this->params["errormessage"])) {
				echo "<script type=\"text/javascript\"> alert(\"".$this->params["errormessage"]."\") </script>";
			}                       
		?>
    </body>
</html>