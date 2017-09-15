# Info
* Edit page views/pages/start.php
* Related controller is at js/controller/quiz_controller.js
* Data loaded from test json api/questions.json

## Todo's:
- [ ] Handle preloading. Current page has fake preloader. Click the link to load MainScreen ui.
- [ ] Display questions correctly while maintaining $scope.CurrentIndex.
- [ ] Navigation handling while updating $scope.CurrentIndex which is the current active question index.
- [ ] Handle click selection. Store responses vs questions.
- [ ] Validate that a questin has been answered before proceeding.
- [ ] Validate when user clicks previous , not allowed if first page.
- [ ] Update progress bar based on the answered questions.
- [ ] Submit answers when last question is answered.
- [ ] Use a `<form>` tag to submit the data (NOT ajax this time) with action="api/process.php" method="POST" 
- [ ] Add `input[type="hidden"]` to store the answers.
- [ ] Format should be :
	questions: "id,id,id"
	responses: "id,id,id"
	`<input type="hidden" name="question" value="1,2,3" />`
	`<input type="hidden" name="questions" value="1,4,2" />`
	