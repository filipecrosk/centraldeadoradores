<?php


/**
 * Base class that represents a row from the 'arquivo' table.
 *
 *
 *
 * @package    propel.generator.centraldeadoradores.om
 */
abstract class BaseArquivo extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ArquivoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ArquivoPeer
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
     * The value for the mime field.
     * @var        string
     */
    protected $mime;

    /**
     * The value for the tamanho field.
     * @var        int
     */
    protected $tamanho;

    /**
     * The value for the conteudo field.
     * @var        resource
     */
    protected $conteudo;

    /**
     * @var        PropelObjectCollection|EmailHeader[] Collection to store aggregation of EmailHeader objects.
     */
    protected $collEmailHeaders;
    protected $collEmailHeadersPartial;

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
    protected $emailHeadersScheduledForDeletion = null;

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
     * Get the [mime] column value.
     *
     * @return string
     */
    public function getMime()
    {
        return $this->mime;
    }

    /**
     * Get the [tamanho] column value.
     *
     * @return int
     */
    public function getTamanho()
    {
        return $this->tamanho;
    }

    /**
     * Get the [conteudo] column value.
     *
     * @return resource
     */
    public function getConteudo()
    {
        return $this->conteudo;
    }

    /**
     * Set the value of [id] column.
     *
     * @param int $v new value
     * @return Arquivo The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = ArquivoPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [nome] column.
     *
     * @param string $v new value
     * @return Arquivo The current object (for fluent API support)
     */
    public function setNome($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->nome !== $v) {
            $this->nome = $v;
            $this->modifiedColumns[] = ArquivoPeer::NOME;
        }


        return $this;
    } // setNome()

    /**
     * Set the value of [mime] column.
     *
     * @param string $v new value
     * @return Arquivo The current object (for fluent API support)
     */
    public function setMime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->mime !== $v) {
            $this->mime = $v;
            $this->modifiedColumns[] = ArquivoPeer::MIME;
        }


        return $this;
    } // setMime()

    /**
     * Set the value of [tamanho] column.
     *
     * @param int $v new value
     * @return Arquivo The current object (for fluent API support)
     */
    public function setTamanho($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->tamanho !== $v) {
            $this->tamanho = $v;
            $this->modifiedColumns[] = ArquivoPeer::TAMANHO;
        }


        return $this;
    } // setTamanho()

    /**
     * Set the value of [conteudo] column.
     *
     * @param resource $v new value
     * @return Arquivo The current object (for fluent API support)
     */
    public function setConteudo($v)
    {
        // Because BLOB columns are streams in PDO we have to assume that they are
        // always modified when a new value is passed in.  For example, the contents
        // of the stream itself may have changed externally.
        if (!is_resource($v) && $v !== null) {
            $this->conteudo = fopen('php://memory', 'r+');
            fwrite($this->conteudo, $v);
            rewind($this->conteudo);
        } else { // it's already a stream
            $this->conteudo = $v;
        }
        $this->modifiedColumns[] = ArquivoPeer::CONTEUDO;


        return $this;
    } // setConteudo()

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
            $this->mime = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->tamanho = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            if ($row[$startcol + 4] !== null) {
                $this->conteudo = fopen('php://memory', 'r+');
                fwrite($this->conteudo, $row[$startcol + 4]);
                rewind($this->conteudo);
            } else {
                $this->conteudo = null;
            }
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 5; // 5 = ArquivoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Arquivo object", $e);
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
            $con = Propel::getConnection(ArquivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ArquivoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collEmailHeaders = null;

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
            $con = Propel::getConnection(ArquivoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ArquivoQuery::create()
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
            $con = Propel::getConnection(ArquivoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ArquivoPeer::addInstanceToPool($this);
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
                // Rewind the conteudo LOB column, since PDO does not rewind after inserting value.
                if ($this->conteudo !== null && is_resource($this->conteudo)) {
                    rewind($this->conteudo);
                }

                $this->resetModified();
            }

            if ($this->emailHeadersScheduledForDeletion !== null) {
                if (!$this->emailHeadersScheduledForDeletion->isEmpty()) {
                    foreach ($this->emailHeadersScheduledForDeletion as $emailHeader) {
                        // need to save related object because we set the relation to null
                        $emailHeader->save($con);
                    }
                    $this->emailHeadersScheduledForDeletion = null;
                }
            }

            if ($this->collEmailHeaders !== null) {
                foreach ($this->collEmailHeaders as $referrerFK) {
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

        $this->modifiedColumns[] = ArquivoPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ArquivoPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ArquivoPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(ArquivoPeer::NOME)) {
            $modifiedColumns[':p' . $index++]  = '`NOME`';
        }
        if ($this->isColumnModified(ArquivoPeer::MIME)) {
            $modifiedColumns[':p' . $index++]  = '`MIME`';
        }
        if ($this->isColumnModified(ArquivoPeer::TAMANHO)) {
            $modifiedColumns[':p' . $index++]  = '`TAMANHO`';
        }
        if ($this->isColumnModified(ArquivoPeer::CONTEUDO)) {
            $modifiedColumns[':p' . $index++]  = '`CONTEUDO`';
        }

        $sql = sprintf(
            'INSERT INTO `arquivo` (%s) VALUES (%s)',
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
                    case '`MIME`':
                        $stmt->bindValue($identifier, $this->mime, PDO::PARAM_STR);
                        break;
                    case '`TAMANHO`':
                        $stmt->bindValue($identifier, $this->tamanho, PDO::PARAM_INT);
                        break;
                    case '`CONTEUDO`':
                        if (is_resource($this->conteudo)) {
                            rewind($this->conteudo);
                        }
                        $stmt->bindValue($identifier, $this->conteudo, PDO::PARAM_LOB);
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


            if (($retval = ArquivoPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collEmailHeaders !== null) {
                    foreach ($this->collEmailHeaders as $referrerFK) {
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
        $pos = ArquivoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getMime();
                break;
            case 3:
                return $this->getTamanho();
                break;
            case 4:
                return $this->getConteudo();
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
        if (isset($alreadyDumpedObjects['Arquivo'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Arquivo'][$this->getPrimaryKey()] = true;
        $keys = ArquivoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getNome(),
            $keys[2] => $this->getMime(),
            $keys[3] => $this->getTamanho(),
            $keys[4] => $this->getConteudo(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collEmailHeaders) {
                $result['EmailHeaders'] = $this->collEmailHeaders->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ArquivoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setMime($value);
                break;
            case 3:
                $this->setTamanho($value);
                break;
            case 4:
                $this->setConteudo($value);
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
        $keys = ArquivoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setNome($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setMime($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setTamanho($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setConteudo($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ArquivoPeer::DATABASE_NAME);

        if ($this->isColumnModified(ArquivoPeer::ID)) $criteria->add(ArquivoPeer::ID, $this->id);
        if ($this->isColumnModified(ArquivoPeer::NOME)) $criteria->add(ArquivoPeer::NOME, $this->nome);
        if ($this->isColumnModified(ArquivoPeer::MIME)) $criteria->add(ArquivoPeer::MIME, $this->mime);
        if ($this->isColumnModified(ArquivoPeer::TAMANHO)) $criteria->add(ArquivoPeer::TAMANHO, $this->tamanho);
        if ($this->isColumnModified(ArquivoPeer::CONTEUDO)) $criteria->add(ArquivoPeer::CONTEUDO, $this->conteudo);

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
        $criteria = new Criteria(ArquivoPeer::DATABASE_NAME);
        $criteria->add(ArquivoPeer::ID, $this->id);

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
     * @param object $copyObj An object of Arquivo (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setNome($this->getNome());
        $copyObj->setMime($this->getMime());
        $copyObj->setTamanho($this->getTamanho());
        $copyObj->setConteudo($this->getConteudo());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getEmailHeaders() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addEmailHeader($relObj->copy($deepCopy));
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
     * @return Arquivo Clone of current object.
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
     * @return ArquivoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ArquivoPeer();
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
        if ('EmailHeader' == $relationName) {
            $this->initEmailHeaders();
        }
    }

    /**
     * Clears out the collEmailHeaders collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addEmailHeaders()
     */
    public function clearEmailHeaders()
    {
        $this->collEmailHeaders = null; // important to set this to null since that means it is uninitialized
        $this->collEmailHeadersPartial = null;
    }

    /**
     * reset is the collEmailHeaders collection loaded partially
     *
     * @return void
     */
    public function resetPartialEmailHeaders($v = true)
    {
        $this->collEmailHeadersPartial = $v;
    }

    /**
     * Initializes the collEmailHeaders collection.
     *
     * By default this just sets the collEmailHeaders collection to an empty array (like clearcollEmailHeaders());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initEmailHeaders($overrideExisting = true)
    {
        if (null !== $this->collEmailHeaders && !$overrideExisting) {
            return;
        }
        $this->collEmailHeaders = new PropelObjectCollection();
        $this->collEmailHeaders->setModel('EmailHeader');
    }

    /**
     * Gets an array of EmailHeader objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Arquivo is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|EmailHeader[] List of EmailHeader objects
     * @throws PropelException
     */
    public function getEmailHeaders($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collEmailHeadersPartial && !$this->isNew();
        if (null === $this->collEmailHeaders || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collEmailHeaders) {
                // return empty collection
                $this->initEmailHeaders();
            } else {
                $collEmailHeaders = EmailHeaderQuery::create(null, $criteria)
                    ->filterByArquivo($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collEmailHeadersPartial && count($collEmailHeaders)) {
                      $this->initEmailHeaders(false);

                      foreach($collEmailHeaders as $obj) {
                        if (false == $this->collEmailHeaders->contains($obj)) {
                          $this->collEmailHeaders->append($obj);
                        }
                      }

                      $this->collEmailHeadersPartial = true;
                    }

                    return $collEmailHeaders;
                }

                if($partial && $this->collEmailHeaders) {
                    foreach($this->collEmailHeaders as $obj) {
                        if($obj->isNew()) {
                            $collEmailHeaders[] = $obj;
                        }
                    }
                }

                $this->collEmailHeaders = $collEmailHeaders;
                $this->collEmailHeadersPartial = false;
            }
        }

        return $this->collEmailHeaders;
    }

    /**
     * Sets a collection of EmailHeader objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $emailHeaders A Propel collection.
     * @param PropelPDO $con Optional connection object
     */
    public function setEmailHeaders(PropelCollection $emailHeaders, PropelPDO $con = null)
    {
        $this->emailHeadersScheduledForDeletion = $this->getEmailHeaders(new Criteria(), $con)->diff($emailHeaders);

        foreach ($this->emailHeadersScheduledForDeletion as $emailHeaderRemoved) {
            $emailHeaderRemoved->setArquivo(null);
        }

        $this->collEmailHeaders = null;
        foreach ($emailHeaders as $emailHeader) {
            $this->addEmailHeader($emailHeader);
        }

        $this->collEmailHeaders = $emailHeaders;
        $this->collEmailHeadersPartial = false;
    }

    /**
     * Returns the number of related EmailHeader objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related EmailHeader objects.
     * @throws PropelException
     */
    public function countEmailHeaders(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collEmailHeadersPartial && !$this->isNew();
        if (null === $this->collEmailHeaders || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collEmailHeaders) {
                return 0;
            } else {
                if($partial && !$criteria) {
                    return count($this->getEmailHeaders());
                }
                $query = EmailHeaderQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByArquivo($this)
                    ->count($con);
            }
        } else {
            return count($this->collEmailHeaders);
        }
    }

    /**
     * Method called to associate a EmailHeader object to this object
     * through the EmailHeader foreign key attribute.
     *
     * @param    EmailHeader $l EmailHeader
     * @return Arquivo The current object (for fluent API support)
     */
    public function addEmailHeader(EmailHeader $l)
    {
        if ($this->collEmailHeaders === null) {
            $this->initEmailHeaders();
            $this->collEmailHeadersPartial = true;
        }
        if (!$this->collEmailHeaders->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddEmailHeader($l);
        }

        return $this;
    }

    /**
     * @param	EmailHeader $emailHeader The emailHeader object to add.
     */
    protected function doAddEmailHeader($emailHeader)
    {
        $this->collEmailHeaders[]= $emailHeader;
        $emailHeader->setArquivo($this);
    }

    /**
     * @param	EmailHeader $emailHeader The emailHeader object to remove.
     */
    public function removeEmailHeader($emailHeader)
    {
        if ($this->getEmailHeaders()->contains($emailHeader)) {
            $this->collEmailHeaders->remove($this->collEmailHeaders->search($emailHeader));
            if (null === $this->emailHeadersScheduledForDeletion) {
                $this->emailHeadersScheduledForDeletion = clone $this->collEmailHeaders;
                $this->emailHeadersScheduledForDeletion->clear();
            }
            $this->emailHeadersScheduledForDeletion[]= $emailHeader;
            $emailHeader->setArquivo(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Arquivo is new, it will return
     * an empty collection; or if this Arquivo has previously
     * been saved, it will retrieve related EmailHeaders from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Arquivo.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|EmailHeader[] List of EmailHeader objects
     */
    public function getEmailHeadersJoinUsuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EmailHeaderQuery::create(null, $criteria);
        $query->joinWith('Usuario', $join_behavior);

        return $this->getEmailHeaders($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->nome = null;
        $this->mime = null;
        $this->tamanho = null;
        $this->conteudo = null;
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
            if ($this->collEmailHeaders) {
                foreach ($this->collEmailHeaders as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        if ($this->collEmailHeaders instanceof PropelCollection) {
            $this->collEmailHeaders->clearIterator();
        }
        $this->collEmailHeaders = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ArquivoPeer::DEFAULT_STRING_FORMAT);
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
