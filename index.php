<!DOCTYPE html>
<html>
<head>
<title>ICR Fuzzer</title>
<style>
    body {
        width: 35em;
        margin: 0 auto;
        font-family: Tahoma, Verdana, Arial, sans-serif;
    }
.btn {
  background: #b4b7b8;
  background-image: -webkit-linear-gradient(top, #b4b7b8, #5d6061);
  background-image: -moz-linear-gradient(top, #b4b7b8, #5d6061);
  background-image: -ms-linear-gradient(top, #b4b7b8, #5d6061);
  background-image: -o-linear-gradient(top, #b4b7b8, #5d6061);
  background-image: linear-gradient(to bottom, #b4b7b8, #5d6061);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}
</style>
</head>
<body>
<h1>This website allows you to create random internet connection records</h1>
<p>It does this by opening 100's of websites at random from Alexa's top 1 million</p>

<p>To begin fuzzing your ICR's, click the button below
<div align="center">
<form action="index.php" method="get">
  <input type="hidden" name="act" value="run">
  <input type="submit" class="btn" value="Make some ICR's">
</form>
</div></p>

If you wish to find out more about ICR's click
<a href="https://privacyinternational.org/">here</a>.</p>

<p><em>Please be aware that this site will use lots of bandwidth (around 100MB's) and memory (more than 100MB's), as it is trying to open connections to many sites. Also I take NO responsibility for the security or content of remote sites. Be aware the top 1 million sites includes sites which are NSFW, such as pornography sites, and Fox News</em></p>
</body>
</html>
<?php
  if (!empty($_GET['act'])) {
	$csv = array_map('str_getcsv', file('top-1000a.csv'));
	for ($i=0;$i<100;++$i){
		$loc = rand(1,1000);
 		echo "<iframe src='http://".$csv[$loc][0]."' height='10' width='10' frameborder='0' sandbox></iframe><p>".$csv[$loc][0]."</p>";
		}
  } else {
	}
?>
