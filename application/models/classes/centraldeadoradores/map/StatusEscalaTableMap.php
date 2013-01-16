<?php



/**
 * This class defines the structure of the 'status_escala' table.
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
class StatusEscalaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'centraldeadoradores.map.StatusEscalaTableMap';

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
        $this->setName('status_escala');
        $this->setPhpName('StatusEscala');
        $this->setClassname('StatusEscala');
        $this->setPackage('centraldeadoradores');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('NOME', 'Nome', 'VARCHAR', true, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('EscalaPessoa', 'EscalaPessoa', RelationMap::ONE_TO_MANY, array('Id' => 'Id_Status_Escala', ), null, null, 'EscalaPessoas');
    } // buildRelations()

} // StatusEscalaTableMap
