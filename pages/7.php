<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 plus MathML 2.0 plus SVG 1.1//EN" "http://www.w3.org/2002/04/xhtml-math-svg/xhtml-math-svg.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>VII Boolean Algebra</title>
	<?php include("../includes/htmlhead.php"); ?>	
</head>

<body id="sevenpage">
<div id="page">

<div id="header">
	<?php include("../includes/subnav.php") ?>
</div>
<br class="clearme" />

<h2>Boolean Algebra</h2>

<div id="writing">

<div>
<h3>Boolean Rings</h3>
<div class="boolean_svg">
<object class="boolean" data="../svgs/boolean_ring.svg" type="image/svg+xml" width="1000px"></object>
</div>
<p>These two rings are the foundations for all of boolean algebra. As you can see, the ring on the left is called "A" and the one on the right, "B." These circles represent "sets" or groups of numbers (hence the placement of this study of math under the broader family of Set Theory). Interestingly, sets of numbers are the building blocks of all math because everything we do in math involves sets.</p>
<br class="clearme" />
</div>

<div>
<h3>Addition</h3>
<div class="boolean_svg">
<object class="boolean" data="../svgs/boolean_add.svg" type="image/svg+xml"></object>
</div>
<div class="middle">
<p>The first rule in Boolean Algebra is addition. Possibly contrary to your intuition, when we add two sets in Boolean we take everything in both sets except the items that are common to both. Simply put, the area between the rings is not included when we add. It may make more sense if we call addition, "the symmetric difference." In the field of Logic, this would be considered "A or B."</p>
</div>
</div>
<br class="clearme" />

<h3>Multiplication</h3>
<div class="boolean_svg">
<object class="boolean" data="../svgs/boolean_multiply.svg" type="image/svg+xml"></object>
</div>
<p>Multiplication in boolean algebra is defined as the intersection between two sets. All the values that are common to both set A and set B are given as the result of the multiplication operation. In Logic, this would be considered "A and B."</p>
<br class="clearme" />

<h3>Familiar Rule Extensions</h3>
<p> Old rules that you have seen before in math can be applied to boolean algebra. These rules include <span class="accent">commutativity</span>, <span class="accent">associativity</span>, and <span class="accent">distributivity</span>. You've seen the commutative property: a + b = b + a.

<h3>Commutativity of Addition</h3>
<div class="boolean_svg">
<object class="boolean" data="../svgs/boolean_commutativity1.svg" type="image/svg+xml"></object>
<object class="boolean" data="../svgs/boolean_commutativity2.svg" type="image/svg+xml"></object>
</div>
<p>The commutative property of addition states that the order of terms does not matter: A + B = B + A.</p>
<br class="clearme" />

<h3>Commutativity of Multiplication</h3>
<div class="boolean_svg">
<object class="boolean" data="../svgs/boolean_commutativity_multiplication1.svg" type="image/svg+xml"></object>
<object class="boolean" data="../svgs/boolean_commutativity_multiplication2.svg" type="image/svg+xml"></object>
</div>
<p>The commutative property of multiplication also states that the order of terms does not matter: A x B = B x A.</p>
<br class="clearme" />
<p>Boolean algebra is different from standard algebra in its rules for addition and multiplication. However, many common rules such as commutativity still apply. The study of boolean algebra can be practical and fun.</p> 
<br class="clearme" />
</div>

<div id="credit">
<p>This page is based on a lecture by Oliver Knill, Harvard University, on 19 March 2012.</p>
<p>References:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.math.harvard.edu/~knill/teaching/mathe320_2012/handouts/06-settheory.pdf">Lecture Handout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.math.harvard.edu/~knill/teaching/mathe320_2012/handouts/06-worksheet.pdf">Lecture Worksheet</a></p>
</div>

<br class="clearme" />
<div id="footer">
	<?php include("../includes/subnav.php") ?>
</div>
</div>
</body>
</html>