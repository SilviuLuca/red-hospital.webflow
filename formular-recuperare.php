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
        $consultatieMedic = $_POST['recuperareMedic'];
        
        $recuperareAcordateZiua = $_POST['recuperareZiua'];
        $recuperareAcordateNoapte = $_POST['recuperareNoaptea'];
        $recuperareAcordateSambata = $_POST['recuperareSambata'];
        $informareDiagnostic = $_POST['recuperareInformareDiagnostic'];
        $serviciiCazare = $_POST['recuperareCazare'];
        $serviciiAlimentatie = $_POST['recuperareAlimentatie'];
        $serviciiCuratenie = $_POST['recuperareCuratenie'];
        $serviciiLenjerie = $_POST['recuperareLenjerie'];        
        $serviciiAtitudinePersonal = $_POST['recuperareAtitudine'];
        
        $calitateConditiiCazare = $_POST['recuperareCalitateConditii'];
        $calitateaAlimentatiei = $_POST['recuperareCalitateAlimentatie'];
        $mediculCurant = $_POST['recuperareMedic'];
        $asistenteleMedicale = $_POST['recuperareAsistente'];
        $infirmiere = $_POST['recuperareInfirmiere'];
        $brancardieri = $_POST['recuperareBrancardieri'];
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
        
        $mesaj .= "La internare pacientul a fost insotit de: <strong>$insotitor</strong> \r\n <br><br>";
        
        $mesaj .= "Ati fost informat de drepturile si obligatiile dumneavoastra ca pacient: <strong>$informareDrepturi</strong> \r\n <br><br>";
        
        $mesaj .= "Au fost respectate aceste drepturi: <strong>$respectareDrepturi</strong> <br><br>";
        $mesaj .= "V-ati respectat obligatiile ca pacient: <strong>$obligatiiPacient</strong> <br><br>";
        
        $mesaj .= "Amabilitatea si profesionalismul personalului de la receptie: <strong>$amabilitateReceptie</strong> \r\n <br><br>";
        
        $mesaj .= "Sunteti multumit de timpul acordat de medic pentru consultatia dumneavoastra: <strong>$consultatieMedic</strong> \r\n <br><br>";
        
        $mesaj .= "Sunteti multumit de ingrijirile acordate de personalul sanitar pacientului?: <br> <i>In timpul zilei: </i> <strong>$recuperareAcordateZiua</strong> <br> <i>In timpul noptii: </i><strong>$recuperareAcordateNoapte</strong> <br> <i>Sambata, duminica si sarbatorile legale: </i> <strong>$recuperareAcordateSambata</strong> \r\n <br><br>";
        
        $mesaj .= "Ati fost informat asupra diagnosticului, tratamentului, regimului alimentar al pacientului: <strong>$informareDrepturi</strong> <br><br>";
        
        $mesaj .= "Va rugam sa acordati calificative pentru urmatoarele servicii: <br> <i>Cazare: </i> <strong>$serviciiCazare</strong> <br> <i>Alimentatie: </i><strong>$serviciiAlimentatie</strong> <br> <i>Curatenie: </i> <strong>$serviciiCuratenie</strong> <br> <i>Lenjerie: </i> <strong>$serviciiLenjerie</strong> <br> <i>Atitudine personal: </i> <strong>$serviciiAtitudinePersonal</strong> \r\n <br><br>";
        
        $mesaj .= "Calitatea conditiilor de cazare: <strong>$calitateConditiiCazare</strong> \r\n <br><br>";
        $mesaj .= "Cum apreciati calitatea alimentatiei si modul de distribuire si alimentare a pacientilor: <strong>$calitateaAlimentatiei</strong> \r\n <br><br>";
        
        $mesaj .= "Va rugam sa acordati calificative pentru calitatea ingrijirilor acordate de: <br>
        <i>Medicul curant: </i> <strong>$mediculCurant</strong> <br>
        <i>Asistentele medicale:</i> <strong>$asistenteleMedicale</strong> <br>
        <i>Infirmiere/Ingrijitoare: </i>  <strong>$infirmiere</strong> <br> 
        <i>Brancardieri: </i>  <strong>$brancardieri</strong> <br>\r\n <br><br>";
        
        $mesaj .= "Tratamentul medicamentos recomandat de medicul specialist pentru pacient:  <strong>$tratamentulMedicamentos</strong> \r\n <br><br>";
        $mesaj .= "Personalul medico-sanitar a avut o atitudine amabila si a manifestat disponibilitate fata de dumneavoastra:  <strong>$atitudinePersonal</strong> \r\n <br><br>";
        $mesaj .= "La externare ati fost instruit asupra modului de administrare a tratamentului recomandat:  <strong>$externareInstruire</strong> \r\n <br><br>";
        $mesaj .= "La externare ati primit toate documentele medicale (scrisoare medicala, reteta):  <strong>$externareDocumente</strong> \r\n <br><br>";
        $mesaj .= "In momentul in care pacientul a trebuit sa faca anumite investigatii (ex. radiografie) a fost insotit de personal medical:  <strong>$insotitorpacientInvestigat</strong> \r\n <br><br>";
  
        $mesaj .= "Cum apreciati Spitalul Sf. Sava sectia Recuperare Medicala:  <strong>$apreciereSectieRecuperare</strong> \r\n <br><br>";
        
        $mesaj .= "De unde ati aflat de Spitalul Sf. Sava sectia de Ingrijiri Paliative:  <strong>$descoperireSectie</strong> \r\n <br><br>";
        
        $mesaj .= "Ati recomanda sectia de Ingrijiri Paliative si cunoscutilor dumneavoastra:  <strong>$recomandareSectie</strong> \r\n <br><br>";
        
        $mesaj .= "Mesaj trimis de pe IP-ul:  <strong>$ip</strong> \r\n <br><br>";


        mail($to,$subject,$mesaj,$headers);

        echo 'Mesajul a fost trimis cu succes.';

    }

?>