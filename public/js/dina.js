$(document).ready(function(){
	//ji();
	//hola();
	setInterval(dino,1000);
});



function ji(){
	var dias = ["MONDAY", "TUESDAY", "Wednesday","Thursday","Friday","Saturday","Sunday"];
    $("#tabla tbody tr").each(function(){
    	var dia = $(this).find("td").eq(1).html();
        var cosui = $(this).find("td").eq(2).html();
    


        //alert(tipo);
        alert(cosui);

    });
}

//1=CURSO
//0=ACTIVIDAD


function hola(){
	var d = setInterval(dino(),1000);
	$("#tabla tbody tr").each(function(){
    	
        var tipo = $(this).find("#curso_tipo").val();
        var dia = $(this).find("td").eq(2).html();
        if (tipo == "1") {
        	alert(d);
        }

    });	
}

function dino()
{
    var dHoyes = new Date();
    var dHoyes = new Date();   

    var year= dHoyes.getFullYear();
    var m = function(){
    	var x = (dHoyes.getMonth()+1).toString();
    	var l =  x.length;
    	var r="";
    	if (l==1) {
    		r="0"+x;
    	}
    	else{
    		r=x;
    	}
    	return r;
    };
    var month = m();
    var day = dHoyes.getDate();

    var horas =  dHoyes.getHours();
    var minutos =dHoyes.getMinutes();
    var segundos =dHoyes.getSeconds();
    
    if(horas < 10) { horas = '0' + horas; }
    if(minutos < 10) { minutos = '0' + minutos; }
    if(segundos < 10) { segundos = '0' + segundos; }
    var hora = horas + ":"+ minutos + ":" + segundos;
    var tiempo = horas + ":"+ minutos;
    var fecha = year+"-"+month+"-"+day;

    $("#hora").html("<p>"+hora+"</p>").css("color","#E53D37");
    

    $("#tabla tbody tr").each(function(){
    	var cur =  $(this).find("td").eq(0).html();
    	var midia =  $(this).find("td").eq(1).html();
        var tipo = $(this).find("#curso_tipo").val();
        var tiempo = $(this).find("td").eq(2).html()+":"+"00";
        if (tipo=="1") {
        	if (tiempo == hora) {
        		alert(cur);
        	}
        }
        else if(tipo=="0"){
        	if(tiempo == hora && midia == fecha){
        		alert(cur);
        		
        	}
        }
		
        

    });	

}