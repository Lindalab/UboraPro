<?php 
require_once("../settings/db_class.php");

class Awards extends db_connection{

    function createAward($award_name, $award_description, $award_image){
        $sql = "";

        return $this->db_query($sql);
    }

    function getAnAward($award_id){
        $sql = "";

        return $this->fetchOne($sql);
    }

    function getAwardsAndNominees(){
        $sql = "";

        return $this->fetchAllData($sql);
    }

    function getNomineesForAwards($award_id){
        $sql = "";

        return $this->fetchOne($sql);
    }
    

    function deleteAward($award_id){
        $sql = "";

        return $this->db_query($sql);
    }

    function updateAward($award_name, $award_description, $award_image){
        $sql = "";

        return $this->db_query($sql);
    }

    function addNominee($award_id, $nominee_name, $nominee_description, $nominee_image){
        $sql = "";

        return $this->db_query($sql);
    }

}


?>