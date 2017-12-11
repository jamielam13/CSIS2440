<?php
    //showing form if it is not filled out
    if ($_POST['hidden1'] == 0) {

        print <<<END
        Please Create a Character to put into the story.<br>
        Name: <input type="text" name="Name"><br>
    Age: <input type="number" name="Age"><br>
    Gender: F<input type="radio" value="F" name="Gender" selected="true">  M<input type="radio" value="M" name="Gender"><br>
    Class: <select name="Class">
        <option value="Detective">Detective</option>
        <option value="Scientest">Scientest</option>
        <option value="Soldier">Soldier</option>
        <option value="Doctor">Doctor</option>
    </select><br>
    <input type="submit" value="Show Me" name="Create"><br>
        
        <input type="hidden" value ="1" name="hidden1">
END;
    } else {
        $name = ucwords(strtolower($_POST["Name"]));
        // $name = $_POST['Name'];
        //$name = strtolower($name);
        // $name = ucwords($name);
        $age = $_POST["Age"];
        $gender = $_POST["Gender"];
        $class = $_POST["Class"];
        
        // reading in the files
        $settings = explode("\n", file_get_contents("CE04/settings.txt"));
        $objectives = explode("\n", file_get_contents("CE04/objectives.txt"));
        $antagonists = explode("\n", file_get_contents("CE04/antagonists.txt"));
        $complications = explode("\n", file_get_contents("CE04/complications.txt"));

        shuffle($settings);
        shuffle($objectives);
        shuffle($antagonists);
        shuffle($complications);
        if ($gender == "F") {
            $title = "Lady";
        } else {
            $title = "Sir";
        }
        printf("The brave $title $name <br> "
                . "at only the age of $age "
                . "is a $class<br>"
                . "This is the start of the story....<br>");

        echo $settings[0]." ".$objectives[0] 
            ." ". $antagonists[0]." ".$complications[0];

        echo <input type="submit" value="Try Again" name='Create'><br><input type="hidden" value ="0" name="hidden1">;

        // echo $settings[0]
        //     ." ".$objectives[0]
        //     ." ".$antagonists[0]
        //     ." ".$complications[0];
        //     echo "<br>";
        // <input type="submit" value="Try Again" name="Create">;
        // echo "<br>"<input type="hidden" value="0" name="hidden1">;
    }    
?>