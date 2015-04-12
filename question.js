var QuestionBox = {};
QuestionBox.preguntas = [];
QuestionBox.original = "";
QuestionBox.preguntasIndice = {};
QuestionBox.stopWords = [];

$(document).ready(function () {

    
    QuestionBox.original = $("#groupQuestion1").html();
    QuestionBox.loadData();

    $('#llquestionText').keyup(function () {
        if ($(this).val() !== "") {
            //Get string
            var string = $(this).val();
            
            //Find keywords
            var palabrasClave = PalabrasClave.obtenerPC(string, QuestionBox.stopWords); //TODO cargar stop_words desde la db

            //Find questions
            var usefulQuestionList = [];
            for (var i = 0; i < palabrasClave.length; i++) {
                var palabraClave = palabrasClave[i];
                if (QuestionBox.preguntasIndice[palabraClave]) {
                    var listaIdsPreguntas = QuestionBox.preguntasIndice[palabraClave];
                    for (var j = 0; j < listaIdsPreguntas.length; j++) {
                        var pregunta = QuestionBox.preguntas[listaIdsPreguntas[j]];
                        if (pregunta) {
                            usefulQuestionList.push(pregunta);
                        }
                    }
                }
            }

            //Show questions
            var output = "";
            for (var i = 0; i < usefulQuestionList.length; i++) {
                output += "<li class=\"llQuest\">";
                output += "    <dl class=\"question\" id=\""+usefulQuestionList[i].id+"\">";
                output += "        <dt class=\"title\">";
                output += "            <i class=\"vip-icon ch-icon-comment\"></i>";
                output += "            <label class=\"ch-hide\" title=\"Pregunta\">Pregunta:</label>";
                output += "        </dt>";
                output += "        <dd class=\"txt\">";
                output += "            <span>";
                output += usefulQuestionList[i].pregunta;
                output += "</span>";
                output += "<img class=\"plussign\" id=\"\" src=\"plus.png\" >";
                output += "            <a id=\"denouncequestion\" class=\"denouncequestion\" href=\"/denounce/show?itemId=MLU425198261&amp;type=QUES&amp;elementId=3512409448\" aria-label=\"ch-modal-34\" style=\"visibility: hidden;\">Denunciar</a>";
                output += "        </dd>";
                output += "        <dt class=\"answer\" style=\"display:none;\">";
                output += "            <i class=\"vip-icon ch-icon-comments\"></i>";
                output += "            <label class=\"ch-hide\" title=\"Respuesta\">Respuesta:</label>";
                output += "        </dt>";
                output += "        <dd class=\"txt answer-txt\" style=\"display:none;\">";
                output += "            <span>";
                output += usefulQuestionList[i].respuesta;
                output += "</span>";
                output += "            <span class=\"time\">- Hace 2 días.</span>";
                output += "            <a id=\"denouncequestion\" class=\"denouncequestion\" href=\"/denounce/show?itemId=MLU425198261&amp;type=ANSW&amp;elementId=3512409448\" aria-label=\"ch-modal-35\" style=\"visibility: hidden;\">Denunciar</a>";
                output += "        </dd>";
                output += "    </dl>";
                output += "</li>";
            }
            $("#groupQuestion1").html(output);
            
            //Cuando se haga un click en un signo de mas
            //Se llame a la funcion show answer
            $(".plussign").click(function(){
                QuestionBox.showAnswer(this);
            });
        } else {

            $("#groupQuestion1").html(QuestionBox.original);
        }
    });
    
});

QuestionBox.loadData = function () {
//    var pregunta1 = {};
//    pregunta1["pregunta"] = "hola tenes manteca azul de los alpes?";
//    pregunta1["respuesta"] = "no chanchos de guinea no tengo";
//    pregunta1["id"] = "ASPIFJEFRS";
//    QuestionBox.preguntas.push(pregunta1);
//
//    QuestionBox.preguntasIndice["manteca"] = [0, 1, 2];
//    QuestionBox.preguntasIndice["azul"] = [2, 3, 5];
    var stopWords = $("#stop_words").html().replace("\r\n","");
    QuestionBox.stopWords = $.parseJSON(stopWords);
    var preguntasVendedor = $("#preguntas_vendedor").html();
    var preguntasArray = $.parseJSON(preguntasVendedor);
    var preguntasDic = {};
    for(var i=0;i<preguntasArray.length;i++){
        preguntasDic[preguntasArray[i].id] = preguntasArray[i];
    }
    QuestionBox.preguntas = preguntasDic;
    var keywords = $("#keywords").html();
    QuestionBox.preguntasIndice = $.parseJSON(keywords);
};

QuestionBox.showAnswer = function(question){
    //Saber que pregunta fue abierta
    var id = $(question).parent().parent().attr("id");
    console.log("id "+id);
    
    //Mostrarla
    $(question).parent().parent().find(".answer-txt").css("display","block");
    $(question).parent().parent().find(".answer").css("display","block");
    
    //Hacer llamado ajax para incrementar en 1 su hit
    $.ajax({
        type: 'GET',
        url: '',
        data:{'pregunta_id':(id)},
        success: function(response){
            response = $.parseJSON(response);
            
        },
        error: function(){
        }
    });
};