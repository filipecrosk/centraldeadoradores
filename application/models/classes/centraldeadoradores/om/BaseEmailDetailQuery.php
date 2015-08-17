<?php


/**
 * Base class that represents a query for the 'email_detail' table.
 *
 *
 *
 * @method EmailDetailQuery orderByIdEmailEnviado($order = Criteria::ASC) Order by the Id_Email_Enviado column
 * @method EmailDetailQuery orderByIdEmail($order = Criteria::ASC) Order by the Id_Email column
 * @method EmailDetailQuery orderByIdDestinatario($order = Criteria::ASC) Order by the Id_Destinatario column
 * @method EmailDetailQuery orderByEnviado($order = Criteria::ASC) Order by the Enviado column
 *
 * @method EmailDetailQuery groupByIdEmailEnviado() Group by the Id_Email_Enviado column
 * @method EmailDetailQuery groupByIdEmail() Group by the Id_Email column
 * @method EmailDetailQuery groupByIdDestinatario() Group by the Id_Destinatario column
 * @method EmailDetailQuery groupByEnviado() Group by the Enviado column
 *
 * @method EmailDetailQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EmailDetailQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EmailDetailQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method EmailDetailQuery leftJoinEmailHeader($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmailHeader relation
 * @method EmailDetailQuery rightJoinEmailHeader($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmailHeader relation
 * @method EmailDetailQuery innerJoinEmailHeader($relationAlias = null) Adds a INNER JOIN clause to the query using the EmailHeader relation
 *
 * @method EmailDetailQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method EmailDetailQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method EmailDetailQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method EmailDetail findOne(PropelPDO $con = null) Return the first EmailDetail matching the query
 * @method EmailDetail findOneOrCreate(PropelPDO $con = null) Return the first EmailDetail matching the query, or a new EmailDetail object populated from the query conditions when no match is found
 *
 * @method EmailDetail findOneByIdEmailEnviado(int $Id_Email_Enviado) Return the first EmailDetail filtered by the Id_Email_Enviado column
 * @method EmailDetail findOneByIdEmail(int $Id_Email) Return the first EmailDetail filtered by the Id_Email column
 * @method EmailDetail findOneByIdDestinatario(int $Id_Destinatario) Return the first EmailDetail filtered by the Id_Destinatario column
 * @method EmailDetail findOneByEnviado(boolean $Enviado) Return the first EmailDetail filtered by the Enviado column
 *
 * @method array findByIdEmailEnviado(int $Id_Email_Enviado) Return EmailDetail objects filtered by the Id_Email_Enviado column
 * @method array findByIdEmail(int $Id_Email) Return EmailDetail objects filtered by the Id_Email column
 * @method array findByIdDestinatario(int $Id_Destinatario) Return EmailDetail objects filtered by the Id_Destinatario column
 * @method array findByEnviado(boolean $Enviado) Return EmailDetail objects filtered by the Enviado column
 *
 * @package    propel.generator.centraldeadoradores.om
 */
