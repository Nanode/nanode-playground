<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
  <title>Manual Pachube Feed Updater</title>
</head>
<body>
  <div id="content">
	    <div id="header">
	    <h1>Manual Pachube Feed Updater</h1>
	    </div>
<!--remember to change the feed_id in these links so that they point to the right place-->
    <p>Feed ID: <a href="http://pachube.com/feeds/34905" target="_blank">34905</a></p>
    <p><a href="http://api.pachube.com/v2/feeds/34905.json" target="_blank">[JSON]</a></p>
    <p><a href="http://api.pachube.com/v2/feeds/34905.xml" target="_blank">[XML]</a></p>
    <p><a href="http://api.pachube.com/v2/feeds/34905.csv" target="_blank">[CSV]</a></p>    	    
  </div>
	<div id="form">
    <form action="submit_pachube.php" method="post">
	<p>DATASTREAM 0: </p><input type="text" name="datastream0" /><br/>
	<p>DATASTREAM 1: </p><input type="text" name="datastream1" /><br/>
	<p>DATASTREAM 2: </p><input type="text" name="datastream2" /><br/>
	<p>DATASTREAM 3: </p><input type="text" name="datastream3" /><br/>
	<input type="submit" />
	</form>
	</form>
</body>
</html>