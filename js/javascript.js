function imprime	() {
    window.print();
}

function validaRadio() {
  if (document.form1.opcao[0].checked == false 
    && document.form1.opcao[1].checked == false) {
    alert('Por favor, selecione o tipo de acesso.');
    return false;
  }
  return true;
}
function validaEscolaeSemestre() {
  if (document.form1.escola[0].checked == false 
  && document.form1.escola[1].checked == false 
  || document.form1.semestre[0].checked == false 
  && document.form1.semestre[1].checked == false) {
    alert('Por favor, informe o SEMESTRE e tipo de ESCOLARIDADE.');
    return false;
  }
  return true;
}

			

function logout() {

if (confirm("Deseja sair da Central do Aluno ?")) {

location.href="sair.php";}

}


function maskIt(w,e,m,r,a){
        
        // Cancela se o evento for Backspace
        if (!e) var e = window.event
        if (e.keyCode) code = e.keyCode;
        else if (e.which) code = e.which;
        
        // Variáveis da função
        var txt  = (!r) ? w.value.replace(/[^\d]+/gi,'') : w.value.replace(/[^\d]+/gi,'').reverse();
        var mask = (!r) ? m : m.reverse();
        var pre  = (a ) ? a.pre : "";
        var pos  = (a ) ? a.pos : "";
        var ret  = "";

        if(code == 9 || code == 8 || txt.length == mask.replace(/[^#]+/g,'').length) return false;

        // Loop na máscara para aplicar os caracteres
        for(var x=0,y=0, z=mask.length;x<z && y<txt.length;){
                if(mask.charAt(x)!='#'){
                        ret += mask.charAt(x); x++;
                } else{
                        ret += txt.charAt(y); y++; x++;
                }
        }
        
        // Retorno da função
        ret = (!r) ? ret : ret.reverse()        
        w.value = pre+ret+pos;
}


// Novo método para o objeto 'String'
String.prototype.reverse = function(){
        return this.split('').reverse().join('');
};


/*! MENU Visit www.menucool.com for source code, other menu scripts and web UI controls
*  Please keep this notice intact. Thank you. */

var sse3 = function () {
    var speed = 8;
    return {
        initMenu: function () {
            var m = document.getElementById('sses3');
            if (!m) return;
            m.style.width = m.getElementsByTagName("ul")[0].offsetWidth + 1 + "px";
            var lis = m.getElementsByTagName('li');
            var a = m.getElementsByTagName("a");
            var url = document.location.href.toLowerCase();
            var k = -1;
            var nLength = -1;
            var slip = [];

            for (i = 0; i < a.length; i++) {
                if (url.indexOf(a[i].href.toLowerCase()) != -1 && a[i].href.length > nLength) {
                    k = i;
                    nLength = a[i].href.length;
                }
            }
            if (k == -1 && /:\/\/(?:www\.)?[^.\/]+?\.[^.\/]+\/?$/.test) {
                for (var i = 0; i < a.length; i++) {
                    if (a[i].getAttribute("maptopuredomain") == "true") {
                        k = i;
                        break;
                    }
                }
                if (k == -1 && a[0].getAttribute("maptopuredomain") != "false")
                    k = 0;
            }

            for (var i = 0; i < lis.length; i++) {

                slip[i] = document.createElement('div');
                slip[i].className = 'slip';
                slip[i].style.width = lis[i].offsetWidth + "px";
                slip[i].style.height = lis[i].offsetHeight + "px";
                slip[i].style.left = lis[i].offsetWidth + 1 + "px"; // +1 to eliminate an gap color in IE5 or No DOCTYPE
                lis[i].appendChild(slip[i]);

                lis[i].onmouseover = function () {
                    clearInterval(this.t);
                    sse3.move(this, 0);
                };
                lis[i].onmouseout = function () {
                    clearInterval(this.t);
                    sse3.move(this, 1);
                }
            }
            if (k > -1) {
                slip[k].style.display = 'none';
                lis[k].className = 'current';
            }
        },
        move: function (li, direction) {
            var tabs = li.childNodes;
            var slipobj = tabs[tabs.length - 1];
            if (direction == 0) {
                li.t = setInterval(function () { if (slipobj.offsetLeft <= 0) { clearInterval(li.t); } else { sse3.moveLeft(slipobj); } }, 15);
            }
            else {
                li.t = setInterval(function () { if (slipobj.offsetLeft >= slipobj.offsetWidth) { clearInterval(li.t); } else { sse3.moveRight(slipobj); } }, 15);
            }
        },
        moveLeft: function (obj) {
            if (obj.offsetLeft < 3) {
                obj.style.left = "0px";
            }
            else {
                obj.style.left = obj.offsetLeft-Math.ceil(obj.offsetLeft / speed) + "px";
            }
        },
        moveRight: function (obj) {
            obj.style.left = obj.offsetLeft + 3 + "px";
        }
    };
} ();

if (window.addEventListener) {
    window.addEventListener("load", sse3.initMenu, false);
}
else if (window.attachEvent) {
    window.attachEvent("onload", sse3.initMenu);
}
else {
    window["onload"] = sse3.initMenu;
}



//Este codigo é do calendario ////////////////////////
function maxDays(mm, yyyy){
var mDay;
	if((mm == 3) || (mm == 5) || (mm == 8) || (mm == 10)){
		mDay = 30;
  	}
  	else{
  		mDay = 31
  		if(mm == 1){
   			if (yyyy/4 - parseInt(yyyy/4) != 0){
   				mDay = 28
   			}
		   	else{
   				mDay = 29
  			}
		}
  }
return mDay;
}
function changeBg(id){
	if (eval(id).style.backgroundColor != "yellow"){
		eval(id).style.backgroundColor = "yellow"
	}
	else{
		eval(id).style.backgroundColor = "#000000"
	}
}
function writeCalendar(){
var now = new Date
var dd = now.getDate()
var mm = now.getMonth()
var dow = now.getDay()
var yyyy = now.getFullYear()
var arrM = new Array("January","February","March","April","May","June","July","August","September","October","November","December")
var arrY = new Array()
	for (ii=0;ii<=4;ii++){
		arrY[ii] = yyyy - 2 + ii
	}
var arrD = new Array("Sun","Mon","Tue","Wed","Thu","Fri","Sat")

var text = ""
text = "<form name=calForm>"
text += "<table bordercolor='black' bgcolor='white'>" //borda do calendario todo
text += "<tr><td>"
text += "<table width=100%><tr>"
text += "<td align=left>"
text += "<select name=selMonth onChange='changeCal()'>"
	for (ii=0;ii<=11;ii++){
		if (ii==mm){
			text += "<option value= " + ii + " Selected>" + arrM[ii] + "</option>"
		}
		else{
			text += "<option value= " + ii + ">" + arrM[ii] + "</option>"
		}
	}
text += "</select>"
text += "</td>"
text += "<td align=right>"
text += "<select name=selYear onChange='changeCal()'>"
	for (ii=0;ii<=4;ii++){
		if (ii==2){
			text += "<option value= " + arrY[ii] + " Selected>" + arrY[ii] + "</option>"
		}
		else{
			text += "<option value= " + arrY[ii] + ">" + arrY[ii] + "</option>"
		}
	}
text += "</select>"
text += "</td>"
text += "</tr></table>"
text += "</td></tr>"
text += "<tr><td>"
text += "<table >" //aqui e a borda dos dias do calendario
text += "<tr>"
	for (ii=0;ii<=6;ii++){
		text += "<td align=center><span class=label>" + arrD[ii] + "</span></td>"
	}
text += "</tr>"
aa = 0
	for (kk=0;kk<=5;kk++){
		text += "<tr>"
		for (ii=0;ii<=6;ii++){
			text += "<td align=center><span id=sp" + aa + " onClick='changeBg(this.id)'>1</span></td>"
			aa += 1
		}
		text += "</tr>"
	}
text += "</table>"
text += "</td></tr>"
text += "</table>"
text += "</form>"
document.write(text)
changeCal()
}
function changeCal(){
var now = new Date
var dd = now.getDate()
var mm = now.getMonth()
var dow = now.getDay()
var yyyy = now.getFullYear()
var currM = parseInt(document.calForm.selMonth.value)
var prevM
	if (currM!=0){
		prevM = currM - 1
	}
	else{
		prevM = 11
	}
var currY = parseInt(document.calForm.selYear.value)
var mmyyyy = new Date()
mmyyyy.setFullYear(currY)
mmyyyy.setMonth(currM)
mmyyyy.setDate(1)
var day1 = mmyyyy.getDay()
	if (day1 == 0){
		day1 = 7
	}
var arrN = new Array(41)
var aa
	for (ii=0;ii<day1;ii++){
		arrN[ii] = maxDays((prevM),currY) - day1 + ii + 1
	}
	aa = 1
	for (ii=day1;ii<=day1+maxDays(currM,currY)-1;ii++){
		arrN[ii] = aa
		aa += 1
	}
	aa = 1
	for (ii=day1+maxDays(currM,currY);ii<=41;ii++){
		arrN[ii] = aa
		aa += 1
	}
	for (ii=0;ii<=41;ii++){
		eval("sp"+ii).style.backgroundColor = "#white"
	}
var dCount = 0
	for (ii=0;ii<=41;ii++){
		if (((ii<7)&&(arrN[ii]>20))||((ii>27)&&(arrN[ii]<20))){
			eval("sp"+ii).innerHTML = arrN[ii]
			eval("sp"+ii).className = "c3"
		}
		else{
			eval("sp"+ii).innerHTML = arrN[ii]
			if ((dCount==0)||(dCount==6)){
				eval("sp"+ii).className = "c2"
			}
			else{
				eval("sp"+ii).className = "c1"
			}
			if ((arrN[ii]==dd)&&(mm==currM)&&(yyyy==currY)){
				eval("sp"+ii).style.backgroundColor="#ff0000" // cor de fundo do dia atual
			}
		}
	dCount += 1
		if (dCount>6){
			dCount=0
		}
	}
}


//ABAXco o grafico 3D

(function GRAFICO() {
    $('#container').highcharts({
        chart: {
            type: 'column',
            margin: 75,
            options3d: {
				enabled: true,
                alpha: 10,
                beta: 25,
                depth: 70
            }
        },
        title: {
            text: 'Desempenho do simulado em cada disciplina'
        },
        subtitle: {
            text: ''
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        xAxis: {
            categories: ['Matematica','Química','Físisca','Gramática','Literatura','Biologia','Histótia','Geografia','Inglês','Espanhol','Redação','Sociologia']
        },
        yAxis: {
            opposite: true
        },
        series: [{
            name: 'Disciplinas',
            data: [8, 4, 2, 5, 7, 4, 6, 3, 5, 7, 2, 5,  ]
        }]
    });
});
(function GRAFICOGERAL() {
    $('#container2').highcharts({
        chart: {
            type: 'column',
            margin: 75,
            options3d: {
				enabled: true,
                alpha: 10,
                beta: 25,
                depth: 70
            }
        },
        title: {
            text: 'Desempenho geral'
        },
        subtitle: {
            text: 'Média'
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        xAxis: {
            categories: ['SALA','VOCÊ']
        },
        yAxis: {
            opposite: true
        },
        series: [{
            name: 'MÉDIA GERAL',
            data: [38, 43]
        }]
    });
});

