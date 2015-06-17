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
	    	<div class="category well">
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

            <div id="panel-all" class="thumbnails active">
                <div class="row images">
                    <div class="col-xs-6 col-md-3 box" ng-repeat="image in images">
                        <a class="img-click" href="" data-toggle="modal" data-target="#imgMod">
                            <img ng-src="../images/{{image.img_name}}" class="img-responsive" />
                            <h4><span class="status">Active</span></h4>
                        </a>
                    </div>
                </div>
            </div>

	        <div id="panel-landscape" class="thumbnails">
                <div class="row images">
                    <div class="col-xs-6 col-md-3 box" ng-repeat="image in images | filter:{category:'landscape', isActive:'true'}">
                        <a class="img-click" href="" data-toggle="modal" data-target="#imgMod">
                            <img ng-src="../images/{{image.img_name}}" class="img-responsive" />
                            <h4><span class="status">Active</span></h4>
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3 box" ng-repeat="image in images | filter:{category:'landscape', isActive:'false'}">
                        <a class="img-click" href="" data-toggle="modal" data-target="#imgMod">
                            <img ng-src="../images/{{image.img_name}}" class="img-responsive" />
                        </a>
                    </div>
                </div>
            </div>

            <div id="panel-culture" class="thumbnails">
                <div class="row images">
                    <div class="col-xs-6 col-md-3 box" ng-repeat="image in images | filter:{category:'culture', isActive:'true'}">
                        <a class="img-click" href="" data-toggle="modal" data-target="#imgMod">
                            <img ng-src="../images/{{image.img_name}}" class="img-responsive" />
                            <h4><span class="status">Active</span></h4>
                        </a>
                    </div>
                </div>
            </div>

            <div id="panel-event" class="thumbnails">
                <div class="row images">
                    <div class="col-xs-6 col-md-3 box" ng-repeat="image in images | filter:{category:'landscape', isActive:'true'}">
                        <a class="img-click" href="" data-toggle="modal" data-target="#imgMod">
                            <img ng-src="../images/{{image.img_name}}" class="img-responsive" />
                            <h4><span class="status">Active</span></h4>
                        </a>
                    </div>
                </div>
            </div>

            <div id="panel-others" class="thumbnails">
                <div class="row images">
                    <div class="col-xs-6 col-md-3 box" ng-repeat="image in images | filter:{category:'culture', isActive:'true'}">
                        <a class="img-click" href="" data-toggle="modal" data-target="#imgMod">
                            <img ng-src="../images/{{image.img_name}}" class="img-responsive" />
                            <h4><span class="status">Active</span></h4>
                        </a>
                    </div>
                </div>
            </div>

	    </div>	

	    <!-- Modal -->
	    <div class="modal fade" id="imgMod" tabindex="-1" role="dialog" aria-hidden="true">
	        <div class="top-bar">
	            <p class="left"><span class="order">0</span>/<span class="total">0</span></p>
	            <div class="right exit">Close <i class="fa fa-times"></i></div>
	            <div class="right autoSlide">
	                Auto Slide <i class="fa fa-refresh"></i>
	            </div>
	        </div>
	        <div class="divs">
	            <div class="cells">
	                <img ng-src="" class="img-responsive" alt="Image 1"/>
	            </div>
	        </div>
	        <div class="arrow-left">
	            <div class="arrow"><i class="previous fa fa-arrow-left"></i></div>
	        </div>
	        <div class="arrow-right">
	            <div class="arrow"><i class="next fa fa-arrow-right"></i></div>
	        </div>
	        <div class="bottom-bar">
	            <div class="caption">
	                <span>Caption</span>
	            </div>
	        </div>
	    </div>
    </div>
</div>