<?php
class Messages{
    private $nom;
    private $personnalite;
    private $message;
    private $fichier;

    public function __construct($nom, $personnalite, $message)
    {
        $this->nom = $nom;
        $this->personnalite = $personnalite;
        $this->message = $message;
    }

    public function messages()
    {
        return $this->messages;
    }

    public function sauveMessages(){
        $fichier =  __DIR__ . DIRECTORY_SEPARATOR . "Commentaires" . DIRECTORY_SEPARATOR . "Messages";
        $message = $this->nom."_".date('Y-m-d')."_".date('H:i')."_ ".$this->message."_"."rep "."& ";
        $sauve = file_put_contents($fichier, $message, FILE_APPEND);
        return $sauve;
    }

    public function afficheMessage(){
        $fichier =  __DIR__ . DIRECTORY_SEPARATOR . "Commentaires" . DIRECTORY_SEPARATOR . "Messages";
        $messages = file_get_contents($fichier);
        if($this->sauveMessages)
        {
            return $contenu = explode("&",$messages);
        }
    }

    public function traiterMessage()
    {
        $nom = htmlentities($this->nom);
        $personnalite = $this->personnalite;
        $message = htmlentities($this->message);
        if(!empty($nom))
        {
            if(!empty($personnalite))
            {
                if(!empty($message))
                {
                    if(preg_match("/[A-Za-z]/",$nom))
                    {
                        if(strlen($nom) > 2)
                        {
                            if(strlen($nom) < 16)
                            {
                                if(is_string($message))
                                {
                                    $this->sauveMessages();
                                } else{
                                    echo "Le message doit etre la chaine des caractères";
                                }
                            } else{
                                echo "Le nom est trop long";
                            }
                        } else{
                            echo "Le nom est trop court!";
                        }
                    } else{
                        echo "Le nom doit etre en lettre Svp!";
                    }
                } else{
                    echo "Entrer votre message Svp! le champs est vide";
                }
            } else{
                echo "Vous etes? veuillez selectionné dans le champs Svp!";
            }
        } else{
            echo "Entrer votre nom Svp!";
        }
    }
}
$nom = !empty($_POST["nom"]) ? $_POST["nom"] : "";
$personnalite = !empty($_POST["personnalite"]) ? $_POST["personnalite"] : "";
$message = !empty($_POST["message"]) ? $_POST["message"] : "";
?>