abstract class BaseEmailDetailQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEmailDetailQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'centraldeadoradores', $modelName = 'EmailDetail', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EmailDetailQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     EmailDetailQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EmailDetailQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EmailDetailQuery) {
            return $criteria;
        }
        $query = new EmailDetailQuery();
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
     * @return   EmailDetail|EmailDetail[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EmailDetailPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EmailDetailPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   EmailDetail A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_EMAIL_ENVIADO`, `ID_EMAIL`, `ID_DESTINATARIO`, `ENVIADO` FROM `email_detail` WHERE `ID_EMAIL_ENVIADO` = :p0';
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
            $obj = new EmailDetail();
            $obj->hydrate($row);
            EmailDetailPeer::addInstanceToPool($obj, (string) $key);
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
     * @return EmailDetail|EmailDetail[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|EmailDetail[]|mixed the list of results, formatted by the current formatter
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
     * @return EmailDetailQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EmailDetailPeer::ID_EMAIL_ENVIADO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EmailDetailQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EmailDetailPeer::ID_EMAIL_ENVIADO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the Id_Email_Enviado column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEmailEnviado(1234); // WHERE Id_Email_Enviado = 1234
     * $query->filterByIdEmailEnviado(array(12, 34)); // WHERE Id_Email_Enviado IN (12, 34)
     * $query->filterByIdEmailEnviado(array('min' => 12)); // WHERE Id_Email_Enviado > 12
     * </code>
     *
     * @param     mixed $idEmailEnviado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmailDetailQuery The current query, for fluid interface
     */
    public function filterByIdEmailEnviado($idEmailEnviado = null, $comparison = null)
    {
        if (is_array($idEmailEnviado) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(EmailDetailPeer::ID_EMAIL_ENVIADO, $idEmailEnviado, $comparison);
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
     * @see       filterByEmailHeader()
     *
     * @param     mixed $idEmail The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmailDetailQuery The current query, for fluid interface
     */
    public function filterByIdEmail($idEmail = null, $comparison = null)
    {
        if (is_array($idEmail)) {
            $useMinMax = false;
            if (isset($idEmail['min'])) {
                $this->addUsingAlias(EmailDetailPeer::ID_EMAIL, $idEmail['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEmail['max'])) {
                $this->addUsingAlias(EmailDetailPeer::ID_EMAIL, $idEmail['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmailDetailPeer::ID_EMAIL, $idEmail, $comparison);
    }

    /**
     * Filter the query on the Id_Destinatario column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDestinatario(1234); // WHERE Id_Destinatario = 1234
     * $query->filterByIdDestinatario(array(12, 34)); // WHERE Id_Destinatario IN (12, 34)
     * $query->filterByIdDestinatario(array('min' => 12)); // WHERE Id_Destinatario > 12
     * </code>
     *
     * @see       filterByUsuario()
     *
     * @param     mixed $idDestinatario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmailDetailQuery The current query, for fluid interface
     */
    public function filterByIdDestinatario($idDestinatario = null, $comparison = null)
    {
        if (is_array($idDestinatario)) {
            $useMinMax = false;
            if (isset($idDestinatario['min'])) {
                $this->addUsingAlias(EmailDetailPeer::ID_DESTINATARIO, $idDestinatario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDestinatario['max'])) {
                $this->addUsingAlias(EmailDetailPeer::ID_DESTINATARIO, $idDestinatario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmailDetailPeer::ID_DESTINATARIO, $idDestinatario, $comparison);
    }

    /**
     * Filter the query on the Enviado column
     *
     * Example usage:
     * <code>
     * $query->filterByEnviado(true); // WHERE Enviado = true
     * $query->filterByEnviado('yes'); // WHERE Enviado = true
     * </code>
     *
     * @param     boolean|string $enviado The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmailDetailQuery The current query, for fluid interface
     */
    public function filterByEnviado($enviado = null, $comparison = null)
    {
        if (is_string($enviado)) {
            $Enviado = in_array(strtolower($enviado), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(EmailDetailPeer::ENVIADO, $enviado, $comparison);
    }

    /**
     * Filter the query by a related EmailHeader object
     *
     * @param   EmailHeader|PropelObjectCollection $emailHeader The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   EmailDetailQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByEmailHeader($emailHeader, $comparison = null)
    {
        if ($emailHeader instanceof EmailHeader) {
            return $this
                ->addUsingAlias(EmailDetailPeer::ID_EMAIL, $emailHeader->getIdEmail(), $comparison);
        } elseif ($emailHeader instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EmailDetailPeer::ID_EMAIL, $emailHeader->toKeyValue('PrimaryKey', 'IdEmail'), $comparison);
        } else {
            throw new PropelException('filterByEmailHeader() only accepts arguments of type EmailHeader or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EmailHeader relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmailDetailQuery The current query, for fluid interface
     */
    public function joinEmailHeader($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EmailHeader');

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
            $this->addJoinObject($join, 'EmailHeader');
        }

        return $this;
    }

    /**
     * Use the EmailHeader relation EmailHeader object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmailHeaderQuery A secondary query class using the current class as primary query
     */
    public function useEmailHeaderQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmailHeader($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EmailHeader', 'EmailHeaderQuery');
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   EmailDetailQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(EmailDetailPeer::ID_DESTINATARIO, $usuario->getId(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EmailDetailPeer::ID_DESTINATARIO, $usuario->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return EmailDetailQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   EmailDetail $emailDetail Object to remove from the list of results
     *
     * @return EmailDetailQuery The current query, for fluid interface
     */
    public function prune($emailDetail = null)
    {
        if ($emailDetail) {
            $this->addUsingAlias(EmailDetailPeer::ID_EMAIL_ENVIADO, $emailDetail->getIdEmailEnviado(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
