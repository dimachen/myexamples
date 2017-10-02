<?php

namespace lesson02\example\demo13;


// XML repository

class Config
{
    public $typeFile = "xml";
}

class RenderingStrategy
{

    /**
     * RenderingStrategy constructor.
     */
    public function __construct()
    {
        $config = new Config();

        if ($config->typeFile == 'txt') {

            $txtStudentRepository = new TXTStudentRepository();
            return $txtStudentRepository->findAllStudents(__DIR__ . '/list.txt');

        } else {
            $xmlStudentRepository = new TXTStudentRepository();
            return $xmlStudentRepository->findAllStudents(__DIR__ . '/list.xml');

        }

    }
}

class Student
{

    public function getStudentsData() {

        $renderingStrategy = new RenderingStrategy();
        print_r($renderingStrategy->__construct());

    }
}

abstract class StudentRepository
{


    /**
     *
     *
     * StudentRepository constructor.
     *
     * @param $file
     */
    abstract public function findAllStudents($file);


}

class TXTStudentRepository extends StudentRepository
{


    public function findAllStudents($file) {

        //echo "Внутри TXT хранилища";

        $rows = file($file);
        $students = [];
        foreach ($rows as $row) {
            $values = array_map('trim', explode(';', $row));
            $students[] = new Student($values[0], $values[1], $values[2]);
        }
        return $rows;
    }
}

class XMLStudentRepository extends StudentRepository
{

    public function findAllStudents($file) {
        //echo "Внутри XML хранилища";

        $rows = simplexml_load_file($file);
        $students = [];
        foreach ($rows->student as $row) {
            $students[] = new Student($row->lastName, $row->firstName, $row->birthDate);
        }
        return $rows;
    }
}

// ============================================



// --------------------------------------------

/** @var StudentRepository $studentRepository */

$student = new Student();

$student->getStudentsData();


// ============================================