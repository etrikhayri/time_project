<?php
namespace Admin\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ProfesseurAdmin extends Admin
{
	// Fields to be shown on create/edit forms
	protected function configureFormFields(FormMapper $formMapper)
	{
		$formMapper
		->add('matiere','entity',array('class'=>'Admin\AdminBundle\Entity\matiere'))
		->add('nom')
		->add('prenom')
		->add('adresse')
		->add('cin')
		->add('mail')
		->add('tel')
		
		;
	}

	// Fields to be shown on filter forms
	protected function configureDatagridFilters(DatagridMapper $datagridMapper)
	{
		$datagridMapper
		->add('matiere')
		->add('nom')
		->add('prenom')
		->add('adresse')
		->add('cin')
		->add('mail')
		->add('tel')
		;
	}

	// Fields to be shown on lists
	protected function configureListFields(ListMapper $listMapper)
	{
		$listMapper
		->addIdentifier('matiere','entity',array('class'=>'Admin\AdminBundle\Entity\matiere'))
		->add('nom')
		->add('prenom')
		->add('adresse')
		->add('cin')
		->add('mail')
		->add('tel')
		;
	}
}