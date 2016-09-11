<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('student.php');
        
        $student = array();
        
        /*first student*/
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'john@doe.com');
        $first->add_email('work', 'john@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $student['j123'] = $first;
        
        /*second student*/
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $student['a456'] = $second;
        
        /* added myself as a student */
        $third = new Student();
        $third->surname = "Sonsoi";
        $third->first_name = "Kwanchanok (New)";
        $third->add_email('home', 'kwanchanok.mai@gmail.com');
        $third->add_email('school', 'nsonsoi@bcit.ca');
        $third->add_grade(85);
        $third->add_grade(90);
        $third->add_grade(95);
        $student['a261'] = $third;
        
        ksort($student); // one of the many sort functions
        
        /* for each $student object in $students array, print out $student's toString method */
        foreach ($student as $student) {
            echo $student->toString();
        }
        ?>
    </body>
</html>
