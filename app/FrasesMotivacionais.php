<?php
class FrasesMotivacionais
{
    private $frase;

    
    public function __construct(FraseDoDia $frase)
    {
        $this->frase = $frase;
    }

    public function setFrase(FraseDoDia $frase)
    {
        $this->frase = $frase;
    }

    public function exibirFrase(): void
    {
        $result = $this->frase->getMsg();
        echo $result . "\n";
    }
}

interface FraseDoDia
{
    public function getMsg();
}

class FraseDeSegunda implements FraseDoDia
{
    public function getMsg()
    {
        $msg = "Hoje é segunda-feira.";

        return $msg;
    }
}

class FraseDeTerca implements FraseDoDia
{
    public function getMsg()
    {
        $msg = "Hoje é terça-feira.";

        return $msg;
    }
}

class FraseDeQuarta implements FraseDoDia
{
    public function getMsg()
    {
        $msg = "Hoje é quarta-feira.";

        return $msg;
    }
}

class FraseDeQuinta implements FraseDoDia
{
    public function getMsg()
    {
        $msg = "Hoje é quinta-feira.";

        return $msg;
    }
}

class FraseDeSexta implements FraseDoDia
{
    public function getMsg()
    {
        $msg = "Hoje é sexta-feira.";

        return $msg;
    }
}

class FraseDeSabado implements FraseDoDia
{
    public function getMsg()
    {
        $msg = "Hoje é Sábado.";

        return $msg;
    }
}

class FraseDeDomingo implements FraseDoDia
{
    public function getMsg()
    {
        $msg = "Hoje é Domingo.";

        return $msg;
    }
}

?>