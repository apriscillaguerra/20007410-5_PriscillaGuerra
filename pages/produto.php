<style>
    .esquerdo img{
        width: 300px;
        height: 300px;
        border-radius: 100px;
    }
    .esquerdo{
        width: 50%;
    }
    .direito{
        width: 50%;
    }
</style>

<?php
    require_once('dados/produtos.php');

    $id = null;

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        if(!isset($produtos[$id]))
            $id = null;
    }

    if(is_null($id)){
?>

    <div>
        O código nulo ou não existente.
    </div>

<?php
    }else{
?>

    <div class="esquerdo">
        <img src="images/<?php echo $produtos[$id]['imagem']?>" alt="<?php echo $produtos[$id]['nome']?>">
    </div>
    <div class="direito">
        <h1><?php echo $produtos[$id]['nome']?></h1>
        <p>
            <?php echo $produtos[$id]['descricao']?>
        </p>
    </div>

<?php
    }
?>