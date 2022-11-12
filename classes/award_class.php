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

    function getAwardsAndNominee($award_id){
        $sql = "";

        return $this->fetchAllData($sql);
    }
}


?>