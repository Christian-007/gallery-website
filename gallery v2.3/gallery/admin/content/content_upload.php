<div class="contents upload">
	<div class="container">
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i> Home</li>
			<li>Media Upload</li>
		</ol>
		<h2 class="text-center">Media Upload</h2>
	    <form enctype="multipart/form-data" action="execution/sql_gallery.php" method="post">
	        <div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" class="form-control" id="title" placeholder="Enter Title" required>
				<p class="help-block text-danger"></p>
			</div>
			<div class="form-group">
				<label for="description">Description</label>
	            <textarea rows="5" name="description" class="form-control" placeholder="Description" id="description" required></textarea>
	            <p class="help-block text-danger"></p>
			</div>
			<div class="form-group">
				<label for="description">Category</label>
	            <select name="category" class="form-control" id="selection" required>
	            	<option value="">-- Select Category --</option>
	                <option value="landscape">Landscape</option>
	                <option value="culture">Culture</option>
	                <option value="event">Event</option>
	                <option value="others">Others</option>
	            </select>
	            <p class="help-block text-danger"></p>
			</div>
			<div class="form-group">
				<label for="inputFile">File input</label>
				<input type="file" id="inputFile" name="image" required>
				<p class="help-block text-danger"></p>
			</div>
			<button type="submit" class="btn btn-success submit">Submit</button>
	    </form>
	    <!-- <form action="utility/check.php" method="post">
	    	<button type="submit" class="btn btn-success">Show Images</button>
	    </form> -->
	</div>
</div>