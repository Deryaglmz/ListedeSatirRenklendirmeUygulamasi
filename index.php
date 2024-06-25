<?php
try {
    $VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=urunler;charset=utf8", "root", "9900");
} catch (PDOException $Hata) {
    echo "Bağlantı Hatası<br>" . $Hata->getMessage();
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width="1000" align="center" border="0" cellpadding="0" cellspacing="0">
            <tr height="30" bgcolor="000000">
                <td align="left" style="color: white;">&nbsp;Ürün Adı</td>
                <td align="right" style="color: white;">Ürün Fiyatı&nbsp;</td>
            </tr>
            <?php
            $Sorgu = $VeritabaniBaglantisi->prepare("SELECT * FROM urunler");
            $Sorgu->execute();
            $SorguSayisi = $Sorgu->rowCount();
            $SorguKayitlari = $Sorgu->fetchAll(PDO::FETCH_ASSOC);

            $BirinciRenk = "#dfdfdf";
            $IkinciRenk = "#FFFFFF";
            $RenkIcinSayi = 0; 
            
            foreach ($SorguKayitlari as $Satirlar){
                if( $RenkIcinSayi%2){
                    $ArkaPlanRengi = $BirinciRenk;
                }else{
                    $ArkaPlanRengi = $IkinciRenk;
                }
            ?>
            <tr height="30" bgcolor="<?php echo $ArkaPlanRengi; ?>" onmouseover="this.bgColor='#c2cebd';" onmouseout="this.bgColor='<?php echo $ArkaPlanRengi; ?>'; " style="cursor: pointer;">
                <td align="left">&nbsp;<?php echo $Satirlar["urunadi"];?></td>
                <td align="right"><?php echo $Satirlar["urunfiyati"];?>&nbsp;</td>
            </tr>
            <?php
                $RenkIcinSayi++;
        }
        ?>
    </table>
</body>
</html>
<?php
$VeritabaniBaglantisi = null;
?>