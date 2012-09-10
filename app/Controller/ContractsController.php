<?php
App::uses('AppController', 'Controller');
/**
 * Contracts Controller
 *
 * @property Contract $Contract
 */
class ContractsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Contract->recursive = 0;
		$this->set('contracts', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Contract->id = $id;
		if (!$this->Contract->exists()) {
			throw new NotFoundException(__('Invalid contract'));
		}
		$this->set('contract', $this->Contract->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Contract->create();
			if ($this->Contract->save($this->request->data)) {
				$this->Session->setFlash(__('The contract has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contract could not be saved. Please, try again.'));
			}
		}
		$titles = $this->Contract->Title->find('list');
		$title2s = $this->Contract->Title2->find('list');
		$this->set(compact('titles', 'title2s'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Contract->id = $id;
		if (!$this->Contract->exists()) {
			throw new NotFoundException(__('Invalid contract'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Contract->save($this->request->data)) {
				$this->Session->setFlash(__('The contract has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contract could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Contract->read(null, $id);
		}
		$titles = $this->Contract->Title->find('list');
		$title2s = $this->Contract->Title2->find('list');
		$this->set(compact('titles', 'title2s'));
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
		$this->Contract->id = $id;
		if (!$this->Contract->exists()) {
			throw new NotFoundException(__('Invalid contract'));
		}
		if ($this->Contract->delete()) {
			$this->Session->setFlash(__('Contract deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Contract was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
