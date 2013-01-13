<?php



/**
 * This class defines the structure of the 'email_detail' table.
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
class EmailDetailTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'centraldeadoradores.map.EmailDetailTableMap';

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
        $this->setName('email_detail');
        $this->setPhpName('EmailDetail');
        $this->setClassname('EmailDetail');
        $this->setPackage('centraldeadoradores');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_EMAIL_ENVIADO', 'IdEmailEnviado', 'INTEGER', true, null, null);
        $this->addForeignKey('ID_EMAIL', 'IdEmail', 'INTEGER', 'email_header', 'ID_EMAIL', true, null, null);
        $this->addForeignKey('ID_DESTINATARIO', 'IdDestinatario', 'INTEGER', 'usuario', 'ID', true, null, null);
        $this->addColumn('ENVIADO', 'Enviado', 'BOOLEAN', true, 1, false);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('EmailHeader', 'EmailHeader', RelationMap::MANY_TO_ONE, array('Id_Email' => 'Id_Email', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Usuario', 'Usuario', RelationMap::MANY_TO_ONE, array('Id_Destinatario' => 'Id', ), null, null);
    } // buildRelations()

} // EmailDetailTableMap
