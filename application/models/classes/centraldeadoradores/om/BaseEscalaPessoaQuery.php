<?php


/**
 * Base class that represents a query for the 'escala_pessoa' table.
 *
 *
 *
 * @method EscalaPessoaQuery orderById($order = Criteria::ASC) Order by the Id column
 * @method EscalaPessoaQuery orderByIdUsuario($order = Criteria::ASC) Order by the Id_Usuario column
 * @method EscalaPessoaQuery orderByIdLocal($order = Criteria::ASC) Order by the Id_Local column
 * @method EscalaPessoaQuery orderByData($order = Criteria::ASC) Order by the Data column
 * @method EscalaPessoaQuery orderByIdStatusEscala($order = Criteria::ASC) Order by the Id_Status_Escala column
 * @method EscalaPessoaQuery orderByIdResponsavel($order = Criteria::ASC) Order by the Id_Responsavel column
 * @method EscalaPessoaQuery orderByMotivoRecusa($order = Criteria::ASC) Order by the Motivo_Recusa column
 * @method EscalaPessoaQuery orderByIdTipoEscala($order = Criteria::ASC) Order by the Id_Tipo_Escala column
 *
 * @method EscalaPessoaQuery groupById() Group by the Id column
 * @method EscalaPessoaQuery groupByIdUsuario() Group by the Id_Usuario column
 * @method EscalaPessoaQuery groupByIdLocal() Group by the Id_Local column
 * @method EscalaPessoaQuery groupByData() Group by the Data column
 * @method EscalaPessoaQuery groupByIdStatusEscala() Group by the Id_Status_Escala column
 * @method EscalaPessoaQuery groupByIdResponsavel() Group by the Id_Responsavel column
 * @method EscalaPessoaQuery groupByMotivoRecusa() Group by the Motivo_Recusa column
 * @method EscalaPessoaQuery groupByIdTipoEscala() Group by the Id_Tipo_Escala column
 *
 * @method EscalaPessoaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EscalaPessoaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EscalaPessoaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method EscalaPessoaQuery leftJoinTipoEscala($relationAlias = null) Adds a LEFT JOIN clause to the query using the TipoEscala relation
 * @method EscalaPessoaQuery rightJoinTipoEscala($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TipoEscala relation
 * @method EscalaPessoaQuery innerJoinTipoEscala($relationAlias = null) Adds a INNER JOIN clause to the query using the TipoEscala relation
 *
 * @method EscalaPessoaQuery leftJoinLocal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Local relation
 * @method EscalaPessoaQuery rightJoinLocal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Local relation
 * @method EscalaPessoaQuery innerJoinLocal($relationAlias = null) Adds a INNER JOIN clause to the query using the Local relation
 *
 * @method EscalaPessoaQuery leftJoinUsuarioRelatedByIdResponsavel($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioRelatedByIdResponsavel relation
 * @method EscalaPessoaQuery rightJoinUsuarioRelatedByIdResponsavel($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioRelatedByIdResponsavel relation
 * @method EscalaPessoaQuery innerJoinUsuarioRelatedByIdResponsavel($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioRelatedByIdResponsavel relation
 *
 * @method EscalaPessoaQuery leftJoinStatusEscala($relationAlias = null) Adds a LEFT JOIN clause to the query using the StatusEscala relation
 * @method EscalaPessoaQuery rightJoinStatusEscala($relationAlias = null) Adds a RIGHT JOIN clause to the query using the StatusEscala relation
 * @method EscalaPessoaQuery innerJoinStatusEscala($relationAlias = null) Adds a INNER JOIN clause to the query using the StatusEscala relation
 *
 * @method EscalaPessoaQuery leftJoinUsuarioRelatedByIdUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioRelatedByIdUsuario relation
 * @method EscalaPessoaQuery rightJoinUsuarioRelatedByIdUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioRelatedByIdUsuario relation
 * @method EscalaPessoaQuery innerJoinUsuarioRelatedByIdUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioRelatedByIdUsuario relation
 *
 * @method EscalaPessoaQuery leftJoinEscalaPessoaFuncao($relationAlias = null) Adds a LEFT JOIN clause to the query using the EscalaPessoaFuncao relation
 * @method EscalaPessoaQuery rightJoinEscalaPessoaFuncao($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EscalaPessoaFuncao relation
 * @method EscalaPessoaQuery innerJoinEscalaPessoaFuncao($relationAlias = null) Adds a INNER JOIN clause to the query using the EscalaPessoaFuncao relation
 *
 * @method EscalaPessoa findOne(PropelPDO $con = null) Return the first EscalaPessoa matching the query
 * @method EscalaPessoa findOneOrCreate(PropelPDO $con = null) Return the first EscalaPessoa matching the query, or a new EscalaPessoa object populated from the query conditions when no match is found
 *
 * @method EscalaPessoa findOneById(int $Id) Return the first EscalaPessoa filtered by the Id column
 * @method EscalaPessoa findOneByIdUsuario(int $Id_Usuario) Return the first EscalaPessoa filtered by the Id_Usuario column
 * @method EscalaPessoa findOneByIdLocal(int $Id_Local) Return the first EscalaPessoa filtered by the Id_Local column
 * @method EscalaPessoa findOneByData(string $Data) Return the first EscalaPessoa filtered by the Data column
 * @method EscalaPessoa findOneByIdStatusEscala(int $Id_Status_Escala) Return the first EscalaPessoa filtered by the Id_Status_Escala column
 * @method EscalaPessoa findOneByIdResponsavel(int $Id_Responsavel) Return the first EscalaPessoa filtered by the Id_Responsavel column
 * @method EscalaPessoa findOneByMotivoRecusa(string $Motivo_Recusa) Return the first EscalaPessoa filtered by the Motivo_Recusa column
 * @method EscalaPessoa findOneByIdTipoEscala(int $Id_Tipo_Escala) Return the first EscalaPessoa filtered by the Id_Tipo_Escala column
 *
 * @method array findById(int $Id) Return EscalaPessoa objects filtered by the Id column
 * @method array findByIdUsuario(int $Id_Usuario) Return EscalaPessoa objects filtered by the Id_Usuario column
 * @method array findByIdLocal(int $Id_Local) Return EscalaPessoa objects filtered by the Id_Local column
 * @method array findByData(string $Data) Return EscalaPessoa objects filtered by the Data column
 * @method array findByIdStatusEscala(int $Id_Status_Escala) Return EscalaPessoa objects filtered by the Id_Status_Escala column
 * @method array findByIdResponsavel(int $Id_Responsavel) Return EscalaPessoa objects filtered by the Id_Responsavel column
 * @method array findByMotivoRecusa(string $Motivo_Recusa) Return EscalaPessoa objects filtered by the Motivo_Recusa column
 * @method array findByIdTipoEscala(int $Id_Tipo_Escala) Return EscalaPessoa objects filtered by the Id_Tipo_Escala column
 *
 * @package    propel.generator.centraldeadoradores.om
 */
