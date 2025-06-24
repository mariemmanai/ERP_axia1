<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250624115546 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE articles DROP FOREIGN KEY FK_BFDD3168670C757F
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE articles DROP FOREIGN KEY FK_BFDD31686EEC6891
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE depots DROP FOREIGN KEY FK_D99EA4276EEC6891
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE nomenclature DROP FOREIGN KEY FK_799A3652F347EFB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE nomenclature DROP FOREIGN KEY FK_799A3652F46CD258
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE documents DROP FOREIGN KEY FK_A2B0728879E92E8C
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE documents DROP FOREIGN KEY FK_A2B07288A4F84F6E
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE documents DROP FOREIGN KEY FK_A2B072886EEC6891
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE profile_functions DROP FOREIGN KEY FK_FF33C4775FCA037F
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE profile_functions DROP FOREIGN KEY FK_FF33C4779A75FAA8
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE stock DROP FOREIGN KEY FK_4B365660DCA7A716
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE stock DROP FOREIGN KEY FK_4B365660A911CA8C
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE users DROP FOREIGN KEY FK_1483A5E95FCA037F
        SQL);
    }
}
