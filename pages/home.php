<?php
    require_once('dados/produtos.php');
?>

<style>
    .bolos{
        width:200px;
        text-align: center;
        margin: 20px;
    }
    .bolos img{
        width: 200px;
        height: 200px;
        border-radius: 50px;
    }
    .container{
        max-width: 800px;
        display: flex;
        margin: auto;
        padding-top: 30px;
    }
</style>

<?php
    foreach($produtos as $produto):
?>
<a href="index.php?page=produto&id=<?php echo $produto['id']?>">
    <div class="bolos">
        <img src="images/<?php echo $produto['imagem']?>" alt="<?php echo $produto['nome']?>">
        <h4><?php echo $produto['nome']?></h4>
    </div>
</a>
<?php
    endforeach
?>