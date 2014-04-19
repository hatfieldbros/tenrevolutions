<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 plus MathML 2.0 plus SVG 1.1//EN" "http://www.w3.org/2002/04/xhtml-math-svg/xhtml-math-svg.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>X Dynamics</title>
	<?php include("../includes/htmlhead.php"); ?>	
</head>

<body id="tenpage">
<div id="page">

<div id="header">
	<?php include("../includes/nav.php"); ?>
</div>
<br class="clearme" />

<h2>Dynamics</h2>

<div id="writing">

<div>
<h3>The Ulam-Collatz system</h3>
<div class="boolean_svg">
<object class="dynamics" data="../svgs/10/5.svg" type="image/svg+xml" ></object>
</div>
<p>Here is a dynamical system that has two rules: 1) if a number is even, divide it by 2; 2) if a number is odd, multiply by 3 then add one. It can be represented mathematically like this:</p>
<math class="dynamicequation" xmlns='http://www.w3.org/1998/Math/MathML'>
	<mi>T</mi>
	<mfenced>
		<mi>x</mi>
	</mfenced>
	<mo>=</mo>
	<mfenced open="{" close="}">
		<mfrac>
			<mrow>
				<mfrac>	
					<mrow>
						<mi>n</mi>
					</mrow>
					<mrow>
						<mn>2</mn>
					</mrow>
				</mfrac>
				<mi> if n is even</mi>
			</mrow>
			<mrow>
				<mn>3</mn>
				<mi>n</mi>
				<mo>+</mo>
				<mn>1</mn>
				<mi> if n is odd</mi>
			</mrow>
	</mfenced>
</math>

<p>First, choose a number, n. If n is even, divide it by 2. If n is odd, multiply it by three and then add one. Continue analyzing n until you find a loop that will not let you progress. Does the orbit always end up at the number one? Click on the sketch to the right to see an example of this system if 3 is the starting number.</p>

<p>It is said that this dynamical system has eaten away many hours of productivity at Los Alamos where mathematicians look for orbitz that do not lead back to one. Others have said that "Math is not ready for this" because there are no easy ways to solve these kinds of problems. It has not yet been proven whether all orbitz lead back to one or not, although as far as we know no one has ever ended up with any number besides one.</p>

<br class="clearme" />
</div>

</div>

<div id="credit">
<p>This page is based on a lecture by Oliver Knill, Harvard University, on 23 April, 2012.</p>
<p>References:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.math.harvard.edu/~knill/teaching/mathe320_2012/handouts/11-dynamics.pdf">Lecture Handout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.math.harvard.edu/~knill/teaching/mathe320_2012/handouts/11-worksheet.pdf">Lecture Worksheet</a></p>
</div>

<div id="footer">
	<?php include("../includes/nav.php"); ?>
</div>
</div>
</body>
</html>