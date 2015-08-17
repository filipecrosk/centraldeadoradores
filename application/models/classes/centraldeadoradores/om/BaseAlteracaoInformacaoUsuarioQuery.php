<?php


/**
 * Base class that represents a query for the 'alteracao_informacao_usuario' table.
 *
 *
 *
 * @method AlteracaoInformacaoUsuarioQuery orderById($order = Criteria::ASC) Order by the Id column
 * @method AlteracaoInformacaoUsuarioQuery orderByData($order = Criteria::ASC) Order by the Data column
 * @method AlteracaoInformacaoUsuarioQuery orderByNovaInformacao($order = Criteria::ASC) Order by the Nova_Informacao column
 * @method AlteracaoInformacaoUsuarioQuery orderByInformacaoAntiga($order = Criteria::ASC) Order by the Informacao_Antiga column
 * @method AlteracaoInformacaoUsuarioQuery orderByIdUsuario($order = Criteria::ASC) Order by the Id_Usuario column
 * @method AlteracaoInformacaoUsuarioQuery orderByIdTipoInformacaoId($order = Criteria::ASC) Order by the Id_Tipo_Informacao_Id column
 * @method AlteracaoInformacaoUsuarioQuery orderByIdToken($order = Criteria::ASC) Order by the Id_Token column
 *
 * @method AlteracaoInformacaoUsuarioQuery groupById() Group by the Id column
 * @method AlteracaoInformacaoUsuarioQuery groupByData() Group by the Data column
 * @method AlteracaoInformacaoUsuarioQuery groupByNovaInformacao() Group by the Nova_Informacao column
 * @method AlteracaoInformacaoUsuarioQuery groupByInformacaoAntiga() Group by the Informacao_Antiga column
 * @method AlteracaoInformacaoUsuarioQuery groupByIdUsuario() Group by the Id_Usuario column
 * @method AlteracaoInformacaoUsuarioQuery groupByIdTipoInformacaoId() Group by the Id_Tipo_Informacao_Id column
 * @method AlteracaoInformacaoUsuarioQuery groupByIdToken() Group by the Id_Token column
 *
 * @method AlteracaoInformacaoUsuarioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AlteracaoInformacaoUsuarioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AlteracaoInformacaoUsuarioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method AlteracaoInformacaoUsuarioQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method AlteracaoInformacaoUsuarioQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method AlteracaoInformacaoUsuarioQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method AlteracaoInformacaoUsuarioQuery leftJoinTipoInformacao($relationAlias = null) Adds a LEFT JOIN clause to the query using the TipoInformacao relation
 * @method AlteracaoInformacaoUsuarioQuery rightJoinTipoInformacao($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TipoInformacao relation
 * @method AlteracaoInformacaoUsuarioQuery innerJoinTipoInformacao($relationAlias = null) Adds a INNER JOIN clause to the query using the TipoInformacao relation
 *
 * @method AlteracaoInformacaoUsuarioQuery leftJoinToken($relationAlias = null) Adds a LEFT JOIN clause to the query using the Token relation
 * @method AlteracaoInformacaoUsuarioQuery rightJoinToken($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Token relation
 * @method AlteracaoInformacaoUsuarioQuery innerJoinToken($relationAlias = null) Adds a INNER JOIN clause to the query using the Token relation
 *
 * @method AlteracaoInformacaoUsuario findOne(PropelPDO $con = null) Return the first AlteracaoInformacaoUsuario matching the query
 * @method AlteracaoInformacaoUsuario findOneOrCreate(PropelPDO $con = null) Return the first AlteracaoInformacaoUsuario matching the query, or a new AlteracaoInformacaoUsuario object populated from the query conditions when no match is found
 *
 * @method AlteracaoInformacaoUsuario findOneById(int $Id) Return the first AlteracaoInformacaoUsuario filtered by the Id column
 * @method AlteracaoInformacaoUsuario findOneByData(string $Data) Return the first AlteracaoInformacaoUsuario filtered by the Data column
 * @method AlteracaoInformacaoUsuario findOneByNovaInformacao(string $Nova_Informacao) Return the first AlteracaoInformacaoUsuario filtered by the Nova_Informacao column
 * @method AlteracaoInformacaoUsuario findOneByInformacaoAntiga(string $Informacao_Antiga) Return the first AlteracaoInformacaoUsuario filtered by the Informacao_Antiga column
 * @method AlteracaoInformacaoUsuario findOneByIdUsuario(int $Id_Usuario) Return the first AlteracaoInformacaoUsuario filtered by the Id_Usuario column
 * @method AlteracaoInformacaoUsuario findOneByIdTipoInformacaoId(int $Id_Tipo_Informacao_Id) Return the first AlteracaoInformacaoUsuario filtered by the Id_Tipo_Informacao_Id column
 * @method AlteracaoInformacaoUsuario findOneByIdToken(int $Id_Token) Return the first AlteracaoInformacaoUsuario filtered by the Id_Token column
 *
 * @method array findById(int $Id) Return AlteracaoInformacaoUsuario objects filtered by the Id column
 * @method array findByData(string $Data) Return AlteracaoInformacaoUsuario objects filtered by the Data column
 * @method array findByNovaInformacao(string $Nova_Informacao) Return AlteracaoInformacaoUsuario objects filtered by the Nova_Informacao column
 * @method array findByInformacaoAntiga(string $Informacao_Antiga) Return AlteracaoInformacaoUsuario objects filtered by the Informacao_Antiga column
 * @method array findByIdUsuario(int $Id_Usuario) Return AlteracaoInformacaoUsuario objects filtered by the Id_Usuario column
 * @method array findByIdTipoInformacaoId(int $Id_Tipo_Informacao_Id) Return AlteracaoInformacaoUsuario objects filtered by the Id_Tipo_Informacao_Id column
 * @method array findByIdToken(int $Id_Token) Return AlteracaoInformacaoUsuario objects filtered by the Id_Token column
 *
 * @package    propel.generator.centraldeadoradores.om
 */
