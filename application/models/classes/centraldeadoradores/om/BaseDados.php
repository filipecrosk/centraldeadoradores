<?php


/**
 * Base class that represents a row from the 'dados' table.
 *
 *
 *
 * @package    propel.generator.centraldeadoradores.om
 */
abstract class BaseDados extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'DadosPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        DadosPeer
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
     * The value for the estaemcelula field.
     * @var        string
     */
    protected $estaemcelula;

    /**
     * The value for the diacelula field.
     * Note: this column has a database default value of: -1
     * @var        int
     */
    protected $diacelula;

    /**
     * The value for the horacelula field.
     * Note: this column has a database default value of: -1
     * @var        int
     */
    protected $horacelula;

    /**
     * The value for the minutocelula field.
     * Note: this column has a database default value of: -1
     * @var        int
     */
    protected $minutocelula;

    /**
     * The value for the periodocelula field.
     * Note: this column has a database default value of: -1
     * @var        int
     */
    protected $periodocelula;

    /**
     * The value for the coordenador field.
     * @var        string
     */
    protected $coordenador;

    /**
     * The value for the diacoordenador field.
     * Note: this column has a database default value of: -1
     * @var        int
     */
    protected $diacoordenador;

    /**
     * The value for the frequenciacoordenador field.
     * Note: this column has a database default value of: -1
     * @var        int
     */
    protected $frequenciacoordenador;

    /**
     * The value for the horacoordenador field.
     * Note: this column has a database default value of: -1
     * @var        int
     */
    protected $horacoordenador;

    /**
     * The value for the minutocoordenador field.
     * Note: this column has a database default value of: -1
     * @var        int
     */
    protected $minutocoordenador;

    /**
     * The value for the periodocoordenador field.
     * Note: this column has a database default value of: -1
     * @var        int
     */
    protected $periodocoordenador;

    /**
     * The value for the discipulador field.
     * @var        string
     */
    protected $discipulador;

    /**
     * The value for the diadiscipulador field.
     * Note: this column has a database default value of: -1
     * @var        int
     */
    protected $diadiscipulador;

    /**
     * The value for the frequenciadiscipulador field.
     * Note: this column has a database default value of: -1
     * @var        int
     */
    protected $frequenciadiscipulador;

    /**
     * The value for the horadiscipulador field.
     * Note: this column has a database default value of: -1
     * @var        int
     */
    protected $horadiscipulador;

    /**
     * The value for the minutodiscipulador field.
     * Note: this column has a database default value of: -1
     * @var        int
     */
    protected $minutodiscipulador;

    /**
     * The value for the periododiscipulador field.
     * Note: this column has a database default value of: -1
     * @var        int
     */
    protected $periododiscipulador;

    /**
     * The value for the lider field.
     * @var        string
     */
    protected $lider;

    /**
     * The value for the nomelider field.
     * @var        string
     */
    protected $nomelider;

    /**
     * The value for the lidertreinamento field.
     * Note: this column has a database default value of: 'b\'0\''
     * @var        string
     */
    protected $lidertreinamento;

    /**
     * The value for the dialider field.
     * Note: this column has a database default value of: -1
     * @var        int
     */
    protected $dialider;

    /**
     * The value for the frequencialider field.
     * Note: this column has a database default value of: -1
     * @var        int
     */
    protected $frequencialider;

    /**
     * The value for the horalider field.
     * Note: this column has a database default value of: -1
     * @var        int
     */
    protected $horalider;

    /**
     * The value for the minutolider field.
     * Note: this column has a database default value of: -1
     * @var        int
     */
    protected $minutolider;

    /**
     * The value for the periodolider field.
     * Note: this column has a database default value of: -1
     * @var        int
     */
    protected $periodolider;

    /**
     * The value for the ccm field.
     * @var        string
     */
    protected $ccm;

    /**
     * The value for the diaccm field.
     * Note: this column has a database default value of: -1
     * @var        int
     */
    protected $diaccm;

    /**
     * The value for the horaccm field.
     * Note: this column has a database default value of: -1
     * @var        int
     */
    protected $horaccm;

    /**
     * The value for the minutoccm field.
     * Note: this column has a database default value of: -1
     * @var        int
     */
    protected $minutoccm;

    /**
     * The value for the periodoccm field.
     * Note: this column has a database default value of: -1
     * @var        int
     */
    protected $periodoccm;

    /**
     * The value for the manhadomingo field.
     * Note: this column has a database default value of: 'b\'0\''
     * @var        string
     */
    protected $manhadomingo;

    /**
     * The value for the manhasegunda field.
     * Note: this column has a database default value of: 'b\'0\''
     * @var        string
     */
    protected $manhasegunda;

    /**
     * The value for the manhaterca field.
     * Note: this column has a database default value of: 'b\'0\''
     * @var        string
     */
    protected $manhaterca;

    /**
     * The value for the manhaquarta field.
     * Note: this column has a database default value of: 'b\'0\''
     * @var        string
     */
    protected $manhaquarta;

    /**
     * The value for the manhaquinta field.
     * Note: this column has a database default value of: 'b\'0\''
     * @var        string
     */
    protected $manhaquinta;

    /**
     * The value for the manhasexta field.
     * Note: this column has a database default value of: 'b\'0\''
     * @var        string
     */
    protected $manhasexta;

    /**
     * The value for the manhasabado field.
     * Note: this column has a database default value of: 'b\'0\''
     * @var        string
     */
    protected $manhasabado;

    /**
     * The value for the tardedomingo field.
     * Note: this column has a database default value of: 'b\'0\''
     * @var        string
     */
    protected $tardedomingo;

    /**
     * The value for the tardesegunda field.
     * Note: this column has a database default value of: 'b\'0\''
     * @var        string
     */
    protected $tardesegunda;

    /**
     * The value for the tardeterca field.
     * Note: this column has a database default value of: 'b\'0\''
     * @var        string
     */
    protected $tardeterca;

    /**
     * The value for the tardequarta field.
     * Note: this column has a database default value of: 'b\'0\''
     * @var        string
     */
    protected $tardequarta;

    /**
     * The value for the tardequinta field.
     * Note: this column has a database default value of: 'b\'0\''
     * @var        string
     */
    protected $tardequinta;

    /**
     * The value for the tardesexta field.
     * Note: this column has a database default value of: 'b\'0\''
     * @var        string
     */
    protected $tardesexta;

    /**
     * The value for the tardesabado field.
     * Note: this column has a database default value of: 'b\'0\''
     * @var        string
     */
    protected $tardesabado;

    /**
     * The value for the noitedomingo field.
     * Note: this column has a database default value of: 'b\'0\''
     * @var        string
     */
    protected $noitedomingo;

    /**
     * The value for the noitesegunda field.
     * Note: this column has a database default value of: 'b\'0\''
     * @var        string
     */
    protected $noitesegunda;

    /**
     * The value for the noiteterca field.
     * Note: this column has a database default value of: 'b\'0\''
     * @var        string
     */
    protected $noiteterca;

    /**
     * The value for the noitequarta field.
     * Note: this column has a database default value of: 'b\'0\''
     * @var        string
     */
    protected $noitequarta;

    /**
     * The value for the noitequinta field.
     * Note: this column has a database default value of: 'b\'0\''
     * @var        string
     */
    protected $noitequinta;

    /**
     * The value for the noitesexta field.
     * Note: this column has a database default value of: 'b\'0\''
     * @var        string
     */
    protected $noitesexta;

    /**
     * The value for the noitesabado field.
     * Note: this column has a database default value of: 'b\'0\''
     * @var        string
     */
    protected $noitesabado;

    /**
     * The value for the observacao field.
     * @var        string
     */
    protected $observacao;

    /**
     * The value for the id_usuario field.
     * @var        int
     */
    protected $id_usuario;

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
        $this->diacelula = -1;
        $this->horacelula = -1;
        $this->minutocelula = -1;
        $this->periodocelula = -1;
        $this->diacoordenador = -1;
        $this->frequenciacoordenador = -1;
        $this->horacoordenador = -1;
        $this->minutocoordenador = -1;
        $this->periodocoordenador = -1;
        $this->diadiscipulador = -1;
        $this->frequenciadiscipulador = -1;
        $this->horadiscipulador = -1;
        $this->minutodiscipulador = -1;
        $this->periododiscipulador = -1;
        $this->lidertreinamento = 'b\'0\'';
        $this->dialider = -1;
        $this->frequencialider = -1;
        $this->horalider = -1;
        $this->minutolider = -1;
        $this->periodolider = -1;
        $this->diaccm = -1;
        $this->horaccm = -1;
        $this->minutoccm = -1;
        $this->periodoccm = -1;
        $this->manhadomingo = 'b\'0\'';
        $this->manhasegunda = 'b\'0\'';
        $this->manhaterca = 'b\'0\'';
        $this->manhaquarta = 'b\'0\'';
        $this->manhaquinta = 'b\'0\'';
        $this->manhasexta = 'b\'0\'';
        $this->manhasabado = 'b\'0\'';
        $this->tardedomingo = 'b\'0\'';
        $this->tardesegunda = 'b\'0\'';
        $this->tardeterca = 'b\'0\'';
        $this->tardequarta = 'b\'0\'';
        $this->tardequinta = 'b\'0\'';
        $this->tardesexta = 'b\'0\'';
        $this->tardesabado = 'b\'0\'';
        $this->noitedomingo = 'b\'0\'';
        $this->noitesegunda = 'b\'0\'';
        $this->noiteterca = 'b\'0\'';
        $this->noitequarta = 'b\'0\'';
        $this->noitequinta = 'b\'0\'';
        $this->noitesexta = 'b\'0\'';
        $this->noitesabado = 'b\'0\'';
    }

    /**
     * Initializes internal state of BaseDados object.
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
     * Get the [estaemcelula] column value.
     *
     * @return string
     */
    public function getEstaemcelula()
    {
        return $this->estaemcelula;
    }

    /**
     * Get the [diacelula] column value.
     *
     * @return int
     */
    public function getDiacelula()
    {
        return $this->diacelula;
    }

    /**
     * Get the [horacelula] column value.
     *
     * @return int
     */
    public function getHoracelula()
    {
        return $this->horacelula;
    }

    /**
     * Get the [minutocelula] column value.
     *
     * @return int
     */
    public function getMinutocelula()
    {
        return $this->minutocelula;
    }

    /**
     * Get the [periodocelula] column value.
     *
     * @return int
     */
    public function getPeriodocelula()
    {
        return $this->periodocelula;
    }

    /**
     * Get the [coordenador] column value.
     *
     * @return string
     */
    public function getCoordenador()
    {
        return $this->coordenador;
    }

    /**
     * Get the [diacoordenador] column value.
     *
     * @return int
     */
    public function getDiacoordenador()
    {
        return $this->diacoordenador;
    }

    /**
     * Get the [frequenciacoordenador] column value.
     *
     * @return int
     */
    public function getFrequenciacoordenador()
    {
        return $this->frequenciacoordenador;
    }

    /**
     * Get the [horacoordenador] column value.
     *
     * @return int
     */
    public function getHoracoordenador()
    {
        return $this->horacoordenador;
    }

    /**
     * Get the [minutocoordenador] column value.
     *
     * @return int
     */
    public function getMinutocoordenador()
    {
        return $this->minutocoordenador;
    }

    /**
     * Get the [periodocoordenador] column value.
     *
     * @return int
     */
    public function getPeriodocoordenador()
    {
        return $this->periodocoordenador;
    }

    /**
     * Get the [discipulador] column value.
     *
     * @return string
     */
    public function getDiscipulador()
    {
        return $this->discipulador;
    }

    /**
     * Get the [diadiscipulador] column value.
     *
     * @return int
     */
    public function getDiadiscipulador()
    {
        return $this->diadiscipulador;
    }

    /**
     * Get the [frequenciadiscipulador] column value.
     *
     * @return int
     */
    public function getFrequenciadiscipulador()
    {
        return $this->frequenciadiscipulador;
    }

    /**
     * Get the [horadiscipulador] column value.
     *
     * @return int
     */
    public function getHoradiscipulador()
    {
        return $this->horadiscipulador;
    }

    /**
     * Get the [minutodiscipulador] column value.
     *
     * @return int
     */
    public function getMinutodiscipulador()
    {
        return $this->minutodiscipulador;
    }

    /**
     * Get the [periododiscipulador] column value.
     *
     * @return int
     */
    public function getPeriododiscipulador()
    {
        return $this->periododiscipulador;
    }

    /**
     * Get the [lider] column value.
     *
     * @return string
     */
    public function getLider()
    {
        return $this->lider;
    }

    /**
     * Get the [nomelider] column value.
     *
     * @return string
     */
    public function getNomelider()
    {
        return $this->nomelider;
    }

    /**
     * Get the [lidertreinamento] column value.
     *
     * @return string
     */
    public function getLidertreinamento()
    {
        return $this->lidertreinamento;
    }

    /**
     * Get the [dialider] column value.
     *
     * @return int
     */
    public function getDialider()
    {
        return $this->dialider;
    }

    /**
     * Get the [frequencialider] column value.
     *
     * @return int
     */
    public function getFrequencialider()
    {
        return $this->frequencialider;
    }

    /**
     * Get the [horalider] column value.
     *
     * @return int
     */
    public function getHoralider()
    {
        return $this->horalider;
    }

    /**
     * Get the [minutolider] column value.
     *
     * @return int
     */
    public function getMinutolider()
    {
        return $this->minutolider;
    }

    /**
     * Get the [periodolider] column value.
     *
     * @return int
     */
    public function getPeriodolider()
    {
        return $this->periodolider;
    }

    /**
     * Get the [ccm] column value.
     *
     * @return string
     */
    public function getCcm()
    {
        return $this->ccm;
    }

    /**
     * Get the [diaccm] column value.
     *
     * @return int
     */
    public function getDiaccm()
    {
        return $this->diaccm;
    }

    /**
     * Get the [horaccm] column value.
     *
     * @return int
     */
    public function getHoraccm()
    {
        return $this->horaccm;
    }

    /**
     * Get the [minutoccm] column value.
     *
     * @return int
     */
    public function getMinutoccm()
    {
        return $this->minutoccm;
    }

    /**
     * Get the [periodoccm] column value.
     *
     * @return int
     */
    public function getPeriodoccm()
    {
        return $this->periodoccm;
    }

    /**
     * Get the [manhadomingo] column value.
     *
     * @return string
     */
    public function getManhadomingo()
    {
        return $this->manhadomingo;
    }

    /**
     * Get the [manhasegunda] column value.
     *
     * @return string
     */
    public function getManhasegunda()
    {
        return $this->manhasegunda;
    }

    /**
     * Get the [manhaterca] column value.
     *
     * @return string
     */
    public function getManhaterca()
    {
        return $this->manhaterca;
    }

    /**
     * Get the [manhaquarta] column value.
     *
     * @return string
     */
    public function getManhaquarta()
    {
        return $this->manhaquarta;
    }

    /**
     * Get the [manhaquinta] column value.
     *
     * @return string
     */
    public function getManhaquinta()
    {
        return $this->manhaquinta;
    }

    /**
     * Get the [manhasexta] column value.
     *
     * @return string
     */
    public function getManhasexta()
    {
        return $this->manhasexta;
    }

    /**
     * Get the [manhasabado] column value.
     *
     * @return string
     */
    public function getManhasabado()
    {
        return $this->manhasabado;
    }

    /**
     * Get the [tardedomingo] column value.
     *
     * @return string
     */
    public function getTardedomingo()
    {
        return $this->tardedomingo;
    }

    /**
     * Get the [tardesegunda] column value.
     *
     * @return string
     */
    public function getTardesegunda()
    {
        return $this->tardesegunda;
    }

    /**
     * Get the [tardeterca] column value.
     *
     * @return string
     */
    public function getTardeterca()
    {
        return $this->tardeterca;
    }

    /**
     * Get the [tardequarta] column value.
     *
     * @return string
     */
    public function getTardequarta()
    {
        return $this->tardequarta;
    }

    /**
     * Get the [tardequinta] column value.
     *
     * @return string
     */
    public function getTardequinta()
    {
        return $this->tardequinta;
    }

    /**
     * Get the [tardesexta] column value.
     *
     * @return string
     */
    public function getTardesexta()
    {
        return $this->tardesexta;
    }

    /**
     * Get the [tardesabado] column value.
     *
     * @return string
     */
    public function getTardesabado()
    {
        return $this->tardesabado;
    }

    /**
     * Get the [noitedomingo] column value.
     *
     * @return string
     */
    public function getNoitedomingo()
    {
        return $this->noitedomingo;
    }

    /**
     * Get the [noitesegunda] column value.
     *
     * @return string
     */
    public function getNoitesegunda()
    {
        return $this->noitesegunda;
    }

    /**
     * Get the [noiteterca] column value.
     *
     * @return string
     */
    public function getNoiteterca()
    {
        return $this->noiteterca;
    }

    /**
     * Get the [noitequarta] column value.
     *
     * @return string
     */
    public function getNoitequarta()
    {
        return $this->noitequarta;
    }

    /**
     * Get the [noitequinta] column value.
     *
     * @return string
     */
    public function getNoitequinta()
    {
        return $this->noitequinta;
    }

    /**
     * Get the [noitesexta] column value.
     *
     * @return string
     */
    public function getNoitesexta()
    {
        return $this->noitesexta;
    }

    /**
     * Get the [noitesabado] column value.
     *
     * @return string
     */
    public function getNoitesabado()
    {
        return $this->noitesabado;
    }

    /**
     * Get the [observacao] column value.
     *
     * @return string
     */
    public function getObservacao()
    {
        return $this->observacao;
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
     * Set the value of [id] column.
     *
     * @param int $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = DadosPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [estaemcelula] column.
     *
     * @param string $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setEstaemcelula($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->estaemcelula !== $v) {
            $this->estaemcelula = $v;
            $this->modifiedColumns[] = DadosPeer::ESTAEMCELULA;
        }


        return $this;
    } // setEstaemcelula()

    /**
     * Set the value of [diacelula] column.
     *
     * @param int $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setDiacelula($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->diacelula !== $v) {
            $this->diacelula = $v;
            $this->modifiedColumns[] = DadosPeer::DIACELULA;
        }


        return $this;
    } // setDiacelula()

    /**
     * Set the value of [horacelula] column.
     *
     * @param int $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setHoracelula($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->horacelula !== $v) {
            $this->horacelula = $v;
            $this->modifiedColumns[] = DadosPeer::HORACELULA;
        }


        return $this;
    } // setHoracelula()

    /**
     * Set the value of [minutocelula] column.
     *
     * @param int $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setMinutocelula($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->minutocelula !== $v) {
            $this->minutocelula = $v;
            $this->modifiedColumns[] = DadosPeer::MINUTOCELULA;
        }


        return $this;
    } // setMinutocelula()

    /**
     * Set the value of [periodocelula] column.
     *
     * @param int $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setPeriodocelula($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->periodocelula !== $v) {
            $this->periodocelula = $v;
            $this->modifiedColumns[] = DadosPeer::PERIODOCELULA;
        }


        return $this;
    } // setPeriodocelula()

    /**
     * Set the value of [coordenador] column.
     *
     * @param string $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setCoordenador($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->coordenador !== $v) {
            $this->coordenador = $v;
            $this->modifiedColumns[] = DadosPeer::COORDENADOR;
        }


        return $this;
    } // setCoordenador()

    /**
     * Set the value of [diacoordenador] column.
     *
     * @param int $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setDiacoordenador($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->diacoordenador !== $v) {
            $this->diacoordenador = $v;
            $this->modifiedColumns[] = DadosPeer::DIACOORDENADOR;
        }


        return $this;
    } // setDiacoordenador()

    /**
     * Set the value of [frequenciacoordenador] column.
     *
     * @param int $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setFrequenciacoordenador($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->frequenciacoordenador !== $v) {
            $this->frequenciacoordenador = $v;
            $this->modifiedColumns[] = DadosPeer::FREQUENCIACOORDENADOR;
        }


        return $this;
    } // setFrequenciacoordenador()

    /**
     * Set the value of [horacoordenador] column.
     *
     * @param int $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setHoracoordenador($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->horacoordenador !== $v) {
            $this->horacoordenador = $v;
            $this->modifiedColumns[] = DadosPeer::HORACOORDENADOR;
        }


        return $this;
    } // setHoracoordenador()

    /**
     * Set the value of [minutocoordenador] column.
     *
     * @param int $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setMinutocoordenador($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->minutocoordenador !== $v) {
            $this->minutocoordenador = $v;
            $this->modifiedColumns[] = DadosPeer::MINUTOCOORDENADOR;
        }


        return $this;
    } // setMinutocoordenador()

    /**
     * Set the value of [periodocoordenador] column.
     *
     * @param int $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setPeriodocoordenador($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->periodocoordenador !== $v) {
            $this->periodocoordenador = $v;
            $this->modifiedColumns[] = DadosPeer::PERIODOCOORDENADOR;
        }


        return $this;
    } // setPeriodocoordenador()

    /**
     * Set the value of [discipulador] column.
     *
     * @param string $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setDiscipulador($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->discipulador !== $v) {
            $this->discipulador = $v;
            $this->modifiedColumns[] = DadosPeer::DISCIPULADOR;
        }


        return $this;
    } // setDiscipulador()

    /**
     * Set the value of [diadiscipulador] column.
     *
     * @param int $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setDiadiscipulador($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->diadiscipulador !== $v) {
            $this->diadiscipulador = $v;
            $this->modifiedColumns[] = DadosPeer::DIADISCIPULADOR;
        }


        return $this;
    } // setDiadiscipulador()

    /**
     * Set the value of [frequenciadiscipulador] column.
     *
     * @param int $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setFrequenciadiscipulador($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->frequenciadiscipulador !== $v) {
            $this->frequenciadiscipulador = $v;
            $this->modifiedColumns[] = DadosPeer::FREQUENCIADISCIPULADOR;
        }


        return $this;
    } // setFrequenciadiscipulador()

    /**
     * Set the value of [horadiscipulador] column.
     *
     * @param int $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setHoradiscipulador($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->horadiscipulador !== $v) {
            $this->horadiscipulador = $v;
            $this->modifiedColumns[] = DadosPeer::HORADISCIPULADOR;
        }


        return $this;
    } // setHoradiscipulador()

    /**
     * Set the value of [minutodiscipulador] column.
     *
     * @param int $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setMinutodiscipulador($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->minutodiscipulador !== $v) {
            $this->minutodiscipulador = $v;
            $this->modifiedColumns[] = DadosPeer::MINUTODISCIPULADOR;
        }


        return $this;
    } // setMinutodiscipulador()

    /**
     * Set the value of [periododiscipulador] column.
     *
     * @param int $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setPeriododiscipulador($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->periododiscipulador !== $v) {
            $this->periododiscipulador = $v;
            $this->modifiedColumns[] = DadosPeer::PERIODODISCIPULADOR;
        }


        return $this;
    } // setPeriododiscipulador()

    /**
     * Set the value of [lider] column.
     *
     * @param string $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setLider($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lider !== $v) {
            $this->lider = $v;
            $this->modifiedColumns[] = DadosPeer::LIDER;
        }


        return $this;
    } // setLider()

    /**
     * Set the value of [nomelider] column.
     *
     * @param string $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setNomelider($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->nomelider !== $v) {
            $this->nomelider = $v;
            $this->modifiedColumns[] = DadosPeer::NOMELIDER;
        }


        return $this;
    } // setNomelider()

    /**
     * Set the value of [lidertreinamento] column.
     *
     * @param string $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setLidertreinamento($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lidertreinamento !== $v) {
            $this->lidertreinamento = $v;
            $this->modifiedColumns[] = DadosPeer::LIDERTREINAMENTO;
        }


        return $this;
    } // setLidertreinamento()

    /**
     * Set the value of [dialider] column.
     *
     * @param int $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setDialider($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->dialider !== $v) {
            $this->dialider = $v;
            $this->modifiedColumns[] = DadosPeer::DIALIDER;
        }


        return $this;
    } // setDialider()

    /**
     * Set the value of [frequencialider] column.
     *
     * @param int $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setFrequencialider($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->frequencialider !== $v) {
            $this->frequencialider = $v;
            $this->modifiedColumns[] = DadosPeer::FREQUENCIALIDER;
        }


        return $this;
    } // setFrequencialider()

    /**
     * Set the value of [horalider] column.
     *
     * @param int $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setHoralider($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->horalider !== $v) {
            $this->horalider = $v;
            $this->modifiedColumns[] = DadosPeer::HORALIDER;
        }


        return $this;
    } // setHoralider()

    /**
     * Set the value of [minutolider] column.
     *
     * @param int $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setMinutolider($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->minutolider !== $v) {
            $this->minutolider = $v;
            $this->modifiedColumns[] = DadosPeer::MINUTOLIDER;
        }


        return $this;
    } // setMinutolider()

    /**
     * Set the value of [periodolider] column.
     *
     * @param int $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setPeriodolider($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->periodolider !== $v) {
            $this->periodolider = $v;
            $this->modifiedColumns[] = DadosPeer::PERIODOLIDER;
        }


        return $this;
    } // setPeriodolider()

    /**
     * Set the value of [ccm] column.
     *
     * @param string $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setCcm($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ccm !== $v) {
            $this->ccm = $v;
            $this->modifiedColumns[] = DadosPeer::CCM;
        }


        return $this;
    } // setCcm()

    /**
     * Set the value of [diaccm] column.
     *
     * @param int $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setDiaccm($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->diaccm !== $v) {
            $this->diaccm = $v;
            $this->modifiedColumns[] = DadosPeer::DIACCM;
        }


        return $this;
    } // setDiaccm()

    /**
     * Set the value of [horaccm] column.
     *
     * @param int $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setHoraccm($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->horaccm !== $v) {
            $this->horaccm = $v;
            $this->modifiedColumns[] = DadosPeer::HORACCM;
        }


        return $this;
    } // setHoraccm()

    /**
     * Set the value of [minutoccm] column.
     *
     * @param int $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setMinutoccm($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->minutoccm !== $v) {
            $this->minutoccm = $v;
            $this->modifiedColumns[] = DadosPeer::MINUTOCCM;
        }


        return $this;
    } // setMinutoccm()

    /**
     * Set the value of [periodoccm] column.
     *
     * @param int $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setPeriodoccm($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->periodoccm !== $v) {
            $this->periodoccm = $v;
            $this->modifiedColumns[] = DadosPeer::PERIODOCCM;
        }


        return $this;
    } // setPeriodoccm()

    /**
     * Set the value of [manhadomingo] column.
     *
     * @param string $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setManhadomingo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->manhadomingo !== $v) {
            $this->manhadomingo = $v;
            $this->modifiedColumns[] = DadosPeer::MANHADOMINGO;
        }


        return $this;
    } // setManhadomingo()

    /**
     * Set the value of [manhasegunda] column.
     *
     * @param string $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setManhasegunda($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->manhasegunda !== $v) {
            $this->manhasegunda = $v;
            $this->modifiedColumns[] = DadosPeer::MANHASEGUNDA;
        }


        return $this;
    } // setManhasegunda()

    /**
     * Set the value of [manhaterca] column.
     *
     * @param string $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setManhaterca($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->manhaterca !== $v) {
            $this->manhaterca = $v;
            $this->modifiedColumns[] = DadosPeer::MANHATERCA;
        }


        return $this;
    } // setManhaterca()

    /**
     * Set the value of [manhaquarta] column.
     *
     * @param string $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setManhaquarta($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->manhaquarta !== $v) {
            $this->manhaquarta = $v;
            $this->modifiedColumns[] = DadosPeer::MANHAQUARTA;
        }


        return $this;
    } // setManhaquarta()

    /**
     * Set the value of [manhaquinta] column.
     *
     * @param string $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setManhaquinta($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->manhaquinta !== $v) {
            $this->manhaquinta = $v;
            $this->modifiedColumns[] = DadosPeer::MANHAQUINTA;
        }


        return $this;
    } // setManhaquinta()

    /**
     * Set the value of [manhasexta] column.
     *
     * @param string $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setManhasexta($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->manhasexta !== $v) {
            $this->manhasexta = $v;
            $this->modifiedColumns[] = DadosPeer::MANHASEXTA;
        }


        return $this;
    } // setManhasexta()

    /**
     * Set the value of [manhasabado] column.
     *
     * @param string $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setManhasabado($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->manhasabado !== $v) {
            $this->manhasabado = $v;
            $this->modifiedColumns[] = DadosPeer::MANHASABADO;
        }


        return $this;
    } // setManhasabado()

    /**
     * Set the value of [tardedomingo] column.
     *
     * @param string $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setTardedomingo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->tardedomingo !== $v) {
            $this->tardedomingo = $v;
            $this->modifiedColumns[] = DadosPeer::TARDEDOMINGO;
        }


        return $this;
    } // setTardedomingo()

    /**
     * Set the value of [tardesegunda] column.
     *
     * @param string $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setTardesegunda($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->tardesegunda !== $v) {
            $this->tardesegunda = $v;
            $this->modifiedColumns[] = DadosPeer::TARDESEGUNDA;
        }


        return $this;
    } // setTardesegunda()

    /**
     * Set the value of [tardeterca] column.
     *
     * @param string $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setTardeterca($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->tardeterca !== $v) {
            $this->tardeterca = $v;
            $this->modifiedColumns[] = DadosPeer::TARDETERCA;
        }


        return $this;
    } // setTardeterca()

    /**
     * Set the value of [tardequarta] column.
     *
     * @param string $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setTardequarta($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->tardequarta !== $v) {
            $this->tardequarta = $v;
            $this->modifiedColumns[] = DadosPeer::TARDEQUARTA;
        }


        return $this;
    } // setTardequarta()

    /**
     * Set the value of [tardequinta] column.
     *
     * @param string $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setTardequinta($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->tardequinta !== $v) {
            $this->tardequinta = $v;
            $this->modifiedColumns[] = DadosPeer::TARDEQUINTA;
        }


        return $this;
    } // setTardequinta()

    /**
     * Set the value of [tardesexta] column.
     *
     * @param string $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setTardesexta($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->tardesexta !== $v) {
            $this->tardesexta = $v;
            $this->modifiedColumns[] = DadosPeer::TARDESEXTA;
        }


        return $this;
    } // setTardesexta()

    /**
     * Set the value of [tardesabado] column.
     *
     * @param string $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setTardesabado($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->tardesabado !== $v) {
            $this->tardesabado = $v;
            $this->modifiedColumns[] = DadosPeer::TARDESABADO;
        }


        return $this;
    } // setTardesabado()

    /**
     * Set the value of [noitedomingo] column.
     *
     * @param string $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setNoitedomingo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->noitedomingo !== $v) {
            $this->noitedomingo = $v;
            $this->modifiedColumns[] = DadosPeer::NOITEDOMINGO;
        }


        return $this;
    } // setNoitedomingo()

    /**
     * Set the value of [noitesegunda] column.
     *
     * @param string $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setNoitesegunda($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->noitesegunda !== $v) {
            $this->noitesegunda = $v;
            $this->modifiedColumns[] = DadosPeer::NOITESEGUNDA;
        }


        return $this;
    } // setNoitesegunda()

    /**
     * Set the value of [noiteterca] column.
     *
     * @param string $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setNoiteterca($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->noiteterca !== $v) {
            $this->noiteterca = $v;
            $this->modifiedColumns[] = DadosPeer::NOITETERCA;
        }


        return $this;
    } // setNoiteterca()

    /**
     * Set the value of [noitequarta] column.
     *
     * @param string $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setNoitequarta($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->noitequarta !== $v) {
            $this->noitequarta = $v;
            $this->modifiedColumns[] = DadosPeer::NOITEQUARTA;
        }


        return $this;
    } // setNoitequarta()

    /**
     * Set the value of [noitequinta] column.
     *
     * @param string $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setNoitequinta($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->noitequinta !== $v) {
            $this->noitequinta = $v;
            $this->modifiedColumns[] = DadosPeer::NOITEQUINTA;
        }


        return $this;
    } // setNoitequinta()

    /**
     * Set the value of [noitesexta] column.
     *
     * @param string $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setNoitesexta($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->noitesexta !== $v) {
            $this->noitesexta = $v;
            $this->modifiedColumns[] = DadosPeer::NOITESEXTA;
        }


        return $this;
    } // setNoitesexta()

    /**
     * Set the value of [noitesabado] column.
     *
     * @param string $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setNoitesabado($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->noitesabado !== $v) {
            $this->noitesabado = $v;
            $this->modifiedColumns[] = DadosPeer::NOITESABADO;
        }


        return $this;
    } // setNoitesabado()

    /**
     * Set the value of [observacao] column.
     *
     * @param string $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setObservacao($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->observacao !== $v) {
            $this->observacao = $v;
            $this->modifiedColumns[] = DadosPeer::OBSERVACAO;
        }


        return $this;
    } // setObservacao()

    /**
     * Set the value of [id_usuario] column.
     *
     * @param int $v new value
     * @return Dados The current object (for fluent API support)
     */
    public function setIdUsuario($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id_usuario !== $v) {
            $this->id_usuario = $v;
            $this->modifiedColumns[] = DadosPeer::ID_USUARIO;
        }

        if ($this->aUsuario !== null && $this->aUsuario->getId() !== $v) {
            $this->aUsuario = null;
        }


        return $this;
    } // setIdUsuario()

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
            if ($this->diacelula !== -1) {
                return false;
            }

            if ($this->horacelula !== -1) {
                return false;
            }

            if ($this->minutocelula !== -1) {
                return false;
            }

            if ($this->periodocelula !== -1) {
                return false;
            }

            if ($this->diacoordenador !== -1) {
                return false;
            }

            if ($this->frequenciacoordenador !== -1) {
                return false;
            }

            if ($this->horacoordenador !== -1) {
                return false;
            }

            if ($this->minutocoordenador !== -1) {
                return false;
            }

            if ($this->periodocoordenador !== -1) {
                return false;
            }

            if ($this->diadiscipulador !== -1) {
                return false;
            }

            if ($this->frequenciadiscipulador !== -1) {
                return false;
            }

            if ($this->horadiscipulador !== -1) {
                return false;
            }

            if ($this->minutodiscipulador !== -1) {
                return false;
            }

            if ($this->periododiscipulador !== -1) {
                return false;
            }

            if ($this->lidertreinamento !== 'b\'0\'') {
                return false;
            }

            if ($this->dialider !== -1) {
                return false;
            }

            if ($this->frequencialider !== -1) {
                return false;
            }

            if ($this->horalider !== -1) {
                return false;
            }

            if ($this->minutolider !== -1) {
                return false;
            }

            if ($this->periodolider !== -1) {
                return false;
            }

            if ($this->diaccm !== -1) {
                return false;
            }

            if ($this->horaccm !== -1) {
                return false;
            }

            if ($this->minutoccm !== -1) {
                return false;
            }

            if ($this->periodoccm !== -1) {
                return false;
            }

            if ($this->manhadomingo !== 'b\'0\'') {
                return false;
            }

            if ($this->manhasegunda !== 'b\'0\'') {
                return false;
            }

            if ($this->manhaterca !== 'b\'0\'') {
                return false;
            }

            if ($this->manhaquarta !== 'b\'0\'') {
                return false;
            }

            if ($this->manhaquinta !== 'b\'0\'') {
                return false;
            }

            if ($this->manhasexta !== 'b\'0\'') {
                return false;
            }

            if ($this->manhasabado !== 'b\'0\'') {
                return false;
            }

            if ($this->tardedomingo !== 'b\'0\'') {
                return false;
            }

            if ($this->tardesegunda !== 'b\'0\'') {
                return false;
            }

            if ($this->tardeterca !== 'b\'0\'') {
                return false;
            }

            if ($this->tardequarta !== 'b\'0\'') {
                return false;
            }

            if ($this->tardequinta !== 'b\'0\'') {
                return false;
            }

            if ($this->tardesexta !== 'b\'0\'') {
                return false;
            }

            if ($this->tardesabado !== 'b\'0\'') {
                return false;
            }

            if ($this->noitedomingo !== 'b\'0\'') {
                return false;
            }

            if ($this->noitesegunda !== 'b\'0\'') {
                return false;
            }

            if ($this->noiteterca !== 'b\'0\'') {
                return false;
            }

            if ($this->noitequarta !== 'b\'0\'') {
                return false;
            }

            if ($this->noitequinta !== 'b\'0\'') {
                return false;
            }

            if ($this->noitesexta !== 'b\'0\'') {
                return false;
            }

            if ($this->noitesabado !== 'b\'0\'') {
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
            $this->estaemcelula = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->diacelula = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->horacelula = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->minutocelula = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->periodocelula = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->coordenador = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->diacoordenador = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->frequenciacoordenador = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->horacoordenador = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->minutocoordenador = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->periodocoordenador = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->discipulador = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->diadiscipulador = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->frequenciadiscipulador = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->horadiscipulador = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->minutodiscipulador = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->periododiscipulador = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->lider = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->nomelider = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->lidertreinamento = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->dialider = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->frequencialider = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->horalider = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->minutolider = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->periodolider = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->ccm = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->diaccm = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->horaccm = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->minutoccm = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->periodoccm = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->manhadomingo = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->manhasegunda = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->manhaterca = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->manhaquarta = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->manhaquinta = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->manhasexta = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->manhasabado = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->tardedomingo = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->tardesegunda = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->tardeterca = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->tardequarta = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->tardequinta = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->tardesexta = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->tardesabado = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->noitedomingo = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->noitesegunda = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->noiteterca = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->noitequarta = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->noitequinta = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->noitesexta = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->noitesabado = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->observacao = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->id_usuario = ($row[$startcol + 53] !== null) ? (int) $row[$startcol + 53] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 54; // 54 = DadosPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Dados object", $e);
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
            $con = Propel::getConnection(DadosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = DadosPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

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
            $con = Propel::getConnection(DadosPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = DadosQuery::create()
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
            $con = Propel::getConnection(DadosPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                DadosPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = DadosPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . DadosPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(DadosPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(DadosPeer::ESTAEMCELULA)) {
            $modifiedColumns[':p' . $index++]  = '`ESTAEMCELULA`';
        }
        if ($this->isColumnModified(DadosPeer::DIACELULA)) {
            $modifiedColumns[':p' . $index++]  = '`DIACELULA`';
        }
        if ($this->isColumnModified(DadosPeer::HORACELULA)) {
            $modifiedColumns[':p' . $index++]  = '`HORACELULA`';
        }
        if ($this->isColumnModified(DadosPeer::MINUTOCELULA)) {
            $modifiedColumns[':p' . $index++]  = '`MINUTOCELULA`';
        }
        if ($this->isColumnModified(DadosPeer::PERIODOCELULA)) {
            $modifiedColumns[':p' . $index++]  = '`PERIODOCELULA`';
        }
        if ($this->isColumnModified(DadosPeer::COORDENADOR)) {
            $modifiedColumns[':p' . $index++]  = '`COORDENADOR`';
        }
        if ($this->isColumnModified(DadosPeer::DIACOORDENADOR)) {
            $modifiedColumns[':p' . $index++]  = '`DIACOORDENADOR`';
        }
        if ($this->isColumnModified(DadosPeer::FREQUENCIACOORDENADOR)) {
            $modifiedColumns[':p' . $index++]  = '`FREQUENCIACOORDENADOR`';
        }
        if ($this->isColumnModified(DadosPeer::HORACOORDENADOR)) {
            $modifiedColumns[':p' . $index++]  = '`HORACOORDENADOR`';
        }
        if ($this->isColumnModified(DadosPeer::MINUTOCOORDENADOR)) {
            $modifiedColumns[':p' . $index++]  = '`MINUTOCOORDENADOR`';
        }
        if ($this->isColumnModified(DadosPeer::PERIODOCOORDENADOR)) {
            $modifiedColumns[':p' . $index++]  = '`PERIODOCOORDENADOR`';
        }
        if ($this->isColumnModified(DadosPeer::DISCIPULADOR)) {
            $modifiedColumns[':p' . $index++]  = '`DISCIPULADOR`';
        }
        if ($this->isColumnModified(DadosPeer::DIADISCIPULADOR)) {
            $modifiedColumns[':p' . $index++]  = '`DIADISCIPULADOR`';
        }
        if ($this->isColumnModified(DadosPeer::FREQUENCIADISCIPULADOR)) {
            $modifiedColumns[':p' . $index++]  = '`FREQUENCIADISCIPULADOR`';
        }
        if ($this->isColumnModified(DadosPeer::HORADISCIPULADOR)) {
            $modifiedColumns[':p' . $index++]  = '`HORADISCIPULADOR`';
        }
        if ($this->isColumnModified(DadosPeer::MINUTODISCIPULADOR)) {
            $modifiedColumns[':p' . $index++]  = '`MINUTODISCIPULADOR`';
        }
        if ($this->isColumnModified(DadosPeer::PERIODODISCIPULADOR)) {
            $modifiedColumns[':p' . $index++]  = '`PERIODODISCIPULADOR`';
        }
        if ($this->isColumnModified(DadosPeer::LIDER)) {
            $modifiedColumns[':p' . $index++]  = '`LIDER`';
        }
        if ($this->isColumnModified(DadosPeer::NOMELIDER)) {
            $modifiedColumns[':p' . $index++]  = '`NOMELIDER`';
        }
        if ($this->isColumnModified(DadosPeer::LIDERTREINAMENTO)) {
            $modifiedColumns[':p' . $index++]  = '`LIDERTREINAMENTO`';
        }
        if ($this->isColumnModified(DadosPeer::DIALIDER)) {
            $modifiedColumns[':p' . $index++]  = '`DIALIDER`';
        }
        if ($this->isColumnModified(DadosPeer::FREQUENCIALIDER)) {
            $modifiedColumns[':p' . $index++]  = '`FREQUENCIALIDER`';
        }
        if ($this->isColumnModified(DadosPeer::HORALIDER)) {
            $modifiedColumns[':p' . $index++]  = '`HORALIDER`';
        }
        if ($this->isColumnModified(DadosPeer::MINUTOLIDER)) {
            $modifiedColumns[':p' . $index++]  = '`MINUTOLIDER`';
        }
        if ($this->isColumnModified(DadosPeer::PERIODOLIDER)) {
            $modifiedColumns[':p' . $index++]  = '`PERIODOLIDER`';
        }
        if ($this->isColumnModified(DadosPeer::CCM)) {
            $modifiedColumns[':p' . $index++]  = '`CCM`';
        }
        if ($this->isColumnModified(DadosPeer::DIACCM)) {
            $modifiedColumns[':p' . $index++]  = '`DIACCM`';
        }
        if ($this->isColumnModified(DadosPeer::HORACCM)) {
            $modifiedColumns[':p' . $index++]  = '`HORACCM`';
        }
        if ($this->isColumnModified(DadosPeer::MINUTOCCM)) {
            $modifiedColumns[':p' . $index++]  = '`MINUTOCCM`';
        }
        if ($this->isColumnModified(DadosPeer::PERIODOCCM)) {
            $modifiedColumns[':p' . $index++]  = '`PERIODOCCM`';
        }
        if ($this->isColumnModified(DadosPeer::MANHADOMINGO)) {
            $modifiedColumns[':p' . $index++]  = '`MANHADOMINGO`';
        }
        if ($this->isColumnModified(DadosPeer::MANHASEGUNDA)) {
            $modifiedColumns[':p' . $index++]  = '`MANHASEGUNDA`';
        }
        if ($this->isColumnModified(DadosPeer::MANHATERCA)) {
            $modifiedColumns[':p' . $index++]  = '`MANHATERCA`';
        }
        if ($this->isColumnModified(DadosPeer::MANHAQUARTA)) {
            $modifiedColumns[':p' . $index++]  = '`MANHAQUARTA`';
        }
        if ($this->isColumnModified(DadosPeer::MANHAQUINTA)) {
            $modifiedColumns[':p' . $index++]  = '`MANHAQUINTA`';
        }
        if ($this->isColumnModified(DadosPeer::MANHASEXTA)) {
            $modifiedColumns[':p' . $index++]  = '`MANHASEXTA`';
        }
        if ($this->isColumnModified(DadosPeer::MANHASABADO)) {
            $modifiedColumns[':p' . $index++]  = '`MANHASABADO`';
        }
        if ($this->isColumnModified(DadosPeer::TARDEDOMINGO)) {
            $modifiedColumns[':p' . $index++]  = '`TARDEDOMINGO`';
        }
        if ($this->isColumnModified(DadosPeer::TARDESEGUNDA)) {
            $modifiedColumns[':p' . $index++]  = '`TARDESEGUNDA`';
        }
        if ($this->isColumnModified(DadosPeer::TARDETERCA)) {
            $modifiedColumns[':p' . $index++]  = '`TARDETERCA`';
        }
        if ($this->isColumnModified(DadosPeer::TARDEQUARTA)) {
            $modifiedColumns[':p' . $index++]  = '`TARDEQUARTA`';
        }
        if ($this->isColumnModified(DadosPeer::TARDEQUINTA)) {
            $modifiedColumns[':p' . $index++]  = '`TARDEQUINTA`';
        }
        if ($this->isColumnModified(DadosPeer::TARDESEXTA)) {
            $modifiedColumns[':p' . $index++]  = '`TARDESEXTA`';
        }
        if ($this->isColumnModified(DadosPeer::TARDESABADO)) {
            $modifiedColumns[':p' . $index++]  = '`TARDESABADO`';
        }
        if ($this->isColumnModified(DadosPeer::NOITEDOMINGO)) {
            $modifiedColumns[':p' . $index++]  = '`NOITEDOMINGO`';
        }
        if ($this->isColumnModified(DadosPeer::NOITESEGUNDA)) {
            $modifiedColumns[':p' . $index++]  = '`NOITESEGUNDA`';
        }
        if ($this->isColumnModified(DadosPeer::NOITETERCA)) {
            $modifiedColumns[':p' . $index++]  = '`NOITETERCA`';
        }
        if ($this->isColumnModified(DadosPeer::NOITEQUARTA)) {
            $modifiedColumns[':p' . $index++]  = '`NOITEQUARTA`';
        }
        if ($this->isColumnModified(DadosPeer::NOITEQUINTA)) {
            $modifiedColumns[':p' . $index++]  = '`NOITEQUINTA`';
        }
        if ($this->isColumnModified(DadosPeer::NOITESEXTA)) {
            $modifiedColumns[':p' . $index++]  = '`NOITESEXTA`';
        }
        if ($this->isColumnModified(DadosPeer::NOITESABADO)) {
            $modifiedColumns[':p' . $index++]  = '`NOITESABADO`';
        }
        if ($this->isColumnModified(DadosPeer::OBSERVACAO)) {
            $modifiedColumns[':p' . $index++]  = '`OBSERVACAO`';
        }
        if ($this->isColumnModified(DadosPeer::ID_USUARIO)) {
            $modifiedColumns[':p' . $index++]  = '`ID_USUARIO`';
        }

        $sql = sprintf(
            'INSERT INTO `dados` (%s) VALUES (%s)',
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
                    case '`ESTAEMCELULA`':
                        $stmt->bindValue($identifier, $this->estaemcelula, PDO::PARAM_STR);
                        break;
                    case '`DIACELULA`':
                        $stmt->bindValue($identifier, $this->diacelula, PDO::PARAM_INT);
                        break;
                    case '`HORACELULA`':
                        $stmt->bindValue($identifier, $this->horacelula, PDO::PARAM_INT);
                        break;
                    case '`MINUTOCELULA`':
                        $stmt->bindValue($identifier, $this->minutocelula, PDO::PARAM_INT);
                        break;
                    case '`PERIODOCELULA`':
                        $stmt->bindValue($identifier, $this->periodocelula, PDO::PARAM_INT);
                        break;
                    case '`COORDENADOR`':
                        $stmt->bindValue($identifier, $this->coordenador, PDO::PARAM_STR);
                        break;
                    case '`DIACOORDENADOR`':
                        $stmt->bindValue($identifier, $this->diacoordenador, PDO::PARAM_INT);
                        break;
                    case '`FREQUENCIACOORDENADOR`':
                        $stmt->bindValue($identifier, $this->frequenciacoordenador, PDO::PARAM_INT);
                        break;
                    case '`HORACOORDENADOR`':
                        $stmt->bindValue($identifier, $this->horacoordenador, PDO::PARAM_INT);
                        break;
                    case '`MINUTOCOORDENADOR`':
                        $stmt->bindValue($identifier, $this->minutocoordenador, PDO::PARAM_INT);
                        break;
                    case '`PERIODOCOORDENADOR`':
                        $stmt->bindValue($identifier, $this->periodocoordenador, PDO::PARAM_INT);
                        break;
                    case '`DISCIPULADOR`':
                        $stmt->bindValue($identifier, $this->discipulador, PDO::PARAM_STR);
                        break;
                    case '`DIADISCIPULADOR`':
                        $stmt->bindValue($identifier, $this->diadiscipulador, PDO::PARAM_INT);
                        break;
                    case '`FREQUENCIADISCIPULADOR`':
                        $stmt->bindValue($identifier, $this->frequenciadiscipulador, PDO::PARAM_INT);
                        break;
                    case '`HORADISCIPULADOR`':
                        $stmt->bindValue($identifier, $this->horadiscipulador, PDO::PARAM_INT);
                        break;
                    case '`MINUTODISCIPULADOR`':
                        $stmt->bindValue($identifier, $this->minutodiscipulador, PDO::PARAM_INT);
                        break;
                    case '`PERIODODISCIPULADOR`':
                        $stmt->bindValue($identifier, $this->periododiscipulador, PDO::PARAM_INT);
                        break;
                    case '`LIDER`':
                        $stmt->bindValue($identifier, $this->lider, PDO::PARAM_STR);
                        break;
                    case '`NOMELIDER`':
                        $stmt->bindValue($identifier, $this->nomelider, PDO::PARAM_STR);
                        break;
                    case '`LIDERTREINAMENTO`':
                        $stmt->bindValue($identifier, $this->lidertreinamento, PDO::PARAM_STR);
                        break;
                    case '`DIALIDER`':
                        $stmt->bindValue($identifier, $this->dialider, PDO::PARAM_INT);
                        break;
                    case '`FREQUENCIALIDER`':
                        $stmt->bindValue($identifier, $this->frequencialider, PDO::PARAM_INT);
                        break;
                    case '`HORALIDER`':
                        $stmt->bindValue($identifier, $this->horalider, PDO::PARAM_INT);
                        break;
                    case '`MINUTOLIDER`':
                        $stmt->bindValue($identifier, $this->minutolider, PDO::PARAM_INT);
                        break;
                    case '`PERIODOLIDER`':
                        $stmt->bindValue($identifier, $this->periodolider, PDO::PARAM_INT);
                        break;
                    case '`CCM`':
                        $stmt->bindValue($identifier, $this->ccm, PDO::PARAM_STR);
                        break;
                    case '`DIACCM`':
                        $stmt->bindValue($identifier, $this->diaccm, PDO::PARAM_INT);
                        break;
                    case '`HORACCM`':
                        $stmt->bindValue($identifier, $this->horaccm, PDO::PARAM_INT);
                        break;
                    case '`MINUTOCCM`':
                        $stmt->bindValue($identifier, $this->minutoccm, PDO::PARAM_INT);
                        break;
                    case '`PERIODOCCM`':
                        $stmt->bindValue($identifier, $this->periodoccm, PDO::PARAM_INT);
                        break;
                    case '`MANHADOMINGO`':
                        $stmt->bindValue($identifier, $this->manhadomingo, PDO::PARAM_STR);
                        break;
                    case '`MANHASEGUNDA`':
                        $stmt->bindValue($identifier, $this->manhasegunda, PDO::PARAM_STR);
                        break;
                    case '`MANHATERCA`':
                        $stmt->bindValue($identifier, $this->manhaterca, PDO::PARAM_STR);
                        break;
                    case '`MANHAQUARTA`':
                        $stmt->bindValue($identifier, $this->manhaquarta, PDO::PARAM_STR);
                        break;
                    case '`MANHAQUINTA`':
                        $stmt->bindValue($identifier, $this->manhaquinta, PDO::PARAM_STR);
                        break;
                    case '`MANHASEXTA`':
                        $stmt->bindValue($identifier, $this->manhasexta, PDO::PARAM_STR);
                        break;
                    case '`MANHASABADO`':
                        $stmt->bindValue($identifier, $this->manhasabado, PDO::PARAM_STR);
                        break;
                    case '`TARDEDOMINGO`':
                        $stmt->bindValue($identifier, $this->tardedomingo, PDO::PARAM_STR);
                        break;
                    case '`TARDESEGUNDA`':
                        $stmt->bindValue($identifier, $this->tardesegunda, PDO::PARAM_STR);
                        break;
                    case '`TARDETERCA`':
                        $stmt->bindValue($identifier, $this->tardeterca, PDO::PARAM_STR);
                        break;
                    case '`TARDEQUARTA`':
                        $stmt->bindValue($identifier, $this->tardequarta, PDO::PARAM_STR);
                        break;
                    case '`TARDEQUINTA`':
                        $stmt->bindValue($identifier, $this->tardequinta, PDO::PARAM_STR);
                        break;
                    case '`TARDESEXTA`':
                        $stmt->bindValue($identifier, $this->tardesexta, PDO::PARAM_STR);
                        break;
                    case '`TARDESABADO`':
                        $stmt->bindValue($identifier, $this->tardesabado, PDO::PARAM_STR);
                        break;
                    case '`NOITEDOMINGO`':
                        $stmt->bindValue($identifier, $this->noitedomingo, PDO::PARAM_STR);
                        break;
                    case '`NOITESEGUNDA`':
                        $stmt->bindValue($identifier, $this->noitesegunda, PDO::PARAM_STR);
                        break;
                    case '`NOITETERCA`':
                        $stmt->bindValue($identifier, $this->noiteterca, PDO::PARAM_STR);
                        break;
                    case '`NOITEQUARTA`':
                        $stmt->bindValue($identifier, $this->noitequarta, PDO::PARAM_STR);
                        break;
                    case '`NOITEQUINTA`':
                        $stmt->bindValue($identifier, $this->noitequinta, PDO::PARAM_STR);
                        break;
                    case '`NOITESEXTA`':
                        $stmt->bindValue($identifier, $this->noitesexta, PDO::PARAM_STR);
                        break;
                    case '`NOITESABADO`':
                        $stmt->bindValue($identifier, $this->noitesabado, PDO::PARAM_STR);
                        break;
                    case '`OBSERVACAO`':
                        $stmt->bindValue($identifier, $this->observacao, PDO::PARAM_STR);
                        break;
                    case '`ID_USUARIO`':
                        $stmt->bindValue($identifier, $this->id_usuario, PDO::PARAM_INT);
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

            if ($this->aUsuario !== null) {
                if (!$this->aUsuario->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUsuario->getValidationFailures());
                }
            }


            if (($retval = DadosPeer::doValidate($this, $columns)) !== true) {
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
        $pos = DadosPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getEstaemcelula();
                break;
            case 2:
                return $this->getDiacelula();
                break;
            case 3:
                return $this->getHoracelula();
                break;
            case 4:
                return $this->getMinutocelula();
                break;
            case 5:
                return $this->getPeriodocelula();
                break;
            case 6:
                return $this->getCoordenador();
                break;
            case 7:
                return $this->getDiacoordenador();
                break;
            case 8:
                return $this->getFrequenciacoordenador();
                break;
            case 9:
                return $this->getHoracoordenador();
                break;
            case 10:
                return $this->getMinutocoordenador();
                break;
            case 11:
                return $this->getPeriodocoordenador();
                break;
            case 12:
                return $this->getDiscipulador();
                break;
            case 13:
                return $this->getDiadiscipulador();
                break;
            case 14:
                return $this->getFrequenciadiscipulador();
                break;
            case 15:
                return $this->getHoradiscipulador();
                break;
            case 16:
                return $this->getMinutodiscipulador();
                break;
            case 17:
                return $this->getPeriododiscipulador();
                break;
            case 18:
                return $this->getLider();
                break;
            case 19:
                return $this->getNomelider();
                break;
            case 20:
                return $this->getLidertreinamento();
                break;
            case 21:
                return $this->getDialider();
                break;
            case 22:
                return $this->getFrequencialider();
                break;
            case 23:
                return $this->getHoralider();
                break;
            case 24:
                return $this->getMinutolider();
                break;
            case 25:
                return $this->getPeriodolider();
                break;
            case 26:
                return $this->getCcm();
                break;
            case 27:
                return $this->getDiaccm();
                break;
            case 28:
                return $this->getHoraccm();
                break;
            case 29:
                return $this->getMinutoccm();
                break;
            case 30:
                return $this->getPeriodoccm();
                break;
            case 31:
                return $this->getManhadomingo();
                break;
            case 32:
                return $this->getManhasegunda();
                break;
            case 33:
                return $this->getManhaterca();
                break;
            case 34:
                return $this->getManhaquarta();
                break;
            case 35:
                return $this->getManhaquinta();
                break;
            case 36:
                return $this->getManhasexta();
                break;
            case 37:
                return $this->getManhasabado();
                break;
            case 38:
                return $this->getTardedomingo();
                break;
            case 39:
                return $this->getTardesegunda();
                break;
            case 40:
                return $this->getTardeterca();
                break;
            case 41:
                return $this->getTardequarta();
                break;
            case 42:
                return $this->getTardequinta();
                break;
            case 43:
                return $this->getTardesexta();
                break;
            case 44:
                return $this->getTardesabado();
                break;
            case 45:
                return $this->getNoitedomingo();
                break;
            case 46:
                return $this->getNoitesegunda();
                break;
            case 47:
                return $this->getNoiteterca();
                break;
            case 48:
                return $this->getNoitequarta();
                break;
            case 49:
                return $this->getNoitequinta();
                break;
            case 50:
                return $this->getNoitesexta();
                break;
            case 51:
                return $this->getNoitesabado();
                break;
            case 52:
                return $this->getObservacao();
                break;
            case 53:
                return $this->getIdUsuario();
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
        if (isset($alreadyDumpedObjects['Dados'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Dados'][$this->getPrimaryKey()] = true;
        $keys = DadosPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getEstaemcelula(),
            $keys[2] => $this->getDiacelula(),
            $keys[3] => $this->getHoracelula(),
            $keys[4] => $this->getMinutocelula(),
            $keys[5] => $this->getPeriodocelula(),
            $keys[6] => $this->getCoordenador(),
            $keys[7] => $this->getDiacoordenador(),
            $keys[8] => $this->getFrequenciacoordenador(),
            $keys[9] => $this->getHoracoordenador(),
            $keys[10] => $this->getMinutocoordenador(),
            $keys[11] => $this->getPeriodocoordenador(),
            $keys[12] => $this->getDiscipulador(),
            $keys[13] => $this->getDiadiscipulador(),
            $keys[14] => $this->getFrequenciadiscipulador(),
            $keys[15] => $this->getHoradiscipulador(),
            $keys[16] => $this->getMinutodiscipulador(),
            $keys[17] => $this->getPeriododiscipulador(),
            $keys[18] => $this->getLider(),
            $keys[19] => $this->getNomelider(),
            $keys[20] => $this->getLidertreinamento(),
            $keys[21] => $this->getDialider(),
            $keys[22] => $this->getFrequencialider(),
            $keys[23] => $this->getHoralider(),
            $keys[24] => $this->getMinutolider(),
            $keys[25] => $this->getPeriodolider(),
            $keys[26] => $this->getCcm(),
            $keys[27] => $this->getDiaccm(),
            $keys[28] => $this->getHoraccm(),
            $keys[29] => $this->getMinutoccm(),
            $keys[30] => $this->getPeriodoccm(),
            $keys[31] => $this->getManhadomingo(),
            $keys[32] => $this->getManhasegunda(),
            $keys[33] => $this->getManhaterca(),
            $keys[34] => $this->getManhaquarta(),
            $keys[35] => $this->getManhaquinta(),
            $keys[36] => $this->getManhasexta(),
            $keys[37] => $this->getManhasabado(),
            $keys[38] => $this->getTardedomingo(),
            $keys[39] => $this->getTardesegunda(),
            $keys[40] => $this->getTardeterca(),
            $keys[41] => $this->getTardequarta(),
            $keys[42] => $this->getTardequinta(),
            $keys[43] => $this->getTardesexta(),
            $keys[44] => $this->getTardesabado(),
            $keys[45] => $this->getNoitedomingo(),
            $keys[46] => $this->getNoitesegunda(),
            $keys[47] => $this->getNoiteterca(),
            $keys[48] => $this->getNoitequarta(),
            $keys[49] => $this->getNoitequinta(),
            $keys[50] => $this->getNoitesexta(),
            $keys[51] => $this->getNoitesabado(),
            $keys[52] => $this->getObservacao(),
            $keys[53] => $this->getIdUsuario(),
        );
        if ($includeForeignObjects) {
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
        $pos = DadosPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setEstaemcelula($value);
                break;
            case 2:
                $this->setDiacelula($value);
                break;
            case 3:
                $this->setHoracelula($value);
                break;
            case 4:
                $this->setMinutocelula($value);
                break;
            case 5:
                $this->setPeriodocelula($value);
                break;
            case 6:
                $this->setCoordenador($value);
                break;
            case 7:
                $this->setDiacoordenador($value);
                break;
            case 8:
                $this->setFrequenciacoordenador($value);
                break;
            case 9:
                $this->setHoracoordenador($value);
                break;
            case 10:
                $this->setMinutocoordenador($value);
                break;
            case 11:
                $this->setPeriodocoordenador($value);
                break;
            case 12:
                $this->setDiscipulador($value);
                break;
            case 13:
                $this->setDiadiscipulador($value);
                break;
            case 14:
                $this->setFrequenciadiscipulador($value);
                break;
            case 15:
                $this->setHoradiscipulador($value);
                break;
            case 16:
                $this->setMinutodiscipulador($value);
                break;
            case 17:
                $this->setPeriododiscipulador($value);
                break;
            case 18:
                $this->setLider($value);
                break;
            case 19:
                $this->setNomelider($value);
                break;
            case 20:
                $this->setLidertreinamento($value);
                break;
            case 21:
                $this->setDialider($value);
                break;
            case 22:
                $this->setFrequencialider($value);
                break;
            case 23:
                $this->setHoralider($value);
                break;
            case 24:
                $this->setMinutolider($value);
                break;
            case 25:
                $this->setPeriodolider($value);
                break;
            case 26:
                $this->setCcm($value);
                break;
            case 27:
                $this->setDiaccm($value);
                break;
            case 28:
                $this->setHoraccm($value);
                break;
            case 29:
                $this->setMinutoccm($value);
                break;
            case 30:
                $this->setPeriodoccm($value);
                break;
            case 31:
                $this->setManhadomingo($value);
                break;
            case 32:
                $this->setManhasegunda($value);
                break;
            case 33:
                $this->setManhaterca($value);
                break;
            case 34:
                $this->setManhaquarta($value);
                break;
            case 35:
                $this->setManhaquinta($value);
                break;
            case 36:
                $this->setManhasexta($value);
                break;
            case 37:
                $this->setManhasabado($value);
                break;
            case 38:
                $this->setTardedomingo($value);
                break;
            case 39:
                $this->setTardesegunda($value);
                break;
            case 40:
                $this->setTardeterca($value);
                break;
            case 41:
                $this->setTardequarta($value);
                break;
            case 42:
                $this->setTardequinta($value);
                break;
            case 43:
                $this->setTardesexta($value);
                break;
            case 44:
                $this->setTardesabado($value);
                break;
            case 45:
                $this->setNoitedomingo($value);
                break;
            case 46:
                $this->setNoitesegunda($value);
                break;
            case 47:
                $this->setNoiteterca($value);
                break;
            case 48:
                $this->setNoitequarta($value);
                break;
            case 49:
                $this->setNoitequinta($value);
                break;
            case 50:
                $this->setNoitesexta($value);
                break;
            case 51:
                $this->setNoitesabado($value);
                break;
            case 52:
                $this->setObservacao($value);
                break;
            case 53:
                $this->setIdUsuario($value);
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
        $keys = DadosPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setEstaemcelula($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDiacelula($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setHoracelula($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setMinutocelula($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPeriodocelula($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCoordenador($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDiacoordenador($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setFrequenciacoordenador($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setHoracoordenador($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setMinutocoordenador($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setPeriodocoordenador($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDiscipulador($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDiadiscipulador($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setFrequenciadiscipulador($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setHoradiscipulador($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setMinutodiscipulador($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setPeriododiscipulador($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setLider($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setNomelider($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setLidertreinamento($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setDialider($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setFrequencialider($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setHoralider($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setMinutolider($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setPeriodolider($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setCcm($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setDiaccm($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setHoraccm($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setMinutoccm($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setPeriodoccm($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setManhadomingo($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setManhasegunda($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setManhaterca($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setManhaquarta($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setManhaquinta($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setManhasexta($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setManhasabado($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setTardedomingo($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setTardesegunda($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setTardeterca($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setTardequarta($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setTardequinta($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setTardesexta($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setTardesabado($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setNoitedomingo($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setNoitesegunda($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setNoiteterca($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setNoitequarta($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setNoitequinta($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setNoitesexta($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setNoitesabado($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setObservacao($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setIdUsuario($arr[$keys[53]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(DadosPeer::DATABASE_NAME);

        if ($this->isColumnModified(DadosPeer::ID)) $criteria->add(DadosPeer::ID, $this->id);
        if ($this->isColumnModified(DadosPeer::ESTAEMCELULA)) $criteria->add(DadosPeer::ESTAEMCELULA, $this->estaemcelula);
        if ($this->isColumnModified(DadosPeer::DIACELULA)) $criteria->add(DadosPeer::DIACELULA, $this->diacelula);
        if ($this->isColumnModified(DadosPeer::HORACELULA)) $criteria->add(DadosPeer::HORACELULA, $this->horacelula);
        if ($this->isColumnModified(DadosPeer::MINUTOCELULA)) $criteria->add(DadosPeer::MINUTOCELULA, $this->minutocelula);
        if ($this->isColumnModified(DadosPeer::PERIODOCELULA)) $criteria->add(DadosPeer::PERIODOCELULA, $this->periodocelula);
        if ($this->isColumnModified(DadosPeer::COORDENADOR)) $criteria->add(DadosPeer::COORDENADOR, $this->coordenador);
        if ($this->isColumnModified(DadosPeer::DIACOORDENADOR)) $criteria->add(DadosPeer::DIACOORDENADOR, $this->diacoordenador);
        if ($this->isColumnModified(DadosPeer::FREQUENCIACOORDENADOR)) $criteria->add(DadosPeer::FREQUENCIACOORDENADOR, $this->frequenciacoordenador);
        if ($this->isColumnModified(DadosPeer::HORACOORDENADOR)) $criteria->add(DadosPeer::HORACOORDENADOR, $this->horacoordenador);
        if ($this->isColumnModified(DadosPeer::MINUTOCOORDENADOR)) $criteria->add(DadosPeer::MINUTOCOORDENADOR, $this->minutocoordenador);
        if ($this->isColumnModified(DadosPeer::PERIODOCOORDENADOR)) $criteria->add(DadosPeer::PERIODOCOORDENADOR, $this->periodocoordenador);
        if ($this->isColumnModified(DadosPeer::DISCIPULADOR)) $criteria->add(DadosPeer::DISCIPULADOR, $this->discipulador);
        if ($this->isColumnModified(DadosPeer::DIADISCIPULADOR)) $criteria->add(DadosPeer::DIADISCIPULADOR, $this->diadiscipulador);
        if ($this->isColumnModified(DadosPeer::FREQUENCIADISCIPULADOR)) $criteria->add(DadosPeer::FREQUENCIADISCIPULADOR, $this->frequenciadiscipulador);
        if ($this->isColumnModified(DadosPeer::HORADISCIPULADOR)) $criteria->add(DadosPeer::HORADISCIPULADOR, $this->horadiscipulador);
        if ($this->isColumnModified(DadosPeer::MINUTODISCIPULADOR)) $criteria->add(DadosPeer::MINUTODISCIPULADOR, $this->minutodiscipulador);
        if ($this->isColumnModified(DadosPeer::PERIODODISCIPULADOR)) $criteria->add(DadosPeer::PERIODODISCIPULADOR, $this->periododiscipulador);
        if ($this->isColumnModified(DadosPeer::LIDER)) $criteria->add(DadosPeer::LIDER, $this->lider);
        if ($this->isColumnModified(DadosPeer::NOMELIDER)) $criteria->add(DadosPeer::NOMELIDER, $this->nomelider);
        if ($this->isColumnModified(DadosPeer::LIDERTREINAMENTO)) $criteria->add(DadosPeer::LIDERTREINAMENTO, $this->lidertreinamento);
        if ($this->isColumnModified(DadosPeer::DIALIDER)) $criteria->add(DadosPeer::DIALIDER, $this->dialider);
        if ($this->isColumnModified(DadosPeer::FREQUENCIALIDER)) $criteria->add(DadosPeer::FREQUENCIALIDER, $this->frequencialider);
        if ($this->isColumnModified(DadosPeer::HORALIDER)) $criteria->add(DadosPeer::HORALIDER, $this->horalider);
        if ($this->isColumnModified(DadosPeer::MINUTOLIDER)) $criteria->add(DadosPeer::MINUTOLIDER, $this->minutolider);
        if ($this->isColumnModified(DadosPeer::PERIODOLIDER)) $criteria->add(DadosPeer::PERIODOLIDER, $this->periodolider);
        if ($this->isColumnModified(DadosPeer::CCM)) $criteria->add(DadosPeer::CCM, $this->ccm);
        if ($this->isColumnModified(DadosPeer::DIACCM)) $criteria->add(DadosPeer::DIACCM, $this->diaccm);
        if ($this->isColumnModified(DadosPeer::HORACCM)) $criteria->add(DadosPeer::HORACCM, $this->horaccm);
        if ($this->isColumnModified(DadosPeer::MINUTOCCM)) $criteria->add(DadosPeer::MINUTOCCM, $this->minutoccm);
        if ($this->isColumnModified(DadosPeer::PERIODOCCM)) $criteria->add(DadosPeer::PERIODOCCM, $this->periodoccm);
        if ($this->isColumnModified(DadosPeer::MANHADOMINGO)) $criteria->add(DadosPeer::MANHADOMINGO, $this->manhadomingo);
        if ($this->isColumnModified(DadosPeer::MANHASEGUNDA)) $criteria->add(DadosPeer::MANHASEGUNDA, $this->manhasegunda);
        if ($this->isColumnModified(DadosPeer::MANHATERCA)) $criteria->add(DadosPeer::MANHATERCA, $this->manhaterca);
        if ($this->isColumnModified(DadosPeer::MANHAQUARTA)) $criteria->add(DadosPeer::MANHAQUARTA, $this->manhaquarta);
        if ($this->isColumnModified(DadosPeer::MANHAQUINTA)) $criteria->add(DadosPeer::MANHAQUINTA, $this->manhaquinta);
        if ($this->isColumnModified(DadosPeer::MANHASEXTA)) $criteria->add(DadosPeer::MANHASEXTA, $this->manhasexta);
        if ($this->isColumnModified(DadosPeer::MANHASABADO)) $criteria->add(DadosPeer::MANHASABADO, $this->manhasabado);
        if ($this->isColumnModified(DadosPeer::TARDEDOMINGO)) $criteria->add(DadosPeer::TARDEDOMINGO, $this->tardedomingo);
        if ($this->isColumnModified(DadosPeer::TARDESEGUNDA)) $criteria->add(DadosPeer::TARDESEGUNDA, $this->tardesegunda);
        if ($this->isColumnModified(DadosPeer::TARDETERCA)) $criteria->add(DadosPeer::TARDETERCA, $this->tardeterca);
        if ($this->isColumnModified(DadosPeer::TARDEQUARTA)) $criteria->add(DadosPeer::TARDEQUARTA, $this->tardequarta);
        if ($this->isColumnModified(DadosPeer::TARDEQUINTA)) $criteria->add(DadosPeer::TARDEQUINTA, $this->tardequinta);
        if ($this->isColumnModified(DadosPeer::TARDESEXTA)) $criteria->add(DadosPeer::TARDESEXTA, $this->tardesexta);
        if ($this->isColumnModified(DadosPeer::TARDESABADO)) $criteria->add(DadosPeer::TARDESABADO, $this->tardesabado);
        if ($this->isColumnModified(DadosPeer::NOITEDOMINGO)) $criteria->add(DadosPeer::NOITEDOMINGO, $this->noitedomingo);
        if ($this->isColumnModified(DadosPeer::NOITESEGUNDA)) $criteria->add(DadosPeer::NOITESEGUNDA, $this->noitesegunda);
        if ($this->isColumnModified(DadosPeer::NOITETERCA)) $criteria->add(DadosPeer::NOITETERCA, $this->noiteterca);
        if ($this->isColumnModified(DadosPeer::NOITEQUARTA)) $criteria->add(DadosPeer::NOITEQUARTA, $this->noitequarta);
        if ($this->isColumnModified(DadosPeer::NOITEQUINTA)) $criteria->add(DadosPeer::NOITEQUINTA, $this->noitequinta);
        if ($this->isColumnModified(DadosPeer::NOITESEXTA)) $criteria->add(DadosPeer::NOITESEXTA, $this->noitesexta);
        if ($this->isColumnModified(DadosPeer::NOITESABADO)) $criteria->add(DadosPeer::NOITESABADO, $this->noitesabado);
        if ($this->isColumnModified(DadosPeer::OBSERVACAO)) $criteria->add(DadosPeer::OBSERVACAO, $this->observacao);
        if ($this->isColumnModified(DadosPeer::ID_USUARIO)) $criteria->add(DadosPeer::ID_USUARIO, $this->id_usuario);

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
        $criteria = new Criteria(DadosPeer::DATABASE_NAME);
        $criteria->add(DadosPeer::ID, $this->id);

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
     * @param object $copyObj An object of Dados (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setEstaemcelula($this->getEstaemcelula());
        $copyObj->setDiacelula($this->getDiacelula());
        $copyObj->setHoracelula($this->getHoracelula());
        $copyObj->setMinutocelula($this->getMinutocelula());
        $copyObj->setPeriodocelula($this->getPeriodocelula());
        $copyObj->setCoordenador($this->getCoordenador());
        $copyObj->setDiacoordenador($this->getDiacoordenador());
        $copyObj->setFrequenciacoordenador($this->getFrequenciacoordenador());
        $copyObj->setHoracoordenador($this->getHoracoordenador());
        $copyObj->setMinutocoordenador($this->getMinutocoordenador());
        $copyObj->setPeriodocoordenador($this->getPeriodocoordenador());
        $copyObj->setDiscipulador($this->getDiscipulador());
        $copyObj->setDiadiscipulador($this->getDiadiscipulador());
        $copyObj->setFrequenciadiscipulador($this->getFrequenciadiscipulador());
        $copyObj->setHoradiscipulador($this->getHoradiscipulador());
        $copyObj->setMinutodiscipulador($this->getMinutodiscipulador());
        $copyObj->setPeriododiscipulador($this->getPeriododiscipulador());
        $copyObj->setLider($this->getLider());
        $copyObj->setNomelider($this->getNomelider());
        $copyObj->setLidertreinamento($this->getLidertreinamento());
        $copyObj->setDialider($this->getDialider());
        $copyObj->setFrequencialider($this->getFrequencialider());
        $copyObj->setHoralider($this->getHoralider());
        $copyObj->setMinutolider($this->getMinutolider());
        $copyObj->setPeriodolider($this->getPeriodolider());
        $copyObj->setCcm($this->getCcm());
        $copyObj->setDiaccm($this->getDiaccm());
        $copyObj->setHoraccm($this->getHoraccm());
        $copyObj->setMinutoccm($this->getMinutoccm());
        $copyObj->setPeriodoccm($this->getPeriodoccm());
        $copyObj->setManhadomingo($this->getManhadomingo());
        $copyObj->setManhasegunda($this->getManhasegunda());
        $copyObj->setManhaterca($this->getManhaterca());
        $copyObj->setManhaquarta($this->getManhaquarta());
        $copyObj->setManhaquinta($this->getManhaquinta());
        $copyObj->setManhasexta($this->getManhasexta());
        $copyObj->setManhasabado($this->getManhasabado());
        $copyObj->setTardedomingo($this->getTardedomingo());
        $copyObj->setTardesegunda($this->getTardesegunda());
        $copyObj->setTardeterca($this->getTardeterca());
        $copyObj->setTardequarta($this->getTardequarta());
        $copyObj->setTardequinta($this->getTardequinta());
        $copyObj->setTardesexta($this->getTardesexta());
        $copyObj->setTardesabado($this->getTardesabado());
        $copyObj->setNoitedomingo($this->getNoitedomingo());
        $copyObj->setNoitesegunda($this->getNoitesegunda());
        $copyObj->setNoiteterca($this->getNoiteterca());
        $copyObj->setNoitequarta($this->getNoitequarta());
        $copyObj->setNoitequinta($this->getNoitequinta());
        $copyObj->setNoitesexta($this->getNoitesexta());
        $copyObj->setNoitesabado($this->getNoitesabado());
        $copyObj->setObservacao($this->getObservacao());
        $copyObj->setIdUsuario($this->getIdUsuario());

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
     * @return Dados Clone of current object.
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
     * @return DadosPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new DadosPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param             Usuario $v
     * @return Dados The current object (for fluent API support)
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
            $v->addDados($this);
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
                $this->aUsuario->addDadoss($this);
             */
        }

        return $this->aUsuario;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->estaemcelula = null;
        $this->diacelula = null;
        $this->horacelula = null;
        $this->minutocelula = null;
        $this->periodocelula = null;
        $this->coordenador = null;
        $this->diacoordenador = null;
        $this->frequenciacoordenador = null;
        $this->horacoordenador = null;
        $this->minutocoordenador = null;
        $this->periodocoordenador = null;
        $this->discipulador = null;
        $this->diadiscipulador = null;
        $this->frequenciadiscipulador = null;
        $this->horadiscipulador = null;
        $this->minutodiscipulador = null;
        $this->periododiscipulador = null;
        $this->lider = null;
        $this->nomelider = null;
        $this->lidertreinamento = null;
        $this->dialider = null;
        $this->frequencialider = null;
        $this->horalider = null;
        $this->minutolider = null;
        $this->periodolider = null;
        $this->ccm = null;
        $this->diaccm = null;
        $this->horaccm = null;
        $this->minutoccm = null;
        $this->periodoccm = null;
        $this->manhadomingo = null;
        $this->manhasegunda = null;
        $this->manhaterca = null;
        $this->manhaquarta = null;
        $this->manhaquinta = null;
        $this->manhasexta = null;
        $this->manhasabado = null;
        $this->tardedomingo = null;
        $this->tardesegunda = null;
        $this->tardeterca = null;
        $this->tardequarta = null;
        $this->tardequinta = null;
        $this->tardesexta = null;
        $this->tardesabado = null;
        $this->noitedomingo = null;
        $this->noitesegunda = null;
        $this->noiteterca = null;
        $this->noitequarta = null;
        $this->noitequinta = null;
        $this->noitesexta = null;
        $this->noitesabado = null;
        $this->observacao = null;
        $this->id_usuario = null;
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

        $this->aUsuario = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(DadosPeer::DEFAULT_STRING_FORMAT);
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
