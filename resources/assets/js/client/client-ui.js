$(function(){
    $(".addClient").click(function(e){
        e.preventDefault();
        console.log("add client");
        app.client.create();
    });

    //btn-save no existe cuando cargamos la pagina por lo que tenemos que hacer el listening en un elemento que exista
    $("#myModal").on('click', '.btn-save', function(e)
    {
        e.preventDefault();
        app.client.store();
    });

    $("#clientList").on('click', '.delete', function(e)
    {
        e.preventDefault();
        app.client.delete(e);
    });

    $("#clientList").on('click', '.edit', function(e)
    {
        e.preventDefault();
        app.client.edit(e);
    });

    $("#myModal").on('click', '.btn-edit', function(e)
    {
        e.preventDefault();
        app.client.update();
    });
});