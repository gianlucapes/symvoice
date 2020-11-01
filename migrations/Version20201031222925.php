<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201031222925 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE invoice_lines DROP FOREIGN KEY FK_72DBDC238C03712A');
        $this->addSql('DROP INDEX UNIQ_72DBDC238C03712A ON invoice_lines');
        $this->addSql('ALTER TABLE invoice_lines CHANGE id_invoice_id id_invoice INT DEFAULT NULL');
        $this->addSql('ALTER TABLE invoice_lines ADD CONSTRAINT FK_72DBDC234EF8BE34 FOREIGN KEY (id_invoice) REFERENCES invoice (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_72DBDC234EF8BE34 ON invoice_lines (id_invoice)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE invoice_lines DROP FOREIGN KEY FK_72DBDC234EF8BE34');
        $this->addSql('DROP INDEX UNIQ_72DBDC234EF8BE34 ON invoice_lines');
        $this->addSql('ALTER TABLE invoice_lines CHANGE id_invoice id_invoice_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE invoice_lines ADD CONSTRAINT FK_72DBDC238C03712A FOREIGN KEY (id_invoice_id) REFERENCES invoice (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_72DBDC238C03712A ON invoice_lines (id_invoice_id)');
    }
}
