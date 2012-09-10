<?php
App::uses('AppController', 'Controller');
/**
 * VendorCats Controller
 *
 * @property VendorCat $VendorCat
 */
class VendorCatsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->VendorCat->recursive = 0;
		$this->set('vendorCats', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->VendorCat->id = $id;
		if (!$this->VendorCat->exists()) {
			throw new NotFoundException(__('Invalid vendor cat'));
		}
		$this->set('vendorCat', $this->VendorCat->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->VendorCat->create();
			if ($this->VendorCat->save($this->request->data)) {
				$this->Session->setFlash(__('The vendor cat has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vendor cat could not be saved. Please, try again.'));
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
	public function edit($id = null) {
		$this->VendorCat->id = $id;
		if (!$this->VendorCat->exists()) {
			throw new NotFoundException(__('Invalid vendor cat'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->VendorCat->save($this->request->data)) {
				$this->Session->setFlash(__('The vendor cat has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vendor cat could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->VendorCat->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->VendorCat->id = $id;
		if (!$this->VendorCat->exists()) {
			throw new NotFoundException(__('Invalid vendor cat'));
		}
		if ($this->VendorCat->delete()) {
			$this->Session->setFlash(__('Vendor cat deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Vendor cat was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
