const navLinks = document.querySelectorAll('.nav-links a'),
    noteListItems=document.querySelector('.note-list-items'),
    createBtn=document.querySelector('.create-btn'),
    create_edit_note=document.querySelector('.create-edit-note'),
    note_list= document.querySelector('.note-list'),
    create_edit_form = document.querySelector(".create-edit-form")
    create_edit_btn = document.querySelector(".create-edit-btn"),
    noteItems="",
    profileCloseBtn=document.querySelector('.modal-overlay span')
    profileSection=document.querySelector('.modal-overlay'),
    edit_btn = document.querySelector('.display-details span.edit'),
    profileDetails=document.querySelector('.display-details'),
    editProfileDetails=document.querySelector('.edit-details'),
    cancelProfile_btn=document.querySelector('.edit-details span.cancel');

navLinks[3].addEventListener("click",()=>{//The log out button
    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'inc/logout.inc.php', true);
    xhr.onreadystatechange = ()=>{
        if(xhr.readyState==4 && xhr.status == 200 ){
            let data = xhr.response;
            if(data == 'success') 
                location.href = "index.php";
        }
    }
    xhr.send();
});

edit_btn.addEventListener('click',()=>{
    if (editProfileDetails.classList.contains('hidden')) {
        editProfileDetails.classList.remove('hidden');
        profileDetails.classList.add('hidden');
        edit_btn.classList.add('hidden');
    }
});

cancelProfile_btn.addEventListener('click',()=>{
    if (profileDetails.classList.contains('hidden')) {
        editProfileDetails.classList.add('hidden');
        profileDetails.classList.remove('hidden');
        edit_btn.classList.remove('hidden');
    }
});

profileCloseBtn.addEventListener('click',()=>{
    profileSection.classList.remove('display');
})

navLinks[2].addEventListener('click',()=>{
    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'inc/getfavnotes.inc.php', true);
    xhr.onreadystatechange = ()=>{
        if(xhr.readyState==4 && xhr.status == 200 ){
            let data =JSON.parse(xhr.response);
            if(data) {
                let notesList ="";
                for (let index = 0, len = data.length; index < len; index++) {
                    const element = data[index];
                    notesList += 
                    `
                    <a href="#" id="${element.note_id}">
                        <li>
                            <h1>
                                ${element.note_title}
                                <span>
                                    <i class="fas fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fas fa-trash"></i>
                                </span>
                            </h1>
                            <p>${element.note_content}</p>
                        </li>
                    </a>
                    `
                }
                noteListItems.innerHTML = notesList;
                noteItems = document.querySelectorAll('.note-list-items a');

            }
            else
            noteListItems.innerHTML = "No notes to display!";
        }
    }
    xhr.send();

    if(note_list.classList.contains('hidden')){
        create_edit_note.classList.add('hidden');
        createBtn.classList.remove('hidden');
        note_list.classList.remove('hidden');
    }
});

navLinks[0].addEventListener('click',()=>{
    profileSection.classList.add('display');
});


   
   

navLinks[1].addEventListener('click',getnotes);
document.addEventListener('load',getnotes());
function getnotes(){
    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'inc/getnotes.inc.php', true);
    xhr.onreadystatechange = ()=>{
        if(xhr.readyState==4 && xhr.status == 200 ){
            let data =JSON.parse(xhr.response);
            if(data) {
                let notesList ="";
                for (let index = 0, len = data.length; index < len; index++) {
                    const element = data[index];
                    notesList += 
                    `
                    <a href="#" id="${element.note_id}">
                        <li>
                            <h1>
                                ${element.note_title}
                                <span>
                                    <i class="far fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fas fa-trash"></i>
                                </span>
                            </h1>
                            <p>${element.note_content}</p>
                        </li>
                    </a>
                    `
                }
                noteListItems.innerHTML = notesList;
                noteItems = document.querySelectorAll('.note-list-items a');
                noteItems.forEach(element => {
                    element.addEventListener('click',(e)=>{
                        let noteid = e.target.parentElement.parentElement.id;
                        let xhr = new XMLHttpRequest();
                        xhr.open('GET', `inc/getnote.inc.php?id=${noteid}`, true);
                        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        xhr.onreadystatechange = ()=>{
                            if(xhr.readyState==4 && xhr.status == 200 ){
                                let data = JSON.parse(xhr.response);
                                console.log(data);
                            }
                        }
                        xhr.send();
                    
                    });
                });

            }
            else
            noteListItems.innerHTML = "No notes to display!";
        }
    }
    xhr.send();

    if(note_list.classList.contains('hidden')){
        create_edit_note.classList.add('hidden');
        createBtn.classList.remove('hidden');
        note_list.classList.remove('hidden');
        // create_edit_form.reset();
    }
    
}
createBtn.addEventListener('click',()=>{
    if(create_edit_note.classList.contains('hidden')){
        create_edit_note.classList.remove('hidden');
        note_list.classList.add('hidden');
        createBtn.classList.add('hidden')
    }
})

create_edit_form.addEventListener("submit",(e)=>{
    e.preventDefault();
});


create_edit_btn.addEventListener('click',()=>{

    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'inc/createnote.inc.php', true);
    xhr.onreadystatechange = ()=>{
        if(xhr.readyState==4 && xhr.status == 200 ){
            let data = xhr.response;
            if(data == 'success') 
                alert('Note created');
            else
                alert(data);
        }
    }
    let formData= new FormData(create_edit_form);
    xhr.send(formData);
});

