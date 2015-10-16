<?
class codeFormat
{
    private  $char_break = 'open'; /*value: open|close*/
    function codeFormat($files, $name_file)
    {
        if ($files['file']['size'] < '1')
        {
            $message = 'загрузите фаил!';
            header('location: ../index.php?message='.$message);
        }
        
        $string = file_get_contents($files['file']['tmp_name']);
        $array_char = str_split($string);
        $write = fopen($name_file.'.css', 'a+');
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

$codeFormat = new codeFormat($_FILES, $_REQUEST['name_file']);
$message = 'успех!';
header('location: ..\index.php?message='.$message);
?>