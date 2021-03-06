var app = app || {};

app.client = new function() {

    var _this = this;

    _this.create = function(){
        $('#myModal').modal();
        $('#myModal .modal-content').load("/client/create");
    };

    _this.store = function () {

        var data = $('#saveClient').serialize();
        var $request = $.ajax({
            type: "POST",
            dataType: "JSON",
            url: "/client/store",
            data: data
        });

        $request.done(function (data) {
            console.log(data);
            $(data).appendTo($("#clientList"));
            $('#myModal').modal('toggle');
            //TODO growl something
        });

        $request.fail(function (data) {
            //TODO use growl
            console.log("Something went wrong");
        })
    };

    _this.delete = function (e) {

        var $target = $( e.target );
        var $id = $target.data("id");

        var $request = $.ajax({
            type: "POST",
            dataType: "JSON",
            url: "/client/delete",
            data: {id:$id}
        });

        $request.done(function (data) {
            var $tr = $target.closest('tr');
            $tr.remove();
            //TODO growl something
        });

        $request.error(function (data) {
            //TODO use growl
            alert("Something went wrong");
        });
    };

    _this.edit = function (e) {
        var $target = $( e.target );
        var $id = $target.data("id");

        $('#myModal').modal();
        $('#myModal .modal-content').load("/client/edit/"+$id);
    };

    _this.update = function () {

        var data = $('#editClient').serialize();
        var $request = $.ajax({
            type: "POST",
            dataType: "JSON",
            url: "/client/update",
            data: data
        });

        $request.done(function (data) {
            var $target = $("tr").find(".edit[data-id='" + data["id"] + "']");
            var $tr = $target.closest('tr');
            $tr.replaceWith(data["view"]);
            $('#myModal').modal('toggle');
            //TODO growl something
        });

        $request.fail(function (data) {
                //TODO use growl
                alert("Something went wrong");
            }
        );
    };
};