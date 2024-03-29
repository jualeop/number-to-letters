<?php

// FUNCIONES DE CONVERSION DE NUMEROS A LETRAS.

function centimos() {
    global $importe_parcial;

    $importe_parcial = number_format($importe_parcial, 2, ".", "") * 100;
    if ($importe_parcial > 0)
    {
        $num_letra = " con " . decena_centimos($importe_parcial);
    }
    else
    {
        $num_letra = "";
    }
    if(decena_centimos($importe_parcial) == 0)
    {
        $num_letra = '';
    }
    return $num_letra;
}

function unidad_centimos($numero) {
    $num_letra = '';
    switch ($numero) {
        case 9: {
                $num_letra = "nueve c&eacute;ntimos";
                break;
            }
        case 8: {
                $num_letra = "ocho c&eacute;ntimos";
                break;
            }
        case 7: {
                $num_letra = "siete c&eacute;ntimos";
                break;
            }
        case 6: {
                $num_letra = "seis c&eacute;ntimos";
                break;
            }
        case 5: {
                $num_letra = "cinco c&eacute;ntimos";
                break;
            }
        case 4: {
                $num_letra = "cuatro c&eacute;ntimos";
                break;
            }
        case 3: {
                $num_letra = "tres c&eacute;ntimos";
                break;
            }
        case 2: {
                $num_letra = "dos c&eacute;ntimos";
                break;
            }
        case 1: {
                $num_letra = "un c&eacute;ntimo";
                break;
            }
    }
    return $num_letra;
}

function decena_centimos($numero) {
    if ($numero >= 10) {
        if ($numero >= 90 && $numero <= 99) {
            if ($numero == 90)
                return "noventa c&eacute;ntimos";
            else if ($numero == 91)
                return "noventa y un c&eacute;ntimos";
            else
                return "noventa y " . unidad_centimos($numero - 90);
        }
        if ($numero >= 80 && $numero <= 89) {
            if ($numero == 80)
                return "ochenta c&eacute;ntimos";
            else if ($numero == 81)
                return "ochenta y un c&eacute;ntimos";
            else
                return "ochenta y " . unidad_centimos($numero - 80);
        }
        if ($numero >= 70 && $numero <= 79) {
            if ($numero == 70)
                return "setenta c&eacute;ntimos";
            else if ($numero == 71)
                return "setenta y un c&eacute;ntimos";
            else
                return "setenta y " . unidad_centimos($numero - 70);
        }
        if ($numero >= 60 && $numero <= 69) {
            if ($numero == 60)
                return "sesenta c&eacute;ntimos";
            else if ($numero == 61)
                return "sesenta y un c&eacute;ntimos";
            else
                return "sesenta y " . unidad_centimos($numero - 60);
        }
        if ($numero >= 50 && $numero <= 59) {
            if ($numero == 50)
                return "cincuenta c&eacute;ntimos";
            else if ($numero == 51)
                return "cincuenta y un c&eacute;ntimos";
            else
                return "cincuenta y " . unidad_centimos($numero - 50);
        }
        if ($numero >= 40 && $numero <= 49) {
            if ($numero == 40)
                return "cuarenta c&eacute;ntimos";
            else if ($numero == 41)
                return "cuarenta y un c&eacute;ntimos";
            else
                return "cuarenta y " . unidad_centimos($numero - 40);
        }
        if ($numero >= 30 && $numero <= 39) {
            if ($numero == 30)
                return "treinta c&eacute;ntimos";
            else if ($numero == 31)
                return "treinta y un c&eacute;ntimos";
            else
                return "treinta y " . unidad_centimos($numero - 30);
        }
        if ($numero >= 20 && $numero <= 29) {
            if ($numero == 20)
                return "veinte c&eacute;ntimos";
            else if ($numero == 21)
                return "veintiun c&eacute;ntimos";
            else
                return "veinti" . unidad_centimos($numero - 20);
        }
        if ($numero >= 10 && $numero <= 19) {
            if ($numero == 10)
                return "diez c&eacute;ntimos";
            else if ($numero == 11)
                return "once c&eacute;ntimos";
            else if ($numero == 12)
                return "doce c&eacute;ntimos";
            else if ($numero == 13)
                return "trece c&eacute;ntimos";
            else if ($numero == 14)
                return "catorce c&eacute;ntimos";
            else if ($numero == 15)
                return "quince c&eacute;ntimos";
            else if ($numero == 16)
                return "dieciseis c&eacute;ntimos";
            else if ($numero == 17)
                return "diecisiete c&eacute;ntimos";
            else if ($numero == 18)
                return "dieciocho c&eacute;ntimos";
            else if ($numero == 19)
                return "diecinueve c&eacute;ntimos";
        }
    } else
        return unidad_centimos($numero);
}

