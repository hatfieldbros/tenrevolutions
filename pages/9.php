<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 plus MathML 2.0 plus SVG 1.1//EN" "http://www.w3.org/2002/04/xhtml-math-svg/xhtml-math-svg.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>IX Cryptology</title>
	<?php include("../includes/htmlhead.php"); ?>	
</head>

<body id="ninepage">
<div id="page">

<div id="header">
	<?php include("../includes/subnav.php") ?>
</div>
<br class="clearme" />

<h2>Cryptology</h2>

<div id="writing">

<div>
<h3>The Diffie Hellman Key Exchange (1976)</h3>
<div class="boolean_svg">
<object class="cryptology" data="../svgs/9/Diffie-Hellman.svg" type="image/svg+xml" ></object>
</div>
<p>Whitfield Diffie and Martin Hellman discovered a method of encryption that allows communication on open airways using a key that is not known by all parties. The vital part is the mathematics which allows the end users to create a common key using a procedure that is conducted without encryption.</p>
<h3>The Setup</h3>
<p>Ana, Bob, and Eve are our three actors. Ana and Bob want to communicate and Eve would like to listen in. (These are three common names chosen for encryption scenarios, possibly because of their simplicity and similarity to A, B, and E for eavesdropper.) Click on the box to the right to see an animation.</p>
<br class="clearme" />
</div>

<div>
<div class="boolean_svg">
<object class="cryptology" data="../svgs/9/Diffie-Hellman2.svg" type="image/svg+xml" ></object>
</div>
<h3>What people know</h3>
<p>Everyone knows the public base, a, and the public prime, p. The public base is the number used as the base of the exponent. The public prime is the number used in the modulo operation (which gives the remainder after division by that particular number).</p>
<p>However, only Ana knows what number, x, she is going to raise the base by, and only Bob knows what number, y, he is going to raise the base by.</p>
<br class="clearme" />
</div>

<div>
<div class="boolean_svg">
<object class="cryptology" data="../svgs/9/Diffie-Hellman3.svg" type="image/svg+xml" ></object>
</div>
<h3>Creating the Common Key</h3>
<p>In this example we will use the number 2 as the public base, or number we will raise to various powers. We will use 11 as the public prime, or number that we will use as our modulo.</p>
<p>Ana chooses a prime number which only she knows, and which will act as the number she raises the public base to. Bob also chooses a prime number which only he will know.</p>
<br class="clearme" />
</div>

<div>
<div class="boolean_svg">
<object class="cryptology" data="../svgs/9/Diffie-Hellman4.svg" type="image/svg+xml" ></object>
</div>
<h3>The Common Key Part II</h3>
<p>Now Ana and Bob each take the public base and raise it to the prime numbers they each chose. They send the remainder to each other after taking the modulo.</p>
<br class="clearme" />
</div>

<div>
<div class="boolean_svg">
<object class="cryptology" data="../svgs/9/Diffie-Hellman5.svg" type="image/svg+xml" ></object>
</div>
<h3>The Common Key Part III</h3>
<p>Ana and Bob each raise the number they received from each other--big X and big Y--by their own private primes they chose initially. Here is the beautiful result: they each have a copy of the common key which only they know. Everything was passed publicly except for the primes they each chose. Now they are able to communicate privately.</p>
<br class="clearme" />
</div>

</div>

<div id="credit">
<p>This page is based on a lecture by Oliver Knill, Harvard University, on 16 April, 2012.</p>
<p>References:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.math.harvard.edu/~knill/teaching/mathe320_2012/handouts/10-cryptology.pdf">Lecture Handout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.math.harvard.edu/~knill/teaching/mathe320_2012/handouts/10-worksheet.pdf">Lecture Worksheet</a></p>
</div>

<div id="footer">
	<?php include("../includes/subnav.php") ?>
</div>
</div>
</body>
</html>