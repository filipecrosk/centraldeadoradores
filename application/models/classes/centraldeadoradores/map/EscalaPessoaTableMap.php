<?php



/**
 * This class defines the structure of the 'escala_pessoa' table.
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
class EscalaPessoaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'centraldeadoradores.map.EscalaPessoaTableMap';

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
        $this->setName('escala_pessoa');
        $this->setPhpName('EscalaPessoa');
        $this->setClassname('EscalaPessoa');
        $this->setPackage('centraldeadoradores');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('ID_USUARIO', 'IdUsuario', 'INTEGER', 'usuario', 'ID', true, null, null);
        $this->addForeignKey('ID_LOCAL', 'IdLocal', 'INTEGER', 'local', 'ID', true, null, null);
        $this->addColumn('DATA', 'Data', 'TIMESTAMP', true, null, null);
        $this->addForeignKey('ID_STATUS_ESCALA', 'IdStatusEscala', 'INTEGER', 'status_escala', 'ID', true, null, 1);
        $this->addForeignKey('ID_RESPONSAVEL', 'IdResponsavel', 'INTEGER', 'usuario', 'ID', true, null, null);
        $this->addColumn('MOTIVO_RECUSA', 'MotivoRecusa', 'CLOB', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Local', 'Local', RelationMap::MANY_TO_ONE, array('Id_Local' => 'Id', ), null, null);
        $this->addRelation('UsuarioRelatedByIdResponsavel', 'Usuario', RelationMap::MANY_TO_ONE, array('Id_Responsavel' => 'Id', ), null, null);
        $this->addRelation('StatusEscala', 'StatusEscala', RelationMap::MANY_TO_ONE, array('Id_Status_Escala' => 'Id', ), null, null);
        $this->addRelation('UsuarioRelatedByIdUsuario', 'Usuario', RelationMap::MANY_TO_ONE, array('Id_Usuario' => 'Id', ), null, null);
        $this->addRelation('EscalaPessoaFuncao', 'EscalaPessoaFuncao', RelationMap::ONE_TO_MANY, array('Id' => 'Id_Escala_Pessoa', ), 'CASCADE', 'CASCADE', 'EscalaPessoaFuncaos');
    } // buildRelations()

} // EscalaPessoaTableMap
