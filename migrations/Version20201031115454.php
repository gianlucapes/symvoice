<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201031115454 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE invoice (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, invoice_number INT NOT NULL, id_client INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE invoice_lines (id INT AUTO_INCREMENT NOT NULL, id_invoice_id INT DEFAULT NULL, description LONGTEXT NOT NULL, amount NUMERIC(12, 2) NOT NULL, iva NUMERIC(12, 2) NOT NULL, total_amount NUMERIC(12, 2) NOT NULL, UNIQUE INDEX UNIQ_72DBDC238C03712A (id_invoice_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE invoice_lines ADD CONSTRAINT FK_72DBDC238C03712A FOREIGN KEY (id_invoice_id) REFERENCES invoice (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE invoice_lines DROP FOREIGN KEY FK_72DBDC238C03712A');
        $this->addSql('DROP TABLE invoice');
        $this->addSql('DROP TABLE invoice_lines');
    }
}
