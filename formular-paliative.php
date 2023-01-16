<?php


    if (isset($_POST['submitIngrijiri'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'] ? $_SERVER['HTTP_CLIENT_IP'] : ($_SERVER['HTTP_X_FORWARDED_FOR'] ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']);
        $nume = $_POST['nume'];
        $telefon = $_POST['telefon'];
        $email = $_POST['email'];
        $sexul = $_POST['sexul'];
        $varsta = $_POST['varsta'];
        $sectia = $_POST['sectia'];
        $gradulDeRudenie = $_POST['gradul-de-rudenie'];
        $varstaPacient = $_POST['varsta-pacient'];
        $insotitor = $_POST['insotitor'];
        $informareDrepturi = $_POST['informat'];
        $amabilitateReceptie = $_POST['receptie'];
        $calitateIngrijirilorMedic = $_POST['calitateaMedic'];
        $ingrijiriAcordateZiua = $_POST['ziua'];
        $ingrijiriAcordateNoapte = $_POST['noaptea'];
        $ingrijiriAcordateSambata = $_POST['sambata'];
        $informareDiagnostic = $_POST['informat-diagnostic'];
        $serviciiCazare = $_POST['cazare'];
        $serviciiAlimentatie = $_POST['alimentatie'];
        $serviciiCuratenie = $_POST['curatenie'];
        $serviciiLenjerie = $_POST['lenjerie'];
        $serviciiAtitudinePersonal = $_POST['atitudinePersonal'];
        $calitateConditiiCazare = $_POST['conditiiCazare'];
        $calitateaAlimentatiei = $_POST['calitateaAlimentatiei'];
        $mediculCurant = $_POST['mediculCurant'];
        $asistenteleMedicale = $_POST['asistentele'];
        $infirmiere = $_POST['infirmiere'];
        $brancardieri = $_POST['brancardieri'];
        $tratamentulMedicamentos = $_POST['tratament'];
        $achizitieMedicamente = $_POST['achizitieMedicament'];
        $insotitorpacientInvestigat = $_POST['pacientInvestigat'];
        $apreciereSectieIngrijiri = $_POST['apreciereFinala'];
        $descoperireSectie = $_POST['descoperire'];
        $recomandareSectie = $_POST['recomandare'];
        $newsletter = $_POST['newsletter'];
        if(isset($newsletter)) {

        }


        $to = "office@sfsava.ro";
      //  $to = "admin@lsdesign.ro";
        $subject = "Mesaj din formularul de pe site";
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
        $mesaj .= "Sectia: <strong>$sectia</strong> \r\n <br>";
        $mesaj .= "Gradul de rudenie: <strong>$gradulDeRudenie</strong> \r\n <br>";
        $mesaj .= "Varsta pacientului: <strong>$varstaPacient</strong> \r\n <br><br>";
        $mesaj .= "1. La internare pacientul a fost insotit de: <strong>$insotitor</strong> \r\n <br><br>";
        $mesaj .= "2. Ati fost informat de drepturile si obligatiile pacientului?: <strong>$informareDrepturi</strong> \r\n <br><br>";
        $mesaj .= "3. Cum apreciati amabilitatea si profesionalismul personalului de la receptie?: <strong>$amabilitateReceptie</strong> \r\n <br><br>";
        $mesaj .= "4. Cum apreciati calitatea ingrijirilor acordate de medic pentru pacient?: <strong>$calitateIngrijirilorMedic</strong> \r\n <br><br>";
        $mesaj .= "5. Sunteti multumit de ingrijirile acordate de personalul sanitar pacientului?: <br> <i>In timpul zilei: </i> <strong>$ingrijiriAcordateZiua</strong> <br> <i>In timpul noptii: </i><strong>$ingrijiriAcordateNoapte</strong> <br> <i>Sambata, duminica si sarbatorile legale: </i> <strong>$ingrijiriAcordateSambata</strong> \r\n <br><br>";

        $mesaj .= "6. Ati fost informat asupra diagnosticului, tratamentului, regimului alimentar al pacientului?: <strong>$informareDiagnostic</strong> <br><br>";

        $mesaj .= "7. Va rugam sa acordati calificative pentru urmatoarele servicii: <br> <i>Cazare: </i> <strong>$serviciiCazare</strong> <br> <i>Alimentatie: </i><strong>$serviciiAlimentatie</strong> <br> <i>Curatenie: </i> <strong>$serviciiCuratenie</strong> <br> <i>Lenjerie: </i> <strong>$serviciiLenjerie</strong> <br> <i>Atitudine personal: </i> <strong>$serviciiAtitudinePersonal</strong> \r\n <br><br>";

        $mesaj .= "8. Calitatea conditiilor de cazare: <strong>$calitateConditiiCazare</strong> \r\n <br><br>";
        $mesaj .= "9. Cum apreciati calitatea alimentatiei si modul de distribuire si alimentare a pacientilor: <strong>$calitateaAlimentatiei</strong> \r\n <br><br>";

        $mesaj .= "10. Va rugam sa acordati calificative pentru calitatea ingrijirilor acordate de: <br>
        <i>Medicul curant: </i> <strong>$mediculCurant</strong> <br>
        <i>Asistentele medicale:</i> <strong>$asistenteleMedicale</strong> <br>
        <i>Infirmiere/Ingrijitoare: </i>  <strong>$infirmiere</strong> <br>
        <i>Brancardieri: </i>  <strong>$brancardieri</strong> <br>\r\n <br><br>";

        $mesaj .= "11. Tratamentul medicamentos recomandat de medicul specialist pentru pacient:  <strong>$tratamentulMedicamentos</strong> \r\n <br><br>";

        $mesaj .= "12. In cazul in care dumneavoastra aduceti tratamentul medicamentos, care a fost modalitatea de achizitionare:  <strong>$achizitieMedicamente</strong> \r\n <br><br>";

        $mesaj .= "13. In momentul in care pacientul a trebuit sa faca anumite investigatii a fost insotit de personal medical:  <strong>$insotitorpacientInvestigat</strong> \r\n <br><br>";

        $mesaj .= "14. Cum apreciati Spitalul Sf. Sava sectia de Ingrijiri Paliative:  <strong>$apreciereSectieIngrijiri</strong> \r\n <br><br>";

        $mesaj .= "15. De unde ati aflat de Spitalul Sf. Sava sectia de Ingrijiri Paliative:  <strong>$descoperireSectie</strong> \r\n <br><br>";

        $mesaj .= "16. Ati recomanda sectia de Ingrijiri Paliative si cunoscutilor dumneavoastra:  <strong>$recomandareSectie</strong> \r\n <br><br>";

        $mesaj .= "Mesaj trimis de pe IP-ul:  <strong>$ip</strong> \r\n <br><br>";


        mail($to,$subject,$mesaj,$headers);

        echo 'Mesajul a fost trimis cu succes.';

    }

?>
