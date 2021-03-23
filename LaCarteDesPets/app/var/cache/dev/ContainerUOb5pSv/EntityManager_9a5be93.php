<?php

namespace ContainerUOb5pSv;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder52eee = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer57e1f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties56e4a = [
        
    ];

    public function getConnection()
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'getConnection', array(), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'getMetadataFactory', array(), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'getExpressionBuilder', array(), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'beginTransaction', array(), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'getCache', array(), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->getCache();
    }

    public function transactional($func)
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'transactional', array('func' => $func), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->transactional($func);
    }

    public function commit()
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'commit', array(), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->commit();
    }

    public function rollback()
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'rollback', array(), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'getClassMetadata', array('className' => $className), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'createQuery', array('dql' => $dql), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'createNamedQuery', array('name' => $name), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'createQueryBuilder', array(), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'flush', array('entity' => $entity), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'clear', array('entityName' => $entityName), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->clear($entityName);
    }

    public function close()
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'close', array(), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->close();
    }

    public function persist($entity)
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'persist', array('entity' => $entity), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'remove', array('entity' => $entity), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'refresh', array('entity' => $entity), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'detach', array('entity' => $entity), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'merge', array('entity' => $entity), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'getRepository', array('entityName' => $entityName), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'contains', array('entity' => $entity), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'getEventManager', array(), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'getConfiguration', array(), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'isOpen', array(), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'getUnitOfWork', array(), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'getProxyFactory', array(), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'initializeObject', array('obj' => $obj), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'getFilters', array(), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'isFiltersStateClean', array(), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'hasFilters', array(), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return $this->valueHolder52eee->hasFilters();
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

        $instance->initializer57e1f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder52eee) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder52eee = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder52eee->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, '__get', ['name' => $name], $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        if (isset(self::$publicProperties56e4a[$name])) {
            return $this->valueHolder52eee->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder52eee;

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

        $targetObject = $this->valueHolder52eee;
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
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder52eee;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder52eee;
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
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, '__isset', array('name' => $name), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder52eee;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder52eee;
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
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, '__unset', array('name' => $name), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder52eee;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder52eee;
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
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, '__clone', array(), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        $this->valueHolder52eee = clone $this->valueHolder52eee;
    }

    public function __sleep()
    {
        $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, '__sleep', array(), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;

        return array('valueHolder52eee');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer57e1f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer57e1f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer57e1f && ($this->initializer57e1f->__invoke($valueHolder52eee, $this, 'initializeProxy', array(), $this->initializer57e1f) || 1) && $this->valueHolder52eee = $valueHolder52eee;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder52eee;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder52eee;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
