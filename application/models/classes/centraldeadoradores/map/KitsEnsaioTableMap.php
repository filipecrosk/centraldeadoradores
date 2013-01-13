<?php



/**
 * This class defines the structure of the 'kits_ensaio' table.
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
class KitsEnsaioTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'centraldeadoradores.map.KitsEnsaioTableMap';

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
        $this->setName('kits_ensaio');
        $this->setPhpName('KitsEnsaio');
        $this->setClassname('KitsEnsaio');
        $this->setPackage('centraldeadoradores');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('NOME', 'Nome', 'VARCHAR', true, 45, null);
        $this->addColumn('CAMINHO', 'Caminho', 'VARCHAR', true, 100, null);
        $this->addForeignKey('ID_FUNCAO', 'IdFuncao', 'INTEGER', 'funcao', 'ID', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Funcao', 'Funcao', RelationMap::MANY_TO_ONE, array('Id_Funcao' => 'Id', ), null, null);
    } // buildRelations()

} // KitsEnsaioTableMap
