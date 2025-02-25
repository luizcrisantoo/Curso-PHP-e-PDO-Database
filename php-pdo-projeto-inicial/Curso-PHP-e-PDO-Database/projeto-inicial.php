<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Luiz Crisanto',
    new \DateTimeImmutable('2002-07-27')
);

echo $student->age();
