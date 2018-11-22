<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
session_start();

 if(!isset($_SESSION['carrinho'])){
 	$_SESSION['carrinho'] = array(); 
 }
 if(isset($_GET['par'])){
	 if($_GET['par'] == 'add'){
		 $id = intval($_GET['id']);
		 if(!isset($_SESSION['carrinho'][$id])){
		  $_SESSION['carrinho'][$id] = 1;	 
		 }else{
			$_SESSION['carrinho'][$id] += 1; 
		 }
	 }		 
 
 if($_GET['par']== 'del'){
	  $id = intval($_GET['id']);
	  if(isset($_SESSION['carrinho'][$id])){
		 unset($_SESSION['carrinho'][$id]);
		
      }
   }
   if($_GET['par'] == 'up'){
	  if(is_array($_POST['prod'])){
		  foreach($_POST['prod'] as $id => $quantidade){
			  $id  = intval($id);
			  $qtd = intval($quantidade);
			  if(!empty($qtd) || $qtd <> 0){
				  $_SESSION['carrinho'][$id] = $qtd;
			  }else{
				  unset($_SESSION['carrinho'][$id]);
			  }
		  }
	  }
   }
 }
?>
<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8">
         <title>WebPHONE</title>
		 <link rel ="stylesheet" href="css/estilo.css"> 
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

     </head>
<?php
include ("conexao.php");
?>
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
<div class="carrinho1"><a href="compra.php"><img src="imagem\carrinho.png"/></a>
	
	<!--imgem cadastro usuario -->
<a href="#cadastro.php"><img src="imagem\cadastro_cliente.png"/></a></div>
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
<!-- CARROSSEL -->
<div class="container"><br>

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- INDICADORES -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
		</ol>

	<!-- SLIDES -->
	<div class="carousel-inner" role="listbox">
		<div class="item active">
				<img src="imagem/promocao5.jpg" alt="Chania" width="460" height="345">
			<div class="carousel-caption"></div>
		</div>

		<div class="item">
			<img src="imagem/promocao2.jpg" alt="Chania" width="460" height="345">
			<div class="carousel-caption"></div>
		</div>
    
		<div class="item">
			<img src="imagem/promocao3.jpg" alt="Flower" width="460" height="345">
			<div class="carousel-caption"></div>
		</div>

		<div class="item">
			<img src="imagem/promocao4.jpg" alt="Flower" width="460" height="345">
			<div class="carousel-caption"></div>
		</div>
	</div>

	<!-- CONTROLES ANTERIOR-PRÓXIMO -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- FINAL DO CARROSSEL -->

<!-- CAMPO "CELULARES MAIS VENDIDOS"   -->
<div id="vendidos">
	<p> Adicione produto ao seu carrinho</p>
</div>
<main class="carrinho">
	<table class="tabela-carrinho">
					<tr class="car-compra">
				 <td>Marca</td>
				 <td>Modelo</td>
				 <td>QTD</td>
				 <td>Valor</td>
				 <td>SubTotal</td>
				 <td>Ação</td>
			</tr>
			
			
	
<?php
	
	if(count($_SESSION['carrinho']) == 0){
		echo ' <tr><td colspan="5">Seu carrinho esta vazio, adicione o produto desejado!!! </td></tr>';
	}else{
		foreach($_SESSION['carrinho'] as $id => $quantidade){
		 $sql = "SELECT * FROM produtos WHERE id = '$id'";
		 $res = mysqli_query($conexao,$sql) or die (mysqli_error($conexao));
		 $user = mysqli_fetch_assoc($res);
		
		 $nome = $user['marca'];
		 $modelo = $user['modelo'];
		 $preco = number_format($user['valor'], 2, ',', '.');
		 $sub = number_format($user['valor'] * $quantidade, 2, ',', '.');
		 	 
		
		 echo '<tr>
		 <td>'.$nome.'</td>
		 <td>'.$modelo.'</td>
		 <td><input type="text" name="prod['.$id.']" value="'.$quantidade.'"/></td>
		 <td>R$ '.$preco.'</td>
		 <td>R$ '.$sub.'</td>
		 <td><a href="?par=del&id='.$id.'">X</a></td>
		 </tr>';
	  $Total+=$sub;
	  $toto += $quantidade;
		$_SESSION['tot'] = $toto;
	$valor = $Total;
	}
	echo '<tr>
			<td colspan="4">Total:</td>
			<td>R$ '.$valor.'</td>
			<td>&nbsp;</td>
		 </tr>';
		
 }
?>

<?php

if(isset($_POST['enviar'])){
	$sqlinserirvenda = mysqli_query($conexao,"INSERT INTO venda(valor) VALUES ('$Total')");
	
   $id = mysqli_insert_id($conexao);
   foreach($_SESSION['carrinho'] as $prodinsert => $quantidade){
     $sqlInserirItens = mysqli_query($conexao,"INSERT INTO itens (id_venda, id_produto, qtd) VALUES ('$id', '$prodinsert', '$quantidade')");
}
   echo '<script> alert("Venda concluida com sucesso!!!")</script>';
}

?>
</table>
	<div class="atualizar-carrinho">
<form action="" enctype="multipart/form-data" method="post">
<button type="submit" name="enviar">Finalizar Pedido</button>
</form>
 </div>	
	</main>	

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