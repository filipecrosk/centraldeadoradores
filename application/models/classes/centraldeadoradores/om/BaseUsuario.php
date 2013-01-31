<?php


/**
 * Base class that represents a row from the 'usuario' table.
 *
 *
 *
 * @package    propel.generator.centraldeadoradores.om
 */
abstract class BaseUsuario extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'UsuarioPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        UsuarioPeer
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
     * The value for the apelido field.
     * @var        string
     */
    protected $apelido;

    /**
     * The value for the email field.
     * @var        string
     */
    protected $email;

    /**
     * The value for the senha field.
     * @var        string
     */
    protected $senha;

    /**
     * The value for the id_ministerio field.
     * @var        int
     */
    protected $id_ministerio;

    /**
     * The value for the id_banda field.
     * @var        int
     */
    protected $id_banda;

    /**
     * The value for the desabilitado field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $desabilitado;

    /**
     * The value for the nivelpermissao field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $nivelpermissao;

    /**
     * The value for the aniversario field.
     * @var        string
     */
    protected $aniversario;

    /**
     * The value for the endereco field.
     * @var        string
     */
    protected $endereco;

    /**
     * The value for the telefone field.
     * @var        string
     */
    protected $telefone;

    /**
     * The value for the celular field.
     * @var        string
     */
    protected $celular;

    /**
     * @var        Banda
     */
    protected $aBandaRelatedByIdBanda;

    /**
     * @var        Ministerio
     */
    protected $aMinisterio;

    /**
     * @var        PropelObjectCollection|AlteracaoInformacaoUsuario[] Collection to store aggregation of AlteracaoInformacaoUsuario objects.
     */
    protected $collAlteracaoInformacaoUsuarios;
    protected $collAlteracaoInformacaoUsuariosPartial;

    /**
     * @var        PropelObjectCollection|Banda[] Collection to store aggregation of Banda objects.
     */
    protected $collBandasRelatedByIdLider;
    protected $collBandasRelatedByIdLiderPartial;

    /**
     * @var        PropelObjectCollection|Dados[] Collection to store aggregation of Dados objects.
     */
    protected $collDadoss;
    protected $collDadossPartial;

    /**
     * @var        PropelObjectCollection|EmailDetail[] Collection to store aggregation of EmailDetail objects.
     */
    protected $collEmailDetails;
    protected $collEmailDetailsPartial;

    /**
     * @var        PropelObjectCollection|EmailHeader[] Collection to store aggregation of EmailHeader objects.
     */
    protected $collEmailHeaders;
    protected $collEmailHeadersPartial;

    /**
     * @var        PropelObjectCollection|EscalaPessoa[] Collection to store aggregation of EscalaPessoa objects.
     */
    protected $collEscalaPessoasRelatedByIdResponsavel;
    protected $collEscalaPessoasRelatedByIdResponsavelPartial;

    /**
     * @var        PropelObjectCollection|EscalaPessoa[] Collection to store aggregation of EscalaPessoa objects.
     */
    protected $collEscalaPessoasRelatedByIdUsuario;
    protected $collEscalaPessoasRelatedByIdUsuarioPartial;

    /**
     * @var        PropelObjectCollection|UsuarioFuncao[] Collection to store aggregation of UsuarioFuncao objects.
     */
    protected $collUsuarioFuncaos;
    protected $collUsuarioFuncaosPartial;

    /**
     * @var        PropelObjectCollection|UsuarioMinisterio[] Collection to store aggregation of UsuarioMinisterio objects.
     */
    protected $collUsuarioMinisterios;
    protected $collUsuarioMinisteriosPartial;

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
    protected $alteracaoInformacaoUsuariosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $bandasRelatedByIdLiderScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $dadossScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $emailDetailsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $emailHeadersScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $escalaPessoasRelatedByIdResponsavelScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $escalaPessoasRelatedByIdUsuarioScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $usuarioFuncaosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $usuarioMinisteriosScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->desabilitado = false;
        $this->nivelpermissao = 1;
    }

    /**
     * Initializes internal state of BaseUsuario object.
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
     * Get the [nome] column value.
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Get the [apelido] column value.
     *
     * @return string
     */
    public function getApelido()
    {
        return $this->apelido;
    }

    /**
     * Get the [email] column value.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the [senha] column value.
     *
     * @return string
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Get the [id_ministerio] column value.
     *
     * @return int
     */
    public function getIdMinisterio()
    {
        return $this->id_ministerio;
    }

    /**
     * Get the [id_banda] column value.
     *
     * @return int
     */
    public function getIdBanda()
    {
        return $this->id_banda;
    }

    /**
     * Get the [desabilitado] column value.
     *
     * @return boolean
     */
    public function getDesabilitado()
    {
        return $this->desabilitado;
    }

    /**
     * Get the [nivelpermissao] column value.
     *
     * @return int
     */
    public function getNivelpermissao()
    {
        return $this->nivelpermissao;
    }

    /**
     * Get the [aniversario] column value.
     *
     * @return string
     */
    public function getAniversario()
    {
        return $this->aniversario;
    }

    /**
     * Get the [endereco] column value.
     *
     * @return string
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Get the [telefone] column value.
     *
     * @return string
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Get the [celular] column value.
     *
     * @return string
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set the value of [id] column.
     *
     * @param int $v new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = UsuarioPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [nome] column.
     *
     * @param string $v new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setNome($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->nome !== $v) {
            $this->nome = $v;
            $this->modifiedColumns[] = UsuarioPeer::NOME;
        }


        return $this;
    } // setNome()

    /**
     * Set the value of [apelido] column.
     *
     * @param string $v new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setApelido($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apelido !== $v) {
            $this->apelido = $v;
            $this->modifiedColumns[] = UsuarioPeer::APELIDO;
        }


        return $this;
    } // setApelido()

    /**
     * Set the value of [email] column.
     *
     * @param string $v new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = UsuarioPeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [senha] column.
     *
     * @param string $v new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setSenha($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->senha !== $v) {
            $this->senha = $v;
            $this->modifiedColumns[] = UsuarioPeer::SENHA;
        }


        return $this;
    } // setSenha()

    /**
     * Set the value of [id_ministerio] column.
     *
     * @param int $v new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setIdMinisterio($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id_ministerio !== $v) {
            $this->id_ministerio = $v;
            $this->modifiedColumns[] = UsuarioPeer::ID_MINISTERIO;
        }

        if ($this->aMinisterio !== null && $this->aMinisterio->getId() !== $v) {
            $this->aMinisterio = null;
        }


        return $this;
    } // setIdMinisterio()

    /**
     * Set the value of [id_banda] column.
     *
     * @param int $v new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setIdBanda($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id_banda !== $v) {
            $this->id_banda = $v;
            $this->modifiedColumns[] = UsuarioPeer::ID_BANDA;
        }

        if ($this->aBandaRelatedByIdBanda !== null && $this->aBandaRelatedByIdBanda->getId() !== $v) {
            $this->aBandaRelatedByIdBanda = null;
        }


        return $this;
    } // setIdBanda()

    /**
     * Sets the value of the [desabilitado] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setDesabilitado($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->desabilitado !== $v) {
            $this->desabilitado = $v;
            $this->modifiedColumns[] = UsuarioPeer::DESABILITADO;
        }


        return $this;
    } // setDesabilitado()

    /**
     * Set the value of [nivelpermissao] column.
     *
     * @param int $v new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setNivelpermissao($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->nivelpermissao !== $v) {
            $this->nivelpermissao = $v;
            $this->modifiedColumns[] = UsuarioPeer::NIVELPERMISSAO;
        }


        return $this;
    } // setNivelpermissao()

    /**
     * Set the value of [aniversario] column.
     *
     * @param string $v new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setAniversario($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aniversario !== $v) {
            $this->aniversario = $v;
            $this->modifiedColumns[] = UsuarioPeer::ANIVERSARIO;
        }


        return $this;
    } // setAniversario()

    /**
     * Set the value of [endereco] column.
     *
     * @param string $v new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setEndereco($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->endereco !== $v) {
            $this->endereco = $v;
            $this->modifiedColumns[] = UsuarioPeer::ENDERECO;
        }


        return $this;
    } // setEndereco()

    /**
     * Set the value of [telefone] column.
     *
     * @param string $v new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setTelefone($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->telefone !== $v) {
            $this->telefone = $v;
            $this->modifiedColumns[] = UsuarioPeer::TELEFONE;
        }


        return $this;
    } // setTelefone()

    /**
     * Set the value of [celular] column.
     *
     * @param string $v new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setCelular($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->celular !== $v) {
            $this->celular = $v;
            $this->modifiedColumns[] = UsuarioPeer::CELULAR;
        }


        return $this;
    } // setCelular()

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
            if ($this->desabilitado !== false) {
                return false;
            }

            if ($this->nivelpermissao !== 1) {
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
            $this->nome = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->apelido = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->email = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->senha = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->id_ministerio = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->id_banda = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->desabilitado = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
            $this->nivelpermissao = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->aniversario = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->endereco = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->telefone = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->celular = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 13; // 13 = UsuarioPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Usuario object", $e);
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

        if ($this->aMinisterio !== null && $this->id_ministerio !== $this->aMinisterio->getId()) {
            $this->aMinisterio = null;
        }
        if ($this->aBandaRelatedByIdBanda !== null && $this->id_banda !== $this->aBandaRelatedByIdBanda->getId()) {
            $this->aBandaRelatedByIdBanda = null;
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
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = UsuarioPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aBandaRelatedByIdBanda = null;
            $this->aMinisterio = null;
            $this->collAlteracaoInformacaoUsuarios = null;

            $this->collBandasRelatedByIdLider = null;

            $this->collDadoss = null;

            $this->collEmailDetails = null;

            $this->collEmailHeaders = null;

            $this->collEscalaPessoasRelatedByIdResponsavel = null;

            $this->collEscalaPessoasRelatedByIdUsuario = null;

            $this->collUsuarioFuncaos = null;

            $this->collUsuarioMinisterios = null;

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
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = UsuarioQuery::create()
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
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                UsuarioPeer::addInstanceToPool($this);
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

            if ($this->aBandaRelatedByIdBanda !== null) {
                if ($this->aBandaRelatedByIdBanda->isModified() || $this->aBandaRelatedByIdBanda->isNew()) {
                    $affectedRows += $this->aBandaRelatedByIdBanda->save($con);
                }
                $this->setBandaRelatedByIdBanda($this->aBandaRelatedByIdBanda);
            }

            if ($this->aMinisterio !== null) {
                if ($this->aMinisterio->isModified() || $this->aMinisterio->isNew()) {
                    $affectedRows += $this->aMinisterio->save($con);
                }
                $this->setMinisterio($this->aMinisterio);
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

            if ($this->alteracaoInformacaoUsuariosScheduledForDeletion !== null) {
                if (!$this->alteracaoInformacaoUsuariosScheduledForDeletion->isEmpty()) {
                    AlteracaoInformacaoUsuarioQuery::create()
                        ->filterByPrimaryKeys($this->alteracaoInformacaoUsuariosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->alteracaoInformacaoUsuariosScheduledForDeletion = null;
                }
            }

            if ($this->collAlteracaoInformacaoUsuarios !== null) {
                foreach ($this->collAlteracaoInformacaoUsuarios as $referrerFK) {
                    if (!$referrerFK->isDeleted()) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->bandasRelatedByIdLiderScheduledForDeletion !== null) {
                if (!$this->bandasRelatedByIdLiderScheduledForDeletion->isEmpty()) {
                    foreach ($this->bandasRelatedByIdLiderScheduledForDeletion as $bandaRelatedByIdLider) {
                        // need to save related object because we set the relation to null
                        $bandaRelatedByIdLider->save($con);
                    }
                    $this->bandasRelatedByIdLiderScheduledForDeletion = null;
                }
            }

            if ($this->collBandasRelatedByIdLider !== null) {
                foreach ($this->collBandasRelatedByIdLider as $referrerFK) {
                    if (!$referrerFK->isDeleted()) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->dadossScheduledForDeletion !== null) {
                if (!$this->dadossScheduledForDeletion->isEmpty()) {
                    DadosQuery::create()
                        ->filterByPrimaryKeys($this->dadossScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->dadossScheduledForDeletion = null;
                }
            }

            if ($this->collDadoss !== null) {
                foreach ($this->collDadoss as $referrerFK) {
                    if (!$referrerFK->isDeleted()) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

            if ($this->emailHeadersScheduledForDeletion !== null) {
                if (!$this->emailHeadersScheduledForDeletion->isEmpty()) {
                    EmailHeaderQuery::create()
                        ->filterByPrimaryKeys($this->emailHeadersScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
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

            if ($this->escalaPessoasRelatedByIdResponsavelScheduledForDeletion !== null) {
                if (!$this->escalaPessoasRelatedByIdResponsavelScheduledForDeletion->isEmpty()) {
                    EscalaPessoaQuery::create()
                        ->filterByPrimaryKeys($this->escalaPessoasRelatedByIdResponsavelScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->escalaPessoasRelatedByIdResponsavelScheduledForDeletion = null;
                }
            }

            if ($this->collEscalaPessoasRelatedByIdResponsavel !== null) {
                foreach ($this->collEscalaPessoasRelatedByIdResponsavel as $referrerFK) {
                    if (!$referrerFK->isDeleted()) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->escalaPessoasRelatedByIdUsuarioScheduledForDeletion !== null) {
                if (!$this->escalaPessoasRelatedByIdUsuarioScheduledForDeletion->isEmpty()) {
                    EscalaPessoaQuery::create()
                        ->filterByPrimaryKeys($this->escalaPessoasRelatedByIdUsuarioScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->escalaPessoasRelatedByIdUsuarioScheduledForDeletion = null;
                }
            }

            if ($this->collEscalaPessoasRelatedByIdUsuario !== null) {
                foreach ($this->collEscalaPessoasRelatedByIdUsuario as $referrerFK) {
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

            if ($this->usuarioMinisteriosScheduledForDeletion !== null) {
                if (!$this->usuarioMinisteriosScheduledForDeletion->isEmpty()) {
                    UsuarioMinisterioQuery::create()
                        ->filterByPrimaryKeys($this->usuarioMinisteriosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->usuarioMinisteriosScheduledForDeletion = null;
                }
            }

            if ($this->collUsuarioMinisterios !== null) {
                foreach ($this->collUsuarioMinisterios as $referrerFK) {
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

        $this->modifiedColumns[] = UsuarioPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . UsuarioPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(UsuarioPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(UsuarioPeer::NOME)) {
            $modifiedColumns[':p' . $index++]  = '`NOME`';
        }
        if ($this->isColumnModified(UsuarioPeer::APELIDO)) {
            $modifiedColumns[':p' . $index++]  = '`APELIDO`';
        }
        if ($this->isColumnModified(UsuarioPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`EMAIL`';
        }
        if ($this->isColumnModified(UsuarioPeer::SENHA)) {
            $modifiedColumns[':p' . $index++]  = '`SENHA`';
        }
        if ($this->isColumnModified(UsuarioPeer::ID_MINISTERIO)) {
            $modifiedColumns[':p' . $index++]  = '`ID_MINISTERIO`';
        }
        if ($this->isColumnModified(UsuarioPeer::ID_BANDA)) {
            $modifiedColumns[':p' . $index++]  = '`ID_BANDA`';
        }
        if ($this->isColumnModified(UsuarioPeer::DESABILITADO)) {
            $modifiedColumns[':p' . $index++]  = '`DESABILITADO`';
        }
        if ($this->isColumnModified(UsuarioPeer::NIVELPERMISSAO)) {
            $modifiedColumns[':p' . $index++]  = '`NIVELPERMISSAO`';
        }
        if ($this->isColumnModified(UsuarioPeer::ANIVERSARIO)) {
            $modifiedColumns[':p' . $index++]  = '`ANIVERSARIO`';
        }
        if ($this->isColumnModified(UsuarioPeer::ENDERECO)) {
            $modifiedColumns[':p' . $index++]  = '`ENDERECO`';
        }
        if ($this->isColumnModified(UsuarioPeer::TELEFONE)) {
            $modifiedColumns[':p' . $index++]  = '`TELEFONE`';
        }
        if ($this->isColumnModified(UsuarioPeer::CELULAR)) {
            $modifiedColumns[':p' . $index++]  = '`CELULAR`';
        }

        $sql = sprintf(
            'INSERT INTO `usuario` (%s) VALUES (%s)',
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
                    case '`APELIDO`':
                        $stmt->bindValue($identifier, $this->apelido, PDO::PARAM_STR);
                        break;
                    case '`EMAIL`':
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`SENHA`':
                        $stmt->bindValue($identifier, $this->senha, PDO::PARAM_STR);
                        break;
                    case '`ID_MINISTERIO`':
                        $stmt->bindValue($identifier, $this->id_ministerio, PDO::PARAM_INT);
                        break;
                    case '`ID_BANDA`':
                        $stmt->bindValue($identifier, $this->id_banda, PDO::PARAM_INT);
                        break;
                    case '`DESABILITADO`':
                        $stmt->bindValue($identifier, (int) $this->desabilitado, PDO::PARAM_INT);
                        break;
                    case '`NIVELPERMISSAO`':
                        $stmt->bindValue($identifier, $this->nivelpermissao, PDO::PARAM_INT);
                        break;
                    case '`ANIVERSARIO`':
                        $stmt->bindValue($identifier, $this->aniversario, PDO::PARAM_STR);
                        break;
                    case '`ENDERECO`':
                        $stmt->bindValue($identifier, $this->endereco, PDO::PARAM_STR);
                        break;
                    case '`TELEFONE`':
                        $stmt->bindValue($identifier, $this->telefone, PDO::PARAM_STR);
                        break;
                    case '`CELULAR`':
                        $stmt->bindValue($identifier, $this->celular, PDO::PARAM_STR);
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

            if ($this->aBandaRelatedByIdBanda !== null) {
                if (!$this->aBandaRelatedByIdBanda->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aBandaRelatedByIdBanda->getValidationFailures());
                }
            }

            if ($this->aMinisterio !== null) {
                if (!$this->aMinisterio->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aMinisterio->getValidationFailures());
                }
            }


            if (($retval = UsuarioPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collAlteracaoInformacaoUsuarios !== null) {
                    foreach ($this->collAlteracaoInformacaoUsuarios as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collBandasRelatedByIdLider !== null) {
                    foreach ($this->collBandasRelatedByIdLider as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collDadoss !== null) {
                    foreach ($this->collDadoss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collEmailDetails !== null) {
                    foreach ($this->collEmailDetails as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collEmailHeaders !== null) {
                    foreach ($this->collEmailHeaders as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collEscalaPessoasRelatedByIdResponsavel !== null) {
                    foreach ($this->collEscalaPessoasRelatedByIdResponsavel as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collEscalaPessoasRelatedByIdUsuario !== null) {
                    foreach ($this->collEscalaPessoasRelatedByIdUsuario as $referrerFK) {
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

                if ($this->collUsuarioMinisterios !== null) {
                    foreach ($this->collUsuarioMinisterios as $referrerFK) {
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
        $pos = UsuarioPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getApelido();
                break;
            case 3:
                return $this->getEmail();
                break;
            case 4:
                return $this->getSenha();
                break;
            case 5:
                return $this->getIdMinisterio();
                break;
            case 6:
                return $this->getIdBanda();
                break;
            case 7:
                return $this->getDesabilitado();
                break;
            case 8:
                return $this->getNivelpermissao();
                break;
            case 9:
                return $this->getAniversario();
                break;
            case 10:
                return $this->getEndereco();
                break;
            case 11:
                return $this->getTelefone();
                break;
            case 12:
                return $this->getCelular();
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
        if (isset($alreadyDumpedObjects['Usuario'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Usuario'][$this->getPrimaryKey()] = true;
        $keys = UsuarioPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getNome(),
            $keys[2] => $this->getApelido(),
            $keys[3] => $this->getEmail(),
            $keys[4] => $this->getSenha(),
            $keys[5] => $this->getIdMinisterio(),
            $keys[6] => $this->getIdBanda(),
            $keys[7] => $this->getDesabilitado(),
            $keys[8] => $this->getNivelpermissao(),
            $keys[9] => $this->getAniversario(),
            $keys[10] => $this->getEndereco(),
            $keys[11] => $this->getTelefone(),
            $keys[12] => $this->getCelular(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aBandaRelatedByIdBanda) {
                $result['BandaRelatedByIdBanda'] = $this->aBandaRelatedByIdBanda->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aMinisterio) {
                $result['Ministerio'] = $this->aMinisterio->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collAlteracaoInformacaoUsuarios) {
                $result['AlteracaoInformacaoUsuarios'] = $this->collAlteracaoInformacaoUsuarios->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collBandasRelatedByIdLider) {
                $result['BandasRelatedByIdLider'] = $this->collBandasRelatedByIdLider->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collDadoss) {
                $result['Dadoss'] = $this->collDadoss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collEmailDetails) {
                $result['EmailDetails'] = $this->collEmailDetails->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collEmailHeaders) {
                $result['EmailHeaders'] = $this->collEmailHeaders->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collEscalaPessoasRelatedByIdResponsavel) {
                $result['EscalaPessoasRelatedByIdResponsavel'] = $this->collEscalaPessoasRelatedByIdResponsavel->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collEscalaPessoasRelatedByIdUsuario) {
                $result['EscalaPessoasRelatedByIdUsuario'] = $this->collEscalaPessoasRelatedByIdUsuario->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collUsuarioFuncaos) {
                $result['UsuarioFuncaos'] = $this->collUsuarioFuncaos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collUsuarioMinisterios) {
                $result['UsuarioMinisterios'] = $this->collUsuarioMinisterios->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = UsuarioPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setApelido($value);
                break;
            case 3:
                $this->setEmail($value);
                break;
            case 4:
                $this->setSenha($value);
                break;
            case 5:
                $this->setIdMinisterio($value);
                break;
            case 6:
                $this->setIdBanda($value);
                break;
            case 7:
                $this->setDesabilitado($value);
                break;
            case 8:
                $this->setNivelpermissao($value);
                break;
            case 9:
                $this->setAniversario($value);
                break;
            case 10:
                $this->setEndereco($value);
                break;
            case 11:
                $this->setTelefone($value);
                break;
            case 12:
                $this->setCelular($value);
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
        $keys = UsuarioPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setNome($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setApelido($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setEmail($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSenha($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdMinisterio($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdBanda($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDesabilitado($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setNivelpermissao($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setAniversario($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setEndereco($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setTelefone($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setCelular($arr[$keys[12]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(UsuarioPeer::DATABASE_NAME);

        if ($this->isColumnModified(UsuarioPeer::ID)) $criteria->add(UsuarioPeer::ID, $this->id);
        if ($this->isColumnModified(UsuarioPeer::NOME)) $criteria->add(UsuarioPeer::NOME, $this->nome);
        if ($this->isColumnModified(UsuarioPeer::APELIDO)) $criteria->add(UsuarioPeer::APELIDO, $this->apelido);
        if ($this->isColumnModified(UsuarioPeer::EMAIL)) $criteria->add(UsuarioPeer::EMAIL, $this->email);
        if ($this->isColumnModified(UsuarioPeer::SENHA)) $criteria->add(UsuarioPeer::SENHA, $this->senha);
        if ($this->isColumnModified(UsuarioPeer::ID_MINISTERIO)) $criteria->add(UsuarioPeer::ID_MINISTERIO, $this->id_ministerio);
        if ($this->isColumnModified(UsuarioPeer::ID_BANDA)) $criteria->add(UsuarioPeer::ID_BANDA, $this->id_banda);
        if ($this->isColumnModified(UsuarioPeer::DESABILITADO)) $criteria->add(UsuarioPeer::DESABILITADO, $this->desabilitado);
        if ($this->isColumnModified(UsuarioPeer::NIVELPERMISSAO)) $criteria->add(UsuarioPeer::NIVELPERMISSAO, $this->nivelpermissao);
        if ($this->isColumnModified(UsuarioPeer::ANIVERSARIO)) $criteria->add(UsuarioPeer::ANIVERSARIO, $this->aniversario);
        if ($this->isColumnModified(UsuarioPeer::ENDERECO)) $criteria->add(UsuarioPeer::ENDERECO, $this->endereco);
        if ($this->isColumnModified(UsuarioPeer::TELEFONE)) $criteria->add(UsuarioPeer::TELEFONE, $this->telefone);
        if ($this->isColumnModified(UsuarioPeer::CELULAR)) $criteria->add(UsuarioPeer::CELULAR, $this->celular);

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
        $criteria = new Criteria(UsuarioPeer::DATABASE_NAME);
        $criteria->add(UsuarioPeer::ID, $this->id);

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
     * @param object $copyObj An object of Usuario (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setNome($this->getNome());
        $copyObj->setApelido($this->getApelido());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setSenha($this->getSenha());
        $copyObj->setIdMinisterio($this->getIdMinisterio());
        $copyObj->setIdBanda($this->getIdBanda());
        $copyObj->setDesabilitado($this->getDesabilitado());
        $copyObj->setNivelpermissao($this->getNivelpermissao());
        $copyObj->setAniversario($this->getAniversario());
        $copyObj->setEndereco($this->getEndereco());
        $copyObj->setTelefone($this->getTelefone());
        $copyObj->setCelular($this->getCelular());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getAlteracaoInformacaoUsuarios() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addAlteracaoInformacaoUsuario($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getBandasRelatedByIdLider() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addBandaRelatedByIdLider($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getDadoss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addDados($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getEmailDetails() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addEmailDetail($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getEmailHeaders() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addEmailHeader($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getEscalaPessoasRelatedByIdResponsavel() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addEscalaPessoaRelatedByIdResponsavel($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getEscalaPessoasRelatedByIdUsuario() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addEscalaPessoaRelatedByIdUsuario($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getUsuarioFuncaos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addUsuarioFuncao($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getUsuarioMinisterios() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addUsuarioMinisterio($relObj->copy($deepCopy));
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
     * @return Usuario Clone of current object.
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
     * @return UsuarioPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new UsuarioPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Banda object.
     *
     * @param             Banda $v
     * @return Usuario The current object (for fluent API support)
     * @throws PropelException
     */
    public function setBandaRelatedByIdBanda(Banda $v = null)
    {
        if ($v === null) {
            $this->setIdBanda(NULL);
        } else {
            $this->setIdBanda($v->getId());
        }

        $this->aBandaRelatedByIdBanda = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Banda object, it will not be re-added.
        if ($v !== null) {
            $v->addUsuarioRelatedByIdBanda($this);
        }


        return $this;
    }


    /**
     * Get the associated Banda object
     *
     * @param PropelPDO $con Optional Connection object.
     * @return Banda The associated Banda object.
     * @throws PropelException
     */
    public function getBandaRelatedByIdBanda(PropelPDO $con = null)
    {
        if ($this->aBandaRelatedByIdBanda === null && ($this->id_banda !== null)) {
            $this->aBandaRelatedByIdBanda = BandaQuery::create()->findPk($this->id_banda, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aBandaRelatedByIdBanda->addUsuariosRelatedByIdBanda($this);
             */
        }

        return $this->aBandaRelatedByIdBanda;
    }

    /**
     * Declares an association between this object and a Ministerio object.
     *
     * @param             Ministerio $v
     * @return Usuario The current object (for fluent API support)
     * @throws PropelException
     */
    public function setMinisterio(Ministerio $v = null)
    {
        if ($v === null) {
            $this->setIdMinisterio(NULL);
        } else {
            $this->setIdMinisterio($v->getId());
        }

        $this->aMinisterio = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Ministerio object, it will not be re-added.
        if ($v !== null) {
            $v->addUsuario($this);
        }


        return $this;
    }


    /**
     * Get the associated Ministerio object
     *
     * @param PropelPDO $con Optional Connection object.
     * @return Ministerio The associated Ministerio object.
     * @throws PropelException
     */
    public function getMinisterio(PropelPDO $con = null)
    {
        if ($this->aMinisterio === null && ($this->id_ministerio !== null)) {
            $this->aMinisterio = MinisterioQuery::create()->findPk($this->id_ministerio, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aMinisterio->addUsuarios($this);
             */
        }

        return $this->aMinisterio;
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
        if ('AlteracaoInformacaoUsuario' == $relationName) {
            $this->initAlteracaoInformacaoUsuarios();
        }
        if ('BandaRelatedByIdLider' == $relationName) {
            $this->initBandasRelatedByIdLider();
        }
        if ('Dados' == $relationName) {
            $this->initDadoss();
        }
        if ('EmailDetail' == $relationName) {
            $this->initEmailDetails();
        }
        if ('EmailHeader' == $relationName) {
            $this->initEmailHeaders();
        }
        if ('EscalaPessoaRelatedByIdResponsavel' == $relationName) {
            $this->initEscalaPessoasRelatedByIdResponsavel();
        }
        if ('EscalaPessoaRelatedByIdUsuario' == $relationName) {
            $this->initEscalaPessoasRelatedByIdUsuario();
        }
        if ('UsuarioFuncao' == $relationName) {
            $this->initUsuarioFuncaos();
        }
        if ('UsuarioMinisterio' == $relationName) {
            $this->initUsuarioMinisterios();
        }
    }

    /**
     * Clears out the collAlteracaoInformacaoUsuarios collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addAlteracaoInformacaoUsuarios()
     */
    public function clearAlteracaoInformacaoUsuarios()
    {
        $this->collAlteracaoInformacaoUsuarios = null; // important to set this to null since that means it is uninitialized
        $this->collAlteracaoInformacaoUsuariosPartial = null;
    }

    /**
     * reset is the collAlteracaoInformacaoUsuarios collection loaded partially
     *
     * @return void
     */
    public function resetPartialAlteracaoInformacaoUsuarios($v = true)
    {
        $this->collAlteracaoInformacaoUsuariosPartial = $v;
    }

    /**
     * Initializes the collAlteracaoInformacaoUsuarios collection.
     *
     * By default this just sets the collAlteracaoInformacaoUsuarios collection to an empty array (like clearcollAlteracaoInformacaoUsuarios());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initAlteracaoInformacaoUsuarios($overrideExisting = true)
    {
        if (null !== $this->collAlteracaoInformacaoUsuarios && !$overrideExisting) {
            return;
        }
        $this->collAlteracaoInformacaoUsuarios = new PropelObjectCollection();
        $this->collAlteracaoInformacaoUsuarios->setModel('AlteracaoInformacaoUsuario');
    }

    /**
     * Gets an array of AlteracaoInformacaoUsuario objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Usuario is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|AlteracaoInformacaoUsuario[] List of AlteracaoInformacaoUsuario objects
     * @throws PropelException
     */
    public function getAlteracaoInformacaoUsuarios($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collAlteracaoInformacaoUsuariosPartial && !$this->isNew();
        if (null === $this->collAlteracaoInformacaoUsuarios || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collAlteracaoInformacaoUsuarios) {
                // return empty collection
                $this->initAlteracaoInformacaoUsuarios();
            } else {
                $collAlteracaoInformacaoUsuarios = AlteracaoInformacaoUsuarioQuery::create(null, $criteria)
                    ->filterByUsuario($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collAlteracaoInformacaoUsuariosPartial && count($collAlteracaoInformacaoUsuarios)) {
                      $this->initAlteracaoInformacaoUsuarios(false);

                      foreach($collAlteracaoInformacaoUsuarios as $obj) {
                        if (false == $this->collAlteracaoInformacaoUsuarios->contains($obj)) {
                          $this->collAlteracaoInformacaoUsuarios->append($obj);
                        }
                      }

                      $this->collAlteracaoInformacaoUsuariosPartial = true;
                    }

                    return $collAlteracaoInformacaoUsuarios;
                }

                if($partial && $this->collAlteracaoInformacaoUsuarios) {
                    foreach($this->collAlteracaoInformacaoUsuarios as $obj) {
                        if($obj->isNew()) {
                            $collAlteracaoInformacaoUsuarios[] = $obj;
                        }
                    }
                }

                $this->collAlteracaoInformacaoUsuarios = $collAlteracaoInformacaoUsuarios;
                $this->collAlteracaoInformacaoUsuariosPartial = false;
            }
        }

        return $this->collAlteracaoInformacaoUsuarios;
    }

    /**
     * Sets a collection of AlteracaoInformacaoUsuario objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $alteracaoInformacaoUsuarios A Propel collection.
     * @param PropelPDO $con Optional connection object
     */
    public function setAlteracaoInformacaoUsuarios(PropelCollection $alteracaoInformacaoUsuarios, PropelPDO $con = null)
    {
        $this->alteracaoInformacaoUsuariosScheduledForDeletion = $this->getAlteracaoInformacaoUsuarios(new Criteria(), $con)->diff($alteracaoInformacaoUsuarios);

        foreach ($this->alteracaoInformacaoUsuariosScheduledForDeletion as $alteracaoInformacaoUsuarioRemoved) {
            $alteracaoInformacaoUsuarioRemoved->setUsuario(null);
        }

        $this->collAlteracaoInformacaoUsuarios = null;
        foreach ($alteracaoInformacaoUsuarios as $alteracaoInformacaoUsuario) {
            $this->addAlteracaoInformacaoUsuario($alteracaoInformacaoUsuario);
        }

        $this->collAlteracaoInformacaoUsuarios = $alteracaoInformacaoUsuarios;
        $this->collAlteracaoInformacaoUsuariosPartial = false;
    }

    /**
     * Returns the number of related AlteracaoInformacaoUsuario objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related AlteracaoInformacaoUsuario objects.
     * @throws PropelException
     */
    public function countAlteracaoInformacaoUsuarios(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collAlteracaoInformacaoUsuariosPartial && !$this->isNew();
        if (null === $this->collAlteracaoInformacaoUsuarios || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collAlteracaoInformacaoUsuarios) {
                return 0;
            } else {
                if($partial && !$criteria) {
                    return count($this->getAlteracaoInformacaoUsuarios());
                }
                $query = AlteracaoInformacaoUsuarioQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByUsuario($this)
                    ->count($con);
            }
        } else {
            return count($this->collAlteracaoInformacaoUsuarios);
        }
    }

    /**
     * Method called to associate a AlteracaoInformacaoUsuario object to this object
     * through the AlteracaoInformacaoUsuario foreign key attribute.
     *
     * @param    AlteracaoInformacaoUsuario $l AlteracaoInformacaoUsuario
     * @return Usuario The current object (for fluent API support)
     */
    public function addAlteracaoInformacaoUsuario(AlteracaoInformacaoUsuario $l)
    {
        if ($this->collAlteracaoInformacaoUsuarios === null) {
            $this->initAlteracaoInformacaoUsuarios();
            $this->collAlteracaoInformacaoUsuariosPartial = true;
        }
        if (!$this->collAlteracaoInformacaoUsuarios->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddAlteracaoInformacaoUsuario($l);
        }

        return $this;
    }

    /**
     * @param	AlteracaoInformacaoUsuario $alteracaoInformacaoUsuario The alteracaoInformacaoUsuario object to add.
     */
    protected function doAddAlteracaoInformacaoUsuario($alteracaoInformacaoUsuario)
    {
        $this->collAlteracaoInformacaoUsuarios[]= $alteracaoInformacaoUsuario;
        $alteracaoInformacaoUsuario->setUsuario($this);
    }

    /**
     * @param	AlteracaoInformacaoUsuario $alteracaoInformacaoUsuario The alteracaoInformacaoUsuario object to remove.
     */
    public function removeAlteracaoInformacaoUsuario($alteracaoInformacaoUsuario)
    {
        if ($this->getAlteracaoInformacaoUsuarios()->contains($alteracaoInformacaoUsuario)) {
            $this->collAlteracaoInformacaoUsuarios->remove($this->collAlteracaoInformacaoUsuarios->search($alteracaoInformacaoUsuario));
            if (null === $this->alteracaoInformacaoUsuariosScheduledForDeletion) {
                $this->alteracaoInformacaoUsuariosScheduledForDeletion = clone $this->collAlteracaoInformacaoUsuarios;
                $this->alteracaoInformacaoUsuariosScheduledForDeletion->clear();
            }
            $this->alteracaoInformacaoUsuariosScheduledForDeletion[]= $alteracaoInformacaoUsuario;
            $alteracaoInformacaoUsuario->setUsuario(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Usuario is new, it will return
     * an empty collection; or if this Usuario has previously
     * been saved, it will retrieve related AlteracaoInformacaoUsuarios from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Usuario.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|AlteracaoInformacaoUsuario[] List of AlteracaoInformacaoUsuario objects
     */
    public function getAlteracaoInformacaoUsuariosJoinTipoInformacao($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = AlteracaoInformacaoUsuarioQuery::create(null, $criteria);
        $query->joinWith('TipoInformacao', $join_behavior);

        return $this->getAlteracaoInformacaoUsuarios($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Usuario is new, it will return
     * an empty collection; or if this Usuario has previously
     * been saved, it will retrieve related AlteracaoInformacaoUsuarios from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Usuario.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|AlteracaoInformacaoUsuario[] List of AlteracaoInformacaoUsuario objects
     */
    public function getAlteracaoInformacaoUsuariosJoinToken($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = AlteracaoInformacaoUsuarioQuery::create(null, $criteria);
        $query->joinWith('Token', $join_behavior);

        return $this->getAlteracaoInformacaoUsuarios($query, $con);
    }

    /**
     * Clears out the collBandasRelatedByIdLider collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addBandasRelatedByIdLider()
     */
    public function clearBandasRelatedByIdLider()
    {
        $this->collBandasRelatedByIdLider = null; // important to set this to null since that means it is uninitialized
        $this->collBandasRelatedByIdLiderPartial = null;
    }

    /**
     * reset is the collBandasRelatedByIdLider collection loaded partially
     *
     * @return void
     */
    public function resetPartialBandasRelatedByIdLider($v = true)
    {
        $this->collBandasRelatedByIdLiderPartial = $v;
    }

    /**
     * Initializes the collBandasRelatedByIdLider collection.
     *
     * By default this just sets the collBandasRelatedByIdLider collection to an empty array (like clearcollBandasRelatedByIdLider());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initBandasRelatedByIdLider($overrideExisting = true)
    {
        if (null !== $this->collBandasRelatedByIdLider && !$overrideExisting) {
            return;
        }
        $this->collBandasRelatedByIdLider = new PropelObjectCollection();
        $this->collBandasRelatedByIdLider->setModel('Banda');
    }

    /**
     * Gets an array of Banda objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Usuario is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Banda[] List of Banda objects
     * @throws PropelException
     */
    public function getBandasRelatedByIdLider($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collBandasRelatedByIdLiderPartial && !$this->isNew();
        if (null === $this->collBandasRelatedByIdLider || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collBandasRelatedByIdLider) {
                // return empty collection
                $this->initBandasRelatedByIdLider();
            } else {
                $collBandasRelatedByIdLider = BandaQuery::create(null, $criteria)
                    ->filterByUsuarioRelatedByIdLider($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collBandasRelatedByIdLiderPartial && count($collBandasRelatedByIdLider)) {
                      $this->initBandasRelatedByIdLider(false);

                      foreach($collBandasRelatedByIdLider as $obj) {
                        if (false == $this->collBandasRelatedByIdLider->contains($obj)) {
                          $this->collBandasRelatedByIdLider->append($obj);
                        }
                      }

                      $this->collBandasRelatedByIdLiderPartial = true;
                    }

                    return $collBandasRelatedByIdLider;
                }

                if($partial && $this->collBandasRelatedByIdLider) {
                    foreach($this->collBandasRelatedByIdLider as $obj) {
                        if($obj->isNew()) {
                            $collBandasRelatedByIdLider[] = $obj;
                        }
                    }
                }

                $this->collBandasRelatedByIdLider = $collBandasRelatedByIdLider;
                $this->collBandasRelatedByIdLiderPartial = false;
            }
        }

        return $this->collBandasRelatedByIdLider;
    }

    /**
     * Sets a collection of BandaRelatedByIdLider objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $bandasRelatedByIdLider A Propel collection.
     * @param PropelPDO $con Optional connection object
     */
    public function setBandasRelatedByIdLider(PropelCollection $bandasRelatedByIdLider, PropelPDO $con = null)
    {
        $this->bandasRelatedByIdLiderScheduledForDeletion = $this->getBandasRelatedByIdLider(new Criteria(), $con)->diff($bandasRelatedByIdLider);

        foreach ($this->bandasRelatedByIdLiderScheduledForDeletion as $bandaRelatedByIdLiderRemoved) {
            $bandaRelatedByIdLiderRemoved->setUsuarioRelatedByIdLider(null);
        }

        $this->collBandasRelatedByIdLider = null;
        foreach ($bandasRelatedByIdLider as $bandaRelatedByIdLider) {
            $this->addBandaRelatedByIdLider($bandaRelatedByIdLider);
        }

        $this->collBandasRelatedByIdLider = $bandasRelatedByIdLider;
        $this->collBandasRelatedByIdLiderPartial = false;
    }

    /**
     * Returns the number of related Banda objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Banda objects.
     * @throws PropelException
     */
    public function countBandasRelatedByIdLider(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collBandasRelatedByIdLiderPartial && !$this->isNew();
        if (null === $this->collBandasRelatedByIdLider || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collBandasRelatedByIdLider) {
                return 0;
            } else {
                if($partial && !$criteria) {
                    return count($this->getBandasRelatedByIdLider());
                }
                $query = BandaQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByUsuarioRelatedByIdLider($this)
                    ->count($con);
            }
        } else {
            return count($this->collBandasRelatedByIdLider);
        }
    }

    /**
     * Method called to associate a Banda object to this object
     * through the Banda foreign key attribute.
     *
     * @param    Banda $l Banda
     * @return Usuario The current object (for fluent API support)
     */
    public function addBandaRelatedByIdLider(Banda $l)
    {
        if ($this->collBandasRelatedByIdLider === null) {
            $this->initBandasRelatedByIdLider();
            $this->collBandasRelatedByIdLiderPartial = true;
        }
        if (!$this->collBandasRelatedByIdLider->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddBandaRelatedByIdLider($l);
        }

        return $this;
    }

    /**
     * @param	BandaRelatedByIdLider $bandaRelatedByIdLider The bandaRelatedByIdLider object to add.
     */
    protected function doAddBandaRelatedByIdLider($bandaRelatedByIdLider)
    {
        $this->collBandasRelatedByIdLider[]= $bandaRelatedByIdLider;
        $bandaRelatedByIdLider->setUsuarioRelatedByIdLider($this);
    }

    /**
     * @param	BandaRelatedByIdLider $bandaRelatedByIdLider The bandaRelatedByIdLider object to remove.
     */
    public function removeBandaRelatedByIdLider($bandaRelatedByIdLider)
    {
        if ($this->getBandasRelatedByIdLider()->contains($bandaRelatedByIdLider)) {
            $this->collBandasRelatedByIdLider->remove($this->collBandasRelatedByIdLider->search($bandaRelatedByIdLider));
            if (null === $this->bandasRelatedByIdLiderScheduledForDeletion) {
                $this->bandasRelatedByIdLiderScheduledForDeletion = clone $this->collBandasRelatedByIdLider;
                $this->bandasRelatedByIdLiderScheduledForDeletion->clear();
            }
            $this->bandasRelatedByIdLiderScheduledForDeletion[]= $bandaRelatedByIdLider;
            $bandaRelatedByIdLider->setUsuarioRelatedByIdLider(null);
        }
    }

    /**
     * Clears out the collDadoss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addDadoss()
     */
    public function clearDadoss()
    {
        $this->collDadoss = null; // important to set this to null since that means it is uninitialized
        $this->collDadossPartial = null;
    }

    /**
     * reset is the collDadoss collection loaded partially
     *
     * @return void
     */
    public function resetPartialDadoss($v = true)
    {
        $this->collDadossPartial = $v;
    }

    /**
     * Initializes the collDadoss collection.
     *
     * By default this just sets the collDadoss collection to an empty array (like clearcollDadoss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initDadoss($overrideExisting = true)
    {
        if (null !== $this->collDadoss && !$overrideExisting) {
            return;
        }
        $this->collDadoss = new PropelObjectCollection();
        $this->collDadoss->setModel('Dados');
    }

    /**
     * Gets an array of Dados objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Usuario is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Dados[] List of Dados objects
     * @throws PropelException
     */
    public function getDadoss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collDadossPartial && !$this->isNew();
        if (null === $this->collDadoss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collDadoss) {
                // return empty collection
                $this->initDadoss();
            } else {
                $collDadoss = DadosQuery::create(null, $criteria)
                    ->filterByUsuario($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collDadossPartial && count($collDadoss)) {
                      $this->initDadoss(false);

                      foreach($collDadoss as $obj) {
                        if (false == $this->collDadoss->contains($obj)) {
                          $this->collDadoss->append($obj);
                        }
                      }

                      $this->collDadossPartial = true;
                    }

                    return $collDadoss;
                }

                if($partial && $this->collDadoss) {
                    foreach($this->collDadoss as $obj) {
                        if($obj->isNew()) {
                            $collDadoss[] = $obj;
                        }
                    }
                }

                $this->collDadoss = $collDadoss;
                $this->collDadossPartial = false;
            }
        }

        return $this->collDadoss;
    }

    /**
     * Sets a collection of Dados objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $dadoss A Propel collection.
     * @param PropelPDO $con Optional connection object
     */
    public function setDadoss(PropelCollection $dadoss, PropelPDO $con = null)
    {
        $this->dadossScheduledForDeletion = $this->getDadoss(new Criteria(), $con)->diff($dadoss);

        foreach ($this->dadossScheduledForDeletion as $dadosRemoved) {
            $dadosRemoved->setUsuario(null);
        }

        $this->collDadoss = null;
        foreach ($dadoss as $dados) {
            $this->addDados($dados);
        }

        $this->collDadoss = $dadoss;
        $this->collDadossPartial = false;
    }

    /**
     * Returns the number of related Dados objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Dados objects.
     * @throws PropelException
     */
    public function countDadoss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collDadossPartial && !$this->isNew();
        if (null === $this->collDadoss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collDadoss) {
                return 0;
            } else {
                if($partial && !$criteria) {
                    return count($this->getDadoss());
                }
                $query = DadosQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByUsuario($this)
                    ->count($con);
            }
        } else {
            return count($this->collDadoss);
        }
    }

    /**
     * Method called to associate a Dados object to this object
     * through the Dados foreign key attribute.
     *
     * @param    Dados $l Dados
     * @return Usuario The current object (for fluent API support)
     */
    public function addDados(Dados $l)
    {
        if ($this->collDadoss === null) {
            $this->initDadoss();
            $this->collDadossPartial = true;
        }
        if (!$this->collDadoss->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddDados($l);
        }

        return $this;
    }

    /**
     * @param	Dados $dados The dados object to add.
     */
    protected function doAddDados($dados)
    {
        $this->collDadoss[]= $dados;
        $dados->setUsuario($this);
    }

    /**
     * @param	Dados $dados The dados object to remove.
     */
    public function removeDados($dados)
    {
        if ($this->getDadoss()->contains($dados)) {
            $this->collDadoss->remove($this->collDadoss->search($dados));
            if (null === $this->dadossScheduledForDeletion) {
                $this->dadossScheduledForDeletion = clone $this->collDadoss;
                $this->dadossScheduledForDeletion->clear();
            }
            $this->dadossScheduledForDeletion[]= $dados;
            $dados->setUsuario(null);
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
     * If this Usuario is new, it will return
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
                    ->filterByUsuario($this)
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
            $emailDetailRemoved->setUsuario(null);
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
                    ->filterByUsuario($this)
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
     * @return Usuario The current object (for fluent API support)
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
        $emailDetail->setUsuario($this);
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
            $emailDetail->setUsuario(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Usuario is new, it will return
     * an empty collection; or if this Usuario has previously
     * been saved, it will retrieve related EmailDetails from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Usuario.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|EmailDetail[] List of EmailDetail objects
     */
    public function getEmailDetailsJoinEmailHeader($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EmailDetailQuery::create(null, $criteria);
        $query->joinWith('EmailHeader', $join_behavior);

        return $this->getEmailDetails($query, $con);
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
     * If this Usuario is new, it will return
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
                    ->filterByUsuario($this)
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
            $emailHeaderRemoved->setUsuario(null);
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
                    ->filterByUsuario($this)
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
     * @return Usuario The current object (for fluent API support)
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
        $emailHeader->setUsuario($this);
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
            $emailHeader->setUsuario(null);
        }
    }

    /**
     * Clears out the collEscalaPessoasRelatedByIdResponsavel collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addEscalaPessoasRelatedByIdResponsavel()
     */
    public function clearEscalaPessoasRelatedByIdResponsavel()
    {
        $this->collEscalaPessoasRelatedByIdResponsavel = null; // important to set this to null since that means it is uninitialized
        $this->collEscalaPessoasRelatedByIdResponsavelPartial = null;
    }

    /**
     * reset is the collEscalaPessoasRelatedByIdResponsavel collection loaded partially
     *
     * @return void
     */
    public function resetPartialEscalaPessoasRelatedByIdResponsavel($v = true)
    {
        $this->collEscalaPessoasRelatedByIdResponsavelPartial = $v;
    }

    /**
     * Initializes the collEscalaPessoasRelatedByIdResponsavel collection.
     *
     * By default this just sets the collEscalaPessoasRelatedByIdResponsavel collection to an empty array (like clearcollEscalaPessoasRelatedByIdResponsavel());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initEscalaPessoasRelatedByIdResponsavel($overrideExisting = true)
    {
        if (null !== $this->collEscalaPessoasRelatedByIdResponsavel && !$overrideExisting) {
            return;
        }
        $this->collEscalaPessoasRelatedByIdResponsavel = new PropelObjectCollection();
        $this->collEscalaPessoasRelatedByIdResponsavel->setModel('EscalaPessoa');
    }

    /**
     * Gets an array of EscalaPessoa objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Usuario is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|EscalaPessoa[] List of EscalaPessoa objects
     * @throws PropelException
     */
    public function getEscalaPessoasRelatedByIdResponsavel($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collEscalaPessoasRelatedByIdResponsavelPartial && !$this->isNew();
        if (null === $this->collEscalaPessoasRelatedByIdResponsavel || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collEscalaPessoasRelatedByIdResponsavel) {
                // return empty collection
                $this->initEscalaPessoasRelatedByIdResponsavel();
            } else {
                $collEscalaPessoasRelatedByIdResponsavel = EscalaPessoaQuery::create(null, $criteria)
                    ->filterByUsuarioRelatedByIdResponsavel($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collEscalaPessoasRelatedByIdResponsavelPartial && count($collEscalaPessoasRelatedByIdResponsavel)) {
                      $this->initEscalaPessoasRelatedByIdResponsavel(false);

                      foreach($collEscalaPessoasRelatedByIdResponsavel as $obj) {
                        if (false == $this->collEscalaPessoasRelatedByIdResponsavel->contains($obj)) {
                          $this->collEscalaPessoasRelatedByIdResponsavel->append($obj);
                        }
                      }

                      $this->collEscalaPessoasRelatedByIdResponsavelPartial = true;
                    }

                    return $collEscalaPessoasRelatedByIdResponsavel;
                }

                if($partial && $this->collEscalaPessoasRelatedByIdResponsavel) {
                    foreach($this->collEscalaPessoasRelatedByIdResponsavel as $obj) {
                        if($obj->isNew()) {
                            $collEscalaPessoasRelatedByIdResponsavel[] = $obj;
                        }
                    }
                }

                $this->collEscalaPessoasRelatedByIdResponsavel = $collEscalaPessoasRelatedByIdResponsavel;
                $this->collEscalaPessoasRelatedByIdResponsavelPartial = false;
            }
        }

        return $this->collEscalaPessoasRelatedByIdResponsavel;
    }

    /**
     * Sets a collection of EscalaPessoaRelatedByIdResponsavel objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $escalaPessoasRelatedByIdResponsavel A Propel collection.
     * @param PropelPDO $con Optional connection object
     */
    public function setEscalaPessoasRelatedByIdResponsavel(PropelCollection $escalaPessoasRelatedByIdResponsavel, PropelPDO $con = null)
    {
        $this->escalaPessoasRelatedByIdResponsavelScheduledForDeletion = $this->getEscalaPessoasRelatedByIdResponsavel(new Criteria(), $con)->diff($escalaPessoasRelatedByIdResponsavel);

        foreach ($this->escalaPessoasRelatedByIdResponsavelScheduledForDeletion as $escalaPessoaRelatedByIdResponsavelRemoved) {
            $escalaPessoaRelatedByIdResponsavelRemoved->setUsuarioRelatedByIdResponsavel(null);
        }

        $this->collEscalaPessoasRelatedByIdResponsavel = null;
        foreach ($escalaPessoasRelatedByIdResponsavel as $escalaPessoaRelatedByIdResponsavel) {
            $this->addEscalaPessoaRelatedByIdResponsavel($escalaPessoaRelatedByIdResponsavel);
        }

        $this->collEscalaPessoasRelatedByIdResponsavel = $escalaPessoasRelatedByIdResponsavel;
        $this->collEscalaPessoasRelatedByIdResponsavelPartial = false;
    }

    /**
     * Returns the number of related EscalaPessoa objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related EscalaPessoa objects.
     * @throws PropelException
     */
    public function countEscalaPessoasRelatedByIdResponsavel(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collEscalaPessoasRelatedByIdResponsavelPartial && !$this->isNew();
        if (null === $this->collEscalaPessoasRelatedByIdResponsavel || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collEscalaPessoasRelatedByIdResponsavel) {
                return 0;
            } else {
                if($partial && !$criteria) {
                    return count($this->getEscalaPessoasRelatedByIdResponsavel());
                }
                $query = EscalaPessoaQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByUsuarioRelatedByIdResponsavel($this)
                    ->count($con);
            }
        } else {
            return count($this->collEscalaPessoasRelatedByIdResponsavel);
        }
    }

    /**
     * Method called to associate a EscalaPessoa object to this object
     * through the EscalaPessoa foreign key attribute.
     *
     * @param    EscalaPessoa $l EscalaPessoa
     * @return Usuario The current object (for fluent API support)
     */
    public function addEscalaPessoaRelatedByIdResponsavel(EscalaPessoa $l)
    {
        if ($this->collEscalaPessoasRelatedByIdResponsavel === null) {
            $this->initEscalaPessoasRelatedByIdResponsavel();
            $this->collEscalaPessoasRelatedByIdResponsavelPartial = true;
        }
        if (!$this->collEscalaPessoasRelatedByIdResponsavel->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddEscalaPessoaRelatedByIdResponsavel($l);
        }

        return $this;
    }

    /**
     * @param	EscalaPessoaRelatedByIdResponsavel $escalaPessoaRelatedByIdResponsavel The escalaPessoaRelatedByIdResponsavel object to add.
     */
    protected function doAddEscalaPessoaRelatedByIdResponsavel($escalaPessoaRelatedByIdResponsavel)
    {
        $this->collEscalaPessoasRelatedByIdResponsavel[]= $escalaPessoaRelatedByIdResponsavel;
        $escalaPessoaRelatedByIdResponsavel->setUsuarioRelatedByIdResponsavel($this);
    }

    /**
     * @param	EscalaPessoaRelatedByIdResponsavel $escalaPessoaRelatedByIdResponsavel The escalaPessoaRelatedByIdResponsavel object to remove.
     */
    public function removeEscalaPessoaRelatedByIdResponsavel($escalaPessoaRelatedByIdResponsavel)
    {
        if ($this->getEscalaPessoasRelatedByIdResponsavel()->contains($escalaPessoaRelatedByIdResponsavel)) {
            $this->collEscalaPessoasRelatedByIdResponsavel->remove($this->collEscalaPessoasRelatedByIdResponsavel->search($escalaPessoaRelatedByIdResponsavel));
            if (null === $this->escalaPessoasRelatedByIdResponsavelScheduledForDeletion) {
                $this->escalaPessoasRelatedByIdResponsavelScheduledForDeletion = clone $this->collEscalaPessoasRelatedByIdResponsavel;
                $this->escalaPessoasRelatedByIdResponsavelScheduledForDeletion->clear();
            }
            $this->escalaPessoasRelatedByIdResponsavelScheduledForDeletion[]= $escalaPessoaRelatedByIdResponsavel;
            $escalaPessoaRelatedByIdResponsavel->setUsuarioRelatedByIdResponsavel(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Usuario is new, it will return
     * an empty collection; or if this Usuario has previously
     * been saved, it will retrieve related EscalaPessoasRelatedByIdResponsavel from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Usuario.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|EscalaPessoa[] List of EscalaPessoa objects
     */
    public function getEscalaPessoasRelatedByIdResponsavelJoinTipoEscala($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EscalaPessoaQuery::create(null, $criteria);
        $query->joinWith('TipoEscala', $join_behavior);

        return $this->getEscalaPessoasRelatedByIdResponsavel($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Usuario is new, it will return
     * an empty collection; or if this Usuario has previously
     * been saved, it will retrieve related EscalaPessoasRelatedByIdResponsavel from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Usuario.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|EscalaPessoa[] List of EscalaPessoa objects
     */
    public function getEscalaPessoasRelatedByIdResponsavelJoinLocal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EscalaPessoaQuery::create(null, $criteria);
        $query->joinWith('Local', $join_behavior);

        return $this->getEscalaPessoasRelatedByIdResponsavel($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Usuario is new, it will return
     * an empty collection; or if this Usuario has previously
     * been saved, it will retrieve related EscalaPessoasRelatedByIdResponsavel from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Usuario.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|EscalaPessoa[] List of EscalaPessoa objects
     */
    public function getEscalaPessoasRelatedByIdResponsavelJoinStatusEscala($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EscalaPessoaQuery::create(null, $criteria);
        $query->joinWith('StatusEscala', $join_behavior);

        return $this->getEscalaPessoasRelatedByIdResponsavel($query, $con);
    }

    /**
     * Clears out the collEscalaPessoasRelatedByIdUsuario collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addEscalaPessoasRelatedByIdUsuario()
     */
    public function clearEscalaPessoasRelatedByIdUsuario()
    {
        $this->collEscalaPessoasRelatedByIdUsuario = null; // important to set this to null since that means it is uninitialized
        $this->collEscalaPessoasRelatedByIdUsuarioPartial = null;
    }

    /**
     * reset is the collEscalaPessoasRelatedByIdUsuario collection loaded partially
     *
     * @return void
     */
    public function resetPartialEscalaPessoasRelatedByIdUsuario($v = true)
    {
        $this->collEscalaPessoasRelatedByIdUsuarioPartial = $v;
    }

    /**
     * Initializes the collEscalaPessoasRelatedByIdUsuario collection.
     *
     * By default this just sets the collEscalaPessoasRelatedByIdUsuario collection to an empty array (like clearcollEscalaPessoasRelatedByIdUsuario());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initEscalaPessoasRelatedByIdUsuario($overrideExisting = true)
    {
        if (null !== $this->collEscalaPessoasRelatedByIdUsuario && !$overrideExisting) {
            return;
        }
        $this->collEscalaPessoasRelatedByIdUsuario = new PropelObjectCollection();
        $this->collEscalaPessoasRelatedByIdUsuario->setModel('EscalaPessoa');
    }

    /**
     * Gets an array of EscalaPessoa objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Usuario is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|EscalaPessoa[] List of EscalaPessoa objects
     * @throws PropelException
     */
    public function getEscalaPessoasRelatedByIdUsuario($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collEscalaPessoasRelatedByIdUsuarioPartial && !$this->isNew();
        if (null === $this->collEscalaPessoasRelatedByIdUsuario || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collEscalaPessoasRelatedByIdUsuario) {
                // return empty collection
                $this->initEscalaPessoasRelatedByIdUsuario();
            } else {
                $collEscalaPessoasRelatedByIdUsuario = EscalaPessoaQuery::create(null, $criteria)
                    ->filterByUsuarioRelatedByIdUsuario($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collEscalaPessoasRelatedByIdUsuarioPartial && count($collEscalaPessoasRelatedByIdUsuario)) {
                      $this->initEscalaPessoasRelatedByIdUsuario(false);

                      foreach($collEscalaPessoasRelatedByIdUsuario as $obj) {
                        if (false == $this->collEscalaPessoasRelatedByIdUsuario->contains($obj)) {
                          $this->collEscalaPessoasRelatedByIdUsuario->append($obj);
                        }
                      }

                      $this->collEscalaPessoasRelatedByIdUsuarioPartial = true;
                    }

                    return $collEscalaPessoasRelatedByIdUsuario;
                }

                if($partial && $this->collEscalaPessoasRelatedByIdUsuario) {
                    foreach($this->collEscalaPessoasRelatedByIdUsuario as $obj) {
                        if($obj->isNew()) {
                            $collEscalaPessoasRelatedByIdUsuario[] = $obj;
                        }
                    }
                }

                $this->collEscalaPessoasRelatedByIdUsuario = $collEscalaPessoasRelatedByIdUsuario;
                $this->collEscalaPessoasRelatedByIdUsuarioPartial = false;
            }
        }

        return $this->collEscalaPessoasRelatedByIdUsuario;
    }

    /**
     * Sets a collection of EscalaPessoaRelatedByIdUsuario objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $escalaPessoasRelatedByIdUsuario A Propel collection.
     * @param PropelPDO $con Optional connection object
     */
    public function setEscalaPessoasRelatedByIdUsuario(PropelCollection $escalaPessoasRelatedByIdUsuario, PropelPDO $con = null)
    {
        $this->escalaPessoasRelatedByIdUsuarioScheduledForDeletion = $this->getEscalaPessoasRelatedByIdUsuario(new Criteria(), $con)->diff($escalaPessoasRelatedByIdUsuario);

        foreach ($this->escalaPessoasRelatedByIdUsuarioScheduledForDeletion as $escalaPessoaRelatedByIdUsuarioRemoved) {
            $escalaPessoaRelatedByIdUsuarioRemoved->setUsuarioRelatedByIdUsuario(null);
        }

        $this->collEscalaPessoasRelatedByIdUsuario = null;
        foreach ($escalaPessoasRelatedByIdUsuario as $escalaPessoaRelatedByIdUsuario) {
            $this->addEscalaPessoaRelatedByIdUsuario($escalaPessoaRelatedByIdUsuario);
        }

        $this->collEscalaPessoasRelatedByIdUsuario = $escalaPessoasRelatedByIdUsuario;
        $this->collEscalaPessoasRelatedByIdUsuarioPartial = false;
    }

    /**
     * Returns the number of related EscalaPessoa objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related EscalaPessoa objects.
     * @throws PropelException
     */
    public function countEscalaPessoasRelatedByIdUsuario(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collEscalaPessoasRelatedByIdUsuarioPartial && !$this->isNew();
        if (null === $this->collEscalaPessoasRelatedByIdUsuario || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collEscalaPessoasRelatedByIdUsuario) {
                return 0;
            } else {
                if($partial && !$criteria) {
                    return count($this->getEscalaPessoasRelatedByIdUsuario());
                }
                $query = EscalaPessoaQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByUsuarioRelatedByIdUsuario($this)
                    ->count($con);
            }
        } else {
            return count($this->collEscalaPessoasRelatedByIdUsuario);
        }
    }

    /**
     * Method called to associate a EscalaPessoa object to this object
     * through the EscalaPessoa foreign key attribute.
     *
     * @param    EscalaPessoa $l EscalaPessoa
     * @return Usuario The current object (for fluent API support)
     */
    public function addEscalaPessoaRelatedByIdUsuario(EscalaPessoa $l)
    {
        if ($this->collEscalaPessoasRelatedByIdUsuario === null) {
            $this->initEscalaPessoasRelatedByIdUsuario();
            $this->collEscalaPessoasRelatedByIdUsuarioPartial = true;
        }
        if (!$this->collEscalaPessoasRelatedByIdUsuario->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddEscalaPessoaRelatedByIdUsuario($l);
        }

        return $this;
    }

    /**
     * @param	EscalaPessoaRelatedByIdUsuario $escalaPessoaRelatedByIdUsuario The escalaPessoaRelatedByIdUsuario object to add.
     */
    protected function doAddEscalaPessoaRelatedByIdUsuario($escalaPessoaRelatedByIdUsuario)
    {
        $this->collEscalaPessoasRelatedByIdUsuario[]= $escalaPessoaRelatedByIdUsuario;
        $escalaPessoaRelatedByIdUsuario->setUsuarioRelatedByIdUsuario($this);
    }

    /**
     * @param	EscalaPessoaRelatedByIdUsuario $escalaPessoaRelatedByIdUsuario The escalaPessoaRelatedByIdUsuario object to remove.
     */
    public function removeEscalaPessoaRelatedByIdUsuario($escalaPessoaRelatedByIdUsuario)
    {
        if ($this->getEscalaPessoasRelatedByIdUsuario()->contains($escalaPessoaRelatedByIdUsuario)) {
            $this->collEscalaPessoasRelatedByIdUsuario->remove($this->collEscalaPessoasRelatedByIdUsuario->search($escalaPessoaRelatedByIdUsuario));
            if (null === $this->escalaPessoasRelatedByIdUsuarioScheduledForDeletion) {
                $this->escalaPessoasRelatedByIdUsuarioScheduledForDeletion = clone $this->collEscalaPessoasRelatedByIdUsuario;
                $this->escalaPessoasRelatedByIdUsuarioScheduledForDeletion->clear();
            }
            $this->escalaPessoasRelatedByIdUsuarioScheduledForDeletion[]= $escalaPessoaRelatedByIdUsuario;
            $escalaPessoaRelatedByIdUsuario->setUsuarioRelatedByIdUsuario(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Usuario is new, it will return
     * an empty collection; or if this Usuario has previously
     * been saved, it will retrieve related EscalaPessoasRelatedByIdUsuario from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Usuario.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|EscalaPessoa[] List of EscalaPessoa objects
     */
    public function getEscalaPessoasRelatedByIdUsuarioJoinTipoEscala($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EscalaPessoaQuery::create(null, $criteria);
        $query->joinWith('TipoEscala', $join_behavior);

        return $this->getEscalaPessoasRelatedByIdUsuario($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Usuario is new, it will return
     * an empty collection; or if this Usuario has previously
     * been saved, it will retrieve related EscalaPessoasRelatedByIdUsuario from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Usuario.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|EscalaPessoa[] List of EscalaPessoa objects
     */
    public function getEscalaPessoasRelatedByIdUsuarioJoinLocal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EscalaPessoaQuery::create(null, $criteria);
        $query->joinWith('Local', $join_behavior);

        return $this->getEscalaPessoasRelatedByIdUsuario($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Usuario is new, it will return
     * an empty collection; or if this Usuario has previously
     * been saved, it will retrieve related EscalaPessoasRelatedByIdUsuario from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Usuario.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|EscalaPessoa[] List of EscalaPessoa objects
     */
    public function getEscalaPessoasRelatedByIdUsuarioJoinStatusEscala($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EscalaPessoaQuery::create(null, $criteria);
        $query->joinWith('StatusEscala', $join_behavior);

        return $this->getEscalaPessoasRelatedByIdUsuario($query, $con);
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
     * If this Usuario is new, it will return
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
                    ->filterByUsuario($this)
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
            $usuarioFuncaoRemoved->setUsuario(null);
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
                    ->filterByUsuario($this)
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
     * @return Usuario The current object (for fluent API support)
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
        $usuarioFuncao->setUsuario($this);
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
            $usuarioFuncao->setUsuario(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Usuario is new, it will return
     * an empty collection; or if this Usuario has previously
     * been saved, it will retrieve related UsuarioFuncaos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Usuario.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|UsuarioFuncao[] List of UsuarioFuncao objects
     */
    public function getUsuarioFuncaosJoinFuncao($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = UsuarioFuncaoQuery::create(null, $criteria);
        $query->joinWith('Funcao', $join_behavior);

        return $this->getUsuarioFuncaos($query, $con);
    }

    /**
     * Clears out the collUsuarioMinisterios collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addUsuarioMinisterios()
     */
    public function clearUsuarioMinisterios()
    {
        $this->collUsuarioMinisterios = null; // important to set this to null since that means it is uninitialized
        $this->collUsuarioMinisteriosPartial = null;
    }

    /**
     * reset is the collUsuarioMinisterios collection loaded partially
     *
     * @return void
     */
    public function resetPartialUsuarioMinisterios($v = true)
    {
        $this->collUsuarioMinisteriosPartial = $v;
    }

    /**
     * Initializes the collUsuarioMinisterios collection.
     *
     * By default this just sets the collUsuarioMinisterios collection to an empty array (like clearcollUsuarioMinisterios());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initUsuarioMinisterios($overrideExisting = true)
    {
        if (null !== $this->collUsuarioMinisterios && !$overrideExisting) {
            return;
        }
        $this->collUsuarioMinisterios = new PropelObjectCollection();
        $this->collUsuarioMinisterios->setModel('UsuarioMinisterio');
    }

    /**
     * Gets an array of UsuarioMinisterio objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Usuario is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|UsuarioMinisterio[] List of UsuarioMinisterio objects
     * @throws PropelException
     */
    public function getUsuarioMinisterios($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collUsuarioMinisteriosPartial && !$this->isNew();
        if (null === $this->collUsuarioMinisterios || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collUsuarioMinisterios) {
                // return empty collection
                $this->initUsuarioMinisterios();
            } else {
                $collUsuarioMinisterios = UsuarioMinisterioQuery::create(null, $criteria)
                    ->filterByUsuario($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collUsuarioMinisteriosPartial && count($collUsuarioMinisterios)) {
                      $this->initUsuarioMinisterios(false);

                      foreach($collUsuarioMinisterios as $obj) {
                        if (false == $this->collUsuarioMinisterios->contains($obj)) {
                          $this->collUsuarioMinisterios->append($obj);
                        }
                      }

                      $this->collUsuarioMinisteriosPartial = true;
                    }

                    return $collUsuarioMinisterios;
                }

                if($partial && $this->collUsuarioMinisterios) {
                    foreach($this->collUsuarioMinisterios as $obj) {
                        if($obj->isNew()) {
                            $collUsuarioMinisterios[] = $obj;
                        }
                    }
                }

                $this->collUsuarioMinisterios = $collUsuarioMinisterios;
                $this->collUsuarioMinisteriosPartial = false;
            }
        }

        return $this->collUsuarioMinisterios;
    }

    /**
     * Sets a collection of UsuarioMinisterio objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $usuarioMinisterios A Propel collection.
     * @param PropelPDO $con Optional connection object
     */
    public function setUsuarioMinisterios(PropelCollection $usuarioMinisterios, PropelPDO $con = null)
    {
        $this->usuarioMinisteriosScheduledForDeletion = $this->getUsuarioMinisterios(new Criteria(), $con)->diff($usuarioMinisterios);

        foreach ($this->usuarioMinisteriosScheduledForDeletion as $usuarioMinisterioRemoved) {
            $usuarioMinisterioRemoved->setUsuario(null);
        }

        $this->collUsuarioMinisterios = null;
        foreach ($usuarioMinisterios as $usuarioMinisterio) {
            $this->addUsuarioMinisterio($usuarioMinisterio);
        }

        $this->collUsuarioMinisterios = $usuarioMinisterios;
        $this->collUsuarioMinisteriosPartial = false;
    }

    /**
     * Returns the number of related UsuarioMinisterio objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related UsuarioMinisterio objects.
     * @throws PropelException
     */
    public function countUsuarioMinisterios(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collUsuarioMinisteriosPartial && !$this->isNew();
        if (null === $this->collUsuarioMinisterios || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collUsuarioMinisterios) {
                return 0;
            } else {
                if($partial && !$criteria) {
                    return count($this->getUsuarioMinisterios());
                }
                $query = UsuarioMinisterioQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByUsuario($this)
                    ->count($con);
            }
        } else {
            return count($this->collUsuarioMinisterios);
        }
    }

    /**
     * Method called to associate a UsuarioMinisterio object to this object
     * through the UsuarioMinisterio foreign key attribute.
     *
     * @param    UsuarioMinisterio $l UsuarioMinisterio
     * @return Usuario The current object (for fluent API support)
     */
    public function addUsuarioMinisterio(UsuarioMinisterio $l)
    {
        if ($this->collUsuarioMinisterios === null) {
            $this->initUsuarioMinisterios();
            $this->collUsuarioMinisteriosPartial = true;
        }
        if (!$this->collUsuarioMinisterios->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddUsuarioMinisterio($l);
        }

        return $this;
    }

    /**
     * @param	UsuarioMinisterio $usuarioMinisterio The usuarioMinisterio object to add.
     */
    protected function doAddUsuarioMinisterio($usuarioMinisterio)
    {
        $this->collUsuarioMinisterios[]= $usuarioMinisterio;
        $usuarioMinisterio->setUsuario($this);
    }

    /**
     * @param	UsuarioMinisterio $usuarioMinisterio The usuarioMinisterio object to remove.
     */
    public function removeUsuarioMinisterio($usuarioMinisterio)
    {
        if ($this->getUsuarioMinisterios()->contains($usuarioMinisterio)) {
            $this->collUsuarioMinisterios->remove($this->collUsuarioMinisterios->search($usuarioMinisterio));
            if (null === $this->usuarioMinisteriosScheduledForDeletion) {
                $this->usuarioMinisteriosScheduledForDeletion = clone $this->collUsuarioMinisterios;
                $this->usuarioMinisteriosScheduledForDeletion->clear();
            }
            $this->usuarioMinisteriosScheduledForDeletion[]= $usuarioMinisterio;
            $usuarioMinisterio->setUsuario(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Usuario is new, it will return
     * an empty collection; or if this Usuario has previously
     * been saved, it will retrieve related UsuarioMinisterios from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Usuario.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|UsuarioMinisterio[] List of UsuarioMinisterio objects
     */
    public function getUsuarioMinisteriosJoinMinisterio($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = UsuarioMinisterioQuery::create(null, $criteria);
        $query->joinWith('Ministerio', $join_behavior);

        return $this->getUsuarioMinisterios($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->nome = null;
        $this->apelido = null;
        $this->email = null;
        $this->senha = null;
        $this->id_ministerio = null;
        $this->id_banda = null;
        $this->desabilitado = null;
        $this->nivelpermissao = null;
        $this->aniversario = null;
        $this->endereco = null;
        $this->telefone = null;
        $this->celular = null;
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
            if ($this->collAlteracaoInformacaoUsuarios) {
                foreach ($this->collAlteracaoInformacaoUsuarios as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collBandasRelatedByIdLider) {
                foreach ($this->collBandasRelatedByIdLider as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collDadoss) {
                foreach ($this->collDadoss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collEmailDetails) {
                foreach ($this->collEmailDetails as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collEmailHeaders) {
                foreach ($this->collEmailHeaders as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collEscalaPessoasRelatedByIdResponsavel) {
                foreach ($this->collEscalaPessoasRelatedByIdResponsavel as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collEscalaPessoasRelatedByIdUsuario) {
                foreach ($this->collEscalaPessoasRelatedByIdUsuario as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collUsuarioFuncaos) {
                foreach ($this->collUsuarioFuncaos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collUsuarioMinisterios) {
                foreach ($this->collUsuarioMinisterios as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        if ($this->collAlteracaoInformacaoUsuarios instanceof PropelCollection) {
            $this->collAlteracaoInformacaoUsuarios->clearIterator();
        }
        $this->collAlteracaoInformacaoUsuarios = null;
        if ($this->collBandasRelatedByIdLider instanceof PropelCollection) {
            $this->collBandasRelatedByIdLider->clearIterator();
        }
        $this->collBandasRelatedByIdLider = null;
        if ($this->collDadoss instanceof PropelCollection) {
            $this->collDadoss->clearIterator();
        }
        $this->collDadoss = null;
        if ($this->collEmailDetails instanceof PropelCollection) {
            $this->collEmailDetails->clearIterator();
        }
        $this->collEmailDetails = null;
        if ($this->collEmailHeaders instanceof PropelCollection) {
            $this->collEmailHeaders->clearIterator();
        }
        $this->collEmailHeaders = null;
        if ($this->collEscalaPessoasRelatedByIdResponsavel instanceof PropelCollection) {
            $this->collEscalaPessoasRelatedByIdResponsavel->clearIterator();
        }
        $this->collEscalaPessoasRelatedByIdResponsavel = null;
        if ($this->collEscalaPessoasRelatedByIdUsuario instanceof PropelCollection) {
            $this->collEscalaPessoasRelatedByIdUsuario->clearIterator();
        }
        $this->collEscalaPessoasRelatedByIdUsuario = null;
        if ($this->collUsuarioFuncaos instanceof PropelCollection) {
            $this->collUsuarioFuncaos->clearIterator();
        }
        $this->collUsuarioFuncaos = null;
        if ($this->collUsuarioMinisterios instanceof PropelCollection) {
            $this->collUsuarioMinisterios->clearIterator();
        }
        $this->collUsuarioMinisterios = null;
        $this->aBandaRelatedByIdBanda = null;
        $this->aMinisterio = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(UsuarioPeer::DEFAULT_STRING_FORMAT);
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
