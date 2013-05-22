function StoryCtrl($scope) {
  $scope.stories = [
    {
    	heading : 'Erste Überlegung',
    	date : 'Juni 1910', 
    	text : "Erste Überlegungen zum Bau eines größeren Dampfschiffes auf dem Tanganjika-See gab es allerdings bereits im Juni 1910, als die Kolonialverwaltung sich bei der Eisenbahnverwaltung in Tabora über die Ausmaße britischer Dampfer auf dem Viktoria-See erkundigte und um nähere Informationen über sinnvolle Größen entsprechender Einheiten auf dem Tanganjika-See bat." 
    }, {
    	heading : 'Zweite Überlegung',
    	date : 'März 1911', 
    	text : "Hierbei wurde zunächst der Dieselantrieb als zukunftsweisende Technologie bevorzugt, speziell vor dem Hintergrund vielversprechender Versuche der Treibstoffgewinnung aus verschiedenen in der Kolonie vorhandenen Pflanzen bzw. deren Früchten, wie z. B. der Palme oder der Erdnußpflanze" 
    }, {
    	heading : 'Graf Götzen',
    	date : '1912', 
    	text : "Text 3" 
    }, {
    	heading : 'Dampfantrieb',
    	date : '1914', 
    	text : "Text 4" 
    } ];
}

/*

  $scope.layoutDone = function() {
  	console.log('done');
	    $timeout(function() { 
	    	
	    	
	     }, 100); // wait...
	}
 
 
  $scope.addTodo = function() {
    $scope.stories.push({text:$scope.todoText, done:false});
    $scope.todoText = '';
  };
 
  $scope.remaining = function() {
    var count = 0;
    angular.forEach($scope.stories, function(todo) {
      count += todo.done ? 0 : 1;
    });
    return count;
  };
 
  $scope.archive = function() {
    var oldstories = $scope.stories;
    $scope.stories = [];
    angular.forEach(oldstories, function(todo) {
      if (!todo.done) $scope.stories.push(todo);
    });
  };
  */