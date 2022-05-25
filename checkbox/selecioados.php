<?php
$options = array("php", "java", "golang", "delphi", "javascript", "C++");
$responses = $_POST["options"];
?>

<?php if (isset($_POST["options"])) { ?>
<html>
<span>Linguagens selecionadas: </span>
<ul>
    <?php
    foreach ($responses as $response) {
        ?>

        <li>
            <h4>
                <?php
                print_r($options[$response])
                ?>
            </h4>
        </li>

        <?php
    }
    ?>
</ul>
<?php
} else {
    echo "Erro, algum valor deveria ter sido selecionado.";
}
?>
</html>