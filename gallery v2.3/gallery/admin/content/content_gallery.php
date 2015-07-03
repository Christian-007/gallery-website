<div class="contents gallery" ng-app="myApp">
    <div class="container" ng-controller="homeCtrl">
    	<ol class="breadcrumb">
			<li><i class="fa fa-home"></i> Home</li>
			<li>Gallery Section</li>
		</ol>
		<div class="text-center">
	    	<div class="well notifications">
                <h4>Legend</h4>
                <p><code>ACTIVE</code> = the selected image is featured as a <strong>thumbnail</strong> in gallery section</p>   
            </div>
	    	<div class="category options">
                <div class="row">
                    <div class="col-xs-4 text-left">
                        <button type="button" class="btn btn-info upload" data-toggle="modal" data-target="#uploadModal">
                            <i class="fa fa-upload"></i> Upload
                        </button>
                        <button class="btn btn-default selected hidden">
                            <strong><span class="number">0</span> SELECTED</strong>
                        </button>
                    </div>
                    <div class="col-xs-4">
                        <ul class="list-inline">
                            <li><label>Category: </label></li>
                            <li>
                                <select class="form-control" id="selection">
                                    <option rel="panel-all">All</option>
                                    <option rel="panel-landscape">Landscape</option>
                                    <option rel="panel-culture">Culture</option>
                                    <option rel="panel-event">Event</option>
                                    <option rel="panel-others">Others</option>
                                </select>
                            </li>   
                        </ul>
                    </div>
                    <div class="col-xs-4 text-right">
                        <button ng-click="changeStatus('true')" class="btn btn-success select">
                            <i class="fa fa-edit"></i> Select
                        </button>
                        <button ng-click="changeStatus('false')" class="btn btn-warning cancel hidden">
                            <i class="fa fa-close"></i> Cancel
                        </button>
                    </div>
                </div>
	        </div>
            <div class="category well add-on hidden">
                <div class="row">
                    <div class="col-xs-6">
                        <button type="button" class="btn btn-primary set" data-toggle="modal" data-target="#setModal" disabled="disabled">
                            <i class="fa fa-picture-o"></i> Set
                        </button>
                    </div>
                    <div class="col-xs-6">
                        <button type="button" class="btn btn-danger delete" disabled="disabled">
                            <i class="fa fa-trash"></i> Delete
                        </button>
                    </div>
                </div>
            </div>

            <div id="panel-all" class="thumbnails active">
                <div class="row images">
                    <div class="col-xs-6 col-md-3 box" ng-repeat="image in images">
                        <a ng-click="addSelection(image.img_name)" class="img-click" href="" data-toggle="modal" data-target="#imgMod">
                            <img style="width:100%; height:100%;" ng-src="../images/{{image.img_name}}" class="img-responsive" />
                            <span ng-if="image.isActive == 'true' ">
                                <h4><span class="status">Active</span></h4>
                            </span>
                            <span class="tickbox hidden">
                                <!-- <i class="fa fa-check fa-5x"></i> -->
                                <img src="../etc/check.png" alt="checkbox" />
                            </span>
                        </a>
                    </div>
                </div>
            </div>

	        <div id="panel-landscape" class="thumbnails">
                <div class="row images">
                    <div class="col-xs-6 col-md-3 box" ng-repeat="image in images | filter:{category:'landscape'}">
                        <a ng-click="addSelection(image.img_name)" class="img-click" href="" data-toggle="modal" data-target="#imgMod">
                            <img ng-src="../images/{{image.img_name}}" class="img-responsive" />
                            <span ng-if="image.isActive == 'true' ">
                                <h4><span class="status">Active</span></h4>
                            </span>
                            <span class="tickbox hidden">
                                <!-- <i class="fa fa-check fa-5x"></i> -->
                                <img src="../etc/check.png" alt="checkbox" />
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <div id="panel-culture" class="thumbnails">
                <div class="row images">
                    <div class="col-xs-6 col-md-3 box" ng-repeat="image in images | filter:{category:'culture'}">
                        <a ng-click="addSelection(image.img_name)" class="img-click" href="" data-toggle="modal" data-target="#imgMod">
                            <img ng-src="../images/{{image.img_name}}" class="img-responsive" />
                            <span ng-if="image.isActive == 'true' ">
                                <h4><span class="status">Active</span></h4>
                            </span>
                            <span class="tickbox hidden">
                                <!-- <i class="fa fa-check fa-5x"></i> -->
                                <img src="../etc/check.png" alt="checkbox" />
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <div id="panel-event" class="thumbnails">
                <div class="row images">
                    <div class="col-xs-6 col-md-3 box" ng-repeat="image in images | filter:{category:'landscape'}">
                        <a ng-click="addSelection(image.img_name)" class="img-click" href="" data-toggle="modal" data-target="#imgMod">
                            <img ng-src="../images/{{image.img_name}}" class="img-responsive" />
                            <span ng-if="image.isActive == 'true' ">
                                <h4><span class="status">Active</span></h4>
                            </span>
                            <span class="tickbox hidden">
                                <!-- <i class="fa fa-check fa-5x"></i> -->
                                <img src="../etc/check.png" alt="checkbox" />
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <div id="panel-others" class="thumbnails">
                <div class="row images">
                    <div class="col-xs-6 col-md-3 box" ng-repeat="image in images | filter:{category:'culture'}">
                        <a ng-click="addSelection(image.img_name)" class="img-click" href="" data-toggle="modal" data-target="#imgMod">
                            <img ng-src="../images/{{image.img_name}}" class="img-responsive" />
                            <span ng-if="image.isActive == 'true' ">
                                <h4><span class="status">Active</span></h4>
                            </span>
                            <span class="tickbox hidden">
                                <!-- <i class="fa fa-check fa-5x"></i> -->
                                <img src="../etc/check.png" alt="checkbox" />
                            </span>
                        </a>
                    </div>
                </div>
            </div>

	    </div>	

        <!-- Upload Modal -->
        <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Upload Photo</h4>
                    </div>
                    <div class="modal-body">
                        <form enctype="multipart/form-data" action="execution/sql_gallery.php" method="post">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea rows="5" name="description" class="form-control" placeholder="Description" id="description" required></textarea>
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
                            </div>
                            <div class="form-group">
                                <label for="inputFile">File input</label>
                                <input type="file" id="inputFile" name="image" multiple required>
                            </div>
                            <button type="submit" class="btn btn-success submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Set Modal -->
        <div class="modal fade" id="setModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Set As Thumbnails</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post">
                            <div class="form-group">
                                <label><span class="numbers">0</span> Photos </label>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-6 col-md-4" ng-repeat="name in names">
                                            <a href="" ng-repeat="image in images | filter:{img_name: name}">
                                                <img ng-src="../images/{{image.img_name}}" class="img-responsive" />
                                                <input type="text" name="img[]" class="hidden img" value="{{image.img_name}}">  
                                            </a>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="selection">Category: </label>
                                <select name="category" class="form-control" id="selection">
                                    <option value="">-- Select Category --</option>
                                    <option value="landscape">Landscape</option>
                                    <option value="culture">Culture</option>
                                    <option value="event">Event</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                            <button type="submit" data-loading-text="Loading..." class="btn btn-success submit" autocomplete="off">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

	    <!-- Image Viewer Modal -->
	    <div class="modal fade" id="imgMod" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="divs">
                <div class="cells">
                    <div class="slide">
                        <img ng-src="" class="img-responsive" alt="Image 1"/>
                    </div>
                </div>
            </div>
            <div class="top-bar">
                <p class="left"><span class="order">0</span>/<span class="total">0</span></p>
                <div class="right exit">
                    <button class="btn btn-default">
                        Close <i class="fa fa-times"></i>
                    </button>
                </div>
                <div class="right autoSlide">
                    <button class="btn btn-default">
                        Auto Slide <i class="fa fa-refresh"></i>
                    </button>
                </div>
            </div>
            <div class="bottom-bar">
                <div class="caption">
                    <span>Caption</span>
                </div>
            </div>
            <div class="arrow-left">
                <div class="arrow"><i class="previous fa fa-arrow-left"></i></div>
            </div>
            <div class="arrow-right">
                <div class="arrow"><i class="next fa fa-arrow-right"></i></div>
            </div>
        </div>
    </div>
</div>