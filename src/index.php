<?php header("X-XSS-Protection: 0");
  $fix_path=str_replace(DIRECTORY_SEPARATOR,'/',dirname(__FILE__));
  $protocol=empty($_SERVER['HTTPS'])||$_SERVER['HTTPS']==='off'?'http://':'https://';
  $path=str_replace($_SERVER['DOCUMENT_ROOT'],'',$fix_path);
  $fix=$protocol.$_SERVER['SERVER_NAME'].$path;
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Laws of Robotics</title>
<link rel="stylesheet" href="./style.css">

</head>
<body>

	<pre>
	<?php
  		if (!(preg_match('/^\d{1,3}\.\d{1,3}\.\d{1,3}.\d{1,3}$/', $_GET['ip']))) {

		}

		system("ping -c 2 " . $_GET['ip']);
		
	?>	
	</pre>

<div data-tabs class="tabs">
<h1>Three Laws of Robotics</h1>
   <div class="tab">
      <input type="radio" name="tabgroup" id="tab-1" checked>
      <label for="tab-1">Law I</label>
      <div class="tab__content">
         <h4>First Law</h4>
         <p>A robot may not injure a human being or, through inaction, allow a human being to come to harm.</p>
      </div>
   </div>
   <br>
   <br>
   <div class="tab">
      <input type="radio" name="tabgroup" id="tab-2">
      <label for="tab-2">Law II</label>
      <div class="tab__content">
         <h4>Second Law</h4>
         <p>A robot must obey orders given it by human beings except where such orders would conflict with the First Law.</p>
      </div>
   </div>
   <br>
   <br>
   <div class="tab">
      <input type="radio" name="tabgroup" id="tab-3">
      <label for="tab-3">Law III</label>
      <div class="tab__content">
         <h4>Third Law</h4>
         <p>A robot must protect its own existence as long as such protection does not conflict with the First or Second Law.</p>
      </div>
   </div>
</div>
<br>
<br>

</body>
</html>
