<?php 
    require_once("../classes/award_class.php");

    
    function createAward($award_name, $award_description, $award_image){
        $award = new Awards;

        return $award->createAward($award_name, $award_description, $award_image);
    }

    function getAnAward($award_id){
        $award = new Awards;

        return $award->getAnAward($award_id);
    }

    function getAllAwardsAndNominees(){
        $award = new Awards;

        return $award->getAllAwardsAndNominees();
    }

    function getNomineesForAwards($award_id){
        $award = new Awards;

        return $award->getNomineesForAnAward($award_id);
    }

    function deleteAward($award_id){
        $award = new Awards;

        return $award->deleteAward($award_id);
    }

    function updateAward($award_id, $award_name, $award_description, $award_image){
        $award = new Awards;

        return $award->updateAward($award_id, $award_name, $award_description, $award_image);
    }

    function addNominee($award_id, $nominee_name, $nominee_description, $nominee_image){
        $award = new Awards;

        return $award->addNominee($award_id, $nominee_name, $nominee_description, $nominee_image);

    }

    function countNomimeeVotes($award_id,$nominee_id){
        $award = new Awards;

        return $award->countNomimeeVotesUnderAnAward($award_id,$nominee_id);
    }

    function deleteANominee($nominee_id){
        $award = new Awards;

        return $award->deleteANominee($nominee_id);
    }

    function updateANominee($award_id, $nominee_name, $nominee_description, $nominee_image){
        $award = new Awards;

        return $award->updateANominee($award_id, $nominee_name, $nominee_description, $nominee_image);
    }