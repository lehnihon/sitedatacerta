<?php
get_header(); 

global $wpdb;
$myrows = $wpdb->get_results( 'SELECT * FROM tb_cidades ORDER BY cidade ASC', OBJECT );
foreach($myrows as $row){
	$cidades .= "<option value='".$row->sg."'>".$row->cidade."</option>";
}
$cidadeo ="<option value='0'>Cidade de Origem</option>".$cidades;
$cidaded ="<option value='0'>Cidade de Destino</option>".$cidades;

if(!empty($_POST['calcular'])){
	if(!empty($_POST['peso']) and !empty($_POST['cidadeo']) and !empty($_POST['cidaded']) and !empty($_POST['valorp'])){


		$pesoc = (str_replace(",", ".",$_POST['c'])/100*str_replace(",", ".",$_POST['a'])/100*str_replace(",", ".",$_POST['l'])/100*300);
		$pesop = str_replace(",", ".", $_POST['peso']);
		if($pesoc > $pesop){
			$peso = $pesoc;
		}else{
			$peso = $pesop;
		}
		if($peso < 10.01){
			$fp = 1;
		}elseif($peso < 20.01){
			$fp = 2;
		}elseif($peso < 35.01){
			$fp = 3;
		}elseif($peso < 50.01){
			$fp = 4;
		}elseif($peso < 70.01){
			$fp = 5;
		}elseif($peso < 100.01){
			$fp = 6;
		}elseif($peso < 300.01){
			$fp = 7;
		}elseif($peso < 500.01){
			$fp = 8;
		}else{
			$fp = 9;
		}
		if($fp == 1){
			$row = $wpdb->get_row( "SELECT valor FROM tb_preco WHERE sgo = '".$_POST['cidadeo']."' and sgd = '".$_POST['cidaded']."' and peso = '1'", OBJECT );
			$valot = $row->valor;
			$valot = $valot*1.5;
		}else{
			$row = $wpdb->get_row( "SELECT valor FROM tb_preco WHERE sgo = '".$_POST['cidadeo']."' and sgd = '".$_POST['cidaded']."' and peso = '1'", OBJECT );
			$taxamin = $row->valor;
			$row = $wpdb->get_row( "SELECT valor FROM tb_preco WHERE sgo = '".$_POST['cidadeo']."' and sgd = '".$_POST['cidaded']."' and peso = '$fp'", OBJECT );
			$valor = $row->valor;
			$valot = $taxamin+(ceil($peso)-10)*$valor;
			$valot = $valot*1.5;
		}
		if($peso <= 30){
			$valorc = 115;
		}else{
			$valorc = 115+(ceil($peso)-30)*0.8;
		}
	}else{
		echo "<script>alert('Preencha todos os campos!');</script>";
	}
}
?>

<?php get_template_part( 'template-parts/breadcrumbs' ); ?>

<section id="orcamento">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-left">
				<h1 class="small">Calcular Frete</h1><br>
				<h4><strong>Utilize nosso calculador de frete e veja quanto custa para enviar suas encomendas com a Data Certa.<br>
Verifique se a cidade de origem e a cidade de destino estão em nossa área de atuação!</strong></h4>
			</div>
		</div><br><br>
		<form action="#" method="post">
		<div class="row">
			<div class="col-md-6">
				<select name="cidadeo" class="input-contato">
					<?php echo $cidadeo  ?>
				</select>
				<input text="text" name="c" placeholder="Comprimento em CM" class="input-contato" />
				<input text="text" name="peso" placeholder="Peso em KG" class="input-contato" />
				<input text="text" name="valorp" placeholder="Valor do produto" class="input-contato" />
			</div>
			<div class="col-md-6">
				<select name="cidaded" class="input-contato">
					<?php echo $cidaded  ?>
				</select>
				<input text="text" name="a" placeholder="Altura em CM" class="input-contato" />
				<input text="text" name="l" placeholder="Largura em CM" class="input-contato" />
			</div>
		</div><br>
		<div class="row">
			<div class="col-md-12">
				<p>O valor simulado pode alterar conforme as dimensões e o peso final do produto empacotado.</p>
			</div>
		</div><br>
		<div class="row">
			<div class="col-md-12">
				<input type="submit" name="calcular" value="Calcular" class="btn-contato" />
			</div>
		</div><br><br>
		</form>
		<?php 
		if(!empty($valot)){
		?>
		<div class="row" style="background-color: #f8f8f9; padding-top:40px; padding-bottom:40px;">
			<div class="col-md-12 text-left">
				<h2>Destino <?php echo $_POST['cidadeo']." - ".$_POST['cidaded'] ?></h2><br>
				<h4>Tarifa: <?php echo "R$". number_format($valot, 2, ',', '.'); ?></h4>
				<h4>Taxa de Coleta: <?php echo "R$". number_format($valorc, 2, ',', '.'); ?></h4>
				<h4>Taxa do Seguro: <?php echo "R$". number_format(($_POST['valorp']*0.04), 2, ',', '.'); ?></h4>
				<h4>Valor Total: <strong><?php echo "R$". number_format($valot+$valorc+($_POST['valorp']*0.04), 2, ',', '.'); ?></strong></h4>
				<h4>Valor Total Sem Seguro: <strong><?php echo "R$". number_format($valot+$valorc, 2, ',', '.'); ?></strong></h4>
			</div>
		</div>
		<?php 
		}elseif(!empty($_POST['calcular'])){
		?>
			<div class="row" style="background-color: #f8f8f9; padding-top:40px; padding-bottom:40px;">
				<div class="col-md-12 text-left">
					<h2>Destino <?php echo $_POST['cidadeo']." - ".$_POST['cidaded'] ?></h2><br>
					<h4>Não foi possivel fazer o cálculo, entre em contato para mais detalhes.</h4>
				</div>
			</div>
		<?php
		}
		?>
	</div>
</section> 

<?php get_footer(); ?>
