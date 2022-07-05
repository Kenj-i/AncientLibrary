<?php
if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    header("location: ../../index.php?illegal-activities");
    exit();
}
include("../../backend/model/book.model.php");
class Random extends BookModel {
    public $nummer;
    public $kurztitle;
    public $autor;
    public $kategorie;
    public $verkauft;
    public $zustand;
    public $verfasser;
    public $foto;
    public $title;

    public function showRandom(){
        $result = $this->getRandom();
        
        $this->nummer = $result["nummer"];
        $this->kurztitle = $result["kurztitle"];
        if ($this->kurztitle == ""){
            $this->kurztitle = "N/A";
        }
        $this->autor = $result["autor"];
        if ($this->autor == " "){
            $this->autor = "N/A";
        }
        $this->kategorie = $result["kategorie"];
        $this->verkauft = "Ja";
        if ($result["verkauft"] == 0){
            $this->verkauft = "Nein";
        }
        $this->zustand = $result["beschreibung"];
        $this->verfasser = $result["benutzername"];
        $this->foto = $result["foto"];
        $this->title = $result["title"];
    }
}