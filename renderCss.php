<?php
$data       = file_get_contents('syle.css');
$data_array = array();
$page       = $_REQUEST['var'];
$repeatWord = '/* >>> ORDER-';
$cssCount   = substr_count($data, $repeatWord);

function getPageList($data, $page){
				$str     = $data;
				$start   = '/* >>> ORDER-' . $page . ' */';
				$end     = '/* >>>';
				//echo 'start with '.$start;
				$pattern = sprintf('/%s(.+?)%s/ims', preg_quote($start, '/'), preg_quote($end, '/'));
				if (preg_match($pattern, $str, $matches)) {
								list(, $match) = $matches;
								return $match;
				}
}

$css = getPageList($data, $page);
echo '<style>
' . $css . '
</style>';
?>
