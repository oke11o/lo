<?php
function rus2translit($string) {
    $converter = [
        'а' => 'a',   'б' => 'b',   'в' => 'v',
        'г' => 'g',   'д' => 'd',   'е' => 'e',
        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
        'и' => 'i',   'й' => 'y',   'к' => 'k',
        'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',
        'с' => 's',   'т' => 't',   'у' => 'u',
        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya',
        'А' => 'A',   'Б' => 'B',   'В' => 'V',
        'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
        'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
        'И' => 'I',   'Й' => 'Y',   'К' => 'K',
        'Л' => 'L',   'М' => 'M',   'Н' => 'N',
        'О' => 'O',   'П' => 'P',   'Р' => 'R',
        'С' => 'S',   'Т' => 'T',   'У' => 'U',
        'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
        'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
        'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
        'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
    ];
    return strtr($string, $converter);
}
function replace($string)
{
    return str_replace([' ', '\''], ['_', ''], $string);
}
function humanUrl($string)
{
    $lower = mb_strtolower($string);
    return replace(rus2translit($lower));
}

function dirToArray($dir) { 
             
    $result = array();
    $dh  = opendir($dir);
    
    while (false !== ($fileName = readdir($dh))) {
        $ext = substr($fileName, strrpos($fileName, '.') + 1);
        if(in_array($ext, array("jpg","jpeg","png","gif")))
        $result[] = $fileName;
    }
    return $result; 
}

function showgallery($tip_gallery) {
            ?><div class="container vcaf">
            <?php
            $imgdir=[];
            $showgal = "Select * FROM gallery Where tip_gallery='$tip_gallery' order by id_gallery asc";
       		$showgal = mysql_query($showgal) or die(mysql_error()); 
        		if (mysql_num_rows($showgal) != 0)  {
					while ($stl = mysql_fetch_array($showgal)) {
						$dir=$stl['way_gallery'];
						$name_gallery=$stl['name_gallery'];
							
    		/*$pageOpenCount = getPageOpenCount();   */ 
            $way=$dir.'/'.$name_gallery;
           ?>
            <div class="row-sm">
                <div class="image_plus1">
            <a href="<?= $way ?>" target="_blank">
                <img src="<?= $way ?>" alt="<?= $name_gallery; ?>" class="prodv1">
                <?= $name_gallery; ?>
            </a>
                </div>
            </div>                  
            <?php       } } ?>
            </div><?php

} 
function showclick($dir){
    $digits = 6;
    //Определяет кол-во показываемых чисел – в этом случае 00000x.  
    //$dir = str_replace(".png","", $dir);  
    $filelocation="../data/$dir.txt";
    //Имя файла счетчика. Если хотите изменить на другое, замените здесь и переименуйте .txt файл.
    if (!file_exists($filelocation)) {
    $newfile = fopen($filelocation,"w+");
    $content=1;
    fwrite($newfile, $content);
    fclose($newfile);
    }
    $newfile = fopen($filelocation,"r");
    $content = fread($newfile, filesize($filelocation));
    fclose($newfile);
    $newfile = fopen($filelocation,"w+");
    if (!$c){
    $content++;
    }
    fwrite($newfile, $content);
    fclose($newfile);
    echo "".sprintf ("%0"."$digits"."d",$content)."";
    //Если вы хотите, чтобы какой либо текст был вокруг счетчика, заключите строку выше в цитатные кавычки (    quotation marks).
}
function getPageOpenCount() {
    $filename = '../data/page_open_count.txt';
    $count = 1;
    if (file_exists($filename)) {
        $count = (int) file_get_contents($filename);
        $count++;
    }
    file_put_contents($filename, $count);
    return $count;
}
?>