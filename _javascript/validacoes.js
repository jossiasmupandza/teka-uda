function validarFormContacto() {
	if(!validarCampoObrig("cNomeC"))
		return false;
	else 
		if(!validarCampoObrig("cMailC"))
			return false;
		else 
			if(!validarCampoObrig("cTelC"))
				return false;
			else 
				if(!validarCampoObrig("cMensagem"))
					return false;
				else			
					if(!validarString("cNomeC",3,50,"Nome")) 
						return false;
					else
						if(!validarString("cMensagem",3,255,"Mensagem")) 
							return false;
						else
							if(!validarEmail("cMailC"))
								return false
							else 
								return true;	
							
}

function validarFormCadastro() {
	if(!validarCampoObrig("cNomeCad"))
		return false;
	else 
		if(!validarCampoObrig("cMailCad"))
			return false;
		else 
			if(!validarCampoObrig("cTelF"))
				return false;
			else 
				if(!validarCampoObrig("cSenhaCad"))
					return false;
				else
					if(!validarCampoObrig("cConSenha"))
						return false;
					else
						if(!validarCkeckBox("cTermosF"))
							return false;
						else
							if(!validarString("cNomeCad",3,50,"Nome")) 
								return false;
							else
								if(!validarEmail("cMailCad"))
									return false;
								else
									if(!validarString("cSenhaCad",4,15,"Senha")) 
										return false;
									else
										if(!confirmarSenha("cSenhaCad","cConSenha"))
											return false;
										else 
											return true;
										
}

function validarReCSenha() {
	if(!validarCampoObrig("cRecSenha"))
		return false;
	else
		if(!validarEmail("cRecSenha"))
			return false;
		else
			return true;
}

function validarAcesso() {
	if(!validarCampoObrig("cMailEnt"))
		return false;
	else 
		if(!validarCampoObrig("cSenhaEnt"))
			return false;
		else
			if(!validarEmail("cMailEnt"))
				return false;
			else
				if(!validarString("cSenhaEnt",4,15,"Senha")) 
					return false;
				else
					return true;
}	

function validarLoginAdmin() {
	if(!validarCampoObrig("cUsuario"))
		return false;
	else
		if(!validarCampoObrig("cSenha"))
			return false;
		else
			if(!validarString("cUsuario",3,20,"Nome de Usuario")) 
				return false;
			else
				if(!validarString("cSenha",4,15,"Senha")) 
					return false;
				else
					return true;
}

function validarFormCadUsuarios() {
	if(!validarCampoObrig("cNomeCad"))
		return false;
	else 
		if(!validarCampoObrig("cUsuario"))
			return false;
		else 
			if(!validarCampoObrig("cMailCad"))
				return false;
			else 
				if(!validarCampoObrig("cSenhaCad"))
					return false;
				else 
					if(!validarCampoObrig("cConSenha"))
						return false;
					else
						if(!validarString("cNomeCad",3,60,"Nome")) 
							return false;
						else
							if(!validarString("cUsuario",3,20,"Usuario")) 
							return false;
							else
								if(!validarEmail("cMailCad"))
									return false;
								else
									if(!validarString("cSenhaCad",4,15,"Senha")) 
										return false;
									else
										if(!confirmarSenha("cSenhaCad","cConSenha"))
											return false;
										else 
											return true;
}

function validarFormCadProduto() {
	if(!validarCampoObrig("cNomeCad"))
		return false;
	else 
		if(!validarCampoObrig("cPreco"))
			return false;
		else
			if(!validarString("cNomeCad",3,60,"Nome")) 
				return false;
			else
				return true;
							
}	


function validarCampoObrig(id) {
	var val = document.getElementById(id).value;
	if((val == null) || (val == " ") || (val == /^\s+$/.test(val))){
		alert("Faltou prencher alguma informação, verifique todos os campos!");
		return false;
	}
	else
		return true;
}

function validarString(id, min, max, str) {
	var val = document.getElementById(id).value;
	if(val.length < min || val.length > max){
		alert(str+" deve ter entre "+min+" e "+max+" caracteres!");
		return false;
	}
	else
		return true;
}

function validarEmail(id){
	var val = document.getElementById(id).value;
	if(val.indexOf("@") == -1 || val.indexOf(".") == -1){
		alert("E-mail invalido, verifique o e-mail introduzido!");
		return false;
	}
	else
		return true;
}

function validarCkeckBox(id) {
	var val = document.getElementById(id);
	if(!val.checked) {
		alert("Têm que concordar com os termos de uso, para se cadastrar!");
		return false;
	}
	else
		return true;
}

function confirmarSenha(idSen,idSenCon) {
	var senha = document.getElementById(idSen).value;
	var senCon = document.getElementById(idSenCon).value;
	if(senha == senCon) 
		return true;
	else {
		alert("Senha de confirmação invalida, volte a introduzi-la!");
		return false;
	}
}