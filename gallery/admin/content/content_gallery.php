<div class="contents">
    <div class="container">
    	<h2>Gallery Submission</h2>
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
			<button type="submit" class="btn btn-success">Submit</button>
        </form>
        <!-- <form action="utility/check.php" method="post">
        	<button type="submit" class="btn btn-success">Show Images</button>
        </form> -->
        <!-- <form class="form-horizontal">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
			  	<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<div class="checkbox">
				    	<label>
				      		<input type="checkbox"> Remember me
				    	</label>
				  	</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Sign in</button>
				</div>
			</div>
		</form> -->
    </div>
</div>