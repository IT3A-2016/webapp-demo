
window.dashboard ={

    show: function(){

        $.get("dashboard.html",function(ret){
            $('.main').html(ret);
        });

    }

};

window.shelf = {

    show: function () {

        $.get("shelves/template.html",function(ret){
            $('.main').html(ret);
            shelf.getAll();
        });

    },
    getAll: function(){

        $.get("shelves/", function(ret){
            $("#shelves ul").html(ret);
        });

    },
    get: function(id){
        $("#book").remove();
        book.show({ShelfID: id});

    },
    create: function(){

        var name = prompt("Shelf name");

        $.post("shelves/create.php",{Name: name},function(ret){
           $("#shelves ul").append(ret);
        });

    }


};




window.book = {

    show: function (query) {

        $("#books").remove();
        $.get("books/template.php?" + $.param(query),function(ret){
            $('.main').append(ret);
            book.getAll(query);
        });

    },
    getAll: function(query){

        $.get("books/?" + $.param(query), function(ret){
            $("#books ul").html(ret);
        });

    },
    get: function(id){

        var query = {ID: id};

        $("#book").remove();
        $.get("book?" + $.param(query), function(ret){
            console.log(ret);
            $(".main").append(ret);
        });

    },
    create: function(shelfID){

        var name = prompt("Book name");
        var author = prompt("Author");
        var content = prompt("Content");

        $.post("books/create.php",{Name: name, Author: author, Content: content, ShelfID: shelfID},function(ret){
            $("#books ul").append(ret);
        });

    }


};