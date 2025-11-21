<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251120215948 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE oeuvre ADD updated_at DATETIME DEFAULT NULL, CHANGE category_id category_id INT DEFAULT NULL, CHANGE description description LONGTEXT DEFAULT NULL, CHANGE prix prix DOUBLE PRECISION DEFAULT NULL, CHANGE image image_name VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE oeuvre DROP updated_at, CHANGE category_id category_id INT NOT NULL, CHANGE description description LONGTEXT NOT NULL, CHANGE prix prix DOUBLE PRECISION NOT NULL, CHANGE image_name image VARCHAR(255) DEFAULT NULL');
    }
}
