<?php


/**
 * Base static class for performing query and update operations on the 'escala_pessoa' table.
 *
 *
 *
 * @package propel.generator.centraldeadoradores.om
 */
abstract class BaseEscalaPessoaPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'centraldeadoradores';

    /** the table name for this class */
    const TABLE_NAME = 'escala_pessoa';

    /** the related Propel class for this table */
    const OM_CLASS = 'EscalaPessoa';

    /** the related TableMap class for this table */
    const TM_CLASS = 'EscalaPessoaTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 9;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 9;

    /** the column name for the ID field */
    const ID = 'escala_pessoa.ID';

    /** the column name for the ID_USUARIO field */
    const ID_USUARIO = 'escala_pessoa.ID_USUARIO';

    /** the column name for the ID_LOCAL field */
    const ID_LOCAL = 'escala_pessoa.ID_LOCAL';

    /** the column name for the DATA field */
    const DATA = 'escala_pessoa.DATA';

    /** the column name for the ID_STATUS_ESCALA field */
    const ID_STATUS_ESCALA = 'escala_pessoa.ID_STATUS_ESCALA';

    /** the column name for the ID_RESPONSAVEL field */
    const ID_RESPONSAVEL = 'escala_pessoa.ID_RESPONSAVEL';

    /** the column name for the MOTIVO_RECUSA field */
    const MOTIVO_RECUSA = 'escala_pessoa.MOTIVO_RECUSA';

    /** the column name for the ID_TIPO_ESCALA field */
    const ID_TIPO_ESCALA = 'escala_pessoa.ID_TIPO_ESCALA';

    /** the column name for the IS_ESCALA_BANDA field */
    const IS_ESCALA_BANDA = 'escala_pessoa.IS_ESCALA_BANDA';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of EscalaPessoa objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array EscalaPessoa[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. EscalaPessoaPeer::$fieldNames[EscalaPessoaPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdUsuario', 'IdLocal', 'Data', 'IdStatusEscala', 'IdResponsavel', 'MotivoRecusa', 'IdTipoEscala', 'IsEscalaBanda', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idUsuario', 'idLocal', 'data', 'idStatusEscala', 'idResponsavel', 'motivoRecusa', 'idTipoEscala', 'isEscalaBanda', ),
        BasePeer::TYPE_COLNAME => array (EscalaPessoaPeer::ID, EscalaPessoaPeer::ID_USUARIO, EscalaPessoaPeer::ID_LOCAL, EscalaPessoaPeer::DATA, EscalaPessoaPeer::ID_STATUS_ESCALA, EscalaPessoaPeer::ID_RESPONSAVEL, EscalaPessoaPeer::MOTIVO_RECUSA, EscalaPessoaPeer::ID_TIPO_ESCALA, EscalaPessoaPeer::IS_ESCALA_BANDA, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_USUARIO', 'ID_LOCAL', 'DATA', 'ID_STATUS_ESCALA', 'ID_RESPONSAVEL', 'MOTIVO_RECUSA', 'ID_TIPO_ESCALA', 'IS_ESCALA_BANDA', ),
        BasePeer::TYPE_FIELDNAME => array ('Id', 'Id_Usuario', 'Id_Local', 'Data', 'Id_Status_Escala', 'Id_Responsavel', 'Motivo_Recusa', 'Id_Tipo_Escala', 'Is_Escala_Banda', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. EscalaPessoaPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdUsuario' => 1, 'IdLocal' => 2, 'Data' => 3, 'IdStatusEscala' => 4, 'IdResponsavel' => 5, 'MotivoRecusa' => 6, 'IdTipoEscala' => 7, 'IsEscalaBanda' => 8, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idUsuario' => 1, 'idLocal' => 2, 'data' => 3, 'idStatusEscala' => 4, 'idResponsavel' => 5, 'motivoRecusa' => 6, 'idTipoEscala' => 7, 'isEscalaBanda' => 8, ),
        BasePeer::TYPE_COLNAME => array (EscalaPessoaPeer::ID => 0, EscalaPessoaPeer::ID_USUARIO => 1, EscalaPessoaPeer::ID_LOCAL => 2, EscalaPessoaPeer::DATA => 3, EscalaPessoaPeer::ID_STATUS_ESCALA => 4, EscalaPessoaPeer::ID_RESPONSAVEL => 5, EscalaPessoaPeer::MOTIVO_RECUSA => 6, EscalaPessoaPeer::ID_TIPO_ESCALA => 7, EscalaPessoaPeer::IS_ESCALA_BANDA => 8, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_USUARIO' => 1, 'ID_LOCAL' => 2, 'DATA' => 3, 'ID_STATUS_ESCALA' => 4, 'ID_RESPONSAVEL' => 5, 'MOTIVO_RECUSA' => 6, 'ID_TIPO_ESCALA' => 7, 'IS_ESCALA_BANDA' => 8, ),
        BasePeer::TYPE_FIELDNAME => array ('Id' => 0, 'Id_Usuario' => 1, 'Id_Local' => 2, 'Data' => 3, 'Id_Status_Escala' => 4, 'Id_Responsavel' => 5, 'Motivo_Recusa' => 6, 'Id_Tipo_Escala' => 7, 'Is_Escala_Banda' => 8, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = EscalaPessoaPeer::getFieldNames($toType);
        $key = isset(EscalaPessoaPeer::$fieldKeys[$fromType][$name]) ? EscalaPessoaPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(EscalaPessoaPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, EscalaPessoaPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return EscalaPessoaPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. EscalaPessoaPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(EscalaPessoaPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(EscalaPessoaPeer::ID);
            $criteria->addSelectColumn(EscalaPessoaPeer::ID_USUARIO);
            $criteria->addSelectColumn(EscalaPessoaPeer::ID_LOCAL);
            $criteria->addSelectColumn(EscalaPessoaPeer::DATA);
            $criteria->addSelectColumn(EscalaPessoaPeer::ID_STATUS_ESCALA);
            $criteria->addSelectColumn(EscalaPessoaPeer::ID_RESPONSAVEL);
            $criteria->addSelectColumn(EscalaPessoaPeer::MOTIVO_RECUSA);
            $criteria->addSelectColumn(EscalaPessoaPeer::ID_TIPO_ESCALA);
            $criteria->addSelectColumn(EscalaPessoaPeer::IS_ESCALA_BANDA);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.ID_USUARIO');
            $criteria->addSelectColumn($alias . '.ID_LOCAL');
            $criteria->addSelectColumn($alias . '.DATA');
            $criteria->addSelectColumn($alias . '.ID_STATUS_ESCALA');
            $criteria->addSelectColumn($alias . '.ID_RESPONSAVEL');
            $criteria->addSelectColumn($alias . '.MOTIVO_RECUSA');
            $criteria->addSelectColumn($alias . '.ID_TIPO_ESCALA');
            $criteria->addSelectColumn($alias . '.IS_ESCALA_BANDA');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(EscalaPessoaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EscalaPessoaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(EscalaPessoaPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(EscalaPessoaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return                 EscalaPessoa
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = EscalaPessoaPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return EscalaPessoaPeer::populateObjects(EscalaPessoaPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement durirectly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EscalaPessoaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            EscalaPessoaPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(EscalaPessoaPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param      EscalaPessoa $obj A EscalaPessoa object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            EscalaPessoaPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A EscalaPessoa object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof EscalaPessoa) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or EscalaPessoa object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(EscalaPessoaPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   EscalaPessoa Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(EscalaPessoaPeer::$instances[$key])) {
                return EscalaPessoaPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool()
    {
        EscalaPessoaPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to escala_pessoa
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in EscalaPessoaFuncaoPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        EscalaPessoaFuncaoPeer::clearInstancePool();
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = EscalaPessoaPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = EscalaPessoaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = EscalaPessoaPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                EscalaPessoaPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (EscalaPessoa object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = EscalaPessoaPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = EscalaPessoaPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + EscalaPessoaPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = EscalaPessoaPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            EscalaPessoaPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Local table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinLocal(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(EscalaPessoaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EscalaPessoaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(EscalaPessoaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(EscalaPessoaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(EscalaPessoaPeer::ID_LOCAL, LocalPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related UsuarioRelatedByIdResponsavel table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinUsuarioRelatedByIdResponsavel(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(EscalaPessoaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EscalaPessoaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(EscalaPessoaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(EscalaPessoaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(EscalaPessoaPeer::ID_RESPONSAVEL, UsuarioPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related StatusEscala table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinStatusEscala(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(EscalaPessoaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EscalaPessoaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(EscalaPessoaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(EscalaPessoaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(EscalaPessoaPeer::ID_STATUS_ESCALA, StatusEscalaPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related UsuarioRelatedByIdUsuario table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinUsuarioRelatedByIdUsuario(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(EscalaPessoaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EscalaPessoaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(EscalaPessoaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(EscalaPessoaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(EscalaPessoaPeer::ID_USUARIO, UsuarioPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related TipoEscala table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinTipoEscala(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(EscalaPessoaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EscalaPessoaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(EscalaPessoaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(EscalaPessoaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(EscalaPessoaPeer::ID_TIPO_ESCALA, TipoEscalaPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of EscalaPessoa objects pre-filled with their Local objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of EscalaPessoa objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinLocal(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(EscalaPessoaPeer::DATABASE_NAME);
        }

        EscalaPessoaPeer::addSelectColumns($criteria);
        $startcol = EscalaPessoaPeer::NUM_HYDRATE_COLUMNS;
        LocalPeer::addSelectColumns($criteria);

        $criteria->addJoin(EscalaPessoaPeer::ID_LOCAL, LocalPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = EscalaPessoaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = EscalaPessoaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = EscalaPessoaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                EscalaPessoaPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = LocalPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = LocalPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = LocalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    LocalPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (EscalaPessoa) to $obj2 (Local)
                $obj2->addEscalaPessoa($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of EscalaPessoa objects pre-filled with their Usuario objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of EscalaPessoa objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUsuarioRelatedByIdResponsavel(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(EscalaPessoaPeer::DATABASE_NAME);
        }

        EscalaPessoaPeer::addSelectColumns($criteria);
        $startcol = EscalaPessoaPeer::NUM_HYDRATE_COLUMNS;
        UsuarioPeer::addSelectColumns($criteria);

        $criteria->addJoin(EscalaPessoaPeer::ID_RESPONSAVEL, UsuarioPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = EscalaPessoaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = EscalaPessoaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = EscalaPessoaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                EscalaPessoaPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = UsuarioPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = UsuarioPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    UsuarioPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (EscalaPessoa) to $obj2 (Usuario)
                $obj2->addEscalaPessoaRelatedByIdResponsavel($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of EscalaPessoa objects pre-filled with their StatusEscala objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of EscalaPessoa objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinStatusEscala(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(EscalaPessoaPeer::DATABASE_NAME);
        }

        EscalaPessoaPeer::addSelectColumns($criteria);
        $startcol = EscalaPessoaPeer::NUM_HYDRATE_COLUMNS;
        StatusEscalaPeer::addSelectColumns($criteria);

        $criteria->addJoin(EscalaPessoaPeer::ID_STATUS_ESCALA, StatusEscalaPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = EscalaPessoaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = EscalaPessoaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = EscalaPessoaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                EscalaPessoaPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = StatusEscalaPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = StatusEscalaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = StatusEscalaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    StatusEscalaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (EscalaPessoa) to $obj2 (StatusEscala)
                $obj2->addEscalaPessoa($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of EscalaPessoa objects pre-filled with their Usuario objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of EscalaPessoa objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUsuarioRelatedByIdUsuario(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(EscalaPessoaPeer::DATABASE_NAME);
        }

        EscalaPessoaPeer::addSelectColumns($criteria);
        $startcol = EscalaPessoaPeer::NUM_HYDRATE_COLUMNS;
        UsuarioPeer::addSelectColumns($criteria);

        $criteria->addJoin(EscalaPessoaPeer::ID_USUARIO, UsuarioPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = EscalaPessoaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = EscalaPessoaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = EscalaPessoaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                EscalaPessoaPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = UsuarioPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = UsuarioPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    UsuarioPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (EscalaPessoa) to $obj2 (Usuario)
                $obj2->addEscalaPessoaRelatedByIdUsuario($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of EscalaPessoa objects pre-filled with their TipoEscala objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of EscalaPessoa objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinTipoEscala(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(EscalaPessoaPeer::DATABASE_NAME);
        }

        EscalaPessoaPeer::addSelectColumns($criteria);
        $startcol = EscalaPessoaPeer::NUM_HYDRATE_COLUMNS;
        TipoEscalaPeer::addSelectColumns($criteria);

        $criteria->addJoin(EscalaPessoaPeer::ID_TIPO_ESCALA, TipoEscalaPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = EscalaPessoaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = EscalaPessoaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = EscalaPessoaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                EscalaPessoaPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = TipoEscalaPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = TipoEscalaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = TipoEscalaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    TipoEscalaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (EscalaPessoa) to $obj2 (TipoEscala)
                $obj2->addEscalaPessoa($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(EscalaPessoaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EscalaPessoaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(EscalaPessoaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(EscalaPessoaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(EscalaPessoaPeer::ID_LOCAL, LocalPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_RESPONSAVEL, UsuarioPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_STATUS_ESCALA, StatusEscalaPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_USUARIO, UsuarioPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_TIPO_ESCALA, TipoEscalaPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of EscalaPessoa objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of EscalaPessoa objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(EscalaPessoaPeer::DATABASE_NAME);
        }

        EscalaPessoaPeer::addSelectColumns($criteria);
        $startcol2 = EscalaPessoaPeer::NUM_HYDRATE_COLUMNS;

        LocalPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + LocalPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        StatusEscalaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + StatusEscalaPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        TipoEscalaPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + TipoEscalaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(EscalaPessoaPeer::ID_LOCAL, LocalPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_RESPONSAVEL, UsuarioPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_STATUS_ESCALA, StatusEscalaPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_USUARIO, UsuarioPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_TIPO_ESCALA, TipoEscalaPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = EscalaPessoaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = EscalaPessoaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = EscalaPessoaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                EscalaPessoaPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Local rows

            $key2 = LocalPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = LocalPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = LocalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    LocalPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (EscalaPessoa) to the collection in $obj2 (Local)
                $obj2->addEscalaPessoa($obj1);
            } // if joined row not null

            // Add objects for joined Usuario rows

            $key3 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = UsuarioPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = UsuarioPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    UsuarioPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (EscalaPessoa) to the collection in $obj3 (Usuario)
                $obj3->addEscalaPessoaRelatedByIdResponsavel($obj1);
            } // if joined row not null

            // Add objects for joined StatusEscala rows

            $key4 = StatusEscalaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = StatusEscalaPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = StatusEscalaPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    StatusEscalaPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (EscalaPessoa) to the collection in $obj4 (StatusEscala)
                $obj4->addEscalaPessoa($obj1);
            } // if joined row not null

            // Add objects for joined Usuario rows

            $key5 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = UsuarioPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = UsuarioPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    UsuarioPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (EscalaPessoa) to the collection in $obj5 (Usuario)
                $obj5->addEscalaPessoaRelatedByIdUsuario($obj1);
            } // if joined row not null

            // Add objects for joined TipoEscala rows

            $key6 = TipoEscalaPeer::getPrimaryKeyHashFromRow($row, $startcol6);
            if ($key6 !== null) {
                $obj6 = TipoEscalaPeer::getInstanceFromPool($key6);
                if (!$obj6) {

                    $cls = TipoEscalaPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    TipoEscalaPeer::addInstanceToPool($obj6, $key6);
                } // if obj6 loaded

                // Add the $obj1 (EscalaPessoa) to the collection in $obj6 (TipoEscala)
                $obj6->addEscalaPessoa($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Local table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptLocal(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(EscalaPessoaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EscalaPessoaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(EscalaPessoaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(EscalaPessoaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(EscalaPessoaPeer::ID_RESPONSAVEL, UsuarioPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_STATUS_ESCALA, StatusEscalaPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_USUARIO, UsuarioPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_TIPO_ESCALA, TipoEscalaPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related UsuarioRelatedByIdResponsavel table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptUsuarioRelatedByIdResponsavel(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(EscalaPessoaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EscalaPessoaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(EscalaPessoaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(EscalaPessoaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(EscalaPessoaPeer::ID_LOCAL, LocalPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_STATUS_ESCALA, StatusEscalaPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_TIPO_ESCALA, TipoEscalaPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related StatusEscala table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptStatusEscala(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(EscalaPessoaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EscalaPessoaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(EscalaPessoaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(EscalaPessoaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(EscalaPessoaPeer::ID_LOCAL, LocalPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_RESPONSAVEL, UsuarioPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_USUARIO, UsuarioPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_TIPO_ESCALA, TipoEscalaPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related UsuarioRelatedByIdUsuario table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptUsuarioRelatedByIdUsuario(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(EscalaPessoaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EscalaPessoaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(EscalaPessoaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(EscalaPessoaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(EscalaPessoaPeer::ID_LOCAL, LocalPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_STATUS_ESCALA, StatusEscalaPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_TIPO_ESCALA, TipoEscalaPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related TipoEscala table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptTipoEscala(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(EscalaPessoaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EscalaPessoaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(EscalaPessoaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(EscalaPessoaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(EscalaPessoaPeer::ID_LOCAL, LocalPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_RESPONSAVEL, UsuarioPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_STATUS_ESCALA, StatusEscalaPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_USUARIO, UsuarioPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of EscalaPessoa objects pre-filled with all related objects except Local.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of EscalaPessoa objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptLocal(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(EscalaPessoaPeer::DATABASE_NAME);
        }

        EscalaPessoaPeer::addSelectColumns($criteria);
        $startcol2 = EscalaPessoaPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        StatusEscalaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + StatusEscalaPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        TipoEscalaPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + TipoEscalaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(EscalaPessoaPeer::ID_RESPONSAVEL, UsuarioPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_STATUS_ESCALA, StatusEscalaPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_USUARIO, UsuarioPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_TIPO_ESCALA, TipoEscalaPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = EscalaPessoaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = EscalaPessoaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = EscalaPessoaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                EscalaPessoaPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Usuario rows

                $key2 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = UsuarioPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    UsuarioPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (EscalaPessoa) to the collection in $obj2 (Usuario)
                $obj2->addEscalaPessoaRelatedByIdResponsavel($obj1);

            } // if joined row is not null

                // Add objects for joined StatusEscala rows

                $key3 = StatusEscalaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = StatusEscalaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = StatusEscalaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    StatusEscalaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (EscalaPessoa) to the collection in $obj3 (StatusEscala)
                $obj3->addEscalaPessoa($obj1);

            } // if joined row is not null

                // Add objects for joined Usuario rows

                $key4 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = UsuarioPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    UsuarioPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (EscalaPessoa) to the collection in $obj4 (Usuario)
                $obj4->addEscalaPessoaRelatedByIdUsuario($obj1);

            } // if joined row is not null

                // Add objects for joined TipoEscala rows

                $key5 = TipoEscalaPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = TipoEscalaPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = TipoEscalaPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    TipoEscalaPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (EscalaPessoa) to the collection in $obj5 (TipoEscala)
                $obj5->addEscalaPessoa($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of EscalaPessoa objects pre-filled with all related objects except UsuarioRelatedByIdResponsavel.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of EscalaPessoa objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptUsuarioRelatedByIdResponsavel(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(EscalaPessoaPeer::DATABASE_NAME);
        }

        EscalaPessoaPeer::addSelectColumns($criteria);
        $startcol2 = EscalaPessoaPeer::NUM_HYDRATE_COLUMNS;

        LocalPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + LocalPeer::NUM_HYDRATE_COLUMNS;

        StatusEscalaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + StatusEscalaPeer::NUM_HYDRATE_COLUMNS;

        TipoEscalaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + TipoEscalaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(EscalaPessoaPeer::ID_LOCAL, LocalPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_STATUS_ESCALA, StatusEscalaPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_TIPO_ESCALA, TipoEscalaPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = EscalaPessoaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = EscalaPessoaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = EscalaPessoaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                EscalaPessoaPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Local rows

                $key2 = LocalPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = LocalPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = LocalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    LocalPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (EscalaPessoa) to the collection in $obj2 (Local)
                $obj2->addEscalaPessoa($obj1);

            } // if joined row is not null

                // Add objects for joined StatusEscala rows

                $key3 = StatusEscalaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = StatusEscalaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = StatusEscalaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    StatusEscalaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (EscalaPessoa) to the collection in $obj3 (StatusEscala)
                $obj3->addEscalaPessoa($obj1);

            } // if joined row is not null

                // Add objects for joined TipoEscala rows

                $key4 = TipoEscalaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = TipoEscalaPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = TipoEscalaPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    TipoEscalaPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (EscalaPessoa) to the collection in $obj4 (TipoEscala)
                $obj4->addEscalaPessoa($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of EscalaPessoa objects pre-filled with all related objects except StatusEscala.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of EscalaPessoa objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptStatusEscala(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(EscalaPessoaPeer::DATABASE_NAME);
        }

        EscalaPessoaPeer::addSelectColumns($criteria);
        $startcol2 = EscalaPessoaPeer::NUM_HYDRATE_COLUMNS;

        LocalPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + LocalPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        TipoEscalaPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + TipoEscalaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(EscalaPessoaPeer::ID_LOCAL, LocalPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_RESPONSAVEL, UsuarioPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_USUARIO, UsuarioPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_TIPO_ESCALA, TipoEscalaPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = EscalaPessoaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = EscalaPessoaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = EscalaPessoaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                EscalaPessoaPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Local rows

                $key2 = LocalPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = LocalPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = LocalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    LocalPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (EscalaPessoa) to the collection in $obj2 (Local)
                $obj2->addEscalaPessoa($obj1);

            } // if joined row is not null

                // Add objects for joined Usuario rows

                $key3 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = UsuarioPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    UsuarioPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (EscalaPessoa) to the collection in $obj3 (Usuario)
                $obj3->addEscalaPessoaRelatedByIdResponsavel($obj1);

            } // if joined row is not null

                // Add objects for joined Usuario rows

                $key4 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = UsuarioPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    UsuarioPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (EscalaPessoa) to the collection in $obj4 (Usuario)
                $obj4->addEscalaPessoaRelatedByIdUsuario($obj1);

            } // if joined row is not null

                // Add objects for joined TipoEscala rows

                $key5 = TipoEscalaPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = TipoEscalaPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = TipoEscalaPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    TipoEscalaPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (EscalaPessoa) to the collection in $obj5 (TipoEscala)
                $obj5->addEscalaPessoa($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of EscalaPessoa objects pre-filled with all related objects except UsuarioRelatedByIdUsuario.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of EscalaPessoa objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptUsuarioRelatedByIdUsuario(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(EscalaPessoaPeer::DATABASE_NAME);
        }

        EscalaPessoaPeer::addSelectColumns($criteria);
        $startcol2 = EscalaPessoaPeer::NUM_HYDRATE_COLUMNS;

        LocalPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + LocalPeer::NUM_HYDRATE_COLUMNS;

        StatusEscalaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + StatusEscalaPeer::NUM_HYDRATE_COLUMNS;

        TipoEscalaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + TipoEscalaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(EscalaPessoaPeer::ID_LOCAL, LocalPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_STATUS_ESCALA, StatusEscalaPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_TIPO_ESCALA, TipoEscalaPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = EscalaPessoaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = EscalaPessoaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = EscalaPessoaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                EscalaPessoaPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Local rows

                $key2 = LocalPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = LocalPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = LocalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    LocalPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (EscalaPessoa) to the collection in $obj2 (Local)
                $obj2->addEscalaPessoa($obj1);

            } // if joined row is not null

                // Add objects for joined StatusEscala rows

                $key3 = StatusEscalaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = StatusEscalaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = StatusEscalaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    StatusEscalaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (EscalaPessoa) to the collection in $obj3 (StatusEscala)
                $obj3->addEscalaPessoa($obj1);

            } // if joined row is not null

                // Add objects for joined TipoEscala rows

                $key4 = TipoEscalaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = TipoEscalaPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = TipoEscalaPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    TipoEscalaPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (EscalaPessoa) to the collection in $obj4 (TipoEscala)
                $obj4->addEscalaPessoa($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of EscalaPessoa objects pre-filled with all related objects except TipoEscala.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of EscalaPessoa objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptTipoEscala(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(EscalaPessoaPeer::DATABASE_NAME);
        }

        EscalaPessoaPeer::addSelectColumns($criteria);
        $startcol2 = EscalaPessoaPeer::NUM_HYDRATE_COLUMNS;

        LocalPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + LocalPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        StatusEscalaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + StatusEscalaPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(EscalaPessoaPeer::ID_LOCAL, LocalPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_RESPONSAVEL, UsuarioPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_STATUS_ESCALA, StatusEscalaPeer::ID, $join_behavior);

        $criteria->addJoin(EscalaPessoaPeer::ID_USUARIO, UsuarioPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = EscalaPessoaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = EscalaPessoaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = EscalaPessoaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                EscalaPessoaPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Local rows

                $key2 = LocalPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = LocalPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = LocalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    LocalPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (EscalaPessoa) to the collection in $obj2 (Local)
                $obj2->addEscalaPessoa($obj1);

            } // if joined row is not null

                // Add objects for joined Usuario rows

                $key3 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = UsuarioPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    UsuarioPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (EscalaPessoa) to the collection in $obj3 (Usuario)
                $obj3->addEscalaPessoaRelatedByIdResponsavel($obj1);

            } // if joined row is not null

                // Add objects for joined StatusEscala rows

                $key4 = StatusEscalaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = StatusEscalaPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = StatusEscalaPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    StatusEscalaPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (EscalaPessoa) to the collection in $obj4 (StatusEscala)
                $obj4->addEscalaPessoa($obj1);

            } // if joined row is not null

                // Add objects for joined Usuario rows

                $key5 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = UsuarioPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    UsuarioPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (EscalaPessoa) to the collection in $obj5 (Usuario)
                $obj5->addEscalaPessoaRelatedByIdUsuario($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(EscalaPessoaPeer::DATABASE_NAME)->getTable(EscalaPessoaPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseEscalaPessoaPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseEscalaPessoaPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new EscalaPessoaTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass()
    {
        return EscalaPessoaPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a EscalaPessoa or Criteria object.
     *
     * @param      mixed $values Criteria or EscalaPessoa object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EscalaPessoaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from EscalaPessoa object
        }

        if ($criteria->containsKey(EscalaPessoaPeer::ID) && $criteria->keyContainsValue(EscalaPessoaPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.EscalaPessoaPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(EscalaPessoaPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a EscalaPessoa or Criteria object.
     *
     * @param      mixed $values Criteria or EscalaPessoa object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EscalaPessoaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(EscalaPessoaPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(EscalaPessoaPeer::ID);
            $value = $criteria->remove(EscalaPessoaPeer::ID);
            if ($value) {
                $selectCriteria->add(EscalaPessoaPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(EscalaPessoaPeer::TABLE_NAME);
            }

        } else { // $values is EscalaPessoa object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(EscalaPessoaPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the escala_pessoa table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EscalaPessoaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += EscalaPessoaPeer::doOnDeleteCascade(new Criteria(EscalaPessoaPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(EscalaPessoaPeer::TABLE_NAME, $con, EscalaPessoaPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            EscalaPessoaPeer::clearInstancePool();
            EscalaPessoaPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a EscalaPessoa or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or EscalaPessoa object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(EscalaPessoaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof EscalaPessoa) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(EscalaPessoaPeer::DATABASE_NAME);
            $criteria->add(EscalaPessoaPeer::ID, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(EscalaPessoaPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += EscalaPessoaPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                EscalaPessoaPeer::clearInstancePool();
            } elseif ($values instanceof EscalaPessoa) { // it's a model object
                EscalaPessoaPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    EscalaPessoaPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            EscalaPessoaPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * This is a method for emulating ON DELETE CASCADE for DBs that don't support this
     * feature (like MySQL or SQLite).
     *
     * This method is not very speedy because it must perform a query first to get
     * the implicated records and then perform the deletes by calling those Peer classes.
     *
     * This method should be used within a transaction if possible.
     *
     * @param      Criteria $criteria
     * @param      PropelPDO $con
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    protected static function doOnDeleteCascade(Criteria $criteria, PropelPDO $con)
    {
        // initialize var to track total num of affected rows
        $affectedRows = 0;

        // first find the objects that are implicated by the $criteria
        $objects = EscalaPessoaPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related EscalaPessoaFuncao objects
            $criteria = new Criteria(EscalaPessoaFuncaoPeer::DATABASE_NAME);

            $criteria->add(EscalaPessoaFuncaoPeer::ID_ESCALA_PESSOA, $obj->getId());
            $affectedRows += EscalaPessoaFuncaoPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given EscalaPessoa object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      EscalaPessoa $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(EscalaPessoaPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(EscalaPessoaPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(EscalaPessoaPeer::DATABASE_NAME, EscalaPessoaPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return EscalaPessoa
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = EscalaPessoaPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(EscalaPessoaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(EscalaPessoaPeer::DATABASE_NAME);
        $criteria->add(EscalaPessoaPeer::ID, $pk);

        $v = EscalaPessoaPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return EscalaPessoa[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EscalaPessoaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(EscalaPessoaPeer::DATABASE_NAME);
            $criteria->add(EscalaPessoaPeer::ID, $pks, Criteria::IN);
            $objs = EscalaPessoaPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseEscalaPessoaPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseEscalaPessoaPeer::buildTableMap();

