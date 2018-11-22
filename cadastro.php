<!DOTYPE html>
<html>
	<head>
		<title> Cadastro </title>
		<link rel="stylesheet" href="css/cadastro.css">
		
		
			<!-- Adicionando Javascript -->
    <script type="text/javascript" >
								
								// MASCARA CEP
						function limpa_formulário_cep() {
								//Limpa valores do formulário de cep.
								document.getElementById('rua').value=("");
								document.getElementById('bairro').value=("");
								//document.getElementById('cidade').value=("");
							   // document.getElementById('uf').value=("");
							   //document.getElementById('ibge').value=("");
						}

						function meu_callback(conteudo) {
							if (!("erro" in conteudo)) {
								//Atualiza os campos com os valores.
								document.getElementById('rua').value=(conteudo.logradouro);
								document.getElementById('bairro').value=(conteudo.bairro);
							   // document.getElementById('cidade').value=(conteudo.localidade);
							   // document.getElementById('uf').value=(conteudo.uf);
								//document.getElementById('ibge').value=(conteudo.ibge);
							} //end if.
							else {
								//CEP não Encontrado.
								limpa_formulário_cep();
								alert("CEP não encontrado.");
							}
						}
							
						function pesquisacep(valor) {

							//Nova variável "cep" somente com dígitos.
							var cep = valor.replace(/\D/g, '');

							//Verifica se campo cep possui valor informado.
							if (cep != "") {

								//Expressão regular para validar o CEP.
								var validacep = /^[0-9]{8}$/;

								//Valida o formato do CEP.
								if(validacep.test(cep)) {

									//Preenche os campos com "..." enquanto consulta webservice.
									document.getElementById('rua').value="...";
									document.getElementById('bairro').value="...";
								 //   document.getElementById('cidade').value="...";
								   // document.getElementById('uf').value="...";
									//document.getElementById('ibge').value="...";

									//Cria um elemento javascript.
									var script = document.createElement('script');

									//Sincroniza com o callback.
									
									script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';
									//Insere script no documento e carrega o conteúdo.
									document.body.appendChild(script);

								} //end if.
								else {
									//cep é inválido.
									limpa_formulário_cep();
									alert("Formato de CEP inválido.");
								}
							} //end if.
							else {
								//cep sem valor, limpa formulário.
								limpa_formulário_cep();
							}
						};

					  
							
								function MM_formtCep(e,src,mask) {
									if(window.event) { _TXT = e.keyCode; } 
									else if(e.which) { _TXT = e.which; }
									if(_TXT > 47 && _TXT < 58) { 
								  var i = src.value.length; var saida = mask.substring(0,1); var texto = mask.substring(i)
								  if (texto.substring(0,1) != saida) { src.value += texto.substring(0,1); } 
									 return true; } else { if (_TXT != 8) { return false; } 
								  else { return true; }
									}
								}
		
	</script>
			
					<script>
							//MASCARA CPF
							
					function mascaraMutuario(o,f){
									v_obj=o
									v_fun=f
									setTimeout('execmascara()',1)
								}
								 
								function execmascara(){
									v_obj.value=v_fun(v_obj.value)
								}
								 
								function cpfCnpj(v){
								 
									//Remove tudo o que não é dígito
									v=v.replace(/\D/g,"")
								 
									if (v.length <= 14) { //CPF
								 
										//Coloca um ponto entre o terceiro e o quarto dígitos
										v=v.replace(/(\d{3})(\d)/,"$1.$2")
								 
										//Coloca um ponto entre o terceiro e o quarto dígitos
										//de novo (para o segundo bloco de números)
										v=v.replace(/(\d{3})(\d)/,"$1.$2")
								 
										//Coloca um hífen entre o terceiro e o quarto dígitos
										v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
								 
									} 
								 
									return v
								}
								
					</script>
						
						<script>
								//MASCARA TELEFONE 
								
								/* Máscaras ER */
									function mascara(o,f){
										v_obj=o
										v_fun=f
										setTimeout("execmascara()",1)
									}
									function execmascara(){
										v_obj.value=v_fun(v_obj.value)
									}
									function mtel(v){
										v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
										v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
										v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
										return v;
									}
						
						
						</script>
						
						<script>
									//MASCARA DATA
								function mascaraData( campo, e ){
									var kC = (document.all) ? event.keyCode : e.keyCode;
									var data = campo.value;
									
									if( kC!=8 && kC!=46 )
									{
										if( data.length==2 )
										{
											campo.value = data += '/';
										}
										else if( data.length==5 )
										{
											campo.value = data += '/';
										}
										else
											campo.value = data;
									}
								}

						
						</script>
			
