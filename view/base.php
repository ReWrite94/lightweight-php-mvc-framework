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
			//This will load the view, choosen by the controller.
			require_once($this->content); 
			?></p>
        
		<?php
			// You can reuire other view-files. In this case menu.php for example
			require_once("view/menu.php"); 
		?>
		
		<?php
			if (isset($this->params["errormessage"])) {
				echo "<script type=\"text/javascript\"> alert(\"".$this->params["errormessage"]."\") </script>";
			}                       
		?>
    </body>
</html>