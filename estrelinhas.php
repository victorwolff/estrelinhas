<?php

echo "Digite um número de 3 a 15\n";
class estrelinhas
{
    //Desenhos com asteriscos

    private $num;

public function funcoes($num)
{


    $this->num = $num;//numero recebido como parametro, NUNCA DEVERÁ SER ALTERADO
    $cont = $num + 1;//contador 1
    $sext = $num - 1;//contador 2



    if ($num >= 3 && $num <= 15)//condição
    {

        //primeiro
        for ($i = 0; $i < $num; $i++) {
            echo "*";

        }

//segundo
        echo "\n--------------------";

        for ($i = 0; $i < $num; $i++) {
            echo "\n";

            for ($j = 0; $j < $num; $j++) {
                echo "*";
            }

        }
//terceiro
        echo "\n--------------------";

        for ($i = 0; $i < $num; $i++) {
            echo "\n";
            for ($j = 0; $j <= $i; $j++) {
                echo "*";
            }

        }

//quarto


        echo "\n--------------------";
        for ($i = 0; $i < $num; $i++) {
            echo "\n";
            $cont = $cont - 1;

            for ($j = 0; $j < $cont; $j++) {
                echo "*";
            }

        }

//quinto
        echo "\n--------------------";

        for ($i = 0; $i < $num; $i++) {
            echo "\n";

            for ($j = 0; $j < $num; $j++) {
                if ($j < $i)
                    echo " ";
                else
                    echo "*";
            }

        }

//sexto
        echo "\n--------------------";

        for ($i = 0; $i < $num; $i++) {
            echo "\n";

            for ($j = 0; $j < $num; $j++) {
                if ($j < $sext)

                    echo " ";

                else
                    echo "*";

            }
            $sext = $sext - 1;
        }
    } else
        {
            echo "Você digitou um numero invalido";
        }
}
}

$value = new estrelinhas();
$value -> funcoes("5");//valor que o usuario quer digitar