</head>
	<body>
		<!-- BANNER DO TOPO DA PAGINA  -->
	<div class="logowebphone"><img src="imagem\banner.jpg"/></div>
			<!-- BARRA DE PESQUISA  -->
	<div class="pesquisa">
     <form method="post">
         <input type="text" placeholder="Pesquisa">
         <button type="submit"><img src="imagem\lupa.png"></button>
     </form>
	</div>
	
	<!--imgem carrinho -->
<div class="carrinho"><a href="compra.php"><img src="imagem\carrinho.png"/></a></div>
	
	<!--imgem cadastro usuario -->
<div class="imagemusuario"><a href="cadastro.php"><img src="imagem\cadastro_cliente.png"/></a></div>
	
	<!-- MENU PRINCIPAL  -->
 <ul>
    <li class="menu">
		<a href="Index.php" class="dropbtn">Home</a> 
	</li>
	<li class="menu">
		<a href="#" class="dropbtn">Samsumg</a> <!-- MENU ITEM SAMSUNG -->
		<div class="menu-content"> <!-- MENU SUB-ITENS SAMSUNG -->
          <a href="galaxyS6.php">Galaxy s6</a> 
          <a href="galaxyS7.php">Galaxy s7</a>
          <a href="galaxyNote5.php">Galaxy note 5</a>
	      <a href="j5.php">Galaxy J5</a>
	      <a href="j7.php">Galaxy J7</a>
		</div>
	</li>
 
	<li class="menu">
		<a href="#" class="dropbtn">Apple</a> <!-- MENU ITEM APPLE -->
		<div class="menu-content"> <!-- MENU SUB-ITENS APPLE -->
          <a href="5s.php">iPhone 5S</a>
          <a href="iphone6.php">iPhone 6</a>
          <a href="iphone6plus.php">iPhone 6Plus</a>
         
		</div>
	</li>

	<li class="menu">
		<a href="#" class="dropbtn">LG</a> <!-- MENU ITEM LG -->
		<div class="menu-content"> <!-- MENU SUB-ITENS LG -->
          <a href="LGNexus5.php">LG Nexus 5 D821</a>
          <a href="LG-G4-H815P.php">G4 H815P</a>
          <a href="g5se.php">G5 SE</a>
		  <a href="LGG3Stylus.php">LG G3 Stylus D690</a>
		</div>
	</li>
<li class="menu">
		<a href="#" class="dropbtn">Motorola</a> <!-- MENU ITEM MOTOROLA -->
		<div class="menu-content"> <!-- MENU SUB-ITENS MOTOROLA -->
          <a href="MotorolaMotoXPlay.php">Moto X Play 4G Dual</a>
          <a href="g3.php">Moto G3</a>
          <a href="motomaxxa2.php">Moto MAXX 2</a>
		  <a href="MotoXStyle.php">Moto X Style</a>
		</div>
	</li> 
   
	<li class="menu">
		<a href="#" class="dropbtn">Sony</a> <!-- MENU ITEM SONY -->
		<div class="menu-content"> <!-- MENU SUB-ITENS SONY -->
          <a href="xperiaz3tv.php">Xperia Z3 TV</a>
          <a href="xperiaz1.php">Xperia Z1</a>
          <a href="SonyXperiaZ3.php">Sony Xperia Z3 Compact</a>
		</div>
	</li> 
