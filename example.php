<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>HelionLib</title>
        <link rel='stylesheet' href='styles.css' type='text/css' media='all' />
    </head>
    <body>
    <?php
        include("helion-lib.php");

        $helionLib = new HelionLib("1234k");
        $ksiegarnia = "bezdroza";
        $ksiazkaDnia = $helionLib->ksiazka_dnia($ksiegarnia);
        $ksiazka = $helionLib->ksiazka($ksiegarnia, $ksiazkaDnia["ident"]);

        $link_do_koszyka = $helionLib->link_do_koszyka($ksiegarnia, $ksiazkaDnia["ident"]);
        $link_do_ksiazki = $helionLib->link_do_ksiazki($ksiegarnia, $ksiazkaDnia["ident"]);

        $okladkaDnia = $helionLib->okladka($ksiazka, "120x156");

    ?>
    <table>
        <tr>
            <td>
                <img src="<?php echo $okladkaDnia?>"/>
            </td>
            <td>
                <a href="<?php echo $link_do_ksiazki?>" title="<?php echo $ksiazka["tytul"][0]?>"><?php echo $ksiazka["tytul"][0]?></a>
                <br />
                <?php echo $ksiazka["autor"]?>
                <br />
                Cena: <?php echo $ksiazka["cenadetaliczna"]?>
                <br />
                Format: <?php echo $helionLib->getTypeByIdent($ksiazkaDnia["ident"])?>
                <br />
                <br />
                <div class="helion-box">
                    <a href="<?php echo $link_do_koszyka; ?>" title="Dodaj '<?php echo $ksiazka["tytul"][0]?>' do koszyka" rel="nofollow" target="_blank">Kup teraz</a>
                </div>
            </td>
        </tr>
    </table>

    </body>
</html>