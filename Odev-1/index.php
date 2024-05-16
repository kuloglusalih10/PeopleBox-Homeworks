<?php
    
    $description1 = "kagıt toplayarak geçinen ve saglığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)."; 
    $description2 = "zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.";
    $title1 = "Paper Lives";
    $title2 = "Walking Dead";

    # 1 - Film açıklamasındaki baş harf hariç tüm harfleri küçük harfe çeviriniz. 


        echo ucfirst(strtolower($description1)) . "<br>";
        echo ucfirst(strtolower($description2)) . "<br><br><br>";

        
    # 2 - Film açıklaması içindeki ilk 50 karakteri alarak sonuna "..." ekleyiniz. (substr) 

        
        echo substr($description1, 0, 50) . "...<br>";
        echo substr($description2, 0, 50) . "...<br><br><br>";


    # 3 - Her bir film için url bilgisini film başlığına göre oluşturunuz. 

        echo strtolower(str_replace(" ","-",$title1))."<br>";
        echo strtolower(str_replace(" ","-",$title2));
        

    # 4 - "baslik" isminde bir sabit oluşturarak sayfanın h1 etiketinde kullanınız.

        define("baslik", "Copyrigth Salih Kuloğlu" );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odev-1</title>
</head>
<body>

    <h1>
        <?php 
        
            echo baslik;
        
        ?>
    </h1>
    
</body>
</html>