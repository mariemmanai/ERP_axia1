<?php
namespace App\Repository;

use App\Entity\Numenclat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class NomenclatureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Numenclat::class);
    }

    public function save(Numenclat $entity, bool $flush = false): void
    {
        $this->_em->persist($entity);
        if ($flush) $this->_em->flush();
    }

    public function remove(Numenclat $entity, bool $flush = false): void
    {
        $this->_em->remove($entity);
        if ($flush) $this->_em->flush();
    }

    public function findGroupedByProduit(): array
    {
        return $this->createQueryBuilder('n')
            ->addSelect('p')
            ->addSelect('m')
            ->join('n.produit', 'p')
            ->join('n.matiere', 'm')
            ->getQuery()
            ->getResult();
    }
}