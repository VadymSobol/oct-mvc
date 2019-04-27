<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Site</title>
	<link href="css/question.css" rel="stylesheet"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    </head>
    <body>
	<h1>My site</h1>
	<nav>
	    <ul>
		<li><a href="/">Home</a></li>
		<li><a href="/tasks">Tasks</a></li>
		<li><a href="/questions">Questions</a></li>
		<li><a href="/gallery">gallery</a></li>
	    </ul>
	</nav>
	<main>
	    <?php include_once 'app'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.$content_view.'.php';?>
	</main>
    </body>
</html>
