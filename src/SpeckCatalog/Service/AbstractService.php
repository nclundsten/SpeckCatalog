<?php

namespace SpeckCatalog\Service;

use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use SpeckCatalog\Model\AbstractModel;

class AbstractService implements ServiceLocatorAwareInterface
{
    protected $serviceLocator;

    public function find(array $data, $populate=false, $recursive=false)
    {
        $model = $this->getEntityMapper()->find($data);
        if(!$model instanceOf \SpeckCatalog\Model\AbstractModel) {
            return false;
        }
        if ($populate) {
            $this->populate($model, $recursive);
        }
        return $model;
    }

    public function populate($model, $recursive=false)
    {
        return $model;
    }

    public function getEntity($construct=null)
    {
        return $this->getEntityMapper()->getEntityPrototype($construct);
    }

    public function getAll()
    {
        return $this->getEntityMapper()->getAll();
    }

    public function getEntityMapper()
    {
        if (is_string($this->entityMapper) && strstr($this->entityMapper, '_mapper')) {
            $this->entityMapper = $this->getServiceLocator()->get($this->entityMapper);
        }
        return $this->entityMapper;
    }

    public function setEntityMapper($entityMapper)
    {
        $this->entityMapper = $entityMapper;
        return $this;
    }

    public function getServiceLocator()
    {
        return $this->serviceLocator;
    }

    public function setServiceLocator(ServiceLocatorInterface $serviceLocator)
    {
        $this->serviceLocator = $serviceLocator;
        return $this;
    }

    public function update($dataOrModel, array $originalValues = null)
    {
        return $this->getEntityMapper()->update($dataOrModel, $originalValues);
    }

    public function insert($model)
    {
        return $this->getEntityMapper()->insert($model);
    }

    public function usePaginator($options=array())
    {
        $this->getEntityMapper()->usePaginator($options);
        return $this;
    }
}
