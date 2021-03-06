var app = app || {};

app.product = new function() {

    //---------- PRIVATE VARS ----------

    var _this = this;

    _this.create = function () {
        $('#myModal').modal();
        $('#myModal .modal-content').load("/product/create");
    };

    _this.store = function () {

        var data = $('#saveProduct').serialize();
        $.ajax({
            type: "POST",
            dataType: "JSON",
            url: "/product/store",
            data: data,
            success: function (data) {
                $(data).appendTo($("#productList"));
                $('#myModal').modal('toggle');
                //TODO growl something
            },
            error: function (data) {
                //TODO use growl
                alert("Something went wrong");
            }
        });
    };

    _this.delete = function (e) {

        var $target = $( e.target );
        var $id = $target.data("id")

        $.ajax({
            type: "POST",
            dataType: "JSON",
            url: "/product/delete",
            data: {id:$id},
            success: function (data) {
                var $tr = $target.closest('tr');
                $tr.remove();
                //TODO growl something
            },
            error: function (data) {
                //TODO use growl
                alert("Something went wrong");
            }
        });
    };

    _this.edit = function (e) {
        var $target = $( e.target );
        var $id = $target.data("id")

        $('#myModal').modal();
        $('#myModal .modal-content').load("/product/edit/"+$id);
    };

    _this.update = function () {

        var data = $('#editProduct').serialize();
        $.ajax({
            type: "POST",
            dataType: "JSON",
            url: "/product/update",
            data: data,
            success: function (data) {
                var $target = $("tr").find(".edit[data-id='" + data["id"] + "']");
                var $tr = $target.closest('tr');
                $tr.replaceWith(data["view"]);
                $('#myModal').modal('toggle');
                //TODO growl something
            },
            error: function (data) {
                //TODO use growl
                alert("Something went wrong");
            }
        });
    };
};