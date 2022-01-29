<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 plus MathML 2.0 plus SVG 1.1//EN" "http://www.w3.org/2002/04/xhtml-math-svg/xhtml-math-svg.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>V Algebra</title>
	<?php include("../includes/htmlhead.php"); ?>	
</head>

<body id="fivepage">
<div id="page">
<div id="header">
	<?php include("../includes/subnav.php") ?>
</div>
<br class="clearme" />

<h2>Algebra</h2>

<div class="svg">
<object class="algebra" data="../svgs/algebra.svg?v=1.0" type="image/svg+xml"></object>
</div>
<div id="writing">

<h3>History</h3>
<p>Algebra is a tool to help us solve equations and puzzles. Al Khwarizmi, (750-850) from Persia, was the co-founder of algebra. He found the first systematic solution of the quadratic equation.</p>

<h3>Completing the Square</h3>

<p>In order to uncode a quadratic equation, we must first find what x can be equal to. A quadratic equation usually looks like this:</p>
<math class="algebra1" xmlns='http://www.w3.org/1998/Math/MathML'>
	<mi>a</mi>
	<msup>
		<mi>x</mi>
		<mn>2</mn>
	</msup>
	<mo>+</mo>
	<mi>b</mi>
	<mi>x</mi>
	<mo>+</mo>
	<mi>c</mi>
	<mo>=</mo>
	<mn>0</mn>
</math>
<p>In order to solve for x, lets assume a = 1. The first step is to move "c" to the right side of the equation. This shows:</p>
<math class="algebra1">
	<msup>
		<mi>x</mi>
		<mn>2</mn>
	</msup>
	<mo>+</mo>
	<mrow>
		<mi>b</mi>
		<mi>x</mi>
	</mrow>
	<mo>=</mo>
	<mo>-</mo>
	<mi>c</mi>
</math>
<p>Take a look at the graphic to the upper-right. This uses squares to illustrate the left side of the equation. The x squared is shown by a box that has a length of x on both sides. There is also a length of b divided by 2, which when multiplied by x and added together, results in bx--the middle term.</p>
<p>Use your mouse to hover over the top right corner of the graphic. You will see what "completes" this square--makes it a real square--and will help us solve for x. This step is the <span class="focus">beautiful part</span>. By adding a number to both sides of the equation, the left side becomes factorable:</p>
<math>
	<msup>
		<mi>x</mi>
		<mn>2</mn>
	</msup>
	<mo>+</mo>
	<mi>b</mi>
	<mi>x</mi>
	<mo>+</mo>
	<mfrac class="focus">
		<mrow>
			<msup>
				<mi>b</mi>
				<mn>2</mn>
			</msup>
		</mrow>
		<mrow>
			<mn>4</mn>
		</mrow>
	</mfrac>
	<mo>=</mo>
	<mfrac class="focus">
		<mrow>
			<msup>
				<mi>b</mi>
				<mn>2</mn>
			</msup>
		</mrow>
		<mrow>
			<mn>4</mn>
		</mrow>
	</mfrac>
	<mo>-</mo>
	<mi>c</mi>
</math>
<p>When we factor the left side, we have:</p>
<math>
	<msup>
		<mrow>
			<mfenced>
				<mrow>
					<mi>x</mi>
					<mo>+</mo>
					<mfrac>
						<mi>b</mi>
						<mrow>
							<mn>2</mn>
						</mrow>
					</mfrac>
				</mrow>
			</mfenced>
		</mrow>
		<mrow>
			<mn>2</mn>
		</mrow>
	</msup>
	<mo>=</mo>
	<mfrac>
		<mrow>
			<msup>
				<mi>b</mi>
				<mn>2</mn>
			</msup>
		</mrow>
		<mrow>
			<mn>4</mn>
		</mrow>
	</mfrac>
	<mo>-</mo>
	<mi>c</mi>
</math>
<p>By multiplying the term c on the right side by
<math class="noblock">
	<mfrac>
		<mn>4</mn>
		<mn>4</mn>
	</mfrac>
