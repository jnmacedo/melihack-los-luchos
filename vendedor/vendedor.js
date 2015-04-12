var Vendedor = {};
Vendedor.respondidas = [];
Vendedor.juegan = [];

$(document).ready(function () {
    //Vendedor.cargarSelect();
    
    $("#questionSelector").change(function () {
        var selected = $(this).val();
        if (selected !== '') {
            var pregunta = Vendedor.respondidas[selected];
            Vendedor.juegan.push(pregunta);

            Vendedor.mostrarPreguntas();
        }
    });
    
});

Vendedor.mostrarPreguntas = function () {
    var output = "";
    for (var i = 0; i < Vendedor.juegan.length; i++) {
        output += "- ";
        output += Vendedor.juegan[i].pregunta;
        output += " <a href=\"\" class=\"deleteQuestion\" id=\"";
        output += Vendedor.juegan[i].id;
        output += "\">(x)</a>";
    }
    $("#questionList").html(output);
    
    $("a .deleteQuestion").click(function () {
        var id = $(this).attr("id");
        var pregunta = Vendedor.respondidas[id];
        var pos = Vendedor.juegan.indexOf(pregunta);
        Vendedor.juegan.splice(pos, 1);
        Vendedor.mostrarPreguntas();
        return false;
    });
};

Vendedor.cargarSelect = function () {
    var output = "";
    for (var i = 0; i < Vendedor.respondidas.length; i++) {
        output += "<option value=\""+Vendedor.juegan[i].id+"\">"+Vendedor.juegan[i].pregunta+"</option>\n";
    }
    $("#questionSelector").html(output);
};