<?php
    $enroll = $_POST['enrollment'];
    $studentdata = simplexml_load_file("students.xml");
    if(!$studentdata)
    {
        echo "Failed to load file";
    }else{
        foreach($studentdata as $student)
        {
            if($student->enrollment==$enroll)
            {
                echo "Marks ".$student->total."<br>";
                echo "Percentage ".$student->percent."<br>";
            }
        }
    }