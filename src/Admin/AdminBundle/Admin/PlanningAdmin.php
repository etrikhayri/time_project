<?php
namespace Admin\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PlanningAdmin extends Admin
{
	// Fields to be shown on create/edit forms
	protected function configureFormFields(FormMapper $formMapper)
	{
		$formMapper
		->add('salle','entity',array('class'=>'Admin\AdminBundle\Entity\salle'))
	    ->add('classe','entity',array('class'=>'Admin\AdminBundle\Entity\classe'))
		->add('professeur','entity',array('class'=>'Admin\AdminBundle\Entity\professeur'))
		->add('jour')
		->add('hEntree')
		->add('hSortie')
		;
	}

	// Fields to be shown on filter forms
	protected function configureDatagridFilters(DatagridMapper $datagridMapper)
	{
		$datagridMapper
		->add('salle')
		->add('classe')
		->add('professeur')
		->add('jour')
		->add('hEntree')
		->add('hSortie')
		;
	}

	// Fields to be shown on lists
	protected function configureListFields(ListMapper $listMapper)
	{
		$listMapper
		->add('salle','entity',array('class'=>'Admin\AdminBundle\Entity\salle'))
	    ->add('classe','entity',array('class'=>'Admin\AdminBundle\Entity\classe'))
		->add('professeur','entity',array('class'=>'Admin\AdminBundle\Entity\professeur'))
		->addIdentifier('jour')
		->add('hEntree')
		->add('hSortie')
		;
	}
}