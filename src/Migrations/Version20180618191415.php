<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180618191415 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE vodcontent (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, series_title VARCHAR(255) NOT NULL, summary_short VARCHAR(255) NOT NULL, summary_long VARCHAR(255) NOT NULL, rating VARCHAR(255) NOT NULL, year VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, actors VARCHAR(255) NOT NULL, actors_display VARCHAR(255) NOT NULL, directors VARCHAR(255) NOT NULL, genre VARCHAR(255) NOT NULL, series_description VARCHAR(255) NOT NULL, season_number VARCHAR(255) NOT NULL, season_name VARCHAR(255) NOT NULL, episode_name VARCHAR(255) NOT NULL, keywords VARCHAR(255) NOT NULL, category VARCHAR(255) NOT NULL, show_type VARCHAR(255) NOT NULL, audience VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE vodcontent');
    }
}
