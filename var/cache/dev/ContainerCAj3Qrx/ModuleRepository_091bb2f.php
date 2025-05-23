<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Module\ModuleRepository|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb36e0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0984f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0c25a = [
        
    ];

    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer0984f && ($this->initializer0984f->__invoke($valueHolderb36e0, $this, 'getList', array(), $this->initializer0984f) || 1) && $this->valueHolderb36e0 = $valueHolderb36e0;

        return $this->valueHolderb36e0->getList();
    }

    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer0984f && ($this->initializer0984f->__invoke($valueHolderb36e0, $this, 'getInstalledModules', array(), $this->initializer0984f) || 1) && $this->valueHolderb36e0 = $valueHolderb36e0;

        return $this->valueHolderb36e0->getInstalledModules();
    }

    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer0984f && ($this->initializer0984f->__invoke($valueHolderb36e0, $this, 'getMustBeConfiguredModules', array(), $this->initializer0984f) || 1) && $this->valueHolderb36e0 = $valueHolderb36e0;

        return $this->valueHolderb36e0->getMustBeConfiguredModules();
    }

    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer0984f && ($this->initializer0984f->__invoke($valueHolderb36e0, $this, 'getUpgradableModules', array(), $this->initializer0984f) || 1) && $this->valueHolderb36e0 = $valueHolderb36e0;

        return $this->valueHolderb36e0->getUpgradableModules();
    }

    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer0984f && ($this->initializer0984f->__invoke($valueHolderb36e0, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer0984f) || 1) && $this->valueHolderb36e0 = $valueHolderb36e0;

        return $this->valueHolderb36e0->getModule($moduleName);
    }

    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer0984f && ($this->initializer0984f->__invoke($valueHolderb36e0, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer0984f) || 1) && $this->valueHolderb36e0 = $valueHolderb36e0;

        return $this->valueHolderb36e0->getModulePath($moduleName);
    }

    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer0984f && ($this->initializer0984f->__invoke($valueHolderb36e0, $this, 'setActionUrls', array('collection' => $collection), $this->initializer0984f) || 1) && $this->valueHolderb36e0 = $valueHolderb36e0;

        return $this->valueHolderb36e0->setActionUrls($collection);
    }

    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer0984f && ($this->initializer0984f->__invoke($valueHolderb36e0, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer0984f) || 1) && $this->valueHolderb36e0 = $valueHolderb36e0;

        return $this->valueHolderb36e0->clearCache($moduleName, $allShops);
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

        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);

        $instance->initializer0984f = $initializer;

        return $instance;
    }

    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;

        if (! $this->valueHolderb36e0) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolderb36e0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);

        }

        $this->valueHolderb36e0->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }

    public function & __get($name)
    {
        $this->initializer0984f && ($this->initializer0984f->__invoke($valueHolderb36e0, $this, '__get', ['name' => $name], $this->initializer0984f) || 1) && $this->valueHolderb36e0 = $valueHolderb36e0;

        if (isset(self::$publicProperties0c25a[$name])) {
            return $this->valueHolderb36e0->$name;
        }

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb36e0;

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

        $targetObject = $this->valueHolderb36e0;
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
        $this->initializer0984f && ($this->initializer0984f->__invoke($valueHolderb36e0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0984f) || 1) && $this->valueHolderb36e0 = $valueHolderb36e0;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb36e0;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb36e0;
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
        $this->initializer0984f && ($this->initializer0984f->__invoke($valueHolderb36e0, $this, '__isset', array('name' => $name), $this->initializer0984f) || 1) && $this->valueHolderb36e0 = $valueHolderb36e0;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb36e0;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb36e0;
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
        $this->initializer0984f && ($this->initializer0984f->__invoke($valueHolderb36e0, $this, '__unset', array('name' => $name), $this->initializer0984f) || 1) && $this->valueHolderb36e0 = $valueHolderb36e0;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb36e0;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb36e0;
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
        $this->initializer0984f && ($this->initializer0984f->__invoke($valueHolderb36e0, $this, '__clone', array(), $this->initializer0984f) || 1) && $this->valueHolderb36e0 = $valueHolderb36e0;

        $this->valueHolderb36e0 = clone $this->valueHolderb36e0;
    }

    public function __sleep()
    {
        $this->initializer0984f && ($this->initializer0984f->__invoke($valueHolderb36e0, $this, '__sleep', array(), $this->initializer0984f) || 1) && $this->valueHolderb36e0 = $valueHolderb36e0;

        return array('valueHolderb36e0');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0984f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0984f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0984f && ($this->initializer0984f->__invoke($valueHolderb36e0, $this, 'initializeProxy', array(), $this->initializer0984f) || 1) && $this->valueHolderb36e0 = $valueHolderb36e0;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb36e0;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb36e0;
    }
}
