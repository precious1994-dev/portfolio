<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200607195617 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE personne ADD prenom VARCHAR(50) DEFAULT NULL, ADD description LONGTEXT DEFAULT NULL, ADD email VARCHAR(100) NOT NULL, ADD date_creation DATETIME NOT NULL');
        $this->addSql('ALTER TABLE realisation ADD description LONGTEXT DEFAULT NULL, ADD domaine VARCHAR(50) NOT NULL, ADD date_debut DATETIME DEFAULT NULL, ADD date_fin DATETIME DEFAULT NULL, ADD piece_jointe VARCHAR(255) DEFAULT NULL, ADD flag TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE personne DROP prenom, DROP description, DROP email, DROP date_creation');
        $this->addSql('ALTER TABLE realisation DROP description, DROP domaine, DROP date_debut, DROP date_fin, DROP piece_jointe, DROP flag');
    }
}