abstract class BaseAlteracaoInformacaoUsuarioQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAlteracaoInformacaoUsuarioQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'centraldeadoradores', $modelName = 'AlteracaoInformacaoUsuario', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AlteracaoInformacaoUsuarioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     AlteracaoInformacaoUsuarioQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AlteracaoInformacaoUsuarioQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AlteracaoInformacaoUsuarioQuery) {
            return $criteria;
        }
        $query = new AlteracaoInformacaoUsuarioQuery();
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
     * @return   AlteracaoInformacaoUsuario|AlteracaoInformacaoUsuario[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AlteracaoInformacaoUsuarioPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AlteracaoInformacaoUsuarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   AlteracaoInformacaoUsuario A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `DATA`, `NOVA_INFORMACAO`, `INFORMACAO_ANTIGA`, `ID_USUARIO`, `ID_TIPO_INFORMACAO_ID`, `ID_TOKEN` FROM `alteracao_informacao_usuario` WHERE `ID` = :p0';
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
            $obj = new AlteracaoInformacaoUsuario();
            $obj->hydrate($row);
            AlteracaoInformacaoUsuarioPeer::addInstanceToPool($obj, (string) $key);
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
     * @return AlteracaoInformacaoUsuario|AlteracaoInformacaoUsuario[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|AlteracaoInformacaoUsuario[]|mixed the list of results, formatted by the current formatter
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
     * @return AlteracaoInformacaoUsuarioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AlteracaoInformacaoUsuarioPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AlteracaoInformacaoUsuarioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AlteracaoInformacaoUsuarioPeer::ID, $keys, Criteria::IN);
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
     * @return AlteracaoInformacaoUsuarioQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(AlteracaoInformacaoUsuarioPeer::ID, $id, $comparison);
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
     * @return AlteracaoInformacaoUsuarioQuery The current query, for fluid interface
     */
    public function filterByData($data = null, $comparison = null)
    {
        if (is_array($data)) {
            $useMinMax = false;
            if (isset($data['min'])) {
                $this->addUsingAlias(AlteracaoInformacaoUsuarioPeer::DATA, $data['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($data['max'])) {
                $this->addUsingAlias(AlteracaoInformacaoUsuarioPeer::DATA, $data['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AlteracaoInformacaoUsuarioPeer::DATA, $data, $comparison);
    }

    /**
     * Filter the query on the Nova_Informacao column
     *
     * Example usage:
     * <code>
     * $query->filterByNovaInformacao('fooValue');   // WHERE Nova_Informacao = 'fooValue'
     * $query->filterByNovaInformacao('%fooValue%'); // WHERE Nova_Informacao LIKE '%fooValue%'
     * </code>
     *
     * @param     string $novaInformacao The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AlteracaoInformacaoUsuarioQuery The current query, for fluid interface
     */
    public function filterByNovaInformacao($novaInformacao = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($novaInformacao)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $novaInformacao)) {
                $novaInformacao = str_replace('*', '%', $novaInformacao);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AlteracaoInformacaoUsuarioPeer::NOVA_INFORMACAO, $novaInformacao, $comparison);
    }

    /**
     * Filter the query on the Informacao_Antiga column
     *
     * Example usage:
     * <code>
     * $query->filterByInformacaoAntiga('fooValue');   // WHERE Informacao_Antiga = 'fooValue'
     * $query->filterByInformacaoAntiga('%fooValue%'); // WHERE Informacao_Antiga LIKE '%fooValue%'
     * </code>
     *
     * @param     string $informacaoAntiga The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AlteracaoInformacaoUsuarioQuery The current query, for fluid interface
     */
    public function filterByInformacaoAntiga($informacaoAntiga = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($informacaoAntiga)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $informacaoAntiga)) {
                $informacaoAntiga = str_replace('*', '%', $informacaoAntiga);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AlteracaoInformacaoUsuarioPeer::INFORMACAO_ANTIGA, $informacaoAntiga, $comparison);
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
     * @see       filterByUsuario()
     *
     * @param     mixed $idUsuario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AlteracaoInformacaoUsuarioQuery The current query, for fluid interface
     */
    public function filterByIdUsuario($idUsuario = null, $comparison = null)
    {
        if (is_array($idUsuario)) {
            $useMinMax = false;
            if (isset($idUsuario['min'])) {
                $this->addUsingAlias(AlteracaoInformacaoUsuarioPeer::ID_USUARIO, $idUsuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idUsuario['max'])) {
                $this->addUsingAlias(AlteracaoInformacaoUsuarioPeer::ID_USUARIO, $idUsuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AlteracaoInformacaoUsuarioPeer::ID_USUARIO, $idUsuario, $comparison);
    }

    /**
     * Filter the query on the Id_Tipo_Informacao_Id column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTipoInformacaoId(1234); // WHERE Id_Tipo_Informacao_Id = 1234
     * $query->filterByIdTipoInformacaoId(array(12, 34)); // WHERE Id_Tipo_Informacao_Id IN (12, 34)
     * $query->filterByIdTipoInformacaoId(array('min' => 12)); // WHERE Id_Tipo_Informacao_Id > 12
     * </code>
     *
     * @see       filterByTipoInformacao()
     *
     * @param     mixed $idTipoInformacaoId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AlteracaoInformacaoUsuarioQuery The current query, for fluid interface
     */
    public function filterByIdTipoInformacaoId($idTipoInformacaoId = null, $comparison = null)
    {
        if (is_array($idTipoInformacaoId)) {
            $useMinMax = false;
            if (isset($idTipoInformacaoId['min'])) {
                $this->addUsingAlias(AlteracaoInformacaoUsuarioPeer::ID_TIPO_INFORMACAO_ID, $idTipoInformacaoId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTipoInformacaoId['max'])) {
                $this->addUsingAlias(AlteracaoInformacaoUsuarioPeer::ID_TIPO_INFORMACAO_ID, $idTipoInformacaoId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AlteracaoInformacaoUsuarioPeer::ID_TIPO_INFORMACAO_ID, $idTipoInformacaoId, $comparison);
    }

    /**
     * Filter the query on the Id_Token column
     *
     * Example usage:
     * <code>
     * $query->filterByIdToken(1234); // WHERE Id_Token = 1234
     * $query->filterByIdToken(array(12, 34)); // WHERE Id_Token IN (12, 34)
     * $query->filterByIdToken(array('min' => 12)); // WHERE Id_Token > 12
     * </code>
     *
     * @see       filterByToken()
     *
     * @param     mixed $idToken The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AlteracaoInformacaoUsuarioQuery The current query, for fluid interface
     */
    public function filterByIdToken($idToken = null, $comparison = null)
    {
        if (is_array($idToken)) {
            $useMinMax = false;
            if (isset($idToken['min'])) {
                $this->addUsingAlias(AlteracaoInformacaoUsuarioPeer::ID_TOKEN, $idToken['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idToken['max'])) {
                $this->addUsingAlias(AlteracaoInformacaoUsuarioPeer::ID_TOKEN, $idToken['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AlteracaoInformacaoUsuarioPeer::ID_TOKEN, $idToken, $comparison);
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   AlteracaoInformacaoUsuarioQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(AlteracaoInformacaoUsuarioPeer::ID_USUARIO, $usuario->getId(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AlteracaoInformacaoUsuarioPeer::ID_USUARIO, $usuario->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByUsuario() only accepts arguments of type Usuario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Usuario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AlteracaoInformacaoUsuarioQuery The current query, for fluid interface
     */
    public function joinUsuario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Usuario');

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
            $this->addJoinObject($join, 'Usuario');
        }

        return $this;
    }

    /**
     * Use the Usuario relation Usuario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuarioQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUsuario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Usuario', 'UsuarioQuery');
    }

    /**
     * Filter the query by a related TipoInformacao object
     *
     * @param   TipoInformacao|PropelObjectCollection $tipoInformacao The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   AlteracaoInformacaoUsuarioQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByTipoInformacao($tipoInformacao, $comparison = null)
    {
        if ($tipoInformacao instanceof TipoInformacao) {
            return $this
                ->addUsingAlias(AlteracaoInformacaoUsuarioPeer::ID_TIPO_INFORMACAO_ID, $tipoInformacao->getId(), $comparison);
        } elseif ($tipoInformacao instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AlteracaoInformacaoUsuarioPeer::ID_TIPO_INFORMACAO_ID, $tipoInformacao->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByTipoInformacao() only accepts arguments of type TipoInformacao or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TipoInformacao relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AlteracaoInformacaoUsuarioQuery The current query, for fluid interface
     */
    public function joinTipoInformacao($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TipoInformacao');

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
            $this->addJoinObject($join, 'TipoInformacao');
        }

        return $this;
    }

    /**
     * Use the TipoInformacao relation TipoInformacao object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TipoInformacaoQuery A secondary query class using the current class as primary query
     */
    public function useTipoInformacaoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTipoInformacao($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TipoInformacao', 'TipoInformacaoQuery');
    }

    /**
     * Filter the query by a related Token object
     *
     * @param   Token|PropelObjectCollection $token The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   AlteracaoInformacaoUsuarioQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByToken($token, $comparison = null)
    {
        if ($token instanceof Token) {
            return $this
                ->addUsingAlias(AlteracaoInformacaoUsuarioPeer::ID_TOKEN, $token->getId(), $comparison);
        } elseif ($token instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AlteracaoInformacaoUsuarioPeer::ID_TOKEN, $token->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByToken() only accepts arguments of type Token or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Token relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AlteracaoInformacaoUsuarioQuery The current query, for fluid interface
     */
    public function joinToken($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Token');

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
            $this->addJoinObject($join, 'Token');
        }

        return $this;
    }

    /**
     * Use the Token relation Token object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TokenQuery A secondary query class using the current class as primary query
     */
    public function useTokenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinToken($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Token', 'TokenQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   AlteracaoInformacaoUsuario $alteracaoInformacaoUsuario Object to remove from the list of results
     *
     * @return AlteracaoInformacaoUsuarioQuery The current query, for fluid interface
     */
    public function prune($alteracaoInformacaoUsuario = null)
    {
        if ($alteracaoInformacaoUsuario) {
            $this->addUsingAlias(AlteracaoInformacaoUsuarioPeer::ID, $alteracaoInformacaoUsuario->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
