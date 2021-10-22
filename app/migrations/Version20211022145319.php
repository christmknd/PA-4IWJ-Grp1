<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211022145319 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE annonce ALTER lat_lng TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE annonce ALTER lat_lng DROP DEFAULT');
        $this->addSql('COMMENT ON COLUMN annonce.lat_lng IS NULL');
        $this->addSql('ALTER TABLE annonce ADD CONSTRAINT FK_F65593E5FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681EFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE evenement_annonce ADD CONSTRAINT FK_F5508439FD02F13 FOREIGN KEY (evenement_id) REFERENCES evenement (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE evenement_annonce ADD CONSTRAINT FK_F55084398805AB2F FOREIGN KEY (annonce_id) REFERENCES annonce (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE user_annonce ADD CONSTRAINT FK_AE588DEFA76ED395 FOREIGN KEY (user_id) REFERENCES "user" (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE user_annonce ADD CONSTRAINT FK_AE588DEF8805AB2F FOREIGN KEY (annonce_id) REFERENCES annonce (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE user_evenement ADD CONSTRAINT FK_BC6E5FAA76ED395 FOREIGN KEY (user_id) REFERENCES "user" (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE user_evenement ADD CONSTRAINT FK_BC6E5FAFD02F13 FOREIGN KEY (evenement_id) REFERENCES evenement (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE evenement_annonce DROP CONSTRAINT FK_F5508439FD02F13');
        $this->addSql('ALTER TABLE evenement_annonce DROP CONSTRAINT FK_F55084398805AB2F');
        $this->addSql('ALTER TABLE evenement DROP CONSTRAINT FK_B26681EFB88E14F');
        $this->addSql('ALTER TABLE reset_password_request DROP CONSTRAINT FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE annonce DROP CONSTRAINT FK_F65593E5FB88E14F');
        $this->addSql('ALTER TABLE annonce ALTER lat_lng TYPE TEXT');
        $this->addSql('ALTER TABLE annonce ALTER lat_lng DROP DEFAULT');
        $this->addSql('COMMENT ON COLUMN annonce.lat_lng IS \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE user_evenement DROP CONSTRAINT FK_BC6E5FAA76ED395');
        $this->addSql('ALTER TABLE user_evenement DROP CONSTRAINT FK_BC6E5FAFD02F13');
        $this->addSql('ALTER TABLE user_annonce DROP CONSTRAINT FK_AE588DEFA76ED395');
        $this->addSql('ALTER TABLE user_annonce DROP CONSTRAINT FK_AE588DEF8805AB2F');
    }
}
