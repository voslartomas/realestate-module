<?php

namespace AdminModule\RealEstateModule;

/**
 * Description of RealEstatePresenter
 *
 * @author Tomáš Voslař <tomas.voslar at webcook.cz>
 */
class RealEstatePresenter extends BasePresenter {
	
	private $repository;
	
	private $page;
	
	protected function startup() {
		parent::startup();
	}

	protected function beforeRender() {
		parent::beforeRender();
		
	}
	
	public function actionDefault($idPage){
		
	}
	
	public function renderDefault($idPage){
		$this->reloadContent();
		
		$this->template->page = $this->page;
		$this->template->idPage = $idPage;
	}
	
}