function unidad($numero) {
    switch ($numero) {
        case 9: {
                $num = "nueve";
                break;
            }
        case 8: {
                $num = "ocho";
                break;
            }
        case 7: {
                $num = "siete";
                break;
            }
        case 6: {
                $num = "seis";
                break;
            }
        case 5: {
                $num = "cinco";
                break;
            }
        case 4: {
                $num = "cuatro";
                break;
            }
        case 3: {
                $num = "tres";
                break;
            }
        case 2: {
                $num = "dos";
                break;
            }
        case 1: {
                $num = "uno";
                break;
            }
        case 0: {
                $num = " ";
                break;
            }
    }
    return $num;
}

function decena($numero) {
    if ($numero >= 90 && $numero <= 99) {
        $num_letra = "noventa ";

        if ($numero > 90)
            $num_letra = $num_letra . "y " . unidad($numero - 90);
    }
    else if ($numero >= 80 && $numero <= 89) {
        $num_letra = "ochenta ";

        if ($numero > 80)
            $num_letra = $num_letra . "y " . unidad($numero - 80);
    }
    else if ($numero >= 70 && $numero <= 79) {
        $num_letra = "setenta ";

        if ($numero > 70)
            $num_letra = $num_letra . "y " . unidad($numero - 70);
    }
    else if ($numero >= 60 && $numero <= 69) {
        $num_letra = "sesenta ";

        if ($numero > 60)
            $num_letra = $num_letra . "y " . unidad($numero - 60);
    }
    else if ($numero >= 50 && $numero <= 59) {
        $num_letra = "cincuenta ";

        if ($numero > 50)
            $num_letra = $num_letra . "y " . unidad($numero - 50);
    }
    else if ($numero >= 40 && $numero <= 49) {
        $num_letra = "cuarenta ";

        if ($numero > 40)
            $num_letra = $num_letra . "y " . unidad($numero - 40);
    }
    else if ($numero >= 30 && $numero <= 39) {
        $num_letra = "treinta ";

        if ($numero > 30)
            $num_letra = $num_letra . "y " . unidad($numero - 30);
    }
    else if ($numero >= 20 && $numero <= 29) {
        if ($numero == 20)
            $num_letra = "veinte ";
        else
            $num_letra = "veinti" . unidad($numero - 20);
    }
    else if ($numero >= 10 && $numero <= 19) {
        switch ($numero) {
            case 10: {
                    $num_letra = "diez ";
                    break;
                }
            case 11: {
                    $num_letra = "once ";
                    break;
                }
            case 12: {
                    $num_letra = "doce ";
                    break;
                }
            case 13: {
                    $num_letra = "trece ";
                    break;
                }
            case 14: {
                    $num_letra = "catorce ";
                    break;
                }
            case 15: {
                    $num_letra = "quince ";
                    break;
                }
            case 16: {
                    $num_letra = "dieciseis ";
                    break;
                }
            case 17: {
                    $num_letra = "diecisiete ";
                    break;
                }
            case 18: {
                    $num_letra = "dieciocho ";
                    break;
                }
            case 19: {
                    $num_letra = "diecinueve ";
                    break;
                }
        }
    } else
        $num_letra = unidad($numero);

    return $num_letra;
}

function centena($numero) {
    if ($numero >= 100) {
        if ($numero >= 900 & $numero <= 999) {
            $num_letra = "novecientos ";

            if ($numero > 900)
                $num_letra = $num_letra . decena($numero - 900);
        }
        else if ($numero >= 800 && $numero <= 899) {
            $num_letra = "ochocientos ";

            if ($numero > 800)
                $num_letra = $num_letra . decena($numero - 800);
        }
        else if ($numero >= 700 && $numero <= 799) {
            $num_letra = "setecientos ";

            if ($numero > 700)
                $num_letra = $num_letra . decena($numero - 700);
        }
        else if ($numero >= 600 && $numero <= 699) {
            $num_letra = "seiscientos ";

            if ($numero > 600)
                $num_letra = $num_letra . decena($numero - 600);
        }
        else if ($numero >= 500 && $numero <= 599) {
            $num_letra = "quinientos ";

            if ($numero > 500)
                $num_letra = $num_letra . decena($numero - 500);
        }
        else if ($numero >= 400 && $numero <= 499) {
            $num_letra = "cuatrocientos ";

            if ($numero > 400)
                $num_letra = $num_letra . decena($numero - 400);
        }
        else if ($numero >= 300 && $numero <= 399) {
            $num_letra = "trescientos ";

            if ($numero > 300)
                $num_letra = $num_letra . decena($numero - 300);
        }
        else if ($numero >= 200 && $numero <= 299) {
            $num_letra = "doscientos ";

            if ($numero > 200)
                $num_letra = $num_letra . decena($numero - 200);
        }
        else if ($numero >= 100 && $numero <= 199) {
            if ($numero == 100)
                $num_letra = "cien ";
            else
                $num_letra = "ciento " . decena($numero - 100);
        }
    } else
        $num_letra = decena($numero);

    return $num_letra;
}

