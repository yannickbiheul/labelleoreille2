<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210520135124 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE actu ADD image_actu_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE actu ADD CONSTRAINT FK_83730342626EB884 FOREIGN KEY (image_actu_id) REFERENCES image_actu (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_83730342626EB884 ON actu (image_actu_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE actu DROP FOREIGN KEY FK_83730342626EB884');
        $this->addSql('DROP INDEX UNIQ_83730342626EB884 ON actu');
        $this->addSql('ALTER TABLE actu DROP image_actu_id');
    }
}
