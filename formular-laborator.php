<?php


    if (isset($_POST['submitLaborator'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'] ? $_SERVER['HTTP_CLIENT_IP'] : ($_SERVER['HTTP_X_FORWARDED_FOR'] ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']);
        $nume = $_POST['nume'];
        $telefon = $_POST['telefon'];
        $email = $_POST['email'];
        
        $programarea = $_POST['programarea'];
        $personalMediu = $_POST['personalMediu'];
        $personalSuperior = $_POST['personalSuperior'];
        $dotariTehnice = $_POST['dotari'];
        $preciziaRezultatelor = $_POST['precizia'];
        $recomandare = $_POST['recomandare'];
        $timpAsteptare = $_POST['timp'];
        $txtRecomandari = $_POST['recomandari'];
        $calificativTotal = 0;
        $calificativTotal = $programarea + $personalMediu + $personalSuperior  + $dotariTehnice + $preciziaRezultatelor + $timpAsteptare;
        
        
        $newsletter = $_POST['laboratorNewsletter']; 
        if(isset($newsletter)) { 
            
        } 
        
        
        $to = "secretariat@recumedis.ro";
        $subject = "Mesaj din formularul de laborator";
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
        $mesaj .= "Telefon: <strong>$telefon</strong> \r\n <br><br>";
        
        $mesaj .= "Cum apreciati eficienta sistemului organizatoric privind primirea-programarea utilizatorilor: <strong>$programarea</strong> \r\n <br><br>";
        
        $mesaj .= "Cum apreciati profesionalismul personalului medical mediu cu care ati intrat incontact: <strong>$personalMediu</strong> \r\n <br><br>";
        
        $mesaj .= "Cum apreciati profesionalismul personalului medical superior care v-a sfatuit: <strong>$personalSuperior</strong> <br><br>";
        
        $mesaj .= "Cum apreciati nivelul dotarii tehnice: <strong>$dotariTehnice</strong> \r\n <br><br>";
        
        $mesaj .= "Cum apreciati precizia si claritatea rezultatelor inscrise pe documentele medicale care v-au fost eliberate: <strong>$preciziaRezultatelor</strong> \r\n <br><br>";
        
        $mesaj .= "Ati recomanda unui alt PACIENT sa apeleze la serviciile acestui laborator: <br> <i>Impresia dumneavoastra generala: </i> <strong>$recomandare</strong> \r\n <br><br>";
        
        $mesaj .= "Cum apreciati respectarea timpului de programare pentru prelevare si a timpului de asteptare a eliberarii rezultatelor: <strong>$timpAsteptare</strong> <br><br>";
        
        $mesaj .= "Ce recomandari puteti face pentru imbunatatirea calitatii serviciilor medicale ale Laboratorului RECUMEDIS (eventual in relatie cu raspunsurile date mai sus): <strong>$txtRecomandari</strong> \r\n <br><br>";
        $mesaj .= "Calificativ TOTAL: <strong> $calificativTotal </strong> (din 70)";


        mail($to,$subject,$mesaj,$headers);

        echo 'Mesajul a fost trimis cu succes.';

    }

?>