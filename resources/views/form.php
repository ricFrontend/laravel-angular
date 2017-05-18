<form ng-submit="miController.submitPost()">         
    <div class="form-group">
        <input type="text" class="form-control input-sm" name="author" ng-model="miController.postData.author" placeholder="Name">
    </div>

    
    <div class="form-group">
        <div class="radio">
            <label>
                <input type="radio" value="horror" name="favoriteGenres" ng-model="miController.postData.favoriteGenres"> Horror
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" value="scifi" name="favoriteGenres" ng-model="miController.postData.favoriteGenres"> Sci-Fi
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" value="action" name="favoriteGenres" ng-model="miController.postData.favoriteGenres"> Action
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" value="comedy" name="favoriteGenres" ng-model="miController.postData.favoriteGenres"> Comedy
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" value="sports" name="favoriteGenres" ng-model="miController.postData.favoriteGenres"> Sports
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" value="thrillers" name="favoriteGenres" ng-model="miController.postData.favoriteGenres"> Thrillers
            </label>
        </div>
    </div>
    
    
    <div class="form-group text-right"> 
        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    </div>
</form>