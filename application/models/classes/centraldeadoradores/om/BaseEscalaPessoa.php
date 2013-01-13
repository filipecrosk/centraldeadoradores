<?php


/**
 * Base class that represents a row from the 'escala_pessoa' table.
 *
 *
 *
 * @package    propel.generator.centraldeadoradores.om
 */
abstract class BaseEscalaPessoa extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'EscalaPessoaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        EscalaPessoaPeer
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
     * The value for the id_usuario field.
     * @var        int
     */
    protected $id_usuario;

    /**
     * The value for the id_local field.
     * @var        int
     */
    protected $id_local;

    /**
     * The value for the data field.
     * @var        string
     */
    protected $data;

    /**
     * The value for the id_status_escala field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $id_status_escala;

    /**
     * The value for the id_responsavel field.
     * @var        int
     */
    protected $id_responsavel;

    /**
     * The value for the motivo_recusa field.
     * @var        string
     */
    protected $motivo_recusa;

    /**
     * @var        Local
     */
    protected $aLocal;

    /**
     * @var        Usuario
     */
    protected $aUsuarioRelatedByIdResponsavel;

    /**
     * @var        StatusEscala
     */
    protected $aStatusEscala;

    /**
     * @var        Usuario
     */
    protected $aUsuarioRelatedByIdUsuario;

    /**
     * @var        PropelObjectCollection|EscalaPessoaFuncao[] Collection to store aggregation of EscalaPessoaFuncao objects.
     */
    protected $collEscalaPessoaFuncaos;
    protected $collEscalaPessoaFuncaosPartial;

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
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->id_status_escala = 1;
    }

    /**
     * Initializes internal state of BaseEscalaPessoa object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

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
     * Get the [id_usuario] column value.
     *
     * @return int
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    /**
     * Get the [id_local] column value.
     *
     * @return int
     */
    public function getIdLocal()
    {
        return $this->id_local;
    }

    /**
     * Get the [optionally formatted] temporal [data] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getData($format = 'd/m/Y H:i:s')
    {
        if ($this->data === null) {
            return null;
        }

        if ($this->data === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        } else {
            try {
                $dt = new DateTime($this->data);
            } catch (Exception $x) {
                throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->data, true), $x);
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
     * Get the [id_status_escala] column value.
     *
     * @return int
     */
    public function getIdStatusEscala()
    {
        return $this->id_status_escala;
    }

    /**
     * Get the [id_responsavel] column value.
     *
     * @return int
     */
    public function getIdResponsavel()
    {
        return $this->id_responsavel;
    }

    /**
     * Get the [motivo_recusa] column value.
     *
     * @return string
     */
    public function getMotivoRecusa()
    {
        return $this->motivo_recusa;
    }

    /**
     * Set the value of [id] column.
     *
     * @param int $v new value
     * @return EscalaPessoa The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = EscalaPessoaPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_usuario] column.
     *
     * @param int $v new value
     * @return EscalaPessoa The current object (for fluent API support)
     */
    public function setIdUsuario($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id_usuario !== $v) {
            $this->id_usuario = $v;
            $this->modifiedColumns[] = EscalaPessoaPeer::ID_USUARIO;
        }

        if ($this->aUsuarioRelatedByIdUsuario !== null && $this->aUsuarioRelatedByIdUsuario->getId() !== $v) {
            $this->aUsuarioRelatedByIdUsuario = null;
        }


        return $this;
    } // setIdUsuario()

    /**
     * Set the value of [id_local] column.
     *
     * @param int $v new value
     * @return EscalaPessoa The current object (for fluent API support)
     */
    public function setIdLocal($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id_local !== $v) {
            $this->id_local = $v;
            $this->modifiedColumns[] = EscalaPessoaPeer::ID_LOCAL;
        }

        if ($this->aLocal !== null && $this->aLocal->getId() !== $v) {
            $this->aLocal = null;
        }


        return $this;
    } // setIdLocal()

    /**
     * Sets the value of [data] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return EscalaPessoa The current object (for fluent API support)
     */
    public function setData($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->data !== null || $dt !== null) {
            $currentDateAsString = ($this->data !== null && $tmpDt = new DateTime($this->data)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->data = $newDateAsString;
                $this->modifiedColumns[] = EscalaPessoaPeer::DATA;
            }
        } // if either are not null


        return $this;
    } // setData()

    /**
     * Set the value of [id_status_escala] column.
     *
     * @param int $v new value
     * @return EscalaPessoa The current object (for fluent API support)
     */
    public function setIdStatusEscala($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id_status_escala !== $v) {
            $this->id_status_escala = $v;
            $this->modifiedColumns[] = EscalaPessoaPeer::ID_STATUS_ESCALA;
        }

        if ($this->aStatusEscala !== null && $this->aStatusEscala->getId() !== $v) {
            $this->aStatusEscala = null;
        }


        return $this;
    } // setIdStatusEscala()

    /**
     * Set the value of [id_responsavel] column.
     *
     * @param int $v new value
     * @return EscalaPessoa The current object (for fluent API support)
     */
    public function setIdResponsavel($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id_responsavel !== $v) {
            $this->id_responsavel = $v;
            $this->modifiedColumns[] = EscalaPessoaPeer::ID_RESPONSAVEL;
        }

        if ($this->aUsuarioRelatedByIdResponsavel !== null && $this->aUsuarioRelatedByIdResponsavel->getId() !== $v) {
            $this->aUsuarioRelatedByIdResponsavel = null;
        }


        return $this;
    } // setIdResponsavel()

    /**
     * Set the value of [motivo_recusa] column.
     *
     * @param string $v new value
     * @return EscalaPessoa The current object (for fluent API support)
     */
    public function setMotivoRecusa($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->motivo_recusa !== $v) {
            $this->motivo_recusa = $v;
            $this->modifiedColumns[] = EscalaPessoaPeer::MOTIVO_RECUSA;
        }


        return $this;
    } // setMotivoRecusa()

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
            if ($this->id_status_escala !== 1) {
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

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->id_usuario = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_local = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->data = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->id_status_escala = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->id_responsavel = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->motivo_recusa = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 7; // 7 = EscalaPessoaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating EscalaPessoa object", $e);
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

        if ($this->aUsuarioRelatedByIdUsuario !== null && $this->id_usuario !== $this->aUsuarioRelatedByIdUsuario->getId()) {
            $this->aUsuarioRelatedByIdUsuario = null;
        }
        if ($this->aLocal !== null && $this->id_local !== $this->aLocal->getId()) {
            $this->aLocal = null;
        }
        if ($this->aStatusEscala !== null && $this->id_status_escala !== $this->aStatusEscala->getId()) {
            $this->aStatusEscala = null;
        }
        if ($this->aUsuarioRelatedByIdResponsavel !== null && $this->id_responsavel !== $this->aUsuarioRelatedByIdResponsavel->getId()) {
            $this->aUsuarioRelatedByIdResponsavel = null;
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
            $con = Propel::getConnection(EscalaPessoaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = EscalaPessoaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aLocal = null;
            $this->aUsuarioRelatedByIdResponsavel = null;
            $this->aStatusEscala = null;
            $this->aUsuarioRelatedByIdUsuario = null;
            $this->collEscalaPessoaFuncaos = null;

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
            $con = Propel::getConnection(EscalaPessoaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = EscalaPessoaQuery::create()
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
            $con = Propel::getConnection(EscalaPessoaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                EscalaPessoaPeer::addInstanceToPool($this);
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

            if ($this->aLocal !== null) {
                if ($this->aLocal->isModified() || $this->aLocal->isNew()) {
                    $affectedRows += $this->aLocal->save($con);
                }
                $this->setLocal($this->aLocal);
            }

            if ($this->aUsuarioRelatedByIdResponsavel !== null) {
                if ($this->aUsuarioRelatedByIdResponsavel->isModified() || $this->aUsuarioRelatedByIdResponsavel->isNew()) {
                    $affectedRows += $this->aUsuarioRelatedByIdResponsavel->save($con);
                }
                $this->setUsuarioRelatedByIdResponsavel($this->aUsuarioRelatedByIdResponsavel);
            }

            if ($this->aStatusEscala !== null) {
                if ($this->aStatusEscala->isModified() || $this->aStatusEscala->isNew()) {
                    $affectedRows += $this->aStatusEscala->save($con);
                }
                $this->setStatusEscala($this->aStatusEscala);
            }

            if ($this->aUsuarioRelatedByIdUsuario !== null) {
                if ($this->aUsuarioRelatedByIdUsuario->isModified() || $this->aUsuarioRelatedByIdUsuario->isNew()) {
                    $affectedRows += $this->aUsuarioRelatedByIdUsuario->save($con);
                }
                $this->setUsuarioRelatedByIdUsuario($this->aUsuarioRelatedByIdUsuario);
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

        $this->modifiedColumns[] = EscalaPessoaPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . EscalaPessoaPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(EscalaPessoaPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(EscalaPessoaPeer::ID_USUARIO)) {
            $modifiedColumns[':p' . $index++]  = '`ID_USUARIO`';
        }
        if ($this->isColumnModified(EscalaPessoaPeer::ID_LOCAL)) {
            $modifiedColumns[':p' . $index++]  = '`ID_LOCAL`';
        }
        if ($this->isColumnModified(EscalaPessoaPeer::DATA)) {
            $modifiedColumns[':p' . $index++]  = '`DATA`';
        }
        if ($this->isColumnModified(EscalaPessoaPeer::ID_STATUS_ESCALA)) {
            $modifiedColumns[':p' . $index++]  = '`ID_STATUS_ESCALA`';
        }
        if ($this->isColumnModified(EscalaPessoaPeer::ID_RESPONSAVEL)) {
            $modifiedColumns[':p' . $index++]  = '`ID_RESPONSAVEL`';
        }
        if ($this->isColumnModified(EscalaPessoaPeer::MOTIVO_RECUSA)) {
            $modifiedColumns[':p' . $index++]  = '`MOTIVO_RECUSA`';
        }

        $sql = sprintf(
            'INSERT INTO `escala_pessoa` (%s) VALUES (%s)',
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
                    case '`ID_USUARIO`':
                        $stmt->bindValue($identifier, $this->id_usuario, PDO::PARAM_INT);
                        break;
                    case '`ID_LOCAL`':
                        $stmt->bindValue($identifier, $this->id_local, PDO::PARAM_INT);
                        break;
                    case '`DATA`':
                        $stmt->bindValue($identifier, $this->data, PDO::PARAM_STR);
                        break;
                    case '`ID_STATUS_ESCALA`':
                        $stmt->bindValue($identifier, $this->id_status_escala, PDO::PARAM_INT);
                        break;
                    case '`ID_RESPONSAVEL`':
                        $stmt->bindValue($identifier, $this->id_responsavel, PDO::PARAM_INT);
                        break;
                    case '`MOTIVO_RECUSA`':
                        $stmt->bindValue($identifier, $this->motivo_recusa, PDO::PARAM_STR);
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

            if ($this->aLocal !== null) {
                if (!$this->aLocal->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aLocal->getValidationFailures());
                }
            }

            if ($this->aUsuarioRelatedByIdResponsavel !== null) {
                if (!$this->aUsuarioRelatedByIdResponsavel->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUsuarioRelatedByIdResponsavel->getValidationFailures());
                }
            }

            if ($this->aStatusEscala !== null) {
                if (!$this->aStatusEscala->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aStatusEscala->getValidationFailures());
                }
            }

            if ($this->aUsuarioRelatedByIdUsuario !== null) {
                if (!$this->aUsuarioRelatedByIdUsuario->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUsuarioRelatedByIdUsuario->getValidationFailures());
                }
            }


            if (($retval = EscalaPessoaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collEscalaPessoaFuncaos !== null) {
                    foreach ($this->collEscalaPessoaFuncaos as $referrerFK) {
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
        $pos = EscalaPessoaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdUsuario();
                break;
            case 2:
                return $this->getIdLocal();
                break;
            case 3:
                return $this->getData();
                break;
            case 4:
                return $this->getIdStatusEscala();
                break;
            case 5:
                return $this->getIdResponsavel();
                break;
            case 6:
                return $this->getMotivoRecusa();
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
        if (isset($alreadyDumpedObjects['EscalaPessoa'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['EscalaPessoa'][$this->getPrimaryKey()] = true;
        $keys = EscalaPessoaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdUsuario(),
            $keys[2] => $this->getIdLocal(),
            $keys[3] => $this->getData(),
            $keys[4] => $this->getIdStatusEscala(),
            $keys[5] => $this->getIdResponsavel(),
            $keys[6] => $this->getMotivoRecusa(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aLocal) {
                $result['Local'] = $this->aLocal->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aUsuarioRelatedByIdResponsavel) {
                $result['UsuarioRelatedByIdResponsavel'] = $this->aUsuarioRelatedByIdResponsavel->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aStatusEscala) {
                $result['StatusEscala'] = $this->aStatusEscala->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aUsuarioRelatedByIdUsuario) {
                $result['UsuarioRelatedByIdUsuario'] = $this->aUsuarioRelatedByIdUsuario->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collEscalaPessoaFuncaos) {
                $result['EscalaPessoaFuncaos'] = $this->collEscalaPessoaFuncaos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = EscalaPessoaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdUsuario($value);
                break;
            case 2:
                $this->setIdLocal($value);
                break;
            case 3:
                $this->setData($value);
                break;
            case 4:
                $this->setIdStatusEscala($value);
                break;
            case 5:
                $this->setIdResponsavel($value);
                break;
            case 6:
                $this->setMotivoRecusa($value);
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
        $keys = EscalaPessoaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdUsuario($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdLocal($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setData($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdStatusEscala($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdResponsavel($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setMotivoRecusa($arr[$keys[6]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(EscalaPessoaPeer::DATABASE_NAME);

        if ($this->isColumnModified(EscalaPessoaPeer::ID)) $criteria->add(EscalaPessoaPeer::ID, $this->id);
        if ($this->isColumnModified(EscalaPessoaPeer::ID_USUARIO)) $criteria->add(EscalaPessoaPeer::ID_USUARIO, $this->id_usuario);
        if ($this->isColumnModified(EscalaPessoaPeer::ID_LOCAL)) $criteria->add(EscalaPessoaPeer::ID_LOCAL, $this->id_local);
        if ($this->isColumnModified(EscalaPessoaPeer::DATA)) $criteria->add(EscalaPessoaPeer::DATA, $this->data);
        if ($this->isColumnModified(EscalaPessoaPeer::ID_STATUS_ESCALA)) $criteria->add(EscalaPessoaPeer::ID_STATUS_ESCALA, $this->id_status_escala);
        if ($this->isColumnModified(EscalaPessoaPeer::ID_RESPONSAVEL)) $criteria->add(EscalaPessoaPeer::ID_RESPONSAVEL, $this->id_responsavel);
        if ($this->isColumnModified(EscalaPessoaPeer::MOTIVO_RECUSA)) $criteria->add(EscalaPessoaPeer::MOTIVO_RECUSA, $this->motivo_recusa);

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
        $criteria = new Criteria(EscalaPessoaPeer::DATABASE_NAME);
        $criteria->add(EscalaPessoaPeer::ID, $this->id);

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
     * @param object $copyObj An object of EscalaPessoa (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdUsuario($this->getIdUsuario());
        $copyObj->setIdLocal($this->getIdLocal());
        $copyObj->setData($this->getData());
        $copyObj->setIdStatusEscala($this->getIdStatusEscala());
        $copyObj->setIdResponsavel($this->getIdResponsavel());
        $copyObj->setMotivoRecusa($this->getMotivoRecusa());

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
     * @return EscalaPessoa Clone of current object.
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
     * @return EscalaPessoaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new EscalaPessoaPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Local object.
     *
     * @param             Local $v
     * @return EscalaPessoa The current object (for fluent API support)
     * @throws PropelException
     */
    public function setLocal(Local $v = null)
    {
        if ($v === null) {
            $this->setIdLocal(NULL);
        } else {
            $this->setIdLocal($v->getId());
        }

        $this->aLocal = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Local object, it will not be re-added.
        if ($v !== null) {
            $v->addEscalaPessoa($this);
        }


        return $this;
    }


    /**
     * Get the associated Local object
     *
     * @param PropelPDO $con Optional Connection object.
     * @return Local The associated Local object.
     * @throws PropelException
     */
    public function getLocal(PropelPDO $con = null)
    {
        if ($this->aLocal === null && ($this->id_local !== null)) {
            $this->aLocal = LocalQuery::create()->findPk($this->id_local, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aLocal->addEscalaPessoas($this);
             */
        }

        return $this->aLocal;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param             Usuario $v
     * @return EscalaPessoa The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUsuarioRelatedByIdResponsavel(Usuario $v = null)
    {
        if ($v === null) {
            $this->setIdResponsavel(NULL);
        } else {
            $this->setIdResponsavel($v->getId());
        }

        $this->aUsuarioRelatedByIdResponsavel = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Usuario object, it will not be re-added.
        if ($v !== null) {
            $v->addEscalaPessoaRelatedByIdResponsavel($this);
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
    public function getUsuarioRelatedByIdResponsavel(PropelPDO $con = null)
    {
        if ($this->aUsuarioRelatedByIdResponsavel === null && ($this->id_responsavel !== null)) {
            $this->aUsuarioRelatedByIdResponsavel = UsuarioQuery::create()->findPk($this->id_responsavel, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUsuarioRelatedByIdResponsavel->addEscalaPessoasRelatedByIdResponsavel($this);
             */
        }

        return $this->aUsuarioRelatedByIdResponsavel;
    }

    /**
     * Declares an association between this object and a StatusEscala object.
     *
     * @param             StatusEscala $v
     * @return EscalaPessoa The current object (for fluent API support)
     * @throws PropelException
     */
    public function setStatusEscala(StatusEscala $v = null)
    {
        if ($v === null) {
            $this->setIdStatusEscala(1);
        } else {
            $this->setIdStatusEscala($v->getId());
        }

        $this->aStatusEscala = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the StatusEscala object, it will not be re-added.
        if ($v !== null) {
            $v->addEscalaPessoa($this);
        }


        return $this;
    }


    /**
     * Get the associated StatusEscala object
     *
     * @param PropelPDO $con Optional Connection object.
     * @return StatusEscala The associated StatusEscala object.
     * @throws PropelException
     */
    public function getStatusEscala(PropelPDO $con = null)
    {
        if ($this->aStatusEscala === null && ($this->id_status_escala !== null)) {
            $this->aStatusEscala = StatusEscalaQuery::create()->findPk($this->id_status_escala, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aStatusEscala->addEscalaPessoas($this);
             */
        }

        return $this->aStatusEscala;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param             Usuario $v
     * @return EscalaPessoa The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUsuarioRelatedByIdUsuario(Usuario $v = null)
    {
        if ($v === null) {
            $this->setIdUsuario(NULL);
        } else {
            $this->setIdUsuario($v->getId());
        }

        $this->aUsuarioRelatedByIdUsuario = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Usuario object, it will not be re-added.
        if ($v !== null) {
            $v->addEscalaPessoaRelatedByIdUsuario($this);
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
    public function getUsuarioRelatedByIdUsuario(PropelPDO $con = null)
    {
        if ($this->aUsuarioRelatedByIdUsuario === null && ($this->id_usuario !== null)) {
            $this->aUsuarioRelatedByIdUsuario = UsuarioQuery::create()->findPk($this->id_usuario, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUsuarioRelatedByIdUsuario->addEscalaPessoasRelatedByIdUsuario($this);
             */
        }

        return $this->aUsuarioRelatedByIdUsuario;
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
     * If this EscalaPessoa is new, it will return
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
                    ->filterByEscalaPessoa($this)
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
            $escalaPessoaFuncaoRemoved->setEscalaPessoa(null);
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
                    ->filterByEscalaPessoa($this)
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
     * @return EscalaPessoa The current object (for fluent API support)
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
        $escalaPessoaFuncao->setEscalaPessoa($this);
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
            $escalaPessoaFuncao->setEscalaPessoa(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this EscalaPessoa is new, it will return
     * an empty collection; or if this EscalaPessoa has previously
     * been saved, it will retrieve related EscalaPessoaFuncaos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in EscalaPessoa.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|EscalaPessoaFuncao[] List of EscalaPessoaFuncao objects
     */
    public function getEscalaPessoaFuncaosJoinFuncao($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EscalaPessoaFuncaoQuery::create(null, $criteria);
        $query->joinWith('Funcao', $join_behavior);

        return $this->getEscalaPessoaFuncaos($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_usuario = null;
        $this->id_local = null;
        $this->data = null;
        $this->id_status_escala = null;
        $this->id_responsavel = null;
        $this->motivo_recusa = null;
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
            if ($this->collEscalaPessoaFuncaos) {
                foreach ($this->collEscalaPessoaFuncaos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        if ($this->collEscalaPessoaFuncaos instanceof PropelCollection) {
            $this->collEscalaPessoaFuncaos->clearIterator();
        }
        $this->collEscalaPessoaFuncaos = null;
        $this->aLocal = null;
        $this->aUsuarioRelatedByIdResponsavel = null;
        $this->aStatusEscala = null;
        $this->aUsuarioRelatedByIdUsuario = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(EscalaPessoaPeer::DEFAULT_STRING_FORMAT);
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
