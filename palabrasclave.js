var PalabrasClave = {};

//$(document).ready(function() {
//    //console.log(PalabrasClave.limpiarString("Iajúùuuüaaaa!!! Ay mujéeeeer?"));
//    var string = "Hola, qué tal? Quería saber si tienen en color rojo.. Gracias";
//    var stopWords = ["hola","que","tal","queria","saber","si","tienen","en",
//        "gracias"];
//    
//    var array = PalabrasClave.obtenerPC(string, stopWords);
//    
//    for(var i = 0, j = array.length; i < j; i++) {
//        console.log(array[i]);
//    }
//});

PalabrasClave.limpiarString = function(string) {
    var from = "ÃÀÁÄÂÈÉËÊÌÍÏÎÒÓÖÔÙÚÜÛãàáäâèéëêìíïîòóöôùúüû",
            to = "AAAAAEEEEIIIIOOOOUUUUaaaaaeeeeiiiioooouuuu",
            mapping = {};

    for (var i = 0, j = from.length; i < j; i++) {
        mapping[from.charAt(i)] = to.charAt(i);
    }

    var ret = [];
    for (var i = 0, j = string.length; i < j; i++) {
        var c = string.charAt(i);
        if (mapping.hasOwnProperty(string.charAt(i))) {
            ret.push(mapping[c]);
        } else {
            ret.push(c.replace(/[!~@#$^*()_+=[\]{}|\\,.¿?:-]/, ""));
        }
    }
    return ret.join('').toLowerCase();
};

PalabrasClave.quitarBasura = function(array, trash) {
    var res = [];
    for(var i = 0, j = array.length; i < j; i++) {
        var e = trash.indexOf(array[i]);
        if(e === -1) {
            res.push(array[i]);
        }
    }
    return PalabrasClave.quitarDuplicados(res);
}

PalabrasClave.quitarDuplicados = function(array) {
    var dic = {};
    var res = [];
    
    for(var i = 0, j = array.length; i < j; i++) {
        if(!dic[array[i]]) {
            dic[array[i]] = true;
            res.push(array[i]);
        }
    }
    
    return res;
}

PalabrasClave.obtenerPC = function(string, stopWords) {
    var string = PalabrasClave.limpiarString(string); 
    var array = string.split(" "); 
    
    return PalabrasClave.quitarBasura(array, stopWords);
}