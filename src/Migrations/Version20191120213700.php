<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191120213700 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE branded_food CHANGE branded_food_category branded_food_category VARCHAR(255) DEFAULT NULL, CHANGE data_source data_source VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE food CHANGE food_class food_class VARCHAR(255) DEFAULT NULL, CHANGE description description VARCHAR(255) DEFAULT NULL, CHANGE scientific_name scientific_name VARCHAR(255) DEFAULT NULL, CHANGE food_key food_key VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE food_attribute CHANGE name name VARCHAR(255) DEFAULT NULL, CHANGE value value VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE food_attribute_type CHANGE description description VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE food_calorie_conversion_factor CHANGE protein_value protein_value DOUBLE PRECISION DEFAULT NULL, CHANGE fat_value fat_value DOUBLE PRECISION DEFAULT NULL, CHANGE carbonhydrate_value carbonhydrate_value DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE food_category CHANGE description description VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE food_component CHANGE min_year_acquired min_year_acquired VARCHAR(4) DEFAULT NULL');
        $this->addSql('ALTER TABLE food_nutrient CHANGE data_points data_points INT DEFAULT NULL, CHANGE standard_error standard_error VARCHAR(255) DEFAULT NULL, CHANGE min min DOUBLE PRECISION DEFAULT NULL, CHANGE max max DOUBLE PRECISION DEFAULT NULL, CHANGE median median DOUBLE PRECISION DEFAULT NULL, CHANGE footnote footnote VARCHAR(255) DEFAULT NULL, CHANGE min_year_acquired min_year_acquired VARCHAR(4) DEFAULT NULL, CHANGE nutrient_analysis_details nutrient_analysis_details VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE food_nutrient_derivation CHANGE description description VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE food_nutrient_source CHANGE description description VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE food_portion CHANGE seq_num seq_num INT DEFAULT NULL, CHANGE amount amount INT DEFAULT NULL, CHANGE portion_description portion_description VARCHAR(255) DEFAULT NULL, CHANGE modifier modifier VARCHAR(255) DEFAULT NULL, CHANGE data_points data_points INT DEFAULT NULL, CHANGE footnote footnote VARCHAR(255) DEFAULT NULL, CHANGE min_year_acquired min_year_acquired VARCHAR(4) DEFAULT NULL');
        $this->addSql('ALTER TABLE food_update_log_entry CHANGE description description VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE foundation_food CHANGE ndb_number ndb_number INT DEFAULT NULL, CHANGE footnote footnote VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE input_food CHANGE fdc_id_of_input_food_id fdc_id_of_input_food_id INT DEFAULT NULL, CHANGE seq_num seq_num INT DEFAULT NULL, CHANGE amount amount DOUBLE PRECISION DEFAULT NULL, CHANGE sr_code sr_code VARCHAR(255) DEFAULT NULL, CHANGE sr_description sr_description VARCHAR(255) DEFAULT NULL, CHANGE unit unit VARCHAR(20) DEFAULT NULL, CHANGE portion_code portion_code VARCHAR(30) DEFAULT NULL, CHANGE gram_weight gram_weight DOUBLE PRECISION DEFAULT NULL, CHANGE portion_description portion_description VARCHAR(255) DEFAULT NULL, CHANGE retention_code retention_code INT DEFAULT NULL, CHANGE survey_flag survey_flag VARCHAR(20) DEFAULT NULL');
        $this->addSql('ALTER TABLE lab_method CHANGE description description VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE market_acquisition CHANGE brand_description brand_description VARCHAR(255) DEFAULT NULL, CHANGE expiration_date expiration_date DATETIME DEFAULT NULL, CHANGE sales_lot_nbr sales_lot_nbr VARCHAR(255) DEFAULT NULL, CHANGE sell_by_date sell_by_date DATETIME DEFAULT NULL, CHANGE store_city store_city VARCHAR(255) DEFAULT NULL, CHANGE store_name store_name VARCHAR(255) DEFAULT NULL, CHANGE store_state store_state VARCHAR(20) DEFAULT NULL, CHANGE upc_code upc_code VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE measure_unit CHANGE abbreviation abbreviation VARCHAR(30) DEFAULT NULL');
        $this->addSql('ALTER TABLE nutrient_incoming_name CHANGE nutrient_id_id nutrient_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE retention_factor CHANGE description description VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE sub_sample_result CHANGE adjusted_amount adjusted_amount DOUBLE PRECISION DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE branded_food CHANGE branded_food_category branded_food_category VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE data_source data_source VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE food CHANGE food_class food_class VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE description description VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE scientific_name scientific_name VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE food_key food_key VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE food_attribute CHANGE name name VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE value value VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE food_attribute_type CHANGE description description VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE food_calorie_conversion_factor CHANGE protein_value protein_value DOUBLE PRECISION DEFAULT \'NULL\', CHANGE fat_value fat_value DOUBLE PRECISION DEFAULT \'NULL\', CHANGE carbonhydrate_value carbonhydrate_value DOUBLE PRECISION DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE food_category CHANGE description description VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE food_component CHANGE min_year_acquired min_year_acquired VARCHAR(4) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE food_nutrient CHANGE data_points data_points INT DEFAULT NULL, CHANGE standard_error standard_error VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE min min DOUBLE PRECISION DEFAULT \'NULL\', CHANGE max max DOUBLE PRECISION DEFAULT \'NULL\', CHANGE median median DOUBLE PRECISION DEFAULT \'NULL\', CHANGE footnote footnote VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE min_year_acquired min_year_acquired VARCHAR(4) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE nutrient_analysis_details nutrient_analysis_details VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE food_nutrient_derivation CHANGE description description VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE food_nutrient_source CHANGE description description VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE food_portion CHANGE seq_num seq_num INT DEFAULT NULL, CHANGE amount amount INT DEFAULT NULL, CHANGE portion_description portion_description VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE modifier modifier VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE data_points data_points INT DEFAULT NULL, CHANGE footnote footnote VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE min_year_acquired min_year_acquired VARCHAR(4) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE food_update_log_entry CHANGE description description VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE foundation_food CHANGE ndb_number ndb_number INT DEFAULT NULL, CHANGE footnote footnote VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE input_food CHANGE fdc_id_of_input_food_id fdc_id_of_input_food_id INT DEFAULT NULL, CHANGE seq_num seq_num INT DEFAULT NULL, CHANGE amount amount DOUBLE PRECISION DEFAULT \'NULL\', CHANGE sr_code sr_code VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE sr_description sr_description VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE unit unit VARCHAR(20) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE portion_code portion_code VARCHAR(30) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE gram_weight gram_weight DOUBLE PRECISION DEFAULT \'NULL\', CHANGE portion_description portion_description VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE retention_code retention_code INT DEFAULT NULL, CHANGE survey_flag survey_flag VARCHAR(20) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE lab_method CHANGE description description VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE market_acquisition CHANGE brand_description brand_description VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE expiration_date expiration_date DATETIME DEFAULT \'NULL\', CHANGE sales_lot_nbr sales_lot_nbr VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE sell_by_date sell_by_date DATETIME DEFAULT \'NULL\', CHANGE store_city store_city VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE store_name store_name VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE store_state store_state VARCHAR(20) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE upc_code upc_code VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE measure_unit CHANGE abbreviation abbreviation VARCHAR(30) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE nutrient_incoming_name CHANGE nutrient_id_id nutrient_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE retention_factor CHANGE description description VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE sub_sample_result CHANGE adjusted_amount adjusted_amount DOUBLE PRECISION DEFAULT \'NULL\'');
    }
}
