
<?php
interface Format
{
    public function setFormat(string $logger);
}
interface Run
{
    public function setRun(Format $deliver);
}
class FormatRaw implements Format
{
    public function setFormat(string $string)
    {
        return $string;
    }
}
class FormatWithDate implements Format
{

    public function setFormat(string $string)
    {
        return date('Y-m-d') . $string;
    }
}
class FormatDateAndDetails implements Format
{
    public function setFormat(string $string)
    {
        return date('Y-m-d') . $string;
    }
}
class RunEmail implements Run
{
    public function setRun($format)
    {
        echo "Вывод ({$format}) в email";
    }
}
class RunSms implements Run
{
    public function setRun($format)
    {
        echo "Вывод ({$format}) в SMS";
    }
}
class RunConsole implements Run
{
    public function setRun($format)
    {
        echo "Вывод ({$format}) в консоле";
    }
}
class Logger
{
    private $format;
    private $run;
    public function __construct(Format $format, Run $delivery)
    {
        $this->format = $format;
        $this->run = $delivery;
    }

    public function log($string)
    {
        $this->run($this->format($string));
    }

    public function format($string)
    {
        return $this->format->setFormat($string);
    }

    public function run($format)
    {
        $this->run->setRun($format);
    }

}

$logger = new Logger(new FormatWithDate(), new RunConsole);
$logger->log('');
?>