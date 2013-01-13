<?php


/**
 * Base class that represents a row from the 'banda' table.
 *
 *
 *
 * @package    propel.generator.centraldeadoradores.om
 */
abstract class BaseBanda extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'BandaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        BandaPeer
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
     * The value for the id_lider field.
     * @var        int
     */
    protected $id_lider;

    /**
     * @var        Usuario
     */
    protected $aUsuarioRelatedByIdLider;

    /**
     * @var        PropelObjectCollection|Usuario[] Collection to store aggregation of Usuario objects.
     */
    protected $collUsuariosRelatedByIdBanda;
    protected $collUsuariosRelatedByIdBandaPartial;

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
    protected $usuariosRelatedByIdBandaScheduledForDeletion = null;

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
     * Get the [id_lider] column value.
     *
     * @return int
     */
    public function getIdLider()
    {
        return $this->id_lider;
    }

    /**
     * Set the value of [id] column.
     *
     * @param int $v new value
     * @return Banda The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = BandaPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [nome] column.
     *
     * @param string $v new value
     * @return Banda The current object (for fluent API support)
     */
    public function setNome($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->nome !== $v) {
            $this->nome = $v;
            $this->modifiedColumns[] = BandaPeer::NOME;
        }


        return $this;
    } // setNome()

    /**
     * Set the value of [id_lider] column.
     *
     * @param int $v new value
     * @return Banda The current object (for fluent API support)
     */
    public function setIdLider($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id_lider !== $v) {
            $this->id_lider = $v;
            $this->modifiedColumns[] = BandaPeer::ID_LIDER;
        }

        if ($this->aUsuarioRelatedByIdLider !== null && $this->aUsuarioRelatedByIdLider->getId() !== $v) {
            $this->aUsuarioRelatedByIdLider = null;
        }


        return $this;
    } // setIdLider()

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
            $this->id_lider = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 3; // 3 = BandaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Banda object", $e);
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

        if ($this->aUsuarioRelatedByIdLider !== null && $this->id_lider !== $this->aUsuarioRelatedByIdLider->getId()) {
            $this->aUsuarioRelatedByIdLider = null;
        }
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
            $con = Propel::getConnection(BandaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = BandaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aUsuarioRelatedByIdLider = null;
            $this->collUsuariosRelatedByIdBanda = null;

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
            $con = Propel::getConnection(BandaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = BandaQuery::create()
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
            $con = Propel::getConnection(BandaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                BandaPeer::addInstanceToPool($this);
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

            // We call the save method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aUsuarioRelatedByIdLider !== null) {
                if ($this->aUsuarioRelatedByIdLider->isModified() || $this->aUsuarioRelatedByIdLider->isNew()) {
                    $affectedRows += $this->aUsuarioRelatedByIdLider->save($con);
                }
                $this->setUsuarioRelatedByIdLider($this->aUsuarioRelatedByIdLider);
            }

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

            if ($this->usuariosRelatedByIdBandaScheduledForDeletion !== null) {
                if (!$this->usuariosRelatedByIdBandaScheduledForDeletion->isEmpty()) {
                    foreach ($this->usuariosRelatedByIdBandaScheduledForDeletion as $usuarioRelatedByIdBanda) {
                        // need to save related object because we set the relation to null
                        $usuarioRelatedByIdBanda->save($con);
                    }
                    $this->usuariosRelatedByIdBandaScheduledForDeletion = null;
                }
            }

            if ($this->collUsuariosRelatedByIdBanda !== null) {
                foreach ($this->collUsuariosRelatedByIdBanda as $referrerFK) {
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

        $this->modifiedColumns[] = BandaPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . BandaPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(BandaPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(BandaPeer::NOME)) {
            $modifiedColumns[':p' . $index++]  = '`NOME`';
        }
        if ($this->isColumnModified(BandaPeer::ID_LIDER)) {
            $modifiedColumns[':p' . $index++]  = '`ID_LIDER`';
        }

        $sql = sprintf(
            'INSERT INTO `banda` (%s) VALUES (%s)',
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
                    case '`ID_LIDER`':
                        $stmt->bindValue($identifier, $this->id_lider, PDO::PARAM_INT);
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


            // We call the validate method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aUsuarioRelatedByIdLider !== null) {
                if (!$this->aUsuarioRelatedByIdLider->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUsuarioRelatedByIdLider->getValidationFailures());
                }
            }


            if (($retval = BandaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collUsuariosRelatedByIdBanda !== null) {
                    foreach ($this->collUsuariosRelatedByIdBanda as $referrerFK) {
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
        $pos = BandaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
            case 2:
                return $this->getIdLider();
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
        if (isset($alreadyDumpedObjects['Banda'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Banda'][$this->getPrimaryKey()] = true;
        $keys = BandaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getNome(),
            $keys[2] => $this->getIdLider(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aUsuarioRelatedByIdLider) {
                $result['UsuarioRelatedByIdLider'] = $this->aUsuarioRelatedByIdLider->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collUsuariosRelatedByIdBanda) {
                $result['UsuariosRelatedByIdBanda'] = $this->collUsuariosRelatedByIdBanda->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = BandaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
            case 2:
                $this->setIdLider($value);
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
        $keys = BandaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setNome($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdLider($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(BandaPeer::DATABASE_NAME);

        if ($this->isColumnModified(BandaPeer::ID)) $criteria->add(BandaPeer::ID, $this->id);
        if ($this->isColumnModified(BandaPeer::NOME)) $criteria->add(BandaPeer::NOME, $this->nome);
        if ($this->isColumnModified(BandaPeer::ID_LIDER)) $criteria->add(BandaPeer::ID_LIDER, $this->id_lider);

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
        $criteria = new Criteria(BandaPeer::DATABASE_NAME);
        $criteria->add(BandaPeer::ID, $this->id);

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
     * @param object $copyObj An object of Banda (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setNome($this->getNome());
        $copyObj->setIdLider($this->getIdLider());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getUsuariosRelatedByIdBanda() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addUsuarioRelatedByIdBanda($relObj->copy($deepCopy));
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
     * @return Banda Clone of current object.
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
     * @return BandaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new BandaPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param             Usuario $v
     * @return Banda The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUsuarioRelatedByIdLider(Usuario $v = null)
    {
        if ($v === null) {
            $this->setIdLider(NULL);
        } else {
            $this->setIdLider($v->getId());
        }

        $this->aUsuarioRelatedByIdLider = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Usuario object, it will not be re-added.
        if ($v !== null) {
            $v->addBandaRelatedByIdLider($this);
        }


        return $this;
    }


    /**
     * Get the associated Usuario object
     *
     * @param PropelPDO $con Optional Connection object.
     * @return Usuario The associated Usuario object.
     * @throws PropelException
     */
    public function getUsuarioRelatedByIdLider(PropelPDO $con = null)
    {
        if ($this->aUsuarioRelatedByIdLider === null && ($this->id_lider !== null)) {
            $this->aUsuarioRelatedByIdLider = UsuarioQuery::create()->findPk($this->id_lider, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUsuarioRelatedByIdLider->addBandasRelatedByIdLider($this);
             */
        }

        return $this->aUsuarioRelatedByIdLider;
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
        if ('UsuarioRelatedByIdBanda' == $relationName) {
            $this->initUsuariosRelatedByIdBanda();
        }
    }

    /**
     * Clears out the collUsuariosRelatedByIdBanda collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addUsuariosRelatedByIdBanda()
     */
    public function clearUsuariosRelatedByIdBanda()
    {
        $this->collUsuariosRelatedByIdBanda = null; // important to set this to null since that means it is uninitialized
        $this->collUsuariosRelatedByIdBandaPartial = null;
    }

    /**
     * reset is the collUsuariosRelatedByIdBanda collection loaded partially
     *
     * @return void
     */
    public function resetPartialUsuariosRelatedByIdBanda($v = true)
    {
        $this->collUsuariosRelatedByIdBandaPartial = $v;
    }

    /**
     * Initializes the collUsuariosRelatedByIdBanda collection.
     *
     * By default this just sets the collUsuariosRelatedByIdBanda collection to an empty array (like clearcollUsuariosRelatedByIdBanda());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initUsuariosRelatedByIdBanda($overrideExisting = true)
    {
        if (null !== $this->collUsuariosRelatedByIdBanda && !$overrideExisting) {
            return;
        }
        $this->collUsuariosRelatedByIdBanda = new PropelObjectCollection();
        $this->collUsuariosRelatedByIdBanda->setModel('Usuario');
    }

    /**
     * Gets an array of Usuario objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Banda is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Usuario[] List of Usuario objects
     * @throws PropelException
     */
    public function getUsuariosRelatedByIdBanda($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collUsuariosRelatedByIdBandaPartial && !$this->isNew();
        if (null === $this->collUsuariosRelatedByIdBanda || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collUsuariosRelatedByIdBanda) {
                // return empty collection
                $this->initUsuariosRelatedByIdBanda();
            } else {
                $collUsuariosRelatedByIdBanda = UsuarioQuery::create(null, $criteria)
                    ->filterByBandaRelatedByIdBanda($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collUsuariosRelatedByIdBandaPartial && count($collUsuariosRelatedByIdBanda)) {
                      $this->initUsuariosRelatedByIdBanda(false);

                      foreach($collUsuariosRelatedByIdBanda as $obj) {
                        if (false == $this->collUsuariosRelatedByIdBanda->contains($obj)) {
                          $this->collUsuariosRelatedByIdBanda->append($obj);
                        }
                      }

                      $this->collUsuariosRelatedByIdBandaPartial = true;
                    }

                    return $collUsuariosRelatedByIdBanda;
                }

                if($partial && $this->collUsuariosRelatedByIdBanda) {
                    foreach($this->collUsuariosRelatedByIdBanda as $obj) {
                        if($obj->isNew()) {
                            $collUsuariosRelatedByIdBanda[] = $obj;
                        }
                    }
                }

                $this->collUsuariosRelatedByIdBanda = $collUsuariosRelatedByIdBanda;
                $this->collUsuariosRelatedByIdBandaPartial = false;
            }
        }

        return $this->collUsuariosRelatedByIdBanda;
    }

    /**
     * Sets a collection of UsuarioRelatedByIdBanda objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $usuariosRelatedByIdBanda A Propel collection.
     * @param PropelPDO $con Optional connection object
     */
    public function setUsuariosRelatedByIdBanda(PropelCollection $usuariosRelatedByIdBanda, PropelPDO $con = null)
    {
        $this->usuariosRelatedByIdBandaScheduledForDeletion = $this->getUsuariosRelatedByIdBanda(new Criteria(), $con)->diff($usuariosRelatedByIdBanda);

        foreach ($this->usuariosRelatedByIdBandaScheduledForDeletion as $usuarioRelatedByIdBandaRemoved) {
            $usuarioRelatedByIdBandaRemoved->setBandaRelatedByIdBanda(null);
        }

        $this->collUsuariosRelatedByIdBanda = null;
        foreach ($usuariosRelatedByIdBanda as $usuarioRelatedByIdBanda) {
            $this->addUsuarioRelatedByIdBanda($usuarioRelatedByIdBanda);
        }

        $this->collUsuariosRelatedByIdBanda = $usuariosRelatedByIdBanda;
        $this->collUsuariosRelatedByIdBandaPartial = false;
    }

    /**
     * Returns the number of related Usuario objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Usuario objects.
     * @throws PropelException
     */
    public function countUsuariosRelatedByIdBanda(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collUsuariosRelatedByIdBandaPartial && !$this->isNew();
        if (null === $this->collUsuariosRelatedByIdBanda || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collUsuariosRelatedByIdBanda) {
                return 0;
            } else {
                if($partial && !$criteria) {
                    return count($this->getUsuariosRelatedByIdBanda());
                }
                $query = UsuarioQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByBandaRelatedByIdBanda($this)
                    ->count($con);
            }
        } else {
            return count($this->collUsuariosRelatedByIdBanda);
        }
    }

    /**
     * Method called to associate a Usuario object to this object
     * through the Usuario foreign key attribute.
     *
     * @param    Usuario $l Usuario
     * @return Banda The current object (for fluent API support)
     */
    public function addUsuarioRelatedByIdBanda(Usuario $l)
    {
        if ($this->collUsuariosRelatedByIdBanda === null) {
            $this->initUsuariosRelatedByIdBanda();
            $this->collUsuariosRelatedByIdBandaPartial = true;
        }
        if (!$this->collUsuariosRelatedByIdBanda->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddUsuarioRelatedByIdBanda($l);
        }

        return $this;
    }

    /**
     * @param	UsuarioRelatedByIdBanda $usuarioRelatedByIdBanda The usuarioRelatedByIdBanda object to add.
     */
    protected function doAddUsuarioRelatedByIdBanda($usuarioRelatedByIdBanda)
    {
        $this->collUsuariosRelatedByIdBanda[]= $usuarioRelatedByIdBanda;
        $usuarioRelatedByIdBanda->setBandaRelatedByIdBanda($this);
    }

    /**
     * @param	UsuarioRelatedByIdBanda $usuarioRelatedByIdBanda The usuarioRelatedByIdBanda object to remove.
     */
    public function removeUsuarioRelatedByIdBanda($usuarioRelatedByIdBanda)
    {
        if ($this->getUsuariosRelatedByIdBanda()->contains($usuarioRelatedByIdBanda)) {
            $this->collUsuariosRelatedByIdBanda->remove($this->collUsuariosRelatedByIdBanda->search($usuarioRelatedByIdBanda));
            if (null === $this->usuariosRelatedByIdBandaScheduledForDeletion) {
                $this->usuariosRelatedByIdBandaScheduledForDeletion = clone $this->collUsuariosRelatedByIdBanda;
                $this->usuariosRelatedByIdBandaScheduledForDeletion->clear();
            }
            $this->usuariosRelatedByIdBandaScheduledForDeletion[]= $usuarioRelatedByIdBanda;
            $usuarioRelatedByIdBanda->setBandaRelatedByIdBanda(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Banda is new, it will return
     * an empty collection; or if this Banda has previously
     * been saved, it will retrieve related UsuariosRelatedByIdBanda from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Banda.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Usuario[] List of Usuario objects
     */
    public function getUsuariosRelatedByIdBandaJoinMinisterio($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = UsuarioQuery::create(null, $criteria);
        $query->joinWith('Ministerio', $join_behavior);

        return $this->getUsuariosRelatedByIdBanda($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->nome = null;
        $this->id_lider = null;
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
            if ($this->collUsuariosRelatedByIdBanda) {
                foreach ($this->collUsuariosRelatedByIdBanda as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        if ($this->collUsuariosRelatedByIdBanda instanceof PropelCollection) {
            $this->collUsuariosRelatedByIdBanda->clearIterator();
        }
        $this->collUsuariosRelatedByIdBanda = null;
        $this->aUsuarioRelatedByIdLider = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(BandaPeer::DEFAULT_STRING_FORMAT);
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
