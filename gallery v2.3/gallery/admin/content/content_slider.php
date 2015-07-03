<div class="contents homeSlider" ng-app="myApp">
    <div class="container" ng-controller="homeCtrl">
    	<ol class="breadcrumb">
			<li><i class="fa fa-home"></i> Home</li>
			<li>Slider Section</li>
		</ol>
        <h2 class="text-center">{{title}}</h2>
        <ul>
	    	<li ng-repeat="image in images">
	    		{{image.title}}, {{image.description}}, 
	    		<img class="img-responsive" ng-src="../images/{{image.img_name}}" />
	    	</li>
	    </ul>
	    <button ng-click="save()" class="btn btn-default">Save</button>
    </div>
</div>