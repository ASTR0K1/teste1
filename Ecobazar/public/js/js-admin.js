const allSidemenu = document.querySelectorAll('#barra-lateral .menu-lateral.topo li a');

allSidemenu.forEach (item=> {
    const li = item.parentElement;

    item.addEventListener('click', function () {
        allSidemenu.forEach(i=> {
            i.parentElement.classList.remove('active');
        })
        li.classList.add('active');
    })
});




//alterar barra-lateral
const menuBar = document.querySelector('#conteudo nav .bx.bx-menu');
const sidebar = document.getElementById('barra-lateral');

menuBar.addEventListener('click', function (){
    sidebar.classList.toggle('hide');
})







const searchButton = document.querySelector('#conteudo nav form .form-input button');
const searchButtonIcon = document.querySelector('#conteudo nav form .form-input button .bx');
const searchForm = document.querySelector('#conteudo nav form');

searchButton.addEventListener('click', function (e) {
    if(window.innerWidth < 576) {
        e.preventDefault();
        searchForm.classList.toggle('show');
        if(searchForm.classList.contains('show')) {
            searchButtonIcon.classList.replace('bx-search', 'bx-bx');
        } else {
            searchButtonIcon.classList.replace('bx-bx', 'bx-search');
        }
    }
})





if(window.innerWidth < 768) {
    sidebar.classList.add('hide');
} else if(window.innerWidth > 576) {
    searchButtonIcon.classList.replace('bx-bx', 'bx-search');
    searchForm.classList.remove('show');
}


window.addEventListener('resize', function () {
    if(this.innerWidth > 576) {
        searchButtonIcon.classList.replace('bx-bx', 'bx-search');
        searchForm.classList.remove('show');
}
})
