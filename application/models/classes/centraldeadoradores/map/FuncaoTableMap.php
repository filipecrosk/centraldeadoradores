<?php



/**
 * This class defines the structure of the 'funcao' table.
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
class FuncaoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'centraldeadoradores.map.FuncaoTableMap';

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
        $this->setName('funcao');
        $this->setPhpName('Funcao');
        $this->setClassname('Funcao');
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
        $this->addRelation('EscalaPessoaFuncao', 'EscalaPessoaFuncao', RelationMap::ONE_TO_MANY, array('Id' => 'Id_Funcao', ), null, null, 'EscalaPessoaFuncaos');
        $this->addRelation('KitsEnsaio', 'KitsEnsaio', RelationMap::ONE_TO_MANY, array('Id' => 'Id_Funcao', ), null, null, 'KitsEnsaios');
        $this->addRelation('UsuarioFuncao', 'UsuarioFuncao', RelationMap::ONE_TO_MANY, array('Id' => 'Id_Funcao', ), null, null, 'UsuarioFuncaos');
    } // buildRelations()

} // FuncaoTableMap
