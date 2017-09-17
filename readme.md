# Info
* Page of concern is `locahost/travellersplate/start`.
* Edit page views/pages/start.php
* Related controller is at js/controller/quiz_controller.js
* Data loaded from test json api/questions.json

## Todo's:
- [ ] Handle preloading. Current page has fake preloader. Click the link to load MainScreen ui.
- [ ] Adjust display just after clicks. UI seems broken.
- [x] Display questions correctly while maintaining $scope.CurrentIndex.
- [x] Navigation handling while updating $scope.CurrentIndex which is the current active question index.
- [x] Handle click selection. Store responses vs questions.
- [x] Validate that a questin has been answered before proceeding.
- [x] Validate when user clicks previous , not allowed if first page.
- [x] Update progress bar based on the answered questions.
- [x] Submit answers when last question is answered.
- [x] Use a `<form>` tag to submit the data (NOT ajax this time) with action="api/process.php" method="POST" 
- [x] Add `input[type="hidden"]` to store the answers.
- [x] Format should be :
	
	questions: "id,id,id"

	responses: "id,id,id"

	`<input type="hidden" name="question" value="1,2,3" />`
	
	`<input type="hidden" name="questions" value="1,4,2" />`