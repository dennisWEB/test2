<?
class codeFormat
{
    private  $char_break = 'open'; /*value: open|close*/
    private  $new_string = '';
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
        //$fopen = fopen($filename, 'r+');
        //$write = fopen('test.css', 'a+');
        //while(!feof($fopen))
        //{
        //    $string = fgets($fopen);
        //    $string = $this->string_ireplace($string);
        //    fwrite($write, $string);
        //    echo $this->string_html($string); 
        //}
        //fclose($fopen);
        //fclose($write);
        $string = file_get_contents($filename);
        $array_char = str_split($string);
        $write = fopen('test.css', 'a+');
        foreach ($array_char as $key => $value)
        {
            if ($this->char_break == 'open')
            {
                switch($value)
                {
                    case '}':
                        $this->char_break = 'close';
                        $value = "\n}\n";
                    break;
                    case ',':
                        $value = ",\n\t";
                    break;
                    case ';':
                        $value = ";\n\t";
                        
                    break;
                    case '{':
                        $value = "\n{\n\t";
                    break;
                }
            }
            elseif ($this->char_break == 'close')
            {
                switch($value)
                {
                    case '{':
                        $this->char_break = 'open';
                        $value = "\n{\n\t";
                    break;
                    case ',':
                        $value = ",\n";
                    break;
                    case ';':
                        $value = ";\n";
                    break;
                    case '}':
                        $value = "\n}\n";
                    break;
                }
            }
            fwrite($write, $value);
        }  
    }
}

$codeFormat = new codeFormat('bootstrap.min.css')


?>