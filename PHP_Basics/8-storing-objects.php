<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Storing Objects</title>
</head>
<body>
    <form>
    Input:
    <br>
    <textarea name="input"></textarea>
    <br>
    Delimiter:
    <br>
    <input type="text" name="delimiter">
    <br>
    <input type="submit">
    </form>
    <?php
    class Student
    {
        protected $name;
        protected $age;
        protected $grade;

        function __construct($name, $age, $grade)
        {
            $this->name = $name;
            $this->age = $age;
            $this->grade = $grade;
        }

        public function __toString()
        {
            return "Name: $this->name; Age: $this->age; Grade: $this->grade";
        }

        function getName()
        {
            return $this->name;
        }

        function setName($name)
        {
            return $this->name = $name;
        }

        function getAge()
        {
            return $this->age;
        }

        function setAge($age)
        {
            return $this->age = $age;
        }

        function getGrade()
        {
            return $this->grade;
        }

        function setGrade($grade)
        {
            return $this->grade = $grade;
        }
    }
    if (isset($_GET['delimiter']) && isset($_GET['input'])) {
        $delimiter = $_GET['delimiter'];
        $namesAgesGrade = $_GET['input'];

        $tokens = explode("\n", $namesAgesGrade);
        $tokens = array_map('trim', $tokens);

        $students = [];
        for ($i = 0; $i < count($tokens); $i++) {
            $newArray = explode($delimiter, $tokens[$i]);
            $name = $newArray[0];
            $age = $newArray[1];
            $grade = floatval($newArray[2]);
            array_push($students, new Student($name, $age, $grade));

        }
        for ($i = 0; $i < count($students); $i++) {
            //   echo "<ul>";
            echo "<ul><li>Name: ".$students[$i]->getName()."</li><li>Age: ".$students[$i]->getAge()."</li><li>Grade: ".$students[$i]->getGrade()."</li></ul>";
        }
    }
    ?>
</body>
</html>