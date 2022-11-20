<?php
require_once dirname(__FILE__)."/../../controllers/users_controller.php";

session_start();

$user_id = $_SESSION['user_id'];
$nomimee_id = $_GET['radiobutton'];
$award_id = $_GET['award_id'];

$hasVoted = userHasVoted_ctr($user_id, $award_id);

if ($hasVoted == 0) {
    $result = vote_ctr($user_id, $nomimee_id, $award_id);
    if ($result) {
        echo "<script>alert('Vote Recorded Successfully')</script>";
        header("Location: ./../../view/voting.php");
    } else {
        echo "<script>alert('failed to vote')</script>";
    }
} else {
    echo "<script>alert('Vote Cast Already For This Award')</script>";
}
