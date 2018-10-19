$authors__ = array('Carlos Conrado','Jairo Diaz','Pedro Acevedo');

//$re = "/^[[:alpha:]][[:word:]]*([.][[:word:]]+)*[@][[:word:]]+([.][[:word:]]+)*[.][a-z]{2,4}$/i";

function validateEmail($email) {
    $user = "/^[[:alpha:]][[:word:]]*([.][[:word:]]+)*";
    $host = "[[:word:]]+([.][[:word:]]+)*";
    $domain = "[.][a-z]{2,4}$/i";

    if (preg_match($user . "[@]" . $host . $domain , $email)) {
        print $email . " -> es valida.\n";
    } else {
        print $email . " -> no es valida.\n";
    }
}

function main($emails){
    $sw = 0;
    while($sw == 0){
        print "digite:
        1 ingresar un email. 
        2 ejecutar con emails por defecto.
        3 salir";
        $opt = readline(" : ");
        if($opt == "1"){
            validateEmail(readline("email : "));
        }elseif($opt == "2"){
            foreach($emails as $email){
                validateEmail($email);
            }
        }else{
           $sw = 1; 
        }
    }
}

$emails = array('pdacevedo@uninorte.edu.co',
                'dark.vader.superstar@gmail.com',
                '.jairo@hotmail.com',
                'a@b.com',
                'aguacate@hotmail',
                'mango@outlook.com.',
                '27kamicase@hotmail.com',
                'emma_stone@gmail.com',
                'saoirse_ronan.gmail.com',
                'Jennifer_Lawrence@hotmail.co.edu.org.com.it',
                'cara.delevigne@harvard.edu.harvard'
                );

main($emails);
