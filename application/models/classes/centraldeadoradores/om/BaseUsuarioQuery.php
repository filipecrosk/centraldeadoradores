<?php


/**
 * Base class that represents a query for the 'usuario' table.
 *
 *
 *
 * @method UsuarioQuery orderById($order = Criteria::ASC) Order by the Id column
 * @method UsuarioQuery orderByNome($order = Criteria::ASC) Order by the Nome column
 * @method UsuarioQuery orderByApelido($order = Criteria::ASC) Order by the Apelido column
 * @method UsuarioQuery orderByEmail($order = Criteria::ASC) Order by the Email column
 * @method UsuarioQuery orderBySenha($order = Criteria::ASC) Order by the Senha column
 * @method UsuarioQuery orderByIdMinisterio($order = Criteria::ASC) Order by the Id_Ministerio column
 * @method UsuarioQuery orderByIdBanda($order = Criteria::ASC) Order by the Id_Banda column
 * @method UsuarioQuery orderByDesabilitado($order = Criteria::ASC) Order by the Desabilitado column
 * @method UsuarioQuery orderByNivelpermissao($order = Criteria::ASC) Order by the NivelPermissao column
 * @method UsuarioQuery orderByAniversario($order = Criteria::ASC) Order by the Aniversario column
 * @method UsuarioQuery orderByEndereco($order = Criteria::ASC) Order by the Endereco column
 * @method UsuarioQuery orderByTelefone($order = Criteria::ASC) Order by the Telefone column
 * @method UsuarioQuery orderByCelular($order = Criteria::ASC) Order by the Celular column
 *
 * @method UsuarioQuery groupById() Group by the Id column
 * @method UsuarioQuery groupByNome() Group by the Nome column
 * @method UsuarioQuery groupByApelido() Group by the Apelido column
 * @method UsuarioQuery groupByEmail() Group by the Email column
 * @method UsuarioQuery groupBySenha() Group by the Senha column
 * @method UsuarioQuery groupByIdMinisterio() Group by the Id_Ministerio column
 * @method UsuarioQuery groupByIdBanda() Group by the Id_Banda column
 * @method UsuarioQuery groupByDesabilitado() Group by the Desabilitado column
 * @method UsuarioQuery groupByNivelpermissao() Group by the NivelPermissao column
 * @method UsuarioQuery groupByAniversario() Group by the Aniversario column
 * @method UsuarioQuery groupByEndereco() Group by the Endereco column
 * @method UsuarioQuery groupByTelefone() Group by the Telefone column
 * @method UsuarioQuery groupByCelular() Group by the Celular column
 *
 * @method UsuarioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method UsuarioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method UsuarioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method UsuarioQuery leftJoinBandaRelatedByIdBanda($relationAlias = null) Adds a LEFT JOIN clause to the query using the BandaRelatedByIdBanda relation
 * @method UsuarioQuery rightJoinBandaRelatedByIdBanda($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BandaRelatedByIdBanda relation
 * @method UsuarioQuery innerJoinBandaRelatedByIdBanda($relationAlias = null) Adds a INNER JOIN clause to the query using the BandaRelatedByIdBanda relation
 *
 * @method UsuarioQuery leftJoinMinisterio($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ministerio relation
 * @method UsuarioQuery rightJoinMinisterio($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ministerio relation
 * @method UsuarioQuery innerJoinMinisterio($relationAlias = null) Adds a INNER JOIN clause to the query using the Ministerio relation
 *
 * @method UsuarioQuery leftJoinAlteracaoInformacaoUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the AlteracaoInformacaoUsuario relation
 * @method UsuarioQuery rightJoinAlteracaoInformacaoUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AlteracaoInformacaoUsuario relation
 * @method UsuarioQuery innerJoinAlteracaoInformacaoUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the AlteracaoInformacaoUsuario relation
 *
 * @method UsuarioQuery leftJoinBandaRelatedByIdLider($relationAlias = null) Adds a LEFT JOIN clause to the query using the BandaRelatedByIdLider relation
 * @method UsuarioQuery rightJoinBandaRelatedByIdLider($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BandaRelatedByIdLider relation
 * @method UsuarioQuery innerJoinBandaRelatedByIdLider($relationAlias = null) Adds a INNER JOIN clause to the query using the BandaRelatedByIdLider relation
 *
 * @method UsuarioQuery leftJoinDados($relationAlias = null) Adds a LEFT JOIN clause to the query using the Dados relation
 * @method UsuarioQuery rightJoinDados($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Dados relation
 * @method UsuarioQuery innerJoinDados($relationAlias = null) Adds a INNER JOIN clause to the query using the Dados relation
 *
 * @method UsuarioQuery leftJoinEmailDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmailDetail relation
 * @method UsuarioQuery rightJoinEmailDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmailDetail relation
 * @method UsuarioQuery innerJoinEmailDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the EmailDetail relation
 *
 * @method UsuarioQuery leftJoinEmailHeader($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmailHeader relation
 * @method UsuarioQuery rightJoinEmailHeader($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmailHeader relation
 * @method UsuarioQuery innerJoinEmailHeader($relationAlias = null) Adds a INNER JOIN clause to the query using the EmailHeader relation
 *
 * @method UsuarioQuery leftJoinEscalaPessoaRelatedByIdResponsavel($relationAlias = null) Adds a LEFT JOIN clause to the query using the EscalaPessoaRelatedByIdResponsavel relation
 * @method UsuarioQuery rightJoinEscalaPessoaRelatedByIdResponsavel($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EscalaPessoaRelatedByIdResponsavel relation
 * @method UsuarioQuery innerJoinEscalaPessoaRelatedByIdResponsavel($relationAlias = null) Adds a INNER JOIN clause to the query using the EscalaPessoaRelatedByIdResponsavel relation
 *
 * @method UsuarioQuery leftJoinEscalaPessoaRelatedByIdUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the EscalaPessoaRelatedByIdUsuario relation
 * @method UsuarioQuery rightJoinEscalaPessoaRelatedByIdUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EscalaPessoaRelatedByIdUsuario relation
 * @method UsuarioQuery innerJoinEscalaPessoaRelatedByIdUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the EscalaPessoaRelatedByIdUsuario relation
 *
 * @method UsuarioQuery leftJoinUsuarioFuncao($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioFuncao relation
 * @method UsuarioQuery rightJoinUsuarioFuncao($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioFuncao relation
 * @method UsuarioQuery innerJoinUsuarioFuncao($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioFuncao relation
 *
 * @method UsuarioQuery leftJoinUsuarioMinisterio($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioMinisterio relation
 * @method UsuarioQuery rightJoinUsuarioMinisterio($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioMinisterio relation
 * @method UsuarioQuery innerJoinUsuarioMinisterio($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioMinisterio relation
 *
 * @method Usuario findOne(PropelPDO $con = null) Return the first Usuario matching the query
 * @method Usuario findOneOrCreate(PropelPDO $con = null) Return the first Usuario matching the query, or a new Usuario object populated from the query conditions when no match is found
 *
 * @method Usuario findOneById(int $Id) Return the first Usuario filtered by the Id column
 * @method Usuario findOneByNome(string $Nome) Return the first Usuario filtered by the Nome column
 * @method Usuario findOneByApelido(string $Apelido) Return the first Usuario filtered by the Apelido column
 * @method Usuario findOneByEmail(string $Email) Return the first Usuario filtered by the Email column
 * @method Usuario findOneBySenha(string $Senha) Return the first Usuario filtered by the Senha column
 * @method Usuario findOneByIdMinisterio(int $Id_Ministerio) Return the first Usuario filtered by the Id_Ministerio column
 * @method Usuario findOneByIdBanda(int $Id_Banda) Return the first Usuario filtered by the Id_Banda column
 * @method Usuario findOneByDesabilitado(boolean $Desabilitado) Return the first Usuario filtered by the Desabilitado column
 * @method Usuario findOneByNivelpermissao(int $NivelPermissao) Return the first Usuario filtered by the NivelPermissao column
 * @method Usuario findOneByAniversario(string $Aniversario) Return the first Usuario filtered by the Aniversario column
 * @method Usuario findOneByEndereco(string $Endereco) Return the first Usuario filtered by the Endereco column
 * @method Usuario findOneByTelefone(string $Telefone) Return the first Usuario filtered by the Telefone column
 * @method Usuario findOneByCelular(string $Celular) Return the first Usuario filtered by the Celular column
 *
 * @method array findById(int $Id) Return Usuario objects filtered by the Id column
 * @method array findByNome(string $Nome) Return Usuario objects filtered by the Nome column
 * @method array findByApelido(string $Apelido) Return Usuario objects filtered by the Apelido column
 * @method array findByEmail(string $Email) Return Usuario objects filtered by the Email column
 * @method array findBySenha(string $Senha) Return Usuario objects filtered by the Senha column
 * @method array findByIdMinisterio(int $Id_Ministerio) Return Usuario objects filtered by the Id_Ministerio column
 * @method array findByIdBanda(int $Id_Banda) Return Usuario objects filtered by the Id_Banda column
 * @method array findByDesabilitado(boolean $Desabilitado) Return Usuario objects filtered by the Desabilitado column
 * @method array findByNivelpermissao(int $NivelPermissao) Return Usuario objects filtered by the NivelPermissao column
 * @method array findByAniversario(string $Aniversario) Return Usuario objects filtered by the Aniversario column
 * @method array findByEndereco(string $Endereco) Return Usuario objects filtered by the Endereco column
 * @method array findByTelefone(string $Telefone) Return Usuario objects filtered by the Telefone column
 * @method array findByCelular(string $Celular) Return Usuario objects filtered by the Celular column
 *
 * @package    propel.generator.centraldeadoradores.om
 */
