<?php



/**
 * This class defines the structure of the 'escala_pessoa_funcao' table.
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
class EscalaPessoaFuncaoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'centraldeadoradores.map.EscalaPessoaFuncaoTableMap';

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
        $this->setName('escala_pessoa_funcao');
        $this->setPhpName('EscalaPessoaFuncao');
        $this->setClassname('EscalaPessoaFuncao');
        $this->setPackage('centraldeadoradores');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_ESCALA_PESSOA_FUNCAO', 'IdEscalaPessoaFuncao', 'INTEGER', true, null, null);
        $this->addForeignKey('ID_ESCALA_PESSOA', 'IdEscalaPessoa', 'INTEGER', 'escala_pessoa', 'ID', true, null, null);
        $this->addForeignKey('ID_FUNCAO', 'IdFuncao', 'INTEGER', 'funcao', 'ID', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('EscalaPessoa', 'EscalaPessoa', RelationMap::MANY_TO_ONE, array('Id_Escala_Pessoa' => 'Id', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Funcao', 'Funcao', RelationMap::MANY_TO_ONE, array('Id_Funcao' => 'Id', ), null, null);
    } // buildRelations()

} // EscalaPessoaFuncaoTableMap
