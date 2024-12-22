<?php

namespace App\Repository;

use App\Entity\Student;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Student>
 */
class StudentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Student::class);
    }

    public function findByJmenoAndPrijmeni(string $jmeno, string $prijmeni): array
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.jmeno = :jmeno')
            ->andWhere('s.prijmeni = :prijmeni')
            ->setParameter('jmeno', $jmeno)
            ->setParameter('prijmeni', $prijmeni)
            ->getQuery()
            ->getResult();
    }
}





