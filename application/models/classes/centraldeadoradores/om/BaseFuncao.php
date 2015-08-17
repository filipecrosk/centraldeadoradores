<?php


/**
 * Base class that represents a row from the 'funcao' table.
 *
 *
 *
 * @package    propel.generator.centraldeadoradores.om
 */
abstract class BaseFuncao extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'FuncaoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        FuncaoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the nome field.
     * @var        string
     */
    protected $nome;

    /**
     * @var        PropelObjectCollection|EscalaPessoaFuncao[] Collection to store aggregation of EscalaPessoaFuncao objects.
     */
    protected $collEscalaPessoaFuncaos;
    protected $collEscalaPessoaFuncaosPartial;

    /**
     * @var        PropelObjectCollection|KitsEnsaio[] Collection to store aggregation of KitsEnsaio objects.
     */
    protected $collKitsEnsaios;
    protected $collKitsEnsaiosPartial;

    /**
     * @var        PropelObjectCollection|UsuarioFuncao[] Collection to store aggregation of UsuarioFuncao objects.
     */
    protected $collUsuarioFuncaos;
    protected $collUsuarioFuncaosPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $escalaPessoaFuncaosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $kitsEnsaiosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $usuarioFuncaosScheduledForDeletion = null;

    /**
     * Get the [id] column value.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the [nome] column value.
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of [id] column.
     *
     * @param int $v new value
     * @return Funcao The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = FuncaoPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [nome] column.
     *
     * @param string $v new value
     * @return Funcao The current object (for fluent API support)
     */
    public function setNome($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->nome !== $v) {
            $this->nome = $v;
            $this->modifiedColumns[] = FuncaoPeer::NOME;
        }


        return $this;
    } // setNome()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->nome = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 2; // 2 = FuncaoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Funcao object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(FuncaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = FuncaoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collEscalaPessoaFuncaos = null;

            $this->collKitsEnsaios = null;

            $this->collUsuarioFuncaos = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(FuncaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = FuncaoQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(FuncaoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                FuncaoPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->escalaPessoaFuncaosScheduledForDeletion !== null) {
                if (!$this->escalaPessoaFuncaosScheduledForDeletion->isEmpty()) {
                    EscalaPessoaFuncaoQuery::create()
                        ->filterByPrimaryKeys($this->escalaPessoaFuncaosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->escalaPessoaFuncaosScheduledForDeletion = null;
                }
            }

            if ($this->collEscalaPessoaFuncaos !== null) {
                foreach ($this->collEscalaPessoaFuncaos as $referrerFK) {
                    if (!$referrerFK->isDeleted()) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->kitsEnsaiosScheduledForDeletion !== null) {
                if (!$this->kitsEnsaiosScheduledForDeletion->isEmpty()) {
                    KitsEnsaioQuery::create()
                        ->filterByPrimaryKeys($this->kitsEnsaiosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->kitsEnsaiosScheduledForDeletion = null;
                }
            }

            if ($this->collKitsEnsaios !== null) {
                foreach ($this->collKitsEnsaios as $referrerFK) {
                    if (!$referrerFK->isDeleted()) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->usuarioFuncaosScheduledForDeletion !== null) {
                if (!$this->usuarioFuncaosScheduledForDeletion->isEmpty()) {
                    UsuarioFuncaoQuery::create()
                        ->filterByPrimaryKeys($this->usuarioFuncaosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->usuarioFuncaosScheduledForDeletion = null;
                }
            }

            if ($this->collUsuarioFuncaos !== null) {
                foreach ($this->collUsuarioFuncaos as $referrerFK) {
                    if (!$referrerFK->isDeleted()) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = FuncaoPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . FuncaoPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(FuncaoPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(FuncaoPeer::NOME)) {
            $modifiedColumns[':p' . $index++]  = '`NOME`';
        }

        $sql = sprintf(
            'INSERT INTO `funcao` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`NOME`':
                        $stmt->bindValue($identifier, $this->nome, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        } else {
            $this->validationFailures = $res;

            return false;
        }
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggreagated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = FuncaoPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collEscalaPessoaFuncaos !== null) {
                    foreach ($this->collEscalaPessoaFuncaos as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collKitsEnsaios !== null) {
                    foreach ($this->collKitsEnsaios as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collUsuarioFuncaos !== null) {
                    foreach ($this->collUsuarioFuncaos as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = FuncaoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getNome();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Funcao'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Funcao'][$this->getPrimaryKey()] = true;
        $keys = FuncaoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getNome(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collEscalaPessoaFuncaos) {
                $result['EscalaPessoaFuncaos'] = $this->collEscalaPessoaFuncaos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collKitsEnsaios) {
                $result['KitsEnsaios'] = $this->collKitsEnsaios->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collUsuarioFuncaos) {
                $result['UsuarioFuncaos'] = $this->collUsuarioFuncaos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = FuncaoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setNome($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = FuncaoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setNome($arr[$keys[1]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(FuncaoPeer::DATABASE_NAME);

        if ($this->isColumnModified(FuncaoPeer::ID)) $criteria->add(FuncaoPeer::ID, $this->id);
        if ($this->isColumnModified(FuncaoPeer::NOME)) $criteria->add(FuncaoPeer::NOME, $this->nome);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(FuncaoPeer::DATABASE_NAME);
        $criteria->add(FuncaoPeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Funcao (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setNome($this->getNome());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getEscalaPessoaFuncaos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addEscalaPessoaFuncao($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getKitsEnsaios() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addKitsEnsaio($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getUsuarioFuncaos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addUsuarioFuncao($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Funcao Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return FuncaoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new FuncaoPeer();
        }

        return self::$peer;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('EscalaPessoaFuncao' == $relationName) {
            $this->initEscalaPessoaFuncaos();
        }
        if ('KitsEnsaio' == $relationName) {
            $this->initKitsEnsaios();
        }
        if ('UsuarioFuncao' == $relationName) {
            $this->initUsuarioFuncaos();
        }
    }

    /**
     * Clears out the collEscalaPessoaFuncaos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addEscalaPessoaFuncaos()
     */
    public function clearEscalaPessoaFuncaos()
    {
        $this->collEscalaPessoaFuncaos = null; // important to set this to null since that means it is uninitialized
        $this->collEscalaPessoaFuncaosPartial = null;
    }

    /**
     * reset is the collEscalaPessoaFuncaos collection loaded partially
     *
     * @return void
     */
    public function resetPartialEscalaPessoaFuncaos($v = true)
    {
        $this->collEscalaPessoaFuncaosPartial = $v;
    }

    /**
     * Initializes the collEscalaPessoaFuncaos collection.
     *
     * By default this just sets the collEscalaPessoaFuncaos collection to an empty array (like clearcollEscalaPessoaFuncaos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initEscalaPessoaFuncaos($overrideExisting = true)
    {
        if (null !== $this->collEscalaPessoaFuncaos && !$overrideExisting) {
            return;
        }
        $this->collEscalaPessoaFuncaos = new PropelObjectCollection();
        $this->collEscalaPessoaFuncaos->setModel('EscalaPessoaFuncao');
    }

    /**
     * Gets an array of EscalaPessoaFuncao objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Funcao is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|EscalaPessoaFuncao[] List of EscalaPessoaFuncao objects
     * @throws PropelException
     */
    public function getEscalaPessoaFuncaos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collEscalaPessoaFuncaosPartial && !$this->isNew();
        if (null === $this->collEscalaPessoaFuncaos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collEscalaPessoaFuncaos) {
                // return empty collection
                $this->initEscalaPessoaFuncaos();
            } else {
                $collEscalaPessoaFuncaos = EscalaPessoaFuncaoQuery::create(null, $criteria)
                    ->filterByFuncao($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collEscalaPessoaFuncaosPartial && count($collEscalaPessoaFuncaos)) {
                      $this->initEscalaPessoaFuncaos(false);

                      foreach($collEscalaPessoaFuncaos as $obj) {
                        if (false == $this->collEscalaPessoaFuncaos->contains($obj)) {
                          $this->collEscalaPessoaFuncaos->append($obj);
                        }
                      }

                      $this->collEscalaPessoaFuncaosPartial = true;
                    }

                    return $collEscalaPessoaFuncaos;
                }

                if($partial && $this->collEscalaPessoaFuncaos) {
                    foreach($this->collEscalaPessoaFuncaos as $obj) {
                        if($obj->isNew()) {
                            $collEscalaPessoaFuncaos[] = $obj;
                        }
                    }
                }

                $this->collEscalaPessoaFuncaos = $collEscalaPessoaFuncaos;
                $this->collEscalaPessoaFuncaosPartial = false;
            }
        }

        return $this->collEscalaPessoaFuncaos;
    }

    /**
     * Sets a collection of EscalaPessoaFuncao objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $escalaPessoaFuncaos A Propel collection.
     * @param PropelPDO $con Optional connection object
     */
    public function setEscalaPessoaFuncaos(PropelCollection $escalaPessoaFuncaos, PropelPDO $con = null)
    {
        $this->escalaPessoaFuncaosScheduledForDeletion = $this->getEscalaPessoaFuncaos(new Criteria(), $con)->diff($escalaPessoaFuncaos);

        foreach ($this->escalaPessoaFuncaosScheduledForDeletion as $escalaPessoaFuncaoRemoved) {
            $escalaPessoaFuncaoRemoved->setFuncao(null);
        }

        $this->collEscalaPessoaFuncaos = null;
        foreach ($escalaPessoaFuncaos as $escalaPessoaFuncao) {
            $this->addEscalaPessoaFuncao($escalaPessoaFuncao);
        }

        $this->collEscalaPessoaFuncaos = $escalaPessoaFuncaos;
        $this->collEscalaPessoaFuncaosPartial = false;
    }

    /**
     * Returns the number of related EscalaPessoaFuncao objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related EscalaPessoaFuncao objects.
     * @throws PropelException
     */
    public function countEscalaPessoaFuncaos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collEscalaPessoaFuncaosPartial && !$this->isNew();
        if (null === $this->collEscalaPessoaFuncaos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collEscalaPessoaFuncaos) {
                return 0;
            } else {
                if($partial && !$criteria) {
                    return count($this->getEscalaPessoaFuncaos());
                }
                $query = EscalaPessoaFuncaoQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByFuncao($this)
                    ->count($con);
            }
        } else {
            return count($this->collEscalaPessoaFuncaos);
        }
    }

    /**
     * Method called to associate a EscalaPessoaFuncao object to this object
     * through the EscalaPessoaFuncao foreign key attribute.
     *
     * @param    EscalaPessoaFuncao $l EscalaPessoaFuncao
     * @return Funcao The current object (for fluent API support)
     */
    public function addEscalaPessoaFuncao(EscalaPessoaFuncao $l)
    {
        if ($this->collEscalaPessoaFuncaos === null) {
            $this->initEscalaPessoaFuncaos();
            $this->collEscalaPessoaFuncaosPartial = true;
        }
        if (!$this->collEscalaPessoaFuncaos->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddEscalaPessoaFuncao($l);
        }

        return $this;
    }

    /**
     * @param	EscalaPessoaFuncao $escalaPessoaFuncao The escalaPessoaFuncao object to add.
     */
    protected function doAddEscalaPessoaFuncao($escalaPessoaFuncao)
    {
        $this->collEscalaPessoaFuncaos[]= $escalaPessoaFuncao;
        $escalaPessoaFuncao->setFuncao($this);
    }

    /**
     * @param	EscalaPessoaFuncao $escalaPessoaFuncao The escalaPessoaFuncao object to remove.
     */
    public function removeEscalaPessoaFuncao($escalaPessoaFuncao)
    {
        if ($this->getEscalaPessoaFuncaos()->contains($escalaPessoaFuncao)) {
            $this->collEscalaPessoaFuncaos->remove($this->collEscalaPessoaFuncaos->search($escalaPessoaFuncao));
            if (null === $this->escalaPessoaFuncaosScheduledForDeletion) {
                $this->escalaPessoaFuncaosScheduledForDeletion = clone $this->collEscalaPessoaFuncaos;
                $this->escalaPessoaFuncaosScheduledForDeletion->clear();
            }
            $this->escalaPessoaFuncaosScheduledForDeletion[]= $escalaPessoaFuncao;
            $escalaPessoaFuncao->setFuncao(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Funcao is new, it will return
     * an empty collection; or if this Funcao has previously
     * been saved, it will retrieve related EscalaPessoaFuncaos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Funcao.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|EscalaPessoaFuncao[] List of EscalaPessoaFuncao objects
     */
    public function getEscalaPessoaFuncaosJoinEscalaPessoa($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EscalaPessoaFuncaoQuery::create(null, $criteria);
        $query->joinWith('EscalaPessoa', $join_behavior);

        return $this->getEscalaPessoaFuncaos($query, $con);
    }

    /**
     * Clears out the collKitsEnsaios collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addKitsEnsaios()
     */
    public function clearKitsEnsaios()
    {
        $this->collKitsEnsaios = null; // important to set this to null since that means it is uninitialized
        $this->collKitsEnsaiosPartial = null;
    }

    /**
     * reset is the collKitsEnsaios collection loaded partially
     *
     * @return void
     */
    public function resetPartialKitsEnsaios($v = true)
    {
        $this->collKitsEnsaiosPartial = $v;
    }

    /**
     * Initializes the collKitsEnsaios collection.
     *
     * By default this just sets the collKitsEnsaios collection to an empty array (like clearcollKitsEnsaios());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initKitsEnsaios($overrideExisting = true)
    {
        if (null !== $this->collKitsEnsaios && !$overrideExisting) {
            return;
        }
        $this->collKitsEnsaios = new PropelObjectCollection();
        $this->collKitsEnsaios->setModel('KitsEnsaio');
    }

    /**
     * Gets an array of KitsEnsaio objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Funcao is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|KitsEnsaio[] List of KitsEnsaio objects
     * @throws PropelException
     */
    public function getKitsEnsaios($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collKitsEnsaiosPartial && !$this->isNew();
        if (null === $this->collKitsEnsaios || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collKitsEnsaios) {
                // return empty collection
                $this->initKitsEnsaios();
            } else {
                $collKitsEnsaios = KitsEnsaioQuery::create(null, $criteria)
                    ->filterByFuncao($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collKitsEnsaiosPartial && count($collKitsEnsaios)) {
                      $this->initKitsEnsaios(false);

                      foreach($collKitsEnsaios as $obj) {
                        if (false == $this->collKitsEnsaios->contains($obj)) {
                          $this->collKitsEnsaios->append($obj);
                        }
                      }

                      $this->collKitsEnsaiosPartial = true;
                    }

                    return $collKitsEnsaios;
                }

                if($partial && $this->collKitsEnsaios) {
                    foreach($this->collKitsEnsaios as $obj) {
                        if($obj->isNew()) {
                            $collKitsEnsaios[] = $obj;
                        }
                    }
                }

                $this->collKitsEnsaios = $collKitsEnsaios;
                $this->collKitsEnsaiosPartial = false;
            }
        }

        return $this->collKitsEnsaios;
    }

    /**
     * Sets a collection of KitsEnsaio objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $kitsEnsaios A Propel collection.
     * @param PropelPDO $con Optional connection object
     */
    public function setKitsEnsaios(PropelCollection $kitsEnsaios, PropelPDO $con = null)
    {
        $this->kitsEnsaiosScheduledForDeletion = $this->getKitsEnsaios(new Criteria(), $con)->diff($kitsEnsaios);

        foreach ($this->kitsEnsaiosScheduledForDeletion as $kitsEnsaioRemoved) {
            $kitsEnsaioRemoved->setFuncao(null);
        }

        $this->collKitsEnsaios = null;
        foreach ($kitsEnsaios as $kitsEnsaio) {
            $this->addKitsEnsaio($kitsEnsaio);
        }

        $this->collKitsEnsaios = $kitsEnsaios;
        $this->collKitsEnsaiosPartial = false;
    }

    /**
     * Returns the number of related KitsEnsaio objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related KitsEnsaio objects.
     * @throws PropelException
     */
    public function countKitsEnsaios(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collKitsEnsaiosPartial && !$this->isNew();
        if (null === $this->collKitsEnsaios || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collKitsEnsaios) {
                return 0;
            } else {
                if($partial && !$criteria) {
                    return count($this->getKitsEnsaios());
                }
                $query = KitsEnsaioQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByFuncao($this)
                    ->count($con);
            }
        } else {
            return count($this->collKitsEnsaios);
        }
    }

    /**
     * Method called to associate a KitsEnsaio object to this object
     * through the KitsEnsaio foreign key attribute.
     *
     * @param    KitsEnsaio $l KitsEnsaio
     * @return Funcao The current object (for fluent API support)
     */
    public function addKitsEnsaio(KitsEnsaio $l)
    {
        if ($this->collKitsEnsaios === null) {
            $this->initKitsEnsaios();
            $this->collKitsEnsaiosPartial = true;
        }
        if (!$this->collKitsEnsaios->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddKitsEnsaio($l);
        }

        return $this;
    }

    /**
     * @param	KitsEnsaio $kitsEnsaio The kitsEnsaio object to add.
     */
    protected function doAddKitsEnsaio($kitsEnsaio)
    {
        $this->collKitsEnsaios[]= $kitsEnsaio;
        $kitsEnsaio->setFuncao($this);
    }

    /**
     * @param	KitsEnsaio $kitsEnsaio The kitsEnsaio object to remove.
     */
    public function removeKitsEnsaio($kitsEnsaio)
    {
        if ($this->getKitsEnsaios()->contains($kitsEnsaio)) {
            $this->collKitsEnsaios->remove($this->collKitsEnsaios->search($kitsEnsaio));
            if (null === $this->kitsEnsaiosScheduledForDeletion) {
                $this->kitsEnsaiosScheduledForDeletion = clone $this->collKitsEnsaios;
                $this->kitsEnsaiosScheduledForDeletion->clear();
            }
            $this->kitsEnsaiosScheduledForDeletion[]= $kitsEnsaio;
            $kitsEnsaio->setFuncao(null);
        }
    }

    /**
     * Clears out the collUsuarioFuncaos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addUsuarioFuncaos()
     */
    public function clearUsuarioFuncaos()
    {
        $this->collUsuarioFuncaos = null; // important to set this to null since that means it is uninitialized
        $this->collUsuarioFuncaosPartial = null;
    }

    /**
     * reset is the collUsuarioFuncaos collection loaded partially
     *
     * @return void
     */
    public function resetPartialUsuarioFuncaos($v = true)
    {
        $this->collUsuarioFuncaosPartial = $v;
    }

    /**
     * Initializes the collUsuarioFuncaos collection.
     *
     * By default this just sets the collUsuarioFuncaos collection to an empty array (like clearcollUsuarioFuncaos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initUsuarioFuncaos($overrideExisting = true)
    {
        if (null !== $this->collUsuarioFuncaos && !$overrideExisting) {
            return;
        }
        $this->collUsuarioFuncaos = new PropelObjectCollection();
        $this->collUsuarioFuncaos->setModel('UsuarioFuncao');
    }

    /**
     * Gets an array of UsuarioFuncao objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Funcao is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|UsuarioFuncao[] List of UsuarioFuncao objects
     * @throws PropelException
     */
    public function getUsuarioFuncaos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collUsuarioFuncaosPartial && !$this->isNew();
        if (null === $this->collUsuarioFuncaos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collUsuarioFuncaos) {
                // return empty collection
                $this->initUsuarioFuncaos();
            } else {
                $collUsuarioFuncaos = UsuarioFuncaoQuery::create(null, $criteria)
                    ->filterByFuncao($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collUsuarioFuncaosPartial && count($collUsuarioFuncaos)) {
                      $this->initUsuarioFuncaos(false);

                      foreach($collUsuarioFuncaos as $obj) {
                        if (false == $this->collUsuarioFuncaos->contains($obj)) {
                          $this->collUsuarioFuncaos->append($obj);
                        }
                      }

                      $this->collUsuarioFuncaosPartial = true;
                    }

                    return $collUsuarioFuncaos;
                }

                if($partial && $this->collUsuarioFuncaos) {
                    foreach($this->collUsuarioFuncaos as $obj) {
                        if($obj->isNew()) {
                            $collUsuarioFuncaos[] = $obj;
                        }
                    }
                }

                $this->collUsuarioFuncaos = $collUsuarioFuncaos;
                $this->collUsuarioFuncaosPartial = false;
            }
        }

        return $this->collUsuarioFuncaos;
    }

    /**
     * Sets a collection of UsuarioFuncao objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $usuarioFuncaos A Propel collection.
     * @param PropelPDO $con Optional connection object
     */
    public function setUsuarioFuncaos(PropelCollection $usuarioFuncaos, PropelPDO $con = null)
    {
        $this->usuarioFuncaosScheduledForDeletion = $this->getUsuarioFuncaos(new Criteria(), $con)->diff($usuarioFuncaos);

        foreach ($this->usuarioFuncaosScheduledForDeletion as $usuarioFuncaoRemoved) {
            $usuarioFuncaoRemoved->setFuncao(null);
        }

        $this->collUsuarioFuncaos = null;
        foreach ($usuarioFuncaos as $usuarioFuncao) {
            $this->addUsuarioFuncao($usuarioFuncao);
        }

        $this->collUsuarioFuncaos = $usuarioFuncaos;
        $this->collUsuarioFuncaosPartial = false;
    }

    /**
     * Returns the number of related UsuarioFuncao objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related UsuarioFuncao objects.
     * @throws PropelException
     */
    public function countUsuarioFuncaos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collUsuarioFuncaosPartial && !$this->isNew();
        if (null === $this->collUsuarioFuncaos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collUsuarioFuncaos) {
                return 0;
            } else {
                if($partial && !$criteria) {
                    return count($this->getUsuarioFuncaos());
                }
                $query = UsuarioFuncaoQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByFuncao($this)
                    ->count($con);
            }
        } else {
            return count($this->collUsuarioFuncaos);
        }
    }

    /**
     * Method called to associate a UsuarioFuncao object to this object
     * through the UsuarioFuncao foreign key attribute.
     *
     * @param    UsuarioFuncao $l UsuarioFuncao
     * @return Funcao The current object (for fluent API support)
     */
    public function addUsuarioFuncao(UsuarioFuncao $l)
    {
        if ($this->collUsuarioFuncaos === null) {
            $this->initUsuarioFuncaos();
            $this->collUsuarioFuncaosPartial = true;
        }
        if (!$this->collUsuarioFuncaos->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddUsuarioFuncao($l);
        }

        return $this;
    }

    /**
     * @param	UsuarioFuncao $usuarioFuncao The usuarioFuncao object to add.
     */
    protected function doAddUsuarioFuncao($usuarioFuncao)
    {
        $this->collUsuarioFuncaos[]= $usuarioFuncao;
        $usuarioFuncao->setFuncao($this);
    }

    /**
     * @param	UsuarioFuncao $usuarioFuncao The usuarioFuncao object to remove.
     */
    public function removeUsuarioFuncao($usuarioFuncao)
    {
        if ($this->getUsuarioFuncaos()->contains($usuarioFuncao)) {
            $this->collUsuarioFuncaos->remove($this->collUsuarioFuncaos->search($usuarioFuncao));
            if (null === $this->usuarioFuncaosScheduledForDeletion) {
                $this->usuarioFuncaosScheduledForDeletion = clone $this->collUsuarioFuncaos;
                $this->usuarioFuncaosScheduledForDeletion->clear();
            }
            $this->usuarioFuncaosScheduledForDeletion[]= $usuarioFuncao;
            $usuarioFuncao->setFuncao(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Funcao is new, it will return
     * an empty collection; or if this Funcao has previously
     * been saved, it will retrieve related UsuarioFuncaos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Funcao.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|UsuarioFuncao[] List of UsuarioFuncao objects
     */
    public function getUsuarioFuncaosJoinUsuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = UsuarioFuncaoQuery::create(null, $criteria);
        $query->joinWith('Usuario', $join_behavior);

        return $this->getUsuarioFuncaos($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->nome = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volumne/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep) {
            if ($this->collEscalaPessoaFuncaos) {
                foreach ($this->collEscalaPessoaFuncaos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collKitsEnsaios) {
                foreach ($this->collKitsEnsaios as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collUsuarioFuncaos) {
                foreach ($this->collUsuarioFuncaos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        if ($this->collEscalaPessoaFuncaos instanceof PropelCollection) {
            $this->collEscalaPessoaFuncaos->clearIterator();
        }
        $this->collEscalaPessoaFuncaos = null;
        if ($this->collKitsEnsaios instanceof PropelCollection) {
            $this->collKitsEnsaios->clearIterator();
        }
        $this->collKitsEnsaios = null;
        if ($this->collUsuarioFuncaos instanceof PropelCollection) {
            $this->collUsuarioFuncaos->clearIterator();
        }
        $this->collUsuarioFuncaos = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(FuncaoPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
