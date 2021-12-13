<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211118225907 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE User_toEvent (user_id INT NOT NULL, evenement_id INT NOT NULL, PRIMARY KEY(user_id, evenement_id))');
        $this->addSql('CREATE INDEX IDX_988185A76ED395 ON User_toEvent (user_id)');
        $this->addSql('CREATE INDEX IDX_988185FD02F13 ON User_toEvent (evenement_id)');
        $this->addSql('ALTER TABLE User_toEvent ADD CONSTRAINT FK_988185A76ED395 FOREIGN KEY (user_id) REFERENCES "user" (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE User_toEvent ADD CONSTRAINT FK_988185FD02F13 FOREIGN KEY (evenement_id) REFERENCES evenement (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE "user" ALTER siret TYPE VARCHAR(14)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D64926E94372 ON "user" (siret)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP TABLE User_toEvent');
        $this->addSql('DROP INDEX UNIQ_8D93D64926E94372');
        $this->addSql('ALTER TABLE "user" ALTER siret TYPE VARCHAR(255)');
    }
}
