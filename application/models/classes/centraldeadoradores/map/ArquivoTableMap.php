<?php



/**
 * This class defines the structure of the 'arquivo' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.centraldeadoradores.map
 */
class ArquivoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'centraldeadoradores.map.ArquivoTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('arquivo');
        $this->setPhpName('Arquivo');
        $this->setClassname('Arquivo');
        $this->setPackage('centraldeadoradores');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('NOME', 'Nome', 'VARCHAR', true, 45, null);
        $this->addColumn('MIME', 'Mime', 'VARCHAR', true, 45, null);
        $this->addColumn('TAMANHO', 'Tamanho', 'INTEGER', true, null, null);
        $this->addColumn('CONTEUDO', 'Conteudo', 'BLOB', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('ArquivoEmail', 'ArquivoEmail', RelationMap::ONE_TO_MANY, array('Id' => 'Id_Arquivo', ), 'CASCADE', 'CASCADE', 'ArquivoEmails');
    } // buildRelations()

} // ArquivoTableMap
