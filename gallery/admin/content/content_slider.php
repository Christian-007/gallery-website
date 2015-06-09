<div class="contents" ng-app="myApp">
    <div class="container" ng-controller="homeCtrl">
        <h1>{{title}}</h1>
        <ul>
	    	<li ng-repeat="image in images">
	    		{{image.title}}, {{image.description}}, 
	    		<img class="img-responsive" ng-src="../images/{{image.img_name}}" />
	    	</li>
	    </ul>
	    <button ng-click="save()" class="btn btn-default">Save</button>
    </div>
</div>