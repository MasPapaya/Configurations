<?php

/**
 * Settings Controller
 *
 * @property Setting $Setting
 * @property PaginatorComponent $Paginator
 */
class SettingsController extends ConfigurationsAppController {

	/**
	 * Components
	 *
	 * @var array
	 */
	public function beforeFilter() {
		parent::beforeFilter();
//		$this->loadModel('Configurations.Setting');
	}

	public $components = array('Paginator');
	public $uses = array('Configurations.Setting');

	/**
	 * index method
	 *
	 * @return void
	 */
	public function admin_index() {
		$this->Setting->recursive = 0;
		$this->set('settings', $this->Paginator->paginate());
		
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function admin_add() {


		if ($this->request->is('post')) {
			$this->Setting->create();
			if ($this->Setting->save($this->request->data)) {
				$this->Session->setFlash(__('The setting has been saved.'), 'flash/success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The setting could not be saved. Please, try again.'), 'flash/warning');
			}
		}
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_edit($id = null) {
		if (!$this->Setting->exists($id)) {
			throw new NotFoundException(__('Invalid setting'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Setting->save($this->request->data)) {
				$this->Session->setFlash(__('The setting has been saved.'), 'flash/success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The setting could not be saved. Please, try again.'), 'flash/warning');
			}
		} else {
			$options = array('conditions' => array('Setting.' . $this->Setting->primaryKey => $id));
			$this->request->data = $this->Setting->find('first', $options);
		}
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_delete($id = null) {
		$this->Setting->id = $id;
		if (!$this->Setting->exists()) {
			throw new NotFoundException(__('Invalid setting'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Setting->delete()) {
			$this->Session->setFlash(__('The setting has been deleted.'), 'flash/success');
		} else {
			$this->Session->setFlash(__('The setting could not be deleted. Please, try again.'), 'flash/warning');
		}
		return $this->redirect(array('action' => 'index'));
	}

}
