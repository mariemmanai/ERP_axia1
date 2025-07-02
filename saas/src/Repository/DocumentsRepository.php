<?php

namespace App\Repository;

use App\Entity\Documents;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Documents>
 *
 * @method Documents|null find($id, $lockMode = null, $lockVersion = null)
 * @method Documents|null findOneBy(array $criteria, array $orderBy = null)
 * @method Documents[]    findAll()
 * @method Documents[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DocumentsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Documents::class);
    }

    public function save(Documents $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Documents $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function getNextReference(string $type): string
    {
        $prefixes = [
            'Devis achat' => 'DA',
            'Commande achat' => 'CA',
            'Facture achat' => 'FA',
            'Facture achat avoire' => 'FAA',
            'Bon d\'entré' => 'BE',
            'Bon de transfert' => 'BT',
            'Bon de retour' => 'BR',
            'Devis vente' => 'DV',
            'Commande vente' => 'CV',
            'Facture vente' => 'FV',
            'Facture vente avoire' => 'FVA',
            'Bon de sortie' => 'BS',
            'Bon de livraison' => 'BL',
            'Inventaire' => 'INV'
        ];

        $prefix = $prefixMap[$type] ?? 'DOC';
        $year = date('y'); 
        $lastNum = $this->getLastReferenceNumber($type);
        
        return sprintf('%s%s%06d', $prefix, $year, $lastNum + 1);
    }
    private function getLastReferenceNumber(string $type): int
    {
        $lastDoc = $this->findOneBy(['type' => $type], ['id' => 'DESC']);
        return $lastDoc ? (int) substr($lastDoc->getReference(), -6) : 0;
    }
    public function findWithLignes(int $id): ?Documents
    {
        return $this->createQueryBuilder('d')
            ->leftJoin('d.lignes', 'l')
            ->addSelect('l')
            ->where('d.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult();
    }

}