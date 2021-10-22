<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211022093930 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE TABLE evenement_annonce (evenement_id INT NOT NULL, annonce_id INT NOT NULL, PRIMARY KEY(evenement_id, annonce_id))');
        $this->addSql('CREATE INDEX idx_f5508439fd02f13 ON evenement_annonce (evenement_id)');
        $this->addSql('CREATE INDEX idx_f55084398805ab2f ON evenement_annonce (annonce_id)');
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE TABLE evenement (id INT NOT NULL, utilisateur_id INT NOT NULL, titre VARCHAR(255) NOT NULL, date_event TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, lieu VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, etat BOOLEAN NOT NULL, at_created TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, nbr_views INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE SEQUENCE evenement_id_seq');
        $this->addSql('CREATE INDEX idx_b26681efb88e14f ON evenement (utilisateur_id)');
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE TABLE reset_password_request (id INT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, expires_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE SEQUENCE reset_password_request_id_seq');
        $this->addSql('CREATE INDEX idx_7ce748aa76ed395 ON reset_password_request (user_id)');
        $this->addSql('COMMENT ON COLUMN reset_password_request.requested_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN reset_password_request.expires_at IS \'(DC2Type:datetime_immutable)\'');
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE TABLE "user" (id INT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, is_verified BOOLEAN NOT NULL, type_de_compte VARCHAR(255) NOT NULL, pseudo VARCHAR(255) NOT NULL, siret VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE SEQUENCE user_id_seq');
        $this->addSql('CREATE UNIQUE INDEX uniq_8d93d649e7927c74 ON "user" (email)');
        $this->addSql('CREATE UNIQUE INDEX uniq_8d93d64986cc499d ON "user" (pseudo)');
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE TABLE annonce (id INT NOT NULL, utilisateur_id INT NOT NULL, titre VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, etat BOOLEAN NOT NULL, at_created TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, nbr_views INT NOT NULL, nom_animal VARCHAR(255) NOT NULL, espece VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, sexe VARCHAR(255) NOT NULL, age INT NOT NULL, ville VARCHAR(255) NOT NULL, pays VARCHAR(255) NOT NULL, zip_code VARCHAR(5) NOT NULL, lat_lng TEXT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE SEQUENCE annonce_id_seq');
        $this->addSql('CREATE INDEX idx_f65593e5fb88e14f ON annonce (utilisateur_id)');
        $this->addSql('COMMENT ON COLUMN annonce.lat_lng IS \'(DC2Type:array)\'');
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE TABLE user_evenement (user_id INT NOT NULL, evenement_id INT NOT NULL, PRIMARY KEY(user_id, evenement_id))');
        $this->addSql('CREATE INDEX idx_bc6e5faa76ed395 ON user_evenement (user_id)');
        $this->addSql('CREATE INDEX idx_bc6e5fafd02f13 ON user_evenement (evenement_id)');
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE TABLE user_annonce (user_id INT NOT NULL, annonce_id INT NOT NULL, PRIMARY KEY(user_id, annonce_id))');
        $this->addSql('CREATE INDEX idx_ae588defa76ed395 ON user_annonce (user_id)');
        $this->addSql('CREATE INDEX idx_ae588def8805ab2f ON user_annonce (annonce_id)');
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE TABLE tri_selection (id INT NOT NULL, age_tri VARCHAR(255) DEFAULT NULL, nbr_view_tri VARCHAR(255) DEFAULT NULL, date_at_created_tri VARCHAR(255) DEFAULT NULL, date_event_tri VARCHAR(255) DEFAULT NULL, lieu_tri VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE SEQUENCE tri_selection_id_seq');
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE TABLE filter_selection (id INT NOT NULL, sexe VARCHAR(255) DEFAULT NULL, espece VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE SEQUENCE filter_selection_id_seq');

    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('DROP TABLE evenement_annonce');
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('DROP TABLE evenement');
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('DROP TABLE reset_password_request');
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('DROP TABLE "user"');
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('DROP TABLE annonce');
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('DROP TABLE user_evenement');
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('DROP TABLE user_annonce');
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('DROP TABLE tri_selection');
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('DROP TABLE filter_selection');

        $this->addSql('DROP SEQUENCE evenement_id_seq');

        $this->addSql('DROP SEQUENCE reset_password_request_id_seq');

        $this->addSql('DROP SEQUENCE user_id_seq');

        $this->addSql('DROP SEQUENCE annonce_id_seq');

        $this->addSql('DROP SEQUENCE tri_selection_id_seq');

        $this->addSql('DROP SEQUENCE filter_selection_id_seq');

    }
}
