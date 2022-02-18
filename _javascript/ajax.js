consultas();

function consultas() {
	var met = "GET";
	var url = "../_php/consultarDadosBD.php?acao=clientes";
	var id = "lista-Clientes";
	reqPag(met,url,id);
	setInterval(function(){reqPag(met,url,id);},60000);
	
	url = "../_php/consultarDadosBD.php?acao=contacto";
	id = "lista-contacto";
	reqPag(met,url,id);
	setInterval(function(){reqPag(met,url,id);},60000);
	
	url = "../_php/consultarDadosBD.php?acao=produto";
	id = "listaProd";
	reqPag(met,url,id);
	setInterval(function(){reqPag(met,url,id);},60000);
	
	url = "../_php/consultarDadosBD.php?acao=usuario";
	id = "listaUsu";
	reqPag(met,url,id);
	setInterval(function(){reqPag(met,url,id);},60000);
	
	url = "../_php/consultarDadosBD.php?acao=pedido";
	id = "lista-pedidos";
	reqPag(met,url,id);
	setInterval(function(){reqPag(met,url,id);},60000);
	
	url = "../_php/consultarDadosBD.php?acao=totPedidos";
	id = "total-pedidos";
	reqPag(met,url,id);
	setInterval(function(){reqPag(met,url,id);},120000);
	
	url = "../_php/consultarDadosBD.php?acao=valTot";
	id = "val-total";
	reqPag(met,url,id);
	setInterval(function(){reqPag(met,url,id);},120000);
	
	url = "../_php/consultarDadosBD.php?acao=totClientes";
	id = "tot-clientes";
	reqPag(met,url,id);
	setInterval(function(){reqPag(met,url,id);},120000);
	
	url = "../_php/consultarDadosBD.php?acao=totMen"; 
	id = "tot-Men";
	reqPag(met,url,id);
	setInterval(function(){reqPag(met,url,id);},120000);
}

/*function login(tipo){
	var met, url, id;
	if(tipo == "cliente") {
		met = "POST";
		url="../_php/consultarDadosBD.php?acao=secCliente";
		id="entrarCad"
		reqPag(met,url,id);

	} else 
		if(tipo == "usuario") {
		met = "POST";
		url="../_php/consultarDadosBD.php?acao=secAdmin";
		id="entrarCad"
		reqPag(met,url,id);
		}
}
*/

function reqPag(metodo,url,id) {
	var req;
	try {
		//para browsers: opera, firefox, safari ...
		req = new XMLHttpRequest();
	} catch(e) {
		//para IE
		try {
			req = new ActiveXObject("Msxml2.XMLHTTP");
		} catch(e) {
			try {
				req = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e) {
 				alert("Seu navegador não possui suporte Ajax!");
				return false;
			}
		}
	}
	req.onreadystatechange = function() {
		if (req.readyState == 4 && req.status == 200) {
			document.getElementById(id).innerHTML = req.responseText;
		} /*else
			document.getElementById(id).innerHTML = req.statusText;*/
	};
	req.open(metodo,url,true);
	req.send(null);
}

