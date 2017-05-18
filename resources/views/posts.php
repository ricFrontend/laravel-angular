<div ng-repeat=" (key, value) in miController.objeto"> 
	<h3>El género cinematográfico preferido de <span class="capitalize">{{key}}</span> es: </h3>
	<span class="capitalize">{{value.genres}}</span>
</div>