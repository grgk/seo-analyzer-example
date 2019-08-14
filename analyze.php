<?php
require_once(__DIR__ . '/vendor/autoload.php');

$exampleUrls = [
    'http://iczn.org',
    'http://ausgrass2.myspecies.info',
    'http://wallacefund.info',
    'http://checklist.onlineflora.cn',
    'http://iberianodonataucm.myspecies.info',
    'http://mosquito-taxonomic-inventory.info',
    'http://fungi.myspecies.info',
    'http://phthiraptera.info',
    'http://diptera.myspecies.info',
    'http://pistiaistyoryhma.myspecies.info',
    'http://phasmid-study-group.org',
    'http://diatoms.myspecies.info',
    'http://solanaceaesource.org',
    'http://seargentina.myspecies.info',
    'http://rbzs.myspecies.info',
    'http://weevil.info',
    'http://sciaroidea.info',
    'http://wallaceletters.info',
    'http://fossilinsects.net',
    'http://sphingidae.myspecies.info',
    'http://convolvulaceae.myspecies.info',
    'http://insectafgseag.myspecies.info',
    'http://eunops.org',
    'http://fossilinsects.myspecies.info',
    'http://conservation.myspecies.info',
    'http://mantodea.myspecies.info',
    'http://e-m-b.org',
    'http://weevil.myspecies.info',
    'http://icgf.myspecies.info',
    'http://ihs.myspecies.info',
    'http://antkey.org',
    'http://jemu.myspecies.info',
    'http://africhthy.org',
    'http://milichiidae.info',
    'http://biotalent.myspecies.info',
    'http://cephbase.eol.org',
    'http://olivirv.myspecies.info',
    'http://eflower.myspecies.info',
];

use SeoAnalyzer\Analyzer;
use SeoAnalyzer\HttpClient\Exception\HttpException;

try {
    echo '<h3>PLease click URL from list and check the results below</h3>';
    foreach ($exampleUrls as $index => $url) {
        echo '<a href="?url=' . $index . '">' . $url . '</a><br />';
    }
    if (isset($_GET['url'])) {
        $results = (new Analyzer())->analyzeUrl($exampleUrls[$_GET['url']]);
    }
} catch (HttpException $e) {
    echo "Error loading page: " . $e->getMessage();
} catch (ReflectionException $e) {
    echo "Error loading metric file: " . $e->getMessage();
}
?>
<pre><?php print_r($results) ?></pre>
