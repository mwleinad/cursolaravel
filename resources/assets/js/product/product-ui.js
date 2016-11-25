$(function(){

    $(".addProduct").click(function(e){
        e.preventDefault();
        app.product.create();
    });

    //btn-save no existe cuando cargamos la pagina por lo que tenemos que hacer el listening en un elemento que exista
    $("#myModal").on('click', '.btn-save', function(e)
    {
        e.preventDefault();
        app.product.store();
    });

    $("#productList").on('click', '.delete', function(e)
    {
        e.preventDefault();
        app.product.delete(e);
    });

    $("#productList").on('click', '.edit', function(e)
    {
        e.preventDefault();
        app.product.edit(e);
    });

    $("#myModal").on('click', '.btn-edit', function(e)
    {
        e.preventDefault();
        app.product.update();
    });

});