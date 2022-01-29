<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 plus MathML 2.0 plus SVG 1.1//EN" "http://www.w3.org/2002/04/xhtml-math-svg/xhtml-math-svg.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>VI Calculus</title>
	<?php include("../includes/htmlhead.php"); ?>	
</head>

<body id="sixpage">
<div id="page">

<div id="header">
	<?php include("../includes/subnav.php") ?>
</div>
<br class="clearme" />
<h2>Calculus</h2>

<div id="writing">
<p>Calculus is the theory of <span class="accent">sums</span> and <span class="accent">differences</span>. Sums represent accumulation, and taking sums repeatedly is expressed as the <span class="accent">integral</span>. Differences represent change, and taking differences repeatedly is express as the <span class="accent">derivative</span>. This process of taking sums and differences repeatedly is thought of as taking these calculations to their limits.</p>

<h3>What is a Function?</h3>
<p>Your parents might tell you that among other things, your function is to be a good student and to do your chores. This definition of function is not very mathematical, but it is a correct use of the word. Lets alter the definition a little and say that a function is not what a person does, but what a machine does. And this machine can be very simple--all it needs are inputs and outputs. Think of a juice blender: you can put carrots in and out comes carrot juice; tomatoes and you get tomato juice; apples for apple juice; and so on.
</p>

<h3>Simple Beginnings - The Integral</h3>

<div class="calculus">
<object class="calculus" data="../svgs/calculus.svg" type="image/svg+xml"></object>
</div>

<p>See figure 1 on the right. Click it to begin the demonstration. You see the white lines across the top that look very similar to the markings on the Ishango Bone (considered the first record of human math. Circa 25,000 B.C.E. See Exhibit 1).</p>

<div id="ishango_bone">
<img src="../images/ishango_bone.png" alt="Ishango Bone" />
<p>Exhibit 1 - Ishango Bone</p>
</div>

<p>Consider these vertical lines as representing the number one, and see how it shows the output of a constant function. As a function of the top row, the bottom row is simply the sum of all the ones above it. We can represent this simple function just by using the variable "n" by itself: n. If we chose the fifth 1 over, your output would be the sum of that 1 and all the other 1s to the left, giving you an output of 5. This is possibly the simplest function you can find.</p>

<div class="functionbox">
<object class="function" data="../svgs/function.svg" type="image/svg+xml"></object>
</div>

<p>By using the position of the desired 1 on top row as input values, and the bottom row as outputs, we have seen a very simple function. If we continue evaluating this function with increasing input values (6 and up), we are taking an <span class="accent">integral</span>.</p></p>
<p>The graph of the function, n, would look like Graph 1.</p>
<br class="clearme" />

<h3>The Derivative</h3>

<div class="calculus">
<object class="calculus" data="../svgs/calculus.svg" type="image/svg+xml"></object>
</div>

<p>On the other hand, if we use the bottom row as our input value, and the top row as outputs, (assuming we can approach an infinite number of inputs) we see an example of a <span class="accent">derivative</span>. Take another look at the original sketch to the right. The top row can be written algebraically as n-(n-1). The input can be any number 1 through 6. The output will always be one. Try it yourself. I'll try the number 4.</p>
<math class="algebra1" xmlns='http://www.w3.org/1998/Math/MathML'>
	<mi>n</mi>
	<mo>-</mo>
	<mfenced>
		<mrow>
			<mi>n</mi>
			<mo>-</mo>
			<mn>1</mn>
		</mrow>
	</mfenced>
</math>
<math class="algebra1">
	<mn>4</mn>
	<mo>-</mo>
	<mfenced>
		<mrow>
			<mn>4</mn>
			<mo>-</mo>
			<mn>1</mn>
		</mrow>
	</mfenced>
</math>
<math class="algebra1">
	<mn>4</mn>
	<mo>-</mo>
	<mfenced>
		<mn>3</mn>
	</mfenced>
</math>
<math class="algebra1">
	<mn>1</mn>
</math>

<div class="functionbox">
<object class="function" data="../svgs/function2.svg" type="image/svg+xml"></object>
</div>

<p>I found 1 to be the output. That should be true for the number you picked too. No matter what number you choose for this function, n - ( n - 1 ), from 1 to 1 million and beyond, you will always get 1 as your answer. (It's also true if you choose 0 or any negative number).</p>
<p>Lets graph these numbers. I'll start with the number I chose, 4, and use it as my x value; while the output, 1, will be the y value. The number 5 would return a value of 1. The number 6 would also return a value of 1. Plot these points on a graph and we have a straight line. Did you know that a list of 1's could mean so much? (Soon you'll learn why the slope of this line, like all derivatives, is one power less than the slope of the previous function.)</p>
<p>Now you know a little about calculus! Can you find any functions in your life?</p>

</div>

<div id="credit">
<p>This page is based on a lecture by Oliver Knill, Harvard University, on 5 March, 2012.</p>
<p>References:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.math.harvard.edu/~knill/teaching/mathe320_2012/handouts/05-calculus.pdf">Lecture Handout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.math.harvard.edu/~knill/teaching/mathe320_2012/handouts/05-quizz.pdf">Lecture Worksheet</a></p>
</div>

<div id="footer">
	<?php include("../includes/subnav.php") ?>
</div>
</div>
</body>
</html>