</math>
(which is a legal step because
<math class="noblock">
	<mfrac>
		<mn>4</mn>
		<mn>4</mn>
	</mfrac>
</math>
is the same thing as multiplying by one), we can simplify it to:</p>
<math>
	<msup>
		<mrow>
			<mfenced>
				<mrow>
					<mi>x</mi>
					<mo>+</mo>
					<mfrac>
						<mi>b</mi>
						<mrow>
							<mn>2</mn>
						</mrow>
					</mfrac>
				</mrow>
			</mfenced>
		</mrow>
		<mrow>
			<mn>2</mn>
		</mrow>
	</msup>
	<mo>=</mo>
	<mfrac>
		<mrow>
			<mrow>
				<msup>
					<mi>b</mi>
					<mn>2</mn>
				</msup>
				<mo>-</mo>
				<mn>4</mn>
				<mi>c</mi>
			</mrow>	
		</mrow>
		<mrow>
			<mn>4</mn>
		</mrow>
	</mfrac>
</math>
<p>Taking the square root of both sides we find:</p>
<math>
	<mrow>
		<mi>x</mi>
		<mo>+</mo>
		<mfrac>
			<mi>b</mi>
			<mn>2</mn>
		</mfrac>
	</mrow>
	<mo>=</mo>
	<mo>&plusmn;</mo>
	<mfrac>
		<mrow>
			<msqrt>
				<msup>
					<mi>b</mi>
					<mn>2</mn>
				</msup>
				<mo>-</mo>
				<mn>4</mn>
				<mi>c</mi>
			</msqrt>
		</mrow>
		<mrow>
			<mn>2</mn>
		</mrow>
	</mfrac>
</math>
<p>Moving
<math class="noblock">
	<mfrac>
		<mi>b</mi>
		<mn>2</mn>
	</mfrac>
</math>
to the right side of the equation we have:</p>
<math>
    <mrow>
        <mi>x</mi><mo>=</mo>
        <mfrac>
            <mrow>
                <mo>-</mo><mi>b</mi><mo>&plusmn;</mo>
                <msqrt>
                    <msup>
                        <mi>b</mi><mn>2</mn>
                    </msup>
                    <mo>-</mo>
                    <mn>4</mn><mo>&InvisibleTimes;</mo><mo>&InvisibleTimes;</mo><mi>c</mi>
                </msqrt>
            </mrow>
            <mrow>
                <mn>2</mn><mo>&InvisibleTimes;</mo>
            </mrow>
        </mfrac>
    </mrow>
</math>
</p>
<p>With the quadratic equation we can find any solutions, or y-intercepts (where y = 0 on a graph), for x.</p>

<h3>More Discoveries</h3>
<p>
DesCartes discovered a special relationship between algebra and geometry. He found you could graph a quadratic and find its roots by seeing where the curve crossed the x-axis.</p>

<p>A cubic can be solved with some special manuevering, making it similar to the quadratic. The cubic:
<math class="noblock">
<msup>
	<mi>x</mi><mn>3</mn>
</msup>
<mo>+</mo>
<msup>
	<mi>x</mi><mn>2</mn>
</msup>
<mo>-</mo>
<mn>12</mn>
<mi>x</mi>
<mo>=</mo>
<mn>0</mn>
</math>
can be solved by pulling an x out of the left side of the equation. This makes:
<math class="noblock">
<mi>x</mi>
<mfenced>
<mrow>
	<msup>
		<mi>x</mi><mn>2</mn>
	</msup>
	<mo>+</mo>
	<mi>x</mi>
	<mo>-</mo>
	<mn>12</mn>
</mrow>
</mfenced>
<mo>=</mo>
<mn>0</mn>
</math>
At this point we have a solution of x = 0. After we factor we find two solutions: x = 3 and x = -4.</p>

<p>Some quartics can be solved by substituting z for
<math class="noblock">
<msup>
	<mi>x</mi><mn>2</mn>
</msup>
</math>
, and can result in some imaginary numbers. Other more standard quartics are solved using <a href="http://mathworld.wolfram.com/PascalsTriangle.html">Pascal's triangle</a> (Weisstein, Eric W. "Pascal's Triangle." From MathWorld--A Wolfram Web Resource) to help us with the coefficients.
</p>

</div>

<div id="credit">
<p>This page is based on a lecture by Oliver Knill, Harvard University, on 27 February, 2012.</p>
<p>References:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.math.harvard.edu/~knill/teaching/mathe320_2012/handouts/04-algebra.pdf">Lecture Handout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.math.harvard.edu/~knill/teaching/mathe320_2012/handouts/04-worksheet.pdf">Lecture Worksheet</a></p>
</div>

<div id="footer">
	<?php include("../includes/subnav.php") ?>
</div>
</div>
</body>
</html>