<?php
class Auth{
    private $email;
    private $password;
    private $motDePasse;
    private $adresseEmail;
    static $erreur = false;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
        $this->motDePasse = '$2y$10$yR52kqtRxL8VMRmTkDoKwuw4cg3H.7vVkZzA2S9autTX8DFcQm7CG';
        $this->adresseEmail = "dedyakwety@gmail.com";
    }

    public static function IsConnecter()
    {
        if(session_status() === PHP_SESSION_NONE)
        {
            session_start();
        }
        if(array_key_exists("admin", $_SESSION))
        {
            header('Location: /admin');
            http_response_code(301);
            exit();
        }
    }

    public static function IsDeconnecter()
    {
        if(session_status() === PHP_SESSION_NONE)
        {
            session_start();
        }
        if(!array_key_exists("admin", $_SESSION))
        {
            header('Location: /autorisation');
            http_response_code(301);
            exit();
        }
    }

    public function validerDonnees()
    {
        $email = htmlentities($this->email);
        $password = htmlentities($this->password);
        $motDePasse = $this->motDePasse;
        $adresseEmail = $this->adresseEmail;
        if(!empty($email) AND !empty($password))
        {
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                if(preg_match("/[a-z]/", $email))
                {
                    if(preg_match("/[A-Za-z0-9,?]/", $password))
                    {
                        if($email === $adresseEmail AND 
                        password_verify($password, $motDePasse))
                        {
                            if(session_status() === PHP_SESSION_NONE)
                            {
                                session_start();
                            }
                            $_SESSION['admin'] = 'dedy est connecté';
                            if(!empty($_SESSION))
                            {
                                header('Location: /admin');
                                http_response_code(301);
                                exit();
                            }
                        } else{
                            $GLOBALS["erreur"] = "identifiants incorrects";
                        }
                    } else{
                        $GLOBALS["erreur"] = "Identifiants incorrects";
                    }
                } else{
                    $GLOBALS["erreur"] = "Identifiants incorrects";
                }
            } else{
                $GLOBALS["erreur"] = "Identifiants incorrects";
            }
        } else{
            $GLOBALS["erreur"] = "Entrer vos identifiants";
        }
    }

    public static function logout()
    {
        if(session_status() === PHP_SESSION_NONE)
        {
            session_start();
        }
        unset($_SESSION['admin']);
        if(!array_key_exists("admin", $_SESSION))
        {
            header('Location: /autorisation');
            http_response_code(301);
            exit();
        }
        var_dump($_SESSION);
    }
}
$email = !empty($_POST["adresseEmail"]) ? $_POST["adresseEmail"] : "";
$password = !empty($_POST["password"]) ? $_POST["password"] : "";
?>