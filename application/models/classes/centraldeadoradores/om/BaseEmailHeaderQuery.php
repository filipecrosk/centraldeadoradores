<?php


/**
 * Base class that represents a query for the 'email_header' table.
 *
 *
 *
 * @method EmailHeaderQuery orderByIdEmail($order = Criteria::ASC) Order by the Id_Email column
 * @method EmailHeaderQuery orderByIdUsuario($order = Criteria::ASC) Order by the Id_Usuario column
 * @method EmailHeaderQuery orderByDataCadastro($order = Criteria::ASC) Order by the Data_Cadastro column
 * @method EmailHeaderQuery orderByAssunto($order = Criteria::ASC) Order by the Assunto column
 * @method EmailHeaderQuery orderByCorpoMensagem($order = Criteria::ASC) Order by the Corpo_Mensagem column
 * @method EmailHeaderQuery orderByIdArquivo($order = Criteria::ASC) Order by the Id_Arquivo column
 *
 * @method EmailHeaderQuery groupByIdEmail() Group by the Id_Email column
 * @method EmailHeaderQuery groupByIdUsuario() Group by the Id_Usuario column
 * @method EmailHeaderQuery groupByDataCadastro() Group by the Data_Cadastro column
 * @method EmailHeaderQuery groupByAssunto() Group by the Assunto column
 * @method EmailHeaderQuery groupByCorpoMensagem() Group by the Corpo_Mensagem column
 * @method EmailHeaderQuery groupByIdArquivo() Group by the Id_Arquivo column
 *
 * @method EmailHeaderQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EmailHeaderQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EmailHeaderQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method EmailHeaderQuery leftJoinArquivo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Arquivo relation
 * @method EmailHeaderQuery rightJoinArquivo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Arquivo relation
 * @method EmailHeaderQuery innerJoinArquivo($relationAlias = null) Adds a INNER JOIN clause to the query using the Arquivo relation
 *
 * @method EmailHeaderQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method EmailHeaderQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method EmailHeaderQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method EmailHeaderQuery leftJoinEmailDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmailDetail relation
 * @method EmailHeaderQuery rightJoinEmailDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmailDetail relation
 * @method EmailHeaderQuery innerJoinEmailDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the EmailDetail relation
 *
 * @method EmailHeader findOne(PropelPDO $con = null) Return the first EmailHeader matching the query
 * @method EmailHeader findOneOrCreate(PropelPDO $con = null) Return the first EmailHeader matching the query, or a new EmailHeader object populated from the query conditions when no match is found
 *
 * @method EmailHeader findOneByIdEmail(int $Id_Email) Return the first EmailHeader filtered by the Id_Email column
 * @method EmailHeader findOneByIdUsuario(int $Id_Usuario) Return the first EmailHeader filtered by the Id_Usuario column
 * @method EmailHeader findOneByDataCadastro(string $Data_Cadastro) Return the first EmailHeader filtered by the Data_Cadastro column
 * @method EmailHeader findOneByAssunto(string $Assunto) Return the first EmailHeader filtered by the Assunto column
 * @method EmailHeader findOneByCorpoMensagem(string $Corpo_Mensagem) Return the first EmailHeader filtered by the Corpo_Mensagem column
 * @method EmailHeader findOneByIdArquivo(int $Id_Arquivo) Return the first EmailHeader filtered by the Id_Arquivo column
 *
 * @method array findByIdEmail(int $Id_Email) Return EmailHeader objects filtered by the Id_Email column
 * @method array findByIdUsuario(int $Id_Usuario) Return EmailHeader objects filtered by the Id_Usuario column
 * @method array findByDataCadastro(string $Data_Cadastro) Return EmailHeader objects filtered by the Data_Cadastro column
 * @method array findByAssunto(string $Assunto) Return EmailHeader objects filtered by the Assunto column
 * @method array findByCorpoMensagem(string $Corpo_Mensagem) Return EmailHeader objects filtered by the Corpo_Mensagem column
 * @method array findByIdArquivo(int $Id_Arquivo) Return EmailHeader objects filtered by the Id_Arquivo column
 *
 * @package    propel.generator.centraldeadoradores.om
 */
