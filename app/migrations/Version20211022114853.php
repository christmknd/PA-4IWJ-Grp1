<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211022114853 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {

        $this-> addSql(<<<SQL
            INSERT INTO "user" (id, email, roles, password, is_verified, type_de_compte, pseudo, siret) 
            values (nextval('public.user_id_seq'),'admin@test.fr','["ROLE_ADMIN"]','\$argon2id\$v=19\$m=65536,t=4,p=1$81COPPNq4C0lMb5yNt7fnw$8c7V9voW0nFVj18erpH9/drlXdNKxnMXwql6IsFDnao',false,'Admin','adminFirst',null)
        SQL);

    }

    public function down(Schema $schema) : void
    {
        $this->addSql(<<<SQL
            DELETE FROM  "user" WHERE pseudo='adminFirst'
        SQL);


    }
}
