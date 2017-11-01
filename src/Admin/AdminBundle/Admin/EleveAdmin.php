<?php
namespace Admin\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class EleveAdmin extends Admin
{
	// Fields to be shown on create/edit forms
	protected function configureFormFields(FormMapper $formMapper)
	{
		$formMapper
		->add('classe','entity',array('class'=>'Admin\AdminBundle\Entity\classe'))
		->add('identite')
		->add('nom')
		->add('prenom')
		->add('cin')
		->add('nationalite')
		->add('sexe')
		->add('adresse')
		->add('mail')
		->add('tel')
		;
	}

	// Fields to be shown on filter forms
	protected function configureDatagridFilters(DatagridMapper $datagridMapper)
	{
		$datagridMapper
		->add('classe')
		->add('identite')
		->add('nom')
		->add('prenom')
		->add('cin')
		->add('nationalite')
		->add('sexe')
		->add('adresse')
		->add('mail')
		->add('tel')
		;
	}

	// Fields to be shown on lists
	protected function configureListFields(ListMapper $listMapper)
	{
		$listMapper
		->add('classe','entity',array('class'=>'Admin\AdminBundle\Entity\classe'))
		->addIdentifier('identite')
		->add('nom')
		->add('prenom')
		->add('cin')
		->add('nationalite')
		->add('sexe')
		->add('adresse')
		->add('mail')
		->add('tel')
		;
	}
}