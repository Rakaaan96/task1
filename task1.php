<?php
abstract class Employee {
    protected $name;
    protected $employeeId;

    public function __construct($name, $employeeId) {
        $this->name = $name;
        $this->employeeId = $employeeId;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmployeeId() {
        return $this->employeeId;
    }
    /*If I used interface, I would need to rewrite construct, getName, and getEmployeeId functions every time I implement the interface in a class
     but by using abstract class all three functions will be called automatically every time I extend the abstract class  */

    abstract public function performRoleSpecificTask();
}

class Manager extends Employee {
    public function performRoleSpecificTask() {
        return "Managing projects and teams."; // Manager's specific task
    }
}

class Developer extends Employee {
    public function performRoleSpecificTask() {
        return "Writing code and developing applications."; // Developer's specific task
    }
}

class Designer extends Employee {
    public function performRoleSpecificTask() {
        return "Creating visual designs and graphics."; // Designer's specific task
    }
}




//test the functionality 
$manager = new Manager("Ahmed Ali", 123);
echo "Manager: " . $manager->getName() . ", ID: " . $manager->getEmployeeId() . "\n";
echo "Task: " . $manager->performRoleSpecificTask() . "\n";

$developer = new Developer("Sarah Mohammed", 456);
echo "Developer: " . $developer->getName() . ", ID: " . $developer->getEmployeeId() . "\n";
echo "Task: " . $developer->performRoleSpecificTask() . "\n";

$designer = new Designer("Khalid Abdulrahman ", 789);
echo "Designer: " . $designer->getName() . ", ID: " . $designer->getEmployeeId() . "\n";
echo "Task: " . $designer->performRoleSpecificTask() . "\n";