function cien() {
    global $importe_parcial;

    $parcial = 0;
    $car = 0;

    if ($importe_parcial != 0) {
        while (substr($importe_parcial, 0, 1) == 0)
            $importe_parcial = substr($importe_parcial, 1, strlen($importe_parcial) - 1);
    }

    if ($importe_parcial == 0)
        $car = 4;
    if ($importe_parcial >= 1 && $importe_parcial <= 9.99)
        $car = 1;
    else if ($importe_parcial >= 10 && $importe_parcial <= 99.99)
        $car = 2;
    else if ($importe_parcial >= 100 && $importe_parcial <= 999.99)
        $car = 3;

    if ($car == 4) {
        $num_letra = " ";
    } else {
        $parcial = substr($importe_parcial, 0, $car);
        $importe_parcial = substr($importe_parcial, $car);

        $num_letra = centena($parcial) . centimos();
    }

    return $num_letra;
}

function cien_mil() {
    global $importe_parcial;

    $parcial = 0;
    $car = 0;

    if ($importe_parcial != 0) {
        while (substr($importe_parcial, 0, 1) == 0)
            $importe_parcial = substr($importe_parcial, 1, strlen($importe_parcial) - 1);
    }

    if ($importe_parcial >= 1000 && $importe_parcial <= 9999.99)
        $car = 1;
    else if ($importe_parcial >= 10000 && $importe_parcial <= 99999.99)
        $car = 2;
    else if ($importe_parcial >= 100000 && $importe_parcial <= 999999.99)
        $car = 3;

    $parcial = substr($importe_parcial, 0, $car);
    $importe_parcial = substr($importe_parcial, $car);

    if ($parcial > 0) {
        if ($parcial == 1)
            $num_letra = "mil ";
        else
            $num_letra = centena($parcial) . " mil ";
    } else
        $num_letra = " ";

    return $num_letra;
}

function millon() {
    global $importe_parcial;

    $parcial = 0;
    $car = 0;

    while (substr($importe_parcial, 0, 1) == 0)
        $importe_parcial = substr($importe_parcial, 1, strlen($importe_parcial) - 1);

    if ($importe_parcial >= 1000000 && $importe_parcial <= 9999999.99)
        $car = 1;
    else if ($importe_parcial >= 10000000 && $importe_parcial <= 99999999.99)
        $car = 2;
    else if ($importe_parcial >= 100000000 && $importe_parcial <= 999999999.99)
        $car = 3;

    $parcial = substr($importe_parcial, 0, $car);
    $importe_parcial = substr($importe_parcial, $car);

    if ($parcial == 1)
        $num_letras = "un millon ";
    else
        $num_letras = centena($parcial) . " millones ";

    return $num_letras;
}

function convertir_a_letras($numero) {
    global $importe_parcial;

    $importe_parcial = $numero;

    if ($numero < 1000000000) {
        if ($numero >= 1000000 && $numero <= 999999999.99)
            $num_letras = millon() . cien_mil() . cien();
        else if ($numero >= 1000 && $numero <= 999999.99)
            $num_letras = cien_mil() . cien();
        else if ($numero >= 1 && $numero <= 999.99)
            $num_letras = cien();
        else if ($numero == 0)
            $num_letras = "cero";
        else if ($numero >= 0.01 && $numero <= 0.99) {
            if ($numero == 0.01)
                $num_letras = "un c&eacute;ntimo";
            else
                $num_letras = convertir_a_letras(($numero * 100) . "/100") . " c�ntimos";
        }
    }
    else {
        $num_letras = "Valor no soportado";
    }
    return $num_letras;
}


?>