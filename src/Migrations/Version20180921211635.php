<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180921211635 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE vod_content (id INT AUTO_INCREMENT NOT NULL, source VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, series_title VARCHAR(255) NOT NULL, summary_short VARCHAR(255) NOT NULL, summary_long LONGTEXT NOT NULL, rating VARCHAR(255) NOT NULL, year VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, actors VARCHAR(255) NOT NULL, actors_display VARCHAR(255) NOT NULL, directors VARCHAR(255) NOT NULL, genre VARCHAR(255) NOT NULL, series_description LONGTEXT NOT NULL, season_number VARCHAR(255) NOT NULL, season_name VARCHAR(255) NOT NULL, episode_name VARCHAR(255) NOT NULL, episode_number VARCHAR(255) NOT NULL, keywords VARCHAR(255) NOT NULL, category VARCHAR(255) NOT NULL, show_type VARCHAR(255) NOT NULL, audience VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE vodcontent');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE vodcontent (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, series_title VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, summary_short VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, summary_long LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, rating VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, year VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, country VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, actors VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, actors_display VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, directors VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, genre VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, series_description LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, season_number VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, season_name VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, episode_name VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, keywords VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, category VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, show_type VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, audience VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, episode_number VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE vod_content');
    }
}