abstract class BaseEmailHeaderQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEmailHeaderQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'centraldeadoradores', $modelName = 'EmailHeader', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EmailHeaderQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     EmailHeaderQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EmailHeaderQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EmailHeaderQuery) {
            return $criteria;
        }
        $query = new EmailHeaderQuery();
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
     * @return   EmailHeader|EmailHeader[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EmailHeaderPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EmailHeaderPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   EmailHeader A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_EMAIL`, `ID_USUARIO`, `DATA_CADASTRO`, `ASSUNTO`, `CORPO_MENSAGEM`, `ID_ARQUIVO` FROM `email_header` WHERE `ID_EMAIL` = :p0';
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
            $obj = new EmailHeader();
            $obj->hydrate($row);
            EmailHeaderPeer::addInstanceToPool($obj, (string) $key);
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
     * @return EmailHeader|EmailHeader[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|EmailHeader[]|mixed the list of results, formatted by the current formatter
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
     * @return EmailHeaderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EmailHeaderPeer::ID_EMAIL, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EmailHeaderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EmailHeaderPeer::ID_EMAIL, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the Id_Email column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEmail(1234); // WHERE Id_Email = 1234
     * $query->filterByIdEmail(array(12, 34)); // WHERE Id_Email IN (12, 34)
     * $query->filterByIdEmail(array('min' => 12)); // WHERE Id_Email > 12
     * </code>
     *
     * @param     mixed $idEmail The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmailHeaderQuery The current query, for fluid interface
     */
    public function filterByIdEmail($idEmail = null, $comparison = null)
    {
        if (is_array($idEmail) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(EmailHeaderPeer::ID_EMAIL, $idEmail, $comparison);
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
     * @return EmailHeaderQuery The current query, for fluid interface
     */
    public function filterByIdUsuario($idUsuario = null, $comparison = null)
    {
        if (is_array($idUsuario)) {
            $useMinMax = false;
            if (isset($idUsuario['min'])) {
                $this->addUsingAlias(EmailHeaderPeer::ID_USUARIO, $idUsuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idUsuario['max'])) {
                $this->addUsingAlias(EmailHeaderPeer::ID_USUARIO, $idUsuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmailHeaderPeer::ID_USUARIO, $idUsuario, $comparison);
    }

    /**
     * Filter the query on the Data_Cadastro column
     *
     * Example usage:
     * <code>
     * $query->filterByDataCadastro('2011-03-14'); // WHERE Data_Cadastro = '2011-03-14'
     * $query->filterByDataCadastro('now'); // WHERE Data_Cadastro = '2011-03-14'
     * $query->filterByDataCadastro(array('max' => 'yesterday')); // WHERE Data_Cadastro > '2011-03-13'
     * </code>
     *
     * @param     mixed $dataCadastro The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmailHeaderQuery The current query, for fluid interface
     */
    public function filterByDataCadastro($dataCadastro = null, $comparison = null)
    {
        if (is_array($dataCadastro)) {
            $useMinMax = false;
            if (isset($dataCadastro['min'])) {
                $this->addUsingAlias(EmailHeaderPeer::DATA_CADASTRO, $dataCadastro['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dataCadastro['max'])) {
                $this->addUsingAlias(EmailHeaderPeer::DATA_CADASTRO, $dataCadastro['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmailHeaderPeer::DATA_CADASTRO, $dataCadastro, $comparison);
    }

    /**
     * Filter the query on the Assunto column
     *
     * Example usage:
     * <code>
     * $query->filterByAssunto('fooValue');   // WHERE Assunto = 'fooValue'
     * $query->filterByAssunto('%fooValue%'); // WHERE Assunto LIKE '%fooValue%'
     * </code>
     *
     * @param     string $assunto The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmailHeaderQuery The current query, for fluid interface
     */
    public function filterByAssunto($assunto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($assunto)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $assunto)) {
                $assunto = str_replace('*', '%', $assunto);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmailHeaderPeer::ASSUNTO, $assunto, $comparison);
    }

    /**
     * Filter the query on the Corpo_Mensagem column
     *
     * Example usage:
     * <code>
     * $query->filterByCorpoMensagem('fooValue');   // WHERE Corpo_Mensagem = 'fooValue'
     * $query->filterByCorpoMensagem('%fooValue%'); // WHERE Corpo_Mensagem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $corpoMensagem The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmailHeaderQuery The current query, for fluid interface
     */
    public function filterByCorpoMensagem($corpoMensagem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($corpoMensagem)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $corpoMensagem)) {
                $corpoMensagem = str_replace('*', '%', $corpoMensagem);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmailHeaderPeer::CORPO_MENSAGEM, $corpoMensagem, $comparison);
    }

    /**
     * Filter the query on the Id_Arquivo column
     *
     * Example usage:
     * <code>
     * $query->filterByIdArquivo(1234); // WHERE Id_Arquivo = 1234
     * $query->filterByIdArquivo(array(12, 34)); // WHERE Id_Arquivo IN (12, 34)
     * $query->filterByIdArquivo(array('min' => 12)); // WHERE Id_Arquivo > 12
     * </code>
     *
     * @see       filterByArquivo()
     *
     * @param     mixed $idArquivo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmailHeaderQuery The current query, for fluid interface
     */
    public function filterByIdArquivo($idArquivo = null, $comparison = null)
    {
        if (is_array($idArquivo)) {
            $useMinMax = false;
            if (isset($idArquivo['min'])) {
                $this->addUsingAlias(EmailHeaderPeer::ID_ARQUIVO, $idArquivo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idArquivo['max'])) {
                $this->addUsingAlias(EmailHeaderPeer::ID_ARQUIVO, $idArquivo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmailHeaderPeer::ID_ARQUIVO, $idArquivo, $comparison);
    }

    /**
     * Filter the query by a related Arquivo object
     *
     * @param   Arquivo|PropelObjectCollection $arquivo The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   EmailHeaderQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByArquivo($arquivo, $comparison = null)
    {
        if ($arquivo instanceof Arquivo) {
            return $this
                ->addUsingAlias(EmailHeaderPeer::ID_ARQUIVO, $arquivo->getId(), $comparison);
        } elseif ($arquivo instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EmailHeaderPeer::ID_ARQUIVO, $arquivo->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByArquivo() only accepts arguments of type Arquivo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Arquivo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmailHeaderQuery The current query, for fluid interface
     */
    public function joinArquivo($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Arquivo');

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
            $this->addJoinObject($join, 'Arquivo');
        }

        return $this;
    }

    /**
     * Use the Arquivo relation Arquivo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ArquivoQuery A secondary query class using the current class as primary query
     */
    public function useArquivoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinArquivo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Arquivo', 'ArquivoQuery');
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   EmailHeaderQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(EmailHeaderPeer::ID_USUARIO, $usuario->getId(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EmailHeaderPeer::ID_USUARIO, $usuario->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return EmailHeaderQuery The current query, for fluid interface
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
     * Filter the query by a related EmailDetail object
     *
     * @param   EmailDetail|PropelObjectCollection $emailDetail  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   EmailHeaderQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByEmailDetail($emailDetail, $comparison = null)
    {
        if ($emailDetail instanceof EmailDetail) {
            return $this
                ->addUsingAlias(EmailHeaderPeer::ID_EMAIL, $emailDetail->getIdEmail(), $comparison);
        } elseif ($emailDetail instanceof PropelObjectCollection) {
            return $this
                ->useEmailDetailQuery()
                ->filterByPrimaryKeys($emailDetail->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByEmailDetail() only accepts arguments of type EmailDetail or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EmailDetail relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmailHeaderQuery The current query, for fluid interface
     */
    public function joinEmailDetail($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EmailDetail');

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
            $this->addJoinObject($join, 'EmailDetail');
        }

        return $this;
    }

    /**
     * Use the EmailDetail relation EmailDetail object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmailDetailQuery A secondary query class using the current class as primary query
     */
    public function useEmailDetailQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmailDetail($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EmailDetail', 'EmailDetailQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   EmailHeader $emailHeader Object to remove from the list of results
     *
     * @return EmailHeaderQuery The current query, for fluid interface
     */
    public function prune($emailHeader = null)
    {
        if ($emailHeader) {
            $this->addUsingAlias(EmailHeaderPeer::ID_EMAIL, $emailHeader->getIdEmail(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
