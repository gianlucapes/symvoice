<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'maker.entity_class_generator' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\maker-bundle\\src\\Doctrine\\EntityClassGenerator.php';

$this->services['maker.entity_class_generator'] = $instance = new \Symfony\Bundle\MakerBundle\Doctrine\EntityClassGenerator(${($_ = isset($this->services['maker.generator']) ? $this->services['maker.generator'] : $this->load('getMaker_GeneratorService.php')) && false ?: '_'}, ${($_ = isset($this->services['maker.doctrine_helper']) ? $this->services['maker.doctrine_helper'] : $this->load('getMaker_DoctrineHelperService.php')) && false ?: '_'});

$instance->setMangerRegistryClassName('Doctrine\\Persistence\\ManagerRegistry');

return $instance;
