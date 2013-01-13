<?php


/**
 * Base class that represents a row from the 'email_detail' table.
 *
 *
 *
 * @package    propel.generator.centraldeadoradores.om
 */
abstract class BaseEmailDetail extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'EmailDetailPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        EmailDetailPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_email_enviado field.
     * @var        int
     */
    protected $id_email_enviado;

    /**
     * The value for the id_email field.
     * @var        int
     */
    protected $id_email;

    /**
     * The value for the id_destinatario field.
     * @var        int
     */
    protected $id_destinatario;

    /**
     * The value for the enviado field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $enviado;

    /**
     * @var        EmailHeader
     */
    protected $aEmailHeader;

    /**
     * @var        Usuario
     */
    protected $aUsuario;

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
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->enviado = false;
    }

    /**
     * Initializes internal state of BaseEmailDetail object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_email_enviado] column value.
     *
     * @return int
     */
    public function getIdEmailEnviado()
    {
        return $this->id_email_enviado;
    }

    /**
     * Get the [id_email] column value.
     *
     * @return int
     */
    public function getIdEmail()
    {
        return $this->id_email;
    }

    /**
     * Get the [id_destinatario] column value.
     *
     * @return int
     */
    public function getIdDestinatario()
    {
        return $this->id_destinatario;
    }

    /**
     * Get the [enviado] column value.
     *
     * @return boolean
     */
    public function getEnviado()
    {
        return $this->enviado;
    }

    /**
     * Set the value of [id_email_enviado] column.
     *
     * @param int $v new value
     * @return EmailDetail The current object (for fluent API support)
     */
    public function setIdEmailEnviado($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id_email_enviado !== $v) {
            $this->id_email_enviado = $v;
            $this->modifiedColumns[] = EmailDetailPeer::ID_EMAIL_ENVIADO;
        }


        return $this;
    } // setIdEmailEnviado()

    /**
     * Set the value of [id_email] column.
     *
     * @param int $v new value
     * @return EmailDetail The current object (for fluent API support)
     */
    public function setIdEmail($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id_email !== $v) {
            $this->id_email = $v;
            $this->modifiedColumns[] = EmailDetailPeer::ID_EMAIL;
        }

        if ($this->aEmailHeader !== null && $this->aEmailHeader->getIdEmail() !== $v) {
            $this->aEmailHeader = null;
        }


        return $this;
    } // setIdEmail()

    /**
     * Set the value of [id_destinatario] column.
     *
     * @param int $v new value
     * @return EmailDetail The current object (for fluent API support)
     */
    public function setIdDestinatario($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id_destinatario !== $v) {
            $this->id_destinatario = $v;
            $this->modifiedColumns[] = EmailDetailPeer::ID_DESTINATARIO;
        }

        if ($this->aUsuario !== null && $this->aUsuario->getId() !== $v) {
            $this->aUsuario = null;
        }


        return $this;
    } // setIdDestinatario()

    /**
     * Sets the value of the [enviado] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return EmailDetail The current object (for fluent API support)
     */
    public function setEnviado($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->enviado !== $v) {
            $this->enviado = $v;
            $this->modifiedColumns[] = EmailDetailPeer::ENVIADO;
        }


        return $this;
    } // setEnviado()

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
            if ($this->enviado !== false) {
                return false;
            }

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

            $this->id_email_enviado = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->id_email = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_destinatario = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->enviado = ($row[$startcol + 3] !== null) ? (boolean) $row[$startcol + 3] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 4; // 4 = EmailDetailPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating EmailDetail object", $e);
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

        if ($this->aEmailHeader !== null && $this->id_email !== $this->aEmailHeader->getIdEmail()) {
            $this->aEmailHeader = null;
        }
        if ($this->aUsuario !== null && $this->id_destinatario !== $this->aUsuario->getId()) {
            $this->aUsuario = null;
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
            $con = Propel::getConnection(EmailDetailPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = EmailDetailPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aEmailHeader = null;
            $this->aUsuario = null;
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
            $con = Propel::getConnection(EmailDetailPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = EmailDetailQuery::create()
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
            $con = Propel::getConnection(EmailDetailPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                EmailDetailPeer::addInstanceToPool($this);
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

            if ($this->aEmailHeader !== null) {
                if ($this->aEmailHeader->isModified() || $this->aEmailHeader->isNew()) {
                    $affectedRows += $this->aEmailHeader->save($con);
                }
                $this->setEmailHeader($this->aEmailHeader);
            }

            if ($this->aUsuario !== null) {
                if ($this->aUsuario->isModified() || $this->aUsuario->isNew()) {
                    $affectedRows += $this->aUsuario->save($con);
                }
                $this->setUsuario($this->aUsuario);
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

        $this->modifiedColumns[] = EmailDetailPeer::ID_EMAIL_ENVIADO;
        if (null !== $this->id_email_enviado) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . EmailDetailPeer::ID_EMAIL_ENVIADO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(EmailDetailPeer::ID_EMAIL_ENVIADO)) {
            $modifiedColumns[':p' . $index++]  = '`ID_EMAIL_ENVIADO`';
        }
        if ($this->isColumnModified(EmailDetailPeer::ID_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`ID_EMAIL`';
        }
        if ($this->isColumnModified(EmailDetailPeer::ID_DESTINATARIO)) {
            $modifiedColumns[':p' . $index++]  = '`ID_DESTINATARIO`';
        }
        if ($this->isColumnModified(EmailDetailPeer::ENVIADO)) {
            $modifiedColumns[':p' . $index++]  = '`ENVIADO`';
        }

        $sql = sprintf(
            'INSERT INTO `email_detail` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_EMAIL_ENVIADO`':
                        $stmt->bindValue($identifier, $this->id_email_enviado, PDO::PARAM_INT);
                        break;
                    case '`ID_EMAIL`':
                        $stmt->bindValue($identifier, $this->id_email, PDO::PARAM_INT);
                        break;
                    case '`ID_DESTINATARIO`':
                        $stmt->bindValue($identifier, $this->id_destinatario, PDO::PARAM_INT);
                        break;
                    case '`ENVIADO`':
                        $stmt->bindValue($identifier, (int) $this->enviado, PDO::PARAM_INT);
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
        $this->setIdEmailEnviado($pk);

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

            if ($this->aEmailHeader !== null) {
                if (!$this->aEmailHeader->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEmailHeader->getValidationFailures());
                }
            }

            if ($this->aUsuario !== null) {
                if (!$this->aUsuario->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUsuario->getValidationFailures());
                }
            }


            if (($retval = EmailDetailPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
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
        $pos = EmailDetailPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdEmailEnviado();
                break;
            case 1:
                return $this->getIdEmail();
                break;
            case 2:
                return $this->getIdDestinatario();
                break;
            case 3:
                return $this->getEnviado();
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
        if (isset($alreadyDumpedObjects['EmailDetail'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['EmailDetail'][$this->getPrimaryKey()] = true;
        $keys = EmailDetailPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdEmailEnviado(),
            $keys[1] => $this->getIdEmail(),
            $keys[2] => $this->getIdDestinatario(),
            $keys[3] => $this->getEnviado(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aEmailHeader) {
                $result['EmailHeader'] = $this->aEmailHeader->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aUsuario) {
                $result['Usuario'] = $this->aUsuario->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = EmailDetailPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdEmailEnviado($value);
                break;
            case 1:
                $this->setIdEmail($value);
                break;
            case 2:
                $this->setIdDestinatario($value);
                break;
            case 3:
                $this->setEnviado($value);
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
        $keys = EmailDetailPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdEmailEnviado($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdEmail($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdDestinatario($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setEnviado($arr[$keys[3]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(EmailDetailPeer::DATABASE_NAME);

        if ($this->isColumnModified(EmailDetailPeer::ID_EMAIL_ENVIADO)) $criteria->add(EmailDetailPeer::ID_EMAIL_ENVIADO, $this->id_email_enviado);
        if ($this->isColumnModified(EmailDetailPeer::ID_EMAIL)) $criteria->add(EmailDetailPeer::ID_EMAIL, $this->id_email);
        if ($this->isColumnModified(EmailDetailPeer::ID_DESTINATARIO)) $criteria->add(EmailDetailPeer::ID_DESTINATARIO, $this->id_destinatario);
        if ($this->isColumnModified(EmailDetailPeer::ENVIADO)) $criteria->add(EmailDetailPeer::ENVIADO, $this->enviado);

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
        $criteria = new Criteria(EmailDetailPeer::DATABASE_NAME);
        $criteria->add(EmailDetailPeer::ID_EMAIL_ENVIADO, $this->id_email_enviado);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdEmailEnviado();
    }

    /**
     * Generic method to set the primary key (id_email_enviado column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdEmailEnviado($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdEmailEnviado();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of EmailDetail (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdEmail($this->getIdEmail());
        $copyObj->setIdDestinatario($this->getIdDestinatario());
        $copyObj->setEnviado($this->getEnviado());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdEmailEnviado(NULL); // this is a auto-increment column, so set to default value
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
     * @return EmailDetail Clone of current object.
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
     * @return EmailDetailPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new EmailDetailPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a EmailHeader object.
     *
     * @param             EmailHeader $v
     * @return EmailDetail The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEmailHeader(EmailHeader $v = null)
    {
        if ($v === null) {
            $this->setIdEmail(NULL);
        } else {
            $this->setIdEmail($v->getIdEmail());
        }

        $this->aEmailHeader = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the EmailHeader object, it will not be re-added.
        if ($v !== null) {
            $v->addEmailDetail($this);
        }


        return $this;
    }


    /**
     * Get the associated EmailHeader object
     *
     * @param PropelPDO $con Optional Connection object.
     * @return EmailHeader The associated EmailHeader object.
     * @throws PropelException
     */
    public function getEmailHeader(PropelPDO $con = null)
    {
        if ($this->aEmailHeader === null && ($this->id_email !== null)) {
            $this->aEmailHeader = EmailHeaderQuery::create()->findPk($this->id_email, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEmailHeader->addEmailDetails($this);
             */
        }

        return $this->aEmailHeader;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param             Usuario $v
     * @return EmailDetail The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUsuario(Usuario $v = null)
    {
        if ($v === null) {
            $this->setIdDestinatario(NULL);
        } else {
            $this->setIdDestinatario($v->getId());
        }

        $this->aUsuario = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Usuario object, it will not be re-added.
        if ($v !== null) {
            $v->addEmailDetail($this);
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
    public function getUsuario(PropelPDO $con = null)
    {
        if ($this->aUsuario === null && ($this->id_destinatario !== null)) {
            $this->aUsuario = UsuarioQuery::create()->findPk($this->id_destinatario, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUsuario->addEmailDetails($this);
             */
        }

        return $this->aUsuario;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_email_enviado = null;
        $this->id_email = null;
        $this->id_destinatario = null;
        $this->enviado = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
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
        } // if ($deep)

        $this->aEmailHeader = null;
        $this->aUsuario = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(EmailDetailPeer::DEFAULT_STRING_FORMAT);
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
