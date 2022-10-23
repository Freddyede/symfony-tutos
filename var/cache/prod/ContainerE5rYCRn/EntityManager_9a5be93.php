<?php

namespace ContainerE5rYCRn;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder3df7c = null;
    private $initializer87d36 = null;
    private static $publicProperties81d0e = [
        
    ];
    public function getConnection()
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'getConnection', array(), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'getMetadataFactory', array(), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'getExpressionBuilder', array(), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'beginTransaction', array(), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'getCache', array(), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->getCache();
    }
    public function transactional($func)
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'transactional', array('func' => $func), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'commit', array(), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->commit();
    }
    public function rollback()
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'rollback', array(), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'getClassMetadata', array('className' => $className), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'createQuery', array('dql' => $dql), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'createNamedQuery', array('name' => $name), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'createQueryBuilder', array(), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'flush', array('entity' => $entity), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'clear', array('entityName' => $entityName), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->clear($entityName);
    }
    public function close()
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'close', array(), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->close();
    }
    public function persist($entity)
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'persist', array('entity' => $entity), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'remove', array('entity' => $entity), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'refresh', array('entity' => $entity), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'detach', array('entity' => $entity), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'merge', array('entity' => $entity), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'contains', array('entity' => $entity), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'getEventManager', array(), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'getConfiguration', array(), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'isOpen', array(), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'getUnitOfWork', array(), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'getProxyFactory', array(), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'initializeObject', array('obj' => $obj), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'getFilters', array(), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'isFiltersStateClean', array(), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'hasFilters', array(), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return $this->valueHolder3df7c->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer87d36 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;
        if (! $this->valueHolder3df7c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3df7c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder3df7c->__construct($conn, $config);
    }
    public function & __get($name)
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, '__get', ['name' => $name], $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        if (isset(self::$publicProperties81d0e[$name])) {
            return $this->valueHolder3df7c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3df7c;
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
        $targetObject = $this->valueHolder3df7c;
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
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3df7c;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder3df7c;
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
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, '__isset', array('name' => $name), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3df7c;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder3df7c;
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
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, '__unset', array('name' => $name), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3df7c;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder3df7c;
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
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, '__clone', array(), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        $this->valueHolder3df7c = clone $this->valueHolder3df7c;
    }
    public function __sleep()
    {
        $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, '__sleep', array(), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
        return array('valueHolder3df7c');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer87d36 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer87d36;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer87d36 && ($this->initializer87d36->__invoke($valueHolder3df7c, $this, 'initializeProxy', array(), $this->initializer87d36) || 1) && $this->valueHolder3df7c = $valueHolder3df7c;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3df7c;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3df7c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