abstract class BaseUsuarioQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseUsuarioQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'centraldeadoradores', $modelName = 'Usuario', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UsuarioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     UsuarioQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return UsuarioQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UsuarioQuery) {
            return $criteria;
        }
        $query = new UsuarioQuery();
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
     * @return   Usuario|Usuario[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = UsuarioPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Usuario A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `NOME`, `APELIDO`, `EMAIL`, `SENHA`, `ID_MINISTERIO`, `ID_BANDA`, `DESABILITADO`, `NIVELPERMISSAO`, `ANIVERSARIO`, `ENDERECO`, `TELEFONE`, `CELULAR` FROM `usuario` WHERE `ID` = :p0';
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
            $obj = new Usuario();
            $obj->hydrate($row);
            UsuarioPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Usuario|Usuario[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Usuario[]|mixed the list of results, formatted by the current formatter
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
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UsuarioPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UsuarioPeer::ID, $keys, Criteria::IN);
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
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(UsuarioPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the Nome column
     *
     * Example usage:
     * <code>
     * $query->filterByNome('fooValue');   // WHERE Nome = 'fooValue'
     * $query->filterByNome('%fooValue%'); // WHERE Nome LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nome The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByNome($nome = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nome)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nome)) {
                $nome = str_replace('*', '%', $nome);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::NOME, $nome, $comparison);
    }

    /**
     * Filter the query on the Apelido column
     *
     * Example usage:
     * <code>
     * $query->filterByApelido('fooValue');   // WHERE Apelido = 'fooValue'
     * $query->filterByApelido('%fooValue%'); // WHERE Apelido LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apelido The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByApelido($apelido = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apelido)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $apelido)) {
                $apelido = str_replace('*', '%', $apelido);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::APELIDO, $apelido, $comparison);
    }

    /**
     * Filter the query on the Email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE Email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE Email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the Senha column
     *
     * Example usage:
     * <code>
     * $query->filterBySenha('fooValue');   // WHERE Senha = 'fooValue'
     * $query->filterBySenha('%fooValue%'); // WHERE Senha LIKE '%fooValue%'
     * </code>
     *
     * @param     string $senha The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterBySenha($senha = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($senha)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $senha)) {
                $senha = str_replace('*', '%', $senha);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::SENHA, $senha, $comparison);
    }

    /**
     * Filter the query on the Id_Ministerio column
     *
     * Example usage:
     * <code>
     * $query->filterByIdMinisterio(1234); // WHERE Id_Ministerio = 1234
     * $query->filterByIdMinisterio(array(12, 34)); // WHERE Id_Ministerio IN (12, 34)
     * $query->filterByIdMinisterio(array('min' => 12)); // WHERE Id_Ministerio > 12
     * </code>
     *
     * @see       filterByMinisterio()
     *
     * @param     mixed $idMinisterio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByIdMinisterio($idMinisterio = null, $comparison = null)
    {
        if (is_array($idMinisterio)) {
            $useMinMax = false;
            if (isset($idMinisterio['min'])) {
                $this->addUsingAlias(UsuarioPeer::ID_MINISTERIO, $idMinisterio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idMinisterio['max'])) {
                $this->addUsingAlias(UsuarioPeer::ID_MINISTERIO, $idMinisterio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::ID_MINISTERIO, $idMinisterio, $comparison);
    }

    /**
     * Filter the query on the Id_Banda column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBanda(1234); // WHERE Id_Banda = 1234
     * $query->filterByIdBanda(array(12, 34)); // WHERE Id_Banda IN (12, 34)
     * $query->filterByIdBanda(array('min' => 12)); // WHERE Id_Banda > 12
     * </code>
     *
     * @see       filterByBandaRelatedByIdBanda()
     *
     * @param     mixed $idBanda The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByIdBanda($idBanda = null, $comparison = null)
    {
        if (is_array($idBanda)) {
            $useMinMax = false;
            if (isset($idBanda['min'])) {
                $this->addUsingAlias(UsuarioPeer::ID_BANDA, $idBanda['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBanda['max'])) {
                $this->addUsingAlias(UsuarioPeer::ID_BANDA, $idBanda['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::ID_BANDA, $idBanda, $comparison);
    }

    /**
     * Filter the query on the Desabilitado column
     *
     * Example usage:
     * <code>
     * $query->filterByDesabilitado(true); // WHERE Desabilitado = true
     * $query->filterByDesabilitado('yes'); // WHERE Desabilitado = true
     * </code>
     *
     * @param     boolean|string $desabilitado The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByDesabilitado($desabilitado = null, $comparison = null)
    {
        if (is_string($desabilitado)) {
            $Desabilitado = in_array(strtolower($desabilitado), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(UsuarioPeer::DESABILITADO, $desabilitado, $comparison);
    }

    /**
     * Filter the query on the NivelPermissao column
     *
     * Example usage:
     * <code>
     * $query->filterByNivelpermissao(1234); // WHERE NivelPermissao = 1234
     * $query->filterByNivelpermissao(array(12, 34)); // WHERE NivelPermissao IN (12, 34)
     * $query->filterByNivelpermissao(array('min' => 12)); // WHERE NivelPermissao > 12
     * </code>
     *
     * @param     mixed $nivelpermissao The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByNivelpermissao($nivelpermissao = null, $comparison = null)
    {
        if (is_array($nivelpermissao)) {
            $useMinMax = false;
            if (isset($nivelpermissao['min'])) {
                $this->addUsingAlias(UsuarioPeer::NIVELPERMISSAO, $nivelpermissao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nivelpermissao['max'])) {
                $this->addUsingAlias(UsuarioPeer::NIVELPERMISSAO, $nivelpermissao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::NIVELPERMISSAO, $nivelpermissao, $comparison);
    }

    /**
     * Filter the query on the Aniversario column
     *
     * Example usage:
     * <code>
     * $query->filterByAniversario('fooValue');   // WHERE Aniversario = 'fooValue'
     * $query->filterByAniversario('%fooValue%'); // WHERE Aniversario LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aniversario The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByAniversario($aniversario = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aniversario)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $aniversario)) {
                $aniversario = str_replace('*', '%', $aniversario);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::ANIVERSARIO, $aniversario, $comparison);
    }

    /**
     * Filter the query on the Endereco column
     *
     * Example usage:
     * <code>
     * $query->filterByEndereco('fooValue');   // WHERE Endereco = 'fooValue'
     * $query->filterByEndereco('%fooValue%'); // WHERE Endereco LIKE '%fooValue%'
     * </code>
     *
     * @param     string $endereco The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByEndereco($endereco = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($endereco)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $endereco)) {
                $endereco = str_replace('*', '%', $endereco);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::ENDERECO, $endereco, $comparison);
    }

    /**
     * Filter the query on the Telefone column
     *
     * Example usage:
     * <code>
     * $query->filterByTelefone('fooValue');   // WHERE Telefone = 'fooValue'
     * $query->filterByTelefone('%fooValue%'); // WHERE Telefone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telefone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByTelefone($telefone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telefone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telefone)) {
                $telefone = str_replace('*', '%', $telefone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::TELEFONE, $telefone, $comparison);
    }

    /**
     * Filter the query on the Celular column
     *
     * Example usage:
     * <code>
     * $query->filterByCelular('fooValue');   // WHERE Celular = 'fooValue'
     * $query->filterByCelular('%fooValue%'); // WHERE Celular LIKE '%fooValue%'
     * </code>
     *
     * @param     string $celular The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByCelular($celular = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($celular)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $celular)) {
                $celular = str_replace('*', '%', $celular);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::CELULAR, $celular, $comparison);
    }

    /**
     * Filter the query by a related Banda object
     *
     * @param   Banda|PropelObjectCollection $banda The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   UsuarioQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByBandaRelatedByIdBanda($banda, $comparison = null)
    {
        if ($banda instanceof Banda) {
            return $this
                ->addUsingAlias(UsuarioPeer::ID_BANDA, $banda->getId(), $comparison);
        } elseif ($banda instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(UsuarioPeer::ID_BANDA, $banda->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByBandaRelatedByIdBanda() only accepts arguments of type Banda or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BandaRelatedByIdBanda relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinBandaRelatedByIdBanda($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('BandaRelatedByIdBanda');

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
            $this->addJoinObject($join, 'BandaRelatedByIdBanda');
        }

        return $this;
    }

    /**
     * Use the BandaRelatedByIdBanda relation Banda object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   BandaQuery A secondary query class using the current class as primary query
     */
    public function useBandaRelatedByIdBandaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinBandaRelatedByIdBanda($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'BandaRelatedByIdBanda', 'BandaQuery');
    }

    /**
     * Filter the query by a related Ministerio object
     *
     * @param   Ministerio|PropelObjectCollection $ministerio The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   UsuarioQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByMinisterio($ministerio, $comparison = null)
    {
        if ($ministerio instanceof Ministerio) {
            return $this
                ->addUsingAlias(UsuarioPeer::ID_MINISTERIO, $ministerio->getId(), $comparison);
        } elseif ($ministerio instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(UsuarioPeer::ID_MINISTERIO, $ministerio->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByMinisterio() only accepts arguments of type Ministerio or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Ministerio relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinMinisterio($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Ministerio');

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
            $this->addJoinObject($join, 'Ministerio');
        }

        return $this;
    }

    /**
     * Use the Ministerio relation Ministerio object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   MinisterioQuery A secondary query class using the current class as primary query
     */
    public function useMinisterioQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinMinisterio($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ministerio', 'MinisterioQuery');
    }

    /**
     * Filter the query by a related AlteracaoInformacaoUsuario object
     *
     * @param   AlteracaoInformacaoUsuario|PropelObjectCollection $alteracaoInformacaoUsuario  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   UsuarioQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByAlteracaoInformacaoUsuario($alteracaoInformacaoUsuario, $comparison = null)
    {
        if ($alteracaoInformacaoUsuario instanceof AlteracaoInformacaoUsuario) {
            return $this
                ->addUsingAlias(UsuarioPeer::ID, $alteracaoInformacaoUsuario->getIdUsuario(), $comparison);
        } elseif ($alteracaoInformacaoUsuario instanceof PropelObjectCollection) {
            return $this
                ->useAlteracaoInformacaoUsuarioQuery()
                ->filterByPrimaryKeys($alteracaoInformacaoUsuario->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAlteracaoInformacaoUsuario() only accepts arguments of type AlteracaoInformacaoUsuario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the AlteracaoInformacaoUsuario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinAlteracaoInformacaoUsuario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('AlteracaoInformacaoUsuario');

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
            $this->addJoinObject($join, 'AlteracaoInformacaoUsuario');
        }

        return $this;
    }

    /**
     * Use the AlteracaoInformacaoUsuario relation AlteracaoInformacaoUsuario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AlteracaoInformacaoUsuarioQuery A secondary query class using the current class as primary query
     */
    public function useAlteracaoInformacaoUsuarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAlteracaoInformacaoUsuario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'AlteracaoInformacaoUsuario', 'AlteracaoInformacaoUsuarioQuery');
    }

    /**
     * Filter the query by a related Banda object
     *
     * @param   Banda|PropelObjectCollection $banda  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   UsuarioQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByBandaRelatedByIdLider($banda, $comparison = null)
    {
        if ($banda instanceof Banda) {
            return $this
                ->addUsingAlias(UsuarioPeer::ID, $banda->getIdLider(), $comparison);
        } elseif ($banda instanceof PropelObjectCollection) {
            return $this
                ->useBandaRelatedByIdLiderQuery()
                ->filterByPrimaryKeys($banda->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByBandaRelatedByIdLider() only accepts arguments of type Banda or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BandaRelatedByIdLider relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinBandaRelatedByIdLider($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('BandaRelatedByIdLider');

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
            $this->addJoinObject($join, 'BandaRelatedByIdLider');
        }

        return $this;
    }

    /**
     * Use the BandaRelatedByIdLider relation Banda object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   BandaQuery A secondary query class using the current class as primary query
     */
    public function useBandaRelatedByIdLiderQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinBandaRelatedByIdLider($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'BandaRelatedByIdLider', 'BandaQuery');
    }

    /**
     * Filter the query by a related Dados object
     *
     * @param   Dados|PropelObjectCollection $dados  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   UsuarioQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByDados($dados, $comparison = null)
    {
        if ($dados instanceof Dados) {
            return $this
                ->addUsingAlias(UsuarioPeer::ID, $dados->getIdUsuario(), $comparison);
        } elseif ($dados instanceof PropelObjectCollection) {
            return $this
                ->useDadosQuery()
                ->filterByPrimaryKeys($dados->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByDados() only accepts arguments of type Dados or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Dados relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinDados($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Dados');

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
            $this->addJoinObject($join, 'Dados');
        }

        return $this;
    }

    /**
     * Use the Dados relation Dados object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DadosQuery A secondary query class using the current class as primary query
     */
    public function useDadosQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDados($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Dados', 'DadosQuery');
    }

    /**
     * Filter the query by a related EmailDetail object
     *
     * @param   EmailDetail|PropelObjectCollection $emailDetail  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   UsuarioQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByEmailDetail($emailDetail, $comparison = null)
    {
        if ($emailDetail instanceof EmailDetail) {
            return $this
                ->addUsingAlias(UsuarioPeer::ID, $emailDetail->getIdDestinatario(), $comparison);
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
     * @return UsuarioQuery The current query, for fluid interface
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
     * Filter the query by a related EmailHeader object
     *
     * @param   EmailHeader|PropelObjectCollection $emailHeader  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   UsuarioQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByEmailHeader($emailHeader, $comparison = null)
    {
        if ($emailHeader instanceof EmailHeader) {
            return $this
                ->addUsingAlias(UsuarioPeer::ID, $emailHeader->getIdUsuario(), $comparison);
        } elseif ($emailHeader instanceof PropelObjectCollection) {
            return $this
                ->useEmailHeaderQuery()
                ->filterByPrimaryKeys($emailHeader->getPrimaryKeys())
                ->endUse();
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
     * @return UsuarioQuery The current query, for fluid interface
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
     * Filter the query by a related EscalaPessoa object
     *
     * @param   EscalaPessoa|PropelObjectCollection $escalaPessoa  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   UsuarioQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByEscalaPessoaRelatedByIdResponsavel($escalaPessoa, $comparison = null)
    {
        if ($escalaPessoa instanceof EscalaPessoa) {
            return $this
                ->addUsingAlias(UsuarioPeer::ID, $escalaPessoa->getIdResponsavel(), $comparison);
        } elseif ($escalaPessoa instanceof PropelObjectCollection) {
            return $this
                ->useEscalaPessoaRelatedByIdResponsavelQuery()
                ->filterByPrimaryKeys($escalaPessoa->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByEscalaPessoaRelatedByIdResponsavel() only accepts arguments of type EscalaPessoa or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EscalaPessoaRelatedByIdResponsavel relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinEscalaPessoaRelatedByIdResponsavel($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EscalaPessoaRelatedByIdResponsavel');

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
            $this->addJoinObject($join, 'EscalaPessoaRelatedByIdResponsavel');
        }

        return $this;
    }

    /**
     * Use the EscalaPessoaRelatedByIdResponsavel relation EscalaPessoa object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EscalaPessoaQuery A secondary query class using the current class as primary query
     */
    public function useEscalaPessoaRelatedByIdResponsavelQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEscalaPessoaRelatedByIdResponsavel($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EscalaPessoaRelatedByIdResponsavel', 'EscalaPessoaQuery');
    }

    /**
     * Filter the query by a related EscalaPessoa object
     *
     * @param   EscalaPessoa|PropelObjectCollection $escalaPessoa  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   UsuarioQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByEscalaPessoaRelatedByIdUsuario($escalaPessoa, $comparison = null)
    {
        if ($escalaPessoa instanceof EscalaPessoa) {
            return $this
                ->addUsingAlias(UsuarioPeer::ID, $escalaPessoa->getIdUsuario(), $comparison);
        } elseif ($escalaPessoa instanceof PropelObjectCollection) {
            return $this
                ->useEscalaPessoaRelatedByIdUsuarioQuery()
                ->filterByPrimaryKeys($escalaPessoa->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByEscalaPessoaRelatedByIdUsuario() only accepts arguments of type EscalaPessoa or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EscalaPessoaRelatedByIdUsuario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinEscalaPessoaRelatedByIdUsuario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EscalaPessoaRelatedByIdUsuario');

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
            $this->addJoinObject($join, 'EscalaPessoaRelatedByIdUsuario');
        }

        return $this;
    }

    /**
     * Use the EscalaPessoaRelatedByIdUsuario relation EscalaPessoa object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EscalaPessoaQuery A secondary query class using the current class as primary query
     */
    public function useEscalaPessoaRelatedByIdUsuarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEscalaPessoaRelatedByIdUsuario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EscalaPessoaRelatedByIdUsuario', 'EscalaPessoaQuery');
    }

    /**
     * Filter the query by a related UsuarioFuncao object
     *
     * @param   UsuarioFuncao|PropelObjectCollection $usuarioFuncao  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   UsuarioQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByUsuarioFuncao($usuarioFuncao, $comparison = null)
    {
        if ($usuarioFuncao instanceof UsuarioFuncao) {
            return $this
                ->addUsingAlias(UsuarioPeer::ID, $usuarioFuncao->getIdUsuario(), $comparison);
        } elseif ($usuarioFuncao instanceof PropelObjectCollection) {
            return $this
                ->useUsuarioFuncaoQuery()
                ->filterByPrimaryKeys($usuarioFuncao->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByUsuarioFuncao() only accepts arguments of type UsuarioFuncao or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UsuarioFuncao relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinUsuarioFuncao($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UsuarioFuncao');

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
            $this->addJoinObject($join, 'UsuarioFuncao');
        }

        return $this;
    }

    /**
     * Use the UsuarioFuncao relation UsuarioFuncao object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuarioFuncaoQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioFuncaoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUsuarioFuncao($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UsuarioFuncao', 'UsuarioFuncaoQuery');
    }

    /**
     * Filter the query by a related UsuarioMinisterio object
     *
     * @param   UsuarioMinisterio|PropelObjectCollection $usuarioMinisterio  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   UsuarioQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByUsuarioMinisterio($usuarioMinisterio, $comparison = null)
    {
        if ($usuarioMinisterio instanceof UsuarioMinisterio) {
            return $this
                ->addUsingAlias(UsuarioPeer::ID, $usuarioMinisterio->getIdUsuario(), $comparison);
        } elseif ($usuarioMinisterio instanceof PropelObjectCollection) {
            return $this
                ->useUsuarioMinisterioQuery()
                ->filterByPrimaryKeys($usuarioMinisterio->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByUsuarioMinisterio() only accepts arguments of type UsuarioMinisterio or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UsuarioMinisterio relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinUsuarioMinisterio($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UsuarioMinisterio');

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
            $this->addJoinObject($join, 'UsuarioMinisterio');
        }

        return $this;
    }

    /**
     * Use the UsuarioMinisterio relation UsuarioMinisterio object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuarioMinisterioQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioMinisterioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUsuarioMinisterio($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UsuarioMinisterio', 'UsuarioMinisterioQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Usuario $usuario Object to remove from the list of results
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function prune($usuario = null)
    {
        if ($usuario) {
            $this->addUsingAlias(UsuarioPeer::ID, $usuario->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
