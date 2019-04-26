<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Site</title>
    </head>
    <body>
	<h1>My site</h1>
	<nav>
	    <ul>
		<li><a href="/">Home</a></li>
		<li><a href="/tasks">Tasks</a></li>
		<li><a href="/questions">Questions</a></li>
		<li><a href="#">TODO</a></li>
	    </ul>
	</nav>
	<main>
	    <?php include_once 'app'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.$content_view.'.php';?>
	</main>
    </body>
</html>
