<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201019103013 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commandes ADD employe_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commandes ADD CONSTRAINT FK_35D4282C1B65292 FOREIGN KEY (employe_id) REFERENCES employes (id)');
        $this->addSql('CREATE INDEX IDX_35D4282C1B65292 ON commandes (employe_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commandes DROP FOREIGN KEY FK_35D4282C1B65292');
        $this->addSql('DROP INDEX IDX_35D4282C1B65292 ON commandes');
        $this->addSql('ALTER TABLE commandes DROP employe_id');
    }
}
