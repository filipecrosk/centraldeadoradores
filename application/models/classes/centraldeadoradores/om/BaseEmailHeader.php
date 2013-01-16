<?php


/**
 * Base class that represents a row from the 'email_header' table.
 *
 *
 *
 * @package    propel.generator.centraldeadoradores.om
 */
abstract class BaseEmailHeader extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'EmailHeaderPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        EmailHeaderPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_email field.
     * @var        int
     */
    protected $id_email;

    /**
     * The value for the id_usuario field.
     * @var        int
     */
    protected $id_usuario;

    /**
     * The value for the data_cadastro field.
     * @var        string
     */
    protected $data_cadastro;

    /**
     * The value for the assunto field.
     * @var        string
     */
    protected $assunto;

    /**
     * The value for the corpo_mensagem field.
     * @var        string
     */
    protected $corpo_mensagem;

    /**
     * The value for the id_arquivo field.
     * @var        int
     */
    protected $id_arquivo;

    /**
     * @var        Arquivo
     */
    protected $aArquivo;

    /**
     * @var        Usuario
     */
    protected $aUsuario;

    /**
     * @var        PropelObjectCollection|EmailDetail[] Collection to store aggregation of EmailDetail objects.
     */
    protected $collEmailDetails;
    protected $collEmailDetailsPartial;

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
    protected $emailDetailsScheduledForDeletion = null;

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
     * Get the [id_usuario] column value.
     *
     * @return int
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    /**
     * Get the [optionally formatted] temporal [data_cadastro] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDataCadastro($format = 'd/m/Y H:i:s')
    {
        if ($this->data_cadastro === null) {
            return null;
        }

        if ($this->data_cadastro === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        } else {
            try {
                $dt = new DateTime($this->data_cadastro);
            } catch (Exception $x) {
                throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->data_cadastro, true), $x);
            }
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        } elseif (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        } else {
            return $dt->format($format);
        }
    }

    /**
     * Get the [assunto] column value.
     *
     * @return string
     */
    public function getAssunto()
    {
        return $this->assunto;
    }

    /**
     * Get the [corpo_mensagem] column value.
     *
     * @return string
     */
    public function getCorpoMensagem()
    {
        return $this->corpo_mensagem;
    }

    /**
     * Get the [id_arquivo] column value.
     *
     * @return int
     */
    public function getIdArquivo()
    {
        return $this->id_arquivo;
    }

    /**
     * Set the value of [id_email] column.
     *
     * @param int $v new value
     * @return EmailHeader The current object (for fluent API support)
     */
    public function setIdEmail($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id_email !== $v) {
            $this->id_email = $v;
            $this->modifiedColumns[] = EmailHeaderPeer::ID_EMAIL;
        }


        return $this;
    } // setIdEmail()

    /**
     * Set the value of [id_usuario] column.
     *
     * @param int $v new value
     * @return EmailHeader The current object (for fluent API support)
     */
    public function setIdUsuario($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id_usuario !== $v) {
            $this->id_usuario = $v;
            $this->modifiedColumns[] = EmailHeaderPeer::ID_USUARIO;
        }

        if ($this->aUsuario !== null && $this->aUsuario->getId() !== $v) {
            $this->aUsuario = null;
        }


        return $this;
    } // setIdUsuario()

    /**
     * Sets the value of [data_cadastro] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return EmailHeader The current object (for fluent API support)
     */
    public function setDataCadastro($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->data_cadastro !== null || $dt !== null) {
            $currentDateAsString = ($this->data_cadastro !== null && $tmpDt = new DateTime($this->data_cadastro)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->data_cadastro = $newDateAsString;
                $this->modifiedColumns[] = EmailHeaderPeer::DATA_CADASTRO;
            }
        } // if either are not null


        return $this;
    } // setDataCadastro()

    /**
     * Set the value of [assunto] column.
     *
     * @param string $v new value
     * @return EmailHeader The current object (for fluent API support)
     */
    public function setAssunto($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->assunto !== $v) {
            $this->assunto = $v;
            $this->modifiedColumns[] = EmailHeaderPeer::ASSUNTO;
        }


        return $this;
    } // setAssunto()

    /**
     * Set the value of [corpo_mensagem] column.
     *
     * @param string $v new value
     * @return EmailHeader The current object (for fluent API support)
     */
    public function setCorpoMensagem($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->corpo_mensagem !== $v) {
            $this->corpo_mensagem = $v;
            $this->modifiedColumns[] = EmailHeaderPeer::CORPO_MENSAGEM;
        }


        return $this;
    } // setCorpoMensagem()

    /**
     * Set the value of [id_arquivo] column.
     *
     * @param int $v new value
     * @return EmailHeader The current object (for fluent API support)
     */
    public function setIdArquivo($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id_arquivo !== $v) {
            $this->id_arquivo = $v;
            $this->modifiedColumns[] = EmailHeaderPeer::ID_ARQUIVO;
        }

        if ($this->aArquivo !== null && $this->aArquivo->getId() !== $v) {
            $this->aArquivo = null;
        }


        return $this;
    } // setIdArquivo()

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

            $this->id_email = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->id_usuario = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->data_cadastro = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->assunto = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->corpo_mensagem = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->id_arquivo = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 6; // 6 = EmailHeaderPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating EmailHeader object", $e);
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

        if ($this->aUsuario !== null && $this->id_usuario !== $this->aUsuario->getId()) {
            $this->aUsuario = null;
        }
        if ($this->aArquivo !== null && $this->id_arquivo !== $this->aArquivo->getId()) {
            $this->aArquivo = null;
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
            $con = Propel::getConnection(EmailHeaderPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = EmailHeaderPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aArquivo = null;
            $this->aUsuario = null;
            $this->collEmailDetails = null;

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
            $con = Propel::getConnection(EmailHeaderPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = EmailHeaderQuery::create()
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
            $con = Propel::getConnection(EmailHeaderPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                EmailHeaderPeer::addInstanceToPool($this);
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

            if ($this->aArquivo !== null) {
                if ($this->aArquivo->isModified() || $this->aArquivo->isNew()) {
                    $affectedRows += $this->aArquivo->save($con);
                }
                $this->setArquivo($this->aArquivo);
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

            if ($this->emailDetailsScheduledForDeletion !== null) {
                if (!$this->emailDetailsScheduledForDeletion->isEmpty()) {
                    EmailDetailQuery::create()
                        ->filterByPrimaryKeys($this->emailDetailsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->emailDetailsScheduledForDeletion = null;
                }
            }

            if ($this->collEmailDetails !== null) {
                foreach ($this->collEmailDetails as $referrerFK) {
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

        $this->modifiedColumns[] = EmailHeaderPeer::ID_EMAIL;
        if (null !== $this->id_email) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . EmailHeaderPeer::ID_EMAIL . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(EmailHeaderPeer::ID_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`ID_EMAIL`';
        }
        if ($this->isColumnModified(EmailHeaderPeer::ID_USUARIO)) {
            $modifiedColumns[':p' . $index++]  = '`ID_USUARIO`';
        }
        if ($this->isColumnModified(EmailHeaderPeer::DATA_CADASTRO)) {
            $modifiedColumns[':p' . $index++]  = '`DATA_CADASTRO`';
        }
        if ($this->isColumnModified(EmailHeaderPeer::ASSUNTO)) {
            $modifiedColumns[':p' . $index++]  = '`ASSUNTO`';
        }
        if ($this->isColumnModified(EmailHeaderPeer::CORPO_MENSAGEM)) {
            $modifiedColumns[':p' . $index++]  = '`CORPO_MENSAGEM`';
        }
        if ($this->isColumnModified(EmailHeaderPeer::ID_ARQUIVO)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ARQUIVO`';
        }

        $sql = sprintf(
            'INSERT INTO `email_header` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_EMAIL`':
                        $stmt->bindValue($identifier, $this->id_email, PDO::PARAM_INT);
                        break;
                    case '`ID_USUARIO`':
                        $stmt->bindValue($identifier, $this->id_usuario, PDO::PARAM_INT);
                        break;
                    case '`DATA_CADASTRO`':
                        $stmt->bindValue($identifier, $this->data_cadastro, PDO::PARAM_STR);
                        break;
                    case '`ASSUNTO`':
                        $stmt->bindValue($identifier, $this->assunto, PDO::PARAM_STR);
                        break;
                    case '`CORPO_MENSAGEM`':
                        $stmt->bindValue($identifier, $this->corpo_mensagem, PDO::PARAM_STR);
                        break;
                    case '`ID_ARQUIVO`':
                        $stmt->bindValue($identifier, $this->id_arquivo, PDO::PARAM_INT);
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
        $this->setIdEmail($pk);

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

            if ($this->aArquivo !== null) {
                if (!$this->aArquivo->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aArquivo->getValidationFailures());
                }
            }

            if ($this->aUsuario !== null) {
                if (!$this->aUsuario->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUsuario->getValidationFailures());
                }
            }


            if (($retval = EmailHeaderPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collEmailDetails !== null) {
                    foreach ($this->collEmailDetails as $referrerFK) {
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
        $pos = EmailHeaderPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdEmail();
                break;
            case 1:
                return $this->getIdUsuario();
                break;
            case 2:
                return $this->getDataCadastro();
                break;
            case 3:
                return $this->getAssunto();
                break;
            case 4:
                return $this->getCorpoMensagem();
                break;
            case 5:
                return $this->getIdArquivo();
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
        if (isset($alreadyDumpedObjects['EmailHeader'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['EmailHeader'][$this->getPrimaryKey()] = true;
        $keys = EmailHeaderPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdEmail(),
            $keys[1] => $this->getIdUsuario(),
            $keys[2] => $this->getDataCadastro(),
            $keys[3] => $this->getAssunto(),
            $keys[4] => $this->getCorpoMensagem(),
            $keys[5] => $this->getIdArquivo(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aArquivo) {
                $result['Arquivo'] = $this->aArquivo->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aUsuario) {
                $result['Usuario'] = $this->aUsuario->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collEmailDetails) {
                $result['EmailDetails'] = $this->collEmailDetails->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = EmailHeaderPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdEmail($value);
                break;
            case 1:
                $this->setIdUsuario($value);
                break;
            case 2:
                $this->setDataCadastro($value);
                break;
            case 3:
                $this->setAssunto($value);
                break;
            case 4:
                $this->setCorpoMensagem($value);
                break;
            case 5:
                $this->setIdArquivo($value);
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
        $keys = EmailHeaderPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdEmail($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdUsuario($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDataCadastro($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setAssunto($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCorpoMensagem($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdArquivo($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(EmailHeaderPeer::DATABASE_NAME);

        if ($this->isColumnModified(EmailHeaderPeer::ID_EMAIL)) $criteria->add(EmailHeaderPeer::ID_EMAIL, $this->id_email);
        if ($this->isColumnModified(EmailHeaderPeer::ID_USUARIO)) $criteria->add(EmailHeaderPeer::ID_USUARIO, $this->id_usuario);
        if ($this->isColumnModified(EmailHeaderPeer::DATA_CADASTRO)) $criteria->add(EmailHeaderPeer::DATA_CADASTRO, $this->data_cadastro);
        if ($this->isColumnModified(EmailHeaderPeer::ASSUNTO)) $criteria->add(EmailHeaderPeer::ASSUNTO, $this->assunto);
        if ($this->isColumnModified(EmailHeaderPeer::CORPO_MENSAGEM)) $criteria->add(EmailHeaderPeer::CORPO_MENSAGEM, $this->corpo_mensagem);
        if ($this->isColumnModified(EmailHeaderPeer::ID_ARQUIVO)) $criteria->add(EmailHeaderPeer::ID_ARQUIVO, $this->id_arquivo);

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
        $criteria = new Criteria(EmailHeaderPeer::DATABASE_NAME);
        $criteria->add(EmailHeaderPeer::ID_EMAIL, $this->id_email);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdEmail();
    }

    /**
     * Generic method to set the primary key (id_email column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdEmail($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdEmail();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of EmailHeader (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdUsuario($this->getIdUsuario());
        $copyObj->setDataCadastro($this->getDataCadastro());
        $copyObj->setAssunto($this->getAssunto());
        $copyObj->setCorpoMensagem($this->getCorpoMensagem());
        $copyObj->setIdArquivo($this->getIdArquivo());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getEmailDetails() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addEmailDetail($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdEmail(NULL); // this is a auto-increment column, so set to default value
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
     * @return EmailHeader Clone of current object.
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
     * @return EmailHeaderPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new EmailHeaderPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Arquivo object.
     *
     * @param             Arquivo $v
     * @return EmailHeader The current object (for fluent API support)
     * @throws PropelException
     */
    public function setArquivo(Arquivo $v = null)
    {
        if ($v === null) {
            $this->setIdArquivo(NULL);
        } else {
            $this->setIdArquivo($v->getId());
        }

        $this->aArquivo = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Arquivo object, it will not be re-added.
        if ($v !== null) {
            $v->addEmailHeader($this);
        }


        return $this;
    }


    /**
     * Get the associated Arquivo object
     *
     * @param PropelPDO $con Optional Connection object.
     * @return Arquivo The associated Arquivo object.
     * @throws PropelException
     */
    public function getArquivo(PropelPDO $con = null)
    {
        if ($this->aArquivo === null && ($this->id_arquivo !== null)) {
            $this->aArquivo = ArquivoQuery::create()->findPk($this->id_arquivo, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aArquivo->addEmailHeaders($this);
             */
        }

        return $this->aArquivo;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param             Usuario $v
     * @return EmailHeader The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUsuario(Usuario $v = null)
    {
        if ($v === null) {
            $this->setIdUsuario(NULL);
        } else {
            $this->setIdUsuario($v->getId());
        }

        $this->aUsuario = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Usuario object, it will not be re-added.
        if ($v !== null) {
            $v->addEmailHeader($this);
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
        if ($this->aUsuario === null && ($this->id_usuario !== null)) {
            $this->aUsuario = UsuarioQuery::create()->findPk($this->id_usuario, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUsuario->addEmailHeaders($this);
             */
        }

        return $this->aUsuario;
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
        if ('EmailDetail' == $relationName) {
            $this->initEmailDetails();
        }
    }

    /**
     * Clears out the collEmailDetails collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addEmailDetails()
     */
    public function clearEmailDetails()
    {
        $this->collEmailDetails = null; // important to set this to null since that means it is uninitialized
        $this->collEmailDetailsPartial = null;
    }

    /**
     * reset is the collEmailDetails collection loaded partially
     *
     * @return void
     */
    public function resetPartialEmailDetails($v = true)
    {
        $this->collEmailDetailsPartial = $v;
    }

    /**
     * Initializes the collEmailDetails collection.
     *
     * By default this just sets the collEmailDetails collection to an empty array (like clearcollEmailDetails());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initEmailDetails($overrideExisting = true)
    {
        if (null !== $this->collEmailDetails && !$overrideExisting) {
            return;
        }
        $this->collEmailDetails = new PropelObjectCollection();
        $this->collEmailDetails->setModel('EmailDetail');
    }

    /**
     * Gets an array of EmailDetail objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this EmailHeader is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|EmailDetail[] List of EmailDetail objects
     * @throws PropelException
     */
    public function getEmailDetails($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collEmailDetailsPartial && !$this->isNew();
        if (null === $this->collEmailDetails || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collEmailDetails) {
                // return empty collection
                $this->initEmailDetails();
            } else {
                $collEmailDetails = EmailDetailQuery::create(null, $criteria)
                    ->filterByEmailHeader($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collEmailDetailsPartial && count($collEmailDetails)) {
                      $this->initEmailDetails(false);

                      foreach($collEmailDetails as $obj) {
                        if (false == $this->collEmailDetails->contains($obj)) {
                          $this->collEmailDetails->append($obj);
                        }
                      }

                      $this->collEmailDetailsPartial = true;
                    }

                    return $collEmailDetails;
                }

                if($partial && $this->collEmailDetails) {
                    foreach($this->collEmailDetails as $obj) {
                        if($obj->isNew()) {
                            $collEmailDetails[] = $obj;
                        }
                    }
                }

                $this->collEmailDetails = $collEmailDetails;
                $this->collEmailDetailsPartial = false;
            }
        }

        return $this->collEmailDetails;
    }

    /**
     * Sets a collection of EmailDetail objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $emailDetails A Propel collection.
     * @param PropelPDO $con Optional connection object
     */
    public function setEmailDetails(PropelCollection $emailDetails, PropelPDO $con = null)
    {
        $this->emailDetailsScheduledForDeletion = $this->getEmailDetails(new Criteria(), $con)->diff($emailDetails);

        foreach ($this->emailDetailsScheduledForDeletion as $emailDetailRemoved) {
            $emailDetailRemoved->setEmailHeader(null);
        }

        $this->collEmailDetails = null;
        foreach ($emailDetails as $emailDetail) {
            $this->addEmailDetail($emailDetail);
        }

        $this->collEmailDetails = $emailDetails;
        $this->collEmailDetailsPartial = false;
    }

    /**
     * Returns the number of related EmailDetail objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related EmailDetail objects.
     * @throws PropelException
     */
    public function countEmailDetails(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collEmailDetailsPartial && !$this->isNew();
        if (null === $this->collEmailDetails || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collEmailDetails) {
                return 0;
            } else {
                if($partial && !$criteria) {
                    return count($this->getEmailDetails());
                }
                $query = EmailDetailQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByEmailHeader($this)
                    ->count($con);
            }
        } else {
            return count($this->collEmailDetails);
        }
    }

    /**
     * Method called to associate a EmailDetail object to this object
     * through the EmailDetail foreign key attribute.
     *
     * @param    EmailDetail $l EmailDetail
     * @return EmailHeader The current object (for fluent API support)
     */
    public function addEmailDetail(EmailDetail $l)
    {
        if ($this->collEmailDetails === null) {
            $this->initEmailDetails();
            $this->collEmailDetailsPartial = true;
        }
        if (!$this->collEmailDetails->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddEmailDetail($l);
        }

        return $this;
    }

    /**
     * @param	EmailDetail $emailDetail The emailDetail object to add.
     */
    protected function doAddEmailDetail($emailDetail)
    {
        $this->collEmailDetails[]= $emailDetail;
        $emailDetail->setEmailHeader($this);
    }

    /**
     * @param	EmailDetail $emailDetail The emailDetail object to remove.
     */
    public function removeEmailDetail($emailDetail)
    {
        if ($this->getEmailDetails()->contains($emailDetail)) {
            $this->collEmailDetails->remove($this->collEmailDetails->search($emailDetail));
            if (null === $this->emailDetailsScheduledForDeletion) {
                $this->emailDetailsScheduledForDeletion = clone $this->collEmailDetails;
                $this->emailDetailsScheduledForDeletion->clear();
            }
            $this->emailDetailsScheduledForDeletion[]= $emailDetail;
            $emailDetail->setEmailHeader(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this EmailHeader is new, it will return
     * an empty collection; or if this EmailHeader has previously
     * been saved, it will retrieve related EmailDetails from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in EmailHeader.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|EmailDetail[] List of EmailDetail objects
     */
    public function getEmailDetailsJoinUsuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EmailDetailQuery::create(null, $criteria);
        $query->joinWith('Usuario', $join_behavior);

        return $this->getEmailDetails($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_email = null;
        $this->id_usuario = null;
        $this->data_cadastro = null;
        $this->assunto = null;
        $this->corpo_mensagem = null;
        $this->id_arquivo = null;
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
            if ($this->collEmailDetails) {
                foreach ($this->collEmailDetails as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        if ($this->collEmailDetails instanceof PropelCollection) {
            $this->collEmailDetails->clearIterator();
        }
        $this->collEmailDetails = null;
        $this->aArquivo = null;
        $this->aUsuario = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(EmailHeaderPeer::DEFAULT_STRING_FORMAT);
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
