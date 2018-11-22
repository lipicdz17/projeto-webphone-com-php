<?php
session_start();
?>
<!DOCTYPE html>

<html>
    <head>

         <meta charset="utf-8">
         <title>WebPHONE</title>
		 <link rel ="stylesheet" href="css/estilo.css"> 
		 <link rel ="stylesheet" href="css/estilo1.css"> 
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
<div class="carrinho1"><a href="compra.php"><img src="imagem\carrinho.png"/></a>
	
	<!--imgem cadastro usuario -->
<a href="cadastro.php"><img src="imagem\cadastro_cliente.png"/></a></div>
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

<!-- inicializando conexao  -->
<?php
include("conexao.php");
   $sql = "SELECT * FROM produtos where id = 22";
   $result = $conexao->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>

<!-- carrossel galaxys6 -->
<div class="s6branco"><h6><h6><?php echo $row['marca'];?><?php echo $row['modelo'];?><h6></div>
<!-- CARROSSEL -->
<div id="area">
			<input type="radio" id="img1" name="foto" checked>
			<input type="radio" id="img2" name="foto">
			<input type="radio" id="img3" name="foto">
				
		<div class="tela">
	<div class="grande">
				<img src="imagem/motomaxx-2frente.jpg">
				<img src="imagem/dt-moto-maxx-2a-g-2.png">
				<img src="imagem/motomaxx-2fundo.png">
		</div>
	</div>
	<label for="img1"><img src="imagem/motomaxx-2frente.jpg"></label>
	<label for="img2"><img src="imagem/dt-moto-maxx-2a-g-2.png"></label>
	<label for="img3"><img src="imagem/motomaxx-2fundo.png"></label>
</div>


<!-- DESCRIÇÃO DO PRODUTO-->

<div class="descricao">
     
	 <h1>Preço </h1> 
     <h2>R$ <?php echo  number_format($row['valor'], 2, ',', '.');?></h2> 
     
    <h6>Frete </h6>
	 <div class="frete"><h6>Gratis </h6></div>
    
<a href="compra.php?par=add&id=<?php echo $row['id'];?>"><button class="button button3">Comprar</button></a> 
</div>
<!-- fechando conexao php -->
<?php
			}
} else {
    echo "0 results";
}
$conexao->close();
			?>

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