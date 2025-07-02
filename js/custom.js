const ShowCategory = () =>{
    if(document.getElementById('submenu').style.display == 'block'){
        document.getElementById('submenu').style.display = 'none';
        document.getElementById('drop').className = 'fas fa-angle-right';
    }else{
        document.getElementById('submenu').style.display = 'block';
        document.getElementById('drop').className = 'fas fa-angle-down';
    }
}

const validateCategory = () =>{
    // let category = document.getElementById('category');
    // let image = document.getElementById('image');

    // if(!category.value){
    //     alert("Enter Category !");
    //     category.focus();
    //     return false;
    // }else if(!image.value){
    //     alert("Uplaod Image !");
    //     image.focus();
    //     return false;
    // }

    // array

    const fields = [
        {id:'category', message:'Enter Category'},
        {id:'image', message:'Upload Image'}
    ];
    for(let field of fields){
        let element = document.getElementById(field.id);
        if(!element.value.trim()){
            alert(field.message);
            element.focus();
            return false;
        }
    }
    return true;
}