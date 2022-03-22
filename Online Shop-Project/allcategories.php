<?php include 'admin_header.php';
	require_once "controllers/categorycontroller.php";
	$categories=getALLCategories();
?>
<!--All Categories starts -->

<div class="center">
	<h3 class="text">All Categories</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th> Name</th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
		<?php
		foreach($categories as $category){
		echo "<tr>";	
			echo"<td>".$category["ID"]."</td>";
			echo "<td>".$category["Name"]."</td>";
			echo '<td><a href="editcategory.php" class="btn btn-success">Edit</a></td>';
			echo '<td><a class="btn btn-danger">Delete</td>';
		echo "</td>";
		}
		?>
		</tbody>
	</table>
</div>
<!--All Categories ends -->
<?php include 'admin_footer.php';?>