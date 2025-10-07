<?php

#AYALARI TANIMLAR
$altdizin = '/iskan';
define('DIZIN',$_SERVER['DOCUMENT_ROOT'].$altdizin);//bu değişkeni herde kullanabilirsin
define('PDIZIN',$_SERVER['DOCUMENT_ROOT'].$altdizin.'/dashboard');
define('SITE',"http://".$_SERVER['SERVER_NAME'].$altdizin);//bu değişkeni herde kullanabilirsin
define('PANEL',"http://".$_SERVER['SERVER_NAME'].$altdizin.'/dashboard');


// $host = "localhost";
// $port = "3306";
// $dbname = "atspulco_ats";
// $user = "atspulco_ats";
// $pass = "Mehmet1358";


$host   = "localhost";
$port   = "3306";
$dbname = "iskan";
$user   = "root";
$pass   = "";


 try {
   $db = new PDO("mysql:host={$host};port={$port};dbname={$dbname};charset=utf8", "{$user}", "{$pass}");
   $db->query("SET NAMES 'utf8'");
   $db->query("SET CHARACTER SET utf8");
   $db->query("SET COLLATION_CONNECTION = 'utf8_turkish_ci'");
   $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
 } catch (PDOException $e ){
     print $e->getMessage();
 }



 function verileri_yazdir($gelen_veriler){
    echo "<pre>";
    print_r($gelen_veriler);
    echo "</pre>";
 }

 function seo($text) {
  
  $find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
  $replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
  $text = strtolower(str_replace($find, $replace, $text));
  $text = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $text);
  $text = trim(preg_replace('/\s+/', ' ', $text));
  $text = str_replace(' ', '-', $text);

  return $text;
}


////////////////////////////////////////////////////////////////////

function ayar_cek(&$db, $kodu){
  
  $cek = $db->prepare("SELECT * FROM `ayarlar` WHERE kodu=:kodu");
  $cek->execute([
      'kodu' => $kodu
  ]);
  $ayarlar = $cek->fetch(PDO::FETCH_ASSOC);
  if($ayarlar){

    return $ayarlar;

  } else {

    $sonuc = [
      'kodu' => $kodu,
      'adi' => 'Tanımsız Ayar - '.$kodu
    ];

    return $sonuc;
  }
  
}
////////////////////////////////////////////////////////////////////

function sql(&$db, $tablo, $where = '', $orderby = '', $tablo_yildiz = '', $yildiz = '*') { 
  $sql = "SELECT ";

  // Eğer tablo_yildiz boş değilse, bunu kullan; yoksa yildiz parametresini kullan
  if ($tablo_yildiz != '') {
      $sql .= $tablo_yildiz; // Örneğin: sayfalar.*, sayfa_kategori.config
  } else {
      $sql .= $yildiz; // Default olarak '*'
  }

  $sql .= " FROM " . $tablo;

  if ($where != '') {
      $sql .= " WHERE " . $where;
  }

  if ($orderby != '') {
      $sql .= " ORDER BY " . $orderby;
  }

  // Sorgu hazırlanıp çalıştırılır
  $cek = $db->prepare($sql);
  $cek->execute();
  $veriler = $cek->fetchAll(PDO::FETCH_ASSOC);

  return $veriler;
}




function resim_yukle($resim,$klasor = ''){

  if($resim['yukle_resim']['name']!=''){

    $yukleklasor = PDIZIN."/resimler".$klasor;
    $tmp_name = $resim["yukle_resim"]["tmp_name"];
    $name = $resim['yukle_resim']['name'];
    $boyut = $resim['yukle_resim']['size'];
    $tip = $resim['yukle_resim']['type'];
    $uzanti = substr($name,-4,4);

    $resimad = seo($resim['yukle_resim']['name']);    
    if(strlen($name) == 0){
        echo"bir dosya seçiniz";
        exit();
    }    
    if($boyut > (1024*1024*3)){
        echo"dosya boyutu çok fazla";
        exit();
    }    
    if ($tip != 'image/jpg' && $tip != 'image/png' && $uzanti != '.jpg') {
        echo "yanlızca jpeg veya png formatında olabilir";
    }  

    $son_yol = $yukleklasor.'/'.$resimad;

    if(move_uploaded_file ($tmp_name, $son_yol)){
      if($klasor!=''){
        return $klasor.'/'.$resimad;
      } else {
        return $resimad;
      }
    } else {
      return 'basarisiz';
    }
  }
}

function resim_yukle2($resim2,$klasor = ''){

  if($resim2['yukle_resim2']['name']!=''){

    $yukleklasor = PDIZIN."/resimler".$klasor;
    $tmp_name = $resim2["yukle_resim2"]["tmp_name"];
    $name = $resim2['yukle_resim2']['name'];
    $boyut = $resim2['yukle_resim2']['size'];
    $tip = $resim2['yukle_resim2']['type'];
    $uzanti = substr($name,-4,4);

    $resimad2 = seo($resim2['yukle_resim2']['name']);    
    if(strlen($name) == 0){
        echo"bir dosya seçiniz";
        exit();
    }    
    if($boyut > (1024*1024*3)){
        echo"dosya boyutu çok fazla";
        exit();
    }    
    if ($tip != 'image/jpg' && $tip != 'image/png' && $uzanti != '.jpg') {
        echo "yanlızca jpeg veya png formatında olabilir";
    }  

    $son_yol = $yukleklasor.'/'.$resimad2;

    if(move_uploaded_file ($tmp_name, $son_yol)){
      if($klasor!=''){
        return $klasor.'/'.$resimad2;
      } else {
        return $resimad2;
      }
    } else {
      return 'basarisiz';
    }
  }
}
function git($adres){
  header("Location:".$adres);
  exit();
}


?>