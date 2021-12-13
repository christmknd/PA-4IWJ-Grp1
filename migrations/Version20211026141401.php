<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211026141401 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evenement ADD ville VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE evenement ADD pays VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE evenement ADD zip_code VARCHAR(5) NOT NULL');
        $this->addSql('ALTER TABLE evenement ADD lat_lng VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE evenement RENAME COLUMN lieu TO address');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE evenement ADD lieu VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE evenement DROP address');
        $this->addSql('ALTER TABLE evenement DROP ville');
        $this->addSql('ALTER TABLE evenement DROP pays');
        $this->addSql('ALTER TABLE evenement DROP zip_code');
        $this->addSql('ALTER TABLE evenement DROP lat_lng');
    }
}
