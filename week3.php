<?php
class Student {
  // Properties
  public $name;
  public $grade;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_grade($grade) {
    $this->grade = $grade;
  }
  function get_grade() {
    return $this->grade;
  }
}

$gowri = new Student();
$gowri->set_name('Gowri');
$gowri->set_grade('10');
echo "Name: " . $gowri->get_name();
echo "<br>";
echo "Grade: " .  $gowri->get_grade();
?>
