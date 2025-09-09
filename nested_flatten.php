$data = [2, "Abigael", "Paul", 45.3, ["Paulina", "Trust", 23, 45], True, ["Address" => "12 New layout", "Balance" => 56000]];

function array_flatten($array) {
    $output = [];
    for ($t = 0; $t < count($array); $t++) {
        if(!is_array($array[$t])) {
            array_push($output, $array[$t]);
        } elseif(is_array($array[$t])) {
            foreach ($array[$t] as $key => $value) {
                if (!is_numeric($key) & $key != 0) {
                    array_push($output, $value);
                } else {
                    array_push($output, $value);
                }
            }
        }
    }
    return($output);
}

echo "<p style='font-weight:bold;'>Final Method Our Method (Myself and my students - Christabel and Great)</p>";
$quick = array_flatten($data);
echo "Flatten array - " ;
print_r($quick);
echo "<p>Count - ".count($quick) ."</p>";
