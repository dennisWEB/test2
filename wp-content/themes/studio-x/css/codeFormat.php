<?
class codeFormat {
    private function string_ireplace($string)
    {
        $string = str_ireplace(",", ",\n", $string);
        $string = str_ireplace(";", ";\n", $string);
        $string = str_ireplace("{", "\n{\n", $string);
        $string = str_ireplace("}", "\n}\n", $string);
        return $string;
    }
    private function string_html($string)
    {
        $string = str_ireplace(',', ',<br>', $string);
        $string = str_ireplace(';', ';<br>', $string);
        $string = str_ireplace('{', '<br>{<br>', $string);
        $string = str_ireplace('}', '<br>}<br>', $string);
        return $string;
    }
    function codeFormat($filename)
    {
        $fopen = fopen($filename, 'r+');
        $write = fopen('test.css', 'a+');
        while(!feof($fopen))
        {
            $string = fgets($fopen);
            $string = $this->string_ireplace($string);
            fwrite($write, $string);
            echo $this->string_html($string); 
        }
        fclose($fopen);
        fclose($write);
    }
}

$codeFormat = new codeFormat('bootstrap.min.css')

?>