window.addEventListener('DOMContentLoaded', event => {
    // Simple-DataTables
    // https://github.com/fiduswriter/Simple-DataTables/wiki

    const datatablesSimple = document.getElementById('datatablesSimple');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple);
    }
});

window.addEventListener('DOMContentloaded', event =>
{
    const datatableTest=document.getElementById("datatablesTest");
    if(datatableTest){
        new simpleDatatables.DataTable(datatableTest);
    }

});