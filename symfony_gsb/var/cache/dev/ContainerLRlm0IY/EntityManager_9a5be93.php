<?php

namespace ContainerLRlm0IY;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder04298 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer015c8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties23ff8 = [
        
    ];

    public function getConnection()
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'getConnection', array(), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'getMetadataFactory', array(), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'getExpressionBuilder', array(), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'beginTransaction', array(), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'getCache', array(), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->getCache();
    }

    public function transactional($func)
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'transactional', array('func' => $func), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'wrapInTransaction', array('func' => $func), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'commit', array(), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->commit();
    }

    public function rollback()
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'rollback', array(), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'getClassMetadata', array('className' => $className), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'createQuery', array('dql' => $dql), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'createNamedQuery', array('name' => $name), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'createQueryBuilder', array(), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'flush', array('entity' => $entity), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'clear', array('entityName' => $entityName), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->clear($entityName);
    }

    public function close()
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'close', array(), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->close();
    }

    public function persist($entity)
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'persist', array('entity' => $entity), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'remove', array('entity' => $entity), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'refresh', array('entity' => $entity), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'detach', array('entity' => $entity), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'merge', array('entity' => $entity), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'getRepository', array('entityName' => $entityName), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'contains', array('entity' => $entity), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'getEventManager', array(), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'getConfiguration', array(), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'isOpen', array(), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'getUnitOfWork', array(), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'getProxyFactory', array(), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'initializeObject', array('obj' => $obj), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'getFilters', array(), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'isFiltersStateClean', array(), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'hasFilters', array(), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return $this->valueHolder04298->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer015c8 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder04298) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder04298 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder04298->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, '__get', ['name' => $name], $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        if (isset(self::$publicProperties23ff8[$name])) {
            return $this->valueHolder04298->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04298;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder04298;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04298;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder04298;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, '__isset', array('name' => $name), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04298;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder04298;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, '__unset', array('name' => $name), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04298;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder04298;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, '__clone', array(), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        $this->valueHolder04298 = clone $this->valueHolder04298;
    }

    public function __sleep()
    {
        $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, '__sleep', array(), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;

        return array('valueHolder04298');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer015c8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer015c8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer015c8 && ($this->initializer015c8->__invoke($valueHolder04298, $this, 'initializeProxy', array(), $this->initializer015c8) || 1) && $this->valueHolder04298 = $valueHolder04298;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder04298;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder04298;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
