<?php
include_once("../Model/M_Student.php");

class  Ctrl_Student
{
	public function invoke(){
		if(isset($_GET['studentId']))
		{
			$modelStudent =  new Model_Student();
			$student = $modelStudent->getStudentDetail($_GET['studentId']);

			include_once("../View/StudentDetail.html");
		}
		else
		{
			$modelStudent =  new Model_Student();
			$studentList = $modelStudent->getAllStudent();

			include_once("../View/StudentList.html");
		}
	}
};

$C_Student = new Ctrl_Student();
$C_Student->invoke();