abstract class BaseEscalaPessoaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEscalaPessoaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'centraldeadoradores', $modelName = 'EscalaPessoa', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EscalaPessoaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     EscalaPessoaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EscalaPessoaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EscalaPessoaQuery) {
            return $criteria;
        }
        $query = new EscalaPessoaQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   EscalaPessoa|EscalaPessoa[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EscalaPessoaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EscalaPessoaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return   EscalaPessoa A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `ID_USUARIO`, `ID_LOCAL`, `DATA`, `ID_STATUS_ESCALA`, `ID_RESPONSAVEL`, `MOTIVO_RECUSA`, `ID_TIPO_ESCALA` FROM `escala_pessoa` WHERE `ID` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new EscalaPessoa();
            $obj->hydrate($row);
            EscalaPessoaPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return EscalaPessoa|EscalaPessoa[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|EscalaPessoa[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return EscalaPessoaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EscalaPessoaPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EscalaPessoaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EscalaPessoaPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the Id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE Id = 1234
     * $query->filterById(array(12, 34)); // WHERE Id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE Id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EscalaPessoaQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(EscalaPessoaPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the Id_Usuario column
     *
     * Example usage:
     * <code>
     * $query->filterByIdUsuario(1234); // WHERE Id_Usuario = 1234
     * $query->filterByIdUsuario(array(12, 34)); // WHERE Id_Usuario IN (12, 34)
     * $query->filterByIdUsuario(array('min' => 12)); // WHERE Id_Usuario > 12
     * </code>
     *
     * @see       filterByUsuarioRelatedByIdUsuario()
     *
     * @param     mixed $idUsuario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EscalaPessoaQuery The current query, for fluid interface
     */
    public function filterByIdUsuario($idUsuario = null, $comparison = null)
    {
        if (is_array($idUsuario)) {
            $useMinMax = false;
            if (isset($idUsuario['min'])) {
                $this->addUsingAlias(EscalaPessoaPeer::ID_USUARIO, $idUsuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idUsuario['max'])) {
                $this->addUsingAlias(EscalaPessoaPeer::ID_USUARIO, $idUsuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EscalaPessoaPeer::ID_USUARIO, $idUsuario, $comparison);
    }

    /**
     * Filter the query on the Id_Local column
     *
     * Example usage:
     * <code>
     * $query->filterByIdLocal(1234); // WHERE Id_Local = 1234
     * $query->filterByIdLocal(array(12, 34)); // WHERE Id_Local IN (12, 34)
     * $query->filterByIdLocal(array('min' => 12)); // WHERE Id_Local > 12
     * </code>
     *
     * @see       filterByLocal()
     *
     * @param     mixed $idLocal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EscalaPessoaQuery The current query, for fluid interface
     */
    public function filterByIdLocal($idLocal = null, $comparison = null)
    {
        if (is_array($idLocal)) {
            $useMinMax = false;
            if (isset($idLocal['min'])) {
                $this->addUsingAlias(EscalaPessoaPeer::ID_LOCAL, $idLocal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idLocal['max'])) {
                $this->addUsingAlias(EscalaPessoaPeer::ID_LOCAL, $idLocal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EscalaPessoaPeer::ID_LOCAL, $idLocal, $comparison);
    }

    /**
     * Filter the query on the Data column
     *
     * Example usage:
     * <code>
     * $query->filterByData('2011-03-14'); // WHERE Data = '2011-03-14'
     * $query->filterByData('now'); // WHERE Data = '2011-03-14'
     * $query->filterByData(array('max' => 'yesterday')); // WHERE Data > '2011-03-13'
     * </code>
     *
     * @param     mixed $data The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EscalaPessoaQuery The current query, for fluid interface
     */
    public function filterByData($data = null, $comparison = null)
    {
        if (is_array($data)) {
            $useMinMax = false;
            if (isset($data['min'])) {
                $this->addUsingAlias(EscalaPessoaPeer::DATA, $data['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($data['max'])) {
                $this->addUsingAlias(EscalaPessoaPeer::DATA, $data['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EscalaPessoaPeer::DATA, $data, $comparison);
    }

    /**
     * Filter the query on the Id_Status_Escala column
     *
     * Example usage:
     * <code>
     * $query->filterByIdStatusEscala(1234); // WHERE Id_Status_Escala = 1234
     * $query->filterByIdStatusEscala(array(12, 34)); // WHERE Id_Status_Escala IN (12, 34)
     * $query->filterByIdStatusEscala(array('min' => 12)); // WHERE Id_Status_Escala > 12
     * </code>
     *
     * @see       filterByStatusEscala()
     *
     * @param     mixed $idStatusEscala The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EscalaPessoaQuery The current query, for fluid interface
     */
    public function filterByIdStatusEscala($idStatusEscala = null, $comparison = null)
    {
        if (is_array($idStatusEscala)) {
            $useMinMax = false;
            if (isset($idStatusEscala['min'])) {
                $this->addUsingAlias(EscalaPessoaPeer::ID_STATUS_ESCALA, $idStatusEscala['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idStatusEscala['max'])) {
                $this->addUsingAlias(EscalaPessoaPeer::ID_STATUS_ESCALA, $idStatusEscala['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EscalaPessoaPeer::ID_STATUS_ESCALA, $idStatusEscala, $comparison);
    }

    /**
     * Filter the query on the Id_Responsavel column
     *
     * Example usage:
     * <code>
     * $query->filterByIdResponsavel(1234); // WHERE Id_Responsavel = 1234
     * $query->filterByIdResponsavel(array(12, 34)); // WHERE Id_Responsavel IN (12, 34)
     * $query->filterByIdResponsavel(array('min' => 12)); // WHERE Id_Responsavel > 12
     * </code>
     *
     * @see       filterByUsuarioRelatedByIdResponsavel()
     *
     * @param     mixed $idResponsavel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EscalaPessoaQuery The current query, for fluid interface
     */
    public function filterByIdResponsavel($idResponsavel = null, $comparison = null)
    {
        if (is_array($idResponsavel)) {
            $useMinMax = false;
            if (isset($idResponsavel['min'])) {
                $this->addUsingAlias(EscalaPessoaPeer::ID_RESPONSAVEL, $idResponsavel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idResponsavel['max'])) {
                $this->addUsingAlias(EscalaPessoaPeer::ID_RESPONSAVEL, $idResponsavel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EscalaPessoaPeer::ID_RESPONSAVEL, $idResponsavel, $comparison);
    }

    /**
     * Filter the query on the Motivo_Recusa column
     *
     * Example usage:
     * <code>
     * $query->filterByMotivoRecusa('fooValue');   // WHERE Motivo_Recusa = 'fooValue'
     * $query->filterByMotivoRecusa('%fooValue%'); // WHERE Motivo_Recusa LIKE '%fooValue%'
     * </code>
     *
     * @param     string $motivoRecusa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EscalaPessoaQuery The current query, for fluid interface
     */
    public function filterByMotivoRecusa($motivoRecusa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($motivoRecusa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $motivoRecusa)) {
                $motivoRecusa = str_replace('*', '%', $motivoRecusa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EscalaPessoaPeer::MOTIVO_RECUSA, $motivoRecusa, $comparison);
    }

    /**
     * Filter the query on the Id_Tipo_Escala column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTipoEscala(1234); // WHERE Id_Tipo_Escala = 1234
     * $query->filterByIdTipoEscala(array(12, 34)); // WHERE Id_Tipo_Escala IN (12, 34)
     * $query->filterByIdTipoEscala(array('min' => 12)); // WHERE Id_Tipo_Escala > 12
     * </code>
     *
     * @see       filterByTipoEscala()
     *
     * @param     mixed $idTipoEscala The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EscalaPessoaQuery The current query, for fluid interface
     */
    public function filterByIdTipoEscala($idTipoEscala = null, $comparison = null)
    {
        if (is_array($idTipoEscala)) {
            $useMinMax = false;
            if (isset($idTipoEscala['min'])) {
                $this->addUsingAlias(EscalaPessoaPeer::ID_TIPO_ESCALA, $idTipoEscala['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTipoEscala['max'])) {
                $this->addUsingAlias(EscalaPessoaPeer::ID_TIPO_ESCALA, $idTipoEscala['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EscalaPessoaPeer::ID_TIPO_ESCALA, $idTipoEscala, $comparison);
    }

    /**
     * Filter the query by a related TipoEscala object
     *
     * @param   TipoEscala|PropelObjectCollection $tipoEscala The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   EscalaPessoaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByTipoEscala($tipoEscala, $comparison = null)
    {
        if ($tipoEscala instanceof TipoEscala) {
            return $this
                ->addUsingAlias(EscalaPessoaPeer::ID_TIPO_ESCALA, $tipoEscala->getId(), $comparison);
        } elseif ($tipoEscala instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EscalaPessoaPeer::ID_TIPO_ESCALA, $tipoEscala->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByTipoEscala() only accepts arguments of type TipoEscala or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TipoEscala relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EscalaPessoaQuery The current query, for fluid interface
     */
    public function joinTipoEscala($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TipoEscala');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'TipoEscala');
        }

        return $this;
    }

    /**
     * Use the TipoEscala relation TipoEscala object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TipoEscalaQuery A secondary query class using the current class as primary query
     */
    public function useTipoEscalaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinTipoEscala($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TipoEscala', 'TipoEscalaQuery');
    }

    /**
     * Filter the query by a related Local object
     *
     * @param   Local|PropelObjectCollection $local The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   EscalaPessoaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByLocal($local, $comparison = null)
    {
        if ($local instanceof Local) {
            return $this
                ->addUsingAlias(EscalaPessoaPeer::ID_LOCAL, $local->getId(), $comparison);
        } elseif ($local instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EscalaPessoaPeer::ID_LOCAL, $local->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByLocal() only accepts arguments of type Local or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Local relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EscalaPessoaQuery The current query, for fluid interface
     */
    public function joinLocal($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Local');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Local');
        }

        return $this;
    }

    /**
     * Use the Local relation Local object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LocalQuery A secondary query class using the current class as primary query
     */
    public function useLocalQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinLocal($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Local', 'LocalQuery');
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   EscalaPessoaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByUsuarioRelatedByIdResponsavel($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(EscalaPessoaPeer::ID_RESPONSAVEL, $usuario->getId(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EscalaPessoaPeer::ID_RESPONSAVEL, $usuario->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByUsuarioRelatedByIdResponsavel() only accepts arguments of type Usuario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UsuarioRelatedByIdResponsavel relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EscalaPessoaQuery The current query, for fluid interface
     */
    public function joinUsuarioRelatedByIdResponsavel($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UsuarioRelatedByIdResponsavel');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'UsuarioRelatedByIdResponsavel');
        }

        return $this;
    }

    /**
     * Use the UsuarioRelatedByIdResponsavel relation Usuario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuarioQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioRelatedByIdResponsavelQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUsuarioRelatedByIdResponsavel($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UsuarioRelatedByIdResponsavel', 'UsuarioQuery');
    }

    /**
     * Filter the query by a related StatusEscala object
     *
     * @param   StatusEscala|PropelObjectCollection $statusEscala The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   EscalaPessoaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByStatusEscala($statusEscala, $comparison = null)
    {
        if ($statusEscala instanceof StatusEscala) {
            return $this
                ->addUsingAlias(EscalaPessoaPeer::ID_STATUS_ESCALA, $statusEscala->getId(), $comparison);
        } elseif ($statusEscala instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EscalaPessoaPeer::ID_STATUS_ESCALA, $statusEscala->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByStatusEscala() only accepts arguments of type StatusEscala or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the StatusEscala relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EscalaPessoaQuery The current query, for fluid interface
     */
    public function joinStatusEscala($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('StatusEscala');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'StatusEscala');
        }

        return $this;
    }

    /**
     * Use the StatusEscala relation StatusEscala object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   StatusEscalaQuery A secondary query class using the current class as primary query
     */
    public function useStatusEscalaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinStatusEscala($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'StatusEscala', 'StatusEscalaQuery');
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   EscalaPessoaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByUsuarioRelatedByIdUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(EscalaPessoaPeer::ID_USUARIO, $usuario->getId(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EscalaPessoaPeer::ID_USUARIO, $usuario->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByUsuarioRelatedByIdUsuario() only accepts arguments of type Usuario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UsuarioRelatedByIdUsuario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EscalaPessoaQuery The current query, for fluid interface
     */
    public function joinUsuarioRelatedByIdUsuario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UsuarioRelatedByIdUsuario');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'UsuarioRelatedByIdUsuario');
        }

        return $this;
    }

    /**
     * Use the UsuarioRelatedByIdUsuario relation Usuario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuarioQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioRelatedByIdUsuarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUsuarioRelatedByIdUsuario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UsuarioRelatedByIdUsuario', 'UsuarioQuery');
    }

    /**
     * Filter the query by a related EscalaPessoaFuncao object
     *
     * @param   EscalaPessoaFuncao|PropelObjectCollection $escalaPessoaFuncao  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   EscalaPessoaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByEscalaPessoaFuncao($escalaPessoaFuncao, $comparison = null)
    {
        if ($escalaPessoaFuncao instanceof EscalaPessoaFuncao) {
            return $this
                ->addUsingAlias(EscalaPessoaPeer::ID, $escalaPessoaFuncao->getIdEscalaPessoa(), $comparison);
        } elseif ($escalaPessoaFuncao instanceof PropelObjectCollection) {
            return $this
                ->useEscalaPessoaFuncaoQuery()
                ->filterByPrimaryKeys($escalaPessoaFuncao->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByEscalaPessoaFuncao() only accepts arguments of type EscalaPessoaFuncao or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EscalaPessoaFuncao relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EscalaPessoaQuery The current query, for fluid interface
     */
    public function joinEscalaPessoaFuncao($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EscalaPessoaFuncao');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'EscalaPessoaFuncao');
        }

        return $this;
    }

    /**
     * Use the EscalaPessoaFuncao relation EscalaPessoaFuncao object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EscalaPessoaFuncaoQuery A secondary query class using the current class as primary query
     */
    public function useEscalaPessoaFuncaoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEscalaPessoaFuncao($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EscalaPessoaFuncao', 'EscalaPessoaFuncaoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   EscalaPessoa $escalaPessoa Object to remove from the list of results
     *
     * @return EscalaPessoaQuery The current query, for fluid interface
     */
    public function prune($escalaPessoa = null)
    {
        if ($escalaPessoa) {
            $this->addUsingAlias(EscalaPessoaPeer::ID, $escalaPessoa->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
