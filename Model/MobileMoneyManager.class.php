<?php
//TODO OVAY NY ORDRE DE COLONNE ATY @ BSD
class MobileMoneyManager{
protected $db;
    public function __construct(PDO $db)
    {
        $this->db=$db;
    }

    public function setMobileMoney(MobileMoney $mobilemoney){
        //MOBILEMONEY
        $sql=$this->db->prepare("INSERT INTO MOBILEMONEY VALUES(NULL,:idetudiants,:daty,:reference,:motif,:etat,:decision,:dateserver,:montant)");
        $sql->bindValue(":reference",$mobilemoney->getReference(),PDO::PARAM_STR);
        $sql->bindValue(":daty",$mobilemoney->getDaty(),PDO::PARAM_STR);
        $sql->bindValue(":idetudiants",$mobilemoney->getIdetudiants(),PDO::PARAM_INT);
        $sql->bindValue(":motif",$mobilemoney->getMotif(),PDO::PARAM_STR);
        $sql->bindValue(":etat",$mobilemoney->getEtat(),PDO::PARAM_STR);
        $sql->bindValue(":decision",$mobilemoney->getDecision(),PDO::PARAM_STR);
        $sql->bindValue(":dateserver",date('Y-m-d H:i:s'),PDO::PARAM_STR);
        $sql->bindValue(":montant",$mobilemoney->getMontant(),PDO::PARAM_STR);
        $sql->execute();
        $sql->closeCursor();
    }
}
    ?>