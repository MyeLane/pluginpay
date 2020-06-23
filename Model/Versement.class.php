<?php
//UPLOAD
class Versement{
    protected $nbordereaux;	
    protected $daty;
    protected $agence;
    protected  $idetudiants;
    protected   $motif ;
    protected   $etat;
    protected $decision;
    protected $dateserver;
    protected $montant;
    protected $observation;


    public function __construct($donnes)
    {
        $this->hydrate($donnes);
    }
    Public function hydrate($donnes){
        foreach ($donnes as $key => $value)
        {
            $key=strtolower($key);
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }

    public function setMontant($montant){
        $this->montant=$montant;
    }
    public function setNbordereaux($nbordereaux){
        $this->nbordereaux=$nbordereaux;
    }
    public function setDaty($daty){
        $this->daty=$daty;
    }
    public function setAgence($agence){
        $this->agence=$agence;
    }
    public function setIdetudiants($idetudiants){
        $this->idetudiants=$idetudiants;
    }
    public function setMotif($motif){
        $this->motif=$motif;
    }
    public function setEtat($etat){
        $this->etat=$etat;
    }
    public function setDecision($decision){
        $this->decision=$decision;
    }
    public function setDateserver($dateserver){
        $this->dateserver=$dateserver;
    }
    public function setObservation($observation){
        $this->observation=$observation;
    }



    public function getNbordereaux(){
        return $this->nbordereaux;
    }
    public function getDaty(){
        return $this->daty;
    }
    public function getAgence(){
        return $this->agence;
    }
    public function getIdetudiants(){
        return $this->idetudiants;
    }
    public function getMotif(){
        return $this->motif;
    }
    public function getEtat(){
        return $this->etat;
    }
    public function getDecision(){
        return $this->decision;
    }
    public function getDateserver(){
        return $this->dateserver;
    }
    public function getMontant(){
        return $this->montant;
    }
    public function getObservation(){
        return $this->observation;
    }




}
?>