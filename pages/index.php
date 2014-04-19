<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Ten Revolutions - Home</title>
	<?php include("../includes/htmlhead.php"); ?>
</head>

<body id="homepage">
<div id="page">

<div id="header">
<?php include("../includes/navhome.php"); ?>
</div>

<h1><img src="../images/ten_math_revolutions/ten_math_revolutions3small.gif" alt="Ten Math Revolutions"/></h1>

<div id="intro">
<h2>(Modern browsers only)</h2>
<p>Although math may not seem revolutionary, look back over its history and you will find controversies and discoveries that changed the way we understand our world. Mathematical principles have always existed, but to us they are revelations. Hopefully you will think differently after you take a look through this website. Don't be surprised if a new idea feels revolutionary.</p>
</div>

<div id="footer">
	<?php include("../includes/navhome.php"); ?>
</div>

</div>

<!-- The following code is to enable viewing whole page in iframe on lukejh.com -->
<iframe id="helpframe" src='' height='0' width='0' frameborder='0'></iframe>
<script type="text/javascript">
  function iframeResizePipe()
  {
     // What's the page height?
     var height = document.body.scrollHeight;

     // Going to 'pipe' the data to the parent through the helpframe..
     var pipe = document.getElementById('helpframe');

     // Cachebuster a precaution here to stop browser caching interfering
     pipe.src = 'http://lukejh.com/lukejh/pages/iframe-helper.htm?height='+height+'&cacheb='+Math.random();

  }
</script>
<!-- /end viewing in iframe on lukejh.com -->

</body>
</html>