const dialogFormClose = (getDialog)=>{
    const closeIcon = getDialog.querySelector('.o-dialog-form__close-icon');

    closeIcon.addEventListener('click', ()=>{
        getDialog.close()
    })

    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape") {
           getDialog.close();
        }
    });

}

const dialogFormOpen = (getDialog)=>{
    setTimeout(()=>{
        getDialog.showModal()
    }, 3000)
}



window.addEventListener('load', ()=>{
    const getDialog = document.querySelector('.o-dialog-form');

    if(getDialog){
        dialogFormClose(getDialog);
        dialogFormOpen(getDialog)
    };
})