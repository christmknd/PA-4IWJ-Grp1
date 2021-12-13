<?php

namespace Container3Tsg6D1;

include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';
class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder96272 = null;
    private $initializer76522 = null;
    private static $publicProperties6c67d = [
        
    ];
    public function getConnection()
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'getConnection', array(), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'getMetadataFactory', array(), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'getExpressionBuilder', array(), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'beginTransaction', array(), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'getCache', array(), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->getCache();
    }
    public function transactional($func)
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'transactional', array('func' => $func), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'wrapInTransaction', array('func' => $func), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'commit', array(), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->commit();
    }
    public function rollback()
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'rollback', array(), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'getClassMetadata', array('className' => $className), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'createQuery', array('dql' => $dql), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'createNamedQuery', array('name' => $name), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'createQueryBuilder', array(), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'flush', array('entity' => $entity), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'clear', array('entityName' => $entityName), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->clear($entityName);
    }
    public function close()
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'close', array(), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->close();
    }
    public function persist($entity)
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'persist', array('entity' => $entity), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'remove', array('entity' => $entity), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'refresh', array('entity' => $entity), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'detach', array('entity' => $entity), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'merge', array('entity' => $entity), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'getRepository', array('entityName' => $entityName), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'contains', array('entity' => $entity), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'getEventManager', array(), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'getConfiguration', array(), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'isOpen', array(), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'getUnitOfWork', array(), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'getProxyFactory', array(), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'initializeObject', array('obj' => $obj), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'getFilters', array(), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'isFiltersStateClean', array(), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'hasFilters', array(), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return $this->valueHolder96272->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer76522 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder96272) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder96272 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder96272->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, '__get', ['name' => $name], $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        if (isset(self::$publicProperties6c67d[$name])) {
            return $this->valueHolder96272->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder96272;
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
        $targetObject = $this->valueHolder96272;
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
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder96272;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder96272;
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
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, '__isset', array('name' => $name), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder96272;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder96272;
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
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, '__unset', array('name' => $name), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder96272;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder96272;
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
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, '__clone', array(), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        $this->valueHolder96272 = clone $this->valueHolder96272;
    }
    public function __sleep()
    {
        $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, '__sleep', array(), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
        return array('valueHolder96272');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer76522 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer76522;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer76522 && ($this->initializer76522->__invoke($valueHolder96272, $this, 'initializeProxy', array(), $this->initializer76522) || 1) && $this->valueHolder96272 = $valueHolder96272;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder96272;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder96272;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
