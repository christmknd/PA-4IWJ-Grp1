<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211021163929 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE trie_selection_id_seq CASCADE');
        $this->addSql('DROP TABLE trie_selection');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE trie_selection_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE trie_selection (id INT NOT NULL, age_tri BOOLEAN DEFAULT NULL, nbr_view_tri BOOLEAN DEFAULT NULL, date_at_created_tri BOOLEAN DEFAULT NULL, date_event_tri BOOLEAN DEFAULT NULL, PRIMARY KEY(id))');
    }
}
