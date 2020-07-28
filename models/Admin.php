<?php
class Admin
{
    public function verifMail($bdd, $email)
    {
        $reqmail = $bdd->prepare("SELECT * FROM admin WHERE adresse_mail = ?");
        $reqmail->execute(array($email));
        
        return $reqmail;
    }

}