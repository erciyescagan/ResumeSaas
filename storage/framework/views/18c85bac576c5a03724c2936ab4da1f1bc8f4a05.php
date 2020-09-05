<?php


$mostSearchedPopularWordsArray  = array('biente','strawberry','facebook','instagram','twitter',
    'microsoft','paypal','google','flintstones');
echo 'En Çok Aratılan Popüler Kelimeler;<br><br>';

echo json_encode($mostSearchedPopularWordsArray).'<br><br>';
echo'<form>
<input type="text" name="searchBoxInput" value=""/>
<input type="submit" value="Gönder" />
</form>
';
if(isset($_REQUEST['searchBoxInput'])){
    $searchBoxInputValue = strtolower($_REQUEST['searchBoxInput']);

    $shortest = -1;

    foreach ($mostSearchedPopularWordsArray as $popularWord) {

        $levenshteinOutput = levenshtein($searchBoxInputValue, $popularWord);

        if ($levenshteinOutput == 0) {

            $closestWord = $popularWord;
            $shortest = 0;

            break;
        }

        if ($levenshteinOutput <= $shortest || $shortest < 0) {

            $closestWord  =  $popularWord;
            $shortest = $levenshteinOutput;
        }
    }


    echo $levenshteinOutput.'<br>';

    if ($shortest == 0) {
        echo " $closestWord ?\n";
    } else {
        echo "Bunu Mu Demek İstediniz : $closestWord ?\n";
    }
}
?>
<?php /**PATH C:\wamp\www\ResumeSaas\resources\views/index.php ENDPATH**/ ?>
