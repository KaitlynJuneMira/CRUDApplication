<?php 
    //fetching the  data
    $query = "SELECT * FROM `tblsubjects` LEFT JOIN tblsyllabus ON tblsyllabus.subject_id=tblsyllabus.subject_id";
    $result = mysqli_query($dbc, $query); //using mysqli_query
?>