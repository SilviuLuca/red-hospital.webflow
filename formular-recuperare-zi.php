<?php


    if (isset($_POST['submitRecuperare'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'] ? $_SERVER['HTTP_CLIENT_IP'] : ($_SERVER['HTTP_X_FORWARDED_FOR'] ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']);
        $nume = $_POST['recuperareNume'];
        $telefon = $_POST['recuperareTelefon'];
        $email = $_POST['recuperareEmail'];
        $sexul = $_POST['recuperareSex'];
        $varsta = $_POST['recuperareVarsta'];
        $sectia = $_POST['recuperareSectia'];


        $insotitor = $_POST['recuperareInsotitor'];
        $informareDrepturi = $_POST['recuperareInformareDrepturi'];
        $respectareDrepturi = $_POST['recuperareRespectareDrepturi'];
        $obligatiiPacient = $_POST['recuperareRespectareObligatii'];

        $amabilitateReceptie = $_POST['recuperareAmbabilitateReceptie'];
        $consultatieMedic = $_POST['consultatieMedic'];

        $recuperarePersonalulSanitar = $_POST['recPersonalulSanitar'];
        $informareDiagnostic = $_POST['recuperareInformareDiagnostic'];


        $serviciiCuratenie = $_POST['recuperareCuratenie'];
        $serviciiAtitudinePersonal = $_POST['recuperareAtitudine'];



        $mediculCurant = $_POST['recuperareMedic'];
        $asistenteleMedicale = $_POST['recuperareAsistente'];

        $tratamentulMedicamentos = $_POST['recuperareTratament'];
        $atitudinePersonal = $_POST['recuperareAtitudinePersonal'];
        $externareInstruire = $_POST['recuperareInstruireExternare'];
        $externareDocumente = $_POST['recuperareExternareDocumente'];

        $insotitorpacientInvestigat = $_POST['recuperareInsotirePacientInvestigat'];
        $apreciereSectieRecuperare = $_POST['recuperareApreciere'];
        $descoperireSectie = $_POST['recuperareDescoperireSpital'];
        $recomandareSectie = $_POST['recuperareRecomandare'];
        $newsletter = $_POST['recuperareNewsletter'];
        if(isset($newsletter)) {

        }


        $to = "office@recumedis.ro";
        //$to = "admin@lsdesign.ro";
        $subject = "Mesaj din formularul de recuperare medicala";
        $senderEmail = $email;
        $senderName = $nume;



        $headers  = "From: $senderName < $senderEmail >\n";
        $headers .= "X-Sender: $senderName < $senderEmail >\n";
        $headers .= 'X-Mailer: PHP/' . phpversion();
        $headers .= "X-Priority: 1\n"; // Urgent message!
        $headers .= "Return-Path: $senderEmail\n"; // Return path for errors
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=iso-8859-1\n";

        $mesaj  = "Nume: <strong>$senderName</strong> \r\n <br>";
        $mesaj .= "Email: <strong>$senderEmail</strong> \r\n <br>";
        $mesaj .= "Telefon: <strong>$telefon</strong> \r\n <br>";
        $mesaj .= "Sexul: <strong>$sexul</strong>  \r\n <br>";
        $mesaj .= "Varsta: <strong>$varsta</strong> \r\n <br>";
        $mesaj .= "Sectia: <strong>$sectia</strong> \r\n <br><br>";

        $mesaj .= "1. La internare pacientul a fost insotit de: <strong>$insotitor</strong> \r\n <br><br>";

        $mesaj .= "2. Ati fost informat de drepturile si obligatiile dumneavoastra ca pacient: <strong>$informareDrepturi</strong> \r\n <br><br>";

        $mesaj .= "3. Au fost respectate aceste drepturi: <strong>$respectareDrepturi</strong> <br><br>";
        $mesaj .= "4. V-ati respectat obligatiile ca pacient: <strong>$obligatiiPacient</strong> <br><br>";

        $mesaj .= "5. Amabilitatea si profesionalismul personalului de la receptie: <strong>$amabilitateReceptie</strong> \r\n <br><br>";

        $mesaj .= "6. Sunteti multumit de timpul acordat de medic pentru consultatia dumneavoastra: <strong>$consultatieMedic</strong> \r\n <br><br>";

        $mesaj .= "7. Sunteti multumit de ingrijirile acordate de personalul sanitar pacientului?: <br> </i> <strong>$recuperarePersonalulSanitar</strong> \r\n <br><br>";

        $mesaj .= "8. Ati fost informat asupra diagnosticului, tratamentului, regimului alimentar al pacientului: <strong>$informareDrepturi</strong> <br><br>";

        $mesaj .= "9. Va rugam sa acordati calificative pentru urmatoarele servicii: <br> <i>Curatenie: </i> <strong>$serviciiCuratenie</strong>  <br> <i>Atitudine personal: </i> <strong>$serviciiAtitudinePersonal</strong> \r\n <br><br>";

        $mesaj .= "10. Cum apreciati calitatea alimentatiei si modul de distribuire si alimentare a pacientilor: <strong>$calitateaAlimentatiei</strong> \r\n <br><br>";

        $mesaj .= "11. Va rugam sa acordati calificative pentru calitatea ingrijirilor acordate de: <br>
        <i>Medicul curant: </i> <strong>$mediculCurant</strong> <br>
        <i>Asistentele medicale:</i> <strong>$asistenteleMedicale</strong> <br> \r\n <br><br>";

        $mesaj .= "12. Tratamentul medicamentos recomandat de medicul specialist pentru pacient:  <strong>$tratamentulMedicamentos</strong> \r\n <br><br>";
        $mesaj .= "13. Personalul medico-sanitar a avut o atitudine amabila si a manifestat disponibilitate fata de dumneavoastra:  <strong>$atitudinePersonal</strong> \r\n <br><br>";
        $mesaj .= "14. La externare ati fost instruit asupra modului de administrare a tratamentului recomandat:  <strong>$externareInstruire</strong> \r\n <br><br>";
        $mesaj .= "15. La externare ati primit toate documentele medicale (scrisoare medicala, reteta):  <strong>$externareDocumente</strong> \r\n <br><br>";
        $mesaj .= "16. In momentul in care pacientul a trebuit sa faca anumite investigatii (ex. radiografie) a fost insotit de personal medical:  <strong>$insotitorpacientInvestigat</strong> \r\n <br><br>";

        $mesaj .= "17. Cum apreciati Spitalul Sf. Sava sectia Recuperare Medicala:  <strong>$apreciereSectieRecuperare</strong> \r\n <br><br>";

        $mesaj .= "18. De unde ati aflat de Spitalul Sf. Sava sectia de Ingrijiri Paliative:  <strong>$descoperireSectie</strong> \r\n <br><br>";

        $mesaj .= "19. Ati recomanda sectia de Ingrijiri Paliative si cunoscutilor dumneavoastra:  <strong>$recomandareSectie</strong> \r\n <br><br>";

        $mesaj .= "Mesaj trimis de pe IP-ul:  <strong>$ip</strong> \r\n <br><br>";


        mail($to,$subject,$mesaj,$headers);

        echo 'Mesajul a fost trimis cu succes.';

    }

?>
