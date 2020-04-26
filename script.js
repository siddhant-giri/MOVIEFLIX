let createButton = document.getElementById('create');
let createForm = document.getElementById('create-form');
let isCreateFormDisplaying = false;


createButton.onclick = () => {


	if (isCreateFormDisplaying == false) {
		createForm.style.display = "block";
        isCreateFormDisplaying=true;
	}
	else{
		createForm.style.display = "none";
		isCreateFormDisplaying = false;
	}
	
}



let updateButton = document.getElementById('update');
let updateForm = document.getElementById('update-form');
let isUpdateFormDisplaying = false;


updateButton.onclick = () => {


	if (isUpdateFormDisplaying == false) {
		updateForm.style.display = "block";
        isUpdateFormDisplaying=true;
	}
	else{
		updateForm.style.display = "none";
		isUpdateFormDisplaying = false;
	}
	
}

let deleteButton = document.getElementById('delete');
let deleteForm = document.getElementById('delete-form');
let isdeleteFormDisplaying = false;


deleteButton.onclick = () => {


	if (isdeleteFormDisplaying == false) {
		deleteForm.style.display = "block";
        isdeleteFormDisplaying=true;
	}
	else{
		deleteForm.style.display = "none";
		isdeleteFormDisplaying = false;
	}
	
}