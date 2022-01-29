<!doctype html>

</html lang="en">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>I Graph Theory</title>
	<?php include("../includes/htmlhead.php"); ?>
</head>

<body id="onepage">
<div id="page">
<div id="header">
	<?php include("../includes/subnav.php"); ?>
</div>
<br class="clearme" />

<h2>Graph Theory</h2>

<div id="graph_treebox">
<object id="graph_tree" data="../svgs/graph_tree.svg" type="image/svg+xml">Your browser does not support SVG</object>
</div>

<div class="writing">
<h3>Flowers, trees, and forests</h3>
<p>Graph theory is an area of math than can be both beautiful and useful. This math uses dots and lines to create shapes. Graphs can represent "flowers," "trees," and "forests." 'Dots are called nodes or vertices, while lines are called edges. "Edges" connect two "vertices." "Flowers" are vertices and edges that create a closed path. "Trees" are usually several vertices and edges connected together without ever creating a closed path, although a tree can also be just one node--otherwise known as a seed. Forests are groups of trees. The definition of a forest is that it is a graph without closed paths.</p>
<p>This is one small part of math that is beautiful and has a visual form that approximates integral components of our natural forests. Graphs can represent plumbing, the Army's command structure, geneology, molecular structures, and data files to name a few.</p>
<p>The degree of a vertex, d(v) is equal to the number of neighbors of that vertex. The curvature of a vertex, k(v), can be expressed as:</p>
<math class="dynamicequation" xmlns='http://www.w3.org/1998/Math/MathML'>
	<mi>k</mi>
	<mfenced>
		<mi>v</mi>
	</mfenced>
	<mo>=</mo>
		<mfrac>
			<mrow>
					<mn>1</mn>
					<mo>-</mo>
					<mi>d</mi>
					<mfenced>
						<mi>v</mi>
					</mfenced>
			</mrow>
			<mn>2</mn>
		</mfrac>
</math>

<p>As we use this expression and find the values of the curvature of different vertices, we see that end nodes on trees equal
<math class="noblock" xmlns='http://www.w3.org/1998/Math/MathML'>
	<mo>-</mo>
	<mfrac>
		<mn>1</mn>
		<mn>2</mn>
	</mfrac>
</math>
, limbs where two branches meet equal 0, and crotches where only three branches come together equal
<math class="noblock" xmlns='http://www.w3.org/1998/Math/MathML'>
	<mfrac>
		<mn>1</mn>
		<mn>2</mn>
	</mfrac>
</math>
. Professor Oliver Knill formulated the theory that the total curvature of a forest is the number of trees.</p>
<p>More generally, for objects called plants, trees where flowers are attached, the total curvature is equal to the number of plants minus the number of flowers.</p>

<iframe id="streetsweepervideo" width="320" height="180" src="http://www.youtube.com/embed/X6wpMcnVxZQ?feature=player_embedded" frameborder="0" allowfullscreen></iframe>
<h3>Uses</h3>
<p>Graph Theory can be applied in everyday life. As an example, think of street cleaners, the vehicle type. To begin to think about how graph theory is applied, compare street cleaning with house cleaning. As you'd rather only vacuum one hallway in your house one time, the street cleaner (not to mention the city) would rather only clean one street one time. You can imagine that this could be challenging figuring out which streets to drive down and in which direction--maybe a little harder than figuring out in which direction you should vacuum your house! Graph theory helps large cities plan the best route for their street sweepers to save time and money. Math can be useful!</p>
</div>

<div id="credit">
<p>This page is based on a lecture by Oliver Knill, Harvard University, on 23 January, 2012.</p>
<p>References:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.math.harvard.edu/~knill/teaching/mathe320_2012/handouts/00-math.pdf">Lecture Handout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.math.harvard.edu/~knill/teaching/mathe320_2012/handouts/00-worksheet.pdf">Lecture Worksheet</a></p>
</div>

<br class="clearme" />
<div id="footer">
	<?php include("../includes/subnav.php") ?>
</div>
</div>
</body>
</html>