</ul>
<!-- FIM DO MENU   -->
<!-- CADASTRO   -->

	<div id= "container">
	
		<div id="cadastro" >
				<form name="cadastro" method="post" onsubmit="return validacao()">
					<div id="dados">
						<h1> CADASTRAR </h1>
						<h2> Dados Cadastrais </h2>
						<div id= "input">
							<label class="txtTitulo"> Nome Completo </label> <br />
							<input id="nome" name="nome" type="text"/> <br /> <br />
							<label class="txtTitulo"> Data Nascimento </label> <br />
							<input type="text" name="outra_data" id="outra_data" maxlength="10" onkeypress="mascaraData( this, event )" /> <br /> <br />
							<label class="txtTitulo"> CPF </label> <br />
							<input type='text' name='cpfcnpj' onkeypress='mascaraMutuario(this,cpfCnpj)' onblur='clearTimeout()'> <br /> <br />
							<label class="txtTitulo"> Telefone</label><br />
							<input type="text" name="telefone" onkeyup="mascara( this, mtel );" maxlength="15" /> <br /> <br />
							<label class="txtTitulo" for="sexo"> Sexo </label> 
							<input name="sexo" type="radio" value="M"/> Masculino 
							<input name="sexo" type="radio" value="F"/>Feminino <br /> <br />
							<label class="txtTitulo"> Email </label> <br />
							<input id="email" name="email" type="text"/> <br /><br />
							<label>Cep: <br />
							<input name="cep" type="text" id="cep" value="" size="10" maxlength="9"
								   onblur="pesquisacep(this.value);" /></label> <br /><br />
							<label>Rua: <br />
							<input name="rua" type="text" id="rua" size="60" /> </label> <br /><br />
							<label>Bairro: <br />
							<input name="bairro" type="text" id="bairro" size="40" /> </label><br /><br />
							<label> Senha <label> <br />
							<input name="input_Pass" type="password"/>				
							<input name="cadastrar" type="submit" value= CADASTRAR> <br />
						</div>
					
					</div>
				</form>	
		</div>	
		
			
		<div id="login">
				<form name="login" method="post">
						<h1> LOGIN </h1>
							<div id= "input1">
								<label> Email </label> <br />
								<input name="email" type="text"/> <br />
								<label> Senha </label> <br />
								<input name="input_Pass" type="password"/>
								<input type="submit" value="Login"/>
							</div>				
				</form>
		
		
		</div>	
			
	</div>
	<!-- RODAPÉ -->
<div class="img-rodape">
<img src="imagem/rodape2.jpg">
</div>
<footer class="rodape">
	<p>&copy; 2017 - WebPHONE. Todos os direitos reservados.</p> <!-- TEXTO DO RODAPÉ -->
	<p>WebPHONE – Comercialização de Aparelhos Eletrônicos LTDA / CNPJ: 20.000.000/0000-02
	Endereço: Rua Dom Pedro II, Salvador - BA. CEP 40000-000.<br> 
	<a href="http://www.gmail.com" target=_blank >contato.webphone@gmail.com</a><br>
	Sigam-nos em nossas redes sociais:</p>
	
	<div id="icones_rodape">
		
		<a href="http://www.facebook.com "target=_blank /><img src="imagem/facebook_icon.png" width="30" height="30">
	    <a href="http://www.instagram.com "target=_blank/><img src="imagem/instagram_ico.png" width="30" height="30">
		<a href="http://www.youtube.com "target=_blank /><img src="imagem/youtube_ico.png" width="30" height="30">
		<a href="http://www.twitter.com "target=_blank /><img src="imagem/icon_twitter.png" width="30" height="30">
		
	</div>
	
</footer>
<!-- FINAL DO RODAPÉ -->
	
</body>
</html>